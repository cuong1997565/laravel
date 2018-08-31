<template id="list-slide">
<div class="row">
    <div class="pull-right">
      <router-link class="btn btn-xs btn-primary" v-bind:to="{path: '/add-slide'}">
        <span class="glyphicon glyphicon-plus"></span>
        Add new slide
      </router-link>

    </br></br>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>slide image</th>
          <th>status</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th class="col-md-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(slide, index) in allSlide">
          <td>{{ index + 1 }}</td>
          <td>
            <img width="100px" :src="'../image/'+slide.image" alt="">
         </td>
          <td>
            <span v-if="slide.status == 1">hien thi</span>
            <span  v-else>
                khong hien thi
            </span>
          <td>{{ slide.created_at }}</td>
          <td>{{ slide.updated_at }}</td>
          <td>
            <router-link class="btn btn-info btn-xs" v-bind:to="{name: 'Viewslide', params: {id: slide.id}}"><i class="fa fa-eye" aria-hidden="true"></i> Show</router-link>
            <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'Editslide', params: {id: slide.id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</router-link>
           <a  @click="deleteSlide(slide.id)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script type="text/javascript">
  import { mapActions,mapGetters,} from 'vuex';
    export default{
         data:function(){
        return {slide: ''};
      },

      mounted() {
             this.$store.dispatch('getSlide')
      },

      computed: {
            ...mapGetters(['allSlide'])
      },
      methods:{
              ...mapActions(['removeSlide']),
        deleteSlide(id){
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
                  this.removeSlide(id);
                } else {
                  swal("Your delete category !");
                }
              });
        }
      }
    }
</script>

<style>

</style>