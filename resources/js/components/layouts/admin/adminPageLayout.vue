<template>
    <div class="grid grid-cols-1 md:grid-cols-12 md:h-screen overflow-hidden">
        <div class="col-span-1 shadow-lg bg-white p-4 md:col-span-2">
            <h1 class="text-xl font-semibold text-blue-500 text-center mt-10">
                Welcome Lorenzo
            </h1>

            <el-menu class="mt-10 w-full" default-active="1" :router="true">
                <el-menu-item index="/next/admin-dash">
                    <el-icon>
                        <Grid />
                    </el-icon>
                    <span>Dashboard</span>
                </el-menu-item>
                <el-menu-item index="/next/admin-article">
                    <el-icon>
                        <Document />
                    </el-icon>
                    <span>Article</span>
                </el-menu-item>
                <el-menu-item index="/next/admin-view-article">
                    <el-icon>
                        <View />
                    </el-icon>
                    <span>View Articles</span>
                </el-menu-item>
                <el-menu-item index="">
                    <el-icon>
                        <Setting />
                    </el-icon>
                    <span>Setting</span>
                </el-menu-item>
            </el-menu>

            <div class="rounded-badge mx-auto bg-blue-50 shadow-sm overflow-hidden h-[12rem] p-4 w-full md:w-[12rem]">
            </div>

            <p class="mt-5 ml-5 text-medium font-medium text-[rgb(102,112,133)] cursor-pointer">
                <el-icon>
                    <SwitchButton />
                </el-icon> Log out
            </p>
        </div>
        <div class="col-span-1 md:col-span-10 overflow-y-auto bg-[rgb(236,245,255)]">
            <el-header class="hidden md:flex items-center shadow-sm px-4 bg-white justify-between">
                <el-input placeholder="Search" class="w-72" />
                <div class="flex items-center gap-5">
                    <el-dropdown>
                        <span class="flex items-center cursor-pointer">
                            Super Admin <el-icon>
                                <ArrowDown />
                            </el-icon>
                        </span>
                        <template #dropdown>
                            <el-dropdown-menu>
                                <el-dropdown-item>Profile</el-dropdown-item>
                                <el-dropdown-item>Settings</el-dropdown-item>
                                <el-dropdown-item>Logout</el-dropdown-item>
                            </el-dropdown-menu>
                        </template>
                    </el-dropdown>
                    <el-badge :value="6" class="cursor-pointer">
                        <el-icon>
                            <Bell />
                        </el-icon>
                    </el-badge>
                </div>
            </el-header>

            <div class="top-0 px-12 py-2">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Grid, Document, View, Setting, SwitchButton, ArrowDown, Bell } from '@element-plus/icons-vue';
</script>

<style>
/* .el-menu-item {
    @apply text-[rgb(102, 112, 133)] font-medium;
} */
</style>