<div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Đăng nhập</h5>
                        <form class="form-signin" action="check-dn" method="post">

                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="tendn" class="form-control" placeholder="Tên tài khoản" value="<?= (isset($tk)) ? $tk['Username'] : '' ?>">
                                <label for="inputEmail">Tên tài khoản</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="mk" class="form-control" placeholder="Password">
                                <label for="inputPassword">Mật khẩu</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <div class="w-100 d-flex flex-row">
                                    <label class="custom-control-label w-50" for="customCheck1">Ghi nhớ mật khẩu</label>
                                    <label class="w-50 text-right"><a href="quen-pass">Quên mật khẩu ?</a></label>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>
                            <p class="text-center mt-3 mb-3"> Chưa có tài khoản nhấp <a href="dang-ky">vào đây</a> để đăng ký</p>

                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Đăng nhập với google</button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Đăng nhập với Facebook</button>
                        </form>
                    </div>
                </div>
            </div>
</div>