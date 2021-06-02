-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jan-2007 às 05:59
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ead`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_de_membros`
--

CREATE TABLE `area_de_membros` (
  `id_cliente` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `venda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `id_aula` int(11) NOT NULL,
  `id_capitulo` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `titulo_aula` varchar(100) NOT NULL,
  `duracao` varchar(15) DEFAULT NULL,
  `embed` varchar(20) DEFAULT NULL,
  `tipo_video` varchar(1) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `ativo_aula` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id_aula`, `id_capitulo`, `id_modulo`, `titulo_aula`, `duracao`, `embed`, `tipo_video`, `descricao`, `ativo_aula`) VALUES
(3, 1, 1, 'dsfgghh', '56', 'rf6678', 'v', 'Digite aqui', 'N'),
(4, 1, 1, 'fdfdfd', '563', 'dfdfdfd', 'v', 'Digite aquisdsdsdsdsdsdsd', 's'),
(5, 1, 1, 'dsdsd', 'sdsd', 'sdsd', 'v', 'Digite aqui', 'N'),
(6, 1, 1, 'gg', 'g', 'gggggggggg', 'v', 'Digite aqui', 'S'),
(7, 1, 1, 'dsd', 'fgfg', 'gg', 'v', 'Digite aqui', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `capitulo`
--

CREATE TABLE `capitulo` (
  `id_capitulo` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `capitulo` varchar(50) NOT NULL,
  `ativo_capitulo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `capitulo`
--

INSERT INTO `capitulo` (`id_capitulo`, `id_modulo`, `capitulo`, `ativo_capitulo`) VALUES
(1, 2, 'FGGG', 'S'),
(2, 3, 'DFDFD', 'N'),
(3, 2, 'DDD', 'N'),
(4, 2, 'ddddd', 'N'),
(5, 1, 'DDDf', 'S'),
(6, 1, 'ssss', 'N'),
(7, 1, 'aaaaaaa', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` date NOT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `ultimo_acesso` date DEFAULT NULL,
  `ativo_cliente` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `email`, `data_cadastro`, `endereco`, `bairro`, `cidade`, `cep`, `estado`, `cpf`, `rg`, `fone`, `senha`, `celular`, `ultimo_acesso`, `ativo_cliente`) VALUES
(2, 'ddd333', 'pedrojuliari@hotmailf.com', '2007-01-01', 'xssx', 'sxsx', 'sxsx', 'sxs', 'sxsx', 'sxs', 'sxsx', 'sxsx', '', 'sxxs', NULL, 'S'),
(3, 'ddd2', 'pedrojuliari@hotmail.cowm', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 'ddd2', 'pedrojuliari@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(5, 'ddd2', 'pedrojuliariw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, 'ddd2', 'pedrojuliarirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'ddd2', 'pedraojuliarirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, 'ddd2', 'paaedraojuliarirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(9, 'ddd2', 'paaedraojuliarzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(10, 'ddd2', 'paaedrxaojuliarzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(11, 'ddd2', 'paaedrxaojuliavrzirw@hotmail.cow3m', '2007-01-01', '', '', '', '', '', '', '', '', '', '', NULL, 'N'),
(12, 'ddd2', 'paaedrxaojulniavrzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(13, 'ddd2', 'paaedrxaojumlniavrzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(14, 'ddd2', 'paaeedrxaojumlniavrzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(15, 'ddd2', 'paaeedrxaojumleniavrzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(16, 'ddd2', 'paaeedrxaojumleniaverzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(17, 'ddd2', 'paaeedrxlaojumleniaverzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(18, 'ddd2', 'paaeedrxlaojuimleniaverzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(19, 'ddd2', 'paaeegdrxlaojuimleniaverzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, 'ddd2', 'imleniaverzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21, 'ddd2', 'imleniaverhzirw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(22, 'ddd2', 'imleniavejw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(23, 'ddd2', 'imlenaiavejw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(24, 'ddd2', 'imlenzaiavejw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(25, 'ddd2', 'imleqnzaiavejw@hotmail.cow3m', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(26, 'ddd2', 'pedrojuliareri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, 'ddd2', 'pedrojuliareereri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(28, 'ddd2', 'pedrojuliarteereri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, 'ddd2', 'pedrojuliaurteereri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(30, 'ddd2', 'pedrojuliakurteereri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, 'ddd2', 'pedrojuliakurtleereri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, 'ddd2', 'pedraojuliakurtleereri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, 'ddd2', 'pedraojuliakurtleereeri@hotmail.com', '2007-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(34, 'ds', 'asas', '2021-01-27', 'fdfdf', 'asasa', 'sdsd', 'sds', 'sdsdf', 'asas', 'asas', 'asas', 'asasas', 'asas', NULL, 's'),
(35, 'ds', 'asas', '2021-01-27', 'fdfdf', 'asasa', 'sdsd', 'sds', 'sdsdf', 'asas', 'asas', 'asas', 'asasas', 'asas', NULL, 's'),
(36, 'ds', 'dfdasasasasasaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-01-27', 'fdfdf', 'dfdfd', 'sdsd', 'sds', 'sdsdf', 'dd', 'dfd', 'ddfdf', 'dfdf', 'dfdfd', NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `titulo_download` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL,
  `ativo_download` varchar(1) NOT NULL,
  `id_capitulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulo`
--

CREATE TABLE `modulo` (
  `id_modulo` int(11) NOT NULL,
  `titulo_modulo` varchar(200) NOT NULL,
  `ativo_modulo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `modulo`
--

INSERT INTO `modulo` (`id_modulo`, `titulo_modulo`, `ativo_modulo`) VALUES
(2, 'sadsdsadad', 'S'),
(3, 'adsdasda', 'S'),
(4, 'sdsdsd', 'N'),
(5, 'sdsdsdaaa', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `ativo` varchar(1) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `url_pagamento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `produto`, `ativo`, `descricao`, `url_pagamento`) VALUES
(1, 'ddd', 's', 'dsdsdsdsdsd', 'dsdsdsd'),
(2, 'sdsdsddddd', 's', 'sdsdsd', 'sdsdsd'),
(3, 'xxxxdddd', 's', 'xxxxddd', 'xxxddddd'),
(4, 'ssd', 'a', 'sdsd', 'sdsd'),
(5, 'cvcv', 'S', 'cvcvcvc', 'cvcv');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_compra` date NOT NULL,
  `pago` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `id_produto`, `id_cliente`, `data_compra`, `pago`) VALUES
(1, 1, 2, '2007-01-01', 'N'),
(2, 1, 3, '2007-01-01', 'N'),
(3, 1, 4, '2007-01-01', 'N'),
(4, 1, 5, '2007-01-01', 'N'),
(5, 1, 6, '2007-01-01', 'N'),
(6, 1, 7, '2007-01-01', 'N'),
(7, 1, 8, '2007-01-01', 'N'),
(8, 1, 9, '2007-01-01', 'N'),
(9, 1, 10, '2007-01-01', 'N'),
(10, 1, 11, '2007-01-01', 'N'),
(11, 1, 12, '2007-01-01', 'N'),
(12, 1, 13, '2007-01-01', 'N'),
(13, 1, 14, '2007-01-01', 'N'),
(14, 1, 15, '2007-01-01', 'N'),
(15, 1, 16, '2007-01-01', 'N'),
(16, 1, 17, '2007-01-01', 'N'),
(17, 1, 18, '2007-01-01', 'N'),
(18, 1, 19, '2007-01-01', 'N'),
(19, 1, 20, '2007-01-01', 'N'),
(20, 1, 21, '2007-01-01', 'N'),
(21, 1, 22, '2007-01-01', 'N'),
(22, 1, 23, '2007-01-01', 'N'),
(23, 1, 24, '2007-01-01', 'N'),
(24, 1, 25, '2007-01-01', 'N'),
(25, 1, 26, '2007-01-01', 'N'),
(26, 1, 27, '2007-01-01', 'N'),
(27, 1, 28, '2007-01-01', 'N'),
(28, 1, 29, '2007-01-01', 'N'),
(29, 1, 30, '2007-01-01', 'N'),
(30, 1, 31, '2007-01-01', 'N'),
(31, 1, 32, '2007-01-01', 'N'),
(32, 1, 33, '2007-01-01', 'N');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area_de_membros`
--
ALTER TABLE `area_de_membros`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`);

--
-- Índices para tabela `capitulo`
--
ALTER TABLE `capitulo`
  ADD PRIMARY KEY (`id_capitulo`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Índices para tabela `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area_de_membros`
--
ALTER TABLE `area_de_membros`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aula`
--
ALTER TABLE `aula`
  MODIFY `id_aula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `capitulo`
--
ALTER TABLE `capitulo`
  MODIFY `id_capitulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
