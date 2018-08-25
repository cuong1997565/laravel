@extends('backend.master')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm slide</div>
                    <div class="panel-body">
                        <form method="post" id="slide" name="slide" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>image</label>
                                        <input  type="file" name="image" value="" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>An/Hien</label>
                                           <input type="radio" name="status" value="1">Hien thi
                                            <input type="radio" name="status" value="0">An</div>
                                    </div>
                                        {{csrf_field()}}
                                      <div class="form-group">
                                             <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
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
@section('js')
<script>
    jQuery(document).ready(function($) {
        $('#slide').submit(function(event) {
            event.preventDefault();
            var formData = new FormData();
            formData.append('file', $('input[name="image"]').prop("files")[0]);
            formData.append('status', $('input[name="status"]').val());
            $.ajax({
                url: '{{ route('post.addslide') }}',
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