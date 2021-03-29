<?php
require_once "../system/model_system.php";


class models_home extends model_system
{
        public function getallNsx()
        {
                $sql = "SELECT * FROM nhasanxuat WHERE AnHien=1";
                return $this->query($sql);
        }
        public function DS_dt()
        {
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY idDT DESC LIMIT 8";
                return $this->query($sql);
        }
        function getAllDT()
        {
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY idDT DESC";
                return $this->query($sql);
        }
        public function SP_lq()
        {
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY idDT DESC LIMIT 4";
                return $this->query($sql);
        }
        function updateLuotxem($id)
        {
                $sql = "UPDATE dienthoai SET SoLanXem = SoLanXem + 1 WHERE idDT='$id'";
                $this->execute($sql);
        }
        function updateLuotMua($id)
        {
                $sql = "UPDATE dienthoai SET SoLanMua = SoLanMua + 1 WHERE idDT='$id'";
                $this->execute($sql);
        }
        // Xem bình luận
        function getBinhLuanByIDDT($id)
        {
                $sql = "SELECT * FROM binhluan where idDT = '$id' ORDER BY idBL DESC";
                return $this->query($sql);
        }
        // Đếm số bình luận
        function CountBinhluan($id)
        {
                $sql = "SELECT count(*) as sl FROM binhluan WHERE idDT='$id'";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['sl'];
        }
        public function DT_XN()
        {
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY SoLanXem DESC LIMIT 4";
                return $this->query($sql);
        }
        function DT_BC()
        {
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY SoLanMua DESC LIMIT 4";
                return $this->query($sql);
        }
        function GetDT($page_num, $page_size)
        {
                $start = ($page_num - 1) * $page_size;
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY idDT DESC LIMIT $start,$page_size";
                return $this->query($sql);
        }
        // lấy điện thoại mã nsx
        function GetDTByNsx($page_num, $page_size, $id)
        {
                $start = ($page_num - 1) * $page_size;
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idNSX='$id' ORDER BY idDT DESC LIMIT $start,$page_size";
                return $this->query($sql);
        }
        // Tìm kiêm
        function GetDSTimkiem($page_num, $page_size, $search)
        {
                $start = ($page_num - 1) * $page_size;
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND TenDT like '%$search%' ORDER BY idDT DESC LIMIT $start,$page_size";
                return $this->query($sql);
        }
        function GetDSTimkiemAJAX($search)
        {
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND TenDT like '%$search%'";
                $kq = $this->query($sql);
                $kq = $kq->fetchAll(PDO::FETCH_ASSOC);
                return $kq;
        }
        // Đếm số kluongwj sp tìm kiếm
        function DemSL_dtTimkiem($search)
        {
                $sql = "SELECT count(*) as sl FROM dienthoai WHERE TenDT like '%$search%'";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['sl'];
        }
        function DemSL_DT()
        {
                $sql = "SELECT count(*) as sl FROM dienthoai";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['sl'];
        }
        function DemSL_dtBynxs($id)
        {
                $sql = "SELECT count(*) as sl FROM dienthoai WHERE idNSX='$id'";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['sl'];
        }
        // checkemail và user
        function CheckEmail($email, $id)
        {
                $sql = "SELECT * FROM user WHERE Email='$email' AND idUser='$id'";
                // $row = $this->query($sql);
                // $row = $row->fetch();
                // return $row['sl'];
                return $this->queryOne($sql);
        }
        function getUserByEmail($email)
        {
                $sql = "SELECT * FROM user WHERE Email='$email'";
                // $row = $this->query($sql);
                // $row = $row->fetch();
                // return $row['sl'];
                return $this->queryOne($sql);
        }
        // check email
        function CheckEmail2($email)
        {
                $sql = "SELECT count(*) as sl FROM user WHERE Email='$email'";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['sl'];
        }
        // kich hoạt tài khoản
        function UpdateTrangThai($id)
        {
                $sql = "UPDATE user SET KichHoat=1 WHERE idUser='$id'";
                $this->execute($sql);
        }
        function CheckIDUSer($user)
        {
                $sql = "SELECT count(*) as sl FROM user WHERE Username='$user'";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['sl'];
        }
        function CheckMatkhau($mk, $id)
        {
                $sql = "SELECT * FROM user WHERE matkhau='$mk' AND idUser='$id'";
                return $this->queryOne($sql);
                // $row = $row->fetch();
                // return $row['sl'];
        }
        // Xem tên nsx
        function XemTenNSX($id){
                $sql = "SELECT * FROM nhasanxuat WHERE idNSX='{$id}'";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['TenNSX'];
        }
        function taoLinks($page_num, $page_size, $total_row, $baseurl)
        {
                $total_page = ceil($total_row / $page_size);
                if ($page_num <= 0) {
                        return "Không có sản phẩm";
                }
                if ($total_page <= 0) {
                        return "Không có sản phẩm";
                }
                $links = '<ul class="pagination justify-content-center mt-5">';
                // Trang đầu trang trước
                if ($page_num >= 2) {
                        $pr = $page_num - 1;
                        // $links .= "<li class='page-item'><a href='{$baseurl}' class='page-link'><</a></li>";
                        $links .= "<li class='page-item'><a href='{$baseurl}/{$pr}' class='page-link'> Prev</a></li>";
                }
                // -	Tạo item trang hiện hành : Code tiếp theo code tạo Trang đầu, Trang trước 
                for ($i = 1; $i <= $total_page; $i++) {
                        if ($page_num == $i) {
                                $links .= "<li class='page-item active'><a href='{$baseurl}/{$i}' class='page-link'>{$i}</a></li>";
                        } else {
                                $links .= "<li class='page-item'><a href='{$baseurl}/{$i}' class='page-link'>{$i}</a></li>";
                        }
                }
                //-	Tạo link Trang kế, Trang cuối (khi user không phải ở trang cuối) Code tiếp sau item trang hiện hành:
                //Trang kế , Trang cuối
                if ($page_num < $total_page) {
                        $pn = $page_num + 1;
                        $links .= "<li class='page-item'><a href='{$baseurl}/{$pn}' class='page-link'>Next</a></li>";
                }
                // $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>></a></li>";
                $links .= '</ul>';
                return $links;
        }
        function GetDTbyID($id)
        {
                $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idDT='$id'";
                return $this->queryOne($sql);
        }
        function GetttDT($id)
        {
                $sql = "SELECT * FROM thuoctinhdt WHERE idDT='$id'";
                return $this->queryOne($sql);
        }
        function checklogin($tendn, $mk)
        {
                $sql = "SELECT * FROM user WHERE Username='$tendn' AND matkhau='$mk'";
                return $this->queryOne($sql);
        }
        // đang ky
        function SaveTT_User($tendn, $hoten, $email, $mk)
        {
                $sql = "INSERT INTO user (HoTen, Username, matkhau, Email) VALUES ('$hoten','$tendn','$mk','$email')";
                $this->conn->exec($sql);
                $last_id = $this->conn->lastInsertId();
                return $last_id;
        }
        //Dém số luong user 
        function DEMsl_user($username){
                $sql = "SELECT count(*) as sl FROM user WHERE Username='{$username}'";
                $row = $this->query($sql);
                $row = $row->fetch();
                return $row['sl'];
        }
        // Xem thông tin tài khoản
        function getUserByID($id)
        {
                $sql = "SELECT * FROM user WHERE idUser='$id'";
                return $this->queryOne($sql);
        }
        // Cập nhật thong tin tài khoản
        function CapnhatThongtinTK($hoten, $idUser, $tentk, $email, $hinh)
        {
                if ($hinh != null) {
                        $sql = "UPDATE user SET HoTen='$hoten', Username='$tentk', Email='$email', urlHinh='$hinh' WHERE idUser='$idUser'";
                        $this->execute($sql);
                } else {
                        $sql = "UPDATE user SET HoTen='$hoten', Username='$tentk', Email='$email' WHERE idUser='$idUser'";
                        $this->execute($sql);
                }
        }
        // Cập nhật mật khẩu mới
        function updateMKmoi($passnew, $idUser)
        {
                $sql = "UPDATE user SET matkhau='$passnew' WHERE idUser='$idUser'";
                $this->execute($sql);
        }
        function Savecomment($idDT, $idUser, $nd)
        {
                $sql = "INSERT INTO binhluan (idDT, idUser, NoiDungBL, ThoiDiemBL) VALUES ('$idDT','$idUser','$nd',NOW())";
                $this->execute($sql);
        }
        // Đặt hàng
        function InsertDH($idDH, $hoten, $diachi, $sdt, $email, $ghichu, $date, $idUser)
        {
                if ($idDH == -1) {
                        $sql = "INSERT INTO donhang (ThoiDiemDatHang,idUser,TenNguoiNhan,EmailNguoiNhan,DiaChiNguoiNhan,AnHien,GhiChuCuaKhachHang,sdt) 
                VALUES ('$date','$idUser','$hoten','$email','$diachi',1,'$ghichu','$sdt')";
                        $this->conn->exec($sql);
                        $last_id = $this->conn->lastInsertId();
                        return $last_id;
                } else {
                        $sql = "UPDATE donhang SET ThoiDiemDatHang = NOW(), idUser='{$idUser}', TenNguoiNhan='{$hoten}', EmailNguoiNhan='{$email}', DiaChiNguoiNhan='{$diachi}',
                        AnHien=1, GhiChuCuaKhachHang='{$ghichu}', sdt='{$sdt}' WHERE idDH='{$idDH}'";
                        $this->execute($sql);
                }
        }
        // Đơn hàng chi tiết
        function DHchitiet($idDH, $idDT, $gia, $sl, $tendt, $hinh)
        {
                $sql = "DELETE FROM donhangchitiet WHERE idDH='{$idDH}'";
                $this->query($sql);
                $sql = "INSERT INTO donhangchitiet (idDH, idDT, SoLuong, Gia, TenDT, urlHinh) 
                VALUES ('$idDH','$idDT','$sl','$gia','$tendt','$hinh')";
                $this->execute($sql);
        }
        // Xem đơn hàng \
        function getDHByidUser($id)
        {
                $sql = "SELECT * FROM donhang WHERE idDH= $id ORDER BY idDH DESC";
                return $this->query($sql);
        }
        function DonHangChitiet($id)
        {
                $sql = "SELECT * FROM donhangchitiet where idDH='$id'";
                return $this->query($sql);
        }
        function getDHByDhct($id)
        {
                $sql = "SELECT * FROM donhang WHERE idDH='$id'";
                return $this->queryOne($sql);
        }
        // đã nhận hàng
        function updateTT_DH($id)
        {
                $sql = "UPDATE donhang SET TrangThai=2 WHERE idDH='$id'";
                $this->execute($sql);
        }
        // xóa đơn hàng
        function DeleteDH($id)
        {
                $sql = "DELETE FROM donhang WHERE idDH='$id'";
                $this->execute($sql);
        }
        // hủy đơn hàng
        function Huy_DH($id)
        {
                $sql = "UPDATE donhang SET AnHien=0 WHERE idDH='$id'";
                $this->execute($sql);
        }
}
