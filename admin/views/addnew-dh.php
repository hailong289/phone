<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
    <form class="col-8 mx-auto p-2" action="<?= ADMIN_URL ?>/?ctrl=donhang&act=store" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="">Người dùng</label>
            <select name="ng" id="nd" class="form-control">
                <option value="">Chọn</option>
                <?php foreach ($dn as $nd) { ?>
                    <option value="<?= $nd['idUser'] ?>"><?= $nd['Username'] ?></option>
                <?php } ?>
            </select>
            <div id="error_nd"><?=(isset($error_tennd))? $error_tennd:""?></div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Tên người nhận</label>
                <input type="text" name="tennn" id="ndh" class="form-control">
                <div id="error_ndh"><?=(isset($error_nn))? $error_nn:""?></div>
            </div>
            <div class="col">
                <label for="">Email</label>
                <input type="text" id="emaildh" name="email" class="form-control">
                <div id="error_emaildh"><?=(isset($error_email))? $error_email:""?></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Địa chỉ</label>
                <input type="text" name="diachi" class="form-control" id="address">
                <div id="error_address"><?=(isset($error_diachi))? $error_diachi:""?></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Trạng thái</label>
               <select name="trangthai" id="" class="form-control">
                   <option value="">Trạng thái</option>
                   <option value="1">Đang giao</option>
                   <option value="2">Đã giao</option>
               </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Thời điểm đặt hàng</label>
                <input type="datetime-local" id="tddh" name="tddh" class="form-control">
                <div id="error_tddh"><?=(isset($error_dh))? $error_dh:""?></div>
            </div>
            <div class="col">
                <label for="">Thời điểm giao hàng</label>
                <input type="datetime-local" id="tdgh" name="tdgh" class="form-control">
                <div id="error_tdgh"><?=(isset($error_gh))? $error_gh:""?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ghi chú của khách hàng</label>
            <textarea class="mytextarea" name="gckh"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ghi chú của admin</label>
            <textarea class="mytextarea" name="gcadmin"></textarea>
        </div>
        <div class="row">
        <div class="col-12 mb-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="an_hien" value="0" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Ẩn</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="an_hien" value="1" class="custom-control-input" checked>
                <label class="custom-control-label" for="customRadioInline2">Hiện</label>
            </div>
            <!-- <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="customRadioInline3" value="1" name="hot" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline3">Trạng thái</label>
            </div> -->
        </div>
            <div class="col-10 mb-3 mx-auto">
                <button type="submit" class="btn btn-primary w-100">Thêm mới</button>
            </div>
        </div>
    </form>
</div>