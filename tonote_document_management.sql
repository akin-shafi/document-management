-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2022 at 10:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tonote_document_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profile_img` varchar(191) NOT NULL,
  `hashed_password` varchar(191) NOT NULL,
  `reset_password` varchar(50) NOT NULL,
  `admin_level` varchar(50) DEFAULT NULL,
  `account_status` varchar(50) DEFAULT NULL,
  `process_request` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `profile_img`, `hashed_password`, `reset_password`, `admin_level`, `account_status`, `process_request`, `created_at`, `updated_at`, `created_by`, `deleted`) VALUES
(1, 'Admin', 'One', 'doc@gettonote.com', '', '$2y$10$df9kgE/lDm/j3TyklJyoguf5w0MTfZE8tpJqs1EUINLn7XqZYptka', '', '1', NULL, '', '2022-05-20 20:03:07', '2022-05-20 22:02:23', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `document_id` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `document_id`, `filename`, `status`, `created_at`, `updated_at`, `created_by`, `deleted`) VALUES
(11, 'Tonote-106', '628b62f2404bc_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 11:33:22', '', '1', ''),
(12, 'Tonote-967', '628b6310d69af_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 11:33:52', '', '1', ''),
(13, 'Tonote-967', '628b6320e2750_certificate.pdf', '1', '2022-05-23 11:34:08', '', '1', ''),
(14, 'Tonote-151', '628b67b74bb0a_enyata-tasks.pdf', '1', '2022-05-23 11:53:43', '', '1', ''),
(15, 'Tonote-151', '628b68bc2e958_certificate.pdf', '1', '2022-05-23 11:58:04', '', '1', ''),
(16, 'Tonote-4510', '628b68c4ee10d_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 11:58:12', '', '1', ''),
(17, 'Tonote-410', '628b6912b302c_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 11:59:30', '', '1', ''),
(18, 'Tonote-1000', '628b693ba0e06_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 12:00:11', '', '1', ''),
(19, 'Tonote-08', '628b69661cd69_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 12:00:54', '', '1', ''),
(20, 'Tonote-08', '628b6984b72c9_628b6320e2750_certificate.pdf', '1', '2022-05-23 12:01:24', '', '1', ''),
(21, 'Tonote-678', '628b699484f0a_628b6320e2750_certificate.pdf', '1', '2022-05-23 12:01:40', '', '1', ''),
(22, 'Tonote-97', '628b69e655075_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 12:03:02', '', '1', ''),
(23, 'Tonote-108', '628b6a47d2bff_628b6320e2750_certificate.pdf', '1', '2022-05-23 12:04:39', '', '1', ''),
(24, 'Tonote-241', '628b6adea8014_628b6320e2750_certificate.pdf', '1', '2022-05-23 12:07:10', '', '1', ''),
(25, 'Tonote-420', '628b6b5bedf2f_628b6320e2750_certificate.pdf', '1', '2022-05-23 12:09:15', '', '1', ''),
(26, 'Tonote-741', '628b7118ce87e_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 12:33:44', '', '1', ''),
(27, 'Tonote-741', '628b7118d097c_certificate.pdf', '1', '2022-05-23 12:33:44', '', '1', ''),
(28, 'Tonote-421', '628b82d7f346a_628b6320e2750_certificate.pdf', '1', '2022-05-23 13:49:27', '', '1', ''),
(29, 'Tonote-345', '628b83606919c_Affidavit of Bachelorhood.pdf', '1', '2022-05-23 13:51:44', '', '1', ''),
(30, 'Tonote-189', '628ccd56dae7c_5pics.png', '1', '2022-05-24 13:19:34', '', '', ''),
(31, 'Tonote-189', '628ccd56ddae4_6pics.jpeg', '1', '2022-05-24 13:19:34', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
