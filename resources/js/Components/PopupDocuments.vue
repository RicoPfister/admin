<template>
    <div class="fixed top-0 left-0 right-0 bottom-0 grid content-center justify-center z-50 bg-slate-500/75">
        <div class="p-36 bg-slate-700">
            <slot />
            <button class="text-left w-fit bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded" type="button" @click.prevent="$emit('close')">Add Documents</button>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from "vue";
import { Inertia, Method } from "@inertiajs/inertia";
import { useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

defineEmits(['close']);

</script>

<style></style>

