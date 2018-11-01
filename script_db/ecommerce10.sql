-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2018 às 23:59
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce10`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `eca_id` int(11) NOT NULL,
  `eca_nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eca_descricao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ecli_id` int(11) NOT NULL,
  `ecli_nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_bairro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_cep` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_num` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_municipio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_cpf` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_celular` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_telefone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_eusu_id` int(11) NOT NULL,
  `ecli_complemento` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_uf` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ecli_data_nascimento` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ecli_id`, `ecli_nome`, `ecli_endereco`, `ecli_bairro`, `ecli_cep`, `ecli_num`, `ecli_municipio`, `ecli_cpf`, `ecli_email`, `ecli_celular`, `ecli_telefone`, `ecli_eusu_id`, `ecli_complemento`, `ecli_uf`, `ecli_data_nascimento`) VALUES
(1, 'Teste', 'Rua teste', 'Bairro', '04891-070', '18A', NULL, '443.174.528-98', 'teste@cliente.com', '99999-9999', '9999-9999', 1, NULL, NULL, NULL),
(2, 'Bianca Arantes', 'Rua Benjamim Diemar', 'Vila Roschel', '04891-070', '18', 'São Paulo', '443.174.528-98', 'bianca_arantes28@hotmail.com', '(11) 11111-1111', '(11) 1111-1111', 4, NULL, 'SP', '28/12/1994'),
(3, 'Teste', 'Rua Benjamim Diemar', 'Vila Roschel', '04891-070', '18', 'São Paulo', '187.012.240-26', 'teste@testandoadd.com', '(11) 11111-1111', '(11) 1111-1111', 5, NULL, 'SP', '28/12/1994'),
(4, 'New teste', 'Rua Benjamim Diemar', 'Vila Roschel', '04891-070', '18', 'São Paulo', '183.647.710-43', 'newteste@teste.com', '(11) 11111-1111', '(11) 1111-1111', 6, NULL, 'SP', '28/12/1994'),
(5, 'Maria J B Marinho', 'Rua Lucindo dos Passos', 'Jardim Prudência', '04649090', '110', 'São Paulo', '365.762.432-51', 'marinhobmaria@gmail.com', '(11) 96461-6740', '(11) 9646-1674', 7, NULL, 'SP', '17/09/2018'),
(6, 'Cliente Teste', 'Rua Sandra Andréa da Silva', 'Camurupim', '61625-105', '50', 'Caucaia', '187.807.880-17', 'cliente_teste@gmail.com', '(11) 99998-4711', '(11) 5872-2336', 8, NULL, 'SP', '16/07/1981');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `efo_id` int(11) NOT NULL,
  `efo_razao_social` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_cnpj` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_bairro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_cep` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_num` int(11) DEFAULT NULL,
  `efo_email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_telefone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_eusu_id` int(11) NOT NULL,
  `efo_municipio` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_uf` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `efo_complemento` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `eip_id` int(11) NOT NULL,
  `eip_epr_id` int(11) DEFAULT NULL,
  `eip_epe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `eme_id` int(11) NOT NULL,
  `eme_nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eme_url` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eme_etiu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`eme_id`, `eme_nome`, `eme_url`, `eme_etiu_id`) VALUES
(1, 'Notificações', 'cliente.php', 1),
(2, 'Meus pedidos', 'pedidos.php', 1),
(3, 'Produtos', 'produtos-fornecedor.php', 2),
(4, 'Pedidos', 'pedidos.php', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oferta_cliente`
--

CREATE TABLE `oferta_cliente` (
  `eof_id` int(11) NOT NULL,
  `eof_nome_produto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eof_ecli_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `epe_id` int(11) NOT NULL,
  `epe_eip_id` int(11) DEFAULT NULL,
  `epe_ecli_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `epr_id` int(11) NOT NULL,
  `epr_nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `epr_descricao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `epr_eca_id` int(11) DEFAULT NULL,
  `epr_preco` float DEFAULT NULL,
  `epr_foto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `epr_efo_id` int(11) DEFAULT NULL,
  `epr_quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `etiu_id` int(11) NOT NULL,
  `etiu_nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`etiu_id`, `etiu_nome`) VALUES
(1, 'Cliente'),
(2, 'Fornecedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `eusu_id` int(11) NOT NULL,
  `eusu_login` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eusu_senha` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eusu_etiu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`eusu_id`, `eusu_login`, `eusu_senha`, `eusu_etiu_id`) VALUES
(1, 'teste@cliente.com', '1234', 1),
(2, 'teste@fornecedor.com', '1234', 2),
(3, 'teste', '1234', 1),
(4, 'bianca_arantes28@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(5, 'teste@testandoadd.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(6, 'newteste@teste.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(7, 'marinhobmaria@gmail.com', '0b3598db0a20adbcb475cec2d7130e1f', 1),
(8, 'cliente_teste@gmail.com', 'b706835de79a2b4e80506f582af3676a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`eca_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ecli_id`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`efo_id`);

--
-- Indexes for table `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`eip_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`eme_id`);

--
-- Indexes for table `oferta_cliente`
--
ALTER TABLE `oferta_cliente`
  ADD PRIMARY KEY (`eof_id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`epe_id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`epr_id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`etiu_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`eusu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `eca_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ecli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `efo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_pedido`
--
ALTER TABLE `item_pedido`
  MODIFY `eip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `eme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oferta_cliente`
--
ALTER TABLE `oferta_cliente`
  MODIFY `eof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `epe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `epr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `etiu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `eusu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
