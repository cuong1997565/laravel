<template>
    <editPost v-if="post.id" @submit="update" :dataPost="post"></editPost>
</template>

<script type="text/javascript">
import editPost from './form-post.vue';
    export default{
       components: {
            editPost
       },
       data:function(){
          return{
               post: {

               }
          }
       },

       created(){
           let url ='http://blog.test/post/' +this.$route.params.id+ '/edit';
           Axios.get(url).then((response)=>{
                 this.post = response.data;
           });

       },

       methods:{
           update: function(blog){
           let url ='http://blog.test/post/' +this.$route.params.id;
            Axios.patch(url,blog).then((response)=>{
                this.$router.push({name: 'Listpost'})
            });
           }
       }

    }
</script>