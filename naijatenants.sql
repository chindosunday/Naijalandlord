-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 10:27 PM
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
-- Database: `naijatenants`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'sunday@gmail.com', '$2y$10$m1y3Znmye9pK5gEi7/oMTukMacekn1vWpeGIXDfTXfmDNf4lGTdga'),
(2, 'samson@gmail.com', '$2y$10$WVzILiF7UyDx4v138Ugh1uUIZ6lEc1W/9058dwbDvodD4GPO9TzQK');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(12, 'Single Room'),
(13, 'Self Contain'),
(14, 'One Bedroom Flat'),
(15, 'Two Bedroom Flat'),
(16, 'Bungalow'),
(17, 'Semi-detached Duplex'),
(18, 'Duplex'),
(19, 'Skyscrapper');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, 'Sunday Chindo', 'sunday@gmail.com', '08031904983', 'i want you guys to work on your user interface'),
(6, 'James', 'Sunders@gmail.com', '08089034983', 'I want your houses to be more cheaper');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house_location`
--

CREATE TABLE `house_location` (
  `location_id` int(11) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `local_gov` varchar(100) DEFAULT NULL,
  `town_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_location`
--

INSERT INTO `house_location` (`location_id`, `state`, `local_gov`, `town_name`) VALUES
(1, 'Lagos', 'Agege', 'Dopemu'),
(2, 'Lagos', 'Alimosho', 'Kpako'),
(3, 'Abuja', 'Abuja Municipal', 'Lugbe'),
(4, 'Nasarawa', 'Keffi', 'Keffi'),
(5, 'Plateau', 'Plateau-East', 'Jos'),
(6, 'Benue', 'Makurdi', 'Guma');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `landlord_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `tenant_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`landlord_id`, `firstname`, `lastname`, `email`, `contact`, `password`, `image`, `tenant_id`, `cat_id`) VALUES
(1, 'David', 'Yavini', 'davidyavini@gmail.com', '', '$2y$10$ZW3l2gCXL68xYJTd01HaYuesJmrwGqyalg2GQvV3DOutARKGVRYqy', 'house_uploads/naijatenants1689255852.jpg', NULL, NULL),
(2, 'Abubakar', 'Ebiloma', 'abubakarebiloma@gmail.com', '08023719021', '$2y$10$jMPUwR0HlVziERrVGRkaWOjK4e4MpkEUpJ.71JToqQjC91mQNWJzq', NULL, NULL, NULL),
(3, 'Samuel ', 'Itodo', 'samuelitodo@gmail.com', '08024901099', '$2y$10$f3ClqHSkWehjRzAKzlsel.cg1F6r2p2MgWC05pY.Kg6hiBc4cZ1/.', NULL, NULL, NULL),
(4, 'Femi', 'Owolabi', 'femi@gmail.com', '444444', '$2y$10$Th4fOE59jVx.sv3tPLmYzOd9ty2QSw63uVwAuU2MUMRiC0V5KsV5G', NULL, NULL, NULL),
(6, 'Habib', 'Ofoku', 'habib@gmail.com', '07042781056', '$2y$10$knF7JiqIx36UPdlBQKc2/ubpxmGmSY9PEJ05w.HfigkY/QG4DlcCG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landlord_house`
--

CREATE TABLE `landlord_house` (
  `house_id` int(11) NOT NULL,
  `landlord_id` int(11) NOT NULL,
  `house_amount` varchar(100) NOT NULL,
  `house_description` varchar(100) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `house_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landlord_house`
--

INSERT INTO `landlord_house` (`house_id`, `landlord_id`, `house_amount`, `house_description`, `location_id`, `cat_id`, `house_image`) VALUES
(43, 1, '1000000', 'This is a three bedroom Bungalow located in the Maitama District of the FCT. All rooms ensuite with ', 3, 15, 'house_uploads/naijatenants1688912691.jpg'),
(44, 2, '95000', 'This is a very spacious self contain that can accommodate two people who choose to share the rent. ', 4, 12, 'house_uploads/naijatenants1688912966.jpg'),
(45, 1, '800000', 'just a nice apartment in a central location', 6, 19, 'house_uploads/naijatenants1688913528.jpg'),
(46, 1, '800000', 'just a nice apartment in a central location', 6, 18, 'house_uploads/naijatenants1688913551.jpg'),
(47, 1, '800000', 'just a nice apartment in a central location', 1, 14, 'house_uploads/naijatenants1688913576.jpg'),
(48, 2, '300860', 'Nice apartment to rent', 5, 17, 'house_uploads/naijatenants1688913766.jpg'),
(49, 1, '400000', 'Good single room for one person', 1, 12, 'house_uploads/naijatenants1689255918.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_amount` varchar(100) NOT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `tenant_id` int(11) DEFAULT NULL,
  `landlord_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `date_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `firstname`, `lastname`, `contact`, `email`, `password`, `image`, `date_id`) VALUES
(1, 'Sunday', 'Chindo', '08031904983', 'davidyavini@gmail.com', '$2y$10$EVGnbcyc.vbgPJC2X4gD5.vw5WVmH5A/xoHNk.if5dKiVHUZvlL/i', 'house_uploads/naijatenants1689257075.jpg', NULL),
(2, 'Bola', 'Tinubu', '09012348753', 'bolatinubu@gmail.com', '$2y$10$EiUPcaOsVWHPyL5q3hCAXOPr4xG/64VJ7AZwmTSJjf1gr7dVegNme', NULL, NULL),
(3, 'Abubakar', 'Ebiloma', '08023719021', 'abubakarebiloma@gmail.com', '$2y$10$fJ6TlpzNGE/U0P1OYhv/huLNgbTVtInMn7XmId4lkP09D5QDQC4XC', NULL, NULL),
(4, 'Usman', 'Idris', '07012906732', 'usman@gmail.com', '$2y$10$A0487.HyoEicT7I./am8wO4DNwg9xP9mXR5JYWNAIs5cHJi04a18O', NULL, NULL),
(5, 'Sunday', 'Chindo', '08031904983', 'sunday@gmail.com', '$2y$10$.6VkE9z/BFAp7M9xy7nMEONTA0vbudDWdBGgglG/NccpwJRNfEMKO', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `house_location`
--
ALTER TABLE `house_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`landlord_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tenant_id` (`tenant_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `landlord_house`
--
ALTER TABLE `landlord_house`
  ADD PRIMARY KEY (`house_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `landlord_id` (`landlord_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `tenant_id` (`tenant_id`),
  ADD KEY `landlord_id` (`landlord_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `date_id` (`date_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house_location`
--
ALTER TABLE `house_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `landlord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `landlord_house`
--
ALTER TABLE `landlord_house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `landlord`
--
ALTER TABLE `landlord`
  ADD CONSTRAINT `landlord_ibfk_1` FOREIGN KEY (`tenant_id`) REFERENCES `tenant` (`tenant_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `landlord_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `landlord_house`
--
ALTER TABLE `landlord_house`
  ADD CONSTRAINT `landlord_house_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`tenant_id`) REFERENCES `tenant` (`tenant_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`landlord_id`) REFERENCES `landlord` (`landlord_id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `tenant_ibfk_1` FOREIGN KEY (`date_id`) REFERENCES `date` (`date_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
