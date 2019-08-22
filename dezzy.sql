-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 03:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dezzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priviledges` varchar(255) NOT NULL,
  `last_log_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `priviledges`, `last_log_date`) VALUES
(1, 'admin', 'admin', 'super', '25-4-2019'),
(2, 'godwin', 'admin', 'user', '07-05-2019');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `count` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Letterhead', '2019-05-07 13:14:35', '2019-05-07 12:38:00', NULL),
(2, 'Complementary Card', '2019-05-07 13:12:46', '2019-05-07 13:16:00', NULL),
(3, 'Souvenirs', '2019-07-07 16:48:00', '2019-05-07 13:32:00', NULL),
(4, 'Billboard', '2019-07-07 16:47:30', '2019-05-07 14:30:00', NULL),
(5, 'Shirt Branding', '2019-05-07 13:15:27', '2019-05-07 11:35:00', NULL),
(7, 'Promotional', '2019-07-07 17:17:25', '2019-07-07 17:18:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_mail` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cust_quote`
--

CREATE TABLE `cust_quote` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(75) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_phone` varchar(15) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `job_category` varchar(20) NOT NULL,
  `job_quantity` varchar(20) NOT NULL,
  `delivery_location` varchar(30) NOT NULL,
  `budget` varchar(11) NOT NULL,
  `job_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_quote`
--

INSERT INTO `cust_quote` (`cust_id`, `cust_name`, `cust_address`, `cust_phone`, `cust_email`, `job_category`, `job_quantity`, `delivery_location`, `budget`, `job_description`) VALUES
(1, 'Godwin Eze', '77, Wetheral Road, Owerri', '08038428482', 'godwinkachi@hotmail.com', 'Flex', '450', 'Ijebu Igbo', '15000', 'Just get my job done		'),
(2, 'Godwin Eze', '77, Wetheral Road, Owerri', '08038428482', 'godwinkachi@hotmail.com', 'Letter Head', '450', 'Ijebu Igbo', '15000', 'some text goes here						'),
(3, 'Godwin Eze', '77, Wetheral Road, Owerri', '08038428482', 'godwinkachi@hotmail.com', 'Flex', '450', 'Ijebu Igbo', '15000', 'Get the job done asap	'),
(4, 'Godwin Eze', '77, Wetheral Road, Owerri', '8038428482', 'godwinkachi@hotmail.com', 'Flex', '450', 'Ijebu Igbo', '15000', 'Some bunch of text goes here bro'),
(5, 'Godwin Eze', '77, Wetheral Road, Owerri', '8038428482', 'godwinkachi@hotmail.com', 'Letter Head', '450', 'Ijebu Igbo', '15000', 'Some bunch of text here will do'),
(6, 'Godwin Eze', '77, Wetheral Road, Owerri', '8038428482', 'godwinkachi@hotmail.com', 'Small Stickers', '450', 'Ijebu Igbo', '15000', 'Somebunc of text goes in here'),
(7, 'John Doe', '77, Wetheral Road, Owerri', '07057105094', 'godwinkachi@hotmail.com', 'Small Stickers', '3000', 'Oshodi', '15000', 'If I have this settled...'),
(8, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Other jobs', '3000', 'Oshodi', '15000', 'Some bunch of text here'),
(9, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Other jobs', '3000', 'Oshodi', '15000', 'Some bunch of text here'),
(10, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Letter Head', '3000', 'Enugu', '7800', 'Some other jobs goes here'),
(11, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Letter Head', '3000', 'Enugu', '7800', 'Some other jobs goes here'),
(12, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Flex', '450', 'Enugu', '14500', 'Black top green outlet'),
(13, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Letter Head', '3000', 'Enugu', '7800', 'Some other jobs goes here'),
(14, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Other jobs', '3000', 'Oshodi', '15000', 'Some bunch of text here'),
(15, 'Godwin Eze', '77, Wetheral Road, Owerri', '+2348038428482', 'godwinkachi@hotmail.com', 'Other jobs', '3000', 'Oshodi', '15000', 'Some bunch of text here');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(11) NOT NULL,
  `pname` varchar(55) NOT NULL,
  `price` varchar(11) NOT NULL,
  `details` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `thumbnail` varchar(55) NOT NULL,
  `thumbnail_text` varchar(55) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `pname`, `price`, `details`, `category_id`, `thumbnail`, `thumbnail_text`, `available`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Branded Bag', '15000', 'Are you a startup that needs your customers to know exactly how much you value them? ', 3, 'stock_image/1559548533.jpeg', 'Haute Bag', 1, '2019-06-03 07:55:33', '0000-00-00 00:00:00', NULL),
(8, 'Small sized Billboard', '20000', 'Do you have a limited space and still want to get the best from bespoke branding?\r\nWe\'ve got you covered.', 4, 'stock_image/1562518385.jpeg', 'Front view Double sided mini bill board', 1, '2019-07-07 16:53:05', '0000-00-00 00:00:00', NULL),
(9, 'Indoor Banner', '15000', 'Need your customers to have a feel of what you deal on while sitting in the lobby of your office?\r\nLook no further, Indoor Banner will do the magic, clear and crisp display.', 4, 'stock_image/1562518637.jpeg', 'Indoor Banner', 1, '2019-07-07 16:57:17', '0000-00-00 00:00:00', NULL),
(10, 'Outdoor Billboard', '20000', 'Have a product you want to project to the world, Have you thought of billboards?\r\nOur skilled and experienced Engineers are available to get your job delivered with a budget friendly bill.\r\n\r\nReach out to us today', 4, 'stock_image/1562518820.jpeg', 'Outdoor Billboard', 1, '2019-07-07 17:00:20', '0000-00-00 00:00:00', NULL),
(11, 'Brochure', '10000', 'Suitable for weddings, Graduation, Matriculation and various forms of event.\r\nWe help you make your event come to live with outstanding designs.', 3, 'stock_image/1562519599.jpeg', 'Brochures', 1, '2019-07-07 17:13:19', '0000-00-00 00:00:00', NULL),
(12, 'Flyer', '5000', 'Gives your business the visibility that makes it scale.', 7, 'stock_image/1562519938.jpeg', 'Flyer', 1, '2019-07-07 17:18:58', '0000-00-00 00:00:00', NULL),
(13, 'Roll-up Banner', '15000', 'Reduce the stress of having to explain every details before hitting that sale during events', 7, 'stock_image/1562520180.jpeg', 'Roll-Up event', 1, '2019-07-07 17:23:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `token_id` int(11) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `cust_quote`
--
ALTER TABLE `cust_quote`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ForeignKey` (`category_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cust_quote`
--
ALTER TABLE `cust_quote`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_table`
--
ALTER TABLE `product_table`
  ADD CONSTRAINT `ForeignKey` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
