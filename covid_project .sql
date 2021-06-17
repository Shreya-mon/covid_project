-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 02:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `name` varchar(22) DEFAULT NULL,
  `id` int(10) NOT NULL,
  `email` varchar(26) DEFAULT NULL,
  `password` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`name`, `id`, `email`, `password`) VALUES
('shreya', 1, 'monshreya123@gmail.com', 'shreya123'),
('Shreya Mondal', 2, 'monshreya123@gmail.com', 'shreya123'),
('Rohan', 4, 'shre234@gmail.com', 'hjyy78'),
('Rohan', 5, 'shre234@gmail.com', 'hjyy78'),
('Rohan', 6, 'shre234@gmail.com', 'hjyy78'),
('Rohan', 7, 'shre234@gmail.com', 'hjyy78'),
('Rohan', 8, 'shre234@gmail.com', 'hjyy78'),
('test', 9, 'shre234@gmail.com', 'hjuuy7'),
('test', 10, 'shre234@gmail.com', 'hjuuy7'),
('test', 11, 'shre234@gmail.com', 'hjuuy7'),
('test', 12, 'shre234@gmail.com', 'hjuuy7'),
('test', 13, 'shre234@gmail.com', 'hjuuy7'),
('Rohan', 14, 'gokushreya69@gmail.com', 'klo0'),
('Rohan', 15, 'gokushreya69@gmail.com', 'klo0'),
('Rohan', 16, 'gokushreya69@gmail.com', 'klo0'),
('Rohan', 17, 'gokushreya69@gmail.com', 'klo0'),
('shreya', 18, 'gokushreya69@gmail.com', 'ghuu88');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_category`
--

CREATE TABLE `doctor_category` (
  `cat_id` int(10) NOT NULL,
  `category_name` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_category`
--

INSERT INTO `doctor_category` (`cat_id`, `category_name`) VALUES
(1, '123456'),
(2, 'test111');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_db`
--

CREATE TABLE `doctor_db` (
  `id` varchar(20) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `doctors_additional_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_db`
--

INSERT INTO `doctor_db` (`id`, `cat_id`, `dname`, `phno`, `email`, `address`, `location`, `doctors_additional_info`) VALUES
('D001', 1, '', '033 66871800', '', '576, Anandapur,Eastern Metropolitian Bypass, Golpark, Kasba, West Bengal 700107', 'Kolkata,West Bengal', ''),
('D002', 2, 'Deep Biswas', '03324705672', '', '576, Anandapur,Eastern Metropolitian Bypass, Golpark, Kasba, West Bengal 700107', 'Kolkata,West Bengal', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_db`
--

CREATE TABLE `hospital_db` (
  `hid` varchar(255) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `htype` varchar(50) NOT NULL,
  `bed_capacity` int(255) NOT NULL,
  `bed_available` int(255) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(40) NOT NULL,
  `additional_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_db`
--

INSERT INTO `hospital_db` (`hid`, `hname`, `htype`, `bed_capacity`, `bed_available`, `phno`, `email`, `address`, `district`, `additional_info`) VALUES
('', '', '', 0, 0, '', '', '', '', ''),
('H001', 'Ruby General Hospital', 'Government Hospital', 567, 0, '033 668718', '', '576, Anandapur,Eastern Metropolitian Bypass, Golpark, Kasba, West Bengal 700107', 'kolkata', ''),
('HOO3', 'test1', 'Government Hospital', 456, 67, '033 668718', 'shre234@gmail.com', 'kolkata', 'kolkata', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(23) NOT NULL,
  `name` varchar(23) NOT NULL,
  `description` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`, `description`) VALUES
(1, 'oxygen service', ''),
(2, 'ngo & charity', ''),
(6, 'Health-Care-Heroes', ''),
(7, 'Meal Services', ''),
(8, 'Child -Care Services', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` int(23) NOT NULL,
  `service_id` int(23) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`id`, `service_id`, `name`, `contact`, `email`, `description`, `address`) VALUES
(1, 6, 'Smile-Society-Voluntary', '9830150249', '', '', 'Dr. Ambedkar Sarani, Madhyamgram, West B'),
(2, 6, 'Hope Home calcutta', '3324383193 /', 'shalom@vsnl.com', '', 'Gopal Ln, Srijoni, thakurani Chak, Kolka'),
(3, 6, 'You N Society', '9681747006', '', '', '23/1 , Atul Krishna Bose Lane , Baranagar , kolkata 700036'),
(4, 7, 'JustMyRoot', '6290096678 / 8240048803 / 8777708468', '', 'Meal: lunch and dinner ; Price : Rs.375 for a vegetarian meal and Rs.430 for non-vegetarian meal ; Delivery all over kolkata', ''),
(5, 7, 'Pepperberries by Sujata', '9831704091', '', 'Meal : Lunch and Dinner ; Price : Free of Cost ; Delivery : In and around Park Street', ''),
(6, 8, 'National Welfare team', '7947407934', '', 'Open 24 hrs(Monday - Sunday)', 'Rohanda Panchayat , PS- Madhyamgram , Rajbati Baganbari, Kajial para , Rajarhat , kolkata - 700135'),
(7, 8, 'The Calcutta Orphanage', '7947435862', '', 'opening : 10a.m to 8p.m, Monday - sunday', '12/1, Balaram ghosh Street, Shyambazar kolkata -700004'),
(8, 1, 'Jibandeep', '033-24550926 / 09874118925', '', 'open :Monday- sunday(24 hrs)  ; Payment mode :Cash/ debit cards/ credit cards/ cheques', '114/B, Hazra Rd Kalighat kolkata -700026  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_category`
--
ALTER TABLE `doctor_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `doctor_db`
--
ALTER TABLE `doctor_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `hospital_db`
--
ALTER TABLE `hospital_db`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctor_category`
--
ALTER TABLE `doctor_category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_db`
--
ALTER TABLE `doctor_db`
  ADD CONSTRAINT `doctor_db_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `doctor_category` (`cat_id`);

--
-- Constraints for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD CONSTRAINT `service_providers_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
