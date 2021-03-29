<div class="w-100 shadow-lg p-3 mb-5 bg-white rounded">
<table class="table table-bordered ">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã nhà sản xuất</th>
            <th scope="col">Tên nhà sản xuất</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thứ tự</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Ds_nsx as $nd) { ?>
            <tr>
                <th scope="row"><?= $nd['idNSX'] ?></th>
                <td><?= $nd['TenNSX'] ?></td>
                <td><?= ($nd['AnHien'] == 1) ? "Hiện" : "Ẩn" ?></td>
                <td><?= $nd['ThuTu'] ?></td>
                <td><a href="<?= ADMIN_URL ?>/?ctrl=nhasanxuat&act=edit&id=<?= $nd['idNSX'] ?>">Sửa</a></td>
                <td><a href="<?= ADMIN_URL ?>/?ctrl=nhasanxuat&act=delete&id=<?= $nd['idNSX'] ?>" class="deleteNSX">Xóa</a></td>
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