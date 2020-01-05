-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2019 at 09:16 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7YNzXacPRV`
--
CREATE DATABASE IF NOT EXISTS `7YNzXacPRV` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `7YNzXacPRV`;

-- --------------------------------------------------------

--
-- Table structure for table `candidati`
--

CREATE TABLE `candidati` (
  `cod` int(11) NOT NULL,
  `nume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresa_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clasa_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scoala_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `judet_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localitate_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parola_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidati`
--

INSERT INTO `candidati` (`cod`, `nume_candidati`, `prenume_candidati`, `adresa_candidati`, `telefon_candidati`, `email_candidati`, `clasa_candidati`, `scoala_candidati`, `judet_candidati`, `localitate_candidati`, `user_candidati`, `parola_candidati`, `rol_candidati`) VALUES
(98, 'Banciu', 'Bianca', 'strada Eroilor nr 3', '0789241241', 'bb@yahoo.com', '12', 'CNGRC', 'VS', 'Barlad', 'bianca', 'bianca', 'elev'),
(100, ' anca', ' anca', NULL, NULL, NULL, '11', 'CNALC', 'BR', 'Braila', NULL, NULL, NULL),
(101, ' andrei', '  ilie', NULL, NULL, NULL, '10', 'ALCUZA', 'Bucuresti', 'Bucuresti', NULL, NULL, NULL),
(102, 'eeee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comisie`
--

CREATE TABLE `comisie` (
  `cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nume_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon_comisie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comisie`
--

INSERT INTO `comisie` (`cod`, `nume_comisie`, `prenume_comisie`, `telefon_comisie`, `email_comisie`) VALUES
(12, 'comisie2', 'comisie2', '0986547834', 'com@yahoo.com'),
(13, 'cm1', 'cm1', '8343274329', 'cm1'),
(14, 'comm', 'comm', '2174028147', 'comm'),
(15, 'cc', 'cc', '3487239573', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cod` int(45) NOT NULL,
  `subiect` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nume` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mesaj` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cod`, `subiect`, `nume`, `prenume`, `telefon`, `email`, `mesaj`) VALUES
(1, 'test', 'Antohe', 'Anca', '789432746', 'aa@yahoo.com', 'mesaj de test'),
(2, 'test', 'Antohe', 'Anca', '789432746', 'aa@yahoo.com', 'mesaj de test'),
(3, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(4, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(5, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(6, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(7, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(8, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(9, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(10, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(15, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(16, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(17, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(18, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(19, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(20, 'wdwq', 'bvvv', 'vvv', '987890987', 'vvv@yahoo.com', 'fbkwjfbwe'),
(21, 'gduygkfsgdhg', 'udffdsghjsdfgh', 'gfdgdfshjdsahjjh', '7456849302', 'sdnfcdsjbfkd@yahoo.com', 'fdsgdsg'),
(22, 'jbdsbj', 'bjfjbdvj', 'vjjfdgjl', '7835793285', 'djhds@yahoo.com', 'fewgewg'),
(23, 'fdsfsG', 'DSGFUDUSYG', 'YVDGUYDGY', '9854763486', 'rughre@yahoo.com', 'DGISUDGHDSIU');

-- --------------------------------------------------------

--
-- Table structure for table `rezultate`
--

CREATE TABLE `materie` (
	`cod_materie` int(11) NOT NULL,
	`denumire_materie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `materie` (`cod_materie`, `denumire_materie`) VALUES
(3, ' Matematica'),
(4, ' Fizica'),
(5, ' Geografie');

CREATE TABLE `rezultate` (
  `cod` int(45) NOT NULL,
  `nume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenume_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clasa_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scoala_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localitate_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `judet_candidati` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proba1` varchar(45) COLLATE utf8_unicode_ci DEFAULT '0',
  `proba2` varchar(45) COLLATE utf8_unicode_ci DEFAULT '0',
  `proba3` varchar(45) COLLATE utf8_unicode_ci DEFAULT '0',
  `cod_materie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezultate`
--

INSERT INTO `rezultate` (`cod`, `nume_candidati`, `prenume_candidati`, `clasa_candidati`, `scoala_candidati`, `localitate_candidati`, `judet_candidati`, `proba1`, `proba2`, `proba3`, `cod_materie`) VALUES
(3, ' Anca', ' Irina', '  12  ', ' BUC', ' DJ', ' DJ ', ' 9', ' 9', ' 9', 3),
(4, 'Andreaa', 'Aschii', '10', 'BUC', 'BR', 'BR', '6', '6', '6', 3),
(5, 'xvnbxzbvz', 'vxzvxzv', '22', 'vdx', '4324234', 'fgdfgfd', '4', '4', '4', 4),
(6, 'bbbbb', 'cccc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(9, 'cccc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(15, '  cbvbvncsbdjkfjk', ' dbfbdsbkjdsbjbjdfsjbkdfsjk', '10 ', ' vfjcvbdskjJJ', ' hfjdsjkfdsjjkh', ' HVDJJJHD  ', ' 8', ' 8', ' 8', 3),
(16, 'te', 'te', 'te', 'te', 'tet=', 'te', '0', '0', '0', 4),
(17, 'ana', 'ana', 'aa', 'ana', 'ana', 'ana', '', '', '', 5),
(18, 'test2', 'test2', '12', 'test2', 'test2', 'test2', '0', '0', '0', 4),
(19, 'perju', 'andrei-cristian', '12', 'djksdjjH', 'ghggh', 'ggggg', '0', '0', '0', 3),
(20, 'bb', 'bb', 'bb', 'bb', 'bb', 'b', '0', '0', '0', 5),
(21, 'v', 'vv', 'v', 'v', 'v', 'v', '0', '0', '0', 3),
(22, 'Banciu', 'Bianca', '12', 'CNGRC', 'Barlad', 'VS', '0', '0', '0', 4),
(23, 'Banciu', 'Bianca', '12', 'CNGRC', 'Barlad', 'VS', '4', '5', '6', 4),
(24, 'test', 'test', '12', 'test', 'test', 'test', '0', '0', '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `utilizator`
--

CREATE TABLE `utilizator` (
  `cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cod_comisie` int(11) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilizator`
--

INSERT INTO `utilizator` (`cod`, `user`, `pass`, `cod_comisie`) VALUES
(62, 'cm1', MD5('cm1'), 12),
(63, 'comm', MD5('comm'), 13),
(64, 'comisie2', MD5('comisie2'), 14),
(65, 'cc', MD5('cc'), 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidati`
--

ALTER TABLE `materie`
	ADD PRIMARY KEY (`cod_materie`); 

ALTER TABLE `materie`
  MODIFY `cod_materie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

ALTER TABLE `candidati`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `comisie`
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `rezultate`
--
ALTER TABLE `rezultate`
  ADD PRIMARY KEY (`cod`);

ALTER TABLE `rezultate`
	ADD FOREIGN KEY (`cod_materie`)
	REFERENCES `materie` (`cod_materie`);

ALTER TABLE `utilizator`
	ADD FOREIGN KEY (`cod_comisie`)
	REFERENCES `comisie` (`cod`);

--
-- Indexes for table `utilizator`
--
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidati`
--
ALTER TABLE `candidati`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `comisie`
--
ALTER TABLE `comisie`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cod` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rezultate`
--
ALTER TABLE `rezultate`
  MODIFY `cod` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `utilizator`
--
ALTER TABLE `utilizator`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
