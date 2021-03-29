<div class="w-100 shadow-lg p-3 mb-5 bg-white rounded">
<table class="table table-bordered ">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã người dùng</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Hình</th>
            <th scope="col">Email</th>
            <th scope="col">Vai trò</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Ds_nd as $nd) { ?>
            <tr>
                <th scope="row"><?= $nd['idUser'] ?></th>
                <td><?= $nd['Username'] ?></td>
                <td>
                 <?php if($nd['urlHinh']==null){ ?>
                 <img src="../uploaded/anhloi.png" alt="" width="100px">
                 <?php }else{ ?>
                 <img src="../uploaded/<?=$nd['urlHinh']?>" alt="" srcset="" width="100px">
                 <?php } ?>
                </td>
                <td><?=$nd['Email']?></td>
                <td><?= ($nd['VaiTro'] == 1) ? "Quản trị" : "Người dùng" ?></td>
                <td><?=($nd['AnHien']==1)? "Đang hoạt động":"Đang ẩn"?></td>
                <td><a href="<?= ADMIN_URL ?>/?ctrl=users&act=edit&id=<?= $nd['idUser'] ?>">Sửa</a></td>
                <td>
                <?php if($nd['VaiTro']==0){ ?>
                <a href="<?= ADMIN_URL ?>/?ctrl=users&act=delete&id=<?= $nd['idUser'] ?>" class="deleteNSX">Xóa</a>
                <?php }else{ ?>
                    <a href="#" class="deletenone disabled">Xóa</a>
                <?php } ?>
                </td>
            </tr>
            <script>
            $(document).ready(function () {
                $('.deletenone').click(function (e) { 
                    e.preventDefault();
                    swal('Bạn không thể xóa quản trị','','warning');
                });
            });
            </script>
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
<?=$links?>
</div>
<?php if (isset($_SESSION['mess']) == true) { ?>
    <script>
        swal("<?= $_SESSION['mess'] ?>", "", "success");
    </script>
<?php unset($_SESSION['mess']);
} ?>