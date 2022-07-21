<template>

<div class="border border-gray-500 bg-gray-300 p-3 pl-4 rounded z-99">
    <div class="flex justify-between">
        <div><b>Rico Database</b></div>
        <div class="flex">
            <button class="text-stone-600" type="button" @click.prevent="$emit('accountingOpenSwitcher')"><span v-if="accountingOpen"><b>Accounting</b></span><span v-else>Accounting</span></button>

            <div>&nbsp;|&nbsp;</div>
            <div class="text-rose-600">Time Tracking</div>
            <div>&nbsp;|&nbsp;</div>
            <div class="text-rose-800">Contacts</div>
             <div>&nbsp;|&nbsp;</div>
            <div class="text-amber-600">Journal</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-blue-500">Psychology</div>
            <div>&nbsp;|&nbsp;</div>
            <div class="text-blue-700">Medicine</div>
            <div>&nbsp;|&nbsp;</div>
            <div class="text-purple-600">Engineering</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-green-800">Last Entries</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-green-800">Filter</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-green-600">Statistic</div>
            <div>&nbsp;&lt;&nbsp;&gt;&nbsp;</div>
            <div class="text-pink-500">Ricomizer</div>
        </div>
    </div>
</div>

</template>

<script setup>

defineEmits(['accountingOpenSwitcher']);

const props = defineProps(['accountingOpen']);

</script>
