<?php 
// Đây là trang chủ
require_once 'models/models-nhasanxuat.php';
require_once 'models/models-dienthoai.php';
require_once 'models/models-donhang.php';
require_once 'models/models-users.php';
class home{
    function __construct()
    {
        $this->modelnsx = new model_nhasanxuat();
        $this->modeldt = new models_dienthoai();
        $this->modeldh = new model_donhang();
        $this->modeluser = new model_user();
        $act = "index";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
        switch ($act) {    
             case "index": $this->index(); break;
        }
    }
   function index(){
        $sldt  = $this->modeldt->DemSL_dt();
        $sldh = $this->modeldh->DemSL_dh();
        $sluser = $this->modeluser->DemSL_user();
        $slnsx = $this->modelnsx-> Count_NSX();
        require_once "views/layout.php";
   }
}
