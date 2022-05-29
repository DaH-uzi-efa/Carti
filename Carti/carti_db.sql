-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 09:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'Huzefa', 'huzefaadil23@gmail.com', '$2y$10$daPAc17iIrCDjUUggnaJI.2u.IguXdC7oRYz2qc8xf01Vwqc2CUn2', 0, 'verified'),
(2, 'Dababy', 'supercrazymaker@gmail.com', '$2y$10$/MyfiO0/10spdIr02z6McutxyW13Wa6.bnEzUf9VvO1T2TaWo5V0y', 0, 'verified'),
(3, 'Alfred', 'albla001@osloskolen.no', '$2y$10$daPAc17iIrCDjUUggnaJI.2u.IguXdC7oRYz2qc8xf01Vwqc2CUn2', 0, 'verified'),
(4, 'Sulaiman', 'moasa002@osloskolen.no', '$2y$10$/MyfiO0/10spdIr02z6McutxyW13Wa6.bnEzUf9VvO1T2TaWo5V0y', 0, 'verified'),
(5, 'Kristoffer', 'krbaa001@osloskolen.no', '$2y$10$/MyfiO0/10spdIr02z6McutxyW13Wa6.bnEzUf9VvO1T2TaWo5V0y', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_url` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_url`, `name`) VALUES
(54, 'video-6274d6d42eeff5.01526195.mp4', ''),
(55, 'video-6274d7f2707e74.23385223.mov', ''),
(56, 'video-6274db52e26b67.76870920.mp4', ''),
(57, 'video-6274db610f9a95.74056602.mp4', '<br />\n<b>Warning</b>:  Array to string conversion in <b>C:xampphtdocsCartiuploadpage.php</b> on line <b>85</b><br />\nArray'),
(58, 'video-6274dbc0134c70.19303065.mov', 'Huzefa'),
(59, 'video-6274df3e853274.57020519.mov', 'Huzefa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
