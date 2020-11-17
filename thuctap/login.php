<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="warpper d-flex justify-content-center align-items-center">  
      <div class="container bg-dark p-3">
            <div class="rounded bg-white position-relative">
                <div class="box mt-5">
                    <h4>Member Login</h4>
                    <div class="group-form1 mt-5 mb-3 d-flex row">
                        <div class="col-md-12 tendangnhap">
                            <label for="user"> Tên đăng nhập:</label>
                        </div>
                        <div class="col-md-12 icontendangnhap">
                            <i class="fas fa-user"></i>
                        </div>                       
                       <div class="col-md-12">
                            <input type="text" name="" id="user" class="w-100 txt-nhapten pl-2" placeholder="Username">
                       </div>
                    </div>
                    <div class="group-form2 mb-5 d-flex row">
                        <div class="col-md-12 matkhau">
                            <label for="password"> Mật khẩu:</label>
                        </div>
                        <div class="col-md-12 iconmatkhau">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="col-md-12">
                            <input type="password" name="" id="password" class="w-100 txt-pass pl-2" placeholder="Password">    
                        </div>
                    </div>
                   <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="w-50 btn btn-success">Login</button>
                   </div>
                </div>
                <div class="w-100 btn btn-light position-absolute">
                <a href="" class="text-dark">Forgot password?</a> <a href="register.php"> Register</a>
                </div>
            </div>           
      </div> 
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>