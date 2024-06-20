-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/06/2024 às 23:50
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('1234567890', 'joao', 'luiz', '2024-05-25', '1234567890', 'joao@gmail.com', 'joao123'),
('126545172', 'Gustavo', 'Henrique', '2024-06-01', '125343133', 'gu123', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `funccpf` varchar(15) NOT NULL,
  `funcnome` varchar(250) NOT NULL,
  `funcsobrenome` varchar(250) NOT NULL,
  `funcdatanas` date NOT NULL,
  `functelefone` varchar(20) NOT NULL,
  `funcemail` varchar(200) NOT NULL,
  `funcsalario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`funccpf`, `funcnome`, `funcsobrenome`, `funcdatanas`, `functelefone`, `funcemail`, `funcsalario`) VALUES
('12312311', 'Carlos', 'Medeiros', '2024-06-01', '1899743622', 'carlos123', 1000.00),
('49879867512', 'Gustavo', 'Costa', '2006-03-14', '18997456732', 'gu@gmail.com', 3000.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `fabricante` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`funccpf`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
