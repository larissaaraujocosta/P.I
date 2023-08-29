-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2023 às 06:39
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `NOME` varchar(50) NOT NULL,
  `SIAPE` varchar(7) NOT NULL,
  `SENHA` varchar(25) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `TELEFONE` varchar(12) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `COORDENAÇÃO` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`NOME`, `SIAPE`, `SENHA`, `CPF`, `TELEFONE`, `EMAIL`, `COORDENAÇÃO`) VALUES
('Jhon Abner Santos Almeida', '2020136', 'Casa.123', '085.379.855', '73981984841', 'abnerjhon34@gmail.com', 'Informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `discentes`
--

CREATE TABLE `discentes` (
  `NOME` varchar(50) NOT NULL,
  `MATRICULA` varchar(12) NOT NULL,
  `SENHA` varchar(25) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `TELEFONE` varchar(12) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `CURSO` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `discentes`
--

INSERT INTO `discentes` (`NOME`, `MATRICULA`, `SENHA`, `CPF`, `TELEFONE`, `EMAIL`, `CURSO`) VALUES
('Jhon Abner Santos Almeida', '202013600025', 'Casa.1234', '085.379.855', '73981984841', 'abnerjhon34@gmail.com', 'Informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `docente`
--

CREATE TABLE `docente` (
  `Email` varchar(50) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Disciplina` varchar(45) DEFAULT NULL,
  `idrequerimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requerimento`
--

CREATE TABLE `requerimento` (
  `idREQUERIMENTO` int(11) NOT NULL,
  `DATA_INICIAL` date NOT NULL,
  `OBJETO_REQUERIMENTO` varchar(45) NOT NULL,
  `DATA_FINAL` date NOT NULL,
  `DATA_HORA_REGISTRO` varchar(45) DEFAULT NULL,
  `Arquivo` int(11) NOT NULL,
  `Informacoes Complementares` varchar(200) DEFAULT NULL,
  `iddiscente` varchar(12) NOT NULL,
  `idadm` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`SIAPE`);

--
-- Índices para tabela `discentes`
--
ALTER TABLE `discentes`
  ADD PRIMARY KEY (`MATRICULA`);

--
-- Índices para tabela `docente`
--
ALTER TABLE `docente`
  ADD KEY `idreq_idx` (`idrequerimento`);

--
-- Índices para tabela `requerimento`
--
ALTER TABLE `requerimento`
  ADD PRIMARY KEY (`idREQUERIMENTO`),
  ADD KEY `idadm_idx` (`idadm`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `requerimento`
--
ALTER TABLE `requerimento`
  MODIFY `idREQUERIMENTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `idreq` FOREIGN KEY (`idrequerimento`) REFERENCES `requerimento` (`idREQUERIMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `requerimento`
--
ALTER TABLE `requerimento`
  ADD CONSTRAINT `idadm` FOREIGN KEY (`idadm`) REFERENCES `adm` (`SIAPE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `iddiscente` FOREIGN KEY (`iddiscente`) REFERENCES `discentes` (`MATRICULA`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
