<template>
 <form v-on:submit.prevent = "formSubmit">


   <div class="form-group">
    <label for="add-name">Name</label>
    <input v-validate="'required'" id="add-name" type="text" name="name"  v-model="category.name" class="form-control" />
    <span v-show="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>

  </div>

  <div class="form-group">
    <label for="add-body">Color</label>
    <input  id="add-body" type="color" name="color"  v-model="category.color" class="form-control" />
  </div>

  <div class="form-group">
    <label for="add-body">address</label>
    <input  id="add-body" type="text" name="address"  v-model="category.data.address" class="form-control" />
  </div>


  <div class="form-group">
    <label for="add-body">phone</label>
    <input  id="add-body" type="text" name="phone"  v-model="category.data.phone" class="form-control" />
  </div>

  <button class="btn btn-xs btn-default" type="submit">
    <span v-if="this.type === 'create'">Tạo danh muc</span><span v-else>Lưu lại</span>
  </button>
  <router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
</form>
</template>

<script>
 export default {
  data:function(){
    return {
      category:{
        name    : '',
        color   : '',
        data    : {
         address : '',
         phone   : ''
       }


     }
   }
 },
 props: {
  type: {
    type: String,
    default: 'create'
  },
  dataCategory: {
    type: Object,
    default: () => {
      return {
       name : '',
       color: ''
     }
   }
 }
},

methods:{
  formSubmit:function(){
    let blog = Object.assign({}, this.category)
    this.$emit('submit',blog);
  },
},

created(){
  this.category =Object.assign({},this.category,this.dataCategory)
}

}
</script>