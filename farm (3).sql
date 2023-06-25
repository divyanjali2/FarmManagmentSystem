-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 08:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchflockrecord`
--

CREATE TABLE `batchflockrecord` (
  `ID` int(150) NOT NULL,
  `LotNo` varchar(150) NOT NULL,
  `NoofHens` varchar(100) NOT NULL,
  `UnitWeight` varchar(100) NOT NULL,
  `TotalWeight` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batchflockrecord`
--

INSERT INTO `batchflockrecord` (`ID`, `LotNo`, `NoofHens`, `UnitWeight`, `TotalWeight`) VALUES
(15, 'rt5', '21', '50kg', '100kg'),
(18, '3e', '4', '40kg', '160kg'),
(20, '78', '6', '6', '12'),
(23, '34', '2', '20', '40'),
(24, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `student` text NOT NULL,
  `contribution` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`student`, `contribution`) VALUES
('harry', 10),
('maddy', 20),
('andy', 25),
('pandy', 10);

-- --------------------------------------------------------

--
-- Table structure for table `dispatchorder`
--

CREATE TABLE `dispatchorder` (
  `id` varchar(20) NOT NULL,
  `ordernum` varchar(100) NOT NULL,
  `salesorder` varchar(100) NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispatchorder`
--

INSERT INTO `dispatchorder` (`id`, `ordernum`, `salesorder`, `orderdate`) VALUES
('we', 'we', 'we', '0000-00-00'),
('23', '23', 'fg', '2023-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `eggproduction`
--

CREATE TABLE `eggproduction` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `numberofeggs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eggproduction`
--

INSERT INTO `eggproduction` (`id`, `date`, `numberofeggs`) VALUES
(5, '2023-05-15', ' 78'),
(6, '2023-05-20', ' 90');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterials`
--

CREATE TABLE `rawmaterials` (
  `ID` int(20) NOT NULL,
  `Item` varchar(50) NOT NULL,
  `CSLevel` varchar(50) NOT NULL,
  `WeeklyConsumption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rawmaterials`
--

INSERT INTO `rawmaterials` (`ID`, `Item`, `CSLevel`, `WeeklyConsumption`) VALUES
(132, 'wheat', '3kg', ''),
(133, 'wheat', '4', ''),
(134, 'wheat', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `table48`
--

CREATE TABLE `table48` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table48`
--

INSERT INTO `table48` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00'),
(5, 'jk', 'ibk', '2023-05-12 05:06:00', '2023-05-10 05:06:00'),
(8, 'kl', 'j,h', '2023-05-25 22:48:00', '2023-05-10 22:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(2, 'admin', '$2y$10$u1XCHNiMkeY5pOUktjk3fuPQnnumVdxc6Wm/N85dEYHJmWYsFpx/m', 'admin@gmail.com', '2023-05-16 17:42:19'),
(3, 'oshadi', '$2y$10$5uUrry6YFnm9IDLiKFRb8OeFYFFxMKeAgQD0cWtmxoYdsFBp9Eb.q', 'xs@gmailsc', '2023-05-16 18:13:23'),
(4, 'nbv67440', '$2y$10$vMD99doqWufqR1PdEg2jS.RqtkkeV/UJHh456Z7YTCkGtzAR06ZB2', 'navodyadivyanjali2@gmail.com', '2023-05-17 17:15:23'),
(5, 'admin1', '$2y$10$12CzJJcS8c.p9OjYCF0EROEIEozz.KcDffGfVeEvvjKHUrMBY4yEa', 'Admin1@gmail.com', '2023-05-28 05:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinedshed`
--

CREATE TABLE `vaccinedshed` (
  `id` int(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `vaccinename` varchar(100) NOT NULL,
  `vaccineroute` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccinedshed`
--

INSERT INTO `vaccinedshed` (`id`, `age`, `vaccinename`, `vaccineroute`, `image`, `status`) VALUES
(27, 'Day 1', 'IB Ma5 & IB 4/91', 'Eye Drops', './images/1.PNG', 0),
(28, 'Day 7', 'ND Clone 30', 'Drinking Water', './images/2.PNG', 0),
(31, 'Day 12', 'Gumboro D78', 'Drinking Water', './images/4.PNG', 0),
(32, 'Day 17', 'Gumboro D78', 'Drinking Water', './images/4.PNG', 0),
(33, 'Day 21', 'Ma5 Clone 30', 'Drinking Water', './images/5.PNG', 0),
(34, 'Day 25', 'Gumboro D78', 'Drinking Water', './images/6.PNG', 0),
(35, 'Day 35', 'Nobillis CORYZA', 'Injecting to Chest', './images/7.PNG', 0),
(36, 'Day 7', 'ee', 'Drinking Water', './images/14.PNG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchflockrecord`
--
ALTER TABLE `batchflockrecord`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `eggproduction`
--
ALTER TABLE `eggproduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table48`
--
ALTER TABLE `table48`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccinedshed`
--
ALTER TABLE `vaccinedshed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batchflockrecord`
--
ALTER TABLE `batchflockrecord`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `eggproduction`
--
ALTER TABLE `eggproduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `table48`
--
ALTER TABLE `table48`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccinedshed`
--
ALTER TABLE `vaccinedshed`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
