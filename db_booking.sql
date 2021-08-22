-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021 年 8 月 22 日 09:33
-- サーバのバージョン： 8.0.26
-- PHP のバージョン: 7.3.24-(to be removed in future macOS)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `db_booking`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `booking_posts`
--

CREATE TABLE `booking_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `booking_posts`
--

INSERT INTO `booking_posts` (`id`, `date`, `plan`, `guest`, `option`, `customer`, `created_at`, `updated_at`) VALUES
(1, '2021-08-22', 'Aプラン', 'a:4:{s:5:\"woman\";s:1:\"1\";s:3:\"man\";s:1:\"0\";s:10:\"childwoman\";s:1:\"0\";s:8:\"childman\";s:1:\"0\";}', 'a:1:{s:7:\"option1\";s:9:\"選択１\";}', 'a:5:{s:4:\"name\";s:4:\"TEST\";s:5:\"email\";s:35:\"first.things.first0417@markupnet.jp\";s:3:\"zip\";s:8:\"069-0382\";s:4:\"pref\";s:9:\"北海道\";s:7:\"address\";s:12:\"岩見沢市\";}', '2021-08-21 15:24:02', '2021-08-21 15:24:02'),
(3, '2021-08-01', 'Aプラン', 'a:4:{s:5:\"woman\";s:1:\"1\";s:3:\"man\";s:1:\"0\";s:10:\"childwoman\";s:1:\"0\";s:8:\"childman\";s:1:\"0\";}', 'a:1:{s:7:\"option1\";s:9:\"選択１\";}', 'a:5:{s:4:\"name\";s:6:\"松井\";s:5:\"email\";s:35:\"first.things.first0417@markupnet.jp\";s:3:\"zip\";s:8:\"069-0382\";s:4:\"pref\";s:9:\"北海道\";s:7:\"address\";s:12:\"岩見沢市\";}', '2021-08-21 19:22:30', '2021-08-21 19:22:30'),
(4, '2021-08-09', 'Bプラン', 'a:4:{s:5:\"woman\";s:1:\"1\";s:3:\"man\";s:1:\"0\";s:10:\"childwoman\";s:1:\"0\";s:8:\"childman\";s:1:\"0\";}', 'a:1:{s:7:\"option1\";s:9:\"選択２\";}', 'a:5:{s:4:\"name\";s:4:\"TEST\";s:5:\"email\";s:35:\"first.things.first0417@markupnet.jp\";s:3:\"zip\";s:8:\"069-0382\";s:4:\"pref\";s:9:\"北海道\";s:7:\"address\";s:12:\"岩見沢市\";}', '2021-08-21 19:29:45', '2021-08-21 19:29:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2021_08_21_153659_create_booking_posts_table', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('first.things.first0417@markupnet.jp', '$2y$10$QLA3z7s/VBSGnpGjC/DR2OltqHBHjDj.jjxnTDyC/Y1iCLbQWgDki', '2021-08-18 22:25:07');

-- --------------------------------------------------------

--
-- テーブルの構造 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TEST', 'first.things.first0417@markupnet.jp', NULL, '$2y$10$167WDl.Z8vwLJ2aqEQysAeg3lO4PG4F0sZ/NqnQ4QfUlQGiCXBIga', NULL, '2021-08-18 21:48:11', '2021-08-18 21:48:11'),
(2, 'guest', 'webmaster@markupnet.jp', NULL, '$2y$10$qgwPmixV454UZuJ6pELYTe5.CgTD/zqfS6rkfxJrf4d0a8nMop.e.', NULL, '2021-08-21 22:39:02', '2021-08-21 22:39:02');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `booking_posts`
--
ALTER TABLE `booking_posts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- テーブルのインデックス `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `booking_posts`
--
ALTER TABLE `booking_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
