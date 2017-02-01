-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 jan 2017 om 12:51
-- Serverversie: 10.1.13-MariaDB
-- PHP-versie: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vissenkoppen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e310bf5a19c368297eee3bb3a7665e49ec34b1c90eb6609cd16fe23f3d8dd857d76b7bb06d2246ec920d545434d06e69a5a5d5d06e4b0f1b486ab376bc91b473');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `summary`, `date`, `full_name`) VALUES
(4, 'Anton', 'Anton is een hele toffe jongen', 'Anton is heel stoer\r\n', '2017-01-16 08:25:21', ''),
(5, 'Goddammit Damaris', 'Waar the heck is Damaris dit keer nou weer!?', 'Damaris is er weer eens niet', '2017-01-16 08:26:08', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `images`
--

INSERT INTO `images` (`id`, `article_id`, `image`) VALUES
(11, 4, 'uploads/4k.jpg'),
(12, 4, 'uploads/16 - 1.png'),
(13, 4, 'uploads/35xyux.jpg'),
(14, 5, 'uploads/a4Z1Bjd_460s.jpg'),
(15, 5, 'uploads/a8py23Z_460s.jpg'),
(16, 5, 'uploads/a9W1L90_460s.jpg'),
(17, 5, 'uploads/a973vLZ_460s.jpg'),
(18, 5, 'uploads/35xyux.jpg'),
(19, 4, 'uploads/a4Z1Bjd_460s.jpg'),
(20, 4, 'uploads/a8py23Z_460s.jpg'),
(21, 4, 'uploads/a9W1L90_460s.jpg'),
(22, 4, 'uploads/a973vLZ_460s.jpg'),
(23, 4, 'uploads/aG0MKqw_460s.jpg'),
(24, 4, 'uploads/ajqBYrQ_460s.jpg'),
(25, 4, 'uploads/aK2VBxj_460s.jpg'),
(26, 4, 'uploads/aLMvgYW_700b.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
