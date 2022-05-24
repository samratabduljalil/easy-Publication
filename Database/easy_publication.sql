-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 10:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_publication`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `a_name` varchar(50) DEFAULT NULL,
  `a_email` varchar(50) DEFAULT NULL,
  `a_password` varchar(50) DEFAULT NULL,
  `a_phone` varchar(50) DEFAULT NULL,
  `a_image` varchar(250) DEFAULT NULL,
  `pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_name`, `a_email`, `a_password`, `a_phone`, `a_image`, `pay`) VALUES
(1, 'A_Admin', 'aa@gmail.com', '1234', '01911111111', 'img/pexels-pixabay-220453.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `Customer_id` int(11) DEFAULT NULL,
  `press_id` int(11) DEFAULT NULL,
  `report` varchar(560) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `catagory` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `b_image` varchar(250) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `upazila` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `filelink` varchar(250) DEFAULT NULL,
  `Publisher_id` int(11) DEFAULT NULL,
  `preview` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `Title`, `catagory`, `isbn`, `publisher_name`, `b_image`, `district`, `upazila`, `street`, `Price`, `rating`, `filelink`, `Publisher_id`, `preview`) VALUES
(1, 'UNICORN COLORING BOOK', 'Kids', NULL, 'A_publisher', 'product-1.png', NULL, NULL, NULL, 1, 1, '1.pdf', 1, '1.pdf'),
(2, 'BIG BACKYARD', 'Kids', NULL, 'A_publisher', 'product-2.png', NULL, NULL, NULL, 10, 5, '2.pdf', 1, '2.pdf'),
(3, 'KID CHEF JUNIOR EVERYDAY', 'Kids', NULL, 'A_publisher', 'product-3.png', NULL, NULL, NULL, 17, 5, '3.pdf', 1, '3.pdf'),
(4, 'HOW TO DRAW', 'Kids', NULL, 'A_publisher', 'product-4.png', NULL, NULL, NULL, 20, 5, '4.pdf', 1, '4.pdf'),
(9, 'KITO DIET', 'Journal', NULL, 'B_publisher', 'journal-01.png', NULL, NULL, NULL, 14, 4.8, '5.pdf', 2, '5.pdf'),
(10, 'TRAINING HEALTHY LIFE', 'Journal', NULL, 'B_publisher', 'journal-02.png', NULL, NULL, NULL, 11, 4.8, '6.pdf', 2, '6.pdf'),
(11, 'WORKOUT JOURNAL', 'Journal', NULL, 'B_publisher', 'journal-03.png', NULL, NULL, NULL, 19, 5, '7.pdf', 2, '7.pdf'),
(12, '75 DAY CHALLENGE', 'Journal', NULL, 'B_publisher', 'journal-04.png', NULL, NULL, NULL, 13, 5, '8.pdf', 2, '8.pdf'),
(13, 'PROGRAMMER\'S GUIDE', 'Computer Science', NULL, 'C_publisher', 'cs-01.png', NULL, NULL, NULL, 55, 5, '9.pdf', 3, '9.pdf'),
(14, 'CODE FOR TEEN', 'Computer Science', NULL, 'C_publisher', 'cs-02.png', NULL, NULL, NULL, 40, 5, '10.pdf', 3, '10.pdf'),
(15, 'A TO Z FOR CS', 'Computer Science', NULL, 'C_publisher', 'cs-03.png', NULL, NULL, NULL, 11, 5, '11.pdf', 3, '11.pdf'),
(16, 'CS AND CODING', 'Computer Science', NULL, 'C_publisher', 'cs-04.png', NULL, NULL, NULL, 32, 5, '12.pdf', 3, '12.pdf'),
(33, 'iioo', 'Kids', NULL, NULL, 'product-1.png', NULL, NULL, NULL, 2342, NULL, '3.pdf', 1, '1 (2).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `book_publisher`
--

CREATE TABLE `book_publisher` (
  `Book_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_review`
--

CREATE TABLE `book_review` (
  `review_id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `catagory` varchar(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `publisher_id` varchar(50) DEFAULT NULL,
  `b_image` varchar(250) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `filelink` varchar(250) DEFAULT NULL,
  `preview` varchar(266) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `item` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_password` varchar(50) DEFAULT NULL,
  `c_phone` varchar(50) DEFAULT NULL,
  `c_image` varchar(250) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `upazila` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `c_name`, `c_email`, `c_password`, `c_phone`, `c_image`, `district`, `upazila`, `street`) VALUES
(1, 'A_Customer', 'c@gmail.com', '1234', '01622222222', '12052022113725_7273.jpg', 'Narail', 'kalia', 'Babra'),
(2, 'Samrat Abdul Jalil', 'c2@gmail.com', '1234', '01772095564', '12052022122528_6920.jpg', 'Dhaka', 'vatara', 'satarkul');

-- --------------------------------------------------------

--
-- Table structure for table `delivered`
--

CREATE TABLE `delivered` (
  `Customer_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `Press_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivered`
--

INSERT INTO `delivered` (`Customer_id`, `book_id`, `district`, `item`, `publisher_id`, `Press_id`) VALUES
(1, 3, 'Narail', 1, 1, 1),
(1, 1, 'Narail', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Customer_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `item` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Customer_id`, `book_id`, `district`, `item`) VALUES
(0, 2, '', 0),
(0, 2, '', 0),
(0, 8, '', 0),
(0, 1, '', 0),
(0, 1, '', 0),
(0, 1, '', 0),
(0, 2, '', 0),
(0, 3, '', 1),
(0, 3, '', 1),
(0, 1, '', 1),
(0, 2, '', 1),
(0, 5, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_admin`
--

CREATE TABLE `payment_admin` (
  `Admin_id` int(11) DEFAULT NULL,
  `total` float(7,2) DEFAULT NULL,
  `withdro` float(7,2) DEFAULT NULL,
  `available` float(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_admin`
--

INSERT INTO `payment_admin` (`Admin_id`, `total`, `withdro`, `available`) VALUES
(1, 3.80, 0.00, 3.80);

-- --------------------------------------------------------

--
-- Table structure for table `payment_press`
--

CREATE TABLE `payment_press` (
  `press_id` int(11) DEFAULT NULL,
  `total` float(7,2) DEFAULT NULL,
  `withdro` float(7,2) DEFAULT NULL,
  `available` float(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_press`
--

INSERT INTO `payment_press` (`press_id`, `total`, `withdro`, `available`) VALUES
(1, 11.40, 3.00, 8.40);

-- --------------------------------------------------------

--
-- Table structure for table `payment_publisher`
--

CREATE TABLE `payment_publisher` (
  `publisher_id` int(11) DEFAULT NULL,
  `total` float(7,2) DEFAULT NULL,
  `withdro` float(7,2) DEFAULT NULL,
  `available` float(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_publisher`
--

INSERT INTO `payment_publisher` (`publisher_id`, `total`, `withdro`, `available`) VALUES
(1, 3.80, 0.00, 3.80);

-- --------------------------------------------------------

--
-- Table structure for table `printing_book`
--

CREATE TABLE `printing_book` (
  `Customer_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `item` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printing_book`
--

INSERT INTO `printing_book` (`Customer_id`, `book_id`, `district`, `item`) VALUES
(1, 3, 'Narail', 2),
(1, 10, 'Narail', 1),
(1, 2, 'Narail', 1);

-- --------------------------------------------------------

--
-- Table structure for table `printing_press`
--

CREATE TABLE `printing_press` (
  `press_id` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_email` varchar(50) DEFAULT NULL,
  `p_password` varchar(50) DEFAULT NULL,
  `p_phone` varchar(50) DEFAULT NULL,
  `p_image` varchar(250) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `upazila` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printing_press`
--

INSERT INTO `printing_press` (`press_id`, `p_name`, `p_email`, `p_password`, `p_phone`, `p_image`, `district`, `upazila`, `street`, `pay`) VALUES
(1, 'A_printing', 'p@gmail.com', '1234', '01622222222', 'julian-wan-WNoLnJo7tS8-unsplash.jpg', 'Narail', 'Narail Sadar', 'Babra', 1),
(2, 'W_Medicine', 'pr@gmail.com', '1234', '01772095564', 'Screenshot (95).png', '', 'Kalia', 'satarkul', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_email` varchar(50) DEFAULT NULL,
  `p_password` varchar(50) DEFAULT NULL,
  `p_phone` varchar(50) DEFAULT NULL,
  `p_image` varchar(250) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `upazila` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `p_name`, `p_email`, `p_password`, `p_phone`, `p_image`, `district`, `upazila`, `street`, `pay`) VALUES
(1, 'A_publisher', 'a@gmail.com', '1234', '01711111111', '1652890752904.jpeg', 'Dhaka', 'Dhaka', 'Dhaka', 1),
(2, 'B_publisher', 'pb@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'C_publisher', 'pc@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'perecetamol', 'p2@gmail.com', '1234', '', '02042022174811_2925.jpg', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `Customer_id` int(11) DEFAULT NULL,
  `press_id` int(11) DEFAULT NULL,
  `report` varchar(560) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_review`
--
ALTER TABLE `book_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `printing_press`
--
ALTER TABLE `printing_press`
  ADD PRIMARY KEY (`press_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `book_review`
--
ALTER TABLE `book_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `printing_press`
--
ALTER TABLE `printing_press`
  MODIFY `press_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
