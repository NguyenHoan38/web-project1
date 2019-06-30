@extends('master')
@section('content')
  <section class="content col-lg-12">
	  <div class="row">
       
        <div class=" col-lg-6 col-md-12 col-sm-12 story">
          <p class="Title">CÂU CHUYỆN<br> <span>của Dr.Food</span></p>
          <p style="font-size: 18px;color: #333;">Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải rồi khuấy đều trong khi đun hỗn hợp. Để nguội tầm 1-2 tiếng để thạch đông lại, các bạn hãy dùng cùng một chút cốt dừa hoặc sữa đặc, mật ong để thạch có vị ngọt và ngậy hơn nhé. </p>
          <p class="advantages"><i class="fas fa-check"></i>Đây là một trong những thứ dễ làm cho các chị em</p>
          <p class="advantages"><i class="fas fa-check"></i>Chỉ cần hòa bột với một lượng nước vừa phải rồi khuấy đều trong khi đun hỗn hợp.</p>
          <p class="advantages pa"><i class="fas fa-check" ></i>Thạch sương sáo rất tốt cho hệ tiêu hóa, huyết áp cao và tiểu đường.</p>
          <a href="">Chi tiết</a>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  content-right">
          <div class="col-lg-12 content-right-title">
            <div class="row">
              <div class=" col-lg-3 col-md-3 col-sm-3"><img src="project1/images/la.png" width="100%" height="60px"></div>
              <div class=" col-lg-9 col-md-9 col-sm-9 ">
              <h3> QUY TRÌNH <span>NGHIÊM NGẶT</span> <br>
                TẠO HƯƠNG VỊ <span>ĐỈNH CAO</span>
              </h3>
              </div>
            </div>
          </div>
          <div class="row">
         

            <div class="col-lg-12 content-right"><img src="project1/images/sp.png" width="100%"></div>

          </div>  
        </div>
        <div class="col-lg-12">
          <div class="row">
           <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="col-lg-12">
                <img src="project1/images/banhkem.png" width="100%">
                <p class="text-center Title">NHỎ NHƯNG <br> <span>Bền vững</span></p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                          <div class="content-right-menu" >
                  <ul>
                    <li>Kiến thức và chuyên môn sâu sắc</li>
                    <li>Kinh nghiệm vững vàng</li>
                    <li>Nỗ lực không ngừng cải tiến và khác biệt</li>
                    <li>Con người tâm huyết</li>
                    <li>Quản trị hiệu quả</li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 detail" style="">
          <div class="row">

            <div class="col-lg-3 detail1">
             <h3 class="text-center" >{{$products[3]['name']}}</h3>
             <img class=" detail1-img" src="project1/images/detail-n.png" >
              <img  class=" detail1-img1" src="project1/images/{{$products[3]['image']}}" width="222px" height="222px">
<!--            <div class="carousel-caption" style="top: 68px;
                left: 95px;right:0px;">
                <span >BỘT SƯƠNG SÁO</span>
              </div> -->
            </div>
            <div class="col-lg-3 detail2">
              <h3 class="text-center" >{{$products[2]['name']}}</h3>
              <div class="detail2-border"></div>
             
              <img src="project1/images/{{$products[2]['image']}}" width="222px" height="222px">

            </div>
            <div class="col-lg-3 detail3">
              <h3 class="text-center" >{{$products[1]['name']}}</h3>
              <div class="detail3-border"></div>
              <img class=" detail3-img-ct" src="project1/images/{{$products[1]['image']}}" width="222px" height="222px">
            </div>
            <div class="col-lg-3 detail4">
              <h3 class="text-center" >{{$products[0]['name']}}</h3>
              <div class="detail4-border"></div>
              <img class="" src="project1/images/{{$products[0]['image']}}" width="222px" height="222px">
             
            </div>
          </div>  
        </div>
        <div class="col-lg-12 row index-news">
          <div class="col-lg-6 row news">
            <div class="col-lg-2" ><img src="project1/images/la.png" width="100%"></div>
            <div class="col-lg-10"><h3>TIN TỨC</h3></div>
            @if(isset($news))
              @foreach($news as $new)
                <div class="col-lg-12 news-title">
                  <h5>{{$new->tieude}}</h5>
                  <p>{{$new->mota}}</p>
                  <ul style="display: table-footer-group;">
                    <li style="display: initial; margin-right: 30px"><i class="far fa-calendar-alt"></i> {{$new->created_at}}</li>
                    <li style="display: initial;"><a href="">Xem tiếp  >></a> </li>
                  </ul >
                  <hr style="background: #80bf42;;">
                </div>
              @endforeach
            @endif
              <div class="col-lg-12">
                                    <div class="row text-center">
                        <div class="col-lg-12">
                           {{ $news->links() }}
                        </div>
                    </div>

              </div>
          </div>
          <div class="col-lg-6 news-image">
            <a href="{{route('detail_news',$news_view[0]['id'])}}" ><img src="project1/images/{{$news_view[0]['hinh']}}" width="100%"></a>
            <h3 style="padding-top: 10px;">Một số món ăn nhẹ siêu ngon cho chị em trổ tài</h3>
            <ul>
              <li><i class="fas fa-eye"></i> {{$news_view[0]['luotxem']}} lượt xem</li>
              <li><i class="fab fa-facebook-f"></i>114 chia sẻ</li>
              <li><i class="far fa-clock"></i> {{$news_view[0]['created_at']}}</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12 row management">
          <div class="col-lg-4 management1">
            <div class="row">
              <div class="col-lg-9">
                <img src="project1/images/ceo1.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>CEO Công ty BĐS ABC </p>
                </div>
           
               

              </div>
              <div class="col-lg-3 management1-title ">
                
                <p>Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 management2">
            <div class="row">
              <div class="col-lg-9">
                <img src="project1/images/ceo2.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>CEO Công ty BĐS ABC </p>
                </div>
           
               

              </div>
              <div class="col-lg-3 management1-title2 ">
                
                <p>Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 management3">
            <div class="row">
              <div class="col-lg-9">
                <img src="project1/images/ceo5.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>CEO Công ty BĐS ABC </p>
                </div>
           
               

              </div>
              <div class="col-lg-3 management1-title3 ">
                
                <p>Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải</p>
                
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>  
@endsection