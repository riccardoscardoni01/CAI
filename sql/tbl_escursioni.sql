-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2018 at 03:20 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_socio"
--

CREATE TABLE IF NOT EXISTS `tbl_socio` (
  `codF` varchar(16) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `data_di_nascita` date NOT NULL,
  `dataIscrizione` date NOT NULL,
  `dataScadenza` date NOT NULL,
  `cell` int(10) NOT NULL,
  `ruolo` varchar(255) NOT NULL,
  PRIMARY KEY (`codF`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;


--
-- Table structure for table `tbl_escursione"
--

CREATE TABLE IF NOT EXISTS `tbl_escursione` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `costo` double(10,2) NOT NULL,
  `difficolta` varchar(255) NOT NULL,
  `posti_disponibili` int(11) NOT NULL,
  `attrezzatura` varchar(255) NOT NULL,
  `codFUtente` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`codFUtente`) REFERENCES tbl_socio(`codF`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Table structure for table `tbl_partecipazione"
--

CREATE TABLE IF NOT EXISTS `tbl_partecipazione` (
  `codFUtente` varchar(16) NOT NULL,
  `idEscursione` int(11) NOT NULL,
  `data_` date NOT NULL,
  PRIMARY KEY (`codFUtente`, `idEscursione`),
  FOREIGN KEY (`codFUtente`) REFERENCES tbl_socio(`codF`),
  FOREIGN KEY (`idEscursione`) REFERENCES tbl_escursione(`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `tbl_socio`
--

INSERT INTO `tbl_socio` (`codF`, `nome`, `cognome`, `password`, `data_di_nascita`, `dataIscrizione`, `dataScadenza`, `cell`, `ruolo`) VALUES
('SCRRCR01A15L781K', 'Riccardo', 'Scardoni', 'ciao123456', '2001-01-15', '2020-01-01', '2021-01-01', '33177160160', 'Escursionista'),
('SCSVCR15A147381K', 'maria', 'rossi', 'abncjdsf', '1960-01-25', '2020-01-01', '2021-01-01', '87483901921', 'Guida'),
('BCNSCR15AFJS381K', 'Bruno', 'rossi', 'fdsfdsfdsg', '1987-05-15', '2020-01-01', '2021-01-01', '73829194857', 'Guida');


--
-- Dumping data for table `tbl_escursione`
--

INSERT INTO `tbl_escursione` (`id`, `meta`, `image`, `costo`, `difficolta`, `posti_disponibili`, `attrezzatura`, `codFUtente`) VALUES
(1, 'Bosco Chiesanuova', '1.jpg', 25.00, 'Sentiero Turistico', 35, '1.txt', 'SCSVCR15A147381K'),
(2, 'Folgaria', '2.jpg', 40.00, 'Sentiero Escursionistico', 20, '2.txt', 'SCSVCR15A147381K'),
(3, 'Lago Sorapis', '3.jpg', 125.00, 'Sentiero per esperti', 23, '3.txt', 'BCNSCR15AFJS381K');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
