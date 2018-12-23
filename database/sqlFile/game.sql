-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 12:53 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_games`
--

CREATE TABLE `blog_games` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_games`
--

INSERT INTO `blog_games` (`id`, `name`, `par`, `button`, `button_color`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Suspendisse ut justo tem por, rutrum', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'racing', 'new', '1.jpg', '2018-11-30 13:48:38', '2018-11-30 13:48:38'),
(2, 'Susce pulvinar metus nulla, vel  facilisis sem', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'racing', 'racing', '2.jpg', '2018-11-30 13:49:48', '2018-12-02 15:36:24'),
(3, 'Susce pulvinar metus nulla, vel  facilisis sem', 'lLorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'Adventure', 'adventure', '3.jpg', '2018-11-30 13:50:47', '2018-11-30 13:50:47'),
(4, 'Suspendisse ut justo tem por, rutrum', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'racing', 'new', '4.jpg', '2018-11-30 13:51:24', '2018-11-30 13:51:24'),
(5, 'Suspendisse ut justo tem por, rutrum', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'racing', 'racing', '5.jpg', '2018-11-30 13:52:21', '2018-11-30 13:52:21'),
(6, 'Susce pulvinar metus nulla, vel  facilisis sem', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'Adventure', 'adventure', '6.jpg', '2018-11-30 13:53:04', '2018-11-30 13:53:04'),
(7, 'Suspendisse ut justo tem por, rutrum', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'racing', 'new', '7.jpg', '2018-11-30 13:53:45', '2018-11-30 13:53:45'),
(8, 'Susce pulvinar metus nulla, vel  facilisis ', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'racing', 'racing', '8.jpg', '2018-11-30 13:54:17', '2018-11-30 13:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `blog_sidebars`
--

CREATE TABLE `blog_sidebars` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_sidebars`
--

INSERT INTO `blog_sidebars` (`id`, `created_at`, `updated_at`, `name`, `par`, `button`, `button_color`, `image`) VALUES
(1, '2018-11-30 15:05:00', '2018-12-02 15:47:51', 'Susce pulvinar metus nulla, vel  facilisis sem', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', 'New', 'new', '1.jpg'),
(2, '2018-11-30 15:06:36', '2018-11-30 15:06:36', 'Assasin’’s Creed', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '0.3', 'racing', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus_backgrounds`
--

CREATE TABLE `contactus_backgrounds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus_backgrounds`
--

INSERT INTO `contactus_backgrounds` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Contact us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.', '5.jpg', '2018-12-01 09:20:26', '2018-12-02 16:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comments` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `image`, `button`, `button_color`, `par`, `page_id`, `created_at`, `updated_at`, `comments`) VALUES
(1, 'Suspendisse ut justo tem por, rutrum', '1.jpg', 'New', 'new', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, '2018-11-11 14:13:51', '2018-12-02 10:03:08', NULL),
(2, 'Justo tempor, rutrum erat id, molestie', '2.jpg', 'strategy', 'strategy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, '2018-11-11 18:13:01', '2018-11-11 18:13:01', NULL),
(3, 'Nullam lacinia ex eleifend orci porttitor', '3.jpg', 'New', 'new', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, '2018-11-11 18:14:01', '2018-11-11 18:14:01', NULL),
(4, 'Lacinia ex eleifend orci suscipit', '4.jpg', 'racing', 'racing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, '2018-11-11 18:14:29', '2018-11-11 18:14:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `firsts`
--

CREATE TABLE `firsts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firsts`
--

INSERT INTO `firsts` (`id`, `title`, `par`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Game Reviews', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.', '3.jpg', '2018-11-15 17:09:06', '2018-12-02 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `par`, `image`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Overwatch Halloween', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '5.jpg', '9.5', '2018-11-15 17:51:22', '2018-12-02 11:58:26'),
(2, 'Grand Theft Auto', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '6.jpg', '9.3', '2018-11-15 17:52:25', '2018-11-15 17:52:25'),
(3, 'Avatar', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '7.jpg', '9.3', '2018-11-15 17:53:00', '2018-11-15 17:53:00'),
(4, 'Anthem', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '8.jpg', '9.3', '2018-11-15 17:53:30', '2018-11-15 17:53:30'),
(5, 'Cyberpunk 2077', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '9.jpg', '9.3', '2018-11-15 17:54:07', '2018-11-15 17:54:07'),
(6, 'Spiderman', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '10.jpg', '9.3', '2018-11-15 17:54:36', '2018-11-15 17:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `title`, `par`, `image`, `created_at`, `updated_at`) VALUES
(1, 'The Best Games Out There', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula s', 'slider-1.jpg', '2018-11-10 19:19:49', '2018-12-01 19:38:49'),
(2, 'The Best Games Out There', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula s', 'slider-2.jpg', '2018-11-11 10:49:59', '2018-11-11 10:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `description`, `tag_name`, `tag_color`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'new', 'new', '2018-12-02 17:51:46', '2018-12-02 17:53:46'),
(2, 'Isum dolor sit amet, consectetur adipiscing elit.', 'strategy', 'strategy', '2018-12-02 17:52:36', '2018-12-02 17:52:36'),
(3, 'Isum dolor sit amet, consectetur adipiscing elit.', 'racing', 'racing', '2018-12-02 17:52:59', '2018-12-02 17:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `main_pages`
--

CREATE TABLE `main_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_09_171304_create_posts_table', 1),
(4, '2018_11_10_142811_create_heroes_table', 2),
(5, '2018_11_10_143250_create_main_pages_table', 3),
(6, '2018_11_11_153147_create_features_table', 4),
(7, '2018_11_11_160202_add_colums_to_table_features', 5),
(8, '2018_11_11_202809_add_button_color_to_features_table', 6),
(9, '2018_11_12_210812_create_recent_games_table', 7),
(10, '2018_11_12_221034_add_backgroungimage_to_recenrgame_table', 8),
(11, '2018_11_13_122230_create_tournaments_table', 9),
(12, '2018_11_13_142509_create_recent_reviews_table', 10),
(13, '2018_11_14_120027_create_firsts_table', 11),
(14, '2018_11_15_192732_create_games_table', 12),
(15, '2018_11_29_110708_create_page_infos_table', 13),
(16, '2018_11_30_121110_create_blog_games_table', 14),
(17, '2018_11_30_153748_create_blog_games_table', 15),
(18, '2018_11_30_161858_create_blog_sidebars_table', 16),
(19, '2018_11_30_170139_add_colums_to_blog_sidebars_table', 17),
(20, '2018_11_30_172646_add_columes_to_blog_sidebars_table', 18),
(21, '2018_12_01_105931_create_contactus_backgrounds_table', 19),
(22, '2018_12_01_113135_create_personal_infos_table', 20),
(23, '2018_12_02_190249_create_latest_news_table', 21),
(24, '2018_12_07_110508_add_admin_column_to', 22),
(25, '2018_12_07_110620_add_admin_column_to_users', 22),
(26, '2018_12_07_120012_add_admin_column_to_users_table', 23),
(27, '2018_12_14_155935_create_comments_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `page_infos`
--

CREATE TABLE `page_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_infos`
--

INSERT INTO `page_infos` (`id`, `title`, `par`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Video Gallery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.', '1.jpg', '2018-11-29 09:36:57', '2018-12-02 15:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_infos`
--

CREATE TABLE `personal_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_infos`
--

INSERT INTO `personal_infos` (`id`, `name`, `description`, `address`, `phone`, `email`, `facebook`, `twitter`, `linkedin`, `github`, `created_at`, `updated_at`) VALUES
(1, 'Contact us', 'Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feug iat bibendum orci, non elementum urna. Cras sit amet sapien aliquam.', '1481 Creekside Lane Avila Beach, CA 931', '+53 345 7953 32453', 'omar@gmail.com', 'https://www.facebook.com/omar.ashraf.988926', '#', '#', 'https://github.com/Omar20Ashraf', '2018-12-01 10:14:30', '2018-12-02 16:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recent_games`
--

CREATE TABLE `recent_games` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_button` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_button_class` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_games`
--

INSERT INTO `recent_games` (`id`, `image`, `image_button`, `image_button_class`, `title`, `par`, `comments`, `page_id`, `created_at`, `updated_at`) VALUES
(2, '1.jpg', 'New', 'new', 'Suspendisse ut justo tem por, rutrum', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', NULL, NULL, '2018-11-12 20:06:35', '2018-12-02 10:28:16'),
(3, '2.jpg', 'Racing', 'racing', 'Susce pulvinar metus nulla, vel facilisis sem', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', NULL, NULL, '2018-11-12 20:07:58', '2018-11-12 20:07:58'),
(4, '3.jpg', 'Adventure', 'adventure', 'Suspendisse ut justo tem por, rutrum', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit.', NULL, NULL, '2018-11-12 20:08:58', '2018-11-12 20:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `recent_reviews`
--

CREATE TABLE `recent_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evalution` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evalution_color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_reviews`
--

INSERT INTO `recent_reviews` (`id`, `image`, `title`, `par`, `evalution`, `evalution_color`, `page_id`, `created_at`, `updated_at`) VALUES
(2, '1.jpg', 'Assasin’’s Creed', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '9.3', 'yellow', NULL, '2018-11-13 12:50:06', '2018-11-13 12:50:06'),
(3, '2.jpg', 'Doom', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '9.5', 'purple', NULL, '2018-11-13 12:51:18', '2018-11-13 12:51:18'),
(4, '3.jpg', 'Overwatch', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '9.1', 'green', NULL, '2018-11-13 12:51:50', '2018-12-02 11:28:59'),
(5, '4.jpg', 'GTA', 'Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.', '9.7', 'pink', NULL, '2018-11-13 12:52:33', '2018-11-13 12:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beggins` date NOT NULL,
  `ends` date NOT NULL,
  `participants` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prizes` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `title`, `beggins`, `ends`, `participants`, `author`, `prizes`, `image`, `page_id`, `created_at`, `updated_at`) VALUES
(2, 'World Of WarCraft', '2018-06-20', '2018-07-01', '10 teams', 'admin', '1st place $2000, 2nd place: $1000, 3rd place: $500', '1.jpg', NULL, '2018-11-13 11:07:30', '2018-12-02 10:46:53'),
(3, 'DOOM', '2018-06-20', '2018-07-01', '10 teams', 'admin', '1st place $2000, 2nd place: $1000, 3rd place: $500', '2.jpg', NULL, '2018-11-13 11:08:24', '2018-11-13 11:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'Omar Ashraf', 'omar@omar.com', '$2y$10$Vi9wesChYZGCq0APL5TC0.Ey5zcL6h596bu.ifqmUyf6HuuLHTdWa', 'LGIyvVEuqfYuInOP7WeeEkN16CJPu7R3lkEkGy98O6yvjPMKHrNgjhpFwCWC', '2018-11-09 15:15:31', '2018-11-09 15:15:31', 1),
(2, 'test', 'test@test.com', '$2y$10$ERLk3NMMW66UHjjlbvG5G.KioIL/pOGbeDqisjz7yGGIfeyxjabgy', 'Jwsu1YthH27B0J3i3geW0HLgoAubtuo0A3n0zy6vAjzMcH5bJDwFJumRCSGD', '2018-12-07 10:12:52', '2018-12-07 10:12:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_games`
--
ALTER TABLE `blog_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_sidebars`
--
ALTER TABLE `blog_sidebars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_backgrounds`
--
ALTER TABLE `contactus_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firsts`
--
ALTER TABLE `firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_pages`
--
ALTER TABLE `main_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_infos`
--
ALTER TABLE `page_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_infos`
--
ALTER TABLE `personal_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_games`
--
ALTER TABLE `recent_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_reviews`
--
ALTER TABLE `recent_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blog_games`
--
ALTER TABLE `blog_games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_sidebars`
--
ALTER TABLE `blog_sidebars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus_backgrounds`
--
ALTER TABLE `contactus_backgrounds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `firsts`
--
ALTER TABLE `firsts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `main_pages`
--
ALTER TABLE `main_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `page_infos`
--
ALTER TABLE `page_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_infos`
--
ALTER TABLE `personal_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent_games`
--
ALTER TABLE `recent_games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recent_reviews`
--
ALTER TABLE `recent_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
