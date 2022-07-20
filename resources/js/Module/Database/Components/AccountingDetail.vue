<template>

<div class="container mx-auto mt-3 mb-3">
    <div v-for="entry in $page.props.entries" class="border border-gray-500 bg-gray-100 p-3 pl-4 mb-3 rounded">
        <div class="grid grid-cols-10 py-2">
            <div class="col-span-9">
                <div class="grid grid-cols-4">
                    <div class="col-span-2 text-gray-500">Article: <span class="text-gray-800">{{ entry['item'] }}</span></div>
                    <div class="col-span-2">Producer: <span class="text-gray-800">{{ entry['producer'] }}</span></div>
                </div>
                <div class="text-gray-500">Keyword: <span class="text-gray-800">{{ entry['keyword']}}</span></div>
                    <div class="grid grid-cols-12">
                    <div class="col-span-2 text-gray-500">Entry ID: <span class="text-gray-800">{{ entry['id'] }}</span></div>
                    <div class="col-span-2 text-gray-500">Media: <span class="text-gray-800">{{ entry['media'] }}</span></div>
                    <div class="col-span-3 text-gray-500">Purchase Date: <span class="text-gray-800">{{ entry['purchase_date']  }}</span></div>
                    <div class="col-span-2 text-gray-500">Price: <span class="text-gray-800">{{ entry['price']}}</span></div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="col-span-1 text-gray-500">Location A: <span class="text-gray-800">{{ entry['location_a'] }}</span></div>
                    <div class="col-span-1 text-gray-500">Location B: <span class="text-gray-800">{{ entry['location_b'] }}</span></div>
                </div>
            </div>
            <div class="col-span-1 grid justify-end">
                <div>Article photo:</div>
                <!-- <div class="flex justify-center"><img class="w-16 h-16" :src="'/storage/images/inventory/'+entry.documents.split(';')[0].slice(2)" alt="article photo"></div> -->
            </div>
        </div>
    </div>
</div>

</template>
