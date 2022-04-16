/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');
 
 import Axios from 'axios';
 import App from './App.vue';
 import router from './routes.js';

// Sweetalert2
 import VueSweetalert2 from 'vue-sweetalert2';
 import 'sweetalert2/dist/sweetalert2.min.css';
 Vue.use(VueSweetalert2);

 const root = new Vue({
     el: '#root',
     router: router,
     render: h => h(App)
 });