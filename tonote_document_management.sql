-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2022 at 12:05 PM
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
  `title` varchar(100) NOT NULL,
  `filename` varchar(191) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `document_id`, `title`, `filename`, `status`, `created_at`, `updated_at`, `created_by`, `deleted`) VALUES
(1, 'Tonote-748', '', '62900cae901e8_2nd ECM 1443 updated.pdf', '1', '2022-05-27 00:26:38', '', '0', ''),
(2, 'Tonote-748', '', '62900d9249ac9_2nd ECM 1443 updated.pdf', '1', '2022-05-27 00:30:26', '', '0', ''),
(3, 'Tonote-748', '', '6294b131b552b_03_FGN Sukuk Subscription Form 2021 - RETAIL.pdf', '1', '2022-05-30 12:57:37', '', '0', ''),
(4, 'ToNote-62', '', '6294b269ed037_6pics.jpeg', '1', '2022-05-30 13:02:49', '', '0', ''),
(5, 'ToNote_6294b85ce433c', '', '6294b85ce434b_03_FGN Sukuk Subscription Form 2021 - RETAIL.pdf', '1', '2022-05-30 13:28:12', '', '0', ''),
(6, 'ToNote_6295cc36a41d9', '', '6295cc36a41fe_03_FGN Sukuk Subscription Form 2021 - RETAIL.pdf', '1', '2022-05-31 09:05:10', '', '0', ''),
(7, 'ToNote_6295ccac78e00', '', '6295ccac78e23_2nd ECM 1443 updated.pdf', '1', '2022-05-31 09:07:08', '', '0', ''),
(8, 'ToNote_6295ccc140421', '', '6295ccc140432_2nd ECM 1443 updated.pdf', '1', '2022-05-31 09:07:29', '', '0', ''),
(9, 'ToNote_6295ccf60bec1', '', '6295ccf60beda_{1317ffb0-607d-4ecd-bf36-c7affd11a79a}_Forrester_State_of_Systems_of_Agreement_2021.pdf', '1', '2022-05-31 09:08:22', '', '0', ''),
(10, 'ToNote_6295cd413e6c4', '', '6295cd413e6cf_03_FGN Sukuk Subscription Form 2021 - RETAIL.pdf', '1', '2022-05-31 09:09:37', '', '0', ''),
(11, 'ToNote_6295cd536d7af', '', '6295cd536d7bd_2nd ECM 1443 updated.pdf', '1', '2022-05-31 09:09:55', '', '0', ''),
(12, 'ToNote_6295cd5b20cdd', '', '6295cd5b20cf2_{1317ffb0-607d-4ecd-bf36-c7affd11a79a}_Forrester_State_of_Systems_of_Agreement_2021.pdf', '1', '2022-05-31 09:10:03', '', '0', ''),
(13, 'ToNote_6296f7e8ca95d', 'Contract', '6296f7e8ca968_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:23:52', '', '0', ''),
(14, 'ToNote_6296f81e786f4', 'Contract', '6296f81e78704_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:24:46', '', '0', ''),
(15, 'ToNote_6296f86d56535', 'Contract', '6296f86d56544_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:26:05', '', '0', ''),
(16, 'ToNote_6296f94b09890', 'Contarct', '6296f94b0989c_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:29:47', '', '0', ''),
(17, 'ToNote_6296f95ce8593', 'Contarct', '6296f95ce859f_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:30:04', '', '0', ''),
(18, 'ToNote_6296f96ab0764', 'Contarct', '6296f96ab078f_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:30:18', '', '0', ''),
(19, 'ToNote_6296f9e7ebcd6', 'contarct', '6296f9e7ebce4_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:32:23', '', '0', ''),
(20, 'ToNote_6296fb5d7402d', 'Not Set', '6296fb5d74038_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:38:37', '', '0', ''),
(21, 'ToNote_6296ff264689c', 'Not Set', '6296ff26468b4_2nd ECM 1443 updated.pdf', '1', '2022-06-01 06:54:46', '', '0', ''),
(22, 'ToNote_629701b85071d', 'Not Set', '629701b850728_2nd ECM 1443 updated.pdf', '1', '2022-06-01 07:05:44', '', '0', ''),
(23, 'ToNote_629702074db39', 'Contarct', '629702074db44_03_FGN Sukuk Subscription Form 2021 - RETAIL.pdf', '1', '2022-06-01 07:07:03', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `documentImage`
--

CREATE TABLE `documentImage` (
  `id` int(11) NOT NULL,
  `document_id` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documentImage`
--

INSERT INTO `documentImage` (`id`, `document_id`, `title`, `filename`, `status`, `created_at`, `updated_at`, `created_by`, `deleted`) VALUES
(1, '6294dc9bd4fa8', 'Sworn Affidavit for  bacherlorhood', '6294dc9bd4f9dimg.png', '2', '2022-05-30 16:02:51', '', '1', ''),
(2, '6294dc9c02bcf', 'Sworn Affidavit for  bacherlorhood', '6294dc9c02bbfimg.png', '2', '2022-05-30 16:02:52', '', '1', ''),
(3, '6294df94c0f08', 'Sworn Affidavit for  bacherlorhood', '6294dfab64a46img.png', '2', '2022-05-30 16:15:55', '', '1', ''),
(4, '6294df94c0f08', 'Sworn Affidavit for  bacherlorhood', '6294dfab7c160img.png', '2', '2022-05-30 16:15:55', '', '1', ''),
(5, '6294df94c0f08', 'Sworn Affidavit for  bacherlorhood', '6294e01609fcaimg.png', '2', '2022-05-30 16:17:42', '', '1', ''),
(6, '6294df94c0f08', 'Sworn Affidavit for  bacherlorhood', '6294e0161cddeimg.png', '2', '2022-05-30 16:17:42', '', '1', ''),
(7, '6294df94c0f08', 'Sworn Affidavit for  bacherlorhood', '6294e03d0fd59img.png', '2', '2022-05-30 16:18:21', '', '1', ''),
(8, '6294df94c0f08', 'Sworn Affidavit for  bacherlorhood', '6294e03d1ead7img.png', '2', '2022-05-30 16:18:21', '', '1', ''),
(9, '6294e0438a27b', 'Sworn Affidavit for  bacherlorhood', '6294e04b5d405img.png', '2', '2022-05-30 16:18:35', '', '1', ''),
(10, '6294e0438a27b', 'Sworn Affidavit for  bacherlorhood', '6294e04b6b984img.png', '2', '2022-05-30 16:18:35', '', '1', ''),
(11, '6294e1794011b', 'Sworn Affidavit for  bacherlorhood', '6294e1855ead8img.png', '2', '2022-05-30 16:23:49', '', '1', ''),
(12, '6294e1794011b', 'Sworn Affidavit for  bacherlorhood', '6294e18590023img.png', '2', '2022-05-30 16:23:49', '', '1', ''),
(13, '6295b0955459c', 'Sworn Affidavit for  bacherlorhood', '6295b117b5b8eimg.png', '2', '2022-05-31 07:09:27', '', '1', ''),
(14, '629651f064d20', '', '62965223bf99bimg.png', '2', '2022-05-31 18:36:35', '', '0', ''),
(15, '62965542d422e', '', '6296554add114img.png', '2', '2022-05-31 18:50:02', '', '0', ''),
(16, '6297020a8327c', '', '629703f0ac630img.png', '2', '2022-06-01 07:15:12', '', '0', ''),
(17, '6297020a8327c', '', '629703f0c664cimg.png', '2', '2022-06-01 07:15:12', '', '0', ''),
(18, '6297ad6d8758a', '', '6297ad75e57f6img.png', '2', '2022-06-01 19:18:29', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `signature`
--

CREATE TABLE `signature` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `set_default` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signatureDetails`
--

CREATE TABLE `signatureDetails` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `deleted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signatureDetails`
--

INSERT INTO `signatureDetails` (`id`, `user_id`, `filename`, `type`, `category`, `created_at`, `updated_at`, `created_by`, `deleted`) VALUES
(1, '0', 'sign1654145135img.png', '1', '1', '2022-06-02 21:39:59', '2022-06-02 21:39:59', '0', ''),
(2, '0', 'initial1654145136img.png', '1', '2', '2022-06-02 21:39:59', '2022-06-02 21:39:59', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `document_id` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `document_id`, `title`, `filename`, `created_at`, `created_by`, `deleted`) VALUES
(1, '10101', 'Affidavit of Sim Card loss', 'Affidavit_of_Loss.pdf', '2022-05-31', '1', ''),
(2, '10102', 'Affidavit of Name Change', 'Affidavit_of_Change_of_Name.pdf', '2022-05-31', '1', ''),
(3, '10103', 'Affidavit of Bachelorhood and Spinsterhood', 'Affidavit_of_Spinisterhood.pdf', '2022-05-31', '1', ''),
(4, '10104', 'Affidavit Declaration of age', '', '2022-05-31', '1', ''),
(5, '10105', 'Affidavit of Ownership', '', '2022-05-31', '1', ''),
(6, '10106', 'Affidavit of Addition of Name', 'Affidavit_of_Addition_of_Name.pdf', '2022-05-31', '1', ''),
(7, '10107', 'Sworn Declaration of Age in Lieu of a Birth Certificate', 'Sworn_Declaration_of_Age_in_Lieu_of_a_Birth_Certificate.pdf', '2022-05-31', '1', ''),
(8, '10108', 'Affidavit of Addition of Name', 'Affidavit_of_Addition_of_Name.pdf', '2022-05-31', '1', ''),
(9, '10109', 'Affidavit of Change of Ownership', 'Affidavit_of_Change_of Ownership.pdf', '2022-05-31', '1', ''),
(10, '10110', 'Affidavit of Citizenship.pdf', 'Affidavit_of_Citizenship.pdf', '2022-05-31', '1', ''),
(11, '10111', 'Affidavit of Confirmation of Relationship-Courtship.pdf', 'Affidavit_of_Confirmation_of_Relationship_Courtship', '2022-05-31', '1', ''),
(12, '10112', 'Affidavit of Death', 'Affidavit_of_Death.pdf', '2022-05-31', '1', ''),
(13, '10113', 'Affidavit of Domicile', 'Affidavit_of_Domicile.pdf', '2022-05-31', '1', ''),
(14, '10114', 'Affidavit of Good Conduct', 'Affidavit_of_Good_Conduct.pdf', '2022-05-31', '1', ''),
(15, '10115', 'Affidavit of Guardianship', 'Affidavit_of_Guardianship.pdf', '2022-05-31', '1', ''),
(16, '10116', 'Affidavit of Identity Theft', 'Affidavit_of_Identity_Theft.pdf', '2022-05-31', '1', ''),
(17, '10117', 'Affidavit of Marriage', 'Affidavit_of_Marriage.pdf', '2022-05-31', '1', ''),
(18, '10118', 'Affidavit of Proof of Ownership', 'Affidavit_of_Proof_of_Ownership.pdf', '2022-05-31', '1', ''),
(19, '10119', 'Affidavit of Residence', 'Affidavit_of_Residence.pdf', '2022-05-31', '1', ''),
(20, '10120', 'Affidavit of Sponsorship - Education', 'Affidavit_of_Sponsorship_Education.pdf', '2022-05-31', '1', ''),
(21, '10121', 'Affidavit of State of Origin', 'Affidavit_of_State_of_Origin.pdf', '2022-05-31', '1', '');

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
-- Indexes for table `documentImage`
--
ALTER TABLE `documentImage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signature`
--
ALTER TABLE `signature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signatureDetails`
--
ALTER TABLE `signatureDetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `documentImage`
--
ALTER TABLE `documentImage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `signature`
--
ALTER TABLE `signature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signatureDetails`
--
ALTER TABLE `signatureDetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
