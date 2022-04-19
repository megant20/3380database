-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 12:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `animalID` int(11) NOT NULL,
  `attractionID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `classe` enum('Mammal','Bird','Amphibian','Fish','Reptile','Invertebrate') NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `DOB` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animalID`, `attractionID`, `name`, `classe`, `gender`, `DOB`) VALUES
(19928, 1, 'Loyalty cajiza', 'Bird', 'Male', '09181998'),
(19938, 1, 'bamboo', 'Bird', 'Male', '09181998'),
(19942, 1, 'lola', 'Bird', 'Female', '09181997'),
(19943, 1, 'bad', 'Bird', 'Male', '09181999');

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `attractionID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `purchases` decimal(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`attractionID`, `locationID`, `purchases`) VALUES
(1, 1, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentID` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentID`, `title`) VALUES
(1, 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `first` char(20) NOT NULL,
  `last` char(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `attractionID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `managerID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `ssn` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `data_hired` varchar(10) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`first`, `last`, `username`, `attractionID`, `locationID`, `managerID`, `employeeID`, `ssn`, `email`, `phone_number`, `data_hired`, `password`) VALUES
('jack', 'got', 'baka1', 1, 1, 5, 5, 1997508, 'artis@gmail.com', 13123113, '09181997', 'gilobana'),
('Loyalty', 'cajiza', 'rosario97', 1, 1, 5, 6, 2342342, 'art@gmail.com', 2147483647, '09181997', 'gilobana'),
('Jacob', 'Kilgore', 'jacob', 1, 1, 5, 7, 12312412, 'jacob_kilgore33@yahoo.com', 2147483647, '09142001', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `gift_shop`
--

CREATE TABLE `gift_shop` (
  `giftshopID` int(11) NOT NULL,
  `donations` decimal(15,2) NOT NULL DEFAULT 0.00,
  `product_sales` decimal(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationID` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationID`, `title`) VALUES
(1, 'birds habitat'),
(2, 'bug habitat'),
(3, 'african forest'),
(4, 'water play park'),
(5, 'elephant habitat'),
(6, 'reptile and amphibian habitat'),
(7, 'aquatic animals habitat'),
(8, 'wildfire carousel'),
(9, 'primates habitat'),
(10, 'gift shop');

--
-- Triggers `location`
--
DELIMITER $$
CREATE TRIGGER `tr_ins_loc` BEFORE INSERT ON `location` FOR EACH ROW SET NEW.title = LOWER(NEW.title)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_up_loc` BEFORE UPDATE ON `location` FOR EACH ROW SET NEW.title = LOWER(NEW.title)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `departmentID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `managerID` int(11) NOT NULL,
  `ssn` int(11) NOT NULL,
  `data_hired` varchar(10) DEFAULT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`first`, `last`, `user_name`, `password`, `email`, `phone_number`, `departmentID`, `locationID`, `managerID`, `ssn`, `data_hired`, `pic`) VALUES
('Pete123', 'Peter', 'peter970', 'cavalo198', 'carro@gmail.com', 2147483647, 1, 1, 5, 19932578, '0918995', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--
-- Error reading structure for table zoo.test: #1932 - Table 'zoo.test' doesn't exist in engine
-- Error reading data for table zoo.test: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `zoo`.`test`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first` varchar(11) NOT NULL,
  `last` varchar(16) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first`, `last`, `user_name`, `password`, `email`, `phone_number`) VALUES
('joe', 'random', 'randomuser', 'pass123', 'randomuser@gmail.com', '111-111-11'),
('Hair', 'Yong', 'yongh', 'hello1234', 'fdskfhk@gmail.com', '7564636432'),
('kageyoshi', 'senbonzakura', 'bankai11111', 'gilobana', 'art@gmail.com', '8325567890'),
('Loyalty', 'cajiza', 'baka197', 'gilobana', 'arttari@gmail.com', '8325567890'),
('jacob333', 'Kilgore', 'jacobk3333', 'password', 'jacob_kilgore33@yahoo.com', '8326846412'),
('peter', 'rosario', 'pete77', 'gilobana', 'pete@gmail.com', '8327576999'),
('mond', 'adison', 'eddy101', '12348', 'edisond@gmail.com', '8962561653');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animalID`),
  ADD KEY `animal_ibfk_1` (`attractionID`);

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`attractionID`),
  ADD KEY `attraction_ibfk_1` (`locationID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`,`ssn`),
  ADD KEY `employee_ibfk_1` (`attractionID`),
  ADD KEY `employee_ibfk_2` (`locationID`),
  ADD KEY `employee_ibfk_3` (`managerID`);

--
-- Indexes for table `gift_shop`
--
ALTER TABLE `gift_shop`
  ADD PRIMARY KEY (`giftshopID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`,`ssn`),
  ADD KEY `manager_ibfk_1` (`departmentID`),
  ADD KEY `manager_ibfk_2` (`locationID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phone_number`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `animalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19946;

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `attractionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gift_shop`
--
ALTER TABLE `gift_shop`
  MODIFY `giftshopID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`attractionID`) REFERENCES `attraction` (`attractionID`);

--
-- Constraints for table `attraction`
--
ALTER TABLE `attraction`
  ADD CONSTRAINT `attraction_ibfk_1` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`attractionID`) REFERENCES `attraction` (`attractionID`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`),
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`),
  ADD CONSTRAINT `manager_ibfk_2` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
