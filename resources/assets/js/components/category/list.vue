<template id="list-category">
  <div class="row">
    <div class="pull-right">
      <router-link class="btn btn-xs btn-primary" v-bind:to="{path: '/add-category'}">
        <span class="glyphicon glyphicon-plus"></span>
        Add new Category
      </router-link>

      <router-link class="btn btn-xs btn-primary" v-bind:to="{path: '/list-slide'}">
        <span class="glyphicon glyphicon-plus"></span>
           List slide
      </router-link>

       <router-link class="btn btn-xs btn-primary" v-bind:to="{path: '/list-post'}">
        <span class="glyphicon glyphicon-plus"></span>
           List post
      </router-link>

    </br></br>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>category name</th>
          <th>category color</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th class="col-md-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(category, index) in allCategories">
          <td>{{ index + 1 }}</td>
          <td>{{ category.name }}</td>
          <td>{{ category.color }}</td>
          <td>{{ category.created_at }}</td>
          <td>{{ category.updated_at }}</td>
          <td>
            <router-link class="btn btn-info btn-xs" v-bind:to="{name: 'ViewCategory', params: {id: category.id}}"><i class="fa fa-eye" aria-hidden="true"></i> Show</router-link>
            <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'EditCategory', params: {id: category.id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</router-link>
           <a  @click="deleteCategory(category.id)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>

  import { mapActions,mapGetters } from 'vuex';


export default {
      data:function(){
        return {category: ''};
      },

   mounted () {
    this.$store.dispatch('getCategory')
  },

   computed: {
        ...mapGetters(['allCategories'])
    },

  methods:{
         ...mapActions(['removeCategory']),
        // filter: debounce(function () {
        //     this.categories({params: this.filters})
        // }, 500),

     deleteCategory (id) {

            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((result) => {
                if (result) {
                  swal("Your not delete category", {
                    icon: "success",
                  });
                   this.removeCategory(id)
                } else {
                  swal("Your delete category !");
                }
              });
        }
  }
}
</script>
