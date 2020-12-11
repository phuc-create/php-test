-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2020 lúc 08:16 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php-test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id_c` int(11) NOT NULL,
  `name_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `des_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id_c`, `name_c`, `des_c`) VALUES
(1, 'Công ty Cám heo', 'đây là công ty cám heo'),
(2, 'Công ty Cám Cá', 'đây là công ty cám cá'),
(3, 'Công ty Cám Gà', 'đây là công ty cám gà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_p` int(11) NOT NULL,
  `name_p` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_p` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_p` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota_p` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_p`, `name_p`, `price_p`, `img_p`, `mota_p`, `id_c`) VALUES
(1, 'Cám cá 1', '200000', 'ca1.png', '', 2),
(2, 'Cám gà', '2300000', 'ga2.png', '', 3),
(3, 'Cám heo 2020', '300000', 'heo3.png', '', 1),
(4, 'Cám gà 2', '23000000', 'ga2.png', 'cám gà', 3),
(5, 'cám gà 2000', '300000000', 'ga3.jpg', 'cám gà 2000', 3),
(6, 'cám gà hiện đại', '230400000', 'ga5.png', 'cám gà 2000', 3),
(7, 'cám gà 1999', '2134444400', 'ga3.jpg', 'cám gà 2000', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_c`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `fk_id_c` (`id_c`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_id_c` FOREIGN KEY (`id_c`) REFERENCES `company` (`id_c`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
