-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 04:37 PM
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
-- Table structure for table `doctor_db`
--

CREATE TABLE `doctor_db` (
  `id` int(20) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `doctors_additional_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_db`
--

INSERT INTO `doctor_db` (`id`, `cat_id`, `dname`, `phno`, `email`, `address`, `district`, `doctors_additional_info`) VALUES
(1, 1, 'Dr. A K Bardhan', '5628890', 'bardhan.78@gmail.com', 'Appollo Gleneagles Hospital Limited, Canal Circular Road', 'Kolkata', 'Open-Sun-Sat(12.00pm-12.01pm)'),
(2, 2, 'Dr. Rupa Talukdar', '9051815449', 'rupa.talukdar@yahoo.com', '74, R.K.Ghosh Road Kolkata-700042(Kasba))', 'Kolkata', 'Open-Mon-Sat(11.00am-7.00pm)'),
(6, 2, 'Ms. Moumita Ganguly', '3366760145', 'moumitaganguly@gmail.com', 'Health Point Clinic,Paikapara, Konnagar, 700062', 'Kolkata', 'Open- Mon-Sat(04.00pm-06.00pm)'),
(7, 1, 'Dr. Sumit Gulati', '8965741200', 'sumit@gmail.com', 'Apollo Hospitals, Canal Circular Road', 'Kolkata', 'Open- Mon-fri(11.00pm-06.00pm)'),
(8, 2, 'Dr. Amrita Chakraborty', '3355760218', 'amichakra8875@gmail.com', 'Golf Green,57/108, Prince Anwar Shah Road', 'Kolkata', 'Open- Tues-Mon(10.00am-08.00pm)'),
(9, 2, 'Dr. Sumedh Chatterjee', '9932857502', 'sumedh@gmail.com', 'Salt Lake, Devi Charan Road', 'Kolkata', 'Open- Tues-Mon(10.00am-08.00pm)'),
(10, 1, 'Dr. Bikash Majumdar', '8965001274', 'bikashbikash@gmail.com', 'Apollo Hospitals, Canal Circular Road', 'Kolkata', 'Open- Mon-fri(04.00pm-08.00pm)'),
(11, 1, 'Dr. Barnali Das ', '8935727280', 'barnali@gmail.com', 'G.S.Road Kolkata-700024', 'Kolkata', 'Open-Mon-Sat(11.00am-7.00pm)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_db`
--
ALTER TABLE `doctor_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_db`
--
ALTER TABLE `doctor_db`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_db`
--
ALTER TABLE `doctor_db`
  ADD CONSTRAINT `doctor_db_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `doctor_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
