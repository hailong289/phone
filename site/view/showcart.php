<div class="row">
    <div class="b1">
        <img src="./uploaded/banner1.gif" alt="" width="100%" style="height: 200px;">
        <div class="b1-text">
            <h2>Mobile shop</h2>
            <div class="b1-text-c">
                <a href="index.php" class="text-white">Home /</a>
                <span class="text-white"><?= $title ?></span>
            </div>
        </div>
    </div>
</div>

<!-- Shoping Cart Section Begin -->
<?php if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) { ?>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <!-- <th></th> -->
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $sp) { ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="./uploaded/<?= $sp['urlHinh'] ?>" alt="" width="100px">
                                            <h5><?= $sp['TenDT'] ?></h5>
                                        </td>
                                        <td class="shoping__cart__price" style="width: 15%;">
                                            <?= number_format($sp['Gia']) . " " ?> VNĐ
                                        </td>
                                        <form action="?act=updatecart" method="post">
                                            <td class="shoping__cart__quantity">
                                                <!-- <div class="quantity">
                                                    <div class="pro-qty"> -->
                                                <div class="input-group">
                                                <button type="submit" class="input-group-text btn btn-danger" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> - </button>
                                                <input type="number" value="<?= $sp['sl'] ?>" name='sl[<?=$sp['idDT']?>]' class="form-control text-center" min="1" max="<?=$sp['SoLuongTonKho']?>" >
                                                <button type="submit" class="input-group-text btn btn-success" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> + </button>
                                                </div>
                                                <!-- </div>
                                                </div> -->
                                            </td>
                                            <!-- <td style="width: 8%;"> <button class="btn btn-light">Cập nhật</button></td> -->
                                        </form>
                                        <td class="shoping__cart__total" style="width: 15%;">
                                            <?= number_format($sp['Gia'] * $sp['sl']) . " " ?> VNĐ
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <a href="?act=deletecart&id=<?= $sp['idDT'] ?>"><span class="icon_close"></span></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div> -->
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Nhập mã khuyến mãi</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">Kiểm tra</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Thanh toán</h5>

                        <ul>
                            <li>Khuyến mãi: <span>20%</span></li>
                            <li>Tổng tiền: <span><?php
                                                    $total = 0;
                                                    foreach ($_SESSION['cart'] as $tt) {
                                                        $total += ($tt['Gia'] * $tt['sl']);
                                                    }
                                                    echo number_format($total) . " " . " " . "VNĐ";
                                                    ?></span></li>
                        </ul>
                        <?php if (isset($_SESSION['id']) == true) { ?>
                            <a href="thanh-toan" class="primary-btn">Thanh toán</a>
                        <?php } else { ?>
                            <a href="dang-nhap" class="primary-btn" id="checkdn">Thanh toán</a>
                            <script>
                                $(document).ready(function() {
                                    $('#checkdn').click(function(e) {
                                        e.preventDefault();
                                        a = $(this).attr('href');
                                        swal({
                                                title: "Hãy đăng nhập để tiếp tục",
                                                text: "",
                                                // type: "warning",
                                                showCancelButton: true,
                                                confirmButtonClass: "btn-danger",
                                                confirmButtonText: "Vâng",
                                                cancelButtonText: "Thoát!",
                                                closeOnConfirm: false
                                            },
                                            function() {
                                                // swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                                document.location.href = a;
                                            });

                                    });
                                });
                            </script>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <h2 class="text-center mt-5 mb-5 p-5">Không có sản phẩm trong giỏ</h2>
<?php } ?>
<!-- Shoping Cart Section End -->