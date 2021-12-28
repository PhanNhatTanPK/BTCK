-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 28, 2021 lúc 05:04 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myclass`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id_SV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryside` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_SV`),
  UNIQUE KEY `id_SV` (`id_SV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_SV`, `userPass`, `fullName`, `birthday`, `sex`, `countryside`, `address`, `phone`, `email`, `image`, `note`, `code`) VALUES
('4251190001', '123456789', 'Vũ Hoàng Ngọc Minh', '1996-08-18', 'Nam', 'Gia Lai', 'Quy Nhơn', '', '', './Image/Minh_avt.jpg', '', NULL),
('4251190002', '123456789', 'Lê Thiên Minh Hùng', '2001-01-01', 'Nam', 'Quảng Trị', 'Quy Nhơn', '0945435917', 'gnuh301@gmail.com', './Image/Hung_avt.jpg', '', NULL),
('4251190003', '123', 'Nguyễn Khánh Linh', '2007-05-25', 'Nữ', 'Đồng Quang', 'Quy Nhơn', '', '', '', '', NULL),
('4251190004', '123', 'Đỗ Ngọc Linh', '2007-09-08', 'Nữ', 'Tích Lương', 'Quy Nhơn', '', '', '', '', NULL),
('4251190005', '123', 'Vũ Nam Khánh', '2007-08-15', 'Nam', 'Sơn Cẩm', 'Quy Nhơn', '', '', '', '', NULL),
('4251190006', '123456789', 'Nguyễn Đỗ Thế An', '2001-11-02', 'Nam', 'Bình Định', 'Quy Nhơn', '', '', './Image/An_avt.jpg', '', NULL),
('4251190007', '123', 'Lê Huy Khánh', '2007-01-03', 'Nam', 'Hoàng Văn Thụ', 'Quy Nhơn', '', '', '', '', NULL),
('4251190008', '123', 'Nguyễn Bảo Khánh', '2007-06-21', 'Nam', 'Trưng Vương', 'Quy Nhơn', '', '', '', '', NULL),
('4251190009', '123', 'Hoàng Quỳnh Hương', '2007-10-05', 'Nữ', 'Thịnh Đán', 'Quy Nhơn', '', '', '', '', NULL),
('4251190010', '123', 'Lê Hùng', '2007-08-07', 'Nam', 'Tân Thịnh', 'Quy Nhơn', '', '', '', '', NULL),
('4251190011', '123456789', 'Lê Hồ Thu Ngân', '2001-12-19', 'Nữ', 'Bình Định', 'Quy Nhơn', '', '', '', '', NULL),
('4251190012', '123', 'Nguyễn Mạnh Hùng', '2007-01-06', 'Nam', 'Hoàng Văn Thụ', 'Quy Nhơn', '', '', '', '', NULL),
('4251190013', '123456789', 'Phan Nhật Tân', '2001-06-10', 'Nam', 'Gia Lai', 'Quy Nhơn', '', '', './Image/tan.jpg', '', NULL),
('4251190014', '123', 'Nguyễn Trường An', '2007-10-14', 'Nam', 'Phan Đình Phùng', 'Quy Nhơn', '', '', '', '', NULL),
('4251190015', '123', 'Trịnh Đức Anh', '2007-07-20', 'Nam', 'Trưng Vương', 'Quy Nhơn', '', '', '', '', NULL),
('4251190016', '123', 'Hà Mai Anh', '2007-07-02', 'Nữ', 'Quang Vinh', 'Quy Nhơn', '', '', '', '', NULL),
('4251190017', '123', 'Hoàng Phương Anh', '2007-02-22', 'Nữ', 'Tân Thịnh', 'Quy Nhơn', '', '', '', '', NULL),
('4251190018', '123', 'Ngô Vân Anh', '2007-07-15', 'Nữ', 'Hoàng Văn Thụ', 'Quy Nhơn', '', '', '', '', NULL),
('4251190019', '123', 'Phạm Hồng Dương', '2007-06-26', 'Nam', 'Phú Xá', 'Quy Nhơn', '', '', '', '', NULL),
('4251190020', '123', 'Phạm Thị Ngọc Hà', '2007-11-06', 'Nữ', 'Quyết Thắng', 'Quy Nhơn', '', '', '', '', NULL),
('4251190021', '123', 'Trần Lê Ngọc Hà', '2007-03-02', 'Nữ', 'Tích Lương', 'Quy Nhơn', '', '', '', '', NULL),
('4251190022', '123', 'Đồng Thu Hiền', '2007-03-28', 'Nữ', 'Phan Đình Phùng', 'Quy Nhơn', '', '', '', '', NULL),
('4251190023', '123', 'Đinh Thị Thu Hiền', '2007-05-08', 'Nữ', 'Trung Thành', 'Quy Nhơn', '', '', '', '', NULL),
('4251190024', '123', 'Nguyễn Anh Hiếu', '2007-04-23', 'Nam', 'Phú Xá', 'Quy Nhơn', '', '', '', '', NULL),
('4251190025', '123', 'Nguyễn Minh Hiếu', '2007-09-17', 'Nam', 'Đồng Quang', 'Quy Nhơn', '', '', '', '', NULL),
('4251190026', '123', 'Phạm Phương Hoa', '2007-06-26', 'Nữ', 'Phú Xá', 'Quy Nhơn', '', '', '', '', NULL),
('4251190027', '123', 'Nguyễn Minh Hoàng', '2007-12-20', 'Nam', 'Tân Thịnh', 'Quy Nhơn', '', '', '', '', NULL),
('4251190028', '123', 'Hà Thiên Phát', '2007-07-20', 'Nam', 'Ghềnh Ráng', 'Quy Nhơn', '', '', '', '', NULL),
('4251190029', '123', 'Nguyễn Ngọc Hoàng Hà', '2007-03-30', 'Nam', 'Tân Thịnh', 'Quy Nhơn', '', '', '', '', NULL),
('4251190030', '123', 'Công tằng tôn Nữ Lyna Bạch Ngọc', '2007-05-03', 'Nữ', 'Huế', 'Quy Nhơn', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailed_plan`
--

DROP TABLE IF EXISTS `detailed_plan`;
CREATE TABLE IF NOT EXISTS `detailed_plan` (
  `id_plan` int(11) NOT NULL,
  `id_SV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  `plus_point` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_plan`,`id_SV`),
  KEY `FK_Deta_Acc` (`id_SV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detailed_plan`
--

INSERT INTO `detailed_plan` (`id_plan`, `id_SV`, `position`, `plus_point`) VALUES
(1, '4251190002', 2, 5),
(1, '4251190013', 2, 5),
(1, '4251190014', 2, 5),
(1, '4251190016', 1, 5),
(1, '4251190017', 2, 5),
(1, '4251190019', 1, 5),
(1, '4251190020', 2, 5),
(1, '4251190022', 1, 5),
(1, '4251190023', 2, 5),
(2, '4251190001', 2, 5),
(2, '4251190002', 2, 5),
(2, '4251190004', 1, 5),
(2, '4251190005', 2, 5),
(2, '4251190006', 2, 5),
(2, '4251190008', 1, 5),
(2, '4251190009', 2, 5),
(2, '4251190010', 3, 5),
(2, '4251190011', 2, 5),
(2, '4251190012', 1, 5),
(2, '4251190013', 2, 5),
(2, '4251190016', 1, 5),
(2, '4251190017', 2, 5),
(2, '4251190020', 1, 5),
(2, '4251190026', 1, 5),
(2, '4251190027', 2, 5),
(2, '4251190030', 1, 5),
(3, '4251190001', 4, 5),
(3, '4251190002', 4, 5),
(3, '4251190003', 2, 7),
(3, '4251190004', 3, 7),
(3, '4251190006', 1, 7),
(3, '4251190007', 2, 7),
(3, '4251190010', 1, 7),
(3, '4251190011', 3, 5),
(3, '4251190013', 3, 5),
(3, '4251190014', 1, 7),
(3, '4251190015', 2, 7),
(3, '4251190021', 2, 5),
(3, '4251190024', 1, 5),
(3, '4251190025', 2, 5),
(3, '4251190026', 3, 5),
(3, '4251190028', 1, 5),
(3, '4251190029', 2, 7),
(3, '4251190030', 3, 7),
(4, '4251190001', 2, 9),
(4, '4251190002', 3, 9),
(4, '4251190004', 1, 9),
(4, '4251190005', 2, 9),
(4, '4251190006', 3, 9),
(4, '4251190008', 1, 9),
(4, '4251190009', 2, 9),
(4, '4251190016', 3, 7),
(4, '4251190017', 4, 7),
(4, '4251190018', 1, 7),
(4, '4251190019', 2, 7),
(4, '4251190022', 1, 7),
(4, '4251190023', 2, 7),
(4, '4251190026', 1, 7),
(4, '4251190027', 2, 7),
(4, '4251190030', 1, 7),
(5, '4251190001', 4, 7),
(5, '4251190002', 1, 7),
(5, '4251190003', 2, 7),
(5, '4251190005', 4, 7),
(5, '4251190011', 4, 9),
(5, '4251190012', 1, 9),
(5, '4251190013', 2, 5),
(5, '4251190016', 1, 5),
(5, '4251190017', 2, 5),
(5, '4251190020', 1, 5),
(5, '4251190021', 2, 5),
(5, '4251190024', 1, 5),
(5, '4251190025', 2, 5),
(5, '4251190028', 1, 5),
(5, '4251190029', 2, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id_plan` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `place` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_SV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_plan`),
  KEY `FK_Plan_Acc` (`id_SV`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plan`
--

INSERT INTO `plan` (`id_plan`, `title`, `time`, `place`, `level`, `note`, `file`, `id_SV`) VALUES
(1, 'Chào mừng ngày nhà giáo việt nam', '2021-11-20 07:00:00', 'Hội trường B', 2, 'Mặc áo khoa', '', '4251190002'),
(2, 'Leo núi', '2021-11-26 05:00:00', 'Vũng Chua', 1, 'Đem theo nước', '', '4251190013'),
(3, 'Thủ lĩnh Sinh viên', '2021-12-15 08:00:00', 'Sân sau thư viện', 3, 'Đeo huy hiệu đoàn hoặc hội', '', '4251190011'),
(4, 'Chào mừng ngày thành lập QĐND VN', '2021-12-22 19:00:00', 'Hội trường A', 2, 'Áo khoa', '', '4251190002'),
(5, 'Xuân yêu thương', '2021-12-29 07:00:00', 'Tập trung cổng trường', 2, 'Áo khoa', '', '4251190002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id_subject` int(11) NOT NULL,
  `id_SV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` float DEFAULT NULL,
  PRIMARY KEY (`id_subject`,`id_SV`),
  KEY `FK_Score_Acc` (`id_SV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `score`
--

INSERT INTO `score` (`id_subject`, `id_SV`, `point`) VALUES
(1, '4251190001', 7.6),
(1, '4251190002', 6.85),
(1, '4251190003', 9.82),
(1, '4251190004', 8.65),
(1, '4251190005', 7.05),
(1, '4251190006', 4.55),
(1, '4251190007', 4.02),
(1, '4251190008', 8.79),
(1, '4251190009', 6.92),
(1, '4251190010', 5.31),
(1, '4251190011', 8.66),
(1, '4251190012', 9.1),
(1, '4251190013', 6.05),
(1, '4251190014', 4.48),
(1, '4251190015', 7.57),
(1, '4251190016', 7.88),
(1, '4251190017', 5.3),
(1, '4251190018', 7.23),
(1, '4251190019', 8.36),
(1, '4251190020', 4.22),
(1, '4251190021', 6.8),
(1, '4251190022', 6.14),
(1, '4251190023', 8.88),
(1, '4251190024', 5.02),
(1, '4251190025', 7.01),
(1, '4251190026', 6.33),
(1, '4251190027', 7.53),
(1, '4251190028', 4.76),
(1, '4251190029', 7.89),
(1, '4251190030', 6.27),
(2, '4251190001', 5.32),
(2, '4251190002', 7.69),
(2, '4251190003', 5.74),
(2, '4251190004', 8.18),
(2, '4251190005', 7.85),
(2, '4251190006', 6.35),
(2, '4251190007', 8.52),
(2, '4251190008', 5.4),
(2, '4251190009', 5.65),
(2, '4251190010', 9.22),
(2, '4251190011', 8.5),
(2, '4251190012', 6.36),
(2, '4251190013', 6.54),
(2, '4251190014', 6.09),
(2, '4251190015', 8.72),
(2, '4251190016', 9.84),
(2, '4251190017', 7.95),
(2, '4251190018', 6.66),
(2, '4251190019', 8.63),
(2, '4251190020', 5.54),
(2, '4251190021', 5.8),
(2, '4251190022', 7.21),
(2, '4251190023', 6.39),
(2, '4251190024', 6.77),
(2, '4251190025', 6.61),
(2, '4251190026', 4.48),
(2, '4251190027', 4.59),
(2, '4251190028', 4.28),
(2, '4251190029', 5.99),
(2, '4251190030', 7.98),
(3, '4251190001', 5.38),
(3, '4251190002', 4.22),
(3, '4251190003', 9.9),
(3, '4251190004', 4.59),
(3, '4251190005', 6.39),
(3, '4251190006', 4.08),
(3, '4251190007', 4.11),
(3, '4251190008', 9.8),
(3, '4251190009', 6.79),
(3, '4251190010', 5.06),
(3, '4251190011', 5.26),
(3, '4251190012', 8.75),
(3, '4251190013', 6.49),
(3, '4251190014', 7.1),
(3, '4251190015', 5.7),
(3, '4251190016', 5.13),
(3, '4251190017', 7.98),
(3, '4251190018', 7.56),
(3, '4251190019', 5.14),
(3, '4251190020', 5.15),
(3, '4251190021', 8.98),
(3, '4251190022', 5.31),
(3, '4251190023', 5.42),
(3, '4251190024', 8.03),
(3, '4251190025', 9.9),
(3, '4251190026', 8.97),
(3, '4251190027', 8.19),
(3, '4251190028', 8.91),
(3, '4251190029', 7.49),
(3, '4251190030', 7.57),
(4, '4251190001', 7.1),
(4, '4251190002', 6.98),
(4, '4251190003', 9.75),
(4, '4251190004', 9.44),
(4, '4251190005', 8.34),
(4, '4251190006', 6.15),
(4, '4251190007', 7.09),
(4, '4251190008', 9.71),
(4, '4251190009', 5.77),
(4, '4251190010', 9.58),
(4, '4251190011', 8.52),
(4, '4251190012', 7.21),
(4, '4251190013', 7.61),
(4, '4251190014', 6.49),
(4, '4251190015', 8.22),
(4, '4251190016', 9.41),
(4, '4251190017', 6.89),
(4, '4251190018', 7.05),
(4, '4251190019', 8.65),
(4, '4251190020', 5.19),
(4, '4251190021', 9.94),
(4, '4251190022', 7.34),
(4, '4251190023', 9.82),
(4, '4251190024', 7.61),
(4, '4251190025', 8.1),
(4, '4251190026', 5.92),
(4, '4251190027', 4.76),
(4, '4251190028', 7.17),
(4, '4251190029', 4.83),
(4, '4251190030', 9.47),
(5, '4251190001', 4.71),
(5, '4251190002', 5.91),
(5, '4251190003', 7.56),
(5, '4251190004', 8.53),
(5, '4251190005', 6.21),
(5, '4251190006', 6.03),
(5, '4251190007', 9.5),
(5, '4251190008', 5.08),
(5, '4251190009', 6.49),
(5, '4251190010', 5.96),
(5, '4251190011', 4.7),
(5, '4251190012', 7.2),
(5, '4251190013', 6.55),
(5, '4251190014', 8.52),
(5, '4251190015', 8.48),
(5, '4251190016', 7.43),
(5, '4251190017', 9.4),
(5, '4251190018', 9.09),
(5, '4251190019', 9.86),
(5, '4251190020', 7.29),
(5, '4251190021', 5.39),
(5, '4251190022', 8.43),
(5, '4251190023', 9.31),
(5, '4251190024', 6.79),
(5, '4251190025', 7.14),
(5, '4251190026', 8.55),
(5, '4251190027', 8.29),
(5, '4251190028', 5.17),
(5, '4251190029', 5.47),
(5, '4251190030', 9.24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id_subject` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_credit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_subject`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`id_subject`, `sub_name`, `no_credit`) VALUES
(1, 'Giải tích', 1),
(2, 'Lập trình cơ bản', 3),
(3, 'Đại số tuyến tính', 2),
(4, 'Lập trình web', 3),
(5, 'Hệ QTCSDL', 2);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `detailed_plan`
--
ALTER TABLE `detailed_plan`
  ADD CONSTRAINT `FK_Deta_Acc` FOREIGN KEY (`id_SV`) REFERENCES `account` (`id_SV`),
  ADD CONSTRAINT `FK_Deta_Plan` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id_plan`);

--
-- Các ràng buộc cho bảng `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `FK_Plan_Acc` FOREIGN KEY (`id_SV`) REFERENCES `account` (`id_SV`);

--
-- Các ràng buộc cho bảng `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `FK_Score_Acc` FOREIGN KEY (`id_SV`) REFERENCES `account` (`id_SV`),
  ADD CONSTRAINT `FK_Score_Sub` FOREIGN KEY (`id_subject`) REFERENCES `subject` (`id_subject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
