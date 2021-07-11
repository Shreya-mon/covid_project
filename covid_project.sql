-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 08:18 AM
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
  `phno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admission_cell_db`
--

INSERT INTO `admission_cell_db` (`id`, `district`, `phno`) VALUES
(2, 'Alipurduar', '8250130190'),
(4, 'Bankura', '8350057933'),
(5, 'Birbhum', '8101717897/7363092304/7044042652/7477879588/7044042618'),
(6, 'Coochbehar', '9002263333'),
(7, 'Dakshin 24 Pargana', '9748891247/03174256475/9748893367/7602937269'),
(8, 'Dakshin Dinajpur', '8653009305'),
(9, 'Darjeeling', '03542255749/9883747875/9002755031'),
(10, 'Hooghly', '7605059328'),
(11, 'Howrah', '9830143748/9830143226/9073922901'),
(12, 'Jalpaiguri', '9883985992'),
(13, 'Jhargram', '03221258258'),
(14, 'Kalimpong', '9832748207'),
(15, 'Kolkata Metropolitan Area', '9830225902'),
(16, 'Malda', '03512-221004'),
(17, 'Murshidabad', '7063605563'),
(18, 'Nadia', '7384455638/7605056936/7605056937/7605056938/7605056939/7605056940/7605036169'),
(19, 'Paschim Bardhaman', '8597042976'),
(20, 'Paschim Medinipur', '8695500350/8695500360'),
(21, 'Purba Bardhhaman', '9883661199/9883537397'),
(22, 'Purba Medinipur', '7364045140'),
(23, 'Purulia', '9635778829'),
(24, 'Uttar 24 Pargana', '7605057325/7605057324/7605057327/7605057326/7439334624/6296194354'),
(25, 'Uttar Dinajpur', '7063590299');

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
(4, 'lipi@gmail.com', 'hello', '342, akashbani kolkata-700045', 'Kalimpong', '6464894355', 'but1.jpg');

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
(5, 'lipi@gmail.com', 'Lipi', '23, S.N Roy Road Kolkata-700052', '5378291072', '2021-06-30', 'Female', 'AB-', 'Howrah', 'Regular donor', ''),
(7, 'tom@gmail.com', 'Tom', 'Kolkata', '5378291072', '2021-07-01', 'Male', 'O+', 'Kolkata', 'On need basis', ''),
(9, 'tina@gmail.com', 'Tina', '299, DJ Block(Newtown), West Bengal 700156', '6289340429', '2021-02-19', 'Female', 'O+', 'Hooghly', 'On need basis', 'pic1.jpg'),
(10, 'bob@gmail.com', 'Bob', '464, alipurduar-38394', '6245678077', '2021-07-09', 'Male', 'A+', 'Alipurduar', 'Regular Donor', 'a1.jpg');

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
(4, 'H004', 'Bankura Nursing Home', 'Private Hospital', 16, 11, '9564280791', 'bankuranursinghome@gmail.com', 'Patpur Rd, Patpur. Bankura, West Bengal-722101', 'Bankura', 'Open 24hrs.'),
(9, 'H005', 'Bishnupur Super Speciality Hospital (Government Ho', 'Government Hospital', 96, 91, '8637836997', '', '4th floor Ward, Bishnhupur SSH. Rasikgang . Pin : 722122 , BANKURA', 'Bankura', ''),
(10, 'H006', 'COVID Unit BSMCH (Government Hospital)', 'Government Hospital', 457, 347, '9434231480', '', 'Bankura Medical College , Kenduadihi , BANKURA', 'Bankura', ''),
(11, 'H007', 'ONDA SUPER SPECIALITY HOSPITAL (Government Hospita', 'Government Hospital', 220, 207, '8350057933', '', 'KUSHTE , ONDA BLOCK PINCODE : 722144 , BANKURA', 'Bankura', ''),
(12, 'H008', 'BANKURA SEVA NIKETAN HOSPITAL (Private Hospital (S', 'Private Hospital', 13, 0, '7797701790', '', 'PATPUR, JAIL ROAD, BANKURA , BANKURA', 'Bankura', ''),
(13, 'H009', ' CURE HOSPITAL (Private Hospital (Self Run))', 'Private Hospital', 6, 5, '9732512000', '', 'LOKEPUE, KENDUADIHI, BANKURA 722102 , BANKURA', 'Bankura', ''),
(14, 'H010', ' Glocal Hospital Sonamukhi a unit of Glocal Health', 'Private Hospital', 63, 63, '9830202195/9', '', 'GANGADI NAGAR, BANKUR TO BURDWAN ROAD, SONAMUKHI , BANKURA', 'Bankura', ''),
(15, 'H011', 'Bolpur Super Specialty Hospital (Government Hospit', 'Government Hospital', 50, 50, '9647365859', '', 'Sian Hospital , Bolpur, Birbhum , BIRBHUM', 'Birbhum', ''),
(16, 'H012', 'COVID HOSPITAL SSH SURI (Government Hospital)', 'Government Hospital', 400, 398, '9434220944', '', '  Suri Sadar hospital , BIRBHUM', 'Birbhum', ''),
(17, 'H013', 'RAMPURHAT GOVT MEDICAL COLLEGE AND HOSPITAL (Gover', 'Government Hospital', 280, 280, ' 9330980945', '', 'HOSPITAL MORE, RAMPURHAT,PIN-731224 , BIRBHUM', 'Birbhum', ''),
(18, 'H014', 'SURI SADAR HOSPITAL, NTS SAFE HOME (Government Hos', 'Government Hospital', 50, 50, '9434220944', '', 'SURI, BURBHUM , BIRBHUM', 'Birbhum', ''),
(19, 'H015', 'GLOCAL HOSPITAL (Govt. Requisitioned Pvt. Hospital', 'Govt. Requisitioned Pvt. Hospital', 90, 90, '7063584842', '', 'Nanoor Chandidas Rd, Khosh Kadambapur, West Bengal 731204 , BIRBHUM', 'Birbhum', ''),
(20, 'H016', 'COOCHBEHAR POLICE HOSPITAL (Government Hospital)', 'Government Hospital', 20, 20, '8670544844', '', 'COOCHBEHAR , COOCHBEHAR', 'Coochbehar', ''),
(21, 'H017', 'DINHATA SUB DIVISIONAL HOSPITAL (Government Hospit', 'Government Hospital', 32, 31, '8436789565', '', 'DINHATA MAIN ROAD , COOCHBEHAR', 'Coochbehar', ''),
(22, 'H018', ' MAHARAJA JITENDRA NARAYAN MEDICAL COLLEGE HOSPITA', 'Government Hospital', 122, 95, '7605041535', '', 'SUNITY ROAD COOCHBEHAR , COOCHBEHAR', 'Coochbehar', ''),
(23, 'H019', ' MATHABHANGA SUB DIVISIONAL HOSPITAL (Government H', 'Government Hospital', 30, 24, '9641363961', '', 'MATHABHANGA , COOCHBEHAR', 'Coochbehar', ''),
(24, 'H020', 'Cooch behar Mission Hospital (Private Hospital (Se', 'Private Hospital', 30, 29, '9832514641', '', 'Chakchaka, Cooch Behar , COOCHBEHAR', 'Coochbehar', ''),
(25, 'H021', ' P K SAHA NURSING HOME (Private Hospital (Self Run', 'Private Hospital', 70, 48, '7797863330', '', 'Bairagi Dighi Bye Lane Cooch Behar , COOCHBEHAR', 'Coochbehar', ''),
(26, 'H022', 'Subham Hospital Diagnostic Centre Pvt. Ltd (Privat', 'Private Hospital', 33, 27, '9832464295', '', 'Cooch Behar Municipality , COOCHBEHAR', 'Coochbehar', ''),
(27, 'H023', 'BARUIPUR COVID HOSPITAL (Government Hospital)', 'Government Hospital', 100, 100, '9432582068', '', '  Baruipur Municipality, South 24 Parganas , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana', ''),
(28, 'H024', 'CANNING COVID HOSPITAL (Government Hospital)', 'Government Hospital', 62, 0, '9800374819', '', 'Canning Sports Complex Canning-I Block , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana', ''),
(29, 'H025', ' ESI HOSPITAL BUDGE BUDGE (Government Hospital)', 'Government Hospital', 100, 79, '  9831737068', '', 'Pulkhali Village Doulatpur Post Office, Budge Budge Trunk Rd, Vivekananda Pally, Kolkata, West Bengal ', 'Dakshin 24 Pargana', ''),
(30, 'H026', ' KAKDWIP SUPERSPECIALITY HOSPITAL (Government Hosp', 'Government Hospital', 60, 48, '8348670855', '', 'KAKDWIP , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana', ''),
(31, 'H027', 'BHARAT SEVASRAM SANGHA HOSPITAL (Private Hospital ', 'Private Hospital', 25, 25, '9073368550,7', '', '  D.H.ROAD, JOKA , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana', ''),
(32, 'H028', ' INDIAN INSTITUTE OF LIVER AND DIGESTIVE SCIENCES ', 'Private Hospital', 25, 25, '033-24342300', '', 'MALIPUKURIA, JAGADISHPUR, SONARPUR , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana', ''),
(33, 'H029', ' JAGANNATH GUPTA INSTITUTE OF MEDICAL SCIENCES AND', 'Private Hospital', 22, 22, '9903396230', '', 'RS DAG 689, K.P. MONDAL ROAD, BUITA, PIN - 700137 , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana', ''),
(34, 'H030', ' THE SAHARARHAT NURSING HOME (Private Hospital (Se', 'Private Hospital', 42, 42, '3174-225316', '', 'VILL+PO; BELSINGA, PS: FALTA , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana', ''),
(35, 'H031', 'Gangarampur Sub Divisional Hospital (Government Ho', 'Government Hospital', 83, 81, '9593165100', '', 'Kaldighi, PS: Gangarampur , DAKSHIN DINAJPUR', 'Dakshin Dinajpur', ''),
(36, 'H032', 'Natya Utkarshya Kendra (Government Hospital)', 'Government Hospital', 85, 83, '9064140556', '', 'Beltala Park, Balurghat , DAKSHIN DINAJPUR', 'Dakshin Dinajpur', ''),
(37, 'H033', 'DARJEELING DISTRICT HOSPITAL (Government Hospital)', 'Government Hospital', 40, 21, '03542251555', '', 'EDEN COMLEX , DARJEELING', 'Darjeeling', ''),
(38, 'H034', ' KURSEONG SUB DIVISIONAL HOSPITAL (Government Hosp', 'Government Hospital', 18, 13, '9679742995', '', 'BURDAWAN ROAD KURSEONG , DARJEELING', 'Darjeeling', ''),
(39, 'H035', 'NORTH BENGAL MEDICAL COLLEGE AND HOSPITAL (Governm', 'Government Hospital', 362, 319, '8348810772', '', 'SUSHATRANAGAR DIST DARJELING , DARJEELING', 'Darjeeling', ''),
(40, 'H036', ' SILIGURI DISTRICT HOSPITAL (Government Hospital)', 'Government Hospital', 40, 29, '9002755031', '', 'SILIGURI, WARD NO 17,HAKIMPARA, , DARJEELING', 'Darjeeling', ''),
(41, 'H037', 'Dr Chhangs Super Speciality Hospital Pvt. LTD (Gov', 'Govt. Requisitioned Pvt. Hospital', 30, 30, '9593689993', '', '11 Himachal Vihar Road beside city centre, Matigara, PIN 734010 , DARJEELING', 'Darjeeling', ''),
(42, 'H038', 'Arogya Niketan Nursing Home (Private Hospital (Sel', 'Private Hospital', 30, 2, '3532501601', '', 'H/268/240, Khalpara Road, Khalpara, Siliguri, 734005 , DARJEELING', 'Darjeeling', ''),
(43, 'H039', 'Avalon Hospital (Private Hospital (Self Run))', 'Private Hospital', 0, 0, '7908393625', '', 'Paribahan Nagar, Matigara , DARJEELING', 'Darjeeling', ''),
(44, 'H040', 'Basus Clinic Health Care Pvt. Ltd. (Private Hospit', 'Private Hospital', 10, 7, '0353-2436436', '', '262/197, Nandalal Basu Sarani, Collegepara, Siliguri, Pin- 734001 , DARJEELING', 'Darjeeling', ''),
(45, 'H040', 'Desun Hospital (Private Hospital (Self Run))', 'Private Hospital', 71, 65, '9051640000', '', 'Kawakhali, North Bengal Medical College Road, Kawakhali, Pin- 734012 , DARJEELING', 'Darjeeling', ''),
(46, 'H041', 'Dr. Chhangs Super Specialty Hospital Pvt. Ltd. (Pr', 'Private Hospital', 40, 40, '9593689993', '', '11, Himachal Vihar Road, beside City Centre, Matigara, Pin- 734010 , DARJEELING', 'Darjeeling', ''),
(47, 'H042', 'Arambagh Sub-Divisional Hospital (Government Hospi', 'Government Hospital', 95, 82, '7605059328', '', 'Arambagh Station Road, Arambag, West Bengal 71260 , HOOGHLY', 'Hooghly', ''),
(48, 'H043', 'Chandannagar Sub Divisional Hospital (Government H', 'Government Hospital', 200, 167, '7605059328', '', '  Helapukur Rd, Chandannagar, Chinsurah, West Bengal 712136 , HOOGHLY', 'Hooghly', ''),
(49, 'H044', 'ESI Bandel (Government Hospital)', 'Government Hospital', 150, 117, '7605059328', '', 'GT Road, opposite Axis Bank, Bandel, West Bengal 712123 , HOOGHLY', 'Hooghly', ''),
(50, 'H045', 'ESI Hospital - Serampore (Government Hospital)', 'Government Hospital', 100, 86, ' 03326221703', '', '  G.T. Road, Opp Netaji Girls High School, Mullick Para, Hooghly, Serampore, West Bengal 712201 , HOOGHLY', 'Hooghly', ''),
(51, 'H046', 'A.B Nursing Home (Private Hospital (Self Run))', 'Private Hospital', 5, 5, '9732645336', '', '273, Link Road, Arambagh , HOOGHLY', 'Hooghly', ''),
(52, 'H047', 'Ajanta Seva Sadan Hospital (Private Hospital (Self', 'Private Hospital', 26, 26, '6290421520', '', '49/46, RAMKRISHNA ROAD, CHINSURAH, CHINSURAH , HOOGHLY', 'Hooghly', ''),
(53, 'H048', 'Arambagh Nursing Home (Private Hospital (Self Run)', 'Private Hospital', 7, 5, '9734591656', '', '332, Khanka Sarif Road, Arambagh, Arambagh , HOOGHLY', 'Hooghly', ''),
(54, 'H049', ' Arogya Niketan Pvt. Ltd (Private Hospital (Self R', 'Private Hospital', 2, 2, '03326637806', '', ', R.S.VERMA ROAD, UTTARPARA, UTTARPARA , HOOGHLY', 'Hooghly', ''),
(55, 'H050', 'Basantpur NH (Private Hospital (Self Run))', 'Private Hospital', 10, 10, '9733942986', '', '387/1, Link Road, Arambagh, Arambagh , HOOGHLY', 'Hooghly', ''),
(56, 'H051', 'Baltikuri ESI Covid Hospital (Government Hospital)', 'Government Hospital', 600, 575, '8240235865', '', '  Baltikuri, P.O, Bankra, Howrah, West Bengal 711403 , HOWRAH', 'Howrah', ''),
(57, 'H052', ' Bauria SGH (Government Hospital)', 'Government Hospital', 20, 20, ' 9474688332,', '', 'Chackmadhu, Radhanagar, Bauria, Howrah-711310 , HOWRAH', 'Howrah', ''),
(58, 'H053', 'Belur ESI T.B. Hospital (Government Hospital)', 'Government Hospital', 100, 59, '03326463061,', '', 'P.O.- Sapuipara, P.S.- Nischinda, Howrah, West Bengal 711227 , HOWRAH', 'Howrah', ''),
(59, 'H054', 'Gabberia SGH (Government Hospital)', 'Government Hospital', 20, 20, '9231179266, ', '', 'VILL+PO - GABBERIA, PS - PANCHLA, DIST - HOWRAH, PIN - 711322 , HOWRAH', 'Howrah', ''),
(60, 'H055', 'ILS Hospital Golabari (Govt. Requisitioned Pvt. Ho', 'Govt. Requisitioned Pvt. Hospital', 19, 16, '40880000', '', '98, Dr Abani Dutta Rd, opposite Golabari, PS, Howrah, West Bengal 711101 , HOWRAH', 'Howrah', ''),
(61, 'H056', 'Narayana Multi Speciality Hospital (Govt. Requisit', 'Govt. Requisitioned Pvt. Hospital', 8, 8, '18602080208', '', 'Chunavati, Andul Road, Howrah 711109 , HOWRAH', 'Howrah', ''),
(62, 'H057', 'Sanjiban Hospital (Govt. Requisitioned Pvt. Hospit', 'Govt. Requisitioned Pvt. Hospital', 50, 43, '6290410760,9', '', 'Boikunthopur Rd, Fuleswar, Uluberia, Howrah, West Bengal 711316 , HOWRAH', 'Howrah', ''),
(63, 'H058', 'ILS Hospital Golabari pvt beds (Private Hospital (', 'Private Hospital', 69, 62, '  40880000', '', '  98, Dr Abani Dutta Rd, opposite Golabari, PS, Howrah, West Bengal 711101 , HOWRAH', 'Howrah', ''),
(64, 'H059', ' IRIS Hospitex (Private Hospital (Self Run))', 'Private Hospital', 23, 10, '03326703504', '', 'Fokor Dokan, Baruipara, Domjur, Howrah, West Bengal 711405 , HOWRAH', 'Howrah', ''),
(65, 'H060', ' Narayana Multispeciality Hopsital -Paying (Privat', 'Private Hospital', 16, 12, '9830064488', '', 'Andul Road, Howrah 711109 , HOWRAH', 'Howrah', ''),
(66, 'H061', 'Sanjiban Hospital - pvt beds (Private Hospital (Se', 'Private Hospital', 200, 170, '6290410760, ', '', 'Boikunthopur Rd, Fuleswar, Uluberia, Howrah, West Bengal 711316 , HOWRAH', 'Howrah', ''),
(67, 'H062', 'Biswa Bangla Krirangan COVID Hospital (Government ', 'Government Hospital', 342, 303, '8207283307, ', '', '  Biswa Bangla Krirangan COVID Hospital, Jalpaiguri, West Bengal 735101 , JALPAIGURI', 'Jalpaiguri', ''),
(68, 'H063', ' COVID Care Center, Mal (Government Hospital)', 'Government Hospital', 50, 49, '9775613688', '', 'Matiali ITI College, Chalsa, Jalpaiguri - 735223 , JALPAIGURI', 'Jalpaiguri', ''),
(69, 'H064', ' COVID Ward, MAL SDH (Government Hospital)', 'Government Hospital', 35, 23, '8101093533', '', 'WARD NO: 06, MAL MUNICIPALITY, JALPAIGURI-735221 , JALPAIGURI', 'Jalpaiguri', ''),
(70, 'H065', 'Night Shelter, COVID Hospital, Jalpaiguri (Governm', 'Government Hospital', 150, 127, '  8597965016', '', 'TB Hospital Para, Opposite of Jalpaiguri SSH, Paharpur, Jalpaiguri-735101 , JALPAIGURI', 'Jalpaiguri', ''),
(71, 'H066', 'Anandaloke Medical Centre Pvt Ltd (Private Hospita', 'Private Hospital', 16, 0, ' 9749077467,', '', '2nd Mile, Sevoke Road, Siliguri - 734001, Darjeeling, West Bengal, India , JALPAIGURI', 'Jalpaiguri', ''),
(72, 'H067', ' Life Line Medical Research And Cancer Institute (', 'Private Hospital', 32, 32, '7477789999', '', 'NH 31 BYEPASS SEVOKE ROAD NEAR BHAKTINAGAR POLICE STATION, SILIGURI, JALPAIGURI', 'Jalpaiguri', ''),
(73, 'H068', 'Maharaja Agrasen Hospital (Private Hospital (Self ', 'Private Hospital', 30, 10, '180021211122', '', 'Fulbari Truck Terminus, Fulbari, Beside, Dist, Siliguri, West Bengal 734015 , JALPAIGURI', 'Jalpaiguri', ''),
(74, 'H069', 'MANOKAMNA HOSPITAL (Private Hospital (Self Run))', 'Private Hospital', 30, 29, ' 9434086154', '', 'ISKCON MANDIR ROAD, SEVOKE ROAD, SILIGURI - 734001 , JALPAIGURI', 'Jalpaiguri', ''),
(75, 'H070', 'Touch Nursing Home, COVID Hospital (Private Hospit', 'Private Hospital', 30, 25, '03561-222522', '', 'Netaji Subhash Chandra Bose Rd, Rajbari Para, Jalpaiguri, West Bengal 735101 , JALPAIGURI', 'Jalpaiguri', ''),
(76, 'H071', 'Covid Hospital, Night Shelter (Government Hospital', 'Government Hospital', 85, 62, '6297478368', '', 'Jhargram District Hospital campus, Raghunathpur, Jhargram, 721507 , JHARGRAM', 'Jhargram', ''),
(77, 'H072', 'Gopiballavpur Super Speciality Hospital (Governmen', 'Government Hospital', 22, 16, '9339689886', '', 'Gopiballavpur, Jhargram, Pin- 721506 , JHARGRAM', 'Jhargram', ''),
(78, 'H073', 'Jhargram District Hospital (Government Hospital)', 'Government Hospital', 160, 152, '6297478368', '', 'Jhargram District Hospital campus, Raghunathpur, Jhargram, 721507 , JHARGRAM', 'Jhargram', ''),
(79, 'H074', 'Nayagram Super Speciality Hospital (Government Hos', 'Government Hospital', 70, 61, '9732151852', '', 'Kharikamathani, Nayagram , Jhargram, Pin - 721159 , JHARGRAM', 'Jhargram', ''),
(80, 'H075', 'Covid Hospital, Night Shelter - Covid Hospital, Wo', 'Private Hospital', 80, 80, '8250995342', '', 'Working Womens Hostel, Old Jhargram, 721507 , JHARGRAM', 'Jhargram', ''),
(81, 'H076', 'TRIVENI COVID HOSPITAL (Government Hospital)', 'Government Hospital', 180, 150, ' 9832748207', '', 'Teesta Valley Forest, West Bengal, Pin-734317 , KALIMPONG', 'Kalimpong', ''),
(82, 'H077', 'AMRI, Salt Lake - Vivekananda Yuba Bharati Krirang', 'Government Hospital', 0, 0, '9163645544/ ', '', 'JB Block, Sector III, Bidhannagar, Kolkata, West Bengal 700098 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(83, 'H078', 'Calcutta National Medical College and Hospital (Go', 'Government Hospital', 216, 209, '91634 21886', '', '32 Gora Chand Road Beniapukur Kolkata West Bengal 700014 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(84, 'H079', 'CHITTARANJAN NATIONAL CANCER INSTITUTE-CNCI (Gover', 'Government Hospital', 422, 397, '033 24765510', '', 'Street Number 299, DJ Block(Newtown), Action Area I, Newtown, New Town, West Bengal 700156 ', 'Kolkata Metropolitan Area', ''),
(85, 'H080', 'College of Medicine Sagore Dutta Hospital (Governm', 'Government Hospital', 278, 233, '  033-255313', '', '578 Barrackpore Trunk Road KAMARHATI Kolkata-700058 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(86, 'H081', 'ESI Hospital Sealdah (Government Hospital)', 'Government Hospital', 100, 92, '6290514135', '', 'Sealdah , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(87, 'H082', 'AMRI HOSPITAL, SALT LAKE Govt Requisitioned (Govt.', 'Govt. Requisitioned Pvt. Hospital', 0, 0, ' 033 6606 38', '', '16 17, JC Block Lane, Central Park Road Broadway Road, stadium gate number 3, opposite salt lake, Sector III, Bidhannagar, Kolkata, West Bengal 700098 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(88, 'H083', 'Belle Vue Clinic, Govt Requisitioned (Govt. Requis', 'Govt. Requisitioned Pvt. Hospital', 33, 31, ' 9331847265', '', '9, Dr. U. N. Brahmachari Street (Formerly Loudon Street), Elgin, Kolkata, West Bengal 700017 , KOLKATA', 'Kolkata Metropolitan Area', ''),
(89, 'H084', 'Charnock Hospital Govt. Requisitioned (Govt. Requi', 'Govt. Requisitioned Pvt. Hospital', 10, 6, '9831539000', '', 'BMC , Biswa Bangla Sarani, Tegharia, Newtown, Kolkata, West Bengal 700157 , KOLKATA METROPOLITAN', 'Kolkata Metropolitan Area', ''),
(90, 'H085', 'Columbia Asia Hospital, Salt Lake Govt. Requisitio', 'Govt. Requisitioned Pvt. Hospital', 0, 0, '033 6600 330', '', 'IB-, IB Block, Sector III, Bidhannagar, Kolkata, West Bengal , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(91, 'H086', 'DESUN Hospital (Govt. Requisitioned Pvt. Hospital)', 'Govt. Requisitioned Pvt. Hospital', 25, 25, ' 090517 1517', '', 'Desun More, 720, Eastern Metropolitan Bypass, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', 'Kolkata Metropolitan Area', ''),
(92, 'H087', ' Fortis Hospital Anandapur Category Private Hospit', 'Govt. Requisitioned Pvt. Hospital', 25, 4, '  033-6628 4', '', 'Eastern Metropolitan Bypass, Anandapur, East Kolkata Twp, Kolkata, West Bengal , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(93, 'H088', 'All Asia Medical Institute A Unit Of Harsh Medical', 'Private Hospital', 18, 18, '  033 4001 2', '', '8B, Garcha, 1St Lane,Near Gariahat Pantaloons, Kolkata, West Bengal - 700019 ... , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(94, 'H089', 'AMRI Hospital, Dhakuria (Private Hospital (Self Ru', 'Private Hospital', 67, 62, '033 6626-000', '', 'Block-A, Scheme-L11 P-4&5, Gariahat Rd, Dhakuria, Kolkata, West Bengal 700029 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(95, 'H090', 'AMRI, Salt Lake (Private Hospital (Self Run))', 'Private Hospital', 30, 17, '033 6606-380', '', '16 17, JC Block Lane, Central Park Road Broadway Road, stadium gate number 3, opposite salt lake, Sector III, Bidhannagar, Kolkata, West Bengal 700098 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(96, 'H091', 'Anandalok Hospital (Private Hospital (Self Run))', 'Private Hospital', 31, 27, '033 2359 293', '', '  DK-7/3, 3rd Ave, beside National Dairy Development Board, Sector II, Bidhannagar, Kolkata, West Bengal 700091 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area', ''),
(97, 'H092', 'Chanchal SSH Malda (Government Hospital)', 'Government Hospital', 75, 75, '9134203473', '', 'Chanchal Rural Hospital, Chanchal, Malda , MALDA', 'Malda', ''),
(98, 'H093', 'Malda Medical College and Hospital (Government Hos', 'Government Hospital', 300, 297, '9883233788', '', 'English Bazar Malda, 732101 , MALDA', 'Malda', ''),
(99, 'H094', 'Square Nursing Home (Govt. Requisitioned Pvt. Hosp', 'Govt. Requisitioned Pvt. Hospital', 5, 5, '8918736650', '', '  193/146, No 3 Govt Colony, English Bazar, Malda 732101 , MALDA', 'Malda', ''),
(100, 'H095', 'Angel Nursing Home (Private Hospital (Self Run))', 'Private Hospital', 15, 15, ' 7586021575', '', 'Angel Nursing Home. Sadarghat more, Mangalbari, Malda-732142 , MALDA', 'Malda', ''),
(101, 'H096', 'Care and Cure Nursing Home (Private Hospital (Self', 'Private Hospital', 10, 10, '9735971993', '', 'Village Gabgachi, PO Jadupur, Near State Bank of India , MALDA', 'Malda', ''),
(102, 'H097', 'City Nursing Home (Private Hospital (Self Run))', 'Private Hospital', 4, 4, '7047322943', '', 'Gabgachhi-Jadupur,Kamalabari,Englishbazar,Malda , MALDA', 'Malda', ''),
(103, 'H098', 'Disahri Health Point Pvt. Ltd. (Private Hospital (', 'Private Hospital', 23, 0, '8116602176', '', '19, B. G. Rorad, Mokdumpur, Malda 732103 , MALDA', 'Malda', ''),
(104, 'H099', 'Christiyo Seva Sadan London Mission Covid Hospital', 'Government Hospital', 120, 119, '7477781494, ', '', 'PADAMPUR JIAGANJ, PO & PS - JIAGANJ, DIST - MURSHIDABAD, PIN - 742123 , MURSHIDABAD', 'Murshidabad', ''),
(105, 'H100', 'Domkal SDH And SSH (Government Hospital)', 'Government Hospital', 100, 100, '  9339639967', '', 'DOMKAL, MURSHIDABAD, PIN - 742303 , MURSHIDABAD', 'Murshidabad', ''),
(106, 'H101', 'Jangipur Sub-Divisional Hospital (Government Hospi', 'Government Hospital', 100, 91, '8391023096', '', 'PO+PS - RAGHUNATHGANJ, MURSHIDABAD - 742225 , MURSHIDABAD', 'Murshidabad', ''),
(107, 'H102', 'Kandi Sub-Divisional Hospital (Government Hospital', 'Government Hospital', 20, 20, '7318746550', '', 'Kandi, PO-Kandi , PIN-742137 , MURSHIDABAD', 'Murshidabad', ''),
(108, 'H103', 'Murshidabad Medical College and Hospital (Governme', 'Government Hospital', 145, 145, '8373056219', '', '73, Station Road, Raninagar, Gora Bazar, Berhampore, West Bengal - 742101 , MURSHIDABAD', 'Murshidabad', ''),
(109, 'H104', 'Asha Deep Nursing Home and Diagnostic Centre (Priv', 'Private Hospital', 16, 16, ' 7797566359', '', 'Basudebpur, Raghunathganj, PIN-742225 , MURSHIDABAD', 'Murshidabad', ''),
(110, 'H105', 'Astha Healthcare (Private Hospital (Self Run))', 'Private Hospital', 16, 16, '7980563744', '', 'Bagdahar, Jiaganj, Murshidabad. , MURSHIDABAD', 'Murshidabad', ''),
(111, 'H106', 'Basumati healthcare Pvt. Ltd. (Private Hospital (S', 'Private Hospital', 34, 34, '7001049848', '', 'Talai, Jarur, Raghunathganj, Murshidabad. , MURSHIDABAD', 'Murshidabad', ''),
(112, 'H107', 'Berhampore City Hospital Pvt. Ltd. (Private Hospit', 'Private Hospital', 5, 5, '7797840530', '', 'CHALTIA, PO - CHALTIA, PS - BERHAMPORE, MURSHIDABAD - 742165 , MURSHIDABAD', 'Murshidabad', ''),
(113, 'H108', 'KALYANI ESI HOSPITAL (Government Hospital)', 'Government Hospital', 100, 92, '  0332582821', '', 'A- Block, P.O & P.S - Kalyani, Nadia, PIN - 741235 , NADIA', 'Nadia', ''),
(114, 'H109', ' NABADWIP STATE GENERAL HOSPITAL (Government Hospi', 'Government Hospital', 25, 17, ' 7797035615', '', '56, PRATAPNAGAR, NABADWIP, NADIA, PIN- 741302 , NADIA', 'Nadia', ''),
(115, 'H110', 'NETAJI SUBHASH SANATORIUM HOSPITAL (Government Hos', 'Government Hospital', 301, 259, '7605036189', '', 'T.B. HOSPITAL, BLOCK - A, P.O. + P.S.- KALYANI, WEST BENGAL, PIN- 741251 , NADIA', 'Nadia', ''),
(116, 'H111', 'RANAGHAT SUB-DIV HOSPITAL (Government Hospital)', 'Government Hospital', 28, 20, '  9333319675', '', 'JAGPUR ROAD, ANULIA, RANAGHAT , NADIA', 'Nadia', ''),
(117, 'H112', 'SHAKTINAGAR ZILLA HOSPITAL (Government Hospital)', 'Government Hospital', 76, 52, '7548975285', '', ' T. D. BANERJEE ROAD, SHAKTINAGAR, KRISHNANAGAR, NADIA, WEST BENGAL, PIN-741102 , NADIA', 'Nadia', ''),
(118, 'H113', 'Manorama Hospitex pvt. ltd. (Private Hospital (Sel', 'Private Hospital', 40, 33, '8240565095', '', '172A, Beharampur Road, NH-34, Ranaghat, Nadia , NADIA', 'Nadia', ''),
(119, 'H114', 'SNR CARNIVAL HOSPITAL (Private Hospital (Self Run)', 'Private Hospital', 80, 80, '8910553178', '', 'M & 12, IGC, Ph-111, WBIIDC, Kalyani Barrackpore Expressway, Kalyani, Nadia, Pin.- 741235 , NADIA', 'Nadia', ''),
(120, 'H115', 'Asansol District Hospital (Government Hospital)', 'Government Hospital', 200, 200, '0341-2304040', '', '  S.B. Gorai Road, Asansol, 713301 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(121, 'H116', 'Burnpur Hospital (Government Hospital)', 'Government Hospital', 228, 10, '9434776841', '', 'SAIL ISP, Burpur-713325 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(122, 'H117', 'Durgapur ESI Hospital (Government Hospital)', 'Government Hospital', 100, 48, '  8207008088', '', 'Durgapur , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(123, 'H118', 'Durgapur Steel Plant Hospital (Government Hospital', 'Government Hospital', 30, 27, '0343-2745198', '', 'Main Hospital, J.M. Sengupta Road, Durgapur-713205 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(124, 'H119', 'Gouri Devi Institute of Medical Sciences Hospital ', 'Govt. Requisitioned Pvt. Hospital', 200, 198, '9083249541,8', '', 'Durgapur , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(125, 'H120', 'Shri Ramkrishna Institute of Medical Sciences and ', 'Govt. Requisitioned Pvt. Hospital', 200, 198, '9817877877', '', 'Malandighi, Kanksha, Durgapur , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(126, 'H121', 'Citizen Hospital (Private Hospital (Self Run))', 'Private Hospital', 22, 22, '7477783932', '', ' 6/N,MARKET STREET, SEC-2B, BIDHANNAGAR, DURGAPUR-713212 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(127, 'H122', 'Gouri Devi Hospital and Research Institute (Privat', 'Private Hospital', 58, 58, '9064461129', '', 'G.T. Road, Rajbandh, Durgapur-12 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(128, 'H123', ' Health World Hospital (Private Hospital (Self Run', 'Private Hospital', 24, 6, ' 8170052869', '', 'C-49 Commercial Area, Opp. ESIC Sub-Regional Office, Gandhi More, City Centre, Durgapur-713216 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(129, 'H124', 'Health World Hospital - MADHURIMA GUEST HOUSE (Sat', 'Private Hospital', 0, 0, '8170052632', '', 'PLOT NO - UPC-13, BENGAL AMBUJA, DURGAPUR-713216 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(130, 'H125', 'HLG Memorial Hospital Pvt. Ltd. (Private Hospital ', 'Private Hospital', 23, 23, ' 8348689036', '', 'Vivekananda Sarani, Asansol, 713305 , PASCHIM BARDHAMAN', 'Paschim Bardhaman', ''),
(131, 'H126', 'Contai Sub Divisional Hospital (Government Hospita', 'Government Hospital', 50, 31, '9083246426', '', 'DARUA, CONTAI , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(132, 'H127', ' EGRA SUB DIVISIONAL AND SUPER SPECIALITY HOSPITAL', 'Government Hospital', 100, 89, '7364045140', '', 'EGRA, PURBA MEDINIPUR , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(133, 'H128', 'HALDIA SUB DIVISIONAL HOSPITAL (Government Hospita', 'Government Hospital', 50, 37, '7364045140', '', 'HALDIA, PURBA MEDINIPUR , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(134, 'H129', ' Nandigram SSH (Government Hospital)', 'Government Hospital', 112, 94, '9932393704', '', 'PO Nandigram PIN 721631 , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(135, 'H130', 'PANSKURA SUPER SPECIALITY HOSPITAL (Government Hos', 'Government Hospital', 300, 242, '7364045140', '', 'PITPUR, UTTAR MECHOGRAM, PURBA MEDINIPUR , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(136, 'H131', 'BAROMAA MS HOSPITAL (Govt. Requisitioned Pvt. Hosp', 'Govt. Requisitioned Pvt. Hospital', 100, 98, '7364045140', '', 'UTTAR MECHOGRAM, PANSKURA, PURBA MEDINIPUR , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(137, 'H132', ' Chandipur Multispeciality Hospital (Govt. Requisi', 'Govt. Requisitioned Pvt. Hospital', 1, 0, '9083257406', '', 'PO Math Chandipur PIN 721659 , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(138, 'H133', 'BAROMA MULTI SPECIALITY HOSPITAL (Private Hospital', 'Private Hospital', 123, 109, '7364045140', '', 'UTTAR MECHOGRAM, PURBA MEDINIPUR , PURBA MEDINIPUR', 'Purba Medinipur', ''),
(139, 'H134', 'Ayush COVID Hospital (Government Hospital)', 'Government Hospital', 120, 107, '6297449488', '', 'Abas, Midnapore , PASCHIM MEDINIPUR', 'Paschim Medinipur', ''),
(140, 'H135', 'Debra COVID Hospital (Government Hospital)', 'Government Hospital', 125, 118, '9647149957', '', 'Debra, Paschim Medinipur , PASCHIM MEDINIPUR', 'Paschim Medinipur', ''),
(141, 'H136', ' Ghatal Sub Divisional Hospital cum SSH (Governmen', 'Government Hospital', 80, 59, '9635803484', '', '  Ghatal, Paschim Medinipur , PASCHIM MEDINIPUR', 'Paschim Medinipur', ''),
(142, 'H137', 'Kharagpur Sub Divisional Hospital (Government Hosp', 'Government Hospital', 50, 45, '8509794057', '', '  Chandmari, Kharagpur , PASCHIM MEDINIPUR', 'Paschim Medinipur', ''),
(143, 'H138', 'Midnapore Medical Collge Hospital (Government Hosp', 'Government Hospital', 96, 58, '03222222454', '', '  5, Vidyasagar Road, Medinipur , PASCHIM MEDINIPUR', 'Paschim Medinipur', ''),
(144, 'H139', 'St. Joseph Hospital (Private Hospital (Self Run))', 'Private Hospital', 36, 34, '8768829889', '', 'Phulpahari, PO-Vidyasagar University, Midnapore , PASCHIM MEDINIPUR', 'Paschim Medinipur', ''),
(145, 'H140', 'Burdwan Medical College and Hospital (Government H', 'Government Hospital', 240, 223, '8972793553', '', 'Shyamsayer, Purba Bardhaman - 713104 , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(146, 'H141', 'Kalna Sub-Divisional Hospital (Government Hospital', 'Government Hospital', 90, 82, '8972995911', '', 'Kalna Katwa Road, Purba Bardhaman - 713409 , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(147, 'H142', ' Katwa Sub-Divisional Hospital (Government Hospita', 'Government Hospital', 20, 17, '  9734991686', '', 'Katwa Municipality, Purba Bardhaman - 713130 , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(148, 'H143', 'Krishi Bhawan (Government Hospital)', 'Government Hospital', 200, 186, '9339633887', '', 'Kalna Gate, Near Agriculture Farm, Purba Bardhaman , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(149, 'H144', 'CAMRI BURDWAN GOVT. REQUISITION (Govt. Requisition', 'Govt. Requisitioned Pvt. Hospital', 0, 0, '9233360632', '', '838, Bamchandaipur, P.O.- Joteram, P.S.- Burdwan, Joteram - 713104 , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(150, 'H145', 'Adarsh Nursing Home (Private Hospital (Self Run))', 'Private Hospital', 16, 16, '9434358232', '', '84, BC Road, Sulipukur, Rajbati, Burdwan - 713104 , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(151, 'H146', ' Annapurna Nursing Home (Private Hospital (Self Ru', 'Private Hospital', 15, 14, '7908978011', '', 'Garh More, NH2 Bypass Road. Uttara Bus Stand, Fagupur, Burdwan- 713101 , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(152, 'H147', 'Asha Nursing Home Diagnostic Centre and Polyclinic', 'Private Hospital', 8, 6, '9732075276', '', '  Nawabhat, G.T. Road (Near Bank of India), Purba Bardhaman (W.B) , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(153, 'H148', ' Bengal Faith Hospital (Private Hospital (Self Run', 'Private Hospital', 17, 17, ' 7596073422,', '', '  GT Road, Goda , PURBA BARDHHAMAN', 'Purba Bardhaman', ''),
(154, 'H149', 'Covid Hospital Deben Mahato Govt Medical College a', 'Government Hospital', 214, 214, ' 7583988101', '', 'Hatuara, Purulia , PURULIA', 'Purulia', ''),
(155, 'H150', 'RAGHUNATHPUR COVID HOSPITAL (Government Hospital)', 'Government Hospital', 56, 56, '8597376921', '', 'RAGHUNATHPUR , PURULIA', 'Purulia', ''),
(156, 'H151', 'RAMESHWARLALL SINGHANIA SEVA PRATISTHAN (Private H', 'Private Hospital', 15, 15, '8145900440,8', '', '  WEST LAKE ROAD,PURULIA,W.B.,PIN-723101 , PURULIA', 'Purulia', ''),
(157, 'H152', 'ROTARY CLUB OF PURULIA SERVICE CENTRE MULTI SPECIA', 'Private Hospital', 10, 10, '7547999886', '', 'WEST LAKE ROAD, PURULIA 723101 , PURULIA', 'Purulia', ''),
(158, 'H153', 'Ashokenagar State General Hospital (Government Hos', 'Government Hospital', 90, 74, '8145404375', '', ' Ashokenagar (Near Kachua More), North 24 Parganas, West Bengal, PIN - 743222 , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(159, 'H154', 'Baranagar State General Hospital (Government Hospi', 'Government Hospital', 70, 67, '7605057322', '', 'Baranagar, North 24 Parganas , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(160, 'H155', 'Barasat District Hospital (Government Hospital)', 'Government Hospital', 132, 122, '7605057313', '', ' Jessore Road, Banamalipur, Barasat, North 24 Parganas , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(161, 'H156', ' Basirhat District Hospital (Government Hospital)', 'Government Hospital', 100, 92, '9832753064', '', 'Badartala Basirhat North 24 Parganas Pin-743411 , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(162, 'H157', 'Care and Cure hospital Pvt. Ltd. (Govt. Requisitio', 'Govt. Requisitioned Pvt. Hospital', 0, 0, '  033-254267', '', '68, Surendra Nath Colony, Nabapally, Barasat, North 24 Parganas , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(163, 'H158', 'GNRC MEDICAL A unit of GNRC Community Hospitals Lt', 'Govt. Requisitioned Pvt. Hospital', 32, 17, '033-25847005', '', 'Taki Road, Kadambagachi, Barasat, North 24 Parganas, Kolkata - 700125 , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(164, 'H159', 'Binayak Multispeciality Hospital (Private Hospital', 'Private Hospital', 28, 27, '03366016601,', '', '59 Kalicharan Ghosh Road, Kolkata 700050 , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(165, 'H160', ' Parkview Super Speciality Hospital A Unit of Anku', 'Private Hospital', 34, 33, ' 9831209796', '', 'HB36-A/4-36/A/5/1, Sector III, Salt Lake, Kolkata 700106 , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(166, 'H161', 'Spandan Hospital (Private Hospital (Self Run))', 'Private Hospital', 22, 16, '03340045511', '', 'BMC-17/1, VIP Road, Teghoria, Kolkata 700059 , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(167, 'H162', 'Sree Balaram Seba Mandir SGH (Satellite Hospital)', 'Private Hospital', 100, 94, '7605036785', '', '32 MS Mukherjee Road, Khardah, North 24 Parganas, PIN - 700116 , UTTAR 24 PARGANA', 'Uttar 24 Pargana', ''),
(168, 'H163', 'ISLAMPUR URDU ACADEMY (Government Hospital)', 'Government Hospital', 150, 149, '8370963488', '', 'ISLAMPUR, UTTAR DINAJPUR , UTTAR DINAJPUR', 'Uttar Dinajpur', ''),
(169, 'H164', ' RAIGANJ GOVERNMENT MEDICAL COLLEGE AND HOSPITAL (', 'Government Hospital', 194, 190, '7479000192', '', 'RAIGANJ, UTTAR DINAJPUR , UTTAR DINAJPUR', 'Uttar Dinajpur', ''),
(170, 'H165', 'MIKKYMEGHA HOSPITAL PVT. LIMITED (Govt. Requisitio', 'Govt. Requisitioned Pvt. Hospital', 0, 0, '7063590299, ', '', 'CHHOTPARUA, KARNOJORA, RAIGANJ, UTTAR DINAJPUR , UTTAR DINAJPUR', 'Uttar Dinajpur', ''),
(171, 'H166', 'JEEVAN REKHA HOSPITAL (Private Hospital (Self Run)', 'Private Hospital', 0, 0, '  8373066644', '', 'SATSANGHA ROAD, UKIL PARA , RAIGANJ, UTTAR DINAJPUR, 733134 , UTTAR DINAJPUR', 'Uttar Dinajpur', '');

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
(8, 'lipi@gmail.com', 'Lipi', '324, akashbani kolkata-700034', 'Kolkata', '3672838390', 'd1.jpg', 'Help needed.', 'food, financially');

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
(6, 'lipi@gmail.com', 'Help india', '342, akashbani kolkata-700045', 'Kalimpong', '6464894355', 'a5.jpg', 'food, books');

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
(5, 'lipi@gmail.com', 'Lipi', '324, akashbani kolkata-700034', 'Kolkata', '3672838390', 'a7.jpg', 'food, medicine');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(10) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `notice`, `phno`, `date`) VALUES
(1, 'Oxygen required', '6289340429', '2021-07-11'),
(2, 'Vaccine is not available.', '8250130190', '2021-07-11');

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
(3, 'Lipi', 'Individual person', 'Kolkata', 'Hooghly', 'lipi@gmail.com', '5378291072', 'c7.jpg');

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
(5, 'Shilpi Sarkar', '180/2/30, M.G.road Shantinagar,K.P.mission', 'sarkarshilpi789@gmail.com', '07003774436', 'hiiiii', ''),
(6, 'rina', '423, Station Road Kharagpur-800056', 'rina@gmail.com', '4578934793', 'Do not access information', ''),
(11, 'Madhu', '423, Station Road Kharagpur-800056', 'madhu@gmail.com', '667473947', 'gdyiuedewhc', 'a5.jpg');

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
(4, 'tina@gmail.com', 'Tina', '365,ygevdhd', '5378291072', '2021-06-30', 'Female', 'AB+', 'Howrah', 'pic2.jpg'),
(5, 'tom@gmail.com', 'Tom', '365,ygevdhd', '7686897843', '2021-07-31', 'Male', 'O+', 'Kolkata', ''),
(6, 'lipi@gmail.com', 'Lipi', '299, DJ Block(Newtown), West Bengal 700156', '6245678077', '2021-06-19', 'Female', 'O+', 'Kolkata', 'deer.jpg'),
(7, 'rishi@gmail.com', 'Rishikesh', '464, alipurduar-38394', '6245678077', '2021-05-08', 'Male', 'O+', 'North 24 Parganas', ''),
(8, 'bob@gmail.com', 'Bob', '464, alipurduar-38394', '6289340429', '2021-07-16', 'Male', 'A+', 'Alipurduar', 'a8.jpg');

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
(13, 'Tom', 'tom@gmail.com', 'dG9t', 'tom'),
(14, 'Rishikesh', 'rishi@gmail.com', 'cmlzaGk=', 'rishi');

-- --------------------------------------------------------

--
-- Table structure for table `reset_pass`
--

CREATE TABLE `reset_pass` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `otp` varchar(23) NOT NULL,
  `is_expired` int(10) NOT NULL,
  `create_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'S0001', 'Asutosh BED College, Alipurduar II', 60, 46, '9735098064', 'aabedcollege@gmail.com', 'Alipurduar II Development Block', 'Alipurduar'),
(5, 'S0002', 'Birpara College (Safe Home)', 0, 0, '9832485882', '', 'Birpara-IGP , ALIPURDUAR', 'Alipurduar'),
(6, 'S0003', 'KARMATIRTHA,Kumargram (Safe Home)', 40, 22, '7407497697', '', 'BAROBISHA, KUMARGRAM, ALIPURDUAR', 'Alipurduar'),
(7, 'S0004', 'PATHER SATHI HOTEL, MADARIHAT (Safe Home)', 40, 35, '9002211270', '', 'BIRPARA, MADARIHAT, ALIPURDUAR', 'Alipurduar'),
(8, 'S0005', 'PTTI SILTORSHA, ALIPURDUAR-I (Safe Home)', 80, 79, '7908448326', '', 'VILL-SILBARIHAT, PO- SONAPUR, BLOCK-ALIPURDUAR-I , ALIPURDUAR', 'Alipurduar'),
(9, 'S0006', ' SUN CITY Safe home, FALAKATA (Safe Home)', 60, 50, '9832652808', '', 'VILL-KUNJANAGAR, PO-MAIRADANGA, PS-FALAKATA, BLOCK-FALAKATA , ALIPURDUAR', 'Alipurduar'),
(10, 'S0007', 'ADSR New Building (Safe Home)', 40, 40, '9434754996', '', 'Haripur, Indas, bankura , BANKURA', 'Bankura'),
(11, 'S0008', 'Ailakundi PTTI (Safe Home)', 30, 29, '9434440300', '', 'Behind Bankura SBSTC Bus Stand , BANKURA', 'Bankura'),
(12, 'S0009', 'Bankura Stadium Safe Home (Safe Home)', 23, 17, '8695626433', '', ' Bankura Stadium, Tamlibandh, Bankura 722101 , BANKURA', 'Bankura'),
(14, 'S0010', 'Ambua Govt. Model School Murarai (Safe Home)', 100, 100, '8436548938', '', 'Ambua,Murarai,Pin-731222 , BIRBHUM', 'Birbhum'),
(15, 'S0011', ' CMOH OFFICE SAFE HOME (Safe Home)', 30, 30, '7363092304', '', 'Old outdoor Campus,Suri, West Bengal 731101 , BIRBHUM', 'Birbhum'),
(16, 'S0012', 'GITABITAN BLOCK B Shibpur bolpur (Safe Home)', 0, 0, '9434431608', '', 'Shibpur Bolpur , BIRBHUM', 'Birbhum'),
(17, 'S0013', 'Babu Jagjivanram Kendriya Chatri Niwas (Safe Home)', 56, 56, '9933639827', '', 'MATHABHANGA , COOCHBEHAR', 'Coochbehar'),
(18, 'S0014', ' BATRIGACH COMMUNITY HALL (Safe Home)', 60, 60, '9933672818', '', 'BATRIGACH COMMUNITY HALL SAFE HOME , COOCHBEHAR', 'Coochbehar'),
(19, 'S0015', 'COOCHBEHAR POLYTECHNIC COLLEGE (Safe Home)', 130, 92, '9834144980', '', 'COOCHBEHAR , COOCHBEHAR', 'Coochbehar'),
(20, 'S0016', 'Haldibari Hospital New Building (Safe Home)', 20, 20, ' 8900344094', '', 'HALDIBARI , COOCHBEHAR', 'Coochbehar'),
(21, 'S0017', 'KARMATIRTHA SITAI SAFE HOME (Safe Home)', 35, 35, '9735413071', '', 'SITAI , COOCHBEHAR', 'Coochbehar'),
(22, 'S0018', 'AMTALA TRAUMA CARE SAFE HOME (Safe Home)', 43, 34, '9903714512', '', 'Bishnupur II Block , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana'),
(23, 'S0019', 'BHOGALI KARMATIRTHA (Safe Home)', 50, 50, '9832144299', '', 'Bhogali-I GP, Bhangore-II Block , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana'),
(24, 'S0020', ' DIAMOND HARBOUR SAFE HOME (Safe Home)', 100, 100, '3174256475', '', 'SDO GROUND, DIAMOND HARBOUR , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana'),
(25, 'S0021', 'JHOROR MORE SAFE HOME (Safe Home)', 50, 46, '9903714504', '', 'CANNING II Block , DAKSHIN 24 PARGANA', 'Dakshin 24 Pargana'),
(26, 'S0022', 'BALURGHAT YOUTH HOSTEL (Safe Home)', 80, 76, ' 9339676475', '', 'MANGALPUR, BALURGHAT , DAKSHIN DINAJPUR', 'Dakshin Dinajpur'),
(27, 'S0023', ' BUNIADPUR ITI (Safe Home)', 50, 50, '  9733327309', '', 'BUNIADPUR , DAKSHIN DINAJPUR', 'Dakshin Dinajpur'),
(28, 'S0024', ' GANGARAMPUR STADIUM (Safe Home)', 25, 25, ' 7718713126', '', 'GANGARAMPUR , DAKSHIN DINAJPUR', 'Dakshin Dinajpur'),
(29, 'S0025', 'Harirampur KGBV Hostel ASDM High School (Safe Home)', 30, 30, '8900595989', '', 'Harirampur , DAKSHIN DINAJPUR', 'Dakshin Dinajpur'),
(30, 'S0026', 'Kumarganj Kishan Mandi (Safe Home)', 60, 60, '03522254205', '', '  Kumarganj , DAKSHIN DINAJPUR', 'Dakshin Dinajpur'),
(31, 'S0027', 'AMIT AGARWAL FOUNDATION SAFE HOME (Safe Home)', 26, 18, '9434006923', '', 'Susrutanagar ,Siliguri,Opp--NBMCH , DARJEELING', 'Darjeeling'),
(32, 'S0028', 'BATASI ITI COVID CARE FACILITY (Safe Home)', 55, 54, '8370842357', '', 'Batasi ITI , Khoribari Block , DARJEELING', 'Darjeeling'),
(33, 'S0029', 'COVID CARE CENTRE (Safe Home)', 20, 9, ' 0353-2561959', '', 'TINBATTI MORE , SILGURI , PIN 734005 , DARJEELING', 'Darjeeling'),
(34, 'S0030', 'HATIGHISA SAFE HOME (Safe Home)', 50, 50, ' 8101488095', '', 'HATIGHISA SAFE HOME (Safe Home)', 'Darjeeling'),
(35, 'S0031', 'Chandannagar Oxygen Parlour (Safe Home)', 10, 10, '9123736539', '', 'Swagatam Hall Kuthir Math, Chandannagar, Hooghly , HOOGHLY', 'Hooghly'),
(36, 'S0032', ' Golok Munshi Hospital (Safe Home)', 34, 34, '7605059328', '', 'Nabagram, Konnagar, West Bengal 712249 , HOOGHLY', 'Hooghly'),
(37, 'S0033', 'Pandua Karmatirtha (Safe Home)', 42, 42, '7605059328', '', 'Pandua, Hooghly , HOOGHLY', 'Hooghly'),
(38, 'S0034', 'Rishra Seva Sadan (Safe Home)', 36, 36, '7605059328', '', '  1, Keshub Chandra Sen Rd, Rishra, Hooghly, West Bengal 712250 , HOOGHLY', 'Hooghly'),
(39, 'S0035', 'Akshaynagar Pallyshree Sangha Mini Indoor Stadium Safe Home (Safe Home)', 0, 0, '8100064498', '', 'Akshaynagar, GP-Durgapur Abhoynagar II, Block- Bally Jagacha , HOWRAH', 'Howrah'),
(40, 'S0036', 'Baltikuri Safe Home (Safe Home)', 100, 100, '8240235865', '', 'Baltikuri, P.O, Bankra, Howrah, West Bengal 711403 , HOWRAH', 'Howrah'),
(41, 'S0037', 'Safe Home Dhupguri Girls College (Safe Home)', 200, 164, '9007834958', '', 'College Para, P.O: Dhupguri, Jalpaiguri-735210 , JALPAIGURI', 'Jalpaiguri'),
(42, 'S0038', 'Safe Home, DTC Raninagar, Jalpaiguri (Safe Home)', 51, 51, '8170017419', '', 'RANINAGAR, SADAR BLOCK, JALPAIGURI 735133 , JALPAIGURI', 'Jalpaiguri'),
(43, 'S0039', 'Safe Home, ITI College, Matiali (Safe Home)', 124, 102, '9083354528', '', 'MATIALI , JALPAIGURI', 'Jalpaiguri'),
(44, 'S0040', 'Safe Home, Karmatirtha Building, Ambari Falakata (Safe Home)', 50, 36, '8116040922', '', 'Mogradangi, Rajganj-735135 , JALPAIGURI', 'Jalpaiguri'),
(45, 'S0041', 'Bargi Danga Flood shelter (Safe Home)', 29, 29, '03221 258258', '', 'Gopiballavpur I, Jhargram , JHARGRAM', 'Jhargram'),
(46, 'S0042', 'Binpur I, Kisan Mandi (Safe Home)', 20, 20, '03221 258258', '', 'Binpur I, Jhargram , JHARGRAM', 'Jhargram'),
(47, 'S0043', 'District Minority Building (Safe Home)', 40, 40, '03221 258258', '', 'Jhargram Municipality, Jhargram , JHARGRAM', 'Jhargram'),
(48, 'S0044', 'Gangabandh Karmathirtha (Safe Home)', 20, 20, '03221 258258', '', 'Gopiballavpur II, Jhargram , JHARGRAM', 'Jhargram'),
(49, 'S0045', 'ARD Farmers Training Centre Pedong (Safe Home)', 30, 28, '9832748207', '', 'Pedong, Kalimpong II Block , KALIMPONG', 'Kalimpong'),
(50, 'S0046', 'ITI GORUBATHAN (Safe Home)', 50, 35, '9832748207', '', 'UPPER FAGU, GORUBATHAN , KALIMPONG', 'Kalimpong'),
(51, 'S0047', 'KALIMPONG GOVT. POLYTECHNIC COLLEGE (Safe Home)', 40, 28, '9932606343', '', 'GAURIPUR HOUSE KALIMPONG , KALIMPONG', 'Kalimpong'),
(52, 'S0048', 'GUN AND SHELL FACTORY HOSPITAL (Safe Home)', 14, 14, '033-25469433', '', 'GUN AND SHELL FACTORY, COSSIPORE ROAD, KOLKATA - 2 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area'),
(53, 'S0049', ' MAHAMAYA COVID SAFE HOME (Safe Home)', 8, 4, '9123085310', '', '54/1, SARKARHAT LANE, KOLKATA-700061 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area'),
(54, 'S0050', ' PRATIBANDHI VILLAGE, COVID INTERIM RELIEF CENTRE (Safe Home)', 29, 25, '8240396468', '', '147, MUKUNDAPUR, KRISHAKPALLY, KOLKATA, WB. , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area'),
(55, 'S0051', ' PROTIDIN (Safe Home)', 0, 0, '9831045031', '', '30 MATHESHSWAR TALA ROAD, TANGRA, KOLKATA-700046 , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area'),
(56, 'S0052', 'UTTIRNO OPEN AIR THEATRE (Safe Home)', 500, 495, '9831045031', '', '1A, REFORMATORY STREET , KOLKATA-700027 , 22 D L KHAN ROAD , KOLKATA METROPOLITAN AREA', 'Kolkata Metropolitan Area'),
(57, 'S0053', 'Bachamari G K Higher Secondary School (Safe Home)', 11, 11, '7047926502', '', 'Mangalbari,Malda-732142 , MALDA', 'Malda'),
(58, 'S0054', 'Model Madrasa English Medium Malda (Safe Home)', 70, 70, '9748127162', '', 'Chandan Park, PO Bagbari, PS English Bazar, Malda , MALDA', 'Malda'),
(59, 'S0055', 'Amaipara Utbastu Vidyapith Safe Home, MJ Block (Safe Home)', 10, 10, '9051548398', '', 'Vill + P.O.- Amaipara, Dist.- Murshidabad , MURSHIDABAD', 'Murshidabad'),
(60, 'S0056', 'Bangabri Girls Hostel Safe Home (Safe Home)', 15, 15, '8001454563', '', 'Vill-Bangabari,PO:-Alampur, Dist.:-Murshidabad, Pin-742223 , MURSHIDABAD', 'Murshidabad'),
(61, 'S0057', 'Barua Karmatirthya Safe Home (Safe Home)', 10, 10, ' 9007568812', '', 'Barua, Beldanga, Murshidabad, 742189 , MURSHIDABAD', 'Murshidabad'),
(62, 'S0058', 'Bhabta Aziziya High Madrasah Safe Home (Safe Home)', 10, 10, '9007568812', '', 'Bhabta, Beldanga, Murshidabad, 742134 , MURSHIDABAD', 'Murshidabad'),
(63, 'S0059', 'BAHADURPUR SAFE HOME (Safe Home)', 90, 90, '7605057766', '', '  VILL.- BAHADURPUR, P.S.- DHUBULIA, NADIA, PIN.- 741125 , NADIA', 'Nadia'),
(64, 'S0060', 'Bethuadahari Rural Hospital (Safe Home)', 30, 29, '7548975253', '', ' Bethuadahari, P.O.+P.S.- Nakashipara, Nadia, Pin.- 741126 , NADIA', 'Nadia'),
(65, 'S0061', 'Habibpur Karmatirtha Safe Home (Safe Home)', 30, 29, '7477868775', '', 'Balagarh Road, Habibpur, Ranaghat-I, Nadia, Pin.- 741402 , NADIA', 'Nadia'),
(66, 'S0062', 'HARINGHATA ITI COLLEGE (Safe Home)', 40, 40, '8697604632', '', 'VILL.- GHORAGACHA, P.O.- SIMHAT, NEAR KALYANI MORE, P.S.- HARINGHATA, PIN.- 741249 , NADIA', 'Nadia'),
(67, 'S0063', 'BOKARO SAFE HOUSE (Safe Home)', 50, 50, '8597042976', '', 'Hostel Avenue, Bencachity, Durgapur , PASCHIM BARDHAMAN', 'Paschim Bardhaman'),
(68, 'S0064', ' ESI SAFE HOUSE ASANSOL (Safe Home)', 50, 50, '8597042976', '', 'ESI Nursing Training School, Kalyanpur, Asansol , PASCHIM BARDHAMAN', 'Paschim Bardhaman'),
(69, 'S0065', 'Loreto Convent School,Asansol (Safe Home)', 40, 2, '03412253650', '', '  GT Road, Chelidanga area, ward no.49, Asansol , PASCHIM BARDHAMAN', 'Paschim Bardhaman'),
(70, 'S0066', ' Rupnarayanpur ITI college (Safe Home)', 32, 32, '7797510993', '', '  Rupnarayanpur, Salanpur , PASCHIM BARDHAMAN', 'Paschim Bardhaman'),
(71, 'S0067', 'Dasagram. PHC (Safe Home)', 20, 10, '7908783170', '', 'Dasagram, Sabang , PASCHIM MEDINIPUR', 'Paschim Medinipur'),
(72, 'S0068', 'Dhobaberia Kishan Mandi. (Safe Home)', 0, 0, '9609270819', '', 'Dhobaberia, Garhbet-I , PASCHIM MEDINIPUR', 'Paschim Medinipur'),
(73, 'S0069', 'Hasimpur Rescue Centre. (Safe Home)', 0, 0, '9681167731', '', 'Hasimpur, Sonakonia, Dantan , PASCHIM MEDINIPUR', 'Paschim Medinipur'),
(74, 'S0070', 'CHETANA SAFE HOME UNDER ABSK (Safe Home)', 30, 30, '8101472241', '', ', P.O- FAGUPUR, PIN- 713102 (BESIDE SAI COMPLEX), PURBA BARDHAMAN , PURBA BARDHAMAN', 'Purba Bardhaman'),
(75, 'S0071', 'COVID FIELD HOSPITAL SAFE HOME (Safe Home)', 20, 17, '  9883832512/9564386622', '', 'LAKURDI, JALKAL MATH, PRANTIK MARRIAGE HALL, PURBA BARDHAMAN, PIN-713102 , PURBA BARDHAMAN', 'Purba Bardhaman'),
(76, 'S0072', 'Flood Shelter Katwa (Safe Home)', 0, 0, '9088962786', '', 'Ekaihat, Panuhat, Katwa, Purba Bardhaman , PURBA BARDHHAMAN', 'Purba Bardhaman'),
(77, 'S0073', ' FLOOD SHELTER, KATWA MUNICIPALITY (Safe Home)', 48, 48, '9647240010', '', 'KASHIGANJ PARA, WARD NO-17, KATWA MUNICIPALITY , PURBA BARDHHAMAN', 'Purba Bardhaman'),
(78, 'S0074', 'Digha Youth Hostel Safe Home (Safe Home)', 70, 67, '9564337879', '', 'NEW DIGHA YOUTH HOSTEL BUILDING , PURBA MEDINIPUR', 'Purba Medinipur'),
(79, 'S0075', 'HALDIA SAFE HOME (Safe Home)', 100, 98, '7364045140', '', 'SATISH SAMANTA TRADE CENTRE, HALDIA, PURBA MEDINIPUR , PURBA MEDINIPUR', 'Purba Medinipur'),
(80, 'S0076', 'NANDAKUMAR SAFE HOME (Safe Home)', 100, 100, '7364045140', '', 'NANDAKUMAR OLD COLLEGE BUILDING, NANDAKUMAR, PURBA MEDINIPUR. , PURBA MEDINIPUR', 'Purba Medinipur'),
(81, 'S0077', 'Nandigram Sitananda College (Safe Home)', 20, 20, '9733924123', '', '  Block-Nandigram-I, PS-Nandigram , PURBA MEDINIPUR', 'Purba Medinipur'),
(82, 'S0078', ' KALLOLI BPHC SAFE HOME (Safe Home)', 30, 30, '9635778829', '', 'KALLOLI RURAL HOSPITAL, KASHIPUR , PURULIA', 'Purulia'),
(83, 'S0079', ' MOTHER TERESA SAFE HOME (Safe Home)', 50, 50, '9635778829', '', 'GOSHALA MORE, PURULIA , PURULIA', 'Purulia'),
(84, 'S0080', 'RAGHUNATHPUR SDH OLD BUILDING SAFE HOME (Safe Home)', 40, 40, '8597376921', '', 'RAGHUNATHPUR SDH, RAGHUNATHPUR- I , PURULIA', 'Purulia'),
(85, 'S0081', 'Adamas World School (Safe Home)', 0, 0, '9831471458', '', '  Adamas Knowledge City, Jagannathpur, Barasat , UTTAR 24 PARGANA', 'Uttar 24 Pargana'),
(86, 'S0082', 'Amdanga Jugalkishor Mahavidlaya (Safe Home)', 40, 40, '7001363959', '', '  Amdanga , UTTAR 24 PARGANA', 'Uttar 24 Pargana'),
(87, 'S0083', 'Banipur Welfare Home (Safe Home)', 50, 41, '9434401039', '', 'Habra Banipur , UTTAR 24 PARGANA', 'Uttar 24 Pargana'),
(88, 'S0084', ' Bankimjali stadium Naihati (Safe Home)', 273, 249, '  9748395256', '', 'Naihati, West Bengal 743165 , UTTAR 24 PARGANA', 'Uttar 24 Pargana'),
(89, 'S0085', 'Central Training Institute (Safe Home)', 130, 130, '9433400657,7063590299, 7063590298', '', 'GOTHLU ITAHAR, UTTAR DINAJPUR , UTTAR DINAJPUR', 'Uttar Dinajpur'),
(90, 'S0086', 'Churamon PC High school (Safe Home)', 0, 0, '7872884365', '', 'Churaman, Kapasia , UTTAR DINAJPUR', 'Uttar Dinajpur'),
(91, 'S0087', 'Karandighi Girls High School (Safe Home)', 0, 0, ' 8617577499', '', 'Karandighi-II , UTTAR DINAJPUR', 'Uttar Dinajpur'),
(92, 'S0088', ' Fatepur CD High school (Safe Home)', 0, 0, '8348225297,9775333548', '', 'Bochadanga , UTTAR DINAJPUR', 'Uttar Dinajpur'),
(93, 'S0089', ' ISLAMPUR GIRLS HOSTEL (Safe Home)', 0, 0, '9873648214', '', 'ISLAMPUR GP ISLAMPUR , UTTAR DINAJPUR', 'Uttar Dinajpur'),
(94, 'S0090', 'Barrackpore Stadium (Safe Home)', 25, 23, '8017242936', '', 'Wireless Crossing Barrackpore , UTTAR 24 PARGANA', 'Uttar 24 Pargana');

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
(1, 'Tina', 'tina@gmail.com', '30', 'Student', 'Kolkata', 'Kolkata', 'Worst', 'My COVID Days', ''),
(2, 'Lipi', 'lipi@gmail.com', '50', 'Employee', 'Kolkata', 'Kolkata', 'Worst', 'Hii', 'photo.jpg');

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
(1, 'Tina', 'tina@gmail.com', '30', 'Doctor', 'Kolkata', 'Kolkata', 'Very Bad..', 'My Experience', '12thCertificate.jpg', 'VID-20200527-WA0001.mp4'),
(3, 'Lipi', 'lipi@gmail.com', '20', 'Nurse', 'Mumbai', 'Kolkata', 'Bad', 'Experience', 'b2.jpg', 'g2.jpg');

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
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
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
-- Indexes for table `reset_pass`
--
ALTER TABLE `reset_pass`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `childcareprovider_db`
--
ALTER TABLE `childcareprovider_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_category`
--
ALTER TABLE `doctor_category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_db`
--
ALTER TABLE `doctor_db`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donor_db`
--
ALTER TABLE `donor_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback_db`
--
ALTER TABLE `feedback_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_db`
--
ALTER TABLE `hospital_db`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `mealprovider_db`
--
ALTER TABLE `mealprovider_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo_help_db`
--
ALTER TABLE `ngo_help_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ngo_registration`
--
ALTER TABLE `ngo_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ngo_registration_individual`
--
ALTER TABLE `ngo_registration_individual`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oxygen_db`
--
ALTER TABLE `oxygen_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `query_db`
--
ALTER TABLE `query_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `receiver_db`
--
ALTER TABLE `receiver_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register_db`
--
ALTER TABLE `register_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reset_pass`
--
ALTER TABLE `reset_pass`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `safehome_db`
--
ALTER TABLE `safehome_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `survivor_db`
--
ALTER TABLE `survivor_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteer_db`
--
ALTER TABLE `volunteer_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `warrior_db`
--
ALTER TABLE `warrior_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
