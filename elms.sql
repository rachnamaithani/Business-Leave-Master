-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 08:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `image`, `position`, `phoneno`, `dateofbirth`, `state`, `city`, `address`) VALUES
(1, 'rachna ', 'maithani', 'rachnamaithani81@gmail.com', '280dd443f81c028f4472d48462953bf1', 'female', '../../admin/images/144.', 'poject manager', '9998887775', '2001-06-12', 'maharastra', 'hinjewadi', 'Phase-3, Hinjewadi'),
(2, 'divya', 'kaira', 'dk@gmail.com', '2cdd7064b290132617248dbfd85f740e', 'female', '../../admin/images/9192.webp', 'poject manager', '7778886669', '2000-06-24', 'maharastra', 'mussoorie', 'mallroad,mussorie'),
(3, 'rohit', 'kothiyal', 'rkothiyal@gmail.com', '2d235ace000a3ad85f590e321c89bb99', 'male', '../../admin/images/8581.png', 'poject manager', '8889994445', '1998-09-29', 'maharastra', 'dehradun', 'near lalpul, patelnager, dehradun'),
(4, 'saloni', 'negi', 'saloni@gmail.com', '5e36c9f741aac0be6250faecf38e9c7a', 'female', '../../admin/images/4452.jpg', 'hr', '9996668884', '2000-10-18', 'uttar pradesh', 'agra', 'devriroad,selapur,agra'),
(5, 'demo', 'test', 'demo88@gmail.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 'male', '../../admin/images/2121.ico', 'php developer', '12312312', '2023-10-28', 'Uttarakhand', 'dehradun', 'ddun'),
(11, 'ganga', 'ram', 'ganga@gmail.com', '71934b60ae13ac658efc35ed4055a934', 'male', '../../admin/images/904.jpg', 'poject manager', '958948690', '', 'maharastra', 'leh', 'dharampur, leh'),
(12, 'aakriti', 'lakhera', 'aak@gmail.com', '0618e57c909670e9b0b48abe1702dc48', 'female', '../../admin/images/6238.jpg', 'poject manager', '993322114', '2023-11-02', 'uttar pradesh', 'agra', 'badrish colonoy agra'),
(14, 'nitika ', 'saklani', 'nikka@gmail.com', '1ee571f48ace73606bf8ec6ece7f1078', 'female', '../../admin/images/7724.jpg', 'poject manager', '887987675', '1997-09-15', 'maharastra', 'rudraprayag', 'tilwara, rudraprayag'),
(15, 'lebron', 'james', 'lebron@gmail.com', '021a304869b110c86d032f41fdcd05c7', 'female', '../../admin/images/2763.jpg', 'poject manager', '', '1970-04-05', 'madhya pradesh', 'bhopal', 'racecourse , bhopal'),
(16, 'aditya', 'singh', 'adi@gmail.com', '057829fa5a65fc1ace408f490be486ac', 'female', '../admin/images/832.jpg', 'nodejs developer', '749590348', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `id` int(11) NOT NULL,
  `leavefrom` varchar(255) NOT NULL,
  `leaveto` varchar(255) NOT NULL,
  `typeofleave` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `leave_status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_leaves`
--

INSERT INTO `emp_leaves` (`id`, `leavefrom`, `leaveto`, `typeofleave`, `description`, `leave_status`, `email`, `timing`) VALUES
(10, '2023-10-10', '2023-10-15', 'Half pay leave', 'fkdsjs dfjsd', 'rejected', 'rkothiyal@gmail.com', '13-10-2023 12:10:44'),
(11, '2023-12-01', '2023-11-05', 'Casual leave', 'dkfn ejklmml odfjdjf', 'rejected', 'rkothiyal@gmail.com', '13-10-2023 12:12:06'),
(12, '2023-10-01', '2023-10-07', 'Choose...', 'ELWJFLSDFKLDJKF W EJKRJ J KCFJ', 'rejected', 'rachnamaithani81@gmail.com', '26-10-2023 11:43:01'),
(13, '2023-10-28', '2023-10-30', 'Sick leave', 'i am feeling fever and doctor advise me to care rest.', 'approved', 'saloni@gmail.com', '27-10-2023 11:55:17'),
(14, '2023-11-10', '2023-11-15', 'Half pay leave', 'lkdsj ioaefujdf jkldjflkf ioejfkcdsmiurutsjdwjhgf ahdfkdflkajedjdj', 'approved', 'dk@gmail.com', '27-10-2023 11:57:18'),
(15, '2023-10-28', '2023-10-31', 'Sick leave', 'lomer jdsj sjdksjdksjdksj', 'rejected', 'demo88@gmail.com', '28-10-2023 10:43:05'),
(16, '2023-10-29', '2023-10-30', 'Travel leave', 'kkmkmk', 'rejected', 'rachnamaithani81@gmail.com', '28-10-2023 12:13:27'),
(17, '2023-11-10', '2023-11-15', 'Half pay leave', 'lkdsj ioaefujdf jkldjflkf ioejfkcdsmiurutsjdwjhgf ahdfkdflkajedjdj', 'approved', 'dk@gmail.com', '27-10-2023 11:57:18'),
(18, '2024-04-11', '2024-04-21', 'Half pay leave', 'kjkhj', '', 'dk@gmail.com', '07-04-2024 10:56:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
