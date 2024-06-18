-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 04:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camerarental`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `bookingID` text NOT NULL,
  `itemCode` text NOT NULL,
  `itemName` text NOT NULL,
  `fromdate` date NOT NULL,
  `returnDate` date NOT NULL,
  `bookingDate` date NOT NULL,
  `userEmail` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`bookingID`, `itemCode`, `itemName`, `fromdate`, `returnDate`, `bookingDate`, `userEmail`, `amount`) VALUES
(' 820597915', ' 5623l', ' canon 200mm Camera', '2024-02-26', '2024-02-29', '2024-02-24', 'abc@gmail.com', '375000');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `itemCode` text NOT NULL,
  `itemName` text NOT NULL,
  `fromDate` date NOT NULL,
  `returnDate` date NOT NULL,
  `bookingDate` date NOT NULL,
  `email` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `itemCode` text NOT NULL,
  `picture` text NOT NULL,
  `itemName` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`itemCode`, `picture`, `itemName`, `price`) VALUES
('5623l', './images/7fdd3bda2076f7bdb2ed96e7ec01810a--slr-camera-reflex-camera.jpg', 'canon 200mm Camera', 125000);

-- --------------------------------------------------------

--
-- Table structure for table `lencers`
--

CREATE TABLE `lencers` (
  `id` int(11) NOT NULL,
  `itemCode` text NOT NULL,
  `picture` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentdtls`
--

CREATE TABLE `paymentdtls` (
  `bookingNo` text NOT NULL,
  `cardOwner` varchar(30) NOT NULL,
  `userEmail` text NOT NULL,
  `cardNo` int(15) NOT NULL,
  `payment` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`) VALUES
(0, 'avishka', '0772156647', 'abc@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lencers`
--
ALTER TABLE `lencers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lencers`
--
ALTER TABLE `lencers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
