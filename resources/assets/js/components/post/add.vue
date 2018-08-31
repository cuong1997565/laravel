<template>
      <addPost @submit="formSubmit" :dataCategory="allCategories"></addPost>
</template>

<script>
import { mapActions,mapGetters } from 'vuex'
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
        mounted(){
             this.$store.dispatch('getCategory')
        },
        computed:{
                  ...mapGetters(['allCategories']),

                },
        methods:{
        ...mapActions(['pushBlogs']),
            formSubmit(blog){
            this.pushBlogs({
                blog : blog,
                cb: () =>{
                      this.$router.push({name: 'Category'})
                 }
            })
          }



        }
      }
</script>