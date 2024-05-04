<script setup>
import { Head } from '@inertiajs/vue3';
import Product from './Product.vue';
import Test from './Test.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Cart from './Cart.vue';
import Categories from './Categories.vue';

    const products = [1, 2, 3, 4, 5, 6, 7, 8, 9, 49, 59, 69, 69];

</script>
<template>

    <Head title="Store" />

    <!-- Navbar -->
    <header>
        <nav class="bg-white shadow py-2 fixed  w-full">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Navbar content -->
                <div class="w-2/12 flex items-center">
                    <img src="https://source.unsplash.com/a-blue-light-painting-of-an-infinite-sign-C8sH11WxjYE" class="h-11 w-11 rounded" alt="" />
                    <a href="" class="text-xl block">App</a>
                </div>
                <div class="w-8/12">
                    <input
                        type="text"
                        class="w-full rounded border border-gray-300 focus:outline-none focus:border-gray-400">
                </div>
                <div class="w-2/12">
                    <ul class="flex justify-around">
                        <li><a href="">Login</a></li>
                        <li><a href="">Register</a></li>
                        <li><a href="">Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container py-8">
            <!-- Flex layout for left sidebar, main content, and right panel -->
            <div class="flex">
                <!-- Left Sidebar (Categories) -->
                <div class="
                    w-1/6
                    h-screen
                    overflow-y-auto
                    fixed
                    left-0
                    top-15
                    mt-7
                    border-r border-gray-300
                ">
                    <!-- Sidebar content -->
                    <div class="p-6">
                        <h2 class="text-xl">Categories</h2>
                        <div class="py-6">

                            <Categories/>
                        </div>
                    </div>
                </div>

                <!-- Main Content (Products List) -->
                <div class="ml-60 mr-32 mt-7 box-border">
                    <!-- Main content -->
                    <div class="p-6">
                        <h2>Products</h2>
                        <i class="fa-solid fa-house"></i>
                        <div class="flex flex-wrap">
                            <Product v-for="product in products"/>
                        </div>
                    </div>
                </div>

                <!-- Right Panel (Product Cart) -->
                <div class="
                    w-1/5
                    h-full
                    fixed
                    right-0
                    top-15
                    mt-7
                    shadow-xl
                    z-9999
                ">
                    <!-- Right panel content -->
                   <div class="bg-stone-100	px-5 py-3">
                        <h2>10 Items</h2>
                   </div>
                   <div class="bg-lime-500	 text-white  px-5 py-3">
                        <h2>You have reduced delivery charge</h2>
                   </div>
                    <div class="h-96 overflow-y-auto">
                        <Cart/>
                    </div>
                    <div class="flex bg-red-400 text-white text-lg rounded justify-between px-6 py-3 m-3 border border-red-300 cursor-pointer">
                        <div class=""><h2>Place Order</h2></div>
                        <div class=""><h2>$38943</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>
