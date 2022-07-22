<template>
<Head>
<title>Rico Pfister</title>
<meta name="Rico Pfister" content="Rico Pfister">
</Head>

<WebsiteNav @databaseOpenSwitcher="databaseOpen=!databaseOpen"/>

<div class="flex h-screen overflow-y-scroll bg-slate-300">
    <div class="container mx-auto mt-20">

        <slot />
        <div class="h-20"></div>
    </div>
</div>

</template>

<script setup>

import { Head } from '@inertiajs/inertia-vue3'
import { ref } from 'vue';

import WebsiteNav from './WebsiteNav.vue'

defineEmits(['accountingOpenSwitcher', 'accountingOpen']);

let databaseOpen = ref(false);

const props = defineProps(['accountingOpen', 'databaseOpen']);

</script>




