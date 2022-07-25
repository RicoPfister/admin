<template>

<div class="container mx-auto mt-3 mb-3">
    <div class="border border-gray-500 bg-gray-100 p-2 pt-3 pl-4 rounded">

        <table class="text-left w-full table-fixed">
            <tr class="bg-gray-300">
                <th class="w-96 truncate ...">Article/Title</th>
                <th class="grow">Producer</th>
                <th class="w-80">Content/Keywords/Tags</th>
                <th class="w-36">Category</th>
                <th class="w-32">Ac. Date</th>
                <th class="w-1/10">Location A</th>
                <th class="w-20">Misc/Doc</th>
            </tr>
            <tr v-for="entry in $page.props.entries.data" :key="entry.id" class="even:bg-gray-100 odd:bg-gray-200">
                <td class="truncate">{{ entry['item']}}</td>
                <td class="truncate">{{ entry['producer']}}</td>
                <td class="truncate">{{ entry['keywords']}}</td>
                <td class="truncate">{{ entry['media']}}</td>
                <td class="truncate">{{ entry['purchase_date']}}</td>
                <td class="truncate">{{ entry['location_a']}}</td>
                <td class="truncate"></td>
            </tr>

        </table>

        <Pagination class="flex justify-center mt-2 border-t pt-2" :links="$page.props.entries.links" />

    </div>

</div>

</template>

<script setup>

import Pagination from './Pagination.vue'

import { Head } from '@inertiajs/inertia-vue3'
import { ref } from 'vue';

</script>


