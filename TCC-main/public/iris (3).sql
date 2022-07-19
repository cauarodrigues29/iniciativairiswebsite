-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jul-2022 às 01:58
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `iris`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(11) NOT NULL,
  `mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(3, 'lara', 'lara', 123, 'lara');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `idade` int(3) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `sexualidade` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `pronome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_usuario` int(6) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_usuario`, `usuario`, `senha`, `nome`, `email`) VALUES
(1, 'lara', '123', '', ''),
(2, 'lara', 'lara', 'lara', 'lara');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntario`
--

CREATE TABLE `voluntario` (
  `id_voluntario` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` int(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `comunidade` varchar(50) NOT NULL,
  `linkedin` varchar(40) DEFAULT NULL,
  `pronome` varchar(20) NOT NULL,
  `ident` varchar(20) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `ocupacao` varchar(30) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `experiencia` varchar(300) NOT NULL,
  `contato` varchar(20) NOT NULL,
  `informacoes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `voluntario`
--

INSERT INTO `voluntario` (`id_voluntario`, `email`, `nome`, `telefone`, `data_nasc`, `comunidade`, `linkedin`, `pronome`, `ident`, `sigla`, `ocupacao`, `cargo`, `motivo`, `experiencia`, `contato`, `informacoes`) VALUES
(16, 'lara', 'lara', 123456, '2003-07-01', 'sim', 'não', 'ele/dele', '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`id_voluntario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `id_voluntario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
