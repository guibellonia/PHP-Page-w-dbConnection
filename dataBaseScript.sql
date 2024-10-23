CREATE DATABASE IF NOT EXISTS Poderes;

USE Poderes;

CREATE TABLE Tag (
	idTag INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Descricao varchar(20) NOT NULL
);

CREATE TABLE Card (
	idCard INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Titulo varchar(100) NOT NULL,
    Descricao varchar(300) NOT NULL,
    NivelPoder INT NOT NULL,
    idTag INT,
    CONSTRAINT fk_tag FOREIGN KEY (idTag) REFERENCES Tag(idTag)
);

USE Poderes;
SELECT * FROM TAG;

USE Poderes;
SELECT * FROM CARD;

INSERT INTO Tag VALUES
(1, "Fogo"),
(2, "Água"),
(3, "Terra"),
(4, "Vento"),
(5, "Luz"),
(6, "Sombra");

INSERT INTO Card (idcard, titulo, descricao, idtag, nivelpoder) VALUES
(1, 'Arte da Palma dos Nove Portões de Fogo', 'Técnica poderosa que incendeia o oponente com um toque.', 1, 16000),
(2, 'Técnica da Espada Azure', 'Um ataque veloz que corta tudo em seu caminho, liberando energia azul.', 1, 21000),
(3, 'Fogo Celestial', 'Chamadas ardentes que purificam a alma e incendeiam inimigos.', 5, 19000),
(4, 'Tempestade do Dragão Vento', 'Invocação de ventos ferozes que arrastam e destroem o campo de batalha.', 4, 17500),
(5, 'Sombra do Lobo Noturno', 'Movimentação furtiva e rápida nas sombras, enganando adversários.', 6, 16500),
(6, 'Defensiva da Terra Sagrada', 'Manipulação do solo para criar barreiras que protegem aliados.', 3, 20000),
(7, 'Correntes de Água Espiritual', 'Controle sobre as águas que imobiliza e afoga inimigos.', 2, 15800),
(8, 'Lança Flamejante do Fogo', 'Criação de lanças de fogo que atravessam armaduras e proteções.', 1, 23000),
(9, 'Escudo Radiante', 'Formação de uma barreira luminosa que reflete ataques inimigos.', 5, 18000),
(10, 'Furacão de Aço', 'Geração de um furacão cortante que devora tudo em seu caminho.', 4, 17000),
(11, 'Sussurros do Submundo', 'Técnica de espionagem que utiliza sombras para coletar informações.', 6, 15500),
(12, 'Tremor do Imperador', 'Causar tremores devastadores que desestabilizam o inimigo.', 3, 22000),
(13, 'Fluxo Serpentino', 'Manipulação da água em movimentos fluidos que surpreendem o oponente.', 2, 15000),
(14, 'Raio da Tempestade', 'Disparo de raios poderosos que queimam com a força da natureza.', 1, 24000),
(15, 'Caminho da Luz Divina', 'Técnica que ilumina o caminho dos aliados e ofusca os inimigos.', 5, 17000),
(16, 'Rugido do Vento Cortante', 'Aumento da velocidade através do vento, causando impacto devastador.', 4, 17500),
(17, 'Teia de Sombras Malignas', 'Criação de armadilhas que capturam e imobilizam os inimigos.', 6, 15700),
(18, 'Moldar a Terra dos Antigos', 'Capacidade de criar estruturas defensivas a partir do solo.', 3, 20500),
(19, 'Jatos de Água Vigorosos', 'Lançamento de jatos de água com força imensa, causando impacto.', 2, 14800),
(20, 'Chamas do Inferno Ancestral', 'Desencadeia chamas purificadoras que consomem tudo em seu caminho.', 1, 25000),
(21, 'Luz da Esperança Eterna', 'Emissão de luz que fortalece aliados e desanima adversários.', 5, 16500),
(22, 'Tempestade Cortante dos Ventos', 'Criação de ventos afiados que causam ferimentos graves.', 4, 17200),
(23, 'Dança das Sombras do Lobo', 'Movimentação ágil e furtiva que confunde os inimigos.', 6, 16000),
(24, 'Pilares de Terra do Guardião', 'Erguimento de pilares de terra que oferecem proteção ou ataque.', 3, 21000),
(25, 'Correnteza Letal', 'Controle das correntes de água para desviar e atacar adversários.', 2, 15200),
(26, 'Explosão Flamejante', 'Criação de explosões de fogo em área, causando destruição massiva.', 1, 22500),
(27, 'Raio Luminoso do Guerreiro', 'Ataques rápidos e intensos que brilham com energia luminosa.', 5, 17800),
(28, 'Redemoinho do Destino', 'Criação de redemoinhos que atraem e desestabilizam inimigos.', 4, 16800),
(29, 'Luz da Destruição Eterna', 'Uma luz tão intensa que aniquila tudo em seu alcance.', 5, 26000),
(30, 'Escuridão do Mundo Inferior', 'Geração de um campo de sombras que cega e confunde todos os adversários.', 6, 21000);

USE Poderes;
DELETE FROM Card WHERE idCard IS NOT NULL;

DESCRIBE Card;
