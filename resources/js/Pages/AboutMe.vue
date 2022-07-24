<template>

<index @handleScroll="log">

<!-- sidebar -->
<div id="headingOverview" class="fixed left-0 top-0 h-full w-[320px]">
    <template v-for="(headingTop, index) in headingsTop" :key="headingTop">
        <div class="absolute leading-none" :style="{top: headingTop[0]+'px'}">{{ headingTop[1] }}</div>
    </template>
    <div :style="'top:'+scrollTop+'px'" class="relative bg-dark w-79 h-[16px] bg-gray-500/20 "></div>
</div>

<!-- content -->
<div id="scrollMainAreaAboutMe" class="ml-[200px] w-3/5">
    <h1 id="test1">Titel 1</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>
    <br>
    <br>
    <br>
    <br>
    <h1 id="test2">Titel 2</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>
    <br>
    <h1 id="test2">Titel 3</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>
    <br>
    <h1 id="test1">Titel 1</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>
    <br>
    <br>
    <br>
    <br>
    <h1 id="test2">Titel 2</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>
    <br>
    <h1 id="test2">Titel 3</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quibusdam. Ratione quam consequatur, nihil, perferendis facilis, amet voluptatem quaerat quae aperiam illum perspiciatis? Repudiandae velit error autem nobis et ut?</p><br>
    <br>

</div>

</index>

</template>

<script setup>

import { ref, onMounted, computed  } from 'vue';

import Index from '../Layouts/Index.vue'

let scrollTop = ref('0');
let headingsTop = ref([]);
let event = ref([]);
let OverviewVeewHeight = ref('0');

function log(e) {
    // console.log('test');
// console.log(e);
    scrollTop.value = Math.round((e.target.clientHeight-16) / (e.target.scrollHeight-e.target.clientHeight) * (e.target.scrollTop))
    event.value = e;
}

onMounted(() => {
    let h1 = document.querySelectorAll('h1');
    let scrollProperties = document.getElementById('scrollMainAreaAboutMe');
    let headingOverview = document.getElementById('headingOverview');


    OverviewVeewHeight.value = headingOverview.getBoundingClientRect().height;

    [].forEach.call(h1, function(h1) {

        // console.log(h1.getBoundingClientRect())

        let headingPixel = h1.getBoundingClientRect().top;

        // console.log(headingPixel);

        let areaRartio = scrollProperties.getBoundingClientRect().height/headingOverview.getBoundingClientRect().height
        console.log(areaRartio);

        // const headingPercentage = Math.round(scrollProperties.getBoundingClientRect().height / scrollProperties.getBoundingClientRect().height * headingPixel)
        const headingPercentage = Math.round(headingOverview.getBoundingClientRect().height / scrollProperties.getBoundingClientRect().height * headingPixel)

        // console.log(headingPercentage)
        headingsTop.value.push([headingPercentage-83, h1.innerText]);
    });

    console.log(headingsTop.value);

    // console.log(headingsTop);
});

// const test = function computed() {
//     console.log(event.value);
//     return event.value;

// }

// const test = function computed() {
//     const emit = defineEmits(['handleScroll']);

//     console.log(emit("handleScroll"))
// }

// console.log(headingsTop.value)
// console.log(scrollTop.value)
</script>
