<div class="row">
    <div class="b1">
        <img src="./uploaded/banner1.gif" alt="" width="100%" style="height: 200px;">
        <div class="b1-text">
            <h2>Mobile shop</h2>
            <div class="b1-text-c">
                <a href="index.php" class="text-white">Home /</a>
                <span class="text-white"><?= $title ?></span>
            </div>
        </div>
    </div>
</div>
<div class="row mb-5 mt-5">\
    <div class="col-sm-4 mx-auto">
        <form method="post" action="doi-pass">
            <div class="form-group">
                <label for="exampleInputPassword1">Mật khẩu cũ</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="mkcu" value="<?=(isset($_POST['mkcu']))? $_POST['mkcu']:""?>">
                <div><?=(isset($_error_new))?  $_error_new:""?></div>
                <div><?=(isset($_error_mkcu))?  $_error_mkcu:""?></div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu mới</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="passnew" aria-describedby="emailHelp">
                <div><?=(isset($_error_mknew))?  $_error_mknew:""?></div>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập lại mật khẩu mới</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="repassnew" aria-describedby="emailHelp">
                <div><?=(isset($_error_mk))?  $_error_mk:""?></div>
                <div><?=(isset($_error_mkrenew))?  $_error_mkrenew:""?></div>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="w-75 mx-auto">
                <input type="submit" class="btn btn-primary w-100" name="doimatkhau" value="Đổi mật khẩu">
            </div>
        </form>
    </div>
</div>