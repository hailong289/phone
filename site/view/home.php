 <!-- Featured Section Begin -->
 <div class="container">
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img class="d-block w-100" src="./uploaded/banner1.png" alt="First slide" style="height: 450px;object-fit: cover;">
             </div>
             <div class="carousel-item">
                 <img class="d-block w-100" src="./uploaded/banner2.png" alt="Second slide" style="height: 450px;object-fit: cover;">
             </div>
             <div class="carousel-item">
                 <img class="d-block w-100" src="./uploaded/banner3.png" alt="Third slide" style="height: 450px;object-fit: cover;">
             </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>
 </div>
 <section class="featured spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title">
                     <h2>Sản phẩm mới</h2>
                 </div>
                 <!-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div> -->
             </div>
         </div>
         <div class="row featured__filter">
             <?php foreach ($Ds_dt as $dt) { ?>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                     <div class="featured__item border shadow-sm p-3 mb-5 bg-white rounded">
                         <div class="featured__item__pic set-bg" data-setbg="./uploaded/<?= $dt['urlHinh'] ?>" style="height: 200px;">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="?act=cart&id=<?= $dt['idDT'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text row">
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
         <div class="row">
             <div class="col-6 mx-auto text-center">
                 <a type="button" href="san-pham" class="btn btn-outline-success">Xem thêm</a>
             </div>
         </div>
     </div>
 </section>
 <!-- Featured Section End -->


 <!-- Banner Begin -->
 <div class="banner">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6">
                 <div class="banner__pic">
                     <img src="./uploaded/banner2.png" alt="">
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6">
                 <div class="banner__pic">
                     <img src="./uploaded/banner3.png" alt="">
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Banner End -->


 <!-- Latest Product Section Begin -->
 <section class="featured spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title">
                     <h2>Sản phẩm xem nhiều</h2>
                 </div>
                 <!-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div> -->
             </div>
         </div>
         <div class="row featured__filter">
             <?php foreach ($SP_xn as $dt) { ?>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                     <div class="featured__item border shadow-lg p-3 mb-5 bg-white rounded">
                         <div class="featured__item__pic set-bg" data-setbg="./uploaded/<?= $dt['urlHinh'] ?>" style="height: 200px;">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="?act=cart&id=<?= $dt['idDT'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text row">
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
         <div class="row">
             <div class="col-6 mx-auto text-center">
                 <a type="button" class="btn btn-outline-success">Xem thêm</a>
             </div>
         </div>
     </div>
 </section>
 <section class="featured spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title">
                     <h2>Sản phẩm bán chạy</h2>
                 </div>
                 <!-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div> -->
             </div>
         </div>
         <div class="row featured__filter">
             <?php foreach ($SP_bc as $dt) { ?>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                     <div class="featured__item border shadow-lg p-3 mb-5 bg-white rounded">
                         <div class="featured__item__pic set-bg" data-setbg="./uploaded/<?= $dt['urlHinh'] ?>" style="height: 200px;">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="?act=cart&id=<?= $dt['idDT'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text row">
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
         <div class="row">
             <div class="col-6 mx-auto text-center">
                 <a type="button" class="btn btn-outline-success">Xem thêm</a>
             </div>
         </div>
     </div>
 </section>