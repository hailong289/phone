<?php 
require_once "../system/model_system.php";
class models_dienthoai extends model_system{
  //Xem tất cả điện thoại
    function getAll_dt(){
      $sql = "SELECT * FROM dienthoai ORDER BY idDT DESC";
      return $this->query($sql);
    }
      function Ds_dt($page_num, $page_size){
          $start = ($page_num - 1) * $page_size;
          $sql = "SELECT * FROM dienthoai ORDER BY idDT DESC LIMIT $start,$page_size";
          return $this->query($sql);
      }
     
      // đếm số lượng thuộc tính điện thoại
      function DemSL_ttdt($idDT){
        $sql="SELECT count(*) as sodong FROM thuoctinhdt WHERE idDT='$idDT'";
        $kq = $this->query($sql);
        $row= $kq -> fetch();
        $rowcount = $row['sodong'];
        return $rowcount;
      }
      // Đếm số lượng thuộc tính điện thoại
      // đếm sô lượng điện thoại
      function DemSL_dt(){
        $sql="SELECT count(*) as sodong FROM dienthoai";
        $kq = $this->query($sql);
        $row= $kq -> fetch();
        $rowcount = $row['sodong'];
        return $rowcount;
      }
    
      // Tạo links
      function taolinks($baseurl, $page_num, $page_size, $toltal_row){
        if ($toltal_row <= 0) return "";
        $total_pages = ceil($toltal_row / $page_size);
        if ($total_pages <= 0) return "";
        $links = '<ul class="pagination justify-content-end mt-5">';
        // Trang đầu trang trước
        if ($page_num >= 2) {
            $pr = $page_num - 1;
            // $links .= "<li class='page-item'><a href='{$baseurl}' class='page-link'><</a></li>";
            $links .= "<li class='page-item'><a href='{$baseurl}&page={$pr}' class='page-link'> Prev</a></li>";
        }
        // -	Tạo item trang hiện hành : Code tiếp theo code tạo Trang đầu, Trang trước 
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($page_num == $i) {
                $links .= "<li class='page-item active'><a href='{$baseurl}&page={$i}' class='page-link'>{$i}</a></li>";
            } else {
                $links .= "<li class='page-item'><a href='{$baseurl}&page={$i}' class='page-link'>{$i}</a></li>";
            }
        }
        //-	Tạo link Trang kế, Trang cuối (khi user không phải ở trang cuối) Code tiếp sau item trang hiện hành:
        //Trang kế , Trang cuối
        if ($page_num <= $total_pages) {
            $pn = $page_num + 1;
            $links .= "<li class='page-item'><a href='{$baseurl}&page={$pn}' class='page-link'>Next</a></li>";
        }
        // $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>></a></li>";
        $links .= '</ul>';
        return $links;
      }
      function DS_nsx(){
        $sql = "SELECT * FROM nhasanxuat";
        return $this->query($sql);
      }
      function DSnsx_DT($id){
        $sql = "SELECT TenNSX FROM nhasanxuat where idNSX = '$id'";
        return $this->queryOne($sql);
      }
      function addnewDT($tendt,$gia,$giaKm,$hinh,$nsx,$mota,$date,$solanxem,$soluongtonkho,$soluotmua,$hot, $an_hien){
        $sql = "INSERT INTO dienthoai (TenDT, Gia, GiaKM, urlHinh, Mota,idNSX,ThoiDiemNhap,SoLanXem,SoLanMua,SoLuongTonKho,Hot,AnHien) 
        VALUES ('$tendt','$gia','$giaKm','$hinh','$mota','$nsx','$date','$solanxem','$soluotmua','$soluongtonkho','$hot','$an_hien')";
        $this->execute($sql);
      }

      function GetDTByid($id){
        $sql = "SELECT * FROM dienthoai WHERE idDT = $id";
        return $this->queryOne($sql);
      }
      function UpdateDT($tendt,$gia,$giaKm,$hinh,$nsx,$mota,$date,$ma_dt,$solanxem,$soluotmua,$soluongtonkho,$hot,$an_hien){
        $sql = "UPDATE dienthoai SET TenDT='$tendt', Gia='$gia', GiaKM='$giaKm', urlHinh='$hinh', MoTa='$mota', idNSX='$nsx', ThoiDiemNhap='$date',
        SoLanXem='$solanxem', SoLanMua='$soluotmua', SoLuongTonKho='$soluongtonkho', Hot='$hot', AnHien='$an_hien' WHERE idDT='$ma_dt'";
        $this->execute($sql);
      }
      function DeleteDT($id){
        $sql = "DELETE FROM dienthoai WHERE idDT=$id";
        $this->execute($sql);
      }



      // thuộc tính ddienj thoai
       // danh sách thuocj tính ddienj thaoij
      //  function Ds_ttdt($page_num, $page_size){
      //   $start = ($page_num - 1) * $page_size;
      //   $sql = "SELECT * FROM thuoctinhdt ORDER BY idDT DESC LIMIT $start,$page_size";
      //   return $this->query($sql);
      // }
      function savett($ma_dt, $manhinh,$hedieuhanh,$cameras,$camerat,$Cpu,$ram,$bonhot,$then,$thes,$dunglp){
        $sql = "INSERT INTO thuoctinhdt (ManHinh,HeDieuHanh,CameraSau,CameraTruoc,CPU,Ram,BoNhoTrong,TheNho,TheSim,DungLuongPin,idDT) 
        VALUES ('$manhinh','$hedieuhanh','$cameras','$camerat','$Cpu','$ram','$bonhot','$then','$thes','$dunglp','$ma_dt')";
        $this->execute($sql);
      }
      function getALL_ttdt(){
        $sql = "SELECT * FROM thuoctinhdt";
        return $this->query($sql);
      }
      function Get_ttByID($id){
        $sql = "SELECT * FROM thuoctinhdt where idDT = '$id'";
        return $this->queryOne($sql);
      }
      // function Updatett($ma_dt, $manhinh,$hedieuhanh,$cameras,$camerat,$Cpu,$ram,$bonhot,$then,$thes,$dunglp,$ma_tt){
      //   $sql = "UPDATE thuoctinhdt SET ManHinh='$manhinh', HeDieuHanh='$hedieuhanh', CameraSau='$cameras', CameraTruoc='$camerat',
      //  CPU='$Cpu', Ram='$ram', BoNhoTrong='$bonhot', TheNho='$then', TheSim='$thes', DungLuongPin='$dunglp', idDT='$ma_dt' WHERE idTT = '$ma_tt'";
      //   $this->execute($sql);
      // }
      function Delete_tt($id){
        $sql = "DELETE FROM thuoctinhdt WHERE idTT=$id";
        $this->execute($sql);
      }
}
?>