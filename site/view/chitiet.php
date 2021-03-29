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

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="./uploaded/<?= $dt['urlHinh'] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?= $dt['TenDT'] ?></h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">Giá: <?= number_format($dt['Gia']) . " " ?> VNĐ</div>
                    <p><?= $dt['MoTa'] ?></p>
                    <form action="?act=cart" method="post">
                        <b style="font-size: 20pt;margin-right: 10px;">Số lượng:</b>
                        <input type="hidden" name="ma_sp" value="<?= $dt['idDT'] ?>">
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" name="sl">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3" style="height: 50px;">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success w-100" style="height: 100%;">Thêm vào giỏ</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100" style="height: 100%;">Mua ngay</button>
                            </div>
                        </div>
                    </form>
                    <!-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> -->

                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Thông số kỹ thuật</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Bình luận <span>(<?= $countbl ?>)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Thông số kỹ thuật</h6>
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <ul class="list-group">
                                            <li class="list-group-item"><strong>Màn hình:</strong> <?= $tt['ManHinh'] ?></li>
                                            <li class="list-group-item"><strong>Hệ điều hành:</strong> <?= $tt['HeDieuHanh'] ?></li>
                                            <li class="list-group-item"><strong>Camera sau:</strong> <?= $tt['CameraSau'] ?></li>
                                            <li class="list-group-item"><strong>Camera trước:</strong> <?= $tt['CameraTruoc'] ?></li>
                                            <li class="list-group-item"><strong>CPU:</strong> <?= $tt['CPU'] ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 pl-0">
                                        <ul class="list-group">
                                            <li class="list-group-item"><strong>Ram:</strong> <?= $tt['Ram'] ?></li>
                                            <li class="list-group-item"><strong>Bộ nhớ trong:</strong> <?= $tt['BoNhoTrong'] ?></li>
                                            <li class="list-group-item"><strong>Thẻ nhớ:</strong> <?= $tt['TheNho'] ?></li>
                                            <li class="list-group-item"><strong>Thẻ sim:</strong> <?= $tt['TheSim'] ?></li>
                                            <li class="list-group-item"><strong>Dung lượng pin:</strong> <?= $tt['DungLuongPin'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc shadow p-3 mb-5 bg-white  mt-4 rounded" style="min-height: 250px;">
                                <h6>Bình luận</h6>
                                <form action="#" method="post" class="w-100">
                                    <div class="form-group">
                                        <!-- <label for="exampleFormControlTextarea1">Bình luận</label> -->
                                        <input type="hidden" name="idDT" value="<?= $dt['idDT'] ?>">
                                        <input type="hidden" name="idUser" value="<?= $_SESSION['id'] ?>">
                                        <textarea class="form-control" name="nd" id="exampleFormControlTextarea1" rows="3" id="noidungbl"></textarea>
                                    </div>
                                    <div class="w-100" style="height: 100px;">
                                        <?php if (isset($_SESSION['id'])) { ?>
                                            <button type="submit" class="btn btn-info float-right" style="width: 15%;" id="guibinhluan">Gửi</button>
                                        <?php } else { ?>
                                            <a href="?act=login" class="text-center text-black" style="color: black;">Đăng nhập để bình luận</a>
                                        <?php } ?>
                                    </div>
                                </form>
                                <script>
                                $(document).ready(function () {
                                    $('#guibinhluan').click(function (e) { 
                                        e.preventDefault();
                                        nd = $('textarea[name=nd]').val();
                                        idDT = $('input[name=idDT]').val();
                                        idUser = $('input[name=idUser]').val();
                                        $.ajax({
                                            type: "POST",
                                            url: "site/index.php?act=binhluan",
                                            data:{
                                               nd: nd,
                                               idDT: idDT,
                                               idUser: idUser,
                                            },
                                            // dataType: "dataType",
                                            success: function (response) {
                                                // alert(response);
                                                location.reload();
                                                // // $('body').html();
                                            }
                                        });
                                    });
                                });
                                </script>
                             
                                <?php
                                foreach ($bl as $bl) {
                                    $username = $this->model->getUserByID($bl['idUser']);
                                ?>
                                    <div class="w-100 border-left mb-4">
                                        <div class="media">
                                            <?php if ($username['urlHinh'] == null) { ?>
                                                <img src="./uploaded/user.jpeg" class="mr-3 pl-2" alt="..." width="80px">
                                            <?php } else { ?>
                                                <img src="./uploaded/<?= $username['urlHinh'] ?>" class="mr-3 pl-2" alt="..." width="80px">
                                            <?php } ?>
                                            <div class="media-body">
                                                <h5 class="mt-0"><?= $username['HoTen'] ?></h5>
                                                <p><?= $bl['NoiDungBL'] ?></p>
                                                <span><em><?= $bl['ThoiDiemBL'] ?></em></span>
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
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($sp_lq as $dt) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item border p-3">
                        <div class="product__item__pic set-bg" data-setbg="./uploaded/<?= $dt['urlHinh'] ?>">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <div class="col-sm-12">
                                <h6><a href="<?=$this->Url($dt['TenDT'])?>-<?= $dt['idDT'] ?>.html"><?= $dt['TenDT'] ?></a></h6>
                            </div>
                            <div class="col-sm-12">
                                <p class="text-black mb-0"><strong>Giá:</strong> <?= number_format($dt['Gia']) . " " ?>VNĐ</p>
                                <p class="mb-0"><strong> Số lượt xem:</strong> <span style="color: orange;">(<?= $dt['SoLanXem'] ?>)</span></p>
                                <p><strong> Có:</strong> <span style="color: red;">(<?= $dt['SoLanMua'] ?>)</span> người mua</p>
                            </div>
                            <div class="col-sm-12">
                                <a type="button" href="<?=$this->Url($dt['TenDT'])?>-<?= $dt['idDT'] ?>.html" class="btn btn-success text-white font-weight-bold w-100">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Related Product Section End -->