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
    export default{
        data : function(){
             return { category:
                {name: '',
                 color: ''
             }}
        },

        created: function(){
              let url = 'http://blog.test/category/'+this.$route.params.id;
              Axios.get(url).then( (response) =>{
                        this.category = response.data;
              });

        }

    }
</script>
