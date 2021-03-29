<?php 
require_once "../system/model_system.php";
class model_user extends model_system{
    function checklogin($tendn, $password){
        $sql = "SELECT * FROM user WHERE Username='$tendn' AND matkhau ='$password'";
        return $this->queryOne($sql);
    }
    function Ds_user($page_num, $page_size){
        $start = ($page_num - 1) * $page_size;
        $sql = "SELECT * FROM user ORDER BY idUser LIMIT $start,$page_size";
        return $this->query($sql);
    }
    function DemSL_user(){
        $sql="SELECT count(*) as sodong FROM user";
        $kq = $this->query($sql);
        $row= $kq -> fetch();
        $rowcount = $row['sodong'];
        return $rowcount;
      }
      function KiemTraUser($ten_dn){
        $sql="SELECT count(*) as sodong FROM user where Username='$ten_dn'";
        $kq = $this->query($sql);
        $row= $kq -> fetch();
        $rowcount = $row['sodong'];
        return $rowcount;
      }
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
        if ($page_num < $total_pages) {
            $pn = $page_num + 1;
            $links .= "<li class='page-item'><a href='{$baseurl}&page={$pn}' class='page-link'>Next</a></li>";
        }
        // $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>></a></li>";
        $links .= '</ul>';
        return $links;
    }
     // Thêm người dùng hoặc admin
    function addnew_user($tendn,$hoten,$pass,$email,$hinh,$anhien,$vaitro){
        $sql = "INSERT INTO user (Username,matkhau,HoTen,urlHinh,Email,VaiTro,AnHien)
        VALUES ('$tendn','$pass','$hoten','$hinh','$email','$vaitro','$anhien')";
        $this->execute($sql);
    }

    // Lấy 1 user
    function getOneUserByID($id){
        $sql = "SELECT * FROM user WHERE idUser='$id'";
        return $this->queryOne($sql);
    }
    // update
    function update_user($tendn,$hoten,$pass,$email,$hinh,$anhien,$vaitro,$id){
        if($hinh != null){
            $sql = "UPDATE user SET Username='$tendn', matkhau='$pass', HoTen='$hoten', urlHinh='$hinh', Email='$email', VaiTro='$vaitro',AnHien='$anhien' WHERE idUser='$id'";
            $this->execute($sql);
        }else{
            $sql = "UPDATE user SET Username='$tendn', matkhau='$pass', HoTen='$hoten', Email='$email', VaiTro='$vaitro',AnHien='$anhien' WHERE idUser='$id'";
            $this->execute($sql);
        }
    }

    function delete_use($id){
        $sql = "DELETE FROM user WHERE idUser='$id'";
        $this->execute($sql);
    }
}