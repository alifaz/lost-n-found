-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2018 at 02:47 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `ID_Admin` int(36) NOT NULL,
  `Nama` char(36) NOT NULL,
  `Nomor_HP` int(36) NOT NULL,
  `Email` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Barang`
--

CREATE TABLE `Barang` (
  `ID_Barang` int(36) NOT NULL,
  `Jenis` char(36) NOT NULL,
  `Nama_Barang` varchar(36) NOT NULL,
  `Deskripsi` varchar(36) NOT NULL,
  `Tempat_ditemukan` varchar(36) NOT NULL,
  `Waktu_ditemukan` datetime(6) NOT NULL,
  `Foto_barang` bigint(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Laporan`
--

CREATE TABLE `Laporan` (
  `ID_Laporan` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_Barang` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Jenis_laporan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Pengguna`
--

CREATE TABLE `Pengguna` (
  `ID_user` int(36) NOT NULL,
  `Nama` char(36) NOT NULL,
  `Nomor_HP` int(36) NOT NULL,
  `Email` varchar(36) NOT NULL,
  `Password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `Laporan`
--
ALTER TABLE `Laporan`
  ADD PRIMARY KEY (`ID_Laporan`);

--
-- Indexes for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Pengguna`
--
ALTER TABLE `Pengguna`
  MODIFY `ID_user` int(36) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
