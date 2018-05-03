-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2018 lúc 03:30 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_ben_xe_the`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban_ve`
--

CREATE TABLE `ban_ve` (
  `id_ve` int(11) NOT NULL,
  `id_nhan_vien` int(11) NOT NULL,
  `id_xe` int(11) NOT NULL,
  `vi_tri_ghe` int(11) NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat_luong`
--

CREATE TABLE `chat_luong` (
  `id_chat_luong` int(11) NOT NULL,
  `chat_luong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chat_luong`
--

INSERT INTO `chat_luong` (`id_chat_luong`, `chat_luong`) VALUES
(11, '5 sao'),
(12, '5 sao 1'),
(15, '4 sao'),
(16, '6 sao'),
(17, 'dfdfs'),
(18, 'dfsdf'),
(19, 'sdfsf'),
(20, 'sdfsfd'),
(21, 'fsdfsdfsd'),
(23, 'sdfdsfsdf'),
(24, 'sdfsdfsdf'),
(25, 'sdfsdfsd'),
(26, 'sdfsafsadf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `id_chuc_vu` int(11) NOT NULL,
  `ten_chuc_vu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chuc_vu`
--

INSERT INTO `chuc_vu` (`id_chuc_vu`, `ten_chuc_vu`) VALUES
(1, 'Nhân viên bán vé'),
(2, 'Phó giám đốc'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chu_xe`
--

CREATE TABLE `chu_xe` (
  `id_chu_xe` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `so_cmnd` varchar(12) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `so_dien_thoai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hoa_don` int(11) NOT NULL,
  `id_nhan_vien` int(11) NOT NULL,
  `id_xe` int(11) NOT NULL,
  `gia_tien` int(11) NOT NULL,
  `ngay_lap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lenh_xuat_ben`
--

CREATE TABLE `lenh_xuat_ben` (
  `id_lenh_xuat_ben` int(11) NOT NULL,
  `id_xe` int(11) NOT NULL,
  `id_hoa_don` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luong`
--

CREATE TABLE `luong` (
  `id_luong` int(11) NOT NULL,
  `he_so_luong` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `luong`
--

INSERT INTO `luong` (`id_luong`, `he_so_luong`) VALUES
(1, '1.26'),
(2, '1.25'),
(3, '1.00'),
(4, '0.50'),
(5, '0.75');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `id_chuc_vu` int(11) NOT NULL,
  `id_luong` int(11) NOT NULL,
  `id_phong_ban` int(11) NOT NULL,
  `quyen_truy_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id_nhan_vien`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `ngay_sinh`, `dia_chi`, `id_chuc_vu`, `id_luong`, `id_phong_ban`, `quyen_truy_cap`) VALUES
(1, 'Thế đẹp trai', 'thedeptrainhat', '123456', '2018-04-02', 'Nghệ An', 1, 1, 1, 0),
(2, 'Nguyễn Bá Thế', 'nguyenbathe', '123456', '2018-04-17', 'Vinh Nghệ An', 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieu_dang_tai`
--

CREATE TABLE `phieu_dang_tai` (
  `id_phieu_dang_tai` int(11) NOT NULL,
  `id_tuyen` int(11) NOT NULL,
  `id_xe` int(11) NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_ban`
--

CREATE TABLE `phong_ban` (
  `id_phong_ban` int(11) NOT NULL,
  `ten_phong_ban` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phong_ban`
--

INSERT INTO `phong_ban` (`id_phong_ban`, `ten_phong_ban`) VALUES
(1, 'Phòng kế hoạch'),
(2, 'Phòng bảo vệ'),
(3, 'Kiểm tra chất lượng'),
(4, 'sfasfasf'),
(5, 'sdfasf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyen`
--

CREATE TABLE `tuyen` (
  `id_tuyen` int(11) NOT NULL,
  `dia_diem_1` varchar(200) NOT NULL,
  `dia_diem_2` varchar(200) NOT NULL,
  `do_dai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `id_xe` int(11) NOT NULL,
  `bien_so` varchar(20) NOT NULL,
  `so_ghe` int(11) NOT NULL,
  `id_chu_xe` int(11) NOT NULL,
  `id_tuyen` int(11) NOT NULL,
  `id_chat_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban_ve`
--
ALTER TABLE `ban_ve`
  ADD PRIMARY KEY (`id_ve`);

--
-- Chỉ mục cho bảng `chat_luong`
--
ALTER TABLE `chat_luong`
  ADD PRIMARY KEY (`id_chat_luong`);

--
-- Chỉ mục cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`id_chuc_vu`);

--
-- Chỉ mục cho bảng `chu_xe`
--
ALTER TABLE `chu_xe`
  ADD PRIMARY KEY (`id_chu_xe`);

--
-- Chỉ mục cho bảng `lenh_xuat_ben`
--
ALTER TABLE `lenh_xuat_ben`
  ADD PRIMARY KEY (`id_lenh_xuat_ben`);

--
-- Chỉ mục cho bảng `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`id_luong`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id_nhan_vien`);

--
-- Chỉ mục cho bảng `phieu_dang_tai`
--
ALTER TABLE `phieu_dang_tai`
  ADD PRIMARY KEY (`id_phieu_dang_tai`);

--
-- Chỉ mục cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  ADD PRIMARY KEY (`id_phong_ban`);

--
-- Chỉ mục cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  ADD PRIMARY KEY (`id_tuyen`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id_xe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ban_ve`
--
ALTER TABLE `ban_ve`
  MODIFY `id_ve` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `chat_luong`
--
ALTER TABLE `chat_luong`
  MODIFY `id_chat_luong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `id_chuc_vu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `chu_xe`
--
ALTER TABLE `chu_xe`
  MODIFY `id_chu_xe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `lenh_xuat_ben`
--
ALTER TABLE `lenh_xuat_ben`
  MODIFY `id_lenh_xuat_ben` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `luong`
--
ALTER TABLE `luong`
  MODIFY `id_luong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id_nhan_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `phieu_dang_tai`
--
ALTER TABLE `phieu_dang_tai`
  MODIFY `id_phieu_dang_tai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  MODIFY `id_phong_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  MODIFY `id_tuyen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `id_xe` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
