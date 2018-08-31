<template id="list-category">
  <div class="row">
    <div class="pull-right">
      <router-link class="btn btn-xs btn-primary" v-bind:to="{path: '/add-post'}">
        <span class="glyphicon glyphicon-plus"></span>
        Add new post
      </router-link>
    </br></br>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th> title </th>
          <th> content </th>
          <th>image</th>
          <th>category</th>
          <th>status</th>
          <th>hot</th>

          <th class="col-md-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(blog, index) in allBlogs">
          <td>{{ index + 1 }}</td>
          <td>{{ blog.title }}</td>
          <td>{{ blog.content}}</td>
          <td>
              <img width="100px" :src="'../image/'+ blog.image" alt="">
          </td>

          <td v-for="(category, index) in allCategories" v-if=" category.id == blog.category_id ">
              {{ category.name }}
          </td>
          <td>
                   <span v-if="blog.status == 1">Hien thi</span>
                   <span v-else>Khong hien thi </span>
           </td>

          <td>
              <span v-if="blog.hot == 2">Tin hot</span>
              <span v-else>Tin khong hot </span>
          </td>
          <td>
            <router-link class="btn btn-info btn-xs" v-bind:to="{name: 'Viewpost', params: {id: blog.id}}"><i class="fa fa-eye" aria-hidden="true"></i> Show</router-link>
            <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'Editpost', params: {id: blog.id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</router-link>
            <a @click="deleteBlog(blog.id)" class="btn-xs btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  import { mapActions,mapGetters,} from 'vuex';

    export default{
        data: function(){
            return {
                 blog       : '',
                 categories   : []
            }
        },



  mounted () {
    this.$store.dispatch('getBlogs')
    this.$store.dispatch('getCategory')
  },

   computed: {
        ...mapGetters(['allBlogs']),
        ...mapGetters(['allCategories'])
    },

    methods:{
        ...mapActions(['removeBlog']),
        deleteBlog(id){
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
                  this.removeBlog(id)
                } else {
                  swal("Your delete category !");
                }
              });
        }
    }



    }
</script>