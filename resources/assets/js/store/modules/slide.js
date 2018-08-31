import {
  FETCHING_RESOURCES,
  FETCHING_RESOURCES_DONE,
  FETCHING_RESOURCES_FAIL,
  SET_SLIDE,
  REMOVE_SLIDE,
  SET_DETAIL_SLIDE,
  SET_SLIDE_PAGINATION
} from '../mutation-types'

const state ={
   slides: [],
   slide: { },
   pagination: {}

}
const actions ={

    async getSlide({ commit },payload){
         axios.get('api/listslide').then(response =>{
              commit(SET_SLIDE , { list: response.data})
         }).catch(function(error){
              commit(FETCHING_RESOURCES_FAIL , error)
         })
    },

    async pushSlide({commit},payload){
         commit( FETCHING_RESOURCES )
         const { slide , cb } = payload || {}
         try{
           let response = null
            if(slide.id){
               response = await axios.put('/api/editslide/'+slide.id,slide);
            }else{
               response = await axios.post('/api/addslide',slide);
            }
            commit(FETCHING_RESOURCES_DONE)
            cb && cb(response.data.data)
         }catch(error){
              commit(FETCHING_RESOURCES_FAIL, error)
         }
    },

      async getSlideEdit({ commit }, payload) {
          const { id, cb } = payload || {}
          if(id){
            try{
            let slide = await axios.get('/api/editslide/'+id)
            commit(SET_DETAIL_SLIDE,{slide: slide.data})
            cb && cb(slide.data)
            }catch(error){
                 commit(FETCHING_RESOURCES_FAIL,error)
            }
          }

      },

    async removeSlide({commit} ,id){
        commit(FETCHING_RESOURCES)
        try{
            await axios.delete('/api/deleteslide/'+id);
            commit(FETCHING_RESOURCES_DONE)
            commit(REMOVE_SLIDE,id)
        }catch(error){
              commit(FETCHING_RESOURCES_FAIL,error)
        }
    }
}
const mutations ={
    [SET_SLIDE] (state , slides){
          state.slides = slides.list;
    },
    [SET_DETAIL_SLIDE] (state , slide){
          state.slide = slide
    },

    [REMOVE_SLIDE] (state ,id){
           let i = state.slides.map(item => item.id).indexOf(id)
           state.slides.splice(i,1)
    }
}

const getters ={
    allSlide: (state) => state.slides,
    slideDetail :(state) => state.slide

}
export default{
    state,
    actions,
    mutations,
    getters
}