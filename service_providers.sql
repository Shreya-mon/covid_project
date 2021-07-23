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
(7, 8, 'The Calcutta Orphanage', '7947435862', '', 'opening : 10a.m to 8p.m, Monday - Sunday', 'Kolkata', '12/1, Balaram ghosh Street, Shyambazar kolkata -700004'),
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
(105, 9, 'Kalimpong Dist. Hospital Blood Centre', '9614847359', '', '', 'Kalimpong', ''),
(107, 2, 'FOCUS Forum of Communities United in Service', '033 2283 5603', 'focus_kolkata@hotmail.com', 'Children,Education & Literacy,Health & Family Welfare,Labour & Employment,Micro Finance (SHGs),Minority Issues,Nutrition,Urban Development & Poverty Alleviation,Vocational Training', 'kolkata', 'FOCUS 6 Tiljala Road Kolkata-700046'),
(108, 2, 'Sahara Health and Education Society', '9836612779', 'oursahara1993@gmail.com', 'Aged/Elderly,Children,Education & Literacy,Sports,Urban Development & Poverty Alleviation,Vocational Training,Youth Affairs,Any Other', 'kolkata', 'F4/42, Defence Park, Moynagarh, Kolkata - 700141'),
(112, 7, 'Shailja Sutodiya', '9830066639', '', 'Meal: Lunch and dinner', 'Kolkata', ''),
(113, 7, 'FoodRack by Ambrish', '9831015585', '', 'Meal: Breakfast, lunch and dinner, Price: Rs. 250', 'Kolkata', ''),
(114, 7, 'Spoonfuel', '9007760418', '', 'Meal: Lunch and dinner, Price: Rs. 150 for a thali', 'Kolkata', ''),
(115, 7, 'The Tasty Tray', '9163782542', '', 'Meal: Breakfast, lunch and dinner, Price: Rs. 175', 'Kolkata', ''),
(116, 8, 'Care Generation', '9051503375', '', 'Opening : 8a.m to 9p.m, Monday - Saturday', 'Kolkata', 'Ba-43, Near PNB, Kolkata, West Bengal-700064'),
(117, 8, 'Day Care Centre', '9836289033', '', 'Opening : 8a.m to 9p.m, Monday - Saturday', 'Kolkata', '5/30 A, Netaji Nagar, Kolkata, West Bengal 700040'),
(118, 8, 'St. Jude India Child Care Centres', '3365400896', '', 'opening : 10a.m to 8p.m, Monday - Sunday', 'Kolkata', '13/295, DD Block(Newtown), Action Area I, Newtown, Kolkata 700156'),
(119, 6, 'Aniruddha Dhar', '9830660424', '', 'KMC 60/61/64', 'Kolkata', 'Ballygunge, Kolkata'),
(120, 6, 'Tanmoy', '9830601880', '', 'KMC 33/34', 'Kolkata', 'Phoolbagan, Beleghata'),
(121, 6, 'Piyali', '8902365985', '', 'KMC 28/29', 'Kolkata', 'Kankurgachi'),
(122, 6, 'Pallab', '7003119534', '', 'KMC 1/5/6', 'Kolkata', 'Belgachhia-Kashipur, Tala, Chitpur'),
(123, 6, 'Triparna', '8001850974', '', 'KMC 73', 'Kolkata', 'Bhowanipur'),
(124, 6, 'Debraj', '8910363387', '', 'KMC 48/49/50/51', 'Kolkata', 'Chowrangee'),
(125, 2, 'SALT LAKE DIRECTED INITIATIVE ', '9836137339', 'directedinitiative@yahoo.com', 'Agriculture, Children, Civic Issues, Drinking Water, Education & Literacy, Environment & Forests, Health & Family Welfare, ', 'Kolkata', 'GD-301, Sector-III, Salt Lake City, Kolkata Pin- 700 106'),
(126, 2, 'RAMAKRISHNA MISSION VIVEKANANDA CENTENARY COLLEGE', '9432516982', 'rkmvccollege@rkmvccrahara.org', 'Higher Education,Science and Technology, Service to orphan and destitute students, Value education for the youth,Culture', 'Kolkata', 'Ramakrishna Mission Vivekananda Centenary College, Rahara, Kolkata-700118'),
(127, 2, 'ART ILLUMINATES MANKIND', '9874148945', 'ngoaim@yahoo.co.in', 'Key Issues of Art & Culture', 'Kolkata', '234 Acharya Prafulla Chandra Road, Kolkata-700004');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD CONSTRAINT `service_providers_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
