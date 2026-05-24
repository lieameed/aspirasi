-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2026 at 06:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `votes` int DEFAULT '0',
  `status` enum('IN DISCOVERY','PLANNED','IN PROGRESS','COMPLETED') DEFAULT 'IN DISCOVERY',
  `category` varchar(50) DEFAULT 'IDEAS',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `user_id`, `title`, `description`, `votes`, `status`, `category`, `created_at`) VALUES
(1, 1, 'aaa', 'aaa', 3, 'IN DISCOVERY', 'IDEAS', '2026-05-23 08:15:11'),
(2, 1, 'tes', 'tes', 2, 'IN DISCOVERY', 'IDEAS', '2026-05-23 08:20:02'),
(3, 1, 'aaaaaaa', 'asdeasd', 6, 'IN DISCOVERY', 'IDEAS', '2026-05-23 08:54:52'),
(4, 13, 'testest', '1sadeeee', 0, 'IN DISCOVERY', 'IDEAS', '2026-05-24 06:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` enum('Ide Baru','Pengembangan Ide','Kolaborasi','Inovasi Siswa') NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `user_id`, `title`, `category`, `description`, `created_at`, `updated_at`) VALUES
(2, 1, 'kata orang tambah sistem lain', 'Pengembangan Ide', 'gatau mau kasi apa deskripsinya ini tes doang supaya tau databes wok atau ga', '2026-05-23 07:10:40', '2026-05-23 07:10:40'),
(9, 1, 'tees', 'Kolaborasi', 'asdeasdf', '2026-05-23 08:44:09', '2026-05-24 05:10:01'),
(14, 13, 'abcd', 'Ide Baru', 'aaaaaa', '2026-05-24 05:10:49', '2026-05-24 05:10:49'),
(15, 13, 'aaaaaaaaa', 'Inovasi Siswa', 'aaaaaaaaaa', '2026-05-24 05:11:01', '2026-05-24 05:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `caption` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `caption`, `image_path`, `location`, `created_at`) VALUES
(1, 1, 'tes bg', 'assets/images/post_6a118ed97783f.jpg', 'Jakarta, Indonesia', '2026-05-23 11:26:17'),
(2, 1, 'tes bgas', 'assets/images/post_6a118f0290eea.jpg', 'Jakarta, Indonesia', '2026-05-23 11:26:58'),
(3, 1, 'lait bs', 'assets/images/post_6a118f20eb399.jpeg', 'Jakarta, Indonesia', '2026-05-23 11:27:28'),
(4, 1, 'lait bs', 'assets/images/post_6a118f5a17180.jpeg', 'Jakarta, Indonesia', '2026-05-23 11:28:26'),
(5, 1, 'shion on fire', 'assets/images/post_6a11961128e52.jpg', 'Jakarta, Indonesia', '2026-05-23 11:57:05'),
(6, 1, 'ten', 'assets/images/post_6a129f9f3c750.jpg', 'Jakarta, Indonesia', '2026-05-24 06:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password_hash`, `created_at`) VALUES
(1, 'lieameed', '$2y$10$5a2bp9icxeIliieI27tcHubHL9w3WW4nkuLS8GkCfjNA/svjiPCwG', '2026-05-22 14:52:57'),
(10, 'coba', '$2y$10$hkOFv1ZQ6Saq9AoVVBs2Quanh5/KxDeg37pouSNdxiPHS88AmPXlO', '2026-05-23 12:20:11'),
(11, 'tes', '$2y$10$zerJrI2M4.D.LxkfYaMF8uTbIn9aLKh62.F9cS/DifeCmIJWXb/H.', '2026-05-23 12:20:17'),
(12, 'tesa', '$2y$10$/gbYJ7BseaTBtpRYEiGg6ufkAlVlpXMeQN/8lvFnRmLMgCYywxyGy', '2026-05-23 12:21:51'),
(13, 'a', '$2y$10$m7Ye8bMeYeR7rjz5diMEM.dQe6GoRoLw2cTy4ll4U97uN9R89U8sC', '2026-05-23 12:23:29'),
(14, 'aa', '$2y$10$9k3YKhoym/Qu4hRuRiA0QOjWecDGCf/AN0RF555oEEzdC.8DylaOS', '2026-05-23 12:27:20'),
(17, 'aaa', '$2y$10$C7q/ykLr2WM8by7ClUTQruLbh69/JWnfZ.JKmJXqSjydWL42BXE.e', '2026-05-23 12:27:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
