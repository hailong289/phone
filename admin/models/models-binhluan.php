<?php 
require_once "../system/model_system.php";
class model_binhluan extends model_system{
    function DS_bl(){
        $sql = "SELECT bl.NoiDungBL, bl.ThoiDiemBL, bl.AnHien, dt.TenDT, u.Username, bl.idBL FROM binhluan as bl INNER JOIN dienthoai as dt ON bl.idDT = dt.idDT 
        INNER JOIN user as u ON bl.idUser = u.idUser ORDER BY bl.idBL DESC"; 
        return $this->query($sql);
    }
    function Ds_User(){
        $sql =  "SELECT * FROM user";
        return $this->query($sql);
    }
    function Ds_DT(){
        $sql =  "SELECT * FROM dienthoai";
        return $this->query($sql);
    }
    function addnewBL($ten_nd, $ten_sp, $noidung, $date, $anhien){
        $sql = "INSERT INTO binhluan (NoiDungBl, idDT, idUser, ThoiDiemBL, AnHien) VALUES ('$noidung','$ten_sp','$ten_nd','$date','$anhien')";
        $this->execute($sql);
    }
    function getBLbyID($id_bl){
        $sql = "SELECT bl.NoiDungBL, bl.ThoiDiemBL, bl.AnHien, dt.idDT, u.idUser, bl.idBL FROM binhluan as bl INNER JOIN dienthoai as dt ON bl.idDT = dt.idDT 
        INNER JOIN user as u ON bl.idUser = u.idUser WHERE bl.idBL = '$id_bl'"; 
        return $this->queryOne($sql);
    }
    function UpdateBL($ten_nd, $ten_sp, $noidung, $date, $anhien, $ma_bl){
        $sql = "UPDATE binhluan SET NoiDungBL='$noidung', idDT='$ten_sp', idUser='$ten_nd', ThoiDiemBL='$date', AnHien='$anhien' WHERE idBL = '$ma_bl'";
        $this->execute($sql);
    }
    function DeleteBL($id_bl){
        $sql = "DELETE FROM binhluan WHERE idBL = '$id_bl'";
        $this->execute($sql);
    }
}

?>