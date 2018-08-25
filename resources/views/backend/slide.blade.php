@extends('backend.master')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quan ly Slide</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách slide</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{ route('addsli') }}" class="btn btn-primary created-model">Thêm hinh anh</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th width="20%">Hide/Show</th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataslide as $data)
                                           <tr>
                                            <td> {{$data->id}} </td>
                                            <td>
                                                <img width="200px" src="../image/{{$data->image}}" class="thumbnail">
                                            </td>
                                            <td>
                                                    @if($data->status == 1)
                                                        Hien Thi
                                                    @else
                                                        Khong Hien Thi
                                                    @endif

                                            </td>

                                            <td>
                                                <a href="{{ route('post.edit', ['id' => $data->id]) }}" data-id=" {{$data->id}} "  class="btn btn-warning edit"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a href="{{ route('post.delete', ['id' => $data->id]) }}" class="btn btn-danger delete-modal" onclick="return confirm('ban co chac xoa phan tu nay khong');"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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

@section('js')

@stop

