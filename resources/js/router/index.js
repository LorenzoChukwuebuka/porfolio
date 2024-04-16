import { createRouter, createWebHistory } from 'vue-router'

import adminPageLayout from '../components/layouts/admin/adminPageLayout.vue'
import adminDash from '../components/pages/admin/adminDash.vue'
import adminArticles from '../components/pages/admin/adminArticles.vue'
import ArticleDetailsComponent from '../components/pages/ArticleDetailsComponent.vue'
import login from '../components/pages/admin/login.vue'
import AdminViewArticles from "../components/pages/admin/adminViewArticles.vue"
import VueCookies from "vue-cookies";

const routes = [
    {
        path: '/articles/:id/:title',
        name: 'ArticleSlug',
        component: ArticleDetailsComponent
    },

    {
        path: '/next/login',
        name: 'login',
        component: login
    },

    {
        path: '/next/admin-dash',
        name: 'AdminDash',
        component: adminPageLayout,
        beforeEnter: (to, from, next) => {
            console.log("Before entering admin dashboard route");
            const cookies = localStorage.getItem('admin');
            console.log("Admin cookie:", cookies);
            if (!cookies) {
                console.log("Redirecting to login page");
                next({ name: 'login' });
            } else {
                console.log("Proceeding to admin dashboard");
                next();
            }
        },
        children: [
            {
                path: '',
                name: 'admin-dash-comp',
                component: adminDash
            },
            {
                path: '/next/admin-article',
                name: 'adminArticles',
                component: adminArticles
            },
            {
                path:'/next/admin-view-article',
                name:'adminviewArticle',
                component:AdminViewArticles

            }
        ]
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
