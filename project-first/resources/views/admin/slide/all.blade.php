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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th> ten Anh</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if(isset($slides))
                        		@foreach ($slides as $slide)
	                            <tr class="odd gradeX" align="center">
	                                <td>{{$slide->id}}</td>
	                                <td>
	                                	<img src="project1/images/{{$slide->image}}"width="200px;" height="200px">
	                                
	
	                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('deleteslide',$slide->id)}}"> Delete</a></td>
	                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('editslide',$slide->id)}}">Edit</a></td>
	                            </tr>
	                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection