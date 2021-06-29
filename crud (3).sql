-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 05:40 AM
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
-- Table structure for table `lulus`
--

CREATE TABLE `lulus` (
  `id` int(11) NOT NULL,
  `lul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lulus`
--

INSERT INTO `lulus` (`id`, `lul`) VALUES
(1, 'LULUS'),
(2, 'TIDAK LULUS');

-- --------------------------------------------------------

--
-- Table structure for table `lupa`
--

CREATE TABLE `lupa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lupa`
--

INSERT INTO `lupa` (`id`, `name`, `email`) VALUES
(1, 'sri puspita dewi', 'sripuspitadewi@gmail.com'),
(2, 'sri puspita dewi', 'contoh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `psb`
--

CREATE TABLE `psb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `rep` varchar(255) NOT NULL,
  `res` varchar(255) NOT NULL,
  `top` varchar(255) NOT NULL,
  `nisn` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psb`
--

INSERT INTO `psb` (`id`, `name`, `jumlah`, `tanggal`, `rep`, `res`, `top`, `nisn`) VALUES
(45, 'sri puspita dewi', 'asdsad  ', '2021-07-02', 'Tidak Lulus', 'Perempuan  ', 'Buddha  ', 6556),
(54, '  bobby malela hutagalung', 'aaa ', '2021-06-17', 'Lulus', 'Laki ', 'Islam ', 12),
(55, ' bobby malela hutagalung', 'a', '2021-06-24', 'Tidak Lulus', 'Laki Laki', 'Buddha', 12),
(59, 'Amanda Atikasari', 'Bandar Lampung', '2021-06-01', 'Tidak Lulus', 'Perempuan', 'Islam', 1231131);

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
  `stat` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `stat`, `date_created`) VALUES
(6, ' bobby malela hutagalung', 'macvermilion@gmail.com      ', '$2y$10$F64xIkaOPElj8jqtBW18/O1Og/FMhjGFMlxi6pM/633q/sj6Va9AG', 1, '0', 8385959),
(7, 'sri puspita dewi', 'sripuspitadewi@gmail.com', '$2y$10$O2RlTTuwJYOzkjJAw83Uw.ynBmD.7WUB.j4DcknBO6n35rrCFcJFC', 2, '1', 0),
(15, ' asas', 'contoh@gmail.com ', '$2y$10$7j7A4O9GSnKdj/k/3cyrSe6cxti54TwUtszsxdpQQRT3owOISQiBW', 1, '1', 1624726644),
(16, 'qwq', 'aad@gmail.com', '$2y$10$HShjJU/sPckFzXJqlN3XtOrH93bi1AzqCiZtDA5N.U25zwzwRNRM.', 1, '1', 1624905550),
(17, 'Amanda Atikasari', 'contoha@gmail.com', '$2y$10$d99Pr7rveawZgVNi.hNbcucSi/c2d.tTBLaQsqdtrYcSmKWVayD4K', 1, '0', 1624937614);

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
-- Indexes for table `lulus`
--
ALTER TABLE `lulus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lupa`
--
ALTER TABLE `lupa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psb`
--
ALTER TABLE `psb`
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
-- AUTO_INCREMENT for table `lulus`
--
ALTER TABLE `lulus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lupa`
--
ALTER TABLE `lupa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psb`
--
ALTER TABLE `psb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
