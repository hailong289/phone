<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
    <form class="col-5 mx-auto" action="<?= ADMIN_URL ?>/?ctrl=users&act=store" method="post" enctype="multipart/form-data">
        <div class="form-group mb-2">
            <label for="formGroupExampleInput">Tên đăng nhập</label>
            <input type="text" class="form-control" id="ten_user" placeholder="Tên đăng nhập" name="ten_dn" >
            <div id="error_user"><?=(isset($error_tdn))? $error_tdn:""?></div>
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Họ và tên</label>
            <input type="text" class="form-control" id="hoten" placeholder="Nhập họ và tên" name="hoten">
            <div id="error_hoten"><?=(isset($error_ht))? $error_ht:""?></div>
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Mật khẩu</label>
            <input type="password" class="form-control" id="mk" placeholder="Mật khẩu" name="mk">
            <div id="error_mk"><?=(isset($error_mk))? $error_mk:""?></div>
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="email" placeholder="email" name="email">
            <div id="error_email"><?=(isset($error_email))? $error_email:""?></div>
        </div>
        <div class="form-group mb-3">
            <label for="my-input">Hình</label>
            <input class="form-control" class="mb-2" type="file" id="imgInp" name="hinh">
            <script>
                $(document).ready(function() {
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                $('#files').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#imgInp").change(function() {
                        readURL(this);
                    });
                });
            </script>
             <img src="#" alt="" srcset="" id="files" width="100px">
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="an_hien" value="0" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Ẩn</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="an_hien" value="1" class="custom-control-input" checked>
                    <label class="custom-control-label" for="customRadioInline2">Hiện</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="vai_tro" value="0" class="custom-control-input" checked>
                    <label class="custom-control-label" for="customRadioInline3">Người dùng</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline4" name="vai_tro" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline4">Quản trị</label>
                </div>
            </div>
            <div class="col-10 mb-3 mx-auto">
                <button type="submit" class="btn btn-primary w-100">Thêm mới</button>
            </div>
        </div>
    </form>
</div>