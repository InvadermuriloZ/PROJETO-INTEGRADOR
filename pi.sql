-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Set-2022 às 16:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `local` varchar(60) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `valor` varchar(1000) DEFAULT NULL,
  `quartos` varchar(200) DEFAULT NULL,
  `dimensao` varchar(200) DEFAULT NULL,
  `vagagaragem` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(60) NOT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `nivel` varchar(3) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `login` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `senha`, `nivel`, `email`, `telefone`, `login`) VALUES
('Maria', '987654', 'adm', 'adm@teste.com', 2147483647, 1),
('Max', '789123', 'usu', 'max@teste.com', NULL, NULL),
('Murilo', '123789', 'usu', 'murilo@teste.com', NULL, NULL),
('Rafael', '321987', 'usu', 'rafael@teste.com', NULL, NULL),
('Savio', '321654', 'usu', 'savio@teste.com', NULL, NULL),
('Vanessa', '123654', 'usu', 'vanessa@teste.com', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`local`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
