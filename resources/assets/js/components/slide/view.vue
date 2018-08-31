<template id="post">
      <div>
               <img :src="'../image/'+slide.image" alt="">
            <div>
              <strong>status: </strong>
                 <span v-if="slide.status ==1">Hien thi</span>
                 <span v-else> Khong hien thi  </span>
            </div>
            <br>
             <span class="glyphicon glyphicon-arrow-left"></span>
             <router-link v-bind:to="'/'">Back to post list</router-link>
      </div>
</template>

<script type="text/javascript">
      import { mapActions } from 'vuex'
    export default{
            data: function(){
                return {
                    slide:{
                        image  : '',
                        status : ''
                    }
                }
            },
            methods:{
           ...mapActions(['getSlideEdit'])
            },
            mounted(){
                this.getSlideEdit({
                id: this.$route.params.id,
                cb : (slide) =>{
                     this.slide = Object.assign({}, this.slide,slide)
                }
            })
            }

    }
</script>