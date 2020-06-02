/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');

// import Vuetify from "../plugins/vuetify";

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/NavComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('home-component', require('./components/HomeComponent').default);
Vue.component('nav-component', require('./components/NavComponent.vue').default);
Vue.component('parallax-component', require('./components/ParallaxComponent.vue').default);

Vue.component('clases-component', require('./components/page/ClasesComponent').default);
Vue.component('cursos-component', require('./components/page/CursosComponent').default);
Vue.component('video-component', require('./components/page/VideoComponent').default);
Vue.component('videolist-component', require('./components/page/VideolistComponent').default);
Vue.component('inscripcion-component', require('./components/page/InscripcionComponent').default);

//student
Vue.component('home-component', require('./components/student/HomeComponent').default);
Vue.component('student-video-component', require('./components/student/VideoComponent').default);
Vue.component('video-list-component', require('./components/student/VideoListComponent').default);
Vue.component('profile-component', require('./components/student/ProfileComponent').default);
Vue.component('suscripcion-component', require('./components/student/SuscripcionComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    // vuetify: Vuetify,
    vuetify: new Vuetify(),
    el: '#app',
    data: () => ({
        items1: [
            {
                text: 'Dashboard',
                disabled: false,
                href: 'breadcrumbs_dashboard',
            },
            {
                text: 'Link 1',
                disabled: false,
                href: 'breadcrumbs_link_1',
            },
            {
                text: 'Link 2',
                disabled: true,
                href: 'breadcrumbs_link_2',
            },
        ],
        items2: [
            { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg' },
        ],
        universidad_1: null,
        universidad_2: null,
        overlay: false,

    }),
});
