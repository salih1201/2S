-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 mei 2026 om 14:18
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escape-room`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `hint` varchar(255) DEFAULT NULL,
  `roomId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `hint`, `roomId`) VALUES
(10, 'De kluis van de verdachte heeft een code. Het is het jaar waarin we nu leven.', '2026', 'Kijk naar de huidige kalender.', 1),
(11, 'Het slachtoffer werd gevonden om 15:00 uur. Hoeveel uur is dit na 12:00 uur \'s middags?', '3', '15 min 12', 1),
(12, 'De rechercheur vond een briefje met een geheime code: A=1, B=2, C=3. Welk woord vormt de code: 2-1-4-7-5?', 'badge', 'Zet de cijfers om naar letters van het alfabet (de 2e letter is B, de 1e is A...).', 1),
(13, 'Wat is de viercijferige pincode als alle getallen hetzelfde zijn en samen 12 vormen?', '3333', '12 gedeeld door 4', 2),
(14, 'De hacker heeft het scherm vergrendeld. Wat is het Engelse woord voor \'wachtwoord\'?', 'Password', 'Pass + word', 2),
(15, 'Hoeveel letters zitten er in het woord \"ESCAPEROOM\"?', '10', 'Tel de letters één voor één', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
