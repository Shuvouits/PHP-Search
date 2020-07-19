-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 03:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `amount` int(100) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `amount`, `city`) VALUES
(1, 'Shuvo Bhowmik', 10000, 'Dhaka'),
(2, 'Protyay Roy', 1900, 'Jeheneidah'),
(5, 'Auntu Bhowmik', 20000, 'Dhaka'),
(6, 'Jhon Doe', 40000, 'Luxmibazar, Sutrapur'),
(7, 'Jhon Smith', 30000, 'California Usa'),
(8, 'Jhon Camble', 130000, 'Paries'),
(9, 'Protic Hasan', 32000, 'Jessore'),
(10, 'Sanju Samsung', 23000, 'India'),
(12, 'Luxmipathi Balaji', 40000, 'Delhi'),
(13, 'Ricky Ponting', 30000, 'Melbourne'),
(14, 'Adam Ghilcrist', 23000, 'Sydney'),
(15, 'Marlon Samules', 23400, 'Westindies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
