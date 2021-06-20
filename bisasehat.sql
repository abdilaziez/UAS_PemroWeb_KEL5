-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 06:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisasehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$Fnl35wPiuWJ3KCaa38cs5.OOX/fmNr2Ce91EG7pVFbCnmH4hiPgli');

-- --------------------------------------------------------

--
-- Table structure for table `artikelkesehatan`
--

CREATE TABLE `artikelkesehatan` (
  `id_berita` int(11) NOT NULL,
  `judulBerita` varchar(100) NOT NULL,
  `tanggalPosting` date NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `link` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikelkesehatan`
--

INSERT INTO `artikelkesehatan` (`id_berita`, `judulBerita`, `tanggalPosting`, `gambar`, `deskripsi`, `link`) VALUES
(2, 'trending covid bulan ini', '2021-06-17', '60ca109c038ed.jpg', 'Berita Terbaru pandemi covid-19 ', 'https://www.halodoc.com/cari-dokter'),
(5, 'trending covid bulan ini', '2021-06-09', '60cac3f4cae7c.jpg', 'asalsajskajksaj\r\nqweqweqweqwe\r\nqweqweqwe', 'https://www.halodoc.com/cari-dokter');

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomerHp` varchar(200) NOT NULL,
  `komentar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomerHp` varchar(200) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `namaLengkap`, `email`, `nomerHp`, `keterangan`) VALUES
(2, 'Abdil Aziez Al Mekhani', 'abdilaziez81086@gmail.com', '', 'kakldjlasjdjsljdlkqjwjlqjewjqlkejklqjwe'),
(3, 'Abdil Aziez Al Mekhani', 'komdis@ilkomunej.com', '', 'ksakjsakjsjajksjkajksajs'),
(4, 'Abdil Aziez Al Mekhani', 'siroontong@yahoo.com', '08999072000', 'jhkjhkjqhwkjhkehqwhekhqhwkjehqwehhqwheqwe');

-- --------------------------------------------------------

--
-- Table structure for table `solusipenyakit`
--

CREATE TABLE `solusipenyakit` (
  `id_jenis` int(11) NOT NULL,
  `jenisPasien` varchar(110) NOT NULL,
  `keterangan` longtext NOT NULL,
  `gambar` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusipenyakit`
--

INSERT INTO `solusipenyakit` (`id_jenis`, `jenisPasien`, `keterangan`, `gambar`) VALUES
(2, 'Corona', '1. Mandi\r\n2. Cuci Baju\r\n3. Cuci Tangan', '60ca0e559ce69.jpg'),
(4, 'Kanker', 'asasasa\r\nasasasa\r\nasasasa\r\nasasas', '60cac3cc94c74.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikelkesehatan`
--
ALTER TABLE `artikelkesehatan`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `solusipenyakit`
--
ALTER TABLE `solusipenyakit`
  ADD PRIMARY KEY (`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikelkesehatan`
--
ALTER TABLE `artikelkesehatan`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id_diskusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solusipenyakit`
--
ALTER TABLE `solusipenyakit`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
