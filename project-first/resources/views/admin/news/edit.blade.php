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
                        <form action="{{route('editnews',$news->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="name_vi" placeholder="Nhập tên Tiêu đề" value="{{$news->tieude}}" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="description_vi" placeholder="Nhập mô tả sản phẩm">{{$news->tieude}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="3" name="content_vi" placeholder="Nhập Nội dung">{{$news->noidung}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh  BAI VIET</label>
                                <input type="file" name="image" {{$news->tieude}}>
                            </div>
                            <div class="form-group">
                                <label>Nổi bật</label>
                                <label class="radio-inline">
                                @if($news->noibat==1)
                                    <input name="noibat_vi" value="1" checked="" type="radio">Không
                                </label>

                                <label class="radio-inline">
                                    <input name="noibat_vi" value="2" type="radio">có
                                </label>
                                @else
                                    <input name="noibat_vi" value="1" type="radio">Không
                                </label>

                                <label class="radio-inline">
                                    <input name="noibat_vi" value="2" checked=""  type="radio">có
                                </label>
                                @endif
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