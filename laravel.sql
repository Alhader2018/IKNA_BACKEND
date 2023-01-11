-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 jan. 2023 à 16:28
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `titre`, `description`, `created_at`, `updated_at`, `logo`) VALUES
(1, 'Cours 1', 'Cours1', '2023-01-10 15:10:02', '2023-01-11 15:51:14', ''),
(2, 'OK', 'ok', '2023-01-11 10:47:48', '2023-01-11 10:47:48', 'logo'),
(3, 'Cours 1', 'cours 1', '2023-01-11 10:51:40', '2023-01-11 12:33:26', NULL),
(4, 'OK', 'ok', '2023-01-11 10:52:19', '2023-01-11 10:52:19', 'logo'),
(5, 'OK3', 'ok3', '2023-01-11 10:52:54', '2023-01-11 16:13:12', 'wnGzphRbOwOT21UI9i9DLmPRWPBiWPV3uL2uf2I4.png'),
(6, 'ok4', 'ok4', '2023-01-11 10:55:31', '2023-01-11 10:55:31', 'logo'),
(7, 'ok4', 'ok4', '2023-01-11 10:56:27', '2023-01-11 10:56:27', 'logo'),
(8, 'ok6', 'ok6', '2023-01-11 11:53:27', '2023-01-11 11:53:27', 'logo'),
(9, 'ok6', 'ok6', '2023-01-11 11:54:52', '2023-01-11 11:54:52', 'logo'),
(10, 'ok6', 'ok7', '2023-01-11 11:54:59', '2023-01-11 11:54:59', 'logo'),
(11, 'ok', 'ok', '2023-01-11 12:08:43', '2023-01-11 12:08:43', 'images\\LOGO.png'),
(12, 'ok', 'ok', '2023-01-11 12:09:50', '2023-01-11 12:09:50', 'images\\php8325.tmp'),
(13, 'Cours 1', 'cours', '2023-01-11 12:13:57', '2023-01-11 12:13:57', NULL),
(14, 'Cours 1', 'cours3', '2023-01-11 12:14:07', '2023-01-11 12:14:07', NULL),
(15, 'Cours 1', 'cours4', '2023-01-11 12:14:13', '2023-01-11 12:14:13', NULL),
(16, 'Cours 15', 'cours 15', '2023-01-11 12:15:12', '2023-01-11 12:15:12', NULL),
(20, 'OK', 'cool', '2023-01-11 12:58:50', '2023-01-11 12:58:50', 'XY5FztflpTFPOjEC4zzz9Ia09TSnyPQb7fT9ItrV.png'),
(17, 'OK', 'ok', '2023-01-11 12:52:15', '2023-01-11 12:52:23', 'srMBey0EcR8LlcoLJUXfHP14S7iT2fOf09yLt0y4.png'),
(18, 'Cours 17', 'Cours 17', '2023-01-11 12:52:43', '2023-01-11 12:52:43', 'j'),
(19, 'Cours 18', 'Cours 18', '2023-01-11 12:53:48', '2023-01-11 12:53:48', 'DeQgFEoZBhlZeMQlsEYYMApRAAqe9FKSZXb0TcfA.png');

-- --------------------------------------------------------

--
-- Structure de la table `ikna_message`
--

DROP TABLE IF EXISTS `ikna_message`;
CREATE TABLE IF NOT EXISTS `ikna_message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_expeditaire` varchar(60) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `id_destinateur` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lignecours`
--

DROP TABLE IF EXISTS `lignecours`;
CREATE TABLE IF NOT EXISTS `lignecours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `cours_id` int NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lignecours`
--

INSERT INTO `lignecours` (`id`, `titre`, `description`, `created_at`, `updated_at`, `cours_id`, `logo`) VALUES
(1, 'SSR f', 'SSR f', '2023-01-11 14:38:59', '2023-01-11 16:00:46', 1, ''),
(2, 'OK f', 'ok f', '2023-01-11 15:22:45', '2023-01-11 16:00:50', 1, ''),
(3, 'OK', 'Cours Ligne 17', '2023-01-11 15:23:22', '2023-01-11 15:23:22', 18, 'YrK3js5R3698Hz1FjGgJ6UMiZAtC0c6XmxDERKhF.png'),
(4, 'ligne 3', 'ligne 3', '2023-01-11 15:53:46', '2023-01-11 15:53:46', 1, ''),
(5, 'Ligne2', 'Ligne 2', '2023-01-11 15:54:04', '2023-01-11 15:54:04', 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Al Hader', 'maigaalhader@gmail.com', NULL, '$2y$10$36LnE0L.yZFud5FVNRgYg.YP8LF7gjj5U6bEKJOmlq7bbEB57ajIC', NULL, '2023-01-10 11:09:08', '2023-01-10 11:09:08'),
(2, 'Hassey', 'hassey@gmail.com', NULL, '$2y$10$9RQCSkgoAAQ.GZOIpvEYC.ZNvE/99KliTvkqOW42eQ/kBN1L7ipq.', NULL, '2023-01-11 16:10:23', '2023-01-11 16:10:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
