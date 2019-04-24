
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import axios from 'axios'
// import VueAxios from 'vue-axios'
import VeeValidate from 'vee-validate'
import validationMessagesEn from 'vee-validate/dist/locale/en';
import validationMessagesFr from 'vee-validate/dist/locale/fr';

import Menu from './components/menu'
import Contact from './components/contact'
// import Home from './components/home'
// import About from './components/about'
// import Services from './components/services'
// import Skills from './components/skills'

// Vue.use(VueAxios, axios);

Vue.use(VeeValidate, {
  fieldsBagName: 'veeFields',
  locale: document.documentElement.lang,
  dictionary: {
    en: validationMessagesEn,
    fr: validationMessagesFr
  }
});

Vue.component('app-menu', Menu);
Vue.component('app-contact', Contact);
// Vue.component('app-home', Home);
// Vue.component('app-services', Services);
// Vue.component('app-about', About);
// Vue.component('app-skills', Skills);

const app = new Vue({
    el: '#app'
});
