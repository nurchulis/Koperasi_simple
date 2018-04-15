-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2018 at 10:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `Anggota`
--

CREATE TABLE `Anggota` (
  `Noinduk` int(5) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `JK` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Anggota`
--

INSERT INTO `Anggota` (`Noinduk`, `Nama`, `JK`) VALUES
(1, 'Nurchulis', 'L'),
(2, 'Nuranita', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `Pinjaman`
--

CREATE TABLE `Pinjaman` (
  `Nopinjam` int(5) NOT NULL,
  `Tgl` date NOT NULL,
  `Noinduk` int(5) NOT NULL,
  `Jumlahpinjam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pinjaman`
--

INSERT INTO `Pinjaman` (`Nopinjam`, `Tgl`, `Noinduk`, `Jumlahpinjam`) VALUES
(1, '2018-04-11', 1, '500000'),
(2, '2018-04-11', 1, '200000'),
(3, '2018-04-11', 2, '600000'),
(4, '2018-04-11', 2, '600000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Anggota`
--
ALTER TABLE `Anggota`
  ADD PRIMARY KEY (`Noinduk`);

--
-- Indexes for table `Pinjaman`
--
ALTER TABLE `Pinjaman`
  ADD PRIMARY KEY (`Nopinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Anggota`
--
ALTER TABLE `Anggota`
  MODIFY `Noinduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Pinjaman`
--
ALTER TABLE `Pinjaman`
  MODIFY `Nopinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
