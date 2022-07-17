<template>
    <Head>
    <title>Rico Admin</title>
    <meta name="Rico Admin" content="Rico Admin">
    </Head>
<!-- enctype="multipart/form-data" -->
    <form @submit.prevent="form.post('/store')" class="flex flex-col h-screen bg-lime-50">
        <div class="container mx-auto mt-20 mb-3">
            <div class="border border-gray-500 bg-gray-300 p-3 pl-4 rounded">
                <div class="flex justify-between border-b border-black pb-2">
                    <div><b>Inventory - Add</b> (*Required fields)</div>
                    <div class="flex">
                        <div class="text-stone-600">Accounting</div>
                        <div>&nbsp;|&nbsp;</div>
                        <div class="text-rose-800">Contacts</div>
                        <div>&nbsp;|&nbsp;</div>
                        <div class="text-rose-600">Facts</div>
                        <div>&nbsp;|&nbsp;</div>
                        <div class="text-amber-600">Journal</div>
                        <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
                        <div class="text-blue-500">Psychology</div>
                        <div>&nbsp;|&nbsp;</div>
                        <div class="text-blue-700">Medicine</div>
                        <div>&nbsp;|&nbsp;</div>
                        <div class="text-purple-600">Engineering</div>
                        <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
                        <div class="text-green-600">Statistic</div>
                        <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
                        <div class="text-pink-500">Ricomazier</div>
                    </div>
                </div>
                    <div class="">
                        <div class="flex pt-2">
                            <div class="flex flex-col w-1/3 mr-2">
                                <label for="item">Article/Title*:</label>
                                <input type="text" id="item" v-model="form.item" />
                                <div class="text-red-600" v-if="$page.props.errors.item">{{ $page.props.errors.item }}</div>
                            </div>
                            <div class="flex flex-col  w-1/4 mr-2">
                                <label for="producer">Producer:</label>
                                <input type="text" id="producer" v-model="form.producer" />
                                <div class="text-red-600" v-if="$page.props.errors.producer">{{ $page.props.errors.producer }}</div>
                            </div>
                            <div class="flex flex-col grow">
                                <label for="keywords">Keywords/Tags:</label>
                                <input type="text" id="keywords" v-model="form.keywords" />
                                <div class="text-red-600" v-if="$page.props.errors.keywords">{{ $page.props.errors.keywords }}</div>
                            </div>
                        </div>
                        <div class="flex pt-2">
                            <div class="flex flex-col mr-2">
                                <label for="category">Category*:</label>
                                <select id="category" form="category" v-model="form.media">
                                <option value="Administration">Administration</option>
                                <option value="Place">Place/Building</option>
                                <option value="Furniture">Furniture</option>
                                <option value="PassiveDevice">Passive Device</option>
                                <option value="ActiveDevice">Active Device</option>
                                <option value="Consumable">Consumable</option>
                                <option value="Book">Book</option>
                                <option value="Music">Music</option>
                                <option value="Software">Software</option>
                                <option value="Video">Video</option>
                                <option value="CategoryOthers">Others</option>
                                </select>
                                <div class="text-red-600" v-if="$page.props.errors.media">{{ $page.props.errors.media }}</div>
                            </div>
                            <div class="flex flex-col w-36 mr-2">
                                <label for="purchase_date">Acquisition Date*:</label>
                                <input type="date" id="purchase_date" v-model="form.purchase_date"  />
                                <div class="text-red-600" v-if="$page.props.errors.purchase_date">{{ $page.props.errors.purchase_date }}</div>
                            </div>
                            <div class="flex flex-col w-24 mr-2">
                                <label for="price">Price*</label>
                                <input type="text" id="price" v-model="form.price" />
                                <div class="text-red-600" v-if="$page.props.errors.price">{{ $page.props.errors.price }}</div>
                            </div>
                            <div class="flex flex-col w-36 mr-2 grow">
                                <label for="location_a">Location A*:</label>
                                <input type="text" id="location_a" v-model="form.location_a" />
                                <div class="text-red-600" v-if="$page.props.errors.location_a">{{ $page.props.errors.location_a }}</div>
                            </div>
                            <div class="flex flex-col w-36 mr-2 grow">
                                <label for="location_b">Location B:</label>
                                <input type="text" id="location_b" v-model="form.location_b" />
                                <div class="text-red-600" v-if="$page.props.errors.location_b">{{ $page.props.errors.location_b }}</div>
                            </div>
                            <div class="flex">
                                <div class="flex flex-col mr-2">
                                    <label for="photo">Misc:</label>
                                    <button class="text-left w-fit bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded" type="button" @click='MiscPopUp'>Add Documents</button>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsBill">{{ $page.props.errors.documentsBill }}</div>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsCorrespondence">{{ $page.props.errors.documentsCorrespondence }}</div>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsMedia">{{ $page.props.errors.documentsMedia }}</div>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsOthers">{{ $page.props.errors.documentsOthers }}</div>
                                </div>
                                <div class="flex flex-col mr-2">
                                    <label for="photo">Upload:</label>
                                    <button class="text-left w-fit bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded" type="button" @click='BrowseCheck'>Add Documents</button>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsBill">{{ $page.props.errors.documentsBill }}</div>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsCorrespondence">{{ $page.props.errors.documentsCorrespondence }}</div>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsMedia">{{ $page.props.errors.documentsMedia }}</div>
                                    <div class="text-red-600" v-if="$page.props.errors.documentsOthers">{{ $page.props.errors.documentsOthers }}</div>
                                </div>
                                <div class="flex flex-col mr-2">
                                    <label for="photo">Done:</label>
                                    <div class="text-left w-fit bg-green-400 hover:bg-gray-500 text-white font-bold py-2 px-4 h-fit rounded">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container mx-auto border border-gray-500 bg-gray-300 p-5 rounded">
                <div class="pb-2 border-b border-black "><b>Inentory - Database</b></div>

                <div v-for="entry in $page.props.entries" class="grid grid-cols-10 py-2 border-b border-black">
                    <div class="col-span-9">
                        <div class="grid grid-cols-4">
                            <div class="col-span-2 text-gray-500">Article: <span class="text-gray-800">{{ entry.item }}</span></div>
                            <div class="col-span-2">Producer: <span class="text-gray-800">{{ entry.producer }}</span></div>
                        </div>
                        <div class="text-gray-500">Keyword: <span class="text-gray-800">{{ entry.item }}</span></div>
                         <div class="grid grid-cols-12">
                            <div class="col-span-2 text-gray-500">Entry ID: <span class="text-gray-800">{{ entry.inventory_id }}</span></div>
                            <div class="col-span-2 text-gray-500">Media: <span class="text-gray-800">{{ entry.media }}</span></div>
                            <div class="col-span-3 text-gray-500">Purchase Date: <span class="text-gray-800">{{ entry.purchase_date  }}</span></div>
                            <div class="col-span-2 text-gray-500">Price: <span class="text-gray-800">{{ entry.price }}</span></div>
                        </div>
                            <div class="grid grid-cols-2">
                                <div class="col-span-1 text-gray-500">Location A: <span class="text-gray-800">{{ entry.location_a }}</span></div>
                                <div class="col-span-1 text-gray-500">Location B: <span class="text-gray-800">{{ entry.location_b }}</span></div>
                            </div>
                    </div>
                    <div class="col-span-1 grid justify-end">
                        <div>Article photo:</div>
                        <!-- <div class="flex justify-center"><img class="w-16 h-16" :src="'/storage/images/inventory/'+entry.documents.split(';')[0].slice(2)" alt="article photo"></div> -->
                    </div>
                </div>
            </div>
        </form>

                                   <PopupDocuments @closeAdd="isModalOpen = false" @closeCancel="cancelDocumentationUpload" v-if="isModalOpen">

                                    <div class="">
                                        <table class="table-auto w-3/4">
                                            <thead>
                                                <tr class="text-left">
                                                    <th>Document type:</th>
                                                    <th>Preview:</th>
                                                    <th>Choose at least one file from your computer:</th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <tr class="h-10">
                                                    <td>Bill/Receipt</td>
                                                    <td><div id="preview" class="border h-6 w-6"></div></td>
                                                    <td><input class="w-full" id="documents" type="file" @input="form.documentsBill = $event.target.files; Browse.PreviewFiles" multiple /></td>
                                                </tr>
                                                <tr class="h-10">
                                                    <td>Correspondence</td>
                                                    <td><div id="preview" class="border h-6 w-6"></div></td>
                                                    <td><input class="w-full" id="documents" type="file" @input="form.documentsCorrespondence = $event.target.files; Browse.PreviewFiles" multiple /></td>
                                                </tr>
                                                <tr class="h-10">
                                                    <td>Media</td>
                                                    <td><div id="preview" class="border h-6 w-6"></div></td>
                                                    <td><input class="w-full" id="documents" type="file" @input="form.documentsMedia = $event.target.files; Browse.PreviewFiles" multiple /></td>
                                                </tr>
                                                <tr class="h-10">
                                                    <td>Others</td>
                                                    <td><div id="preview" class="border h-6 w-6"></div></td>
                                                    <td><input class="w-full" id="documents" type="file" @input="form.documentsOthers = $event.target.files; Browse.PreviewFiles" multiple /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </PopupDocuments>

                                <PopupMisc @MiscPopUpClose="MiscPopUpOpen = false" @MiscPopUpCancel="cancelMiscUpload" v-if="MiscPopUpOpen">
                                    <div class="pb-2">
                                        <div class="mr-2 border-b border-black pb-2 mb-2">
                                            <div class="">
                                                <input type="date" id="misc" v-model="form.discard_date"  />
                                                <label for="misc">&nbsp;No longer in my possession since</label>
                                                <div class="text-red-600" v-if="$page.props.errors.discard_date">{{ $page.props.errors.discard_date }}</div>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" v-model="form.voucher">
                                            <label for="vehicle1">&nbsp;Voucher</label><br>
                                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car" v-model="form.rent">
                                            <label for="vehicle2">&nbsp;Rent</label><br>
                                        </div>

                                    </div>
                                </PopupMisc>

</template>

<script setup>
import { Inertia, Method } from "@inertiajs/inertia";
import { useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import { Head } from '@inertiajs/inertia-vue3'

import PopupDocuments from "../Components/PopupDocuments.vue";
import PopupMisc from "../Components/PopupMisc.vue";

import * as Browse from '../Script/PreviewFiles.js';

const data = new FormData();

    const form = useForm({
        item: null,
        media: null,
        keywords: null,
        producer: null,
        purchase_date: null,
        price: null,
        location_a: null,
        location_b: null,
        documentsBill: null,
        documentsCorrespondence: null,
        documentsMedia: null,
        documentsOthers: null,
        discard_date: null,
        voucher: null,
        rent: null,
    });

    //     const formDoc = useForm({
    //     documents: null,
    //     documentType: null,
    // });

    let isModalOpen = ref(false);
    let MiscPopUpOpen = ref(false);

    function BrowseCheck() {
        isModalOpen.value = true;
    }

    //     function submit() {
    //     Inertia.post("/store", store.store);
    // };

function submit() {
    Inertia.post("/store", store.store, {
    _method: 'put',
    avatar: form.avatar,
    item: form.item,
    keywords: form.keywords,
    purchase_date: form.purchase_date,
    price: form.price,
    location_a: form.location_a,
    location_b: form.location_b,
    documentsBill: form.documentsdocumentsBill,
    documentsCorrespondence: form.documentsCorrespondence,
    documentsOthers: form.documentsOthers,
    documentsMedia: form.documentsMedia,
    discard_date: form.discard_date,
    voucher: form.voucher,
    rent: form.rent,
});}


function cancelDocumentationUpload() {

    form.documentsBill = null;
    form.documentsCorrespondence = null;
    form.documentsOthers = null;

    isModalOpen.value = false;
}

function cancelMiscUpload() {

    MiscPopUpOpen.value = false;
}

function MiscPopUp() {
    MiscPopUpOpen.value = true;
}

</script>

<style>

</style>


