<script setup>
import { useEditorStore } from "../../store";
const articleStore = useEditorStore();
</script>

<template>
    <nav-component></nav-component>

    <!-- Show loading spinner when isLoading is true -->
    <div v-if="articleStore.isLoading" class="flex justify-center items-center h-screen">
        <svg class="animate-spin h-10 w-10 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 01-8 8z"></path>
        </svg>
    </div>

    <!-- Show articles when not loading -->
    <section class="bg-white dark:bg-gray-900 h-auto"
        v-if="!articleStore.isLoading && articleStore.articles.length > 0">
        <div class="max-w-screen-lg px-4 py-4 lg:py-8 mx-auto">
            <section class="h-screen">
                <div v-for="article in articleStore.articles" :key="article.id"
                    class="grid lg:grid-cols-12 py-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="mb-6 lg:col-span-4 text-base font-normal text-gray-800 dark:text-gray-400">
                        <p>
                            {{ articleStore.formatDate(article?.created_at) }}
                        </p>
                    </div>
                    <div class="lg:col-span-8 relative">
                        <a @click="articleStore.increaseView(article?.id)"
                            :href="`/articles/${article?.id}/${articleStore.generateSlug(article?.title)}`"
                            class="mb-2 hover:underline text-4xl font-bold dark:text-white">{{ article?.title }}</a>
                    </div>
                </div>

                <div class="join grid grid-cols-2 mt-4 space-x-2 self-end max-w-sm w-full"
                    v-if="articleStore?.articles.length === 20">
                    <button class="join-item border-blue-500 bg-blue-500 px-4 p-1 text-white"
                        @click="articleStore.handlePageChange(-1)">
                        Previous page
                    </button>
                    <button class="join-item bg-blue-500 px-4 p-1 text-white border-blue-500"
                        @click="articleStore.handlePageChange(1)">
                        Next
                    </button>
                </div>
            </section>
        </div>
    </section>

    <!-- No Articles Found -->
    <section class="bg-white dark:bg-gray-900 h-auto"
        v-if="!articleStore.isLoading && articleStore.articles.length === 0">
        <div class="max-w-screen-lg px-4 py-4 lg:py-8 mx-auto">
            <section class="h-screen">
                <h1 class="text-4xl text-white">No posts yet... coming soon</h1>
            </section>
        </div>
    </section>
</template>
