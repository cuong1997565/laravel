require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;
import swal from 'sweetalert';
import Paginate from 'vuejs-paginate'

import VeeValidate from 'vee-validate';

Vue.use(VeeValidate,swal);

let AppLayout= require('./components/App.vue');

import router from './router';

import store from './store';
Vue.component('paginate', Paginate)


// registering Modules
Vue.use(VueRouter,VueAxios, axios,VeeValidate);
new Vue(
 Vue.util.extend(
{ router,store},
 AppLayout,

 )
).$mount('#app');