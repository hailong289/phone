<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
    <form class="col-sm-8 mx-auto" action="<?= ADMIN_URL ?>/?ctrl=binhluan&act=update" method="post">
     <input type="hidden" name="ma_bl" value="<?=$bl['idBL']?>">
        <div class="form-group">
            <label for="formGroupExampleInput">Tên người dùng</label>
            <select name="ma_nd" id="nsx" class="form-control">
            <option value="">Chọn</option>
                <?php foreach ($nd as $nd) { 
                    if($nd['idUser'] == $bl['idUser']){
                    ?>
                    <option value="<?= $nd['idUser'] ?>" selected><?= $nd['Username'] ?></option>
                <?php }else{ ?>
                    <option value="<?= $nd['idUser'] ?>"><?= $nd['Username'] ?></option>
                <?php }} ?>
            </select>
            <div><?=(isset( $_SESSION['error']))?  $_SESSION['error'][0]:""?></div>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Sản phẩm</label>
            <select name="ma_dt" id="dt" class="form-control">
            <option value="">Chọn</option>
                <?php foreach ($dt as $dt) { 
                    if($dt['idDT'] == $bl['idDT']){
                    ?>
                    <option value="<?= $dt['idDT'] ?>" selected><?= $dt['TenDT'] ?></option>
                <?php  }else{ ?>
                    <option value="<?= $dt['idDT'] ?>"><?= $dt['TenDT'] ?></option>
                <?php }} ?>
            </select>
            <div><?=(isset( $_SESSION['error']))?  $_SESSION['error'][1]:""?></div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nội dung bình luận</label>
            <textarea class="mytextarea" name="noidung" id="mota"><?=$bl['NoiDungBL']?></textarea>
            <div id="error_mota"></div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="an_hien" value="0" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Ẩn</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="an_hien" value="1" class="custom-control-input" checked>
                    <label class="custom-control-label" for="customRadioInline2">Hiện</label>
                </div>
            </div>
            <div class="col-10 mb-3 mx-auto">
                <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
            </div>
        </div>
    </form>
</div>