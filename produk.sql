-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 06:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `algen`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `item_price` float NOT NULL,
  `item_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode`, `item`, `item_price`, `item_picture`) VALUES
(1, 'Coca Cola', 10500, 'coke.png'),
(2, 'Coklat Cookies Biskuit', 8600, 'cookies.png'),
(3, 'Vionelli Minyak Goreng', 27800, 'minyak.png'),
(4, 'Nescafe', 32000, 'nescafe.png'),
(5, 'Sirup Marjan', 22000, 'sirup_marjan.png'),
(6, 'Ultra MIlk 1000 ml', 16500, 'ultra_mil100l.png'),
(7, 'Nissin Wafer 530 gr', 45000, 'nissin_wafers530gr.png'),
(8, 'Khong Guan', 125000, 'khong_guan.png'),
(9, 'Silver Queen', 12500, 'silver_queen.png'),
(10, 'Royal Danish Butter Cookies', 61000, 'danish_cookies.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
