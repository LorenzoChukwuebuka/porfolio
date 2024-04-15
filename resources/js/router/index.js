import { createRouter, createWebHistory } from 'vue-router'

import adminPageLayout from '../components/layouts/admin/adminPageLayout.vue'
import adminDash from '../components/pages/admin/adminDash.vue'
import adminArticles from '../components/pages/admin/adminArticles.vue'
import ArticleDetailsComponent from "../components/pages/ArticleDetailsComponent.vue"

const routes = [
    {
        path: '/articles/:id/:title',
        name: 'ArticleSlug',
        component: ArticleDetailsComponent
    },

    {
        path: '/next/admin-dash',
        name: 'AdminDash',
        component: adminPageLayout,
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
            }
        ]
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
