-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 jun 2022 om 18:51
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `company_users`
--

CREATE TABLE `company_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `last_edit` datetime DEFAULT current_timestamp(),
  `userID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `company_users`
--

INSERT INTO `company_users` (`id`, `username`, `mail`, `password`, `last_edit`, `userID`) VALUES
(1, 'test', 'test@mail.com', '2022-06-08 23:40:26', 'safgd'),
(2, 'test', 'test@mail.com', '2022-06-08 23:40:26', 'dferhte'),
(3, 'test', 'test@mail.com', '2022-06-08 23:40:26', 'nhrhxd');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
