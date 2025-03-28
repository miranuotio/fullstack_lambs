-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19.05.2023 klo 08:40
-- Palvelimen versio: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lambs`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `kalenteri`
--

CREATE TABLE `kalenteri` (
  `keikkaid` int(11) NOT NULL,
  `pvm` date NOT NULL DEFAULT current_timestamp(),
  `kaupunki` varchar(30) NOT NULL,
  `paikka` varchar(40) NOT NULL,
  `klo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Vedos taulusta `kalenteri`
--

INSERT INTO `kalenteri` (`keikkaid`, `pvm`, `kaupunki`, `paikka`, `klo`) VALUES
(2, '2023-05-15', 'Turku', 'Logomo', '21:00:00'),
(3, '2023-05-05', 'Oulu', 'Kapakka', '18:30:00'),
(11, '2023-05-18', 'Tampere', 'Klubi', '22:00:00'),
(12, '2023-05-18', 'Oulu', 'Kellari', '21:00:00'),
(13, '2023-05-18', 'Helsinki', 'Lasipalatsi', '18:30:00'),
(14, '2023-05-18', 'Kouvola', 'Keikkapaikka1', '21:00:00');

-- --------------------------------------------------------

--
-- Rakenne taululle `kayttajat`
--

CREATE TABLE `kayttajat` (
  `id` int(11) NOT NULL,
  `sposti` varchar(30) NOT NULL,
  `tunnus` varchar(30) NOT NULL,
  `salasana` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Vedos taulusta `kayttajat`
--

INSERT INTO `kayttajat` (`id`, `sposti`, `tunnus`, `salasana`) VALUES
(5, 'lambs@lambs.fi', 'lambs', '$2y$10$iZHkaXo3NI2BIbXlKdD1Euk'),
(6, 'umpu@pumppu.fi', 'lambss', 'lambss');

-- --------------------------------------------------------

--
-- Rakenne taululle `uutiset`
--

CREATE TABLE `uutiset` (
  `uutisid` int(11) NOT NULL,
  `pvm` date NOT NULL,
  `otsikko` varchar(100) NOT NULL,
  `sisalto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Vedos taulusta `uutiset`
--

INSERT INTO `uutiset` (`uutisid`, `pvm`, `otsikko`, `sisalto`) VALUES
(1, '2023-05-10', 'Uutta musiikkia tulossa, jee!', '5.5.2023 ilmestyy uutta musiikkia kuunneltavaksi kaikille bändin sosiaalisen median alustoille sekä youtubeen.'),
(2, '2023-05-06', 'Uusi musiikkivideo!', 'Hirveen hianoo! Notta kahtoo video youtubesta, asap.'),
(8, '2023-05-17', 'Helsinki!', 'Helsingin Lasipalatsissa keikka 18.5. klo 18.30!'),
(9, '2023-05-14', 'Turku!', 'Tul sääki ny täl pual si Logomol kattomaa kunt mää soitetaan klo 21.00! So moro'),
(10, '2023-05-06', 'Oulu!', 'Oulun Kellari tärähtää 18.5. klo 21.00. Liput ovelta!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kalenteri`
--
ALTER TABLE `kalenteri`
  ADD PRIMARY KEY (`keikkaid`);

--
-- Indexes for table `kayttajat`
--
ALTER TABLE `kayttajat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uutiset`
--
ALTER TABLE `uutiset`
  ADD PRIMARY KEY (`uutisid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kalenteri`
--
ALTER TABLE `kalenteri`
  MODIFY `keikkaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kayttajat`
--
ALTER TABLE `kayttajat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uutiset`
--
ALTER TABLE `uutiset`
  MODIFY `uutisid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
