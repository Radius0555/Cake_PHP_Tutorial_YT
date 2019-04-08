-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Kwi 2019, 22:18
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cakedb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20190320082235, 'Initial', '2019-03-20 07:22:38', '2019-03-20 07:22:38', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id`, `name`, `comments`) VALUES
(1, 'Admin', 'Moja pierwsza aplikacja');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `phone`, `created`, `modified`, `role_id`) VALUES
(1, 'radius55@wp.pl', '123456', '556334178', '2019-03-21 20:48:50', '2019-03-21 20:48:50', 3),
(2, 'radius555@wp.pl', 'Radekiqw', '559002346', '2019-03-21 21:11:35', '2019-03-21 21:11:35', 3),
(3, 'radius05555@wp.pl', '$2y$10$TdU.MwPNs9WUQkjLXGYxLe/PaHbbZy/rBxQsA0NmRTPq7tf.xmIdK', '553189022', '2019-03-22 08:03:14', '2019-03-22 08:03:14', 3),
(4, 'radius5@wp.pl', '$2y$10$w3HWLFNt6x0iLW49DrgnUu3DKGq31ACvRJUCafUP0ruOYmXh9C2Hy', '776552190', '2019-03-24 13:20:06', '2019-03-24 13:20:06', 3),
(5, 'radius111@wp.pl', '$2y$10$PQbCsSsVMarGROeVw/w4o.FWtvUbQKlwZ7aJdugBxkMXELXRiAtcG', '664290865', '2019-03-29 08:17:33', '2019-03-29 08:17:33', 3),
(6, 'radius123@wp.pl', '$2y$10$kVfzQf.NyOQqqyR/DrMyLOPPmLCGdwevuoLxS34YmZpZlOmW64mlq', '667335119', '2019-03-29 08:20:16', '2019-03-29 08:20:16', 3),
(7, 'radius505@wp.pl', '$2y$10$9vDm7g8T9nVdnKV9W4MV9uj8V.6X7CB1bGisp8VW4AKkhez2Cz.Hq', '667331278', '2019-03-29 08:27:09', '2019-03-29 08:27:09', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
