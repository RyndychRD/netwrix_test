require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faSearch } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import App from './components/app'
library.add(faSearch)
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.use(BootstrapVue);

const app = new Vue({
    el: '#app',
    components:{App},
})
