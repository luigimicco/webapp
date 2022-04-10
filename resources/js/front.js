/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');
 
 import Axios from 'axios';
 import App from './components/App.vue';
 import router from './routes.js';
 
 const root = new Vue({
     el: '#root',
     router: router,
     render: h => h(App)
 });