<?php
ob_start();
session_start();
define('TEMPLATE', true);
include_once('config/connect.php');
?>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,
      user-scalable=0" name="viewport">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <title> Giỏ hàng </title>
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">



    <link rel="stylesheet" href="plugins/animate/animate.min.css">

    <link rel="stylesheet" href="plugins/fontawesome/all.css">

    <link href="plugins/webfonts/font.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/owl.carousel/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="plugins/owl.carousel/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
    <style>
        #navbarNav a {
            text-transform: none;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="header">
        <a style="color: #ffffff;text-decoration: none;" href="index.php">MIỄN PHÍ
            VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH > 300K
            - ĐỔI TRẢ TRONG 30 NGÀY - ĐẢM BẢO CHẤT LƯỢNG</a>
    </div>

    <!--Navbar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">

        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" class="logo-top" alt="">
            </a>
            <div class="desk-menu collapse navbar-collapse justify-content-md-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="signup-test.php">Đăng kí nhận mẫu thử</a>
                    </li>
                    <li class="nav-item lisanpham">
                        <a class="nav-link" href="shopsystem.php">Hệ thống cửa hàng
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="sub_menu">
                            <li class="">
                                <a href="mienbac.php" title="Miền Bắc">
                                    Miền Bắc
                                </a>
                            </li>
                            <li class="">
                                <a href="mientrung.php" title="Miền Trung">
                                    Miền Trung
                                </a>
                            </li>
                            <li class="">
                                <a href="miennam.php" title="Miền Nam">
                                    Miền Nam
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item lisanpham">
                        <a class="nav-link" href="product.php">Sản phẩm
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="sub_menu">
                            <li class="">
                                <a href="product.php" title="Tã quần cho bé">
                                    Tã quần cho bé
                                </a>
                            </li>
                            <li class="">
                                <a href="promo_product.php" title="Khuyến mại">
                                    Khuyến mại
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item lisanpham">
                        <a class="nav-link" href="#">Làm cha mẹ
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="sub_menu">
                            <?php $sql = "SELECT * FROM cat_blogkibie
					     ORDER BY catki_id ASC";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <li class="">
                                    <a href="blogkibie.php?catki_id=<?php echo $row['catki_id']; ?>&catki_name=<?php echo $row['catki_name']; ?>" title="<?php echo $row['catki_name']; ?>">
                                        <?php echo $row['catki_name']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Tin tức</a>
                    </li>
                    <li class="nav-item lisanpham">
                        <a class="nav-link" href="introduce.php">Về Kibie
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="sub_menu">
                            <li class="">
                                <a href="introduce.php" title="Giới thiệu về Kibie">
                                    Giới thiệu về Kibie
                                </a>
                            </li>
                            <li class="">
                                <a href="contact.php" title="Liên hệ">
                                    Liên hệ
                                </a>
                            </li>
                            <li class="">
                                <a href="certification.php" title="Chứng nhận chất lượng">
                                    Chứng nhận chất lượng
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="offcanvas-flip1" uk-offcanvas="flip: true; overlay: true">
                <div class="uk-offcanvas-bar" style="background: white;
        width: 100%;">

                    <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
                    <h3 style="font-size: 14px;
          color: #272727;
          text-transform: uppercase;
          margin: 3px 0 30px 0;
          font-weight: 500; letter-spacing: 2px;">MENU</h3>
                    <div class="justify-content-md-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="signup-test.php">Đăng kí nhận mẫu thử</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle aaaa" href="shopsystem.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p>Hệ thống cửa hàng</p>
                                    <i class="fa fa-angle-double-right"></i>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                                    <a class="dropdown-item" href="mienbac.php" title="Miền Bắc">Miền Bắc</a>
                                    <a class="dropdown-item" href="mientrung.php" title="Miền Trung">Miền Trung</a>
                                    <a class="dropdown-item" href="miennam.php" title="Miền Nam">Miền Nam</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle aaaa" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p>SẢN PHẨM</p>
                                    <i class="fa fa-angle-double-right"></i>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                                    <a class="dropdown-item" href="detailproduct.php?prd_id=<?php echo $row['prd_id']; ?>" title="Tã quần cho bé">Tã quần cho bé</a>
                                    <a class="dropdown-item" href="promo_product.php" title="Khuyến mại">Khuyến mại</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle aaaa" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p>Làm cha mẹ</p>
                                    <i class="fa fa-angle-double-right"></i>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                                    <?php
                                    $sql = "SELECT * FROM cat_blogkibie
		                            ORDER BY catki_id ASC";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) { ?>
                                        <a class="dropdown-item" href="blogkibie.php?catki_id=<?php echo $row['catki_id']; ?>&catki_name=<?php echo $row['catki_name']; ?>" title="<?php echo $row['catki_name']; ?>"><?php echo $row['catki_name']; ?></a>
                                    <?php } ?>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Tin tức</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle aaaa" href="introduce.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p>Về Kibie</p>
                                    <i class="fa fa-angle-double-right"></i>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                                    <a class="dropdown-item" href="introduce.php" title="Giới thiệu về Kibie">Giới thiệu về Kibie</a>
                                    <a class="dropdown-item" href="contact.php" title="Liên hệ">Liên hệ</a>
                                    <a class="dropdown-item" href="certification.php" title="Chứng nhận chất lượng">Chứng nhận chất
                                        lượng</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                <div class="uk-offcanvas-bar" style="    background: white;
              width: 350px;">

                    <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>

                    <h3 style="font-size: 14px;
                  color: #272727;
                  text-transform: uppercase;
                  margin: 3px 0 30px 0;
                  font-weight: 500; letter-spacing: 2px;">Tìm kiếm</h3>
                    <div class="search-box wpo-wrapper-search">
                        <form action="search" class="searchform searchform-categoris ultimate-search">
                            <div class="wpo-search-inner" style="display:inline">
                                <input type="hidden" name="type" value="product">
                                <input required="" id="inputSearchAuto" name="q" maxlength="40" autocomplete="off" class="searchinput input-search search-input" type="text" size="20" placeholder="Tìm kiếm sản phẩm...">
                            </div>
                            <button type="submit" class="btn-search btn" id="search-header-btn">
                                <i style="font-weight:bold" class="fas fa-search"></i>
                            </button>
                        </form>
                        <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                            <div class="resultsContent"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offcanvas-flip2" uk-offcanvas="flip: true; overlay: true">
                <div class="uk-offcanvas-bar" style="    background: white;
              width: 350px;">

                    <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>

                    <h3 style="font-size: 14px;
                  color: #272727;
                  text-transform: uppercase;
                  margin: 3px 0 30px 0;
                  font-weight: 500; letter-spacing: 2px;">Giỏ hàng</h3>
                    <div class="site-nav-container-last" style="color:#272727">
                        <div class="cart-view clearfix">
                            <table id="cart-view">
                                <tbody>
                                    <tr class="item_1">
                                        <td class="img"><a href="" title="Bỉm &quot;Grape&quot;"><img src="images/banner1.jpg" alt="/products/bỉm"></a></td>
                                        <td>
                                            <a class="pro-title-view" style="color: #272727" href="" title="Bỉm &quot;Grape&quot;">Bỉm</a>
                                            <span class="variant">36</span>
                                            <span class="pro-quantity-view">1</span>
                                            <span class="pro-price-view">4,800,000₫</span>
                                            <span class="remove_link remove-cart"><a href=""><i style="color: #272727;" class="fas fa-times"></i></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="line"></span>
                            <table class="table-total">
                                <tbody>
                                    <tr>
                                        <td class="text-left">TỔNG TIỀN:</td>
                                        <td class="text-right" id="total-view-cart">4,800,000₫</td>
                                    </tr>
                                    <tr>
                                        <td class="distance-td"><a href="cart.php" class="linktocart button dark">Xem
                                                giỏ
                                                hàng</a></td>
                                        <td><a href="" class="linktocheckout button dark">Thanh toán</a></td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="" target="_blank" class="button btn-check" style="text-decoration:none;"><span>Click nhận mã giảm
                                    giá ngay !</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="icon-ol">
                <a style="color: #272727 ; font-size:20px" href="signup-signin.php">
                    <i class="fas fa-user-alt">
                    </i>
                </a>
                <a style="color: #272727 ; font-size:20px" href="#" class="" uk-toggle="target: #offcanvas-flip">
                    <i class="fas fa-search" style="color: black"></i>
                </a>

                <a style="color: #272727 ; font-size:20px" href="#" uk-toggle="target: #offcanvas-flip2">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        </div>

    </nav>
    <!--  detail product -->
    <main class="">

        <div id="product" class="productDetail-page">

            <!--  menu header seo -->
            <div class="breadcrumb-shop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
                            <ol class="breadcrumb breadcrumb-arrows">
                                <li>
                                    <a href="index.php">
                                        <span">Trang chủ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Sản phẩm</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <span>
                                        <span itemprop="name">Giỏ hàng</span>
                                    </span>
                                    <meta itemprop="position" content="3">
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart -->
            <div class="container">
                <div id="my-cart">
                    <div class="row">
                        <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin sản phẩm</div>
                        <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Tùy chọn</div>
                        <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
                    </div>
                    <form method="post">
                        <div class="cart-item row">
                            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                <img src="images/banner.jpg">
                                <h4>Bỉm</h4>
                            </div>

                            <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                <input type="number" id="quantity" class="form-control form-blue quantity" value="1" min="1">
                            </div>
                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a href="#">Xóa</a>
                            </div>
                        </div>
                        <div class="cart-item row">
                            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                <img src="images/banner.jpg">
                                <h4>Bỉm</h4>
                            </div>
                            <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                <input type="number" id="quantity" class="form-control form-blue quantity" value="1" min="1">
                            </div>
                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a href="#">Xóa</a>
                            </div>
                        </div>
                        <div class="cart-item row">
                            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                <img src="images/banner.jpg">
                                <h4>Bỉm</h4>
                            </div>
                            <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                <input type="number" id="quantity" class="form-control form-blue quantity" value="1" min="1">
                            </div>
                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a href="#">Xóa</a>
                            </div>
                        </div>
                        <div class="cart-item row">
                            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                <img src="images/banner.jpg">
                                <h4>Bỉm</h4>
                            </div>
                            <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                <input type="number" id="quantity" class="form-control form-blue quantity" value="1" min="1">
                            </div>
                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a href="#">Xóa</a>
                            </div>
                        </div>
                        <div class="cart-item row">
                            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                <img src="images/banner.jpg">
                                <h4>Bỉm</h4>
                            </div>
                            <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                <input type="number" id="quantity" class="form-control form-blue quantity" value="1" min="1">
                            </div>

                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a href="#">Xóa</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ
                                    hàng</button>
                            </div>
                            <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>88.970.000đ</b></div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end cart -->

            <!--	Customer Info	-->
            <div class="container">
                <div id="customer">
                    <form method="post">
                        <div class="row">

                            <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
                            </div>
                            <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
                            </div>
                            <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
                            </div>
                            <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="add" class="form-control" required>
                            </div>

                        </div>
                    </form>
                    <div class="row">
                        <div class="by-now col-lg-6 col-md-6 col-sm-12">
                            <a href="#">
                                <b>Mua ngay</b>
                                <span>Giao hàng tận nơi siêu tốc</span>
                            </a>
                        </div>
                        <div class="by-now col-lg-6 col-md-6 col-sm-12">
                            <a href="#">
                                <b>Trả góp Online</b>
                                <span>Vui lòng call +84 (028) 38800659</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--	End Customer Info	-->
            <!-- zoom -->
            <div class="product-zoom11">
                <div class="product-zom">
                    <div class="divclose">
                        <i class="fa fa-times-circle"></i>
                    </div>
                    <div class="owl-carousel owl-theme owl-product1">

                        <div class="item"><img src="images/banner1.jpg" alt="">
                        </div>
                        <div class="item"><img src="images/banner1.jpg" alt="">
                        </div>
                        <div class="item"><img src="images/banner1.jpg" alt="">
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </main>
    <!--gallery-->
    <section class="section section-gallery">
        <div class="">
            <div class="hot_sp" style="padding-top: 70px;padding-bottom: 50px;">
                <h2 style="text-align:center;padding-top: 10px">
                    <a style="font-size: 28px;color: black;text-decoration: none" href="">Khách hàng thân thiết</a>
                </h2>
            </div>
            <div class="list-gallery clearfix">
                <ul class="shoes-gp">
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/khtt1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/khtt1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/khtt1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/khtt1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/khtt1.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/khtt1.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="main-footer">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-col footer-block">
                            <h4 class="footer-title">
                                Giới thiệu
                            </h4>
                            <div class="footer-content">
                                <p>Koremom hãng bỉm uy tín nhất Việt Nam</p>
                                <div class="logo-footer">
                                    <img src="images/logo-bct.png" alt="Bộ Công Thương">
                                </div>
                                <div class="social-list">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-google"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-youtube"></a>
                                    <a href="#" class="fab fa-skype"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-col footer-link">
                            <h4 class="footer-title">
                                PHÁP LÝ &amp; CÂU HỎI
                            </h4>
                            <div class="footer-content toggle-footer">
                                <ul>
                                    <li class="item">
                                        <a href="#" title="Tìm kiếm">Tìm kiếm</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Giới thiệu">Giới thiệu</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Chính sách đổi trả">Chính sách đổi trả</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-col footer-block">
                            <h4 class="footer-title">
                                Thông tin liên hệ
                            </h4>
                            <div class="footer-content toggle-footer">
                                <ul>
                                    <li><span>Địa chỉ:</span> Tòa nhà C3 Phạm Cơ Thạch Mỹ Đình , Hà Nội</li>
                                    <li><span>Điện thoại:</span> +84 (028) 38800659</li>
                                    <li><span>Fax:</span> +84 (028) 38800659</li>
                                    <li><span>Mail:</span> vjco@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-col footer-block">
                            <h4 class="footer-title">
                                FANPAGE
                            </h4>
                            <div class="footer-content">
                                <div id="fb-root">
                                    <div class="footer-static-content">
                                        <div class="fb-page" data-href="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/" data-tabs="timeline" data-width="" data-height="215" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                            <blockquote cite="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/">Kibie</a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer--copyright">
            <div class="container">
                <hr>
                <div class="main-footer--border" style="text-align:center;padding-bottom: 15px;">
                    <p>Copyright © 2019 <a href="">Kibie</a>. <a target="_blank" href="">Powered by LDD</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
    <script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="plugins/uikit/uikit.min.js"></script>
    <script src="plugins/uikit/uikit-icons.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/home.js"></script>

</body>

</html>