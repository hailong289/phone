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
<div class="container">


    <!-- end -->
    <div class="w-100">
        <table class="table mb-5 mt-5 table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Thời điểm đặt hàng</th>
                    <th scope="col">Thời điểm giao hàng</th>
                    <th scope="col">Trạng thái</th>
                    <!-- <th scope="col">Trạng thái</th> -->
                    <th scope="col">Hủy</th>
                </tr>
            </thead>

            <?php foreach ($dh as $dh) {
                $dhct = $this->model->DonHangChitiet($dh['idDH']);
                $ttdh = $this->model->getDHByDhct($dh['idDH']);
            ?>
                <?php if ($ttdh['AnHien'] == 1) { ?>
                    <div class="d-flex flex-wrap w-100 justify-content-between mt-5" style="position: relative;">
                        <!-- Trang thái đơn hang -->
                        <div class="progress w-100" style="position: absolute;z-index: -99;margin: auto;height: 10px;margin-top: 36px;">
                            <div class="progress-bar bg-success" role="progressbar" <?php if ($ttdh['TrangThai'] == 1) {
                                                                                        echo 'style="width: 50%"';
                                                                                    } elseif ($ttdh['TrangThai'] == 2) {
                                                                                        echo 'style="width: 100%"';
                                                                                    } else {
                                                                                        echo 'style="width: 0%"';
                                                                                    } ?> aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="border rounded-circle p-3 text-center mb-3 text-white bg-secondary <?php if ($ttdh['TrangThai'] == 0) echo 'bg-success'; ?>" style="width: 8%;height: 6%;">Chờ duyệt</div>
                        <div class="border p-3 rounded-circle text-center mb-3 text-white bg-secondary <?php if ($ttdh['TrangThai'] == 1) echo 'bg-success'; ?>" style="width: 8%;height: 6%;">Đang giao</div>
                        <div class="border p-3 rounded-circle text-center mb-3 text-white bg-secondary <?php if ($ttdh['TrangThai'] == 2) echo 'bg-success'; ?>" style="width: 8%;height: 6%;">Đã nhận hàng</div>
                    </div>
                <?php } else { ?>
                    <div class="w-100 mt-5">
                        <h4 class="rounded-circle p-5 text-center border mx-auto bg-danger text-white" style="width: 15%;">Đã hủy</h4>
                    </div>
                <?php } ?>
                <tr>
                    <th scope="row"><?= $dh['idDH'] ?></th>
                    <td>
                        <?php foreach ($dhct as $ct) { ?>
                            <p><?= $ct['TenDT'] ?></p>
                            <p>Số lượng: <?= $ct['SoLuong'] ?></p>
                        <?php } ?>
                    </td>
                    <td><?= $dh['ThoiDiemDatHang'] ?></td>
                    <td><?= ($dh['ThoiDiemGiaoHang'] != null && $dh['TrangThai'] == 1) ? $dh['ThoiDiemGiaoHang'] : "Đang chờ" ?></td>
                    <td>
                        <?php
                        if ($dh['AnHien'] == 1) {
                            if ($dh['TrangThai'] == 2) { ?>
                                <a type="button" class="btn btn-danger disabled">Đã nhận hàng</a>
                            <?php } elseif ($dh['TrangThai'] == 1) { ?>
                                <a type="button" href="?act=donhang&idnh=<?= $dh['idDH'] ?>" class="btn btn-danger text-white">Xác nhận</a>
                            <?php } else { ?>
                                <a type="button" href="#" class="btn btn-danger text-white disabled">Chờ duyệt</a>
                            <?php } ?>
                        <?php } else { ?>
                            <a type="button" class="btn btn-danger disabled">Hàng đã bị hủy</a>
                        <?php } ?>
                    </td>
                    <!-- <td>
                        <?php
                        // if ($dh['TrangThai'] == 1) {
                        //     echo "<p>Đang giao</p>";
                        // } elseif ($dh['TrangThai'] == 2) {
                        //     echo "<p>Đã nhận hàng</p>";
                        // } else {
                        //     echo "<p>Chờ duyệt</p>";
                        // }
                        ?>
                    </td> -->
                    <td>
                        <?php if ($dh['TrangThai'] != 2) { ?>
                            <a href="?act=donhang&huydh=<?= $dh['idDH'] ?>" style="color: black;">Hủy</a>
                        <?php } else { ?>
                            <p></p>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>

</div>
</div>

</div>
<?php if (isset($_SESSION['dhtc'])) { ?>
    <script>
        swal("<?= $_SESSION['dhtc'] ?>", "Chúng tôi sẽ liên hệ với bạn", "success")
    </script>
<?php unset($_SESSION['dhtc']);
} ?>