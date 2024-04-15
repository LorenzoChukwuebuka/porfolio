/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap'
import { createApp } from 'vue'

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

import HomeComponent from './components/pages/HomeComponent.vue'
import NavComponent from './components/layouts/Nav/NavComponent.vue'
import ProjectComponent from './components/pages/ProjectComponent.vue'
import FooterComponent from './components/layouts/FooterComponent.vue'
import ArticleComponent from './components/pages/ArticleComponent.vue'
import adminArticle from './components/pages/admin/adminArticles.vue'
import ErrorComponent from './components/errorSuccess/ErrorComponent.vue'
import AppComponent from './components/App.vue'
import ArticleDetailsComponent from './components/pages/ArticleDetailsComponent.vue'
import SuccessComponent from '@/components/errorSuccess/SuccessComponent.vue'
import { createPinia } from 'pinia'
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'
import Login from './components/pages/admin/login.vue'

import router from './router'

const pinia = createPinia()

const app = createApp({})



app.use(router).use(pinia)
app.component('home-component', HomeComponent)
    .component('nav-component', NavComponent)
    .component('project-component', ProjectComponent)
    .component('footer-component', FooterComponent)
    .component('article-component', ArticleComponent)
    .component('admin-article-component', adminArticle)
    .component('QuillEditor', QuillEditor)
    .component('app', AppComponent)
    .component('error-component', ErrorComponent)
    .component('success-component', SuccessComponent)
    .component('article-details-component', ArticleDetailsComponent)
    .component('login-component',Login)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app')
