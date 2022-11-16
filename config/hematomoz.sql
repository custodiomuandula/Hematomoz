-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Nov-2022 às 09:49
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hematomoz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `nr_bi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nacionalidade` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_general_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `anos_experiencia` int NOT NULL,
  `id_admin` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_admin` (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assistente`
--

DROP TABLE IF EXISTS `assistente`;
CREATE TABLE IF NOT EXISTS `assistente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `nr_bi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nacionalidade` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_general_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `anos_experiencia` int NOT NULL,
  `id_admin` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_admin` (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

DROP TABLE IF EXISTS `doacao`;
CREATE TABLE IF NOT EXISTS `doacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_doacao` date NOT NULL,
  `local_doacao` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `quantidade_sangue` float NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_doador` int NOT NULL,
  `id_medico` int NOT NULL,
  `id_sangue` int NOT NULL,
  `id_triagem` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_doador` (`id_doador`),
  KEY `id_medico` (`id_medico`),
  KEY `id_sangue` (`id_sangue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

DROP TABLE IF EXISTS `doador`;
CREATE TABLE IF NOT EXISTS `doador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_general_ci NOT NULL,
  `nr_bi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_general_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_assistente` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_assistente` (`id_assistente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `nr_bi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nacionalidade` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_general_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `anos_experiencia` int NOT NULL,
  `id_admin` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_admin` (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_general_ci NOT NULL,
  `nr_bi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_general_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_assistente` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_assistente` (`id_assistente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pre_triagem`
--

DROP TABLE IF EXISTS `pre_triagem`;
CREATE TABLE IF NOT EXISTS `pre_triagem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pressao_arterial` int NOT NULL,
  `anemia` int NOT NULL,
  `pulsacao` int NOT NULL,
  `temperatura` int NOT NULL,
  `habitos` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisicao`
--

DROP TABLE IF EXISTS `requisicao`;
CREATE TABLE IF NOT EXISTS `requisicao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_requisicao` date NOT NULL,
  `data_entrega` date NOT NULL,
  `assunto` text COLLATE utf8mb4_general_ci NOT NULL,
  `nr_documento` int NOT NULL,
  `id_requisitante` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_requisitante` (`id_requisitante`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisitante`
--

DROP TABLE IF EXISTS `requisitante`;
CREATE TABLE IF NOT EXISTS `requisitante` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` int NOT NULL,
  `endereco` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sangue`
--

DROP TABLE IF EXISTS `sangue`;
CREATE TABLE IF NOT EXISTS `sangue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` enum('A','AB','B','O') COLLATE utf8mb4_general_ci NOT NULL,
  `classificacao` enum('Positivo','Negativo','','') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transfusao`
--

DROP TABLE IF EXISTS `transfusao`;
CREATE TABLE IF NOT EXISTS `transfusao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_transfusao` date NOT NULL,
  `local_transfusao` int NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_paciente` int NOT NULL,
  `id_medico` int NOT NULL,
  `id_sangue` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_medico` (`id_medico`),
  KEY `id_paciente` (`id_paciente`),
  KEY `id_sangue` (`id_sangue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
