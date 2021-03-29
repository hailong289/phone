<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
<form class="col-8 mx-auto p-2" action="<?=ADMIN_URL?>/?ctrl=dienthoai&act=store" method="post" enctype="multipart/form-data">
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Tên điện thoại</label>
        <input type="text" name="dt" class="form-control" id="tendt" aria-describedby="emailHelp" placeholder="Tên điện thoại">
        <div id="error_name"><?=(isset($er_tdt))? $er_tdt:""?></div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="">Giá</label>
            <input type="number" name="gia" min="0" id="gia" class="form-control" placeholder="Giá">
            <div id="error_gia"><?=(isset($er_gia))? $er_gia:""?></div>
        </div>
        <div class="col">
        <label for="">Giá khuyến mãi</label>
            <input type="number" name="giaKM" min="0" id="giakm" class="form-control" placeholder="Giá khuyến mãi">
            <div id="error_giakm"><?=(isset($er_giaKM))? $er_giaKM:""?></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="">Hình</label>
            <input type="file" name="hinh" class="form-control" placeholder="First name">
            <div><?=(isset($er_img))? $er_img:""?></div>
        </div>
        <div class="col">
        <label for="">Nhà sản xuất</label>
          <select name="ma_nsx" id="nsx" class="form-control">
          <option value="">Chọn</option>
          <?php foreach($nsx as $nsx){ ?>
          <option value="<?=$nsx['idNSX']?>"><?=$nsx['TenNSX']?></option>
          <?php } ?>
          </select>
          <div id="error_nsx"><?=(isset($er_nsx))? $er_nsx:""?></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="">Số lượt xem</label>
            <input type="number" name="slx" class="form-control" placeholder="Số lượt xem">
        </div>
        <div class="col">
        <label for="">Số lần mua</label>
            <input type="number" name="slm" class="form-control" placeholder="Số lượng mua">
        </div>
        <div class="col">
        <label for="">Số lượng tồn kho</label>
            <input type="number" name="sltk" class="form-control" placeholder="Số lượng tồn kho">
        </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Mô tả</label>
    <textarea class="mytextarea" name="mytextarea" id="mota"></textarea>
    <div id="error_mota"></div>
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
            <div class="custom-control custom-radio custom-control-inline">
                <input type="checkbox" id="customRadioInline3" value="1" name="hot" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline3">Hot</label>
            </div>
        </div>
        <div class="col-10 mb-3 mx-auto">
            <button type="submit" class="btn btn-primary w-100">Thêm mới</button>
        </div>
    </div>
</form>