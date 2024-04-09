<script setup>
import {ref} from 'vue'
defineProps({
    successMessage: String,
});

const showError = ref(true);

function hideErrorToast() {
    showError.value = false;
}
</script>

<template>
    <div v-if="showError" class="toast toast-down toast-end">
        <div class="alert bg-green-500 alert-success">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="stroke-current shrink-0 h-6 w-6 text-white"
                fill="none"
                viewBox="0 0 24 24"
                @click="hideErrorToast"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                />
            </svg>
            <span class="text-sm text-white text-nowrap">{{ successMessage }}</span>
        </div>
    </div>
</template>
