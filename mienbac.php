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
    <link rel="stylesheet" href="plugins/owl.carousel/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="plugins/owl.carousel/owl.theme.default.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />


    <title>Hệ thống cửa hàng</title>
    <style>
        #navbarNav a {
            text-transform: none;
            font-size: 15px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            font-size: 23px;
        }

        th {
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }

        .shopsystem {
            margin-bottom: 30px;
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
                            <div class="search-item">
                                <div class="search-item-left">
                                    <div class="item-name">Bỉm</div>
                                    <div class="item-price">1.600.000</div>
                                </div>
                                <div class="search-item-right">
                                    <div class="img">
                                        <img src="images/banner.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="search-item">
                                <div class="search-item-left">
                                    <div class="item-name">Bỉm</div>
                                    <div class="item-price">1.600.000</div>
                                </div>
                                <div class="search-item-right">
                                    <div class="img">
                                        <img src="images/banner.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="search-item">
                                <div class="search-item-left">
                                    <div class="item-name">Bỉm</div>
                                    <div class="item-price">1.600.000</div>
                                </div>
                                <div class="search-item-right">
                                    <div class="img">
                                        <img src="images/banner.jpg" alt="">
                                    </div>
                                </div>
                            </div>
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
    <!--Banner-->
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
                            <span><span style="color: #777777">Hệ thống cửa hàng</span></span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--List Prodct-->

    <div class="container">
        <h3>HỆ THỐNG CÁC CỬA HÀNG MIỀN BẮC</h3>
        <div class="shopsystem">
            <img src="images/HaNoi.png" alt="Hà Nội">
            <table>
                <tr>
                    <th>Tên cửa hàng</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td>ECOFOR MART</td>
                    <td>Tầng 1 Tòa C1 Chung Cư K33 - Ngọc Thụy - Hà Nội</td>
                </tr>
                <tr>
                    <td>Siêu Thị Nông Dân</td>
                    <td>Tầng 1 Tòa Nhà Ruby 3 - Phúc Lợi - Hà Nội</td>
                </tr>
                <tr>
                    <td>Cô Lan</td>
                    <td>Giang Biên - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Tường Vy</td>
                    <td>Phúc Lợi - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Bình Chi</td>
                    <td>Chợ Vàng - Cổ Bi- Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Thuyết Minh</td>
                    <td>Dương Hà - Gia Lâm - Hà nội</td>
                </tr>
                <tr>
                    <td>Toàn Thắng</td>
                    <td>Phúc Lợi - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Shop Mẹ Bé( Mẹ Ỉn)</td>
                    <td>357 Ngô Xuân Quảng - TT Trâu Quỳ - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Duy Linh</td>
                    <td>Phố Trạm - Thạch Bàn - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Bích Phượng</td>
                    <td>137 Thanh Am - Thanh Phương - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>BaBy Smile Plaza</td>
                    <td>Chợ Sủi - Phú Thị - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Chiểu Oanh</td>
                    <td>59 Ngô Xuân Quảng - TT Trâu Quỳ - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Minh Thúy</td>
                    <td>137 Thạch Bàn - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Dung Doanh</td>
                    <td>Chợ Yên Thường - Yên Thường - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Bình Chuyên</td>
                    <td>Chợ Đồng Dinh - Thạch Bàn - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Luyến Thép</td>
                    <td>Chợ Phúc Lợi - Phúc Lợi - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Nga Lộc</td>
                    <td>Chợ Thượng Thanh - Thượng Thanh - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Tuân Lượng</td>
                    <td>Lệ Chi - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Huân Hương</td>
                    <td>Chợ Keo - Kim Sơn - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Minh Châu</td>
                    <td>Dương Đá - Dương Xá Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Lê Hà</td>
                    <td>Lam Cầu - Dương Quang - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Nga Sơn</td>
                    <td>KĐT Đặng Xá - Gia Lâm - Hà Nội</td>
                </tr>
                <tr>
                    <td>Sữa Bột - Bỉm</td>
                    <td>Số 38 Ngõ 285 - Phúc Lợi - Long Biên - Hà Nội</td>
                </tr>
                <tr>
                    <td>Dâu Ba By</td>
                    <td>P2 - KĐT Việt Hưng - Long Biên - Hà Nội</td>
                </tr>
            </table>
        </div>

        <div class="shopsystem">
            <img src="images/BacNinh.png" alt="Bắc Ninh">
            <table>
                <tr>
                    <th>Tên cửa hàng</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td>Thùy Dương 1</td>
                    <td>Nguyễn Cao - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Thùy Dương 2</td>
                    <td>Nguyễn Gia Thiều - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Baby best</td>
                    <td>Ninh Xá - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Nhật Ánh</td>
                    <td>Đồng Kỵ - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Đồng Cỏ Xanh</td>
                    <td>Đồng Kỵ - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Thuật Hường</td>
                    <td>Hòa Đình - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Hòa Thế</td>
                    <td>Tiên Du - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Thế giới sữa 3S</td>
                    <td>Thuận Thành - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Hồng Hoàng</td>
                    <td>Kênh Vàng - TP Bắc Ninh</td>
                </tr>
                <tr>
                    <td>Ngọc Trâm</td>
                    <td>Thị Cầu - TPBN - TP Bắc Ninh</td>
                </tr>

            </table>
        </div>

        <div class="shopsystem">
            <img src="images/VinhPhuc.png" alt="Vĩnh Phúc">
            <table>
                <tr>
                    <th>Tên cửa hàng</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td>Hoàn Dung</td>
                    <td>Ngách 1 - Ngõ 1 - Tôn Đức Thắng - Khai Quang - Vĩnh Yên - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Mẹ và Bé Đồng Văn</td>
                    <td>Xã Đồng Văn - Huyện Yên Lạc - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Quân Tuyết</td>
                    <td>Xuân Hòa - Phúc Yên - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Ngân Thương</td>
                    <td>Dốc Lồ - Nguyệt Đức - Yên Lạc - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Hương Mai</td>
                    <td>Số 133 Trần Hưng Đạo - Trưng Trắc - Phúc Yên - vĩnh phúc</td>
                </tr>
                <tr>
                    <td>Ngọc Hà</td>
                    <td>Trần Hưng Đạo - Trưng Trắc - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Sữa Bỉm 360</td>
                    <td>Kiot số 4 - Nguyễn Viết Xuân - Ngô Quyền - Vĩnh Yên - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Trung Hưng</td>
                    <td>Thôn Đồng Lạc - Xã Đồng Văn - Yên Lạc - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Nhật Minh</td>
                    <td>Nguyễn Văn Linh - Xuân Hòa - Vĩnh Phúc</td>
                </tr>
                <tr>
                    <td>Thái Sơn</td>
                    <td>208 Trần Phú - Phúc Yên - Vĩnh Phúc</td>
                </tr>

            </table>
        </div>

        <div class="shopsystem">
            <img src="images/SonLa.png" alt="Sơn La">
            <table>
                <tr>
                    <th>Tên cửa hàng</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td>Nhà PP Nguyễn Thị Mơ</td>
                    <td>Lê Đức Thọ - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Hà Đô</td>
                    <td>77 Nguyễn Lương Bằng - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Thảo Vy</td>
                    <td>Ngã Ba tân Cương - Mộc châu - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Thành Thơm</td>
                    <td>TT Nông Trường - Mộc châu - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Đại Lý Sữa</td>
                    <td>TT Phù yên - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Phương Hiệp</td>
                    <td>TT Nông Trường - Mộc châu - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Chị Nga</td>
                    <td>TP Sơn La</td>
                </tr>
                <tr>
                    <td>Thanh Thảo</td>
                    <td>TT Nông Trường - Mộc châu - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Yến Tùng</td>
                    <td>Ngã Tư Xe Khách - TP Sơn La</td>
                </tr>
                <tr>
                    <td>Thiên Ý Milk</td>
                    <td>Đường Trường Chinh - TP Sơn La</td>
                </tr>

            </table>
        </div>

        <div class="shopsystem">
            <img src="images/HaiPhong.png" alt="Hải Phòng">
            <table>
                <tr>
                    <th>Tên cửa hàng</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td>Tạp Hóa Dung</td>
                    <td>234 Lê Lai - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Lan</td>
                    <td>Bát Trang - An Lão - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Lý</td>
                    <td>Tân Liên - Vĩnh Bảo - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Hường</td>
                    <td>Tân Liên - Vĩnh Bảo - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Bích</td>
                    <td>Hội Am - Vĩnh Bảo - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Thương</td>
                    <td>Đông Tạ - Vĩnh Bảo - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Liên</td>
                    <td>Hội Am - Vĩnh Bảo - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Hán</td>
                    <td>Cao Minh - Vĩnh Bảo - Hải Phòng</td>
                </tr>
                <tr>
                    <td>Tạp Hóa Sâm Pháp</td>
                    <td>Khu 3/2 - Vĩnh Bảo - Hải Phòng</td>
                </tr>
            </table>
        </div>

        <div class="shopsystem">
            <img src="images/ThaiNguyen.png" alt="Thái Nguyên">
            <table>
                <tr>
                    <th>Tên cửa hàng</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td>Hùng Thu</td>
                    <td>Số 2 - Tổ Dân Phố Hòa Nhị - Phường Đồng Bẩm - TP Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Quỳnh Nga</td>
                    <td>TT Trại Cau - Đồng Hỷ - TP Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Hải Thủy</td>
                    <td>TT Trại Cau - Đồng Hỷ - Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Tỉnh Bằng</td>
                    <td>Thịnh Đán - Tp Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Hương Hương</td>
                    <td>Chợ cầu - Nhã lộng - Phú Bình - Tp Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Nguyệt Anh</td>
                    <td>Tổ 18 Phường Chùa Hang - Tp Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Hoàng Anh</td>
                    <td>Phường Chùa Hang - Tp Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Hùng Hợp</td>
                    <td>TT Đình Cả - Võ Nhai - TP Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Quảng Hương</td>
                    <td>Chợ Trào - Phú Lương - TP Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Hương Giang</td>
                    <td>Ba Hàng - Phổ Yên - TP Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Vân Tùng</td>
                    <td>Thành Công - Phổ Yên - TP Thái Nguyên</td>
                </tr>
                <tr>
                    <td>Tiến Cúc</td>
                    <td>TT Hùng Sơn - Đại Từ - TP Thái Nguyên</td>
                </tr>
            </table>
        </div>

        <div class="shopsystem">
            <img src="images/BacGiang.png" alt="Bắc Giang">
            <table>
                <tr>
                    <th>Tên cửa hàng</th>
                    <th>Địa chỉ</th>
                </tr>
                <tr>
                    <td>Văn Đức</td>
                    <td>Tân Mỹ - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Ngân Hương</td>
                    <td>Ngô Trang - Trần Nguyên Hãn - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Dũng Anh</td>
                    <td> Hà Vị - Trần Nguyên Hãn - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Long Nghĩa</td>
                    <td>11 Lý Thái Tổ - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Vũ Hồng</td>
                    <td>Giáp Hải - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Hường Đức</td>
                    <td>Tân Mỹ - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Nga Hòa</td>
                    <td>TT Bích Động - Việt Yên -TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Thảo Tân</td>
                    <td>Chợ Tràng - Việt Yên - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Siêu Thị Sữa</td>
                    <td>Việt Tiến - Việt Yên - TP Bắc Giang</td>
                </tr>
                <tr>
                    <td>Chinh Nguyên</td>
                    <td>Đông Lỗ - Hiệp Hòa - TP Bắc Giang</td>
                </tr>

            </table>
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