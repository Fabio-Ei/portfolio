SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `portfolio`
--

CREATE DATABASE IF NOT EXISTS portfolio;
USE portfolio;

-- --------------------------------------------------------

--
-- Estrutura para tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `link` varchar(300) NOT NULL,
  `descricao` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `projetos`
--

INSERT INTO `projetos` (`id`, `nome`, `link`, `descricao`) VALUES
(1, 'Loja de jogos', 'https://github.com/Fabio-Ei/Projeto_GameBits.git', 'Possui sistema de login e tem banco de dados integrado no sistema. Uso de PHP e CSS'),
(2, 'Design de todo-list', 'https://github.com/Fabio-Ei/todo-list_Design.git', 'Design feito com HTML e CSS'),
(3, 'Galeria de arte', 'https://github.com/Fabio-Ei/galeria_de_arte_Design.git', 'Design feito com HTML e CSS');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;