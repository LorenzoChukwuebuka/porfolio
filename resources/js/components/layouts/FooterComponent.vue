<script setup>
import { ref } from "vue";

const currentDate = ref("");

currentDate.value = new Date().getFullYear();
</script>
<template>
    <footer class="bg-white dark:bg-gray-900">
        <hr class="border-gray-200 sm:mx-auto dark:border-gray-700" />
        <div class="mx-auto w-full max-w-screen-xl p-4 py-4 lg:py-6">
            <div class="sm:flex sm:items-center sm:justify-between">
                <span
                    class="text-base text-gray-900 sm:text-center dark:text-gray-400"
                >
                    &copy; Copyright 2019 - {{ currentDate }} by Lawrence
                    Chukwuebuka Obi
                </span>
                <ul
                    class="flex flex-wrap justify-center lg:justify-end items-center mt-3 text-base font-medium text-gray-900 dark:text-gray-400 sm:mt-0"
                >
                    <!-- <li>
                    <a target="_blank" href="https://twitter.com/stephenjude_" class="mr-4 hover:underline md:mr-6 ">Twitter</a>
                </li> -->
                    <li>
                        <a
                            target="_blank"
                            href="https://github.com/LorenzoChukwuebuka"
                            class="mr-4 hover:underline md:mr-6"
                            >Github</a
                        >
                    </li>
                    <li>
                        <a
                            target="_blank"
                            href="https://www.linkedin.com/in/lawrence-chukwuebuka-obi-4375b5191/"
                            class="mr-4 hover:underline md:mr-6"
                            >LinkedIn</a
                        >
                    </li>
                    <li>
                        <a
                            target="_blank"
                            href="mailto:lawrenceobi2@gmail.com"
                            class="mr-4 hover:underline md:mr-6"
                            >Mail</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</template>

