<template id="post">
      <div>
            <h3> {{ category.name }} </h3>
            <strong>Color: </strong>
            <div>
                {{ category.color }}
            </div>
            <br>

             <span class="glyphicon glyphicon-arrow-left"></span>
             <router-link v-bind:to="'/'">Back to post list</router-link>
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
         ...mapActions(['getCategory']),
          },



       mounted() {

          this.getCategory({
              id: this.$route.params.id,
              cb: (category) =>{
                   this.category = Object.assign({},this.category,category)
              }
          })
    }
    }
</script>
