import './bootstrap'
import { createApp } from 'vue'

import HomeComponent from './components/pages/HomeComponent.vue'
import NavComponent from './components/layouts/Nav/NavComponent.vue'
import ArticleComponent from './components/pages/ArticleComponent.vue'
import adminArticle from './components/pages/admin/adminArticles.vue'
import ErrorComponent from './components/errorSuccess/ErrorComponent.vue'
import AppComponent from './components/App.vue'
import ArticleDetailsComponent from './components/pages/ArticleDetailsComponent.vue'
import SuccessComponent from '@/components/errorSuccess/SuccessComponent.vue'
import HeroSectionComponent from './components/pages/HeroSectionComponent.vue'
import { createPinia } from 'pinia'
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'
import Login from './components/pages/admin/login.vue'
import VueCookies from 'vue-cookies'
import { createHead } from '@vueuse/head'
import AOS from 'aos'
import 'aos/dist/aos.css'
import router from './router'
import AboutMeComponent from './components/pages/AboutMeComponent.vue'
import SkillsComponent from './components/pages/SkillComponent.vue'
import ServiceComponent from './components/pages/ServiceComponent.vue'
import WorkexperienceComponent from './components/pages/WorkexperienceComponent.vue'
import Educationcomponent from './components/pages/Educationcomponent.vue'
import ProjectComponent from './components/pages/ProjectComponent.vue'
import ContactComponent from './components/pages/ContactComponent.vue'
import FooterComp from './components/pages/FooterComp.vue'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

const pinia = createPinia()
const head = createHead()

const app = createApp({})

import * as ElementPlusIconsVue from '@element-plus/icons-vue'

// Register all icons
for (const [key, component] of Object.entries(ElementPlusIconsVue)) {
    app.component(key, component)
}

AOS.init()

app.use(router).use(pinia).use(VueCookies).use(head).use(ElementPlus)
app.component('home-component', HomeComponent)
    .component('nav-component', NavComponent)
    .component('article-component', ArticleComponent)
    .component('admin-article-component', adminArticle)
    .component('QuillEditor', QuillEditor)
    .component('app', AppComponent)
    .component('error-component', ErrorComponent)
    .component('success-component', SuccessComponent)
    .component('article-details-component', ArticleDetailsComponent)
    .component('login-component', Login)
    .component('herosection-component', HeroSectionComponent)
    .component('about-me-component', AboutMeComponent)
    .component('skill-component', SkillsComponent)
    .component('service-component', ServiceComponent)
    .component('workexperience-component', WorkexperienceComponent)
    .component('education-component', Educationcomponent)
    .component('project-component', ProjectComponent)
    .component('contact-component', ContactComponent)
    .component('footer-component', FooterComp)

app.mount('#app')
