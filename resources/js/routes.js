import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// Componenti
import HomePage from './pages/Homepage.vue';
import ContactPage from './pages/ContactPage.vue';
import NotFoundPage from './pages/NotFoundPage.vue';
//import PostDetailPage from './pages/PostDetailPage.vue';
//import CategoriesListPage from './categories/CategoriesListPage.vue';
//import CategoryDetailPage from './categories/CategoryDetailPage.vue';
//import TagsListPage from './tags/TagsListPage.vue';
//import TagDetailPage from './tags/TagDetailPage.vue';

// Rotte
const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: HomePage, name: 'home' },
        { path: '/contacts', component: ContactPage, name: 'contacts' },

        // pagina con parametro da chiamre con 
        // <router-link :to="{name: 'user-detail', params: { id: user.id} }">Dettaglio</router-link>

        //{ path: '/users/:id', component: UserPage, name: 'user-detail' },

        // pagina 404 
        { path: '*', component: NotFoundPage, name: 'not-found' }
    ]
});

export default router;