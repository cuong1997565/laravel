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
        <tr v-for="(post, index) in postvue">
          <td>{{ index + 1 }}</td>
          <td>{{ post.title.slice(0,50) }}</td>
          <td>{{ post.content.slice(0,80) }}</td>
          <td>
              <img width="100px" :src="'../image/'+ post.image" alt="">
          </td>

          <td v-for="(category, index) in categorySelect" v-if=" category.id == post.category_id ">
              {{ category.name }}
          </td>

          <td>
                   <span v-if="post.status == 1">Hien thi</span>
                   <span v-else>Khong hien thi </span>
           </td>

          <td>
              <span v-if="post.hot == 2">Tin hot</span>
              <span v-else>Tin khong hot </span>
          </td>

          <td>
            <router-link class="btn btn-info btn-xs" v-bind:to="{name: 'Viewpost', params: {id: post.id}}"><i class="fa fa-eye" aria-hidden="true"></i> Show</router-link>
            <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'Editpost', params: {id: post.id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</router-link>
            <router-link class="btn btn-danger btn-xs" v-bind:to="{name: 'Deletepost', params: {id: post.id}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</router-link>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default{
        data: function(){
            return {
                 post       : '',
                 categories   : []
            }
        },
        methods:{
            postdata(){
            let url = 'http://blog.test/post';
            Axios.get(url).then((response)=>{
                    this.post = response.data;
            });

           },
           categoryId(){
               let url = 'http://blog.test/category';
               Axios.get(url).then((response)=>{
                    this.categories = response.data;
               });
           }
        },

        created(){
            this.postdata()
            this.categoryId()
        },
        computed: {
            postvue : function(){
                if(this.post.length){
                    return this.post;
                }
            },

            categorySelect : function(){
                 if(this.categories.length){
                     return this.categories;
                 }
            }
        }

    }
</script>