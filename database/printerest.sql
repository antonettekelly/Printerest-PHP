-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 10:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printerest`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `order_address` varchar(250) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_deliveryopt` varchar(20) NOT NULL,
  `order_paymentopt` varchar(50) NOT NULL,
  `order_quantity` int(10) NOT NULL,
  `order_totalprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `product_id`, `user_id`, `customer_name`, `order_address`, `order_date`, `order_deliveryopt`, `order_paymentopt`, `order_quantity`, `order_totalprice`) VALUES
(1, 28, 3, 'Kelly', 'jalan a', '2022-05-21 10:23:55', 'Delivery', 'Bank', 3, 45000),
(2, 4, 3, 'Kelly', 'jalan a', '2022-05-21 10:57:36', 'Self Pick-Up', 'Cash', 2, 30000),
(3, 17, 3, 'Kelly', 'jalan a', '2022-05-21 10:58:03', 'Self Pick-Up', 'Cash', 9, 360000),
(4, 8, 3, 'Kelly', 'jalan a', '2022-05-21 11:10:10', 'Delivery', 'Bank', 10, 100000),
(5, 1, 3, 'Kelly', 'jalan a', '2022-05-21 11:16:39', 'Delivery', 'Bank', 50, 2500000),
(6, 1, 3, 'Kelly', 'jalan a', '2022-05-21 11:19:23', 'Delivery', 'Cash', 50, 2500000),
(7, 1, 3, 'Kelly', 'jalan a', '2022-05-21 11:19:57', 'Self Pick-Up', 'Bank', 1, 50000),
(8, 21, 3, 'Kelly', 'jalan a', '2022-05-21 11:29:44', 'Delivery', 'Bank', 1, 30000),
(9, 2, 3, 'Kelly', 'jalan a', '2022-05-22 12:06:11', 'Self Pick-Up', 'Cash', 1, 50000),
(10, 10, 3, 'Kelly', 'jalan a', '2022-05-22 12:11:32', 'Self Pick-Up', 'Bank', 2, 30000),
(11, 4, 9, 'Jono', 'Jalan Anggrek', '2022-05-22 12:32:41', 'Delivery', 'Bank', 1, 15000),
(12, 1, 9, 'Customer 1', 'Jalan A', '2022-05-22 01:28:20', 'Delivery', 'Bank', 5, 250000),
(13, 19, 3, 'Kelly', 'jalan a', '2022-05-23 04:55:52', 'Self Pick-Up', 'Cash', 4, 120000),
(14, 4, 11, 'kellyy', 'jalan a', '2022-05-24 08:44:36', 'Delivery', 'Bank', 3, 45000),
(15, 31, 3, 'kelai', 'jalan abcd', '2022-05-24 11:11:23', 'delivery', 'bank', 3, 75000),
(16, 7, 9, 'cust2', 'lalalala', '2022-05-25 01:14:53', 'Self Pick-Up', 'Cash', 2, 20000),
(17, 1, 11, 'Kei', 'jalan b', '2022-05-25 03:09:23', 'Delivery', 'Bank', 4, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_photo` varchar(200) NOT NULL,
  `product_desc` varchar(250) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_size` varchar(5) NOT NULL,
  `product_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_photo`, `product_desc`, `product_quantity`, `product_size`, `product_price`) VALUES
(1, 'Mug', 'Merchandise', 'uploads/mug besi dan logam.png', 'Gelas keramik dengan desain menarik', 41, 'S', 50000),
(2, 'Mug', 'Merchandise', 'uploads/mug keramik.png', 'Gelas keramik dengan desain lucu', 50, 'M', 50000),
(3, 'Mug', 'Merchandise', 'uploads/mug besi.png', 'Gelas keramik dengan desain menarik', 50, 'L', 50000),
(4, 'Pin Pakaian', 'Merchandise', 'uploads/pin pakaian.png', 'Produk iklan cetak', 94, 'S', 15000),
(5, 'Pin Pakaian', 'Merchandise', 'uploads/pin pakaian.png', 'Produk iklan cetak', 100, 'M', 15000),
(6, 'Pin Pakaian', 'Merchandise', 'uploads/pin pakaian.png', 'Produk iklan cetak', 100, 'L', 15000),
(7, 'Pensil', 'Stationary', 'uploads/pencil.png', 'Alat tulis pensil standard 2B', 98, 'S', 10000),
(8, 'Pensil', 'Stationary', 'uploads/pencil.png', 'Alat tulis pensil standard 2B', 1000, 'M', 10000),
(9, 'Pensil', 'Stationary', 'uploads/pencil.png', 'Alat tulis pensil standard 2B', 100, 'L', 10000),
(10, 'Pulpen', 'Stationary', 'uploads/pulpen.png', 'Pulpen tinta', 50, 'S', 15000),
(11, 'Pulpen', 'Stationary', 'uploads/pulpen.png', 'Pulpen tinta', 100, 'M', 15000),
(12, 'Pulpen', 'Stationary', 'uploads/pulpen.png', 'Pulpen tinta', 100, 'L', 15000),
(13, 'Buku', 'Stationary', 'uploads/buku.png', 'Buku tulis kosong', 50, 'S', 25000),
(14, 'Buku', 'Stationary', 'uploads/buku.png', 'Buku tulis kosong', 50, 'M', 25000),
(15, 'Buku', 'Stationary', 'uploads/buku.png', 'Buku tulis kosong', 50, 'L', 25000),
(16, 'Brosur', 'Printing', 'uploads/brosur.png', 'Media iklan cetak', 50, 'S', 30000),
(17, 'Brosur', 'Printing', 'uploads/brosur.png', 'Media iklan cetak', 50, 'M', 40000),
(18, 'Brosur', 'Printing', 'uploads/brosur.png', 'Media iklan cetak', 50, 'L', 50000),
(19, 'Leaflet', 'Printing', 'uploads/leaflet.png', 'Media iklan cetak', 46, 'S', 30000),
(20, 'Leaflet', 'Printing', 'uploads/leaflet.png', 'Media iklan cetak', 50, 'M', 40000),
(21, 'Leaflet', 'Printing', 'uploads/leaflet.png', 'Media iklan cetak', 50, 'L', 50000),
(22, 'Poster', 'Printing', 'uploads/poster.png', 'Media iklan cetak', 50, 'S', 70000),
(23, 'Poster', 'Printing', 'uploads/poster.png', 'Media iklan cetak', 50, 'M', 90000),
(24, 'Poster', 'Printing', 'uploads/poster.png', 'Media iklan cetak', 50, 'L', 119999),
(25, 'Poster Kanvas', 'Printing', 'uploads/poster kanvas.png', 'Media iklan cetak', 50, 'S', 70000),
(26, 'Poster Kanvas', 'Printing', 'uploads/poster kanvas.png', 'Media iklan cetak', 50, 'M', 90000),
(27, 'Poster Kanvas', 'Printing', 'uploads/poster kanvas.png', 'Media iklan cetak', 50, 'L', 120000),
(28, 'Tas Belanja', 'Screen Printing', 'uploads/tas kertas.png', 'Tas Belanja dengan Logo perusahaan', 47, 'S', 15000),
(29, 'Tas Belanja', 'Screen Printing', 'uploads/tas kertas.png', 'Tas Belanja dengan Logo perusahaan', 50, 'M', 15000),
(30, 'Tas Belanja', 'Screen Printing', 'uploads/tas kertas.png', 'Tas Belanja dengan Logo perusahaan', 50, 'L', 20000),
(31, 'Spanduk', 'Screen Printing', 'uploads/banner.png', 'Banner yang berisi kata untuk mempromosikan sesuatu', 50, 'S', 40000),
(32, 'Spanduk', 'Screen Printing', 'uploads/banner.png', 'Banner yang berisi kata untuk mempromosikan sesuatu', 50, 'M', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` char(50) NOT NULL,
  `user_telephone` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_telephone`, `user_email`, `user_password`, `user_role`) VALUES
(1, 'Admin1', '081114373431', 'admin11@gmail.com', '$2y$10$.ZoKyC5ORloUHBwvgLX.l.2wlpOoe53y23XDnpTaTVqMhrGmQuRSi', 'customer'),
(2, 'aaaa', '081139891819', 'aaaa@yahoo.co.id', '$2y$10$sZaxfuCHUpSQb0Pbau4o9uA1jh1GVo397MvAP3Z5VrK1kUnQhBgsC', 'customer'),
(3, 'Kelai', '08123456789', 'kelai@gmail.com', '$2y$10$Wb5dNmS45pw9dORB8ukWU.KcRKVGFw0RC6J94H7YurdeI1A23Hqze', 'customer'),
(4, 'Admin2', '08123456789', 'admin2@gmail.com', '$2y$10$MhIfTDLOPAvc8hVlncZQcOTDEj0Fx7V4cN4zKvw1Z0oRXJudIaX7u', 'admin'),
(5, 'Admin3', '08123456789', 'admin3@gmail.com', '$2y$10$RF8EpCJTV5TT3U9jECaoPujJr13ILGDpJFwV7HWFUPjNrSG3cU2.u', 'admin'),
(6, 'Admin4', '081234565432', 'admin4@gmail.com', '$2y$10$u.rPMIkvIjyXXo164EUJ8eRc3HMaqRm1VLhNLpm589TjTahVKagLy', 'admin'),
(7, 'Ryan Gunawan', '0811112222', 'ryan@gmail.com', '$2y$10$rGFcl9LwHn46ho/XSRH2iubFRzHr8hFQj1rSrA2w4B2X86JMrVBpm', 'customer'),
(8, 'Admin5', '0812233445', 'admin5@gmail.com', '$2y$10$Qnj1BuZKUjK/7mw998irjeIhC0hslX.GbXeCE9bn2nJDqekSZm4PS', 'admin'),
(9, 'Customer1', '0000000001', 'cust1@gmail.com', '$2y$10$JnKD70xA3NnWOlx5k3aDmu5s20imHJ3Ac77mI1Jkz7XwirnlFk86q', 'customer'),
(11, 'kellai', '081234567891', 'kell@gmail.com', '$2y$10$3INUn99998dz/.kVlxTYNeraUxN1GGH1Zookq0iGqAPc1IcgKbJ7S', 'customer'),
(13, 'cust2', '0811112222', 'kelai@gmail.com', '$2y$10$4oMeln/JxRkJNuNGyFU24OklFRzB/C8nKaBTWPT.gogwLa5PQHED.', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
