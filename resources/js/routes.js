import Vue from 'vue';
import Router from 'vue-router';




Vue.use(Router);
export default new Router({
        routes: [
                {
                  name: 'Home',  
                path: '/',
                component: require('./views/home').default

                },
                {
                  name: 'About',  
                path: '/About',
                component: require('./views/about.vue').default


                },
                {
                  name: 'Contact',  
                path: '/Contact',
                component: require('./views/contact.vue').default
                },
                {
                  name: 'Help',  
                path: '/Help',
                component: require('./views/help').default
                },
                {
                   
                path: '*',
                component: require('./views/404').default
                },

        ],
        linkExactActiveClass: 'active',
        linkActiveClass: 'visited',

})