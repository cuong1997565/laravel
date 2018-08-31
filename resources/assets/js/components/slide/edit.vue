<template id="edit-post">
  <div>
    <h3>Edit Category</h3>
     <editSlide v-if="slide.id"  type="edit"  @submit="formUpdate" :dataSlide="slide" ></editSlide>
  </div>
</template>

<script type="text/javascript">
 import { mapActions } from 'vuex'
import editSlide from './form-data.vue'
    export default{
         components: {
            editSlide
         },
        data: function(){
                 return {
            slide: {

            }
        }

         },
        methods:{
         ...mapActions(['pushSlide' , 'getSlideEdit']),
            formUpdate: function(slide) {
                this.pushSlide({
                    slide: slide,
                    cb : () =>{
                       this.$router.push({name: 'Listslide'})
                    }
                })
             }
        },
        mounted(){
            this.getSlideEdit({
                id: this.$route.params.id,
              cb: (slide) =>{
                this.slide = Object.assign({}, this.slide,slide)
              }
            })
        },

    }
</script>
