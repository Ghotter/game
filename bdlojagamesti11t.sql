-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 11:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlojagamesti11t`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcliente`
--

CREATE TABLE `tbcliente` (
  `codCli` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `cpfCli` char(14) NOT NULL,
  `foneCli` char(12) NOT NULL,
  `dataNasCli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `codfun` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomefun` varchar(50) NOT NULL,
  `funcao` varchar(10) NOT NULL,
  `fonefun` char(12) NOT NULL,
  `datanasfun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbjogos`
--

CREATE TABLE `tbjogos` (
  `codjog` int(4) NOT NULL,
  `nomejog` varchar(50) NOT NULL,
  `tamanhojog` char(10) NOT NULL,
  `precojog` varchar(200) NOT NULL,
  `requisitosjog` varchar(200) NOT NULL,
  `consolejog` varchar(200) NOT NULL,
  `classificacaojog` varchar(10) NOT NULL,
  `avaliacaojog` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbjogos`
--

INSERT INTO `tbjogos` (`codjog`, `nomejog`, `tamanhojog`, `precojog`, `requisitosjog`, `consolejog`, `classificacaojog`, `avaliacaojog`) VALUES
(21, 'zelda', '2gb ram', '150', 'requsitos', 'todas plataformas', '555', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbpedidos`
--

CREATE TABLE `tbpedidos` (
  `codped` int(4) NOT NULL,
  `codCliFK` int(4) NOT NULL,
  `codfunFK` int(4) NOT NULL,
  `codjogFK` int(4) NOT NULL,
  `qtdjogped` int(6) NOT NULL,
  `totaljogped` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbusu`
--

CREATE TABLE `tbusu` (
  `codusu` int(4) NOT NULL,
  `emailusu` varchar(60) NOT NULL,
  `senhausu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusu`
--

INSERT INTO `tbusu` (`codusu`, `emailusu`, `senhausu`) VALUES
(1, '123456789', 'victor@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`codCli`),
  ADD KEY `relacaoCodUsu_CodUsuFK` (`codUsuFK`);

--
-- Indexes for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`codfun`),
  ADD KEY `relacaoCodUsuCodUsuFK` (`codUsuFK`);

--
-- Indexes for table `tbjogos`
--
ALTER TABLE `tbjogos`
  ADD PRIMARY KEY (`codjog`);

--
-- Indexes for table `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD PRIMARY KEY (`codped`),
  ADD KEY ` relacaocCodCli_CodCliFK` (`codCliFK`),
  ADD KEY `relacaoCodFun_CodFunFK` (`codfunFK`),
  ADD KEY `relacaoCodJog_CodJogFK` (`codjogFK`);

--
-- Indexes for table `tbusu`
--
ALTER TABLE `tbusu`
  ADD PRIMARY KEY (`codusu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codCli` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `codfun` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbjogos`
--
ALTER TABLE `tbjogos`
  MODIFY `codjog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbpedidos`
--
ALTER TABLE `tbpedidos`
  MODIFY `codped` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbusu`
--
ALTER TABLE `tbusu`
  MODIFY `codusu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `relacaoCodUsu_CodUsuFK` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusu` (`codusu`);

--
-- Constraints for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD CONSTRAINT `relacaoCodUsuCodUsuFK` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusu` (`codusu`);

--
-- Constraints for table `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD CONSTRAINT ` relacaocCodCli_CodCliFK` FOREIGN KEY (`codCliFK`) REFERENCES `tbcliente` (`codCli`),
  ADD CONSTRAINT `relacaoCodFun_CodFunFK` FOREIGN KEY (`codfunFK`) REFERENCES `tbfuncionario` (`codfun`),
  ADD CONSTRAINT `relacaoCodJog_CodJogFK` FOREIGN KEY (`codjogFK`) REFERENCES `tbjogos` (`codjog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
