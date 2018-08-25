@extends('backend.master')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">danh muc</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Sua  danh muc</div>
                    <div class="panel-body">
                        <form method="post" id="edit" name="edit">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>name</label>
                                     <input required type="text" name="name" value="{{$show->name}}" class="form-control">

                                    </div>
                                    <div class="form-group" >
                                        <label>Color</label>
                                     <input required type="color" name="color" value="{{$show->color}}" class="form-control">

                                    </div>
                                        {{csrf_field()}}
                                      <div class="form-group">
                                             <input type="submit" name="submit"  value="Thêm" class="btn btn-primary">
                                            <a href="#" class="btn btn-danger">Hủy bỏ</a>
                                      </div>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
    <div></div>
    @stop

  @section('editcategory')
        <script>
            jQuery(document).ready(function($) {
                $('#edit').submit(function(event) {
                    event.preventDefault();
                    var formData = new FormData();
                    formData.append('name', $('input[name="name"]').val());
                    formData.append('color',$('input[name="color"]').val());
                    $.ajax({
                        url: '{{ route('updatecategory',['id' => $show->id]) }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function ( data ) {
                            alert( data );
                        }
                    });
                });
            });
        </script>
@endsection


