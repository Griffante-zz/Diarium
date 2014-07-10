-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 10-Jul-2014 às 00:46
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
  `id` int(11) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `matricula`, `nome`, `endereco`, `data_nascimento`) VALUES
(4, '201414', 'Bryan Zinn', 'Rua Alameda das Araucárias, nº 18', '1990-06-15'),
(5, '201415', 'Glauber do Prado Griffante', 'Tv. Belém, nº10', '1989-12-18');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `turma` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `turma` (`turma`),
  KEY `FK_AVALIACAO_HORARIO` (`horario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id`, `data`, `peso`, `turma`, `horario`) VALUES
(1, '0000-00-00', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_aluno`
--

CREATE TABLE IF NOT EXISTS `avaliacao_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota` double DEFAULT NULL,
  `aluno` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_AVALIACAOALUNO_ALUNO` (`aluno`),
  KEY `FK_AVALIACAOALUNO_AVALIACAO` (`avaliacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'Tecnologia em Análise e Desenvolvimento de Sistemas', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `diario_de_classe`
--

INSERT INTO `diario_de_classe` (`id`, `periodo`, `etapa`, `turma`) VALUES
(1, '1', '1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `ementa` blob,
  `carga_horaria` enum('30','60','90') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`, `ementa`, `carga_horaria`) VALUES
(1, 'Programação I', 0x4cc3b3676963612064652050726f6772616d61c3a7c3a36f0d0a416c676f7269746d6f730d0a4a617661, '90'),
(2, 'Fundamentos da Computação', 0x4c61726d616e, '60'),
(3, 'Lógica para a Computação ', 0x73652e2e2e20656e74c3a36f2e2e2e0d0a56206f752046, '60'),
(4, 'Português Instrumental', 0x507265706f7369c3a7c3b56573, '60'),
(5, 'Inglês Instrumental', 0x546f206265, '60');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

CREATE TABLE IF NOT EXISTS `frequencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aula` int(11) DEFAULT NULL,
  `aluno` int(11) DEFAULT NULL,
  `presenca` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aula` (`aula`),
  KEY `aluno` (`aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id`, `grade`, `dia`, `inicio`, `termino`) VALUES
(1, 1, 'segunda', '18:15:00', '19:00:00'),
(2, 1, 'segunda', '19:00:00', '19:45:00'),
(3, 1, 'segunda', '19:45:00', '20:30:00'),
(4, 1, 'segunda', '20:45:00', '21:30:00'),
(5, 1, 'segunda', '21:30:00', '22:15:00'),
(6, 1, 'terca', '18:15:00', '19:00:00'),
(7, 1, 'terca', '19:00:00', '19:45:00'),
(8, 1, 'terca', '19:45:00', '20:30:00'),
(9, 1, 'terca', '20:45:00', '21:30:00'),
(10, 1, 'terca', '21:30:00', '22:15:00'),
(11, 1, 'quarta', '18:15:00', '19:00:00'),
(12, 1, 'quarta', '19:00:00', '19:45:00'),
(13, 1, 'quarta', '19:45:00', '20:30:00'),
(14, 1, 'quarta', '20:45:00', '21:30:00'),
(15, 1, 'quarta', '21:30:00', '22:15:00'),
(16, 1, 'quinta', '18:15:00', '19:00:00'),
(17, 1, 'quinta', '19:00:00', '19:45:00'),
(18, 1, 'quinta', '19:45:00', '20:30:00'),
(19, 1, 'quinta', '20:45:00', '21:30:00'),
(20, 1, 'quinta', '21:30:00', '22:15:00'),
(21, 1, 'sexta', '18:15:00', '19:00:00'),
(22, 1, 'sexta', '19:00:00', '19:45:00'),
(23, 1, 'sexta', '19:45:00', '20:30:00'),
(24, 1, 'sexta', '20:45:00', '21:30:00'),
(25, 1, 'sexta', '21:30:00', '22:15:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_de_alunos`
--

CREATE TABLE IF NOT EXISTS `lista_de_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `turma` int(11) DEFAULT NULL,
  `aluno` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `turma` (`turma`),
  KEY `aluno` (`aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `matricula` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curso` (`curso`),
  KEY `aluno` (`aluno`),
  KEY `matricula` (`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`id`, `curso`, `aluno`, `matricula`) VALUES
(1, 1, 4, '201414'),
(2, 1, 5, '201415');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `matriz_curricular`
--

INSERT INTO `matriz_curricular` (`id`, `curso`, `disciplina`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `titulacao` enum('graduado','especialista','mestre','doutor') DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `titulacao`) VALUES
(3, 'Rogério Tessari', 'mestre'),
(6, 'Lissandra Luvizão Lazzarotto', 'mestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretario`
--

CREATE TABLE IF NOT EXISTS `secretario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secretario`
--

INSERT INTO `secretario` (`id`, `nome`) VALUES
(2, 'Nome do Secretário');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `disciplina`, `professor`) VALUES
(1, '20141.PROG1', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tipo` enum('admin','aluno','professor','secretario') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `tipo`) VALUES
(1, 'admin', 'admin', 'webmaster@email.com', 'admin'),
(2, 'secretario', 'secretario', 'secretario@ifrs.edu.br', 'secretario'),
(3, 'rogerio.tessari', 'rt', 'rogerio.tessari@ifrs.edu.br', 'professor'),
(4, 'bryan.zinn', 'bz', 'bryan.zinn@ifrs.edu.br', 'aluno'),
(5, 'glauber.griffante', 'gg', 'glauber.griffante@ifrs.edu.br', 'aluno'),
(6, 'lissandra.lazzarotto', 'll', 'lissandra.lazzarotto@ifrs.edu.br', 'professor');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `FK_ALUNO_USER` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `FK_AULA_DIARIO` FOREIGN KEY (`diario`) REFERENCES `diario_de_classe` (`id`),
  ADD CONSTRAINT `FK_AULA_HORARIO` FOREIGN KEY (`horario`) REFERENCES `horario` (`id`);

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `FK_AVALIACAO_HORARIO` FOREIGN KEY (`horario`) REFERENCES `horario` (`id`),
  ADD CONSTRAINT `FK_AVALIACAO_TURMA` FOREIGN KEY (`turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `avaliacao_aluno`
--
ALTER TABLE `avaliacao_aluno`
  ADD CONSTRAINT `FK_AVALIACAOALUNO_ALUNO` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `FK_AVALIACAOALUNO_AVALIACAO` FOREIGN KEY (`avaliacao`) REFERENCES `avaliacao` (`id`);

--
-- Limitadores para a tabela `diario_de_classe`
--
ALTER TABLE `diario_de_classe`
  ADD CONSTRAINT `FK_DIARIO_TURMA` FOREIGN KEY (`turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD CONSTRAINT `FK_FREQUENCIA_ALUNO` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `FK_FREQUENCIA_AULA` FOREIGN KEY (`aula`) REFERENCES `aula` (`id`);

--
-- Limitadores para a tabela `lista_de_alunos`
--
ALTER TABLE `lista_de_alunos`
  ADD CONSTRAINT `FK_LISTAALUNOS_ALUNO` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `FK_LISTAALUNOS_TURMA` FOREIGN KEY (`turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `FK_MATRICULA_ALUNO` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `FK_MATRICULA_CURSO` FOREIGN KEY (`curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `matriz_curricular`
--
ALTER TABLE `matriz_curricular`
  ADD CONSTRAINT `FK_MATRIZ_CURSO` FOREIGN KEY (`curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `FK_MATRIZ_DISCIPLINA` FOREIGN KEY (`disciplina`) REFERENCES `disciplina` (`id`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `FK_PROFESSOR_USER` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `secretario`
--
ALTER TABLE `secretario`
  ADD CONSTRAINT `FK_SECRETARIO_USER` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `FK_TURMA_DISCIPLINA` FOREIGN KEY (`disciplina`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `FK_TURMA_PROFESSOR` FOREIGN KEY (`professor`) REFERENCES `professor` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
