-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 08:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchflockrecord`
--


-- --------------------------------------------------------

--
-- Table structure for table `debitnote`
--

CREATE TABLE `debitnote` (
  `id` varchar(20) NOT NULL,
  `debtor_id` varchar(100) NOT NULL,
  `debtor_name` varchar(100) NOT NULL,
  `amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `debitnote`
--

INSERT INTO `debitnote` (`id`, `debtor_id`, `debtor_name`, `amount`) VALUES
(' D002', 'DE001', 'Wimal Fernando', 200000),
('D001', 'DE001', 'Wimal Fernando', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `Dispatched` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `description`, `amount`, `Dispatched`) VALUES
('O001', '2023-04-08', 'Rice', 200, 1),
('O002', '2023-04-07', 'Eggs', 1000, 0),
('O003', '2023-04-06', 'Milk', 100, 0),
('O004', '2023-04-05', 'Fish', 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salesteam`
--

CREATE TABLE `salesteam` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salesteam`
--

INSERT INTO `salesteam` (`id`, `name`, `email`) VALUES
('M001', 'Amal Silva', 'amalsilva@gmail.com'),
('M002', 'Kamal Perera', 'kamalperera@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchflockrecord`
--
ALTER TABLE `batchflockrecord`
  ADD PRIMARY KEY (`LotNo`);

--
-- Indexes for table `debitnote`
--
ALTER TABLE `debitnote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesteam`
--
ALTER TABLE `salesteam`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
