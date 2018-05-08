-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2018 pada 07.24
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmskls10`
--

CREATE TABLE `rmskls10` (
  `no` int(11) NOT NULL,
  `judul_rumus` varchar(100) NOT NULL,
  `rumus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmskls11`
--

CREATE TABLE `rmskls11` (
  `no` int(11) NOT NULL,
  `judul_rumus` varchar(100) NOT NULL,
  `rumus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rmskls12`
--

CREATE TABLE `rmskls12` (
  `no` int(11) NOT NULL,
  `judul_rumus` varchar(100) NOT NULL,
  `rumus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rmskls10`
--
ALTER TABLE `rmskls10`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `rmskls11`
--
ALTER TABLE `rmskls11`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `rmskls12`
--
ALTER TABLE `rmskls12`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rmskls10`
--
ALTER TABLE `rmskls10`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rmskls11`
--
ALTER TABLE `rmskls11`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rmskls12`
--
ALTER TABLE `rmskls12`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
