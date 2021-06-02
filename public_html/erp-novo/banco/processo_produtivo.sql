-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 20:24
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
-- Estrutura da tabela `processo_produtivo`
--

CREATE TABLE `processo_produtivo` (
  `id_processo_produtivo` int(11) NOT NULL,
  `processo_produtivo` varchar(80) NOT NULL,
  `observacao` text NOT NULL,
  `movimenta_estoque` varchar(10) NOT NULL COMMENT 'nao, inicio, fim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `processo_produtivo`
--

INSERT INTO `processo_produtivo` (`id_processo_produtivo`, `processo_produtivo`, `observacao`, `movimenta_estoque`) VALUES
(2, 'Conformacao', ' ', 'inicio'),
(3, 'Polimento', ' ', 'nao'),
(4, 'Montagem', ' ', 'inicio'),
(5, 'Pintura', ' ', 'nao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `processo_produtivo`
--
ALTER TABLE `processo_produtivo`
  ADD PRIMARY KEY (`id_processo_produtivo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `processo_produtivo`
--
ALTER TABLE `processo_produtivo`
  MODIFY `id_processo_produtivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
