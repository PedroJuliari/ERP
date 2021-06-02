-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 19:54
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
-- Estrutura da tabela `item_ordem_compra`
--

CREATE TABLE `item_ordem_compra` (
  `id_item_ordem_compra` int(11) NOT NULL,
  `id_ordem_compra` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT '0.00',
  `subtotal` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_ordem_compra`
--

INSERT INTO `item_ordem_compra` (`id_item_ordem_compra`, `id_ordem_compra`, `id_produto`, `qtde`, `valor`, `subtotal`) VALUES
(1, 1, 38, 10, '10.00', '100.00'),
(2, 1, 41, 10, '10.00', '100.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_ordem_compra`
--
ALTER TABLE `item_ordem_compra`
  ADD PRIMARY KEY (`id_item_ordem_compra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_ordem_compra`
--
ALTER TABLE `item_ordem_compra`
  MODIFY `id_item_ordem_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
