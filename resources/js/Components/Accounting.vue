<template>

<div class="border border-gray-500 bg-gray-300 p-3 pl-4 mt-3 rounded">
    <div class="flex justify-between">
        <div><b>Accounting</b></div>
        <div class="flex">
            <div class="text-black">Last Entries</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-green-800">Filter</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-green-600">Statistic</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-pink-500">Create</div>
        </div>
    </div>
</div>

<AccountingCreate />
<AccountingFilter />
<AccountingList />

</template>

<script setup>

import AccountingCreate from './AccountingCreate.vue'
import AccountingList from './AccountingList.vue'
import AccountingFilter from './AccountingFilter.vue'

</script>
