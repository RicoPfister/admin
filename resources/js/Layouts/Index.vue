<template>
<Head>
<title>Rico Pfister</title>
<meta name="Rico Pfister" content="Rico Pfister">
</Head>

<WebsiteNav @databaseOpenSwitcher="databaseOpen=!databaseOpen"/>

<div class="flex h-screen overflow-y-scroll bg-slate-300" @scroll.native="$emit('handleScroll', $event)">
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

defineEmits(['accountingOpenSwitcher', 'accountingOpen', 'handleScroll']);

let databaseOpen = ref(false);
let scrollTop = ref('abc');



// function handleScroll (e) {
//     scrollTop.value = '123';
// }

// scrollTop.value = '123';

defineProps(['accountingOpen', 'databaseOpen', 'handleScroll']);

</script>




