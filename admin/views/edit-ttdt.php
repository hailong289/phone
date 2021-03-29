<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
    <form class="col-8 mx-auto p-2" action="<?= ADMIN_URL ?>/?ctrl=dienthoai&act=update_tt" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="">Điện thoại</label>
            <select name="ma_dt" id="" class="form-control">
                <option value="<?=$dt['idDT']?>" selected><?=$dt['TenDT']?></option>
            </select>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Màn hình</label>
                <input type="hidden" name="ma_tt" value="<?=$tt['idTT']?>">
                <input type="text" name="mh" class="form-control" value="<?=$tt['ManHinh']?>">
            </div>
            <div class="col">
                <label for="">Hệ điều hành</label>
                <input type="text" name="hdh" class="form-control" value="<?=$tt['HeDieuHanh']?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Camera trước</label>
                <input type="text" name="cmrt" class="form-control" value="<?=$tt['CameraTruoc']?>">
            </div>
            <div class="col">
                <label for="">Camera sau</label>
                <input type="text" name="cmrs" class="form-control" value="<?=$tt['CameraSau']?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">CPU</label>
                <input type="text" name="cpu" class="form-control" value="<?=$tt['CPU']?>">
            </div>
            <div class="col">
                <label for="">Ram</label>
                <input type="text" name="ram" class="form-control" value="<?=$tt['Ram']?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Bộ nhớ trong</label>
                <input type="text" name="bont" class="form-control" value="<?=$tt['BoNhoTrong']?>">
            </div>
            <div class="col">
                <label for="">Thẻ nhớ</label>
                <input type="text" name="then" class="form-control" value="<?=$tt['TheNho']?>">
            </div>
           
        </div>
        <div class="row mb-4">
        <div class="col">
                <label for="">Thẻ sim</label>
                <input type="text" name="thes" class="form-control" value="<?=$tt['TheSim']?>">
            </div>
            <div class="col">
                <label for="">Dung lượng pin</label>
                <input type="text" name="dlp" class="form-control" value="<?=$tt['DungLuongPin']?>">
            </div>
        </div>
        <div class="row">
            <div class="col-10 mb-3 mx-auto">
                <button type="submit" class="btn btn-primary w-100">Sửa</button>
            </div>
        </div>
    </form>
</div>