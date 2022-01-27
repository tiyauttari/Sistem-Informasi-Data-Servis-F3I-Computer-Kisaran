-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 02:07 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_service`
--

CREATE TABLE `data_service` (
  `id` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_kerusakan` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `no_rak` int(5) NOT NULL,
  `nama_pel` varchar(20) NOT NULL,
  `almt_pel` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_service`
--

INSERT INTO `data_service` (`id`, `nama_barang`, `jenis_kerusakan`, `tipe`, `tgl_masuk`, `penerima`, `no_rak`, `nama_pel`, `almt_pel`, `no_hp`, `status`) VALUES
('S001', 'Monitor', 'LCD Rusak Parah', 'HP', '2021-12-17', 'Siska', 8, 'Ayu', 'Sungai Alim', '0812647996545', 'Selesai'),
('S002', 'Mouse', 'Ganti Baterai', 'HPxe1', '2021-12-30', 'Ari', 1, 'Ari', 'Air Joman', '0812543022', 'Selesai'),
('S003', 'Mouse', 'Laser Tidak Hidup', 'MS1', '2022-01-05', 'Aris', 2, 'Susi', 'Kisaran', '082167432146', 'Proses'),
('S005', 'Monitor', 'LCD Rusak', 'Mon-X21-WE', '2022-11-11', 'Nike', 3, 'Hasbi', 'Tanjung Balai', '082160825132', 'Selesai'),
('S006', 'Monitor', 'UPS Bermasalah', 'UPSX21', '2022-01-26', 'Tiya Uttari', 2, 'Zizi', 'Lima Puluh', '083167818013', 'Proses'),
('S007', 'Printer', 'Tinta Habis', 'EPSONL3110X1A', '2022-01-26', 'Pita', 5, 'Akmal Hudha', 'Kisaran', '082177418291', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_trans` varchar(25) NOT NULL,
  `id` varchar(5) NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_trans`, `id`, `tgl_pengambilan`, `biaya`) VALUES
('F290121001', 'S001', '2021-12-29', 200000),
('F301221003', 'S003', '0000-00-00', 150000),
('F301221004', 'S005', '2022-01-06', 150000),
('F301221006', 'S002', '2022-01-06', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Admin', 1, 'Staff Administrator Servis Komputer F3I'),
('Muhammad Faisal', '7d3207a13dc221ac13c2f3dac3011f50', 'pimpinanf3i@gmail.com', 'Muhammad Faisal', 2, 'Pimpinan F3I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_service`
--
ALTER TABLE `data_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
