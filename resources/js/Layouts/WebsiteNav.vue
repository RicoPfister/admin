<template>
<div class="fixed flex justify-center w-full gap-2 z-50 h-0">

    <div :class="top2" class="relative gap-2 duration-500 border-black">
        <div>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">
                 <Link href="/">Home</Link>
            </div>
        </div>
    </div>

    <div :class="top1" class="relative gap-2 duration-500 border-black">
        <div class="" @mouseover='OverMainNav1' @mouseout='OutMainNav1'>
            <div class="w-52 h-[145px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">
                 <Link href="/aboutme">About Me</Link>
                <br>Work Experience<br>Skills<br>Hobbies<br>Social Engagements</div>
            <div class="w-52 flex border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 justify-center">
                About Me&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 duration-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path class="duration-700" stroke-linecap="round" stroke-linejoin="round" :d="menuArror1" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </div>

    <div :class="top2" class="relative gap-2 duration-500 border-black">
        <div>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">
                 <Link href="/database">Rico Database</Link>
            </div>
        </div>
    </div>

    <div :class="top3" class="relative gap-2 duration-500 border-black">
        <div>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 grid content-end">Rico AI</div>
        </div>
    </div>

    <div :class="top4" class="relative gap-2 duration-500 border-black">
        <div class="" @mouseover='OverMainNav4' @mouseout='OutMainNav4'>
            <div class="w-52 h-[95px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3">Adventure Game<br>Cartoons<br>Archive</div>
            <div class="w-52 flex border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 justify-center">
                Other Projects&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 duration-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path class="duration-700" stroke-linecap="round" stroke-linejoin="round" :d="menuArror2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </div>

    <div :class="top5" class="relative gap-2 duration-500 border-black">
        <div>
            <div class="w-52 h-[170px] border-green-100 border-l-4 border-r-4 pl-5 bg-green-100 pt-3"></div>
            <div class="w-52 border-green-200 border-l-4 border-r-4 border-b-4 rounded-b-3xl text-center bg-green-200 justify-center">Contact</div>
        </div>
    </div>
</div>

</template>

<script setup>

import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3'

// Get a reference to the element that you want to work with
let sideMenu = document.getElementById('main-menu');

// Set up an event handler. Notice that we don't use "on" in front
// of the event name when doing it this way.

let top1 = ref('-top-[145px]');
let top2 = ref('-top-[170px]');
let top3 = ref('-top-[170px]');
let top4 = ref('-top-[95px]');
let top5 = ref('-top-[170px]');
let menuArror1 = ref('M19 9l-7 7-7-7');
let menuArror2 = ref('M19 9l-7 7-7-7');

function OverMainNav1(){
top1.value = 'top-0';
menuArror1.value = 'M5 15l7-7 7 7'
};

function OverMainNav4(){
top4.value = 'top-0';
menuArror2.value = 'M5 15l7-7 7 7'
};

function OutMainNav1(){
top1.value = '-top-[145px]';
menuArror1.value = 'M19 9l-7 7-7-7'
};

function OutMainNav4(){
top4.value = '-top-[95px]';
menuArror2.value = 'M19 9l-7 7-7-7'
};

</script>


