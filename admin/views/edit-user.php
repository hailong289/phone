<div class="row shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 100px;">
    <form class="col-5 mx-auto" action="<?= ADMIN_URL ?>/?ctrl=users&act=update" method="post" enctype="multipart/form-data">
        <div class="form-group mb-2">
            <label for="formGroupExampleInput">Tên đăng nhập</label>
            <input type="text" class="form-control" value="<?=$nd['Username']?>" id="formGroupExampleInput" placeholder="Tên đăng nhập" name="ten_dn">
            <input type="hidden" name="ma_nd" value="<?=$nd['idUser']?>">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Họ và tên</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="<?=$nd['HoTen']?>" placeholder="Nhập họ và tên" name="hoten">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Mật khẩu</label>
            <input type="password" class="form-control" id="formGroupExampleInput2" value="<?=$nd['matkhau']?>" placeholder="Mật khẩu" name="mk">
        </div>
        <div class="form-group mb-2">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="<?=$nd['Email']?>" placeholder="email" name="email">
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
            <?php if($nd['urlHinh']==null){ ?>
             <img src="../uploaded/anhloi.png" name="img" alt="" srcset="" id="files" width="100px">
             <?php }else{ ?>
                <img src="../uploaded/<?=$nd['urlHinh']?>" name="img" alt="" srcset="" id="files" width="100px">
             <?php } ?>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="an_hien" value="0" class="custom-control-input" <?=($nd['AnHien']==0)? "checked":""?>>
                    <label class="custom-control-label" for="customRadioInline1">Ẩn</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="an_hien" value="1" class="custom-control-input" <?=($nd['AnHien']==1)? "checked":""?>>
                    <label class="custom-control-label" for="customRadioInline2">Hiện</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="vai_tro" value="0" class="custom-control-input" <?=($nd['VaiTro']==0)? "checked":""?>>
                    <label class="custom-control-label" for="customRadioInline3">Người dùng</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline4" name="vai_tro" value="1" class="custom-control-input" <?=($nd['VaiTro']==1)? "checked":""?>>
                    <label class="custom-control-label" for="customRadioInline4">Quản trị</label>
                </div>
            </div>
            <div class="col-10 mb-3 mx-auto">
                <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
            </div>
        </div>
    </form>
</div>