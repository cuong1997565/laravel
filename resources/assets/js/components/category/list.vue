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
        <tr v-for="(category, index) in categoryvue">
          <td>{{ index + 1 }}</td>
          <td>{{ category.name }}</td>
          <td>{{ category.color }}</td>
          <td>{{ category.created_at }}</td>
          <td>{{ category.updated_at }}</td>
          <td>
            <router-link class="btn btn-info btn-xs" v-bind:to="{name: 'ViewCategory', params: {id: category.id}}"><i class="fa fa-eye" aria-hidden="true"></i> Show</router-link>
            <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'EditCategory', params: {id: category.id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</router-link>
            <router-link class="btn btn-danger btn-xs" v-bind:to="{name: 'DeleteCategory', params: {id: category.id}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</router-link>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
      data:function(){
        return {category: ''};
      },
      created: function() {
        let url = 'http://blog.test/category';
        Axios.get(url).then((response) => {
          this.category = response.data;
        });
      },
  computed: {
    categoryvue: function(){
      if(this.category.length) {
        return this.category;
      }
    }
  }
}
</script>
