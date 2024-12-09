<script setup>
import { ref } from "vue";

const educationList = ref([
    {
        institution: "Federal University of Technology, Owerri",
        course: "Information Management Technology (B.Tech)",
        period: "2015 – 2020",
    },
    {
        institution: "Cisco Networking Academy",
        course: "Networking",
        period: "2019",
    },
]);
</script>

<template>
    <div class="bg-black text-white p-4 py-16">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-orange-500 mb-8">
                Education
            </h1>
            <div class="space-y-6 md:space-y-8">
                <div
                    v-for="(education, index) in educationList"
                    :key="index"
                    class="bg-white text-black rounded-lg shadow-md p-4 md:p-6 w-full max-w-full"
                >
                    <h2 class="text-lg md:text-xl font-semibold uppercase mb-2">
                        {{ education.institution }}
                    </h2>
                    <p class="text-base md:text-xl font-bold mb-2">
                        {{ education.course }}
                    </p>
                    <p class="text-gray-500 text-sm md:text-base">
                        {{ education.period }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
