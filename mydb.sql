-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Apr 17, 2023 at 02:10 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int NOT NULL,
  `ID` int NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `blog_data` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `likes` int NOT NULL DEFAULT '0',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `ID`, `blog_title`, `blog_data`, `likes`, `image`) VALUES
(1, 1, 'Post title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 15, 'https://mdbootstrap.com/img/new/standard/nature/184.jpg'),
(2, 1, 'Post title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 10, 'https://mdbootstrap.com/img/new/standard/nature/023.jpg'),
(3, 1, 'Post title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 10, 'https://mdbootstrap.com/img/new/standard/nature/111.jpg'),
(4, 2, 'Post title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 5, 'https://mdbootstrap.com/img/new/standard/nature/002.jpg'),
(5, 2, 'Post title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 5, 'https://mdbootstrap.com/img/new/standard/nature/022.jpg'),
(6, 3, 'Post title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 0, 'https://mdbootstrap.com/img/new/standard/nature/035.jpg'),
(7, 1, 'Anuj', 'Bahut Rota Hai', 0, 'https://mdbootstrap.com/img/new/standard/nature/023.jpg'),
(8, 1, 'Mansi', 'Are Yarrrrrrrrrrrrrrrrrr.', 0, 'https://mdbootstrap.com/img/new/standard/nature/035.jpg'),
(10, 3, 'Ayush', 'Mujhe TT khelna Hai', 0, 'https://mdbootstrap.com/img/new/standard/nature/023.jpg'),
(11, 3, 'Vaibhav', 'Sunday ko bhi ana Pardega task ke liye.', 0, 'https://mdbootstrap.com/img/new/standard/nature/184.jpg'),
(12, 3, 'Mansi', 'Mujhe Chawmeen kaha hai', 0, 'https://mdbootstrap.com/img/new/standard/nature/111.jpg'),
(13, 3, 'Satyam', 'jaldi jaldi task kar lu fir cool bhi toh banna hai.', 0, 'https://mdbootstrap.com/img/new/standard/nature/022.jpg'),
(14, 2, 'Data', 'Jo Data Samaj gaya wo raja hai.', 0, 'https://mdbootstrap.com/img/new/standard/nature/111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Type` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`, `Type`) VALUES
(1, '1', 'a@a.com', '1', 'user'),
(2, '2', 'b@b.com', '2', 'user'),
(3, '3', 'c@c.com', '3', 'user'),
(4, 'b', '2@2.com', 'b', 'user'),
(5, 'Admin', 'admin@admin.com', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
