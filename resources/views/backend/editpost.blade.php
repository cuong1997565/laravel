@extends('backend.master')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bai viet</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Sua bai viet</div>
                    <div class="panel-body">
                        <form method="post" id="edit" name="edit" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                  <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>title</label>
                                        <input required type="text" id="title" name="title" value="{{$post->title}}" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>content</label>
                                    <textarea name="content"  id="content" class="form-control"> {{ $post->content }}</textarea>
                                    </div>
                                     <div class="form-group" >
                                        <label>image</label>
                                        <img src="../../../image/{{$post->image}}" width="200px" style="margin: 15px" alt="">
                                        <input required type="file" id="image" name="image" value="" class="form-control">
                                    </div>
                                        <div class="form-group" >
                                        <label>category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="suluachon">--Su lua chon--</option>
                                            @foreach ($category as $cate)
                                                    <option @if( $cate->id == $post->category_id ) selected  @endif value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                       <label>status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="suluachon">--Su lua chon--</option>
                                            <option @if($post->status == 1) selected @endif value="1">Hien thi</option>
                                            <option @if($post->status == 0) selected @endif value="0">Khong hien thi</option>
                                        </select>
                                    </div>

                                    <div class="form-group" >
                                       <label>hot</label>
                                        <select name="hot" id="hot" class="form-control">
                                            <option value="suluachon">--Su lua chon--</option>
                                            <option @if($post->hot == 2) selected @endif value="2">Tin hot</option>
                                            <option @if($post->hot == 1) selected @endif value="1">Tin khong hot</option>
                                        </select>
                                    </div>

                                     <div class="form-group" >
                                       <label> author </label>
                                        <select name="author" id="author" class="form-control">
                                            <option value="suluachon">--Su lua chon--</option>
                                            @foreach ($datauser as $user)
                                                <option @if($user->id == $post->author_id) selected @endif value="{{ $user->id }} ">{{$user->name}}</option>
                                            @endforeach
                                        </select>
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

@section('addpost')
<script>
  jQuery(document).ready(function($) {
        $('#edit').submit(function(event){
            event.preventDefault();
            var formData = new FormData();
                   formData.append('title', $('#title').val());
                   formData.append('content',$('#content').val());
                   formData.append('category',$('#category').val());
                   formData.append('file', $('input[name="image"]').prop("files")[0]);
                   formData.append('status',$('#status').val());
                   formData.append('hot',$('#hot').val());
                   formData.append('author',$('#author').val());
            $.ajax({
                url: '{{ route('updatepost',['id'=>$post->id]) }}',
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

