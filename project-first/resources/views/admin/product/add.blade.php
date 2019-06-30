@extends('layouts.amin')
@extends('layouts.amin')
@section('content')
	     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('addproduct')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="name_vi" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="description_vi" placeholder="Nhập mô tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh  sản phẩm</label>
                                <input type="file" name="image">
                            </div>
                            <button type="submit" class="btn btn-default">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Hủy</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection