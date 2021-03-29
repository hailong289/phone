<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
<form class="col-8 mx-auto p-2" action="<?=ADMIN_URL?>/?ctrl=dienthoai&act=update" method="post" enctype="multipart/form-data">
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Tên điện thoại</label>
        <input type="hidden" name="ma_dt" value="<?=$dt['idDT']?>">
        <input type="text" name="dt" value="<?=$dt['TenDT']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên điện thoại">
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="">Giá</label>
            <input type="number" name="gia" value="<?=$dt['Gia']?>" class="form-control" placeholder="Giá">
        </div>
        <div class="col">
        <label for="">Giá khuyến mãi</label>
            <input type="number" name="giaKM" value="<?=$dt['GiaKM']?>" class="form-control" placeholder="Giá khuyến mãi">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="">Hình</label>
            <input type="file" name="hinh" class="form-control" placeholder="First name">
            <input type="hidden" name="img" value="<?=$dt['urlHinh']?>">
            <img src="../uploaded/<?=$dt['urlHinh']?>" alt="Hình lỗi" width="100px" class="mt-2">
        </div>
        <div class="col">
        <label for="">Nhà sản xuất</label>
          <select name="ma_nsx" id="" class="form-control">
          <option value="">Chọn</option>
          <?php foreach($nsx as $nsx){
              if($nsx['idNSX']==$dt['idNSX']){
         ?>
          <option value="<?=$nsx['idNSX']?>" selected><?=$nsx['TenNSX']?></option>
          <?php }else{ ?>
            <option value="<?=$nsx['idNSX']?>"><?=$nsx['TenNSX']?></option>
            <?php } } ?>
          </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="">Số lượt xem</label>
            <input type="number" value="<?=$dt['SoLanXem']?>" name="slx" class="form-control" placeholder="Số lượt xem">
        </div>
        <div class="col">
        <label for="">Số lần mua</label>
            <input type="number" name="slm" value="<?=$dt['SoLanMua']?>" class="form-control" placeholder="Số lượng mua">
        </div>
        <div class="col">
        <label for="">Số lượng tồn kho</label>
            <input type="number" name="sltk" value="<?=$dt['SoLuongTonKho']?>" class="form-control" placeholder="Số lượng tồn kho">
        </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Mô tả</label>
    <textarea class="mytextarea" name="mytextarea"><?=$dt['MoTa']?></textarea>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="an_hien" value="0" class="custom-control-input" <?=($dt['AnHien']==0)? "checked":""?>>
                <label class="custom-control-label" for="customRadioInline1">Ẩn</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="an_hien" value="1" class="custom-control-input" <?=($dt['AnHien']==1)? "checked":""?>>
                <label class="custom-control-label" for="customRadioInline2">Hiện</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="customRadioInline3" value="1" name="hot" class="custom-control-input" <?=($dt['Hot']==1)? "checked":""?>>
                <label class="custom-control-label" for="customRadioInline3">Hot</label>
            </div>
        </div>
        <div class="col-10 mb-3 mx-auto">
            <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
        </div>
    </div>
</form>
</div>