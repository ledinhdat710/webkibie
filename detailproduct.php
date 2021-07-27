<?php
ob_start();
session_start();
define('TEMPLATE', true);
include_once('config/connect.php');
$prd_id = $_GET['prd_id'];

$sql = "SELECT * FROM product
		WHERE prd_id = $prd_id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>
<html class="no-js" lang="vi">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,
      user-scalable=0" name="viewport">
  <meta name="revisit-after" content="1 day">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="HandheldFriendly" content="true">
  <title> Sản phẩm </title>
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
                    <td class="img"><a href="" title="<?php echo $row['prd_name']; ?> &quot;Grape&quot;"><img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="/products/<?php echo $row['prd_name']; ?>"></a></td>
                    <td>
                      <a class="pro-title-view" style="color: #272727" href="" title="<?php echo $row['prd_name']; ?> &quot;Grape&quot;"><?php echo $row['prd_name']; ?></a>
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
                    <span itemprop="name"><?php echo $row['prd_name']; ?></span>
                  </span>
                  <meta itemprop="position" content="3">
                </li>

              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- detail product chính -->
      <div class="container">
        <div class="row product-detail-wrapper">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row product-detail-main pr_style_01">
              <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="product-gallery">
                  <div class="product-gallery__thumbs-container hidden-sm
                    hidden-xs">
                    <div class="product-gallery__thumbs thumb-fix">

                      <div class="product-gallery__thumb  active" id="imgg1">
                        <a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="admin/img/products/<?php echo $row['prd_image']; ?>" data-zoom-image="admin/img/products/<?php echo $row['prd_image']; ?>">
                          <img src="admin/img/products/<?php echo $row['prd_image']; ?>" data-image="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name']; ?>" grape="">
                        </a>
                      </div>

                    </div>
                  </div>
                  <div class="product-image-detail box__product-gallery
                    scroll hidden-xs">
                    <ul id="sliderproduct" class="site-box-content
                      slide_product">

                      <li class="product-gallery-item gallery-item
                        current " id="imgg1a">
                        <img class="product-image-feature " src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name']; ?>" grape="">
                      </li>

                    </ul>
                    <div class="product-image__button">
                      <div id="product-zoom-in" class="product-zoom
                        icon-pr-fix" aria-label="Zoom in" title="Zoom in">
                        <span class="zoom-in" aria-hidden="true">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width:
                            30px; height: 30px;" xml:space="preserve">
                            <polyline points="6,14 9,11 14,16 16,14 11,9
                              14,6 6,6">
                            </polyline>
                            <polyline points="22,6 25,9 20,14 22,16 27,11
                              30,14 30,6">
                            </polyline>
                            <polyline points="30,22 27,25 22,20 20,22
                              25,27 22,30 30,30">
                            </polyline>
                            <polyline points="14,30 11,27 16,22 14,20 9,25
                              6,22 6,30">
                            </polyline>
                          </svg>
                        </span>
                      </div>
                      <div class="gallery-index icon-pr-fix"><span class="current">1</span>
                        / <span class="total">8</span></div>
                    </div>
                  </div>
                </div>
                <div class="product-gallery-slide">
                  <div class="owl-carousel owl-theme owl-product-gallery-slide">
                    <div class=" item">
                      <div class="product-gallery__thumb  >
                      <a class=" product-gallery__thumb-placeholder href="javascript:void(0);" data-image="admin/img/products/<?php echo $row['prd_image']; ?>" data-zoom-image="admin/img/products/<?php echo $row['prd_image']; ?>">
                        <img src="admin/img/products/<?php echo $row['prd_image']; ?>" data-image="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name']; ?>" grape="">
                        </a>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col-md-5 col-sm-12 col-xs-12
                product-content-desc" id="detail-product">
                <div class="product-content-desc-1">
                  <div class="product-title">
                    <h1><?php echo $row['prd_name']; ?></h1>

                  </div>
                  <div class="product-price" id="price-preview"><span class="pro-price">Giá bán : <?php echo number_format($row['prd_price']); ?> đ</span>
                  </div>
                  <div class="product-price" id="price-preview"><span class="pro-price">Code : <?php echo $row['prd_code']; ?></span>
                  </div>
                  <div class="product-price" id="price-preview"><span class="pro-price">Tình trạng : <?php if ($row['prd_status' == 1]) {
                                                                                                        echo 'Còn hàng';
                                                                                                      } else {
                                                                                                        echo 'Hết hàng';
                                                                                                      } ?></span>
                  </div>
                  <form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">
                    <div class="selector-actions">
                      <div class="quantity-area clearfix">
                        <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                        <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                        <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                      </div>
                      <div class="wrap-addcart clearfix">
                        <div class="row-flex">
                          <button type="button" class="button btn-addtocart addtocart-modal">Thêm
                            vào</button>
                          <button type="button" class="buy-now button" style="display: block;"> <a class="text-white" href="cart.php"> Mua
                              ngay </a></button>

                        </div>

                        <a href="" target="_blank" class="button btn-check" style="color: #ffffff;text-decoration:none;"><span>Click
                            nhận mã giảm giá ngay
                            !</span></a>

                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
            <!--	Comment and mô tả -->
            <div id="product">
              <div class="product-description">
                <div class="title-bl">
                  <h2 style="font-size: 23px;">Mô tả</h2>
                </div>
                <div class="description-content">
                  <div class="description-productdetail">
                    <?php echo $row['prd_details']; ?>
                  </div>
                </div>
              </div>
              <div id="comment" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3>Bình luận sản phẩm</h3>
                  <form method="post">
                    <div class="form-group">
                      <label>Tên:</label>
                      <input style="width:300px" name="comm_name" required type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email:</label>
                      <input style="width:300px" name="comm_mail" required type="email" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                      <label>Nội dung:</label>
                      <textarea name="comm_details" required rows="8" class="form-control"></textarea>
                    </div>
                    <button type="submit" name="sbm" class="btn btn-primary">Gửi</button>
                  </form>
                </div>
              </div>
            </div>
            <!--	End Comment and mô tả	-->
            <div class="list-productRelated clearfix">
              <div class="heading-title text-center">
                <h2>Sản phẩm liên quan</h2>
              </div>
              <?php $sql_prd = "SELECT * FROM product
		                        LIMIT 4";
              $query_prd = mysqli_query($conn, $sql_prd);
              // $row_prd = mysqli_fetch_array($query_prd);  
              ?>
              <div class="container">
                <div class="row">
                  <?php while ($row_prd = mysqli_fetch_array($query_prd)) { ?>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                      <div class="product-block">
                        <div class="product-img fade-box">
                          <a href="detailproduct.php?prd_id=<?php echo $row_prd['prd_id']; ?>" title="<?php echo $row_prd['prd_name']; ?>" class="img-resize">
                            <img src="admin/img/products/<?php echo $row_prd['prd_image']; ?>" alt="<?php echo $row_prd['prd_name']; ?>" class="lazyloaded">
                            <img src="admin/img/products/<?php echo $row_prd['prd_image']; ?>" alt="<?php echo $row_prd['prd_name']; ?>" class="lazyloaded">
                          </a>

                        </div>
                        <div class="product-detail clearfix">
                          <div>
                            <a style="color: black;
                            font-size: 14px;text-decoration: none;" href="detailproduct.php?prd_id=<?php echo $row_prd['prd_id']; ?>" title="<?php echo $row_prd['prd_name']; ?>" inspiration pack>
                              <?php echo $row_prd['prd_name']; ?>
                            </a>
                          </div>
                          <div class="pro-price">
                            <p class=""><?php echo number_format($row_prd['prd_price']) ?> đ</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <!-- show zoom detail product -->
    <!-- zoom -->
    <div class="product-zoom11">
      <div class="product-zom">
        <div class="divclose">
          <i class="fa fa-times-circle"></i>
        </div>
        <div class="owl-carousel owl-theme owl-product1">

          <div class="item"><img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="">
          </div>
          <div class="item"><img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="">
          </div>
          <div class="item"><img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="">
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
                <p>Koremom hãng <?php echo $row['prd_name']; ?> uy tín nhất Việt Nam</p>
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