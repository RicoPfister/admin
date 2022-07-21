<template>
<Head>
<title>Rico Pfister</title>
<meta name="Rico Pfister" content="Rico Pfister">
</Head>

<WebsiteNav @databaseOpenSwitcher="databaseOpen=!databaseOpen"/>

<div class="flex h-screen overflow-y-scroll bg-lime-50">
    <div class="container mx-auto mt-20">
        <DatabaseNav :accountingOpen=accountingOpen @accountingOpenSwitcher="accountingOpen=!accountingOpen" v-if="databaseOpen"/>
        <Accounting  v-if="accountingOpen"/>
        <div class="h-20"></div>
    </div>
</div>
</template>

<script setup>

import { Head } from '@inertiajs/inertia-vue3'
import { ref } from 'vue';

import WebsiteNav from '../Module/Website/Components/WebsiteNav.vue'
import DatabaseNav from '../Module/Database/Components/DatabaseNav.vue'
import Accounting from '../Module/Database/Components/Accounting.vue'

defineEmits(['accountingOpenSwitcher', 'accountingOpen']);

let accountingOpen = ref(false);
let databaseOpen = ref(false);

const props = defineProps(['accountingOpen', 'databaseOpen']);

</script>




