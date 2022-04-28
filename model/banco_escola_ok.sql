-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.36 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para escola
CREATE DATABASE IF NOT EXISTS `escola` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `escola`;

-- Copiando estrutura para tabela escola.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `matricula` int(50) unsigned NOT NULL DEFAULT '0',
  `nome_pai` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nome_mae` varchar(100) CHARACTER SET latin1 NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `serie_aluno` tinyint(20) NOT NULL DEFAULT '0',
  `idade` int(11) DEFAULT NULL,
  `data_matricula` date DEFAULT NULL,
  PRIMARY KEY (`matricula`,`id`) USING BTREE,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela escola.aluno: ~3 rows (aproximadamente)
INSERT INTO `aluno` (`id`, `nome`, `matricula`, `nome_pai`, `nome_mae`, `data_nasc`, `serie_aluno`, `idade`, `data_matricula`) VALUES
	(2, 'CAIXA', 2022032973, 'Pai', 'Vania Teixeira', '2022-03-29', 1, -1, '2022-04-28'),
	(3, 'CAIXA', 2022042666, 'Pai', 'Mae', '2022-04-26', 7, 0, '2022-04-28'),
	(1, 'bruno robero queluci fernandes', 2022042790, 'Jorge Robert', 'Vania Teixeira', '2022-04-27', 1, 0, '2022-04-28');

-- Copiando estrutura para tabela escola.disciplina
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'campos para guardar o ID da disciplina.',
  `nome_disciplina` varchar(100) NOT NULL COMMENT 'Campo para guardar o nome da disciplina.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela para cadastro das disciplinas.';

-- Copiando dados para a tabela escola.disciplina: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela escola.professor
CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `matricula` int(11) NOT NULL,
  `disciplina` varchar(20) NOT NULL,
  `formacao` varchar(25) NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela escola.professor: 16 rows
/*!40000 ALTER TABLE `professor` DISABLE KEYS */;
INSERT INTO `professor` (`id`, `nome`, `matricula`, `disciplina`, `formacao`, `data_cadastro`) VALUES
	(1, 'abc', 123, 'acb', 'zxc', NULL),
	(2, 'abc', 123, 'acb', 'zxc', NULL),
	(3, 'abc', 123, 'acb', 'zxc', NULL),
	(4, 'CAIXA', 987654, 'fisica', 'fisica', NULL),
	(5, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-26'),
	(6, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-26'),
	(7, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-27'),
	(8, 'CAIXA', 987654, 'fisica', '', '2022-04-27'),
	(9, 'teste hoje', 987654, '', '', '2022-04-27'),
	(10, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-27'),
	(11, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-27'),
	(12, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-27'),
	(13, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-27'),
	(14, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-27'),
	(15, 'teste hoje', 987654, 'fisica', 'fisica', '2022-04-27'),
	(16, 'CAIXA', 987654, 'fisica', 'fisica', '2022-04-27');
/*!40000 ALTER TABLE `professor` ENABLE KEYS */;

-- Copiando estrutura para tabela escola.turma
CREATE TABLE IF NOT EXISTS `turma` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `professor` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'chave estrangeira, associa-se ao id do professor.',
  `numero_turma` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'numero da turma.',
  `aluno` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'numero do aluno, ID.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela com dados pertinentes a guardar dados da turma.';

-- Copiando dados para a tabela escola.turma: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela escola.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `data_cad` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela escola.usuario: 0 rows
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
