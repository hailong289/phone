<?php 
session_start();
if($_SESSION['vaitro']==1){
require_once "../system/config.php";
define('ARR_CONTROLLER',['home','binhluan','dienthoai','donhang','nhasanxuat','users']);
$ctrl = "home";
if(isset($_GET['ctrl'])==true) $ctrl = $_GET['ctrl'];
if(in_array($ctrl, ARR_CONTROLLER)==false) die("Không tồn tại địa chỉ");
$pathFile = 'controllers/'.$ctrl.'.php';
if(file_exists($pathFile)==true){
    require_once $pathFile;
    $controller = new $ctrl;
}
}else{
    require_once "login.php";
    $controller = new checkadmin;
}
?>