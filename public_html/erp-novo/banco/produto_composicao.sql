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
-- Estrutura da tabela `produto_composicao`
--

CREATE TABLE `produto_composicao` (
  `id_produto_composicao` int(11) NOT NULL,
  `id_produto_pai` int(11) NOT NULL,
  `id_etapa` int(11) DEFAULT NULL,
  `id_produto` int(11) NOT NULL,
  `qtde_necessaria` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto_composicao`
--

INSERT INTO `produto_composicao` (`id_produto_composicao`, `id_produto_pai`, `id_etapa`, `id_produto`, `qtde_necessaria`) VALUES
(1, 8, 1, 117, 1),
(2, 8, 3, 62, 2),
(3, 8, 3, 142, 1),
(4, 142, 5, 143, 1),
(5, 142, 7, 95, 1),
(6, 9, 8, 117, 1),
(7, 9, 10, 85, 1),
(8, 9, 10, 57, 1),
(9, 9, 10, 60, 1),
(11, 9, 10, 144, 1),
(12, 144, 11, 143, 1),
(13, 144, 13, 145, 1),
(14, 10, 14, 145, 1),
(15, 10, 16, 84, 1),
(16, 10, 16, 70, 1),
(17, 10, 15, 48, 1),
(18, 12, 19, 38, 1),
(19, 13, 23, 145, 1),
(20, 16, 25, 143, 1),
(21, 16, 27, 92, 1),
(22, 16, 27, 54, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto_composicao`
--
ALTER TABLE `produto_composicao`
  ADD PRIMARY KEY (`id_produto_composicao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto_composicao`
--
ALTER TABLE `produto_composicao`
  MODIFY `id_produto_composicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
