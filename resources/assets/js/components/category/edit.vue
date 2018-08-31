<template id="edit-post">
  <div>
    <h3>Edit Category</h3>
     <formEdit v-if="category.id"  type="edit"  @submit="formUpdate" :dataCategory="category" ></formEdit>
  </div>
</template>

<script type="text/javascript">
import { mapActions } from 'vuex'
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
         methods: {
        ...mapActions(['pushCategory','getCategoryEdit']),
           formUpdate(category){
            this.pushCategory({
                  category : category,
                  cb: () =>{
                      this.$router.push({name: 'Category'})
                  }
            })
        }
    },


    mounted() {
        this.getCategoryEdit({
            id: this.$route.params.id,
            cb: (category) => {
                this.category = Object.assign({}, this.category, category)
            }
        })
    }
    }
</script>
