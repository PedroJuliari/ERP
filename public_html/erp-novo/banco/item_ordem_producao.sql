-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 20:48
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
-- Estrutura da tabela `item_ordem_producao`
--

CREATE TABLE `item_ordem_producao` (
  `id_item_ordem_producao` int(11) NOT NULL,
  `id_ordem_producao` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_situacao_ordem` int(11) DEFAULT NULL,
  `qtde_solicitada` int(11) NOT NULL,
  `qtde_a_produzir` int(11) DEFAULT NULL,
  `id_unidade` int(11) DEFAULT NULL,
  `previsao_inicio` date DEFAULT NULL,
  `previsao_fim` date DEFAULT NULL,
  `inicio_producao` date DEFAULT NULL,
  `fim_producao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_ordem_producao`
--

INSERT INTO `item_ordem_producao` (`id_item_ordem_producao`, `id_ordem_producao`, `id_produto`, `id_situacao_ordem`, `qtde_solicitada`, `qtde_a_produzir`, `id_unidade`, `previsao_inicio`, `previsao_fim`, `inicio_producao`, `fim_producao`) VALUES
(2, 2, 16, NULL, 0, 10, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_ordem_producao`
--
ALTER TABLE `item_ordem_producao`
  ADD PRIMARY KEY (`id_item_ordem_producao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_ordem_producao`
--
ALTER TABLE `item_ordem_producao`
  MODIFY `id_item_ordem_producao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
