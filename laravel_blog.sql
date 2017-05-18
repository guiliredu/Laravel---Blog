-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 18/05/2017 às 02:00
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- Versão do PHP: 5.6.14-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_17_223950_create_noticias_table', 1),
('2017_05_18_014345_update_noticias_table', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `created_at`, `updated_at`, `imagem`) VALUES
(1, 'Título da notícia nova', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero consectetur necessitatibus ex beatae quasi sint quia provident voluptas omnis expedita?', '2017-05-16 00:00:00', '2017-05-17 00:00:00', '16711610_1337269156332933_8321361041665296932_n.jpg'),
(3, '2 Título da notícia nova', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero consectetur necessitatibus ex beatae quasi sint quia provident voluptas omnis expedita?', '2017-05-15 00:00:00', '2017-05-17 00:00:00', '16711610_1337269156332933_8321361041665296932_n.jpg'),
(6, 'Nova notícia com imagem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero consectetur necessitatibus ex beatae quasi sint quia provident voluptas omnis expedita? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero consectetur necessitatibus ex beatae ', '2017-05-18 01:52:07', '2017-05-18 01:52:07', '16711610_1337269156332933_8321361041665296932_n.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
