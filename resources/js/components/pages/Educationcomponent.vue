<script setup>
import { ref } from "vue";

const educationList = ref([
    {
        institution: "Federal University of Technology",
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
    <div class="bg-black text-white p-2 py-16">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-orange-500 mb-10">Education</h1>
            <div class="space-y-8">
                <div
                    v-for="(education, index) in educationList"
                    :key="index"
                    class="bg-white text-black rounded-lg shadow-md p-6"
                >
                    <h2 class="text-lg font-semibold uppercase">
                        {{ education.institution }}
                    </h2>
                    <p class="text-xl font-bold">{{ education.course }}</p>
                    <p class="text-gray-500">{{ education.period }}</p>
                </div>
            </div>
        </div>
    </div>
</template>
  