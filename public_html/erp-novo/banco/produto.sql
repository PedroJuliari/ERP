-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2019 às 15:46
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
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_unidade` int(11) NOT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_tributacao` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `eh_produto` varchar(1) DEFAULT NULL,
  `eh_insumo` varchar(1) DEFAULT NULL,
  `codigo_personalizado` varchar(10) NOT NULL,
  `preco_alto` decimal(10,2) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `custo_medio` decimal(10,2) DEFAULT NULL,
  `custo_atual` decimal(10,2) DEFAULT NULL,
  `imagem` varchar(80) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT 'S',
  `cfop` int(11) DEFAULT NULL,
  `gtin` varchar(15) DEFAULT NULL,
  `ncm` varchar(15) DEFAULT NULL,
  `cest` varchar(15) DEFAULT NULL,
  `cbenef` varchar(10) DEFAULT NULL,
  `extipi` varchar(10) DEFAULT NULL,
  `mva` decimal(5,2) DEFAULT NULL,
  `nfci` varchar(10) DEFAULT NULL,
  `estoque_inicial` int(11) NOT NULL DEFAULT '0',
  `estoque_atual` int(11) NOT NULL DEFAULT '0',
  `estoque_reservado` int(11) NOT NULL DEFAULT '0',
  `estoque_minimo` int(11) NOT NULL DEFAULT '50',
  `estoque_reposicao` int(11) NOT NULL DEFAULT '10',
  `estoque_maximo` int(11) NOT NULL,
  `eh_lancamento` varchar(1) DEFAULT NULL,
  `eh_promocao` varchar(1) DEFAULT NULL,
  `eh_maisvendido` varchar(1) DEFAULT NULL,
  `descricao` text,
  `peso_correio` decimal(10,2) DEFAULT NULL,
  `diametro_correio` decimal(10,2) DEFAULT NULL,
  `comprimento_correio` decimal(10,2) DEFAULT NULL,
  `largura_correio` decimal(10,2) NOT NULL,
  `altura_correio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `id_unidade`, `id_grupo`, `id_tributacao`, `produto`, `eh_produto`, `eh_insumo`, `codigo_personalizado`, `preco_alto`, `preco`, `custo_medio`, `custo_atual`, `imagem`, `ativo`, `cfop`, `gtin`, `ncm`, `cest`, `cbenef`, `extipi`, `mva`, `nfci`, `estoque_inicial`, `estoque_atual`, `estoque_reservado`, `estoque_minimo`, `estoque_reposicao`, `estoque_maximo`, `eh_lancamento`, `eh_promocao`, `eh_maisvendido`, `descricao`, `peso_correio`, `diametro_correio`, `comprimento_correio`, `largura_correio`, `altura_correio`) VALUES
(8, 1, 1, 1, 0, 'Panela 5', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_5.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(9, 1, 1, 1, 0, 'Panela de Pressão', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_COM_TAMPA_2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(10, 2, 1, 1, 0, 'Frigideira Reforçada', 'S', NULL, '', '150.00', '497.00', NULL, '0.00', 'FRIGIDEIRA_REFORCADA.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(11, 2, 1, 1, 0, 'Frigideira Cabo Tubular', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'FRIGIDEIRA_CABO_TUBULAR_2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(12, 1, 1, 1, 0, 'Panela Longa', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_LONGA.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(13, 1, 1, 1, 0, 'Panela Arredondada', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_RREDONDADA2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 110, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(14, 1, 1, 1, 0, 'Panela Laranja', 'S', NULL, '', '150.00', '50.00', NULL, '0.00', 'PANELA_LARANJA.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(15, 1, 1, 1, 0, 'Panela Longa 2', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_LONGA2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 110, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(16, 1, 1, 1, 0, 'Panela Achatada', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_ACHATADA.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 10, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(17, 1, 1, 1, 0, 'Panela Achatada 2', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_ACHATADA2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(18, 1, 1, 1, 0, 'Panela Verde', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_VERDE.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(19, 1, 1, 1, 0, 'Panela Verde 2', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_VERDE2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(20, 7, 1, 1, 0, 'Frigideira sem Tampa Laranja', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'FRIGIDEIRA_SEM_TAMPA_LARANJA.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(21, 7, 1, 1, 0, 'Frigideira Laranja', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'FRIGIDEIRA_LARANJA.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(22, 2, 1, 1, 0, 'Cuscuzeira Laranja', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'CUSCUZEIRA_LARANJA.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(31, 2, 1, 1, 0, 'Cuscuzeira 3', 'S', NULL, '', '150.00', '150.00', NULL, '0.00', 'CUSCUZEIRA3.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(32, 6, 1, 1, 0, 'Leiteira Tubular 3', 'S', NULL, '', '150.00', '50.00', NULL, '0.00', 'LEITEIRAS_TUBULAR3.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(33, 6, 1, 1, 0, 'Leiteira com Tampa Laranja', 'S', NULL, '', '150.00', '30.00', NULL, '0.00', 'LEITEIRA_COM_TAMPA_LARANJA4.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(34, 0, 1, 1, 0, 'Meu produto teste', 'S', NULL, '', '100.00', '10.00', NULL, '0.00', 'nome do arquivo', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(35, 2, 1, 1, 0, 'Panela com tampa 2', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_COM_TAMPA_2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(36, 2, 1, 1, 0, 'Panela com tampa 22', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_COM_TAMPA_2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(37, 7, 1, 1, 2, 'Panela com tampa 2200-mudei', 'S', NULL, '', '150.00', '100.00', NULL, '0.00', 'PANELA_COM_TAMPA_2.jpg', 'S', 5102, 'SEM GTIN', '76151000', '2105000', '1010', '05', NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(38, 0, 1, 2, 0, 'ABRASIVO CEBO AMARELO', NULL, 'S', '', '0.00', '15.70', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 10, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(39, 0, 1, 2, 0, 'ABRASIVO ID BRANCO', NULL, 'S', '', '0.00', '15.70', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 10, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(40, 0, 1, 2, 0, 'ALCA MEDIA COLOR 227 CF', NULL, 'S', '', '0.00', '1.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 130, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(41, 0, 1, 2, 0, 'ALCA PARA TAMPA', NULL, 'S', '', '0.00', '15.90', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 10, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(42, 0, 1, 2, 0, 'ALCA PEQUENA COLOR 227 CF', NULL, 'S', '', '0.00', '0.87', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(43, 0, 1, 2, 0, 'ALÇA 4 FUROS  COD-211', NULL, 'S', '', '0.00', '0.60', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(44, 0, 1, 2, 0, 'ALÇA BLACK', NULL, 'S', '', '0.00', '0.75', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(45, 0, 1, 2, 0, 'ALÇA BLACK COLOR', NULL, 'S', '', '0.00', '0.75', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(46, 0, 1, 2, 0, 'ALÇA COLORIDA - ALUM DELTA', NULL, 'S', '', '0.00', '0.75', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 140, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(47, 0, 1, 2, 0, 'ALÇA COLORIDA - ANP 27', NULL, 'S', '', '0.00', '0.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(48, 0, 1, 2, 0, 'ALÇA DE 2 FURO  COD- 201', NULL, 'S', '', '0.00', '0.50', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(49, 0, 1, 2, 0, 'ALÇA DE ALUMINIO  PEQUENA', NULL, 'S', '', '0.00', '1.60', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(52, 0, 1, 2, 0, 'ALÇA DE LEITEIRA POP.GRANDE  COD- 321', NULL, 'S', '', '0.00', '0.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(54, 0, 1, 2, 0, 'ALÇA DE LUXO PRETA PEQUENA COD.227', NULL, 'S', '', '0.00', '0.60', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 10, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(55, 0, 1, 2, 0, 'ALÇA LUXO COLORIDA COD 501', NULL, 'S', '', '0.00', '1.10', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(56, 0, 1, 2, 0, 'ALÇA PARA COPO', NULL, 'S', '', '0.00', '0.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(57, 0, 1, 2, 0, 'ALÇA PARA PANELA DE PRESSAO COD. 00P', NULL, 'S', '', '0.00', '0.40', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 80, 10, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(58, 0, 1, 2, 0, 'ARAME ALUM.EM ROLO 3.90 m m', NULL, 'S', '', '0.00', '0.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(59, 0, 1, 2, 0, 'ARAME ALUM.EM ROLO 6.00 m m', NULL, 'S', '', '0.00', '0.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(60, 0, 1, 2, 0, 'BORRACHAS P/ PANELA PRESSAO 4.5', NULL, 'S', '', '0.00', '0.50', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 80, 10, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(61, 0, 1, 2, 0, 'CABO CUSCUZEIRA 1 MIN', NULL, 'S', '', '0.00', '0.65', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(62, 0, 1, 2, 0, 'CABO DE CAÇAROLA COD.227', NULL, 'S', '', '0.00', '0.90', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 40, 10, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(63, 0, 1, 2, 0, 'CABO DE FRIGIDEIRA PEQ REF. 417 MCA', NULL, 'S', '', '0.00', '5.90', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(64, 0, 1, 2, 0, 'CABO DE LEITEIRA COD.2046', NULL, 'S', '', '0.00', '1.30', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(68, 0, 1, 2, 0, 'CABO DE MADEIRA P/FRIGIDEIRA REF.409', NULL, 'S', '', '0.00', '6.40', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(69, 0, 1, 2, 0, 'CABO FORT ITÁLIA', NULL, 'S', '', '0.00', '1.15', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(70, 0, 1, 2, 0, 'CABO GRANDE POPULAR COD -130', NULL, 'S', '', '0.00', '0.90', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(71, 0, 1, 2, 0, 'CABO GRANDE REF. 320T', NULL, 'S', '', '0.00', '1.05', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(72, 0, 1, 2, 0, 'CABO LEITEIRA LUXO COD.400', NULL, 'S', '', '0.00', '1.10', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(73, 0, 1, 2, 0, 'CABO LUXO COLORIDO COD.500', NULL, 'S', '', '0.00', '1.40', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(74, 0, 1, 2, 0, 'CABO MCA TUBULAR REF. 1003G', NULL, 'S', '', '0.00', '5.90', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(75, 0, 1, 2, 0, 'CABO MEDIO POPULAR COD.120', NULL, 'S', '', '0.00', '0.70', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(76, 0, 1, 2, 0, 'CABO MEDIO REF 813', NULL, 'S', '', '0.00', '1.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(77, 0, 1, 2, 0, 'CABO MEDIO REF.319', NULL, 'S', '', '0.00', '1.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(78, 0, 1, 2, 0, 'CABO OMELETEIRA 45 03F', NULL, 'S', '', '0.00', '0.75', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(79, 0, 1, 2, 0, 'CABO P/ CACAROLA GRANDE 415 - MCA', NULL, 'S', '', '0.00', '1.55', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(80, 0, 1, 2, 0, 'CABO P/ CACAROLA MEDIO 414-MCA', NULL, 'S', '', '0.00', '1.45', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(81, 0, 1, 2, 0, 'CABO P/ CANECAO PEQUENO 418-MCA', NULL, 'S', '', '0.00', '1.55', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(82, 0, 1, 2, 0, 'CABO P/CACAROLA MEDIO C/PONTEIRA 424M- MCA', NULL, 'S', '', '0.00', '1.25', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(84, 0, 1, 2, 0, 'CABO P/FRIG.EXTRA MEDIO 426M-MCA', NULL, 'S', '', '0.00', '2.95', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(85, 0, 1, 2, 0, 'CABO PARA PANELA DE PRESSAO 4.5L COD-100', NULL, 'S', '', '0.00', '1.20', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 80, 10, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(86, 0, 1, 2, 0, 'CABO REBITADO PEQUENO 3F 90G', NULL, 'S', '', '0.00', '0.95', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(87, 0, 1, 2, 0, 'HASTE GRANDE  20 X 130', NULL, 'S', '', '0.00', '15.90', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(91, 0, 1, 2, 0, 'LIXA', NULL, 'S', '', '0.00', '0.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(92, 0, 1, 2, 0, 'ORELHA DE CALDEIRAO', NULL, 'S', '', '0.00', '31.80', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 90, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(93, 0, 1, 2, 0, 'PESO TIPO UNIV.PRETO S/MARCA LEVE', NULL, 'S', '', '0.00', '1.30', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(94, 0, 1, 2, 0, 'PINO 1/2 SEXT DIAM 01 R 3/8 UNF', NULL, 'S', '', '0.00', '1.30', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(95, 0, 1, 2, 0, 'POMEL COLOR', NULL, 'S', '', '0.00', '0.60', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(103, 0, 1, 2, 0, 'RALO 110', NULL, 'S', '', '0.00', '13.70', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(107, 0, 1, 2, 0, 'RIBITE 1/8  X 7   PEQUENO', NULL, 'S', '', '0.00', '31.80', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(113, 0, 1, 2, 0, 'RODA DE BRIM', NULL, 'S', '', '0.00', '0.30', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(114, 0, 1, 2, 0, 'SELO DE SEGURANÇA', NULL, 'S', '', '0.00', '0.00', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(115, 0, 1, 2, 0, 'SUPORTE ALUM. BALDE Nº02', NULL, 'S', '', '0.00', '31.80', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(117, 0, 1, 3, 0, 'DISC0 210 X 1,10', NULL, 'S', '', '0.00', '12.70', NULL, '0.00', '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 60, -5, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(142, 0, 1, 3, 0, 'TAMPA LUXO 14', 'S', 'S', '', '1.00', '1.00', NULL, NULL, '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 70, 5, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(143, 0, 1, 3, 0, 'DISC0 PARA TAMPA', NULL, 'S', '', '1.00', '1.00', NULL, NULL, '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 90, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(144, 0, 1, 3, 0, 'TAMPA PARA PANELA DE PRESSÃO', 'S', 'S', '', '1.00', '1.00', NULL, NULL, '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 80, 10, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0'),
(145, 0, 1, 3, 0, 'VÁLVULA SEGURANÇA PANELA PRESSÃO', NULL, 'S', '', '1.00', '1.00', NULL, NULL, '', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 100, 0, 50, 10, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
