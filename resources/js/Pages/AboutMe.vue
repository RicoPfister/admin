<template>

<index @handleScroll="log">

<!-- sidebar -->
<!-- heading loader -->
<div id="headingOverview" class="fixed left-0 top-0 h-screen w-[300px] border-r">
    <div class="text-3xl font-bold pl-5 border-b border-black">About Me</div>
    <template v-for="(headingTop, index) in headingsTop" :key="headingTop">
        <!-- headingpointer -->
        <div class="absolute leading-none pl-5" :style="{top: headingTop[0]+'px'}">{{ headingTop[1] }}</div>
    </template>
    <div :style="{top: scrollTop+'px', height: pointerHeight+'px'}" class="relative bg-dark w-79 bg-gray-500/20 border-l-8 border-blue-600"></div>
</div>

<!-- content -->
<div id="scrollMainAreaAboutMe" class="ml-[170px] w-3/5 p-0 m-0">
    <h1>Overview</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <br>
    <br>
    <br>
    <br>
    <br>
        <h1>Overview</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>

    <br>
    <br>
    <br>
        <br>
    <br>
           <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <h1>Overview3</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>

    <br>
        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <h1>Overview</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>

    <br>
    <h1>Ende</h1>
</div>

</index>

</template>

<script setup>

import { ref, onMounted, computed  } from 'vue';

import Index from '../Layouts/Index.vue'

let scrollTop = ref('0');
let pointerHeight = ref('0');
let headingsTop = ref([]);
let event = ref([]);
let OverviewVeewHeight = ref('0');

// sidebar heading pointer
function log(e) {

    // let sidebarHeadingView = document.getElementById('headingOverview');
    // console.log(sidebarHeadingView.getBoundingClientRect());

    // pointer height
    pointerHeight.value = ((e.target.clientHeight-37-16)*(1/e.target.scrollHeight*(e.target.clientHeight)));
    // console.log(pointerHeight)

    // pointer top position
    scrollTop.value = Math.round(((e.target.clientHeight-37)-pointerHeight.value) / ((e.target.scrollHeight)-(e.target.clientHeight)) * (e.target.scrollTop))
    event.value = e;

    console.log(e.target.clientHeight);
    console.log(pointerHeight.value);
    console.log(scrollTop.value);
    console.log(e.target.scrollHeight-e.target.clientHeight);


    }



onMounted(() => {
    let h1 = document.querySelectorAll('h1');
    let scrollProperties = document.getElementById('scrollMainAreaAboutMe');
    // console.log(scrollProperties.offset.top)
    let headingOverview = document.getElementById('headingOverview');

    OverviewVeewHeight.value = headingOverview.getBoundingClientRect().height;

    // sidebar heading overview generator
    [].forEach.call(h1, function(h1) {

        let headingPixel = h1.getBoundingClientRect().top-80;

        // console.log(headingPixel)

        let areaRartio = scrollProperties.getBoundingClientRect().height/headingOverview.getBoundingClientRect().height

        // console.log(h1.getBoundingClientRect())

        const headingPosition = Math.round(((headingOverview.getBoundingClientRect().height-37-16) * (1/(scrollProperties.getBoundingClientRect().height-24+80) * headingPixel))+37)

        // console.log((scrollProperties.getBoundingClientRect().height)-24);
        // console.log(Math.round((headingOverview.getBoundingClientRect().height-37) /1));
        // console.log(headingPixel);
        // console.log((headingPosition));
        // console.log(1/(scrollProperties.getBoundingClientRect().height-24) * headingPixel);
        // console.log(headingOverview.getBoundingClientRect().height);

        headingsTop.value.push([headingPosition, h1.innerText]);
    });

});

</script>
