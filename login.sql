-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 04:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'roaa@gmail.com', '123', 'roaa', 'shosha'),
(2, 'rania@gmail.com', '123', 'rania', 'ahmed'),
(3, 'abdo@gmail.com', '123', 'abdo', 'shosha'),
(4, 'ahmed@gmail.com', '1', 'ahmed', 'mo'),
(5, 'menna@gmail.com', '123', 'menna', 'hassan'),
(6, 'mh@gmail.com', '1', 'm', 'hh'),
(7, 'hehehe@gmail.com', '1', 'mmmmm', 'hhh'),
(8, 'mon@gmail.com', '1', 'mona', 'heba'),
(9, 'oop@gmail.com', '1', 'oop', 'ood'),
(10, 'monica@gmail.com', '123', 'monika', 'belluci'),
(11, 'mm@gmail.com', '1', 'hh', 'mm'),
(12, 'hm@gmail.com', '2', 'hm', 'roa'),
(13, 'youst@gmail.com', 'yoyo', 'Youstena', 'Wael'),
(14, 'k@g.com', 'kkk', 'k', 'k'),
(15, 'abc@gmail.com', '1', 'abc', 'df');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
