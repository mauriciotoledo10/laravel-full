/**
 * If you are having issues just try toe use window.Vue = require('vue'); only.
 */
require('./bootstrap');
window.Vue = require('vue').default;

/* If nothing was working here just use <import * as VueRouter from 'vue-router'>
 * and you should be good!
 */
import VueRouter from 'vue-router'

import App from './App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import { routes } from './routes';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});