-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2023 às 02:11
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pi3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `codigo` int(11) NOT NULL,
  `litros` varchar(255) NOT NULL,
  `combustivel` varchar(8) NOT NULL,
  `co2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`codigo`, `litros`, `combustivel`, `co2`) VALUES
(1, '500', 'etanol', '1150.00'),
(4, '100', 'gasolina', '231.00'),
(5, '50', 'diesel', '134.00'),
(6, '250', 'etanol', '575.00'),
(7, '15', 'gasolina', '34.65'),
(8, '13', 'gasolina', '30.03'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, '', '', ''),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, '', '', ''),
(44, '', '', ''),
(45, '', '', ''),
(46, '', '', ''),
(47, '', '', ''),
(48, '15', 'diesel', '40.20'),
(49, '16', 'diesel', '42.88'),
(50, '15', 'etanol', '34.50'),
(51, '15', 'gasolina', '34.65'),
(52, '1', 'gasolina', '2.31');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
