-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 19:49
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
-- Estrutura da tabela `tipo_movimento`
--

CREATE TABLE `tipo_movimento` (
  `id_tipo_movimento` int(11) NOT NULL,
  `tipo_movimento` varchar(50) NOT NULL,
  `ent_saida` varchar(1) NOT NULL,
  `estorno` varchar(1) NOT NULL,
  `afeta_custo_medio` varchar(1) NOT NULL,
  `afeta_custo_atual` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_movimento`
--

INSERT INTO `tipo_movimento` (`id_tipo_movimento`, `tipo_movimento`, `ent_saida`, `estorno`, `afeta_custo_medio`, `afeta_custo_atual`) VALUES
(1, 'Entrada por Ordem de Compra', 'E', 'N', 'S', 'S'),
(2, 'Entrada por Nota Fiscal', 'E', 'N', 'S', 'S'),
(3, 'Entrada Avulsa', 'E', 'N', 'S', 'S'),
(4, 'Entradas por Ajuste de Entrada', 'E', 'N', 'S', 'S'),
(5, 'Entrada por Ajuste de Entrada Custo Médio', 'E', 'N', 'S', 'N'),
(6, 'Entrada por Ajuste de Entrada Custo Atual', 'E', 'N', 'N', 'S'),
(7, 'Entrada por Ajuste de Estoque Sem Custo', 'E', 'N', 'N', 'N'),
(8, 'Estorno de Saída', 'E', 'N', 'N', 'N'),
(9, 'Entrada por Ordem de Compra', 'E', 'N', 'S', 'S'),
(10, 'Saída por Pedido', 'S', 'N', 'S', 'S'),
(11, 'Entrada por Ordem de Produção', 'E', 'N', 'S', 'S'),
(12, 'Entrada Por Transferencia', 'E', 'N', 'S', 'S'),
(13, 'Entrada por Devolução de Vendas', 'E', 'N', 'N', 'N'),
(14, 'Entradas por Ajuste de Entrada', 'E', 'N', 'S', 'S'),
(15, 'Venda de Pedido', 'E', 'N', 'S', 'N'),
(16, 'Entrada por Ajuste de Entrada Custo Atual', 'E', 'N', 'N', 'S'),
(17, 'Entrada por Ajuste de Estoque Sem Custo', 'E', 'N', 'N', 'N'),
(18, 'Estorno de Saída', 'E', 'N', 'N', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo_movimento`
--
ALTER TABLE `tipo_movimento`
  ADD PRIMARY KEY (`id_tipo_movimento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo_movimento`
--
ALTER TABLE `tipo_movimento`
  MODIFY `id_tipo_movimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
