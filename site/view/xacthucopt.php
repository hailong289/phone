<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
        <div class="card card-signin my-5" style="margin-top: 140px!important;">
            <div class="card-body">
                <h5 class="card-title text-center">Nhập mã xác thực</h5>
                <form class="form-signin" action="xac-thuc" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="text" name="xacthuc" id="" class="form-control" placeholder="Nhập mã otp" style="border-radius: 20px;height: 45px;">
                        <p class="text-danger ml-2"><?= (isset($_error)) ? $_error : "" ?></p>
                        <div class="w-50 mx-auto">
                            <button class="btn btn-primary w-100" type="submit">Gửi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>