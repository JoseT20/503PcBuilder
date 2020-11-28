-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 05:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `core_clock_ghz` decimal(3,1) DEFAULT NULL,
  `generation` int(10) UNSIGNED DEFAULT NULL,
  `integrated_graphics` enum('YES','NO') DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `num_of_cores` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_id`, `pname`, `make`, `core_clock_ghz`, `generation`, `integrated_graphics`, `price`, `num_of_cores`) VALUES
(1000, 'Intel Core i9-10900X', 'Intel', '3.7', 10, 'NO', '599.99', 10),
(1002, 'RYZEN 5600X', 'AMD', '3.7', 3, 'NO', '299.99', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cpu_cooler`
--

CREATE TABLE `cpu_cooler` (
  `cooler_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `fan_size_mm` int(10) UNSIGNED DEFAULT NULL,
  `noise_level` varchar(20) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enclosure`
--

CREATE TABLE `enclosure` (
  `enclosure_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `form_factor` varchar(10) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enclosure`
--

INSERT INTO `enclosure` (`enclosure_id`, `pname`, `make`, `type`, `form_factor`, `color`, `price`) VALUES
(3000, 'MASTERCASE H500P MESH', 'Cooler Master', 'ATX Mid Tower', 'E-ATX', 'Black', '169.99'),
(3002, 'H510', 'NZXT', 'Midtower', 'MTX', 'Pink', '39.99');

-- --------------------------------------------------------

--
-- Table structure for table `graphics_card`
--

CREATE TABLE `graphics_card` (
  `gpu_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `chipset_mfr` varchar(10) DEFAULT NULL,
  `memory_gb` int(10) UNSIGNED DEFAULT NULL,
  `core_clock_mhz` int(10) UNSIGNED DEFAULT NULL,
  `interface` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `memory_ram`
--

CREATE TABLE `memory_ram` (
  `memory_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `module` varchar(20) DEFAULT NULL,
  `speed` varchar(20) DEFAULT NULL,
  `cas_latency` int(10) UNSIGNED DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `motherboard_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `form_factor` varchar(10) DEFAULT NULL,
  `socket` varchar(10) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `power_supply`
--

CREATE TABLE `power_supply` (
  `psu_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `modular` enum('YEs','NO') DEFAULT NULL,
  `wattage_W` int(10) UNSIGNED DEFAULT NULL,
  `efficiency` varchar(30) DEFAULT NULL,
  `length_mm` int(10) UNSIGNED DEFAULT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `cdate` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `enclosure` varchar(40) DEFAULT NULL,
  `motherboard` varchar(40) DEFAULT NULL,
  `cpu` varchar(40) DEFAULT NULL,
  `cpu_cooler` varchar(40) DEFAULT NULL,
  `memory_ram` varchar(40) DEFAULT NULL,
  `storage` varchar(40) DEFAULT NULL,
  `power_supply` varchar(40) DEFAULT NULL,
  `graphics_card` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `pname`, `cdate`, `category`, `enclosure`, `motherboard`, `cpu`, `cpu_cooler`, `memory_ram`, `storage`, `power_supply`, `graphics_card`) VALUES
(100, 'Terminator', '2020-11-27', 'Gaming', 'SPEC-DELTA RGB', 'ROG STRIX B550-F', 'RYZEN 5600X', 'Kraken X53', 'TridentZ RGB Series 32GB ', 'WD BLACK SN750', 'CORSAIR RM Series RM850', 'RTX 3090');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `storage_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `make` varchar(20) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `capacity_gb` int(10) UNSIGNED NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpu_id`);

--
-- Indexes for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  ADD PRIMARY KEY (`cooler_id`);

--
-- Indexes for table `enclosure`
--
ALTER TABLE `enclosure`
  ADD PRIMARY KEY (`enclosure_id`);

--
-- Indexes for table `graphics_card`
--
ALTER TABLE `graphics_card`
  ADD PRIMARY KEY (`gpu_id`);

--
-- Indexes for table `memory_ram`
--
ALTER TABLE `memory_ram`
  ADD PRIMARY KEY (`memory_id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`motherboard_id`);

--
-- Indexes for table `power_supply`
--
ALTER TABLE `power_supply`
  ADD PRIMARY KEY (`psu_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`storage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  MODIFY `cooler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000;

--
-- AUTO_INCREMENT for table `enclosure`
--
ALTER TABLE `enclosure`
  MODIFY `enclosure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;

--
-- AUTO_INCREMENT for table `graphics_card`
--
ALTER TABLE `graphics_card`
  MODIFY `gpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000;

--
-- AUTO_INCREMENT for table `memory_ram`
--
ALTER TABLE `memory_ram`
  MODIFY `memory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `motherboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6000;

--
-- AUTO_INCREMENT for table `power_supply`
--
ALTER TABLE `power_supply`
  MODIFY `psu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7000;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
