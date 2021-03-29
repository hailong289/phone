<?php 
// require_once "./views/login.php";
require_once "./models/models-users.php";
class checkadmin{
     function __construct()
     {
        $this->model = new model_user(); 
        $act = "index";
        if(isset($_GET['act'])==true) $act = $_GET['act'];
        switch ($act) {
            case 'dangnhap':
                $this->checklogin();
                break;
            case 'index':
                $this->index();
                break;
            default:
                # code...
                break;
        }
      
     }
     function checklogin(){
        $tendn = $_POST['tendn'];
        $password = $_POST['password'];
        if(isset($_POST['luu'])){
            setcookie('username',$_POST['tendn'], time() + (86400 * 30),'/');
            setcookie("pass",$_POST['password'], time() + (86400 * 30),'/');
            setcookie("luu",$_POST['luu'], time() + (86400 * 30),'/');
        }else{
            setcookie('username','', time() - (86400 * 30),'/');
            setcookie("pass",'', time() - (86400 * 30),'/');
            setcookie("luu",'', time() - (86400 * 30),'/');
            setcookie("idDH",'', time() - (86400 * 30),'/');
        }
        $check = $this->model->checklogin($tendn, $password);
        // print_r($check);
        if($check){
            // foreach($check as $check){
            if($check['VaiTro']==1){
                $_SESSION['mess'] = "Đăng nhập thành công";
                $_SESSION['vaitro'] = $check['VaiTro'];
                $_SESSION['idAdmin'] = $check['idUser'];
                $_SESSION['name'] = $check['Username'];
                header('location: index.php');
            }else{
                $_SESSION['mess'] = "Sai tài khoản hoặc mật khẩu";
                header('location: index.php');
              }
            // }
        }else{
            print_r($check);
            $_SESSION['mess'] = "Sai tài khoản hoặc mật khẩu";
            // header('location: index.php');
            require_once "./views/login.php";
        }
        
     }
     function index(){
        
        require_once "./views/login.php";
     }
}
