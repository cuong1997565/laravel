import {
  FETCHING_RESOURCES,
  FETCHING_RESOURCES_DONE,
  FETCHING_RESOURCES_FAIL,
  SET_BLOG,
  SET_BLOG_PAGINATION,
  REMOVE_BLOG,
  SET_DETAIL_BLOG
} from '../mutation-types'

/**
 * Category state
 */
const state = {
  blogs : [] ,
  blog : {},
  test: {} ,

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
  async getBlogs({ commit }) {

         axios.get('/api/listpost')
        .then(response => {
          commit(SET_BLOG, { list: response.data })
        })
        .catch(function (error) {
            commit(FETCHING_RESOURCES_FAIL , error)
        });
        },

  async pushBlogs({ commit },payload){
    commit( FETCHING_RESOURCES )
    const { blog, cb } = payload || {}

    try{
        let response = null
        if(blog.id){
            response = await axios.put('/api/editpost/'+blog.id, blog)
        }
        else{
              response = await axios.post('/api/addpost/',blog);
        }
        commit(FETCHING_RESOURCES_DONE)
        cb && cb(response.data.data)
    }catch(error){
        commit(FETCHING_RESOURCES_FAIL,error)

    }
  },


  async getBlogsEdit({commit} , payload){
        const { id, cb } = payload || {}
        if(id){
            try{
                let blog = await axios.get('/api/editpost/'+id)
                commit(SET_DETAIL_BLOG,{blog: blog.data})
                commit(FETCHING_RESOURCES_DONE)
                cb && cb(blog.data)

            }catch(error){
                commit(FETCHING_RESOURCES_FAIL,error)
            }
        }
  },

  async removeBlog({commit},id){
        commit(FETCHING_RESOURCES)
        try{
            await axios.delete('/api/deletepost/'+id);
            commit(FETCHING_RESOURCES_FAIL)
            commit(REMOVE_BLOG,id)
        }catch(error){
              commit(FETCHING_RESOURCES_FAIL , error)
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
  [SET_BLOG] (state, list) {
    state.blogs = list.list
  },

  [SET_DETAIL_BLOG] (state , blog){
       state.blog = blog
  },
  [REMOVE_BLOG] (state, id){
        let i = state.blogs.map(item => item.id).indexOf(id)
        state.blogs.splice(i,1)
  }



  /**
   * remote category
   */
}

/**
 * Category getters
 */
const getters = {

  /**
   * Get all Category
   * @param {state} state
   */
  allBlogs: (state) => state.blogs,

  blogDetail: (state) => state.blog

}

export default {
  state,
  actions,
  mutations,
  getters
}
