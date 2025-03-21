<script setup>
import { useEditorStore } from "../../store";

const articleStore = useEditorStore();
const urlSegments = window.location.pathname.split("/");
const id = urlSegments[2]; // Extract the ID from /articles/{id}/{title}

articleStore.getArticle(id);

</script>

<template>
    <nav-component></nav-component>

    <section class="bg-white dark:bg-gray-900 dark:text-white min-h-screen ">
        <div class="max-w-screen-lg px-4 py-4 overflow-y-auto lg:py-8  mx-auto">
            <div class="w-full md:flex">
                <div class="w-full px-2 lg:px-6">
                    <div class="formatted">
                        <p>
                            {{
                                articleStore.formatDate(
                                    articleStore.article?.created_at
                                )
                            }}
                        </p>

                        <h1 class="mt-8 font-bold text-4xl">
                            {{ articleStore.article?.title }}
                        </h1>

                        <p v-html="articleStore.article?.post"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer-component></footer-component>
</template>