@extends('backend.master')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quan Ly Bai Viet</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách bai viet</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{ route('addpost') }}" class="btn btn-primary created-model">Thêm bai viet</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>title</th>
                                            <th>content</th>
                                            <th>image</th>
                                            <th>category_id</th>
                                            <th>hot</th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($datapost as $element)
                                         {{-- expr --}}
                                        <tr>
                                            <td>{{$element->id}}  </td>
                                            <td>
                                             {{ str_limit($element->title,15,'....')}}
                                            </td>
                                            <td>{{ str_limit($element->content,15,'....')}}</td>
                                            <th>
                                                <img width="137px" src="../image/{{$element->image}}" alt="">
                                            </th>
                                            @foreach ($datacategory as $cate)
                                                @if($cate->id == $element->category_id)
                                                 <th>{{$cate->name}} </th>
                                                @endif
                                            @endforeach

                                            <th>
                                                @if($element->hot == 2)
                                                    Tin hot
                                                @else
                                                    Tin khong hot
                                                @endif
                                            </th>

                                            <td>
                                                <a href="{{ route('findpost',['id'=>$element->id]) }}" class="btn btn-warning edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a href="{{ route('delete',['id'=>$element->id]) }}" onclick="return confirm('ban co chac xoa khong');" class="btn btn-danger delete-modal"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->


@stop