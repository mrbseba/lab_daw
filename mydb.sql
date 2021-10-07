-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: oct. 07, 2021 la 07:42 AM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `mydb`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `to_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `to_date`) VALUES
(1, 'lena.bejan', '$2y$10$PPRZN.Ct5RPtOa.dNDJE4.Bb9K9R8jkH7.nnACsXx.Dh8rndL.E16', 'elena.bejan@gmai.com', '2021-10-07 06:44:01'),
(2, 'ledyalbot', '$2y$10$68XzZNQZmSMwSUhtiA8fAes57BlVTmZ0Vv1DAAXr5OYzfUPJ5wih2', 'ledyalbot@gmail.com', '2021-10-07 06:51:39'),
(3, 'mama', '$2y$10$rjGm7ILw22zLZSQG.kpgEeTrAxr0ZE0tYFDuCuKgksnHQti1ay9jS', 'mama@gmail.com', '2021-10-07 07:24:28'),
(4, 'sebo', '$2y$10$smAXFL8oMVXReIaO9dmhs.JBK.cGmkh47fC8yfy8HL5fAQjNuHpEm', 'sebo@gmail.com', '2021-10-07 08:08:51'),
(5, 'darius', '$2y$10$/xBhkp0uUn1vn4kb18yfLOWNdnz/yPAdkldGadOal829lfokmAbbC', 'darius@gmail.com', '2021-10-07 08:25:09');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
