<template>
 <form v-on:submit.prevent = "formSubmit">
  <div class="form-group">
    <label for=""> title </label>
    <input type="text" class="form-control" v-model="post.title">
  </div>

  <div class="form-group">
    <label> content</label>
    <textarea class="form-control" v-model="post.content"></textarea>
  </div>

  <div class="form-group">
    <label for="add-name">image</label>
    <input id="add-name" type="file" name="name"  class="form-control" @change="imageChanged"  />
    <img width="200px" v-if="dataPost.image" :src="'../image/'+dataPost.image" alt="">
  </div>

  <div class="form-group">
    <label>category</label>
    <select  class="form-control" v-model="post.category_id">
      <option disabled value="">Please select one</option>
      <option v-for="(category , index ) in dataCategory" :value="category.id" :key="index"> {{category.name}} </option>
    </select>
  </div>


  <div class="form-group">
    <label for="add-body"> status </label>
    <select v-model="post.status" class="form-control">
      <option disabled value="">Please select one</option>
      <option value="1">hien thi</option>
      <option value="0">khong hien thi </option>
    </select>
  </div>

  <div class="form-group">
    <label> hot </label>
    <select v-model="post.hot" class="form-control">
     <option disabled value="">Please select one</option>
     <option value="2">tin noi bat</option>
     <option value="1">tin khong noi bat </option>
   </select>
 </div>

 <button class="btn btn-xs btn-default" type="submit">
  <span v-if="this.type === 'create'">Tạo slide</span><span v-else>Lưu lại</span>
</button>
<router-link class="btn btn-xs btn-warning" v-bind:to="{path: '/list-post'}">Cancel</router-link>
</form>
</template>

<script>
  import { mapActions , mapGetters } from 'vuex';
  export default{
    data:function(){
     return {
      post: {
        title     : '',
        content   : '',
        image     : '',
        category_id  : '',
        status    : '',
        hot       : '',
        user_id   : 1,
      },
      categories   : []
    }
  },
  props:{
   type: {
    type: String,
    default: 'create'
  },
  dataCategory:{

  },
  dataPost: {
    type: Object,
    default: () => {
      return{
        title    : '',
        content   : '',
        image     : '',
        category_id  : '',
        status    : '',
        hot       : '',
        user_id   : 1,
        check     : 0

      }
    }
  },

},
methods:{

  imageChanged(e){
    var fileReader = new FileReader();
    fileReader.readAsDataURL(e.target.files[0]);
    fileReader.onload = (e) =>{
     this.post.image = e.target.result;
     this.post.check = 1;
   }
 },

 formSubmit(){
  let blog = Object.assign({},this.post);
  this.$emit('submit',blog);
}
},



created(){
 this.post =Object.assign({} , this.post ,this.dataPost,this.dataCategory)
}



}
</script>