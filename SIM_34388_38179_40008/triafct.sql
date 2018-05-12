-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Dez-2016 às 16:59
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triafct`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista`
--

DROP TABLE IF EXISTS `lista`;
CREATE TABLE IF NOT EXISTS `lista` (
  `Paciente_ID` int(11) NOT NULL,
  `Sintomas_ID` int(11) NOT NULL,
  `Hora_de_Chegada` timestamp NOT NULL,
  `Tempo Limite` timestamp NOT NULL,
  `Nivel` varchar(30) NOT NULL,
  `Visita_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`Visita_ID`),
  KEY `Paciente_ID` (`Paciente_ID`),
  KEY `Sintomas_ID` (`Sintomas_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lista`
--

INSERT INTO `lista` (`Paciente_ID`, `Sintomas_ID`, `Hora_de_Chegada`, `Tempo Limite`, `Nivel`, `Visita_ID`, `Estado`) VALUES
(25, 112, '2016-12-14 12:28:24', '2016-12-14 13:28:24', 'Amarelo', 85, 1),
(26, 113, '2016-12-14 12:30:23', '2016-12-14 12:30:23', 'Vermelho', 86, 1),
(27, 114, '2016-12-14 16:05:18', '2016-12-14 16:05:18', 'Vermelho', 87, NULL),
(26, 115, '2016-12-14 16:22:38', '2016-12-14 18:22:38', 'Verde', 88, NULL),
(25, 116, '2016-12-14 16:45:10', '2016-12-14 16:45:10', 'Vermelho', 89, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
  `Paciente_ID` int(7) NOT NULL AUTO_INCREMENT,
  `Genero` char(1) DEFAULT NULL,
  `NIF` int(10) DEFAULT NULL,
  `CartaoSaude` int(7) DEFAULT NULL,
  `User_ID` int(7) NOT NULL,
  `Foto` blob,
  PRIMARY KEY (`Paciente_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`Paciente_ID`, `Genero`, `NIF`, `CartaoSaude`, `User_ID`, `Foto`) VALUES
(25, 'm', 123, 23, 58, NULL),
(26, 'f', 344444, 5676, 59, NULL),
(27, 'f', 122, 311, 67, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sintomas`
--

DROP TABLE IF EXISTS `sintomas`;
CREATE TABLE IF NOT EXISTS `sintomas` (
  `Sintoma_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Dificuldade_respiratoria` tinyint(1) NOT NULL,
  `Problemas_cardiaco` tinyint(1) NOT NULL,
  `Fractura` tinyint(1) NOT NULL,
  `Tontura` tinyint(1) NOT NULL,
  `Hemorragia` tinyint(1) NOT NULL,
  `Azia` tinyint(1) NOT NULL,
  `Vomito` tinyint(1) NOT NULL,
  `Cefaleia` tinyint(1) NOT NULL,
  `Tensao` float NOT NULL,
  `Glicemia` int(5) NOT NULL,
  PRIMARY KEY (`Sintoma_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sintomas`
--

INSERT INTO `sintomas` (`Sintoma_ID`, `Dificuldade_respiratoria`, `Problemas_cardiaco`, `Fractura`, `Tontura`, `Hemorragia`, `Azia`, `Vomito`, `Cefaleia`, `Tensao`, `Glicemia`) VALUES
(112, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0),
(113, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(114, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1),
(115, 0, 0, 0, 0, 0, 0, 0, 0, 100, 15),
(116, 0, 0, 0, 0, 0, 1, 1, 1, 14.9, 145);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_utilizador`
--

DROP TABLE IF EXISTS `tipo_utilizador`;
CREATE TABLE IF NOT EXISTS `tipo_utilizador` (
  `Tipo_ID` int(2) NOT NULL,
  `Tipo_Utilizador` char(10) NOT NULL,
  PRIMARY KEY (`Tipo_ID`),
  UNIQUE KEY `Tipo_Utilizador` (`Tipo_Utilizador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_utilizador`
--

INSERT INTO `tipo_utilizador` (`Tipo_ID`, `Tipo_Utilizador`) VALUES
(1, 'Admin'),
(2, 'Enfermeiro'),
(3, 'Medico'),
(4, 'Paciente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE IF NOT EXISTS `utilizadores` (
  `User_ID` int(7) NOT NULL AUTO_INCREMENT,
  `UserName` char(20) NOT NULL,
  `Password` char(50) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Morada` varchar(100) DEFAULT NULL,
  `Contato` int(15) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Codigo_Postal` varchar(10) DEFAULT NULL,
  `Tipo_ID` int(2) NOT NULL,
  `DataNasc` date DEFAULT NULL,
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `UserName` (`UserName`),
  KEY `Codigo_Postal` (`Codigo_Postal`),
  KEY `Tipo_ID` (`Tipo_ID`),
  KEY `Codigo_Postal_2` (`Codigo_Postal`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`User_ID`, `UserName`, `Password`, `Nome`, `Morada`, `Contato`, `Mail`, `Codigo_Postal`, `Tipo_ID`, `DataNasc`) VALUES
(56, 'ola', '2fe04e524ba40505a82e03a2819429cc', 'ola', 'sdjh', 912999123, 'sjdh', '123', 1, NULL),
(57, 'e1', 'cd3dc8b6cffb41e4163dcbd857ca87da', 'e1', '', 916217879, 'dsvs', '', 2, NULL),
(58, 'p1', 'ec6ef230f1828039ee794566b9c58adc', 'p1', '', 0, '', '', 4, NULL),
(59, 'p2', '1d665b9b1467944c128a5575119d1cfd', 'p2', '', 0, '', '', 4, NULL),
(60, 'm1', 'ae7be26cdaa742ca148068d5ac90eaca', 'm1', '', 0, 'm1@gmail.com', '', 3, '1991-12-13'),
(67, 'p3', '7bc3ca68769437ce986455407dab2a1f', 'p3', '', 0, '', '', 4, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador` ADD FULLTEXT KEY `Tipo_Utilizador_2` (`Tipo_Utilizador`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `lista`
--
ALTER TABLE `lista`
  ADD CONSTRAINT `lista_ibfk_1` FOREIGN KEY (`Sintomas_ID`) REFERENCES `sintomas` (`Sintoma_ID`),
  ADD CONSTRAINT `lista_ibfk_2` FOREIGN KEY (`Paciente_ID`) REFERENCES `pacientes` (`Paciente_ID`);

--
-- Limitadores para a tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `utilizadores` (`User_ID`);

--
-- Limitadores para a tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD CONSTRAINT `utilizadores_ibfk_1` FOREIGN KEY (`Tipo_ID`) REFERENCES `tipo_utilizador` (`Tipo_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
