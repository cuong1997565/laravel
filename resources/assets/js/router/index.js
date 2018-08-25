import Vue from 'vue';
import Router from 'vue-router';

import CategoryRouter from './CategoryRouter.js';
import  PostRouter from './PostRouter.js';
import SlideRouter from './SlideRouter.js';

/////////////////////////////


Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [
        ...CategoryRouter,
        ...PostRouter,
        ...SlideRouter
    ],
});
