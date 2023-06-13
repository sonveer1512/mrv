-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 01:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axepert_mrvform`
--

-- --------------------------------------------------------

--
-- Table structure for table `mrvform`
--

CREATE TABLE `mrvform` (
  `id` int(20) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `dobwords` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `annual_income` int(100) NOT NULL,
  `class_sought` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `father_occupation` varchar(255) NOT NULL,
  `father_occupation_description` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `mother_occupation` varchar(255) NOT NULL,
  `mother_occupation_description` varchar(255) NOT NULL,
  `siblings` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telno` int(100) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `medical_info` int(1) NOT NULL,
  `medical_problem` varchar(255) NOT NULL,
  `terms` int(1) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mrvform`
--

INSERT INTO `mrvform` (`id`, `serial_no`, `file`, `class`, `name`, `dob`, `dobwords`, `age`, `gender`, `caste`, `annual_income`, `class_sought`, `fathername`, `father_occupation`, `father_occupation_description`, `mothername`, `mother_occupation`, `mother_occupation_description`, `siblings`, `address`, `telno`, `transport`, `medical_info`, `medical_problem`, `terms`, `transaction_id`, `flag`) VALUES
(1, 'MRV00001', 'test-3_1670331053.jpg', '3rd', 'Graham Ramseyde1', '1998-10-23', 'TWENTY THREE OCTOBER ONE THOUSAND NINE HUNDRED NINETY EIGHT', '24 Years 5 Months 8 Days', 'Male', 'OBC', 66000000, 'Asperiores recusanda', 'Olivia Bridges', '', 'Aut beatae saepe qui', 'Fallon Trevino', '', 'Voluptatem id lauda', '[{\"name\":\"Anika Gardner\"},{\"class\":\"Reiciendis non ipsam\"},{\"section\":\"Necessitatibus quasi\"},{\"admno\":\"Molestiae temporibus\"},{\"name\":\"Benedict Beasley\"},{\"class\":\"Nostrud officia aut \"},{\"section\":\"Eius dolore similiqu\"},{\"admno\":\"Sunt ut accusantium\"}]', 'Minim maiores assume', 897800000, 'No', 0, '', 0, '9877frter', 0),
(2, 'MRV00002', 'testimonial-4_1670329762.jpg', 'KG', 'James Dunn', '2014-05-15', 'FIFTEEN MAY TWO THOUSAND FOURTEEN', '8 Years 10 Months 16 Days', 'Female', 'Minority', 411, 'Reiciendis dolorem e', 'Yetta Walls', '', 'Distinctio Anim lab', 'Jin Powell', '', 'Nisi voluptas blandi', '[{\"name\":\"Illana Williams\"},{\"class\":\"Aut qui a fugiat ev\"},{\"section\":\"Proident velit sun\"},{\"admno\":\"Ullam nulla enim cup\"},{\"name\":\"Anjolie Sims\"},{\"class\":\"Aut cupidatat qui qu\"},{\"section\":\"Dolor adipisci ipsum\"},{\"admno\":\"Quis qui sed vel ita\"}]', 'Non animi est cons', 0, 'No', 1, 'Omnis nesciunt arch', 0, 'DJBJN0999', 0),
(3, 'MRV00003', 'testimonial-2_1670328529.jpg', '9th', 'Stephanie Castro', '1989-09-10', 'TEN SEPTEMBER ONE THOUSAND NINE HUNDRED EIGHTY NINE', '33 Years 6 Months 21 Days', 'Male', 'EWS', 608, 'Asperiores accusanti', 'Brittany Matthews', 'Government Servant', 'Et atque enim ut nob', 'Victoria Weber', 'HomeMaker', 'Expedita quis delect', '[{\"name\":\"Dennis Wade\"},{\"class\":\"Ullam voluptates ips\"},{\"section\":\"Consectetur placeat\"},{\"admno\":\"Praesentium a totam \"},{\"name\":\"Vielka Whitley\"},{\"class\":\"Consequatur Nostrud\"},{\"section\":\"Quae commodi odio do\"},{\"admno\":\"Vero quis explicabo\"}]', 'Adipisci irure sit e', 978878, 'Yes', 0, 'Cupidatat ea quaerat', 1, 'Saepe inventore illu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mrvform`
--
ALTER TABLE `mrvform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mrvform`
--
ALTER TABLE `mrvform`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
