-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 07:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketprocurement_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` varchar(20) NOT NULL,
  `games` varchar(50) NOT NULL,
  `home_team` varchar(100) NOT NULL,
  `away_team` varchar(100) NOT NULL,
  `team_img` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ticket_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `games`, `home_team`, `away_team`, `team_img`, `date`, `time`, `ticket_price`) VALUES
('EVENT-11124128', 'Football', 'Nigeria', 'Togo', '66ba81885e2417.34724422.png', '2024-08-14', '15:45:00', '500'),
('EVENT-11124203', 'Football', 'Nigeria', 'Mali', '66ba81abba0859.53174851.jpg', '2024-08-16', '23:41:00', '500'),
('EVENT-12165530', 'Swimming', 'Nigeria', 'Ghana', '66e80ea2db6799.81635220.jpg', '2024-09-30', '04:00:00', '300');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `content`, `date`) VALUES
('FDB-04242907', 'Lawal Halimat', 'ganny@gmail.com', 'please can you treat cancer contact me please 09011223344', '2024-01-29'),
('FDB-07242808', 'shosanya razaq', 'skylinesnow07@gmail.com', 'thanks', '2024-01-28'),
('FDB-09242808', 'Edosomwan Ganiyat', 'rahzaqdavinci@gmail.com', 'malathy product is really good', '2024-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` varchar(20) NOT NULL,
  `game_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_name`) VALUES
('EVT-01122232', 'Cricket'),
('GAME-08121808', 'Football'),
('GAME-08121819', 'Swimming'),
('GAME-08121835', 'Cycling');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `status`) VALUES
('admin@admin.com', 'a', 'admin', 'active'),
('skylinesnow07@gmail.com', '1234', 'user', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nin` varchar(30) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullname`, `gender`, `email`, `phone`, `address`, `nin`, `reg_date`) VALUES
('shosanya razaq', 'male', 'skylinesnow07@gmail.com', '09013829585', 'abuja', '124gt984hn93', '2024-08-10 16:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_number` varchar(15) NOT NULL,
  `seat_number` int(11) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ticket_price` varchar(20) NOT NULL,
  `ticket_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_number`, `seat_number`, `event_id`, `user_id`, `date`, `time`, `ticket_price`, `ticket_status`) VALUES
('INBNLZ', 1, 'EVENT-11124203', 'skylinesnow07@gmail.com', '2024-08-16', '23:41:00', 'NGN 500', 'valid'),
('136FAC', 2, 'EVENT-11124128', 'skylinesnow07@gmail.com', '2024-08-14', '15:45:00', 'NGN 500', 'valid'),
('QC265X', 3, 'EVENT-11124128', 'skylinesnow07@gmail.com', '2024-08-14', '15:45:00', 'NGN 500', 'valid'),
('0VPPM8', 4, 'EVENT-12165530', 'skylinesnow07@gmail.com', '2024-09-30', '04:00:00', 'NGN 300', 'valid'),
('TUZJ3Y', 5, 'EVENT-11124128', 'skylinesnow07@gmail.com', '2024-08-14', '15:45:00', 'NGN 500', 'valid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`seat_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `seat_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
