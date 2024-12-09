<script setup>
import { ref } from "vue";

const workExperience = ref([
    {
        title: "Full-Stack Software Developer",
        company: "Enugu Electrical Distribution Company",
        period: "2022-Present",
    },
    {
        title: "Backend/DevOps Engineer",
        company: "Freexit Technologies",
        period: "2022-Present",
    },
    {
        title: "Frontend Developer",
        company: "Platform Innovations",
        period: "03/2024 – 06/2024",
    },
    {
        title: "Backend Developer",
        company: "Silicon Africa Technologies",
        period: "03/2022 – 11/2022",
    },
    {
        title: "Backend Developer",
        company: "Papyrus Tech",
        period: "10/2023 – 03/2024",
    },
    {
        title: "Web Development Instructor",
        company: "CampusInnovation Hub",
        period: "03/2020 – 08/2021",
    },
    {
        title: "Intern",
        company: "Deacons Digital Solutions",
        period: "06/2021 – 12/2021",
    },
]);

const projects = ref([
    {
        name: "Crab Mailer",
        description: "An email marketing platform (SaaS)",
    },
    {
        name: "Enyemaka Bot",
        description: "A Telegram bot developed for EEDC",
    },
    {
        name: "Energy One App",
        description: "Management system for tracking purposes",
    },
]);
</script>

<template>
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-10">
                Work Experience
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Left Section -->
                <div class="md:col-span-2">
                    <ul class="space-y-4">
                        <li
                            v-for="(job, index) in workExperience"
                            :key="index"
                            class="border-b pb-4"
                        >
                            <h2 class="text-lg md:text-xl font-semibold">
                                {{ job.title }}
                            </h2>
                            <p class="text-gray-600 text-sm md:text-base">
                                {{ job.company }} ({{ job.period }})
                            </p>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div>
                    <h2
                        class="text-xl md:text-2xl font-bold text-orange-500 mb-6"
                    >
                        Other Projects
                    </h2>
                    <ul class="space-y-4">
                        <li
                            v-for="(project, index) in projects"
                            :key="index"
                            class="border-b pb-4"
                        >
                            <h3 class="text-lg md:text-xl font-semibold">
                                {{ project.name }}
                            </h3>
                            <p class="text-gray-600 text-sm md:text-base">
                                {{ project.description }}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
