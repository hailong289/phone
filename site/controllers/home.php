<?php
require_once "models/models-home.php";
require_once "PHPMailer-master/src/PHPMailer.php";
require_once "PHPMailer-master/src/SMTP.php";
class home
{
  function __construct()
  {
    $this->model = new models_home;
    $this->mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $act = "index";
    if (isset($_GET['act']) == true) $act = $_GET['act'];
    switch ($act) {
      case 'index':
        $this->index();
        break;
      case 'cat':
        $this->cat();
        break;
      case 'cart':
        $this->cart();
        break;
      case 'chitiet':
        $this->detail();
        break;
      case 'showcart':
        $this->showcart();
        break;
      case 'login':
        $this->login();
        break;
      case 'dangky':
        $this->formdangky();
        break;
      case 'dn':
        $this->checklogin();
        break;
      case 'savetk':
        $this->saveTT_tk();
        break;
      case 'logout';
        $this->logout();
        break;
      case 'deletecart':
        $this->deletecart();
        break;
      case 'updatecart':
        $this->updatecart();
        break;
      case 'binhluan':
        $this->comment();
        break;
      case 'thongtintk':
        $this->account();
        break;
      case 'savethongtin':
        $this->saveaccount();
        break;
        // case 'checkdoimk':
        //   $this->checkdoimk();
        //   break;
      case 'doimk':
        $this->doimk();
        break;
      case 'quenmatkhau':
        $this->quenmk();
        break;
      case 'checkout':
        $this->checkout();
        break;
      case 'dathang':
        $this->dathang();
        break;
      case 'donhang':
        $this->showdh();
        break;
      case 'xacthuc':
        $this->xacthuc();
        break;
        // case 'guimail':
        //   $this->guimail();
        //   break;
      case 'kiemloi':
        $this->error();
        break;
      case 'kichhoat':
        $this->kichhoat();
        break;
      case 'search':
        $this->search();
        break;
      case 'timkiem':
        $this->timkiem();
        break;
    }
  }
  function Url($string)
  {
    $string = trim($string);
    $string = str_replace(' ', '-', $string);
    $unicode = array(
      'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
      'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
      'd' => 'đ', 'D' => 'Đ',
      'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
      'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
      'i' => 'í|ì|ỉ|ĩ|ị', 'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
      'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
      'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
      'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
      'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
      'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
      'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
    );
    foreach ($unicode as $khongdau => $codau) {
      $arr = explode("|", $codau);
      $string = str_replace($arr, $khongdau, $string);
    }
    $string = str_replace('(', '', $string);
    $string = str_replace(')', '', $string);
    $string = str_replace('/', '', $string);
    return $string;
  }
  function index()
  {
    $title = "Trang chủ";
    $nsx = $this->model->getallNsx();
    $Ds_dt = $this->model->DS_dt();
    $SP_xn = $this->model->DT_XN();
    $SP_bc = $this->model->DT_BC();
    $view = "view/home.php";
    require_once "view/layout.php";
    //   echo __METHOD__;
  }
  function cat()
  {
    $title = "Danh sách sản phẩm";
    $nsx = $this->model->getallNsx();
    // $Ds_dt = $this->model->DS_dt();
    $page_num = 1;
    if (isset($_GET['page']) == true) $page_num = $_GET['page'];
    $page_size = page_dt;
    if (isset($_GET['id']) == true) {
      $id = $_GET['id'];
      $DT = $this->model->GetDTByNsx($page_num, $page_size, $id);
      $tennsx = $this->model->XemTenNSX($id);
      $total_row = $this->model->DemSL_dtBynxs($id);
      $bath_links =  "nhasx/".$this->Url($tennsx)."-".$id;
      $links = $this->model->taoLinks($page_num, $page_size, $total_row, $bath_links);
    } elseif (isset($_GET['search'])) {
      $search = $_GET['search'];
      $DT = $this->model->GetDSTimkiem($page_num, $page_size, $search);
      $total_row = $this->model->DemSL_dtTimkiem($search);
      $bath_links = "key=".$this->Url($search)."";
      $links = $this->model->taoLinks($page_num, $page_size, $total_row, $bath_links);
    } else {
      $DT = $this->model->GetDT($page_num, $page_size);
      $total_row = $this->model->DemSL_DT();
      $bath_links = "san-pham";
      $links = $this->model->taoLinks($page_num, $page_size, $total_row, $bath_links);
    }
    // $SP_xn = $this->model->DT_XN();
    // $SP_bc = $this->model->DT_BC();
    $view = "view/cat.php";
    require_once "view/layout.php";
  }
  // Tìm kiếm
  function search()
  {
    $title = "Danh sách sản phẩm";
    $nsx = $this->model->getallNsx();
    $search = $_POST['ten_dt'];
    $page_num = 1;
    if (isset($_GET['page']) == true) $page_num = $_GET['page'];
    $page_size = page_dt;
    if ($search != null) {
      $DT = $this->model->GetDSTimkiem($page_num, $page_size, $search);
      $total_row = $this->model->DemSL_dtTimkiem($search);
      $bath_links =  "key=".$this->Url($search)."";
      $links = $this->model->taoLinks($page_num, $page_size, $total_row, $bath_links);
    } else {
      $nosp = 'Không tìm thấy sản phẩm';
    }
    $view = "view/cat.php";
    require_once "view/layout.php";
  }
  function timkiem()
  {
    if (isset($_GET['timkiem'])) {
      $search = $_GET['timkiem'];
      $DT = $this->model->GetDSTimkiemAJAX($search);
      if ($DT) {
        $hihi = '<table class="table"><tbody>';
        foreach ($DT as $dt) {
          $hihi .= '
        <tr>
          <td scope="row"><img src="./uploaded/' . $dt['urlHinh'] . '" alt="" width="70px"></td>
          <td> <a href="?act=cat&search=' .$dt['TenDT'] . '"  style="color: black!important;">' . $dt['TenDT'] . '</a></td></tr>';
        }
        $hihi .= '</tbody></table>';
        echo $hihi;
      } else {
        echo "<p class='text-center mt-2'>Không có kết quả nào cho từ khóa " . $search . "</p>";
      }
    }
  }
  function detail()
  {
    $title = "Sản phẩm chi tiết";
    $id = $_GET['id'];
    $nsx = $this->model->getallNsx();
    $dt = $this->model->GetDTbyID($id);
    $this->model->updateLuotxem($id);
    $sp_lq = $this->model->SP_lq();
    $tt = $this->model->GetttDT($id);
    $bl = $this->model->getBinhLuanByIDDT($id);
    $countbl = $this->model->CountBinhluan($id);
    $view = "view/chitiet.php";
    require_once "view/layout.php";
  }
  function login()
  {
    // $id = $_GET['id'];
    // $tk = $this->model->getUserByID($id);
    $viewlogin = "view/formlogin.php";
    require_once "view/login.php";
  }
  function checklogin()
  {
    $tendn = $_POST['tendn'];
    $mk = $_POST['mk'];
    $mk = md5($mk);
    $checktk = $this->model->checklogin($tendn, $mk);
    if ($checktk) {
      if ($checktk['VaiTro'] == 0 && $checktk['KichHoat'] == 1) {
        $_SESSION['user'] = $checktk['Username'];
        $_SESSION['id'] = $checktk['idUser'];
        $_SESSION['mess'] = "Đăng nhập thành công";
        header('location: trang-chu');
      } else {
        $_SESSION['mess'] = "Tài khoản của bạn chưa được kích hoạt";
        header('location: dang-nhap');
      }
    } else {
      $_SESSION['mess'] = "Đăng nhập thất bại";
      header('location: dang-nhap');
    }
  }
  function logout()
  {
    session_destroy();
    header('location: trang-chu');
  }
  function formdangky()
  {
    $title = "Đăng ký";
    $viewlogin = "view/dangky.php";
    require_once "view/login.php";
  }
  function saveTT_tk()
  {
    $tendn = $_POST['tendn'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $mk = $_POST['mk'];
    $regexmk = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/"; // Tối thiểu 6 ký tự, ít nhất một chữ cái và một số
    $hihi = true;
    // kiểm lỗi tên đăng nhập
    if ($tendn == null) {
      $hihi = false;
      $error_user = "<p class='text-danger pl-3'>Không để trống</p>";
    } elseif ($this->model->CheckIDUSer($tendn)) {
      $hihi = false;
      $error_user = "<p class='text-danger pl-3'>Tên tài khoản đã tồn tại</p>";
    } else {
      $error_user = null;
    }
    // kiểm lỗi họ tên
    if ($hoten == null) {
      $hihi = false;
      $error_ht =  "<p class='text-danger pl-3'>Không để trống</p>";
    } else {
      $error_ht = null;
    }
    // kiểm lỗi email
    if ($email == null) {
      $hihi = false;
      $error_email =  "<p class='text-danger pl-3'>Không để trống</p>";
    } elseif (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email) == false) {
      $hihi = false;
      $error_email =  "<p class='text-danger pl-3'>Email không hợp lệ</p>";
    } elseif ($this->model->CheckEmail2($email)) {
      $hihi = false;
      $error_email =  "<p class='text-danger pl-3'>Email đã tồn tại</p>";
    } else {
      $error_email = null;
    }
    // kiểm lỗi tmật khẩu
    if ($mk == null) {
      $hihi = false;
      $error_pass =  "<p class='text-danger pl-3'>Không để trống</p>";
    } elseif (preg_match($regexmk, $mk) == false) {
      $hihi = false;
      $error_pass =  "<p class='text-danger pl-3'>Mật khẩu phải có 1 số và tối thiểu 6 ký tự</p>";
    } else {
      $error_pass = null;
    }
    if ($hihi == false) {
      // echo $tendn . $hoten . $email . $mk;
      $viewlogin = "view/dangky.php";
      require_once "view/login.php";
    } else {
      $mk = md5($mk);
      $idUser = $this->model->SaveTT_User($tendn, $hoten, $email, $mk);
      // $rand = mt_rand(10000, 99999);
      $mail = $this->mail; //true: enables exceptions
      try {
        $mail->SMTPDebug = 0;  // Enable verbose debug output
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'longdhai2@gmail.com';  // SMTP username
        $mail->Password = 'hailong289';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('longdhai2@gmail.com', 'long');
        $mail->addAddress($email, $user); //mail và tên người nhận       
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Kích hoạt tài khoản';
        // $linKH = sprintf($linkKH, $idUser);
        $mail->Body = "<h4>Nhấn <a href='http://hailong.com/PHP2/assiment/site/?act=kichhoat&id=" . $idUser . "'>vào đây</a> để kích hoạt tài khoản của bạn</h4>";
        $mail->send();
        $message = 'kích hoạt tài khoản !';
      } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
      }
      $title = "Xác thực";
      $_SESSION['xacthuc'] = "Kiểm tra email của bạn để lấy mã";
      header('location: dang-nhap');
    }
  }
  // kích hoạt tài khoản
  function kichhoat()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $this->model->UpdateTrangThai($id);
      // unset($_SESSION['opt']);
      $_SESSION['kh'] = "Kích hoạt thành công";
      header('location: ?act=login&id=' . $id . '');
      // require_once 'view/kichhoat-opt.php';
    }
  }
  function cart()
  {
    if (isset($_GET['id']) == true) {
      $sl = 1;
      $id = $_GET['id'];
      $DT = $this->model->GetDTbyID($id);
      $newProduct[$id] = $DT;
      if (!isset($_SESSION['cart']) && $_SESSION['cart'] == null) {
        $newProduct[$id]['sl'] = $sl;
        $_SESSION['cart'][$id] = $newProduct[$id];
      } else {
        if (array_key_exists($id, $_SESSION['cart'])) {
          $_SESSION['cart'][$id]['sl'] += 1;
          // $_SESSION['cart'] = $newProduct; 
        } else {
          $newProduct[$id]['sl'] = $sl;
          $_SESSION['cart'][$id] = $newProduct[$id];
        }
      }
      header('location: gio-hang');
    } else {
      $id = $_POST['ma_sp'];
      $sl = $_POST['sl'];
      $DT = $this->model->GetDTbyID($id);
      $newProduct[$id] = $DT;
      if (!isset($_SESSION['cart']) && $_SESSION['cart'] == null) {
        $newProduct[$id]['sl'] = $sl;
        $_SESSION['cart'][$id] = $newProduct[$id];
      } else {
        if (array_key_exists($id, $_SESSION['cart'])) {
          $_SESSION['cart'][$id]['sl'] += 1;
          // $_SESSION['cart'] = $newProduct; 
        } else {
          $newProduct[$id]['sl'] = $sl;
          $_SESSION['cart'][$id] = $newProduct[$id];
        }
      }
      header('location: gio-hang');
    }



    // session_destroy();
    // echo "<pre>";
    // print_r($_SESSION['cart']);
  }
  function showcart()
  {
    $title = "Giỏ hàng";
    $nsx = $this->model->getallNsx();
    $view = 'view/showcart.php';
    require_once "view/layout.php";
  }
  function deletecart()
  {
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    // session_destroy();
    header('location: gio-hang');
  }
  function updatecart()
  {
    $sl = $_POST['sl'];
    print_r($sl);
    foreach ($sl as $key => $val) {
      $_SESSION['cart'][$key]['sl'] = $val;
    }
    header('location: gio-hang');
  }
  // n=bình luận
  function comment()
  {
    $idDT = $_POST['idDT'];
    $idUser = $_POST['idUser'];
    $nd = $_POST['nd'];
    // echo $idDT . $idUser . $nd;
    // date_default_timezone_set('Asia/Ho_Chi_Minh');
    // $date = date('Y/m/d - H:i:s');
    $this->model->Savecomment($idDT, $idUser, $nd);
    // echo $idDT;
    // header('location: ?act=chitiet&id=' . $idDT . '');
  }
  function account()
  {
    $title = "Thông tin tài khoản";
    $user = $this->model->getUserByID($_SESSION['id']);
    $view = "view/thongtintk.php";
    require_once "view/layout.php";
  }
  function saveaccount()
  {
    $hoten = $_POST['hoten'];
    $idUser = $_POST['idUser'];
    $tentk = $_POST['tentk'];
    $email = $_POST['email'];
    $pathimg = "../uploaded/";
    if ($_FILES['img']['name'] != null) {
      $hinh = $_FILES['img']['name'];
      $file = $pathimg . basename($hinh);
      move_uploaded_file($_FILES["img"]["tmp_name"], $file);
    } else {
      $hinh = null;
    }

    // echo $hoten . " " . $idUser ." " . $tentk. " " . $email . " " . $hinh;
    $this->model->CapnhatThongtinTK($hoten, $idUser, $tentk, $email, $hinh);
    if (isset($_SESSION['user'])) {
      $user = $this->model->getUserByID($idUser);
      $_SESSION['user'] = $user['Username'];
    }
    $_SESSION['tttk'] = "Thay đổi thông tin thành công";
    header("location: Thong-tin");
  }
  function quenmk()
  {

    if (isset($_GET['id'])) {
      $title = 'Quên mật khẩu';
      $id = $_GET['id'];
      $viewlogin = 'view/doiqmk.php';
      require_once 'view/login.php';
    }
    if (isset($_GET['what'])) {
      $what = $_GET['what'];
      $regexmk = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/"; // Tối thiểu 6 ký tự, ít nhất một chữ cái và một số
      if ($what == "mkmoi") {
        $mk = $_POST['mk'];
        $repass = $_POST['repass'];
        $id = $_POST['ma_tk'];
        if ($mk == null) {
          $error = "Không để trống";
        } elseif (preg_match($regexmk, $mk) == false) {
          $error = "Mật khẩu ít nhất 6 ký tự chữ cái và 1 số";
        } else {
          $error = null;
        }
        if ($repass == null) {
          $_error_re = "Không để trống";
        } elseif ($repass != $mk) {
          $_error_re = "Mật khẩu mới không trung khớp";
        } else {
          $_error_re == null;
        }
        if ($error == null && $_error_re == null) {
          $_SESSION['kh'] = 'Đăng nhập ngay nào :))';
          $passnew = md5($mk);
          $this->model->updateMKmoi($passnew, $id);
          header('location: dang-nhap');
        }
        $title = "Quên mật khẩu";
        $viewlogin = 'view/doiqmk.php';
        require_once 'view/login.php';
      }
    }
    // $view = '';
    if ($_POST != null) {
      $email = $_POST['email'];
      $checkemail = $this->model->getUserByEmail($email);
      // $checkemail = $this->model->checkEmailDMK($email);
      // echo $checkemail;
      if ($email == null) {
        $error = 'Không để trống';
      } elseif (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email) == false) {
        $error = 'Email không hợp lệ';
      } elseif (!is_array($checkemail)) {
        $error = "Email không tồn tại";
      } else {
        $idUser = $checkemail['idUser'];
        $rand = mt_rand(10000, 99999);
        $mail = $this->mail; //true: enables exceptions
        try {
          $mail->SMTPDebug = 0;  // Enable verbose debug output
          $mail->isSMTP();
          $mail->CharSet  = "utf-8";
          $mail->Host = 'smtp.gmail.com';  //SMTP servers
          $mail->SMTPAuth = true; // Enable authentication
          $mail->Username = 'longdhai2@gmail.com';  // SMTP username
          $mail->Password = 'hailong289';   // SMTP password
          $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
          $mail->Port = 465;  // port to connect to                
          $mail->setFrom('longdhai2@gmail.com', 'long');
          $mail->addAddress($email, $user); //mail và tên người nhận       
          $mail->isHTML(true);  // Set email format to HTML
          $mail->Subject = 'Xác thực';
          // $linKH = sprintf($linkKH, $idUser);
          $mail->Body = "<h4>Mã của bạn là: " . $rand . "</h4>";
          $mail->send();
          $message = 'kích hoạt tài khoản !';
        } catch (Exception $e) {
          echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
        $title = "Xác thực";
        $_SESSION['mess'] = "Kiểm tra email của bạn để lấy mã";
        $_SESSION['opt'] = $rand;
        // $viewlogin = "view/xacthucopt.php";
        // require_once "view/layout.php";
        header('location: xac-thuc-' . $idUser . '');
      }
    }
    $title = "Quên mật khẩu";
    $viewlogin = "view/quenmatkhau.php";
    require_once 'view/login.php';
  }
  function checkdoimk()
  {

    $title = "Đổi mật khẩu";
    $view = "view/checkdoimk.php";
    require_once "view/layout.php";
  }
  // gưi mail
  // function guimail()
  // {
  //   $email = $_POST['email'];
  //   $id = $_POST['id'];
  //   $user = "MobileShop";
  //   // $rand = mt_rand(10000, 99999);
  //   if ($email == null) {
  //     $_error = "Không để trống";
  //   } elseif (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email) == false) {
  //     $_error = "Email không hợp lệ";
  //   } else {
  //     $_error = null;
  //   }
  //   if ($_error == null) {
  //     $checkemail = $this->model->CheckEmail($email, $id);
  //     if (is_array($checkemail)) {
  //       $rand = mt_rand(10000, 99999);
  //       $mail = $this->mail; //true: enables exceptions
  //       try {
  //         $mail->SMTPDebug = 0;  // Enable verbose debug output
  //         $mail->isSMTP();
  //         $mail->CharSet  = "utf-8";
  //         $mail->Host = 'smtp.gmail.com';  //SMTP servers
  //         $mail->SMTPAuth = true; // Enable authentication
  //         $mail->Username = 'longdhai2@gmail.com';  // SMTP username
  //         $mail->Password = 'hailong289';   // SMTP password
  //         $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
  //         $mail->Port = 465;  // port to connect to                
  //         $mail->setFrom('longdhai2@gmail.com', 'long');
  //         $mail->addAddress($email, $user); //mail và tên người nhận       
  //         $mail->isHTML(true);  // Set email format to HTML
  //         $mail->Subject = 'Xác thực';
  //         // $linKH = sprintf($linkKH, $idUser);
  //         $mail->Body = "<h4>Mã của bạn là: " . $rand . "</h4>";
  //         $mail->send();
  //         $message = 'kích hoạt tài khoản !';
  //       } catch (Exception $e) {
  //         echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
  //       }
  //       $title = "Xác thực";
  //       $_SESSION['mess'] = "Kiểm tra email của bạn để lấy mã";
  //       $_SESSION['opt'] = $rand;
  //       $view = "view/xacthucopt.php";
  //       require_once "view/layout.php";
  //     } else {
  //       $_error = "Email không tồn tại hoặc đã được sử dụng";
  //     }
  //   }
  //   $title = "Đổi mật khẩu";
  //   $view = "view/checkdoimk.php";
  //   require_once "view/layout.php";
  // }
  // xac thuc
  function xacthuc()
  {

    if (isset($_SESSION['opt'])) $otp1 = $_SESSION['opt'];
    if (isset($_GET['id']))  $id = $_GET['id'];
    if ($_POST != null) {
      $opt = $_POST['xacthuc'];
      $id = $_POST['id'];
      if ($otp1 == $opt) {
        $_SESSION['mess'] = "Xác thực thành công";
        unset($_SESSION['opt']);
        header('location: doi-passquen-' . $id . '');
      } else {
        // header('location: ?act=checkdoimk');
        $title = "Xác thực";
        $_error = "Mã không đúng";
        $viewlogin = "view/xacthucopt.php";
        require_once 'view/login.php';
      }
    }
    $title = "Xác thực";
    $viewlogin = "view/xacthucopt.php";
    require_once 'view/login.php';
  }
  function doimk()
  {
    $title = "Đổi mật khẩu";
    if (isset($_POST['doimatkhau'])) {
      $mkcu = $_POST['mkcu'];
      $idUser = $_SESSION['id'];
      $passnew = $_POST['passnew'];
      $repass = $_POST['repassnew'];
      $mkcu = md5($mkcu);

      // if ($mkcu == null) {
      //   $hihi = false;
      //   $_error_mkcu = "<p class='text-danger'>Không để trống</p>";
      // }
      $checkmk = $this->model->CheckMatkhau($mkcu, $idUser);
      // print_r($checkmk);
      // echo $idUser;
      if ($checkmk) {
        $hihi = true;
        if ($passnew == null) {
          $hihi = false;
          $_error_mknew = "<p class='text-danger'>Không để trống</p>";
        }
        if ($repass == null) {
          $hihi = false;
          $_error_mkrenew = "<p class='text-danger'>Không để trống</p>";
        }
        if ($hihi != false) {
          if ($passnew == $repass) {
            $passnew = md5($passnew);
            $this->model->updateMKmoi($passnew, $idUser);
            $_SESSION['tttk'] = "Đổi mật khẩu thành công";
            header('location: Thong-tin');
          } else {
            $_error_mk = "<p class='text-danger'>Mật khẩu mới không trùng khớp</p>";
          }
        }
      } else {
        $_error_new = "<p class='text-danger'>Mật khẩu không trùng khớp</p>";
      }
    }
    $view = 'view/doimk.php';
    require_once "view/layout.php";
  }
  function checkout()
  {
    $title = "Đặt hàng";
    $view = 'view/checkout.php';
    require_once 'view/layout.php';
  }
  function dathang()
  {
    $hoten = $_POST['hoten'];
    $diachi = $_POST['tend'] . "," . $_POST['tenpx'] . "," . $_POST['tenqh'] . "," . $_POST['tp'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $idUser = $_SESSION['id'];
    $ghichu = $_POST['ct'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    $regex = '/^\(?(0[0-9]{3})\)?([ .-]?)([0-9]{2})?([ .-]?)([0-9]{2})?([ .-]?)([0-9]{2})$/';
    // kiểm lỗi
    if ($hoten == null) {
      $error_ht = "<p class='text-danger'>Không để trống</p>";
    } else {
      $error_ht = null;
    }
    //dia chi
    if ($_POST['tend'] == null && $_POST['tenpx'] == null && $_POST['tenqh'] == null && $_POST['tp'] == null) {
      $error_diachi = "<p class='text-danger'>Không để trống</p>";
    } else {
      $error_diachi = null;
    }
    //sdt
    if ($sdt == null) {
      $error_sdt = "<p class='text-danger'>Không để trống</p>";
    } elseif (preg_match($regex, $sdt) == false) {
      $error_sdt = "<p class='text-danger'>Số điện thoại không hợp lệ</p>";
    } else {
      $error_sdt = null;
    }
    // email
    if ($email == null) {
      $error_email = "<p class='text-danger'>Không để trống</p>";
    } elseif (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email) == false) {
      $error_email = "<p class='text-danger'>Email không hợp lệ</p>";
    } else {
      $error_email = null;
    }
    if ($error_ht == null && $error_diachi == null && $error_sdt == null & $error_email == null) {
      if (isset($_SESSION['idDH'])) $idDH = $_SESSION['idDH'];
      else $idDH = -1;
      $idDH = $this->model->InsertDH($idDH, $hoten, $diachi, $sdt, $email, $ghichu, $date, $idUser);
      if ($idDH) {
        // setcookie('idDH', $idDH, time() + (86400 * 30), "/");
        $_SESSION['idDH'] = $idDH;
        foreach ($_SESSION['cart'] as $gh) {
          $this->model->updateLuotMua($gh['idDT']);
          $this->model->DHchitiet($idDH, $gh['idDT'], $gh['Gia'], $gh['sl'], $gh['TenDT'], $gh['urlHinh']);
        }
      }
      $_SESSION['dhtc'] = "Cảm ơn bạn đã mua hàng";
      unset($_SESSION['cart']);
      header('location: don-hang');
    } else {
      $title = "Đặt hàng";
      $view = 'view/checkout.php';
      require_once 'view/layout.php';
    }
  }
  function showdh()
  {
    $title = "Đơn hàng";
    $dh = $this->model->getDHByidUser($_SESSION['idDH']);
    // $dt = $this->model->getAllDT();
    // $tt = $this->model->getDHByDhct($dh['idDH']);
    if (isset($_GET['idnh'])) {
      $id = $_GET['idnh'];
      $this->model->updateTT_DH($id);
      header('location: don-hang');
    }
    if (isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $this->model->DeleteDH($id);
      header('location: don-hang');
    }
    if (isset($_GET['huydh'])) {
      $id = $_GET['huydh'];
      $this->model->Huy_DH($id);
      header('location: don-hang');
    }
    $view = "view/donhang.php";
    require_once "view/layout.php";
  }
  // kiểm lỗi
  function error()
  {
    if (isset($_GET['tentk'])) {
      $user = $_GET['tentk'];
      if ($user == null) {
        echo "<p class='text-danger ml-3'>Không để trống</p>";
      } elseif ($this->model->DEMsl_user($user)) {
        echo "<p class='text-danger ml-3'>Tên tài khoản đã tồn tại</p>";
      } else {
        echo '';
      }
    }
    if (isset($_GET['hoten'])) {
      $hoten = $_GET['hoten'];
      if ($hoten == null) {
        echo "<p class='text-danger ml-3'>Không để trống</p>";
      }
    }
    if (isset($_GET['email'])) {
      $email = $_GET['email'];
      if ($email == null) {
        echo "<p class='text-danger ml-3'>Không để trống</p>";
      } elseif (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email) == false) {
        echo "<p class='text-danger pl-3'>Email không hợp lệ</p>";
      } elseif ($this->model->CheckEmail2($email)) {
        echo  "<p class='text-danger pl-3'>Email đã tồn tại</p>";
      } else {
        echo '';
      }
    }
    if (isset($_GET['pass'])) {
      $mk = $_GET['pass'];
      $regexmk = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";
      if ($mk == null) {
        echo  "<p class='text-danger pl-3'>Không để trống</p>";
      } elseif (preg_match($regexmk, $mk) == false) {
        echo  "<p class='text-danger pl-3'>Mật khẩu phải có 1 số và tối thiểu 6 ký tự</p>";
      } else {
        echo '';
      }
    }
  }
}
