<script setup>
import { useEditorStore } from "../../../store";
import { ref } from "vue";
import { QuillEditor } from '@vueup/vue-quill';


const articleStore = useEditorStore();
const showEditDialog = ref(false);
const showDeleteDialog = ref(false);
const currentArticle = ref(null);
const fileList = ref([]);

const truncatedContent = (content) => {
    // Remove HTML tags and then truncate
    const plainText = content.replace(/<[^>]*>/g, '');
    return plainText.length > 20 ? plainText.slice(0, 20) + "..." : plainText;
};

const openEditDialog = (article) => {
    currentArticle.value = { ...article };
    articleStore.title = article.title;
    articleStore.editorContent = article.post;
    showEditDialog.value = true;
};

const closeEditDialog = () => {
    showEditDialog.value = false;
    currentArticle.value = null;
    articleStore.title = '';
    articleStore.editorContent = '';
    fileList.value = [];
};

const openDeleteDialog = (article) => {
    currentArticle.value = article;
    showDeleteDialog.value = true;
};

const closeDeleteDialog = () => {
    showDeleteDialog.value = false;
    currentArticle.value = null;
};

const handleUpload = (file) => {
    fileList.value = [file];
    articleStore.articleFile = file.raw;
};

</script>

<template>
    <main>
        <h1 class="font-bold text-2xl">Articles</h1>

        <div v-if="articleStore.isError" class="mt-3">
            <el-alert type="error" :title="articleStore.errorMessage" :closable="false" />
        </div>
        <div v-if="articleStore.isSuccess" class="mt-3">
            <el-alert type="success" :title="articleStore.successMessage" :closable="false" />
        </div>

        <div class="mt-10">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden w-full md:w-[70rem]">
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    SN
                                </th>
                                <th class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    Title
                                </th>
                                <th class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    Content
                                </th>
                                <th class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    Created at
                                </th>
                                <th class="px-4 py-4 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="(article, index) in articleStore.articles" :key="article.id">
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    {{ index + 1 }}
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    <a :href="'/articles/' +
                                        `${article.id}/` +
                                        articleStore.generateSlug(
                                            article.title
                                        )
                                        " class="mb-2 hover:underline font-semibold">{{ article.title }}</a>
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    {{ truncatedContent(article.post) }}
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap">
                                    {{ article.created_at }}
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap flex space-x-2">
                                    <el-button type="primary" size="small" @click="openEditDialog(article)">
                                        <el-icon>
                                            <Edit />
                                        </el-icon>
                                        Edit
                                    </el-button>
                                    <el-button type="danger" size="small" @click="openDeleteDialog(article)">
                                        <el-icon>
                                            <Delete />
                                        </el-icon>
                                        Delete
                                    </el-button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="join grid grid-cols-2 mt-4 space-x-2 max-w-sm w-full" v-if="articleStore.articles.length === 20">
            <button class="join-item border-blue-500 bg-blue-500 px-4 p-1 text-white"
                @click="articleStore.handlePageChange(-1)">
                Previous page
            </button>
            <button class="join-item bg-blue-500 px-4 p-1 text-white border-blue-500"
                @click="articleStore.handlePageChange(1)">
                Next
            </button>
        </div>

        <!-- Edit Dialog -->
        <el-dialog v-model="showEditDialog" title="Edit Article" width="60%" :before-close="closeEditDialog">
            <div v-if="currentArticle">
                <el-input v-model="articleStore.title" placeholder="Enter article title" class="mb-4" />

                <el-upload class="upload-container mb-4" :limit="1" :auto-upload="false" :on-change="handleUpload"
                    :file-list="fileList">
                    <el-button type="info">
                        <el-icon>
                            <UploadFilled />
                        </el-icon>
                        Upload New Article Image
                    </el-button>
                </el-upload>

                <div class="h-[400px] border border-gray-300 rounded-md overflow-hidden">
                    <QuillEditor v-model:content="articleStore.editorContent" :options="articleStore.editorOptions"
                        class="h-full w-full" content-type="html" />
                </div>
            </div>
            <template #footer>
                <span class="dialog-footer">
                    <el-button @click="closeEditDialog">Cancel</el-button>
                    <el-button type="primary" :loading="articleStore.isLoading"
                        @click="articleStore.updateArticle(currentArticle.id)">
                        {{ articleStore.isLoading ? "Updating..." : "Update" }}
                    </el-button>
                </span>
            </template>
        </el-dialog>

        <!-- Delete Dialog -->
        <el-dialog v-model="showDeleteDialog" title="Delete Article" width="30%" :before-close="closeDeleteDialog">
            <div v-if="currentArticle" class="text-center">
                <p class="mb-4">Are you sure you want to delete this article?</p>
                <p class="font-bold mb-2">{{ currentArticle.title }}</p>
                <p class="text-red-500">This action cannot be undone.</p>
            </div>
            <template #footer>
                <span class="dialog-footer">
                    <el-button @click="closeDeleteDialog">Cancel</el-button>
                    <el-button type="danger" :loading="articleStore.isLoading"
                        @click="articleStore.deleteArticle(currentArticle.id)">
                        {{ articleStore.isLoading ? "Deleting..." : "Delete" }}
                    </el-button>
                </span>
            </template>
        </el-dialog>
    </main>
</template>

<style>
.upload-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    border: 1px dashed #dcdfe6;
    border-radius: 6px;
    background-color: #fafafa;
}

.dialog-footer {
    display: flex;
    justify-content: flex-end;
    gap: 8px;
}
</style>