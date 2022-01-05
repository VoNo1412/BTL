-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2022 lúc 03:00 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_job`
--

CREATE TABLE `db_job` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_job` int(10) UNSIGNED NOT NULL,
  `address_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_job` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_job`
--

INSERT INTO `db_job` (`id_user`, `id_job`, `address_job`, `post_job`) VALUES
(1, 1, 'Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet aut eligendi id fugiat deserunt. Possimus explicabo non maiores adipisci dolore ducimus voluptatem odio, tempora ex excepturi expedita aut assumenda dolorum, veritatis dicta similique et sint culpa a. Magni, adipisci. A dolorem quasi dicta laudantium? Distinctio molestiae dolor ipsa, ullam eveniet voluptatibus quisquam recusandae, dicta voluptate harum magni placeat amet blanditiis animi! Ratione architecto asperiores voluptate labore, nostrum enim cumque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis temporibus asperiores consequuntur. Voluptates, tenetur, quod voluptas similique aliquam eum expedita neque dolorem nemo velit delectus voluptatum accusantium non obcaecati culpa qui? Atque, molestias? Placeat perspiciatis inventore at molestias voluptates iste maiores sed cupiditate minima reiciendis illum, consequuntur quaerat accusantium incidunt molestiae illo dolorem necessitatibus voluptatem aliquid temporibus rem ea? Aliquid vel quaerat dicta quidem, aspernatur ratione debitis animi id! A debitis, magnam nisi nostrum laudantium molestiae voluptates non facere. Atque rerum quod aliquam ea officia itaque expedita, perspiciatis aspernatur. Maiores ipsa sed vel ea rem. Cum culpa pariatur corrupti molestias.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_user`
--

CREATE TABLE `db_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_user`
--

INSERT INTO `db_user` (`id_user`, `first_name`, `last_name`, `email_user`, `password_user`, `images`) VALUES
(1, 'Vo', 'nO', 'savitar@gmail.com', '$2y$10$IyHyBDrgfDookUA1hMMW4eKPhhTdFDrR6huykYfXL6ynuNr7bJaE2', 'https://images.unsplash.com/photo-1641305286508-f8f2d31f04dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_job`
--
ALTER TABLE `db_job`
  ADD PRIMARY KEY (`id_job`),
  ADD KEY `FK_UserJob` (`id_user`);

--
-- Chỉ mục cho bảng `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_job`
--
ALTER TABLE `db_job`
  MODIFY `id_job` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_job`
--
ALTER TABLE `db_job`
  ADD CONSTRAINT `FK_UserJob` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
