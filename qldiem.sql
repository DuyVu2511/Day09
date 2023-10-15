-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 07:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `MaSV` char(10) NOT NULL,
  `MaMH` char(10) NOT NULL,
  `Lanthi` int(11) NOT NULL,
  `Diem` double(5,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `Makhoa_TDV` char(10) NOT NULL,
  `Tenkhoa_TDV` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`Makhoa_TDV`, `Tenkhoa_TDV`) VALUES
('', 'Công Nghệ Thông tin'),
('', 'Thiết kế đồ họa'),
('', 'Quốc tế học');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` char(10) NOT NULL,
  `TenMH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`) VALUES
('1', 'Công nghệ thông tin'),
('2', 'Toán cao cấp'),
('3', 'Ngôn ngữ Nhật');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV_TDV` char(10) NOT NULL,
  `Hoten_TDV` text NOT NULL,
  `Ngaysinh_TDV` date NOT NULL,
  `Gioitinh_TDV` tinyint(1) NOT NULL,
  `Makhoa_TDV` char(10) NOT NULL,
  `Anh_TDV` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV_TDV`, `Hoten_TDV`, `Ngaysinh_TDV`, `Gioitinh_TDV`, `Makhoa_TDV`, `Anh_TDV`) VALUES
('123', 'asd', '2023-10-03', 1, '23', 'qwd'),
('202', 'asd', '2010-11-22', 0, 'QTH', 'Screenshot (36).png'),
('2210900137', 'Đỗ Khắc Việt', '2004-08-20', 1, '3', 'dokhacviet.jpg'),
('2210900138', 'Trần Duy Vũ', '2004-11-25', 1, '1', 'tranduyvu.png'),
('2210900140', 'Nguyễn Bá Trường', '2004-01-13', 1, '2', 'nguyenbatruong.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`Lanthi`),
  ADD UNIQUE KEY `MaSV` (`MaSV`),
  ADD UNIQUE KEY `MaMH` (`MaMH`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV_TDV`),
  ADD UNIQUE KEY `Makhoa` (`Makhoa_TDV`),
  ADD UNIQUE KEY `Makhoa_2` (`Makhoa_TDV`),
  ADD UNIQUE KEY `Makhoa_TDV` (`Makhoa_TDV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
