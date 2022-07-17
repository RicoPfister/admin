<template>
    <Head>
    <title>Rico Admin</title>
    <meta name="Rico Admin" content="Rico Admin">
    </Head>

<div class="flex h-screen bg-lime-50">

    <div class="container mx-auto mt-20 mb-3">
        <Nav />
        <!-- <Create /> -->
        <!-- <Filter /> -->
        <List />
        <!-- <Detail /> -->
    </div>

</div>


</template>

<script setup>

import { Head } from '@inertiajs/inertia-vue3'
import Nav from '../Components/Nav.vue'
// import Create from '../Components/Create.vue'
// import Filter from '../Components/Filter.vue'
import List from '../Components/List.vue'
// import Detail from '../Components/Detail.vue'

</script>




