/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuetify from 'vuetify';
Vue.use(Vuetify);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Non-Auth
Vue.component('navbar-component', require('./components/non-auth/NavbarComponent.vue').default);
Vue.component('hero-component', require('./components/non-auth/Hero.vue').default);
Vue.component('content_one-component', require('./components/non-auth/ContentOne.vue').default);
Vue.component('content_four-component', require('./components/non-auth/ContentFour.vue').default);
Vue.component('content_two-component', require('./components/non-auth/ContentTwo.vue').default);
Vue.component('content_three-component', require('./components/non-auth/ContentThree.vue').default);
Vue.component('footer-component', require('./components/non-auth/Footer.vue').default);
Vue.component('login-component', require('./components/non-auth/LoginPage.vue').default);
Vue.component('register-component', require('./components/non-auth/RegisterPage.vue').default);
Vue.component('validation-error', require('./components/non-auth/ValidationError.vue').default);


// Auth
Vue.component('dashboard-component', require('./components/auth/Dashboard.vue').default);
Vue.component('ask_question-component', require('./components/auth/AskQuestion.vue').default);
<<<<<<< HEAD
Vue.component('single_question-component', require('./components/auth/SingleQuestion.vue').default);
=======
Vue.component('answer_question-component', require('./components/auth/AnswerQuestion.vue').default);
>>>>>>> 764eb1f3c4397f71bf0ae877877b45f07792e638

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
     el: '#app',
     vuetify: new Vuetify({
        icons: {
            iconfont: 'mdi', // default - only for display purposes
          },
     }),
 });
