require('./bootstrap');


import Vue from 'vue';



/* Vue.component('customHeader', require('./views/layouts/header.vue').default); */

import router from './routes';


const app = new Vue({
    el:'#app',
    router: router,

})
