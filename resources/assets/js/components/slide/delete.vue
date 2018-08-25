<template id="post">
       <form @submit.prevent="deleteslise">
            <div class="form-group">
                <label> image </label>
                <img width="150px" :src="'../image/'+slide.image"  alt="">
            </div>

            <div>
              <strong>status: </strong>
                 <span v-if="slide.status ==1">Hien thi</span>
                 <span v-else> Khong hien thi  </span>
            </div>
            <br>
             <span class="glyphicon glyphicon-arrow-left"></span>

             <button class="btn btn-xs btn-danger" type="submit"  name="button">Delete</button>
             <router-link v-bind:to="'/'">Back to post list</router-link>
       </form>
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
            },

            methods:{
                deleteslise: function(){
                let url = 'http://blog.test/slide/'+this.$route.params.id;
                        Axios.delete(url,this.slide).then((response)=>{
                            this.$router.push({name: 'Listslide'});
                        });
                }
            }
    }
</script>