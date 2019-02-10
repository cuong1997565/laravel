<template id="slide">
    <form v-on:submit.prevent = "formSubmit">
             <div class="form-group">
                <label for="add-name">image</label>
               <!--  <input id="add-name" type="file" name="name"  class="form-control" @change="imageChanged"  />
                <img width="150px" v-if="dataSlide.image" :src="'../image/'+dataSlide.image" /> -->
            <input type="file" @change="imageChanged" id="add-name"  name="image" >
            <img id="output" v-if="dataSlide.id >0" :src="'../image/'+dataSlide.image"/>
            <img id="output" v-else />


              </div>

              <div class="form-group">
                <label for="add-body"> status </label>
                <select v-model="slide.status" class="form-control">
                      <option disabled value="">Please select one</option>
                      <option value="1">hien thi</option>
                      <option value="0">khong hien thi </option>
                    </select>
              </div>
            <button class="btn btn-xs btn-default" type="submit">
                      <span v-if="this.type === 'create'">Tạo slide</span><span v-else>Lưu lại</span>
            </button>
         <router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
     </form>
</template>


<script type="text/javascript">
    export default{
        data: function(){
            return {
                slide:{
                 image  : '',
                 status : ''
            },
            filters: {
                q: null,

            }
           }
        },

        props: {
               type: {
            type: String,
            default: 'create'
        },
        dataSlide: {
            type: Object,
            default: () => {
                return {
                 image  : '',
                 status : '',
                 check  : 0
                }
            }
          }
        },

        methods:{
        formSubmit:function(){
                let blog = Object.assign({}, this.slide)
                this.$emit('submit',blog);
            },
            imageChanged(event){
                 console.log(event.target.files[0].name);
                  // var fileReader = new FileReader();
                  // fileReader.readAsDataURL(e.target.files[0]);
                  // fileReader.onload = (e) =>{
                  //      // this.slide.image = e.target.files[0].name
                  //      this.slide.image = e.target.result;
                  //      this.slide.check = 1;
                  //  }
                  this.slide.image = event.target.files[0].name;
                   var reader = new FileReader();
                  reader.onload = (e) =>{
                    this.slide.image = event.target.files[0].name;
                    var output = document.getElementById('output');
                    output.src = reader.result;
                  };
                  reader.readAsDataURL(event.target.files[0]);

            }

        },

         created(){
            this.slide =Object.assign({},this.slide,this.dataSlide)
        }
    }
</script>