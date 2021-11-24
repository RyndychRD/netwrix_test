require('./bootstrap');

import Vue from 'vue'
import VueRouter from "vue-router";

import BootstrapVue from 'bootstrap-vue';

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue);

Vue.use(VueRouter)
import App from './components/app'
import Partners from './components/table/partnersList'

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: Partners
        } ,
    ]
})

const app = new Vue({
    el: '#app',
    components:{App},
    router
})
