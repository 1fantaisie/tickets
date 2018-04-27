-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 07:43 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT 'guest',
  `datet` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `username`, `datet`) VALUES
(1, '123456', '2018-01-15 14:01:08'),
(2, 'admin', '2018-01-15 15:01:13'),
(3, 'admin', '2018-01-15 15:01:09'),
(4, '123456', '2018-01-15 15:01:43'),
(5, '123456', '2018-01-15 20:01:53'),
(6, '123456', '2018-01-15 20:01:17'),
(7, 'admin', '2018-01-15 21:01:46'),
(8, '123456', '2018-01-15 21:01:36'),
(9, 'admin', '2018-01-16 07:01:11'),
(10, 'newuser', '2018-01-16 07:01:12'),
(11, 'admin', '2018-01-16 07:01:28'),
(12, '123456', '2018-01-16 07:01:38'),
(13, 'sala308', '2018-01-16 07:01:29'),
(14, 'admin', '2018-01-16 07:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `movie` varchar(50) NOT NULL,
  `seat` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `username`, `movie`, `seat`) VALUES
(10, '123456', 'Den of Thieves (2018)', 'B-1'),
(9, '123456', 'Bullet Head (2017)', 'A-1'),
(8, '123456', 'Bullet Head (2017)', 'B-2'),
(7, '123456', 'Bullet Head (2017)', 'B-1'),
(11, '123456', 'Molly', 'A-1'),
(12, '123456', 'The Disaster Artist (2017)', 'C-4'),
(13, '123456', 'The Disaster Artist (2017)', 'C-3'),
(14, '123456', 'The Disaster Artist (2017)', 'C-2'),
(15, '123456', 'Den of Thieves (2018)', 'A-1'),
(16, '123456', 'Den of Thieves (2018)', 'A-2'),
(17, '123456', 'Den of Thieves (2018)', 'B-5'),
(18, '123456', 'Den of Thieves (2018)', 'B-2'),
(19, '123456', 'Darkest Hour (2017)', 'A-1'),
(20, '123456', 'Darkest Hour (2017)', 'A-4'),
(21, '123456', 'Darkest Hour (2017)', 'A-9'),
(22, '123456', 'Darkest Hour (2017)', 'A-8'),
(23, '123456', 'Downsizing (2017)', 'A-2'),
(24, '123456', 'Den of Thieves (2018)', 'E-9'),
(25, '123456', 'Den of Thieves (2018)', 'J-10'),
(26, '123456', 'Darkest Hour (2017)', 'A-6'),
(27, 'sala308', 'Darkest Hour (2017)', 'B-1'),
(28, 'sala308', 'Darkest Hour (2017)', 'C-1'),
(29, 'sala308', 'Darkest Hour (2017)', 'D-1'),
(30, 'sala308', 'Darkest Hour (2017)', 'D-4'),
(31, 'sala308', 'Darkest Hour (2017)', 'A-2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_type`) VALUES
('123456', '123456', 1),
('admin', 'adminpass', 0),
('sala308', 'pass', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
