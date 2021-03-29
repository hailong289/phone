 <div class=" row shadow-lg p-3 mb-5 bg-white rounded">
<table class="table table-bordered">
    <thead class="thead-dark font-weight-bold text-center">
        <tr>
            <th scope="col">Mã điện thoại</th>
            <th scope="col">Chi tiết</th>
            <th scope="col">Hình</th>
            <th scope="col" style="width: 20%;">Mô tả</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thuộc tính điện thoại</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Ds_DT as $dt) { ?>
            <tr>
                <th scope="row"><?= $dt['idDT'] ?></th>
                <td>
                    <?php $nsx = $this->model->DSnsx_DT($dt['idNSX']); ?>
                        <div class="w-100 bg-transparent">
                            <div class="card-body pl-2">
                                <h1 class="card-title"><?= $dt['TenDT'] ?></h1>
                                <div class="row">
                                    <div class="col">
                                        <p class="d-block mb-1 text-dark"><strong>Giá:</strong> <?= number_format($dt['Gia']) . " " . " VNĐ" ?></p>
                                        <p class="d-block mb-1 text-dark"><strong>Giá khuyến mãi:</strong> <em class="text-danger"><?= number_format($dt['GiaKM']) . " " . " VNĐ" ?></em></p>


                                        <p class="d-block mb-1 text-dark">Nhà sản xuất: <?= $nsx['TenNSX'] ?></p>

                                        <p class="d-block mb-1 text-dark"><em>Thời điểm nhập: <?=$dt['ThoiDiemNhap']?></em></p>
                                        <p class="d-block mb-1 text-dark">Số lượng tồn kho: <?=$dt['SoLuongTonKho']?></p>
                                    </div>
                                    <?php if($dt['Hot']==1){ ?>
                                    <div class="col">
                                        <h1 class="badge badge-danger float-right mt-5" style="font-size: 15pt;">HOT</h1>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                 
                </td>
                <td>
                <?php if($dt['urlHinh']==NULL){ ?>
                    <img src="../uploaded/anhloi.png" alt="..." width="100px" height="100px" style="object-fit: contain;">
                    <?php }else{ ?>
                        <img src="../uploaded/<?=$dt['urlHinh']?>" alt="..." width="100px" height="100px" style="object-fit: contain;">
                    <?php } ?>
                </td>
                <td>
                <div class="w-100 d-block">
                <?=$dt['MoTa']?>
                </div>
                </td>
                <td><?=($dt['AnHien']==1)? "Hiện":"Ẩn"?></td>
                <td>
                <?php if($this->model->DemSL_ttdt($dt['idDT'])){ ?>
                 <a href="?ctrl=dienthoai&act=dstt&id=<?=$dt['idDT']?>">Xem</a>
                 <?php }else{ ?>
                    <a href="?ctrl=dienthoai&act=addnew_ttdt&id=<?=$dt['idDT']?>">Thêm</a>
                 <?php } ?>
                </td>
                <td><a href="<?=ADMIN_URL?>/?ctrl=dienthoai&act=edit&id=<?=$dt['idDT']?>">Sửa</a></td>
                <td><a href="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=delete&id=<?=$dt['idDT']?>" class="deleteDT">Xóa</a></td>  
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
        <?php } ?>
        
    </tbody>
</table>
</div>
<?=$links?>
<?php if (isset($_SESSION['mess']) == true) { ?>
    <script>
        swal("<?= $_SESSION['mess'] ?>", "", "success");
    </script>
<?php unset($_SESSION['mess']);
} ?>