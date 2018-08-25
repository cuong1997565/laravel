<template id="post">
      <div>
            <img width="150px" :src="'../image/'+slide.image"  alt="">
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
    export default{
            data: function(){
                return {
                    slide:{
                        image  : '',
                        status : ''
                    }
                }
            },
            created:function(){
                let url = 'http://blog.test/slide/'+this.$route.params.id;
                Axios.get(url).then((response)=>{
                        this.slide = response.data;
                });
            }
    }
</script>