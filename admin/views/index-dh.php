<div class="w-100 shadow-lg p-3 mb-5 bg-white rounded">
    <table class="table table-bordered ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Mã đơn</th>
                <!-- <th scope="col">Thời điểm giao hàng</th> -->
                <th scope="col">Người dùng</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Ghi chú của khách hàng</th>
                <th scope="col">Ghi chú của admin</th>
                <th scope="col">Chọn ngày giao</th>
                <!-- <th scope="col">Hủy đơn hàng</th> -->
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Ds_dh as $dh) { ?>
                <tr>
                    <th scope="row"><?= $dh['idDH'] ?></th>
                    <td>
                        <?php $user = $this->model->user($dh['idUser']);
                        echo $user['HoTen'];
                        ?>
                    </td>
                    <td>
                        <p>Tên người nhận: <strong><?= $dh['TenNguoiNhan'] ?></strong></p>
                        <p>Email: <?= $dh['EmailNguoiNhan'] ?></p>
                        <p>Địa chỉ: <?= $dh['DiaChiNguoiNhan'] ?></p>
                        <p>Thời điểm giao hàng: <em><?= ($dh['ThoiDiemGiaoHang'] != null) ? $dh['ThoiDiemGiaoHang'] : "Đang cập nhật" ?></em></p>
                        <p>Thời điểm đặt hàng: <em><?= $dh['ThoiDiemDatHang'] ?></em></p>
                    </td>
                    <td>
                        <?php
                        if ($dh['AnHien'] == 1) {
                            if ($dh['TrangThai'] == 1) {
                                echo "<p>Đang giao</p>";
                            } elseif ($dh['TrangThai'] == 2) {
                                echo "<p>Đã Giao</p>";
                            } else {
                                echo "<p>Chờ duyệt</p>";
                            }
                        } else {
                            echo "<p>Đơn hàng đã bị hủy</p>";
                        }
                        ?>

                    </td>
                    <td><?= $dh['GhiChuCuaKhachHang'] ?></td>
                    <td><?= $dh['GhiChuCuaAdmin'] ?></td>
                    <td>
                        <form action="?ctrl=donhang&act=ngaygiao" method="post">
                            <input type="datetime-local" name="ng" id="" class="form-control mb-2">
                            <input type="hidden" name="idDH" value="<?= $dh['idDH'] ?>">
                            <input type="submit" class="btn btn-primary w-100 " value="Xác nhận" <?= ($dh['AnHien'] == 0 || $dh['TrangThai'] == 2) ? "disabled" : "" ?>>
                        </form>
                    </td>
                    <!-- <td><a href="<?= ADMIN_URL ?>/?ctrl=donhang&act=update&idxn=<?= $dh['idDH'] ?>">Xác nhận</a></td> -->
                    <td><a href="<?= ADMIN_URL ?>/?ctrl=donhang&act=delete&id=<?= $dh['idDH'] ?>" class="deleteNSX">Xóa</a></td>
                </tr>
                <script>
                    $(document).ready(function() {
                        $('.deleteNSX').click(function(e) {
                            a = $(this).attr('href');
                            e.preventDefault();
                            swal({
                                    title: "Bạn có chắc chắn ?",
                                    text: "Một khi đã xóa bạn sẽ không thể khôi phục lại !",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonClass: "btn-danger",
                                    confirmButtonText: "Có, tôi chắc chắn!",
                                    cancelButtonText: "Tôi không muốn xóa!",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = a;
                                });
                        });
                    });
                </script>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php if (isset($_SESSION['mess']) == true) { ?>
    <script>
        swal("<?= $_SESSION['mess'] ?>", "", "success");
    </script>
<?php unset($_SESSION['mess']);
} ?>