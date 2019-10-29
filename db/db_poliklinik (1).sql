-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2019 at 04:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaji_dokter`
--

CREATE TABLE `gaji_dokter` (
  `id` int(11) NOT NULL,
  `kd_dokter` varchar(30) NOT NULL,
  `pendapatan` varchar(30) NOT NULL,
  `bulan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_poli`
--

CREATE TABLE `jenis_poli` (
  `kd_poli` int(11) NOT NULL,
  `nama_poli` varchar(30) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_poli`
--

INSERT INTO `jenis_poli` (`kd_poli`, `nama_poli`, `keterangan`) VALUES
(1, 'Anak', 'Poli Yang berisi dokter ahli di penyakit anak'),
(2, 'Mata', 'Dokter Mata');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kd_pasien` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kd_pasien`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `nama_ibu`, `nohp`) VALUES
(1, 'Razitul Ikhlas', 'pria', 'Padang', '1997-11-04', 'Jalan Padang 4 No 424 Siteba', 'Sumbar', 'padang', 'nanggalo', 'surau gadang', 'Mirda Nengsih', '082169146904');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `kd_absensi` int(11) NOT NULL,
  `kd_dokter` varchar(15) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `tarif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `kd_dokter` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `noizin` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `tampat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `tarif` double NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kd_dokter`, `nama`, `jenis_kelamin`, `nohp`, `noizin`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `tampat_lahir`, `tanggal_lahir`, `spesialis`, `tarif`, `email`, `password`, `photo`) VALUES
('A001', 'Elang', 'pria', '082169146904', '1254', 'as', 'sumbar', 'padang', 'nangga', 'surau gadang', 'Padang', '2019-10-08', 'Mata', 1000, 'aidilputra@gmail.com', '12', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `no` int(11) NOT NULL,
  `kd_dokter` varchar(15) NOT NULL,
  `kd_spesialis` varchar(15) NOT NULL,
  `gaji_pokok` double NOT NULL,
  `tarif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `kd_jadwal` int(11) DEFAULT NULL,
  `kd_dokter` varchar(15) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kd_obat` int(11) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `jenis_obat` varchar(30) NOT NULL,
  `tgl_masuk` varchar(20) NOT NULL,
  `expired` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`kd_obat`, `nama_obat`, `jenis_obat`, `tgl_masuk`, `expired`, `keterangan`, `harga`) VALUES
(2, 'Paramex', 'tablet', '2019-10-21', '10/21/2020', 'Obat Anak', 1000),
(4, 'Paramex', 'Pil', '2019-10-21', '10/21/2020', 'Obat Anak', 1000),
(5, 'Procold', 'tablet', '2019-10-22', '10/21/2020', 'Obat Anak', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `no_pendaftaran` varchar(15) NOT NULL,
  `kd_pasien` varchar(15) NOT NULL,
  `kd_poli` varchar(15) NOT NULL,
  `kd_dokter` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_pelayan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poli`
--

CREATE TABLE `tbl_poli` (
  `id` int(11) NOT NULL,
  `kd_poli` int(11) NOT NULL,
  `kd_dokter` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE `tbl_resep` (
  `kd_resep` varchar(15) NOT NULL,
  `kd_pasien` varchar(15) NOT NULL,
  `kd_dokter` varchar(15) NOT NULL,
  `kd_obat` varchar(15) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `total_bayar` double NOT NULL,
  `dibayar` double NOT NULL,
  `kembali` double NOT NULL,
  `pelayan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spesialis`
--

CREATE TABLE `tbl_spesialis` (
  `kd_spesialis` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tarif` double NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spesialis`
--

INSERT INTO `tbl_spesialis` (`kd_spesialis`, `nama`, `tarif`, `keterangan`) VALUES
(1, 'Anak', 500000, 'Dokter Yang Ahli Pada Anak'),
(2, 'Mata', 1000, 'Dokter yang ahli di bidang mata');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaji_dokter`
--
ALTER TABLE `gaji_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_poli`
--
ALTER TABLE `jenis_poli`
  ADD PRIMARY KEY (`kd_poli`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`kd_absensi`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD KEY `kd_pasien` (`kd_pasien`);

--
-- Indexes for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD PRIMARY KEY (`kd_resep`);

--
-- Indexes for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
  ADD PRIMARY KEY (`kd_spesialis`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_poli`
--
ALTER TABLE `jenis_poli`
  MODIFY `kd_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `kd_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `kd_absensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `kd_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_spesialis`
--
ALTER TABLE `tbl_spesialis`
  MODIFY `kd_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
