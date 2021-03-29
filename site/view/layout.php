<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (isset($title)) echo $title; ?></title>
    <base href="http://hailong.com/PHP2/phone/">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="site/view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="site/view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="site/view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="site/view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="site/view/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="site/view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="site/view/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="site/view/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <!-- <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i>Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Trang chủ</a></li>
                <li><a href="./shop-grid.html">Sản phẩm</a></li>
                <!-- <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li> -->
    <!-- <li><a href="./blog.html">Tin tức</a></li>
                <li><a href="./contact.html">Giới thiệu</a></li>
                <li><a href="./contact.html">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>  -->
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <?php if (isset($_SESSION['id']) == true) { ?>
                                    <img src="img/language.png" alt="">
                                    <div><?= $_SESSION['user'] ?></div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="Thong-tin">Thông tin tài khoản</a></li>
                                        <li><a href="doi-pass">Đổi mật khẩu</a></li>
                                        <?php if (isset($_SESSION['idDH'])==true) { ?>
                                            <li><a href="don-hang">Đơn hàng</a></li>
                                        <?php } ?>
                                        <li><a href="?act=logout">Đăng xuất</a></li>
                                    </ul>
                                <?php } else { ?>
                                    <a href="dang-nhap" style="color: black;">Đăng nhập</a>
                                <?php } ?>
                            </div>
                            <!-- <div class="header__top__right__auth"> -->


                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="trang-chu">Trang chủ</a></li>
                            <li><a href="san-pham">Sản phẩm</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="./blog.html">Tin tức</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span><?php if (isset($_SESSION['cart'])) {
                                                                                                $count = 0;
                                                                                                foreach ($_SESSION['cart'] as $sl) {
                                                                                                    $count += $sl['sl'];
                                                                                                }
                                                                                                echo $count;
                                                                                            } else {
                                                                                                echo 0;
                                                                                            } ?></span></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Nhà sản xuất</span>
                        </div>
                        <ul style="display: none;position: absolute;width: 87%;z-index: 100000;background-color: white;">
                            <?php foreach ($nsx as $nsx) { ?>
                                <li><a href="<?= $this->Url($nsx['TenNSX']) ?>-<?= $nsx['idNSX'] ?>"><?= $nsx['TenNSX'] ?></a></li>
                            <?php }  ?>
                            <!-- <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="tim-kiem/" method="post">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> -->
                                <input type="text" name="ten_dt" placeholder="Nhập tên sản phẩm" id="search">
                                <button type="submit" class="site-btn">Tìm kiếm</button>

                            </form>
                            <div id="searchresultdata">
                                <!-- <span id="faq_category_title"></span> -->

                            </div>
                            <script>
                                $(document).ready(function() {

                                    $("#search").keyup(function() {
                                        var faq_search_input = $(this).val(); // Lấy giá trị search của người dùng
                                        var dataString = 'timkiem=' + faq_search_input; // Lấy giá trị làm tham số đầu vào cho file ajax-search.php
                                        if (faq_search_input.length > 2) // Kiểm tra giá trị người nhập có > 2 ký tự hay ko
                                        {
                                            $.ajax({
                                                type: "GET", // Phương thức gọi là GET
                                                url: "site/index.php?act=timkiem", // File xử lý
                                                data: dataString, // Dữ liệu truyền vào
                                                beforeSend: function() { // add class "loading" cho khung nhập
                                                    $('input#search').addClass('loading');
                                                },
                                                success: function(server_response) // Khi xử lý thành công sẽ chạy hàm này
                                                {
                                                    $('#searchresultdata').html(server_response).show(); // Hiển thị dữ liệu vào thẻ div #searchresultdata
                                                    // $('span#faq_category_title').html(faq_search_input); // Hiển thị giá trị search của người dùng
                                                    if ($('input#faq_search_input').hasClass("loading")) { // Kiểm tra class "loading"
                                                        $("input#faq_search_input").removeClass("loading"); // Remove class "loading"
                                                    }
                                                }
                                            });
                                        } else {
                                            $('#searchresultdata').hide();
                                        }
                                        return false; // Không chuyển trang
                                    });
                                    // $("#search").keydown(function() {
                                    //     var faq_search_input = $(this).val(); // Lấy giá trị search của người dùng
                                    //     var dataString = 'timkiem=' + faq_search_input; // Lấy giá trị làm tham số đầu vào cho file ajax-search.php
                                    //     if (faq_search_input.length > 2) // Kiểm tra giá trị người nhập có > 2 ký tự hay ko
                                    //     {
                                    //         $.ajax({
                                    //             type: "GET", // Phương thức gọi là GET
                                    //             url: "index.php?act=timkiem", // File xử lý
                                    //             data: dataString, // Dữ liệu truyền vào
                                    //             beforeSend: function() { // add class "loading" cho khung nhập
                                    //                 $('input#search').addClass('loading');
                                    //             },
                                    //             success: function(server_response) // Khi xử lý thành công sẽ chạy hàm này
                                    //             {
                                    //                 $('#searchresultdata').html(server_response).show(); // Hiển thị dữ liệu vào thẻ div #searchresultdata
                                    //                 // $('span#faq_category_title').html(faq_search_input); // Hiển thị giá trị search của người dùng
                                    //                 if ($('input#faq_search_input').hasClass("loading")) { // Kiểm tra class "loading"
                                    //                     $("input#faq_search_input").removeClass("loading"); // Remove class "loading"
                                    //                 }
                                    //             }
                                    //         });
                                    //     }
                                    //     return false; // Không chuyển trang
                                    // });
                                    // $("#search").blur(function(){
                                    //     $('#searchresultdata').html('');
                                    // })
                                });
                            </script>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>Hỗ trợ 24h</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <?php if (file_exists($view)) require_once $view; ?>



    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: TP.HCM</li>
                            <li>Số điện thoại: 0989321312</li>
                            <li>Email: longdhps13563@fpt.edu.vn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Liên hệ với chúng tôi</h6>
                        <p>Hãy nhập email của bạn để có thể nhận những ưu đãi tốt nhất</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email">
                            <button type="submit" class="site-btn">Gửi</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="site/view/js/jquery-3.3.1.min.js"></script>
    <script src="site/view/js/bootstrap.min.js"></script>
    <script src="site/view/js/jquery.nice-select.min.js"></script>
    <script src="site/view/js/jquery-ui.min.js"></script>
    <script src="site/view/js/jquery.slicknav.js"></script>
    <script src="site/view/js/mixitup.min.js"></script>
    <script src="site/view/js/owl.carousel.min.js"></script>
    <script src="site/view/js/main.js"></script>


    <?php
    if (isset($_SESSION['mess']) == true) {
    ?>
        <script>
            swal("<?= $_SESSION['mess'] ?>", "", "success")
        </script>
    <?php unset($_SESSION['mess']);
    } ?>
    <?php
    if (isset($_SESSION['cb']) == true) {
    ?>
        <script>
            swal("<?= $_SESSION['cb'] ?>", "", "warning")
        </script>
    <?php unset($_SESSION['cb']);
    } ?>
    <?php
    if (isset($_SESSION['kh']) == true) {
    ?>
        <script>
            swal("<?= $_SESSION['kh'] ?>", "", "warning")
        </script>
    <?php unset($_SESSION['kh']);
    } ?>
</body>

</html>