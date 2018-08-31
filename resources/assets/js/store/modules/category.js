import {
  FETCHING_RESOURCES,
  FETCHING_RESOURCES_DONE,
  FETCHING_RESOURCES_FAIL,
  SET_CATEGORY,
  SET_CATEGORY_PAGINATION,
  REMOVE_CATEGORY,
  SET_DETAIL_CATEGORY
} from '../mutation-types'

/**
 * Category state
 */
const state = {
  categories: [],
  category: {},
  pagination: {}
}

/**
 * Category actions
 */
const actions = {

  /**
   * Fetch Category data
   * @param {state}
   */


  async getCategoryEdit({ commit }, payload) {
    const { id, cb } = payload || {}

    if (id) {
      try {
        let category = await axios.get('/api/editcategory/'+id)
        commit('SET_DETAIL_CATEGORY',{category : category.data})
        commit(FETCHING_RESOURCES_DONE)
        cb && cb(category.data)
      } catch(err) {
          commit(FETCHING_RESOURCES_FAIL,err)
      }
    }
  },





  /**
   * Create or update category
   * @param state
   * @param category
   */

async pushCategory({ commit }, payload) {
    commit( FETCHING_RESOURCES )
    const { category, cb } = payload || {}

    try{

        let response = null
       if (category.id) {
            response = await axios.put('/api/postVue/'+category.id, category);

       }else{
           response = await axios.post('/api/postVue',category);
       }
       commit(FETCHING_RESOURCES_DONE)
       cb && cb(response.data.data)
    }
    catch(error){

           commit(FETCHING_RESOURCES_FAIL , error)
    }

  },



  /**
   * remote category
   * @param  {[type]}   options.commit [description]
   * @param  {[type]}   id             [description]
   * @return {[type]}                  [description]
   */

    async removeCategory({commit} , id ){
      commit(FETCHING_RESOURCES)
      try{
            await axios.delete('/api/deletecategory/'+id);
            commit(FETCHING_RESOURCES_DONE)
            commit(REMOVE_CATEGORY,id)
         }catch(err){
              commit(FETCHING_RESOURCES_FAIL,error)
            }

  },

  /**
   * get category detail
   * @param  {[type]}   options.commit [description]
   * @param  {[type]}   payload        [description]
   * @return {[type]}                  [description]
   */


  async getCategory({ commit }) {

    if (this.getters.allCategories.length == 0) {
        axios.get('/api/listcategory')
        .then(response => {
          commit(SET_CATEGORY, { list: response.data })
        })
        .catch(function (error) {
              commit(FETCHING_RESOURCES_FAIL,error)
        });
      }
  }
}

/**
 * Category mutations
 */
const mutations = {

  /**
   * Set Category data to state
   */
  [SET_CATEGORY] (state, categories) {
    state.categories = categories.list
  },


  /**
   * remote category
   */


   [SET_DETAIL_CATEGORY] (state, category){
      state.category = category

    },


 [REMOVE_CATEGORY]  (state, id) {
    let i = state.categories.map(item => item.id).indexOf(id) // find index of your object
    state.categories.splice(i, 1)
  },

}

/**
 * Category getters
 */
const getters = {

  /**
   * Get all Category
   * @param {state} state
   */
  allCategories: (state) => state.categories,

  categoryDetail :(state) => state.category,



}

export default {
  state,
  actions,
  mutations,
  getters
}
