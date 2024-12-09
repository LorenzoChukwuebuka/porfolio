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
        class="min-h-screen bg-black text-white flex flex-col items-center justify-center w-full"
    >
        <h1 class="text-orange-500 text-3xl font-bold mb-8">MY SERVICES</h1>

        <div class="grid grid-cols-2 gap-6">
            <!-- First Column -->
            <div class="space-y-6">
                <div
                    v-for="(service, index) in [
                        'Front End',
                        'Full Stack',
                        'Web Development',
                        'Server Management',
                    ]"
                    :key="index"
                    class="bg-white text-black text-xl text-center font-medium px-6 py-4 rounded-lg shadow-md hover:shadow-lg transition-shadow h-24 w-[30em]"
                    :data-aos="getRandomAnimation()"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                >
                    {{ service }}
                </div>
            </div>

            <!-- Second Column -->
            <div class="space-y-6 mt-10">
                <div
                    v-for="(service, index) in [
                        'Back End',
                        'Desktop App Development',
                        'SEO',
                    ]"
                    :key="index"
                    class="bg-white text-black text-xl text-center font-medium px-6 py-4 rounded-lg shadow-md hover:shadow-lg transition-shadow h-24 w-[30em]"
                    :data-aos="getRandomAnimation()"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                >
                    {{ service }}
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Optional: Add custom styles if needed */
</style>
