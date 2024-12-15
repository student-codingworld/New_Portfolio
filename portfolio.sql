-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 04:04 PM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'pawanport', '3c2a12a1fdc2972d9845988f3bd3ee82');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Pawan Patel', 'pps756596@gmail.com', 'fgsfgsg', '2024-12-07 06:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `link`) VALUES
(2, 'trial version', 'trail version', 'Screenshot 2024-12-02 122134.png', 'https://kids.rf.gd'),
(4, 'Coding World Website', 'A modern platform providing innovative tools and resources like currency converters, resume makers, expense trackers, and study materials to save users time and enhance productivity.\r\n\r\nCEO: Pawan, a visionary leader and skilled developer, driving Coding World with expertise in web development, PHP, and Python programs.', 'codingworld_website.png', 'https://codingworld.rf.gd'),
(5, 'Studyfeel website for higher educational purpose', 'StudyFeel is your ultimate online companion for academic success, offering a seamless platform packed with resources like syllabus guides, previous year papers, mock tests, and more. Designed with a focus on user-friendly navigation and responsive design, StudyFeel ensures students have everything they need at their fingertips. Empower your learning journey with ease and efficiency at StudyFeel!', 'studyfeel_website.png', 'https://studyfeel.free.nf'),
(6, '\"TechTitans Hub: Empowering Innovation Together\"', 'TechTitans Team is a dynamic group of innovative tech enthusiasts dedicated to crafting cutting-edge solutions. From web development to advanced software design, we combine creativity and expertise to deliver exceptional results.', 'techtitanTeam_website.png', 'https://techtitansadv.rf.gd'),
(7, 'blogstore website', 'A technical blog website is a platform designed to share in-depth knowledge, tutorials, and updates on technology, programming, software development, and emerging tech trends. It empowers tech enthusiasts, developers, and learners to stay informed and enhance their skills through engaging and well-researched articles.', 'techblog_website.png', 'https://blogstore.rf.gd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
