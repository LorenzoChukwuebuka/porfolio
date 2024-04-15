<script setup>
import { useEditorStore } from "../../store";
import { useRoute } from "vue-router";

const articleStore = useEditorStore();
const route = useRoute();

let id = route.params.id;

articleStore.getArticle(id);
</script>

<template>
    <nav-component></nav-component>

    <section class="bg-white dark:bg-gray-900 dark:text-white h-auto">
        <div class="max-w-screen-lg px-4 py-4 lg:py-8 mx-auto">
            <div class="w-full md:flex">
                <div class="w-full px-2 lg:px-6">
                    <div class="formatted">
                        <p>
                            {{
                                articleStore.formatDate(
                                    articleStore.article.created_at
                                )
                            }}
                        </p>

                        <h1 class="mt-8 font-bold text-4xl">
                            {{ articleStore.article.title }}
                        </h1>

                        <p v-html="articleStore.article.post"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer-component></footer-component>
</template>