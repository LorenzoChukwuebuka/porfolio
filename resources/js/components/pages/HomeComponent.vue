<script setup>
import { onMounted } from "vue";

onMounted(() => {
    console.log("hello I am working");
});
</script>

<template>
    <main>
        <nav-component> </nav-component>

        <section class="bg-white dark:bg-gray-900 h-auto">
            <div class="max-w-screen-lg px-4 py-4 lg:py-8 mx-auto">
                <div class="grid lg:gap-8 xl:gap-0 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1
                            class="lg:max-w-2xl mb-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white"
                        >
                            I'm Lawrence (Lorenzo) Chukwuebuka Obi
                        </h1>
                        <h2
                            class="lg:max-w-2xl mb-6 text-xl font-semibold tracking-tight leading-none md:text-xl xl:text-2xl dark:text-white"
                        >
                            Senior Software Engineer | Nigeria
                        </h2>
                        <p
                            class="lg:max-w-lg mb-6 font-normal text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300"
                        >
                            With over 4 years of experience and 100+ successful
                            projects, I specialize in developing robust,
                            user-centric web solutions. My expertise lies in
                            transforming complex ideas into high-performance
                            digital experiences that drive business value.
                        </p>
                        <div
                            class="lg:max-w-lg mb-6 font-normal text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300"
                        >
                            <h3 class="font-semibold mb-2">
                                Core Competencies:
                            </h3>
                            <ul class="list-disc pl-5 mb-4">
                                <li>
                                    Front-end Development: HTML5, CSS3,
                                    JavaScript (ES6+), React.js, Vue.js
                                </li>
                                <li>
                                    Back-end Development: Laravel, Go, Node.js
                                </li>
                                <li>
                                    Database Design & Management: MySQL,
                                    PostgreSQL, MongoDB
                                </li>
                                <li>
                                    DevOps & Infrastructure: CI/CD, Cloud
                                    Services, Server Management
                                </li>
                            </ul>
                            <h3 class="font-semibold mb-2">
                                Key Project Achievements:
                            </h3>
                            <ul class="list-disc pl-5 mb-4">
                                <li>
                                    <strong>Picca:</strong> Developed and
                                    managed API resources, boosting team
                                    efficiency by 33%. Implemented RESTful
                                    architecture for seamless front-end
                                    integration.
                                </li>
                                <li>
                                    <strong>WritersGig:</strong> Architected a
                                    scalable platform handling time-sensitive
                                    content updates and database migrations.
                                    Implemented caching mechanisms, reducing
                                    server load by 40%.
                                </li>
                                <li>
                                    <strong>Freexit:</strong> Streamlined
                                    deployment processes, reducing deployment
                                    time by 30%. Enhanced system reliability,
                                    cutting downtime by 20% through
                                    fault-tolerant architecture implementation.
                                </li>
                            </ul>
                        </div>
                        <p
                            class="lg:max-w-lg mb-6 font-normal text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300"
                        >
                            I'm committed to delivering solutions that exceed
                            expectations, combining technical expertise with a
                            deep understanding of business objectives. Whether
                            you need a dynamic website, a complex web
                            application, or optimization of your existing
                            digital infrastructure, I'm your go-to resource for
                            impactful results.
                        </p>
                        <p
                            class="lg:max-w-lg mb-6 font-normal text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300"
                        >
                            <strong
                                >Let's collaborate – I'm ready to bring your
                                next web project to life!</strong
                            >
                        </p>
                    </div>
                    <div class="lg:mt-0 lg:col-span-5 max-h-[40em] lg:flex">
                        <img
                            src="/images/Ebuka.jpeg"
                            alt="lorenzo"
                            class="object-cover rounded-md"
                        />
                    </div>
                </div>

                <div class="grid lg:grid-cols-12 mt-4 lg:mt-10">
                    <h2
                        class="mb-6 lg:mb-0 lg:col-span-7 text-4xl font-bold dark:text-white"
                    >
                        Experience
                    </h2>
                    <ol
                        class="ml-2 lg:col-span-5 relative border-l border-gray-200 dark:border-gray-700"
                    >
                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                Enugu Electrical Distribution Company
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                full-stack software Engineer
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                December 2022 - Present
                            </p>
                        </li>
                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                Platforms Innovations
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                frontend software Engineer [contract]
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                March 2024 - June 2024
                            </p>
                        </li>
                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                Papyrus Technologies
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                Backend software Engineer [Contract]
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                October 2023 - March 2024
                            </p>
                        </li>
                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                Freexit
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                Backend Developer/DevOps [Contract]
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                April 2022 - present
                            </p>
                        </li>
                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                SILICON AFRICA TECHNOLOGIES
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                Backend Engineer
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                March 2022 – November 2022
                            </p>
                        </li>
                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                SHARERIDE2GO.COM
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                full-stack software Developer
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                2021 - March 2022
                            </p>
                        </li>

                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                Campus Innovation Hub
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                Web development Instructor
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                January 2020 – August 2021
                            </p>
                        </li>

                        <li class="ml-6 pb-5">
                            <span
                                class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900"
                            >
                                <svg
                                    class="w-2.5 h-2.5 text-gray-800 dark:text-gray-300"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                    />
                                </svg>
                            </span>
                            <h3
                                class="mb-1 text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                DEACONS DIGITAL SOLUTIONS
                            </h3>
                            <h4
                                class="mb-1 text-base font-medium text-gray-900 dark:text-white"
                            >
                                Intern
                            </h4>
                            <p
                                class="text-base font-normal text-gray-500 dark:text-gray-400"
                            >
                                June 2019 – December 2019
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
    </main>

    <footer-component></footer-component>
</template>


