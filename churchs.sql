-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2023 at 03:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `churchs`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cac_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `email`, `contact`, `status`, `logo`, `cac_doc`, `created_at`, `updated_at`) VALUES
(1, 'COCIN CHURCH HIEPANG', 'Nigeria', 'hp@gmail.com', '6378299223', 0, '1686270059.JPG', NULL, '2023-06-08 23:20:59', '2023-06-08 23:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `Name`, `Image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'REV. MR&MISS  MEYOR POP', '2.png', 1, NULL, '2023-06-28 23:00:12'),
(3, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(4, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(5, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(6, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(7, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(8, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(9, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(10, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(11, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL),
(12, 'MR&MISS MEYOR POP', '2.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_09_182136_create_posts_table', 1),
(6, '2022_08_10_103208_create_subs_table', 1),
(7, '2022_08_21_204433_create_galleries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` enum('pending','Approved','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `Name`, `email`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '0', 'owner@gmail.com', '400000.00', 'Approved', '2023-06-08 23:18:07', '2023-06-08 23:18:07'),
(2, '0', 'owner@gmail.com', '400000.00', 'Approved', '2023-06-08 23:19:29', '2023-06-08 23:19:29'),
(3, '85', 'vudefeqi@mailinator.com', '800.00', 'Approved', '2023-06-22 11:27:25', '2023-06-22 11:27:25'),
(4, '1', 'meyor@gmail.com', '44400.00', 'Approved', '2023-06-23 09:17:41', '2023-06-23 09:17:41'),
(5, '1', 'meyor@gmail.com', '44400.00', 'Approved', '2023-06-23 09:21:38', '2023-06-23 09:21:38'),
(6, '1', 'meyor@gmail.com', '44400.00', 'Approved', '2023-06-23 09:22:42', '2023-06-23 09:22:42'),
(7, '1', 'meyor@gmail.com', '44400.00', 'Approved', '2023-06-23 09:59:34', '2023-06-23 09:59:34'),
(8, '1', 'meyor@gmail.com', '44400.00', 'Approved', '2023-06-23 09:59:55', '2023-06-23 09:59:55'),
(11, 'Reece Wilkins', 'coqez@mailinator.com', '10000.00', 'Approved', '2023-06-29 00:46:10', '2023-06-29 00:46:10'),
(12, 'Donna Gates', 'banoj@mailinator.com', '10000.00', 'Approved', '2023-06-29 00:46:46', '2023-06-29 00:46:46'),
(13, 'Paul Lynn', 'dycab@mailinator.com', '10000.00', 'Approved', '2023-06-29 00:47:03', '2023-06-29 00:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Audio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Title`, `Description`, `Image`, `Audio`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Aliqua Repellendus', 'Nulla dolor eum repr', '2.png', 'Nulla est cum dolore', 0, '2022-08-16 15:00:48', '2022-08-16 15:00:48'),
(3, 'Aliqua Repellendusm', 'Nulla dolor eum repr', '2.png', 'Nulla est cum dolore', 1, '2022-08-16 15:00:48', '2022-08-16 15:00:48'),
(4, 'Aliqua Repellendusd', 'Nulla dolor eum ddddddddddd rhskkfkkkd', '2.png', 'Nulla est cum dolore', 1, '2022-08-16 15:00:48', '2023-06-28 22:18:57'),
(5, 'Aliquas Repellendus', 'Nulla dolor eum repr', '2.png', 'Nulla est cum dolore', 1, '2022-08-16 15:00:48', '2022-08-16 15:00:48'),
(6, 'Aliqua Repellendus', 'Nulla dolor eum repr', '2.png', 'Nulla est cum dolore', 1, '2022-08-16 15:00:48', '2022-08-16 15:00:48'),
(7, 'Aliqua Repellendusm', 'Nulla dolor eum repr', '2.png', 'Nulla est cum dolore', 1, '2022-08-16 15:00:48', '2022-08-16 15:00:48'),
(8, 'Aliqua Repellendusd', 'Nulla dolor eum repr', '2.png', 'Nulla est cum dolore', 1, '2022-08-16 15:00:48', '2022-08-16 15:00:48'),
(9, 'thhhshshhcfggh', 'dhhhdhdhhdhd', '16879923331e1ee62948d5a6429b53f5dba228d975.png', '1687992333waterfall-140894.mp3', 1, '2023-06-28 21:45:33', '2023-06-28 21:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE `subs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'pop@gm.com', '2022-08-21 10:40:20', '2022-08-21 10:40:20'),
(4, 'emai@gm.com', '2022-08-21 11:08:14', '2022-08-21 11:08:14'),
(6, 'emsai@gm.com', '2022-08-21 11:14:24', '2022-08-21 11:14:24'),
(8, 'emsais@gm.com', '2022-08-21 11:15:58', '2022-08-21 11:15:58'),
(9, 'dan@gmail.com', '2023-05-11 07:41:47', '2023-05-11 07:41:47'),
(10, 'meyorpop@gmail.com', '2023-06-25 10:17:05', '2023-06-25 10:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `company_id` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `company_id`, `remember_token`, `type`, `created_at`, `updated_at`) VALUES
(1, 'meyor', 'user@user.com', NULL, '$2y$10$PBE.lDmZJCE8dUtL2jKuKeXIFhPv04MvhGC7FSZzDl4glUtMnZ7Su', '1', 0, NULL, 'user', '2023-04-15 08:31:38', '2023-04-15 08:31:38'),
(2, 'Meyor', 'meyorpop@gmail.com', NULL, '$2y$10$FljMJ2y.52b065gCE0tBxuCL3isUXldJwNstPnS25BhaJK1Apwtjm', '1', 0, NULL, 'Supper', '2023-04-23 21:24:45', '2023-04-23 21:24:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subs_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subs`
--
ALTER TABLE `subs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
