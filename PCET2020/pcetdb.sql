-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 05:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', '338a4d9db0d484fdf4781fd9c25aeec3', 1),
('mcahod', '338a4d9db0d484fdf4781fd9c25aeec3', 2),
('mcahod', '338a4d9db0d484fdf4781fd9c25aeec3', 3),
('prema', '338a4d9db0d484fdf4781fd9c25aeec3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `bdist` varchar(255) NOT NULL,
  `bstate` varchar(255) NOT NULL,
  `rcard` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `income` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `scat` varchar(255) NOT NULL,
  `coname` varchar(255) NOT NULL,
  `codist` varchar(255) NOT NULL,
  `costate` varchar(255) NOT NULL,
  `hno` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `mandal` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `qexam` varchar(255) NOT NULL,
  `tecenter` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `agree` varchar(255) NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `cname`, `fname`, `mname`, `dob`, `gender`, `aadhar`, `bdist`, `bstate`, `rcard`, `mobile`, `income`, `cast`, `scat`, `coname`, `codist`, `costate`, `hno`, `village`, `mandal`, `dist`, `state`, `pincode`, `qexam`, `tecenter`, `image`, `signature`, `agree`, `posting_date`) VALUES
(10, 'test@gmail.com', 'test123', 'premanath', 'narasimhulu', 'saraswathi', '1994-02-04', 'Male', '2147483647', '', '', 'WAP124700100370', '2147483647', 'Below One Lakh', 'BC-B', 'SPORTS', 'SRI SAI', 'ANANTAPUR', 'Andhra Pradesh', '2-78', 'NALLAMADA', 'NALLAMADA', 'ANANTAPUR', 'Andhra Pradesh', '515501', 'Karnataka', 'Andhra Pradesh', '51021016_2049110785210314_4671822134692489795_n.jpg', '', '', '2019-11-10'),
(11, 'test@gmail.com', 'test123', 'premanath', 'narasimhulu', 'saraswathi', '1994-02-04', 'Male', '2147483647', '', '', 'WAP124700100370', '2147483647', 'Below One Lakh', 'BC-B', 'SPORTS', 'SRI SAI', 'ANANTAPUR', 'Andhra Pradesh', '2-78', 'NALLAMADA', 'NALLAMADA', 'ANANTAPUR', 'Andhra Pradesh', '515501', 'Karnataka', 'Andhra Pradesh', '51021016_2049110785210314_4671822134692489795_n.jpg', '', '', '2019-11-10'),
(12, 'test@gmail.com', 'test123', 'premanath', 'narasimhulu', 'saraswathi', '1994-02-04', 'Male', '2147483647', '', '', 'WAP124700100370', '2147483647', 'Below One Lakh', 'BC-B', 'SPORTS', 'SRI SAI', 'ANANTAPUR', 'Andhra Pradesh', '2-78', 'NALLAMADA', 'NALLAMADA', 'ANANTAPUR', 'Andhra Pradesh', '515501', 'Karnataka', 'Andhra Pradesh', '51021016_2049110785210314_4671822134692489795_n.jpg', '', '', '2019-11-10'),
(13, 'test@gmail.com', 'test123', 'premanath', 'narasimhulu', 'saraswathi', '1994-02-04', 'Male', '340924259829', '', '', 'WAP124700100370', '8186886443', 'Below One Lakh', 'BC-B', 'SPORTS', 'SRI SAI', 'ANANTAPUR', 'Andhra Pradesh', '2-78', 'NALLAMADA', 'NALLAMADA', 'ANANTAPUR', 'Andhra Pradesh', '515501', 'Karnataka', 'Andhra Pradesh', '51021016_2049110785210314_4671822134692489795_n.jpg', '', '', '2019-11-10'),
(14, 'ppp@gmail.com', 'ppp', 'fdhj', 'hghhjg', 'hjg', '1111-01-01', 'Male', '8*8989', '', '', '9+8+98', '89+8', 'Below One Lakh', 'BC-C', 'NCC', 'dsf', 'jjk', 'Andhra Pradesh', 'hkjh', 'khkjh', 'kjh', 'kjh', 'Telanga', '536535', 'Telanga', 'Telanga', '51021016_2049110785210314_4671822134692489795_n.jpg', '', '', '2019-11-10'),
(15, 'ppp@gmail.com', 'ppp', 'fdhj', 'hghhjg', 'hjg', '1111-01-01', 'Male', '8*8989', '', '', '9+8+98', '89+8', 'Below One Lakh', 'BC-C', 'NCC', 'dsf', 'jjk', 'Andhra Pradesh', 'hkjh', 'khkjh', 'kjh', 'kjh', 'Telanga', '536535', 'Telanga', 'Telanga', '51021016_2049110785210314_4671822134692489795_n.jpg', '', '', '2019-11-10'),
(16, 'ppp@gmail.com', 'ppp', 'fdhj', 'hghhjg', 'hjg', '1111-01-01', 'Male', '8*8989', '', '', '9+8+98', '89+8', 'Below One Lakh', 'BC-C', 'NCC', 'dsf', 'jjk', 'Andhra Pradesh', 'hkjh', 'khkjh', 'kjh', 'kjh', 'Telanga', '536535', 'Telanga', 'Telanga', '51021016_2049110785210314_4671822134692489795_n.jpg', '', '', '2019-11-10'),
(17, 'ppp@gmail.com', 'ppp', 'fdhj', 'hghhjg', 'hjg', '1111-01-01', 'Male', '8*8989', '', '', '9+8+98', '89+8', 'Below One Lakh', 'BC-C', 'NCC', 'dsf', 'jjk', 'Andhra Pradesh', 'hkjh', 'khkjh', 'kjh', 'kjh', 'Telanga', '536535', 'Telanga', 'Telanga', '51021016_2049110785210314_4671822134692489795_n.jpg', '0e322bba29031d3b9c76359f4640285d.jpg', '', '2019-11-10'),
(18, 'ppp@gmail.com', 'ppp', 'fdhj', 'hghhjg', 'hjg', '1111-01-01', 'Male', '8*8989', '', '', '9+8+98', '89+8', 'Below One Lakh', 'BC-C', 'NCC', 'dsf', 'jjk', 'Andhra Pradesh', 'hkjh', 'khkjh', 'kjh', 'kjh', 'Telanga', '536535', 'Telanga', 'Telanga', '51021016_2049110785210314_4671822134692489795_n.jpg', '0e322bba29031d3b9c76359f4640285d.jpg', '', '2019-11-10'),
(19, 'ppp@gmail.com', 'ppp', 'fdhj', 'hghhjg', 'hjg', '1111-01-01', 'Male', '8*8989', '', '', '9+8+98', '89+8', 'Below One Lakh', 'BC-C', 'NCC', 'dsf', 'jjk', 'Andhra Pradesh', 'hkjh', 'khkjh', 'kjh', 'kjh', 'Telanga', '536535', 'Telanga', 'Telanga', '51021016_2049110785210314_4671822134692489795_n.jpg', '0e322bba29031d3b9c76359f4640285d.jpg', '', '2019-11-10'),
(20, 'ppp@gmail.com', 'plm', 'candidate name', 'vcxv', 'xcvxcv', '2355-11-22', 'Female', 'xcvxc', '', '', 'dfdsfsdfsd', 'rwerwer', 'Below One Lakh', 'ST', 'PH', 'sdsfsd', 'sdfsd', 'Telanga', 'sdfsd', 'fsdf', 'sdfsd', 'dsffs', 'Andhra Pradesh', 'sdfsd', 'Karnataka', 'Andhra Pradexxxxxxxxxxxxxxxxxxx \r\n xxxxxxxxxxxxxxxxxx xx   xxxxxxxxxxxxxxxx xxffffffffffffffff fffffffffsh', '0e322bba29031d3b9c76359f4640285d.jpg', 'pp.jpg', '', '2019-11-10'),
(21, 'testing1@gmail.com', 'Testing@demo', 'Prabhas Billa', 'Bahubali', 'Tamanna', '1956-01-04', 'Male', '369025851234', '', '', 'PAP124785588888', '8186886443', 'Below One Lakh', 'BC-B', 'SPORTS', 'Sri Sai MCA College', 'Anantapur', 'Andhra Pradesh', '2-778A', 'Ttirupathi', 'Tirupathi-Rural', 'Chitoor', 'Andhra Pradesh', '5175002', 'MCA-2 Year', 'Andhra Pradexxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxfffffffffffffffffffffffffsh', 'prabhas.jpg', 'sign3.png', '', '2019-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
