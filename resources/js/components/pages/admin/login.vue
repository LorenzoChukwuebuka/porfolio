<script setup>
import { ref, reactive } from 'vue';
import { useAuthStore } from "../../../store";

const authStore = useAuthStore();

// Local form state that will update the auth store
const formData = reactive({
    email: '',
    password: ''
});

// Update auth store when form changes
const updateAuthStore = () => {
    authStore.formValues.email = formData.email;
    authStore.formValues.password = formData.password;

    // Validate email if needed
    if (formData.email) {
        authStore.isMailValid(formData.email);
    }
};

// Handle form submission
const handleLogin = () => {
    // Update auth store with latest values
    updateAuthStore();

    // Call the login method from your auth store
    authStore.loginUser();
};
</script>

<template>
    <div class="min-h-screen bg-blue-50 flex items-center justify-center p-4">
        <!-- Error message if present -->
        <div v-if="authStore.isError" class="fixed top-4 left-0 right-0 mx-auto w-full max-w-md">
            <el-alert :title="authStore.errorMessage" type="error" show-icon :closable="true" />
        </div>

        <!-- Login card -->
        <el-card class="w-full max-w-md shadow-lg">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-blue-500">Lorenzo</h1>
                <p class="text-xl mt-2 text-gray-700">Sign In</p>
            </div>

            <el-form label-position="top" @submit.prevent="handleLogin">
                <!-- Email field -->
                <el-form-item label="Email Address">
                    <el-input v-model="formData.email" type="email" placeholder="Enter your email"
                        @blur="updateAuthStore" />
                    <small class="text-red-500" v-if="authStore.emailInvalid">
                        Invalid Email
                    </small>
                </el-form-item>

                <!-- Password field -->
                <el-form-item label="Password">
                    <el-input v-model="formData.password" type="password" placeholder="Enter your password"
                        @blur="updateAuthStore" />
                </el-form-item>

                <!-- Forgot password link -->
                <div class="flex justify-end mb-4">
                    <el-link type="primary">Forgot password?</el-link>
                </div>

                <!-- Login button -->
                <el-button type="primary" @click="handleLogin" class="w-full" :loading="authStore.isLoading">
                    {{ authStore.isLoading ? 'Please wait...' : 'Sign In' }}
                </el-button>

                <!-- Create account link -->
                <div class="text-center mt-4">
                    <span class="text-gray-600">Don't have an account? </span>
                    <el-link type="primary">Create an account</el-link>
                </div>
            </el-form>
        </el-card>
    </div>
</template>