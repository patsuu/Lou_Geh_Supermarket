-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 05:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_tbl`
--

CREATE TABLE `customers_tbl` (
  `customer_id` smallint(12) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_tbl`
--

INSERT INTO `customers_tbl` (`customer_id`, `full_name`, `address`, `contact_no`) VALUES
(2, 'qwqeqw', 'dasdas', '213123');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `p_no` smallint(12) NOT NULL,
  `p_barcode` varchar(12) NOT NULL,
  `p_desc` char(30) NOT NULL,
  `p_quantity` tinyint(20) NOT NULL,
  `p_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`p_no`, `p_barcode`, `p_desc`, `p_quantity`, `p_cost`) VALUES
(1, '123', '', 2, 22),
(2, '3123', '', 22, 22.12),
(3, '3123', '', 22, 22.12),
(4, '3123123', 'sad', 2, 2),
(5, '123', 'jkl', 2, 22),
(6, '123', 'sd', 2, 2),
(7, '123', 'tets', 2, 2),
(8, '1', 'a', 1, 1),
(9, 'XZTW7R2QDSAL', 'sad', 1, 1),
(10, '714623985', '22', 22, 22),
(11, '315846972', '', 0, 0),
(12, '756329841', 'sad', 2, 22);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_tbl`
--

CREATE TABLE `suppliers_tbl` (
  `code` smallint(12) NOT NULL,
  `company` varchar(30) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `block_lot` varchar(30) NOT NULL,
  `brgy` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip_code` smallint(4) NOT NULL,
  `province` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers_tbl`
--

INSERT INTO `suppliers_tbl` (`code`, `company`, `contact_no`, `block_lot`, `brgy`, `city`, `zip_code`, `province`, `country`) VALUES
(1, '', '', 'asdasd', 'asdasdas', 'asdasda', 123, 'asdasda', ''),
(2, '', '', 'asdsad', 'adasdas', 'adasd', 0, 'adasd', ''),
(3, '', 'asdasd', 'adsasd', 'asdasd', 'asdasda', 123, 'asdasd', ''),
(4, 'asdfasf', '123131', 'asfdasfa', 'safsdfasf', 'asfdasf', 1234, 'asfsafasf', ''),
(5, 'a', '1', 'A', 'a', 'a', 1, 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`p_no`);

--
-- Indexes for table `suppliers_tbl`
--
ALTER TABLE `suppliers_tbl`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  MODIFY `customer_id` smallint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `p_no` smallint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suppliers_tbl`
--
ALTER TABLE `suppliers_tbl`
  MODIFY `code` smallint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
