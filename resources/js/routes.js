import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// Componenti
import HomePage from './components/pages/Homepage.vue';
import ContactPage from './components/pages/ContactPage.vue';
import NotFoundPage from './components/pages/NotFoundPage.vue';
//import PostDetailPage from './components/pages/PostDetailPage.vue';
//import CategoriesListPage from './components/categories/CategoriesListPage.vue';
//import CategoryDetailPage from './components/categories/CategoryDetailPage.vue';
//import TagsListPage from './components/tags/TagsListPage.vue';
//import TagDetailPage from './components/tags/TagDetailPage.vue';

// Rotte
const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: HomePage, name: 'home' },
        { path: '/contacts', component: ContactPage, name: 'contacts' },

        // pagina con parametro da chiamre con 
        // <router-link :to="{name: 'user-detail', params: { id: user.id} }">Dettaglio</router-link>

        { path: '/users/:id', component: UserPage, name: 'user-detail' },

        // pagina 404 
        { path: '*', component: NotFoundPage, name: 'not-found' }
    ]
});

export default router;