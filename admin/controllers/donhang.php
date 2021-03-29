<?php
require_once "models/models-donhang.php";
class donhang
{
   function __construct()
   {
      $this->model = new model_donhang();
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
         case 'ngaygiao':
            $this->ngaygiao();
            break;
         case 'kiemloi':
            $this->error();
            break;
      }
      //$this->$act;
   }
   function addnew()
   {
      $pathTilte = "Thêm đơn hàng";
      $dn = $this->model->getALLuser();
      $view = 'views/addnew-dh.php';
      require_once 'views/layout.php';
   }

   function index()
   {
      $pathTilte = "Danh sách đơn hàng";
      $Ds_dh = $this->model->showD_H();
      $view = 'views/index-dh.php';
      require_once 'views/layout.php';
   }
   function store()
   {
      $tennd = $_POST['ng'];
      $nguoinhan = $_POST['tennn'];
      $email = $_POST['email'];
      $diachi = $_POST['diachi'];
      $trangthai = $_POST['trangthai'];
      $thoidiemdh = $_POST['tddh'];
      $thoidiemgh = $_POST['tdgh'];
      $gckh = $_POST['gckh'];
      $gcadmin = $_POST['gcadmin'];
      $gcadmin = trim(strip_tags($gcadmin));
      $gckh = trim(strip_tags($gckh));
      $anhien = $_POST['an_hien'];
      // kiểm tra email
      $regex = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
      if ($tennd == null) {
         $error_tennd = "<p class='text-danger mb-1'>Không để trống</p>";
      } else {
         $error_tennd = null;
      }
      if ($nguoinhan == null) {
         $error_nn = "<p class='text-danger mb-1'>Không để trống</p>";
      } else {
         $error_nn = null;
      }
      if ($diachi == null) {
         $error_diachi = "<p class='text-danger mb-1'>Không để trống</p>";
      } else {
         $error_diachi = null;
      }
      if ($email == null) {
         $error_email = "<p class='text-danger mb-1'>Không để trống</p>";
      } elseif (preg_match($regex, $email) == false) {
         $error_email = "<p class='text-danger mb-1'>Email không hợp lệ</p>";
      } else {
         $error_email = null;
      }
      if ($thoidiemdh == null) {
         $error_dh = "<p class='text-danger mb-1'>Không để trống</p>";
      } else {
         $error_dh = null;
      }
      if ($thoidiemdh == null) {
         $error_gh = "<p class='text-danger mb-1'>Không để trống</p>";
      } else {
         $error_gh = null;
      }
      if ($error_tennd == null && $error_nn == null && $error_email == null && $error_gh == null && $error_dh && $error_diachi == null) {
         $_SESSION['mess'] = "Thêm đơn hàng thành công ";
         $this->model->addnewdh($tennd, $nguoinhan, $email, $diachi, $trangthai, $thoidiemdh, $thoidiemgh, $gckh, $gcadmin, $anhien);
         header('location: ?ctrl=donhang&act=index');
      } else {
         $pathTilte = "Thêm đơn hàng";
         $dn = $this->model->getALLuser();
         $view = 'views/addnew-dh.php';
         require_once 'views/layout.php';
      }
   }
   function edit()
   {
   }
   function update()
   {
      // if (isset($_GET['id']) == true) {
      //    $id = $_GET['id'];
      //    settype($id, "int");
      //    $trangthai = 1;
      //    date_default_timezone_set('Asia/Ho_Chi_Minh');
      //    $date = date('Y-m-d H:i:s');
      //    $this->model->update_trangthai($id, $trangthai, $date);
      //    $_SESSION['mess'] = "Cập nhật thành công";
      //    header("location: ?ctrl=donhang&act=index");
      // }
      if (isset($_GET['idxn']) == true) {
         $id = $_GET['idxn'];
         settype($id, "int");
         $trangthai = 2;
         date_default_timezone_set('Asia/Ho_Chi_Minh');
         $date = date('Y-m-d H:i:s');
         $this->model->update_trangthai($id, $trangthai, $date);
         $_SESSION['mess'] = "Cập nhật thành công";
         header("location: ?ctrl=donhang&act=index");
      }
   }
   function ngaygiao()
   {
      if ($_POST['ng'] != null) {
         $ngaygiao = $_POST['ng'];
      } else {
         $ngaygiao = " ";
      }
      $idDH = $_POST['idDH'];
      $trangthai = 1;
      // echo $idDH;
      $this->model->Addnew_TDGH($ngaygiao, $idDH);
      $this->model->update_trangthaiDG($idDH, $trangthai);
      header("location: ?ctrl=donhang&act=index");
   }
   function delete()
   {
      $id = $_GET['id'];
      settype($id, "int");
      $this->model->delete_DH($id);
      setcookie('idDH','',time()-(86400*30),"/");
      $_SESSION['mess'] = "Đã xóa thành công";
      header('location: ?ctrl=donhang');
   }
   function error()
   {
      if (isset($_GET['nd'])) {
         $nd = $_GET['nd'];
         if ($nd == null) {
            echo "<p class='text-danger'>Không để trống</p>";
         } else {
            echo '';
         }
      }
      if (isset($_GET['ndh'])) {
         $ndathang = $_GET['ndh'];
         if ($ndathang == null) {
            echo "<p class='text-danger mb-1'>Không để trống</p>";
         } else {
            echo '';
         }
      }
      if (isset($_GET['email'])) {
         $email = $_GET['email'];
         if ($email == null) {
            echo "<p class='text-danger mb-1'>Không để trống</p>";
         } elseif (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email) == false) {
            echo "<p class='text-danger mb-1'>Email không hợp lệ</p>";
         } else {
            echo '';
         }
      }
      if (isset($_GET['diachi'])) {
         $diachi = $_GET['diachi'];
         if ($diachi == null) {
            echo "<p class='text-danger mb-1'>Không để trống</p>";
         } else {
            echo '';
         }
      }
      if (isset($_GET['gh'])) {
         $timegh = $_GET['gh'];
         if ($timegh == null) {
            echo "<p class='text-danger mb-1'>Không để trống</p>";
         } else {
            echo '';
         }
      }
      if (isset($_GET['dathang'])) {
         $timedh = $_GET['dathang'];
         if ($timedh == null) {
            echo "<p class='text-danger mb-1'>Không để trống</p>";
         } else {
            echo '';
         }
      }
   }
}
