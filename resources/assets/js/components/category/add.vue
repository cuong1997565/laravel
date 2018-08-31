<template>
<div>
    <h3>Add new Category</h3>
        <formAddCategory @submit="formSubmit"></formAddCategory>
  </div>

</template>

<script>
import { mapActions } from 'vuex'
import formAddCategory from './form.vue'

    export default{
    components: {
       formAddCategory
     },

       methods: {
        ...mapActions(['pushCategory']),

        formSubmit(category){

           this.pushCategory({
              category: category,
              cb: () =>{
                      this.$router.push({name: 'Category'})
              }
           })

        }
    }
    }
</script>