-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 06:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roosevelt`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_lists`
--

CREATE TABLE `accepted_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(255) NOT NULL,
  `paid_attachment` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accepted_lists`
--

INSERT INTO `accepted_lists` (`id`, `pic`, `name`, `email`, `contact`, `date`, `course`, `paid_attachment`, `transmission`, `created_at`, `updated_at`) VALUES
(1, 'img/irabGOEbhZOpotM7i5jspMGMuA64gtWBNh66Im4V.png', 'asdfasd', 'skdj@sdkfj', '98498271628', '2024-03-23', 'TDC', 'img/AXCKw1OsUUxFYhAA1CXiyvpiTZYTPdFsMTzFK3Za.jpg', '---', NULL, NULL),
(2, 'img/TRckNm95eR6LmAM3qw2rQVGAUUfBNbt8u9cruVKn.jpg', 'Emman', 'emmanuelpunay6906@gmail.com', '09482985712', '2024-03-30', 'TDC', 'img/Gu05TZF1RLibVASwkIDfxblYxKzZjHn6PbBzDU5L.jpg', '---', NULL, NULL),
(3, 'img/tj1N5PEy4HCtgcPsg8A1TiEsDFW6SQFbHB0adjR9.jpg', 'Emmanuel Punay', 'emmanuelpunay6906@gmail.com', '09580938271', '2024-03-18', 'TDC', 'img/MnkuJzWzXgUPJ5fHKudNd4bPnWuzrA9rhBb60gJr.jpg', '---', NULL, NULL),
(4, 'img/VCsWyNFNPOBea2D0HoVmEHiHTMGkpGBWgyo4AW8r.jpg', 'Emmanuel Punay', 'emmanuelpunay6906@gmail.com', '09535682090', '2024-03-21', 'TDC', 'img/lQna3XkohyieQ8dlFHjWdnlOSW0BEvcfXJQNqSFG.jpg', '---', NULL, NULL),
(5, 'img/31ZXuH9SY6L5U75QXWDCjHpOvRLcBJKYWHXnSi57.jpg', 'asdkfj', 'ksdj@skdfj', '09489839582', '2024-03-17', 'TDC', 'img/gpWL4B96FrzzEOnr9DIuUGoT80nQ0qnkOWENoLIx.jpg', '---', NULL, NULL),
(6, 'https://via.placeholder.com/640x480.png/0000aa?text=people+sed', 'Rowan Abshire', 'zolson@example.net', '+13178358906', '2024-03-13', 'TDC', '---', '---', NULL, NULL),
(7, 'https://via.placeholder.com/640x480.png/00aa77?text=people+architecto', 'Daisha Schneider', 'douglas.carleton@example.com', '+16606020232', '2024-03-06', 'TDC', '---', '---', NULL, NULL),
(8, 'https://via.placeholder.com/640x480.png/008844?text=people+dolore', 'Rico Leannon', 'tremblay.savanna@example.com', '+16786185115', '2024-03-16', 'TDC', '---', '---', NULL, NULL),
(9, 'https://via.placeholder.com/640x480.png/001199?text=people+aut', 'Antonetta Becker', 'pasquale34@example.net', '+18603648093', '2024-03-06', 'TDC', '---', '---', NULL, NULL),
(10, 'https://via.placeholder.com/640x480.png/00aa22?text=people+et', 'Dr. Adan Walker MD', 'murazik.rene@example.org', '+17314234091', '2024-03-01', 'TDC', '---', '---', NULL, NULL),
(11, 'https://via.placeholder.com/640x480.png/009944?text=people+quasi', 'Ms. Antonette Hamill', 'rnienow@example.com', '+19894794338', '2024-03-05', 'TDC', '---', '---', NULL, NULL),
(12, 'https://via.placeholder.com/640x480.png/001188?text=people+ad', 'Ford Gusikowski MD', 'turner.arielle@example.com', '+14587126889', '2024-03-03', 'TDC', '---', '---', NULL, NULL),
(13, 'https://via.placeholder.com/640x480.png/002233?text=people+qui', 'Miss Leanne Flatley Sr.', 'igutmann@example.com', '+12402164430', '2024-03-18', 'TDC', '---', '---', NULL, NULL),
(14, 'https://via.placeholder.com/640x480.png/006655?text=people+expedita', 'Dr. Demarco Williamson', 'freeda86@example.org', '+16125439608', '2024-03-15', 'TDC', '---', '---', NULL, NULL),
(15, 'https://via.placeholder.com/640x480.png/0033aa?text=people+eligendi', 'Prof. Josie Wilderman PhD', 'mellie.west@example.net', '+16086713493', '2024-03-15', 'TDC', '---', '---', NULL, NULL),
(16, 'https://via.placeholder.com/640x480.png/0088ee?text=people+assumenda', 'Dr. Evans Macejkovic', 'obalistreri@example.com', '+15415415025', '2024-03-04', 'TDC', '---', '---', NULL, NULL),
(17, 'https://via.placeholder.com/640x480.png/005533?text=people+eum', 'Miss Kristin Koss V', 'qbahringer@example.net', '+12489180841', '2024-03-17', 'TDC', '---', '---', NULL, NULL),
(18, 'https://via.placeholder.com/640x480.png/003333?text=people+ut', 'Felipe Jenkins', 'wheathcote@example.com', '+14257552034', '2024-03-05', 'TDC', '---', '---', NULL, NULL),
(19, 'https://via.placeholder.com/640x480.png/0033ff?text=people+omnis', 'Florencio Deckow', 'mccullough.jeanette@example.org', '+12409606123', '2024-03-10', 'TDC', '---', '---', NULL, NULL),
(20, 'https://via.placeholder.com/640x480.png/00dd66?text=people+eaque', 'Assunta Bins', 'armstrong.filomena@example.com', '+13167397732', '2024-03-13', 'TDC', '---', '---', NULL, NULL),
(21, 'img/th6tfZos45UJKGddrM3No0S2LhyrxUuN4sSIT1va.jpg', 'Emmanuel Punay', 'emmanuelpunay6906@gmail.com', '09535682090', '2024-03-22', 'TDC', 'img/blSf47bDB19mnFrt3347mLXDpjoau4gEBXOSNzZ6.jpg', '---', NULL, NULL),
(22, 'img/joAWYcWdJi11Ui35GWZhSefsDqXeU500PjaOLEkf.jpg', 'Emmanuel Punay', 'emmanuelpunay6906@gmail.com', '09535682090', '2024-03-28', 'PDC', 'img/BoG5KdMqFfhFY2uVOGwAerfqJBxXQNlfSVi2rBfw.jpg', 'Automatic', NULL, NULL),
(23, 'https://via.placeholder.com/640x480.png/008866?text=people+iusto', 'Beaulah Lubowitz V', 'hosea.vandervort@example.org', '+14243505651', '2024-03-03', 'PDC', '---', 'Manual', NULL, NULL),
(24, 'img/joAWYcWdJi11Ui35GWZhSefsDqXeU500PjaOLEkf.jpg', 'Emmanuel Punay', 'emmanuelpunay6906@gmail.com', '09535682090', '2024-03-28', 'PDC', 'img/BoG5KdMqFfhFY2uVOGwAerfqJBxXQNlfSVi2rBfw.jpg', 'Automatic', NULL, NULL),
(25, 'img/8LdMnmtNNJbUBFjgK80Bm3kSJHj9VYh4tISma5jW.jpg', 'Emmanuel Punay', 'emmanuelpunay6906@gmail.com', '09535682090', '2024-03-15', 'TDC', 'img/ZZ09zdAEZXw5aeG83DrHypFK1RsU9ett7Tqft0ei.jpg', '---', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(255) NOT NULL,
  `paid_attachment` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `pic`, `name`, `email`, `contact`, `date`, `course`, `paid_attachment`, `transmission`, `created_at`, `updated_at`) VALUES
(39, 'https://via.placeholder.com/640x480.png/00ddee?text=people+recusandae', 'Albert Pfeffer III', 'irwin.zulauf@example.com', '+16822474386', '2024-03-18', 'TDC', '---', '---', '2024-03-19 03:36:21', '2024-03-19 03:36:21'),
(40, 'https://via.placeholder.com/640x480.png/00dd44?text=people+cupiditate', 'Coralie Spinka', 'qmueller@example.net', '+14792443490', '2024-03-07', 'TDC', '---', '---', '2024-03-19 03:36:21', '2024-03-19 03:36:21'),
(41, 'https://via.placeholder.com/640x480.png/00bbdd?text=people+sequi', 'Mr. Timmy Runolfsson', 'watson.jenkins@example.net', '+18597768888', '2024-03-09', 'TDC', '---', '---', '2024-03-19 03:36:21', '2024-03-19 03:36:21'),
(44, 'https://via.placeholder.com/640x480.png/001177?text=people+similique', 'Mr. Blaise Greenfelder', 'evangeline20@example.org', '+15717226178', '2024-03-02', 'PDC', '---', 'Automatic', '2024-03-19 23:23:59', '2024-03-19 23:23:59'),
(45, 'https://via.placeholder.com/640x480.png/007766?text=people+sunt', 'Lavada Daugherty', 'barney70@example.org', '+16809439749', '2024-03-09', 'PDC', '---', 'Automatic', '2024-03-19 23:23:59', '2024-03-19 23:23:59'),
(46, 'https://via.placeholder.com/640x480.png/00eeff?text=people+id', 'Mr. Claude Heller', 'spinka.oleta@example.org', '+16627299832', '2024-03-17', 'PDC', '---', 'Manual', '2024-03-19 23:23:59', '2024-03-19 23:23:59'),
(47, 'https://via.placeholder.com/640x480.png/0077dd?text=people+praesentium', 'Eriberto Greenfelder', 'elias.hyatt@example.net', '+12105729020', '2024-03-09', 'PDC', '---', 'Manual', '2024-03-19 23:23:59', '2024-03-19 23:23:59'),
(48, 'https://via.placeholder.com/640x480.png/005555?text=people+enim', 'Kitty Jenkins', 'dariana.crona@example.com', '+17084458236', '2024-03-06', 'PDC', '---', 'Automatic', '2024-03-19 23:23:59', '2024-03-19 23:23:59'),
(49, 'https://via.placeholder.com/640x480.png/006699?text=people+ut', 'Polly Hill', 'barton.june@example.org', '+17439150438', '2024-02-29', 'PDC', '---', 'Automatic', '2024-03-19 23:23:59', '2024-03-19 23:23:59'),
(50, 'https://via.placeholder.com/640x480.png/007755?text=people+sapiente', 'Isaac Schmeler', 'carlos44@example.com', '+16363673762', '2024-03-10', 'PDC', '---', 'Automatic', '2024-03-19 23:23:59', '2024-03-19 23:23:59'),
(51, 'https://via.placeholder.com/640x480.png/008800?text=people+sit', 'Retha Bruen', 'julius.dibbert@example.org', '+14453770556', '2024-03-03', 'PDC', '---', 'Manual', '2024-03-19 23:23:59', '2024-03-19 23:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `denied_lists`
--

CREATE TABLE `denied_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(255) NOT NULL,
  `paid_attachment` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `denied_lists`
--

INSERT INTO `denied_lists` (`id`, `pic`, `name`, `email`, `contact`, `date`, `course`, `paid_attachment`, `transmission`, `created_at`, `updated_at`) VALUES
(3, 'img/MkYykiMBicRglxBHxbjPQdpoFLtAQqx5Blqf2eRd.jpg', 'Emerson Payawal', 'emerson@gmail.com', '09409281034', '2024-03-16', 'TDC', 'img/6IBcCWAcaaz9p4IOVVlXqNlxr6XmjubshRcTbheK.jpg', '---', NULL, NULL),
(4, 'img/imy8PjNG7640x70knqKcRQ3XBtq0BeUx6C7QlRgS.jpg', 'Emerson Payawal', 'emerson@gmail.com', '09489828142', '2024-03-24', 'TDC', 'img/Vz9FW1wA5uVHAcIh3LxEFyqinweXdnqxVY9DaCT8.png', '---', NULL, NULL),
(5, 'img/U2nZqe6iW2RkQJ9uYrbyVPC5IxezOiYDtWFQa26Q.jpg', 'Emerson Payawal', 'emerson@gmail.com', '09482759182', '2024-03-16', 'TDC', 'img/TQ6dsS3OUuOoV3Y8A1kBSj0du05A8773WKgfb65t.png', '---', NULL, NULL),
(6, 'img/TDmEZpsMLOM3DFjJJhy7F7s1t9vCu83Vsec3UMAH.jpg', 'Emerson Payawal', 'emerson@gmail.com', '09482759182', '2024-03-16', 'TDC', 'img/qn5LSYYWI8CZoHQpbtNHPEZjN09BS50jrw93FTla.png', '---', NULL, NULL),
(7, 'img/N18Ze9hDA2cIbmVmmtMm5GvJWTPBjHjkxCQNf8cZ.jpg', 'sdfjh', 'jsdh@jh', '09094928591', '2024-03-01', 'TDC', 'img/ckLwdDMY8BuOm0UeSKOv8BfVrDB5qz1rmH9PZCbq.png', '---', NULL, NULL),
(9, 'img/QqaCmpIAJXuNxQ5g3DvfPqcluH2zSbbae68Tb6wy.jpg', 'jsdh', 'sjdh@jdhfjh', '09498271649', '2024-03-16', 'TDC', 'img/kvnjCkpHX3cBF0xAQHn5ojD9KE2ElTWppjjdga3Q.jpg', 'Manual', NULL, NULL),
(10, 'img/pJanKBliX5lzad0pJF8jKQF7rM7msgKNAgL7alth.jpg', 'AKJSFAK', 'lskdf@ldkf', '09498471092', '2024-12-31', 'PDC', 'img/SuxqeGIBFTEAcp80uqsdixcOrtt5HVdvuUeE317A.jpg', 'Automatic', NULL, NULL),
(11, 'https://via.placeholder.com/640x480.png/000011?text=people+nihil', 'Prof. Rollin Stroman', 'hand.raheem@example.org', '+12099165821', '2024-03-08', 'TDC', '---', '---', NULL, NULL),
(12, 'https://via.placeholder.com/640x480.png/008899?text=people+recusandae', 'Dr. Giovanna Gorczany MD', 'don.jacobs@example.com', '+19517585687', '2024-03-11', 'PDC', '---', 'Manual', NULL, NULL),
(13, 'https://via.placeholder.com/640x480.png/00ccdd?text=people+sit', 'Consuelo Bernier PhD', 'jcollier@example.com', '+16625704071', '2024-03-11', 'TDC', '---', '---', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `branch` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(2048) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `pic`, `f_name`, `l_name`, `email`, `contact`, `gender`, `age`, `created_at`, `updated_at`) VALUES
(1, 'img/fn48Rts8OZo3RvDdxhUdGkK6jubuNIbjLSvxxzlV.jpg', 'Iverson', 'Norberte', 'iv3r@gmail.com', '09582748712', 'Male', '31', '2024-03-14 22:19:00', '2024-03-14 22:19:00'),
(2, 'img/K30sNPuknE7ufvxdFZTJ769Vnxon0xoSrf4OpvLn.jpg', 'Emmanuel', 'Punay', 'emmanuelpunay6906@gmail.com', '09482985292', 'Male', '20', '2024-03-15 21:38:31', '2024-03-15 21:38:31'),
(3, 'img/ry3kXm6hOWDdx3MnL2w5wRc2H9bs2M7R0MhMdFus.jpg', 'Emerson ', 'Payawal', 'emerson@gmail.com', '09909583716', 'Male', '32', '2024-03-20 01:22:22', '2024-03-20 01:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2014_10_12_000000_create_users_table', 1),
(31, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(32, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(35, '2020_05_21_100000_create_teams_table', 1),
(36, '2020_05_21_200000_create_team_user_table', 1),
(37, '2020_05_21_300000_create_team_invitations_table', 1),
(38, '2024_02_01_025724_create_sessions_table', 1),
(39, '2024_02_05_090105_create_customers_table', 1),
(40, '2024_02_29_082044_create_events_table', 1),
(42, '2024_03_07_082723_create_denied_lists_table', 1),
(43, '2024_03_07_103354_create_instructors_table', 1),
(44, '2024_03_03_053640_create_accepted_lists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3JLma60WeohIIMlrVt5QYEM4BjDurqfdnqpEnLHS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYmJQaXZJa1VIbUFTZkNkOXFvY3VCU1p0dEVMVEpvZzdnR2VzeGFWZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZGMtYWNjZXB0ZWQtbGlzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkUGlvRjNYb0trUVN0Z0REQU5hcS41LmZSOERFL0gxeUlOM1p3cnY1UUtDWEJqYkdKOHdjczIiO30=', 1711541733);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Emman\'s Team', 1, '2024-03-13 20:01:05', '2024-03-13 20:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Emman', 'emmanuelpunay6906@gmail.com', NULL, '$2y$12$PioF3XoKkQStgDDANaq.5.fR8DE/H1yIN3Zwrv5QKCXBjbGJ8wcs2', NULL, NULL, NULL, NULL, 1, 'profile-photos/JgMdtS18SKleUIlEJlOkBRIqLkKO8oN8Tqd564HE.jpg', '2024-03-13 20:01:05', '2024-03-20 21:04:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_lists`
--
ALTER TABLE `accepted_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denied_lists`
--
ALTER TABLE `denied_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_lists`
--
ALTER TABLE `accepted_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `denied_lists`
--
ALTER TABLE `denied_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
