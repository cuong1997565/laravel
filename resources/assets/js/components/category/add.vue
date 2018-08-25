<template>
<div>
    <h3>Add new Category</h3>
        <formAddCategory @submit="formSubmit"></formAddCategory>
  </div>

</template>

<script>
import formAddCategory from './form.vue'

    export default{
    components: {
       formAddCategory
     },
      methods:{
          formSubmit: function(blog){
                let url = "http://blog.test/category";
                Axios.post( url , blog).then((response)=>{
                      this.$router.push({name: 'Listcategory'});
                });
          }
     }
    }
</script>