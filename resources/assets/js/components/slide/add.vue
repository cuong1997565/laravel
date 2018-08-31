<template id="add-slide">
    <addSlide @submit="formSubmit"></addSlide>
</template>

<script>
import addSlide from './form-data.vue'
import { mapActions } from 'vuex'
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
            ...mapActions(['pushSlide']),
            formSubmit(slide){
                 // let url = "http://blog.test/slide";
                 // Axios.post(url , blog).then((response)=>{
                 //          this.$router.push({name: 'Listslide'});
                 // });

                 this.pushSlide({
                        slide : slide,
                        cb : ()=>{
                            this.$router.push({name: 'Listslide'})
                        }
                 });
            }
        }
  }
</script>
