 <div class="row">
     <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
         <div class="card card-signin my-5" style="margin-top: 140px!important;">
             <div class="card-body">
                 <h5 class="card-title text-center">Nhập email của bạn để lấy mật khẩu</h5>
                 <form class="form-signin" action="quen-pass" method="post">
                     <div class="form-group">
                         <input type="text" name="email" id="" class="form-control" placeholder="Nhập email" style="border-radius: 20px;height: 45px;">
                         <p class="text-danger pl-3"><?=(isset($error))? $error:""?></p>
                         <div class="w-50 mx-auto">
                             <button class="btn btn-primary w-100" type="submit">Gửi</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>