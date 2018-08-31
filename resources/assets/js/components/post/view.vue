<template>
   <div>
        <div class="form-group">
             <label>title </label>
              <p> {{ post.title }} </p>
        </div>
        <div class="form-group">
             <label>body</label>
             <p> {{post.content}} </p>
        </div>
        <div class="form-group">
              <label>image</label>
               <img :src="'../image/'+post.image" alt="">
        </div>
        <div class="form-group">
              <label>status</label>
              <p>
                  <span v-if="post.status==1">hien thi</span>
                  <span v-else> Khong hien thi </span>
              </p>
        </div>
        <div class="form-group">
               <label>hot</label>
               <p>
                        <span v-if="post.hot == 2 ">Tin noi bat</span>
                        <span v-else>Tin khong noi bat</span>
                </p>
        </div>

        <br>

        <span class="glyphicon glyphicon-arrow-left"></span>
        <router-link v-bind:to="'/'">Back to post list</router-link>

   </div>

</template>

<script>
  import { mapActions } from 'vuex'
    export default{
            data:function(){
                return {
                     post: {

                     }
                }
            },
            methods:{
              ...mapActions(['getBlogsEdit'])
            },
            created:function(){
              this.getBlogsEdit({
                  id: this.$route.params.id,
                  cb: (blog)=>{
                        this.post = Object.assign({}, this.post, blog)
                  }
              })
            }
    }
</script>