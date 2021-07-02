-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 04:57 PM
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
(2, 'SUPRAVA KARMAKAR', 'suprava@gmail.com', '12345'),
(3, '', '', '');

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
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childcareprovider_db`
--

INSERT INTO `childcareprovider_db` (`id`, `email`, `name`, `address`, `district`, `phno`, `proof`) VALUES
(1, '', 'Riya Mithia', 'Sahararhat,Falta, South 24 Parganas,743504, West Bengal', 'Alipurduar', '09002092950', ''),
(3, 'tina@gmail.com', 'Tina', '342, akashbani kolkata-700045', 'Kolkata', '6245678077', '');

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
(1, 'COVID Consultant'),
(2, 'Counseling Consultant');

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
(1, 1, 'Dr. A K Bardhan', '5628890', '', 'Appollo Gleneagles Hospital Limited, Canal Circular Road', 'Kolkata', 'Open-Sun-Sat(12.00pm-12.01pm)'),
(2, 2, 'Dr. Rupa Talukdar', '9051815449', 'rupa.talukdar@yahoo.com', '74, R.K.Ghosh Road Kolkata-700042(Kasba))', 'Kolkata', 'Open-Mon-Sat(11.00am-7.00pm)');

-- --------------------------------------------------------

--
-- Table structure for table `donor_db`
--

CREATE TABLE `donor_db` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `donor_db` (`id`, `email`, `name`, `address`, `phone number`, `date of birth`, `gender`, `blood group`, `district`, `frequency`, `proof`) VALUES
(2, 'snehapaul12182000@gmail.com', 'SNEHA PAUL', '220/1 RAMCHANDRA PALLY PURBA BARISHA', '7003172952', '2021-06-22', 'Female', 'A+', 'Alipurduar', 'Regular Donor', ''),
(5, 'lipi@gmail.com', 'Lipi', '365,ygevdhd', '5378291072', '2021-06-30', 'Female', 'AB+', 'Howrah', 'Yet to donate', ''),
(6, 'tina@gmail.com', 'Tina', '23, S.N Roy Road Kolkata-700052', '5378291072', '2021-06-19', 'Female', 'AB-', 'Cooch Behar', 'On need basis', ''),
(7, 'tom@gmail.com', 'Tom', 'Kolkata', '5378291072', '2021-07-01', 'Male', 'O+', 'Kolkata', 'On need basis', '');

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
(1, 'Riya Mithia', 'Sahararhat,Falta, South 24 Parganas,743504, West Bengal', 'Alipurduar', 'riya.mithia8167@gmail.com', '09002092950', ''),
(3, 'Lipi', '342, akashbani kolkata-700045', 'Kolkata', 'lipi@gmail.com', '58976869798', '');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_help_db`
--

CREATE TABLE `ngo_help_db` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `ngo_help_db` (`id`, `email`, `name`, `address`, `district`, `ph_no`, `file`, `description`, `category`) VALUES
(3, '', 'test', 'ttttttttttttttttttttttttttttttttttt', 'Alipurduar', '000000000000000000000000', 'wallpaper.png', '', ''),
(5, 'tina@gmail.com', 'Tina', '324, akashbani kolkata-700034', 'Kolkata', '5476687690', '', 'I need help', 'medicine');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_registration`
--

CREATE TABLE `ngo_registration` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `ngo_registration` (`id`, `email`, `name`, `address`, `district`, `ph_no`, `file`, `category`) VALUES
(1, '', 'test', 'testtttttttttttttt', 'Alipurduar', '00000000000000', '', ''),
(3, 'tina@gmail.com', 'Help india', '342, akashbani kolkata-700045', 'Jalpaiguri', '58976869798', '', 'books');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_registration_individual`
--

CREATE TABLE `ngo_registration_individual` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `ngo_registration_individual` (`id`, `email`, `name`, `address`, `district`, `ph_no`, `file`, `category`) VALUES
(1, '', 'test', 'tesy667', 'Alipurduar', '000000000000', '', 'books'),
(3, 'tina@gmail.com', 'Tina', '324, akashbani kolkata-700034', 'Kolkata', '5476687690', '', 'food');

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
(1, 'SNEHA PAUL', 'Individual person', '220/1 RAMCHANDRA PALLY PURBA BARISHA', 'Darjeeling', 'snehapaul12182000@gmail.com', '7003172952', ''),
(3, 'Lipi', 'Individual person', 'Kolkata', 'Kolkata', 'lipi@gmail.com', '5378291072', ''),
(4, 'Tina', 'Organisation', '365,ygevdhd', 'Murshidabad', 'tina@gmail.com', '5378291072', '');

-- --------------------------------------------------------

--
-- Table structure for table `query_db`
--

CREATE TABLE `query_db` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `ph_no` varchar(110) NOT NULL,
  `description` varchar(111) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query_db`
--

INSERT INTO `query_db` (`id`, `name`, `address`, `email`, `ph_no`, `description`, `proof`) VALUES
(1, 'test', 'testtt', '88wd@gmail.com', '889766', '', ''),
(2, 'test', 'testtt', '88wd@gmail.com', '889766', '', ''),
(3, 'test', 'testtt', '88wd@gmail.com', '889766', '', ''),
(4, 'testfor query', 'testtt', 'abc@gmail.com', '8900876', '', ''),
(5, 'Shilpi Sarkar', '180/2/30, M.G.road Shantinagar,K.P.mission', 'sarkarshilpi789@gmail.com', '07003774436', 'hiiiii', '');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_db`
--

CREATE TABLE `receiver_db` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `receiver_db` (`id`, `email`, `name`, `address`, `phone number`, `date of birth`, `gender`, `blood group`, `district`, `proof`) VALUES
(1, 'snehapaul12182000@gmail.com', 'SNEHA PAUL', '220/1 RAMCHANDRA PALLY PURBA BARISHA', '9339285384', '2021-06-26', 'Female', 'A+', 'Alipurduar', ''),
(4, 'tina@gmail.com', 'Tina', '365,ygevdhd', '5378291072', '2021-06-30', 'Female', 'AB+', 'Howrah', ''),
(5, 'tom@gmail.com', 'Tom', '365,ygevdhd', '7686897843', '2021-07-31', 'Male', 'O+', 'Kolkata', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `id` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `n_password` varchar(255) NOT NULL,
  `con_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`id`, `uname`, `email`, `n_password`, `con_password`) VALUES
(1, 'Tina', 'tina@gmail.com', 'dGluYQ==', 'tina'),
(2, 'Lipi', 'lipi@gmail.com', 'bGlwaQ==', 'lipi'),
(12, 'SNEHA PAUL', 'snehapaul12182000@gmail.com', 'MTIzNDU=', '12345'),
(13, 'Tom', 'tom@gmail.com', 'dG9t', 'tom');

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
(2, 'ngo and charity', ''),
(6, 'Health-Care-Heroes', ''),
(7, 'Meal Services', ''),
(8, 'Child -Care Services', ''),
(9, 'Blood Bank', '');

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
  `district` varchar(23) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`id`, `service_id`, `name`, `contact`, `email`, `description`, `district`, `address`) VALUES
(1, 1, 'Smile-Society-Voluntary', '9830150249', '', '', 'Kolkata', 'Dr. Ambedkar Sarani, Madhyamgram, West B'),
(2, 1, 'Hope Home calcutta', '3324383193 /', 'shalom@vsnl.com', '', 'Kolkata', 'Gopal Lane, Srijoni, thakurani Chak, Kolka'),
(3, 1, 'You N Society', '9681747006', '', '', 'kolkata', '23/1 , Atul Krishna Bose Lane , Baranagar , kolkata 700036'),
(4, 7, 'JustMyRoot', '6290096678 / 8240048803 / 8777708468', '', 'Meal: lunch and dinner ; Price : Rs.375 for a vegetarian meal and Rs.430 for non-vegetarian meal ; Delivery all over kolkata', 'Kolkata', ''),
(5, 7, 'Pepperberries by Sujata', '9831704091', '', 'Meal : Lunch and Dinner ; Price : Free of Cost ; Delivery : In and around Park Street', 'Kolkata', ''),
(6, 8, 'National Welfare team', '7947407934', '', 'Open 24 hrs(Monday - Sunday)', 'Kolkata', 'Rohanda Panchayat , PS- Madhyamgram , Rajbati Baganbari, Kajial para , Rajarhat , kolkata - 700135'),
(7, 8, 'The Calcutta Orphanage', '7947435862', '', 'opening : 10a.m to 8p.m, Monday - sunday', 'Kolkata', '12/1, Balaram ghosh Street, Shyambazar kolkata -700004'),
(8, 1, 'Jibandeep', '033-24550926 / 09874118925', '', 'open :Monday- sunday(24 hrs)  ; Payment mode :Cash/ debit cards/ credit cards/ cheques', 'Kolkata', '114/B, Hazra Rd Kalighat kolkata -700026  '),
(19, 9, 'Institute of Blood Transfusion Medicine & Immuno Haematology (Central Blood Centre) - BCSU', '033 2351 0620', '', '', 'Kolkata', ''),
(20, 9, 'SSKM Hospital Blood Centre - BCSU', '033 2204 1233', '', '', 'Kolkata', ''),
(21, 9, 'Calcutta Medical College & Hospital Blood Centre - BCSU', '9433737234 / 9432168577', '', '', 'Kolkata', ''),
(22, 9, 'R.G. Kar Medical College & Hospital Centre - BCSU', '6291661411', '', '', 'Kolkata', ''),
(23, 9, 'N.R.S. Medical College & Hospital Blood Centre - BCSU', '9433135529 / 6291372390', '', '', 'Kolkata', ''),
(24, 9, 'Calcutta National Medical College & Hospital Centre - BCSU', '9433330080 / 9830187740', '', '', 'Kolkata', ''),
(25, 9, 'Dr.B.C.Roy PGIPS Blood Centre - BCSU', '9432305174', '', '', 'Kolkata', ''),
(26, 9, 'ESI Hospital, Maniktala Blood Centre - BCSU', '9831048664 / 033 2355 7212', '', '', 'Kolkata', ''),
(27, 9, 'Chittaranjan National Cancer Institute Blood Centre', '9432222649', '', '', 'Kolkata', ''),
(28, 9, 'Howrah Dist. Hospital Blood Centre', '9432401182 / 9123358156', '', '', 'Howrah', ''),
(29, 9, 'Uluberia S.D. Hospital Blood Centre', '9830619139', '', '', 'Howrah', ''),
(30, 9, 'M.R. Bangur Dist. Hospital Blood Centre', '9474044939', '', '', 'South 24 Pgs', ''),
(31, 9, 'Canning S.D.Hospital Blood Centre', '9434319374 / 8820731069', '', '', 'South 24 Pgs', ''),
(32, 9, 'Metiabruz SSH Blood Centre', '9434246722', '', '', 'South 24 Pgs', ''),
(33, 9, 'Baruipur S.D.Hospital Blood Centre', '9681440689', '', '', 'South 24 Pgs', ''),
(34, 9, 'Diamond Harbour Govt. MCH Blood Centre - BCSU', '9832880657 / 9382413645', '', '', 'Diamond Harbour HD', ''),
(35, 9, 'Kakdwip S.D.Hospital Blood Centre', '9433246308', '', '', 'Diamond Harbour HD', ''),
(36, 9, 'Tamluk Dist. Hospital Blood Centre - BCSU', '7548013388', '', '', 'Purba Medinipur', ''),
(37, 9, 'Haldia S.D. Hospital Blood Centre', '7586840100', '', '', 'Purba Medinipur', ''),
(38, 9, 'Egra SSH Blood Centre', '9775736053', '', '', 'Purba Medinipur', ''),
(39, 9, 'Panskura SSH Blood Centre', '9830464893', '', '', 'Purba Medinipur', ''),
(40, 9, 'Contai S.D.Hospital Blood Centre', '9434503552 / 8918080622', '', '', 'Nandigram HD', ''),
(41, 9, 'Nandigram SSH Blood Centre - BCSU', '8777344529', '', '', 'Nandigram HD', ''),
(42, 9, 'Medinipur Medical College & Hospital Blood Centre - BCSU', '9474069238 / 7407201505', '', '', 'Paschim Medinipur', ''),
(43, 9, 'Kharagpur S.D.Hospital Blood Centre', '9434005862', '', '', 'Paschim Medinipur', ''),
(44, 9, 'Ghatal S.D.Hospital Blood Centre', '9474896980', '', '', 'Paschim Medinipur', ''),
(45, 9, 'Debra SSH Blood Centre', '9433813411', '', '', 'Paschim Medinipur', ''),
(46, 9, 'Jhargram Dist. Hospital Blood Centre', '9434177966', '', '', 'Jhargram', ''),
(47, 9, 'Nayagram SSH Blood Centre', '9434134690', '', '', 'Jhargram', ''),
(48, 9, 'Gopiballavpur SSH Blood Centre', '8013460524 / 7363051211', '', '', 'Jhargram', ''),
(49, 9, 'Bankura Sammilani Medical College & Hospital Blood Centre - BCSU', '9434167747 / 9933160946', '', '', 'Bankura', ''),
(50, 9, 'Khatra S.D.Hospital Blood Centre', '9434160366', '', '', 'Bankura', ''),
(51, 9, 'Barjora SSH Blood Centre', '9477583834 / 9433390876', '', '', 'Bankura', ''),
(52, 9, 'Onda SSH Blood Centre', '7980420205', '', '', 'Bankura', ''),
(53, 9, 'Chhatna SSH Blood Centre', '9433226273 / 6294901415', '', '', 'Bankura', ''),
(54, 9, 'Bishnupur Dist. Hospital Blood Centre', '9330229191', '', '', 'Bishnupur HD', ''),
(55, 9, 'Purulia Dist. Hospital (Deben Mahato) Blood Centre', '9434522458', '', '', 'Purulia', ''),
(56, 9, 'Raghunathpur SSH Blood Centre', '7797487244', '', '', 'Purulia', ''),
(57, 9, 'Arambagh S.D.Hospital Blood Centre', '9434732968', '', '', 'Hooghly', ''),
(58, 9, 'Chinsura (Imambara) Dist. Hospital (Hooghly Dist Hospital) Blood Centre - BCSU', '9433295961', '', '', 'Hooghly', ''),
(59, 9, 'Chandannagar S.D.Hospital Blood Centre', '8240186183 / 8017002482', '', '', 'Hooghly', ''),
(60, 9, 'Serampore S.D.Hospital (Walsh) Blood Centre', '9883015023', '', '', 'Hooghly', ''),
(61, 9, 'College of Medicine & Sagore Dutta Hospital Blood Centre - BCSU', '6290147785 / 8902566390', '', '', 'North 24 Pgs', ''),
(62, 9, 'Barasat Dist. Hospital Blood Centre - BCSU', '9143454656', '', '', 'North 24 Pgs', ''),
(63, 9, 'Salt Lake S.D.Hospital Blood Centre', '9830847336', '', '', 'North 24 Pgs', ''),
(64, 9, 'Bongaon (Dr. J.R. Dhar) S.D.Hospital Blood Centre', '9433169164', '', '', 'North 24 Pgs', ''),
(65, 9, 'Barrackpore (Dr. B.N. Bose) S.D.Hospital Blood Centre', '9051239946', '', '', 'North 24 Pgs', ''),
(66, 9, 'Basirhat Dist. Hospital Blood Centre', '8670524965 / 9476192797', '', '', 'Basirhat HD', ''),
(67, 9, 'CoM & Jawaharlal Nehru Memorial (JNM) Hospital Blood Centre - BCSU', '9230614248', '', '', 'Nadia', ''),
(68, 9, 'Gandhi Memorial Hospital Blood Centre', '9433792699 / 9433118159', '', '', 'Nadia', ''),
(69, 9, 'Krishnanagar (Saktinagar) Nadia Dist. Hospital Blood Centre - BCSU', '9836697620', '', '', 'Nadia', ''),
(70, 9, 'Ranaghat S.D. Hospital Blood Centre', '9733737288', '', '', 'Nadia', ''),
(71, 9, 'Tehatta S.D.Hospital Blood Centre', '9477609672 / 8697403198', '', '', 'Nadia', ''),
(72, 9, 'Nabadwip SGH Blood Centre', '9733022688', '', '', 'Nadia', ''),
(73, 9, 'Burdwan Medical College & Hospital Blood Centre - BCSU', '9474638140', '', '', 'Purba Bardhaman', ''),
(74, 9, 'Katwa S.D.Hospital (Hemraj) Blood Centre', '9434387842', '', '', 'Purba Bardhaman', ''),
(75, 9, 'Kalna S.D.Hospital Blood Centre', '9433273617 / 9126442648', '', '', 'Purba Bardhaman', ''),
(76, 9, 'Durgapur S.D.Hospital Blood Centre', '9434246558', '', '', 'Paschim Bardhaman', ''),
(77, 9, 'Asansol Dist. Hospital Blood Centre - BCSU', '9474347380', '', '', 'Paschim Bardhaman', ''),
(78, 9, 'Suri Dist. Hospital Blood Centre - BCSU', '9830388785', '', '', 'Birbhum', ''),
(79, 9, 'Bolpur S.D.Hospital Blood Centre', '9232362053', '', '', 'Birbhum', ''),
(80, 9, 'Rampurhat Govt. MCH Blood Centre', '7586070974', '', '', 'Rampurhat HD', ''),
(81, 9, 'Murshidabad Medical College & Hospital Blood Centre - BCSU', '9831463375', '', '', 'Murshidabad', ''),
(82, 9, 'Jangipur S.D.Hospital Blood Centre', '9474316022', '', '', 'Murshidabad', ''),
(83, 9, 'Kandi S.D.Hospital Blood Centre', '9433329361', '', '', 'Murshidabad', ''),
(84, 9, 'Lalbagh S.D.Hospital Blood Centre', '9434481693', '', '', 'Murshidabad', ''),
(85, 9, 'Domkal SSH Blood Centre', '9932639004', '', '', 'Murshidabad', ''),
(86, 9, 'Sagardighi SSH Blood Centre', '9641542920', '', '', 'Murshidabad', ''),
(87, 9, 'Malda Medical College & Hospital Blood Centre - BCSU', '9932404168 / 6294946088', '', '', 'Malda', ''),
(88, 9, 'Chanchal SSH Blood Centre', '9434154741', '', '', 'Malda', ''),
(89, 9, 'Balurghat Dist. Hospital Blood Centre - BCSU', '9433356304 / 6291564144', '', '', 'Dakshin Dinajpur', ''),
(90, 9, 'Gangarampur S.D.Hospital Blood Centre', '9153320600', '', '', 'Dakshin Dinajpur', ''),
(91, 9, 'Raiganj Govt. Medical College & Hosital Blood Centre - BCSU', '7890285780 / 9874531408', '', '', 'Uttar Dinajpur', ''),
(92, 9, 'Islampur S.D.Hospital Blood Centre', '9064978986', '', '', 'Uttar Dinajpur', ''),
(93, 9, 'Jalpaiguri Dist. Hospital Blood Centre - BCSU', '9474720284', '', '', 'Jalpaiguri', ''),
(94, 9, 'Mal SSH Blood Centre', '7384222276', '', '', 'Jalpaiguri', ''),
(95, 9, 'Coochbehar Dist. Hospital (MJN) Blood Centre - BCSU', '9474146818', '', '', 'Coochbehar', ''),
(96, 9, 'Dinhata S.D.Hospital Blood Centre', '9434542822', '', '', 'Coochbehar', ''),
(97, 9, 'Mathabhanga S.D.Hospital Blood Centre', '9432879769', '', '', 'Coochbehar', ''),
(98, 9, 'Alipurduar Dist. Hospital Blood Centre - BCSU', '9153196872 / 8170010090', '', '', 'Alipurduar', ''),
(99, 9, 'Falakata SSH Blood Centre', '8927949486', '', '', 'Alipurduar', ''),
(100, 9, 'Birpara SGH Blood Centre', '8250044926', '', '', 'Alipurduar', ''),
(101, 9, 'North Bengal Medical College & Hospital Blood Centre - BCSU', '9434121152', '', '', 'Darjeeling', ''),
(102, 9, 'Darjeeling Dist. Hospital Blood Centre', '9674894042', '', '', 'Darjeeling', ''),
(103, 9, 'Kurseong S.D.Hospital Blood Centre', '8910812757 / 9831177549', '', '', 'Darjeeling', ''),
(104, 9, 'Siliguri Dist. Hospital Blood Centre', '9932965219', '', '', 'Darjeeling', ''),
(105, 9, 'Kalimpong Dist. Hospital Blood Centre', '9614847359', '', '', 'Kalimpong', '');

-- --------------------------------------------------------

--
-- Table structure for table `survivor_db`
--

CREATE TABLE `survivor_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
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

INSERT INTO `survivor_db` (`id`, `name`, `email`, `age`, `profession`, `city`, `district`, `experience`, `title`, `video`) VALUES
(1, 'Tina', 'tina@gmail.com', '30', 'Student', 'Kolkata', 'Kolkata', 'Worst Experience', 'My COVID Days', ''),
(2, 'Lipi', 'lipi@gmail.com', '50', 'Employee', 'Kolkata', 'Kolkata', 'Worst', 'Hii', '');

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
(1, 'Riya Mithia', 'on', 'Sahararhat,Falta, South 24 Parganas,743504, West Bengal', 'Alipurduar', 'riya.mithia8167@gmail.com', '09002092950', ''),
(6, 'Lipi', 'Team', 'Kolkata', 'Nadia', 'lipi@gmail.com', '5668646546', ''),
(8, 'Tom', 'Individual person', '34, Station Rd Kharagpur-345634', 'Paschim Medinipur', 'tom@gmail.com', '8879878732', '');

-- --------------------------------------------------------

--
-- Table structure for table `warrior_db`
--

CREATE TABLE `warrior_db` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
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

INSERT INTO `warrior_db` (`id`, `name`, `email`, `age`, `profession`, `city`, `district`, `experience`, `title`, `photo`, `video`) VALUES
(1, 'Tina', 'tina@gmail.com', '30', 'Doctor', 'Kolkata', 'Kolkata', 'Very Bad..', 'My Experience', '', ''),
(3, 'Lipi', 'lipi@gmail.com', '20', 'Nurse', 'Kolkata', 'Kolkata', 'Bad', 'Experience', '', '');

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
-- Indexes for table `query_db`
--
ALTER TABLE `query_db`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission_cell_db`
--
ALTER TABLE `admission_cell_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `childcareprovider_db`
--
ALTER TABLE `childcareprovider_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor_category`
--
ALTER TABLE `doctor_category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_db`
--
ALTER TABLE `doctor_db`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor_db`
--
ALTER TABLE `donor_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback_db`
--
ALTER TABLE `feedback_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_db`
--
ALTER TABLE `hospital_db`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mealprovider_db`
--
ALTER TABLE `mealprovider_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo_help_db`
--
ALTER TABLE `ngo_help_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ngo_registration`
--
ALTER TABLE `ngo_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo_registration_individual`
--
ALTER TABLE `ngo_registration_individual`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oxygen_db`
--
ALTER TABLE `oxygen_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `query_db`
--
ALTER TABLE `query_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `receiver_db`
--
ALTER TABLE `receiver_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register_db`
--
ALTER TABLE `register_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `safehome_db`
--
ALTER TABLE `safehome_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `survivor_db`
--
ALTER TABLE `survivor_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteer_db`
--
ALTER TABLE `volunteer_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `warrior_db`
--
ALTER TABLE `warrior_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
