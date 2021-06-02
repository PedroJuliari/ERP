-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2019 às 19:55
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
-- Estrutura da tabela `historico_lancamento`
--

CREATE TABLE `historico_lancamento` (
  `id_historico_lancamento` int(11) NOT NULL,
  `id_local` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `id_ordem_compra` int(11) DEFAULT NULL,
  `id_tipo_movimento` int(11) DEFAULT NULL,
  `entrada_saida` varchar(1) DEFAULT NULL,
  `data_movimento` date DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `descricao` text,
  `qtde_historico` int(11) DEFAULT NULL,
  `valor_historico` decimal(10,2) DEFAULT NULL,
  `subtotal_historico` decimal(10,2) DEFAULT NULL,
  `eh_estorno` varchar(1) DEFAULT NULL,
  `id_estorno` int(11) DEFAULT NULL,
  `foi_estornado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historico_lancamento`
--

INSERT INTO `historico_lancamento` (`id_historico_lancamento`, `id_local`, `id_produto`, `id_ordem_compra`, `id_tipo_movimento`, `entrada_saida`, `data_movimento`, `documento`, `descricao`, `qtde_historico`, `valor_historico`, `subtotal_historico`, `eh_estorno`, `id_estorno`, `foi_estornado`) VALUES
(1, NULL, 38, 1, 1, 'E', '2019-04-20', '1', 'Entrada Ref. Ordem Num 1', 10, '10.00', '100.00', 'N', NULL, NULL),
(2, NULL, 41, 1, 1, 'E', '2019-04-20', '2', 'Entrada Ref. Ordem Num 1', 10, '10.00', '100.00', 'N', NULL, NULL),
(3, NULL, 8, NULL, 3, 'E', '2019-04-20', '1', 'Entrada Avulsa Num 1', 10, '100.00', '1000.00', 'N', NULL, NULL),
(4, NULL, 13, NULL, 3, 'E', '2019-04-20', '2', 'Entrada Avulsa Num 2', 10, '100.00', '1000.00', 'N', NULL, NULL),
(5, NULL, 8, NULL, 10, 'S', '2019-04-20', '3', 'Saída Pedido Num 3', 5, '100.00', '500.00', 'N', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historico_lancamento`
--
ALTER TABLE `historico_lancamento`
  ADD PRIMARY KEY (`id_historico_lancamento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historico_lancamento`
--
ALTER TABLE `historico_lancamento`
  MODIFY `id_historico_lancamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
