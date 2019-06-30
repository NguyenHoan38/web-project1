@extends('layouts.amin')
@section('content')
	       <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover col-lg-12" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th class="text-center col-2" width="5%">ID</th>
                                <th class="text-center col-2" width="15%">Tiêu đề</th>
                                <th width="15%">Mô tả</th>
                                <th width="30%">Nội dung</th>
                                <th width="15%">Ảnh  sản phẩm</th>
                                <th width="5%">Nổi bật</th>
                                <th width="5%">Lượt xem</th>
                                <th width="5%">Delete</th>
                                <th width="5%">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if(isset($news))
                        		@foreach ($news as $new)
	                            <tr class="odd gradeX" align="center">
	                                <td>{{$new->id}}</td>
	                                <td>
                                          {{$new->tieude}} <br>
	                                
	                                	
	                                </td>
	                             
	                                <td>{{$new->mota}}</td>
	                                <td>{{$new->noidung}}</td>
                                    <td>   <img src="project1/images/{{$new->hinh}}"width="200px;" height="200px"></td>
                                    <td>{{$new->noibat}}</td>
                                    <td>{{$new->luotxem}}</td>
	                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('deletenews',$new->id)}}"> Delete</a></td>
	                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('editnews',$new->id)}}">Edit</a></td>
	                            </tr>
	                            @endforeach
                                @else dadadad
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection