 <div id="carousel-home-t" class="carousel slide" data-ride="carousel">
            <?php $i=0;?>
            <ol class="carousel-indicators" style="bottom: 114px;">
              @if(isset($slides))
                @foreach ($slides as $slide)
                <li data-target="#carousel-home-t" data-slide-to="{{$i}}"@if($i==0) class="active">@else @endif</li>
                <?php $i++;?>
                @endforeach
              @endif  
            </ol>
            <ol class="carousel-caption col-lg-12" style="padding-right: 50px;padding-left: 50px;width:100%; top: 44px;right:0px;left: 0px;">
            <div class="col-lg-12">
               <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-6">
                              <a href="{{route('index')}}"><img src="project1/images/logo.png" width="100%"></a>
                            </div>
                             <div class="col-lg-6">
                              <a href="{{route('index')}}" ><img src="project1/images/logo2.png" width="100%"></a>
                            </div>
                          
                        </div>
                    </div>
                     <div class="col-lg-9">
                         <div class="row">
                             <div class="col-lg-10 menu" style="line-height: 50px;">
                                <ul>

                                  <li><a href="{{route('index')}}">TRANG CHỦ</a></li>
                                  <li><a href="">THƯƠNG HIỆU</a></li>
                                  <li><a href="{{route('product')}}">SẢN PHẨM</a></li>
                                  <li><a href="{{route('news')}}">TIN TỨC</a></li>
                                  <li><a href="{{}}">LIÊN HỆ</a></li>
                                </ul>

                             </div>
                              <div class="col-lg-2">
                                <div class="row">
                                  <div class="search col-lg-5">
                                     <i class="fas fa-search"></i>
                                  </div>
                                  <div class="col-lg-7">
                                    <div class="vi-en">
                                      <div class="vi">
                                        <p>VI</p>
                                      </div>
                                      <div class="en">
                                      <p>EN</p>
                                      </div>
                                    </div>
                                  </div>
                                 </div> 
                              </div>
                         </div>
                     </div>
               </div>
               </div>
           </ol>
            <ol class="carousel-indicators" style="bottom: 330px;">
             
                <img src="project1/images/txt.png">
            </ol>
            <ol class="carousel-indicators"  style="bottom: 149px;
            left: 259px;">
               <img src="project1/images/text2.png">
               
            </ol>
            <ol class="carousel-indicators  " style="margin-right:0px;margin-left: 0px; bottom: -16px">
            <img src="project1/images/2.png" width="100%">
             
            </ol>
            <div class="carousel-inner">
                 <?php $i=0;?>
              @foreach ($slides as $slide)
              <div class="carousel-item @if($i==0) active @else @endif " >
                  <?php $i++;?>
                <img src="project1/images/{{$slide->image}}" width="100%">

              </div>
              @endforeach

            </div>
            <a class="carousel-control-prev" href="#carousel-home-t" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-home-t" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
