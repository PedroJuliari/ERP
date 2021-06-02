-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 20:32
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_erp_borrao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapa_producao`
--

CREATE TABLE `etapa_producao` (
  `id_etapa_producao` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_processo_produtivo` int(11) NOT NULL,
  `id_dependente` int(11) DEFAULT NULL,
  `tempo_producao` varchar(10) DEFAULT NULL,
  `qtde_produzida` int(11) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `etapa_producao`
--

INSERT INTO `etapa_producao` (`id_etapa_producao`, `id_produto`, `id_processo_produtivo`, `id_dependente`, `tempo_producao`, `qtde_produzida`, `ordem`) VALUES
(1, 8, 2, NULL, NULL, NULL, NULL),
(2, 8, 3, NULL, NULL, NULL, NULL),
(3, 8, 4, NULL, NULL, NULL, NULL),
(4, 8, 5, NULL, NULL, NULL, NULL),
(5, 142, 2, NULL, NULL, NULL, NULL),
(6, 142, 3, NULL, NULL, NULL, NULL),
(7, 142, 4, NULL, NULL, NULL, NULL),
(8, 9, 2, NULL, NULL, NULL, NULL),
(9, 9, 3, NULL, NULL, NULL, NULL),
(10, 9, 4, NULL, NULL, NULL, NULL),
(11, 144, 2, NULL, NULL, NULL, NULL),
(12, 144, 3, NULL, NULL, NULL, NULL),
(13, 144, 4, NULL, NULL, NULL, NULL),
(14, 10, 2, NULL, NULL, NULL, NULL),
(15, 10, 3, NULL, NULL, NULL, NULL),
(16, 10, 4, NULL, NULL, NULL, NULL),
(17, 10, 5, NULL, NULL, NULL, NULL),
(18, 10, 5, NULL, NULL, NULL, NULL),
(19, 12, 2, NULL, NULL, NULL, NULL),
(20, 12, 3, NULL, NULL, NULL, NULL),
(21, 12, 4, NULL, NULL, NULL, NULL),
(22, 12, 5, NULL, NULL, NULL, NULL),
(23, 13, 2, NULL, NULL, NULL, NULL),
(24, 13, 3, NULL, NULL, NULL, NULL),
(25, 16, 2, NULL, NULL, NULL, NULL),
(26, 16, 3, NULL, NULL, NULL, NULL),
(27, 16, 4, NULL, NULL, NULL, NULL),
(28, 16, 5, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etapa_producao`
--
ALTER TABLE `etapa_producao`
  ADD PRIMARY KEY (`id_etapa_producao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etapa_producao`
--
ALTER TABLE `etapa_producao`
  MODIFY `id_etapa_producao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
