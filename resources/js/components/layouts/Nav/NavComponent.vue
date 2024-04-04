<template>
    <div class="navbar bg-base-100 shadow-lg">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
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
                        />
                    </svg>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52"
                >
                    <li>
                        <a
                            class="hover:underline underline-offset-8 hover:shadow-lg"
                            target="_blank"
                            href="https://github.com/LorenzoChukwuebuka"
                            >Github Repository</a
                        >
                    </li>

                    <li>
                        <a href="/articles"
                            class="hover:underline underline-offset-8 hover:shadow-lg"
                        >
                            Articles
                        </a>
                    </li>
                    <li>
                        <a href="/projects"
                            class="hover:underline underline-offset-8 hover:shadow-lg"
                        >
                            Projects
                        </a>
                    </li>
                </ul>
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
                    <a href="/articles"
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

 