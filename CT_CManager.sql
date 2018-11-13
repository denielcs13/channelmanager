-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2018 at 12:09 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CT_CManager`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm`
--

CREATE TABLE `ch_cm` (
  `id` int(11) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `master_id` varchar(5) NOT NULL,
  `hotel_name` varchar(500) NOT NULL,
  `hotel_desc` text NOT NULL,
  `website` varchar(500) NOT NULL,
  `star_category` int(11) NOT NULL,
  `hotel_logo` varchar(100) NOT NULL,
  `hotel_image` varchar(100) NOT NULL,
  `timing` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_active` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '0',
  `channel_manager` int(11) NOT NULL DEFAULT '0',
  `tripadvisor` int(11) NOT NULL DEFAULT '0',
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `child_consider` varchar(10) NOT NULL,
  `lattitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `altemailid` varchar(255) NOT NULL,
  `alt_mobile` varchar(15) NOT NULL,
  `landline` varchar(20) NOT NULL,
  `altlandline` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `tax_type` int(11) NOT NULL DEFAULT '1',
  `property_policy` text NOT NULL,
  `htl_facility` text NOT NULL,
  `TnC` text NOT NULL,
  `theme_layout` varchar(30) NOT NULL,
  `h_brand` varchar(30) NOT NULL,
  `h_color` varchar(30) NOT NULL,
  `sidebar_color` varchar(30) NOT NULL,
  `sidbar_theme` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_cm`
--

INSERT INTO `ch_cm` (`id`, `user_id`, `master_id`, `hotel_name`, `hotel_desc`, `website`, `star_category`, `hotel_logo`, `hotel_image`, `timing`, `name`, `email`, `mobile`, `username`, `password`, `admin_active`, `active`, `channel_manager`, `tripadvisor`, `city`, `state`, `country`, `address`, `landmark`, `zipcode`, `child_consider`, `lattitude`, `longitude`, `altemailid`, `alt_mobile`, `landline`, `altlandline`, `reg_date`, `nationality`, `currency`, `tax_type`, `property_policy`, `htl_facility`, `TnC`, `theme_layout`, `h_brand`, `h_color`, `sidebar_color`, `sidbar_theme`) VALUES
(1, '1', '', 'corbett fun Resort', '', 'http://www.corbettfunresort.in/', 0, '', '', '2018-08-20 06:20:53', 'Rahul Pathak', 'corbettfunresortramnagar@gmail.com', '8475833337', 'corbettfunresort', 'a82ce3ffe348252c1db3bad1a894d528', 0, 0, 0, 0, 'null', 'Select Sta', '1', '', '', '', '', '', '', '', '', '', '', '2018-08-05', 'National', '', 0, '', '', '', '', '', '', '', ''),
(2, '1', '', 'Hotel Padmini Palace', '', 'http://www.hotelpadminipalace.co.in/', 0, '', '', '2018-10-16 06:39:20', 'Dayanidhi Sharma', 'info@hotelpadminipalace.co.in', '7827136228', 'hppalace', 'b82289d1cb14da00a24de40fa7b4a648', 0, 0, 0, 0, '7', '10', '1', '', '', '', '', '', '', '', '', '', '', '2018-08-08', 'National', '', 0, '', '', '', '', '', '', '', ''),
(3, '1', '', 'Orient Taj', 'Orient Taj is beautiful hotel in the city of Taj, has been built on 14 acres of land with a large frontage. A beautiful hotel property inspired by the intricacy of Mughal architecture with splendid display of terraced lawns, fountains and ancient interiors that takes you back to an era of emperors and princes with the modern facilities.', 'http://www.orienttaj.com/', 1, 'logo_3188200707441534772265.png', 'hotel_3188200707441534772265.jpg', '2018-08-21 09:23:30', 'Vikas', 'reservations@orienttaj.com', '9258323810', 'orienttaj', 'fc355ca3ddbfefbc2539575d39bbf619', 1, 1, 0, 0, '114', '12', '1', 'Orient Taj, Fatehabad Road  &-', 'agra', '223007', '6', '27.2003932', '78.0142134', '', '', '', '', '2018-08-09', 'National', 'inr', 1, '', '', '', 'left', 'logo-green', 'header-indigo', 'indigo', '2'),
(4, '1', '', 'Olive Lodge Black Pool', '', 'http://olivelodgeblackpool.com/', 0, '', '', '2018-08-20 06:21:04', 'Malek', 'olivelodgeblackpool@gmail.com', '7930004222', 'olivelbpool', '93ba795cddf4537347c25128b0627782', 1, 0, 0, 0, '625', '37', '37', '', '', '', '', '', '', '', '', '', '', '2018-08-10', 'International', '', 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_bookings`
--

CREATE TABLE `ch_cm_bookings` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_mobile` varchar(15) NOT NULL,
  `cus_details` text NOT NULL,
  `special_request` text NOT NULL,
  `hotel_id` varchar(10) NOT NULL,
  `room_id` varchar(100) NOT NULL,
  `rate_plan` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `cus_data` text NOT NULL,
  `can_policy` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_rooms` varchar(15) NOT NULL,
  `be_status` int(11) DEFAULT '0',
  `mail_structure` text NOT NULL,
  `booking_amount` varchar(100) NOT NULL,
  `final_paymet` varchar(100) NOT NULL,
  `discounted_amount` varchar(100) NOT NULL,
  `tax` varchar(20) NOT NULL,
  `be_date` date NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `bank_id` varchar(10) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_booking_rooms`
--

CREATE TABLE `ch_cm_booking_rooms` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(20) NOT NULL,
  `room_id` int(11) NOT NULL,
  `no_adults` int(11) NOT NULL,
  `childrean` int(11) NOT NULL,
  `rm_status` int(11) NOT NULL DEFAULT '1',
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `rm_mealplan` varchar(10) NOT NULL,
  `no_rooms` int(11) NOT NULL,
  `hotel_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_cancellation`
--

CREATE TABLE `ch_cm_cancellation` (
  `id` int(11) NOT NULL,
  `cancellation` varchar(10) NOT NULL,
  `days` varchar(10) NOT NULL,
  `htl_id` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_customer`
--

CREATE TABLE `ch_cm_customer` (
  `c_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `reg_date` date NOT NULL,
  `img` varchar(100) NOT NULL,
  `about_me` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_discount`
--

CREATE TABLE `ch_cm_discount` (
  `id` int(11) NOT NULL,
  `discount_type` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `htl_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_cm_discount`
--

INSERT INTO `ch_cm_discount` (`id`, `discount_type`, `start_date`, `end_date`, `htl_id`, `status`, `start_time`, `end_time`) VALUES
(1, 'test', '2018-08-08', '2018-08-29', 1, 1, '07:28:00', '21:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_documents`
--

CREATE TABLE `ch_cm_documents` (
  `h_d` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `htl_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_link`
--

CREATE TABLE `ch_cm_link` (
  `id` int(11) NOT NULL,
  `htl_id` varchar(10) NOT NULL,
  `link` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_ota`
--

CREATE TABLE `ch_cm_ota` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL,
  `room_mapping` varchar(100) NOT NULL,
  `rate_mapping` varchar(100) NOT NULL,
  `inventory_update` varchar(50) NOT NULL,
  `rate_update` varchar(50) NOT NULL,
  `get_rate` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_cm_ota`
--

INSERT INTO `ch_cm_ota` (`id`, `name`, `img`, `link`, `room_mapping`, `rate_mapping`, `inventory_update`, `rate_update`, `get_rate`) VALUES
(1, 'Self', '', '', '', '', 'c2shub.php', 'c2shub.php', 'c2shub.php'),
(2, 'Trip Karenge', '', '', 'tripkarenge.php', 'tripkarenge.php', 'tripkarenge.php', 'tripkarenge.php', 'tripkarenge.php'),
(3, 'Go-MMT', '', '', 'go-mmt.php', 'go-mmt.php', 'go-mmt.php', 'go-mmt.php', 'go-mmt.php'),
(4, 'Booking.com', '', '', 'booking.com.php', 'booking.com.php', 'booking.com.php', 'booking.com.php', 'booking.com.php'),
(5, 'Expedia', '', '', 'expedia.php', 'expedia.php', 'expedia.php', 'expedia.php', 'expedia.php'),
(6, 'Desiya', '', '', 'desiya.php', 'desiya.php', 'desiya.php', 'desiya.php', 'desiya.php'),
(7, 'Via', '', '', 'via.php', 'via.php', 'via.php', 'via.php', 'via.php'),
(8, 'Agoda', '', '', 'agoda.php', 'agoda.php', 'agoda.php', 'agoda.php', 'agoda.php'),
(9, 'Trivago', '', '', '', '', '', '', ''),
(10, 'Hostel World', '', '', 'hostelworld.php', 'hostelworld.php', 'hostelworld.php', 'hostelworld.php', 'hostelworld.php'),
(11, 'Air Bnb', '', '', 'airbnb.php', 'airbnb.php', 'airbnb.php', 'airbnb.php', 'airbnb.php'),
(13, 'Ghumo', '', '', '', '', '', '', ''),
(14, 'Trip Villas', '', '', '', '', '', '', ''),
(12, 'kaya', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_partner`
--

CREATE TABLE `ch_cm_partner` (
  `p_id` int(11) NOT NULL,
  `htl_id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_paymentgateway`
--

CREATE TABLE `ch_cm_paymentgateway` (
  `id` int(11) NOT NULL,
  `htl_id` varchar(10) NOT NULL,
  `gateway_name` varchar(100) NOT NULL,
  `merchant_id` varchar(100) NOT NULL,
  `secret_id` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `access_key` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_room`
--

CREATE TABLE `ch_cm_room` (
  `id` int(11) NOT NULL,
  `htl_id` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_desciption` longtext NOT NULL,
  `min_occupancy` varchar(5) NOT NULL,
  `max_occupancy` varchar(10) NOT NULL DEFAULT '0',
  `ext_bed` varchar(10) NOT NULL DEFAULT '0',
  `child_allowed` int(11) NOT NULL DEFAULT '0',
  `max_child` varchar(10) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `child_cost` varchar(100) NOT NULL,
  `default_cost` varchar(100) NOT NULL,
  `default_extbed_cost` varchar(10) NOT NULL,
  `room_count` varchar(10) NOT NULL,
  `rateplan` varchar(10) NOT NULL,
  `room_facility` varchar(150) NOT NULL,
  `room_amenities` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_room_slider`
--

CREATE TABLE `ch_cm_room_slider` (
  `id` int(11) NOT NULL,
  `htl_id` varchar(100) NOT NULL,
  `thumbnail_image` varchar(500) NOT NULL,
  `orignal_image` varchar(500) NOT NULL,
  `room_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_slider`
--

CREATE TABLE `ch_cm_slider` (
  `s_id` int(11) NOT NULL,
  `thub_img` varchar(100) NOT NULL,
  `real_img` varchar(100) NOT NULL,
  `s_htl_id` int(11) NOT NULL,
  `h1` varchar(100) NOT NULL,
  `h2` varchar(100) NOT NULL,
  `h3` varchar(100) NOT NULL,
  `h4` varchar(100) NOT NULL,
  `h5` varchar(100) NOT NULL,
  `h6` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_socila_link`
--

CREATE TABLE `ch_cm_socila_link` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `htl_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_taxes`
--

CREATE TABLE `ch_cm_taxes` (
  `id` int(11) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `from` bigint(4) NOT NULL,
  `between` bigint(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `htl_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_testimonials`
--

CREATE TABLE `ch_cm_testimonials` (
  `t_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `rating` int(11) NOT NULL,
  `testimonials` text NOT NULL,
  `htl_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ch_cm_user`
--

CREATE TABLE `ch_cm_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `reg_date` date NOT NULL,
  `logo` varchar(100) NOT NULL,
  `feb_icon` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT '0',
  `theme_layout` varchar(20) NOT NULL,
  `h_brand` varchar(30) NOT NULL,
  `h_color` varchar(30) NOT NULL,
  `sidebar_color` varchar(30) NOT NULL,
  `sidbar_theme` varchar(30) NOT NULL,
  `access` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch_cm_user`
--

INSERT INTO `ch_cm_user` (`id`, `name`, `email`, `mobile`, `username`, `password`, `status`, `reg_date`, `logo`, `feb_icon`, `admin_status`, `theme_layout`, `h_brand`, `h_color`, `sidebar_color`, `sidbar_theme`, `access`) VALUES
(1, 'C2S HUB', 'info@c2shub.com', '8587000514', 'c2shub', '040a2877d4062f0b14004474ba7bd94f', 1, '2018-08-06', 'http://demo.c2shub.com/channelmanager/assets/img/logo.png', 'http://demo.c2shub.com/channelmanager/assets/img/logo.png', 1, 'left', 'logo-green', 'header-indigo', 'dark', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `state_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `state_id`) VALUES
(1, 'Havelock Island', '1'),
(2, 'Neil Island', '1'),
(3, 'Nicobar Island', '1'),
(4, 'Port Blair', '1'),
(5, 'Ross Island', '1'),
(6, 'Haridwar', '10'),
(7, 'Dehradun', '10'),
(8, 'RishiKesh', '10'),
(9, 'Mussoorie', '10'),
(10, 'Haldwani', '10'),
(11, 'Roorkee', '10'),
(12, 'Nainital', '10'),
(13, 'Kashipur', '10'),
(14, 'Rudhrapur', '10'),
(15, 'Kotdwar', '10'),
(16, 'Shrinagar', '10'),
(17, 'Tehri', '10'),
(18, 'Almora', '10'),
(19, 'Gangotri', '10'),
(20, 'Ranikhet', '10'),
(21, 'Badrinath', '10'),
(22, 'Kedarnath', '10'),
(23, 'Bhimtal', '10'),
(24, 'Pithoragard', '10'),
(25, 'Ramnagar', '10'),
(26, 'Jyotimath', '10'),
(27, 'Chamoli Gopeshwar', '10'),
(28, 'Lansedown', '10'),
(29, 'Chakarta', '10'),
(30, 'Devprayag', '10'),
(31, 'Lohagat', '10'),
(32, 'Rudhraprayag', '10'),
(33, 'Pauri', '10'),
(34, 'Bhowali', '10'),
(35, 'Kamaprayag', '10'),
(36, 'Kichha', '10'),
(37, 'Sitarganj', '10'),
(38, 'Barkot', '10'),
(39, 'Narendra Nagar', '10'),
(40, 'Darchula', '10'),
(41, 'Jaspur', '10'),
(42, 'Khatima', '10'),
(43, 'Chamba', '10'),
(44, 'Kathgodam', '10'),
(45, 'Laksar', '10'),
(46, 'DidiHat', '10'),
(47, 'Kausani', '10'),
(48, 'Dwarahat', '10'),
(49, 'Nandaprayag', '10'),
(50, 'Vikasnagar', '10'),
(51, 'Pantnagar', '10'),
(52, 'Kaladhungi', '10'),
(53, 'Auli', '10'),
(54, 'Bilaspur', '9'),
(55, 'Chamba', '9'),
(56, 'Hamirpur', '9'),
(57, 'Kangra', '9'),
(58, 'Kinnaur', '9'),
(59, 'Kullu', '9'),
(60, 'Lahaul and Spiti', '9'),
(61, 'Mandi', '9'),
(62, 'Shimla', '9'),
(63, 'Sirmaur', '9'),
(64, 'Solan', '9'),
(65, 'Una', '9'),
(66, 'Dharamsala', '9'),
(67, 'nahan', '9'),
(68, 'Manali', '9'),
(69, 'kasauli', '9'),
(70, 'Dalhausie', '9'),
(71, 'Parwanoo', '9'),
(72, 'Palampur', '9'),
(73, 'Sundar Nagar', '9'),
(74, 'Paonta Sahib', '9'),
(75, 'Nalagarh', '9'),
(76, 'Jogindernath', '9'),
(77, 'Nurpur', '9'),
(78, 'Nainadevi', '9'),
(79, 'Theog', '9'),
(80, 'Khajjiyar', '9'),
(81, 'Nadaun', '9'),
(82, 'Arki', '9'),
(83, 'Naggar', '9'),
(84, 'Tira Sujanpur', '9'),
(85, 'Rohru', '9'),
(86, 'Ghumarwin', '9'),
(87, 'Rampur', '9'),
(88, 'Rajgarh', '9'),
(89, 'Jawalamukhi', '9'),
(90, 'Banjar', '9'),
(91, 'Keylong', '9'),
(92, 'Sarkaghat', '9'),
(93, 'Narkanda', '9'),
(94, 'Jubbal', '9'),
(95, 'Pathanjot', '9'),
(96, 'Kalpa', '9'),
(97, 'Recklong Peo', '9'),
(98, 'Bhuntar', '9'),
(99, 'Dera Gopipur', '9'),
(100, 'Nagrota Bhagwan', '9'),
(101, 'Dagshai', '9'),
(102, 'Rewalsar', '9'),
(103, 'Palampur', '9'),
(104, 'Sundar Nagar', '9'),
(105, 'Paonta Sahib', '9'),
(106, 'Nalagarh', '9'),
(107, 'Sabhatu', '9'),
(108, 'Mashobra', '9'),
(109, 'Puttaparthi', '2'),
(110, 'Mahabaleshwar', '11'),
(111, 'Pune', '11'),
(112, 'Navi Mumbai', '11'),
(113, 'Hyderabad', '2'),
(114, 'Agra', '12'),
(115, 'Lucknow', '12'),
(116, 'Noida', '12'),
(117, 'Greater Noida', '12'),
(118, 'Surat', '13'),
(119, 'Ahmedabad', '13'),
(120, 'Vadodara', '13'),
(121, 'Rajkot', '13'),
(122, 'Bhavnagar', '13'),
(123, 'Bhuj', '13'),
(125, 'Gandhinagar', '13'),
(126, 'Porbandar', '13'),
(127, 'Panchmahal', '13'),
(128, 'Patan', '13'),
(129, 'Amreli', '13'),
(130, 'Junagadh', '13'),
(131, 'Jamnagar', '13'),
(132, 'Mehsana', '13'),
(133, 'Panaji', '14'),
(134, 'Bicholim', '14'),
(135, 'Canacona', '14'),
(136, 'Curchorem', '14'),
(137, 'Mapusa', '14'),
(138, 'Margao', '14'),
(139, 'Mormugao', '14'),
(140, 'Pernem', '14'),
(141, 'Ponda', '14'),
(142, 'Quepem', '14'),
(143, 'Sanguem', '14'),
(144, 'Sanquelim', '14'),
(145, 'Valpoi', '14'),
(146, 'Srinagar', '15'),
(147, 'Jammu', '15'),
(148, 'Leh(Ladakh)', '15'),
(149, 'Udhampur', '15'),
(150, 'Rajouri', '15'),
(151, 'Kargil', '15'),
(152, 'Anantnag', '15'),
(153, 'Kupwara', '15'),
(154, 'Jamshedpur', '16'),
(155, 'Dhanbad', '16'),
(156, 'Ranchi', '16'),
(157, 'Bokaro Steel City', '16'),
(158, 'Deoghar', '16'),
(159, 'Phusro', '16'),
(160, 'Hazaribagh', '16'),
(161, 'Giridih', '16'),
(162, 'Ramgarh', '16'),
(163, 'Medininagar', '16'),
(164, 'Chirkunda', '16'),
(165, 'Mysuru', '17'),
(166, 'Raichur', '17'),
(167, 'Kolar', '17'),
(168, 'Hassan', '17'),
(169, 'Vijayapura', '17'),
(170, 'Bidar', '17'),
(171, 'Bellary', '17'),
(172, 'Belagavi', '17'),
(173, 'Bagalkot', '17'),
(174, 'Mandya', '17'),
(175, 'Yadgir', '17'),
(176, 'Thiruvananthapuram', '18'),
(177, 'Kozhikode', '18'),
(178, 'Kannur', '18'),
(179, 'Malappuram', '18'),
(180, 'Kottayam', '18'),
(181, 'Kasaragod', '18'),
(182, 'Kavaratti', '19'),
(183, 'Agatti Island', '19'),
(184, 'Amini, India', '19'),
(185, 'Andrott', '19'),
(186, 'Kadmat Island', '19'),
(187, 'Kalpeni', '19'),
(188, 'Indore', '20'),
(189, 'Bhopal', '20'),
(190, 'Jabalpur', '20'),
(191, 'Gwalior', '20'),
(192, 'Ujjain', '20'),
(193, 'Sagar', '20'),
(194, 'Dewas', '20'),
(195, 'Ratlam', '20'),
(196, 'Rewa', '20'),
(197, 'Singrauli', '20'),
(198, 'Khandwa', '20'),
(199, 'Chhindwara', '20'),
(200, 'Shivpuri', '20'),
(201, 'Chhatarpur', '20'),
(202, 'Bishnupur', '21'),
(203, 'Thoubal', '21'),
(204, 'Imphal East', '21'),
(205, 'Imphal West', '21'),
(206, 'Senapati', '21'),
(207, 'Ukhrul', '21'),
(208, 'Chandel', '21'),
(209, 'Churachandpur', '21'),
(210, 'Tamenglong', '21'),
(211, 'Pherzawl', '21'),
(212, 'Noney', '21'),
(213, 'Kamjong', '21'),
(214, 'Tengnoupal', '21'),
(215, 'Kakching', '21'),
(216, 'Shillong', '22'),
(217, 'Pynthormukhrah', '22'),
(218, 'Mairang', '22'),
(219, 'Nongstoin', '22'),
(220, 'Aizawl', '23'),
(221, 'Kolasib', '23'),
(222, 'Lawngtlai', '23'),
(223, 'Lunglei', '23'),
(224, 'Mamit', '23'),
(225, 'Siaha', '23'),
(226, 'Serchhip', '23'),
(227, 'Champhai', '23'),
(228, 'Kohima', '24'),
(229, 'Dimapur', '24'),
(230, 'Kiphire', '24'),
(231, 'Longleng', '24'),
(232, 'Mokokchung', '24'),
(233, 'Mon', '24'),
(234, 'Peren', '24'),
(235, 'Phek', '24'),
(236, 'Tuensang', '24'),
(237, 'Wokha', '24'),
(238, 'Zunheboto', '24'),
(239, 'Bhubaneswar', '25'),
(240, 'Cuttack', '25'),
(241, 'Rourkela', '25'),
(242, 'Brahmapur', '25'),
(243, 'Sambalpur', '25'),
(244, 'Puri', '25'),
(245, 'Angul', '25'),
(246, 'Balasore', '25'),
(247, 'Bhadrak', '25'),
(248, 'Baripada', '25'),
(249, 'Barbil', '25'),
(250, 'Karaikal', '26'),
(251, 'Mahé', '26'),
(252, 'Pondicherry', '26'),
(253, 'Yanam', '26'),
(254, 'Ludhiana', '27'),
(255, 'Amritsar', '27'),
(256, 'Jalandhar', '27'),
(257, 'Patiala', '27'),
(258, 'Ludhiana', '27'),
(259, 'Amritsar', '27'),
(260, 'Jalandhar', '27'),
(261, 'Patiala', '27'),
(262, 'Mohali', '27'),
(263, 'Pathankot', '27'),
(264, 'Firozpur', '27'),
(265, 'Moga', '27'),
(266, 'Abohar', '27'),
(267, 'Malerkotla', '27'),
(268, 'Barnala', '27'),
(269, 'Jaipur', '28'),
(270, 'Jodhpur', '28'),
(271, 'Kota', '28'),
(272, 'Bikaner', '28'),
(273, 'Ajmer', '28'),
(274, 'Udaipur', '28'),
(275, 'Alwar', '28'),
(276, 'Sri Ganganagar', '28'),
(277, 'chittorgarh', '28'),
(278, 'Gangapur city', '28'),
(279, 'Sawai Madhopur', '28'),
(280, 'Jhunjhunu', '28'),
(281, 'Gangtok', '29'),
(282, 'Mangan, India', '29'),
(283, 'Namchi', '29'),
(284, 'Geyzing', '29'),
(285, 'Pelling', '29'),
(286, 'Lachung', '29'),
(287, 'Lachen', '29'),
(288, 'Ravangla', '29'),
(289, 'Chennai', '30'),
(290, 'Coimbatore', '30'),
(291, 'Madurai', '30'),
(292, 'Tiruchirappalli', '30'),
(293, 'Tiruppu', '30'),
(294, 'Salem', '30'),
(295, 'Erode', '30'),
(296, 'Vellore', '30'),
(297, 'Tirunelveli', '30'),
(298, 'Thoothukkudi', '30'),
(299, 'Nagercoil', '30'),
(300, 'Thanjavur', '30'),
(301, 'Dindigul', '30'),
(302, 'Cuddalore', '30'),
(303, 'Kanchipuram', '30'),
(304, 'Tiruvannamalai', '30'),
(305, 'Kumbakonam', '30'),
(306, 'Rajapalayam', '30'),
(307, 'Pudukottai', '30'),
(308, 'Hosur', '30'),
(309, 'Ambur', '30'),
(310, 'Karaikkudi', '30'),
(311, 'Neyveli', '30'),
(312, 'Nagapattinam', '30'),
(313, 'Hyderabad', '31'),
(314, 'Warangal', '31'),
(315, 'Nizamabad', '31'),
(316, 'Khammam', '31'),
(317, 'Karimnagar', '31'),
(318, 'Ramagundam', '31'),
(319, 'Mahbubnagar', '31'),
(320, 'Nalgonda', '31'),
(321, 'Adilabad', '31'),
(322, 'Suryapet', '31'),
(323, 'Siddipet', '31'),
(324, 'Miryalaguda', '31'),
(325, 'Agartala', '32'),
(326, 'Amarpur', '32'),
(327, 'Belonia', '32'),
(328, 'Dharmanagar', '32'),
(329, 'Kailasahar', '32'),
(330, 'Kamalpur', '32'),
(331, 'Ranirbazar', '32'),
(332, 'Jirania', '32'),
(333, 'Melaghar', '32'),
(334, 'Panisagar', '32'),
(335, 'Santirbazar', '32'),
(336, 'Sonamura', '32'),
(337, 'Kolkata', '33'),
(338, 'Darjeeling', '33'),
(339, 'Siliguri', '33'),
(340, 'Asansol', '33'),
(341, 'Durgapur', '33'),
(342, 'Bardhaman', '33'),
(343, 'Cooch Behar', '33'),
(344, 'Krishnanagar', '33'),
(345, 'Haldia', '33'),
(346, 'Malda', '33'),
(347, 'Jalpaiguri', '33'),
(348, 'Purulia', '33'),
(349, 'Daman', '35'),
(350, 'Diu? ', '35'),
(351, 'Faridabad', '36'),
(352, 'Gurgaon', '36'),
(353, 'Panipat', '36'),
(354, 'Ambala', '36'),
(355, 'Yamunanagar', '36'),
(356, 'Rohtak', '36'),
(357, 'Hisarr', '36'),
(358, 'Karnal', '36'),
(359, 'Sonipat', '36'),
(360, 'Panchkula', '36'),
(361, 'Sirsa', '36'),
(362, 'Rewari', '36'),
(363, 'Delhi', '34'),
(364, 'Najafgarh', '34'),
(365, 'Narela', '34'),
(366, 'New Delhi', '34'),
(367, 'Sultanpur Majra', '34'),
(368, 'Delhi Cantonment', '34'),
(369, 'Gokal Pur', '34'),
(370, 'Mustafabad', '34'),
(371, 'Hastsal', '34'),
(372, 'Taj Pul', '34'),
(373, 'Jaffrabad', '34'),
(374, 'Mandoli', '34'),
(375, 'Karol Bagh', '34'),
(376, 'Hauz Khas', '34'),
(379, 'Sadar Bazaar', '34'),
(380, 'Pankaj Nagar', '34'),
(381, 'Rohini', '34'),
(382, 'Patel Nagar', '34'),
(383, 'Dwarka', '34'),
(384, 'Civil Lines', '34'),
(385, 'Yamuna Vihar', '34'),
(386, 'Seemapuri', '34'),
(387, 'Vivek Vihar', '34'),
(388, 'Gandhi Nagar', '34'),
(389, 'Daryaganj', '34'),
(390, 'Mehrauli', '34'),
(391, 'Parliament Street', '34'),
(392, 'Chanakyapuri', '34'),
(395, 'Patparganj', '34'),
(396, 'Punjabi Bagh', '34'),
(397, 'Rajouri Garden', '34'),
(398, 'Janakpuri', '34'),
(399, 'Kashmere Gate', '34'),
(400, 'Defence Colony', '34'),
(401, 'Greater Kailash', '34'),
(402, 'Lajpat Nagar', '34'),
(403, 'Chandni Chowk', '34'),
(404, 'Pragati Maidan', '34'),
(405, 'Bawana', '34'),
(408, 'North Delhi', '34'),
(409, 'North West Delhi', '34'),
(410, 'West Delhi', '34'),
(412, 'South Delhi', '34'),
(413, 'South East Delhi', '34'),
(414, 'Central Delhi', '34'),
(415, 'South West Delhi', '34'),
(416, 'North East Delhi', '34'),
(417, 'Alipur', '34'),
(418, 'Kapashera', '34'),
(419, 'Model Town', '34'),
(420, 'Sarita Vihar', '34'),
(421, 'Karawal Nagar', '34'),
(422, 'BTM Bagh', '34'),
(423, 'Mumbai', '11'),
(425, 'Nagpur', '11'),
(426, 'Thane', '11'),
(427, 'Nashik', '11'),
(428, 'Pimpri-Chinchwad', '11'),
(429, 'Aurangabad', '11'),
(430, 'Solapur', '11'),
(431, 'Kalyan-Dombivali ', '11'),
(432, 'Vasai-Virar ', '11'),
(433, 'Amravati', '11'),
(434, 'Mira-Bhayandar ', '11'),
(435, 'Akola ', '11'),
(436, 'Bhiwandi-Nizampur', '11'),
(437, 'Dhule', '11'),
(438, 'Jalgaon', '11'),
(439, 'Nanded-Waghala ', '11'),
(440, 'Kolhapur', '11'),
(441, 'Latur', '11'),
(442, 'Panvel', '11'),
(443, 'Ulhasnagar', '11'),
(444, 'Sangli', '11'),
(445, 'Nashik', '11'),
(446, 'Ahmednagar', '11'),
(447, 'Kolhapur', '11'),
(448, 'Chandrapur', '11'),
(449, 'Parbhani', '11'),
(450, 'Ambernath', '11'),
(451, 'Firozabad', '12'),
(452, 'Mainpuri', '12'),
(453, 'Mathura', '12'),
(454, 'Aligarh', '12'),
(455, 'Etah', '12'),
(456, 'Hathras', '12'),
(457, 'Kasganj', '12'),
(458, 'Allahabaad', '12'),
(459, 'Fatehpur', '12'),
(460, 'Kaushambi', '12'),
(461, 'Pratapgarh', '12'),
(462, 'Azamgarh', '12'),
(463, 'Ballia', '12'),
(464, 'Mau', '12'),
(465, 'Budaun', '12'),
(466, 'Bareilly', '12'),
(467, 'Pilibhit', '12'),
(468, 'Shahjahanpur', '12'),
(469, 'Basti', '12'),
(470, 'Sant Kabir Nagar', '12'),
(471, 'Siddharthnagar', '12'),
(472, 'Banda', '12'),
(473, 'Chitrakoot', '12'),
(474, 'Hamirpur', '12'),
(475, 'Mahoba', '12'),
(476, 'Bahraich', '12'),
(477, 'Balarampur', '12'),
(478, 'Gonda', '12'),
(479, 'Shravasti', '12'),
(480, 'Ambedkar Nagar', '12'),
(481, 'Amethi', '12'),
(482, 'Barabanki', '12'),
(483, 'Faizabad', '12'),
(484, 'Sultanpur', '12'),
(485, 'Deoria', '12'),
(486, 'Gorakhpur', '12'),
(487, 'Kushinagar', '12'),
(488, 'Maharajganj', '12'),
(489, 'Jalaun', '12'),
(490, 'Jhansi', '12'),
(491, 'Lalitpur', '12'),
(492, 'Auraiya', '12'),
(493, 'Etawah', '12'),
(494, 'Farrukhabad', '12'),
(495, 'Kannauj', '12'),
(496, 'Kanpur Dehat', '12'),
(497, 'Kanpur Nagar', '12'),
(498, 'Hardoi', '12'),
(499, 'Lakhimpur Kheri', '12'),
(500, 'Raebareli', '12'),
(501, 'Sitapur', '12'),
(502, 'Unnao', '12'),
(503, 'Bagpat', '12'),
(504, 'Bulandshahr', '12'),
(505, 'Gautam Buddha Nagar', '12'),
(506, 'Ghaziabad', '12'),
(507, 'Hapur', '12'),
(508, 'Meerut', '12'),
(509, 'Mirzapur', '12'),
(510, 'Sant Ravidas Nagar', '12'),
(511, 'Sonbhadra', '12'),
(512, 'Amroha', '12'),
(513, 'Bijnor', '12'),
(514, 'Moradabad', '12'),
(515, 'Rampur', '12'),
(516, 'Sambhal', '12'),
(517, 'Muzaffarnagar', '12'),
(518, 'Saharanpur', '12'),
(519, 'Shamli', '12'),
(520, 'Chandauli', '12'),
(521, 'Ghazipur', '12'),
(522, 'Jaunpur', '12'),
(523, 'Varanasi', '12'),
(524, 'Pratapgarh', '28'),
(525, 'Bharatpur', '28'),
(526, 'Sikar', '28'),
(527, 'Pali', '28'),
(528, 'Tonk', '28'),
(529, 'Kishangarh', '28'),
(530, 'Beawar', '28'),
(531, 'Hanumangarh', '28'),
(532, 'Dholpur', '28'),
(533, 'churu', '28'),
(534, 'Banswara', '28'),
(535, 'Baran', '28'),
(536, 'Barmer', '28'),
(537, 'Bhilwara', '28'),
(538, 'Bundi', '28'),
(539, 'Churu', '28'),
(540, 'Dausa', '28'),
(541, 'Dungarpur', '28'),
(542, 'Hanumangarh', '28'),
(543, 'Jalore', '28'),
(544, 'Jhalawar', '28'),
(545, 'Karauli', '28'),
(546, 'Nagaur', '28'),
(547, 'Karauli', '28'),
(548, 'Sirohi', '28'),
(549, 'Murwara (Katni)', '20'),
(550, 'Guna', '20'),
(551, 'Vidisha', '20'),
(552, 'Damoh', '20'),
(553, 'Mandsaur', '20'),
(554, 'Khargone', '20'),
(555, 'Neemuch', '20'),
(556, 'Pithampur', '20'),
(557, 'Hoshangabad', '20'),
(558, 'Itarsi', '20'),
(559, 'Sehore', '20'),
(560, 'Betul', '20'),
(561, 'Seoni', '20'),
(562, 'Datia', '20'),
(563, 'Nagda', '20'),
(564, 'Ujjain ', '20'),
(565, 'Hoshangabad ', '20'),
(566, 'Kolar ', '20'),
(567, 'Sagar', '20'),
(568, 'Satna', '20'),
(569, 'Ratlam ', '20'),
(570, 'Amanganj', '20'),
(571, 'Kochi', '18'),
(572, 'Trichur', '18'),
(573, 'Kannur', '18'),
(574, 'Quilon', '18'),
(575, 'Alappuzha', '18'),
(576, 'Palakkad', '18'),
(577, 'Manjeri', '18'),
(578, 'Tellicherry', '18'),
(579, 'Ponnani', '18'),
(580, 'Vatakara', '18'),
(581, 'Kanhangad', '18'),
(582, 'Taliparamba', '18'),
(583, 'Payyanur', '18'),
(584, 'Koyilandy', '18'),
(585, 'Neyyattinkara', '18'),
(586, 'Beypore', '18'),
(587, 'Kayamkulam', '18'),
(588, 'Nedumangad', '18'),
(589, 'Punalur', '18'),
(590, 'Tirur', '18'),
(591, 'Nileshwaram', '18'),
(592, 'Kunnamkulam', '18'),
(593, 'Ottappalam', '18'),
(594, 'Tiruvalla', '18'),
(595, 'Adoor', '18'),
(596, 'Perinthalmanna', '18'),
(597, 'Chalakkudy', '18'),
(598, 'Varkala', '18'),
(599, 'Thirurangadi', '18'),
(600, 'Kottarakara', '18'),
(601, 'Cherthala', '18'),
(602, 'Maradu', '18'),
(603, 'Shornur', '18'),
(604, 'Kottakkal', '18'),
(605, 'Mananthavady', '18'),
(606, 'Manjeshwaram', '18'),
(607, 'Uppala', '18'),
(608, 'Pandalam', '18'),
(609, 'Mattanur', '18'),
(610, 'Chavakkad', '18'),
(611, 'Kattappana', '18'),
(612, 'Pathanamthitta', '18'),
(613, 'Attingal', '18'),
(614, 'Paravur', '18'),
(615, 'Ramanattukara', '18'),
(616, 'Kalamassery', '18'),
(617, 'Anchal', '18'),
(618, 'Ernakulam', '18'),
(619, 'Calicut', '18'),
(620, 'Alleppey', '18'),
(621, 'Palghat', '18'),
(622, 'Trichur', '18'),
(623, 'Palghat', '18'),
(624, 'Kollam', '18'),
(625, 'Blackpool', '37');

-- --------------------------------------------------------

--
-- Table structure for table `cm_discount_3`
--

CREATE TABLE `cm_discount_3` (
  `dis_id` int(10) UNSIGNED NOT NULL,
  `room_id` varchar(10) DEFAULT NULL,
  `rateplan` varchar(10) DEFAULT NULL,
  `hotel_id` varchar(10) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `discount_type` varchar(100) DEFAULT NULL,
  `discount_name` varchar(100) DEFAULT NULL,
  `discount_number` varchar(15) DEFAULT NULL,
  `coupon_code` varchar(100) DEFAULT NULL,
  `discount_status` varchar(10) DEFAULT NULL,
  `applied_only` varchar(10) DEFAULT NULL,
  `discount_created_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cm_inventory_3`
--

CREATE TABLE `cm_inventory_3` (
  `inv_id` int(10) UNSIGNED NOT NULL,
  `room_id` varchar(10) DEFAULT NULL,
  `hotel_id` varchar(10) DEFAULT NULL,
  `inv_year` varchar(10) DEFAULT NULL,
  `inv_month` varchar(10) DEFAULT NULL,
  `d1` varchar(10) DEFAULT NULL,
  `d2` varchar(10) DEFAULT NULL,
  `d3` varchar(10) DEFAULT NULL,
  `d4` varchar(10) DEFAULT NULL,
  `d5` varchar(10) DEFAULT NULL,
  `d6` varchar(10) DEFAULT NULL,
  `d7` varchar(10) DEFAULT NULL,
  `d8` varchar(10) DEFAULT NULL,
  `d9` varchar(10) DEFAULT NULL,
  `d10` varchar(10) DEFAULT NULL,
  `d11` varchar(10) DEFAULT NULL,
  `d12` varchar(10) DEFAULT NULL,
  `d13` varchar(10) DEFAULT NULL,
  `d14` varchar(10) DEFAULT NULL,
  `d15` varchar(10) DEFAULT NULL,
  `d16` varchar(10) DEFAULT NULL,
  `d17` varchar(10) DEFAULT NULL,
  `d18` varchar(10) DEFAULT NULL,
  `d19` varchar(10) DEFAULT NULL,
  `d20` varchar(10) DEFAULT NULL,
  `d21` varchar(10) DEFAULT NULL,
  `d22` varchar(10) DEFAULT NULL,
  `d23` varchar(10) DEFAULT NULL,
  `d24` varchar(10) DEFAULT NULL,
  `d25` varchar(10) DEFAULT NULL,
  `d26` varchar(10) DEFAULT NULL,
  `d27` varchar(10) DEFAULT NULL,
  `d28` varchar(10) DEFAULT NULL,
  `d29` varchar(10) DEFAULT NULL,
  `d30` varchar(10) DEFAULT NULL,
  `d31` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cm_rateplan_3`
--

CREATE TABLE `cm_rateplan_3` (
  `rate_id` int(10) UNSIGNED NOT NULL,
  `room_id` varchar(10) DEFAULT NULL,
  `hotel_id` varchar(10) DEFAULT NULL,
  `rate_year` varchar(10) DEFAULT NULL,
  `rate_month` varchar(10) DEFAULT NULL,
  `rate_occupancy` varchar(10) DEFAULT NULL,
  `rateplan` varchar(10) DEFAULT NULL,
  `d1` varchar(10) DEFAULT NULL,
  `d2` varchar(10) DEFAULT NULL,
  `d3` varchar(10) DEFAULT NULL,
  `d4` varchar(10) DEFAULT NULL,
  `d5` varchar(10) DEFAULT NULL,
  `d6` varchar(10) DEFAULT NULL,
  `d7` varchar(10) DEFAULT NULL,
  `d8` varchar(10) DEFAULT NULL,
  `d9` varchar(10) DEFAULT NULL,
  `d10` varchar(10) DEFAULT NULL,
  `d11` varchar(10) DEFAULT NULL,
  `d12` varchar(10) DEFAULT NULL,
  `d13` varchar(10) DEFAULT NULL,
  `d14` varchar(10) DEFAULT NULL,
  `d15` varchar(10) DEFAULT NULL,
  `d16` varchar(10) DEFAULT NULL,
  `d17` varchar(10) DEFAULT NULL,
  `d18` varchar(10) DEFAULT NULL,
  `d19` varchar(10) DEFAULT NULL,
  `d20` varchar(10) DEFAULT NULL,
  `d21` varchar(10) DEFAULT NULL,
  `d22` varchar(10) DEFAULT NULL,
  `d23` varchar(10) DEFAULT NULL,
  `d24` varchar(10) DEFAULT NULL,
  `d25` varchar(10) DEFAULT NULL,
  `d26` varchar(10) DEFAULT NULL,
  `d27` varchar(10) DEFAULT NULL,
  `d28` varchar(10) DEFAULT NULL,
  `d29` varchar(10) DEFAULT NULL,
  `d30` varchar(10) DEFAULT NULL,
  `d31` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'India'),
(2, 'Iceland'),
(3, 'Indonesia'),
(4, 'Iraq'),
(5, 'Israel'),
(6, 'Italy'),
(7, 'Ireland'),
(8, 'Jamaica'),
(9, 'Japan'),
(10, 'Jordan'),
(11, 'Afghanistan'),
(12, 'Albania'),
(13, 'Algeria'),
(14, 'American Samoa'),
(15, 'Malaysia'),
(16, 'Egypt'),
(17, 'Australia'),
(18, 'Singapore'),
(19, 'Thailand'),
(20, 'Sri Lanka'),
(21, 'Iceland'),
(22, 'France'),
(23, 'China'),
(24, 'Nepal'),
(25, 'Germany'),
(26, 'Hungary'),
(27, 'Saudi Arabia'),
(28, 'Oman'),
(29, 'Kuwait'),
(30, 'Canada'),
(31, 'United States of America (USA)'),
(32, 'Mexico'),
(33, 'Brazil'),
(34, 'Uruguay'),
(35, 'Venezuela'),
(36, 'South Africa'),
(37, 'England'),
(38, 'Scotland');

-- --------------------------------------------------------

--
-- Table structure for table `discount_3`
--

CREATE TABLE `discount_3` (
  `dis_id` int(10) UNSIGNED NOT NULL,
  `room_id` varchar(10) DEFAULT NULL,
  `rateplan` varchar(10) NOT NULL,
  `hotel_id` varchar(10) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `discount_type` varchar(100) DEFAULT NULL,
  `discount_name` varchar(100) DEFAULT NULL,
  `discount_number` varchar(15) DEFAULT NULL,
  `coupon_code` varchar(100) DEFAULT NULL,
  `discount_status` varchar(10) DEFAULT NULL,
  `applied_only` varchar(10) DEFAULT NULL,
  `discount_created_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_3`
--

CREATE TABLE `inventory_3` (
  `inv_id` int(10) UNSIGNED NOT NULL,
  `room_id` varchar(10) DEFAULT NULL,
  `hotel_id` varchar(10) DEFAULT NULL,
  `inv_year` varchar(10) DEFAULT NULL,
  `inv_month` varchar(10) DEFAULT NULL,
  `d1` varchar(10) DEFAULT NULL,
  `d2` varchar(10) DEFAULT NULL,
  `d3` varchar(10) DEFAULT NULL,
  `d4` varchar(10) DEFAULT NULL,
  `d5` varchar(10) DEFAULT NULL,
  `d6` varchar(10) DEFAULT NULL,
  `d7` varchar(10) DEFAULT NULL,
  `d8` varchar(10) DEFAULT NULL,
  `d9` varchar(10) DEFAULT NULL,
  `d10` varchar(10) DEFAULT NULL,
  `d11` varchar(10) DEFAULT NULL,
  `d12` varchar(10) DEFAULT NULL,
  `d13` varchar(10) DEFAULT NULL,
  `d14` varchar(10) DEFAULT NULL,
  `d15` varchar(10) DEFAULT NULL,
  `d16` varchar(10) DEFAULT NULL,
  `d17` varchar(10) DEFAULT NULL,
  `d18` varchar(10) DEFAULT NULL,
  `d19` varchar(10) DEFAULT NULL,
  `d20` varchar(10) DEFAULT NULL,
  `d21` varchar(10) DEFAULT NULL,
  `d22` varchar(10) DEFAULT NULL,
  `d23` varchar(10) DEFAULT NULL,
  `d24` varchar(10) DEFAULT NULL,
  `d25` varchar(10) DEFAULT NULL,
  `d26` varchar(10) DEFAULT NULL,
  `d27` varchar(10) DEFAULT NULL,
  `d28` varchar(10) DEFAULT NULL,
  `d29` varchar(10) DEFAULT NULL,
  `d30` varchar(10) DEFAULT NULL,
  `d31` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rateplan_3`
--

CREATE TABLE `rateplan_3` (
  `rate_id` int(10) UNSIGNED NOT NULL,
  `room_id` varchar(10) DEFAULT NULL,
  `hotel_id` varchar(10) DEFAULT NULL,
  `rate_year` varchar(10) DEFAULT NULL,
  `rate_month` varchar(10) DEFAULT NULL,
  `rate_occupancy` varchar(10) DEFAULT NULL,
  `rateplan` varchar(10) DEFAULT NULL,
  `d1` varchar(10) DEFAULT NULL,
  `d2` varchar(10) DEFAULT NULL,
  `d3` varchar(10) DEFAULT NULL,
  `d4` varchar(10) DEFAULT NULL,
  `d5` varchar(10) DEFAULT NULL,
  `d6` varchar(10) DEFAULT NULL,
  `d7` varchar(10) DEFAULT NULL,
  `d8` varchar(10) DEFAULT NULL,
  `d9` varchar(10) DEFAULT NULL,
  `d10` varchar(10) DEFAULT NULL,
  `d11` varchar(10) DEFAULT NULL,
  `d12` varchar(10) DEFAULT NULL,
  `d13` varchar(10) DEFAULT NULL,
  `d14` varchar(10) DEFAULT NULL,
  `d15` varchar(10) DEFAULT NULL,
  `d16` varchar(10) DEFAULT NULL,
  `d17` varchar(10) DEFAULT NULL,
  `d18` varchar(10) DEFAULT NULL,
  `d19` varchar(10) DEFAULT NULL,
  `d20` varchar(10) DEFAULT NULL,
  `d21` varchar(10) DEFAULT NULL,
  `d22` varchar(10) DEFAULT NULL,
  `d23` varchar(10) DEFAULT NULL,
  `d24` varchar(10) DEFAULT NULL,
  `d25` varchar(10) DEFAULT NULL,
  `d26` varchar(10) DEFAULT NULL,
  `d27` varchar(10) DEFAULT NULL,
  `d28` varchar(10) DEFAULT NULL,
  `d29` varchar(10) DEFAULT NULL,
  `d30` varchar(10) DEFAULT NULL,
  `d31` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `country_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Islands', '1'),
(2, 'Andhra Pradesh', '1'),
(3, 'Arunachal Pradesh', '1'),
(4, 'Assam', '1'),
(5, 'Bihar', '1'),
(6, 'Chandigarh', '1'),
(7, 'Chhattisgarh', '1'),
(8, 'Dadra and Nagar Haveli', '1'),
(9, 'Himachal Pradesh', '1'),
(10, 'Uttarakhand', '1'),
(11, 'Maharashtra', '1'),
(12, 'Uttar Pradesh', '1'),
(13, 'Gujarat', '1'),
(14, 'Goa', '1'),
(15, 'Jammu and Kashmir', '1'),
(16, 'Jharkhand', '1'),
(17, 'Karnataka', '1'),
(18, 'Kerala', '1'),
(19, 'Lakshadweep', '1'),
(20, 'Madhya Pradesh', '1'),
(21, 'Manipur', '1'),
(22, 'Meghalaya', '1'),
(23, 'Mizoram', '1'),
(24, 'Nagaland', '1'),
(25, 'Odisha', '1'),
(26, 'Puducherry ', '1'),
(27, 'Punjab', '1'),
(28, 'Rajasthan', '1'),
(29, 'Sikkim', '1'),
(30, 'Tamil Nadu', '1'),
(31, 'Telangana', '1'),
(32, 'Tripura', '1'),
(33, 'West Bengal', '1'),
(34, 'New Delhi', '1'),
(35, 'Daman and Diu', '1'),
(36, 'Haryana', '1'),
(37, 'Lancashire', '37'),
(38, 'Bedfordshire', '37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ch_cm`
--
ALTER TABLE `ch_cm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_bookings`
--
ALTER TABLE `ch_cm_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_booking_rooms`
--
ALTER TABLE `ch_cm_booking_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_cancellation`
--
ALTER TABLE `ch_cm_cancellation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_customer`
--
ALTER TABLE `ch_cm_customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `ch_cm_discount`
--
ALTER TABLE `ch_cm_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_documents`
--
ALTER TABLE `ch_cm_documents`
  ADD PRIMARY KEY (`h_d`);

--
-- Indexes for table `ch_cm_link`
--
ALTER TABLE `ch_cm_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_ota`
--
ALTER TABLE `ch_cm_ota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_partner`
--
ALTER TABLE `ch_cm_partner`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `ch_cm_paymentgateway`
--
ALTER TABLE `ch_cm_paymentgateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_room`
--
ALTER TABLE `ch_cm_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_room_slider`
--
ALTER TABLE `ch_cm_room_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_slider`
--
ALTER TABLE `ch_cm_slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `ch_cm_socila_link`
--
ALTER TABLE `ch_cm_socila_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_taxes`
--
ALTER TABLE `ch_cm_taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_cm_testimonials`
--
ALTER TABLE `ch_cm_testimonials`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `ch_cm_user`
--
ALTER TABLE `ch_cm_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cm_discount_3`
--
ALTER TABLE `cm_discount_3`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `cm_inventory_3`
--
ALTER TABLE `cm_inventory_3`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `cm_rateplan_3`
--
ALTER TABLE `cm_rateplan_3`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_3`
--
ALTER TABLE `discount_3`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `inventory_3`
--
ALTER TABLE `inventory_3`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `rateplan_3`
--
ALTER TABLE `rateplan_3`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ch_cm`
--
ALTER TABLE `ch_cm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ch_cm_bookings`
--
ALTER TABLE `ch_cm_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_booking_rooms`
--
ALTER TABLE `ch_cm_booking_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_cancellation`
--
ALTER TABLE `ch_cm_cancellation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_customer`
--
ALTER TABLE `ch_cm_customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_discount`
--
ALTER TABLE `ch_cm_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ch_cm_documents`
--
ALTER TABLE `ch_cm_documents`
  MODIFY `h_d` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_link`
--
ALTER TABLE `ch_cm_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_ota`
--
ALTER TABLE `ch_cm_ota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ch_cm_partner`
--
ALTER TABLE `ch_cm_partner`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_paymentgateway`
--
ALTER TABLE `ch_cm_paymentgateway`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_room`
--
ALTER TABLE `ch_cm_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_room_slider`
--
ALTER TABLE `ch_cm_room_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_slider`
--
ALTER TABLE `ch_cm_slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_socila_link`
--
ALTER TABLE `ch_cm_socila_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_taxes`
--
ALTER TABLE `ch_cm_taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_testimonials`
--
ALTER TABLE `ch_cm_testimonials`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_cm_user`
--
ALTER TABLE `ch_cm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=626;

--
-- AUTO_INCREMENT for table `cm_discount_3`
--
ALTER TABLE `cm_discount_3`
  MODIFY `dis_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cm_inventory_3`
--
ALTER TABLE `cm_inventory_3`
  MODIFY `inv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cm_rateplan_3`
--
ALTER TABLE `cm_rateplan_3`
  MODIFY `rate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `discount_3`
--
ALTER TABLE `discount_3`
  MODIFY `dis_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_3`
--
ALTER TABLE `inventory_3`
  MODIFY `inv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rateplan_3`
--
ALTER TABLE `rateplan_3`
  MODIFY `rate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
