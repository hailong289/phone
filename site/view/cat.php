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
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <h3 class="bg-success text-center text-white p-2 rounded-top">Tìm nhanh</h3>
                <form class="shadow p-3 mb-5 bg-white rounded" style="height: 450px;">
                    <select class="form-control w-100 mb-3">
                        <option class="w-100 d-block">Nhà sản xuất</option>
                    </select>
                    <select class="form-control w-100 mb-3">
                        <option class="w-100 d-block">Mức giá</option>
                    </select>
                    <select class="form-control w-100 mb-3">
                        <option class="w-100 d-block">Tính năng đặc biệt</option>
                    </select>
                    <select class="form-control w-100 mb-3">
                        <option class="w-100 d-block">Màn hình</option>
                    </select>
                    <select class="form-control w-100 mb-3">
                        <option class="w-100 d-block">Dung lượng pin</option>
                    </select>
                    <select class="form-control w-100 mb-3 disabled">
                        <option class="w-100 d-block">Trả góp</option>
                    </select>
                    <button type="submit" class="btn btn-success w-100">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sắp xếp</span>
                                <select>
                                    <option value="0">Mới nhất</option>
                                    <option value="0">Cũ nhất</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div> -->
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php if(isset($nosp)){ ?>
                   <h2 class="text-center"><?=$nosp?></h2>
                   <?php } ?>
                    <?php foreach ($DT as $dt) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item border shadow-sm p-3 mb-5 bg-white rounded">
                                <div class="product__item__pic set-bg" data-setbg="./uploaded/<?= $dt['urlHinh'] ?>" style="200px">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="?act=cart&id=<?= $dt['idDT'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text pb-2">
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
                <!-- <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div> -->
                <?= $links ?>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->