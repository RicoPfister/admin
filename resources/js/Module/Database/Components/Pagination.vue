<template>
  <div v-if="links.length > 3">
    <div class="flex flex-wrap justify-center">
        <template v-for="(link, key) in links">
            <div v-if="link.url === null" :key="key" class="mr-1 mb-1 px-4 py-2 text-sm leading-4 text-gray-400 border rounded" v-html="link.label" />
            <inertia-link v-else :key2="key" class="mr-1 mb-1 px-4 py-2 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500" :class="{ 'bg-white': link.active }" :href="link.url" v-html="link.label" preserve-state />
        </template>
    </div>
  </div>
</template>

<script setup>
import {InertiaLink} from "@inertiajs/inertia-vue3";

const props = defineProps({
links: Array,
})

</script>
