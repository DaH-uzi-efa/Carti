-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.5.2:3306
-- Generation Time: May 04, 2022 at 02:13 PM
-- Server version: 8.0.29-0ubuntu0.20.04.2
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carti_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
<<<<<<< HEAD
(1, 'Huzefa', 'huzefaadil23@gmail.com', '$2y$10$daPAc17iIrCDjUUggnaJI.2u.IguXdC7oRYz2qc8xf01Vwqc2CUn2', 0, 'verified'),
=======
(1, 'Huzefa', 'huzefaadil23@gmail.com', '$2y$10$vH6OWRIWIljucSWSioT0wO0LIMgHToDcENdvdkRuqTag17k2SE5D6', 0, 'verified'),
>>>>>>> 2ca200f77e5129aa892cc6b4e7b17eeb44a0dc00
(2, 'Dababy', 'supercrazymaker@gmail.com', '$2y$10$/MyfiO0/10spdIr02z6McutxyW13Wa6.bnEzUf9VvO1T2TaWo5V0y', 0, 'verified'),
(3, 'Alfred', 'albla001@osloskolen.no', '$2y$10$daPAc17iIrCDjUUggnaJI.2u.IguXdC7oRYz2qc8xf01Vwqc2CUn2', 0, 'verified'),
(4, 'Sulaiman', 'moasa002@osloskolen.no', '$2y$10$/MyfiO0/10spdIr02z6McutxyW13Wa6.bnEzUf9VvO1T2TaWo5V0y', 0, 'verified'),
(5, 'Kristoffer', 'krbaa001@osloskolen.no', '$2y$10$/MyfiO0/10spdIr02z6McutxyW13Wa6.bnEzUf9VvO1T2TaWo5V0y', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
