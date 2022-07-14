<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // dd($request);

        // $request->validate([
        //     'article' => 'required',
        //     'purchase_date' => 'required',
        //     'location_a' => 'required',
        //     //  'photo' => 'required|mimes:jpeg,jpg,gif|max:2048',
        //     ]);

        // PHP helper function
        function debug_to_console($data) {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
        }
        // dd($request->file('documents'));



            $entry = new Inventory();
            // $comment->user_id = Auth::user()->id;
            $entry->item = $request->item;
            $entry->media = $request->media;
            $entry->keywords = $request->keywords;
            $entry->producer = $request->producer;
            $entry->purchase_date = $request->purchase_date;
            $entry->price = $request->price;
            $entry->location_a = $request->location_a;
            $entry->location_b = $request->location_b;

            $fileString = "";

            $dataString =[];
            foreach($request->file('documents') as $dataString) {

                $fileString .= $dataString->hashName().";";
            }

            $entry->documents = $fileString;

            $entry->save();

            foreach($request->file('documents') as $dataString) {
                Storage::disk('local')->put('public/images/inventory/', $dataString);
            }

            session()->flash('flash.banner', 'Your comment has been successfully sent.');
            session()->flash('flash.bannerStyle', 'success');

            // return Inertia::render('/', []);
            return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
