

<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TPShopper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="views/css/style.css" rel="stylesheet">
    <style>
      body {
        background-color: #f2f2f2;
        /* background-color: thistle; */
      }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                </div> 
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
  <div class="row border-top px-xl-5 ">
    <div class="col-lg">
      <div class="col-lg">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-1">
          <a href="" class="text-decoration-none d-block d-lg-none">
            <h1 class="m-0 display-5 font-weight-semi-bold">
              <span class="text-primary font-weight-bold border px-3 mr-1">Shop</span>TP</h1></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav mr-auto py-0">
                    <a href="?route=home" class="nav-item nav-link  ">Trang Chủ</a>
                      <a href="?" class="nav-item nav-link">Thêm Sản Phẩm</a>
                      <a href="?route=danh-sach" class="nav-item nav-link ">Danh Sách</a>
                        <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div> -->
                      <a href="?route=cT" class="nav-item nav-link">Liên Hệ</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                      <?php 
                        if(isset($_SESSION['UserId'])){
                          echo  "<div class='navbar-nav ml-auto py-0'> <a  href='?route=logout' class='nav-item nav-link'>Đăng Xuất</a></div>";
                          // hien thi avatar ??: null or empty
                          $avatar = empty($_SESSION['Avatar']) ? 'avt.jpg' : $_SESSION['Avatar'];
                          echo "<li> <a href='?route=edit-avatar'> <img width='40px' src='views/images/".$avatar."' /> </a>  </li>";
                          echo "<li><span class='nav-link text-danger ' >Xin chào: ".$_SESSION['Name']."</span></li>";
                          }else{
                          echo "<div class='navbar-nav ml-auto py-0'> <a  href='?route=login' class='nav-item nav-link'>Đăng Nhập</a>  <a  href='?route=register' class='nav-item nav-link'>Đăng Ký</a></div>";
                          }
                      ?>
                    </div>
                  </div>
                <div>
              </div>
        </nav>
      <div>
    </div>
  </div>
</body>
</html>
