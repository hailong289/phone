<div class="row">
    <div class="b1">
        <img src="../uploaded/banner1.gif" alt="" width="100%" style="height: 200px;">
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
        <form method="post" action="?act=guimail">
            <div class="form-group">
                <label for="exampleInputPassword1">Hãy nhập email của bạn</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                <p class="text-danger"><?=(isset($_error))?  $_error:""?></p>
                <input type="hidden" class="form-control" id="exampleInputPassword1" name="id" value="<?=$_SESSION['id']?>">
                <button type="submit" class="btn btn-warning w-100 mt-2 text-white">Gửi</button>
            </div>
        </form>
    </div>
</div>