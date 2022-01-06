-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 07:40 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_daihoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` int(10) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `trinhdo` varchar(50) NOT NULL,
  `chuyenmon` varchar(50) NOT NULL,
  `hocham` varchar(50) NOT NULL,
  `hocvi` varchar(50) NOT NULL,
  `coquan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(1, 'Nguyen Van A', '1995-01-04 13:26:37', 'Nữ', 'Thạc sĩ', 'CNTT', 'phó giáo sư', 'tốt nghiệp cao học', 'đại học thủy lợi'),
(2, 'Nguyen Van B', '1998-06-04 13:26:37', 'Nam', 'Tiến sĩ', 'CNTT', 'phó giáo sư', 'tốt nghiệp tiến sĩ', 'đại học thủy lợi'),
(3, 'Nguyen Van C', '1999-01-22 13:26:37', 'Nam', 'Thạc sĩ', 'CNTT', ' giáo sư', 'tốt nghiệp cao học', 'đại học thủy lợi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
