<template>
<!-- <slot /> -->

<Database>

<div class="border border-gray-500 bg-gray-300 p-3 pl-4 mt-3 rounded">
    <div class="flex justify-between">

 <div><b>Accounting</b> <span v-if="createFilterOpen">*required fields for creating a new entry</span></div>
        <div class="flex">
            <!-- <Link class="text-stone-600" href="/database/accounting/filter">Filter</Link> -->
            <Link :href="route('database/accounting.filter')">Filter</Link>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <Link class="text-stone-600" href="/database/accounting/statistic">Statistic</Link>
            <!-- <button class="" type="button" @click='createFilterOpenSwitcher'><span v-if="createFilterOpen"><b>Create/Filter</b></span><span v-else>Create/Filter</span></button> -->

            <!-- <Link :href="route('database.index')">ROBOTICS</Link> -->

            <!-- <button class="" type="button" @click='lastEntriesOpenSwitcher'><span v-if="lastEntriesOpen"><b>Last Entries</b></span><span v-else>Last Entries</span></button> -->
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <Link class="text-stone-600" href="/database/accounting/create">Create</Link>

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

import { ref } from 'vue';

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
