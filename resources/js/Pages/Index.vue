<template>
    <Head>
    <title>Rico Admin</title>
    <meta name="Rico Admin" content="Rico Admin">
    </Head>

<div class="flex h-screen bg-lime-50">

    <div class="container mx-auto mt-20 mb-3">
        <Nav />
        <Accounting />
    </div>

</div>

</template>

<script setup>

import { Head } from '@inertiajs/inertia-vue3'
import Nav from '../Components/Nav.vue'
import Accounting from '../Components/Accounting.vue'

</script>




