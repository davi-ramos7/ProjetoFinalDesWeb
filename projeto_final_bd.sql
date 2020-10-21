-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Out-2020 às 06:41
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_final_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `desktops`
--

CREATE TABLE `desktops` (
  `id_desktops` int(5) NOT NULL,
  `fabricante` varchar(40) NOT NULL,
  `processador` varchar(20) NOT NULL,
  `memoria_ram` varchar(20) NOT NULL,
  `hd` varchar(20) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `estoque` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `desktops`
--

INSERT INTO `desktops` (`id_desktops`, `fabricante`, `processador`, `memoria_ram`, `hd`, `preco`, `estoque`) VALUES
(1, 'Dell', 'i5', '8Gb', '1Tb', '3500.00', 9),
(2, 'Lenovo', 'i3', '4Gb', '500Gb', '2000.00', 30),
(3, 'Lenovo', 'i5', '8Gb', '500Gb', '2800.00', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressoras`
--

CREATE TABLE `impressoras` (
  `id_impressoras` int(5) NOT NULL,
  `fabricante` varchar(20) NOT NULL,
  `tipo_impressao` varchar(20) NOT NULL,
  `multifuncional` varchar(20) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `estoque` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `impressoras`
--

INSERT INTO `impressoras` (`id_impressoras`, `fabricante`, `tipo_impressao`, `multifuncional`, `preco`, `estoque`) VALUES
(4, 'Brother', 'laser', 'uni', '2500.00', 5),
(5, 'Lexmark', 'jato', 'mult', '650.00', 8),
(6, 'HP', 'jato', 'mult', '800.00', 15),
(7, 'HP', 'laser', 'uni', '1000.00', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `laptops`
--

CREATE TABLE `laptops` (
  `id_laptops` int(5) NOT NULL,
  `fabricante` varchar(20) NOT NULL,
  `processador` varchar(20) NOT NULL,
  `memoria_ram` varchar(20) NOT NULL,
  `hd` varchar(20) NOT NULL,
  `tela` varchar(20) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `estoque` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `laptops`
--

INSERT INTO `laptops` (`id_laptops`, `fabricante`, `processador`, `memoria_ram`, `hd`, `tela`, `preco`, `estoque`) VALUES
(3, 'HP', 'i5', '8Gb', '2Tb', '15\'', '2500.00', 27),
(4, 'Dell', 'i9', '8Gb', '1Tb', '17', '3700.00', 22),
(5, 'Apple', 'i9', '8Gb', '1Tb', '17\'', '5000.00', 17),
(6, 'Acer', 'i7', '8Gb', '500Gb', '17\'', '4000.00', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_dk`
--

CREATE TABLE `venda_dk` (
  `id_venda_dk` int(5) NOT NULL,
  `desktop` int(5) NOT NULL,
  `preco_de_venda` decimal(6,2) NOT NULL,
  `data` date NOT NULL,
  `quantidade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda_dk`
--

INSERT INTO `venda_dk` (`id_venda_dk`, `desktop`, `preco_de_venda`, `data`, `quantidade`) VALUES
(1, 1, '3200.00', '2020-10-20', 3),
(2, 2, '1800.00', '2020-10-19', 2),
(3, 1, '3300.00', '2020-10-15', 1),
(4, 1, '3000.00', '2020-10-20', 10),
(5, 1, '3500.00', '2020-10-21', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_imp`
--

CREATE TABLE `venda_imp` (
  `id_venda_imp` int(5) NOT NULL,
  `impressora` int(5) NOT NULL,
  `preco_de_venda` decimal(6,2) NOT NULL,
  `data` date NOT NULL,
  `quantidade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda_imp`
--

INSERT INTO `venda_imp` (`id_venda_imp`, `impressora`, `preco_de_venda`, `data`, `quantidade`) VALUES
(1, 2, '900.00', '2020-10-14', 1),
(2, 3, '1799.00', '2020-10-08', 5),
(3, 4, '2400.00', '2020-10-20', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_lp`
--

CREATE TABLE `venda_lp` (
  `id_venda_lp` int(5) NOT NULL,
  `laptop` int(5) NOT NULL,
  `preco_de_venda` decimal(6,2) NOT NULL,
  `data` date NOT NULL,
  `quantidade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda_lp`
--

INSERT INTO `venda_lp` (`id_venda_lp`, `laptop`, `preco_de_venda`, `data`, `quantidade`) VALUES
(1, 3, '2400.00', '2020-10-12', 1),
(2, 5, '4850.00', '2020-10-16', 3),
(3, 6, '3800.00', '2020-10-20', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `desktops`
--
ALTER TABLE `desktops`
  ADD PRIMARY KEY (`id_desktops`);

--
-- Índices para tabela `impressoras`
--
ALTER TABLE `impressoras`
  ADD PRIMARY KEY (`id_impressoras`);

--
-- Índices para tabela `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id_laptops`);

--
-- Índices para tabela `venda_dk`
--
ALTER TABLE `venda_dk`
  ADD PRIMARY KEY (`id_venda_dk`);

--
-- Índices para tabela `venda_imp`
--
ALTER TABLE `venda_imp`
  ADD PRIMARY KEY (`id_venda_imp`);

--
-- Índices para tabela `venda_lp`
--
ALTER TABLE `venda_lp`
  ADD PRIMARY KEY (`id_venda_lp`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `desktops`
--
ALTER TABLE `desktops`
  MODIFY `id_desktops` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `impressoras`
--
ALTER TABLE `impressoras`
  MODIFY `id_impressoras` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id_laptops` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `venda_dk`
--
ALTER TABLE `venda_dk`
  MODIFY `id_venda_dk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `venda_imp`
--
ALTER TABLE `venda_imp`
  MODIFY `id_venda_imp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `venda_lp`
--
ALTER TABLE `venda_lp`
  MODIFY `id_venda_lp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
