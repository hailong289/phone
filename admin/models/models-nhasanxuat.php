<?php
require_once "../system/model_system.php";

class  model_nhasanxuat extends model_system
{
    // function __construct()
    // {
    //     $this->model = new model_system;
    // }
    function DS_nsx()
    {
        $sql = "SELECT * FROM nhasanxuat";
        return $this->query($sql);
    }
    function AddNew_NSX($ten_nsx, $thutu, $an_hien)
    {
        $sql = "INSERT INTO nhasanxuat (TenNSX,ThuTu,AnHien) VALUES ('$ten_nsx','$thutu','$an_hien')";
        return $this->execute($sql);
    }
    /// Dem tát cả nhà sản xuat
    function CountNSX($ten_nsx)
    {
        $sql = "SELECT count(*) as sl FROM nhasanxuat WHERE TenNSX='$ten_nsx'";
        $row = $this->query($sql);
        $row = $row->fetch();
        return $row['sl'];
    }
    function Count_NSX()
    {
        $sql = "SELECT count(*) as sl FROM nhasanxuat";
        $row = $this->query($sql);
        $row = $row->fetch();
        return $row['sl'];
    }
    function getNsxByID($id)
    {
        $sql = "SELECT * FROM nhasanxuat WHERE idNSX = $id";
        return $this->queryOne($sql);
    }
    function update($ten_nsx, $thutu, $an_hien, $ma_nsx)
    {
        $sql = "UPDATE nhasanxuat SET TenNSX='$ten_nsx', ThuTu='$thutu', AnHien='$an_hien' WHERE idNSX='$ma_nsx'";
        return $this->execute($sql);
    }
    function DeleteNSX($id)
    {
        $sql = "DELETE FROM nhasanxuat WHERE idNSX = '$id'";
        return $this->execute($sql);
    }
}
