<?php
ob_start();
session_start();
define('TEMPLATE', true);
include_once('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/all.css">
  <link rel="stylesheet" href="plugins/webfonts/font.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />

  <title>KIBIE</title>

  <style>
    #navbarNav a {
      text-transform: none;
      font-size: 15px;
    }
  </style>

</head>

<body>
  <div class="header">
    <a style="color: #ffffff;text-decoration: none;" href="index.php">MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH > 300K
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
                    <td class="distance-td"><a href="cart.php" class="linktocart button dark">Xem giỏ hàng</a></td>
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
  <!-- Owl-Carousel -->
  <div id="banner" class="owl-carousel owl-theme owl-carousel-setting">
    <div class="item"><img src="images/slide1.png" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/slide2.png" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/slide3.png" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/slide4.png" class="d-block w-100" alt="..."></div>
  </div>

  <!--Content-->
  <div class="content">
    <div class="container">
      <div class="hot_sp" style="padding-bottom: 10px;">
        <h2 style="text-align:center;padding-top: 10px">
          <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm khuyến mãi</a>
        </h2>
        <div class="view-all" style="  text-align:center;padding-top: -10px;">
          <a style="color: black;text-decoration: none" href="">Xem thêm</a>
        </div>
      </div>
    </div>
    <?php
    $sql = "SELECT * FROM product
    WHERE cat_id = 2
		ORDER BY prd_id DESC
		";
    $query = mysqli_query($conn, $sql);
    ?>
    <!--Product-->
    <div class="container" style="padding-bottom: 50px;">
      <div class="row">
        <?php while ($row = mysqli_fetch_array($query)) { ?>
          <div class="fix-col col-md-3 col-sm-6 col-xs-6 col-6">
            <div class="product-block">
              <div class="product-img fade-box">
                <a href="detailproduct.php?prd_id=<?php echo $row['prd_id']; ?>" title="<?php echo $row['prd_name'] ?>" class="img-resize">
                  <img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name'] ?>" class="lazyloaded">
                  <img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name'] ?>" class="lazyloaded">
                </a>

              </div>
              <div class="product-detail clearfix">
                <div>
                  <a style=" color: black;
              font-size: 14px;text-decoration: none;" href="detailproduct.php?prd_id=<?php echo $row['prd_id']; ?>" title="<?php echo $row['prd_name'] ?>" inspiration pack> <?php echo $row['prd_name']; ?>
                  </a>
                </div>
                <div class="pro-price">
                  <p class=""><?php echo number_format($row['prd_price']); ?> đ</p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>



      </div>
    </div>
    <!-- <section class="section wrapper-home-banner">
      <div class="container-fluid" style="padding-bottom: 50px;">
        <div class="row">
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-category">
              <a href="#" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box">
                  <img class="lazyloaded" src="images/1.png" alt="Bỉm">
                </div>
                <figcaption class="caption_banner site-animation">
                  <p>Sản phẩm</p>
                  <h2>
                    Đại sứ thương hiệu
                  </h2>
                </figcaption>
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-category">
              <a href="#" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box">
                  <img class="lazyloaded" src="images/1.png" alt="Shoes">
                </div>
                <figcaption class="caption_banner site-animation">
                  <p>Bộ sưu tập</p>
                  <h2>
                    Thương hiệu
                  </h2>
                </figcaption>
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-category">
              <a href="detailblog.php" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image">
                  <img class="lazyloaded" src="images/1.png" alt="Shoes">
                </div>
                <figcaption class="caption_banner site-animation">
                  <p></p>
                  <h2>
                    Blog
                  </h2>
                </figcaption>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section>
      <div class="content">
        <div class="container">
          <div class="hot_sp">
            <h2 style="text-align:center;">
              <a style="font-size: 28px;color: black;text-decoration: none" href="">Tã quần cho bé</a>
            </h2>
            <div class="view-all" style="text-align:center;margin-bottom: 10px;">
              <a style="color: black;text-decoration: none" href="">Xem thêm</a>
            </div>
          </div>
        </div>
        <!--Product-->
        <?php
        $sql_1 = "SELECT * FROM product
                WHERE cat_id = 1
		            ORDER BY prd_id DESC
		            ";
        $query_1 = mysqli_query($conn, $sql_1);
        ?>
      </div>
      <div class="container product" style="width: 100%;margin: auto;">
        <div class="owl-carousel owl-theme owl-product-setting">
          <?php while ($row = mysqli_fetch_array($query_1)) { ?>
            <div class="item">
              <div class="">
                <div class="product-block">
                  <div class="product-img fade-box">
                    <a href="detailproduct.php?prd_id=<?php echo $row['prd_id']; ?>" title="<?php echo $row['prd_name']; ?>" class="img-resize">
                      <img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name']; ?>" class="lazyloaded">
                      <img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name']; ?>" class="lazyloaded">
                    </a>

                  </div>
                  <div class="product-detail clearfix">
                    <div class="pro-text">
                      <a style=" color: black;
                           font-size: 14px;text-decoration: none;" href="detailproduct.php?prd_id=<?php echo $row['prd_id']; ?>" title="<?php echo $row['prd_name']; ?>" inspiration pack>
                        <?php echo $row['prd_name']; ?>
                      </a>
                    </div>
                    <div class="pro-price">
                      <p class=""><?php echo number_format($row['prd_price']); ?> đ</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>




      </div>
    </section>
    <section class="">
      <div class="content">
        <div class="container">
          <div class="hot_sp">
            <h2 style="text-align:center;padding-top: 10px">
              <a style="font-size: 28px;color: black;text-decoration: none" href="">Bài viết mới nhất</a>
            </h2>
            <br />
          </div>
        </div>
      </div>
      <!--New-->
      <div>

        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="post_item">
                <div class="post_featured">
                  <a href="#" title="Bỉm">
                    <img class="img-resize" style="padding-bottom:15px;" src="images/1.png" alt="Bỉm sữa tốt nhất cho con">
                  </a>
                </div>
                <div class="pro-text">
                  <span class="post_info_item">

                    Thứ Ba 11,06,2019

                  </span>
                </div>
                <div class="pro-text">
                  <h3 class="post_title">
                    <a style=" color: black;
                                  font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                      Bỉm sữa tốt nhất cho con
                    </a>
                  </h3>
                </div>
                <div style="text-align:center; padding-bottom: 30px;">
                  <span>Cuối tháng 5 , Bỉm sửa Koremom sale 50%</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="post_item">
                <div class="post_featured">
                  <a href="#" title="Bỉm">
                    <img class="img-resize" style="padding-bottom:15px;" src="images/1.png" alt="Cuối tháng 5 , Bỉm sửa Koremom sale 50%">
                  </a>
                </div>
                <div class="pro-text">
                  <span class="post_info_item">

                    Thứ Ba 11,06,2019

                  </span>
                </div>
                <div class="pro-text">
                  <h3 class="post_title">
                    <a style=" color: black;
                                                  font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                      Bỉm Koremom , Thương hiệu Châu Á
                    </a>
                  </h3>
                </div>
                <div style="text-align:center; padding-bottom: 30px;">
                  <span>Là một trong những loại bỉm tốt nhất cho bé</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="post_item">
                <div class="post_featured">
                  <a href="#" title="Bỉm">
                    <img class="img-resize" style="padding-bottom:15px;" src="images/1.png" alt="  Bỉm Koremom , Thương hiệu Châu Á">
                  </a>
                </div>
                <div class="pro-text">
                  <span class="post_info_item">

                    Thứ Ba 11,06,2019

                  </span>
                </div>
                <div class="pro-text">
                  <h3 class="post_title">
                    <a style=" color: black;
                                      font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                      Bỉm Koremom
                    </a>
                  </h3>
                </div>
                <div style="text-align:center; padding-bottom: 30px;">
                  <span>Thông thoáng sạch sẽ</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section wrapper-home-newsletter">
      <div class="container-fluid">
        <div class="content-newsletter">
          <h2>Đăng ký</h2>
          <p>Đăng ký nhận bản tin của Kibie để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc biệt và thông
            tin
            giảm giá khác.</p>
          <div class="form-newsletter">
            <form action="" accept-charset="UTF-8" class="">
              <div class="form-group">
                <input type="hidden" id="contact_tags">
                <input required="" type="email" value="" placeholder="Nhập email của bạn" aria-label="Email Address" class="">
                <button type="submit" class=""><span>Gửi</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- gallery -->
    <section class="section section-gallery">
      <div class="">
        <div class="hot_sp" style="padding-top: 70px;padding-bottom: 50px;">
          <h2 style="text-align:center;padding-top: 10px">
            <a style="font-size: 28px;color: black;text-decoration: none" href="">Khách hàng thân thiết</a>
          </h2>
        </div>
        <div class="list-gallery clearfix">
          <ul class="shoes-gp">
            <div>
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
  </div>
  <div class="registratior_custom">
    <form action="">
      <div class="content">
        <div class="x-close">
          <i class="fa fa-times"></i>
        </div>
        <h3>Nhận các ưu đãi cùng Kibie</h3>
        <p>Chúng tôi sẽ cập nhật các chương trình khuyến mãi mới đến bạn</p>
        <ul>
          <li>
            <span>Giảm giá sản phẩm</span>
          </li>
          <li>
            <span>Sản phẩm mới</span>
          </li>
          <li>
            <span>Sản phẩm bán chạy</span>
          </li>
        </ul>
        <input type="text" placeholder="Đăng kí nhận thông tin">
        <button class="button_register">
          <p>ĐĂNG KÍ</p>
        </button>
      </div>
    </form>
  </div>
  <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
  <script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
  <script src="plugins/bootstrap/popper.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
  <script src="js/home.js"></script>
  <script src="js/script.js"></script>
  <script src="plugins/uikit/uikit.min.js"></script>
  <script src="plugins/uikit/uikit-icons.min.js"></script>
</body>

</html>