<?php 
require_once "config.php";
class model_system{
    public $conn;
    function __construct()
    {
        $otp = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $this->conn = new PDO('mysql:host='.HOST_DB.';dbname='.NAME_DB,USER_DB,PASS_DB,$otp);
        // echo "thành công";
    }
    function query($sql){
        $result = $this->conn->query($sql);
        return $result;
    }
    function queryOne($sql){
        $result = $this->conn->query($sql);
        // $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
        // return $result;
    }
    function execute($sql){
        $result = $this->conn->exec($sql);
        return $result;
    }
} // End class model


?>