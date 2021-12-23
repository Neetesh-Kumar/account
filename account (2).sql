-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 07:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_booking`
--

CREATE TABLE `add_booking` (
  `add_id` int(11) NOT NULL,
  `booking_date` date DEFAULT current_timestamp(),
  `account` int(11) NOT NULL,
  `cnno` int(11) NOT NULL,
  `shipper_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `cells` int(11) NOT NULL,
  `shi_landline` int(11) NOT NULL,
  `shi_email` varchar(255) NOT NULL,
  `add_password` varchar(255) NOT NULL,
  `pickup_add` varchar(255) NOT NULL,
  `return_add` varchar(255) NOT NULL,
  `cong_name` varchar(255) NOT NULL,
  `cong_ref` varchar(255) NOT NULL,
  `cong_email` varchar(255) NOT NULL,
  `cong_cells` int(11) NOT NULL,
  `cong_address` varchar(255) NOT NULL,
  `orgin_city` varchar(255) NOT NULL,
  `dest_city` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `pices` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `sel_consi` varchar(255) NOT NULL,
  `cons_districation` varchar(255) NOT NULL,
  `consi_remarks` varchar(255) NOT NULL,
  `created_at` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_booking`
--

INSERT INTO `add_booking` (`add_id`, `booking_date`, `account`, `cnno`, `shipper_name`, `city`, `area`, `cells`, `shi_landline`, `shi_email`, `add_password`, `pickup_add`, `return_add`, `cong_name`, `cong_ref`, `cong_email`, `cong_cells`, `cong_address`, `orgin_city`, `dest_city`, `service_type`, `pices`, `weight`, `sel_consi`, `cons_districation`, `consi_remarks`, `created_at`) VALUES
(13, '2021-11-30', 12345, 12345, 'Test', 'Test', 'test', 1234, 1234, 'test@test.com', 'test', 'test', 'test', 'Test', 'tesh', 'test@test.com', 11111, 'fdsadsasa', 'test', 'Islamabad', 'Overland COD', 'test', '20kg', 'International', 'test', 'eewewde', '11:30:12'),
(14, '2021-12-04', 12345, 1234567, 'Zahid', 'Turbat', 'Karachi', 420420, 911911, 'jughari@jughar.com', 'user0001', 'Old Golimar Charsi Adha Karachi', 'Old Golimar Charsi Adha Karachi', 'Test', 'tesh', 'test@test.com', 1234534, 'vffgegfdfdsv', 'test', 'Karachi', 'Overland COD', 'test', '20kg', 'Domestic', 'test', 'ffewfewfewfew', '12:14:08'),
(15, '2021-12-04', 1234567, 1234567, 'New', 'New', 'New', 1234, 123456, 'new@new.com', 'user0002', 'New', 'New', 'New', 'New', 'test@test.com', 123456, 'New', 'New', 'Lahore', 'Zero COD', 'New', '20kg', 'Domestic', 'New', 'New', '12:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_booking`
--
ALTER TABLE `add_booking`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_booking`
--
ALTER TABLE `add_booking`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
