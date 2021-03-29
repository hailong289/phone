<div class="row">
     <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
         <div class="card card-signin my-5" style="margin-top: 140px!important;">
             <div class="card-body">
                 <h5 class="card-title text-center">Nhập mật khẩu mới</h5>
                 <form class="form-signin" action="pass-moi" method="post">
                     <div class="form-group">
                         <input type="password" name="mk" id="" class="form-control" placeholder="Nhập mật khẩu mới" style="border-radius: 20px;height: 45px;" value="<?=(isset($mk))? $mk:""?>">
                         <input type="hidden" name="ma_tk" value="<?=$id?>">
                         <p class="text-danger pl-3  mb-3"><?=(isset($error))? $error:""?></p>
                         <input type="password" name="repass" id="" class="form-control" placeholder="Nhập mật khẩu lại mới" style="border-radius: 20px;height: 45px;">
                         <p class="text-danger pl-3"><?=(isset($_error_re))? $_error_re:""?></p>
                         <div class="w-50 mx-auto">
                             <button class="btn btn-primary w-100" type="submit">Đổi mật khẩu</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>