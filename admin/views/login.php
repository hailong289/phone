<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-5 mx-auto mt-5 shadow p-3 mb-5 bg-body rounded" style="border-radius: 20px !important;margin-top: 100px !important;height: 500px;">
                <form class="col-sm-8 mx-auto mt-4" action="?act=dangnhap" method="post">
                <h2 class="text-center mb-5">Quản trị Mobile shop</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="tendn" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên đăng nhập" value="<?=(isset($_COOKIE['username'])? $_COOKIE['username']:"")?>">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Nhập mật khẩu" value="<?=(isset($_COOKIE['pass'])? $_COOKIE['pass']:"")?>">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="luu" <?=(isset($_COOKIE['luu'])? "checked":"")?>>
                                <label class="form-check-label" for="exampleCheck1">Giữ tôi luôn đăng nhập</label>
                            </div>
                        </div>
                        <div class="col-sm-6 mx-auto">
                            <button type="submit" class="btn btn-secondary w-100">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['mess']) == true) { ?>
    <script>
        swal("<?= $_SESSION['mess'] ?>", "", "warning");
    </script>
<?php unset($_SESSION['mess']);
} ?>
</body>

</html>
