
import Vue from 'vue'
import Vuex from 'vuex'
import createLogger from 'vuex/dist/logger'

import {
    FETCHING_RESOURCES,
    FETCHING_RESOURCES_DONE,
    FETCHING_RESOURCES_FAIL
} from './mutation-types';
import  category from './modules/category.js';
import  slide from './modules/slide.js';
import  blog from './modules/blog.js';
console.log(module)


Vue.use(Vuex)
const debug = process.env.NODE_ENV !== 'production'

/**
 * Global app states
 */
const state = {
  iloading: false,
  app_errors: null
}

/**
 * Global app actions
 */
const actions = {}

/**
 * Global app mutations
 */
const mutations = {
    /**
   * Turn on the loading image when resource fetching initial
   */
  [FETCHING_RESOURCES]: (state) => {
    state.iloading = true
  },

  /**
   * Turn of the loading image when resource fetching done
   */
  [FETCHING_RESOURCES_FAIL]: (state, err) => {
    state.iloading = false
    state.app_errors = err.response
  },

  /**
   * Turn of the loading image when resource fetching done
   */
  [FETCHING_RESOURCES_DONE]: (state) => {
    state.iloading = false
  },
}

/**
 * Global app getters
 */
const getters = {
  loading(state) {
    return state.iloading
  },
  app_errors(state) {
    return state.app_errors
  }
}

export default new Vuex.Store({
    strict: debug,
    modules: {
        blog,
        category,
        slide
    },
    state,
    actions,
    mutations,
    getters,
    plugins: debug ? [createLogger()] : []
});
