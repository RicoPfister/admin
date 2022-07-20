<template>
<div :class="top" class="w-full flex justify-center fixed gap-2 duration-500">
    <div class="grid top-40" @mouseover='OverMainNav1' @mouseout='OutMainNav1'>
        <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Curriculum<br>Hobbies<br>Social Engagements</div>
        <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">About Me</div>
    </div>
    <div class="">
        <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
        <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">Website/Blog</div>
    </div>
    <div class="">
        <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
        <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">Rico AI</div>
    </div>
    <div class="">
        <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Rico Database<br>Adventure Game<br>Archive</div>
        <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">Other Projects</div>
    </div>
    <div class="">
        <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
        <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">Contact</div>
    </div>
</div>
</template>

<script setup>

import {computed} from 'vue';
import { ref } from 'vue';


// Get a reference to the element that you want to work with
let sideMenu = document.getElementById('main-menu');

// Set up an event handler. Notice that we don't use "on" in front
// of the event name when doing it this way.

let top = ref('top-0');

function OverMainNav1(){
top.value = 'top-0';
//        top = '-top-36';
//    console.log(top);
//    alert(top);


        // sideMenu.classList.remove('top-[-250px]');
        // sideMenu.classList.add('top-0');+
};
function OutMainNav1(){
top.value = '-top-[170px]';
        // sideMenu.classList.remove('top-0');
        // sideMenu.classList.add('top-[-250px]');
};

// const top = '-top-36';

</script>


