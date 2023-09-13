-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 29, 2023 lúc 03:36 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cine_max_db`
--
CREATE DATABASE IF NOT EXISTS `cine_max_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cine_max_db`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(11) NOT NULL,
  `id_suatchieu` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booking_DateTime` datetime NOT NULL,
  `id_seat` int(11) NOT NULL,
  `amout` int(255) DEFAULT 450000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`idbooking`, `id_suatchieu`, `firstName`, `lastName`, `phone`, `email`, `booking_DateTime`, `id_seat`, `amout`) VALUES
(1, 2, 'Trần', 'Thịnh', 123456789, 'tdthinhtran961@gmail.com', '2023-05-26 14:43:47', 1, 450000),
(2, 1, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-15 07:31:38', 6, 450000),
(3, 1, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-15 07:31:38', 7, 450000),
(8, 4, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-15 11:28:49', 2, 450000),
(10, 11, 'Trần', 'Thịnh', 382892550, 'tdthinhtran9@gmail.com', '2023-06-16 12:44:34', 15, 450000),
(12, 3, 'Trần', 'Thịnh', 382892550, 'tdthinhtran21@gmail.com', '2023-06-16 12:48:41', 7, 450000),
(13, 3, 'Trần', 'Thịnh', 382892550, 'tdthinhtran21@gmail.com', '2023-06-16 12:48:41', 10, 450000),
(14, 9, 'Trần', 'Thịnh', 382892550, 'tdthinhtran20@gmail.com', '2023-06-16 12:51:22', 10, 450000),
(15, 2, 'Trần', 'Thịnh', 382892550, 'tdthinhtran3@gmail.com', '2023-06-16 12:53:29', 11, 450000),
(16, 1, 'Trần', 'Thịnh', 382892550, 'tdthinhtran21@gmail.com', '2023-06-16 12:55:04', 14, 450000),
(17, 3, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 12:55:53', 16, 450000),
(18, 2, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 12:56:13', 13, 450000),
(19, 10, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 12:59:53', 4, 450000),
(20, 10, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 01:01:09', 13, 450000),
(21, 10, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 01:03:05', 16, 450000),
(22, 12, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 01:08:11', 16, 450000),
(23, 12, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 01:09:37', 13, 450000),
(24, 3, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 01:24:26', 13, 450000),
(25, 10, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 01:49:56', 6, 450000),
(26, 4, 'Trần', 'Thịnh', 382892550, 'tdthinhtran961@gmail.com', '2023-06-16 02:49:09', 15, 450000),
(27, 24, 'Thịnh', 'Trần', 382892550, 'tdthinhtran10@gmail.com', '2023-06-16 04:48:35', 11, 450000),
(28, 23, 'asdsa', 'avas', 382892550, 'tdthinhtran961@gmail.com', '2023-06-19 12:29:59', 11, 450000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `idmovie` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `actor` varchar(150) NOT NULL,
  `relDate` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`idmovie`, `title`, `genre`, `director`, `actor`, `relDate`, `image`) VALUES
(1, 'FAST AND FURIOUS X', 'Hành Động, Tội phạm', 'Louis Leterrier', 'Vin Diesel, Jason Momoa, Brie Larson,…', '2023-05-19', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/7/0/700x1000-fastx_1.jpg'),
(2, 'PHIM ĐIỆN ẢNH DORAEMON: NOBITA VÀ VÙNG ĐẤT LÝ TƯỞNG TRÊN BẦU TRỜI', 'Hoạt Hình', 'Takumi Doyama', 'Doraemon và những người bạn...', '2023-05-26', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/m/a/main_poster_-_dmmovie2023.jpg'),
(3, 'NÀNG TIÊN CÁ', 'Phiêu lưu', 'Rob Marshall', 'Halle Bailey, Jonah Hauer-King, Daveed Diggs, Awkwafina, Jacob Tremblay, Noma Dumezweni, Art Malik, with Javier Bardem and Melissa McCarthy', '2023-05-26', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/l/t/ltmer_007c_g_vie-vn_4x5_.jpg'),
(4, 'LẬT MẶT 6: TẤM VÉ ĐỊNH MỆNH', 'Hài, Hành Động, Hồi hộp, Tâm Lý\r\n', 'Lý Hải', 'Lý Hải, Quốc Cường, Trung Dũng, Huy Khánh, Thanh Thức, Trần Kim Hải, Huỳnh Thi, Diệp Bảo Ngọc, Tú Tri, Quỳnh Như, Tạ Lâm, bé Thùy Linh…', '2023-04-28', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/l/m/lm6_2x3_layout.jpg'),
(5, 'TRANSFORMERS: QUÁI THÚ TRỖI DẬY', 'Hành Động, Khoa Học Viễn Tưởng, Phiêu Lưu', 'Steven Caple Jr.', 'Michelle Yeoh, Dominique Fishback, Ron Perlman', '2023-06-09', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/7/0/700x1000_.jpg'),
(43, 'BÉ TRỨNG: NÁO LOẠN CHÂU PHI', 'Hoạt Hình', 'Bruno Bichir, Maite Perroni, Carlos Espejel', 'Gabriel Riva Palacio Alatriste, Rodolfo Riva Palacio Alatriste', '2023-06-09', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/b/_/b_tr_ng_-_700_x_1000_px.jpg'),
(44, 'Con nhót mót chồng', 'Comedy', 'Thái Hòa, Thu Trang, Tiến Luật, NSND Hồng Vân, Huỳ', 'Vũ Ngọc Đãng', '2023-04-18', 'https://cinestar.com.vn/pictures/Cinestar/04-2023/con-nhot-mot-chong.jpg'),
(45, 'GUARDIANS OF THE GALAXY VOL 3', 'Heroes, Action', 'Chris Pratt, Zoe Saldana, Dave Bautista', 'James Gunn', '2023-05-01', 'https://cinestar.com.vn/pictures/Cinestar/05-2023/ve-binh-giai-ngan-ha.jpg'),
(46, 'NGƯỜI NHỆN: DU HÀNH VŨ TRỤ NHỆN', 'Hành Động, Khoa Học Viễn Tưởng, Phiêu Lưu', 'Steven Caple Jr.', 'Michelle Yeoh, Dominique Fishback, Ron Perlman', '2023-06-09', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/r/s/rsz_spiderverse2_poster_4.jpg'),
(47, 'PHIM ANH EM SUPER MARIO', 'Hài, Hoạt Hình, Phiêu Lưu', 'Aaron Horvath, Michael Jelenic', 'Chris Pratt, Anya Taylor-Joy, Charlie Day, …', '2023-04-07', 'https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/s/u/super_mario_bros._payoff_poster.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `idroom` int(11) NOT NULL,
  `room` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`idroom`, `room`) VALUES
(1, 'R1'),
(2, 'R2'),
(3, 'R3'),
(4, 'R4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `seat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `seats`
--

INSERT INTO `seats` (`id`, `seat`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'B1'),
(6, 'B2'),
(7, 'B3'),
(8, 'B4'),
(9, 'C1'),
(10, 'C2'),
(11, 'C3'),
(12, 'C4'),
(13, 'D1'),
(14, 'D2'),
(15, 'D3'),
(16, 'D4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giochieu`
--

CREATE TABLE `tbl_giochieu` (
  `idgiochieu` int(11) NOT NULL,
  `gio_chieu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giochieu`
--

INSERT INTO `tbl_giochieu` (`idgiochieu`, `gio_chieu`) VALUES
(1, '07:00:00'),
(2, '11:00:00'),
(3, '15:00:00'),
(4, '19:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ngaychieu`
--

CREATE TABLE `tbl_ngaychieu` (
  `idngaychieu` int(11) NOT NULL,
  `ngay_chieu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ngaychieu`
--

INSERT INTO `tbl_ngaychieu` (`idngaychieu`, `ngay_chieu`) VALUES
(1, '2023-06-18'),
(2, '2023-06-19'),
(3, '2023-06-20'),
(4, '2023-06-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_suatchieu`
--

CREATE TABLE `tbl_suatchieu` (
  `idsuatchieu` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_time` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_suatchieu`
--

INSERT INTO `tbl_suatchieu` (`idsuatchieu`, `date`, `id_time`, `id_movie`, `id_room`) VALUES
(1, '2023-06-19', 1, 47, 1),
(2, '2023-06-19', 1, 46, 2),
(3, '2023-06-19', 1, 45, 3),
(4, '2023-06-19', 1, 44, 4),
(9, '2023-06-20', 2, 43, 1),
(10, '2023-06-19', 2, 5, 2),
(11, '2023-06-20', 2, 4, 3),
(12, '2023-06-19', 2, 3, 4),
(13, '2023-06-19', 3, 47, 1),
(14, '2023-06-19', 3, 46, 2),
(15, '2023-06-19', 3, 45, 3),
(16, '2023-06-19', 3, 44, 4),
(17, '2023-06-19', 4, 43, 4),
(18, '2023-06-19', 4, 5, 3),
(19, '2023-06-19', 4, 4, 2),
(20, '2023-06-19', 4, 3, 1),
(21, '2023-06-20', 1, 1, 4),
(22, '2023-06-20', 1, 2, 3),
(23, '2023-06-20', 1, 3, 2),
(24, '2023-06-20', 1, 4, 1),
(25, '2023-06-20', 2, 47, 4),
(26, '2023-06-20', 2, 46, 3),
(27, '2023-06-20', 2, 45, 2),
(28, '2023-06-20', 2, 44, 1),
(29, '2023-06-20', 3, 43, 4),
(30, '2023-06-20', 3, 5, 3),
(31, '2023-06-20', 3, 4, 2),
(32, '2023-06-20', 3, 3, 1),
(33, '2023-06-20', 4, 1, 1),
(34, '2023-06-20', 4, 2, 2),
(35, '2023-06-20', 4, 3, 3),
(36, '2023-06-20', 4, 4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'thinhadmin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'thinhuser', '7374ce58be384f97fb15117dd99fba3c'),
(3, 'thinhadmin2', '87ef067531ad5e77c15a8709c37953ef');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`),
  ADD KEY `booking_seat` (`id_seat`),
  ADD KEY `id_suatchieu` (`id_suatchieu`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`idmovie`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`idroom`);

--
-- Chỉ mục cho bảng `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_giochieu`
--
ALTER TABLE `tbl_giochieu`
  ADD PRIMARY KEY (`idgiochieu`);

--
-- Chỉ mục cho bảng `tbl_ngaychieu`
--
ALTER TABLE `tbl_ngaychieu`
  ADD PRIMARY KEY (`idngaychieu`);

--
-- Chỉ mục cho bảng `tbl_suatchieu`
--
ALTER TABLE `tbl_suatchieu`
  ADD PRIMARY KEY (`idsuatchieu`),
  ADD KEY `id_date` (`date`),
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `id_time` (`id_time`),
  ADD KEY `id_room` (`id_room`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `idmovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_giochieu`
--
ALTER TABLE `tbl_giochieu`
  MODIFY `idgiochieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_ngaychieu`
--
ALTER TABLE `tbl_ngaychieu`
  MODIFY `idngaychieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_suatchieu`
--
ALTER TABLE `tbl_suatchieu`
  MODIFY `idsuatchieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_suatchieu`) REFERENCES `tbl_suatchieu` (`idsuatchieu`);

--
-- Các ràng buộc cho bảng `tbl_suatchieu`
--
ALTER TABLE `tbl_suatchieu`
  ADD CONSTRAINT `tbl_suatchieu_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`idmovie`),
  ADD CONSTRAINT `tbl_suatchieu_ibfk_3` FOREIGN KEY (`id_time`) REFERENCES `tbl_giochieu` (`idgiochieu`),
  ADD CONSTRAINT `tbl_suatchieu_ibfk_4` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`idroom`);
--
-- Cơ sở dữ liệu: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Đang đổ dữ liệu cho bảng `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"cine_max_db\",\"table\":\"booking\"},{\"db\":\"cine_max_db\",\"table\":\"movies\"},{\"db\":\"cine_max_db\",\"table\":\"tbl_suatchieu\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-08-29 01:35:12', '{\"lang\":\"vi\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Chỉ mục cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Chỉ mục cho bảng `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Chỉ mục cho bảng `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Chỉ mục cho bảng `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Chỉ mục cho bảng `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Chỉ mục cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Chỉ mục cho bảng `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Chỉ mục cho bảng `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Chỉ mục cho bảng `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Chỉ mục cho bảng `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Cơ sở dữ liệu: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
