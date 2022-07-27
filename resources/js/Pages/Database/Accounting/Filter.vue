<template>

<Accounting>

<div class="container mx-auto mt-3 mb-3">
    <div class="border border-gray-500 bg-gray-100 p-2 pt-3 pl-4 rounded">

        <table class="text-left w-full table-fixed">
            <tr class="bg-gray-300">
                <!-- <th class="w-1/4">Article/Title</th> -->
                <th class="w-1/4"><Link :href="route('database/accounting.filter', { sort: 'item', sort_array: $page.props.entries.data})">Article/Title</Link></th>
                <th class="w-36">Category</th>
                <th class="w-60">Producer</th>
                <th class="grow">Keywords</th>
                <th class="w-52">Location A</th>
                <th class="w-24">Ac. Date</th>
                <th class="w-20">Misc/Doc</th>
            </tr>
            <tr v-for="entry in test123" :key="entry.id" class="even:bg-gray-100 odd:bg-gray-200" >
                <td class="truncate"><Link :href="route('database/accounting.detail', { id: entry['id']})">{{ entry['item'] }}</Link></td>
                <td class="truncate"><Link :href="route('database/accounting.filter', { media: entry['media']})">{{ entry['media'] }}</Link></td>
                <td class="truncate"><Link :href="route('database/accounting.filter', { poducer: entry['poducer']})">{{ entry['poducer'] }}</Link></td>
                <td class="truncate"><Link :href="route('database/accounting.filter', { keywords: entry['keywords']})">{{ entry['keywords'] }}</Link></td>
                <td class="truncate"><Link :href="route('database/accounting.filter', { location_a: entry['location_a']})">{{ entry['location_a'] }}</Link></td>
                <td class="truncate"><Link :href="route('database/accounting.filter', { purchase_date: entry['purchase_date']})">{{ entry['purchase_date'] }}</Link></td>
                <td class="truncate"><Link :href="route('database/accounting.filter', { misc: entry['misc']})">{{ entry['misc'] }}</Link></td>
            </tr>
        </table>
        <!-- <div>
            <div class="flex bg-gray-300">
                <div class="font-bold grow">Article</div>
                <div class="font-bold w-1/5">Producer</div>
                <div class="font-bold w-1/4">Keywords</div>
                <div class="font-bold w-36">Category</div>
                <div class="font-bold w-24">Ac. Date</div>
                <div class="font-bold w-24">Misc/Doc</div>
            </div>
            <div v-for="entry in $page.props.entries.data" :key="entry.id" class="flex bg-gray-200 even:bg-gray-100 odd:bg-gray-200">
                <div class="truncate grow"><Link :href="route('databasedetail.index')">{{ entry['item'] }}</Link></div>
                <div class="truncate w-1/5">{{ entry['producer'] }}</div>
                <div class="truncate w-1/4">{{ entry['keywords'] }}</div>
                <div class="truncate w-36">{{ entry['media'] }}</div>
                <div class="truncate w-24">{{ entry['purchase_date'] }}</div>
                <div class="truncate w-24">{{ entry['location_a'] }}</div>
            </div>
        </div> -->

        <Pagination class="flex justify-center mt-2 border-t pt-2" :links="$page.props.entries.links" />

    </div>

</div>

</Accounting>

</template>

<script setup>

import Pagination from '../../../Module/Database/Components/Pagination.vue'
import Accounting from './Accounting.vue'

import { Head } from '@inertiajs/inertia-vue3'
import { ref, computed } from 'vue';
import { Link, usePage } from "@inertiajs/inertia-vue3";

import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetDropdown from "@/Jetstream/Dropdown.vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps(['entries'])
// console.log(props.entries.data[0].item)

const daten = [{id: 11, name: 'Tom'}, {id: 33, name: 'Bill'}, {id: 22, name: 'Ana'}];

// const sorted = daten.sort(function (a, b) {
//     return a.age - b.age;
// });

// const test = ref(null)

// console.log(props.entries.data);
// console.log(sorted);

const test123 = computed(() => {
  return props.entries.data.sort(function(a, b){return b.item-a.item});
})

console.log(props.entries)

</script>


