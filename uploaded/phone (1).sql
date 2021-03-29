-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 31, 2021 lúc 03:46 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idBL` int(11) NOT NULL COMMENT 'Mã bình luận',
  `NoiDungBL` varchar(2000) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Nôi dung bình luận',
  `idDT` int(11) DEFAULT NULL COMMENT 'Mã điện thoại',
  `idUser` int(11) DEFAULT NULL COMMENT 'Mã người dùng',
  `ThoiDiemBL` datetime DEFAULT NULL COMMENT 'Thời điểm bình luận',
  `AnHien` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Ẩn Hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idBL`, `NoiDungBL`, `idDT`, `idUser`, `ThoiDiemBL`, `AnHien`) VALUES
(1, 'Sản phẩm này còn không', 42, 12, '2021-01-30 21:00:18', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `idDT` int(11) NOT NULL COMMENT 'id điện thoại',
  `TenDT` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên điện thoại',
  `Gia` float DEFAULT NULL COMMENT 'Giá gốc',
  `GiaKM` float DEFAULT NULL COMMENT 'Giá khuyến mãi',
  `urlHinh` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Hình',
  `ThoiDiemNhap` datetime DEFAULT NULL COMMENT 'Thời điểm nhập',
  `MoTa` varchar(4000) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Mô tả',
  `SoLanXem` int(11) NOT NULL DEFAULT 0 COMMENT 'số lần xem',
  `SoLanMua` int(11) NOT NULL DEFAULT 0 COMMENT 'Số lần mua',
  `Hot` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Hót',
  `idNSX` int(11) DEFAULT NULL COMMENT 'Id nhà sản xuất',
  `AnHien` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Ẩn hiện',
  `SoLuongTonKho` int(11) NOT NULL DEFAULT 0 COMMENT 'Số lượng tồn kho'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`idDT`, `TenDT`, `Gia`, `GiaKM`, `urlHinh`, `ThoiDiemNhap`, `MoTa`, `SoLanXem`, `SoLanMua`, `Hot`, `idNSX`, `AnHien`, `SoLuongTonKho`) VALUES
(19, 'Oppo a-93', 12000000, 7500000, 'oppo-a93.jpg', '2021-01-20 00:00:00', '', 206, 0, 0, 1, 1, 0),
(20, 'Iphone 12', 20000000, 15500000, 'iphone12-mini-64gb.jpg', '0000-00-00 00:00:00', '&nbsp;', 6, 0, 0, 2, 1, 0),
(26, 'Điện thoại Samsung Galaxy A12 (6GB/128GB)', 4190000, 0, 'samsung-galaxy-a12-trang-600x600-600x600.jpg', '2021-01-21 00:00:00', 'G&acirc;y ấn tượng với bộ tứ camera thời thượng, hiệu năng ổn định mang đến sự mượt m&agrave; trong mọi t&aacute;c vụ, c&ugrave;ng thời lượng pin ấn tượng,&nbsp;Samsung Galaxy A12&nbsp;(6GB/128GB)&nbsp;sẽ l&agrave; mẫu&nbsp;smartphone&nbsp;đ&aacute;ng mua nhất trong ph&acirc;n kh&uacute;c tầm trung gi&aacute; rẻ của&nbsp;Samsung.', 506, 2, 1, 1, 1, 10),
(27, 'Điện thoại Samsung Galaxy Z Fold2 5G', 50000000, 0, 'samsung-galaxy-z-fold-2-vang-dong-600x600.jpg', '0000-00-00 00:00:00', 'Đặc điểm nổi bật của Samsung Galaxy Z Fold2 5G\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n\r\n\r\n\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n&nbsp;\r\n\r\n\r\n\r\n\r\n\r\n\r\nSamsung Galaxy Z Fold 2&nbsp;l&agrave; t&ecirc;n gọi ch&iacute;nh thức của&nbsp;điện thoại&nbsp;m&agrave;n h&igrave;nh gập cao cấp nhất của&nbsp;Samsung. Với nhiều n&acirc;ng cấp ti&ecirc;n phong về thiết kế, hiệu năng v&agrave; camera, hứa hẹn đ&acirc;y sẽ l&agrave; một si&ecirc;u phẩm th&agrave;nh c&ocirc;ng tiếp theo đến từ &ldquo;&ocirc;ng tr&ugrave;m&rdquo; sản xuất điện thoại lớn nhất thế giới.', 106, 0, 0, 1, 1, 0),
(28, 'Điện thoại Samsung Galaxy Z Flip', 36000000, 33000000, 'samsung-galaxy-z-flip-600x600-1-600x600.jpg', '0000-00-00 00:00:00', 'Cuối c&ugrave;ng sau bao nhi&ecirc;u thời gian chờ đợi, chiếc điện thoại&nbsp;Samsung Galaxy Z Flip&nbsp;đ&atilde; được&nbsp;Samsung ra mắt tại sự kiện&nbsp;Unpacked 2020. Si&ecirc;u phẩm với thiết kế m&agrave;n h&igrave;nh gập vỏ s&ograve; độc đ&aacute;o, hiệu năng tuyệt đỉnh c&ugrave;ng nhiều c&ocirc;ng nghệ thời thượng, dẫn dầu 2020.', 56, 0, 0, 1, 1, 0),
(31, 'Điện thoại Samsung Galaxy Note 20 Ultra 5G', 32900000, 29000000, 'sam-sung-note-20-ultra-vang-dong-600x600.jpg', '0000-00-00 00:00:00', 'Samsung Galaxy Note 20 Ultra 5G, m&acirc;̃u&nbsp;đi&ecirc;̣n thoại&nbsp;flagship cao c&acirc;́p thu&ocirc;̣c dòng Note của Samsung, ra mắt th&aacute;ng 8/2020 với diện mạo thay đổi cùng những n&acirc;ng cấp đột ph&aacute;, đ&acirc;y chắc chắn sẽ là sản ph&acirc;̉m được săn l&ugrave;ng từ những người d&ugrave;ng y&ecirc;u thích c&ocirc;ng nghệ cũng như y&ecirc;u th&iacute;ch&nbsp;smartphone Samsung.', 6, 0, 0, 1, 1, 0),
(33, 'Điện thoại Samsung Galaxy Note 10+', 17990000, 15990000, 'sam-sung-note-20-ultra-vang-dong-600x600.jpg', '0000-00-00 00:00:00', 'Tr&ocirc;ng ngoại h&igrave;nh kh&aacute; giống nhau, tuy nhi&ecirc;n&nbsp;Samsung Galaxy Note 10+&nbsp;sở hữu kh&aacute; nhiều điểm kh&aacute;c biệt so với&nbsp;Galaxy Note 10&nbsp;v&agrave; đ&acirc;y được xem l&agrave; một trong những chiếc m&aacute;y đ&aacute;ng mua nhất trong năm 2019, đặc biệt d&agrave;nh cho những người th&iacute;ch một chiếc m&aacute;y m&agrave;n h&igrave;nh lớn, camera chất lượng h&agrave;ng đầu.', 6, 0, 1, 1, 1, 0),
(35, 'Điện thoại Samsung Galaxy S20', 17449000, 17349000, 'ss1.jpg', '0000-00-00 00:00:00', 'Chiếc điện thoại Samsung Galaxy S20 được trang bị một m&agrave;n h&igrave;nh k&iacute;ch thước 6.2 inch độ ph&acirc;n giải 2K sử dụng tấm nền Dynamic AMOLED 2X mới nhất từ nh&agrave; sản xuất&nbsp;Samsung. M&agrave;n h&igrave;nh n&agrave;y cho khả năng t&aacute;i tạo m&agrave;u sắc đầy đủ v&agrave; ch&iacute;nh x&aacute;c, đem đến cho bạn những trải nghiệm h&igrave;nh ảnh sống động, ch&acirc;n thực đồng thời giảm lượng &aacute;nh s&aacute;ng xanh bảo vệ sức khỏe người d&ugrave;ng.', 6, 0, 1, 1, 1, 0),
(36, 'Điện thoại iPhone SE 256GB (2020)', 16900000, 13400000, 'ip1.jpg', '0000-00-00 00:00:00', 'iPhone SE 2020 c&oacute; thiết kế kh&aacute; nhỏ b&eacute; khi đặt cạnh c&aacute;c smartphone&nbsp;m&agrave;n h&igrave;nh khủng&nbsp;hiện nay, nhưng với những ai kh&ocirc;ng th&iacute;ch kiểu&nbsp;thiết kế tr&agrave;n viền&nbsp;v&agrave; m&agrave;n h&igrave;nh lớn, th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn tốt nhất cho họ. Với m&agrave;n h&igrave;nh 4.7 inch, viền m&agrave;n h&igrave;nh kh&aacute; d&agrave;y, c&ugrave;ng&nbsp;cảm biến v&acirc;n tay&nbsp;Touch ID, c&aacute;c cạnh bo cong ho&agrave;n hảo, iPhone SE 2020 mang lại cảm gi&aacute;c cầm nắm quen thuộc,&nbsp;k&iacute;ch thước nhỏ gọn để bạn sử dụng 1 tay một c&aacute;ch dễ d&agrave;ng.', 6, 0, 1, 2, 1, 0),
(37, 'Điện thoại Samsung Galaxy S10 Lite', 14990000, 13490000, 'ss2.jpg', '0000-00-00 00:00:00', 'Samsung Galaxy S10 Lite&nbsp;l&agrave; một phi&ecirc;n bản kh&aacute;c của d&ograve;ng&nbsp;Galaxy S10&nbsp;đ&atilde; ra mắt trước đ&oacute; nhưng mang trong m&igrave;nh kh&aacute; nhiều kh&aacute;c biệt về ngoại h&igrave;nh cũng như b&ecirc;n trong. Ngoại h&igrave;nh nổi bật dễ nhận biết Mặc d&ugrave; c&oacute; t&ecirc;n gọi l&agrave;&nbsp;S10 Lite nhưng ngoại h&igrave;nh của chiếc m&aacute;y n&agrave;y mang kh&aacute; nhiều thay đổi so với d&ograve;ng S10 trước đ&oacute;. Đầu ti&ecirc;n bạn sẽ dễ nhận thấy l&agrave; tr&ecirc;n&nbsp;m&agrave;n h&igrave;nh Infinity-O th&igrave; camera selfie được đặt ở ch&iacute;nh giữa thay v&igrave; lệch về g&oacute;c tr&aacute;i như tr&ecirc;n S10', 6, 0, 1, 1, 1, 0),
(38, 'Điện thoại Samsung Galaxy Note 10 Lite', 11480000, 11300000, 'ss3.jpg', '0000-00-00 00:00:00', 'Sau bao đồn đo&aacute;n v&agrave; tr&ocirc;ng ng&oacute;ng th&igrave; cuối c&ugrave;ng \"người em &uacute;t\" trong series Note 10 cũng đ&atilde; ch&iacute;nh thức tr&igrave;nh l&agrave;ng với t&ecirc;n gọi&nbsp;Samsung Galaxy Note 10 Lite&nbsp;với những thay đổi nhất định về ngoại h&igrave;nh. Ngoại h&igrave;nh mới mẻ theo xu thế &nbsp; Samsung Galaxy Note 10 Lite nh&igrave;n chung vẫn sở hữu thiết kế quen thuộc của d&ograve;ng Note 10 series ở mặt trước với rất &iacute;t viền xung quanh, c&aacute;c g&oacute;c được bo tr&ograve;n, một camera selfie nằm trong lỗ đục ch&iacute;nh giữa.', 6, 0, 1, 1, 1, 0),
(39, 'Điện thoại Samsung Galaxy A71', 10400000, 8490000, 'ss4.jpg', '0000-00-00 00:00:00', 'Sau A51,&nbsp;Samsung&nbsp;tiếp tục ra mắt&nbsp;Galaxy A71&nbsp;l&agrave; đại diện kế tiếp thuộc thế hệ smartphone Galaxy A 2020. M&aacute;y được cải tiến với camera macro si&ecirc;u cận đột ph&aacute;, camera ch&iacute;nh l&ecirc;n đến 64 MP c&ugrave;ng thiết kế thời thượng v&agrave; cao cấp. M&agrave;n h&igrave;nh lớn, trải nghiệm tr&agrave;n viền cực đ&atilde; Galaxy A71 sở hữu&nbsp;m&agrave;n h&igrave;nh tr&agrave;n viền&nbsp;Infinity-O với r&atilde;nh camera được đặt ch&iacute;nh giữa tương tự như tr&ecirc;n flagship&nbsp;Note 10. Điểm cộng l&agrave; phần r&atilde;nh camera nay đ&atilde; được l&agrave;m rất nhỏ, &iacute;t g&acirc;y ch&uacute; &yacute;, cho trải nghiệm h&igrave;nh ảnh thoải m&aacute;i v&agrave; &iacute;t bị ph&acirc;n t&acirc;m hơn.', 6, 0, 0, 1, 1, 0),
(40, 'Điện thoại Samsung Galaxy A51', 8390000, 7890000, 'ss5.jpg', '0000-00-00 00:00:00', 'Đặc điểm nổi bật của Samsung Galaxy A51 (8GB/128GB) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, S&aacute;ch hướng dẫn, C&aacute;p, C&acirc;y lấy sim, Ốp lưng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Galaxy A51 8GB&nbsp;l&agrave; phi&ecirc;n bản n&acirc;ng cấp RAM của&nbsp;smartphone&nbsp;tầm trung đ&igrave;nh đ&aacute;m&nbsp;Galaxy A51&nbsp;từ&nbsp;Samsung. Sản phẩm nổi bật với thiết kế sang trọng, m&agrave;n h&igrave;nh Infinity-O c&ugrave;ng cụm 4 camera đột ph&aacute;. sản phẩm cũng l&agrave; Smartphone Android B&aacute;n Chạy Nhất Thế Giới Qu&yacute; 1/2020 (theo b&aacute;o c&aacute;o từ Strategy Analytics).', 6, 0, 0, 1, 1, 0),
(41, 'Điện thoại Samsung Galaxy A70', 7290000, 7190000, 'ss6.jpg', '2021-01-31 00:00:00', 'Samsung Galaxy A70&nbsp;l&agrave; một phi&ecirc;n bản ph&oacute;ng to của chiếc&nbsp;Samsung Galaxy A50&nbsp;đ&atilde; ra mắt trước đ&oacute; với nhiều cải tiến tới từ b&ecirc;n trong. M&agrave;n h&igrave;nh k&iacute;ch thước lớn, trải nghiệm \"đ&atilde; hơn\" Màn hình của chiếc Galaxy A70 có k&iacute;ch thước kh&aacute; lớn l&ecirc;n đ&ecirc;́n 6.7 inch đ&ocirc;̣ ph&acirc;n giải&nbsp;Full HD+&nbsp;tr&ecirc;n t&acirc;́m n&ecirc;̀n&nbsp;Super AMOLED.', 6, 0, 0, 1, 1, 0),
(42, 'Điện thoại Samsung Galaxy A50s', 6990000, 5980000, 'ss7.jpg', '2021-01-31 15:40:00', 'Nằm trong sứ mệnh n&acirc;ng cao khả năng cạnh tranh với c&aacute;c&nbsp;smartphone&nbsp;đến từ nhiều nh&agrave; sản xuất Trung Quốc, mới đ&acirc;y Samsung tiếp tục giới thiệu phi&ecirc;n bản&nbsp;Samsung Galaxy A50s&nbsp;với nhiều t&iacute;nh năng m&agrave; trước đ&acirc;y chỉ xuất hiện tr&ecirc;n d&ograve;ng cao cấp.', 6, 0, 0, 1, 1, 0),
(43, 'Điện thoại iPhone 12 Pro Max 512GB', 42990000, 40990000, 'ip2.jpg', '2021-01-31 15:47:08', 'iPhone 12 Pro Max 512GB&nbsp;- đẳng cấp từ t&ecirc;n gọi đến từng chi tiết. Ngay từ khi chỉ l&agrave; tin đồn th&igrave; chiếc&nbsp;smartphone&nbsp;n&agrave;y đ&atilde; l&agrave;m đứng ngồi kh&ocirc;ng y&ecirc;n bao &ldquo;fan cứng&rdquo; nh&agrave;&nbsp;Apple, với những n&acirc;ng cấp v&ocirc; c&ugrave;ng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt m&agrave; chưa một chiếc&nbsp;iPhone&nbsp;tiền nhiệm n&agrave;o c&oacute; được.', 6, 0, 1, 2, 1, 0),
(44, 'Điện thoại iPhone 12 Pro 512GB', 39990000, 37990000, 'ip3.jpg', '2021-01-31 15:47:20', 'Lại một si&ecirc;u phẩm nữa của series&nbsp;iPhone 12&nbsp;được&nbsp;Apple&nbsp;cho ra mắt trong sự kiện &ldquo;Hi Speed&rdquo; vừa qua, mang tr&ecirc;n m&igrave;nh c&aacute;c yếu tố của một si&ecirc;u phẩm với nhiều t&iacute;nh năng đặc biệt, hấp dẫn v&agrave; kh&ocirc;ng ai kh&aacute;c đ&oacute; ch&iacute;nh l&agrave;&nbsp;iPhone 12 Pro 512 GB.', 6, 0, 0, 2, 1, 0),
(45, 'Điện thoại iPhone 12 Pro Max 256GB', 37990000, 35990000, 'ip4.jpg', '2021-01-31 15:47:13', 'Chiếc điện thoại&nbsp;iPhone 12 Pro Max 256 GB&nbsp;l&agrave; mẫu smartphone sở hữu nhiều t&iacute;nh năng nổi bật với hệ thống camera chất lượng, hiệu năng vượt trội hay hỗ trợ kết nối 5G hứa hẹn sẽ l&agrave; mẫu sản phẩm mang lại cảm gi&aacute;c trải nghiệm tối ưu cho người d&ugrave;ng.', 6, 0, 0, 2, 1, 0),
(46, 'Điện thoại iPhone 11 256GB', 22990000, 21990000, 'ip5.jpg', '2021-01-31 15:50:45', 'iPhone 11 256GB&nbsp;l&agrave; chiếc m&aacute;y c&oacute; mức gi&aacute; \"dễ chịu\" trong bộ 3&nbsp;iPhone vừa được&nbsp;Apple&nbsp;giới thiệu v&agrave; nếu bạn muốn được trải nghiệm những n&acirc;ng cấp về camera mới hay hiệu năng h&agrave;ng đầu m&agrave; lại kh&ocirc;ng muốn bỏ ra qu&aacute; nhiều tiền th&igrave; đ&acirc;y thực sự l&agrave; lựa chọn h&agrave;ng đầu d&agrave;nh cho bạn', 6, 0, 0, 2, 1, 0),
(47, 'Điện thoại iPhone 11 128GB', 21990000, 19490000, 'ip6.jpg', '2021-01-31 15:52:49', 'Được xem l&agrave; phi&ecirc;n bản iPhone \"gi&aacute; rẻ\" trong bộ 3 iPhone mới ra mắt nhưng&nbsp;iPhone 11 128GB&nbsp;vẫn sở hữu cho m&igrave;nh rất nhiều ưu điểm m&agrave; hiếm c&oacute; một chiếc&nbsp;smartphone&nbsp;n&agrave;o kh&aacute;c sở hữu.', 6, 0, 0, 2, 1, 0),
(48, 'Điện thoại iPhone 11 64GB', 19990000, 17390000, 'ip7.jpg', '2021-01-31 15:54:49', 'Sau bao nhi&ecirc;u chờ đợi cũng như đồn đo&aacute;n th&igrave; cuối c&ugrave;ng Apple đ&atilde; ch&iacute;nh thức giới thiệu bộ 3 si&ecirc;u phẩm iPhone 11 mạnh mẽ nhất của m&igrave;nh v&agrave;o th&aacute;ng 9/2019. C&oacute; mức gi&aacute; rẻ nhất nhưng vẫn được n&acirc;ng cấp mạnh mẽ như chiếc&nbsp;iPhone Xr&nbsp;năm ngo&aacute;i, đ&oacute; ch&iacute;nh l&agrave; phi&ecirc;n bản&nbsp;iPhone 11 64GB.', 6, 0, 0, 2, 1, 0),
(49, 'Điện thoại iPhone XR 64GB', 13490000, 11990000, 'ip8.jpg', '2021-01-31 15:56:47', 'L&agrave; chiếc&nbsp;điện thoại iPhone&nbsp;c&oacute; mức gi&aacute; dễ chịu, ph&ugrave; hợp với nhiều kh&aacute;ch h&agrave;ng hơn,&nbsp;iPhone Xr vẫn được ưu &aacute;i trang bị chip Apple A12 mạnh mẽ, m&agrave;n h&igrave;nh tai thỏ c&ugrave;ng khả năng chống nước chống bụi.', 6, 0, 0, 2, 1, 0),
(50, 'Điện thoại iPhone SE 128GB (2020)', 12990000, 11790000, 'ip9.jpg', '2021-01-31 21:37:41', 'Sau bao ng&agrave;y chờ đợi,&nbsp;iPhone SE 2020&nbsp;cuối c&ugrave;ng đ&atilde; được ra mắt l&agrave;m thỏa m&atilde;n triệu t&iacute;n đồ T&aacute;o khuyết. Sở hữu thiết kế si&ecirc;u nhỏ gọn như&nbsp;iPhone 8, chip A13 Bionic cho hiệu năng khủng như&nbsp;iPhone 11, nhưng iPhone SE 2020 lại c&oacute; một mức gi&aacute; tốt đến bất ngờ.', 0, 0, 0, 2, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL COMMENT 'Mã đơn hàng',
  `ThoiDiemDatHang` datetime NOT NULL COMMENT 'Thời điểm đặt hàng',
  `ThoiDiemGiaoHang` datetime DEFAULT NULL COMMENT 'Thời điểm giao hang',
  `idUser` int(11) DEFAULT NULL COMMENT 'Mã khách hàng',
  `TenNguoiNhan` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên người nhận',
  `EmailNguoiNhan` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Email người nhận',
  `DiaChiNguoiNhan` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Địa chỉ người nhận',
  `AnHien` tinyint(1) DEFAULT 0 COMMENT 'Ẩn Hiện',
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Trạng thái',
  `GhiChuCuaKhachHang` varchar(2000) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Ghi chú của khách hàng',
  `GhiChuCuaAdmin` varchar(2000) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Ghichus của admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `ThoiDiemDatHang`, `ThoiDiemGiaoHang`, `idUser`, `TenNguoiNhan`, `EmailNguoiNhan`, `DiaChiNguoiNhan`, `AnHien`, `TrangThai`, `GhiChuCuaKhachHang`, `GhiChuCuaAdmin`) VALUES
(1, '2021-01-20 14:40:51', '2021-01-07 00:12:35', 1, 'Long', 'hailong28092001@gmail.com', 'Tphcm', 0, 2, 'giao trong ngày', NULL),
(12, '2021-01-22 08:26:00', '2021-01-23 08:26:00', 0, 'huy', 'longdhps13563@fpt.edu.vn', 'Hoocmon, TP HCM', 1, 2, 'Giao h&agrave;ng trong 1 giờ cho m&igrave;nh nh&eacute;', 'Đơn h&agrave;ng giao nhanh'),
(15, '2021-01-26 21:36:00', '2021-01-26 21:36:00', 3, 'huy', 'longdhps13563@fpt.edu.vn', 'Hoocmon, TP HCM', 0, 2, '&nbsp;', '&nbsp;');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `idDHCT` int(11) NOT NULL COMMENT 'Mã đơn hàng chi tiết',
  `idDH` int(11) NOT NULL COMMENT 'Mã đơn hàng',
  `idDT` int(11) DEFAULT NULL COMMENT 'Mã điện thoại',
  `TenDT` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên điện thoại',
  `SoLuong` int(11) NOT NULL COMMENT 'Số lượng mua',
  `Gia` float NOT NULL COMMENT 'Giá',
  `urlHinh` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Hình'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `idNSX` int(11) NOT NULL COMMENT 'id nhà sản xuất',
  `TenNSX` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên nhà sản xuất',
  `ThuTu` int(11) DEFAULT NULL COMMENT 'Số thứ tự',
  `AnHien` tinyint(1) DEFAULT NULL COMMENT 'Ẩn hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`idNSX`, `TenNSX`, `ThuTu`, `AnHien`) VALUES
(1, 'Samsung', 1, 1),
(2, 'Iphone', 2, 1),
(4, 'Xiaomi', 4, 1),
(17, 'Realme', 6, 1),
(23, 'Vivo', 7, 1),
(27, 'Huawei', 8, 1),
(28, 'Vsmart', 9, 1),
(29, 'Nokia', 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinhdt`
--

CREATE TABLE `thuoctinhdt` (
  `idTT` int(11) NOT NULL,
  `idDT` int(11) DEFAULT NULL COMMENT 'Mã điện thoại',
  `ManHinh` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Màn hình',
  `HeDieuHanh` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Hệ điều hành',
  `CameraSau` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'camera sau',
  `CameraTruoc` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'camera trước',
  `CPU` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'CPU',
  `Ram` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Ram',
  `BoNhoTrong` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Bộ nhớ trong',
  `TheNho` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Thẻ nhớ',
  `TheSim` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Thẻ sim',
  `DungLuongPin` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Dung lượng pin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thuoctinhdt`
--

INSERT INTO `thuoctinhdt` (`idTT`, `idDT`, `ManHinh`, `HeDieuHanh`, `CameraSau`, `CameraTruoc`, `CPU`, `Ram`, `BoNhoTrong`, `TheNho`, `TheSim`, `DungLuongPin`) VALUES
(1, 19, 'PLS TFT LCD, 6.5', 'Android 9', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '6 GB', '128 GB', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '4000 mAh, có sạc nhanh'),
(2, 26, 'AMOLED, 6.43\", Full HD+', 'Android 10', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '8 MP', 'MediaTek Helio G35 8 nhân', '6 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh, có sạc nhanh'),
(3, 27, 'PLS TFT LCD, 6.5\", HD+', 'Android 20', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '6 GB', 'dsa', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '4000 mAh, có sạc nhanh'),
(4, 28, 'PLS TFT LCD, 6.5', 'Android 10', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '6 GB', '128 GB', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '5000 mAh, có sạc nhanh'),
(6, 31, 'PLS TFT LCD, 6.5\", HD+', 'Android 9', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '6 GB', '128 GB', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '4000 mAh, có sạc nhanh'),
(7, 20, 'PLS TFT LCD, 6.5\", HD+', 'Android 20', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '12 GB', '128 GB', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '4000 mAh, có sạc nhanh'),
(8, 42, 'PLS TFT LCD, 6.5\", HD+', 'Android 9', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '6 GB', '128 GB', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '4000 mAh, có sạc nhanh'),
(9, 41, 'PLS TFT LCD, 6.5\", HD+', 'Android 9', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '6 GB', '128 GB', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '5500 mAh, có sạc nhanh'),
(10, 40, 'PLS TFT LCD, 6.5\", HD+', 'Android 9', '8 MP', 'Chính 48 MP & Phụ 5 MP, 2 MP, 2 MP', 'MediaTek Helio G35 4 nhân', '6 GB', '128 GB', '123', 'MicroSD, hỗ trợ tối đa 1 TB', '5000 mAh, có sạc nhanh'),
(11, 43, 'OLED, 6.7\", Super Retina XDR', 'iOS 14', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic 6 nhân', '6 GB', '512 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3687 mAh, có sạc nhanh'),
(12, 44, 'OLED, 6.1\", Super Retina XDR', 'iOS 14', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic 6 nhân', '6 GB', '512 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '2815 mAh, có sạc nhanh'),
(13, 45, 'OLED, 6.7\", Super Retina XDR', 'iOS 14', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic 6 nhân', '6 GB', '256 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '3687 mAh, có sạc nhanh'),
(14, 46, 'IPS LCD, 6.1\", Liquid Retina', 'iOS 14', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '256 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '3110 mAh, có sạc nhanh'),
(15, 47, 'IPS LCD, 6.1\", Liquid Retina', 'iOS 14', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '128 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '3110 mAh, có sạc nhanh'),
(16, 48, 'OLED, 6.1\", Super Retina XDR', 'iOS 14', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '64 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '3110 mAh, có sạc nhanh'),
(17, 49, 'IPS LCD, 6.1\", Liquid Retina', 'iOS 12', '12 MP', '7 MP', 'Apple A12 Bionic 6 nhân', '3 GB', '64 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '2942 mAh, có sạc nhanh'),
(18, 50, 'IPS LCD, 4.7\"', 'iOS 14', '12 MP', '7 MP', 'Apple A13 Bionic 6 nhân', '3 GB', '128 GB', '', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '1821 mAh, có sạc nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL COMMENT 'Mã user',
  `Username` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên đăng nhập',
  `matkhau` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Mật khẩu',
  `HoTen` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Họ và tên',
  `KichHoat` tinyint(1) DEFAULT NULL COMMENT 'kích hoạt',
  `urlHinh` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'hình',
  `Email` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Địa chỉ email',
  `VaiTro` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Vai trò 0 là khách hàng 1 là admin',
  `AnHien` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Ẩn hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `Username`, `matkhau`, `HoTen`, `KichHoat`, `urlHinh`, `Email`, `VaiTro`, `AnHien`) VALUES
(3, 'hai', '12', 'Đinh Hải long', NULL, '', 'onehitpow@gmail.com', 1, 1),
(10, 'hai12', '', 'Đinh Hải long', NULL, 'samsung-galaxy-a12-trang-600x600-600x600.jpg', 'dấdsa@gmail.com', 0, 1),
(12, 'long', 'c20ad4d76fe97759aa27a0c99bff6710', 'Đinh Long', NULL, NULL, '', 0, 1),
(15, 'huy3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'huy', NULL, NULL, 'vuthien2801@gmai.com', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idBL`),
  ADD KEY `FK_binhluan_User` (`idUser`),
  ADD KEY `FK_BinhLuan_DT` (`idDT`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`idDT`),
  ADD KEY `Fk_dienthoai_NSX` (`idNSX`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`),
  ADD KEY `FK_DonHang_User` (`idUser`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`idDHCT`),
  ADD KEY `idDT` (`idDT`),
  ADD KEY `idDH` (`idDH`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`idNSX`);

--
-- Chỉ mục cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD PRIMARY KEY (`idTT`),
  ADD KEY `FK_TTDT_DT` (`idDT`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idBL` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `idDT` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id điện thoại', AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `idDHCT` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng chi tiết';

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `idNSX` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id nhà sản xuất', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  MODIFY `idTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã user', AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_BinhLuan_DT` FOREIGN KEY (`idDT`) REFERENCES `dienthoai` (`idDT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_binhluan_User` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `Fk_dienthoai_NSX` FOREIGN KEY (`idNSX`) REFERENCES `nhasanxuat` (`idNSX`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `FK_DH_DHCT` FOREIGN KEY (`idDH`) REFERENCES `donhang` (`idDH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD CONSTRAINT `FK_TTDT_DT` FOREIGN KEY (`idDT`) REFERENCES `dienthoai` (`idDT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
