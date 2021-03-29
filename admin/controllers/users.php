<?php
require_once "models/models-users.php";
class users
{
    function __construct()
    {
        $this->model = new model_user;
        $act = "index";
        if (isset($_GET['act']) == true) $act = $_GET['act'];
        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'logout':
                $this->logout();
                break;
            case "addnew":
                $this->addnew();
                break;
            case 'store':
                $this->store();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete();
                break;
            case 'kiemloi':
                $this->error();
                break;
            default:
                # code...
                break;
        }
    }
    function addnew()
    {
        $pathTilte = "Thêm người dùng";
        $view = "views/addnew-user.php";
        require_once "views/layout.php";
    }
    function store()
    {
        $tendn = $_POST['ten_dn'];
        $hoten = $_POST['hoten'];
        $pass = $_POST['mk'];
        $email = $_POST['email'];
        $hinh = $_FILES['hinh']['name'];
        $urlHinh = "../uploaded/";
        $target_files = $urlHinh . basename($hinh);
        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_files);
        $anhien = $_POST['an_hien'];
        $vaitro = $_POST['vai_tro'];
        if($tendn == null){
            $error_tdn = "<p class='text-danger mt-2'>Không để trống</p>";
        }elseif($this->model-> KiemTraUser($tendn)){
            $error_tdn = "<p class='text-danger mt-2'>Tên đăng nhập đã tồn tại</p>";
        }else{
            $error_tdn = null;
        }
        if($hoten == null){
            $error_ht =  "<p class='text-danger mt-2'>Không để trống</p>";
        }else{
            $error_ht = null;
        }
        if ($pass == null) {
            $error_mk = "<p class='text-danger mt-2'>Không để trống</p>";
        }elseif(preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/",$pass)==false){
            $error_mk = "<p class='text-danger mt-2'>Mật khẩu phải có 1 chữ in hoa và số dài 6 ký tự</p>";
        }else{
            $error_mk =null;
        }
        if($email == null){
            $error_email = "<p class='text-danger mt-2'>Không để trống</p>";
        }elseif(preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)==false){
            $error_email = "<p class='text-danger mt-2'>Email không hợp lệ</p>";
        }else{
            $error_email = null;
        }
        if($error_tdn == null && $error_mk == null && $error_email == null && $error_ht == null){
            $this->model->addnew_user($tendn, $hoten, $pass, $email, $hinh, $anhien, $vaitro);
            $_SESSION['mess'] = "Thêm thành công";
            header('location: ?ctrl=users&act=index');
        }else{
            $pathTilte = "Thêm người dùng";
            $view = "views/addnew-user.php";
            require_once "views/layout.php";
        }
    }
    function edit()
    {
        $id = $_GET['id'];
        settype($id, "int");
        $pathTilte = "Sửa người dùng";
        $nd = $this->model->getOneUserByID($id);
        $view = "views/edit-user.php";
        require_once "views/layout.php";
    }

    function update()
    {
        $tendn = $_POST['ten_dn'];
        $idUser = $_POST['ma_nd'];
        settype($idUser, "int");
        $hoten = $_POST['hoten'];
        $pass = $_POST['mk'];
        $email = $_POST['email'];
        if ($_FILES['hinh']['name'] != NULL) {
            $hinh = $_FILES['hinh']['name'];
            $urlHinh = "../uploaded/";
            $target_files = $urlHinh . basename($hinh);
            move_uploaded_file($_FILES['hinh']['tmp_name'], $target_files);
        } else {
            $hinh = null;
        }
        $anhien = $_POST['an_hien'];
        $vaitro = $_POST['vai_tro'];
        $this->model->update_user($tendn,$hoten,$pass,$email,$hinh,$anhien,$vaitro,$idUser);
        $_SESSION['mess'] = "Cập nhật thành công";
        header('location: ?ctrl=users&act=index');
    }
    function delete(){
        $id = $_GET['id'];
        $this->model->delete_use($id);
        $_SESSION['mess'] = "Đã xóa thành công";
        header('location: ?ctrl=users&act=index');
    }
    function index()
    {
        $pathTilte = "Danh sách người dùng";
        $page_num = 1;
        if (isset($_GET['page']) == true) $page_num = $_GET['page'];
        $page_size = page_dt;
        $Ds_nd = $this->model->Ds_user($page_num, $page_size);
        $toltal_row = $this->model->DemSL_user();
        $baseurl = "" . ADMIN_URL . "/?ctrl=users&act=index";
        $links = $this->model->taolinks($baseurl, $page_num, $page_size, $toltal_row);
        $view = "views/index-user.php";
        require_once "views/layout.php";
    }
    function logout()
    {
        session_destroy();
        header('location: index.php');
    }
    function error(){
        if(isset($_GET['ten_dn'])){
           $ten_dn = $_GET['ten_dn'];
           if($ten_dn == null){
               echo "<p class='text-danger mt-2'>Không để trống</p>";
           }elseif($this->model-> KiemTraUser($ten_dn)){
               echo "<p class='text-danger mt-2'>Tên tài khoản đã tồn tại</p>";
           }else{
               echo '';
           }
        }
        if(isset($_GET['hoten'])){
            if($_GET['hoten']==null){
                echo "<p class='text-danger mt-2'>Không để trống</p>";
            }else{
                echo '';
            }
        }
        if(isset($_GET['mk'])){
            $mk = $_GET['mk'];
            $regex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
            if($mk == null){
                echo "<p class='text-danger mt-2'>Không để trống</p>";
            }elseif(preg_match($regex, $mk)==false){
                echo "<p class='text-danger mt-2'>Mật khẩu phải có 1 chữ in hoa và số</p>";
            }else{
                echo '';
            }
        }
        if(isset($_GET['email'])){
            $email = $_GET['email'];
            $regex = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
            if($email == null){
                echo "<p class='text-danger mt-2'>Không để trống</p>";
            }elseif(preg_match($regex,$email)==false){
                echo "<p class='text-danger mt-2'>Email không hợp lệ</p>";
            }else{
                echo '';
            }
        }
    }
}
