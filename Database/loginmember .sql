-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 07:04 AM
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
(1, 'FPT Telecom', 1, '- Công ty Cổ phần Viễn thông FPT là nhà cung cấp dịch vụ Viễn thông hàng đầu tại Việt Nam với các dịch vụ thế mạnh:<br>\r\n\r\n- Đường truyền Internet cáp quang<br>\r\n- Truyền hình thông minh nền tảng IpTV - Truyền hình FPT<br>\r\n- Các dịch vụ gia tăng trên nền Internet: Điện thoại cố định (VoiceIP), Giám sát từ xa (Ipcamera), Chứng thực chữ ký số (CA), Điện toán đám mây (Cloud computing…)<br>\r\n- Các dịch vụ cho doanh nghiệp: Email, tên miền, lưu trữ web, trung tâm dữ liệu…Với phương châm “Mọi dịch vụ trên một kết nối”, FPT Telecom luôn không ngừng nghiên cứu và triển khai tích hợp ngày càng nhiều các dịch vụ giá trị gia tăng trên cùng một đường truyền Internet nhằm đem lại lợi ích tối đa cho khách hàng.<br>\r\n- Chúng tôi có một môi trường làm việc chuyên nghiệp, lấy con người làm trung tâm và là nguồn tài nguyên quan trong nhất đối với sự phát triển của Công ty. Ở nơi đây, người lao động được tạo điều kiện tốt nhất để phát huy năng lực, sự sáng tạo và tinh thần làm việc; được đào tạo, huyến luyện kĩ năng chuyên môn hàng năm; được tham gia nhiều hoạt động văn hóa, tinh thần mang đậm bản sắc của người FPT cũng như được hưởng những chính sách đãi ngộ hấp dẫn và cạnh tranh.<br>\r\n\r\n- Nếu đến với chúng tôi, các bạn sẽ có được những trải nghiệm đó.'),
(2, 'Cybozu Vietnam Co., Ltd', 2, '<h2>Trang web: <a href=\"https://cybozu.vn/\">http://cybozu.vn/</a></h2><br><br><br>\r\n<h2>Giới thiệu:</h2><br>\r\n- Soyzu, Inc., một nhà sản xuất phần mềm hàng đầu tại Nhật Bản, đã mở rộng trên toàn cầu với nhiều chi nhánh tại Nhật Bản, Mỹ, Úc, Trung Quốc và Việt Nam.<br>\r\n- Soyzu là một nhà sản xuất phần mềm nhóm của Nhật Bản được thành lập vào năm 1997. Từ một công ty nhỏ chỉ có ba thành viên vào ngày đầu tiên ,.00zu đã nhanh chóng giành được thị phần tại Nhật Bản và ngày nay ,zuzu là người lãnh đạo Phần mềm Hợp tác Nhật Bản - Thị phần số 1 tại Nhật Bản 10 năm liên tiếp với hơn 7,5 triệu người dùng.<br>\r\n- Phần mềm của chúng tôi hỗ trợ cộng tác nhóm hiệu quả do đó các dịch vụ của chúng tôi được sử dụng rộng rãi từ các nhóm có quy mô lớn như các doanh nghiệp đa quốc gia đến các nhóm quy mô nhỏ như các nhóm tình nguyện, vòng tròn hoặc thậm chí là gia đình. Bên cạnh việc cung cấp các giải pháp phần mềm tại cơ sở, chúng tôi cũng cung cấp các dịch vụ điện toán đám mây bao gồm các dịch vụ Phần mềm dưới dạng dịch vụ và cung cấp môi trường hoạt động như máy chủ, chứng khoán,..<br>\r\n- Mục tiêu tiếp theo của chúng tôi là trở thành số 1 trên thị trường thế giới của phần mềm nhóm. Chúng tôi có các trung tâm phát triển tại Trung Quốc (Thượng Hải) và Việt Nam (Hồ Chí Minh) và các đối tác chính thức tại Hoa Kỳ, Vương quốc Anh, Đức, Trung Quốc, Thái Lan, Việt Nam, Singapore, Malaysia.<br>\r\n- Mục tiêu của chúng tôi là tạo ra các phần mềm nhóm phổ biến nhất thế giới, dành cho tinh thần đồng đội trên toàn thế giới và góp phần thay đổi phong cách làm việc của xã hội.<br>\r\n- Việt Nam, một chi nhánh phát triển của Tập đoàn, bao gồm một đội ngũ kỹ sư phần mềm và nhân viên chuyên nghiệp làm việc hết mình để đạt được mục tiêu của cả nhóm - nhà sản xuất phần mềm số 1 trên thế giới.<br>\r\n- Hãy tham gia cùng với Cybozu Vietnam để trở thành một phần trong đội ngũ của chúng tôi, để trải nghiệm môi trường làm việc chuyên nghiệp và sáng tạo cũng như cống hiến cho tinh thần đồng đội thế giới.<br><br><br>'),
(3, 'Yumeshin Vietnam', 1, '- Công ty TNHH YumeGlobal là Công ty 100% vốn đầu tư Nhật Bản.<br>\r\n\r\n- Chúng tôi chuyên nghiệp trong lĩnh vực giới thiệu việc làm, đặc biệt là việc làm tại Nhật Bản theo diện \"visa kỹ sư\" với thời gian làm việc trên 3 năm cho Kỹ sư các ngành Cơ Khí, Điện - điện tử, Công nghệ thông tin và Hóa học.<br>\r\n\r\n- Điểm đặc biệt của chương trình này là HOÀN TOÀN MIỄN PHÍ, bao gồm miễn phí đào tạo tiếng Nhật 1 năm, miễn phí thủ tục hợp tác lao động, KHÔNG đóng tiền đặt cọc, được tài trợ toàn bộ vé máy bay khi xuất cảnh. Ngoài ra, Kỹ sư còn được hưởng chế độ lương thưởng cao và đãi ngộ hấp dẫn khi làm việc tại Nhật Bản.<br>\r\n\r\n- TẦM NHÌN<br>\r\n\r\n- Công ty TNHH Tư Vấn Và Giáo Dục Hưng Thịnh được thành lập vào tháng 3 năm 2015.<br>\r\n\r\n- Chúng tôi tuyển dụng kỹ sư và đào tạo tiếng Nhật trình độ cao nhằm mục đích phái cử kỹ sư sang làm việc cho Công ty liên kết Yume-Technology Co., Ltd tại Nhật Bản. Hoạt động tuyển dụng và đào tạo tại cả Hồ Chí Minh và Hà Nội. Năm đầu tiên chúng tôi đã đưa được 30 bạn kỹ sư sang Nhật Bản làm việc.<br>\r\n\r\n- Vào tháng 5 năm 2017, Công ty TNHH Tư Vấn Và Giáo Dục Hưng Thịnh chính thức là Công ty con và là Công ty có 100% vốn đầu tư Nhật Bản của Công ty Yume Agent Co., Ltd, được đổi tên thành Công ty TNHH Yume Agent Việt Nam. <br>\r\nTháng 10 năm 2018, Công ty TNHH YumeAgent Việt Nam chính thức đổi tên thành Công ty TNHH YumeGlobal.<br>\r\n\r\n- SỨ MỆNH<br>\r\n\r\n- Chương trình tuyển dụng và đào tạo tiếng Nhật miễn phí tại Việt Nam cho kỹ sư đi làm việc Nhật Bản.<br>\r\n\r\n- Đào tạo tiếng Nhật miễn phí gồm：1 năm phí đào tạo, miễn phí toàn bộ giáo trình, tài liệu học tập. Không đóng tiền đặt cọc, phí giới thiệu (thủ tục ứng tuyển), miễn phí toàn bộ thủ tục làm hồ sơ xuất cảnh và được tài trợ toàn bộ vé máy bay đi Nhật Bản làm việc.'),
(4, 'VietnamWorks', 2, '- VietnamWorks là công ty tuyển dụng hàng đầu và lâu đời nhất Việt Nam - thấu hiểu rằng người tìm việc không chỉ cần một công việc, mà hơn thế nữa còn là cơ hội phát triển và thăng tiến. Do đó, chúng tôi - những người được chọn là Dream Maker, có mặt để giúp bạn thực hiện ước mơ đó. Với hơn 59.000 việc làm được đăng tuyển mỗi năm - con số khổng lồ mà chưa có một website việc làm nào tại Việt Nam có thể phá kỷ lục - cùng hàng ngàn bài viết và bí quyết về thăng tiến nghề nghiệp trên VietnamWorks.com, chúng tôi sẽ đồng hành cùng tất cả người tìm việc và nhà tuyển dụng Việt Nam cùng thực hiện giấc mơ sự nghiệp.<br>\r\n\r\n- VietnamWorks thực sự là một ngôi nhà lớn cho tất cả Dream Maker, và mỗi người đều được quan tâm chân thành và ân cần. Mối quan hệ giữa công ty và tất cả Dream Maker dựa trên:<br>\r\n\r\n- Sự tin tưởng<br>\r\n- Kết nối<br>\r\n- Tưởng thưởng xứng đáng<br>\r\n\r\n- Môi trường làm việc thân thiện, gần gũi, sự cân bằng giữa công việc và các hoạt động thư giãn luôn được trân trọng.');

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
(1, 'Công nghệ thông tin'),
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
  `YeuCau` text,
  `Luong` varchar(15) NOT NULL,
  `NgayDang` date DEFAULT NULL,
  `MaVL` int(11) NOT NULL,
  `MoTa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`MaTT`, `Logo`, `SoLuongTuyen`, `YeuCau`, `Luong`, `NgayDang`, `MaVL`, `MoTa`) VALUES
(1, 'cybozu.jpg', 1, '- 0-7 năm kinh nghiệm trong kiểm thử phần mềm<br>\r\n- Hiểu về vòng đời phát triển phần mềm<br>\r\n- Kiến thức cơ bản về kiểm tra chức năng, kiểm tra hồi quy, kiểm tra cấu hình, kiểm tra khói và kiểm tra chấp nhận<br>\r\n- Kỹ năng phân tích mạnh mẽ và kỹ năng giải quyết vấn đề<br>\r\n- Khả năng đọc và viết tiếng Anh kỹ thuật (tương đương TOEIC 500)<br>\r\n* Văn bằng ưu tiên:<br>\r\n- Có kinh nghiệm kiểm tra thủ công cho ứng dụng dựa trên web\r\n- Kinh nghiệm / kiến ​​thức về mã hóa. Thành thạo tiếng Nhật<br>\r\n - Chỉ những ứng viên đủ điều kiện mới được liên lạc để sắp xếp cuộc phỏng vấn.', '15', '2018-12-30', 2, '* Lợi ích:<br>\r\nLàm việc với những người tuyệt vời trong môi trường chuyên nghiệp và tiêu chuẩn quốc tế với nhiều cơ hội tuyệt vời để học các kỹ năng mới và có được kinh nghiệm quý giá, nhận mức lương cạnh tranh và một số lợi ích khác như sau:<br>\r\n- Linh hoạt trong không gian làm việc & thời gian: làm việc tại nhà (5 ngày mỗi tháng), thời gian linh hoạt<br>\r\n- Tiện nghi được trang bị tốt: máy tính xách tay (Macbook ...) & PC với 2 màn hình<br>\r\n- Đánh giá lương: hai lần một năm<br>\r\n- Cơ hội đi công tác ở Mỹ, Nhật Bản, Trung Quốc<br>\r\n- Bảo hiểm y tế Generali Global: hỗ trợ 100% cho nhân viên và 50% cho 2 thành viên gia đình<br>\r\n- Bảo hiểm bồi thường thu nhập Generali<br>\r\n- Bảo hiểm tử vong & khuyết tật Generali<br>\r\n- Hỗ trợ học / thi tiếng Anh / tiếng Anh và rèn luyện kỹ năng<br>\r\n- Hỗ trợ không giới hạn cho các sự kiện / bữa tiệc / hoạt động câu lạc bộ<br>\r\n- Hỗ trợ cho các hoạt động xây dựng đội nhóm<br>\r\n- Không gian làm việc sáng tạo & trẻ trung<br>\r\n- 2 lá hàng năm bổ sung do công ty phát hành bên cạnh những lá theo luật lao động<br>\r\n- 5 ngày nghỉ làm mới sau mỗi 5 năm làm việc liên tiếp<br>\r\n- Tiền thưởng cố định: lương tháng 13<br>\r\n- Phần thưởng khác: phụ thuộc vào doanh thu hàng năm của Nhóm Groupzu<br>\r\n- Giải thưởng MVP hàng năm<br>\r\n- Chuyến đi công ty hàng năm<br>\r\n* Trách nhiệm chính của bạn:<br>\r\n- Xem xét và phân tích yêu cầu / thông số kỹ thuật<br>\r\n- Thiết kế thông số kiểm tra / trường hợp kiểm tra / danh sách kiểm tra và dữ liệu kiểm tra<br>\r\n- Thực hiện kiểm tra trong ứng dụng web<br>\r\n- Báo cáo lỗi vào hệ thống theo dõi lỗi<br>\r\n- Báo cáo kết quả kiểm tra chính xác kịp thời'),
(2, 'logo.png', 2, '- Bằng cử nhân hoặc tương đương chuyên ngành CNTT / Người kiểm tra - Khả năng \r\nphân tích và giải quyết vấn đề tốt <br>\r\n- Khả năng làm việc độc lập <br>\r\n- Sẵn sàng học hỏi, làm việc nhóm tốt <br>\r\n- Có khả năng làm việc dưới áp lực <br>\r\n- Thái độ tốt và cẩn thận <br>\r\n- Có thể giao tiếp bằng tiếng Anh<br>', '15', '2018-12-30', 5, 'Hỗ trợ kiểm soát chất lượng microsites của Vietnamworks. Là Người kiểm tra của chúng tôi, bạn sẽ tập trung vào:<br> \r\n\r\n- Tìm hiểu cách xây dựng trường hợp kiểm tra và danh sách kiểm tra dựa trên yêu cầu<br>\r\n- Thực hiện trường hợp kiểm tra<br>\r\n- Kiểm soát và báo cáo lỗi<br>'),
(4, 'logo.png', 2, '- Độ tuổi: Không quá 35 tuổi tại thời điểm nộp hồ sơ.<br>\r\n\r\n- Trình độ: Yêu cầu ứng viên tốt nghiệp loại Khá trở lên, hệ chính quy chuyên ngành phù hợp với vị trí tuyển dụng tại các trường Đại học: Học viện Ngân hàng; Trường Đại học Ngân hàng TP. Hồ Chí Minh; Trường Đại học Kinh tế Quốc dân; Trường Đại học Kinh tế TP. Hồ Chí Minh; Trường Đại học Ngoại thương; Trường Đại học Ngoại thương cơ sở 2, TP. Hồ Chí Minh; Học viện Tài chính và các trường ĐH nước ngoài có uy tín trong và ngoài nước;<br>\r\n(Ghi chú: VCB chỉ nhận hồ sơ theo đúng các tiêu chuẩn trên, không nhận hồ sơ của thí sinh tốt nghiệp hệ liên thông, liên kết, tại chức, văn bằng 2, vừa học vừa làm. Đào tạo Thạc sỹ trở lên chỉ là tiêu chí ưu tiên).<br>\r\n\r\n- Trình độ chuyên môn:<br>\r\n+ Chuyên ngành đào tạo: Tốt nghiệp Đại học loại khá trở lên chuyên ngành Kinh tế - Tài chính - Ngân hàng; Phân tích và quản trị dữ liệu.<br>\r\n+ Trình độ ngoại ngữ: Tiếng Anh bằng C (hoặc tương đương) trở lên, thực hành tốt cả 04 kỹ năng nghe, nói, đọc, viết.<br>\r\n+ Trình độ tin học: Thành thạo về Winword, Excel và các phần mềm ứng dụng văn phòng (chứng chỉ B trở lên); Powerpoint; Sharepoint...<br>\r\n\r\n- Kinh nghiệm: <br>\r\nƯu tiên các ứng viên:<br>\r\n+ Có kinh nghiệm làm việc tại các bộ phận nghiệp vụ của một ngân hàng thương mai tối thiểu 02 năm; Có kinh nghiệm về các nghiệp vụ: (i) kế toán (ii) thanh toán và ngân hàng điện tử (Internet Banking, Mobile Banking, Web, thanh toán hóa đơn, nạp tiền điện tử, cổng thanh toán thương mại điện tử, thuế hải quan điện tử).<br>\r\n+ Có kinh nghiệm về nhiệm vụ chuyên gia phân tích nghiệp vụ (BA- Business Analyst) tại các ngân hàng, dự án công nghệ của ngân hàng, công ty phần mềm.<br> \r\n+ Có kinh nghiệm, kiến thức về phân tích và quản trị dữ liệu và MIS. <br>\r\n+ Chuyên viên quản trị dự án và/ hoặc có kiến thức về quản lý các dự án công nghệ thông tin.<br>\r\n+ Đã qua các khóa đào tạo về phân tích nghiệp vụ (BA), quản trị dữ liệu, quản trị dự án hoặc có chứng chỉ Project management professional.<br>\r\n\r\n- Kiến thức:<br>\r\n+ Am hiểu về sản phẩm, dịch vụ NH/kiến thức phân tích tài chính doanh<br> nghiệp/Quy trình, chính sách, nghiệp vụ NH.<br>\r\n+ Am hiểu về các ứng dụng công nghệ thông tin trong lĩnh vực ngân hàng. <br>\r\n\r\n- Kỹ năng:<br>\r\n+ Kỹ năng phân tích, tổng hợp tốt;<br>\r\n+ Kỹ năng giao tiếp, trình bày tốt.<br>\r\n\r\n- Khả năng:<br>\r\n+ Khả năng làm việc độc lập và làm việc theo nhóm;<br>\r\n+ Khả năng làm việc với cường độ cao.<br>\r\n\r\n- Phẩm chất cá nhân:<br>\r\n+ Có tinh thần trách nhiệm;<br>\r\n+ Có tinh thần học hỏi, cầu thị và chia sẻ trong công việc.', '15', '2018-12-30', 4, '1. Tham gia phát triển sản phẩm, dịch vụ ngân hàng liên quan đến công nghệ<br>\r\n- Tiếp nhận và phân tích các yêu cầu từ các bộ phận nghiệp vụ nghiệp vụ liên quan phát triển sản phẩm/ dịch vụ/ phần mềm công nghệ công nghệ; tư vấn và đánh giá khả năng đáp ứng về công nghệ đối với yêu cầu. <br>\r\n- Xây dựng tài liệu yêu cầu người sử dụng làm căn cứ phát triển ứng dụng. <br>\r\n- Tham gia phân tích và đánh giá giải pháp công nghệ.<br>\r\n- Xây dựng kịch bản, kế hoạch và tổ chức thực hiện kiểm thử ứng dụng.<br>\r\n- Xây dựng tài liệu Hướng dẫn sử dụng.<br>\r\n- Phối hợp triển khai ứng dụng: chuyển đổi số liệu, tích hợp hệ thống, hỗ trợ người sử dụng triển khai ứng dụng. <br>\r\n- Đề xuất việc cung ứng sản phẩm, dịch vụ mới, cải tiến quy trình nghiệp vụ theo khả năng đáp ứng của công nghệ.<br>\r\n\r\n2. Tham gia triển khai các dự án công nghệ của ngân hàng.<br>\r\n\r\n3. Quản lý ứng dụng phần mềm tại ngân hàng: <br>\r\n- Quản trị tham số ứng dụng<br>\r\n- Xử lý các yêu cầu hỗ trợ liên quan đến ứng dụng: hỗ trợ tác nghiệp, cung cấp dữ liệu, xây dựng báo cáo...<br> \r\n- Để xuất phương án nâng cấp cải tiến ứng dụng để tăng tiện ích, kiểm soát rủi ro.<br>\r\n\r\n4. Các công việc khác: <br>\r\n- Tham gia xây dựng, thiết kế, quản trị dữ liệu và báo cáo nghiệp vụ<br>\r\n- Tham gia xây dựng và góp ý các quy trình, quy định của VCB liên quan đến sản phẩm dịch vụ, hoạt động tác nghiệp trên hệ thống, quy trình quản lý rủi ro.<br>\r\n- Thực hiện các nhiệm vụ khác có liên quan do Lãnh đạo phòng giao.'),
(6, 'fpt-shop.png', 4, '•Nắm vững các kiến thức lập trình cơ bản<br> \r\n•Muốn học thêm một ngôn ngữ mới, hoặc tìm một hướng đi mới cho bản thân<br> \r\n•Tốt nghiệp đại học hoặc tương đương chuyên ngành Công nghệ thông tin/Điện tử viễn thông/Khoa học máy tính/Toán-Tin...<br> \r\n•Có khả năng đọc hiểu các tài liệu chuyên ngành tiếng Anh<br> \r\n\r\nQUYỀN LỢI & ĐÃI NGỘ<br> \r\n1. Trong khóa đào tạo:<br> \r\n•Được nhận trợ cấp đào tạo toàn khóa học lên đến 15,000,000VND/khóa.<br> \r\n•Đào tạo bài bản về chuyên môn lập trình, quy trình phát triển dự án<br> \r\n•Đào tạo miễn phí kỹ năng mềm và ngoại ngữ<br> \r\n2. Sau khóa đào tạo:<br> \r\n•Trở thành nhân viên chính thức, tham gia các dự án Phát triển và bảo trì cho những hệ thông phần mềm tài chính của các công ty tài chính lớn Nhật Bản<br> \r\n•Cơ hội onsite Nhật Bản ngắn – dài hạn<br> \r\n•Mức thu nhập và chế độ đãi ngộ phù hợp năng lực; đồng thời được hưởng trợ cấp tăng theo thâm niên nếu làm việc trong OSDC (Offshore Software Development Center)<br> \r\n•Được tham gia miễn phí tất cả các khóa học nâng cao chuyên môn, kỹ năng mềm, ngoại ngữ<br> \r\n•Xét tăng lương 02 lần/năm theo năng lực và hiệu quả công việc<br> \r\n•Được đóng Bảo hiểm xã hội, Bảo hiểm y tế, chế độ chăm sóc sức khỏe, nghỉ mát … (khi thành nhân viên chính thức)<br> \r\n•Tham gia nhiều hoạt động văn hóa, thể thao ', '9', '2018-12-30', 6, 'FPT Software tuyển dụng 10 lập trình viên tham gia khóa đào tạo lập trình viên Cobol<br>\r\n – Ngôn ngữ lập trình lâu nhất vẫn còn được ưa chuộng hơn 40 năm nay, được sử dụng trong hơn 60% các chương trình chuyên nghiệp, đặc biệt trong lĩnh vực ngân hàng và bảo hiểm<br>\r\n• Tham gia khóa đào tạo từ đầu lập trình viên Cobol chuyên nghiệp<br>\r\n• Trở thành nhân viên chính thức ngay sau đào tạo <br>\r\n• Cơ hội làm dự án migration hệ thống cobol lên các ngôn ngữ bậc cao (Java, C#…).<br>\r\n• Tìm hiểu các nghiệp vụ của các ngành tài chính như chứng khoán, bảo hiểm …'),
(7, '10712790.png', 2, '- Có ít nhất 1 năm kinh nghiệm trong lĩnh vực phát triển phần mềm với ngôn ngữ Java;<br>\r\n- Nắm vững về lập trình hướng đối tượng OOP. Có hiểu biết về Clean Code rules và Design Pattern;<br>\r\n- Hiểu biết sâu về UML;<br>\r\n- Có kinh nghiệm làm việc với các framework của java như SpringMVC, Spring Boots;<br>\r\n- Có kinh nghiệm làm việc với 1 trong số các framework của Javascript như: AngularJS, EmberJS, BackboneJS, CakePHP, Laravel, Yii, Symfony, Phalcon, Zend…;<br>\r\n- Ưu tiên các ứng viên có kinh nghiệm làm việc với NodeJS, Grunt, Gulp;<br>\r\n- Có kiến thức về hệ quản trị cơ sở dữ liệu, Ưu tiên ứng viên có kinh nghiệm Mysql;<br>\r\n- Sử dụng Source Version Control (Github) thành thạo<br>\r\n- Khả năng giao tiếp tốt, Kĩ năng phân tích vấn đề, đưa ra giải pháp và lên kế hoạch thực thi tốt. Tinh thần trách nhiệm cao, cẩn thận và tỉ mỉ trong công việc;', '10', '2018-12-30', 3, 'Công việc:<br>\r\n\r\n- Triển khai các giải pháp về thông tin người dùng bằng việc thực hiện và bảo trì các thành phần (component) cũng như giao diện (interface) trên nền tảng Java ;<br>\r\n- Tham gia vào quá trình phân tích, thiết kế và phát triển hệ thống;<br>\r\n- Làm thiết kế chi tiết và viết các tài liệu kỹ thuật khi được yêu cầu;<br>\r\n- Code và thực hiện Unit test theo tài liệu thiết kế từ đội BA<br>\r\n- Xác định mục tiêu thông qua việc phân tích yêu cầu người dùng, hình dung các tính năng và chức năng của hệ thống;<br>\r\n- Phát triển giao diện người dùng cho các ứng dụng internet/intranet bằng việc thiết lập độ ưu tiên các yêu cầu và tính năng hệ thống thông qua vòng đời phát triển phần mềm; Đề xuất phương pháp luận và các công cụ thiết kế hệ thống;<br>\r\n- Tham gia vào các hoạt động review tài liệu thiết kế cũng như mã nguồn.<br>\r\n\r\nPhúc lợi:<br>\r\n\r\n- Mức lương : Mức lương hấp dẫn, phù hợp với năng lực làm việc;<br>\r\n- Giờ làm việc: 8:30 ~ 17:30 , 5 ngày/ tuần, Thứ 7 và CN ngày lễ nghỉ;<br>\r\n- Tiền thưởng: 2 lần một năm (tổng tương đương 2 tháng lương);<br>\r\n- Đánh giá tăng lương: 2 lần / năm dựa trên thành tích và đóng góp của nhân viên;<br>\r\n- Hưởng đầy đủ các loại bảo hiểm theo quy định của nhà nước, các trợ cấp theo quy định của công ty;<br>\r\n- Được khám sức khỏe định kỳ 1 lần/ năm;<br>\r\n- Hàng tháng có tổ chức team building;<br> \r\n- Có cơ hội học hỏi nâng cao kiến thức chuyên môn và cơ hội thăng tiến<br>\r\n- Các lợi ích khác theo quy định của Luật Lao động Việt Nam;');

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
(1, 'trung', 'nguyen', 'trung', '123456tT', '2018-12-29 14:57:26'),
(2, 'vinh', 'ngô', 'vinh123', '123456tT', '2018-12-30 14:54:10'),
(3, 'tu', 'nguyen', 'tu123456', '123456tT', '2018-12-30 17:17:05'),
(4, 'toan', 'to', 'toanto', '123456tT', '2019-01-02 16:08:44'),
(6, 'trung', 'nguyen', 'trung123456', '123456aA', '0000-00-00 00:00:00'),
(7, 'vinh', 'ngo', 'vinhngo', 'Thevinh123', '2019-01-04 10:57:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vieclam`
--

CREATE TABLE `vieclam` (
  `MaVL` int(11) NOT NULL,
  `TenVL` varchar(100) DEFAULT NULL,
  `MaCT` int(11) NOT NULL,
  `MaNN` int(11) NOT NULL,
  `TrangThai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vieclam`
--

INSERT INTO `vieclam` (`MaVL`, `TenVL`, `MaCT`, `MaNN`, `TrangThai`) VALUES
(2, 'Software QA Engineer(Web Tester, Qa, QC)', 2, 1, 'it'),
(3, 'PHP Developer - Junior / Senior (Làm Việc Tại Hà Nội)', 3, 1, 'it'),
(4, 'Quản lý văn phòng', 4, 2, 'capquanly'),
(5, 'Fresher Tester', 4, 1, 'it'),
(6, '10 Fresher Cobol – Đào Tạo Từ Đầu', 1, 3, 'ratruong');

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
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
