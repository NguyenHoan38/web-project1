@extends('master')
@section('content')
<section class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 map">
            
          </div>
          <div class="col-lg-6">
            <div class="col-lg-12 info1">
            <div class="row">
              <div class="col-lg-3">
                <img src="http://www.thietkewebthuonghieu.com/wp-content/uploads/2019/04/logo-tkwthuonghieu-03.png" alt="" width="100%">
              </div>
              <div class="col-lg-9">
                <p> <strong>Địa chỉ:</strong>  79 Trương Định, P.Bến Thành, Quận 1, Tp Hồ Chí Minh.</p>
                <p><strong>Hotline: </strong>0913.83.95.92</p>
                <p><strong>Điện thoại: </strong>0122.167.821 – 0122.167.922</p>
                <p><strong>Email: </strong>info@thietkewebthuonghieu.com</p>
                <p><strong>Web: </strong>thietkewebthuonghieu.com</p>
              </div>
            </div>
            </div>

            <h3 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h3>
            <div class="col-lg-12 form-info">
              
                <form action="lienhe_submit" method="get" class="row">
                  <div class="form-group col-lg-6">
                      <input class="form-control " name="name_vi" placeholder="Họ và tên" />
                  </div>
                  <div class="form-group col-lg-6">
                      <input class="form-control " name="name_vi" placeholder="Email" />
                  </div>
                  <div class="form-group col-lg-6">
                      <input class="form-control " name="name_vi" placeholder="Số điện thoại" />
                  </div>
                                    <div class="form-group col-lg-6">
                      <input class="form-control " name="name_vi" placeholder="Địa chỉ" />
                  </div>
                      <div class="form-group col-lg-12">
                         <textarea class="form-control" rows="3" name="description_vi" placeholder="Nhập mô tả sản phẩm"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default email-buttom" style="margin: 0 auto;">Gửi</button>
<!--                   <div class="form-group col-lg-6">
                      <input class="form-control" name="name_vi" placeholder="Họ và tên" />
                  </div> -->
                </form>
            
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection