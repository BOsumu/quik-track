-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2024 at 12:51 PM
-- Server version: 5.7.40-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quicktrack_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(256) NOT NULL,
  `company_description` text NOT NULL,
  `company_address` text NOT NULL,
  `company_createby` int(11) NOT NULL,
  `company_createdate` varchar(50) NOT NULL,
  `company_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_description`, `company_address`, `company_createby`, `company_createdate`, `company_status`) VALUES
(1, 'Kelsey Central Park (pvt)Ltd.', 'Kelsey Central Park', '24/2, Courts Road, Weligampitiya, Ja-ela', 1, '2023/08/24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `C_Title` varchar(50) NOT NULL,
  `C_fullname` varchar(256) NOT NULL,
  `C_namewinitials` varchar(256) NOT NULL,
  `C_Occupation` varchar(256) NOT NULL,
  `C_NIC` varchar(256) NOT NULL,
  `C_Passport` varchar(256) NOT NULL,
  `C_berth` varchar(50) NOT NULL,
  `C_Gender` varchar(50) NOT NULL,
  `C_Address` text NOT NULL,
  `C_AddressP` text NOT NULL,
  `C_Country` varchar(256) NOT NULL,
  `C_Phone` varchar(50) NOT NULL,
  `C_LandNo` varchar(50) NOT NULL,
  `C_Email` varchar(256) NOT NULL,
  `C_CompanyName` varchar(256) NOT NULL,
  `C_AddressCS` text NOT NULL,
  `C_Cratedby` int(11) NOT NULL,
  `C_CratedDate` varchar(50) NOT NULL,
  `C_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `C_Title`, `C_fullname`, `C_namewinitials`, `C_Occupation`, `C_NIC`, `C_Passport`, `C_berth`, `C_Gender`, `C_Address`, `C_AddressP`, `C_Country`, `C_Phone`, `C_LandNo`, `C_Email`, `C_CompanyName`, `C_AddressCS`, `C_Cratedby`, `C_CratedDate`, `C_status`) VALUES
(1, 'Mr.', 'N D Aththanayake', 'N.D. Aththanayake', 'N/A', '851800751V', '', '1985-06-28', 'M', 'No.18/43,E D Dabare Road,Colombo 05', '', 'Sri Lanka', '0712796780', '', 'nirosh28@hotmail.com', 'N/A', '', 7, '2023/12/16', 0),
(2, 'Ms.', 'Rochelle Claudette Felsinger', 'R.C. Felsinger', 'N/A', '788392559V', '', '1978-12-04', 'F', 'No.16, Lanka Matha Mawatha,Mahabage', '', 'Sri Lanka', '0112955488', '', 'demetrious_perera@toyota.lk', 'N/A', '', 7, '2023/12/18', 0),
(3, 'Mr.', 'Indika Demetrious Perera', 'I.D. Perera', 'N/A', '760122599V', '', '1976-01-12', 'M', 'No.16, Lanka Matha Mawatha,Mahabage', '', 'Sri Lanka', '0777939058', '', 'demetrious_perera@toyota.lk', 'N/A', '', 7, '2023/12/18', 0),
(4, 'Mr.', 'Mohamed Sharfaz Abdeen', 'M.S. Abdeen', 'N/A', '750521657V', '', '1975-02-21', 'M', 'No.36,Kalyani Lane,Wattala', '', 'Sri Lanka', '0777530305', '', 'sharfaz@expack.lk', 'N/A', '', 7, '2023/12/18', 0),
(5, 'Mr.', 'Tuan Reza Dole', 'T.R. Dole', 'N/A', '196210400065', '', '1962-04-12', 'M', 'No.07, Hijra Mawatha,Modara, Moratuwa', '', 'Sri Lanka', '0716510401', '', 'maadole@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(6, 'Mr.', 'Singappuli Arachchige Don Shantha Kumara', 'S.A.D.S. Kumara', 'N/A', '682030992V', '', '1968-07-21', 'M', 'No.588, Bauddhaloka Mw.,Colombo 08', '', 'Sri Lanka', '0771979994', '', 'sadskpk588@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(7, 'Mr.', 'P A S S Perera', 'P.A.S.S. Perera', 'N/A', '761120751V', '', '1976-04-21', 'M', 'N/A', '', 'Sri Lanka', '0777704674', '', 'Shanaka.Perera@hnb.lk', 'N/A', '', 7, '2023/12/18', 0),
(8, 'Ms.', 'Kodithuwakku Kaluarachchige Renuka Swarnakanthi', 'K.K.R. Swarnakanthi', 'N/A', '635871288V', '', '2000-01-01', 'F', 'No.108,Maho Road,Nikaweratiya', '', 'Sri Lanka', '972583995112', '', 'renukaswarnakanthi@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(9, 'Mr.', 'John Sebastian Carvalho', 'J.S. Carvalho', 'N/A', '194800900632', '', '1948-01-09', 'M', 'No.19/155,Farm Road, Colombo 15', '', 'Sri Lanka', '0779158331', '', 'Jsjscavalho@hotmail.com', 'N/A', '', 7, '2023/12/18', 0),
(10, 'Mr.', 'Jeremy Sandeep Carvalho', 'J.S. Carvalho', 'N/A', '841690435V', '', '1984-06-17', 'M', 'No.17/11,Rajasingha Mawatha,Mabola, Wattala', '', 'Sri Lanka', '0776940388', '', 'jeremysandeep@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(11, 'Ms.', 'Maharsha Prasadeni Jayatilake Edirisinghe', 'M.P.J. Edirisinghe', 'N/A', '705820376V', '', '1970-03-22', 'F', 'No.31/6,Pamunuwila Road, Makola South, Makola', '', 'Sri Lanka', '0703520577', '', 'maharshae70@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(12, 'Ms.', 'Selvarani Kaneendran', 'S.. Kaneendran', 'N/A', '715443520V', '', '1971-02-13', 'F', '664B,Station Rd,Hunupitiya,Wattala.', '', 'Sri Lanka', '0775576621', '', 'kaneendran04@live.com', 'N/A', '', 7, '2023/12/18', 0),
(13, 'Mr.', 'Kerawgodage Don Chinthana Wasantha Jayawardena', 'K.D.C.W. Jayawardena', 'N/A', '811334170V', '', '1985-05-12', 'M', 'No.137, Thimbirigasyaya, Hendala, Wattala', '', 'Sri Lanka', '0112956592', '', 'chinthanajayawardena@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(14, 'Ms.', ' Arakahagodage Ann Ruwani Dilukshi Perera', '.A.A.R.D. Perera', 'N/A', '865721668V', '', '1986-03-12', 'F', 'No.137, Thimbirigasyaya, Hendala, Wattala\r\n', '', 'Sri Lanka', ' 0773746512', '', 'aardperera@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(15, 'Mr.', 'Konara Mudiyanselage Kusumarathna', 'K.M. Kusumarathna', 'N/A', '710632227V', '', '1971-03-03', 'M', 'No.244,Megodagama,Katugastota\r\n', '', 'Sri Lanka', '0812054323', '', 'konara244@gmail.com', 'N/A', '', 7, '2023/12/18', 0),
(16, 'Mr.', 'Indrajith Devaka Wijedoru', 'I.D. Wijedoru', 'N/A', '800595029V', '', '1980-02-28', 'M', 'No.8A1,Sripala Road,Mt. Laviniya\r\n', '', 'Sri Lanka', '0773290736', '', 'devaka.wijedoru@sc.com', '', '', 7, '2023/12/18', 0),
(17, 'Mr.', 'Mapa Mudiyanselage Asanka Rukshan Mapa ', 'M.M.A.R.M. ', 'N/A', '197215501504', '', '1972-06-03', 'M', 'No.182/B,Kurunegala Road,Nugawela\r\n', '', 'Sri Lanka', '0812491717', '', 'drasankarm@yahoo.com', '', '', 7, '2023/12/18', 0),
(18, 'Mr.', 'Niluka Thilina Amarasinghe', 'N.T. Amarasinghe', 'N/A', '721710432V', '', '1972-06-19', 'M', 'No.30,Sri Vihara Mawatha,Colombo 05\r\n', '', 'Sri Lanka', '0777840157', '', 'niluka72@hotmail.com', '', '', 7, '2023/12/18', 0),
(19, 'Mr.', 'Dedigama Arachchige Rakkitha Madhawa', 'D.A.R. Madhawa', 'N/A', '940012830V', '', '1994-01-01', 'M', 'No.128,Kurunduhena, Ragama\r\n', '', 'Sri Lanka', '0762077290', '', 'rakkitha.da@gmail.com', '', '', 7, '2023/12/18', 0),
(20, 'Ms.', 'Kumara Patabendige Dewni Yasara Perera', 'K.P.D.Y. Perera', 'N/A', '956014891V', '', '1992-04-10', 'F', 'No.128,Kurunduhena, Ragama\r\n', '', 'Sri Lanka', '0767247787', '', 'rakkitha.da@gmail.com', '', '', 7, '2023/12/18', 0),
(21, 'Mr.', 'Doraisamy Prabu', 'D.. Prabu', 'N/A', '198517601306', '', '1985-06-24', 'M', 'No.15/6, Kudaedanda Road, Wattala\r\n', '', 'Sri Lanka', '0771363242', '', 'prabu.doraisamy@gmail.com', '', '', 7, '2023/12/18', 0),
(22, 'Ms.', 'Meegama Wellapalage Champa Janakie Piyarathne', 'M.W.C.J. Piyarathne', 'N/A', '686761312V', '', '1968-06-24', 'F', 'A/86/2/1,Maththamagoda, Kannaththota\r\n', '', 'Sri Lanka', '0711242168', '', 'shamiam1975@yahoo.com', '', '', 7, '2023/12/18', 0),
(23, 'Ms.', 'Shehani Bianca Perera', 'S.B. Perera', 'N/A', '867822488V', '', '1986-10-08', 'F', 'No.43/4,Edissuriya Place,Kahowita Mawatha, Attidiya, Dehiwala\r\n', '', 'Sri Lanka', '0112714583', '', 'Rogerrozairo@gmail.com', '', '', 7, '2023/12/18', 0),
(24, 'Mr.', 'Arosha Prageeth Galappaththi Guruge', 'A.P.G. Guruge', 'N/A', '860341417V', '', '1986-03-02', 'M', 'No.19/10,St. Jude Mw, Mahabage, Ragama\r\n', '', 'Sri Lanka', '0773508584', '', 'arosha86@gmail.com', '', '', 7, '2023/12/18', 0),
(25, 'Ms.', 'Nishika Thadhani', 'N.. Thadhani', 'N/A', ' 908281255V', '', '1990-11-23', 'F', 'No.19/10,St. Jude Mw, Mahabage, Ragama\r\n', '', 'Sri Lanka', '0773508584', '', 'arosha86@gmail.com', '', '', 7, '2023/12/18', 0),
(26, 'Mr.', 'Hallawa Ralalage Thamal Dharma Sri Karunarathna', 'H.R.T.D.S. Karunarathna', 'N/A', '195817801229', '', '1958-06-26', 'M', 'No.641/4,Wilahena Road, Gonawala\r\n', '', 'Sri Lanka', '447828977341', '', 'thamalkaru@yahoo.com', '', '', 7, '2023/12/18', 0),
(27, 'Mr.', 'Jaliya Gerard Dave Samarasingha', 'J.G.D. Samarasingha', 'N/A', '682940808V', '', '1968-10-20', 'M', 'No.7B 110, Rukmalgama, Pannipitiya ', '', 'Sri Lanka', '447365936669', '', 'davesamarasinghe@hotmail.com', '', '', 7, '2023/12/18', 0),
(28, 'Ms.', ' Teruko Juliana Tissera', '.T.J. Tissera', 'N/A', '676711490V', '', '1967-06-19', 'F', 'No.34B 46 ,Rukmalgama, Pannipitiya ', '', 'Sri Lanka', '447365936669', '', '', '', '', 7, '2023/12/18', 0),
(29, 'Mr.', 'Dinesh Jude Sanjeewa Barnasuriya', 'D.J.S. Barnasuriya', 'N/A', '771360437V', '', '1977-05-15', 'M', 'No.405,Nagahawela Road, Kelanimulla,Mulleriyawa , New City\r\n', '', 'Sri Lanka', '+96896145245', '', '', '', '', 7, '2023/12/18', 0),
(30, 'Mr.', 'Wedagedara Susantha Weththasinghe', 'W.S. Weththasinghe', 'N/A', '812513451V', '', '1981-09-07', 'M', '363/A,Lunugama\r\n', '', 'Sri Lanka', '0766420287', '', 'susanthaweththasinghe@gmail.com', '', '', 7, '2023/12/18', 0),
(31, 'Mr.', 'Mohamed Aadhil Asver', 'M.A. Asver', 'N/A', '860390191V', '', '1986-02-08', 'M', 'No.51/9/Z,9th Lane,Wickramasinghepura,Pelawatte\r\n', '', 'Sri Lanka', '0777294013', '', 'aadhilasver@gmail.com', '', '', 7, '2023/12/18', 0),
(32, 'Ms.', 'Sarita Davina Schaffter', 'S.D. Schaffter', 'N/A', '199860410245', '', '1998-04-13', 'F', 'No.15B,Ekanayake Avenue, Nugegoda\r\n', '', 'Sri Lanka', '0774741411', '', 'abby.s@peopleschurch.lk', '', '', 7, '2023/12/18', 0),
(33, 'Mrs.', 'Eunice Abigail Mary Anne Suwenitha Schaffter', 'E.A.M.A.S. Schaffter', 'N/A', '197381301835', '', '1973-11-08', 'F', 'No.15B,Ekanayake Avenue, Nugegoda\r\n', '', 'Sri Lanka', '0112824979', '', 'abby.s@peopleschurch.lk', '', '', 7, '2023/12/18', 0),
(34, '', '', '', '', '911841924V', '', '', '', '', '', '', '', '', '', '', '', 7, '2023/12/18', 0),
(35, 'Mr.', 'Hewadewage Lalith Priyankara', 'H.L. Priyankara', 'N/A', '690413310V', '', '1969-02-10', 'M', 'No.154/12,Parakandeniya Imbulgoda\r\n', '', 'Sri Lanka', '0775055003', '', 'lalithp2152@gmail.com', '', '', 7, '2023/12/18', 0),
(36, 'Ms.', 'Peramunu Gamage Dona Sakunthala Priyadarshanie', 'P.G.D.S. Priyadarshanie', 'N/A', '647160077V', '', '1964-08-03', 'F', 'No.75,Temple Road,Horape, Ragama\r\n', '', 'Sri Lanka', '0776000859', '', 'pgdona@yahoo.com', '', '', 7, '2023/12/18', 0),
(37, 'Mr.', 'Arumadura Dumindu Lasantha Gunasekara', 'A.D.L. Gunasekara', 'N/A', '199733610054', '', '1997-12-01', 'M', 'No.114/2,A Bandarawatta, Gampaha\r\n', '', 'Sri Lanka', '0776088208', '', 'dumingunasekara4@gmail.com', '', '', 7, '2023/12/18', 0),
(38, 'Mr.', 'Mohamed Ishfahan Samsudeen', 'M.I. Samsudeen', 'N/A', '196223701014', '', '1962-08-24', 'M', 'No.54/4,Keels Homes Crescent Court,Dehiwala Road, Pepiliyana\r\n', '', 'Sri Lanka', '0777790190', '', 'shanx2005@gmail.com', '', '', 7, '2023/12/18', 0),
(39, 'Mr.', 'Aravinda Dadigama', 'A.. Dadigama', 'N/A', '740340999V', '', '1974-02-03', 'M', 'No.117,Horana Road,Mahawila,Panadura\r\n', '', 'Sri Lanka', '0382234751', '', '', '', '', 7, '2023/12/18', 0),
(40, 'Ms.', 'ge Dona Gayani Lalanika Perera', 'g.D.G.L. Perera', 'N/A', '747051968V', '', '1974-07-23', 'F', 'No.117,Horana Road,Mahawila,Panadura\r\n', '', 'Sri Lanka', '0714102208', '', '', '', '', 7, '2023/12/18', 0),
(41, 'Mr.', 'Liyanawaduge Don Vijitha Leelananda', 'L.D.V. Leelananda', 'N/A', '611051859V', '', '1961-04-14', 'M', 'No.522/1/C,Nungamugoda, Kelaniya\r\n', '', 'Sri Lanka', '0112915339', '', 'vijithalee@yahoo.com', '', '', 7, '2023/12/18', 0),
(42, 'Mr.', 'Saeed Ahamed Abdul Kareem ', 'S.A.A.K. ', 'N/A', '780570300V ', '', '1978-02-26', 'M', 'No.34/10B,Sujatha Mawatha, Off De Silva Road, Kalubowila\r\n', '', 'Sri Lanka', '0777310348', '', 'saeed.ahamed@maliban.com', '', '', 7, '2023/12/18', 0),
(43, 'Ms.', 'Kadana Arachchige Achini Pamudika Fernando', 'K.A.A.P. Fernando', 'N/A', '199563202936', '', '1995-05-11', 'F', 'No.278H,Bataduwa 1st Lane,Bataduwa Galle\r\n', '', 'Sri Lanka', '0712664760', '', 'pamudika.fdo@gmail.com', '', '', 7, '2023/12/18', 0),
(44, 'Ms.', 'Dehiwattage Shehara Nilushi Fernando', 'D.S.N. Fernando', 'N/A', '878370260V', '', '1995-12-02', 'F', 'APT 207,AL Shamsi Building,AL Nahda 2, Dubai,UAE\r\n', '', 'United Arab Emirates', '07142976425', '', 'shefdo@yahoo.com', '', '', 7, '2023/12/19', 0),
(45, 'Mr.', 'Thusitha Sudershana Ratnayake', 'T.S. Ratnayake', 'N/A', '701141954V', '', '1970-04-23', 'M', 'No.194/23,Thalagahahena Road, kesbewa, Piliyandala\r\n', '', 'Sri Lanka', '0772281118', '', 'thusithasro1@gmail.com', '', '', 7, '2023/12/19', 0),
(46, 'Mr.', 'Waragoda Mudalige Don Terance Percy ', 'W.M.D.T.P. ', 'N/A', '863351928V', '', '1986-11-30', 'M', 'No.1310/05,Nidahas  Mawatha,Hokandara Road,Moraketiya,Pannipitiya\r\n', '', 'Sri Lanka', '0773960077', '', 'terance_percy@yahoo.com', '', '', 7, '2023/12/19', 0),
(47, 'Ms.', 'Makawita Liyana Arachchige Indunil Uthpala Weerakoon', 'M.L.A.I.U. Weerakoon', 'N/A', '877553639V', '', '1987-09-11', 'F', 'No.1310/05,Nidahas  Mawatha,Hokandara Road,Moraketiya,Pannipitiya\r\n', '', 'Sri Lanka', '0773960077', '', 'terance_percy@yahoo.com', '', '', 7, '2023/12/19', 0),
(48, 'Mr.', 'Sampath Waiduthi Bandara Herby Seneviratne', 'S.W.B.H. Seneviratne', 'N/A', '197116603339', '', '1971-06-14', 'M', 'D6/2/1, Manning Town Housing Scheme, Colombo 08\r\n', '', 'Sri Lanka', '0773825496', '', 'herby.seneviratne@gmail.com', '', '', 7, '2023/12/19', 0),
(49, 'Mr.', 'Sivasubramaniam Sriskandaraj', 'S.. Sriskandaraj', 'N/A', '651920515V', '', '1965-07-10', 'M', 'No.102/124,Madara Uyana, Matthegoda\r\n', '', 'Sri Lanka', '0773623794', '', 'shriskandaraj@gmail.com', '', '', 7, '2023/12/19', 0),
(50, 'Ms.', 'Madampe Hettiarachchige Gayathri Hashmini Tissera', 'M.H.G.H. Tissera', 'N/A', '866200742V', '', '1986-04-29', 'F', '160A,Mahara,Nugegoda, Kadawatha\r\n', '', 'Sri Lanka', '07668284803', '', 'ghashmini@yahoo.com', '', '', 7, '2023/12/19', 0),
(51, 'Ms.', 'Weerasinghe Arachchige Aruni Thalashka Weerasinghe', 'W.A.A.T. Weerasinghe', 'N/A', '857774345V', '', '1985-10-03', 'F', 'No.317,Kanampella,Kosgama\r\n', '', 'Sri Lanka', '0770781098', '', 'tashaweerasinghe@gmail.com', '', '', 7, '2023/12/19', 0),
(52, 'Mr.', 'Nagahapitiye Walawwe Senarath Bandara Nagahapitiya', 'N.W.S.B. Nagahapitiya', 'N/A', '197004600436', '', '1970-02-15', 'M', 'No.66C,Dambagoda Road,Walgowwagoda,Danture\r\n', '', 'Sri Lanka', '0777583429', '', 'snagahapitiya@yahoo.com', '', '', 7, '2023/12/19', 0),
(53, 'Mr.', 'Wadena Konda Arachchige Samath Aravinda Fernando', 'W.K.A.S.A. Fernando', 'N/A', '741800071V', '', '1974-06-28', 'M', 'No.200/1,Werahera, Boralasgamuwa\r\n', '', 'Sri Lanka', '0114373476', '', 'samath.fernando@gmail.com', '', '', 7, '2023/12/19', 0),
(54, 'Mr.', 'Ravindu Sathmini Arukgoda', 'R.S. Arukgoda', 'N/A', '912830438V', '', '1991-10-09', 'M', 'No.541/23,Wawahena Road,Ranmuthugala, Kadawatha\r\n', '', 'Sri Lanka', '0718571931', '', 'ravinduarukgoda@hotmail.com', '', '', 7, '2023/12/19', 0),
(55, 'Mr.', 'Paul Devarajan Gunasegaram ', 'P.D.G. ', 'N/A', '196923302105', '', '1969-08-20', 'M', '4B,6-1,Mattegoda Housing Scheme,Mattegoda\r\n', '', 'Sri Lanka', '0777105891', '', 'pauldevgunas2@gmail.com', '', '', 7, '2023/12/19', 0),
(56, 'Mr.', 'Pandigamage Chanaka Hasitha Weerasena', 'P.C.H. Weerasena', 'N/A', '199028903164', '', '1990-10-15', 'M', 'No.23,Ratemulla, Uduwela, Kandy\r\n', '', 'Sri Lanka', '0705717064', '', 'pchweerasena@gmail.com', '', '', 7, '2023/12/19', 0),
(57, 'Mr.', 'Kamal Ranjan Kudahetty', 'K.R. Kudahetty', 'N/A', '611150113V', '', '1961-04-24', 'M', '341/C/135,4th Lane,Mahayaya Estate,Gorakapitiya, Piliyandala\r\n', '', 'Sri Lanka', '0773444907', '', 'Kamal@lcl.lk', '', '', 7, '2023/12/19', 0),
(58, 'Mr.', 'R P Rozairo', 'R.P. Rozairo', 'N/A', '831320788V', '', '1983-05-11', 'M', 'No.43/4,Edissuriya Place,Kahowita Mawatha, Attidiya, Dehiwala\r\n', '', 'Sri Lanka', '0773831860', '', '', 'N/A', '', 7, '2024/01/09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `log_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `U_Email` varchar(255) NOT NULL,
  `login_time` datetime NOT NULL,
  `login_ip` varchar(45) NOT NULL,
  `login_browser` text NOT NULL,
  `login_device` varchar(256) NOT NULL,
  `login_os` varchar(256) NOT NULL,
  `login_isp` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`log_id`, `U_id`, `U_Email`, `login_time`, `login_ip`, `login_browser`, `login_device`, `login_os`, `login_isp`) VALUES
(1, 1, 'developer@link.lk', '2023-12-01 15:37:19', '112.135.176.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(2, 1, 'developer@link.lk', '2023-12-02 09:20:49', '112.135.176.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(3, 1, 'developer@link.lk', '2023-12-04 13:15:03', '112.135.176.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(4, 1, 'developer@link.lk', '2023-12-05 09:58:28', '112.135.176.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(5, 1, 'developer@link.lk', '2023-12-14 14:59:51', '112.135.177.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(6, 6, 'developer@blueocean.lk', '2023-12-14 21:39:54', '112.134.168.222', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(7, 1, 'developer@link.lk', '2023-12-16 11:20:03', '112.135.177.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(8, 7, 'gmarketing@Blueocean.lk', '2023-12-16 11:32:25', '112.135.177.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(9, 7, 'gmarketing@Blueocean.lk', '2023-12-18 08:56:32', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(10, 1, 'developer@link.lk', '2023-12-18 10:57:40', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(11, 1, 'developer@link.lk', '2023-12-18 14:50:52', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(12, 1, 'developer@link.lk', '2023-12-19 12:20:20', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(13, 1, 'developer@link.lk', '2023-12-19 12:24:03', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(14, 1, 'developer@link.lk', '2023-12-19 15:07:33', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(15, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:51:01', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(16, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:51:05', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(17, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:51:09', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(18, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:51:12', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(19, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:51:17', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(20, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:52:30', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(21, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:52:31', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(22, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:52:52', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(23, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:53:54', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(24, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:54:10', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(25, 7, 'gmarketing@Blueocean.lk', '2023-12-20 08:55:45', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(26, 1, 'developer@link.lk', '2023-12-20 08:57:20', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(27, 7, 'gmarketing@blueocean.lk', '2023-12-20 08:58:09', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(28, 1, 'developer@link.lk', '2023-12-20 08:58:22', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(29, 7, 'gmarketing@blueocean.lk', '2023-12-20 08:59:23', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(30, 7, 'gmarketing@blueocean.lk', '2023-12-20 08:59:27', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(31, 7, 'gmarketing@blueocean.lk', '2023-12-20 08:59:53', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(32, 1, 'developer@link.lk', '2023-12-20 09:00:04', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(33, 7, 'gmarketing@blueocean.lk', '2023-12-20 09:03:14', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(34, 5, 'shashika@kelsey.lk', '2023-12-20 09:04:29', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(35, 1, 'developer@link.lk', '2023-12-20 09:10:15', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(36, 22, 'gmarketing@blueocean.lk', '2023-12-20 09:12:11', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(37, 22, 'gmarketing@blueocean.lk', '2023-12-20 09:12:51', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(38, 22, 'gmarketing@blueocean.lk', '2023-12-20 09:14:57', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'PC', '', 'Unknown ISP'),
(39, 7, 'gmarketing@blueocean.lk', '2023-12-20 09:15:35', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(40, 7, 'gmarketing@blueocean.lk', '2023-12-22 13:42:37', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(41, 1, 'developer@link.lk', '2023-12-22 13:52:59', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(42, 7, 'gmarketing@blueocean.lk', '2023-12-23 08:57:52', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(43, 1, 'developer@link.lk', '2023-12-23 11:14:55', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(44, 1, 'developer@link.lk', '2023-12-27 11:32:06', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(45, 7, 'gmarketing@blueocean.lk', '2023-12-27 12:33:45', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(46, 1, 'developer@link.lk', '2023-12-28 09:21:24', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(47, 7, 'gmarketing@blueocean.lk', '2023-12-29 08:46:37', '112.135.206.235', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(48, 7, 'gmarketing@blueocean.lk', '2023-12-30 08:56:02', '112.135.221.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(49, 7, 'gmarketing@blueocean.lk', '2023-12-30 09:26:57', '112.135.221.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(50, 7, 'gmarketing@blueocean.lk', '2024-01-01 08:36:49', '112.135.221.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(51, 1, 'developer@link.lk', '2024-01-03 11:13:51', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(52, 1, 'developer@link.lk', '2024-01-03 15:23:02', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(53, 7, 'gmarketing@blueocean.lk', '2024-01-04 09:03:55', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(54, 1, 'developer@link.lk', '2024-01-04 15:14:17', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(55, 7, 'gmarketing@blueocean.lk', '2024-01-05 08:43:23', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(56, 1, 'developer@link.lk', '2024-01-05 14:01:58', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(57, 7, 'gmarketing@blueocean.lk', '2024-01-06 08:46:39', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(58, 7, 'gmarketing@blueocean.lk', '2024-01-06 13:38:55', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(59, 7, 'gmarketing@blueocean.lk', '2024-01-08 10:33:51', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(60, 7, 'gmarketing@blueocean.lk', '2024-01-09 11:49:29', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(61, 1, 'developer@link.lk', '2024-01-09 14:51:31', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'PC', '', 'Unknown ISP'),
(62, 7, 'gmarketing@blueocean.lk', '2024-01-10 08:41:35', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(63, 1, 'developer@link.lk', '2024-01-11 15:37:12', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP'),
(64, 7, 'gmarketing@blueocean.lk', '2024-01-12 08:48:37', '112.135.210.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'PC', '', 'Unknown ISP');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `paid_amount` decimal(65,0) NOT NULL,
  `pay_discription` varchar(256) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_sheetno` varchar(256) NOT NULL,
  `payment_methord` varchar(256) NOT NULL,
  `payment_discription` varchar(256) NOT NULL,
  `payment_add_by` int(11) NOT NULL,
  `payment_crate_bate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `sale_id`, `paid_amount`, `pay_discription`, `pay_date`, `pay_sheetno`, `payment_methord`, `payment_discription`, `payment_add_by`, `payment_crate_bate`) VALUES
(7, 5, '300000', 'Reservation Fee', '2020-12-16', '0278', 'Bank Transfer', 'Sampath Bank', 7, '22-12-2023'),
(8, 5, '700000', 'Reservation Fee', '2020-12-26', '0298', 'Bank Transfer', 'Sampath Bank', 7, '22-12-2023'),
(9, 5, '3000000', 'Signing the Sale &Purchase Agreement', '2021-02-15', '0501', 'Bank Transfer', 'Sampath Bank', 7, '22-12-2023'),
(10, 5, '1920000', 'Commencement', '2021-12-28', '1381', 'Bank Transfer', 'Sampath Bank', 7, '22-12-2023'),
(11, 5, '1845000', 'Completion-Foundation Level', '2022-01-28', '1480', 'Bank Transfer', 'Sampath Bank', 7, '22-12-2023'),
(12, 8, '20000', 'Reservation Fee', '2020-09-20', '0138', 'Cash', 'cash', 7, '23-12-2023'),
(13, 8, '480000', 'Reservation Fee', '2020-09-30', '0194', 'Cash', 'cash', 7, '23-12-2023'),
(14, 8, '500000', 'Reservation Fee', '2020-10-14', '0210', 'Cash', 'cash', 7, '23-12-2023'),
(15, 8, '2640000', 'Down Payment', '2021-02-09', '0486', 'Cash', 'cash', 7, '23-12-2023'),
(16, 8, '880000', 'Commencement', '2021-09-13', '0997', 'Cash', 'cash', 7, '23-12-2023'),
(17, 8, '1320000', 'Upon Completion Foundation', '2021-12-23', '1372', 'Cash', 'cash', 7, '23-12-2023'),
(18, 8, '500000', 'Recommence', '2023-03-13', '2508', 'Cash', 'cash', 7, '23-12-2023'),
(19, 8, '750000', '1st Floor Slab', '2023-06-26', '2660', 'Cash', 'cash', 7, '23-12-2023'),
(20, 8, '69000', '1st Floor Slab', '2023-08-28', '2761', 'Cash', 'cash', 7, '23-12-2023'),
(21, 8, '431000', 'Ground Floor Block', '2023-08-28', '2761', 'Cash', 'cash', 7, '23-12-2023'),
(22, 9, '500000', 'Reservation Fee', '2021-01-05', '0325', 'Cash', 'cash', 7, '23-12-2023'),
(23, 9, '500000', 'Reservation Fee', '2021-01-18', '0337', 'Cash', 'cash', 7, '23-12-2023'),
(24, 9, '2970000', 'Sales & purchase', '2021-02-18', '0525', 'Cash', 'cash', 7, '23-12-2023'),
(25, 9, '990000', 'Commencement', '2021-03-09', '0652', 'Cash', 'cash', 7, '23-12-2023'),
(26, 9, '1485000', 'Completion of Foundation', '2021-12-16', '1359', 'Cash', 'cash', 7, '23-12-2023'),
(28, 9, '500000', 'Recommence', '2023-01-24', '2476', 'Cash', 'cash', 7, '23-12-2023'),
(29, 9, '744375', '1st Installment', '2023-01-24', '2476', 'Cash', 'cash', 7, '23-12-2023'),
(30, 9, '240625', '2nd Installment', '2023-01-24', '2476', 'Cash', 'cash', 7, '23-12-2023'),
(31, 9, '503750', '2nd Installment', '2023-04-03', '2548', 'Cash', 'cash', 7, '23-12-2023'),
(32, 9, '744350', '3rd Installment', '2023-04-11', '2570', 'Cash', 'cash', 7, '23-12-2023'),
(33, 9, '25', '3rd Installment', '2023-04-11', '2570', 'Cash', 'cash', 7, '23-12-2023'),
(34, 9, '735000', '4th Installment', '2023-05-15', '2606', 'Cash', 'cash', 7, '23-12-2023'),
(35, 9, '9375', '4th Installment', '2023-07-08', '2685', 'Cash', 'cash', 7, '23-12-2023'),
(36, 9, '733375', '5th Installment', '2023-07-08', '2685', 'Cash', 'cash', 7, '23-12-2023'),
(37, 10, '500000', 'Reservation Fee', '2020-12-20', '0303', 'Cash', 'cash', 7, '23-12-2023'),
(38, 10, '500000', 'Reservation Fee', '2020-12-20', '0303', 'Cash', 'cash', 7, '23-12-2023'),
(39, 10, '3750000', 'Sales & Purchase', '2021-02-10', '0487', 'Cash', 'cash', 7, '23-12-2023'),
(40, 10, '1250000', 'Commencement', '2021-03-12', '0662', 'Cash', 'cash', 7, '23-12-2023'),
(41, 10, '1875000', 'Completion of Foundation', '2021-07-06', '0847', 'Cash', 'cash', 7, '23-12-2023'),
(42, 10, '1875000', '1st Floor Slab', '2021-09-08', '0987', 'Cash', 'cash', 7, '23-12-2023'),
(43, 10, '875000', 'Completion of Roof Work', '2021-11-23', '1298', 'Cash', 'cash', 7, '23-12-2023'),
(44, 10, '625000', 'Completion of bathroom and doors', '2021-12-28', '1382', 'Cash', 'cash', 7, '23-12-2023'),
(45, 10, '500000', 'Handing Over', '2023-08-03', '2719', 'Cash', 'cash', 7, '23-12-2023'),
(61, 14, '500000', 'Reservation Fee', '2020-12-28', '0311', 'Cash', 'cash', 7, '30-12-2023'),
(62, 14, '500000', 'Reservation Fee', '2021-01-19', '0416', 'Cash', 'cash', 7, '30-12-2023'),
(63, 14, '2790000', 'Signing the Sales & Purchase Agreement', '2021-02-11', '0491', 'Cash', 'cash', 7, '30-12-2023'),
(64, 14, '930000', 'Commencement', '2021-09-22', '1010', 'Cash', 'cash', 7, '30-12-2023'),
(65, 14, '1000000', 'Completion - Foundation Level', '2021-12-05', '1329', 'Cash', 'cash', 7, '30-12-2023'),
(66, 14, '395000', 'Completion - Foundation Level', '2021-12-07', '1333', 'Cash', 'cash', 7, '30-12-2023'),
(67, 15, '500000', 'Reservation Fee', '2020-12-23', '0285', 'Cash', 'cash', 7, '02-01-2024'),
(68, 15, '500000', 'Reservation Fee', '2021-01-19', '0417', 'Cash', 'cash', 7, '02-01-2024'),
(69, 15, '160', 'Signing Sales & Purchase Agreement', '2021-01-19', '0417', 'Cash', 'cash', 7, '02-01-2024'),
(70, 15, '3749840', 'Signing Sales & Purchase Agreement', '2021-07-16', '0869', 'Cash', 'cash', 7, '02-01-2024'),
(71, 15, '1250000', 'Commencement', '2021-07-16', '0869', 'Cash', 'cash', 7, '02-01-2024'),
(72, 15, '160', 'Completion - Foundation Level', '2021-07-16', '0869', 'Cash', 'cash', 7, '02-01-2024'),
(73, 15, '1874840', 'Completion - Foundation Level', '2021-12-15', '1354', 'Cash', 'cash', 7, '02-01-2024'),
(74, 15, '500000', 'Recommencement', '2023-01-31', '2451', 'Cash', 'cash', 7, '02-01-2024'),
(75, 15, '515625', '1st Installment ', '2023-04-03', '2552', 'Cash', 'cash', 7, '02-01-2024'),
(76, 15, '484375', '2nd  Installment', '2023-04-03', '2552', 'Cash', 'cash', 7, '02-01-2024'),
(77, 15, '31250', '2nd  Installment', '2023-09-01', '2772', 'Cash', 'cash', 7, '02-01-2024'),
(78, 15, '515625', '3rd Installment', '2023-09-01', '2772', 'Cash', 'cash', 7, '02-01-2024'),
(79, 15, '3125', '4th installment', '2023-09-01', '2772', 'Cash', 'cash', 7, '02-01-2024'),
(80, 16, '500000', 'Reservation Fee', '2020-09-21', '0189', 'Cash', 'cash', 7, '02-01-2024'),
(81, 16, '500000', 'Reservation Fee', '2020-10-05', '0148', 'Cash', 'cash', 7, '02-01-2024'),
(82, 16, '2640000', 'Signing of Sales & Purchase Agreement', '2021-02-09', '0484', 'Cash', 'cash', 7, '02-01-2024'),
(83, 16, '880000', 'Commencement', '2021-03-10', '0656', 'Cash', 'cash', 7, '02-01-2024'),
(84, 16, '1320000', 'Completion - Foundation Level', '2021-12-10', '1340', 'Cash', 'cash', 7, '02-01-2024'),
(85, 16, '500000', 'Recommencement', '2023-02-27', '2492', 'Cash', 'cash', 7, '02-01-2024'),
(86, 16, '682500', '1st Installment', '2023-03-15', '2513', 'Cash', 'cash', 7, '02-01-2024'),
(87, 16, '682500', '2nd Installment', '2023-04-26', '2589', 'Cash', 'cash', 7, '02-01-2024'),
(88, 16, '682500', '3rd Installment', '2023-05-26', '2620', 'Cash', 'cash', 7, '02-01-2024'),
(89, 16, '682500', '4th Installment', '2023-06-26', '2656', 'Cash', 'cash', 7, '02-01-2024'),
(90, 16, '682500', '5th Installment', '2023-07-25', '2710', 'Cash', 'cash', 7, '02-01-2024'),
(91, 16, '682500', '6th Installment', '2023-08-28', '2765', 'Cash', 'cash', 7, '02-01-2024'),
(92, 16, '682500', '7th Installment', '2023-09-27', '2807', 'Cash', 'cash', 7, '02-01-2024'),
(93, 17, '500000', 'Reservation Fee', '2020-09-21', '0188', 'Cash', 'cash', 7, '02-01-2024'),
(94, 17, '500000', 'Reservation Fee', '2020-10-08', '0149', 'Cash', 'cash', 7, '02-01-2024'),
(95, 17, '2820000', 'Signing Sales & Purchase Agreement', '2021-02-08', '0477', 'Cash', 'cash', 7, '02-01-2024'),
(96, 17, '940000', 'Commencement', '2021-03-11', '0607', 'Cash', 'cash', 7, '02-01-2024'),
(97, 17, '1410000', 'Completion - Foundation Level', '2021-12-10', '1341', 'Cash', 'cash', 7, '03-01-2024'),
(98, 17, '500000', 'Recommencement', '2023-02-27', '2491', 'Cash', 'cash', 7, '03-01-2024'),
(99, 17, '716250', '1st Installment', '2023-03-15', '2512', 'Cash', 'cash', 7, '03-01-2024'),
(100, 17, '716250', '2nd  Installment', '2023-04-14', '2579', 'Cash', 'cash', 7, '03-01-2024'),
(101, 17, '716250', '3rd  Installment', '2023-05-27', '2629', 'Cash', 'cash', 7, '03-01-2024'),
(102, 17, '716250', '4th Installment', '2023-06-27', '2662', 'Cash', 'cash', 7, '03-01-2024'),
(103, 17, '716250', '5th Installment', '2023-07-27', '2716', 'Cash', 'cash', 7, '03-01-2024'),
(104, 17, '716250', '6th Installment', '2023-08-29', '2767', 'Cash', 'cash', 7, '03-01-2024'),
(105, 17, '716250', '7th Installment', '2023-09-27', '2809', 'Cash', 'cash', 7, '03-01-2024'),
(106, 18, '500000', 'Reservation Fee', '2021-01-04', '0363', 'Cash', 'cash', 7, '03-01-2024'),
(107, 18, '500000', 'Reservation Fee', '2021-01-18', '0411', 'Cash', 'cash', 7, '03-01-2024'),
(108, 18, '3750000', 'Signing of Sales & Purchase Agreement', '2021-02-15', '0507', 'Cash', 'cash', 7, '03-01-2024'),
(109, 18, '1128767', 'Commencement', '2022-02-23', '1557', 'Bank Transfer', 'Sampath Bank', 7, '03-01-2024'),
(110, 18, '121233', 'Commencement', '2022-03-23', '1557', 'Bank Transfer', 'Sampath Bank', 7, '03-01-2024'),
(111, 19, '50000', 'Reservation Fee', '2020-10-02', '0197', 'Cash', 'cash', 7, '03-01-2024'),
(112, 19, '450000', 'Reservation Fee', '2021-01-08', '0380', 'Cash', 'cash', 7, '03-01-2024'),
(113, 19, '500000', 'Reservation Fee', '2021-12-29', '1387', 'Cash', 'cash', 7, '03-01-2024'),
(114, 19, '2610000', 'Signing the Sales and Purchase Agreement', '2021-11-01', '1180', 'Cash', 'cash', 7, '03-01-2024'),
(115, 19, '870000', 'Commencement', '2021-11-01', '1180', 'Cash', 'cash', 7, '03-01-2024'),
(116, 19, '5000', 'Completion - Foundation Level', '2021-11-01', '1180', 'Cash', 'cash', 7, '03-01-2024'),
(117, 19, '1300000', 'Completion - Foundation Level', '2021-12-27', '1378', 'Cash', 'cash', 7, '03-01-2024'),
(118, 22, '500000', 'Reservation Fee', '2021-01-04', '0367', 'Cash', 'cash', 7, '04-01-2024'),
(119, 22, '500000', 'Reservation Fee', '2021-01-26', '0443', 'Cash', 'cash', 7, '04-01-2024'),
(120, 22, '3125000', 'Signing the Sales & Purchase Agreement', '2021-05-10', '0739', 'Cash', 'cash', 7, '04-01-2024'),
(121, 22, '1875000', 'Completion - Foundation Level', '2022-03-14', '1677', 'Bank Transfer', 'Sampath Bank', 7, '04-01-2024'),
(122, 22, '1875000', 'Commencement', '2022-03-14', '1677', 'Bank Transfer', 'Sampath Bank', 7, '04-01-2024'),
(129, 8, '115000', 'Ground Floor Block', '2023-11-14', '2888', 'Cash', 'cash', 7, '05-01-2024'),
(130, 8, '385000', '1st Floor Block', '2023-11-14', '2888', 'Cash', 'cash', 7, '05-01-2024'),
(135, 9, '11000', '5th Installment', '2023-07-08', '2685', 'Cash', 'cash', 7, '05-01-2024'),
(136, 9, '744375', '6th Installment', '2023-11-28', '2913', 'Cash', 'cash', 7, '05-01-2024'),
(137, 9, '744375', '7th Installment', '2023-12-18', '2935', 'Cash', 'cash', 7, '05-01-2024'),
(138, 24, '500000', 'Reservation Fee', '2020-12-23', '0284', 'Cash', 'cash', 7, '05-01-2024'),
(139, 24, '500000', 'Reservation Fee', '2021-01-27', '0450', 'Cash', 'cash', 7, '05-01-2024'),
(140, 24, '2790000', 'Signing the Sales & Purchase Agreement', '2021-06-25', '0831', 'Cash', 'cash', 7, '05-01-2024'),
(141, 24, '930000', 'Commencement', '2021-09-21', '1007', 'Cash', 'cash', 7, '05-01-2024'),
(142, 24, '1395000', 'Completion - Foundation Level', '2021-12-17', '1365', 'Cash', 'cash', 7, '05-01-2024'),
(143, 24, '1000000', 'Completion - Foundation Level', '2023-05-19', '2624', 'Cash', 'cash', 7, '05-01-2024'),
(144, 24, '500000', '1st Installment', '2023-06-26', '2657', 'Bank Transfer', 'HNB Bank', 7, '05-01-2024'),
(145, 24, '148125', '1st Installment', '2023-07-28', '2718', 'Bank Transfer', 'HNB Bank', 7, '05-01-2024'),
(146, 24, '351875', '2nd Installment', '2023-07-28', '2718', 'Bank Transfer', 'HNB Bank', 7, '05-01-2024'),
(147, 24, '296250', '2nd Installment', '2023-08-25', '0000', 'Bank Transfer', 'HNB Bank', 7, '06-01-2024'),
(148, 24, '203750', '3rd Installment', '2023-08-25', '0000', 'Bank Transfer', 'HNB Bank', 7, '06-01-2024'),
(149, 24, '444375', '3rd Installment', '2023-09-29', '2808', 'Bank Transfer', 'HNB Bank', 7, '06-01-2024'),
(150, 24, '55625', '4th Installment', '2023-09-29', '2808', 'Bank Transfer', 'HNB Bank', 7, '06-01-2024'),
(151, 24, '500000', '4th Installment', '2023-10-30', '2869', 'Bank Transfer', 'HNB Bank', 7, '06-01-2024'),
(152, 24, '92500', '4th Installment', '2023-11-30', '2918', 'Bank Transfer', 'HNB Bank', 7, '06-01-2024'),
(153, 24, '500000', '5th Installment', '2023-11-30', '2918', 'Bank Transfer', 'HNB Bank', 7, '06-01-2024'),
(154, 27, '500000', 'Reservation Fee', '2020-10-19', '0212', 'Cash', 'cash', 7, '08-01-2024'),
(155, 27, '500000', 'Reservation Fee', '2020-11-02', '0225', 'Cash', 'cash', 7, '08-01-2024'),
(156, 27, '2820000', 'Signing the Sales & Purchase Agreement', '2021-02-07', '0475', 'Cash', 'cash', 7, '08-01-2024'),
(157, 27, '940000', 'Commencement', '2021-03-22', '0679', 'Cash', 'cash', 7, '08-01-2024'),
(158, 27, '1410000', 'Completion - Foundation Level', '2021-05-18', '0743', 'Cash', 'cash', 7, '08-01-2024'),
(159, 27, '1410000', 'Completion - 1st Floor Slab', '2021-07-27', '0774', 'Cash', 'cash', 7, '08-01-2024'),
(160, 27, '410000', 'Completion - Roof work', '2021-05-10', '1060', 'Cash', 'cash', 7, '08-01-2024'),
(161, 27, '470000', 'Completion of Interior ,Bathrooms and Doors', '2021-12-16', '1358', 'Cash', 'cash', 7, '08-01-2024'),
(162, 27, '500000', 'Recommencement', '2023-02-06', '2465', 'Bank Transfer', 'HNB Bank', 7, '08-01-2024'),
(163, 27, '430000', '1st Installment', '2023-03-29', '2535', 'Bank Transfer', 'HNB Bank', 7, '08-01-2024'),
(164, 27, '430000', '2nd Installment', '2023-06-26', '2658', 'Bank Transfer', 'HNB Bank', 7, '08-01-2024'),
(165, 27, '430000', '3rd Installment', '2023-10-27', '2862', 'Bank Transfer', 'HNB Bank', 7, '08-01-2024'),
(166, 28, '500000', 'Reservation Fee', '2020-12-29', '0313', 'Cash', 'cash', 7, '08-01-2024'),
(167, 28, '500000', 'Reservation Fee', '2021-01-12', '0386', 'Bank Transfer', 'Sampath Bank', 7, '08-01-2024'),
(168, 28, '2790000', 'Signing the Sales & Purchase Agreement', '2021-03-04', '0582', 'Bank Transfer', 'Sampath Bank', 7, '08-01-2024'),
(169, 28, '930000', 'Commencement', '2021-12-31', '1395', 'Bank Transfer', 'Sampath Bank', 7, '08-01-2024'),
(170, 28, '1395000', 'Completion  -  Foundation Level', '2021-12-31', '1395', 'Bank Transfer', 'HNB Bank', 7, '08-01-2024'),
(171, 29, '250000', 'Reservation Fee', '2021-01-12', '0389', 'Cash', 'cash', 7, '08-01-2024'),
(172, 29, '250000', 'Reservation Fee', '2021-01-13', '0391', 'Cash', 'cash', 7, '08-01-2024'),
(173, 29, '500000', 'Reservation Fee', '2021-05-21', '0746', 'Cash', 'cash', 7, '08-01-2024'),
(174, 29, '3900000', 'Signing the Sales & Purchase Agreement', '2021-07-06', '0848', 'Cash', 'cash', 7, '08-01-2024'),
(175, 29, '1300000', 'Commencement', '2021-09-08', '0988', 'Cash', 'cash', 7, '08-01-2024'),
(176, 29, '1950000', 'Completion - Foundation Level', '2021-11-23', '1297', 'Cash', 'cash', 7, '08-01-2024'),
(177, 29, '500000', 'Completion - 1st Floor Slab', '2023-08-03', '2720', 'Cash', 'cash', 7, '08-01-2024'),
(178, 29, '250000', 'Completion - 1st Floor Slab', '2023-12-11', '2938', 'Cash', 'cash', 7, '08-01-2024'),
(179, 29, '1200000', 'Completion - 1st Floor Slab', '2023-12-11', '2937', 'Bank Transfer', 'NTB ', 7, '08-01-2024'),
(180, 29, '300000', 'Completion - Roof work', '2023-12-11', '2937', 'Bank Transfer', 'NTB ', 7, '08-01-2024'),
(181, 29, '50000', 'Completion - Roof work', '2023-12-11', '2937', 'Bank Transfer', 'NTB ', 7, '08-01-2024'),
(182, 30, '100000', 'Reservation Fee', '2021-01-12', '0387', 'Cash', 'cash', 7, '08-01-2024'),
(183, 30, '400000', 'Reservation Fee', '2021-01-15', '0403', 'Cash', 'cash', 7, '08-01-2024'),
(184, 30, '500000', 'Reservation Fee', '2021-01-28', '0454', 'Cash', 'cash', 7, '08-01-2024'),
(185, 30, '3990000', 'Signing the Sales & Purchase Agreement', '2021-03-01', '0564', 'Cash', 'cash', 7, '08-01-2024'),
(186, 30, '1000000', 'Commencement', '2022-01-05', '1407', 'Cash', 'cash', 7, '08-01-2024'),
(187, 30, '330000', 'Commencement', '2022-01-06', '1413', 'Cash', 'cash', 7, '08-01-2024'),
(188, 30, '670000', 'Completion - Foundation Level', '2022-01-06', '1413', 'Cash', 'cash', 7, '08-01-2024'),
(189, 30, '1000000', 'Completion - Foundation Level', '2022-01-08', '1419', 'Cash', 'cash', 7, '08-01-2024'),
(190, 30, '325000', 'Completion - Foundation Level', '2022-01-10', '1423', 'Cash', 'cash', 7, '08-01-2024'),
(191, 30, '1000000', 'Recommencement', '2023-05-02', '2596', 'Cash', 'cash', 7, '08-01-2024'),
(192, 30, '597750', 'Completion - 1st Floor Slab', '2023-10-24', '2859', 'Cash', 'cash', 7, '08-01-2024'),
(193, 30, '398500', 'Completion - Ground Floor Block', '2023-10-24', '2859', 'Cash', 'cash', 7, '08-01-2024'),
(194, 31, '1000000', 'Reservation Fee', '2021-01-06', '0375', 'Cash', 'cash', 7, '09-01-2024'),
(195, 31, '2790000', 'Signing the Sales & Purchase Agreement', '2021-03-22', '0677', 'Cash', 'cash', 7, '09-01-2024'),
(196, 31, '930000', 'Commencement', '2021-09-15', '1003', 'Cash', 'cash', 7, '09-01-2024'),
(197, 31, '1395000', 'Completion - Foundation Level', '2021-11-23', '1295', 'Cash', 'cash', 7, '09-01-2024'),
(198, 32, '100000', 'Reservation Fee', '2021-01-08', '0327', 'Cash', 'cash', 7, '09-01-2024'),
(199, 32, '400000', 'Reservation Fee', '2021-01-11', '0385', 'Cash', 'cash', 7, '09-01-2024'),
(200, 32, '500000', 'Reservation Fee', '2021-01-21', '0425', 'Cash', 'cash', 7, '09-01-2024'),
(201, 32, '2940000', 'Signing the Sales & Purchase Agreement', '2021-02-22', '0536', 'Cash', 'cash', 7, '09-01-2024'),
(202, 32, '980000', 'Commencement', '2021-09-22', '1009', 'Cash', 'cash', 7, '09-01-2024'),
(203, 32, '1470000', 'Completion - Foundation Level', '2021-11-25', '1308', 'Cash', 'cash', 7, '09-01-2024'),
(204, 32, '500000', 'Recommencement', '2023-02-15', '2479', 'Cash', 'cash', 7, '09-01-2024'),
(205, 32, '3000000', 'Signing the addendumn', '2023-08-04', '2773', 'Cash', 'cash', 7, '09-01-2024'),
(206, 33, '500000', 'Reservation Fee', '2021-02-13', '0344', 'Cash', 'cash', 7, '09-01-2024'),
(207, 33, '500000', 'Reservation Fee', '2021-03-17', '0669', 'Cash', 'cash', 7, '09-01-2024'),
(208, 33, '3420000', 'Signing the Sales & Purchase Agreement', '2021-08-20', '0958', 'Cash', 'cash', 7, '09-01-2024'),
(209, 33, '1140000', 'Commencement', '2022-04-19', '1727', 'Cash', 'cash', 7, '09-01-2024'),
(210, 33, '1710000', 'Completion - Foundation Level', '2022-04-19', '1727', 'Cash', 'cash', 7, '09-01-2024'),
(211, 23, '50000', 'Reservation Fee', '2020-10-01', '0199', 'Cash', 'cash', 7, '09-01-2024'),
(212, 23, '450000', 'Reservation Fee', '2021-01-25', '0440', 'Cash', 'cash', 7, '09-01-2024'),
(213, 23, '500000', 'Reservation Fee', '2021-10-22', '1138', 'Cash', 'cash', 7, '09-01-2024'),
(214, 23, '3570000', 'Signing the Sales & Purchase Agreement', '2021-10-22', '1138', 'Cash', 'cash', 7, '09-01-2024'),
(215, 23, '1190000', 'Commencement', '2021-11-10', '1256', 'Cash', 'cash', 7, '09-01-2024'),
(216, 23, '1785000', 'Completion - Foundation Level', '2021-11-24', '1304', 'Cash', 'cash', 7, '09-01-2024'),
(217, 23, '500000', 'Interest', '2021-10-22', '1138', 'Cash', 'cash', 7, '09-01-2024'),
(218, 23, '500000', 'Recommencement', '2023-03-20', '2519', 'Bank Transfer', 'HNB Bank', 7, '09-01-2024'),
(219, 23, '369050', 'Completion -  1st Floor Slab', '2023-10-26', '2863', 'Cash', 'cash', 7, '09-01-2024'),
(220, 23, '301950', 'Completion - Ground Floor Block', '2023-10-26', '2863', 'Cash', 'cash', 7, '09-01-2024'),
(221, 35, '100000', 'Reservation Fee', '2021-03-03', '0576', 'Cash', 'cash', 7, '10-01-2024'),
(222, 35, '400000', 'Reservation Fee', '2021-03-05', '0589', 'Cash', 'cash', 7, '10-01-2024'),
(223, 35, '500000', 'Reservation Fee', '2021-03-22', '0678', 'Cash', 'cash', 7, '10-01-2024'),
(224, 35, '3000000', 'Signing the Sales & Purchase Agreement', '2021-04-20', '0716', 'Cash', 'cash', 7, '10-01-2024'),
(225, 35, '420000', 'Signing the Sales & Purchase Agreement', '2021-04-27', '0727', 'Cash', 'cash', 7, '10-01-2024'),
(226, 35, '600000', 'Commencement', '2021-10-04', '1055', 'Cash', 'cash', 7, '10-01-2024'),
(227, 35, '540000', 'Commencement', '2021-10-08', '1081', 'Cash', 'Cash', 7, '10-01-2024'),
(228, 35, '1726490', 'Completion - Foundation Level', '2021-11-30', '1323', 'Cash', 'Cash', 7, '10-01-2024'),
(229, 35, '500000', 'Recommencement', '2023-02-03', '2461', 'Cash', 'Cash', 7, '10-01-2024'),
(230, 35, '826689', '1st Installment', '2023-03-30', '2542', 'Cash', 'Cash', 7, '10-01-2024'),
(231, 35, '500000', '2nd Installment', '2023-06-28', '2671', 'Cash', 'Cash', 7, '10-01-2024'),
(232, 35, '326689', '2nd Installment', '2023-06-29', '2677', 'Cash', 'Cash', 7, '10-01-2024'),
(233, 35, '500000', '3rd Installment', '2023-10-10', '2821', 'Cash', 'Cash', 7, '10-01-2024'),
(234, 36, '100000', 'Reservation Fee', '2021-01-05', '0369', 'Cash', 'Cash', 7, '10-01-2024'),
(235, 36, '400000', 'Reservation Fee', '2021-01-05', '0371', 'Cash', 'Cash', 7, '10-01-2024'),
(236, 36, '500000', 'Reservation Fee', '2021-01-29', '0458', 'Cash', 'Cash', 7, '10-01-2024'),
(237, 36, '1790000', 'Signing the Sales & Purchase Agreement', '2021-03-12', '0663', 'Cash', 'Cash', 7, '10-01-2024'),
(238, 36, '1000000', 'Signing the Sales & Purchase Agreement', '2021-03-27', '0688', 'Cash', 'Cash', 7, '10-01-2024'),
(239, 36, '10000', 'Commencement', '2021-10-14', '1107', 'Cash', 'Cash', 7, '10-01-2024'),
(240, 36, '920000', 'Commencement', '2021-11-09', '1254', 'Cash', 'Cash', 7, '10-01-2024'),
(241, 36, '1395000', 'Completion Roof word', '2021-11-25', '1306', 'Cash', 'Cash', 7, '10-01-2024'),
(242, 36, '1000000', 'Completion - Foundation Level', '2023-10-10', '2824', 'Cash', 'Cash', 7, '10-01-2024'),
(243, 37, '100000', 'Reservation Fee', '2021-02-23', '0545', 'Cash', 'Cash', 7, '10-01-2024'),
(244, 37, '400000', 'Reservation Fee', '2021-03-03', '0575', 'Cash', 'Cash', 7, '10-01-2024'),
(245, 37, '500000', 'Reservation Fee', '2021-03-12', '0660', 'Cash', 'Cash', 7, '10-01-2024'),
(246, 37, '3420000', 'Signing the Sales & Purchase Agreement', '2021-07-19', '0874', 'Cash', 'Cash', 7, '10-01-2024'),
(247, 37, '1140000', 'Commencement', '2022-02-28', '1630', 'Cash', 'Cash', 7, '10-01-2024'),
(248, 37, '1710000', 'Completion - Foundation Level', '2022-02-28', '1630', 'Cash', 'Cash', 7, '10-01-2024'),
(249, 38, '500000', 'Reservation Fee', '2021-01-29', '0461', 'Cash', 'Cash', 7, '10-01-2024'),
(250, 38, '500000', 'Reservation Fee', '2021-02-24', '0551', 'Cash', 'Cash', 7, '10-01-2024'),
(251, 38, '3750000', 'Signing the Sales & Purchase Agreement', '2021-03-30', '0611', 'Cash', 'Cash', 7, '10-01-2024'),
(252, 38, '1250000', 'Commencement', '2021-05-13', '0740', 'Cash', 'Cash', 7, '10-01-2024'),
(253, 38, '1875000', 'Completion - Foundation Level', '2021-06-23', '0826', 'Cash', 'Cash', 7, '10-01-2024'),
(254, 38, '1875000', 'Completion - 1st Floor Slab', '2021-09-02', '0980', 'Cash', 'Cash', 7, '10-01-2024'),
(255, 38, '875000', 'Completion - Roof work', '2022-01-13', '1437', 'Cash', 'Cash', 7, '10-01-2024'),
(256, 38, '625000', 'Completion of Interior ,Bathrooms and Doors', '2022-01-25', '1470', 'Cash', 'Cash', 7, '10-01-2024'),
(257, 39, '500000', 'Reservation Fee', '2021-01-29', '0461', 'Cash', 'Cash', 7, '10-01-2024'),
(258, 39, '500000', 'Reservation Fee', '2021-02-24', '0551', 'Cash', 'Cash', 7, '10-01-2024'),
(259, 39, '3750000', 'Signing the Sales & Purchase Agreement', '2021-03-30', '0611', 'Cash', 'Cash', 7, '10-01-2024'),
(260, 39, '1250000', 'Commencement', '2021-05-13', '0741', 'Cash', 'Cash', 7, '10-01-2024'),
(261, 39, '1875000', 'Completion - Foundation Level', '2021-06-23', '0826', 'Cash', 'Cash', 7, '10-01-2024'),
(262, 39, '1875000', 'Completion - 1st Floor Slab', '2021-09-02', '0980', 'Cash', 'Cash', 7, '10-01-2024'),
(263, 39, '875000', 'Completion - Roof work', '2022-01-13', '1437', 'Cash', 'Cash', 7, '10-01-2024'),
(264, 39, '625000', 'Completion of Interior ,Bathroom and Doors', '2022-01-25', '1470', 'Cash', 'Cash', 7, '10-01-2024'),
(265, 40, '500000', 'Reservation Fee', '2021-01-29', '0461', 'Cash', 'Cash', 7, '12-01-2024'),
(266, 40, '500000', 'Reservation Fee', '2021-02-24', '0551', 'Cash', 'Cash', 7, '12-01-2024'),
(267, 40, '2790000', 'Signing the Sales & Purchase Agreement', '2021-03-30', '0611', 'Cash', 'Cash', 7, '12-01-2024'),
(268, 40, '930000', 'Commencement', '2021-05-13', '0741', 'Bank Transfer', 'NDB', 7, '12-01-2024'),
(269, 40, '1395000', 'Completion - Foundation Level', '2021-06-23', '0826', 'Bank Transfer', 'NDB', 7, '12-01-2024'),
(270, 40, '1395000', 'Completion - 1st Floor Slab', '2021-09-02', '0980', 'Bank Transfer', 'NDB', 7, '12-01-2024'),
(271, 40, '395000', 'Completion - Roof work', '2022-01-13', '1437', 'Bank Transfer', 'NDB', 7, '12-01-2024'),
(272, 40, '465000', 'Completion Interior ,Bathrooms and Doors', '2022-01-25', '1470', 'Cash', 'Cash', 7, '12-01-2024'),
(273, 41, '500000', 'Reservation Fee', '2021-01-29', '0461', 'Cash', 'Cash', 7, '12-01-2024'),
(274, 41, '500000', 'Reservation Fee', '2021-02-24', '0551', 'Cash', 'Cash', 7, '12-01-2024'),
(275, 41, '2970000', 'Signing the Sales & Purchase Agreement', '2021-03-30', '0611', 'Cash', 'Cash', 7, '12-01-2024'),
(276, 41, '990000', 'Commencement', '2021-05-13', '0741', 'Cash', 'Cash', 7, '12-01-2024'),
(277, 41, '1485000', 'Completion - Foundation Level', '2021-06-23', '0826', 'Bank Transfer', 'NTB ', 7, '12-01-2024'),
(278, 41, '1485000', 'Completion - 1st Floor Slab', '2021-09-02', '0980', 'Bank Transfer', 'NDB', 7, '12-01-2024'),
(279, 41, '485000', 'Completion - Roof work', '2022-01-13', '1437', 'Bank Transfer', 'NDB', 7, '12-01-2024');

-- --------------------------------------------------------

--
-- Table structure for table `payment_plan`
--

CREATE TABLE `payment_plan` (
  `plan_id` int(11) NOT NULL,
  `Ref_No` varchar(256) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `installment` varchar(256) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `Created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_plan`
--

INSERT INTO `payment_plan` (`plan_id`, `Ref_No`, `sale_id`, `installment`, `amount`, `due_date`, `Created_by`, `created_at`) VALUES
(23, '5-0', 5, 'Reservation Fee', '1000000.00', '2020-12-16', 7, '2023-12-22 11:04:19'),
(24, '5-1', 5, 'Signing the Sale &Purchase Agreement', '3000000.00', '2021-02-15', 7, '2023-12-22 11:04:19'),
(25, '5-2', 5, 'Commencement', '1920000.00', '2021-03-17', 7, '2023-12-22 11:04:19'),
(26, '5-3', 5, 'Completion-Foundation Level', '1845000.00', '2021-05-26', 7, '2023-12-22 11:04:19'),
(27, '5-4', 5, 'Completion-1st Floor Slab', '1845000.00', '2021-08-04', 7, '2023-12-22 11:04:19'),
(28, '5-5', 5, 'Completion-Roof work', '845000.00', '2021-10-13', 7, '2023-12-22 11:04:19'),
(29, '5-6', 5, 'Completion of Interior,Bathroom & Doors', '615000.00', '2021-12-22', 7, '2023-12-22 11:04:19'),
(30, '5-7', 5, 'Handing Over ', '1230000.00', '2022-08-09', 7, '2023-12-22 11:04:19'),
(31, '8-0', 8, 'Reservation Fee', '1000000.00', '2020-09-20', 7, '2023-12-23 04:39:46'),
(32, '8-1', 8, 'Down Payment', '2640000.00', '2021-02-12', 7, '2023-12-23 04:39:46'),
(33, '8-2', 8, 'Commencement', '880000.00', '2021-09-09', 7, '2023-12-23 04:39:46'),
(34, '8-3', 8, 'Upon Completion Foundation', '1320000.00', '2021-12-09', 7, '2023-12-23 04:39:46'),
(35, '8-4', 8, 'Recommence', '500000.00', '2023-03-13', 7, '2023-12-23 04:39:46'),
(36, '8-5', 8, '1st Floor Slab', '819000.00', '2023-08-28', 7, '2023-12-23 04:39:46'),
(37, '8-6', 8, 'Ground Floor Block', '546000.00', '2023-09-28', 7, '2023-12-23 04:39:46'),
(38, '8-7', 8, '2nd Floor Slab', '819000.00', '2023-10-28', 7, '2023-12-23 04:39:46'),
(39, '8-8', 8, '1st Floor Block', '546000.00', '2023-11-28', 7, '2023-12-23 04:39:46'),
(40, '8-9', 8, 'Roof Floor Slab', '819000.00', '2023-12-28', 7, '2023-12-23 04:39:46'),
(41, '8-10', 8, '2nd Floor Block', '546000.00', '2024-01-28', 7, '2023-12-23 04:39:46'),
(42, '8-11', 8, 'Plastering', '546000.00', '2024-02-28', 7, '2023-12-23 04:39:46'),
(43, '8-12', 8, 'Final Interior', '546000.00', '2024-03-28', 7, '2023-12-23 04:39:46'),
(44, '8-13', 8, 'Completion', '273000.00', '2024-04-28', 7, '2023-12-23 04:39:46'),
(45, '9-0', 9, 'Reservation Fee', '1000000.00', '2021-01-18', 7, '2023-12-23 06:08:09'),
(46, '9-1', 9, 'Sales & purchase', '2970000.00', '2021-02-19', 7, '2023-12-23 06:08:09'),
(47, '9-2', 9, 'Commencement', '990000.00', '2021-09-09', 7, '2023-12-23 06:08:09'),
(48, '9-3', 9, 'Completion of Foundation', '1485000.00', '2021-12-09', 7, '2023-12-23 06:08:09'),
(49, '9-4', 9, 'Recommence', '500000.00', '2023-01-24', 7, '2023-12-23 06:08:09'),
(50, '9-5', 9, '1st Installment', '744375.00', '2023-02-24', 7, '2023-12-23 06:08:09'),
(51, '9-6', 9, '2nd Installment', '744375.00', '2023-03-24', 7, '2023-12-23 06:08:09'),
(52, '9-7', 9, '3rd Installment', '744375.00', '2023-04-24', 7, '2023-12-23 06:08:09'),
(53, '9-8', 9, '4th Installment', '744375.00', '2023-05-24', 7, '2023-12-23 06:08:09'),
(54, '9-9', 9, '5th Installment', '744375.00', '2023-06-24', 7, '2023-12-23 06:08:09'),
(55, '9-10', 9, '6th Installment', '744375.00', '2023-07-24', 7, '2023-12-23 06:08:09'),
(56, '9-11', 9, '7th Installment', '744375.00', '2023-08-24', 7, '2023-12-23 06:08:09'),
(57, '9-12', 9, '8th Installment', '744375.00', '2023-09-24', 7, '2023-12-23 06:08:09'),
(58, '10-0', 10, 'Reservation Fee', '1000000.00', '2020-12-20', 7, '2023-12-23 06:52:32'),
(59, '10-1', 10, 'Sales & Purchase', '3750000.00', '2021-02-10', 7, '2023-12-23 06:52:32'),
(60, '10-2', 10, 'Commencement', '1250000.00', '2021-09-09', 7, '2023-12-23 06:52:32'),
(61, '10-3', 10, 'Completion of Foundation', '1875000.00', '2021-12-09', 7, '2023-12-23 06:52:32'),
(62, '10-4', 10, '1st Floor Slab', '1875000.00', '2021-07-30', 7, '2023-12-23 06:52:32'),
(63, '10-5', 10, 'Completion of Roof Work', '875000.00', '2021-10-08', 7, '2023-12-23 06:52:32'),
(64, '10-6', 10, 'Completion of bathroom and doors', '625000.00', '2021-12-17', 7, '2023-12-23 06:52:32'),
(65, '10-7', 10, 'Handing Over', '1250000.00', '2022-08-04', 7, '2023-12-23 06:52:32'),
(85, '14-0', 14, 'Reservation Fee', '1000000.00', '2020-12-28', 7, '2023-12-30 04:20:53'),
(86, '14-1', 14, 'Signing the Sales & Purchase Agreement', '2790000.00', '2021-02-15', 7, '2023-12-30 04:20:53'),
(87, '14-2', 14, 'Commencement', '930000.00', '2021-03-17', 7, '2023-12-30 04:20:53'),
(88, '14-3', 14, 'Completion - Foundation Level', '1395000.00', '2021-05-26', 7, '2023-12-30 04:20:53'),
(89, '14-4', 14, 'Completion- First Floor Slab', '1395000.00', '2021-08-04', 7, '2023-12-30 04:20:53'),
(90, '14-5', 14, 'Completion-Roof Work', '395000.00', '2021-10-13', 7, '2023-12-30 04:20:53'),
(91, '14-6', 14, 'Completion of Interior,Bathroom & Doors', '465000.00', '2021-12-22', 7, '2023-12-30 04:20:53'),
(92, '14-7', 14, 'Handing Over', '930000.00', '2022-08-09', 7, '2023-12-30 04:20:53'),
(93, '15-0', 15, 'Reservation Fee', '1000000.00', '2020-12-23', 7, '2024-01-02 05:45:37'),
(94, '15-1', 15, 'Signing Sales & Purchase Agreement', '3750000.00', '2021-01-06', 7, '2024-01-02 05:45:37'),
(95, '15-2', 15, 'Commencement', '1250000.00', '2021-09-09', 7, '2024-01-02 05:45:37'),
(96, '15-3', 15, 'Completion - Foundation Level', '1875000.00', '2021-12-02', 7, '2024-01-02 05:45:37'),
(97, '15-4', 15, 'Recommencement', '500000.00', '2023-01-31', 7, '2024-01-02 05:45:37'),
(98, '15-5', 15, '1st Installment ', '515625.00', '2023-02-28', 7, '2024-01-02 05:45:37'),
(99, '15-6', 15, '2nd  Installment', '515625.00', '2023-03-28', 7, '2024-01-02 05:45:37'),
(100, '15-7', 15, '3rd Installment', '515625.00', '2023-04-28', 7, '2024-01-02 05:45:37'),
(101, '15-8', 15, '4th installment', '515625.00', '2023-05-28', 7, '2024-01-02 05:45:37'),
(102, '15-9', 15, '5th Installment', '515625.00', '2023-06-28', 7, '2024-01-02 05:45:37'),
(103, '15-10', 15, '6th Installment', '515625.00', '2023-07-28', 7, '2024-01-02 05:45:37'),
(104, '15-11', 15, '7th Installment', '515625.00', '2023-08-28', 7, '2024-01-02 05:45:37'),
(105, '15-12', 15, '8th Installment', '515625.00', '2023-09-28', 7, '2024-01-02 05:45:37'),
(106, '16-0', 16, 'Reservation Fee', '1000000.00', '2020-09-21', 7, '2024-01-02 07:23:08'),
(107, '16-1', 16, 'Signing of Sales & Purchase Agreement', '2640000.00', '2021-02-09', 7, '2024-01-02 07:23:08'),
(108, '16-2', 16, 'Commencement', '880000.00', '2021-09-09', 7, '2024-01-02 07:23:08'),
(109, '16-3', 16, 'Completion - Foundation Level', '1320000.00', '2021-12-02', 7, '2024-01-02 07:23:08'),
(110, '16-4', 16, 'Recommencement', '500000.00', '2023-02-27', 7, '2024-01-02 07:23:08'),
(111, '16-5', 16, '1st Installment', '682500.00', '2023-03-27', 7, '2024-01-02 07:23:08'),
(112, '16-6', 16, '2nd Installment', '682500.00', '2023-04-27', 7, '2024-01-02 07:23:08'),
(113, '16-7', 16, '3rd Installment', '682500.00', '2023-05-27', 7, '2024-01-02 07:23:08'),
(114, '16-8', 16, '4th Installment', '682500.00', '2023-06-27', 7, '2024-01-02 07:23:08'),
(115, '16-9', 16, '5th Installment', '682500.00', '2023-07-27', 7, '2024-01-02 07:23:08'),
(116, '16-10', 16, '6th Installment', '682500.00', '2023-08-27', 7, '2024-01-02 07:23:08'),
(117, '16-11', 16, '7th Installment', '682500.00', '2023-09-27', 7, '2024-01-02 07:23:08'),
(118, '16-12', 16, '8th installment', '682500.00', '2023-10-27', 7, '2024-01-02 07:23:08'),
(119, '17-0', 17, 'Reservation Fee', '1000000.00', '2020-09-21', 7, '2024-01-02 10:48:23'),
(120, '17-1', 17, 'Signing Sales & Purchase Agreement', '2820000.00', '2021-02-09', 7, '2024-01-02 10:48:23'),
(121, '17-2', 17, 'Commencement', '940000.00', '2021-09-09', 7, '2024-01-02 10:48:23'),
(122, '17-3', 17, 'Completion - Foundation Level', '1410000.00', '2021-12-02', 7, '2024-01-02 10:48:23'),
(123, '17-4', 17, 'Recommencement', '500000.00', '2023-02-27', 7, '2024-01-02 10:48:23'),
(124, '17-5', 17, '1st Installment', '716250.00', '2023-03-27', 7, '2024-01-02 10:48:23'),
(125, '17-6', 17, '2nd  Installment', '716250.00', '2023-04-27', 7, '2024-01-02 10:48:23'),
(126, '17-7', 17, '3rd  Installment', '716250.00', '2023-05-27', 7, '2024-01-02 10:48:23'),
(127, '17-8', 17, '4th Installment', '716250.00', '2023-06-27', 7, '2024-01-02 10:48:23'),
(128, '17-9', 17, '5th Installment', '716250.00', '2023-07-27', 7, '2024-01-02 10:48:23'),
(129, '17-10', 17, '6th Installment', '716250.00', '2023-08-27', 7, '2024-01-02 10:48:23'),
(130, '17-11', 17, '7th Installment', '716250.00', '2023-09-27', 7, '2024-01-02 10:48:23'),
(131, '17-12', 17, '8th Installment', '716250.00', '2023-10-27', 7, '2024-01-02 10:48:23'),
(132, '18-0', 18, 'Reservation Fee', '1000000.00', '2021-01-04', 7, '2024-01-03 04:47:01'),
(133, '18-1', 18, 'Signing of Sales & Purchase Agreement', '3750000.00', '2021-02-18', 7, '2024-01-03 04:47:01'),
(134, '18-2', 18, 'Commencement', '1250000.00', '2021-03-20', 7, '2024-01-03 04:47:01'),
(135, '18-3', 18, 'Completion - Foundation level', '1875000.00', '2021-05-29', 7, '2024-01-03 04:47:01'),
(136, '18-4', 18, 'Completion - 1st Floor Slab ', '1875000.00', '2021-08-07', 7, '2024-01-03 04:47:01'),
(137, '18-5', 18, 'Completion - Roof work', '875000.00', '2021-10-16', 7, '2024-01-03 04:47:01'),
(138, '18-6', 18, 'Completion of Interior ,Bathrooms & Doors', '625000.00', '2021-12-25', 7, '2024-01-03 04:47:01'),
(139, '18-7', 18, 'Handing Over', '1250000.00', '2022-08-12', 7, '2024-01-03 04:47:01'),
(140, '19-0', 19, 'Reservation Fee', '1000000.00', '2020-10-02', 7, '2024-01-03 05:31:38'),
(141, '19-1', 19, 'Signing the Sales and Purchase Agreement', '2610000.00', '2021-01-11', 7, '2024-01-03 05:31:38'),
(142, '19-2', 19, 'Commencement', '870000.00', '2021-09-09', 7, '2024-01-03 05:31:38'),
(143, '19-3', 19, 'Completion - Foundation Level', '1305000.00', '2021-11-18', 7, '2024-01-03 05:31:38'),
(144, '19-4', 19, 'Completion - 1st Floor Slab', '1305000.00', '2022-01-27', 7, '2024-01-03 05:31:38'),
(145, '19-5', 19, 'Completion - Roof work', '305000.00', '2022-04-07', 7, '2024-01-03 05:31:38'),
(146, '19-6', 19, 'Completion of Interior, Bathroom & Doors', '435000.00', '2022-06-16', 7, '2024-01-03 05:31:38'),
(147, '19-7', 19, 'Handing Over', '870000.00', '2023-04-22', 7, '2024-01-03 05:31:38'),
(148, '20-0', 20, 'Reservation Fee', '1000000.00', '2020-10-19', 7, '2024-01-03 07:14:31'),
(149, '20-1', 20, 'Signing the Sales & Purchase Agreement', '2820000.00', '2021-02-09', 7, '2024-01-03 07:14:31'),
(150, '20-2', 20, 'Commencement', '940000.00', '2021-03-11', 7, '2024-01-03 07:14:31'),
(151, '20-3', 20, 'Completion - Foundation Level', '1410000.00', '2021-05-20', 7, '2024-01-03 07:14:31'),
(152, '20-4', 20, 'Completion - 1st Floor Slab', '1410000.00', '2021-07-29', 7, '2024-01-03 07:14:31'),
(153, '20-5', 20, 'Completion - Roof work', '410000.00', '2021-07-10', 7, '2024-01-03 07:14:31'),
(154, '20-6', 20, 'Completion of Interior , Bathrooms and Doors', '470000.00', '2021-12-16', 7, '2024-01-03 07:14:31'),
(155, '20-7', 20, 'Handing Over', '940000.00', '2022-03-08', 7, '2024-01-03 07:14:31'),
(156, '22-0', 22, 'Reservation Fee', '1000000.00', '2021-04-01', 7, '2024-01-03 11:35:35'),
(157, '22-1', 22, 'Signing the Sales & Purchase Agreement', '3125000.00', '2021-05-10', 7, '2024-01-03 11:35:35'),
(158, '22-2', 22, 'Commencement', '1875000.00', '2021-06-09', 7, '2024-01-03 11:35:35'),
(159, '22-3', 22, 'Completion - Foundation Level', '1875000.00', '2021-08-18', 7, '2024-01-03 11:35:35'),
(160, '22-4', 22, 'Completion -1st Floor Slab', '1875000.00', '2021-10-27', 7, '2024-01-03 11:35:35'),
(161, '22-5', 22, 'Completion - Roof work', '875000.00', '2022-01-05', 7, '2024-01-03 11:35:35'),
(162, '22-6', 22, 'Completion of Interior,Bathrooms & Doors ', '625000.00', '2022-03-16', 7, '2024-01-03 11:35:35'),
(163, '22-7', 22, 'Handing Over', '1250000.00', '2022-11-01', 7, '2024-01-03 11:35:35'),
(172, '24-0', 24, 'Reservation Fee', '1000000.00', '2020-12-23', 7, '2024-01-05 10:33:22'),
(173, '24-1', 24, 'Signing the Sales & Purchase Agreement', '2790000.00', '2021-06-25', 7, '2024-01-05 10:33:22'),
(174, '24-2', 24, 'Commencement', '930000.00', '2021-07-25', 7, '2024-01-05 10:33:22'),
(175, '24-3', 24, 'Completion - Foundation Level', '2395000.00', '2021-10-03', 7, '2024-01-05 10:33:22'),
(176, '24-4', 24, '1st Installment', '648125.00', '2023-06-19', 7, '2024-01-05 10:33:22'),
(177, '24-5', 24, '2nd Installment', '648125.00', '2023-07-19', 7, '2024-01-05 10:33:22'),
(178, '24-6', 24, '3rd Installment', '648125.00', '2023-08-19', 7, '2024-01-05 10:33:22'),
(179, '24-7', 24, '4th Installment', '648125.00', '2023-09-19', 7, '2024-01-05 10:33:22'),
(180, '24-8', 24, '5th Installment', '648125.00', '2023-10-19', 7, '2024-01-05 10:33:22'),
(181, '24-9', 24, '6th Installment', '648125.00', '2023-11-19', 7, '2024-01-05 10:33:22'),
(182, '24-10', 24, '7th Installment', '648125.00', '2023-12-19', 7, '2024-01-05 10:33:22'),
(183, '24-11', 24, '8th Installment', '648125.00', '2024-01-19', 7, '2024-01-05 10:33:22'),
(184, '27-0', 27, 'Reservation Fee', '1000000.00', '2020-10-19', 7, '2024-01-08 07:26:12'),
(185, '27-1', 27, 'Signing the Sales & Purchase Agreement', '2820000.00', '2021-02-09', 7, '2024-01-08 07:26:12'),
(186, '27-2', 27, 'Commencement', '940000.00', '2021-03-11', 7, '2024-01-08 07:26:12'),
(187, '27-3', 27, 'Completion - Foundation Level', '1410000.00', '2021-05-20', 7, '2024-01-08 07:26:12'),
(188, '27-4', 27, 'Completion - 1st Floor Slab', '1410000.00', '2021-07-29', 7, '2024-01-08 07:26:12'),
(189, '27-5', 27, 'Completion - Roof work', '410000.00', '2021-10-07', 7, '2024-01-08 07:26:12'),
(190, '27-6', 27, 'Completion of Interior ,Bathrooms and Doors', '470000.00', '2021-12-16', 7, '2024-01-08 07:26:12'),
(191, '27-7', 27, 'Recommencement', '500000.00', '2023-02-06', 7, '2024-01-08 07:26:12'),
(192, '27-8', 27, '1st Installment', '430000.00', '2023-03-06', 7, '2024-01-08 07:26:12'),
(193, '27-9', 27, '2nd Installment', '430000.00', '2023-04-06', 7, '2024-01-08 07:26:12'),
(194, '27-10', 27, '3rd Installment', '430000.00', '2023-05-06', 7, '2024-01-08 07:26:12'),
(195, '27-11', 27, '4th Installment', '430000.00', '2023-06-06', 7, '2024-01-08 07:26:12'),
(196, '27-12', 27, '5th Installment', '430000.00', '2023-07-06', 7, '2024-01-08 07:26:12'),
(197, '27-13', 27, '6th Installment', '430000.00', '2023-08-06', 7, '2024-01-08 07:26:12'),
(198, '27-14', 27, '7th Installment', '430000.00', '2023-09-06', 7, '2024-01-08 07:26:12'),
(199, '27-15', 27, '8th Installment', '430000.00', '2023-10-06', 7, '2024-01-08 07:26:12'),
(200, '28-0', 28, 'Reservation Fee', '1000000.00', '2020-12-29', 7, '2024-01-08 08:37:48'),
(201, '28-1', 28, 'Signing the Sales & Purchase Agreement', '2790000.00', '2021-01-12', 7, '2024-01-08 08:37:48'),
(202, '28-2', 28, 'Commencement', '930000.00', '2021-04-03', 7, '2024-01-08 08:37:48'),
(203, '28-3', 28, 'Completion  -  Foundation Level', '1395000.00', '2021-06-12', 7, '2024-01-08 08:37:48'),
(204, '28-4', 28, 'Completion -1st Floor Slab', '1395000.00', '2021-08-21', 7, '2024-01-08 08:37:48'),
(205, '28-5', 28, 'Completion - Roof work', '395000.00', '2021-10-30', 7, '2024-01-08 08:37:48'),
(206, '28-6', 28, 'Completion of Interior ,Bathrooms and Doors', '465000.00', '2022-01-08', 7, '2024-01-08 08:37:48'),
(207, '28-7', 28, 'Handing Over', '930000.00', '2022-08-26', 7, '2024-01-08 08:37:48'),
(208, '29-0', 29, 'Reservation Fee', '1000000.00', '2021-01-12', 7, '2024-01-08 09:56:06'),
(209, '29-1', 29, 'Signing the Sales & Purchase Agreement', '3900000.00', '2021-07-30', 7, '2024-01-08 09:56:06'),
(210, '29-2', 29, 'Commencement', '1300000.00', '2021-08-29', 7, '2024-01-08 09:56:06'),
(211, '29-3', 29, 'Completion - Foundation Level', '1950000.00', '2021-11-07', 7, '2024-01-08 09:56:06'),
(212, '29-4', 29, 'Completion - 1st Floor Slab', '1950000.00', '2022-01-16', 7, '2024-01-08 09:56:06'),
(213, '29-5', 29, 'Completion - Roof work', '950000.00', '2022-03-27', 7, '2024-01-08 09:56:06'),
(214, '29-6', 29, 'Completion Interior,Bathrooms and Doors', '650000.00', '2022-06-05', 7, '2024-01-08 09:56:06'),
(215, '29-7', 29, 'Handing Over ', '1300000.00', '2023-01-21', 7, '2024-01-08 09:56:06'),
(216, '30-0', 30, 'Reservation Fee', '1000000.00', '2021-01-12', 7, '2024-01-08 10:38:19'),
(217, '30-1', 30, 'Signing the Sales & Purchase Agreement', '3990000.00', '2021-03-01', 7, '2024-01-08 10:38:19'),
(218, '30-2', 30, 'Commencement', '1330000.00', '2021-03-31', 7, '2024-01-08 10:38:19'),
(219, '30-3', 30, 'Completion - Foundation Level', '1995000.00', '2021-11-16', 7, '2024-01-08 10:38:19'),
(220, '30-4', 30, 'Recommencement', '1000000.00', '2023-04-27', 7, '2024-01-08 10:38:19'),
(221, '30-5', 30, 'Completion - 1st Floor Slab', '597750.00', '2023-05-27', 7, '2024-01-08 10:38:19'),
(222, '30-6', 30, 'Completion - Ground Floor Block', '398500.00', '2023-06-27', 7, '2024-01-08 10:38:19'),
(223, '30-7', 30, 'Completion -2nd Floor Slab', '597750.00', '2023-07-27', 7, '2024-01-08 10:38:19'),
(224, '30-8', 30, 'Completion - 1st Floor Block', '398500.00', '2023-08-27', 7, '2024-01-08 10:38:19'),
(225, '30-9', 30, 'Completion - Roof Slab', '597750.00', '2023-09-27', 7, '2024-01-08 10:38:19'),
(226, '30-10', 30, 'Completion - 2nd Floor Block work', '398500.00', '2023-10-27', 7, '2024-01-08 10:38:19'),
(227, '30-11', 30, 'Completion - Ground Floor Plastering', '159400.00', '2023-11-27', 7, '2024-01-08 10:38:19'),
(228, '30-12', 30, 'Completion - 1st Floor Internal Plastering', '119550.00', '2023-12-27', 7, '2024-01-08 10:38:19'),
(229, '30-13', 30, 'Completion -2nd Floor Internal Plastering', '119550.00', '2024-01-27', 7, '2024-01-08 10:38:19'),
(230, '30-14', 30, 'MEP work', '119550.00', '2024-02-27', 7, '2024-01-08 10:38:19'),
(231, '30-15', 30, 'Bathroom Finishing', '119550.00', '2024-03-27', 7, '2024-01-08 10:38:19'),
(232, '30-16', 30, 'Fixing Pantry Unit', '119550.00', '2024-04-27', 7, '2024-01-08 10:38:19'),
(233, '30-17', 30, 'Completion -  Tile work', '119550.00', '2024-05-27', 7, '2024-01-08 10:38:19'),
(234, '30-18', 30, 'Completion - All work', '119550.00', '2024-06-27', 7, '2024-01-08 10:38:19'),
(235, '31-0', 31, 'Reservation Fee', '1000000.00', '2021-01-06', 7, '2024-01-09 06:35:53'),
(236, '31-1', 31, 'Signing the Sales & Purchase Agreement', '2790000.00', '2021-03-29', 7, '2024-01-09 06:35:53'),
(237, '31-2', 31, 'Commencement', '930000.00', '2021-04-28', 7, '2024-01-09 06:35:53'),
(238, '31-3', 31, 'Completion - Foundation Level', '1395000.00', '2021-11-16', 7, '2024-01-09 06:35:53'),
(239, '31-4', 31, 'Recommencement', '1000000.00', '2023-06-30', 7, '2024-01-09 06:35:53'),
(240, '31-5', 31, '1st Installment', '520556.00', '2023-07-30', 7, '2024-01-09 06:35:53'),
(241, '31-6', 31, '2nd Installment', '520556.00', '2023-08-30', 7, '2024-01-09 06:35:53'),
(242, '31-7', 31, '3rd Installment', '520556.00', '2023-09-30', 7, '2024-01-09 06:35:53'),
(243, '31-8', 31, '4th Installment', '520556.00', '2023-10-30', 7, '2024-01-09 06:35:53'),
(244, '31-9', 31, '5th Installment', '520556.00', '2023-11-30', 7, '2024-01-09 06:35:53'),
(245, '31-10', 31, '6th Installment', '520556.00', '2023-12-30', 7, '2024-01-09 06:35:53'),
(246, '31-11', 31, '7th installment', '520556.00', '2024-01-30', 7, '2024-01-09 06:35:53'),
(247, '31-12', 31, '8th Installment', '520556.00', '2024-02-28', 7, '2024-01-09 06:35:53'),
(248, '31-13', 31, '9th Installment', '520552.00', '2024-03-30', 7, '2024-01-09 06:35:53'),
(249, '32-0', 32, 'Reservation Fee', '1000000.00', '2021-01-08', 7, '2024-01-09 07:47:47'),
(250, '32-1', 32, 'Signing the Sales & Purchase Agreement', '2940000.00', '2021-02-23', 7, '2024-01-09 07:47:47'),
(251, '32-2', 32, 'Commencement', '980000.00', '2021-03-25', 7, '2024-01-09 07:47:47'),
(252, '32-3', 32, 'Completion - Foundation Level', '1470000.00', '2021-06-03', 7, '2024-01-09 07:47:47'),
(253, '32-4', 32, 'Recommencement', '500000.00', '2023-06-30', 7, '2024-01-09 07:47:47'),
(254, '32-5', 32, 'Signing the addendumn', '3000000.00', '2023-07-31', 7, '2024-01-09 07:47:47'),
(255, '32-6', 32, 'Completion - External and Internal Plastering', '1000000.00', '2023-08-31', 7, '2024-01-09 07:47:47'),
(256, '32-7', 32, 'Completion - Tile work and Bathroom Fitting', '910000.00', '2023-09-30', 7, '2024-01-09 07:47:47'),
(257, '32-8', 32, 'Completion - All works and Handover', '1000000.00', '2023-10-31', 7, '2024-01-09 07:47:47'),
(258, '33-0', 33, 'Reservation Fee', '1000000.00', '2020-02-13', 7, '2024-01-09 08:34:36'),
(259, '33-1', 33, 'Signing the Sales & Purchase Agreement', '3420000.00', '2020-10-12', 7, '2024-01-09 08:34:36'),
(260, '33-2', 33, 'Commencement', '1140000.00', '2021-09-19', 7, '2024-01-09 08:34:36'),
(261, '33-3', 33, 'Completion - Foundation Level', '1710000.00', '2021-11-28', 7, '2024-01-09 08:34:36'),
(262, '33-4', 33, 'Completion -1st Floor Slab', '1710000.00', '2022-02-06', 7, '2024-01-09 08:34:36'),
(263, '33-5', 33, 'Completion - Roof work', '710000.00', '2022-04-17', 7, '2024-01-09 08:34:36'),
(264, '33-6', 33, 'Completion of Interior,Bathrooms and Doors', '570000.00', '2022-06-26', 7, '2024-01-09 08:34:36'),
(265, '33-7', 33, 'Handing Over', '1140000.00', '2023-02-10', 7, '2024-01-09 08:34:36'),
(266, '23-0', 23, 'Reservation Fee', '1000000.00', '2020-10-01', 7, '2024-01-09 09:53:58'),
(267, '23-1', 23, 'Signing the Sales & Purchase Agreement', '3570000.00', '2020-10-22', 7, '2024-01-09 09:53:58'),
(268, '23-2', 23, 'Commencement', '1190000.00', '2021-07-09', 7, '2024-01-09 09:53:58'),
(269, '23-3', 23, 'Completion - Foundation Level', '1785000.00', '2021-11-18', 7, '2024-01-09 09:53:58'),
(270, '23-4', 23, 'Interest', '500000.00', '2021-12-22', 7, '2024-01-09 09:53:58'),
(271, '23-5', 23, 'Recommencement', '500000.00', '2023-03-20', 7, '2024-01-09 09:53:58'),
(272, '23-6', 23, 'Completion -  1st Floor Slab', '369050.00', '2023-04-20', 7, '2024-01-09 09:53:58'),
(273, '23-7', 23, 'Completion - Ground Floor Block', '301950.00', '2023-05-20', 7, '2024-01-09 09:53:58'),
(274, '23-8', 23, 'Completion - 2nd Floor Slab', '369050.00', '2023-06-20', 7, '2024-01-09 09:53:58'),
(275, '23-9', 23, 'Completion - 1st Floor Block', '301950.00', '2023-07-20', 7, '2024-01-09 09:53:58'),
(276, '23-10', 23, 'Completion - Roof Slab', '369050.00', '2023-08-20', 7, '2024-01-09 09:53:58'),
(277, '23-11', 23, 'Completion - 2nd Floor Block', '301950.00', '2023-09-20', 7, '2024-01-09 09:53:58'),
(278, '23-12', 23, 'Completion - Ground Floor Plastering', '167750.00', '2023-10-20', 7, '2024-01-09 09:53:58'),
(279, '23-13', 23, 'Completion 1st Floor Internal Plastering', '167750.00', '2023-11-20', 7, '2024-01-09 09:53:58'),
(280, '23-14', 23, 'Completion 2nd Floor Internal Plastering', '167750.00', '2023-12-20', 7, '2024-01-09 09:53:58'),
(281, '23-15', 23, 'MEP Work', '167750.00', '2024-01-20', 7, '2024-01-09 09:53:58'),
(282, '23-16', 23, 'Bathroom Finishing', '167750.00', '2024-02-20', 7, '2024-01-09 09:53:58'),
(283, '23-17', 23, 'Fixing Pantry Unit', '167750.00', '2024-03-20', 7, '2024-01-09 09:53:58'),
(284, '23-18', 23, 'Completion - Tile work', '167750.00', '2024-04-20', 7, '2024-01-09 09:53:58'),
(285, '23-19', 23, 'Completion all work', '167750.00', '2024-05-20', 7, '2024-01-09 09:53:58'),
(286, '36-0', 36, 'Reservation Fee', '1000000.00', '2021-01-05', 7, '2024-01-09 11:34:24'),
(287, '36-1', 36, 'Signing the Sales & Purchase Agreement', '2790000.00', '2021-04-05', 7, '2024-01-09 11:34:24'),
(288, '36-2', 36, 'Commencement', '1230000.00', '2021-05-05', 7, '2024-01-09 11:34:24'),
(289, '36-3', 36, 'Completion - Foundation Level', '2395000.00', '2021-07-14', 7, '2024-01-09 11:34:24'),
(290, '36-4', 36, 'Completion - 1st Floor Slab', '2395000.00', '2021-09-22', 7, '2024-01-09 11:34:24'),
(291, '36-5', 36, 'Completion Roof word', '1395000.00', '2021-12-01', 7, '2024-01-09 11:34:24'),
(292, '36-6', 36, 'Completion of Interior,Bathrooms and Doors ', '465000.00', '2022-02-09', 7, '2024-01-09 11:34:24'),
(293, '36-7', 36, 'Handing Over', '630000.00', '2022-09-27', 7, '2024-01-09 11:34:24'),
(294, '35-0', 35, 'Reservation Fee', '1000000.00', '2021-03-03', 7, '2024-01-10 03:28:03'),
(295, '35-1', 35, 'Signing the Sales & Purchase Agreement', '3420000.00', '2021-04-20', 7, '2024-01-10 03:28:03'),
(296, '35-2', 35, 'Commencement', '1140000.00', '2021-05-20', 7, '2024-01-10 03:28:03'),
(297, '35-3', 35, 'Completion - Foundation Level', '1726490.00', '2021-11-08', 7, '2024-01-10 03:28:03'),
(298, '35-4', 35, 'Recommencement', '500000.00', '2023-02-03', 7, '2024-01-10 03:28:03'),
(299, '35-5', 35, '1st Installment', '826688.75', '2023-03-03', 7, '2024-01-10 03:28:03'),
(300, '35-6', 35, '2nd Installment', '826688.75', '2023-04-03', 7, '2024-01-10 03:28:03'),
(301, '35-7', 35, '3rd Installment', '826688.75', '2023-05-03', 7, '2024-01-10 03:28:03'),
(302, '35-8', 35, '4th Installment', '826688.75', '2023-06-03', 7, '2024-01-10 03:28:03'),
(303, '35-9', 35, '5th Installment', '826688.75', '2023-07-03', 7, '2024-01-10 03:28:03'),
(304, '35-10', 35, '6th Installment', '826688.75', '2023-08-03', 7, '2024-01-10 03:28:03'),
(305, '35-11', 35, '7th Installment', '826688.75', '2023-09-03', 7, '2024-01-10 03:28:03'),
(306, '35-12', 35, '8th Installment', '826688.75', '2023-10-03', 7, '2024-01-10 03:28:03'),
(307, '37-0', 37, 'Reservation Fee', '1000000.00', '2021-02-23', 7, '2024-01-10 07:42:53'),
(308, '37-1', 37, 'Signing the Sales & Purchase Agreement', '3420000.00', '2021-07-17', 7, '2024-01-10 07:42:53'),
(309, '37-2', 37, 'Commencement', '1140000.00', '2021-08-16', 7, '2024-01-10 07:42:53'),
(310, '37-3', 37, 'Completion - Foundation Level', '1710000.00', '2021-11-08', 7, '2024-01-10 07:42:53'),
(311, '37-4', 37, 'Completion - 1st Floor Slab', '1710000.00', '2022-01-03', 7, '2024-01-10 07:42:53'),
(312, '37-5', 37, 'Completion -  Roof work', '710000.00', '2022-03-14', 7, '2024-01-10 07:42:53'),
(313, '37-6', 37, 'Completion of Interior,bathrooms and Doors', '570000.00', '2022-05-23', 7, '2024-01-10 07:42:53'),
(314, '37-7', 37, 'Handing Over', '1140000.00', '2023-08-01', 7, '2024-01-10 07:42:53'),
(315, '38-0', 38, 'Reservation Fee', '1000000.00', '2020-08-31', 7, '2024-01-10 08:41:25'),
(316, '38-1', 38, 'Signing the Sales & Purchase Agreement', '3750000.00', '2021-05-10', 7, '2024-01-10 08:41:25'),
(317, '38-2', 38, 'Commencement', '1250000.00', '2021-06-09', 7, '2024-01-10 08:41:25'),
(318, '38-3', 38, 'Completion - Foundation Level', '1875000.00', '2021-08-18', 7, '2024-01-10 08:41:25'),
(319, '38-4', 38, 'Completion - 1st Floor Slab', '1875000.00', '2021-10-27', 7, '2024-01-10 08:41:25'),
(320, '38-5', 38, 'Completion - Roof work', '875000.00', '2022-01-05', 7, '2024-01-10 08:41:25'),
(321, '38-6', 38, 'Completion of Interior ,Bathrooms and Doors', '625000.00', '2022-03-16', 7, '2024-01-10 08:41:25'),
(322, '38-7', 38, 'Handing Over', '1250000.00', '2022-11-01', 7, '2024-01-10 08:41:25'),
(323, '39-0', 39, 'Reservation Fee', '1000000.00', '2020-09-18', 7, '2024-01-10 09:24:54'),
(324, '39-1', 39, 'Signing the Sales & Purchase Agreement', '3750000.00', '2021-05-10', 7, '2024-01-10 09:24:54'),
(325, '39-2', 39, 'Commencement', '1250000.00', '2021-06-09', 7, '2024-01-10 09:24:54'),
(326, '39-3', 39, 'Completion - Foundation Level', '1875000.00', '2021-08-18', 7, '2024-01-10 09:24:54'),
(327, '39-4', 39, 'Completion - 1st Floor Slab', '1875000.00', '2021-10-27', 7, '2024-01-10 09:24:54'),
(328, '39-5', 39, 'Completion - Roof work', '875000.00', '2022-01-05', 7, '2024-01-10 09:24:54'),
(329, '39-6', 39, 'Completion of Interior ,Bathroom and Doors', '625000.00', '2022-03-16', 7, '2024-01-10 09:24:54'),
(330, '39-7', 39, 'handing Over', '1250000.00', '2022-11-01', 7, '2024-01-10 09:24:54'),
(331, '40-0', 40, 'Reservation Fee', '1000000.00', '2020-09-18', 7, '2024-01-12 03:49:40'),
(332, '40-1', 40, 'Signing the Sales & Purchase Agreement', '2790000.00', '2021-05-10', 7, '2024-01-12 03:49:40'),
(333, '40-2', 40, 'Commencement', '930000.00', '2021-06-09', 7, '2024-01-12 03:49:40'),
(334, '40-3', 40, 'Completion - Foundation Level', '1395000.00', '2021-08-18', 7, '2024-01-12 03:49:40'),
(335, '40-4', 40, 'Completion - 1st Floor Slab', '1395000.00', '2021-10-27', 7, '2024-01-12 03:49:40'),
(336, '40-5', 40, 'Completion - Roof work', '395000.00', '2022-01-05', 7, '2024-01-12 03:49:40'),
(337, '40-6', 40, 'Completion Interior ,Bathrooms and Doors', '465000.00', '2022-03-16', 7, '2024-01-12 03:49:40'),
(338, '40-7', 40, 'Handing Over', '930000.00', '2022-12-31', 7, '2024-01-12 03:49:40'),
(339, '41-0', 41, 'Reservation Fee', '1000000.00', '2020-09-18', 7, '2024-01-12 04:34:53'),
(340, '41-1', 41, 'Signing the Sales & Purchase Agreement', '2970000.00', '2021-05-10', 7, '2024-01-12 04:34:53'),
(341, '41-2', 41, 'Commencement', '990000.00', '2021-06-09', 7, '2024-01-12 04:34:53'),
(342, '41-3', 41, 'Completion - Foundation Level', '1485000.00', '2021-08-18', 7, '2024-01-12 04:34:53'),
(343, '41-4', 41, 'Completion - 1st Floor Slab', '1485000.00', '2021-10-27', 7, '2024-01-12 04:34:53'),
(344, '41-5', 41, 'Completion - Roof work', '485000.00', '2022-01-05', 7, '2024-01-12 04:34:53'),
(345, '41-6', 41, 'Completion Interior ,Bathrooms and  Doors', '495000.00', '2022-03-16', 7, '2024-01-12 04:34:53'),
(346, '41-7', 41, 'Handing Over', '990000.00', '2022-12-31', 7, '2024-01-12 04:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `payment_plan_detail`
--

CREATE TABLE `payment_plan_detail` (
  `plan_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `reservation_fee` decimal(10,2) DEFAULT NULL,
  `downpayment` decimal(10,2) DEFAULT NULL,
  `downpaymentdue` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(256) NOT NULL,
  `project_location` varchar(256) NOT NULL,
  `project_description` text NOT NULL,
  `project_status` int(11) NOT NULL,
  `project_createby` int(11) NOT NULL,
  `project_createdate` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_location`, `project_description`, `project_status`, `project_createby`, `project_createdate`, `company_id`) VALUES
(1, 'Cluster Apartment', 'Ja-Ela', 'Central Park', 0, 7, '2023/12/16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_units`
--

CREATE TABLE `project_units` (
  `unit_id` int(11) NOT NULL,
  `unit_Name` varchar(256) NOT NULL,
  `unit_Description` text NOT NULL,
  `unit_Size` varchar(50) NOT NULL,
  `unit_Price` varchar(256) NOT NULL,
  `company_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `unit_status` int(11) NOT NULL,
  `unit_createby` int(11) NOT NULL,
  `unit_createdate` varchar(50) NOT NULL,
  `Unit_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_units`
--

INSERT INTO `project_units` (`unit_id`, `unit_Name`, `unit_Description`, `unit_Size`, `unit_Price`, `company_id`, `project_id`, `unit_status`, `unit_createby`, `unit_createdate`, `Unit_delete`) VALUES
(2, 'A1', 'GF - 3BR', '1047.40', '12300000', 1, 1, 1, 7, '2023/12/16', 0),
(3, 'A2', 'GF-3BR', '1047.40', '12500000', 1, 1, 1, 7, '2023/12/19', 0),
(4, 'A3', '1FL-2BRS', '767.0', '11800000', 1, 1, 1, 7, '2023/12/20', 0),
(5, 'A4', '1FL-2BRL', '1023.0', '12900000', 1, 1, 1, 7, '2023/12/23', 0),
(6, 'A5', '1FL-2BRS', '767.0', '12300000', 1, 1, 1, 7, '2023/12/23', 0),
(7, 'A6', '1FL-2BRS', '767.0', '12200000', 1, 1, 1, 7, '2023/12/27', 0),
(8, 'B1', 'GF-3BR', '1047.4', '19250000', 1, 1, 0, 7, '2023/12/27', 0),
(9, 'B2', 'GF-3BR', '983.0', '12500000', 1, 1, 1, 7, '2023/12/27', 0),
(10, 'B3', '1FL-3BRS', '767.0', '11800000', 1, 1, 1, 7, '2023/12/27', 0),
(11, 'B4', '1FL-2BRS', '824.4', '12400000', 1, 1, 1, 7, '2023/12/27', 0),
(12, 'B5', '1FL-2BRS', '767.0', '9300000', 1, 1, 1, 7, '2023/12/27', 0),
(13, 'C1', 'GF-3BR', '1047.40', '15500000', 1, 1, 1, 7, '2023/12/29', 0),
(14, 'C2', 'GF-3BR', '1047.40', '12500000', 1, 1, 1, 7, '2023/12/29', 0),
(15, 'C3', '1FL-2BRS', '767.0', '8700000', 1, 1, 1, 7, '2023/12/29', 0),
(17, 'C5', '1FL-2BRS', '767.0', '9300000', 1, 1, 1, 7, '2023/12/29', 0),
(18, 'D2', 'GF-3BR', '1047.40', '13300000', 1, 1, 1, 7, '2023/12/30', 0),
(19, 'D5', '1FL-2BRS', '767.0', '12800000', 1, 1, 1, 7, '2023/12/30', 0),
(20, 'D1', 'GF-3BR', '1047.4', '13000000', 1, 1, 1, 7, '2023/12/30', 0),
(21, 'D6', '1FL-2BRS', '824.4', '11400000', 1, 1, 1, 7, '2023/12/30', 0),
(22, 'D3', '1FL-2BRL', '767.0', '11800000', 1, 1, 1, 7, '2023/12/30', 0),
(23, 'E6', '1FL-2BRS', '824.4', '11400000', 1, 1, 1, 7, '2023/12/30', 0),
(24, 'E4', '1FL-2BRL', '824.4', '14400000', 1, 1, 1, 7, '2023/12/30', 0),
(25, 'E2', 'GF-3BR', '1047.4', '11900000', 1, 1, 1, 7, '2023/12/30', 0),
(26, 'E1', 'GF-3BR', '1047.40', '12500000', 1, 1, 1, 7, '2023/12/30', 0),
(27, 'E5', '1FL-2BRS', '767.0', '12300000', 1, 1, 1, 7, '2023/12/30', 0),
(28, 'F1', 'GF-3BR', '1047.4', '12500000', 1, 1, 1, 7, '2024/01/01', 0),
(29, 'F2', 'GF-3BR', '1047.40', '12500000', 1, 1, 1, 7, '2024/01/01', 0),
(30, 'F3', '1FL-2BRS', '767.0', '9300000', 1, 1, 1, 7, '2024/01/01', 0),
(31, 'F4', '1FL-2BRS', '824.4', '9900000', 1, 1, 1, 7, '2024/01/01', 0),
(32, 'F5', '1FL-2BRS', '767.0', '9300000', 1, 1, 0, 7, '2024/01/01', 0),
(33, 'F6', '1FL-2BRS', '824.4', '9900000', 1, 1, 0, 7, '2024/01/01', 0),
(34, 'G1', 'GF-3BR', '983.0', '12500000', 1, 1, 0, 7, '2024/01/01', 0),
(35, 'G2', 'GF-3BR', '983.0', '12500000', 1, 1, 0, 7, '2024/01/01', 0),
(36, 'G3', '1FL-2BRS', '767.0', '8800000', 1, 1, 0, 7, '2024/01/01', 0),
(37, 'G4', '1FL-2BRS', '824.4', '9900000', 1, 1, 0, 7, '2024/01/01', 0),
(38, 'G5', '1FL-2BRS', '767.0', '12300000', 1, 1, 0, 7, '2024/01/01', 0),
(39, 'G6', '1FL-2BRS', '824.4', '12400000', 1, 1, 0, 7, '2024/01/01', 0),
(40, 'H1', 'GF-3BR', '1047.40', '12500000', 1, 1, 0, 7, '2024/01/01', 0),
(41, 'H2', 'GF-3BR', '1047.40', '12500000', 1, 1, 0, 7, '2024/01/01', 0),
(42, 'H3', '1FL-2BRS', '767.0', '15300000', 1, 1, 0, 7, '2024/01/01', 0),
(43, 'H5', '1FL-2BRS', '968.0', '12300000', 1, 1, 0, 7, '2024/01/01', 0),
(44, 'H6', '1FL-2BRS', '824.4', '12400000', 1, 1, 0, 7, '2024/01/01', 0),
(45, 'I1', 'GF-3BR', '1047.4', '14253500', 1, 1, 0, 7, '2024/01/01', 0),
(46, 'I2', 'GF-3BR', '1047.40', '14253500', 1, 1, 0, 7, '2024/01/01', 0),
(47, 'I3', '1FL-2BRS', '767.0', '16200000', 1, 1, 0, 7, '2024/01/01', 0),
(48, 'C6', '1FL-2BRS', '824.4', '12900000', 1, 1, 0, 7, '2024/01/03', 0),
(49, 'C4', '1FL-2BRS', '1023.0', '12400000', 1, 1, 1, 7, '2024/01/08', 0),
(50, 'E3', '1FL-2BRS', '968.0', '11700000', 1, 1, 1, 7, '2024/01/09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Customer_idS` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `sale_date` date NOT NULL,
  `sale_unit_price` decimal(65,0) NOT NULL,
  `sale_unit_discount_price` varchar(256) NOT NULL,
  `sale_unit_discount_price_presentage` varchar(256) NOT NULL,
  `selling_price` decimal(65,0) NOT NULL,
  `sale_crate_bate` varchar(256) NOT NULL,
  `sale_by` int(11) NOT NULL,
  `sale_crate_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `Customer_id`, `Customer_idS`, `project_id`, `unit_id`, `sale_date`, `sale_unit_price`, `sale_unit_discount_price`, `sale_unit_discount_price_presentage`, `selling_price`, `sale_crate_bate`, `sale_by`, `sale_crate_by`) VALUES
(5, 1, 0, 1, 2, '2020-12-16', '12300000', '0', '0', '12300000', '22-12-2023', 8, 7),
(8, 4, 0, 1, 4, '2020-09-20', '11800000', '0', '0', '11800000', '23-12-2023', 9, 7),
(9, 5, 0, 1, 5, '2021-01-05', '12900000', '0', '0', '12900000', '23-12-2023', 10, 7),
(10, 2, 3, 1, 3, '2020-12-20', '12500000', '0', '0', '12500000', '23-12-2023', 9, 7),
(14, 11, 0, 1, 12, '2020-12-28', '9300000', '0', '0', '9300000', '30-12-2023', 18, 7),
(15, 8, 0, 1, 9, '2020-12-23', '12500000', '0', '0', '12500000', '30-12-2023', 9, 7),
(16, 9, 0, 1, 10, '2020-09-21', '11800000', '0', '0', '11800000', '02-01-2024', 10, 7),
(17, 10, 0, 1, 11, '2020-09-21', '12400000', '0', '0', '12400000', '02-01-2024', 10, 7),
(18, 13, 14, 1, 14, '2021-01-04', '12500000', '0', '0', '12500000', '03-01-2024', 13, 7),
(19, 16, 0, 1, 15, '2020-10-02', '8700000', '0', '0', '8700000', '03-01-2024', 10, 7),
(20, 17, 0, 1, 16, '2020-10-19', '9400000', '0', '0', '9400000', '03-01-2024', 9, 7),
(21, 22, 0, 1, 19, '2021-01-08', '12800000', '0', '0', '12800000', '03-01-2024', 9, 7),
(22, 24, 25, 1, 26, '2021-01-01', '12500000', '0', '0', '12500000', '03-01-2024', 10, 7),
(23, 26, 0, 1, 25, '2000-10-01', '11900000', '0', '0', '11900000', '04-01-2024', 9, 7),
(24, 6, 0, 1, 6, '2023-12-23', '12300000', '0', '0', '12300000', '05-01-2024', 11, 7),
(25, 7, 0, 1, 7, '2020-10-07', '12200000', '0', '0', '12200000', '06-01-2024', 11, 7),
(26, 15, 0, 1, 13, '2021-01-05', '15500000', '0', '0', '15500000', '06-01-2024', 11, 7),
(27, 17, 0, 1, 49, '2020-10-19', '12400000', '0', '0', '12400000', '08-01-2024', 9, 7),
(28, 18, 0, 1, 17, '2020-12-29', '9300000', '0', '0', '9300000', '08-01-2024', 14, 7),
(29, 3, 2, 1, 20, '2021-01-12', '13000000', '0', '0', '13000000', '08-01-2024', 9, 7),
(30, 19, 20, 1, 18, '2021-01-12', '13300000', '0', '0', '13300000', '08-01-2024', 11, 7),
(31, 21, 0, 1, 22, '2021-01-06', '11800000', '0', '0', '11800000', '09-01-2024', 8, 7),
(32, 22, 0, 1, 19, '2021-01-08', '12800000', '0', '0', '12800000', '09-01-2024', 9, 7),
(33, 23, 58, 1, 21, '2021-02-13', '11400000', '0', '0', '11400000', '09-01-2024', 9, 7),
(34, 27, 28, 1, 50, '2020-10-02', '11700000', '0', '0', '11700000', '09-01-2024', 9, 7),
(35, 29, 0, 1, 24, '2021-03-03', '14400000', '0', '0', '14400000', '09-01-2024', 10, 7),
(36, 30, 0, 1, 27, '2021-01-05', '12300000', '0', '0', '12300000', '09-01-2024', 8, 7),
(37, 31, 0, 1, 23, '2021-02-23', '11400000', '0', '0', '11400000', '10-01-2024', 16, 7),
(38, 32, 0, 1, 28, '2021-01-29', '12500000', '0', '0', '12500000', '10-01-2024', 15, 7),
(39, 33, 0, 1, 29, '2021-01-29', '12500000', '0', '0', '12500000', '10-01-2024', 15, 7),
(40, 33, 0, 1, 30, '2021-01-29', '9300000', '0', '0', '9300000', '12-01-2024', 15, 7),
(41, 33, 0, 1, 31, '2021-01-29', '9900000', '0', '0', '9900000', '12-01-2024', 15, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_id` int(11) NOT NULL,
  `U_Title` varchar(10) NOT NULL,
  `U_FName` varchar(256) NOT NULL,
  `U_LName` varchar(256) NOT NULL,
  `U_Email` varchar(256) NOT NULL,
  `U_Contact` varchar(50) NOT NULL,
  `U_Designation` varchar(256) NOT NULL,
  `U_Type` int(11) NOT NULL,
  `U_Password` varchar(256) NOT NULL,
  `U_Status` int(11) NOT NULL,
  `U_Cratedby` int(11) NOT NULL,
  `U_CratedDate` varchar(256) NOT NULL,
  `u_Image` text NOT NULL,
  `pw_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `U_Title`, `U_FName`, `U_LName`, `U_Email`, `U_Contact`, `U_Designation`, `U_Type`, `U_Password`, `U_Status`, `U_Cratedby`, `U_CratedDate`, `u_Image`, `pw_status`) VALUES
(1, 'Mr.', 'Dushmantha', 'Weerasinghe', 'developer@link.lk', '77123456789', 'Group Manager - IT & Web Application Design', 0, '$2y$10$oktw6Z9xTuL71mOwDvkd8OnQl00RguBJ5eUPvUp9EFY4XCBHvJ/Xu', 0, 1, '', 'Dush.jpg', 1),
(5, 'Mrs.', 'Shashika', 'Perera ', 'shashika@kelsey.lk', '777429272', 'Senior Manager - Customer Relations & Sales Administration', 0, '$2y$10$dXaVieZhQa7udwRJkG/VlOL8yhJ2AOebH5IvqPWR2N2f75tmSv83W', 0, 1, '', 'u_Image', 1),
(6, 'Mr.', 'Shevon', 'Perera', 'developer@blueocean.lk', '761383470', 'IT Head', 0, '$2y$10$cI9HGsUnBY1jRpAcEiipoecagLwByuhYJ6LE10HIEf35uU.dRYN.2', 0, 1, '', 'u_Image', 1),
(7, 'Mrs.', 'Gimhani', 'Peiris', 'gmarketing@blueocean.lk', '123', '123', 0, '$2y$10$pYWT02lbgxM8Jbpzqam.muUh/Q2W5b29UKvSInRerMD9IwJUs3XPC', 0, 1, '2023/12/20', 'u_Image', 1),
(8, '', 'Kausigan', '', '', '', '', 1, '', 0, 1, '', '', 1),
(9, '', 'Sameera', '', '', '', '', 1, '', 0, 1, '', '', 1),
(10, '', 'Ram', '', '', '', '', 1, '', 0, 1, '', '', 1),
(11, '', 'Mahasen', '', '', '', '', 1, '', 0, 1, '', '', 1),
(12, '', 'Ishan', '', '', '', '', 1, '', 0, 1, '', '', 1),
(13, '', 'Geeshika', '', '', '', '', 1, '', 0, 1, '', '', 1),
(14, '', 'Kevin', '', '', '', '', 1, '', 0, 1, '', '', 1),
(15, '', 'Jude', '', '', '', '', 1, '', 0, 1, '', '', 1),
(16, '', 'Ajith', '', '', '', '', 1, '', 0, 1, '', '', 1),
(17, '', 'Christus', '', '', '', '', 1, '', 0, 1, '', '', 1),
(18, '', 'Shiraz', '', '', '', '', 1, '', 0, 1, '', '', 1),
(19, '', 'Sanjay', '', '', '', '', 1, '', 0, 1, '', '', 1),
(20, '', 'Eshanga', '', '', '', '', 1, '', 0, 1, '', '', 1),
(21, '', 'Harrison', '', '', '', '', 1, '', 0, 1, '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `sale_id` (`sale_id`),
  ADD KEY `payments_ibfk_1` (`payment_add_by`);

--
-- Indexes for table `payment_plan`
--
ALTER TABLE `payment_plan`
  ADD PRIMARY KEY (`plan_id`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indexes for table `payment_plan_detail`
--
ALTER TABLE `payment_plan_detail`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_units`
--
ALTER TABLE `project_units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `sales_ibfk_1` (`project_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `sale_crate_by` (`sale_crate_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `payment_plan`
--
ALTER TABLE `payment_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `payment_plan_detail`
--
ALTER TABLE `payment_plan_detail`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_units`
--
ALTER TABLE `project_units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`payment_add_by`) REFERENCES `user` (`U_id`);

--
-- Constraints for table `payment_plan`
--
ALTER TABLE `payment_plan`
  ADD CONSTRAINT `payment_plan_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
