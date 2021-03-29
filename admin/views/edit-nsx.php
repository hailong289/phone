<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
<form class="col-5 mx-auto" action="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=update" method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">Tên nhà sản xuất</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tên nhà sản xuất" name="ten_nsx" value="<?=$nd['TenNSX']?>">
        <input type="hidden" name="ma_nsx" value="<?=$nd['idNSX']?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Thứ tự</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Thứ tự" name="thutu" value="<?=$nd['ThuTu']?>">
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="an_hien" value="0" class="custom-control-input" <?php if($nd['AnHien']==0) echo "checked"?>>
                <label class="custom-control-label" for="customRadioInline1">Ẩn</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="an_hien" value="1" class="custom-control-input" <?php if($nd['AnHien']==1) echo "checked"?>>
                <label class="custom-control-label" for="customRadioInline2">Hiện</label>
            </div>
        </div>
        <div class="col-10 mb-3 mx-auto">
            <button type="submit" class="btn btn-sprimary  w-100">Cập nhật</button>
        </div>
    </div>
</form>
</div>