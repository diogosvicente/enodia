-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Nov-2021 às 04:03
-- Versão do servidor: 8.0.17
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `diegobikemotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` double NOT NULL,
  `posicao` enum('dianteiro','traseiro') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `camara` enum('com camara','sem camara') NOT NULL,
  `oneOfAKind` tinyint(1) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `posicao`, `camara`, `oneOfAKind`, `imagem`, `descricao`) VALUES
(1, 'Pneu Ira SohoBr Traseiro 90/90-18 Sem Camara', 195.06, 'dianteiro', 'com camara', 1, 'https://http2.mlstatic.com/D_NQ_NP_700639-MLB47682719014_092021-O.jpg', 'Pneu Traseiro Ira Br 2.75-18 SOHO - IRATIRES'),
(2, 'Pneu Ira SohoBr Dianteiro 100/90-17 Com Camara', 195.06, 'traseiro', 'sem camara', 0, 'https://http2.mlstatic.com/D_NQ_NP_700639-MLB47682719014_092021-O.jpg', 'Pneu Dianteiro Ira Br 1.50-17 SOHO - IRATIRES'),
(4, 'Novo Pneu', 1.99, 'traseiro', 'sem camara', 0, 'https://www.tireshop.com.br/imagens/produtos/Bridgestone_Turanza_T001.jpg', 'pneu do site tireshop');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
