-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2019 às 15:39
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
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_status_entrega` int(11) NOT NULL DEFAULT '1',
  `data_pedido` date NOT NULL,
  `hora_pedido` time NOT NULL,
  `baixado` varchar(1) NOT NULL DEFAULT 'N',
  `finalizado` varchar(1) NOT NULL DEFAULT 'N',
  `total` decimal(10,2) NOT NULL,
  `origem` varchar(30) NOT NULL,
  `total_frete` decimal(10,2) DEFAULT '0.00',
  `total_seguro` decimal(10,2) DEFAULT '0.00',
  `total_despesa` decimal(10,2) DEFAULT '0.00',
  `total_desconto` decimal(10,2) DEFAULT '0.00',
  `id_transportadora` int(11) DEFAULT NULL,
  `rastreamento` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_contato`, `id_status`, `id_status_entrega`, `data_pedido`, `hora_pedido`, `baixado`, `finalizado`, `total`, `origem`, `total_frete`, `total_seguro`, `total_despesa`, `total_desconto`, `id_transportadora`, `rastreamento`) VALUES
(1, 1, 5, 1, '2019-04-24', '20:24:35', 'N', 'S', '800.00', 'web', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(2, 1, 2, 1, '2019-04-24', '20:39:28', 'N', 'S', '1400.00', 'app', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(5, 1, 5, 1, '2019-04-24', '22:55:33', 'N', 'S', '200.00', 'loja', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(6, 1, 2, 1, '2019-04-24', '22:57:03', 'N', 'S', '100.00', 'loja', '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(7, 1, 5, 3, '2019-04-25', '08:29:33', 'N', 'S', '100.00', 'loja', '0.00', '0.00', '0.00', '0.00', 2, '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
