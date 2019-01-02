-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2019 lúc 03:51 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `loginmember`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `MaCT` int(11) NOT NULL,
  `TenCT` varchar(30) NOT NULL,
  `MaKV` int(11) NOT NULL,
  `ThongTin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`MaCT`, `TenCT`, `MaKV`, `ThongTin`) VALUES
(1, 'FPT Telecom', 1, ''),
(2, 'Cybozu Vietnam Co., Ltd', 2, 'Trang web: <a href=\"https://cybozu.vn/\">http://cybozu.vn/</a><br><br><br>\r\n\r\n- Soyzu, Inc., một nhà sản xuất phần mềm hàng đầu tại Nhật Bản, đã mở rộng trên toàn cầu với nhiều chi nhánh tại Nhật Bản, Mỹ, Úc, Trung Quốc và Việt Nam.<br> - Mục tiêu của chúng tôi là tạo ra các phần mềm nhóm phổ biến nhất thế giới, dành cho tinh thần đồng đội trên toàn thế giới và góp phần thay đổi phong cách làm việc của xã hội.<br>\r\n- Việt Nam, một chi nhánh phát triển của Tập đoàn, bao gồm một đội ngũ kỹ sư phần mềm và nhân viên chuyên nghiệp làm việc hết mình để đạt được mục tiêu của cả nhóm - nhà sản xuất phần mềm số 1 trên thế giới.<br>\r\n- Hãy tham gia cùng với Cybozu Vietnam để trở thành một phần trong đội ngũ của chúng tôi, để trải nghiệm môi trường làm việc chuyên nghiệp và sáng tạo cũng như cống hiến cho tinh thần đồng đội thế giới.<br><br><br>'),
(3, 'Yumeshin Vietnam', 1, ''),
(4, 'VietnamWorks', 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuvuc`
--

CREATE TABLE `khuvuc` (
  `MaKV` int(11) NOT NULL,
  `TenKV` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuvuc`
--

INSERT INTO `khuvuc` (`MaKV`, `TenKV`) VALUES
(1, 'Hà Nội'),
(2, 'Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhnghe`
--

CREATE TABLE `nganhnghe` (
  `MaNN` int(11) NOT NULL,
  `TenNN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganhnghe`
--

INSERT INTO `nganhnghe` (`MaNN`, `TenNN`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Kế Toán'),
(3, 'Partime');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `MaTT` int(11) NOT NULL,
  `Logo` varchar(30) NOT NULL,
  `SoLuongTuyen` int(11) NOT NULL,
  `YeuCau` text NOT NULL,
  `Luong` varchar(15) NOT NULL,
  `NgayDang` datetime NOT NULL,
  `MaVL` int(11) NOT NULL,
  `MoTa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`MaTT`, `Logo`, `SoLuongTuyen`, `YeuCau`, `Luong`, `NgayDang`, `MaVL`, `MoTa`) VALUES
(1, 'cybozu.jpg', 1, '- 0-7 năm kinh nghiệm trong kiểm thử phần mềm<br>\r\n- Hiểu về vòng đời phát triển phần mềm<br>\r\n- Kiến thức cơ bản về kiểm tra chức năng, kiểm tra hồi quy, kiểm tra cấu hình, kiểm tra khói và kiểm tra chấp nhận<br>\r\n- Kỹ năng phân tích mạnh mẽ và kỹ năng giải quyết vấn đề<br>\r\n- Khả năng đọc và viết tiếng Anh kỹ thuật (tương đương TOEIC 500)<br>\r\n\r\n* Văn bằng ưu tiên:<br>\r\n- Có kinh nghiệm kiểm tra thủ công cho ứng dụng dựa trên web<br>\r\n- Kinh nghiệm / kiến ​​thức về mã hóa\r\n- Thành thạo tiếng Nhật<br>\r\n\r\np / s: Chỉ những ứng viên đủ điều kiện mới được liên lạc để sắp xếp cuộc phỏng vấn.', '15', '2018-12-30 01:00:00', 2, '* Lợi ích:<br>\r\nLàm việc với những người tuyệt vời trong môi trường chuyên nghiệp và tiêu chuẩn quốc tế với nhiều cơ hội tuyệt vời để học các kỹ năng mới và có được kinh nghiệm quý giá, nhận mức lương cạnh tranh và một số lợi ích khác như sau:<br>\r\n- Linh hoạt trong không gian làm việc & thời gian: làm việc tại nhà (5 ngày mỗi tháng), thời gian linh hoạt<br>\r\n- Tiện nghi được trang bị tốt: máy tính xách tay (Macbook ...) & PC với 2 màn hình<br>\r\n- Đánh giá lương: hai lần một năm<br>\r\n- Cơ hội đi công tác ở Mỹ, Nhật Bản, Trung Quốc<br>\r\n- Bảo hiểm y tế Generali Global: hỗ trợ 100% cho nhân viên và 50% cho 2 thành viên gia đình<br>\r\n- Bảo hiểm bồi thường thu nhập Generali<br>\r\n- Bảo hiểm tử vong & khuyết tật Generali<br>\r\n- Hỗ trợ học / thi tiếng Anh / tiếng Anh và rèn luyện kỹ năng<br>\r\n- Hỗ trợ không giới hạn cho các sự kiện / bữa tiệc / hoạt động câu lạc bộ<br>\r\n- Hỗ trợ cho các hoạt động xây dựng đội nhóm<br>\r\n- Không gian làm việc sáng tạo & trẻ trung<br>\r\n- 2 lá hàng năm bổ sung do công ty phát hành bên cạnh những lá theo luật lao động<br>\r\n- 5 ngày nghỉ làm mới sau mỗi 5 năm làm việc liên tiếp<br>\r\n- Tiền thưởng cố định: lương tháng 13<br>\r\n- Phần thưởng khác: phụ thuộc vào doanh thu hàng năm của Nhóm Groupzu<br>\r\n- Giải thưởng MVP hàng năm<br>\r\n- Chuyến đi công ty hàng năm<br>\r\n\r\n* Trách nhiệm chính của bạn:<br>\r\n- Xem xét và phân tích yêu cầu / thông số kỹ thuật<br>\r\n- Thiết kế thông số kiểm tra / trường hợp kiểm tra / danh sách kiểm tra và dữ liệu kiểm tra<br>\r\n- Thực hiện kiểm tra trong ứng dụng web<br>\r\n- Báo cáo lỗi vào hệ thống theo dõi lỗi<br>\r\n- Báo cáo kết quả kiểm tra chính xác kịp thời'),
(2, 'cybozu.jpg', 2, 'trrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '10', '2018-12-30 02:05:00', 3, ''),
(3, 'congty.jpg', 2, 'p', '12', '2018-12-30 00:00:00', 5, ''),
(4, '88x43-Land_104664.jpg', 2, 'ppppppppppppp', '15', '2018-12-30 00:00:00', 1, ''),
(5, '88x43-Green_104721.jpg', 2, 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '10', '2018-12-30 00:00:00', 4, ''),
(6, 'cybozu.jpg', 4, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '9', '2018-12-30 00:00:00', 6, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `firsName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `firsName`, `lastName`, `username`, `password`, `date_created`) VALUES
(1, 'trung', 'nguyen', 'trung', '123456tT', '2018-12-27 10:00:28'),
(2, 'vinh', 'ngo', 'vinh123', '123456tT', '2018-12-27 10:02:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vieclam`
--

CREATE TABLE `vieclam` (
  `MaVL` int(11) NOT NULL,
  `TenVL` text NOT NULL,
  `MaCT` int(11) NOT NULL,
  `MaNN` int(11) NOT NULL,
  `TrangThai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vieclam`
--

INSERT INTO `vieclam` (`MaVL`, `TenVL`, `MaCT`, `MaNN`, `TrangThai`) VALUES
(1, 'Công nghệ thông tin', 1, 1, 'it'),
(2, 'Software QA Engineer(Web Tester, Qa, QC)', 2, 1, 'it'),
(3, 'PHP Developer - Junior / Senior (Làm Việc Tại Hà Nội)', 3, 2, 'it'),
(4, 'Quản lý văn phòng', 4, 2, 'capquanly'),
(5, 'Fresher Tester', 4, 1, 'it'),
(6, 'Nhân viên nhập dữ liệu', 1, 3, 'ratruong');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`MaCT`),
  ADD KEY `MaKV` (`MaKV`);

--
-- Chỉ mục cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`MaKV`);

--
-- Chỉ mục cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  ADD PRIMARY KEY (`MaNN`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`MaTT`),
  ADD KEY `MaVL` (`MaVL`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `vieclam`
--
ALTER TABLE `vieclam`
  ADD PRIMARY KEY (`MaVL`),
  ADD KEY `MaCT` (`MaCT`),
  ADD KEY `MaNN` (`MaNN`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `MaCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `MaKV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  MODIFY `MaNN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `vieclam`
--
ALTER TABLE `vieclam`
  MODIFY `MaVL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `congty`
--
ALTER TABLE `congty`
  ADD CONSTRAINT `congty_ibfk_1` FOREIGN KEY (`MaKV`) REFERENCES `khuvuc` (`MaKV`);

--
-- Các ràng buộc cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD CONSTRAINT `thongtin_ibfk_1` FOREIGN KEY (`MaVL`) REFERENCES `vieclam` (`MaVL`);

--
-- Các ràng buộc cho bảng `vieclam`
--
ALTER TABLE `vieclam`
  ADD CONSTRAINT `vieclam_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `congty` (`MaCT`),
  ADD CONSTRAINT `vieclam_ibfk_2` FOREIGN KEY (`MaNN`) REFERENCES `nganhnghe` (`MaNN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
