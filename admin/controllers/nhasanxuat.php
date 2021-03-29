<?php
require_once "models/models-nhasanxuat.php"; //nạp model để có các hàm tương tác db
class nhasanxuat
{
  function __construct()
  {
    $this->model = new model_nhasanxuat();
    $act = "index"; //chức năng mặc định
    if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
    switch ($act) {
      case "index":
        $this->index();
        break;
      case "addnew":
        $this->addnew();
        break;
      case "store":
        $this->store();
        break;
      case "edit":
        $this->edit();
        break;
      case "update":
        $this->update();
        break;
      case "delete":
        $this->delete();
        break;
      case 'kiemloi':
        $this->error();
        break;
    }
    //$this->$act;
  }
  function index()
  {
    /*  Chức năng hiện danh sách record trong table
           1. Gọi hàm trong model lấy tất các các record từ db
           2. Nạp view hiện danh sách các record vừa lấy*/
    $pathTilte = "Danh sách nhà sản xuất";
    $Ds_nsx = $this->model->Ds_nsx();
    // print_r($Ds_nsx);
    $view = 'views/index-nsx.php';
    require_once 'views/layout.php';
    // echo __METHOD__;
  }
  function addnew()
  {
    $pathTilte = "Thêm nhà sản xuất";
    /*  Chức năng nạp view thêm record,
           1.Nạp form,form này phải có method="post",action của form => store */
    $view = 'views/addnew-nsx.php';
    require_once "views/layout.php";
    // echo __METHOD__;
  }
  function store()
  {
    $pathTilte = "Thêm nhà sản xuất";
    /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
         1. Tiếp nhận các giá trị từ form addnew
         2. Kiểm tra hợp lệ các giá trị nhận được
         3. Gọi hàm chèn vào db
         4. Tạo thông báo     
         5. Chuyển hướng đến trang cần thiết*/
    $ten_nsx = $_POST['ten_nsx'];
    $thutu = $_POST['thutu'];
    $anhien = $_POST['an_hien'];
    if($ten_nsx == null){
       $error = '<p class="text-danger mt-2 mb-2">Không để trống</p>';
    }elseif($this->model->CountNSX($ten_nsx)){
       $error = '<p class="text-danger mt-2 mb-2">Tên nhà sản xuất đã tồn tại</p>';
    }else{
      $error = null;
    }
    if($error == null){
      $this->model->Addnew_NSX($ten_nsx, $thutu, $anhien);
      $Ds_nsx = $this->model->Ds_nsx();
      $_SESSION['mess'] = "Đã thêm thành công !";
      header("location: ?ctrl=nhasanxuat&act=index");
    }else{
      $view = 'views/addnew-nsx.php';
      require_once "views/layout.php";
    }
    // echo __METHOD__;
  }
  function edit()
  {
    /* Chức năng hiện form edit 1 record
         1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
         2. Kiểm tra hợp lệ giá trị id
         3. Gọi hàm lấy record cần chỉnh (1 record)
         4. Nạp form chỉnh, trong form hiện thông tin của record,
         5. Form này cũng phải có method là Post, action trỏ lên act update*/
         $id = $_GET['id'];
         settype($id,"int");
         $nd = $this->model->getNsxByID($id);
         $view = 'views/edit-nsx.php';
         require_once 'views/layout.php';
    // echo $id;
  }
  function update()
  {
    /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit
        2. Kiểm tra hợp lệ các giá trị nhận được
        3. Gọi hàm cập nhật vào db
        4. Tạo thông báo     
        5. Chuyển hướng đến trang cần thiết */
        $ten_nsx = $_POST['ten_nsx'];
        $thutu = $_POST['thutu'];
        $anhien = $_POST['an_hien'];
        $ma_nsx = $_POST['ma_nsx'];
        $this->model->update($ten_nsx, $thutu, $anhien, $ma_nsx);
        $Ds_nsx = $this->model->Ds_nsx();
        // print_r($Ds_nsx);
        $_SESSION['mess'] = "Cập nhật thành công";
        // header("location: ?ctrl=nhasanxuat&act=index");
        header("location: ?ctrl=nhasanxuat&act=index");
        
  }
  function delete()
  {
    /* Chức năng xóa record
        1. Tiếp nhận biến id của record cần xóa
        2. Gọi hàm xóa
        3. Tạo thông báo
        4. Chuyển đến trang cần thiết*/
        $id = $_GET['id'];
        $this->model->DeleteNSX($id);
        $_SESSION['mess'] = "Đã xóa thành công";
        header("location: ?ctrl=nhasanxuat&act=index");
    // echo __METHOD__;
  }
  function error(){
    if(isset($_GET['NSX'])){
      if($_GET['NSX'] == null){
         echo '<p class="text-danger mt-2 mb-2">Không để trống</p>';
      }elseif($this->model->CountNSX($_GET['NSX'])){
        echo '<p class="text-danger mt-2 mb-2">Tên nhà sản xuất đã tồn tại</p>';
      }else{
        echo '';
      }
    }
  }
} //class nhasanxuat 
