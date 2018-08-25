<template id="edit-post">
  <div>
    <h3>Edit Category</h3>
     <editSlide v-if="slide.id"  type="edit"  @submit="formUpdate" :dataSlide="slide" ></editSlide>
  </div>
</template>

<script type="text/javascript">

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
         created: function(){
            let url = 'http://blog.test/slide/'+this.$route.params.id+'/edit';
             Axios.get(url).then((response) =>{
             this.slide = response.data;
            });
         },

        methods:{
               formUpdate: function(blog) {
                      let url = 'http://blog.test/slide/'+this.$route.params.id;
                      Axios.patch(url, blog).then((response) => {
                      this.$router.push({name: 'Listslide'})
                  })
             }
        }
    }
</script>
