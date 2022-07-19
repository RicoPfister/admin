<template>
    <div class="fixed top-0 left-0 right-0 bottom-0 z-50 bg-slate-500/75 grid justify-items-center">
    <div class="p-3 border border-gray-500 bg-gray-300 h-fit w-1/2 mt-24 grid items-between">
            <div class="bg-gray-300 px-2">
                <div class="border-b border-black pb-2 mb-2"><b>Accounting- Add Misc</b></div>
                        <slot />
                <div class="flex justify-end items-end gap-2 pt-3 border-t border-black">
                    <button class="text-left w-fit bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded" type="button" @click.prevent="$emit('MiscPopUpCancel')">Cancel</button>
                    <button class="text-left w-fit bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded" type="button" @click.prevent="$emit('MiscPopUpClose')">Add</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

defineEmits(['MiscPopUpClose', 'MiscPopUpCancel']);

</script>

