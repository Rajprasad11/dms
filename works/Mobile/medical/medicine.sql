-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 07:47 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_dtm` datetime NOT NULL,
  `updated_dtm` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `status`, `created_dtm`, `updated_dtm`) VALUES
(1, 'cipla', 'Active', '2016-10-16 07:51:09', '2016-12-01 18:22:37'),
(2, 'ranbaxy', 'Active', '2016-10-16 07:52:01', '0000-00-00 00:00:00'),
(3, 'mankind', 'Active', '2016-10-16 07:52:26', '0000-00-00 00:00:00'),
(4, 'galaxos Nos', 'Active', '2016-10-16 07:53:12', '2016-12-01 18:16:26'),
(6, 'dopla', 'Active', '2016-11-30 19:18:56', '0000-00-00 00:00:00'),
(7, 'Magito', 'Active', '2016-11-30 19:20:04', '0000-00-00 00:00:00'),
(8, 'Zipla', 'Active', '2016-11-30 19:30:29', '0000-00-00 00:00:00'),
(9, 'Crosin', 'Active', '2016-11-30 20:00:19', '0000-00-00 00:00:00'),
(10, 'Maskos', 'Active', '2016-11-30 20:02:48', '2016-12-01 18:15:14'),
(11, 'rantacs', 'Active', '2016-12-01 17:17:26', '2016-12-05 05:04:55'),
(12, 'novacin', 'Active', '2016-12-05 05:04:36', '0000-00-00 00:00:00'),
(13, 'Caris', 'Active', '2016-12-05 05:05:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `created_dtm` datetime NOT NULL,
  `updated_dtm` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `brand_id`, `product_name`, `product_status`, `created_dtm`, `updated_dtm`) VALUES
(1, 10, 'avil 650', 'Active', '2016-10-16 07:51:09', '2016-12-04 11:47:50'),
(2, 2, 'paracetamol', 'Active', '2016-10-16 07:52:02', '2016-12-04 13:29:52'),
(3, 3, 'dolo 650', 'Active', '2016-10-16 07:52:26', '2016-12-04 11:48:12'),
(4, 4, 'anasin', 'Active', '2016-10-16 07:53:12', '2016-12-04 11:47:58'),
(5, 5, 'rantac', 'Active', '2016-10-16 07:55:21', '0000-00-00 00:00:00'),
(8, 10, 'sample 650', 'Active', '2016-12-04 11:29:28', '0000-00-00 00:00:00'),
(9, 1, 'avil 650', 'Active', '2016-12-04 11:41:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE IF NOT EXISTS `tbl_seller` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(200) NOT NULL,
  `seller_location` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_dtm` datetime NOT NULL,
  `updated_dtm` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`seller_id`, `seller_name`, `seller_location`, `status`, `created_dtm`, `updated_dtm`) VALUES
(1, 'G.J Pharma', 'hindu college', 'Active', '2016-10-16 07:57:13', '0000-00-00 00:00:00'),
(2, 'JR parmacy', 'paris', 'Active', '2016-10-16 09:29:59', '0000-00-00 00:00:00'),
(3, 'ramson pharmacy', 'hindu college', 'Active', '2016-10-16 09:30:24', '0000-00-00 00:00:00'),
(4, 'patmacy new', 'thiruvallur', 'Active', '2016-10-16 09:30:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `brandid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `sellerid` int(11) NOT NULL,
  `purchace_date` varchar(50) NOT NULL,
  `batch_no` varchar(200) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `customer_mrp` varchar(100) NOT NULL,
  `whole_sale_mrp` varchar(100) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `manufacture_date` varchar(50) NOT NULL,
  `expiry_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_dtm` datetime NOT NULL,
  `updated_dtm` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `brandid`, `productid`, `sellerid`, `purchace_date`, `batch_no`, `quantity`, `customer_mrp`, `whole_sale_mrp`, `profit`, `manufacture_date`, `expiry_date`, `status`, `created_dtm`, `updated_dtm`) VALUES
(1, 5, 5, 4, '10/01/2016', '111111', '100', '10', '8', '2', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:31:48', '0000-00-00 00:00:00'),
(2, 5, 5, 3, '10/05/2016', '22222222', '50', '20', '10', '10', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:39:49', '0000-00-00 00:00:00'),
(3, 4, 4, 3, '10/05/2016', '22222222', '200', '20', '10', '10', '10/08/2016', '10/29/2016', 'Active', '2016-10-16 09:41:30', '0000-00-00 00:00:00'),
(4, 4, 4, 3, '10/05/2016', '4444444', '100', '20', '10', '10', '10/08/2016', '10/29/2016', 'Active', '2016-10-16 09:42:07', '0000-00-00 00:00:00'),
(5, 3, 3, 2, '10/05/2016', '555555', '50', '30', '20', '10', '10/08/2016', '10/29/2016', 'Active', '2016-10-16 09:42:37', '0000-00-00 00:00:00'),
(6, 3, 3, 2, '10/06/2016', '66666', '50', '30', '20', '10', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:42:53', '0000-00-00 00:00:00'),
(7, 2, 2, 1, '10/02/2016', '777777', '50', '30', '20', '10', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:43:12', '0000-00-00 00:00:00'),
(8, 2, 2, 1, '10/03/2016', '888888', '50', '30', '20', '10', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:44:02', '0000-00-00 00:00:00'),
(9, 2, 2, 0, '10/04/2016', '999999', '50', '30', '20', '10', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:44:16', '0000-00-00 00:00:00'),
(10, 1, 1, 3, '10/04/2016', '1110000', '100', '10', '5', '5', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:44:48', '0000-00-00 00:00:00'),
(11, 1, 1, 2, '10/05/2016', '1110000', '100', '10', '5', '5', '10/01/2016', '10/29/2016', 'Active', '2016-10-16 09:44:56', '0000-00-00 00:00:00'),
(12, 3, 3, 3, '10/08/2016', '212121212', '100', '2', '1', '1', '10/01/2016', '10/22/2016', 'Active', '2016-10-23 11:05:55', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
