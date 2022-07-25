<template>
<slot />

<div class="border border-gray-500 bg-gray-300 p-3 pl-4 mt-3 rounded">
    <div class="flex justify-between">

 <div><b>Accounting</b> <span v-if="createFilterOpen">*required fields for creating a new entry</span></div>
        <div class="flex">
            <button class="" type="button" @click='createFilterOpenSwitcher'><span v-if="createFilterOpen"><b>Create/Filter</b></span><span v-else>Create/Filter</span></button>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <!-- <Link :href="route('database.index')">ROBOTICS</Link> -->
            <button class="" type="button" @click='lastEntriesOpenSwitcher'><span v-if="lastEntriesOpen"><b>Last Entries</b></span><span v-else>Last Entries</span></button>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <button class="" type="button" @click='statisticOpenSwitcher'><span v-if="statisticOpen"><b>Statistic</b></span><span v-else>Statistic</span></button>
        </div>
    </div>
</div>

<AccountingCreateFilter v-if="createFilterOpen"/>
<AccountingList v-if="lastEntriesOpen"/>
<AccountingStatistic v-if="statisticOpen"/>

</template>

<script setup>

import { ref } from 'vue';

import AccountingCreateFilter from './AccountingCreateFilter.vue'
import AccountingList from './AccountingList.vue'
import AccountingStatistic from './AccountingStatistic.vue'

defineEmits(['CreateFilterOpen']);

let createFilterOpen = ref(false);
let lastEntriesOpen = ref(false);
let statisticOpen = ref(false);

function createFilterOpenSwitcher() {
    createFilterOpen.value = !createFilterOpen.value;
}

function lastEntriesOpenSwitcher() {
    lastEntriesOpen.value = !lastEntriesOpen.value;
}

function statisticOpenSwitcher() {
    statisticOpen.value = !statisticOpen.value;
}

</script>
