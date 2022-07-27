<template>
<!-- <slot /> -->

<Database>

<div class="border border-gray-500 bg-gray-300 p-3 pl-4 mt-3 rounded">
    <div class="flex justify-between">

 <div><b>Accounting</b> <span v-if="createFilterOpen">*required fields for creating a new entry</span></div>
        <div class="flex items-center gap-2 w-3/5 justify-end">
            <form @submit.prevent="form.get('/database/accounting/search')" class="flex h-8 m-0 p-0 w-3/5">
                <div class="xl:w-full flex justify-end w-full">
                    <div class="input-group relative flex items-stretch w-full">
                    <input v-model="form.search_string" type="search" class="form-control bg-gray-100 relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-black bg-white bg-clip-padding border border-solid border-gray-100 rounded transition ease-in-out m-0 focus:text-black focus:bg-white focus:border-gray-100 focus:outline-none border border-gray-500" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">

                    <div class="mb-3">
                        <select v-model="form.search_row" class="form-select x-3 h-8 bg-gray-100 text-black text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-100 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-200 active:shadow-lg transition duration-150 ease-in-out flex items-center border border-gray-500" aria-label="Default select example">
                            <option value="item" selected>Article/Title</option>
                            <option value="media">Category</option>
                            <option value="producer">Producer</option>
                            <option value="keywords">Keywords</option>
                            <option value="location_a">Location A</option>
                            <option value="purchase_date">Ac. Date</option>
                            <option value="misc">Misc/Doc</option>
                        </select>
                    </div>
                    
                    <button class="btn px-6 py-2.5 bg-gray-100 text-white font-medium text-xs leading-tight border border-gray-500 uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="sumbit" id="button-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="black" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                    </div>
                </div>
            </form>
                <Link :href="route('database/accounting.filter')">Last Entries</Link>
                <div>|</div>
                <!-- <Link class="text-stone-600" href="/database/accounting/filter">Filter</Link> -->
                <Link class="text-stone-600" href="/database/accounting/statistic">Statistic</Link>
                <!-- <button class="" type="button" @click='createFilterOpenSwitcher'><span v-if="createFilterOpen"><b>Create/Filter</b></span><span v-else>Create/Filter</span></button> -->

                <!-- <Link :href="route('database.index')">ROBOTICS</Link> -->

                <!-- <button class="" type="button" @click='lastEntriesOpenSwitcher'><span v-if="lastEntriesOpen"><b>Last Entries</b></span><span v-else>Last Entries</span></button> -->
                
                <Link class="text-stone-600" href="/database/accounting/create">Add Entry</Link>

            <!-- <button class="" type="button" @click='statisticOpenSwitcher'><span v-if="statisticOpen"><b>Statistic</b></span><span v-else>Statistic</span></button> -->
        </div>
    </div>
</div>

<!-- <AccountingCreateFilter v-if="createFilterOpen"/>
<AccountingList v-if="lastEntriesOpen"/>
<AccountingStatistic v-if="statisticOpen"/> -->
<slot />

</Database>



</template>

<script setup>

import Index from '../../../Layouts/Index.vue'
import Database from '../Database.vue'
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps(['entries'])

console.log(props.entries)

import { ref } from 'vue';

    const form = useForm({
        search_string: props.misc,
        search_row: 'item',
    });



// import AccountingCreateFilter from './AccountingCreateFilter.vue'
// import AccountingList from './AccountingList.vue'
// import AccountingStatistic from './AccountingStatistic.vue'


// defineEmits(['CreateFilterOpen']);

// let createFilterOpen = ref(false);
// let lastEntriesOpen = ref(false);
// let statisticOpen = ref(false);

// function createFilterOpenSwitcher() {
//     createFilterOpen.value = !createFilterOpen.value;
// }

// function lastEntriesOpenSwitcher() {
//     lastEntriesOpen.value = !lastEntriesOpen.value;
// }

// function statisticOpenSwitcher() {
//     statisticOpen.value = !statisticOpen.value;
// }

</script>
