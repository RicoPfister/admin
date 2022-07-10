<script></script>

<template>
    <div class="flex h-screen bg-lime-50">
        <div class="m-auto border-gray-500 bg-gray-300 w-1/5 border p-5">
            <div class="border-b border-black pb-2">Admin - Dateneingabe</div>
            <div class="pt-2">
                <form @submit.prevent="form.post('/store')" class="flex flex-col">
                    <label for="first_name">Article:</label>
                    <input id="first_name" v-model="form.article" />
                    <label for="last_name">Purchase Date:</label>
                    <input id="last_name" v-model="form.purchase_date" />
                    <label for="email">Location A:</label>
                    <input id="email" v-model="form.location_a" />
                    <button type="submit">Senden</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style></style>

<script>
import { Inertia } from "@inertiajs/inertia";
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    setup() {
        const form = useForm({
            article: null,
            purchase_date: null,
            location_a: null,
        });

        function submit() {
            Inertia.post("/store", store.store);
        }

        return { form };
    },
};
</script>
