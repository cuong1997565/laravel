 $(document).on('click','.created-model',function(){
               $('#create').modal('show');
               $('.form-horizontal').show();
               $('.actionBtn-add').text('add');
               $('.modal-title-add').text('add category');
       });
     //function edit product
 $(document).on('click','.edit-modal',function(){
            $('#footer_action_button').text('Update Category');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').addClass('edit');
            $('.actionBtn').text('edit');
            $('.modal-title').text('Category Edit');
            $('.deletecontent').hide();
            $('.form-horizontal').show();
        $('#myModal').modal('show');

     });


     //function delete image
       $(document).on('click','.delete-modal',function(){
        $('#footer_action_button').text('Delete Category');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').addClass('delete');
        $('.actionBtn').text('delete');
        $('.modal-title').text('delete');
        $('.deletecontent').show();
        $('.form-horizontal').hide();
        $('#myModal').modal('show');
     });
