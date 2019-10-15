-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 01:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aims365_bsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `access` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `email`, `phone`, `password`, `address`, `type`, `access`, `status`, `created_at`) VALUES
(1, 'Islam Hossain', 'islamhossainwork@gmail.com', '01710001337', '21232f297a57a5a743894a0e4a801fc3', 'Dhaka, Bangladesh - 1207', 'ADMIN', 0, 0, '2019-10-15 11:18:25'),
(2, 'test user', 'mail@mail.com', 'no', '202cb962ac59075b964b07152d234b70', 'n/a', 'USER', 0, 0, '2019-10-15 11:18:30'),
(5, 'FATEMA-101', 'fatema012@mail.com', '09090909 - 123', '39a7ee2f76cf2271f141845a867aceb1', 'n/a done..', 'USER', 0, 0, '2019-10-15 10:22:31'),
(7, 'admin', 'islamhossainwork@gmail.com', '01710001337', '39a7ee2f76cf2271f141845a867aceb1', 'Naogoan, Rajshahi', 'USER', 0, 0, '2019-10-15 10:28:00'),
(8, 'Restaurant', 'islamhossainwork@gmail.com', '01710001337', '39a7ee2f76cf2271f141845a867aceb1', 'Naogoan, Rajshahi101', 'USER', 0, 0, '2019-10-15 10:28:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
