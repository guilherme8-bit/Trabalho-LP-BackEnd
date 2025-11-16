-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2025 às 13:29
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cineprime`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(250) DEFAULT NULL,
  `Genero` enum('ação','aventura','romance','comedia','drama','suspense','terror') NOT NULL,
  `Avaliacao` float DEFAULT NULL,
  `Ano` year(4) NOT NULL,
  `Imagens` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `Nome`, `Descricao`, `Genero`, `Avaliacao`, `Ano`, `Imagens`) VALUES
(10, 'Premonição 6: Laços de Sangue', 'Na década de 1960, uma avó prevê o desabamento de um prédio e salva da morte um grupo de pessoas. Décadas depois, sua neta também começa a ter visões da morte de seus familiares.', 'terror', 7, '2025', '../arquivos/filme1.webp'),
(11, 'Superman', 'Segue o super-herói titular enquanto ele reconcilia sua herança com sua educação humana. Ele é a personificação da verdade, da justiça e de um futuro melhor em um mundo que vê a bondade como algo antiquado.', 'ação', 8, '2025', '../arquivos/filme2.jpg'),
(12, 'Quarteto Fantástico: Primeiros Passos', 'Forçados a equilibrar seus papéis como heróis e a força dos laços familiares, o Quarteto Fantástico deve defender a Terra de um deus espacial voraz chamado Galactus e sua enigmática arauta, a Surfista Prateada.', 'ação', 7, '2025', '../arquivos/filme3.webp'),
(13, 'Vingadores: Ultimato', 'Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas. E com a ajuda de aliados, os Vingadores se reúnem para desfazer as ações de Thanos e restaurar a ordem.', 'ação', 8, '2019', '../arquivos/endgame.jpg'),
(14, 'Mad Max: Estrada da Fúria', 'Em um mundo pós-apocalíptico, uma mulher se rebela contra um governante tirânico em busca de sua terra natal com a ajuda de um grupo de prisioneiras, um adorador psicótico e um nômade chamado Max.', 'aventura', 8, '2015', '../arquivos/mad max.jpg'),
(15, 'Halloween - A Noite do Terror', 'Quinze anos depois de assassinar sua irmã na noite de Halloween em 1963, Michael Myers escapa do hospício e retorna para a pequena cidade de Haddonfield para matar novamente.', 'terror', 8, '1978', '../arquivos/halloween.jpg'),
(16, 'Como Treinar o Seu Dragão', 'Quando uma ameaça coloca em perigo tanto vikings quanto dragões na ilha de Berk, a amizade entre Soluço, um viking inventivo, e Banguela, um dragão Fúria da Noite, se torna a chave para ambas as espécies construírem um novo futuro juntas.', 'aventura', 8, '2025', '../arquivos/dragao.jpg'),
(17, 'Sexta-Feira 13 - Parte 6: Jason Vive', 'Tommy Jarvis é perseguido pelo medo de que talvez Jason Vorhees, o assassino que aterrorizava Crystal Lake, não esteja morto realmente. Ele logo descobre que Jason apenas descansara, e está pronto para retomar sua escalada de terror.', 'terror', 6, '1986', '../arquivos/friday.jpg'),
(18, 'O Poderoso Chefão', 'O patriarca idoso de uma dinastia do crime organizado transfere o controle de seu império clandestino para seu filho relutante.', 'drama', 9, '1972', '../arquivos/chefão.jpg'),
(19, 'Um Sonho de Liberdade', 'Dois homens presos se reúnem ao longo de vários anos, encontrando consolo e eventual redenção através de atos de decência comum.', 'drama', 9, '1994', '../arquivos/liberdade.jpg'),
(20, 'Batman: O Cavaleiro das Trevas', 'Agora com a ajuda do tenente Jim Gordon e do promotor público Harvey Dent, Batman tem tudo para banir o crime de Gotham City de uma vez por todas. Mas em breve, os três serão vítimas do Coringa, que pretende lançar Gotham em uma anarquia.', 'ação', 9, '2008', '../arquivos/batman.jpg'),
(21, 'Aquaman 2: O Reino Perdido', 'Quando um poder ancestral é liberado pelo Arraia Negra, o Aquaman deve forjar uma aliança incômoda com seu meio-irmão Orm para proteger Atlântida e o resto do mundo de uma devastação irreversível.', 'ação', 6, '2023', '../arquivos/aquaman.jpg'),
(22, 'Jurassic World: Reino Ameaçado', 'Três anos após o fechamento do Jurassic Park, um vulcão prestes a entrar em erupção põe em risco a vida na ilha Nublar, Claire convoca Owen a retornar à ilha com ela.', 'ação', 6, '2018', '../arquivos/jw.jpg'),
(23, 'Missão: Impossível - Acerto de Contas Parte Um', 'Ethan Hunt e seu grupo do IMF embarcam na missão mais arriscada até agora: localizar uma nova arma aterrorizante que ameaça toda a humanidade antes que caia nas mãos erradas.', 'ação', 8, '2023', '../arquivos/mi.jpg'),
(24, 'John Wick: Um Novo Dia para Matar', 'Depois de retornar ao mundo do crime para pagar uma dívida, John Wick descobre que uma grande recompensa foi colocada em sua vida.', 'ação', 7, '2017', '../arquivos/John_Wick_2.jpg'),
(25, 'Deadpool & Wolverine', 'Deadpool recebe uma oferta da Autoridade de Variância Temporal para se juntar ao Universo Cinematográfico Marvel, mas em vez disso recruta uma variante do Wolverine para salvar seu universo da extinção.', 'ação', 7, '2024', '../arquivos/dw.webp'),
(26, 'Logan', 'Em um futuro em que os mutantes estão quase extintos, um velho e cansado Logan leva uma vida tranquila. Mas quando Laura, uma garota mutante perseguida por cientistas, pede ajuda a ele, ele deve colocá-la em segurança.', 'ação', 8, '2017', '../arquivos/logan.webp'),
(27, 'Transformers: O Último Cavaleiro', 'Uma ameaça aparece na Terra e a caça pero aparato perdido, desencadea a guerra entre os Autobots e os Decepticons.', 'ação', 5, '2017', '../arquivos/transformers.jpe'),
(28, 'Tropa de Elite', 'Em 1997, o capitão Nascimento tem que encontrar seu substituto enquanto luta contra os narcotraficantes e criminosos antes da chegada do Papa ao Rio de Janeiro, Brasil.', 'ação', 8, '2007', '../arquivos/tropa-de-elite.webp'),
(29, 'O Rei Leão', 'Após o assassinato de seu pai, um jovem príncipe leão foge de seu reino apenas para aprender o verdadeiro significado de responsabilidade e bravura.', 'aventura', 7, '2019', '../arquivos/O_Rei_Leão_2019.jpg'),
(30, 'O Hobbit: Uma Jornada Inesperada', 'Bilbo Bolseiro, um relutante Hobbit, parte para a Montanha Solitária com um grupo espirituoso de anões para recuperar o lar e o ouro deles na montanha do dragão Smaug.', 'aventura', 8, '2012', '../arquivos/hobbit.jpg'),
(31, 'As Aventuras de Tintim', 'Após Tintin comprar a miniatura de um navio antigo para o seu amigo Capitão Haddock, ambos descobrem que o navio tem uma história ligada a um antepassado do capitão e a um fabuloso tesouro de piratas que desapareceu há séculos.', 'aventura', 7, '2011', '../arquivos/tintin.jpg'),
(32, 'Percy Jackson e o Ladrão de Raios', 'Um adolescente descobre que ele é um descendente de um deus grego e embarca em uma aventura para resolver uma batalha em curso entre os deuses.', 'aventura', 6, '2010', '../arquivos/pj.jpg'),
(33, 'Piratas do Caribe: A Vingança de Salazar', 'O Capitão Jack Sparrow procura o Tridente de Poseidon para dominar o mar enquanto é perseguido pelo antigo rival Capitão Salazar e uma tripulação de fantasmas mortais que escaparam do Triângulo do Diabo.', 'aventura', 6, '2017', '../arquivos/Piratas do Caribe 5.jpg'),
(34, 'Jumanji: Bem-Vindo à Selva', 'Quatro adolescentes se veem presos em um videogame e o único jeito de sair é terminar o jogo.', 'aventura', 7, '2017', '../arquivos/jumanji.webp'),
(35, 'A Pequena Sereia', 'A filha do rei Tritão, Ariel, se apaixona loucamente por um príncipe que salvou de um naufrágio. Ela decide ir procurá-lo em terra firme e pede ajuda à bruxa do mar, Úrsula.', 'aventura', 7, '2023', '../arquivos/ps.jpeg'),
(36, 'Alice no País das Maravilhas', 'A Alicia volta ao mundo mágico de quando era criança onde se reune com velhos amigos e descobre seu verdadeiro destino.', 'aventura', 6, '2010', '../arquivos/Alice-In-Wonderland-Theatrical-Poster.jpg'),
(37, 'Moana: Um Mar de Aventuras', 'Na antiga Polinésia, quando uma terrível maldição incorrida pelo semideus Maui chega à ilha de Moana, ela atende ao chamado do Oceano para procurar Maui para consertar as coisas.', 'aventura', 7, '2016', '../arquivos/moana.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `minha_lista`
--

CREATE TABLE `minha_lista` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_filme` int(11) DEFAULT NULL,
  `id_serie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `minha_lista`
--

INSERT INTO `minha_lista` (`id`, `id_usuario`, `id_filme`, `id_serie`) VALUES
(1, 6, 11, NULL),
(2, 6, NULL, 14),
(3, 6, 17, NULL),
(4, 6, NULL, 15),
(5, 6, 12, NULL),
(6, 6, NULL, 22),
(8, 7, 10, NULL),
(9, 7, 12, NULL),
(12, 7, NULL, 14),
(15, 7, 24, NULL),
(16, 7, NULL, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `numero_cartao` int(11) NOT NULL,
  `data_validade` varchar(50) NOT NULL,
  `cod_seguranca` int(11) NOT NULL,
  `nome_plano` varchar(100) NOT NULL,
  `parcelamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `nome`, `cpf`, `numero_cartao`, `data_validade`, `cod_seguranca`, `nome_plano`, `parcelamento`) VALUES
(2, 'Guilherme L.S', '987654321', 887766, '09/2027', 453, 'com_anuncios', '12x de R$ 22,90'),
(3, 'Dany Silva', '123456789', 223344, '12/2028', 543, 'standard', '12x de R$ 34,90'),
(4, 'Mario', '1357986', 221133, '06/2028', 752, 'platinum', '12x de R$ 44,90');

-- --------------------------------------------------------

--
-- Estrutura para tabela `plano`
--

CREATE TABLE `plano` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(250) DEFAULT NULL,
  `Valor_mensal` float NOT NULL,
  `Valor_anual` float NOT NULL,
  `Esta_ativo` tinyint(1) NOT NULL,
  `Qualidade_maxima` varchar(50) DEFAULT NULL,
  `Telas_simultaneas` int(11) DEFAULT NULL,
  `Tem_anuncios` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(250) DEFAULT NULL,
  `Genero` enum('ação','aventura','romance','comedia','drama','suspense','terror') NOT NULL,
  `Avaliacao` float DEFAULT NULL,
  `Ano` year(4) NOT NULL,
  `Imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `series`
--

INSERT INTO `series` (`id`, `Nome`, `Descricao`, `Genero`, `Avaliacao`, `Ano`, `Imagem`) VALUES
(4, 'Breaking Bad', 'Um professor de química diagnosticado com câncer de pulmão se transforma em fabricante e vendedor de metanfetamina, a fim de garantir o futuro da sua família.', 'suspense', 10, '2008', '../arquivos/breaking bad.jpg'),
(5, 'Game of Thrones', 'Nove famílias nobres lutam pelo controle sobre as terras míticas de Westeros, enquanto um antigo inimigo retorna depois de estar adormecido por milhares de anos.', 'ação', 9, '2011', '../arquivos/got.jpg'),
(6, 'It: Bem-Vindos a Derry', 'Segue os eventos da década de 1960, o período que antecede os eventos do primeiro filme da série It de Stephen King.', 'terror', 8, '2025', '../arquivos/it.avif'),
(7, 'Chucky', 'Depois de um antigo boneco Chucky aparecer numa venda de garagem suburbana, uma idílica cidade americana é atirada para o caos à medida que uma série de assassínios horripilantes começa a expor as hipocrisias e segredos da cidade.', 'terror', 7, '2021', '../arquivos/chucky.jfif'),
(8, 'The Boys', 'Um grupo de vigilantes são dados o trabalho de deter super heroís que abusam da suas potências.', 'ação', 8, '2019', '../arquivos/the boys.jpg'),
(9, 'Fallout', '218 anos após o apocalipse, uma habitante pacífica de um agradável refúgio é forçada a se aventurar na superfície e fica chocada quando descobre a terra devastada que a espera.', 'aventura', 8, '2024', '../arquivos/fallout.jpg'),
(10, 'Ash vs. Evil Dead', 'Ash passou os últimos 30 anos evitando toda a responsabilidade, assim como os terrores da Morte Malévola, até que uma praga tenta destruir a humanidade. Ash será nossa única esperança.', 'terror', 8, '2015', '../arquivos/evil dead.webp'),
(11, 'Peaky Blinders: Sangue, Apostas e Navalhas', 'Depois de servir no Exército, Thomas Shelby e seus irmãos voltam para controlar a cidade, mas, conforme as ambições de Shelby se estendem, ele planeja construir seu próprio negócio e impedir qualquer um que atrapalhe.', 'ação', 9, '2013', '../arquivos/peaky blinders.jpg'),
(12, 'The Walking Dead', 'Um Xerife acorda de um coma para dar-se conta que o mundo está em ruínas, e deve liderar um grupo de sobreviventes para se manter vivo.', 'terror', 8, '2010', '../arquivos/twd.jpg'),
(13, 'Alien: Earth', 'Quando uma misteriosa nave espacial cai na Terra, uma jovem e um grupo desorganizado de soldados táticos fazem uma descoberta fatídica que os coloca cara a cara com a maior ameaça do planeta.', 'terror', 7, '2025', '../arquivos/alien.jpg'),
(14, 'Pacificador', 'A origem do super-herói DC tão dedicado à paz mundial que ele está disposto a usar a força das armas para alcançá-la.', 'ação', 8, '2022', '../arquivos/pacificador.jpg'),
(15, 'La Casa de Papel', 'Um grupo de ladrões peculiares assaltam a Fábrica de Moneda e Timbre para realizar o assalto mais perfeito da história da Espanha e levar para casa bilhões de euros.', 'ação', 8, '2017', '../arquivos/lacasa.webp'),
(16, 'Arqueiro', 'O bilionário Oliver Queen está desaparecido e é considerado mortor. Ele retorna cinco anos depois como um homem mudado para limpar a cidade armado com um arco.', 'ação', 7, '2012', '../arquivos/arrow.jpg'),
(17, 'Falcão e o Soldado Invernal', 'Uma produção da Disney e da Marvel Studios, estrelando os personagens carismáticos Falcão e Soldado Invernal.', 'ação', 7, '2021', '../arquivos/falcao.webp'),
(18, 'Flash', 'Depois de ser atingido por um raio, Barry Allen acorda de seu coma para descobrir que recebeu o poder da super velocidade, tornando se em Flash e lutando contra o crime na cidade.', 'ação', 7, '2014', '../arquivos/flash.jpg'),
(19, 'Cobra Kai', 'Décadas após a disputa do All Valley Karate Tour em 1984, Johnny Lawrence buscarão redenção contra Daniel LaRusso.', 'ação', 8, '2018', '../arquivos/ck.jpg'),
(20, 'One Piece: A Série', 'Em um mundo marítimo, um jovem capitão pirata parte com sua equipe para alcançar o título de Rei dos Piratas e descobrir o tesouro mítico One Piece.', 'aventura', 8, '2023', '../arquivos/op.png'),
(21, 'The Mandalorian', 'Após a queda do Império, um mandaloriano solitário trilha seu caminho pela galáxia com seu enjeitado, Grogu.', 'aventura', 8, '2019', '../arquivos/The_Mandalorian_season_2_poster.jpg'),
(22, 'Vikings', 'Os vikings nos transportam para o mundo brutal e misterioso de um guerreiro e fazendeiro que deseja explorar e atacar os litorais distantes do outro lado do oceano.', 'aventura', 8, '2013', '../arquivos/vk.png'),
(23, 'Doctor Who', 'As aventuras no tempo e espaço do extraterrestre conhecido como Doutor e sus colegas da Terra.', 'aventura', 8, '2005', '../arquivos/doctor_who.jpg'),
(24, 'Rick e Morty', 'Uma série animada que segue as façanhas de um super cientista e seu neto não tão brilhante.', 'aventura', 9, '2013', '../arquivos/rm.jpg'),
(25, 'Gravity Falls: Um Verão de Mistérios', 'Dois irmãos gemeios, o Dipper e a Mabel Pines passam suas férias no centro turístico de seu tio na cidade de Gravity Falls.', 'aventura', 9, '2012', '../arquivos/gf.webp'),
(26, 'The Witcher', 'Geralt de Rivia, um caçador de monstros, luta contra um mundo onde as vezes as pessoas são mais temidas do que as bestas.', 'aventura', 8, '2019', '../arquivos/tw.jpg'),
(27, 'Loki', 'O vilão Loki reempreende seu papel como o Deus do Mal em uma nova série que ocorre após os eventos de \"Vingadores: Ultimato\".', 'aventura', 8, '2021', '../arquivos/loki.jpg'),
(28, 'Sobrenatural', 'Dois irmãos seguem os passos do pai como caçadores, lutando contra aterradores seres sobrenaturais que vagam pela terra.', 'aventura', 8, '2005', '../arquivos/sn.webp'),
(29, 'Percy Jackson e os Olimpianos', 'O semideus Percy Jackson lidera uma missão em toda a América para evitar uma guerra entre os deuses do Olimpo.', 'aventura', 7, '2023', '../arquivos/pco.webp');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `id_plano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `Nome`, `CPF`, `Email`, `Senha`, `id_plano`) VALUES
(6, 'Guilherme L.S', '987654321', 'guilherme.l@gmail.com', '123456789', NULL),
(7, 'Dany Silva', '123456789', 'Dany_Silva@gmail.com', '987654321', NULL),
(8, 'Mario', '1357986', 'mario_armario@gmail.com', '667788', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `minha_lista`
--
ALTER TABLE `minha_lista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_serie` (`id_serie`),
  ADD KEY `id_filme` (`id_filme`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `plano`
--
ALTER TABLE `plano`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_plano` (`id_plano`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `minha_lista`
--
ALTER TABLE `minha_lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `plano`
--
ALTER TABLE `plano`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `minha_lista`
--
ALTER TABLE `minha_lista`
  ADD CONSTRAINT `minha_lista_ibfk_1` FOREIGN KEY (`id_serie`) REFERENCES `series` (`id`),
  ADD CONSTRAINT `minha_lista_ibfk_2` FOREIGN KEY (`id_filme`) REFERENCES `filmes` (`id`),
  ADD CONSTRAINT `minha_lista_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_plano`) REFERENCES `plano` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
