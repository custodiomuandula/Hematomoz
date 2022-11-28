-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28/11/2022 às 14:29
-- Versão do servidor: 10.4.25-MariaDB
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Hematomoz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `data_agendamento` date NOT NULL,
  `data_doacao` date NOT NULL,
  `local_doacao` varchar(512) NOT NULL,
  `id_doador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo_requisicao`
--

CREATE TABLE `conteudo_requisicao` (
  `id` int(11) NOT NULL,
  `tipo_sanguineo` char(5) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_requisicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `conteudo_requisicao`
--

INSERT INTO `conteudo_requisicao` (`id`, `tipo_sanguineo`, `quantidade`, `id_requisicao`) VALUES
(1, 'A-', 1, 1),
(2, 'O+', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `doacao`
--

CREATE TABLE `doacao` (
  `id` int(11) NOT NULL,
  `data_doacao` date NOT NULL,
  `local` varchar(512) NOT NULL,
  `quantidade_sangue` float NOT NULL,
  `estado` varchar(20) NOT NULL,
  `id_doador` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `doacao`
--

INSERT INTO `doacao` (`id`, `data_doacao`, `local`, `quantidade_sangue`, `estado`, `id_doador`, `id_medico`) VALUES
(1, '2022-11-27', 'Hospital Central de Maputo', 2, 'Testado e Rejeitado', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `doador`
--

CREATE TABLE `doador` (
  `id` int(11) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `tipo_documento` varchar(100) DEFAULT NULL,
  `nr_documento` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `pais_nascimento` varchar(512) NOT NULL,
  `endereco` text NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `tipo_sanguineo` char(5) DEFAULT NULL,
  `id_assistente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `doador`
--

INSERT INTO `doador` (`id`, `nome`, `tipo_documento`, `nr_documento`, `data_nascimento`, `sexo`, `pais_nascimento`, `endereco`, `tel1`, `tel2`, `email`, `tipo_sanguineo`, `id_assistente`) VALUES
(1, 'Maria Acacio', 'B.I', '12345', '2022-11-01', 'M', 'Mocambique', 'Maputo, Matola', '23456789', '345678', 'cc@gmail.com', 'A-', 1),
(2, 'Jonas Pena', 'Cedula', '1234560', '2022-11-25', 'M', 'Portugal', 'Alto Mae', '8567482716', '123456', 'jp@gmail.com', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `exame_sangue`
--

CREATE TABLE `exame_sangue` (
  `id` int(11) NOT NULL,
  `hiv` varchar(50) NOT NULL,
  `hepatite_b` varchar(50) NOT NULL,
  `hepatite_c` varchar(50) NOT NULL,
  `doenca_chagas` varchar(50) NOT NULL,
  `sifilis` varchar(50) NOT NULL,
  `htlv` int(11) NOT NULL,
  `id_doacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `nr_bi` varchar(100) NOT NULL,
  `nacionalidade` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `endereco` text NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `anos_experiencia` int(11) NOT NULL,
  `salario` float NOT NULL,
  `data_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `nr_bi`, `nacionalidade`, `email`, `endereco`, `tel1`, `tel2`, `data_nascimento`, `sexo`, `anos_experiencia`, `salario`, `data_registro`) VALUES
(1, 'Elton Bata', '123456789M', 'Mocambicano', 'elton@gmail.com', 'Maputo, Matola, Intaka', '849030182', '879030182', '2012-12-14', 'M', 2, 50000, '2022-11-24'),
(3, 'Joana Campos', '123456789N', 'Mocambicana', '1@gmail.com', 'Bairro Alto Mae', '8390172927', '', '2022-11-10', 'M', 1, 10000, '2022-11-24');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `tipo_documento` varchar(100) DEFAULT NULL,
  `nr_documento` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `pais_nascimento` varchar(512) NOT NULL,
  `endereco` text NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `tipo_sanguineo` char(5) DEFAULT NULL,
  `id_assistente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `tipo_documento`, `nr_documento`, `data_nascimento`, `sexo`, `pais_nascimento`, `endereco`, `tel1`, `tel2`, `email`, `tipo_sanguineo`, `id_assistente`) VALUES
(2, 'Amelia Lichucha', 'Tipo de documento', '1234567', '2014-02-26', 'F', 'Portugal', 'Av. Karl Max, Predio 05', '8567482716', '123456', 'ml@gmail.com', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `username` varchar(512) NOT NULL,
  `password` varchar(100) NOT NULL,
  `perfil` varchar(100) NOT NULL,
  `id_func` int(11) DEFAULT NULL,
  `id_doador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `username`, `password`, `perfil`, `id_func`, `id_doador`) VALUES
(1, 'Elton Bata', '$2y$10$kvwwBXm85JDC35pzs2jeeOWEg2cgP2//ZtQOtROyK757BQY0QSMaO', 'admin', 1, NULL),
(2, 'Joana Campos', '$2y$10$4xiH0VAgLWfR7MVNZNZrz.s1NL2ZGjXMg5fpVBIZXlt0fI2iAH3oW', 'assistente', 3, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pre_triagem`
--

CREATE TABLE `pre_triagem` (
  `id` int(11) NOT NULL,
  `anemico` varchar(20) NOT NULL,
  `consumo_alcool` varchar(20) NOT NULL,
  `exercicios_fisicos` varchar(20) NOT NULL,
  `pressao_arterial` varchar(10) NOT NULL,
  `temperatura` varchar(11) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `altura` varchar(10) NOT NULL,
  `historico_doencas` text NOT NULL,
  `estado_saude` varchar(50) DEFAULT NULL,
  `habitos_alimentares` text NOT NULL,
  `id_doador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pre_triagem`
--

INSERT INTO `pre_triagem` (`id`, `anemico`, `consumo_alcool`, `exercicios_fisicos`, `pressao_arterial`, `temperatura`, `peso`, `altura`, `historico_doencas`, `estado_saude`, `habitos_alimentares`, `id_doador`) VALUES
(1, 'nao', 'nao', 'frequentemente', '1', '30', '50', '1.82', 'denge', 'saudavel', 'consumo excessivo de gorduras,\nconsome 2l de agua por dia', 1),
(3, 'Nao', 'Nao', 'As Vezes', '14/5', '30', '50', '1,68', 'Nenhum', NULL, 'Consome muita gordura', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisicao`
--

CREATE TABLE `requisicao` (
  `id` int(11) NOT NULL,
  `data_requisicao` date NOT NULL,
  `data_entrega` date NOT NULL,
  `estado` varchar(100) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_requisitante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `requisicao`
--

INSERT INTO `requisicao` (`id`, `data_requisicao`, `data_entrega`, `estado`, `id_admin`, `id_requisitante`) VALUES
(1, '2022-11-26', '2022-11-29', 'pendente', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisitante`
--

CREATE TABLE `requisitante` (
  `id` int(11) NOT NULL,
  `nome_instituicao` varchar(512) NOT NULL,
  `endereco` text NOT NULL,
  `email` varchar(512) NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `requisitante`
--

INSERT INTO `requisitante` (`id`, `nome_instituicao`, `endereco`, `email`, `tel1`, `tel2`) VALUES
(1, 'Hospital Central de Maputo', 'Rua 04. Av. Maputo', 'hcm@gmail.com', '124567', '123456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `transfusao`
--

CREATE TABLE `transfusao` (
  `id` int(11) NOT NULL,
  `data_transfusao` int(11) NOT NULL,
  `local` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doador` (`id_doador`);

--
-- Índices de tabela `conteudo_requisicao`
--
ALTER TABLE `conteudo_requisicao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_requisicao` (`id_requisicao`);

--
-- Índices de tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doador` (`id_doador`),
  ADD KEY `id_medico` (`id_medico`);

--
-- Índices de tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_assistente` (`id_assistente`);

--
-- Índices de tabela `exame_sangue`
--
ALTER TABLE `exame_sangue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doacao` (`id_doacao`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_assistente` (`id_assistente`);

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `id_func` (`id_func`),
  ADD KEY `id_cliente` (`id_doador`);

--
-- Índices de tabela `pre_triagem`
--
ALTER TABLE `pre_triagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doador` (`id_doador`);

--
-- Índices de tabela `requisicao`
--
ALTER TABLE `requisicao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_requisitante` (`id_requisitante`);

--
-- Índices de tabela `requisitante`
--
ALTER TABLE `requisitante`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `transfusao`
--
ALTER TABLE `transfusao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_medico` (`id_medico`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `conteudo_requisicao`
--
ALTER TABLE `conteudo_requisicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `exame_sangue`
--
ALTER TABLE `exame_sangue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pre_triagem`
--
ALTER TABLE `pre_triagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `requisicao`
--
ALTER TABLE `requisicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `requisitante`
--
ALTER TABLE `requisitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `transfusao`
--
ALTER TABLE `transfusao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `agendamento_ibfk_1` FOREIGN KEY (`id_doador`) REFERENCES `doador` (`id`);

--
-- Restrições para tabelas `conteudo_requisicao`
--
ALTER TABLE `conteudo_requisicao`
  ADD CONSTRAINT `conteudo_requisicao_ibfk_1` FOREIGN KEY (`id_requisicao`) REFERENCES `requisicao` (`id`);

--
-- Restrições para tabelas `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `doacao_ibfk_1` FOREIGN KEY (`id_doador`) REFERENCES `doador` (`id`),
  ADD CONSTRAINT `doacao_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `funcionario` (`id`);

--
-- Restrições para tabelas `doador`
--
ALTER TABLE `doador`
  ADD CONSTRAINT `doador_ibfk_1` FOREIGN KEY (`id_assistente`) REFERENCES `funcionario` (`id`);

--
-- Restrições para tabelas `exame_sangue`
--
ALTER TABLE `exame_sangue`
  ADD CONSTRAINT `exame_sangue_ibfk_1` FOREIGN KEY (`id_doacao`) REFERENCES `doacao` (`id`);

--
-- Restrições para tabelas `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`id_assistente`) REFERENCES `funcionario` (`id`);

--
-- Restrições para tabelas `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_func`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `perfil_ibfk_2` FOREIGN KEY (`id_doador`) REFERENCES `doador` (`id`);

--
-- Restrições para tabelas `pre_triagem`
--
ALTER TABLE `pre_triagem`
  ADD CONSTRAINT `pre_triagem_ibfk_1` FOREIGN KEY (`id_doador`) REFERENCES `doador` (`id`);

--
-- Restrições para tabelas `requisicao`
--
ALTER TABLE `requisicao`
  ADD CONSTRAINT `requisicao_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `requisicao_ibfk_2` FOREIGN KEY (`id_requisitante`) REFERENCES `requisitante` (`id`);

--
-- Restrições para tabelas `transfusao`
--
ALTER TABLE `transfusao`
  ADD CONSTRAINT `transfusao_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `transfusao_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
