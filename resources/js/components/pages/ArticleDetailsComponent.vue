<script setup>
import { useEditorStore } from "../../store";
import { useRoute } from "vue-router";
import { useHead } from "@vueuse/head";

const articleStore = useEditorStore();
const route = useRoute();

let id = route.params.id;

articleStore.getArticle(id);

useHead({
    title: articleStore.article?.title,
    meta: [
        {
            name:
                articleStore.article?.title + " " + "- Lorenzo Chukwuebuka Obi",
            content: "My page description",
        },
        { property: "og:title", content: articleStore.article?.title },
        { property: "og:description", content: articleStore.article?.title },
        { property: "og:image", content: "/images/Ebuka.jpeg" },
        {
            property: "og:url",
            content: "lorenzochukwuebuka.com.ng/" + route.fullPath,
        },
        { property: "og:type", content: "website" },
    ],
});
</script>

<template>
    <nav-component></nav-component>

    <section
        class="bg-white dark:bg-gray-900 dark:text-white h-screen overflow-y-auto"
    >
        <div class="max-w-screen-lg px-4 py-4 lg:py-8 mx-auto">
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