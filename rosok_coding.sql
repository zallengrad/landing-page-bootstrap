-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 05:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosok_coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jumlah_materi` int(11) NOT NULL,
  `nama_pemateri` varchar(255) NOT NULL,
  `harga` decimal(10,3) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `judul`, `jumlah_materi`, `nama_pemateri`, `harga`, `gambar`) VALUES
(9, 'Javascript Abiez', 14, 'Jelaskanven', '100.000', 'Screenshot 2023-06-13 093253.png'),
(14, 'Hacking', 100, 'Jelaskanven', '50.000', '99-993714_devil-may-cry-dante-wallpaper-hd.jpg'),
(16, 'React JS', 30, 'Zale', '300.000', 'wp2678136.jpg'),
(17, 'LLM (Large Language Model)', 120, 'Agung Herex', '500.000', 'lkvoo.jpg'),
(18, 'Javascript Asynchronous', 24, 'Zale', '199.000', 'meliodas.jpg'),
(19, 'AJAX', 6, '12', '120.000', '1.png'),
(20, 'React JS', 65, 'Zale', '500.000', 'pin.jpg'),
(21, '10 Hari Kuasai Dunia', 10, 'Aswangga Jati', '1.000', 'images.jpeg'),
(22, 'Hacking Wifi UIN Suka', 1, 'Zale', '15.000', 'Bear Logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'a', 'a', '2024-12-29 16:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin123', '2024-12-25 11:07:54'),
(2, 'zale', 'zale', '2024-12-25 12:43:06'),
(3, '22106050078', 'zale', '2024-12-25 13:10:33'),
(4, 'ale', 'ale', '2024-12-29 16:12:51'),
(5, 'zale', 'zale', '2024-12-29 16:29:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
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
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
