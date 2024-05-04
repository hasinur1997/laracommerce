<script setup>

const categories = ['Favourite', 'Food', 'Electronics', 'Personal Care', 'Baby Care', 'Helath & Wellness'];
</script>


<template>
    <ul class="flex flex-col">
        <li v-for="category in categories"><a href="">{{ category }}</a></li>
    </ul>
</template>
