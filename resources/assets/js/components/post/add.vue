<template>
      <addPost @submit="formSubmit"></addPost>
</template>

<script>
import addPost from './form-post.vue';
    export default{
       components : {
          addPost
       },
        data:function(){
           return {
                post: {
                      title     : '',
                      content   : '',
                      image     : '',
                      category  : '',
                      status    : '',
                      hot       : '',
                      user_id   : 1,
                },
                 categories   : []
           }
        },
        methods:{

            formSubmit(blog){
                  let url = 'http://blog.test/post';
                  Axios.post(url , blog).then((response)=>{
                        this.$router.push({name: 'Listpost'});
                 });

            }



        }
      }
</script>