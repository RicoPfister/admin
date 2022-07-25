<template>
<Head>
<title>Rico Pfister</title>
<meta name="Rico Pfister" content="Rico Pfister">
</Head>

<WebsiteNav @databaseOpenSwitcher="databaseOpen=!databaseOpen"/>

<div  class="flex h-screen overflow-y-scroll bg-slate-300" @scroll.native="$emit('handleScroll', $event)">
    <div class="container mx-auto mt-20">

        <slot />
        <div class="h-20"></div>
    </div>
</div>

<!-- <AboutMe ref="wrapper"/> -->

</template>

<script setup>

import { Head } from '@inertiajs/inertia-vue3'
import { ref, onMounted, defineExpose } from 'vue';
import AboutMe from '../Pages/AboutMe.vue'

import WebsiteNav from './WebsiteNav.vue'

let myReference = ref(null);
// defineExpose({ toggle});

const emit = defineEmits(['handleScroll', 'toggle']);
// defineEmits(['accountingOpenSwitcher', 'accountingOpen', 'handleScroll']);

let databaseOpen = ref(false);
let scrollTop = ref('abc');

// function handleScroll (e) {
//     scrollTop.value = '123';
// }

// scrollTop.value = '123';

// defineProps(['accountingOpen', 'databaseOpen', 'handleScroll']);

// // onMounted(() => {console.log(myReference.value.scrollTop)})

  onMounted(() => {
     emit('toggle', 'test123');
  });

// const emit = defineEmits(['toggle']);

//   emit('toggle', 'test123');

const props = defineProps({
  test678: {
    type: String
  }
})

console.log(props.test678);

const count = ref(99);
defineExpose({ count });

</script>




