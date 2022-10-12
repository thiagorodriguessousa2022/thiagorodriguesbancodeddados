-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Out-2022 às 04:43
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
-- Banco de dados: `mercado`
--
DROP DATABASE IF EXISTS `mercado`;
CREATE DATABASE IF NOT EXISTS `mercado` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mercado`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpfcliente` varchar(15) NOT NULL,
  `nome3` varchar(50) NOT NULL,
  `totaldacompracliente` varchar(15) NOT NULL,
  `enderecocliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpfcliente`, `nome3`, `totaldacompracliente`, `enderecocliente`) VALUES
('05632379002', 'Italo Vieira Lopes', '44,50', 'Rua Jorge Nicolas, 308'),
('20826124578', 'Otho Junior Siqueira', '356,45', 'Av Getulio Vargas, 1234'),
('32123445645', 'Carlos Augusto Jorge', '200,45', 'Rua Pedro Alvares, 345'),
('45267931320', 'Jorge Rodrigues Soares', '10000,50', 'Rua JK, 329'),
('74012871204', 'Antonio Mendes Filho', '9,99', 'Rua Silveira Neto, 23'),
('92543465640', 'Antonio Paulo da Silva', '1000,00', 'Av Getulio Vargas, 7650');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `codigodacompra` varchar(15) NOT NULL,
  `totaldacompra` varchar(15) NOT NULL,
  `ccpfcliente` varchar(15) NOT NULL,
  `ccodigodoproduto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`codigodacompra`, `totaldacompra`, `ccpfcliente`, `ccodigodoproduto`) VALUES
('00321', '10000,50', '45267931320', '1299'),
('12856', '356,45', '20826124578', '0045'),
('20784', '200,45', '32123445645', '5432'),
('22159', '44,50', '05632379002', '7854'),
('34756', '9,99', '74012871204', '2395'),
('54783', '1000,00', '92543465640', '3321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigodoproduto` varchar(15) NOT NULL,
  `precodoproduto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigodoproduto`, `precodoproduto`) VALUES
('0045', '356,45'),
('1299', '10000,50'),
('2395', '9,99'),
('3321', '1000.00'),
('5432', '200,45'),
('7854', '44,50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `cpf` varchar(15) NOT NULL,
  `nome2` varchar(50) NOT NULL,
  `salario` varchar(15) NOT NULL,
  `endereco` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`cpf`, `nome2`, `salario`, `endereco`) VALUES
('02871488279', 'Rodrigo Henrique Julio', '1250,00', 'Rua Alameda dos'),
('06421062345', 'Luiza Osorio', '1400,00', 'Rua Luiz Prisco'),
('12349041250', 'Hugo Augusto Salamanco', '1430,00', 'Av Julio Albuqu'),
('13095061423', 'Thiago Rodrigues Sousa', '1100,50', 'Rua Getulio var'),
('45632178487', 'Pedro de Luca', '1300,00', 'Av Jorge Lucas,'),
('58990223470', 'Lucas Onorio de Souza', '1110,00', 'Rua Jorge Lucas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpfcliente`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`codigodacompra`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigodoproduto`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
