-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Set-2022 às 16:31
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
  `vagagaragem` varchar(10) DEFAULT NULL,
  `nivel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`local`, `foto`, `valor`, `quartos`, `dimensao`, `vagagaragem`, `nivel`) VALUES
('Andaraí', 'Fotos/Andarai.jpg', '30.000', '4', '40 metros', '3', NULL),
('Botafogo', 'Fotos/Botafogo.jpg', '40.000', '3', '50 metros quadrados', '1', NULL),
('Centro', 'Fotos/Centro.jpg', '90.000', '2', '50 metros quadrados', '0', NULL),
('Copacabana', 'Fotos/Copacabana.jpg', '100.000', '4', '100 metros quadrados', '1', NULL),
('Del Castilho', 'Fotos/DelCastilho.jpg', '20.000', '5', '200 metros quadrados', '3', NULL),
('Flamengo', 'Fotos/Flamengo.jpg', '500.000', '2', '60 metros quadrados', '2', NULL),
('Ipanema', 'Fotos/Ipanema.jpg', '700.000', '3', '80 metros quadrados', '1', NULL),
('Leblon', 'Fotos/Leblon.jpg', '999.000', '2', '75 metros quadrados', '1', NULL),
('Maracanã', 'Fotos/Maracana.jpg', '80.000', '2', '50 metros quadrados', '2', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `nivel` varchar(3) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `nome`, `senha`, `nivel`, `email`, `telefone`) VALUES
(1, 'Vanessa', '1234', 'usu', 'teste@gmail.com', 313131),
(2, 'Murilo Hilario', '1235', 'usu', 'teste@gmail.com', 234232),
(3, 'Max', '1234', 'usu', 'teste@gmail.com', 42354),
(8, 'rafael', '123', 'adm', 'oi@gmailcom', 423423);

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
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
