<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Đăng ký</h5>
                <form class="form-signin" action="save-tk" method="post">
                    <div class="form-label-group">
                        <input type="text" id="inputhoten" name="hoten" class="form-control" placeholder="Email address" value="<?= (isset($hoten)) ? $hoten : "" ?>">
                        <label for="inputhoten">Họ và tên</label>
                        <div id="error_user" class="ml-2"><?= (isset($error_ht)) ? $error_ht : "" ?></div>
                        <script>
                         $('input[name=hoten]').blur(function(e) {
                             a =  $(this).val();
                             $('#error_user').load("site/index.php?act=kiemloi&hoten=" + a);
                         });
                        </script>
                    </div>

                    <div class="form-label-group">
                        <input type="text" id="inputtentk" name="tendn" class="form-control" placeholder="Email address" value="<?= (isset($tendn)) ? $tendn : "" ?>">
                        <label for="inputtentk">Tên tài khoản</label>
                        <div id="error_tentk"><?= (isset($error_user)) ? $error_user : "" ?></div>
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Password" value="<?= (isset($email)) ? $email : "" ?>">
                        <label for="inputEmail">Email</label>
                        <div id="error_email"><?= (isset($error_email)) ? $error_email : "" ?></div>
                        <script>
                         $('input[name=email]').keyup(function(e) {
                             a =  $(this).val();
                             $('#error_email').load("site/index.php?act=kiemloi&email=" + a);
                         });
                        </script>
                    </div>
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="mk" class="form-control" placeholder="Password" value="<?= (isset($mk)) ? $mk : "" ?>">
                        <label for="inputPassword">Mật khẩu</label>
                        <div id="error_pass"><?= (isset($error_pass)) ? $error_pass : "" ?></div>
                        <script>
                         $('input[name=mk]').keyup(function(e) {
                             a =  $(this).val();
                             $('#error_pass').load("site/index.php?act=kiemloi&pass=" + a);
                         });
                        </script>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('input[name=tendn]').keyup(function(e) {
                                a = $(this).val();
                                dataString = 'tentk=' + a;
                                $.ajax({
                                    type: "GET",
                                    url: "site/index.php?act=kiemloi",
                                    data: dataString,
                                    //   dataType: "dataType",
                                    success: function(response) {
                                        $('#error_tentk').html(response);
                                    }
                                });

                            });
                        });
                    </script>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                    <!-- <p class="text-center mt-3 mb-3"> Chưa có tài khoản nhấp <a href="">vào đây</a> để đăng ký</p> -->
                    <!-- <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Đăng nhập với google</button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Đăng nhập với Facebook</button> -->
                </form>
            </div>
        </div>
    </div>
</div>