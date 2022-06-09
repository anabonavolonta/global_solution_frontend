-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2021 às 00:08
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------

--
-- Estrutura da tabela `tbagricultor`

CREATE TABLE IF NOT EXISTS `tbagricultor` (
  `id_agricultor` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nomeAgricultor` varchar(255) DEFAULT NULL,
  `nomeFazenda` varchar(255) DEFAULT NULL,
  `cnpj` bigint(14) DEFAULT NULL,
  `idade` mediumint(3) DEFAULT NULL,
  PRIMARY KEY (`id_agricultor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;


ALTER TABLE `tbagricultor`
  ADD PRIMARY KEY (`id_agricultor`);
--

-- AUTO_INCREMENT de tabela `tbagricultor`

ALTER TABLE `tbagricultor`
  MODIFY `id_agricultor` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

