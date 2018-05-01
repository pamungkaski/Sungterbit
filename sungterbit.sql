-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2018 at 06:19 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sungterbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `first` varchar(20) NOT NULL,
  `second` varchar(20) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `first`, `second`, `CreatedAt`) VALUES
(1, 'test', 'pamung', '2018-05-01 10:57:04'),
(2, 'test', 'pamung', '2018-05-01 11:04:39'),
(3, 'pamung', 'test', '2018-05-01 11:04:39'),
(4, 'test', 'pamung', '2018-05-01 11:04:40'),
(5, 'pamung', 'test', '2018-05-01 11:04:40'),
(6, 'test', 'pamung', '2018-05-01 11:04:42'),
(7, 'pamung', 'test', '2018-05-01 11:04:42'),
(8, 'nyoba', 'pamung', '2018-05-01 11:14:29'),
(9, 'pamung', 'nyoba', '2018-05-01 11:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `username` varchar(20) NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT NULL,
  `UpdatedAt` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`username`, `CreatedAt`, `UpdatedAt`, `id`, `post`) VALUES
('pamung', '2018-05-01 10:41:58', '2018-05-01 10:41:58', 21, 'adaweawe'),
('test', '2018-05-01 10:52:08', '2018-05-01 10:52:08', 22, 'awdawdawd'),
('test', '2018-05-01 10:52:11', '2018-05-01 10:52:11', 23, 'eradwa');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `username` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `name`, `email`, `bio`, `birthdate`, `city`) VALUES
('nyoba', '', 'nyoba@gege', '', '', ''),
('pamung', 'Ehehehehhe', 'pamung@gmail.com', 'Gege Eta', '', ''),
('test', 'Dendi Boss', 'test@gmail.com', 'ETA GEGE', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `start` timestamp NULL DEFAULT NULL,
  `finish` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `username`, `start`, `finish`) VALUES
(1, 'test', '2018-05-01 04:13:35', '2018-05-01 04:17:24'),
(2, 'test', '2018-05-01 04:18:15', '2018-05-01 04:57:28'),
(3, 'test', '2018-05-01 04:58:39', NULL),
(4, 'test', '2018-05-01 07:36:35', '2018-05-01 07:46:01'),
(5, 'pamung', '2018-05-01 08:28:04', '2018-05-01 10:51:44'),
(6, 'test', '2018-05-01 10:52:01', '2018-05-01 11:13:37'),
(7, 'nyoba', '2018-05-01 11:13:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('nyoba', 'nyoba'),
('pamung', 'wkwkwk'),
('test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;