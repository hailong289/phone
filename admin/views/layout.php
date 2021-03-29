<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <base href="http://hailong.com/PHP2/phone/admin/">
    <title><?= (isset($pathTilte) == true) ? "$pathTilte" : "Điều khiển" ?></title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="./views/assets/img/brand/favicon.png" type="image/png"> -->
    <!-- Fonts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="./views/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="./views/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="./views/assets/css/argon.css?v=1.2.0" type="text/css">

    <script src="https://cdn.tiny.cloud/1/g79qcmrwim4c8iyr46v4dz18ni6fvvmhla6y16j2g97t859l/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: '.mytextarea'
            });
        });
    </script>
    <style>
        .table td,
        .table th {
            white-space: unset !important;
        }
    </style>
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <!-- <img src="./views/assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
                    Mobile shop
                </a>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card mt-2 mb-2">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left px-1 p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <a href=""><i class="ni ni-tv-2 text-primary mr-2"></i>Điều khiển</a>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed px-1 p-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quản lý nhà sản xuất
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <a href="<?= ADMIN_URL ?>/?ctrl=nhasanxuat&act=index" class="nav-link">Danh sách sản xuất</a>
                            <a href="<?= ADMIN_URL ?>/?ctrl=nhasanxuat&act=addnew" class="nav-link">Thêm nhà sản xuất</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed  px-1 p-0" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Quản lý điện thoại
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <a href="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=index" class="nav-link">Danh sách điện thoại</a>
                            <a href="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=addnew" class="nav-link">Thêm điện thoại</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header" id="headingfour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed  px-1 p-0" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Quản lý đơn hàng
                            </button>
                        </h2>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                        <div class="card-body">
                            <a href="<?= ADMIN_URL ?>/?ctrl=donhang&act=index" class="nav-link">Danh sách đơn hàng</a>
                            <a href="<?= ADMIN_URL ?>/?ctrl=donhang&act=addnew" class="nav-link">Thêm đơn hàng</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header" id="headingfive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed  px-1 p-0" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Quản lý người dùng
                            </button>
                        </h2>
                    </div>
                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                        <div class="card-body">
                            <a href="<?= ADMIN_URL ?>/?ctrl=users&act=index" class="nav-link">Danh sách người dùng</a>
                            <a href="<?= ADMIN_URL ?>/?ctrl=users&act=addnew" class="nav-link">Thêm người dùng</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header" id="headingsix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed  px-1 p-0" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Quản lý bình luận
                            </button>
                        </h2>
                    </div>
                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                        <div class="card-body">
                            <a href="<?= ADMIN_URL ?>/?ctrl=binhluan&act=index" class="nav-link">Danh sách bình luận</a>
                            <a href="<?= ADMIN_URL ?>/?ctrl=binhluan&act=addnew" class="nav-link">Thêm bình luận</a>
                        </div>
                    </div>
                </div>
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                   <p class="text-center">X close</p>
                </div>
            </div>
            <!-- <div class="navbar-inner">
                Collapse
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    Nav items
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="examples/dashboard.html">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/icons.html">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text">Icons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/map.html">
                                <i class="ni ni-pin-3 text-primary"></i>
                                <span class="nav-link-text">Google</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/profile.html">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/tables.html">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Tables</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="examples/login.html">
                                <i class="ni ni-key-25 text-info"></i>
                                <span class="nav-link-text">Login</span>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div> -->
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ni ni-bell-55"></i><span class="bage badge-danger"><?=$sldh?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                                <!-- Dropdown header -->
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                                </div>
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="./views/assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="./views/assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="./views/assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>5 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="./views/assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="./views/assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- View all -->
                                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ni ni-ungroup"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                                <div class="row shortcuts px-4">
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="ni ni-calendar-grid-58"></i>
                                        </span>
                                        <small>Calendar</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="ni ni-email-83"></i>
                                        </span>
                                        <small>Email</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="ni ni-credit-card"></i>
                                        </span>
                                        <small>Payments</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                            <i class="ni ni-books"></i>
                                        </span>
                                        <small>Reports</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                            <i class="ni ni-pin-3"></i>
                                        </span>
                                        <small>Maps</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                            <i class="ni ni-basket"></i>
                                        </span>
                                        <small>Shop</small>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <?php if (isset($_SESSION['idAdmin']) == true) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="./views/assets/img/theme/team-4.jpg">
                                        </span>

                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold"><?= $_SESSION['name'] ?></span>
                                        </div>

                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Chào mừng</h6>
                                    </div>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-single-02"></i>
                                        <span>Thông tin cá nhân</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span>Cài đặt</span>
                                    </a>
                                    <!-- <a href="#!" class="dropdown-item">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span>Activity</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Support</span>
                                </a> -->
                                    <div class="dropdown-divider"></div>
                                    <a href="?ctrl=users&act=logout" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Đăng xuất</span>
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Page content -->
        <h1 class="border-bottom border-danger mt-2 mb-4 pl-3 pb-2">
            <?php if (isset($pathTilte) == true) echo $pathTilte;
            else echo "Quản trị" ?>
        </h1>
        <div class="container-fluid">
            <?php
            if (file_exists($view)) { ?>

                <?php require_once $view ?>
        </div>
    <?php } else { ?>
        <canvas id="myChart" class="mb-5"></canvas>
    <?php } ?>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ['Điện thoại', 'Người dùng', 'Đơn hàng', 'Nhà sản xuất'],
                datasets: [{
                    label: 'Thống kê',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        
                    ],
                    borderWidth: 1,
                    data: [<?= $sldt ?>, <?= $sluser ?>, <?= $sldh ?>, <?= $slnsx ?>]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
    <script src="./views/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./views/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./views/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="./views/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="./views/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="./views/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="./views/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="./views/assets/js/argon.js?v=1.2.0"></script>
    <?php if (isset($_SESSION['mess']) == true) { ?>
        <script>
            swal("<?= $_SESSION['mess'] ?>", "", "success");
        </script>
    <?php unset($_SESSION['mess']);
    } ?>
</body>
<script src="./views/js/javascript.js"></script>

</html>