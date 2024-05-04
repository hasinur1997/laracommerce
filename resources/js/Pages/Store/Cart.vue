<script setup>
import CartItem from './CartItem.vue';

const items = [1, 3 ,4, 5, 6, 7, 34, 5, 5, 6, ,5 ,6 ,6 ,6 ,6 ,6 ,6 ,6 ];
</script>


<template>
    <div class="">
        <CartItem v-for="item in items" class="border-b border-gray-300 px-6"/>
    </div>


</template>
