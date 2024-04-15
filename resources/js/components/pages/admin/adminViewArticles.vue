<script setup>
import { useEditorStore } from "../../../store";
const articleStore = useEditorStore();

const truncatedContent = (content) => {
    return content.length > 20 ? content.slice(0, 20) + "..." : content;
};

console.log(articleStore.articles);
</script>

<template>
    <main>
        <h1 class="font-bold text-2xl">Articles</h1>

        <div class="mt-10">
            <div
                class="bg-white rounded-lg shadow-sm overflow-hidden w-full md:w-[70rem]"
            >
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table
                        class="table-auto min-w-full divide-y divide-gray-200"
                    >
                        <thead>
                            <tr>
                                <th
                                    class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider"
                                >
                                    SN
                                </th>
                                <th
                                    class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider"
                                >
                                    Title
                                </th>
                                <th
                                    class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider"
                                >
                                    Content
                                </th>
                                <th
                                    class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider"
                                >
                                    Created at
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y divide-gray-200"
                            v-for="(article, index) in articleStore.articles"
                            :key="article.id"
                        >
                            <!-- Replace this with your dynamic data -->
                            <tr>
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    {{ index + 1 }}
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    <a
                                        :href="
                                            '/articles/' +
                                            `${article.id}/` +
                                            articleStore.generateSlug(
                                                article.title
                                            )
                                        "
                                        class="mb-2 hover:underline font-semibold"
                                        >{{ article.title }}</a
                                    >
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    {{ truncatedContent(article.post) }}
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    {{ article.created_at }}
                                </td>
                            </tr>
                            <!-- More rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="join grid grid-cols-2 mt-4 space-x-2 max-w-sm w-full">
            <button
                class="join-item border-blue-500 bg-blue-500 px-4 p-1 text-white"
                @click="articleStore.handlePageChange(-1)"
            >
                Previous page
            </button>
            <button
                class="join-item bg-blue-500 px-4 p-1 text-white border-blue-500"
                @click="articleStore.handlePageChange(1)"
            >
                Next
            </button>
        </div>
    </main>
</template>