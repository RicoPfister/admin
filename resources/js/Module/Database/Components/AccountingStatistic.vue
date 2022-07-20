<template>
<div class="container mx-auto mt-3 mb-3">
    <div class="border border-gray-500 bg-gray-100 p-3 pl-4 mb-3 rounded">
        <div class="">Total database entries: {{ $page.props.misc['totalDBEntries']}}</div>
        <div class="">Last database update: {{ $page.props.misc['lastDBUpdateHuman']}} ({{ formatDate($page.props.misc['lastDBUpdate'])}})</div>
    </div>
</div>
</template>

<script setup>
    import formatDate from '../../../Script/FormatDate.js'
</script>





