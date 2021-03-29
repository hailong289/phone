<?php
require_once "../system/model_system.php";
class model_donhang extends model_system{
       function showD_H(){
           $sql = "SELECT * FROM donhang ORDER BY idDH DESC";
           return $this->query($sql);
       }
       function getALLuser(){
        $sql = "SELECT * FROM user";
        return $this->query($sql);
       } 
       function DemSL_dh(){
        $sql="SELECT count(*) as sodong FROM donhang";
        $kq = $this->query($sql);
        $row= $kq -> fetch();
        $rowcount = $row['sodong'];
        return $rowcount;
      }
       function user($id){
           $sql = "SELECT * FROM user WHERE idUser='$id'";
           return $this->queryOne($sql);
       }
       function update_trangthai($id,$trangthai, $date){
           $sql = "UPDATE donhang SET TrangThai='$trangthai', ThoiDiemGiaoHang='$date' WHERE idDH='$id'";
           $this->execute($sql);
       }
       // Thêm thời điểm giao hàng
       function Addnew_TDGH($ngaygiao, $idDH){
        if($ngaygiao != " "){
            $sql = "UPDATE donhang SET ThoiDiemGiaoHang = '$ngaygiao' WHERE idDH='$idDH'";
            $this->execute($sql);
        }else{
            return false;
        }
       }
       function update_trangthaiDG($idDH, $trangthai){
        $sql = "UPDATE donhang SET TrangThai='$trangthai' WHERE idDH='$idDH'";
        $this->execute($sql);
       }
       // Thêm đơn hàng
       function addnewdh($tennd, $nguoinhan,$email, $diachi,$trangthai,$thoidiemdh,$thoidiemgh,$gckh,$gcadmin,$anhien){
           $sql = "INSERT INTO donhang (ThoiDiemDatHang,ThoiDiemGiaoHang,idUser,TenNguoiNhan,EmailNguoiNhan,DiaChiNguoiNhan,AnHien,TrangThai,GhiChuCuaKhachHang,GhiChuCuaAdmin)
           VALUES ('$thoidiemdh','$thoidiemgh','$tennd','$nguoinhan','$email','$diachi','$anhien','$trangthai','$gckh','$gcadmin')";
           $this->execute($sql);
       }
       function delete_DH($id){
           $sql = "DELETE FROM donhang WHERE idDH='$id'";
           $this->execute($sql);
       }
}
