-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 09:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkaryawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tkaryawan`
--

CREATE TABLE `tkaryawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `no_kta` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `no_npwp` varchar(100) NOT NULL,
  `no_efin` varchar(250) NOT NULL,
  `no_bpjs_kes` varchar(250) NOT NULL,
  `no_bpjs_tk` varchar(250) NOT NULL,
  `no_krk` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `lokasi_kerja` varchar(250) NOT NULL,
  `nama_istri` varchar(250) NOT NULL,
  `nama_anak_1` varchar(250) NOT NULL,
  `nama_anak_2` varchar(250) NOT NULL,
  `nama_anak_3` varchar(250) NOT NULL,
  `status_pajak` varchar(50) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `foto_ktp` varchar(250) NOT NULL,
  `foto_npwp` varchar(250) NOT NULL,
  `foto_bpjs_kis` varchar(250) NOT NULL,
  `foto_bpjs_tk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkaryawan`
--

INSERT INTO `tkaryawan` (`id`, `nama`, `no_kta`, `tanggal_lahir`, `tanggal_masuk`, `no_ktp`, `no_npwp`, `no_efin`, `no_bpjs_kes`, `no_bpjs_tk`, `no_krk`, `alamat`, `no_hp`, `email`, `lokasi_kerja`, `nama_istri`, `nama_anak_1`, `nama_anak_2`, `nama_anak_3`, `status_pajak`, `foto`, `foto_ktp`, `foto_npwp`, `foto_bpjs_kis`, `foto_bpjs_tk`) VALUES
(17, 'SAMYONO', 'KTKBM0000001', '2020-10-15', '2020-10-15', '2171110909550001', '59.344.014.2-215.000', '', '', '90D20029465', '', 'BENGKONG HARAPAN', 2147483647, '', '', 'KUSTINI', 'NURMAN', '', '', 'K/1', '1602782415.jpeg', '1602779576.png', '1602779576.png', '1602779576.png', '1602782652.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`) VALUES
(6, 'admin', '$2y$10$MY.0JMHztGRSxVgMzA/2eOTUm3.6lXhHxZBxJKlSWWvK/i3q2t18K', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tkaryawan`
--
ALTER TABLE `tkaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tkaryawan`
--
ALTER TABLE `tkaryawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
