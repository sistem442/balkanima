-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2014 at 11:51 AM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dksg_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmskola2013`
--

CREATE TABLE IF NOT EXISTS `filmskola2013` (
  `id` mediumint(4) NOT NULL,
  `year` smallint(4) NOT NULL,
  `originalniNaziv` text COLLATE utf8_slovenian_ci NOT NULL,
  `minuti` int(2) NOT NULL,
  `sekunde` int(2) NOT NULL,
  `engleskiNaziv` text COLLATE utf8_slovenian_ci NOT NULL,
  `reziser` text COLLATE utf8_slovenian_ci NOT NULL,
  `emailRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `scenario` text COLLATE utf8_slovenian_ci NOT NULL,
  `animacija` text COLLATE utf8_slovenian_ci NOT NULL,
  `crtez` text COLLATE utf8_slovenian_ci NOT NULL,
  `muzika` text COLLATE utf8_slovenian_ci NOT NULL,
  `zvucniEfekti` text COLLATE utf8_slovenian_ci NOT NULL,
  `montaza` text COLLATE utf8_slovenian_ci NOT NULL,
  `tehnikeRealizacije` text COLLATE utf8_slovenian_ci NOT NULL,
  `datum` text COLLATE utf8_slovenian_ci NOT NULL,
  `idskole` int(4) NOT NULL,
  `preview_link` text COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci COMMENT='Prijave skola animacije ';

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` text CHARACTER SET latin1 NOT NULL,
  `prezime` text CHARACTER SET latin1 NOT NULL,
  `username` text CHARACTER SET latin1 NOT NULL,
  `password` text CHARACTER SET latin1 NOT NULL,
  `lastLogin` varchar(30) CHARACTER SET latin1 NOT NULL,
  `lastLogout` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `prijaveindividual2013`
--

CREATE TABLE IF NOT EXISTS `prijaveindividual2013` (
  `id` mediumint(4) NOT NULL,
  `year` smallint(4) NOT NULL,
  `originalniNaziv` text COLLATE utf8_slovenian_ci NOT NULL,
  `engleskiNaziv` text COLLATE utf8_slovenian_ci NOT NULL,
  `reziser` text COLLATE utf8_slovenian_ci NOT NULL,
  `adresaRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `telefonRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `emailRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `biografija` text COLLATE utf8_slovenian_ci NOT NULL,
  `producent` text COLLATE utf8_slovenian_ci NOT NULL,
  `adresaProducenta` text COLLATE utf8_slovenian_ci NOT NULL,
  `emailProducenta` text COLLATE utf8_slovenian_ci NOT NULL,
  `telefon` text COLLATE utf8_slovenian_ci NOT NULL,
  `minuti` smallint(2) NOT NULL,
  `sekunde` int(2) NOT NULL,
  `mesecProizvodnje` varchar(2) COLLATE utf8_slovenian_ci NOT NULL,
  `godinaProizvodnje` int(4) NOT NULL,
  `scenario` text COLLATE utf8_slovenian_ci NOT NULL,
  `animacija` text COLLATE utf8_slovenian_ci NOT NULL,
  `crtez` text COLLATE utf8_slovenian_ci NOT NULL,
  `scenografija` text COLLATE utf8_slovenian_ci NOT NULL,
  `trikKamera` text COLLATE utf8_slovenian_ci NOT NULL,
  `muzika` text COLLATE utf8_slovenian_ci NOT NULL,
  `zvucniEfekti` text COLLATE utf8_slovenian_ci NOT NULL,
  `montaza` text COLLATE utf8_slovenian_ci NOT NULL,
  `format` text COLLATE utf8_slovenian_ci NOT NULL,
  `sinopsis` text COLLATE utf8_slovenian_ci NOT NULL,
  `slika1` text COLLATE utf8_slovenian_ci NOT NULL,
  `slika2` text COLLATE utf8_slovenian_ci NOT NULL,
  `slikaRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola1` text COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola2` text COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola3` text COLLATE utf8_slovenian_ci NOT NULL,
  `datum` text COLLATE utf8_slovenian_ci NOT NULL,
  `kategorija` text COLLATE utf8_slovenian_ci NOT NULL,
  `tehnike` text COLLATE utf8_slovenian_ci NOT NULL,
  `zemlja` text CHARACTER SET utf32 COLLATE utf32_slovenian_ci NOT NULL,
  `preview_link` text COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prijavestudenti2013`
--

CREATE TABLE IF NOT EXISTS `prijavestudenti2013` (
  `id` mediumint(4) NOT NULL,
  `year` smallint(4) NOT NULL,
  `originalniNaziv` text COLLATE utf8_slovenian_ci NOT NULL,
  `engleskiNaziv` text COLLATE utf8_slovenian_ci NOT NULL,
  `reziser` text COLLATE utf8_slovenian_ci NOT NULL,
  `adresaRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `telefonRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `emailRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `biografija` text COLLATE utf8_slovenian_ci NOT NULL,
  `school` text COLLATE utf8_slovenian_ci NOT NULL,
  `schoolAddress` text COLLATE utf8_slovenian_ci NOT NULL,
  `schoolEmail` text COLLATE utf8_slovenian_ci NOT NULL,
  `schoolTelephone` text COLLATE utf8_slovenian_ci NOT NULL,
  `minuti` smallint(2) NOT NULL,
  `sekunde` int(2) NOT NULL,
  `mesecProizvodnje` varchar(2) COLLATE utf8_slovenian_ci NOT NULL,
  `godinaProizvodnje` int(4) NOT NULL,
  `distribucija` text COLLATE utf8_slovenian_ci NOT NULL,
  `scenario` text COLLATE utf8_slovenian_ci NOT NULL,
  `animacija` text COLLATE utf8_slovenian_ci NOT NULL,
  `crtez` text COLLATE utf8_slovenian_ci NOT NULL,
  `scenografija` text COLLATE utf8_slovenian_ci NOT NULL,
  `trikKamera` text COLLATE utf8_slovenian_ci NOT NULL,
  `muzika` text COLLATE utf8_slovenian_ci NOT NULL,
  `zvucniEfekti` text COLLATE utf8_slovenian_ci NOT NULL,
  `montaza` text COLLATE utf8_slovenian_ci NOT NULL,
  `format` text COLLATE utf8_slovenian_ci NOT NULL,
  `sinopsis` text COLLATE utf8_slovenian_ci NOT NULL,
  `slika1` text COLLATE utf8_slovenian_ci NOT NULL,
  `slika2` text COLLATE utf8_slovenian_ci NOT NULL,
  `slikaRezisera` text COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola1` text COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola2` text COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola3` text COLLATE utf8_slovenian_ci NOT NULL,
  `datum` text COLLATE utf8_slovenian_ci NOT NULL,
  `tehnike` text COLLATE utf8_slovenian_ci NOT NULL,
  `zemlja` text CHARACTER SET utf32 COLLATE utf32_slovenian_ci NOT NULL,
  `kategorija` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `preview_link` text COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school2014`
--

CREATE TABLE IF NOT EXISTS `school2014` (
  `id` int(5) NOT NULL,
  `year` smallint(6) NOT NULL,
  `ime` text COLLATE utf8_slovenian_ci NOT NULL,
  `adresa` text COLLATE utf8_slovenian_ci NOT NULL,
  `telefon` text COLLATE utf8_slovenian_ci NOT NULL,
  `email` text COLLATE utf8_slovenian_ci NOT NULL,
  `sajt` text COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola1` varchar(2) COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola2` varchar(2) COLLATE utf8_slovenian_ci NOT NULL,
  `dozvola3` varchar(2) COLLATE utf8_slovenian_ci NOT NULL,
  `numberOfFilms` int(2) NOT NULL,
  `productionDate` text COLLATE utf8_slovenian_ci NOT NULL,
  `country` text COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
