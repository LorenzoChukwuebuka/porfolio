<template>
    <div class="navbar bg-base-100 shadow-lg">
        <div class="navbar-start">
            <div class="drawer">
                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label
                        for="my-drawer"
                        class="btn btn-ghost drawer-button lg:hidden"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16"
                            /></svg
                    ></label>
                </div>
                <div class="drawer-side">
                    <label
                        for="my-drawer"
                        aria-label="close sidebar"
                        class="drawer-overlay"
                    ></label>
                    <ul class="menu p-4 w-42 min-h-full bg-white">
                        <li class="mb-5 text-xl mt-10">Lorenzo Chukwuebuka</li>
                        <li>
                            <a
                                class="hover:underline text-lg underline-offset-8 hover:shadow-lg"
                                target="_blank"
                                href="https://github.com/LorenzoChukwuebuka"
                                >Github Repository</a
                            >
                        </li>

                        <li>
                            <a
                                href="/articles"
                                class="hover:underline text-lg underline-offset-8 hover:shadow-lg"
                            >
                                Articles
                            </a>
                        </li>
                        <li>
                            <a
                                href="/projects"
                                class="hover:underline text-lg underline-offset-8 hover:shadow-lg"
                            >
                                Projects
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="btn btn-ghost text-xl" href="/">
                <img src="/images/Ebuka.jpeg" width="50px" height="50px" />
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a
                        class="hover:underline underline-offset-8 hover:shadow-lg"
                        target="_blank"
                        href="https://github.com/LorenzoChukwuebuka"
                        >Github Repository</a
                    >
                </li>

                <li>
                    <a
                        href="/articles"
                        class="hover:underline underline-offset-8 hover:shadow-lg"
                    >
                        Articles
                    </a>
                </li>
                <li>
                    <a
                        href="/projects"
                        class="hover:underline underline-offset-8 hover:shadow-lg"
                    >
                        Projects
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <a href="/">
                <span class="font-semibold">Lawrence Chukwuebuka Obi </span>
            </a>
        </div>
    </div>
</template>

 