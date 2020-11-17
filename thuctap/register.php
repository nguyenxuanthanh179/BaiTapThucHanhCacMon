<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fonawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- css -->

    <link rel="stylesheet" href="css/register.css">
    <script language="javascript" src="../js/register.js"></script>

  </head>
  <body  onload="Captcha();">
      <div class="wapper">
      <div class="container">
        <div id="form-register" class=" mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h4>Đăng ký tài khoản</h4>
                    <p>Vui lòng nhập đầy đủ thông tin. Những mục có dấu ( <span>*</span> ) là bắt buộc.</p>
                </div>
            </div>
            <form action="" method="post">
                    <div class="row mt-3 d-flex ">
                       <div class="col-md-4">
                       Họ và tên ( <span>*</span> )
                       </div>
                        <div class="col-md-8">
                             <input class="w-100 pl-2 p-1" type="text" name="" id="username" placeholder="Nhập chính xác họ tên của bạn">

                        </div>
                    </div>
                    <div class="row mt-3 d-flex">
                       <div class="col-md-4 ">
                       Email( <span>*</span> )
                       </div>
                        <div class="col-md-8">
                                <input class="w-100 pl-2 p-1" type="email" name="" id="email" placeholder="Nhập email đúng để đăg nhập">

                        </div>
                    </div>
                    <div class="row mt-3 d-flex">
                       <div class="col-md-4">
                       Mật khẩu( <span>*</span> )
                       </div>
                        <div class="col-md-8">
                            <input class="w-100 pl-2 p-1" type="password" name="" id="password" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="row mt-3 d-flex">
                       <div class="col-md-4">
                       Nhập lại mật khẩu( <span>*</span> )
                       </div>
                        <div class="col-md-8">
                            <input class="w-100 pl-2 p-1" type="password" name="" id="password2" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="row mt-3 d-flex ">
                       <div class="col-md-4 ">
                       Điện thoại ( <span>*</span> )
                       </div>
                        <div class="col-md-8">
                            <input class="w-100 pl-2 p-1" type="text" name="" id="phone" placeholder="Nhập số điện thoại để nhận tin nhắn xác thực">

                        </div>
                    </div>
                    <div class="row mt-3 d-flex">
                       <div class="col-md-4">
                       Địa chỉ ( <span>*</span> )
                       </div>
                        <div class="col-md-8">
                            <input class="w-100 pl-2 p-1 " type="text" name="" id="address" placeholder="Địa chỉ">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputpassword" class="col-sm-2 col-form-lable">Tỉnh/ Thành phố(<span>*</span>)</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="thanhpho" name="thanhpho"  onchange="makesubmenu(value)">
                            <option value=""disabled selected>Tỉnh Thành</option>
                            <option>Hà Nội</option>
                            <option>Nam Định</option>
                            <option>Hải Dương</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputpassword" class="col-sm-2 col-form-lable">Quận/ Huyện(<span>*</span>)</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="huyen" name="huyen" >
                            <option value=""disabled selected>Huyện</option>
                            <option></option>
                        </select>
                    </div>
                </div>
                    <div class="row mt-4 d-flex ">
                       <div class="col-md-4">
                        Mã xác nhận ( <span>*</span> )
                       </div>
                        <div class="col-md-8">
                                <label class=" ml-0 btn btn-success mr-2" id="mainCaptcha"></label>
                                <button onclick="Captcha();"><i class="fas fa-sync text-primary" ></i></button>                            
                                <input type="text" name="" id="txtInput">
                                    
                        </div>
                    </div>  
            <div class="mt-4">
                <input type="checkbox" name="" id="">
                <div style="font-weight: 500">
                    Tôi đã đọc và đồng ý với thỏa thuận sử dụng.
                </div>
                <div class="mt-4 mb-4">
                    <input type="button" id="dangky" value=" Đăng ký" onclick="ktra();" class="btn border bg-light">
                    <input type="reset" value=" Hủy bỏ" class="btn border bg-light">
                </div>
            </div>
        </form>

        </div>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery/jquery.js"></script>
    <script src="js/register.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </body>
</html>
