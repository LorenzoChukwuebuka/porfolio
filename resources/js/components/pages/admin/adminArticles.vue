<script setup>
import { useEditorStore } from "@/store";
import { ref } from "vue";
import { ElMessage, ElButton, ElInput, ElCard, ElUpload, ElIcon } from "element-plus";
import { UploadFilled } from "@element-plus/icons-vue";

const editorStore = useEditorStore();
const myQuillEditor = ref(null);
const fileList = ref([]);

const handleUpload = (file) => {
    fileList.value = [file];
    // Simulate upload logic
    console.log("File uploaded:", file.raw);
    editorStore.articleFile = file.raw;
};
</script>

<template>
    <main class="flex justify-center items-center min-h-screen bg-gray-100 p-6">
        <ElCard class="w-full max-w-4xl shadow-lg rounded-lg">
            <template #header>
                <h1 class="text-xl font-semibold text-blue-600">Create Article</h1>
            </template>

            <div v-if="editorStore.isError" class="mb-3">
                <ElMessage type="error">{{ editorStore.errorMessage }}</ElMessage>
            </div>
            <div v-if="editorStore.isSuccess" class="mb-3">
                <ElMessage type="success">{{ editorStore.successMessage }}</ElMessage>
            </div>

            <ElInput v-model="editorStore.title" placeholder="Enter article title" class="mb-4" />

            <ElUpload class="upload-container mb-4" :limit="1" :auto-upload="false" :on-change="handleUpload"
                v-model:file-list="fileList">
                <ElButton type="info">
                    <ElIcon>
                        <UploadFilled />
                    </ElIcon>
                    Upload Article Image
                </ElButton>
            </ElUpload>

            <div class="h-[400px] border border-gray-300 rounded-md overflow-hidden">
                <QuillEditor v-model:content="editorStore.editorContent" :options="editorStore.editorOptions"
                    ref="myQuillEditor" class="h-full w-full" content-type="html" />
            </div>

            <div class="flex justify-end mt-4">
                <ElButton type="primary" :loading="editorStore.isLoading" @click="editorStore.submitPost">
                    {{ editorStore.isLoading ? "Submitting..." : "Submit" }}
                </ElButton>
            </div>
        </ElCard>
    </main>
</template>

<style>
.el-card {
    border-radius: 12px;
    padding: 20px;
}

.upload-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    border: 1px dashed #dcdfe6;
    border-radius: 6px;
    background-color: #fafafa;
}
</style>