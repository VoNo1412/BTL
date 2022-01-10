-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2022 lúc 02:21 PM
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
(1, 1, 'Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam', 'Success Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet aut eligendi id fugiat deserunt. Possimus explicabo non maiores adipisci dolore ducimus voluptatem odio, tempora ex excepturi expedita aut assumenda dolorum, veritatis dicta similique et sint culpa a. Magni, adipisci. A dolorem quasi dicta laudantium? Distinctio molestiae dolor ipsa, ullam eveniet voluptatibus quisquam recusandae, dicta voluptate harum magni placeat amet blanditiis animi! Ratione architecto asperiores voluptate labore, nostrum enim cumque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis temporibus asperiores consequuntur. Voluptates, tenetur, quod voluptas similique aliquam eum expedita neque dolorem nemo velit delectus voluptatum accusantium non obcaecati culpa qui? Atque, molestias? Placeat perspiciatis inventore at molestias voluptates iste maiores sed cupiditate minima reiciendis illum, consequuntur quaerat accusantium incidunt molestiae illo dolorem necessitatibus voluptatem aliquid temporibus rem ea? Aliquid vel quaerat dicta quidem, aspernatur ratione debitis animi id! A debitis, magnam nisi nostrum laudantium molestiae voluptates non facere. Atque rerum quod aliquam ea officia itaque expedita, perspiciatis aspernatur. Maiores ipsa sed vel ea rem. Cum culpa pariatur corrupti molestias.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_post`
--

CREATE TABLE `db_post` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_post` int(11) NOT NULL,
  `text_post` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_post` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_post`
--

INSERT INTO `db_post` (`id_user`, `id_post`, `text_post`, `img_post`) VALUES
(1, 19, '', NULL),
(3, 20, 'sad', NULL),
(7, 21, 'sad', NULL),
(7, 22, 'push', NULL),
(7, 23, 'sad', NULL),
(7, 24, 'sad', NULL),
(1, 25, 'how are you ', NULL),
(1, 26, 'sad', NULL),
(1, 27, '', NULL);

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
  `images` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postIMG` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_user`
--

INSERT INTO `db_user` (`id_user`, `first_name`, `last_name`, `email_user`, `password_user`, `images`, `addr`, `city`, `education`, `postIMG`) VALUES
(1, 'Liem', 'nO', 'savitar@gmail.com', '$2y$10$IyHyBDrgfDookUA1hMMW4eKPhhTdFDrR6huykYfXL6ynuNr7bJaE2', 'https://images.unsplash.com/photo-1641305286508-f8f2d31f04dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60', 'Viet Nam', 'Ha Noi', 'Truong Dai Hoc Thuy Loi', NULL),
(2, 'liem', 'vv', 'liemvv@gmail.com', '$2y$10$8EAcOnpTiYHlV/gji0miieg6hqZgzxK9lUAiG5pQyESk7DhptAWc6', '', NULL, NULL, NULL, NULL),
(3, 'Vo', 'nO', 'a@gmail.com', '$2y$10$4W7uwoOjwcbmMg9LQseQF.dhcFp9WvtzJPDgiKmtXHDl8MkWEWjM2', '', NULL, NULL, NULL, NULL),
(4, 'liemvv hận đời', 'đối', 'moriOn@gmail.com', '$2y$10$ddCoXQKfQbM9d0zmR4bDc.yreSq45LdZQH624LrOvo.HGBXBvAFHS', '', 'Viet Nam', 'Thai Binh MO HO ROI', 'TLU', NULL),
(5, 'Vo', 'nO', 'thresh@gmail.com', '', '', NULL, NULL, NULL, NULL),
(6, 'yauso', 'vono', 'yasuo@gmail.com', '$2y$10$pP1edBh69evzjTYqUn2oyO6GX/AzrVP4yBzjqYsw5wJfVy52V7Wuq', '', NULL, NULL, NULL, NULL),
(7, 'Lucian', 'nO', 'lucian@gmail.com', '$2y$10$L7aBZL6VGA3i3mrM1bB65Of49voqYf51/n3X6UkfDcPPvu/51oPbm', '', '', '', '', NULL);

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
-- Chỉ mục cho bảng `db_post`
--
ALTER TABLE `db_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

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
-- AUTO_INCREMENT cho bảng `db_post`
--
ALTER TABLE `db_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_job`
--
ALTER TABLE `db_job`
  ADD CONSTRAINT `FK_UserJob` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`);

--
-- Các ràng buộc cho bảng `db_post`
--
ALTER TABLE `db_post`
  ADD CONSTRAINT `db_post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
