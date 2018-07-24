
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import axios from 'axios'
import VueAxios from 'vue-axios'

import Menu from './components/menu'
import Home from './components/home'
import About from './components/about'
import Contact from './components/contact'
import Services from './components/services'
import Skills from './components/skills'

Vue.use(VueAxios, axios);

Vue.component('app-menu', Menu);
Vue.component('app-home', Home);
Vue.component('app-services', Services);
Vue.component('app-about', About);
Vue.component('app-skills', Skills);
Vue.component('app-contact', Contact);

const app = new Vue({
    el: '#app'
});
