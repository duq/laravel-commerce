
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vuetify from 'vuetify';
import VueRouter from 'vue-router';
import Checkout from "./components/client/Checkout";

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('product-card', require('./components/client/ProductCard').default);
Vue.use(Vuetify);
Vue.use(VueRouter);
/**
 *  VueRouter routes.
 */

const router = new VueRouter({
   mode: 'history',
    routes: [
        {
            path: '/checkout',
            name: 'checkout',
            component: Checkout
        }
    ],
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({
        icons: {
          iconfont: 'mdiSvg',
            theme: {
                primary: '#9652ff',
                success: '3cd1c2',
                info: 'ffaa2c',
                error: 'f83e70'
            }
        },
    }),
    router,
});
