<template id="delete-category">
   <div>
    <h3>Delete category {{ category.name  }}</h3>
    <form v-on:submit.prevent = "deletePost">
      <p>The action cannot be undone</p>
      <button class="btn btn-xs btn-danger" type="submit" name="button">Delete</button>
      <router-link class="btn btn-xs btn-primary" v-bind:to="'/'">Back</router-link>
    </form>
  </div>
</template>

<script>
import { mapActions } from 'vuex'
    export default{
       data : function(){
             return { category:
                {name: '',
                 color: ''
             }}
        },



        methods:{
            ...mapActions(['pushCategory','getCategory']),
            deletePost: function(){
                let url = 'http://blog.test/category/'+this.$route.params.id;
                Axios.delete(url , this.category).then((response) => {
                     this.$router.push({name: 'Category'})
                 })
            }
        },



        mounted(){
          this.getCategory({
              id: this.$route.params.id,
              cb: (category) =>{
                  this.category = Object.assign({}, this.category , category)
              }

          })
        }



    }
</script>