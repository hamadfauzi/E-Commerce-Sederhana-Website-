-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 02:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `harga`, `deskripsi`, `kategori`, `image`) VALUES
('1', '1', 1, '1', 'makanan', 'ayam-bakar-beutut.jpg'),
('2', '2', 22, '2', 'makanan', 'cilok.jpg'),
('3', '3', 3, '3', 'minuman', 'jus.jpg'),
('4', 'Ayam Bakar', 20000, 'Ayam bakar enak sejawa barat', 'makanan', 'ayam-bakar-kecap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `EMAIL`, `PASSWORD`) VALUES
('garasaga', 'garasaga725@yahoo.co.id', '1'),
('garasaga1', 'hamadfauzi23@yahoo.com', '1'),
('h', 'hamadfauzi23@yahoo.com', '1'),
('hamadfauzi', 'hamafa@gmail.com', 'hai'),
('hamadfauzi1', 'hamadfauzi23@gmail.com', 'manusiabaja1'),
('hamadfauzi11', 'ricardosparow@yahoo.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `USERNAME` varchar(30) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`USERNAME`, `id`, `nama`, `harga`, `image`) VALUES
('garasaga1', '4', 'Ayam Bakar', 20000, 'ayam-bakar-kecap.jpg'),
('garasaga1', '3', '3', 3, 'jus.jpg'),
('garasaga1', '2', '2', 22, 'cilok.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `USERNAME` (`USERNAME`),
  ADD KEY `id` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id`) REFERENCES `gambar` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
