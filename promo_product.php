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

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="plugins/animate/animate.min.css">

  <link rel="stylesheet" href="plugins/fontawesome/all.css">

  <link href="plugins/webfonts/font.css" rel="stylesheet">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />


  <title>Sản phẩm khuyến mại</title>
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
                    <td class="img"><a href="" title="Bỉm &quot;Grape&quot;"><img src="images/banner1.jpg" alt="/products/nike-air-max-90-essential-grape"></a></td>
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
  <!--Banner-->
  <div>
  </div>
  <div class="breadcrumb-shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
          <ol class="breadcrumb breadcrumb-arrows">
            <li>
              <a href="index.php">
                <span>Trang chủ</span>
              </a>
            </li>
            <li>
              <a href="product.php">
                <span>Sản phẩm</span>
              </a>
            </li>
            <li>
              <span><span style="color: #777777">Sản phẩm khuyến mại</span></span>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--List Prodct-->
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
        <div class="wrap-filter">
          <div class="box_sidebar">
            <div class="block left-module">
              <div class=" filter_xs">
                <div class="layered">
                  <p class="title_block d-block d-sm-none d-none d-sm-block d-md-none" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                    Bộ lọc sản phẩm
                    <span><i class="fa fa-angle-down" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"></i></span>
                  </p>
                  <div class="block_content collapse" id="collapseExample2">
                    <div class="group-filter card card-body" style="border:0;padding:0" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Thương hiệu</span><span class="icon-control"><i class="fa fa-minus"></i></span></div>
                      <div class="layered-content bl-filter filter-brand">
                        <ul class="check-box-list">
                          <li>
                            <input type="checkbox" id="data-brand-p1" value="Khác">
                            <label for="data-brand-p1">Khác</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="group-filter" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Giá sản phẩm</span><span class="icon-control"><i class="fa fa-minus"></i></span></div>
                      <div class="layered-content bl-filter filter-price">
                        <ul class="check-box-list">
                          <li>
                            <input type="checkbox" id="p1">
                            <label for="p1">
                              <span>Dưới</span> 500,000₫
                            </label>
                          </li>
                          <li>
                            <input type="checkbox" id="p2">
                            <label for="p2">
                              500,000₫ - 1,000,000₫
                            </label>
                          </li>
                          <li>
                            <input type="checkbox" id="p3">
                            <label for="p3">
                              1,000,000₫ - 1,500,000₫
                            </label>
                          </li>
                          <li>
                            <input type="checkbox" id="p4">
                            <label for="p4">
                              2,000,000₫ - 5,000,000₫
                            </label>
                          </li>
                          <li>
                            <input type="checkbox" id="p5">
                            <label for="p5">
                              <span>Trên</span> 5,000,000₫
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="group-filter" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Màu sắc</span><span class="icon-control"><i class="fa fa-minus"></i></span></div>
                      <div class="layered-content filter-color s-filter">
                        <ul class="check-box-list">
                          <li>
                            <input type="checkbox" id="data-color-p1">
                            <label for="data-color-p1" style="background-color: #fb4727"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p2">
                            <label for="data-color-p2" style="background-color: #fdfaef"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p3">
                            <label for="data-color-p3" style="background-color: #3e3473"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p4">
                            <label for="data-color-p4" style="background-color: #ffffff"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p5">
                            <label for="data-color-p5" style="background-color: #75e2fb"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p6">
                            <label for="data-color-p6" style="background-color: #cecec8"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p7">
                            <label for="data-color-p7" style="background-color: #6daef4"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p8">
                            <label for="data-color-p8" style="background-color: #000000"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p9">
                            <label for="data-color-p9" style="background-color: #e2262a"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p10">
                            <label for="data-color-p10" style="background-color: #ee8aa1"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p11">
                            <label for="data-color-p11" style="background-color: #4a5250"></label>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="group-filter" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Kích thước</span><span class="icon-control"><i class="fa fa-minus"></i></span></div>
                      <div class="layered-content filter-size s-filter">

                        <ul class="check-box-list clearfix">

                          <li>
                            <input type="checkbox" id="data-size-p1">
                            <label for="data-size-p1">35</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p2">
                            <label for="data-size-p2">36</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p3">
                            <label for="data-size-p3">37</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p4">
                            <label for="data-size-p4">38</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p5">
                            <label for="data-size-p5">39</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p6">
                            <label for="data-size-p6">40</label>
                          </li>

                        </ul>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="wrap-collection-title row">
          <div class="col-md-8 col-sm-12 col-xs-12">
            <h1 style="margin-bottom: 10px;" class="title">
              Sản phẩm khuyến mại
            </h1>
            <div class="alert-no-filter"></div>
          </div>
          <div class="col-md-4 d-sm-none d-md-block d-none d-sm-block" style="float: left">
            <div class="option browse-tags">
              <span class="custom-dropdown custom-dropdown--grey">
                <select class="sort-by custom-dropdown__select">
                  <option value="price-ascending">Giá: Tăng dần</option>
                  <option value="price-descending">Giá: Giảm dần
                  </option>
                  <option value="title-ascending">Tên: A-Z</option>
                  <option value="title-descending">Tên: Z-A</option>
                  <option value="created-ascending">Cũ nhất
                  </option>
                  <option value="created-descending">Mới nhất
                  </option>
                  <option value="best-selling">Bán chạy nhất
                  </option>
                  <option value="quantity-descending">Tồn kho: Giảm dần</option>
                </select>
              </span>
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
        <div class="row">
          <?php while ($row = mysqli_fetch_array($query)) { ?>
            <div class="fix-col col-md-3 col-sm-6 col-xs-6 col-6">
              <div class="product-block">
                <div class="product-img fade-box">
                  <a href="detailproduct.php?prd_id=<?php echo $row['prd_id']; ?>" title="<?php echo $row['prd_name']; ?>" class="img-resize">
                    <img src="admin/img/products/<?php echo $row['prd_image']; ?>" alt="<?php echo $row['prd_name']; ?>" class="lazyloaded">
                    <img src="admin/img/products/<?php echo $row['prd_image']; ?>" class="lazyloaded">
                  </a>

                </div>
                <div class="product-detail clearfix">
                  <div>
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
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
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
</body>

</html>