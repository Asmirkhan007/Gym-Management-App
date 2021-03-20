-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 08:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

-- CREATE TABLE `doctorapp` (
--      `gym_id` varchar(60) NOT NULL,
--   `name` varchar(40) NOT NULL,
--   `father_name` varchar(40) NOT NULL,
--   `email` varchar(40) NOT NULL,
--   `date_of_joining` date NOT NULL,
--   `contact` varchar(40) NOT NULL,
--   `last_payment` date NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`gym_id`, `name`, `father_name`, `email`,`date_of_joining`, `contact`, `last_payment`) VALUES
('201','Raj', 'kumar', 'kumar@gmail.com','21-10-2020',  '9092367891', '03-03-2021'),
('202','Ram', 'kumar', 'kumar12@gmail.com','21-08-2020',  '9092367891', '30-03-2021'),
('203','Arjun', 'kumar', 'kumar45@gmail.com','11-10-2020',  '9092167891', '27-03-2021'),
('204','Smile', 'kumar', 'kuma23r@gmail.com','01-10-2020',  '9092367891', '03-04-2021'),
('205','Cat', 'kumar', 'kumar23@gmail.com','19-10-2020',  '9032367891', '12-07-2021'),
('206','Dog', 'kumar', 'kumar45@gmail.com','02-12-2020',  '8092367891', '29-07-2021'),
('207','Gun', 'kumar', 'kumar12@gmail.com','11-02-2020',  '7092367891', '23-05-2021'),
('208','Will', 'kumar', 'kuma2r@gmail.com','18-07-2020',  '342367891', '06-09-2021');

-- --------------------------------------------------------




--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `gym_id` varchar(60) NOT NULL,
  `name` varchar(40) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `date_of_payment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`gym_id`, `name`,  `payment_type`, `date_of_payment`) VALUES
( '201','ram', 'cash', '12-07-2020'),
('202','will', 'card', '04-02-2021'),
( '203','bill', 'cheque','09-09-2020'),
( '204','kill', 'cash', '01-01-2020');




ALTER TABLE `doctorapp`
  ADD PRIMARY KEY (`gym_id`);

--
-- Indexes for table `Package`
--
-- ALTER TABLE `Package`
--   ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`gym_id`);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
