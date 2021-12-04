-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2020 às 21:25
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_tarefas`
--

-- --------------------------------------------------------



--
-- Estrutura da tabela `tarefas`
--
CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `descricao` text CHARACTER SET utf8 DEFAULT NULL,
  `prazo` date DEFAULT NULL,
  `prioridade` int(1) DEFAULT NULL,
  `concluida` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tarefas` (`id`, `nome`, `descricao`, `prazo`, `prioridade`, `concluida`) VALUES
(1, 'Estudar	PHP', ' Continuar	meus	estudos	de	PHP	e	MySQL ', '2020-07-03', 1, 'Não'),
(2, 'ESTUDAR HTML', ' É IMPORTANTE PARA DESENVOLVER O FRONT-END ', '2019-11-04', 1, 'Sim'),
(3, 'Festa', '     Aniversario Nick   ', '2002-10-31', 1, 'Não'),
(4, 'Assistir', '   dark   ', '2020-07-03', 1, 'Sim'),
(7, 'Assistir', 'Livro azul', '2020-07-03', 1, 'Não'),
(9, 'Renovar ', 'Matricula Curso', '2020-07-03', 1, 'sim'),
(22, 'Dentista', 'Consulta  ', '2020-07-31', 2, 'Não'),
(24, 'Comprar', 'Tabuas   ', '2020-07-08', 2, 'Não'),
(25, 'Comprar ', '      Cantoneiras     6  ', '2020-07-16', 2, 'Não'),
(35, 'Assistir', ' hanna ', '2020-07-27', 1, 'Não'),
(38, 'mercado', 'legumes  ', '2020-07-17', 1, 'Não'),
(40, 'Garagem', 'arrumação  ', '2020-07-18', 1, 'Não'),
(43, 'comprar ', ' alcool gel   2', '2020-07-17', 1, 'Não'),
(45, 'devolver', '   livros 1 2 3 4', '2020-07-17', 1, 'Não'),
(50, 'liberar', '  Entregador 757575', '2020-07-17', 1, 'Não'),
(52, 'devolver ', 'carta 45345  ', '2020-07-17', 1, 'Não'),
(58, 'ligar', ' para saaae   ', '2020-07-17', 1, 'Sim'),
(59, 'devolver', '  caixa 45', '2020-07-18', 1, 'Não'),
(61, 'permitir', '    visitante 54 ', '2020-07-18', 1, 'Não'),
(62, 'remover', ' sobras 32   ', '2020-07-18', 1, 'Não');


--
-- Estrutura da tabela `anexos`
--


CREATE TABLE `anexos` (
  `id` int(11) NOT NULL,
  `tarefa_id` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------





--
-- Extraindo dados da tabela `tarefas`
--



--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
