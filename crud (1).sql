-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 08:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `rep` varchar(255) NOT NULL,
  `res` int(128) NOT NULL,
  `top` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `jumlah`, `tanggal`, `rep`, `res`, `top`) VALUES
(37, ' sri puspita dewi', 'fuitt', '2021-05-16', 'aaa', 1, 'keuangan'),
(38, ' sri puspita dewi', 'uang', '2021-05-11', 'sss', 1, 'keuangan'),
(39, ' sri puspita dewi', 'kere', '2021-05-20', 'ddd', 1, 'keuangan'),
(40, ' sri puspita dewi', 'bokek', '2021-05-16', 'fff', 1, 'keuangan'),
(41, ' sri puspita dewi', 'abis', '2021-05-05', 'sdfsd', 1, 'keuangan'),
(42, ' sri puspita dewi', 'bu', '2021-05-23', ' ggg', 1, 'keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `otp` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`, `otp`) VALUES
(6, 'bobby malela hutagalung', 'macvermilion@gmail.com', '$2y$10$HV7ywluRAZUZl4Le3ksUt.K.f3pu4tczThWneSARnfu3cUmMzaeiy', 1, 1, 1609871710, 6598776),
(7, 'sri puspita dewi', 'sripuspitadewi@gmail.com', '$2y$10$O2RlTTuwJYOzkjJAw83Uw.ynBmD.7WUB.j4DcknBO6n35rrCFcJFC', 2, 1, 1615920682, 6598776),
(8, 'bobby malela hutagalung', 'macvermailion@gmail.com', '$2y$10$7ptsuGKMINPbxTwpCMBk2OnU0C2kB5.I9CJlW13qGU0s2TNi8UxYO', 2, 1, 1617971596, 6598776),
(9, 'bobby malela hutagalung', 'macvermiliona@gmail.com', '$2y$10$2pKWce.caDUwNdm5FPF7g.rJpaayDv1oTvPpvuI.TcrdvULghv0bu', 1, 1, 1618028243, 6598776),
(10, 'asdasd', 'contoh@gmail.com', '$2y$10$pt8oW.xG0Dsfb/mz6Qs.M.A/51z0ZB3UNOzCqUwnA4Fi13RsoVBsy', 1, 1, 1618028719, 6598776),
(11, 'bobby malela hutagalung', 'aad@gmail.com', '$2y$10$8U2g4uKdkffleNeY/pij/exBl/a9axSyKwPF8YaE/mqrLtKOLqvbW', 1, 1, 1620033571, 6598776),
(12, 'aaa', 'asas@gad.vf', '$2y$10$mnOKrRsNOMCOe9J/tGf/NOD/EVTm4fDxJl3S8GvdPbwCcV00qF/oW', 2, 1, 1621186562, 6598776),
(13, 'asda', 'sss@g.vo', '$2y$10$DMDJW7ypMelZ1QlNulkwTewqTnSUDh0yYfgQFr2w2uS1iIDOrc9Ye', 2, 1, 1621189776, 6598776);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
