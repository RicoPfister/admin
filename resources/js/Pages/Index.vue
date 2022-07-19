<template>
    <Head>
    <title>Rico Admin</title>
    <meta name="Rico Admin" content="Rico Admin">
    </Head>

<div class="flex h-screen overflow-y-scroll bg-lime-50">

    <div class="container mx-auto mt-10">
        <Nav :accountingOpen=accountingOpen @accountingOpenSwitcher="accountingOpen=!accountingOpen"/>
        <Accounting  v-if="accountingOpen"/>
        <div class="h-20"></div>
    </div>



</div>



</template>

<script setup>

import { Head } from '@inertiajs/inertia-vue3'
import Nav from '../Components/Nav.vue'
import Accounting from '../Components/Accounting.vue'

import { ref } from 'vue';

defineEmits(['accountingOpenSwitcher', 'accountingOpen']);

let accountingOpen = ref(false);

function accountingOpenUse() {
    accountingOpen.value = !accountingOpen.value;
}

// const props = defineProps({
//   accountingOpen: String
// })

const props = defineProps(['accountingOpen']);

</script>




