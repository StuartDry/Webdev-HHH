-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 okt 2018 om 13:59
-- Serverversie: 10.1.24-MariaDB
-- PHP-versie: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhh`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `extra`
--

CREATE TABLE `extra` (
  `extraID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `home`
--

CREATE TABLE `home` (
  `homeID` int(11) NOT NULL,
  `parkID` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `edition` varchar(25) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `parkID` int(11) NOT NULL,
  `homeID` int(11) NOT NULL,
  `check-in_date` datetime NOT NULL,
  `check-out_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_line`
--

CREATE TABLE `order_line` (
  `orderID` int(11) NOT NULL,
  `extraID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE `pages` (
  `pageID` int(11) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `park`
--

CREATE TABLE `park` (
  `parkID` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `park_extra`
--

CREATE TABLE `park_extra` (
  `parkID` int(11) NOT NULL,
  `extraID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pw_recovery`
--

CREATE TABLE `pw_recovery` (
  `recoveryID` int(11) NOT NULL,
  `recovery_key` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `newsletter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`userID`, `email`, `first_name`, `last_name`, `password`, `phonenumber`, `newsletter`) VALUES
(1, 'test@test.nl', '', '', '$2y$10$w6oY8xdh6xTq.0GmhqcoDOK2lumJDKhDd5mhimJk6R5PUVzxNvB0S', '', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`),
  ADD UNIQUE KEY `contact_contactID_uindex` (`contactID`);

--
-- Indexen voor tabel `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`extraID`),
  ADD UNIQUE KEY `extra_extraID_uindex` (`extraID`),
  ADD UNIQUE KEY `extra_name_uindex` (`name`);

--
-- Indexen voor tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`homeID`),
  ADD UNIQUE KEY `home_homeID_uindex` (`homeID`),
  ADD KEY `home_park_parkID_fk` (`parkID`);

--
-- Indexen voor tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `ORDER_orderID_uindex` (`orderID`),
  ADD KEY `order_user_userID_fk` (`userID`),
  ADD KEY `order_park_parkID_fk` (`parkID`),
  ADD KEY `order_home_homeID_fk` (`homeID`);

--
-- Indexen voor tabel `order_line`
--
ALTER TABLE `order_line`
  ADD KEY `order_line_order_orderID_fk` (`orderID`),
  ADD KEY `order_line_extra_extraID_fk` (`extraID`);

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pageID`),
  ADD UNIQUE KEY `pages_pageID_uindex` (`pageID`);

--
-- Indexen voor tabel `park`
--
ALTER TABLE `park`
  ADD PRIMARY KEY (`parkID`),
  ADD UNIQUE KEY `park_parkID_uindex` (`parkID`),
  ADD UNIQUE KEY `park_name_uindex` (`name`);

--
-- Indexen voor tabel `park_extra`
--
ALTER TABLE `park_extra`
  ADD KEY `park_extra_park_parkID_fk` (`parkID`),
  ADD KEY `park_extra_extra_extraID_fk` (`extraID`);

--
-- Indexen voor tabel `pw_recovery`
--
ALTER TABLE `pw_recovery`
  ADD PRIMARY KEY (`recoveryID`),
  ADD UNIQUE KEY `pw_recovery_recoveryID_uindex` (`recoveryID`),
  ADD KEY `pw_recovery_user_email_fk` (`email`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `user_userID_uindex` (`userID`),
  ADD UNIQUE KEY `user_email_uindex` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `extra`
--
ALTER TABLE `extra`
  MODIFY `extraID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `home`
--
ALTER TABLE `home`
  MODIFY `homeID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `pageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `park`
--
ALTER TABLE `park`
  MODIFY `parkID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `pw_recovery`
--
ALTER TABLE `pw_recovery`
  MODIFY `recoveryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_park_parkID_fk` FOREIGN KEY (`parkID`) REFERENCES `park` (`parkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_home_homeID_fk` FOREIGN KEY (`homeID`) REFERENCES `home` (`homeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_park_parkID_fk` FOREIGN KEY (`parkID`) REFERENCES `park` (`parkID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_user_userID_fk` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_extra_extraID_fk` FOREIGN KEY (`extraID`) REFERENCES `extra` (`extraID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_line_order_orderID_fk` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `park_extra`
--
ALTER TABLE `park_extra`
  ADD CONSTRAINT `park_extra_extra_extraID_fk` FOREIGN KEY (`extraID`) REFERENCES `extra` (`extraID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `park_extra_park_parkID_fk` FOREIGN KEY (`parkID`) REFERENCES `park` (`parkID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `pw_recovery`
--
ALTER TABLE `pw_recovery`
  ADD CONSTRAINT `pw_recovery_user_email_fk` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
