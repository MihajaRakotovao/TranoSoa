-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2024 at 09:50 AM
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
-- Database: `jobspace`
--
CREATE DATABASE IF NOT EXISTS `jobspace` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `jobspace`;

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `coms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `profile` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`coms`, `id_user`, `created_at`, `updated_at`, `name`, `profile`) VALUES
('Kez kez mitady trano', 15, NULL, NULL, '', ''),
('Milay hoa ny trano', 14, NULL, NULL, 'Bema', ''),
('MItady trano hoa za', 16, NULL, NULL, 'Rova', ''),
('salut salut anh', 16, NULL, NULL, 'Rova', '1717326123.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `logement_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `logement_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 19, 'trano surf-image-1717163583371.jpg', '2024-05-31 10:53:03', '2024-05-31 10:53:03'),
(3, 19, 'trano surf-image-1717163583201.webp', '2024-05-31 10:53:03', '2024-05-31 10:53:03'),
(6, 21, 'trano surf-image-1717164070537.webp', '2024-05-31 11:01:10', '2024-05-31 11:01:10'),
(7, 23, 'Villa H67-image-1717179625209.jpg', '2024-05-31 15:20:25', '2024-05-31 15:20:25'),
(8, 23, 'Villa H67-image-1717179625843.png', '2024-05-31 15:20:25', '2024-05-31 15:20:25'),
(9, 25, 'Trano TEST BE-image-1717179680762.png', '2024-05-31 15:21:20', '2024-05-31 15:21:20'),
(10, 25, 'Trano TEST BE-image-1717179680728.png', '2024-05-31 15:21:20', '2024-05-31 15:21:20'),
(11, 26, 'Kopy trano-image-1717179931331.jpg', '2024-05-31 15:25:31', '2024-05-31 15:25:31'),
(12, 26, 'Kopy trano-image-1717179931483.jpg', '2024-05-31 15:25:31', '2024-05-31 15:25:31'),
(13, 26, 'Kopy trano-image-1717179931779.jpg', '2024-05-31 15:25:31', '2024-05-31 15:25:31'),
(14, 27, 'Superbe villa basse-image-1718129288407.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(15, 27, 'Superbe villa basse-image-1718129288176.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(16, 27, 'Superbe villa basse-image-1718129288109.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(17, 27, 'Superbe villa basse-image-1718129288624.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(18, 27, 'Superbe villa basse-image-1718129288273.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(19, 27, 'Superbe villa basse-image-1718129288210.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(20, 27, 'Superbe villa basse-image-1718129288969.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(21, 27, 'Superbe villa basse-image-1718129288172.jpg', '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(22, 28, 'Appartement confort-image-1718129699262.jpg', '2024-06-11 15:14:59', '2024-06-11 15:14:59'),
(23, 28, 'Appartement confort-image-1718129700211.jpg', '2024-06-11 15:15:00', '2024-06-11 15:15:00'),
(24, 28, 'Appartement confort-image-1718129700223.jpg', '2024-06-11 15:15:00', '2024-06-11 15:15:00'),
(25, 28, 'Appartement confort-image-1718129700466.jpg', '2024-06-11 15:15:00', '2024-06-11 15:15:00'),
(26, 28, 'Appartement confort-image-1718129700654.jpg', '2024-06-11 15:15:00', '2024-06-11 15:15:00'),
(27, 28, 'Appartement confort-image-1718129700795.jpg', '2024-06-11 15:15:00', '2024-06-11 15:15:00'),
(28, 29, 'Petit appartement-image-171813103683.jpg', '2024-06-11 15:37:16', '2024-06-11 15:37:16'),
(29, 29, 'Petit appartement-image-1718131036547.jpg', '2024-06-11 15:37:16', '2024-06-11 15:37:16'),
(30, 29, 'Petit appartement-image-1718131036622.jpg', '2024-06-11 15:37:16', '2024-06-11 15:37:16'),
(31, 29, 'Petit appartement-image-1718131036406.jpg', '2024-06-11 15:37:16', '2024-06-11 15:37:16'),
(32, 30, 'Appartement à louer-image-1718131328258.jpg', '2024-06-11 15:42:08', '2024-06-11 15:42:08'),
(33, 30, 'Appartement à louer-image-1718131328598.jpg', '2024-06-11 15:42:08', '2024-06-11 15:42:08'),
(34, 30, 'Appartement à louer-image-171813132837.jpg', '2024-06-11 15:42:08', '2024-06-11 15:42:08'),
(35, 30, 'Appartement à louer-image-171813132870.jpg', '2024-06-11 15:42:08', '2024-06-11 15:42:08'),
(37, 31, 'Appartement-image-1718131489507.jpg', '2024-06-11 15:44:49', '2024-06-11 15:44:49'),
(38, 31, 'Appartement-image-1718131489656.jpg', '2024-06-11 15:44:49', '2024-06-11 15:44:49'),
(39, 31, 'Appartement-image-1718131489422.jpg', '2024-06-11 15:44:49', '2024-06-11 15:44:49'),
(40, 32, 'VILLA T4-image-171813174944.jpg', '2024-06-11 15:49:09', '2024-06-11 15:49:09'),
(41, 32, 'VILLA T4-image-1718131749971.jpg', '2024-06-11 15:49:09', '2024-06-11 15:49:09'),
(42, 32, 'VILLA T4-image-1718131749379.jpg', '2024-06-11 15:49:09', '2024-06-11 15:49:09'),
(43, 32, 'VILLA T4-image-1718131749660.jpg', '2024-06-11 15:49:09', '2024-06-11 15:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `logements`
--

CREATE TABLE `logements` (
  `id` bigint UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chambre` int NOT NULL,
  `piece` int NOT NULL,
  `etage` int NOT NULL,
  `loyer` int NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logements`
--

INSERT INTO `logements` (`id`, `titre`, `description`, `chambre`, `piece`, `etage`, `loyer`, `adresse`, `statut`, `created_at`, `updated_at`) VALUES
(27, 'Superbe villa basse', 'Superbe villa basse sur pied de type F5 dans un quartier calme \r\nComprenant:\r\n👉1living de 100m2\r\n👉4chambres dont 2 avec salles de bain attenantes\r\n👉1Chambre forte sécurité \r\n👉Cuisine semi-ouverte placardée.\r\n👉Salle de bain avec eau chaude et toilette.', 4, 6, 0, 1500000, 'Androhibe', 0, '2024-06-11 15:08:08', '2024-06-11 15:08:08'),
(28, 'Appartement confort', 'Ravitoto ambolokandrina\r\nAppartement confort\r\nRez de chaussée\r\nAccès, Clôturé, garage, grande cour\r\n1 living avec cheminé \r\n2 grandes chambres carreaux \r\nGde cuisine avec placard \r\nUne salle d\'eau', 2, 4, 0, 1200000, 'Ambolokandrina', 0, '2024-06-11 15:14:59', '2024-06-11 15:14:59'),
(29, 'Petit appartement', 'Appartement dipso Analakely\r\n   1 Living 1 chambre carreaux\r\n   Cuisine intérieur\r\n   Douche wc intérieur \r\nBord de route', 1, 2, 0, 300000, 'Analakely', 0, '2024-06-11 15:37:16', '2024-06-11 15:37:16'),
(30, 'Appartement à louer', 'APPARTEMENT À LOUER (rdc)\r\nPour 4 personnes max\r\n1 grand living 1 chambre\r\nCuisine, douche intérieur\r\nWc, bassin extérieur (pompe)\r\nBien sécurisé, clôturé', 1, 2, 0, 350000, 'Behoririka', 0, '2024-06-11 15:42:07', '2024-06-11 15:42:07'),
(31, 'Appartement', 'Appartement confort\r\nLoyer:1 000 0000ar/mois +caution.', 4, 6, 2, 1500000, 'Andohatapenaka', 0, '2024-06-11 15:44:49', '2024-06-11 15:44:49'),
(32, 'VILLA T4', 'VILLA T4 \r\nPROPRIETAIRE DIRECT\r\n-3 CHAMBRES\r\n-1 LIVING\r\n-CUISINE\r\n-SALLE D\'EAU\r\n-DOUCHE PAR CHAMBRES\r\n-TERRASSE\r\n-PISCINE\r\n-DEPENDANCE GARDIEN', 3, 5, 0, 1500000, 'AMBATOBE', 1, '2024-06-11 15:49:09', '2024-06-25 02:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `logement_option`
--

CREATE TABLE `logement_option` (
  `option_id` bigint UNSIGNED NOT NULL,
  `logement_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logement_option`
--

INSERT INTO `logement_option` (`option_id`, `logement_id`) VALUES
(1, 27),
(4, 27),
(5, 27),
(6, 27),
(1, 28),
(4, 28),
(5, 28),
(9, 29),
(12, 29),
(1, 30),
(9, 30),
(1, 31),
(5, 31),
(6, 31),
(9, 31),
(1, 32),
(4, 32),
(5, 32),
(8, 32),
(11, 32),
(12, 32);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `coms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `coms`, `name`, `profile`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Recherche appartement T4', 'Mihaja Rakoto', '1717521960.jpg', 17, NULL, NULL),
(5, 'Super votre site', 'Lala RAVELO', '1717522616.jpg', 18, NULL, NULL),
(6, 'Recheche une maison entière à louer', 'Rivo', '1717237520.jpg', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_08_124006_create_sliders_table', 1),
(6, '2024_05_23_174038_create_offres_table', 2),
(8, '2024_05_28_161503_create_logements_table', 3),
(9, '2024_05_28_162631_create_quartiers_table', 3),
(10, '2024_05_30_082251_create_options_table', 4),
(11, '2024_05_30_093749_create_option_logement_table', 5),
(12, '2024_05_30_123313_create_logement_option_table', 6),
(13, '2024_05_31_132542_create_images_table', 7),
(14, '2024_06_02_094743_create_annonces_table', 8),
(15, '2024_06_02_113017_create_messages_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Parking', '2024-05-30 06:05:15', '2024-05-30 06:05:15'),
(4, 'Jardin', '2024-05-30 06:12:21', '2024-05-30 06:12:21'),
(5, 'Garage', '2024-05-30 06:12:29', '2024-05-30 06:12:29'),
(6, 'Chauffe eau', '2024-05-30 06:12:44', '2024-05-30 06:12:44'),
(7, 'Vue panoramique', '2024-05-30 06:12:59', '2024-05-30 06:12:59'),
(8, 'Piscine', '2024-05-30 06:13:10', '2024-05-30 06:13:10'),
(9, 'Bord de route', '2024-05-30 06:13:31', '2024-05-30 06:13:31'),
(10, 'Climatiseur', '2024-05-30 06:14:11', '2024-05-30 06:14:11'),
(11, 'Terrasse', '2024-05-30 06:18:01', '2024-05-30 06:18:01'),
(12, 'Salle d\'eau à l\'intérieur', '2024-06-01 06:44:16', '2024-06-01 06:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `option_logement`
--

CREATE TABLE `option_logement` (
  `option_id` bigint UNSIGNED NOT NULL,
  `logement_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quartiers`
--

CREATE TABLE `quartiers` (
  `id` bigint UNSIGNED NOT NULL,
  `quartier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `Titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `Titre`, `Description`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'Find a best Job for you ', 'Lorem ipsum ', '1.jpg ', '2024-04-08 10:58:34', '2024-04-08 10:58:34'),
(2, 'Kopy', 'Kopy lorem', '1713265804.jpg', '2024-04-16 08:10:05', '2024-04-16 08:10:05'),
(3, 'Surf', 'Surf lorem', '1713266435.png', '2024-04-16 08:20:35', '2024-04-16 08:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `statut`, `profile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Toni Reinger', 'ashton.bernhard@example.com', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', '9fKs4nbeZE', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(2, 'Dr. Kobe Koepp Sr.', 'jedidiah.zemlak@example.org', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', 'NRSWtqgUOH', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(3, 'Granville Kirlin', 'hanna67@example.com', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', 'ZsvbZjhqFM', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(4, 'Isadore Kub DVM', 'winfield.kling@example.net', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', '0FJksZw5Xo', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(6, 'Verona Feeney DVM', 'verlie29@example.com', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', 'rGS9aEMPdh', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(7, 'Trey Nader', 'schulist.talia@example.com', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', 'lTm7gCIn13', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(8, 'Hollis Larkin', 'franecki.rosetta@example.org', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', 'YcwnNwoPDs', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(9, 'Lucas Halvorson PhD', 'ashlynn.mayert@example.com', 'user', NULL, '2024-04-09 09:09:44', '$2y$12$QDkv4g1UBz9ewx2TFYe3s.OlV9PK0kUtdMufTZJojQxcnZRyiKRS6', 'JE8Cw3FzNK', '2024-04-09 09:09:44', '2024-04-09 09:09:44'),
(14, 'Bema', 'bema@gmail.com', 'user', '1717237836.png', NULL, '$2y$10$qXCVJCxkFa9DiJSl6o.fL.kCS89ACLGTzFP5j5WmKI8swweMF08nq', NULL, '2024-06-01 07:30:37', '2024-06-01 07:30:37'),
(15, 'Toky', 'tokyB@gmail.com', 'user', '1717317344.jpg', NULL, '$2y$10$dmJfx.UqMJhluDOjMok4se5Lfdi7VhCv7fUkXGQhHVsK7MlmtONf.', NULL, '2024-06-02 05:35:44', '2024-06-02 05:35:44'),
(16, 'Rivo', 'rova@gmail.com', 'user', '1717237520.jpg', NULL, '$2y$10$SjlMWn2OgyR9z/uDcmAcx.3GbVaakKgaf587zeT/ndpb.neRg8eqq', NULL, '2024-06-02 08:02:03', '2024-06-02 08:02:03'),
(17, 'Mihaja Rakoto', 'mihaja@test.com', 'user', '1717521960.jpg', NULL, '$2y$10$Li0ckHRDq8chQ0fEUtE6.uUXYFmXRN1SlD2t2X9wiQ2Q5dBSSTgnW', NULL, '2024-06-04 14:26:01', '2024-06-04 14:26:01'),
(18, 'Lala RAVELO', 'lala@gmail.com', 'user', '1717522616.jpg', NULL, '$2y$10$qWmEQoPUdAJgKc0h1G0oZOdK1TyEnAqeAKtBRs9LnU0P3hYtx.7lu', NULL, '2024-06-04 14:36:56', '2024-06-04 14:36:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD KEY `annonces_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logements`
--
ALTER TABLE `logements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logement_option`
--
ALTER TABLE `logement_option`
  ADD PRIMARY KEY (`option_id`,`logement_id`),
  ADD KEY `logement_option_logement_id_foreign` (`logement_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option_logement`
--
ALTER TABLE `option_logement`
  ADD PRIMARY KEY (`option_id`,`logement_id`);

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
-- Indexes for table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `logements`
--
ALTER TABLE `logements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `annonces_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `logement_option`
--
ALTER TABLE `logement_option`
  ADD CONSTRAINT `logement_option_logement_id_foreign` FOREIGN KEY (`logement_id`) REFERENCES `logements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `logement_option_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
