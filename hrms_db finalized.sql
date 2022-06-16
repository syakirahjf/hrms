--DATABASE WITH MULTAUTHENTICATION (under users table-> is_admin)

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 02:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_id` mediumint(9) NOT NULL,
  `dept_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_id`, `dept_name`, `created_at`, `updated_at`) VALUES
(1, 10001, 'Marketing', NULL, NULL),
(2, 10002, 'Finance', NULL, NULL),
(3, 10003, 'Human Resource', NULL, NULL),
(4, 10004, 'Operation Management', NULL, NULL),
(5, 10005, 'Information Technology', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` mediumint(9) NOT NULL,
  `emp_position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icno` bigint(15) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `race` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joindate` date NOT NULL,
  `bankname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accbank` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_id`, `dept_id`, `emp_position`, `emp_name`, `icno`, `gender`, `race`, `birthdate`, `address`, `phoneno`, `email`, `joindate`, `bankname`, `accbank`, `created_at`, `updated_at`) VALUES
(5, 'E006', 10005, 'Manager', 'Amira Adriana binti Muhammad', 960328, 'Female', 'Malay', '1996-03-28', 'Jalan 2, Kampung Ulu Teris, 43950 Sungai Pelek, Selangor', '60134562341', 'amiramyr@gmail.com', '2022-06-03', 'MAYBANK', '8602868102', NULL, '2022-06-15 16:13:34'),
(7, 'E007', 10003, 'CEO', 'Muhammad Syakir bin Syahid', 970810, 'Male', 'Malay', '1997-08-10', 'Lot 1234, Kampung Dusun Muda, Kota Bharu, Kelantan', '601234567', 'syakirsyak@gmail.com', '2022-01-08', 'RHB BANK', '7602888109', NULL, NULL),
(8, 'E008', 10003, 'Admin', 'Nurul Yuhana', 980304, 'Female', 'Malay', '1998-04-03', 'Jalan 2, Kampung Ulu Teris, 43950 Sungai Pelek, Selangor', '0182660461', 'nurhannaa@gmail.com', '2021-07-13', 'MAYBANK', '7601868102', NULL, NULL),
(9, 'E011', 10002, 'Admin', 'E011', 980713, 'Female', 'Malay', '1998-08-09', 'Jalan 3, Kampung Baru, Kuala Lumpur', '60194325678', 'aishahecah@gmail.com', '2022-06-09', 'BANK ISLAM', '7601868103', NULL, NULL),
(10, 'E001', 10002, 'Employee', 'Nurul Syakirah binti Samad', 950405039012, 'Female', 'Malay', '1995-04-05', 'Lot 123, Jalan Tiang Cantik, Kampung Kuning, Kelantan', '60131345678', 'syakirahnurul@gmail.com', '2022-06-01', 'BANK MUAMALAT', '8602806775', NULL, NULL),
(11, 'E123', 10001, 'CEO', 'Ahmad Faisal bin Jamal', 770707060707, 'Male', 'Malay', '1977-07-07', 'No 43, Jalan Damai, Kampung Mentari, Perak', '0173325461', 'faisaljamal@gmail.com', '2022-06-12', 'MAYBANK', '760280674', NULL, NULL),
(12, 'E000', 10004, 'CEO', 'Nur Nazihah Alia binti Nazir', 860205102450, 'Female', 'Malay', '1986-02-05', 'Jalan 3, Kampung Ulu Chuchoh', '0163457890', 'nazihahalia@gmail.com', '2022-06-04', 'RHB BANK', '8202805719', NULL, NULL);

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
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leave_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `leave_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `leave_id`, `emp_id`, `startdate`, `enddate`, `leave_type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'L002', 'E002', '2022-05-01', '2022-05-04', 'AL', 'Approved', NULL, NULL),
(3, 'L003', 'E007', '2022-08-02', '2022-08-02', 'AL', 'Pending', NULL, NULL)
(4, 'L004', 'E006', '2022-07-05', '2022-07-07', 'EL', 'Pending', NULL, NULL)
(5, 'L005', 'E008', '2022-06-21', '2022-06-22', 'AL', 'Pending', NULL, NULL);


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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@hrms.com', NULL, 1, '$2y$10$t7.vspiAQpCp3ElcR4RzXOKLwjPvj0xIiYezcPwPQSTJC6Y79kyPu', NULL, '2022-06-14 05:29:22', '2022-06-14 05:29:22'),
(2, 'User', 'user@hrms.com', NULL, 0, '$2y$10$hvG5KjSrc/zZfm/0Q1puz.8JzTzvKa3SauvxwajqchWSnFN5T.0U2', NULL, '2022-06-14 05:29:22', '2022-06-14 05:29:22'),
(3, 'Employee', 'user01@hrms.com', NULL, 0, '$2y$10$JsdxagcZKsuU5ArCBKYx2O4lZsZlFIamMAr3SM.wN5d9FRfwXm1LG', NULL, '2022-06-14 07:25:19', '2022-06-14 07:25:19'),
(4, 'Manager', 'manager@hrms.com', NULL, NULL, '$2y$10$sh5PyDXw2QDH/KSmoJSdnu.VboDm4VPn9wSx3tN/xizSbTIf1YNWO', NULL, '2022-06-15 02:11:38', '2022-06-15 02:11:38'),
(5, 'Employee01', 'employee@hrms.com', NULL, 0, '$2y$10$Kgo6lqgnMUx1uIg/GWfhsu7bA0QlOUy29r8u4CHnfWRSIgYhPp58W', NULL, '2022-06-15 08:36:51', '2022-06-15 08:36:51'),
(6, 'Employee002', 'employee02@hrms.com', NULL, NULL, '$2y$10$391WknbVN2ZCP3h/jzUp8.Aj4ibuGOfPDs9sMNTJ0.JTTwgtwRglW', NULL, '2022-06-15 16:21:58', '2022-06-15 16:21:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
