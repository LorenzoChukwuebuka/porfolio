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
                            I'm Lawrence(Lorenzo) Chukwuebuka Obi
                        </h1>
                        <h1
                            class="lg:max-w-2xl mb-6 text-xl font-semibold tracking-tight leading-none md:text-xl xl:text-2xl dark:text-white"
                        >
                            A Software Engineer living in Nigeria.
                        </h1>
                        <p
                            class="lg:max-w-lg mb-6 font-normal text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300"
                        >
                            Welcome to my page! I'm a passionate and dedicated
                            software developer with over 4 years of experience
                            in designing and developing websites. My journey in
                            the realm of web development has been driven by a
                            relentless pursuit of excellence, where I
                            continually strive to create innovative solutions
                            that address unique demands for accessibility,
                            reachability, and security.
                        </p>
                        <p
                            class="lg:max-w-lg mb-6 font-normal text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300"
                        >
                            I specialize in crafting customized interfaces
                            tailored to meet the specific needs of each project,
                            leveraging my expertise in technologies such as
                            Laravel Framework, JavaScript, Go, and HTML/CSS. My
                            portfolio showcases a diverse range of experiences,
                            from developing high-performance web applications to
                            managing server infrastructure and enhancing overall
                            system reliability and scalability. I am open to collaborate on projects.
                        </p>
                        <!-- <p
                            class="lg:max-w-lg mb-6 font-normal text-gray-900 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300"
                        >
                            My professional journey has been marked by notable
                            achievements at various organizations, where I have
                            contributed to the development of high-performance
                            web applications, optimized SQL queries, automated
                            deployments, managed servers and networks, and
                            collaborated with cross-functional teams.
                        </p> -->
                    </div>
                    <div class="lg:mt-0 lg:col-span-5 lg:flex">
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


