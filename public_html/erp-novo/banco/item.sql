-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2019 às 15:48
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
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `qtde_atendido` int(11) DEFAULT '0',
  `qtde_reservado` int(11) NOT NULL DEFAULT '0',
  `valor` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `origem` varchar(20) NOT NULL,
  `atendido` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id_item`, `id_pedido`, `id_produto`, `qtde`, `qtde_atendido`, `qtde_reservado`, `valor`, `subtotal`, `origem`, `atendido`) VALUES
(2, 1, 8, 5, 0, 0, '100.00', '0.00', 'web', 'N'),
(3, 1, 9, 3, 0, 0, '100.00', '0.00', 'web', 'N'),
(4, 2, 8, 1, 0, 0, '100.00', '100.00', 'app', 'N'),
(5, 2, 11, 3, 0, 0, '100.00', '300.00', 'desktop', 'N'),
(6, 2, 15, 10, 0, 0, '100.00', '0.00', 'web', 'N'),
(10, 5, 15, 1, 0, 0, '100.00', '100.00', 'loja', 'N'),
(11, 5, 13, 1, 0, 0, '100.00', '100.00', 'loja', 'N'),
(12, 6, 17, 1, 0, 0, '100.00', '100.00', 'loja', 'N'),
(13, 7, 15, 1, 0, 0, '100.00', '100.00', 'loja', 'N');

--
-- Acionadores `item`
--
DELIMITER $$
CREATE TRIGGER `TRG_SAIDA_PRODUTO` AFTER UPDATE ON `item` FOR EACH ROW IF (new.qtde_atendido <> old.qtde_atendido) THEN
	CALL SP_ATUALIZA_ESTOQUE(new.id_produto, new.qtde_atendido, 'S');
   
	SELECT sum(qtde_atendido * valor) INTO @total FROM `item` WHERE id_pedido = new.id_pedido ;
    UPDATE pedido SET total = @total WHERE id_pedido = new.id_pedido;    


END IF
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
