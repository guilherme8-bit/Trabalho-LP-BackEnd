-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/11/2025 às 23:43
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
-- Banco de dados: `cineprime`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(250) DEFAULT NULL,
  `Genero` enum('ação','aventura','romance','comedia','drama','suspense','terror') NOT NULL,
  `Avaliacao` float DEFAULT NULL,
  `Ano` year(4) NOT NULL,
  `Imagens` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `Nome`, `Descricao`, `Genero`, `Avaliacao`, `Ano`, `Imagens`) VALUES
(8, 'batman', 'aaaaaaaaaaaaaaaa', 'ação', 10, '2006', '../arquivos/batman.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `minha_lista`
--

CREATE TABLE `minha_lista` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_filme` int(11) DEFAULT NULL,
  `id-serie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `numero_cartao` int(11) NOT NULL,
  `data_validade` date NOT NULL,
  `cod_seguranca` int(11) NOT NULL,
  `nome_plano` varchar(100) NOT NULL,
  `parcelamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `plano`
--

CREATE TABLE `plano` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(250) DEFAULT NULL,
  `Valor_mensal` float NOT NULL,
  `Valor_anual` float NOT NULL,
  `Esta_ativo` tinyint(1) NOT NULL,
  `Qualidade_maxima` varchar(50) DEFAULT NULL,
  `Telas_simultaneas` int(11) DEFAULT NULL,
  `Tem_anuncios` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(250) DEFAULT NULL,
  `Genero` enum('ação','aventura','romance','comedia','drama','suspense') NOT NULL,
  `Avaliacao` float DEFAULT NULL,
  `Ano` year(4) NOT NULL,
  `Imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `series`
--

INSERT INTO `series` (`id`, `Nome`, `Descricao`, `Genero`, `Avaliacao`, `Ano`, `Imagem`) VALUES
(3, 'Flash', 'rapido', 'ação', 10, '2014', '../arquivos/flash.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `id_plano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `minha_lista`
--
ALTER TABLE `minha_lista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-serie` (`id-serie`),
  ADD KEY `id_filme` (`id_filme`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `plano`
--
ALTER TABLE `plano`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_plano` (`id_plano`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `minha_lista`
--
ALTER TABLE `minha_lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `plano`
--
ALTER TABLE `plano`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `minha_lista`
--
ALTER TABLE `minha_lista`
  ADD CONSTRAINT `minha_lista_ibfk_1` FOREIGN KEY (`id-serie`) REFERENCES `series` (`id`),
  ADD CONSTRAINT `minha_lista_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id`),
  ADD CONSTRAINT `minha_lista_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_plano`) REFERENCES `plano` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
