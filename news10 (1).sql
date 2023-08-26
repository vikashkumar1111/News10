-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 04:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news10`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_controls`
--

CREATE TABLE `access_controls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_permission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_checked` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access_controls`
--

INSERT INTO `access_controls` (`id`, `roles`, `access_permission`, `is_checked`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Admin.status,Admin.delete,Admin.add,Admin.edit,Category.status,Category.delete,Category.add,Category.edit,Category.menu,SubCategory.status,SubCategory.delete,SubCategory.add,SubCategory.edit,SubCategory.menu,NewsPost.status,NewsPost.delete,NewsPost.add,NewsPost.edit,NewsPost.menu,Review.approve,Review.delete,Review Setting.menu,Roles.status,Roles.delete,Roles.add,Roles.edit,Permissions.status,Permissions.delete,Permissions.add,Permissions.edit', 0, '2023-06-20 04:05:45', '2023-06-20 04:05:45'),
(2, 'Admin', 'Admin.status,Admin.delete,Admin.add,Admin.edit,Category.status,Category.delete,Category.add,Category.edit,Category.menu,SubCategory.status,SubCategory.delete,SubCategory.add,SubCategory.edit,SubCategory.menu,NewsPost.status,NewsPost.delete,NewsPost.add,NewsPost.edit,NewsPost.menu,Review.approve,Review.delete,Review Setting.menu,Roles & Permissions.menu', 0, '2023-06-20 04:08:12', '2023-06-20 04:08:12'),
(3, 'Reporter', 'Category.status,Category.menu,SubCategory.status,SubCategory.menu,NewsPost.status,NewsPost.delete,NewsPost.add,NewsPost.edit,NewsPost.menu,Review Setting.menu,Roles & Permissions.menu', 0, '2023-06-20 04:09:32', '2023-06-20 04:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL DEFAULT 'admin',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `status`, `CreatedBy`, `updated_at`, `created_at`) VALUES
(1, 'Politics', '1', 'admin', NULL, NULL),
(2, 'Business', '1', 'admin', NULL, NULL),
(3, 'Technology', '1', 'admin', NULL, NULL),
(4, 'Entertainment', '1', 'admin', NULL, NULL),
(5, 'Sports', '0', 'admin', NULL, NULL),
(6, 'Health', '0', 'admin', NULL, NULL),
(7, 'Science', '1', 'admin', NULL, NULL),
(8, 'Lifestyle', '1', 'admin', NULL, NULL),
(9, 'Education', '1', 'admin', NULL, NULL),
(10, 'World News', '1', 'admin', NULL, NULL),
(11, 'Opinion', '0', 'admin', NULL, NULL),
(12, 'Environment', '1', 'admin', NULL, NULL),
(14, 'Science and Innovation', '1', 'admin', NULL, NULL),
(15, 'Lifestyle and Culture', '1', 'admin', NULL, NULL),
(16, 'Health and Wellness', '1', 'admin', NULL, NULL),
(18, 'IT', '1', 'admin', NULL, NULL),
(20, 'Arts and Culture', '0', 'admin', '2023-06-19 06:17:10', NULL),
(32, 'Rajnish', '1', 'Vikash', '2023-06-19 11:11:28', '2023-06-19 04:43:08');

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
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(36, '2023_06_13_061007_create_admin_table', 1),
(37, '2023_06_20_073706_create_access_controls_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `Id` int(11) NOT NULL,
  `action_menu` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL DEFAULT 'Admin',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`Id`, `action_menu`, `permission`, `status`, `CreatedBy`, `updated_at`, `created_at`) VALUES
(1, 'Admin', 'Setting Admin User.menu', 1, 'Admin', '2023-06-20 07:00:52', NULL),
(2, 'Admin', 'Admin.edit', 1, 'Admin', '2023-06-20 07:00:57', NULL),
(3, 'Admin', 'Admin.add', 1, 'Admin', NULL, NULL),
(4, 'Admin', 'Admin.delete', 1, 'Admin', '2023-06-20 07:05:30', NULL),
(5, 'Admin', 'Admin.status', 1, 'Admin', NULL, NULL),
(6, 'Category', 'Category.menu', 1, 'Admin', NULL, NULL),
(7, 'Category', 'Category.edit', 1, 'Admin', '2023-06-20 07:06:42', NULL),
(8, 'Category', 'Category.add', 1, 'Admin', '2023-06-20 07:06:24', NULL),
(9, 'Category', 'Category.delete', 1, 'Admin', '2023-06-20 07:06:31', NULL),
(10, 'Category', 'Category.status', 1, 'Admin', NULL, NULL),
(11, 'SubCategory', 'SubCategory.menu', 1, 'Admin', '2023-06-20 07:06:36', NULL),
(12, 'SubCategory', 'SubCategory.edit', 1, 'Admin', '2023-06-20 07:06:11', NULL),
(13, 'SubCategory', 'SubCategory.add', 1, 'Admin', '2023-06-20 07:06:46', NULL),
(14, 'SubCategory', 'SubCategory.delete', 1, 'Admin', NULL, NULL),
(15, 'SubCategory', 'SubCategory.status', 1, 'Admin', '2023-06-20 07:06:04', NULL),
(16, 'NewsPost', 'NewsPost.menu', 1, 'Admin', '2023-06-20 07:01:00', NULL),
(17, 'NewsPost', 'NewsPost.edit', 1, 'Admin', '2023-06-20 07:01:17', NULL),
(18, 'NewsPost', 'NewsPost.add', 1, 'Admin', '2023-06-20 07:06:14', NULL),
(19, 'NewsPost', 'NewsPost.delete', 1, 'Admin', NULL, NULL),
(20, 'NewsPost', 'NewsPost.status', 1, 'Admin', '2023-06-20 07:06:39', NULL),
(21, 'Review', 'Review Setting.menu', 1, 'Admin', '2023-06-20 07:01:12', NULL),
(22, 'Review', 'Review.delete', 1, 'Admin', NULL, NULL),
(23, 'Review', 'Review.approve', 1, 'Admin', '2023-06-20 07:01:14', NULL),
(24, 'Roles & Permissions', 'Roles & Permissions.menu', 1, 'Admin', NULL, NULL),
(25, 'Roles', 'Roles.edit', 1, 'Admin', NULL, NULL),
(26, 'Roles', 'Roles.add', 1, 'Admin', '2023-06-20 07:01:07', NULL),
(27, 'Roles', 'Roles.delete', 1, 'Admin', '2023-06-20 07:01:05', NULL),
(28, 'Roles', 'Roles.status', 1, 'Admin', '2023-06-20 07:01:04', NULL),
(29, 'Permissions', 'Permissions.edit', 1, 'Admin', '2023-06-20 07:01:02', NULL),
(30, 'Permissions', 'Permissions.add', 1, 'Admin', '2023-06-20 07:01:09', NULL),
(31, 'Permissions', 'Permissions.delete', 1, 'Admin', '2023-06-19 15:32:07', NULL),
(32, 'Permissions', 'Permissions.status', 1, 'Admin', '2023-06-20 04:41:50', NULL);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `status` int(3) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Id`, `Role`, `CreatedBy`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Super Admin', 'admin', 1, '2023-06-20 06:49:02', NULL),
(2, 'Admin', 'admin', 1, '2023-06-19 15:00:04', NULL),
(3, 'Editor', 'admin', 1, '2023-06-19 15:00:03', NULL),
(4, 'Reporter', 'admin', 1, '2023-06-19 15:01:33', NULL),
(5, 'Content Writer', 'admin', 1, '2023-06-19 15:00:00', NULL),
(6, 'Journalist', 'admin', 1, '2023-06-19 14:59:59', NULL),
(7, 'TestRolesUP', 'TestRolesAdminUP', 0, '2023-06-20 04:41:44', '2023-06-19 14:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `status` int(3) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL DEFAULT 'admin',
  `CatId` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Name`, `status`, `CreatedBy`, `CatId`, `updated_at`, `created_at`) VALUES
(1, 'National Politics', 1, 'admin', 1, NULL, NULL),
(2, 'International Politics', 1, 'admin', 1, NULL, NULL),
(3, 'Government Policies', 0, 'admin', 1, NULL, NULL),
(4, 'Elections', 1, 'admin', 1, NULL, NULL),
(5, 'Economy', 0, 'admin', 2, NULL, NULL),
(6, 'Financial Markets', 1, 'admin', 2, NULL, NULL),
(7, 'Startups', 0, 'admin', 2, NULL, NULL),
(8, 'Corporate News', 1, 'admin', 2, NULL, NULL),
(9, 'Gadgets', 0, 'admin', 3, NULL, NULL),
(10, 'Artificial Intelligence', 0, 'admin', 3, NULL, NULL),
(11, 'Internet', 0, 'admin', 3, NULL, NULL),
(12, 'Innovation', 0, 'admin', 3, NULL, NULL),
(13, 'Movies', 1, 'admin', 4, NULL, NULL),
(14, 'Music', 1, 'admin', 4, NULL, NULL),
(15, 'Celebrities', 1, 'admin', 4, NULL, NULL),
(16, 'TV Shows', 1, 'admin', 4, NULL, NULL),
(17, 'Football', 1, 'admin', 5, NULL, NULL),
(18, 'Basketball', 1, 'admin', 5, NULL, NULL),
(19, 'Tennis', 1, 'admin', 5, NULL, NULL),
(20, 'Cricket', 0, 'admin', 5, NULL, NULL),
(21, 'Nutrition', 0, 'admin', 6, NULL, NULL),
(22, 'Fitness', 0, 'admin', 6, NULL, NULL),
(23, 'Diseases', 0, 'admin', 6, NULL, NULL),
(24, 'Medical Breakthroughs', 0, 'admin', 6, NULL, NULL),
(25, 'Space Exploration', 1, 'admin', 7, NULL, NULL),
(26, 'Environment', 0, 'admin', 7, NULL, NULL),
(27, 'Research Discoveries', 0, 'admin', 7, NULL, NULL),
(28, 'Robotics', 0, 'admin', 7, NULL, NULL),
(29, 'Travel', 0, 'admin', 8, NULL, NULL),
(30, 'Fashion', 0, 'admin', 8, NULL, NULL),
(31, 'Food', 0, 'admin', 8, NULL, NULL),
(32, 'Relationships', 0, 'admin', 8, NULL, NULL),
(33, 'Higher Education', 0, 'admin', 9, NULL, NULL),
(34, 'K-12 Education', 0, 'admin', 9, NULL, NULL),
(35, 'Online Learning', 0, 'admin', 9, NULL, NULL),
(36, 'Educational Policies', 0, 'admin', 9, NULL, NULL),
(37, 'Global Events', 0, 'admin', 10, NULL, NULL),
(38, 'Humanitarian Issues', 0, 'admin', 10, NULL, NULL),
(39, 'Diplomacy', 0, 'admin', 10, NULL, NULL),
(40, 'Natural Disasters', 0, 'admin', 10, NULL, NULL),
(41, 'Political Opinions', 0, 'admin', 11, NULL, NULL),
(42, 'Social Commentary', 0, 'admin', 11, NULL, NULL),
(43, 'Editorial Cartoons', 0, 'admin', 11, NULL, NULL),
(44, 'Satire and Humor', 0, 'admin', 11, NULL, NULL),
(45, 'Mobile Technology', 0, 'admin', 12, NULL, NULL),
(46, 'Software Development', 0, 'admin', 12, NULL, NULL),
(47, 'Cybersecurity', 0, 'admin', 12, NULL, NULL),
(48, 'Tech Policy and Regulation', 0, 'admin', 12, NULL, NULL),
(49, 'Biotechnology', 0, 'admin', 3, NULL, NULL),
(50, 'Genetics', 0, 'admin', 3, NULL, NULL),
(51, 'Robotics and Automation', 0, 'admin', 3, NULL, NULL),
(52, 'Nanotechnology', 0, 'admin', 3, NULL, NULL),
(53, 'Visual Arts', 0, 'admin', 14, NULL, NULL),
(54, 'Performing Arts', 0, 'admin', 14, NULL, NULL),
(55, 'Literature', 0, 'admin', 14, NULL, NULL),
(56, 'Cultural Events', 0, 'admin', 14, NULL, NULL),
(57, 'Fitness', 0, 'admin', 15, NULL, NULL),
(58, 'Mental Health', 0, 'admin', 15, NULL, NULL),
(59, 'Nutrition', 0, 'admin', 15, NULL, NULL),
(60, 'Medical Research', 0, 'admin', 15, NULL, NULL),
(61, 'Climate Change', 0, 'admin', 16, NULL, NULL),
(62, 'Sustainability', 0, 'admin', 16, NULL, NULL),
(63, 'Conservation', 0, 'admin', 16, NULL, NULL),
(64, 'Renewable Energy', 0, 'admin', 16, NULL, NULL),
(65, 'Political Opinions', 0, 'admin', 1, NULL, NULL),
(66, 'Social Commentary', 0, 'admin', 1, NULL, NULL),
(67, 'Editorial Cartoons', 0, 'admin', 1, NULL, NULL),
(68, 'Satire and Humor', 0, 'admin', 1, NULL, NULL),
(69, 'Mobile Technology', 0, 'admin', 18, NULL, NULL),
(70, 'Software Development', 0, 'admin', 18, NULL, NULL),
(71, 'Cybersecurity', 0, 'admin', 18, NULL, NULL),
(72, 'Tech Policy and Regulation', 0, 'admin', 18, NULL, NULL),
(77, 'Visual Arts', 0, 'admin', 20, NULL, NULL),
(78, 'Performing Arts', 0, 'admin', 20, NULL, NULL),
(79, 'Literature', 0, 'admin', 20, NULL, NULL),
(80, 'Cultural Events', 0, 'admin', 20, NULL, NULL),
(81, 'Test1UP', 1, 'TestAdminUP', 6, '2023-06-19 12:15:48', '2023-06-19 12:15:48'),
(83, 'Test2', 1, 'admin', 8, '2023-06-19 12:53:17', '2023-06-19 12:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_controls`
--
ALTER TABLE `access_controls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CatId` (`CatId`);

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
-- AUTO_INCREMENT for table `access_controls`
--
ALTER TABLE `access_controls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`CatId`) REFERENCES `category` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
