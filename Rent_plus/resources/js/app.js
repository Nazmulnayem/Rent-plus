/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

import Vuex from 'vuex'
Vue.use(Vuex)
import storedata from './store/index'


import VueRouter from 'vue-router';
Vue.use(VueRouter)
import {routes} from "./routes";


import Vuelidate from 'vuelidate';
Vue.use(Vuelidate)

import Swal from 'sweetalert2';
window.swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})


window.toast=Toast.fire;

const store = new Vuex.Store(
    storedata
)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/admin/adminmaster').default);



const router = new VueRouter({
    routes,
    mode:'history'
})

const app = new Vue({
    el: '#app',
    router,
    store
});
