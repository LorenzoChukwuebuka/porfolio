<script setup>
// List of AOS animation types
const aosAnimations = [
    "fade-up",
    "fade-down",
    "fade-left",
    "fade-right",
    "zoom-in",
    "zoom-out",
    "flip-left",
    "flip-right",
];

// Utility function to get a random animation
const getRandomAnimation = () => {
    return aosAnimations[Math.floor(Math.random() * aosAnimations.length)];
};
</script>

<template>
    <div
        class="min-h-screen bg-black text-white flex flex-col items-center p-2 justify-center px-4" id="background"
    >
        <h1 class="text-orange-500 text-3xl md:text-4xl font-bold mb-8 text-center">
            MY SERVICES
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-4xl">
            <!-- First Column -->
            <div
                v-for="(service, index) in [
                    'Front End',
                    'Full Stack',
                    'Web Development',
                    'Server Management',
                ]"
                :key="index"
                class="bg-white text-black text-lg md:text-xl text-center font-medium px-4 md:px-6 py-4 rounded-lg shadow-md hover:shadow-lg transition-shadow h-24 w-full"
                :data-aos="getRandomAnimation()"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
            >
                {{ service }}
            </div>

            <!-- Second Column -->
            <div
                v-for="(service, index) in [
                    'Back End',
                    'Desktop App Development',
                    'SEO',
                ]"
                :key="index"
                class="bg-white text-black text-lg md:text-xl text-center font-medium px-4 md:px-6 py-4 rounded-lg shadow-md hover:shadow-lg transition-shadow h-24 w-full"
                :data-aos="getRandomAnimation()"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
            >
                {{ service }}
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Optional: Add custom styles if needed */
</style>
