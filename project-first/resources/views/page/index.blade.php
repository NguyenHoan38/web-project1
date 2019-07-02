@extends('master')
@section('content')
  <section class="container ">
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
              <div class=" col-lg-3 col-md-4 col-sm-4"><img src="project1/images/la.png" width="100%" height="60px"></div>
              <div class=" col-lg-9 col-md-8 col-sm-8s ">
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

            <div class="col-lg-3 col-md-6 col-sm-12 detail1">
             <h3 class="text-center" >{{$products[3]['name']}}</h3>
             <img class=" detail1-img d-lg-none d-xl-block  d-md-none d-sm-none d-none" src="project1/images/detail-n.png" >
             <div class="detail3-border d-lg-block d-xl-none  d-md-none d-sm-none d-none"></div>
             <p class="text-center"><a href="{{route('detailproduct',$products[3]['id'])}}"><img  class=" detail1-img1" src="project1/images/{{$products[3]['image']}}" width="detailproduct222px" height="222px"></a></p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail2">
              <h3 class="text-center" >{{$products[2]['name']}}</h3>
              <div class="detail2-border d-lg-blook d-xl-block  d-md-none d-sm-none d-none"></div>
              <p class="text-center"><a href="{{route('detailproduct',$products[2]['id'])}}"><img src="project1/images/{{$products[2]['image']}}" width="222px" height="222px"></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail3">
              <h3 class="text-center" >{{$products[1]['name']}}</h3>
              <div class="detail3-border d-lg-blook d-xl-block  d-md-none d-sm-none d-none"></div>
              <p class="text-center"><a href="{{route('detailproduct',$products[1]['id'])}}"><img class=" detail3-img-ct" src="project1/images/{{$products[1]['image']}}" width="222px" height="222px"></a></p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 detail4">
              <h3 class="text-center" >{{$products[0]['name']}}</h3>
              <div class="detail4-border d-lg-blook d-xl-block  d-md-none d-sm-none d-none"></div>
               <p class="text-center"><a href="{{route('detailproduct',$products[0]['id'])}}"><img class="" src="project1/images/{{$products[0]['image']}}" width="222px" height="222px"></a></p>
              
             
            </div>
          </div>  
        </div>
        <div class="container  index-news">
          <div class="row">
          <div class=" col-lg-6 col-md-12 col-sm-12 col-12  news">
            <div class="row">
                          <div class=" col-lg-2 col-md-2 col-sm-2 col-2" ><img src="project1/images/la.png" width="100%"></div>
            <div class="ol-lg-10 col-md-10 col-sm-10 col-10"><h3>TIN TỨC</h3></div>
            @if(isset($news))
              @foreach($news as $new)
                <div class="col-lg-12 news-title">
                  <h5>{{$new->tieude}}</h5>
                  <p>{{$new->mota}}</p>
                  <ul style="display: table-footer-group;">
                    <li style="display: initial; margin-right: 30px"><i class="far fa-calendar-alt"></i> {{$new->created_at}}</li>
                    <li style="display: initial;"><a href="{{route('detail_news',$new->id)}}">Xem tiếp  >></a> </li>
                  </ul >
                  <hr style="background: #80bf42;;">
                </div>
              @endforeach
            @endif
          <div class="paginate">{{$news->links()}}</div>
          </div>
            </div>

          <div class="col-lg-6 col-md-12 col-sm-12 col-12 news-image">
            <div class="row">
              <div class="news-image-bottom">
              <a href="{{route('detail_news',$news_view[0]['id'])}}" ><img src="project1/images/{{$news_view[0]['hinh']}}" width="100%"></a>
              </div>

              <h3 style="padding-top: 10px;">Một số món ăn nhẹ siêu ngon cho chị em trổ tài</h3>
              <ul>
                <li><i class="fas fa-eye"></i> {{$news_view[0]['luotxem']}} lượt xem</li>
                <li><i class="fab fa-facebook-f"></i> 114 chia sẻ</li>
                <li><i class="far fa-clock"></i> {{$news_view[0]['created_at']}}</li>
              </ul>
            </div>

          </div>
        </div>
        </div>
        <div class="container  management">
          <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 management1">
            <div class="row">
              <div class="col-lg-8 col-lg-7 col-md-7 col-sm-7 col-7">
                <img src="project1/images/ceo1.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>CEO Công ty BĐS ABC </p>
                </div>
           
               

              </div>
              <div class="col-lg-4 col-md-5 col-sm-5 col-5  management1-title ">
                
                <p>Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 management2">
            <div class="row">
              <div class="col-lg-8 col-lg-7 col-md-7 col-sm-7 col-7">
                <img src="project1/images/ceo2.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>CEO Công ty BĐS ABC </p>
                </div>
           
               

              </div>
              <div class="col-lg-4 col-md-5 col-sm-5 col-5 management1-title2 ">
                
                <p>Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 management3">
            <div class="row">
              <div class=" col-lg-8 col-md-7 col-sm-7 col-7 ">
                <img src="project1/images/ceo5.png" width="100%" height="240px">
                <div class=" management1-name">
                   <p class="text-center">Nguyễn Thiều Anh <br>CEO Công ty BĐS ABC </p>
                </div>
           
               

              </div>
              <div class="col-lg-4 col-lg-4 col-md-5 col-sm-5 col-5  management1-title3 ">
                
                <p>Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải</p>
                
              </div>
            </div>
          </div>
          </div>


        </div>
      </div>
    </section>  
@endsection
