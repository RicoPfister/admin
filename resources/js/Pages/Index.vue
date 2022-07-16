<template>
<!-- enctype="multipart/form-data" -->
    <form @submit.prevent="form.post('/store')" class="flex flex-col h-screen bg-lime-50">
        <div class="container mx-auto mt-20 mb-20">
            <div class="border border-gray-500 bg-gray-300 p-3 pl-4">
                <div class="flex justify-between border-b border-black pb-2">
                    <div><b>Inventory - Add</b></div>
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
                    <div class="pt-2 flex justify-between">
                        <div class="flex gap-2">
                            <div class="flex flex-col w-36">
                                <label for="item">Article/Title</label>
                                <input type="text" id="item" v-model="form.item" />
                            </div>
                        <div class="flex flex-col w-40">
                            <label for="category">Media</label>
                            <select id="category" form="category" v-model="form.media">
                            <option value="Book">Book</option>
                            <option value="Music">Music</option>
                            <option value="Software">Software</option>
                            <option value="Video">Video</option>
                            </select>
                        </div>
                            <div class="flex flex-col w-36">
                                <label for="keywords">Keywords</label>
                                <input type="text" id="keywords" v-model="form.keywords" />
                            </div>
                            <div class="flex flex-col w-40">
                                <label for="producer">Producer</label>
                                <input type="text" id="producer" v-model="form.producer" />
                            </div>
                            <div class="flex flex-col w-36">
                                <label for="purchase_date">Purchase Date</label>
                                <input type="date" id="purchase_date" v-model="form.purchase_date"  />
                            </div>
                            <div class="flex flex-col w-20">
                                <label for="price">Price</label>
                                <input type="text" id="price" v-model="form.price" />
                            </div>
                            <div class="flex flex-col w-36">
                                <label for="location_a">Location A</label>
                                <input type="text" id="location_a" v-model="form.location_a" />
                            </div>
                            <div class="flex flex-col w-36">
                                <label for="location_b">Location B</label>
                                <input type="text" id="location_b" v-model="form.location_b" />
                            </div>
                            <div class="flex flex-col col w-52">
                                <label for="photo">Upload:</label>
                                <button class="text-left w-fit bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded" type="button" @click='BrowseCheck'>Add Documents</button>

                        </div>
                    </div>
                    <div class="grid content-end">
                        <div class="text-left w-fit bg-green-400 hover:bg-gray-500 text-white font-bold py-2 px-4 h-fit rounded">
                            <button type="submit">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 border border-gray-500 bg-gray-300 p-5">
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
                        <div class="flex justify-center"><img class="w-16 h-16" :src="'/storage/images/inventory/'+entry.documents.split(';')[0].slice(2)" alt="article photo"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

                                   <PopupDocuments @close="isModalOpen = false" v-if="isModalOpen">
                                    <div class="grid content-between">
                                        <label class="" for="documentType">Document type:</label>
                                        <select id="documentType" form="category" class="h-8 py-0 mr-2 " v-model="form.documentsType">
                                            <option value="b">Bill/Receipt</option>
                                            <option value="c">Correspondence</option>
                                            <option value="o">Others</option>
                                        </select>
                                    </div>
                                    <div class="h-16 pr-3 grid content-end">
                                        <div id="preview" class="border h-8 w-8"></div>
                                    </div>
                                    <div class="grid content-between">
                                        <label for="documents">Send files from your computer:</label>
                                        <input class="w-full" id="documents" type="file" @input="form.documents = $event.target.files; Browse.PreviewFiles" multiple />
                                    </div>
                                </PopupDocuments>

</template>

<script setup>
import { Inertia, Method } from "@inertiajs/inertia";
import { useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

import PopupDocuments from "../Components/PopupDocuments.vue";
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
        documents: null,
        documentsType: null,
    });

    //     const formDoc = useForm({
    //     documents: null,
    //     documentType: null,
    // });

    let isModalOpen = ref(false);

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
     keywords: form.keywords,
      purchase_date: form.purchase_date,
       price: form.price,
        location_a: form.location_a,
        location_b: form.location_b,
                  documents: form.documents,
        documentsType: form.documentsType,
});}

// function submitDoc() {
//     Inertia.post("/store", store.store, {
//   _method: 'put',


// });}


</script>

<style>

</style>


