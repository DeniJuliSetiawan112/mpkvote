-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 10:07 AM
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
-- Database: `mpkvote`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id_aspirasi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id_aspirasi`, `id_user`, `isi`, `waktu`) VALUES
(1, 14905, 'ini aspirasiku', '2019-10-13 07:39:06'),
(2, 14904, 'aspirasimu bagus atuh', '2019-10-13 07:40:30'),
(3, 14905, 'ini aspirasi saya', '2019-10-13 08:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(10) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `visi` varchar(1000) DEFAULT NULL,
  `misi` varchar(1000) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis_calon` enum('KETUA','WAKIL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `nama_calon`, `visi`, `misi`, `foto`, `jenis_calon`) VALUES
(3, 'Deni Juli Setiawan - Samin Bin Ngalim', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li></ol>', 'Deni_Juli_Setiawan_-_Samin_Bin_Ngalim-13-Oct-2019.jpg', 'KETUA'),
(4, 'Bendi Supratman - AAbang Ganteng', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li></ol>', 'Deni_Juli_Setiawan_-_Samin_Bin_Ngalim-13-Oct-2019.jpg', 'KETUA'),
(5, 'Bendi Supratman - Abang Ganteng Banget', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li></ol>', 'Deni_Juli_Setiawan_-_Samin_Bin_Ngalim-13-Oct-2019.jpg', 'KETUA'),
(6, 'Deni Juli Setiawan - Samin Bin NgalimM', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li></ol>', 'Deni_Juli_Setiawan_-_Samin_Bin_Ngalim-13-Oct-2019.jpg', 'WAKIL'),
(7, 'Bendi Supratman - AAbang GantengG', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li></ol>', 'Deni_Juli_Setiawan_-_Samin_Bin_Ngalim-13-Oct-2019.jpg', 'WAKIL'),
(8, 'Bendi Supratman - Abang Ganteng BangetT', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li></ol>', 'Deni_Juli_Setiawan_-_Samin_Bin_Ngalim-13-Oct-2019.jpg', 'WAKIL');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X RPL 1');

-- --------------------------------------------------------

--
-- Table structure for table `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id_calon` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `jenis_calon` enum('KETUA','WAKIL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilihan`
--

INSERT INTO `pemilihan` (`id_calon`, `id_user`, `jenis_calon`) VALUES
(3, 14905, 'KETUA'),
(7, 14905, 'WAKIL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` int(1) NOT NULL,
  `token` varchar(5) NOT NULL,
  `jenis_user` enum('GURU','SISWA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `jk`, `token`, `jenis_user`) VALUES
(14904, 'XII RPL 2', 'XII RPL 2', 0, 'ABCD', 'SISWA'),
(14905, 'SUWANTO', 'SUWANTO', 1, 'ABCD', 'GURU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id_aspirasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14906;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
