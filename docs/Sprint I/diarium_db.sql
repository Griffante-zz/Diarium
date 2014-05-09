-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Maio-2014 às 22:13
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `diarium_db`
--
CREATE DATABASE IF NOT EXISTS `diarium_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `diarium_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`matricula`, `nome`, `endereco`, `dataNascimento`) VALUES
('20121130156', 'Glauber do Prado Griffante', '', '1989-12-18'),
('20121130157', 'Bryan Zinn', 'Rua tralalá, nº 666', '0000-00-00'),
('20121130158', 'Eduardo Hoff', 'Travessa Rua, numero sem numero', '1991-05-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE IF NOT EXISTS `aula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` blob,
  `data` date DEFAULT NULL,
  `diario` int(11) DEFAULT NULL,
  `horario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diario` (`diario`),
  KEY `horario` (`horario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id`, `conteudo`, `data`, `diario`, `horario`) VALUES
(6, 0x636f6e746575646f, '2014-06-05', 1, 1),
(7, 0x436f6e746575646f, '2014-05-09', 1, 2),
(8, 0x436f6e746575646f, '2014-05-09', 1, 3),
(9, 0x436f6e746575646f, '2014-05-09', 1, 4),
(10, 0x436f6e746575646f, '2014-05-09', 1, 5),
(11, 0x436f6e746575646f, '2014-05-09', 1, 6),
(12, 0x436f6e746575646f, '2014-05-09', 2, 2),
(13, 0x436f6e746575646f, '2014-05-09', 2, 3),
(14, 0x436f6e746575646f, '2014-05-09', 2, 4),
(15, 0x436f6e746575646f, '2014-05-09', 2, 5),
(16, 0x436f6e746575646f, '2014-05-09', 2, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `coordenador` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `coordenador`) VALUES
(1, 'Análise e Desenvolvimento de Sistemas', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario_de_classe`
--

CREATE TABLE IF NOT EXISTS `diario_de_classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(10) DEFAULT NULL,
  `etapa` varchar(10) DEFAULT NULL,
  `turma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `turma` (`turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `diario_de_classe`
--

INSERT INTO `diario_de_classe` (`id`, `periodo`, `etapa`, `turma`) VALUES
(1, '2014/1', '1º Semestr', 1),
(2, '2014/1', '1 Semestre', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `ementa` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`, `ementa`) VALUES
(1, 'Desenvolvimento de Sistemas II', 0x4672616d65776f726b),
(2, 'Programação I', 0x456d656e7461),
(3, 'Fundamentos da Computação', 0x456d656e7461),
(4, 'Lógica para a Computação', 0x456d656e7461),
(5, 'Português Instrumental', 0x456d656e7461),
(6, 'Inglês Instrumental', 0x456d656e7461);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

CREATE TABLE IF NOT EXISTS `frequencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aula` int(11) DEFAULT NULL,
  `aluno` varchar(20) DEFAULT NULL,
  `presenca` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aula` (`aula`),
  KEY `aluno` (`aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `frequencia`
--

INSERT INTO `frequencia` (`id`, `aula`, `aluno`, `presenca`) VALUES
(2, 6, '20121130156', 'P'),
(3, 6, '20121130157', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` int(11) DEFAULT NULL,
  `dia` enum('domingo','segunda','terca','quarta','quinta','sexta','sabado') DEFAULT NULL,
  `inicio` time DEFAULT NULL,
  `termino` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id`, `grade`, `dia`, `inicio`, `termino`) VALUES
(1, 1, 'segunda', '13:30:00', '14:15:00'),
(2, 1, 'segunda', '14:15:00', '15:00:00'),
(3, 1, 'segunda', '15:00:00', '15:45:00'),
(4, 1, 'segunda', '15:45:00', '16:30:00'),
(5, 1, 'segunda', '16:45:00', '17:30:00'),
(6, 1, 'segunda', '17:30:00', '18:15:00'),
(7, 1, 'segunda', '18:15:00', '19:00:00'),
(8, 1, 'segunda', '19:00:00', '19:45:00'),
(9, 1, 'segunda', '19:45:00', '20:30:00'),
(10, 1, 'segunda', '20:45:00', '21:30:00'),
(11, 1, 'segunda', '21:30:00', '22:15:00'),
(12, 1, 'terca', '13:30:00', '14:15:00'),
(13, 1, 'terca', '14:15:00', '15:00:00'),
(14, 1, 'terca', '15:00:00', '15:45:00'),
(15, 1, 'terca', '15:45:00', '16:30:00'),
(16, 1, 'terca', '16:45:00', '17:30:00'),
(17, 1, 'terca', '17:30:00', '18:15:00'),
(18, 1, 'terca', '18:15:00', '19:00:00'),
(19, 1, 'terca', '19:00:00', '19:45:00'),
(20, 1, 'terca', '19:45:00', '20:30:00'),
(21, 1, 'terca', '20:45:00', '21:30:00'),
(22, 1, 'terca', '21:30:00', '22:15:00'),
(23, 1, 'quarta', '13:30:00', '14:15:00'),
(24, 1, 'quarta', '14:15:00', '15:00:00'),
(25, 1, 'quarta', '15:00:00', '15:45:00'),
(26, 1, 'quarta', '15:45:00', '16:30:00'),
(27, 1, 'quarta', '16:45:00', '17:30:00'),
(28, 1, 'quarta', '17:30:00', '18:15:00'),
(29, 1, 'quarta', '18:15:00', '19:00:00'),
(30, 1, 'quarta', '19:00:00', '19:45:00'),
(31, 1, 'quarta', '19:45:00', '20:30:00'),
(32, 1, 'quarta', '20:45:00', '21:30:00'),
(33, 1, 'quarta', '21:30:00', '22:15:00'),
(34, 1, 'quinta', '13:30:00', '14:15:00'),
(35, 1, 'quinta', '14:15:00', '15:00:00'),
(36, 1, 'quinta', '15:00:00', '15:45:00'),
(37, 1, 'quinta', '15:45:00', '16:30:00'),
(38, 1, 'quinta', '16:45:00', '17:30:00'),
(39, 1, 'quinta', '17:30:00', '18:15:00'),
(40, 1, 'quinta', '18:15:00', '19:00:00'),
(41, 1, 'quinta', '19:00:00', '19:45:00'),
(42, 1, 'quinta', '19:45:00', '20:30:00'),
(43, 1, 'quinta', '20:45:00', '21:30:00'),
(44, 1, 'quinta', '21:30:00', '22:15:00'),
(45, 1, 'sexta', '13:30:00', '14:15:00'),
(46, 1, 'sexta', '14:15:00', '15:00:00'),
(47, 1, 'sexta', '15:00:00', '15:45:00'),
(48, 1, 'sexta', '15:45:00', '16:30:00'),
(49, 1, 'sexta', '16:45:00', '17:30:00'),
(50, 1, 'sexta', '17:30:00', '18:15:00'),
(51, 1, 'sexta', '18:15:00', '19:00:00'),
(52, 1, 'sexta', '19:00:00', '19:45:00'),
(53, 1, 'sexta', '19:45:00', '20:30:00'),
(54, 1, 'sexta', '20:45:00', '21:30:00'),
(55, 1, 'sexta', '21:30:00', '22:15:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_de_alunos`
--

CREATE TABLE IF NOT EXISTS `lista_de_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Turma` int(11) DEFAULT NULL,
  `Aluno` varchar(20) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Turma` (`Turma`),
  KEY `Aluno` (`Aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `lista_de_alunos`
--

INSERT INTO `lista_de_alunos` (`id`, `Turma`, `Aluno`, `numero`) VALUES
(4, 1, '20121130157', 1),
(5, 1, '20121130156', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) DEFAULT NULL,
  `matricula` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curso` (`curso`),
  KEY `matricula` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriz_curricular`
--

CREATE TABLE IF NOT EXISTS `matriz_curricular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) DEFAULT NULL,
  `disciplina` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curso` (`curso`),
  KEY `disciplina` (`disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `titulacao` enum('graduado','especialista','mestre','doutor') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`, `titulacao`) VALUES
(1, 'Rogério Tessari', 'rogerio.tessari@bento.ifrs.edu.br', 'mestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `disciplina` int(11) DEFAULT NULL,
  `professor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `disciplina` (`disciplina`),
  KEY `professor` (`professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `disciplina`, `professor`) VALUES
(1, 'PROG 2014/1', 1, 1),
(2, 'PROG1/2014', 2, 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`diario`) REFERENCES `diario_de_classe` (`id`),
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`horario`) REFERENCES `horario` (`id`);

--
-- Limitadores para a tabela `diario_de_classe`
--
ALTER TABLE `diario_de_classe`
  ADD CONSTRAINT `diario_de_classe_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD CONSTRAINT `frequencia_ibfk_1` FOREIGN KEY (`aula`) REFERENCES `aula` (`id`),
  ADD CONSTRAINT `frequencia_ibfk_2` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`matricula`);

--
-- Limitadores para a tabela `lista_de_alunos`
--
ALTER TABLE `lista_de_alunos`
  ADD CONSTRAINT `lista_de_alunos_ibfk_1` FOREIGN KEY (`Turma`) REFERENCES `turma` (`id`),
  ADD CONSTRAINT `lista_de_alunos_ibfk_2` FOREIGN KEY (`Aluno`) REFERENCES `aluno` (`matricula`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `aluno` (`matricula`);

--
-- Limitadores para a tabela `matriz_curricular`
--
ALTER TABLE `matriz_curricular`
  ADD CONSTRAINT `matriz_curricular_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `matriz_curricular_ibfk_2` FOREIGN KEY (`disciplina`) REFERENCES `disciplina` (`id`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`disciplina`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`professor`) REFERENCES `professor` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
