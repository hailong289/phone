<div class="w-100 shadow-lg p-3 mb-5 bg-white rounded">
<table class="table table-bordered ">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã bình luận</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Người bình luận</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Ngày đăng</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dsbl as $bl) { ?>
            <tr>
                <th scope="row"><?= $bl['idBL'] ?></th>
                <td><?= $bl['TenDT'] ?></td>
                <td><?= $bl['Username'] ?></td>
                <td><?= $bl['NoiDungBL'] ?></td>
                <td> <?=$bl['ThoiDiemBL']?></td>
                <td><?= ($bl['AnHien'] == 1) ? "Hiện" : "Ẩn" ?></td>
                <td><a href="<?= ADMIN_URL ?>/?ctrl=binhluan&act=edit&id=<?= $bl['idBL'] ?>">Sửa</a></td>
                <td><a href="<?= ADMIN_URL ?>/?ctrl=binhluan&act=delete&id=<?= $bl['idBL'] ?>" class="deleteNSX">Xóa</a></td>
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
</div>