-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2024 at 08:39 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpuev`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `username`, `email`, `registration_number`, `password`) VALUES
(8, '', '', '', ''),
(9, 'driver1', 'driver1@example.com', 'REG1234', '$2y$10$4HukniVCv9RLD5WUn9IzQ.E4q5Ju93XciBZ6tT4VO./oSPdVo.4wS'),
(10, 'driver2', 'driver2@example.com', 'REG5678', '$2y$10$KJbM0w.BK2KmbgfXKSvaVef1mK2EdjCZrpFvHmG9aDdrZM9bgblAi'),
(11, 'driver3', 'driver3@example.com', 'REG9101', '$2y$10$XfpZ2zKAWzxHW.xHmCcw7u9RM/PjRUVXhMzxpPoye2LPJjt2JMLfe'),
(12, 'driver4', 'driver4@example.com', 'REG1213', '$2y$10$amRVnNoUzVR6B1ewyxTb6uJ64hvwNmbFYLfVQpN3G2M9iFVEabO3G');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `registration_number`) VALUES
(5, 'hello', 'hello@gmail.com', '$2y$10$V3d5bZzCIHMa5LMnVtD0Nezt9ESjsQ2T2a7Nig8iinvybKg51VbSG', ''),
(6, 'Yash Shri', 'Shrivastavattyash@gmail.com', '$2y$10$fXl5p1mk08gW4nQT.FPfA.scsG8VOoZdoKoa/mdfHI9jZHfxd5Nf6', ''),
(9, 'dhruv', 'dhruv@gmail.com', '$2y$10$Qk0ghE.aQEDjOVbJrHFbw.HSLPaSYGqyj1Yaxz6w4rRDOWE5NKxRC', '12317614'),
(7, 'mohan', 'mohanpyara@gmail.com', '$2y$10$lwR7I.HXCN/BlnLkAEf0qO7RUCAv8wuXFHFXFdPi2tevrSdXCW8jy', ''),
(8, 'oye', 'oye@gmail.oom', '$2y$10$ncojOPTpxNQc4FgoCbmekeGRf6TZHM1EcC/UuRognrViD.d9D/QWS', ''),
(10, 'Aman ', 'aman@gmail.com', '$2y$10$AiA1CFxVHEe.y/0hZjBvS.yeWqG4gihFlZ5pgCdT8PvlIUnJoqbKG', '12317612'),
(11, 'Yash', 'yash@gmail.com', '$2y$10$Ys0VeZPjddlnIZK9XC5mU.4HrioG6fMX9YSsgNCCbrdU1BqAG/OIi', '12314514');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
