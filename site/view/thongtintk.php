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
        <form method="post" action="?act=savethongtin" enctype="multipart/form-data">
            <center>
                <?php if ($user['urlHinh'] == null) { ?>
                    <img src="./uploaded/user.jpeg" class="rounded-circle mx-auto d-block mb-2" alt="..." id="xtimg" style="width: 150px;">
                <?php } else { ?>
                    <img src="./uploaded/<?= $user['urlHinh'] ?>" class="rounded-circle mx-auto d-block mb-2" alt="..." id="xtimg" style="width: 150px;">
                <?php } ?>
                <input type="file" name="img" id="fileUploaded" style="width: 150px;" />
                <!-- <label for="fileUploaded" class="pl-3 pr-3"><i class="fad fa-upload"></i>Tải ảnh lên</label> -->
                <!-- <script>
                $(document).ready(function() {
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                $('#xtimg').attr('src',e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#fileUploaded").change(function() {
                        readURL(this);
                    });
                });
            </script> -->
            </center>
            <div class="form-group">
                <label for="exampleInputEmail1">Họ và tên</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="hoten" aria-describedby="emailHelp" value="<?= $user['HoTen'] ?>">
                <input type="hidden" name="idUser" value="<?= $user['idUser'] ?>">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên tài khoản</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="tentk" aria-describedby="emailHelp" value="<?= $user['Username'] ?>">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword1" disabled value="<?= $user['matkhau'] ?>">
            </div> -->
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?= $user['Email'] ?>">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                    <div class="w-100">
                        <p class="text-dark">Trạng thái: <?=(isset($user['KichHoat'])==1)? "Đã kích hoạt":""?></p>
                        <?php if ($user['AnHien'] == 1) { ?>
                            <div class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <label for="" class="ml-3">Đang hoạt động</label>
                        <?php } else { ?>
                            <p>Tạm khóa</p>
                        <?php } ?>
                    </div>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
<?php if(isset($_SESSION['tttk'])){ ?>
<script>
   swal("<?= $_SESSION['tttk'] ?>", "", "success")
</script>
<?php unset($_SESSION['tttk']); } ?>