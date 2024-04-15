<template>
    <div class="grid grid-cols-1 md:grid-cols-12 md:h-screen overflow-hidden">
        <div class="col-span-1 shadow-lg bg-white p-4 md:col-span-2">
            <h1 class="text-xl font-semibold text-blue-500 text-center mt-10">
                Welcome Lorenzo
            </h1>

            <div
                class="rounded-badge mx-auto mt-10 space-y-4 overflow-hidden h-auto p-4 w-full"
            >
                <p
                    class="text-md pt-2 pb-2 px-2 py-1 rounded-md text-[rgb(102,112,133)] font-medium w-full"
                >
                    <router-link to="/next/admin-dash">
                        <i class="bi bi-grid"></i> Dashboard
                    </router-link>
                </p>
                <p
                    class="text-medium space-x-1 text-[rgb(102,112,133)] pt-1 pb-2 px-2 py-1 rounded-md font-medium w-full"
                >
                    <router-link to="/next/admin-article">
                        <i class="bi bi-book"></i> Article
                    </router-link>
                </p>

                <p
                    class="text-medium space-x-1 pt-2 pb-2 px-2 py-1 text-[rgb(102,112,133)] rounded-md font-medium w-full"
                >
                    <router-link to="/next/admin-view-article">
                        <i class="bi bi-book"></i> View Articles
                    </router-link>
                </p>

                <p
                    class="text-medium space-x-1 pt-2 pb-2 px-2 py-1 text-[rgb(102,112,133)] rounded-md font-medium w-full"
                >
                    <router-link to="">
                        <i class="bi bi-gear"></i> Setting
                    </router-link>
                </p>
            </div>

            <div
                class="rounded-badge mx-auto bg-blue-50 shadow-sm overflow-hidden h-[12rem] p-4 w-full md:w-[12rem]"
            ></div>

            <p
                class="mt-5 ml-5 text-medium font-medium text-[rgb(102,112,133)]"
            >
                <i class="bi bi-box-arrow-right"></i> Log out
            </p>
        </div>
        <div
            class="col-span-1 md:col-span-10 overflow-y-auto bg-[rgb(236,245,255)]"
        >
            <div class="hidden md:navbar md:shadow-sm md:px-4 bg-white">
                <div class="flex-1">
                    <input
                        type="text"
                        class="ml-1 p-2 border w-72 border-gray-300 rounded-btn"
                        placeholder="Search"
                    />
                </div>
                <div class="flex-none gap-5">
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="avatar">
                            <span class="font-semibold text-medium gap-2">
                                super admin
                                <b> <i class="bi bi-chevron-down"></i> </b>
                            </span>
                        </div>
                        <ul
                            tabindex="0"
                            class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52"
                        >
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>

                    <a class="btn btn-ghost text-xl">
                        <i class="bi bi-bell">
                            <sup
                                class="indicator-item badge bg-red-500 text-white badge-secondary"
                            >
                                6
                            </sup>
                        </i>
                    </a>
                </div>
            </div>

            <div class="top-0 px-12 py-2">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

