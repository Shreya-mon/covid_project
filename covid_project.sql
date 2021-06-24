-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 09:42 AM
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
  `id` int(10) NOT NULL,
  `name` varchar(22) DEFAULT NULL,
  `email` varchar(26) DEFAULT NULL,
  `password` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `name`, `email`, `password`) VALUES
(1, 'SNEHA PAUL', 'snehapaul12182000@gmail.co', '1234'),
(2, 'SUPRAVA KARMAKAR', 'suprava@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `admission_cell_db`
--

CREATE TABLE `admission_cell_db` (
  `id` int(10) NOT NULL,
  `district` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admission_cell_db`
--

INSERT INTO `admission_cell_db` (`id`, `district`, `phno`) VALUES
(2, 'Alipurduar', '8250130190');

-- --------------------------------------------------------

--
-- Table structure for table `childcareprovider_db`
--

CREATE TABLE `childcareprovider_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childcareprovider_db`
--

INSERT INTO `childcareprovider_db` (`id`, `name`, `address`, `district`, `phno`, `proof`) VALUES
(1, 'Riya Mithia', 'Sahararhat,Falta, South 24 Parganas,743504, West Bengal', 'Alipurduar', '09002092950', '');

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
(1, '1234');

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

-- --------------------------------------------------------

--
-- Table structure for table `donor_db`
--

CREATE TABLE `donor_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone number` varchar(255) NOT NULL,
  `date of birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood group` varchar(30) NOT NULL,
  `district` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor_db`
--

INSERT INTO `donor_db` (`id`, `name`, `address`, `phone number`, `date of birth`, `gender`, `blood group`, `district`, `frequency`, `proof`) VALUES
(2, 'SNEHA PAUL', '220/1 RAMCHANDRA PALLY PURBA BARISHA', '7003172952', '2021-06-22', 'Female', 'A+', 'Alipurduar', 'Regular Donor', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_db`
--

CREATE TABLE `feedback_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback_db`
--

INSERT INTO `feedback_db` (`id`, `name`, `address`, `email`, `phno`, `rating`, `description`) VALUES
(1, 'Lipi', '23, S.N Roy Road Kolkata-700052', 'lipi@gmail.com', '5378291072', 3.5, 'Nice experience..'),
(2, 'Tom', '365,ygevdhd', 'tom@gmail.com', '6728374820', 4.5, 'Good. Try to improve.');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_db`
--

CREATE TABLE `hospital_db` (
  `id` int(50) NOT NULL,
  `hid` varchar(255) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `htype` varchar(50) NOT NULL,
  `bed_capacity` int(255) NOT NULL,
  `bed_available` int(255) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(40) NOT NULL,
  `additional_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_db`
--

INSERT INTO `hospital_db` (`id`, `hid`, `hname`, `htype`, `bed_capacity`, `bed_available`, `phno`, `email`, `address`, `district`, `additional_info`) VALUES
(1, 'H001', 'Alipurduar District Hospital', 'Government Hospital', 120, 114, '9677028903', 'alipurduardh@gmail.com', 'Hospital Rd, Jalpaiguri, West Bengal-736121', 'Alipurduar', 'Open 24hrs (Mon-Sun)'),
(2, 'H002', 'Birpara SGH', 'Government Hospital', 60, 60, '9647817916', 'birpara_sgh@rediffmail.com', 'Lanka Rd, Birpara, Madarihat, Alipurduar', 'Alipurduar', 'Open 24hrs.'),
(3, 'H003', 'Barjora Super Speciality', 'Government Hospital', 180, 160, '8509658547', 'barjorassh@gmail.com', 'Barjora, West Bengal-722202', 'Bankura', 'Open 24hrs.'),
(4, 'H004', 'Bankura Nursing Home', 'Private Hospital', 16, 11, '9564280791', 'bankuranursinghome@gmail.com', 'Patpur Rd, Patpur. Bankura, West Bengal-722101', 'Bankura', 'Open 24hrs.');

-- --------------------------------------------------------

--
-- Table structure for table `mealprovider_db`
--

CREATE TABLE `mealprovider_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mealprovider_db`
--

INSERT INTO `mealprovider_db` (`id`, `name`, `address`, `district`, `email`, `phno`, `proof`) VALUES
(1, 'Riya Mithia', 'Sahararhat,Falta, South 24 Parganas,743504, West Bengal', 'Alipurduar', 'riya.mithia8167@gmail.com', '09002092950', '');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_help_db`
--

CREATE TABLE `ngo_help_db` (
  `id` int(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(40) NOT NULL,
  `ph_no` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_help_db`
--

INSERT INTO `ngo_help_db` (`id`, `name`, `address`, `district`, `ph_no`, `file`, `description`, `category`) VALUES
(3, 'test', 'ttttttttttttttttttttttttttttttttttt', 'Alipurduar', '000000000000000000000000', 'wallpaper.png', '', ''),
(4, 'neha', '324, akashbani kolkata-700034', 'Kolkata', '3672838390', '', 'hello', 'food');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_registration`
--

CREATE TABLE `ngo_registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(30) NOT NULL,
  `ph_no` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_registration`
--

INSERT INTO `ngo_registration` (`id`, `name`, `address`, `district`, `ph_no`, `file`, `category`) VALUES
(1, 'test', 'testtttttttttttttt', 'Alipurduar', '00000000000000', '', ''),
(2, 'hello', '342, akashbani kolkata-700045', 'Kolkata', '6473847552', '', 'medicine');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_registration_individual`
--

CREATE TABLE `ngo_registration_individual` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(25) NOT NULL,
  `ph_no` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_registration_individual`
--

INSERT INTO `ngo_registration_individual` (`id`, `name`, `address`, `district`, `ph_no`, `file`, `category`) VALUES
(1, 'test', 'tesy667', 'Alipurduar', '000000000000', '', 'books');

-- --------------------------------------------------------

--
-- Table structure for table `oxygen_db`
--

CREATE TABLE `oxygen_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `application type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone number` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oxygen_db`
--

INSERT INTO `oxygen_db` (`id`, `name`, `application type`, `address`, `district`, `email`, `phone number`, `proof`) VALUES
(1, 'SNEHA PAUL', 'Individual person', '220/1 RAMCHANDRA PALLY PURBA BARISHA', 'Darjeeling', 'snehapaul12182000@gmail.com', '7003172952', '');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_db`
--

CREATE TABLE `receiver_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone number` varchar(255) NOT NULL,
  `date of birth` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `blood group` varchar(30) NOT NULL,
  `district` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receiver_db`
--

INSERT INTO `receiver_db` (`id`, `name`, `address`, `phone number`, `date of birth`, `gender`, `blood group`, `district`, `proof`) VALUES
(1, 'SNEHA PAUL', '220/1 RAMCHANDRA PALLY PURBA BARISHA', '9339285384', '2021-06-26', 'Female', 'A+', 'Alipurduar', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `id` int(10) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `n_password` varchar(255) NOT NULL,
  `con_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`id`, `user_type`, `uname`, `email`, `n_password`, `con_password`) VALUES
(1, 'warrior', 'Tina', 'tina@gmail.com', 'dGluYQ==', 'tina'),
(2, 'survivor', 'Lipi', 'lipi@gmail.com', 'bGlwaQ==', 'lipi'),
(3, 'warrior', 'rina', 'rina@gmail.com', 'cmluYQ==', 'rina');

-- --------------------------------------------------------

--
-- Table structure for table `safehome_db`
--

CREATE TABLE `safehome_db` (
  `id` int(10) NOT NULL,
  `shid` varchar(10) NOT NULL,
  `shname` varchar(255) NOT NULL,
  `bed_capacity` int(30) NOT NULL,
  `bed_available` int(30) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `safehome_db`
--

INSERT INTO `safehome_db` (`id`, `shid`, `shname`, `bed_capacity`, `bed_available`, `phno`, `email`, `address`, `district`) VALUES
(3, 'S0001', 'Asutosh BED College, Alipurduar II', 60, 46, '9735098064', 'aabedcollege@gmail.com', 'Alipurduar II Development Block', 'Alipurduar');

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
(1, 1, 'Smile-Society-Voluntary', '9830150249', '', '', 'Dr. Ambedkar Sarani, Madhyamgram, West B'),
(2, 6, 'Hope Home calcutta', '3324383193 /', 'shalom@vsnl.com', '', 'Gopal Ln, Srijoni, thakurani Chak, Kolka'),
(3, 6, 'You N Society', '9681747006', '', '', '23/1 , Atul Krishna Bose Lane , Baranagar , kolkata 700036'),
(4, 7, 'JustMyRoot', '6290096678 / 8240048803 / 8777708468', '', 'Meal: lunch and dinner ; Price : Rs.375 for a vegetarian meal and Rs.430 for non-vegetarian meal ; Delivery all over kolkata', ''),
(5, 7, 'Pepperberries by Sujata', '9831704091', '', 'Meal : Lunch and Dinner ; Price : Free of Cost ; Delivery : In and around Park Street', ''),
(6, 8, 'National Welfare team', '7947407934', '', 'Open 24 hrs(Monday - Sunday)', 'Rohanda Panchayat , PS- Madhyamgram , Rajbati Baganbari, Kajial para , Rajarhat , kolkata - 700135'),
(7, 8, 'The Calcutta Orphanage', '7947435862', '', 'opening : 10a.m to 8p.m, Monday - sunday', '12/1, Balaram ghosh Street, Shyambazar kolkata -700004'),
(8, 1, 'Jibandeep', '033-24550926 / 09874118925', '', 'open :Monday- sunday(24 hrs)  ; Payment mode :Cash/ debit cards/ credit cards/ cheques', '114/B, Hazra Rd Kalighat kolkata -700026  ');

-- --------------------------------------------------------

--
-- Table structure for table `survivor_db`
--

CREATE TABLE `survivor_db` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(30) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survivor_db`
--

INSERT INTO `survivor_db` (`id`, `email`, `age`, `profession`, `city`, `district`, `experience`, `title`, `video`) VALUES
(1, 'lipi@gmail.com', '23', 'Student', 'Kolkata', 'Kolkata', 'Very Bad..', 'My Covid Days', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_db`
--

CREATE TABLE `volunteer_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer_db`
--

INSERT INTO `volunteer_db` (`id`, `name`, `user_type`, `address`, `district`, `email`, `phno`, `proof`) VALUES
(1, 'Riya Mithia', 'on', 'Sahararhat,Falta, South 24 Parganas,743504, West Bengal', 'Alipurduar', 'riya.mithia8167@gmail.com', '09002092950', '');

-- --------------------------------------------------------

--
-- Table structure for table `warrior_db`
--

CREATE TABLE `warrior_db` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(30) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warrior_db`
--

INSERT INTO `warrior_db` (`id`, `email`, `age`, `profession`, `city`, `district`, `experience`, `title`, `photo`, `video`) VALUES
(1, 'tina@gmail.com', '34', 'Doctor', 'Kolkata', 'Kolkata', 'Worst Experience..', 'Keep Fighting', '', ''),
(2, 'rina@gmail.com', '52', 'Nurse', 'Kolkata', 'Kolkata', 'Terrific Experience.', 'My experience as a Covid warrior', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_cell_db`
--
ALTER TABLE `admission_cell_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcareprovider_db`
--
ALTER TABLE `childcareprovider_db`
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
-- Indexes for table `donor_db`
--
ALTER TABLE `donor_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_db`
--
ALTER TABLE `feedback_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_db`
--
ALTER TABLE `hospital_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealprovider_db`
--
ALTER TABLE `mealprovider_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_help_db`
--
ALTER TABLE `ngo_help_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_registration`
--
ALTER TABLE `ngo_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_registration_individual`
--
ALTER TABLE `ngo_registration_individual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oxygen_db`
--
ALTER TABLE `oxygen_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver_db`
--
ALTER TABLE `receiver_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_db`
--
ALTER TABLE `register_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safehome_db`
--
ALTER TABLE `safehome_db`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `survivor_db`
--
ALTER TABLE `survivor_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_db`
--
ALTER TABLE `volunteer_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warrior_db`
--
ALTER TABLE `warrior_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission_cell_db`
--
ALTER TABLE `admission_cell_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `childcareprovider_db`
--
ALTER TABLE `childcareprovider_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_category`
--
ALTER TABLE `doctor_category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donor_db`
--
ALTER TABLE `donor_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback_db`
--
ALTER TABLE `feedback_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital_db`
--
ALTER TABLE `hospital_db`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mealprovider_db`
--
ALTER TABLE `mealprovider_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngo_help_db`
--
ALTER TABLE `ngo_help_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ngo_registration`
--
ALTER TABLE `ngo_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ngo_registration_individual`
--
ALTER TABLE `ngo_registration_individual`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oxygen_db`
--
ALTER TABLE `oxygen_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receiver_db`
--
ALTER TABLE `receiver_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_db`
--
ALTER TABLE `register_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `safehome_db`
--
ALTER TABLE `safehome_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `survivor_db`
--
ALTER TABLE `survivor_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer_db`
--
ALTER TABLE `volunteer_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warrior_db`
--
ALTER TABLE `warrior_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
