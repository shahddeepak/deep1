-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 05:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `address` longtext NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `user_id`, `name`, `email`, `mobile`, `address`, `added_on`) VALUES
(15, '1', 'Arjun', 'arjun@gmail.com', '9806242879', 'Bhopal', '2020-08-04'),
(17, '1', 'Arjun', 'arjun@gmail.com', '9806242879', 'Bhopal', '2020-08-04'),
(18, '8', 'Arjun', 'arjun@gmail.com', '9806242879', 'Bhopal', '2020-08-04'),
(19, '1', 'Arjun', 'arjun@gmail.com', '9806242879', 'Bhopal', '2020-08-04'),
(20, '1', 'Arjun', 'arjun@gmail.com', '9806242879', 'Bhopal', '2020-08-04'),
(21, '1', 'Arjun', 'arjun@gmail.com', '9806242879', 'Bhopal', '2020-08-04'),
(22, '1', 'Arjun', 'arjun@gmail.com', '9806242879', 'Bhopal', '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `employee_mail`
--

CREATE TABLE `employee_mail` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `campion` varchar(225) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `employee_email` varchar(225) NOT NULL,
  `header` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `body` longtext NOT NULL,
  `from_mail` varchar(225) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `token_number` varchar(255) NOT NULL,
  `see_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_mail`
--

INSERT INTO `employee_mail` (`id`, `user_id`, `campion`, `employee_id`, `employee_email`, `header`, `subject`, `body`, `from_mail`, `added_on`, `token_number`, `see_status`) VALUES
(1, '1', 'deepak', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'to', 'hiiiiiiiiiiiiiiiiiii<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/8cfe6\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:03:20', '8cfe6', '1'),
(2, '1', 'DAD', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', '10', '10000000000000000000000<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/15c74\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:03:36', '15c74', '1'),
(3, '1', 'DEEPAK', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'hI', 'dOWNLOD<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/92@75\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:10:00', '92@75', '0'),
(4, '1', 'ASHOK', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'mE', 'tO doWNLOD<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/b71fa\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:10:22', 'b71fa', '1'),
(5, '1', 'lOTTRY', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'to dOWNLODE', 'hi dEEPAK yOU WIN <br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/a1749\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:13:51', 'a1749', '1'),
(6, '1', 'ANKIT', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'fROM dEEPAK sHAHA', 'hI ANKIT<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/4c2@5\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:14:14', '4c2@5', '0'),
(7, '1', 'DEEPAK', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'Hi Deepak Shah', 'HIIIIIIIIIIIIIIIII<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/3e72f\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:16:06', '3e72f', '1'),
(8, '1', 'hi', '11', 'mazim9586@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'Testing', 'You Win 500000 Lack Rupes<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/11/5cea4\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:20:02', '5cea4', '0'),
(9, '1', 'hi', '6', 'shah.deepak60@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'To Deepak Ashok Vivek Shah', 'Hiiiii YTou Win 50000 <br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/6/5e46@\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-12 14:20:30', '5e46@', '0'),
(10, '3', 'New', '9', 'abhijeet.akolekar@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'Test', 'Test<br><br><a style=\"width:100%;display:block\"  href=\"c9lab.com/c9/mail_confirmmation/9/5@324\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-08-31 20:36:09', '5@324', '0'),
(11, '1', 'fdsf', '15', 'arjun@gmail.com', 'MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n', 'fdffd', 'fdffdffdf<br><br><a style=\"width:100%;display:block\"  href=\"localhost/c9/mail_confirmmation/15/c283b\"> <button style=\"color:white;background:skyblue;border:none;\">Click Here</button></a>', '', '2020-09-08 01:35:08', 'c283b', '0');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(1, 'Super Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9806242879', 'Indore');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `company` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` longtext NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `company`, `email`, `password`, `mobile`, `address`, `profile_pic`, `date`) VALUES
(1, 'Super Admindasddsad', 'Softwagon', 'shah.deepak60@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, 'Indore', 'unnamed.png', '2020-08-04'),
(2, 'Ankit Shah', 'Owlok', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, 'Bhopal', 'Lighthouse1.jpg', '2020-08-04'),
(3, 'Abhijeet', 'IPhelp Systems', 'abhijeet@iphelp.net', '461f28aaa3302ed134dad9e07f7a9a65', 2147483647, 'Indore', '2019.PNG', '2020-08-08'),
(4, 'ashok', 'om', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567890, 'Indore', '20181020211931__MG_7290.JPG', '2020-08-12'),
(5, 'deepak', 'a@gmail.com', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567890, 'Om sai', 's2.jpg', '2020-08-12'),
(6, 'd', 'd', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, 'fs', 's21.jpg', '2020-08-12'),
(7, 'alice.damore46@rezult.org', 'alice.damore46@rezult.org', 'alice.damore46@rezult.org', 'c81188c9e210333c65d0a0b8d0ba0ce5', 2147483647, '', 'card.jpg', '2020-08-12'),
(8, 'nicole86@rezult.org', 'nicole86@rezult.org', 'nicole86@rezult.org', '8fefce8d164537376193ccee8d2e4e8e', 2147483647, '', 'idcard.jpeg', '2020-08-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_mail`
--
ALTER TABLE `employee_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employee_mail`
--
ALTER TABLE `employee_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
