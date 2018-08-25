<template id="edit-post">
  <div>
    <h3>Edit Category</h3>
     <formEdit v-if="category.id"  type="edit"  @submit="formUpdate" :dataCategory="category" ></formEdit>
  </div>
</template>

<script type="text/javascript">

import formEdit from './form.vue'
    export default{
         components: {
            formEdit
         },
        data: function(){
                 return {
            category: {

            }
        }

         },
         created: function(){
            let url = 'http://blog.test/category/'+this.$route.params.id+'/edit';
             Axios.get(url).then((response) =>{
             this.category = response.data;
            });
         },

        methods:{
         formUpdate: function(blog) {
              let url = 'http://blog.test/category/'+this.$route.params.id;
              Axios.patch(url, blog).then((response) => {
              this.$router.push({name: 'Listcategory'})
         })
            }
        }
    }
</script>
