 $(document).on('click','.created-model',function(){
               $('#create').modal('show');
               $('.form-horizontal').show();
               $('.actionBtn-add').text('add');
               $('.modal-title-add').text('add slide')


       });


     //function edit product
     $(document).on('click','.edit-modal',function(){
        $('#footer_action_button').text('Update Product');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').addClass('edit');
        $('.actionBtn').text('edit');
        $('.modal-title').text('Product Edit');
        $('.deletecontent').hide();
        $('.form-horizontal').show();
        $('#myModal').modal('show');

     });


     //function delete image
       $(document).on('click','.delete-modal',function(){
        $('#footer_action_button').text('delete');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').addClass('delete');
        $('.actionBtn').text('delete');
        $('.modal-title').text('delete');
        $('.deletecontent').show();
        $('.form-horizontal').hide();
        $('#myModal').modal('show');
     });
