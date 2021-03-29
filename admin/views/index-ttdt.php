<div class=" row shadow-lg p-3 mb-5 bg-white rounded">
    <table class="table table-bordered">
        <thead class="thead-dark font-weight-bold text-center">
            <tr>
                <th scope="col">Mã thuộc tính</th>
                <th scope="col">Tên điện thoại</th>
                <th scope="col">Chi tiết</th>
                <!-- <th scope="col">Hình</th>
                <th scope="col" style="width: 20%;">Mô tả</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Số lượng tồn kho</th> -->
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
    <?php if(is_array($dsdt)){ ?>
                <tr>
                    <th scope="row"><?= $dt['idDT'] ?></th>
                    <?php 
                    ?>
                        <th scope="row">
                            <center>
                                <img src="../uploaded/<?= $dsdt['urlHinh'] ?>" alt="" class="mt-2 mb-3" width="150px">
                                <h3><?= $dsdt['TenDT'] ?></h3>
                            </center>

                        </th>
                    <td>
                        <p>Màn hình:<?= $dt['ManHinh'] ?></p>
                        <p>Hệ điều hành: <?= $dt['HeDieuHanh'] ?></p>
                        <p>Camera trước: <?= $dt['CameraTruoc'] ?></p>
                        <p>Camera sau: <?= $dt['CameraSau'] ?></p>
                        <p>CPU: <?= $dt['CPU'] ?></p>
                        <p>Ram: <?= $dt['Ram'] ?></p>
                        <p>Bộ nhớ trong: <?= $dt['BoNhoTrong'] ?></p>
                        <p>Thẻ nhớ: <?= $dt['TheNho'] ?></p>
                        <p>Thẻ sim: <?= $dt['TheSim'] ?></p>
                        <p>Dung lượng pin: <?= $dt['DungLuongPin'] ?></p>
                    </td>
                    <td><a href="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=edit-tt&id=<?= $dt['idDT'] ?>">Sửa</a></td>
                    <td><a href="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=delete-tt&id=<?= $dt['idTT'] ?>" class="deleteDT">Xóa</a></td>
                    <script>
                        $(document).ready(function() {
                            $('.deleteDT').click(function(e) {
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
                </tr>
          <?php }else{ ?>
            <a href="">Điện thoại chưa có thuộc tính</a>
          <?php } ?>
        </tbody>
    </table>
</div>
<?php if(empty($ds_tt)){
    echo 'Trong';
}else{
    echo 'khong rong';
} ?>
<?=$links?>
<?php if (isset($_SESSION['mess']) == true) { ?>
    <script>
        swal("<?= $_SESSION['mess'] ?>", "", "success");
    </script>
<?php unset($_SESSION['mess']);
} ?>