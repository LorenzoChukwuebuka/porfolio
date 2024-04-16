<script setup>
import { useAuthStore } from "../../../store";
const authStore = useAuthStore()

</script>

<template>
    <main
        class="fixed top-0 left-0 w-full h-screen overflow-y-auto bg-[rgb(236,245,255)]"
    >

        <error-component
            v-if="authStore.isError"
            :errorMessage="authStore.errorMessage"
        ></error-component>
        <div
            class="card bg-white mx-auto mt-20 p-6 shadow-xl sm:mt-32 sm:w-[30em] sm:max-w-[40em]"
        >
            <div class="card-body">
                <div class="card-title">
                    <h1
                        class="text-center text-blue-500 text-2xl sm:text-3xl rounded-badge mx-auto"
                    >
                    Lorenzo
                    </h1>
                </div>
                <div class="mx-auto mt-4 flex flex-col items-center">
                    <div class="flex justify-center items-center">
                        <span
                            class="text-lg sm:text-2xl text-blue-500 font-semibold mr-2"
                            >Sign In</span
                        >

                    </div>

                </div>
                <div class="mx-auto">
                    <label class="form-control w-full mt-5 max-w-xs">
                        <div class="label">
                            <span class="label-text text-medium font-medium"
                                >Email Address</span
                            >
                        </div>
                        <input
                            type="email"
                            placeholder=""
                            v-model="authStore.formValues.email"
                            class="input input-bordered w-full sm:w-80"
                            @blur="
                                authStore.isMailValid(
                                    authStore.formValues.email
                                )"
                        />
                        <small class="text-center text-red-500" v-if="authStore.emailInvalid">
                            Invalid Email
                        </small>
                    </label>
                    <label class="form-control w-full mt-1 max-w-xs">
                        <div class="label">
                            <span class="label-text text-medium font-medium"
                                >Password</span
                            >
                        </div>
                        <input
                            v-model="authStore.formValues.password"
                            type="password"
                            placeholder=""
                            class="input input-bordered w-full input-info sm:w-80"
                        />
                        <!-- <small class="text-center text-red-500"> hello </small> -->
                    </label>
                    <a
                        href=""
                        @click.prevent="authStore.loginUser()"
                        class="p-3 px-6 pt-4 text-white text-center mt-4 bg-blue-500 rounded-btn block w-full sm:w-auto"
                    >
                        <span v-if="!authStore.isLoading"> Sign In </span>
                        <span v-if="authStore.isLoading"> Please wait ...</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</template>
