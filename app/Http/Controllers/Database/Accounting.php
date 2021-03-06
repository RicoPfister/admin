<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Document;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class Accounting extends Controller
{
    public function filter(Request $request)

    {
        if(Inventory::count()>1){

            $misc = [];

            if (isset($request->search_row)){
                $misc['search_string'] = $request->search_string;
                $entries = Inventory::where($request->search_row, '=', $request->search_string)->orderByDesc('updated_at')->paginate(15);
            }

            elseif (isset($request->sort)){
                // dd($entries = Inventory::orderByDesc('updated_at'));
                // $test123 = $request->sort_array->getCollection()->sortBy('item');
                dd($request->sort_array);
            }  

            elseif(isset($request->media)){
                $entries = Inventory::where('media', '=', $request->media)->orderByDesc('updated_at')->paginate(15);
            }

            elseif (isset($request->producer)){
                $entries = Inventory::where('producer', '=', $request->producer)->orderByDesc('updated_at')->paginate(15);
            }

            elseif(isset($request->keywords)){
                $entries = Inventory::where('keywords', '=', $request->keywords)->orderByDesc('updated_at')->paginate(15);
            }

            elseif(isset($request->location_a)){
                $entries = Inventory::where('location_a', '=', $request->location_a)->orderByDesc('updated_at')->paginate(15);
            }

            elseif(isset($request->purchase_date)){
                $entries = Inventory::where('purchase_date', '=', $request->purchase_date)->orderByDesc('updated_at')->paginate(15);
            }

            else $entries = Inventory::orderByDesc('updated_at')->paginate(15);

            $misc['totalDBEntries'] = Inventory::count();
            $misc['lastDBUpdate'] = Inventory::orderByDesc('updated_at')->first()->updated_at;
            $misc['lastDBUpdateHuman'] = Inventory::orderByDesc('updated_at')->first()->updated_at->diffForHumans();

        }

        return Inertia::render('Database/Accounting/Filter', ['entries' => $entries, 'misc' => $misc]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'item' => 'required',
            'media' => 'required',
            'purchase_date' => 'required',
            'price' => 'required',
            'location_a' => 'required',
            // 'documentsBill' => 'file|max:2000',
            // 'documentsCorrespondence' => 'file|max:2000',
            // 'documentsMedia' => 'file|max:2000',
            // 'documentsOthers' => 'file|max:2000',
        ]);

            $entry = new Inventory();
            // $comment->user_id = Auth::user()->id;
            $entry->item = $request->item;
            $entry->media = $request->media;
            if(isset($request->keywords)){
                $entry->keywords = $request->keywords;
            }
            if(isset($request->producer)){
                $entry->producer = $request->producer;
            }
            $entry->purchase_date = $request->purchase_date;
            $entry->price = $request->price;
            $entry->location_a = $request->location_a;
            if(isset($entry->location_b)){
                $entry->location_b = $request->location_b;
            }
            if(isset($entry->discard_date)){
                $entry->discard_date = $request->discard_date;
            }
            if(isset($entry->voucher)){
                $entry->voucher = $request->voucher;
            }
            if(isset($entry->rent)){
                $entry->rent = $request->rent;
            }
            $entry->save();

            // dd($request->documentsBill);

            if(isset($request->documentsBill)) {
                foreach($request->file('documentsBill') as $dataString) {

                    // dd($entry);

                    $entry2 = new Document();
                    $entry2->path = $dataString->hashName();
                    $entry2->extension = $dataString->extension();
                    $entry2->size = $dataString->getSize();
                    $entry2->entry_id = $entry->id;
                    $entry2->save();
                }

                foreach($request->file('documentsBill') as $dataString2) {
                    Storage::disk('local')->put('public/images/inventory/', $dataString2);
                }
            }

            if(isset($request->documentsCorrespondence)) {
                foreach($request->file('documentsCorrespondence') as $dataString) {

                    // dd($entry);

                    $entry3 = new Document();
                    $entry3->path = $dataString->hashName();
                    $entry3->extension = $dataString->extension();
                    $entry3->size = $dataString->getSize();
                    $entry3->entry_id = $entry->id;
                    $entry3->save();
                }

                foreach($request->file('documentsCorrespondence') as $dataString2) {
                    Storage::disk('local')->put('public/images/inventory/', $dataString2);
                }
            }

            if(isset($request->documentsMedia)) {
                foreach($request->file('documentsMedia') as $dataString) {

                    // dd($entry);

                    $entry4 = new Document();
                    $entry4->path = $dataString->hashName();
                    $entry4->extension = $dataString->extension();
                    $entry4->size = $dataString->getSize();
                    $entry4->entry_id = $entry->id;
                    $entry4->save();
                }

                foreach($request->file('documentsMedia') as $dataString2) {
                    Storage::disk('local')->put('public/images/inventory/', $dataString2);
                }
            }

            if(isset($request->documentsOthers)) {
                foreach($request->file('documentsOthers') as $dataString) {

                    // dd($entry);

                    $entry5 = new Document();
                    $entry5->path = $dataString->hashName();
                    $entry5->extension = $dataString->extension();
                    $entry5->size = $dataString->getSize();
                    $entry5->entry_id = $entry->id;
                    $entry5->save();
                }

                foreach($request->file('documentsOthers') as $dataString2) {
                    Storage::disk('local')->put('public/images/inventory/', $dataString2);
                }
            }

            return redirect('/databaselist');
    }

    public function search(Request $request)
    {
        $searchString = $request->search_string;
        $searchRow = $request->search_row;

        // save data in session
        $request->session()->put('search_string',$searchString);
        $request->session()->put('search_cat', $searchRow);

        // dd($request);

        // open default blade and pass arrays
        // return view('layouts/default', ['searchResult' => $searchResult]);
        return redirect('/database/accounting/filter');

    }
}
