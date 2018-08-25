<template>
    <div>
        <form @submit.prevent="deleteslise">
            <div class="form-group">
                <label> title </label>
                <p> {{ post.title }} </p>
            </div>

            <div class="form-group">
                <label>content</label>
                <p> {{post.content}} </p>
            </div>

            <div class="form-group">
                 <label> image </label>
                 <img :src="'../image/'+post.image" alt="">
            </div>

            <div>
              <strong>status: </strong>
                 <span v-if="post.status ==1">Hien thi</span>
                 <span v-else> Khong hien thi  </span>
            </div>
            <br>
             <span class="glyphicon glyphicon-arrow-left"></span>

             <button class="btn btn-xs btn-danger" type="submit"  name="button">Delete</button>
            <router-link v-bind:to="'/'">Back to post list</router-link>
       </form>
    </div>

</template>

<script>
     export default{
          data: function(){
              return {
                 post:{

                 }
              }
          },

          created:function(){
                let url = 'http://blog.test/post/'+this.$route.params.id;
                Axios.get(url).then((response)=>{
                        this.post = response.data;
                });
            },
     }
</script>