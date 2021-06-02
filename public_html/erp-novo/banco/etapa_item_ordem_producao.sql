-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 20:53
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
-- Estrutura da tabela `etapa_item_ordem_producao`
--

CREATE TABLE `etapa_item_ordem_producao` (
  `id_etapa_item_ordem_producao` int(11) NOT NULL,
  `id_etapa_producao` int(11) NOT NULL,
  `id_item_ordem_producao` int(11) DEFAULT NULL,
  `inicio_fim` varchar(1) DEFAULT 'I',
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `etapa_item_ordem_producao`
--

INSERT INTO `etapa_item_ordem_producao` (`id_etapa_item_ordem_producao`, `id_etapa_producao`, `id_item_ordem_producao`, `inicio_fim`, `data_inicio`, `data_fim`) VALUES
(1, 1, 1, 'F', '2019-04-19', '2019-04-19'),
(2, 2, 1, 'F', '2019-04-19', '2019-04-19'),
(3, 3, 1, 'F', '2019-04-19', '2019-04-19'),
(4, 4, 1, 'F', '2019-04-19', '2019-04-19'),
(5, 25, 2, 'F', '2019-04-20', '2019-04-20'),
(6, 26, 2, 'F', '2019-04-20', '2019-04-20'),
(7, 27, 2, 'F', '2019-04-20', '2019-04-20'),
(8, 28, 2, 'F', '2019-04-20', '2019-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etapa_item_ordem_producao`
--
ALTER TABLE `etapa_item_ordem_producao`
  ADD PRIMARY KEY (`id_etapa_item_ordem_producao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etapa_item_ordem_producao`
--
ALTER TABLE `etapa_item_ordem_producao`
  MODIFY `id_etapa_item_ordem_producao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
