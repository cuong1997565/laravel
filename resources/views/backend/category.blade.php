@extends('backend.master')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quan Ly Danh Muc</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách danh muc</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                         <a href="{{ route('addcate') }}" class="btn btn-primary created-model">Thêm danh muc</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>name</th>
                                            <th width="20%">color</th>
                                            <th> created_at </th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($datalist as $cate)
                                        <tr>
                                            <td> {{$cate->id}} </td>
                                            <td>
                                               {{$cate->name}}
                                            </td>
                                            <td> {{$cate->color}} </td>
                                            <td> {{$cate->created_at}} </td>
                                            <td>
                                                <a href="{{ route('idcategory',['id' => $cate->id]) }}" class="btn btn-warning edit-modal"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a href="{{ route('deletecate',['id' => $cate->id]) }} " onclick="return confirm('ban co chac xoa khong');"  class="btn btn-danger delete-modal"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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