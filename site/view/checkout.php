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
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <!-- <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div> -->
        <div class="checkout__form">
            <h4>Thông tin khách hàng</h4>
            <form action="?act=dathang" method="post">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Họ và tên<span>*</span></p>
                                    <input type="text" name="hoten" placeholder="Nhập họ và tên">
                                    <div><?=(isset($error_ht))? $error_ht:""?></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text">
                            </div> -->
                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Tên đường" class="checkout__input__add mb-1"  name="tend">
                                    <div><?=(isset($error_diachi))? $error_diachi:""?></div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Phường xã" class="checkout__input__add mb-1" name="tenpx" >
                                    <div><?=(isset($error_diachi))? $error_diachi:""?></div>
                                </div>
                            </div>
                            <input type="text" placeholder="Quận, Huyện" name="tenqh">
                            <div><?=(isset($error_diachi))? $error_diachi:""?></div>
                        </div>
                        <div class="checkout__input">
                            <p>Thành phố<span>*</span></p>
                            <input type="text" name="tp">
                            <div><?=(isset($error_diachi))? $error_diachi:""?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số điện thoại<span>*</span></p>
                                    <input type="text" name="sdt">
                                    <div><?=(isset($error_sdt))? $error_sdt:""?></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email">
                                    <div><?=(isset($error_email))? $error_email:""?></div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Chú thích<span>*</span></p>
                            <input type="text" placeholder="Nội dung chú thích" name="ct">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout__order">
                            <h4>Giỏ hàng của bạn</h4>
                            <div class="checkout__order__products">Sản phẩm <span>Giá</span></div>
                            <ul>
                                <?php
                                foreach ($_SESSION['cart'] as $gh) {
                                ?>
                                    <li><?= $gh['TenDT'] ?> <b>(<?= $gh['sl'] ?>)</b> <span><?= number_format($gh['Gia'] * $gh['sl']) ?> VNĐ</span></li>
                                     <input type="hidden" name="idDT" value="<?=$gh['idDT']?>">
                                    <!-- <li>Fresh Vegetable <span>$151.99</span></li>
                                    <li>Organic Bananas <span>$53.99</span></li> -->
                                <?php } ?>
                            </ul>
                            <!-- <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div> -->
                            <div class="checkout__order__total">Thành tiền: <span> <?php
                                                                                    foreach ($_SESSION['cart'] as $gh) {
                                                                                        $total_checkout += $gh['Gia'] * $gh['sl'];
                                                                                    }
                                                                                    echo number_format($total_checkout) . " " . "VNĐ";
                                                                                    ?></span></div>

                            <!-- <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                            <p>Hình thức thanh toán</p>
                            <div class="checkout__input__checkbox">
                                <label for="payment" class="mr-4">
                                    Thanh toán bằng thẻ ATM
                                    <input type="checkbox" id="payment">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="paypal" class="mr-4">
                                    Paypal
                                    <input type="checkbox" id="paypal">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="tienmat">
                                    Trả tiền mặt
                                    <input type="checkbox" id="tienmat">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- <div class="checkout__input__checkbox">
                                   
                                </div> -->
                            <button type="submit" class="site-btn">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->