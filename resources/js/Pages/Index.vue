<script></script>

<template>
    <form @submit.prevent="form.post('/store')" class="flex flex-col h-100% bg-lime-50">
        <div class="container mx-auto mt-20 mb-20">
            <div class="border border-gray-500 bg-gray-300 p-3 pl-4">
                <div class="border-b border-black pb-2">Inventory</div>
                    <div class="pt-2 flex justify-between items-end">
                        <div class="flex gap-2">
                            <div class="flex flex-col w-80">
                                <label for="item">Article/Title</label>
                                <input type="text" id="item" v-model="form.item" />
                            </div>
                            <div class="flex flex-col w-40">
                                <label for="category">Category</label>
                                <input type="text" id="category" v-model="form.category" />
                            </div>
                            <div class="flex flex-col w-52">
                                <label for="description">Description</label>
                                <input type="text" id="description" v-model="form.description" />
                            </div>
                            <div class="flex flex-col w-40">
                                <label for="article">Producer</label>
                                <input type="text" id="article" v-model="form.article" />
                            </div>
                            <div class="flex flex-col w-36">
                                <label for="purchase_date">Purchase Date</label>
                                <input type="date" id="purchase_date" v-model="form.purchase_date"  />
                            </div>
                            <div class="flex flex-col w-20">
                                <label for="price">Price</label>
                                <input type="text" id="price" v-model="form.price" />
                            </div>
                            <div class="flex flex-col w-36">
                                <label for="location_a">Location A</label>
                                <input type="text" id="location_a" v-model="form.location_a" />
                            </div>
                            <div class="flex flex-col w-36">
                                <label for="location_b">Location B</label>
                                <input type="text" id="location_b" v-model="form.location_b" />
                            </div>
                            <!-- <div class="flex flex-col col-span-2">
                                <label for="photo">Article photo:</label>
                                <input id="photo" type="file" @input="form.photo = $event.target.files[0]" />
                            </div> -->
                            </div>
                            <div class="">
                                <button type="submit">Add</button>
                            </div>
                        </div>
                </div>
            <div class="mt-5 border border-gray-500 bg-gray-300 p-5">
                <div class="border-b border-black pb-2">Inventory - Article photos</div>
                <div v-for="photo in $page.props.photos" class="flex justify-center pt-5"><img :src="'/storage/images/inventory/'+photo.photo" alt="random image"></div>
            </div>
        </div>

    </form>

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
            photo: null,
        });

        function submit() {
            Inertia.post("/store", store.store);
        }

        return { form };
    },
};
</script>
