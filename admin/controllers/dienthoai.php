<?php
require_once "models/models-dienthoai.php";
class dienthoai
{
   function __construct()
   {
      $this->model = new models_dienthoai();
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
            //Thuộc tính điện thoai
         case 'dstt':
            $this->dsthuoctinh();
            break;
         case 'addnew_ttdt':
            $this->addnew_ttdt();
            break;
         case 'savett':
            $this->savett();
            break;
         case 'edit-tt':
            $this->edit_tt();
            break;
         case 'delete-tt':
            $this->delete_tt();
            break;
         case 'update_tt':
            $this->update_tt();
            break;
         case 'kiemloi':
            $this->error();
            break;
      }
      //$this->$act;
   }

   // Thuộc tính điện thoại
   function dsthuoctinh()
   {
      $id = $_GET['id'];
      $dt = $this->model->Get_ttByID($id);
      $dsdt = $this->model->GetDTByid($dt['idDT']);
      $view = 'views/index-ttdt.php';
      require_once "views/layout.php";
   }
   function addnew_ttdt()
   {
      $id = $_GET['id'];
      settype($id, "int");
      $pathTilte = "Thêm thuộc tính điện thoại";
      $dt = $this->model->GetDTByid($id);
      $view = "views/addnew-ttdt.php";
      require_once "views/layout.php";
   }
   function savett()
   {
      $ma_dt = $_POST['ma_dt'];
      $manhinh = $_POST['mh'];
      $hedieuhanh = $_POST['hdh'];
      $camerat = $_POST['cmrt'];
      $cameras = $_POST['cmrs'];
      $Cpu = $_POST['cpu'];
      $ram = $_POST['ram'];
      $bonhot = $_POST['bont'];
      $then = $_POST['then'];
      $thes = $_POST['thes'];
      $dunglp = $_POST['dlp'];
      $this->model->savett($ma_dt, $manhinh, $hedieuhanh, $cameras, $camerat, $Cpu, $ram, $bonhot, $then, $thes, $dunglp);
      $_SESSION['mess'] = "Đã thêm thành công";
      header('location: ?ctrl=dienthoai&act=dstt&id=' . $ma_dt . '');
   }
   function edit_tt()
   {
      $pathTilte = "Sửa thuộc tính điện thoại";
      $id = $_GET['id'];
      settype($id, "int");
      $tt = $this->model->Get_ttByID($id);
      $dt = $this->model->GetDTByid($tt['idDT']);
      $view = "views/edit-ttdt.php";
      require_once "views/layout.php";
   }
   function update_tt()
   {
      $ma_tt = $_POST['ma_tt'];
      $ma_dt = $_POST['ma_dt'];
      $manhinh = $_POST['mh'];
      $hedieuhanh = $_POST['hdh'];
      $camerat = $_POST['cmrt'];
      $cameras = $_POST['cmrs'];
      $Cpu = $_POST['cpu'];
      $ram = $_POST['ram'];
      $bonhot = $_POST['bont'];
      $then = $_POST['then'];
      $thes = $_POST['thes'];
      $dunglp = $_POST['dlp'];
      $this->model->Updatett($ma_dt, $manhinh, $hedieuhanh, $cameras, $camerat, $Cpu, $ram, $bonhot, $then, $thes, $dunglp, $ma_tt);
      $_SESSION['mess'] = "Cập nhật thành công";
      header('location: ?ctrl=dienthoai&act=dstt');
   }
   function delete_tt()
   {
      $id = $_GET['id'];
      settype($id, "int");
      echo $id;
      $this->model->Delete_tt($id);
      $_SESSION['mess'] = "Xóa thành công";
      header('location: ?ctrl=dienthoai');
   }
   // End
   // Điện thoại
   function addnew()
   {
      $pathTilte = "Thêm điện thoại";
      $nsx = $this->model->DS_nsx();
      $view = "views/addnew-dt.php";
      require_once "views/layout.php";
   }

   function index()
   {
      $page_num = 1;
      if (isset($_GET['page']) == true) $page_num = $_GET['page'];
      $page_size = page_dt;
      $pathTilte = "Danh sách điện thoại";
      $Ds_DT = $this->model->Ds_dt($page_num, $page_size);
      $toltal_row = $this->model->DemSL_dt();

      $baseurl = ADMIN_URL . "/?ctrl=dienthoai&act=index";
      $links = $this->model->taolinks($baseurl, $page_num, $page_size, $toltal_row);
      $view = 'views/index-dt.php';
      require_once "views/layout.php";
   }
   function store()
   {
      $tendt = $_POST['dt'];
      $gia = $_POST['gia'];
      $giaKm = $_POST['giaKM'];
      $target_dir = '../uploaded/';
      $hinh = $_FILES['hinh']['name'];
      $file = $target_dir . basename($hinh);
      move_uploaded_file($_FILES["hinh"]["tmp_name"], $file);
      $nsx = $_POST['ma_nsx'];
      $mota = $_POST['mytextarea'];
      $an_hien = $_POST['an_hien'];
      $soluotmua = $_POST['slm'];
      $solanxem = $_POST['slx'];
      $hot = $_POST['hot'];
      $soluongtonkho = $_POST['sltk'];
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $date = date('Y-m-d H:i:s');
      //
      $tendt = trim($tendt);
      settype($gia, "int");
      settype($giaKm, "int");
      $hinh = trim(strip_tags($hinh));
      settype($nsx, 'int');
      $mota = trim(strip_tags($mota));
      settype($solanxem, "int");
      settype($soluotmua, "int");
      settype($soluongtonkho, "int");
      settype($hot, "int");
      // date_default_timezone_set('Asia/Ho_Chi_Minh');
      // $date = date('Y/m/d - H:i:s');
      // Kieemr lỗi
      if ($tendt == null) {

         $er_tdt = "<pre class='text-danger mb-1 mt-1'>Không để trống</pre>";
      } else {
         $er_tdt = null;
      }
      if ($gia == null) {
         $er_gia = "<p class='text-danger mb-1 mt-1'>Không để trống</p>";
      } else {
         $er_gia = null;
      }
      if ($giaKm == null) {
         $er_giaKM = "<p class='text-danger mb-1 mt-1'>Không để trống</p>";
      } elseif ($giaKm > $gia) {
         $er_giaKM = "<p class='text-danger mb-1 mt-1'>Giá không phù hợp mời bạn nhập lại</p>";
      } else {
         $er_giaKM = null;
      }
      if ($hinh == null) {
         $er_img = "<p class='text-danger mb-1 mt-1'>Không để trống</p>";
      } else {
         $er_img = null;
      }
      if ($nsx == null) {
         $er_nsx = "<p class='text-danger mb-1 mt-1'>Không để trống</p>";
      } else {
         $er_nsx = null;
      }
      if ($er_tdt == null && $er_gia == null && $er_giaKM == null && $er_img == null && $er_nsx == null) {
         $this->model->addnewDT($tendt, $gia, $giaKm, $hinh, $nsx, $mota, $date, $solanxem, $soluongtonkho, $soluotmua, $hot, $an_hien);
         $_SESSION['mess'] = "Đã thêm thành công";
         header("location: ?ctrl=dienthoai&act=index");
      } else {
         $nsx = $this->model->DS_nsx();
         $view = "views/addnew-dt.php";
         require_once "views/layout.php";
      }
   }
   function edit()
   {
      $id = $_GET['id'];
      settype($id, "int");
      $dt = $this->model->GetDTByid($id);
      $nsx = $this->model->DS_nsx();
      $view = 'views/edit-dt.php';
      require_once "views/layout.php";
   }
   function update()
   {
      $tendt = $_POST['dt'];
      $gia = $_POST['gia'];
      $giaKm = $_POST['giaKM'];
      $target_dir = '../uploaded/';
      if ($_FILES['hinh']['name'] != NULL) {
         $hinh = $_FILES['hinh']['name'];
         $file = $target_dir . basename($hinh);
         move_uploaded_file($_FILES["hinh"]["tmp_name"], $file);
      } else {
         $hinh = $_POST['img'];
      }
      $nsx = $_POST['ma_nsx'];
      $an_hien = $_POST['an_hien'];
      $mota = $_POST['mytextarea'];
      $soluotmua = $_POST['slm'];
      $solanxem = $_POST['slx'];
      $hot = $_POST['hot'];
      $ma_dt = $_POST['ma_dt'];
      $soluongtonkho = $_POST['sltk'];
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $date = date('Y-m-d H:i:s');
      //
      $tendt = trim($tendt);
      settype($gia, "int");
      settype($giaKm, "int");
      $hinh = trim(strip_tags($hinh));
      settype($nsx, 'int');
      $mota = trim(strip_tags($mota));
      settype($solanxem, "int");
      settype($soluotmua, "int");
      settype($soluongtonkho, "int");
      settype($hot, "int");
      // kiểm lỗi
      $this->model->UpdateDT($tendt, $gia, $giaKm, $hinh, $nsx, $mota, $date, $ma_dt, $solanxem, $soluotmua, $soluongtonkho, $hot, $an_hien);
      $_SESSION['mess'] = "Cập nhật thành công";
      header("location: ?ctrl=dienthoai&act=index");
   }
   function delete()
   {
      $id = $_GET['id'];
      settype($id, "int");
      $this->model->DeleteDT($id);
      $_SESSION['mess'] = "Đã xóa thành công";
      header("location: ?ctrl=dienthoai&act=index");
   }
   function error()
   {
      if (isset($_GET['nameDT'])) {
         $tendt = $_GET['nameDT'];
         if ($tendt == null) {
            echo '<p class="text-danger mb-1 mt-1">Không để trống</p>';
         }
      }
      if (isset($_GET['gia'])) {
         $gia = $_GET['gia'];
         if ($gia == null) {
            echo '<p class="text-danger mb-1 mt-1">Không để trống</p>';
         }
      }
      if (isset($_GET['giakm'])) {
         $giakm = $_GET['giakm'];
         if ($giakm == null) {
            echo '<p class="text-danger mb-1 mt-1">Không để trống</p>';
         }
      }
      if (isset($_GET['nsx'])) {
         $nsx = $_GET['nsx'];
         if ($nsx == null) {
            echo '<p class="text-danger mb-1 mt-1">Không để trống</p>';
         }
      }
      if (isset($_GET['mota'])) {
         $mota = $_GET['mota'];
         if ($mota == null) {
            echo '<p class="text-danger mb-1 mt-1">Không để trống</p>';
         }
      }
   }
}
