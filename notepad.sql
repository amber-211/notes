-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 11:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notepad`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `tstamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `description`, `tstamp`) VALUES
(32, 'html', 'html is a hyper text mark up language', '2023-01-17 07:39:36'),
(35, 'js', 'javascript is scripting language', '2023-01-17 07:51:14'),
(36, 'css', 'css is a cascading style sheet', '2023-01-17 07:51:55'),
(38, 'sana', 'sana is a student', '2023-01-17 08:03:19'),
(41, 'fdfdf', 'fdfdf', '2023-01-17 08:08:52'),
(42, 'xfdf', 'dffdf', '2023-01-17 08:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'nida', 'abc@gmail.com', '$2y$10$ASqxK1IG.T/yMjabmz9GAu2Ayu.iRwpoTG1V2.pFTsrionTj6SNcq'),
(2, 'sidra', 'abc@gmail.comli', '$2y$10$ry5AE/dNMETtpzi8Fk9aAeSgRl36raivBUoHUoVTbsB10dWTJzc4u'),
(3, '    ali', 'abc@gmail.comli', '$2y$10$6.h4gXhGzz/AGndr1g2zge210YHC7yh5tsfGU9Rh7WLHiBsulEfqW'),
(4, 'hamza', 'abcdsdsd@gmail.com', '$2y$10$jTqrEa1bue6bZmEd9m8tRepqUggRxU9x6IruXbQiQ.1A4iuxqLWMi'),
(5, 'jk', 'abc@gmail.com', '$2y$10$QEWYcSjV4atmo.lPWMcnuuovowQGg2sFQb5RJXIpodJr.33fKWkxm'),
(6, 's', 'abc@gmail.com', '$2y$10$JkJTwBnIcsJX5YKSCpWsh.akQZKYOoij2IDE0mllg2owcwHkxhX9C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
