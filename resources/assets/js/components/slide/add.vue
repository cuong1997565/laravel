<template id="add-slide">
    <addSlide @submit="formSubmit"></addSlide>
</template>

<script>
import addSlide from './form-data.vue'
export default {
        components: {
            addSlide
         },
        data: function(){
            return {slide:{
                 image  : '',
                 status : ''
            }
        }
        },
        methods:{

            formSubmit(blog){
                 let url = "http://blog.test/slide";
                 Axios.post(url , blog).then((response)=>{
                          this.$router.push({name: 'Listslide'});
                 });
            }
        }
  }
</script>
