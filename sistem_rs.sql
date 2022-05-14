-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 04:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`) VALUES
(10, 'dr.Ade Astrida'),
(11, 'dr.Adhani Kusumawati'),
(12, 'dr.Hariadi Yuseno'),
(13, 'dr.Agus Suhendar'),
(14, 'dr.Dewi Indah'),
(15, 'dr.Intan Yustikasari'),
(16, 'dr.Winda Safitri'),
(17, 'dr.Sani Wijaya'),
(19, 'dr.Inna Mulyana'),
(20, 'dr.Rahma Medikawati');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_rekam` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `jenis_kamar`, `id_pasien`, `id_rekam`, `id_perawat`) VALUES
(21, 'Kenanga', 'Kelas A', 2, 112, 1101),
(22, 'Mawar', 'Kelas A', 5, 115, 1101),
(23, 'Melati', 'Kelas A', 11, 121, 1104),
(24, 'Cempaka', 'Kelas B', 1, 111, 1107),
(25, 'Teratai', 'Kelas B', 6, 116, 1107),
(26, 'Dahlia', 'Kelas B', 15, 125, 1102),
(27, 'Lily', 'VIP', 4, 114, 1105),
(28, 'Bougenvile', 'VIP', 20, 130, 1103),
(29, 'Anggrek', 'VIP', 9, 119, 1108),
(30, 'Camelia', 'VIP', 12, 122, 1106);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga` decimal(25,0) NOT NULL,
  `id_rekam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga`, `id_rekam`) VALUES
(100, 'Paracetamol,Aspirin,Ibuprofen', '30000', 10),
(101, 'Paracetamol,Amoxilin', '15000', 19),
(102, 'Ambroxol,Gliseril,Metaflu', '30000', 14),
(103, 'Naproxen,Amoxilin', '30000', 1),
(104, 'Amoxilin,Paracetamol', '25000', 2),
(105, 'Plantacid,Ranitidin', '20000', 18),
(106, 'Amoxilin,Paracetamol', '20000', 5),
(107, 'Newdiatab,Spasminal', '25000', 13),
(108, 'Ranitidin,Plantacid', '20000', 3),
(109, 'ARBS,Suplemen Eritropoietin,Atorvastin', '70000', 4),
(110, 'Now Niacin,Simvastatin,TFenofibrate', '50000', 17),
(111, 'Metformin,Gliptin,Glitazone', '45000', 8),
(112, 'Kortikosteroid,NSAID', '35000', 16),
(113, 'tPA,Antiplatelet,Antikoagulen', '100000', 12),
(114, 'Amoxilin,Paracetamol,AS.Mefenamat', '40000', 6),
(115, 'Suplemen Eritropoietin,Atorvastin,ACE Inhibitors', '50000', 20),
(116, 'ACE Inhibitors,Inotropik,Digoxin', '120000', 9),
(117, 'Amoxilin,Paracetamol,Naproxen', '30000', 11),
(118, 'ARB,Dieretik,Nitrat', '30000', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat`) VALUES
(0, '', ''),
(1, 'Zahratun Alikha', 'Jl.Sumur Batu-Jakarta Pusat'),
(2, 'Aji Pangestu', 'Jl.Cilandak-Jakarta Selatan'),
(3, 'Andi Irawan', 'Jl.Cemara-Jakarta Barat'),
(4, 'Anita Aulia', 'Jl.Suprapto-Jakarta Pusat'),
(5, 'Bayu Setiawan', 'Jl.Pemuda-Jakarta Timur'),
(6, 'Dedi Permana', 'Jl.Anggrek-Jakarta Barat'),
(7, 'Desi Rahayu', 'Jl.Kamboja-Jakarta Selatan'),
(8, 'Jihan Putri', 'Jl.Mahoni-Jakarta Utara'),
(9, 'Laila Husna', 'Jl.Pinang-Jakarta Timur'),
(10, 'Sabrina', 'Jl.Mandala-Jakarta Selatan'),
(11, 'Fitriani Zharifa', 'Jl.Kenanga-Jakarta Utara'),
(12, 'Rahmah Amalia', 'Jl.Cempaka-Jakarta Barat'),
(13, 'Nadhifa', 'Jl.Sumur Batu-Jakarta Pusat'),
(14, 'Nadhiratun', 'Jl.Ismail-Jakara Selatan'),
(15, 'Dinda Kirana', 'Jl.Pulo Asem-Jakarta Timur'),
(16, 'Yoga Pramono', 'Jl.Krida-Jakarta Selatan'),
(17, 'Sulistiyani', 'Jl.Dahlia-Jakarta Barat'),
(18, 'Lutfi Hidayat', 'Jl.Pramuka-Jakarta Timur'),
(19, 'Ridho Ahmad', 'Jl.Intan-Jakarta Selatan'),
(20, 'Elma Nadhifa', 'Jl.Sten-Jakarta Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `pengobatan_pasien`
--

CREATE TABLE `pengobatan_pasien` (
  `nama_pasien` varchar(25) NOT NULL,
  `diagnosa` varchar(40) DEFAULT NULL,
  `nama_dokter` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengobatan_pasien`
--

INSERT INTO `pengobatan_pasien` (`nama_pasien`, `diagnosa`, `nama_dokter`) VALUES
('Dinda Kirana', 'Tifus', 'dr.Ade Astrida'),
('Ridho Ahmad', 'Demam', 'dr.Ade Astrida'),
('Anita Aulia', 'Gagal Ginjal', 'dr.Adhani Kusumawati'),
('Jihan Putri', 'Diabetes', 'dr.Adhani Kusumawati'),
('Laila Husna', 'Gagal Jantung', 'dr.Adhani Kusumawati'),
('Zahratun Alikha', 'Demam Berdarah', 'dr.Hariadi Yuseno'),
('Andi Irawan', 'Maag', 'dr.Hariadi Yuseno'),
('Bayu Setiawan', 'Demam Berdarah', 'dr.Agus Suhendar'),
('Desi Rahayu', 'Hipertensi', 'dr.Dewi Indah'),
('Sulistiyani', 'Kolestrol', 'dr.Dewi Indah'),
('Aji Pangestu', 'Gejala Tifus', 'dr.Intan Yustikasari'),
('Sabrina', 'Demam', 'dr.Winda Safitri'),
('Yoga Pramono', 'Rematik', 'dr.Winda Safitri'),
('Nadhiratun', 'Batuk-Flu', 'dr.Sani Wijaya'),
('Elma Nadhifa', 'Gagal Ginjal', 'dr.Sani Wijaya'),
('Fitriani Zharifa', 'Demam Berdarah', 'dr.Inna Mulyana'),
('Lutfi Hidayat', 'Maag', 'dr.Inna Mulyana'),
('Rahmah Amalia', 'Stroke', 'dr.Rahma Medikawati');

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `id_perawat` int(11) NOT NULL,
  `nama_perawat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`id_perawat`, `nama_perawat`) VALUES
(1101, 'Kinanti Rahayu'),
(1102, 'Dita Riyani'),
(1103, 'Hendrawan'),
(1104, 'Ayu Novita'),
(1105, 'Zen Pratama'),
(1106, 'Eko Febrianto'),
(1107, 'Dini Lestari'),
(1108, 'Hesty Setianingrum');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_pasien`
--

CREATE TABLE `rawat_pasien` (
  `nama_pasien` varchar(25) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL,
  `nama_perawat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawat_pasien`
--

INSERT INTO `rawat_pasien` (`nama_pasien`, `nama_kamar`, `jenis_kamar`, `nama_perawat`) VALUES
('Zahratun Alikha', 'Cempaka', 'Kelas B', 'Dini Lestari'),
('Aji Pangestu', 'Kenanga', 'Kelas A', 'Kinanti Rahayu'),
('Anita Aulia', 'Lily', 'VIP', 'Zen Pratama'),
('Bayu Setiawan', 'Mawar', 'Kelas A', 'Kinanti Rahayu'),
('Dedi Permana', 'Teratai', 'Kelas B', 'Dini Lestari'),
('Laila Husna', 'Anggrek', 'VIP', 'Hesty Setianingrum'),
('Fitriani Zharifa', 'Melati', 'Kelas A', 'Ayu Novita'),
('Rahmah Amalia', 'Camelia', 'VIP', 'Eko Febrianto'),
('Dinda Kirana', 'Dahlia', 'Kelas B', 'Dita Riyani'),
('Elma Nadhifa', 'Bougenvile', 'VIP', 'Hendrawan');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekam` int(20) NOT NULL,
  `diagnosa` varchar(40) DEFAULT NULL,
  `id_pasien` int(30) NOT NULL,
  `id_dokter` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekam`, `diagnosa`, `id_pasien`, `id_dokter`) VALUES
(111, 'Demam Berdarah', 1, 12),
(112, 'Gejala Tifus', 2, 15),
(113, 'Maag', 3, 12),
(114, 'Gagal Ginjal', 4, 11),
(115, 'Demam Berdarah', 5, 13),
(116, 'Tifus', 6, 18),
(117, 'Hipertensi', 7, 14),
(118, 'Diabetes', 8, 11),
(119, 'Gagal Jantung', 9, 11),
(120, 'Demam', 10, 16),
(121, 'Demam Berdarah', 11, 19),
(122, 'Stroke', 12, 20),
(123, 'Diare', 13, 18),
(124, 'Batuk-Flu', 14, 17),
(125, 'Tifus', 15, 10),
(126, 'Rematik', 16, 16),
(127, 'Kolestrol', 17, 14),
(128, 'Maag', 18, 19),
(129, 'Demam', 19, 10),
(130, 'Gagal Ginjal', 20, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_rekam` (`id_rekam`),
  ADD KEY `id_perawat` (`id_perawat`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_rekam` (`id_rekam`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekam`),
  ADD UNIQUE KEY `id_pasien` (`id_pasien`) USING BTREE,
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_rekam` (`id_rekam`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_rekam`) REFERENCES `rekam_medis` (`id_rekam`),
  ADD CONSTRAINT `kamar_ibfk_3` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id_perawat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_rekam`) REFERENCES `rekam_medis` (`id_rekam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
