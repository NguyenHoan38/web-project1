@extends('master')
@section('content')
	<section style="padding-top: 20px">
	   <div class="container product-content">
        <div class="row">
        	@if(isset($products))
        		@foreach ($products as $product)
		          <div class="col-lg-4 item">
		            <div class="item-content">
		              <p class="text-center"><img src="project1/images/{{$product->image}}" width="100%"height="250px;"></p>
		              <h4 class="text-center">{{$product->name}}</h4>
		              <p class="text-center"><a href="{{route('detailproduct',$product->id)}}" >Chi tiêt </a></p>
		            </div>
		          </div>
		        @endforeach  
          @endif
        </div>
      </div> <!-- dong the container -->
    </section>	  
@endsection