-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2022 lúc 10:04 AM
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
(1, 1, 'Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam', 'Success Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet aut eligendi id fugiat deserunt. Possimus explicabo non maiores adipisci dolore ducimus voluptatem odio, tempora ex excepturi expedita aut assumenda dolorum, veritatis dicta similique et sint culpa a. Magni, adipisci. A dolorem quasi dicta laudantium? Distinctio molestiae dolor ipsa, ullam eveniet voluptatibus quisquam recusandae, dicta voluptate harum magni placeat amet blanditiis animi! Ratione architecto asperiores voluptate labore, nostrum enim cumque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis temporibus asperiores consequuntur. Voluptates, tenetur, quod voluptas similique aliquam eum expedita neque dolorem nemo velit delectus voluptatum accusantium non obcaecati culpa qui? Atque, molestias? Placeat perspiciatis inventore at molestias voluptates iste maiores sed cupiditate minima reiciendis illum, consequuntur quaerat accusantium incidunt molestiae illo dolorem necessitatibus voluptatem aliquid temporibus rem ea? Aliquid vel quaerat dicta quidem, aspernatur ratione debitis animi id! A debitis, magnam nisi nostrum laudantium molestiae voluptates non facere. Atque rerum quod aliquam ea officia itaque expedita, perspiciatis aspernatur. Maiores ipsa sed vel ea rem. Cum culpa pariatur corrupti molestias.'),
(2, 3, 'Hanoi, Vietnam', '[Hải Phát Land] Nhân Viên Kinh Doanh Bất Động Sản (Lương Cứng + Hỗ Trợ Mkt + Hoa Hồng Tới 200 Triệu / Giao Dịch)'),
(3, 4, 'Đà Nẵng', 'Trưởng Phòng Kinh Doanh Bất Động Sản (Lương Cứng Tới 40 Triệu + Hoa Hồng)'),
(4, 5, 'Thái Bình', 'Nhân Viên Dự Án BĐS Vinhomes Smart City, Vinhomes Ocean Park'),
(6, 6, 'Thái Bình', 'Nhân Viên Kinh Doanh Bất Động Sản Tài Chính Lương Trên 10 Triệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_post`
--

CREATE TABLE `db_post` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_post` int(11) NOT NULL,
  `text_post` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_post`
--

INSERT INTO `db_post` (`id_user`, `id_post`, `text_post`) VALUES
(1, 19, 'hôm nay là một ngày đẹp trời'),
(3, 20, 'xin chào các bạn hhihi .'),
(3, 29, 'hello world');

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
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_user`
--

INSERT INTO `db_user` (`id_user`, `first_name`, `last_name`, `email_user`, `password_user`, `images`, `addr`, `city`, `education`) VALUES
(1, 'Nguyễn Thị', 'Ánh Nhung', 'savitar@gmail.com', '$2y$10$IyHyBDrgfDookUA1hMMW4eKPhhTdFDrR6huykYfXL6ynuNr7bJaE2', 'https://images.unsplash.com/photo-1641305286508-f8f2d31f04dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60', 'Việt Nam', 'Ha Noi', 'TLU'),
(2, 'Bùi Đức', 'Liêm', 'liemvv@gmail.com', '$2y$10$8EAcOnpTiYHlV/gji0miieg6hqZgzxK9lUAiG5pQyESk7DhptAWc6', 'https://images.unsplash.com/photo-1640622659613-26d7d08893e4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60', 'Việt Nam', 'Thái Bình', 'TLU'),
(3, 'Nguyễn Quốc', 'Bình', 'a@gmail.com', '$2y$10$4W7uwoOjwcbmMg9LQseQF.dhcFp9WvtzJPDgiKmtXHDl8MkWEWjM2', 'https://images.unsplash.com/photo-1593642634524-b40b5baae6bb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60', 'Việt Nam', 'Thái Bình', 'TLU'),
(4, 'Nguyễn Thị', 'Hoài', 'moriOn@gmail.com', '$2y$10$ddCoXQKfQbM9d0zmR4bDc.yreSq45LdZQH624LrOvo.HGBXBvAFHS', 'https://images.unsplash.com/photo-1641810780702-57d275dfdc59?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60', 'Việt Nam', 'Hà Nam', 'TLU'),
(6, 'Vũ Xuân', 'Toàn', 'yasuo@gmail.com', '$2y$10$pP1edBh69evzjTYqUn2oyO6GX/AzrVP4yBzjqYsw5wJfVy52V7Wuq', 'https://images.unsplash.com/photo-1641763088361-de374d8a1b8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1N3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60', 'Việt Nam', 'Hải Dương', 'TLU'),
(7, 'Đỗ Văn', 'Thấp', 'lucian@gmail.com', '$2y$10$L7aBZL6VGA3i3mrM1bB65Of49voqYf51/n3X6UkfDcPPvu/51oPbm', 'https://images.unsplash.com/photo-1471897488648-5eae4ac6686b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw3MHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60', 'Việt Nam', 'Huế', 'TLU');

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
  MODIFY `id_job` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `db_post`
--
ALTER TABLE `db_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
