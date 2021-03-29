<?php
require_once "models/models-binhluan.php";
class binhluan
{
    function __construct()
    {
        $this->model = new model_binhluan();
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
    // hiện bình luận
    function index()
    {
        $pathTilte = "Danh sách bình luận";
        $dsbl = $this->model->DS_bl();
        $view = "views/index-bl.php";
        require_once "views/layout.php";
    }
    //  giao diện thêm bình luận mới
    function addnew()
    {
        $pathTilte = "Thêm bình luận";
        $nd = $this->model->Ds_User();
        $dt = $this->model->Ds_DT();
        $view = "views/addnew-bl.php";
        require_once "views/layout.php";
    }
    // chèn dữ liệu vào database
    function store()
    {
        $ten_nd = $_POST['ma_nd'];
        $ten_sp = $_POST['ma_dt'];
        $noidung = $_POST['noidung'];
        $anhien = $_POST['an_hien'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date("Y-m-d H:i:s");
        $noidung = trim($noidung);
        if ($ten_nd == null) {
            $error_nd = "<p class='text-danger'>Không để trống</p>";
        } else {
            $error_nd = null;
        }
        if ($ten_sp == null) {
            $error_sp = "<p class='text-danger'>Không để trống</p>";
        } else {
            $error_sp = null;
        }
        if ($error_nd == null && $error_sp == null) {
            $this->model->addnewBL($ten_nd, $ten_sp, $noidung, $date, $anhien);
            $_SESSION['mess'] = "Thêm thành công";
            header('location: ?ctrl=binhluan');
        } else {
            $pathTilte = "Thêm bình luận";
            $nd = $this->model->Ds_User();
            $dt = $this->model->Ds_DT();
            $view = "views/addnew-bl.php";
            require_once "views/layout.php";
        }
    }
    // sửa bình luận
    function edit()
    {
        $id_bl = $_GET['id'];
        $bl = $this->model->getBLbyID($id_bl);
        $nd = $this->model->Ds_User();
        $dt = $this->model->Ds_DT();
        $view = "views/edit-bl.php";
        require_once "views/layout.php";
    }
    // cập nhật bình luận
    function update()
    {
        $ma_bl = $_POST['ma_bl'];
        $ten_nd = $_POST['ma_nd'];
        $ten_sp = $_POST['ma_dt'];
        $noidung = $_POST['noidung'];
        $anhien = $_POST['an_hien'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date("Y-m-d H:i:s");
        $noidung = trim($noidung);
        $_SESSION['error'] = [];
        if ($ten_nd == null) {
            $_SESSION['error'][0] = "<p class='text-danger'>Không để trống</p>";
        }
        if ($ten_sp == null) {
            $_SESSION['error'][1] = "<p class='text-danger'>Không để trống</p>";
        }
        if ($_SESSION['error'] == null) {
            $this->model->UpdateBL($ten_nd, $ten_sp, $noidung, $date, $anhien, $ma_bl);
            header('location: ?ctrl=binhluan');
        }else{
            header('location: ?ctrl=binhluan&act=edit&id='.$ma_bl.'');
        }
    }
    // Xóa bình luận
    function delete()
    {
        $id_bl = $_GET['id'];
        $this->model->DeleteBL($id_bl);
        $_SESSION['mess'] = 'Xóa thành công';
        header('location: ?ctrl=binhluan');
    }
    // Kiểm lỗi 
    function error()
    {
    }
}
