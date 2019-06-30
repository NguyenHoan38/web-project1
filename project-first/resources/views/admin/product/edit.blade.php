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
                        <form action="{{route('editproduct',$product->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="name_vi" placeholder="Nhập tên sản phẩm" value="{{$product->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="description_vi" placeholder="Nhập mô tả sản phẩm">{{$product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh  sản phẩm</label>
                                <p><img src="project1/images/{{$product->image}}" alt=""></p>
                                <input type="file" name="image" value="{{$product->image}}">
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