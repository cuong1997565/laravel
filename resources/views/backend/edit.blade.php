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
                    <div class="panel-heading">Sua  slide</div>
                    <div class="panel-body">
                        <form method="post" id="edit" name="edit" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>image</label>
                                  <img width="200px" src="../../../image/{{$slide->image}}" class="thumbnail">
                                        <input  type="file" value="{{$slide->image}}" name="image"  class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>An/Hien</label>
{{--
                                           <input type="radio" @if($slide->status == 1) checked  @endif class="checkbox" name="status" value="{{$slide->status}} ">Hien thi
                                            <input type="radio" @if($slide->status == 0) checked @endif  name="status" class="checkbox" value="{{$slide->status}}">An --}}
                                        <select name="status" class="form-control" id="status">
                                                <option @if($slide->status == 1) checked  @endif value="1">hien thi</option>
                                               <option @if($slide->status == 0) checked @endif value="0">Khong hien thi</option>

                                            </select>
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

 @section('js')
<script>
    jQuery(document).ready(function($) {
        $('#edit').submit(function(event) {
                  event.preventDefault();
            var formData = new FormData();
            formData.append('file', $('input[name="image"]').prop("files")[0]);
            formData.append('status', $("#status").val());
            $.ajax({
                url: '{{ route('post.update', ['id' => $slide->id]) }}',
                data: formData,
                processData: false,
                contentType: false,
                type: 'post',
                success: function ( data ) {
                    alert( data );
                }
            });
        });
    });
    </script>
@endsection


