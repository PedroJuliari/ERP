-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 19:57
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
-- Estrutura da tabela `ordem_compra`
--

CREATE TABLE `ordem_compra` (
  `id_ordem_compra` int(11) NOT NULL,
  `id_status_ordem_compra` int(11) DEFAULT '1',
  `id_fornecedor` int(11) NOT NULL,
  `id_cotacao` int(11) NOT NULL,
  `data_emissao` date NOT NULL,
  `data_aprovacao` date NOT NULL DEFAULT '0000-00-00',
  `data_entrada` date NOT NULL DEFAULT '0000-00-00',
  `valor_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `finalizado` varchar(1) NOT NULL DEFAULT 'N',
  `aprovado` varchar(1) NOT NULL DEFAULT 'N',
  `foi_atendido` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ordem_compra`
--

INSERT INTO `ordem_compra` (`id_ordem_compra`, `id_status_ordem_compra`, `id_fornecedor`, `id_cotacao`, `data_emissao`, `data_aprovacao`, `data_entrada`, `valor_total`, `finalizado`, `aprovado`, `foi_atendido`) VALUES
(1, 3, 1, 1, '2019-04-20', '2019-04-20', '2019-04-20', '200.00', 'N', 'N', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordem_compra`
--
ALTER TABLE `ordem_compra`
  ADD PRIMARY KEY (`id_ordem_compra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordem_compra`
--
ALTER TABLE `ordem_compra`
  MODIFY `id_ordem_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
