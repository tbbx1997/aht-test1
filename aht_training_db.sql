-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 12:42 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `aht_training_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_pd` int(11) NOT NULL,
  `name_pd` text NOT NULL,
  `title` text NOT NULL,
  `featrure_image` text NOT NULL,
  `prices` float NOT NULL,
  `description_pd` text NOT NULL,
  `created_date_pd` date NOT NULL,
  `modified_date_pd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_pd`, `name_pd`, `title`, `featrure_image`, `prices`, `description_pd`, `created_date_pd`, `modified_date_pd`) VALUES
(5, 'product 1', 'title 1', 'publics/assets/images/product1.jpg', 56, 'des 1', '2021-10-04', '2021-10-04'),
(6, 'product 2', 'title 2', 'publics/assets/images/product2.jpg', 58, 'des 2d', '2021-10-05', '2021-10-06'),
(12, 'Product 5', 'title 5', 'publics/assets/images/product5.jpg', 80, 'des 5', '2021-10-05', '2021-10-05'),
(13, 'Product 6', 'title 6', 'publics/assets/images/product6.jpg', 78, 'des 6', '2021-10-05', '2021-10-05'),
(14, 'Product 9', 'titlt9', 'publics/assets/images/product9.jpg', 69, 'des 9', '2021-10-05', '2021-10-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `level` int(10) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `level`, `created_date`, `updated_date`) VALUES
(1, 'havantam', 'hvt@gmail.com', 'admin', 0, '2021-09-16', '2021-09-16'),
(2, 'havantu', 'hvtd@gmail.com', '123', 1, '2021-09-17', '2021-09-17'),
(20, 'hihi', 'adsad', '1', 0, '2021-10-05', '0000-00-00'),
(21, 'hehe', 'dadasdsad', '1', 1, '2021-10-05', '0000-00-00'),
(22, 'hehe', 't@gmail.com', '1', 1, '2021-10-05', '0000-00-00'),
(29, 'tamhv_tn', 'dsffdf', '1', 1, '2021-10-05', '2021-10-05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pd`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_pd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
