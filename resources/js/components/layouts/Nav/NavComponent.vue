<template>
    <nav class="flex items-center justify-between px-4 py-2 bg-white shadow-md">
        <!-- Logo -->
        <div class="flex items-center justify-center">
            <a href="/">
                <img src="/images/Ebuka.jpg" alt="Lorenzo" class="object-cover rounded-md h-8 w-8 lg:h-8 lg:w-8"
                    loading="lazy" />
            </a>
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <button @click="toggleMenu" class="md:hidden text-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-300">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Items -->
        <div :class="[
            'flex-col md:flex-row md:flex items-center font-semibold space-y-4 md:space-y-0 md:space-x-4',
            isMenuOpen ? 'flex' : 'hidden md:flex',
        ]"
            class="absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent z-10 shadow-md md:shadow-none">
            <div class="p-2 rounded-full hover:bg-gray-100">
                <a :href="isArticlePage ? '/' : '#hero'">Home</a>
            </div>
            <div class="p-2 rounded-full hover:bg-gray-100">
                <a :href="isArticlePage ? '/' : '#aboutMe'">About</a>
            </div>
            <div class="p-2 rounded-full hover:bg-gray-100">
                <a :href="isArticlePage ? '/' : '#background'">Background</a>
            </div>
            <div class="p-2 rounded-full hover:bg-gray-100">
                <a :href="isArticlePage ? '/' : '/articles'">Article</a>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref, computed } from "vue";
import { useRoute } from "vue-router";

const isMenuOpen = ref(false);
const route = useRoute();

// Check if current path is '/articles'
const isArticlePage = computed(() => {
    return route.path.includes('/articles');
});

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};
</script>

<style scoped>
/* Add any custom styles for navigation */
</style>