<script setup>
import { useEditorStore } from "./../../../store/index.js";
import { QuillEditor } from "@vueup/vue-quill";
import { watch, ref } from "vue";
import SuccessComponent from "@/components/errorSuccess/SuccessComponent.vue";
const editorStore = useEditorStore();
</script>


<template>
    <main>
        <div
            class="rounded-badge mx-auto mt-10 bg-white shadow-sm overflow-hidden h-42 p-4 w-full m:w-full"
        >
            <error-component
                v-if="editorStore.isError"
                :errorMessage="editorStore.errorMessage"
            ></error-component>

            <success-component
                v-if="editorStore.isSuccess"
                :successMessage="editorStore.successMessage"
            ></success-component>
            <h1 class="text-lg font-semibold text-blue-500">Create Articles</h1>

            <label class="form-control w-full max-w-[20em] mt-1 mb-3">
                <div class="label">
                    <span class="label-text text-medium font-medium"
                        >Title</span
                    >
                </div>
                <input
                    type="text"
                    v-model="editorStore.title"
                    class="ml-1 p-2 border w-full border-gray-300 rounded-btn"
                    placeholder="title"
                    required
                />
            </label>

            <QuillEditor
                v-model:content="editorStore.editorContent"
                :options="editorStore.editorOptions"
                ref="myQuillEditor"
                class="h-[27em]"
                content-type="html"
            />

            <hr class="p-2" />
            <button
                v-if="!editorStore.isLoading"
                class="p-3 px-6 pt-4 text-white text-center mt-4 mx-auto bg-blue-500 rounded-btn block w-full max-w-[15em]"
                @click.prevent="editorStore.submitPost"
                type="submit"
            >
                Submit
            </button>

            <button
                v-if="editorStore.isLoading"
                class="p-3 px-6 pt-4 text-white text-center mt-4 mx-auto bg-blue-200 rounded-btn block w-full max-w-[15em]"
                disabled
            >
                Please Wait ....
            </button>
        </div>
    </main>
</template>
