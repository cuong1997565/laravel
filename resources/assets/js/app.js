require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);

let AppLayout= require('./components/App.vue');
import router from './router';


// // show the list post template
// const Listcategory = Vue.component('Listcategory', require('./components/category/list.vue'));
// const Addcategory = Vue.component('Addcategory', require('./components/category/add.vue'));
// const Editcategory = Vue.component('Editcategory', require('./components/category/edit.vue'));
// const Viewcategory = Vue.component('Viewcategory',require('./components/category/view.vue'));
// const Deletecategory = Vue.component('Deletecategory',require('./components/category/delete.vue'));

// ///slide
// const Listslide = Vue.component('Listslide',require('./components/slide/list.vue'));
// const Addslide = Vue.component('Addslide', require('./components/slide/add.vue'));
// const Editslide = Vue.component('Editslide',require('./components/slide/edit.vue'));
// const Viewslide = Vue.component('Viewslide',require('./components/slide/view.vue'));
// const Deleteslide = Vue.component('Deleteslide',require('./components/slide/delete.vue'));

// ////post

// const Listpost = Vue.component('Listpost', require('./components/post/list.vue'));
// const Addpost = Vue.component('Addslide', require('./components/post/add.vue'));
// const Editpost = Vue.component('Editpost',require('./components/post/edit.vue'));
// const Viewpost = Vue.component('Viewpost',require('./components/post/view.vue'));
// const Deletepost = Vue.component('Deletepost',require('./components/post/delete.vue'));



// registering Modules
Vue.use(VueRouter,VueAxios, axios,VeeValidate);

// const routes = [
//   {
//     name: 'Listcategory',
//     path: '/',
//     component: Listcategory
//   },

//   {
//     name: 'Addcategory',
//     path: '/add-category',
//     component: Addcategory
//   },
//   {
//     name: 'Editcategory',
//     path: '/edit-category/:id',
//     component: Editcategory
//   },
//   {
//     name: 'Deletecategory',
//     path: '/category-delete',
//     component: Deletecategory
//   },
//   {
//     name: 'Viewcategory',
//     path: '/view-category/:id',
//     component: Viewcategory
//   },
//   {
//     name:  'Listslide',
//     path: '/list-slide',
//     component: Listslide
//   },
//   ///////slide
//   {
//     name: 'Addslide',
//     path: '/add-slide',
//     component: Addslide
//   },
//    {
//     name: 'Editslide',
//     path: '/edit-slide/:id',
//     component: Editslide
//   },
//   {
//     name: 'Viewslide',
//     path: 'view-slide',
//     component: Viewslide
//   },
//   {
//     name: 'Deleteslide',
//     path: 'delete-slide',
//     component: Deleteslide
//   },

//   //////////post
//   {
//     name      : 'Listpost',
//     path      : '/list-post',
//     component :  Listpost
//   },
//     {
//     name: 'Addpost',
//     path: '/add-post',
//     component: Addpost
//   },
//      {
//       name: 'Editpost',
//       path: '/edit-post/:id',
//       component: Editpost
//     },
//     {
//       name: 'Viewpost',
//       path: 'view-post',
//       component: Viewpost
//     },
//     {
//       name: 'Deletepost',
//       path: 'delete-post',
//       component: Deletepost
//     }

// ];

// const router = new VueRouter({ mode: 'history', routes: routes});

// new Vue(
//  Vue.util.extend(
//  { router },
//  AppLayout
//  )
// ).$mount('#app');
// const app = new Vue({
//     el: '#app',
//     router,
//     AppLayout
// })
new Vue(
 Vue.util.extend(
 { router },
 AppLayout
 )
).$mount('#app');