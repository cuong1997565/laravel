<template>
  <editPost v-if="post.id" @submit="update" :dataPost="post" :dataCategory="allCategories"></editPost>
</template>

<script type="text/javascript">
  import { mapActions,mapGetters } from 'vuex'
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

       // created(){
       //     let url ='http://blog.test/post/' +this.$route.params.id+ '/edit';
       //     Axios.get(url).then((response)=>{
       //           this.post = response.data;
       //     });

       // },



       methods:{
        ...mapActions(['pushBlogs' , 'getBlogsEdit']),
        update: function(blog){


         this.pushBlogs({
           blog: blog,
           cb: ()=>{
             this.$router.push({name: 'Listpost'})
           }
         })

       }
     },

     mounted(){
      this.getBlogsEdit({
        id: this.$route.params.id,
        cb: (blog) =>{
          this.post = Object.assign({}, this.post, blog)
        }
      });
      this.$store.dispatch('getCategory')
    },

    computed: {
      ...mapGetters(['allCategories'])
    },

  }
</script>