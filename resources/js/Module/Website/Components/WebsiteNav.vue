<template>
<div class="fixed flex justify-center w-full gap-2">

    <div :class="top" class="relative gap-2 duration-500 border-black">
        <div class="" @mouseover='OverMainNav' @mouseout='OutMainNav'>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Curriculum<br>Hobbies<br>Social Engagements</div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">About Me</div>
        </div>
    </div>

    <div :class="top2" class="relative gap-2 duration-500 border-black">
        <div class="" @mouseover='OverMainNav2' @mouseout='OutMainNav2'>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Curriculum2<br>Hobbies<br>Social Engagements</div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">About Me</div>
        </div>
    </div>

    <div :class="top3" class="relative gap-2 duration-500 border-black">
        <div class="" @mouseover='OverMainNav3' @mouseout='OutMainNav3'>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Curriculum2<br>Hobbies<br>Social Engagements</div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">About Me</div>
        </div>
    </div>

    <div :class="top4" class="relative gap-2 duration-500 border-black">
        <div class="" @mouseover='OverMainNav4' @mouseout='OutMainNav4'>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Curriculum2<br>Hobbies<br>Social Engagements</div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">About Me</div>
        </div>
    </div>

    <div :class="top5" class="relative gap-2 duration-500 border-black">
        <div class="" @mouseover='OverMainNav5' @mouseout='OutMainNav5'>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Curriculum2<br>Hobbies<br>Social Engagements</div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">About Me</div>
        </div>
    </div>
</div>

<!-- <div :class="top" class="w-full flex justify-center fixed gap-2 duration-500">
    <div class="">
        <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
        <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">Rico AI</div>
    </div>
</div> -->
    <!-- <div class="">
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
    </div> -->

</template>

<script setup>

import {computed} from 'vue';
import { ref } from 'vue';


// Get a reference to the element that you want to work with
let sideMenu = document.getElementById('main-menu');

// Set up an event handler. Notice that we don't use "on" in front
// of the event name when doing it this way.

let top = ref('top-0');
let top2 = ref('top-0');
let top3 = ref('top-0');
let top4 = ref('top-0');
let top5 = ref('top-0');

function OverMainNav(){
top.value = 'top-0';
//        top = '-top-36';
//    console.log(top);
//    alert(top);


        // sideMenu.classList.remove('top-[-250px]');
        // sideMenu.classList.add('top-0');+
};

function OverMainNav2(){
top2.value = 'top-0';
//        top = '-top-36';
//    console.log(top);
//    alert(top);


        // sideMenu.classList.remove('top-[-250px]');
        // sideMenu.classList.add('top-0');+
};

function OverMainNav3(){
top3.value = 'top-0';
//        top = '-top-36';
//    console.log(top);
//    alert(top);


        // sideMenu.classList.remove('top-[-250px]');
        // sideMenu.classList.add('top-0');+
};

function OverMainNav4(){
top4.value = 'top-0';
//        top = '-top-36';
//    console.log(top);
//    alert(top);


        // sideMenu.classList.remove('top-[-250px]');
        // sideMenu.classList.add('top-0');+
};

function OverMainNav5(){
top5.value = 'top-0';
//        top = '-top-36';
//    console.log(top);
//    alert(top);


        // sideMenu.classList.remove('top-[-250px]');
        // sideMenu.classList.add('top-0');+
};


function OutMainNav(){
top.value = '-top-[170px]';
        // sideMenu.classList.remove('top-0');
        // sideMenu.classList.add('top-[-250px]');
};

function OutMainNav2(){
top2.value = '-top-[170px]';
        // sideMenu.classList.remove('top-0');
        // sideMenu.classList.add('top-[-250px]');
};

function OutMainNav3(){
top3.value = '-top-[170px]';
        // sideMenu.classList.remove('top-0');
        // sideMenu.classList.add('top-[-250px]');
};

function OutMainNav4(){
top4.value = '-top-[170px]';
        // sideMenu.classList.remove('top-0');
        // sideMenu.classList.add('top-[-250px]');
};

function OutMainNav5(){
top5.value = '-top-[170px]';
        // sideMenu.classList.remove('top-0');
        // sideMenu.classList.add('top-[-250px]');
};

// const top = '-top-36';

</script>


