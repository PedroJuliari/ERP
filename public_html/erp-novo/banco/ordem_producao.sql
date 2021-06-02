-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 20:30
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
-- Estrutura da tabela `ordem_producao`
--

CREATE TABLE `ordem_producao` (
  `id_ordem_producao` int(11) NOT NULL,
  `id_ordem_pai` int(11) DEFAULT NULL,
  `data_ordem_producao` date DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `id_status_ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ordem_producao`
--

INSERT INTO `ordem_producao` (`id_ordem_producao`, `id_ordem_pai`, `data_ordem_producao`, `id_pedido`, `id_produto`, `data_inicio`, `data_fim`, `id_status_ordem`) VALUES
(2, NULL, '2019-04-20', 5, NULL, NULL, NULL, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordem_producao`
--
ALTER TABLE `ordem_producao`
  ADD PRIMARY KEY (`id_ordem_producao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordem_producao`
--
ALTER TABLE `ordem_producao`
  MODIFY `id_ordem_producao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
