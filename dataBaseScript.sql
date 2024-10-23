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
(2, "Água"),
(3, "Terra"),
(4, "Vento"),
(5, "Luz"),
(6, "Sombra");

INSERT INTO Card VALUES
(1, "Vendaval Indomável", "Um ataque básico, mas indefensável. Joga um redemoinho enorme na direção do inimigo", 4);

INSERT INTO Card (idcard, titulo, descricao, idtag, nivelpoder) VALUES
(1, 'Domínio das Águas', 'Capacidade de controlar e manipular a água em todas as suas formas.', 2, 15000),
(2, 'Chamas Eternas', 'Manipulação de fogo intenso que pode queimar qualquer coisa.', 1, 20000),
(3, 'Luz Sagrada', 'Liberação de luz purificadora que pode curar e banir as trevas.', 5, 18000),
(4, 'Fúria do Vento', 'Controle sobre tempestades e ventos poderosos que podem devastar.', 4, 17000),
(5, 'Sombra do Assassino', 'Capacidade de se mover nas sombras, tornando-se quase invisível.', 6, 16000),
(6, 'Terra Imbatível', 'Manipulação do solo para criar barreiras e ataques devastadores.', 3, 19000),
(7, 'Mestre das Correntes Aquáticas', 'Controle sobre correntes e marés, podendo afogar inimigos.', 2, 15500),
(8, 'Lança de Fogo', 'Criação de lanças de fogo que podem atravessar qualquer defesa.', 1, 22000),
(9, 'Escudo de Luz', 'Formação de um escudo protetor feito de pura luz.', 5, 17500),
(10, 'Furacão Devastador', 'Invocação de um furacão que destrói tudo em seu caminho.', 4, 16500),
(11, 'Sussurros das Sombras', 'Controle sobre sombras para espionagem e ataque furtivo.', 6, 15000),
(12, 'Tremor da Terra', 'Criação de terremotos que podem desestabilizar o campo de batalha.', 3, 21000),
(13, 'Fluxo Infinito', 'Manipulação da água para criar barreiras e ataques.', 2, 14000),
(14, 'Raio de Fogo', 'Disparo de raios de fogo que queimam instantaneamente.', 1, 23000),
(15, 'Caminho da Luz', 'Capacidade de iluminar trevas e guiar aliados.', 5, 16500),
(16, 'Rugido do Vento', 'Aumento da velocidade e força através da manipulação do vento.', 4, 17500),
(17, 'Teia de Sombra', 'Criação de armadilhas sombrias para capturar inimigos.', 6, 15500),
(18, 'Esculpir a Terra', 'Capacidade de moldar o solo para criar estruturas defensivas.', 3, 19000),
(19, 'Torrente Aquática', 'Lançamento de jatos de água com pressão devastadora.', 2, 14500),
(20, 'Chamas do Inferno', 'Liberação de chamas que consomem tudo em seu caminho.', 1, 24000),
(21, 'Luz da Esperança', 'Emissão de luz que revigora aliados e desanima inimigos.', 5, 16000),
(22, 'Tempestade de Vento Cortante', 'Criação de ventos cortantes que podem ferir gravemente.', 4, 17000),
(23, 'Dança das Sombras', 'Movimentação ágil através das sombras, confundindo inimigos.', 6, 15000),
(24, 'Pilares da Terra', 'Erguimento de pilares de terra para defesa ou ataque.', 3, 20000),
(25, 'Correnteza Mortal', 'Controle de correntes de água para desviar e atacar inimigos.', 2, 15000),
(26, 'Explosão de Fogo', 'Criação de explosões de fogo em área para causar destruição.', 1, 22000),
(27, 'Raio Luminoso', 'Desferir ataques rápidos e poderosos de luz.', 5, 17500),
(28, 'Redemoinho de Vento', 'Criação de redemoinhos que arrastam inimigos.', 4, 16000),
(29, 'Luz da Destruição', 'Emissão de uma luz tão intensa que desintegra o que toca.', 5, 25000),
(30, 'Escuridão Absoluta', 'Criação de um campo de sombras que cega e confunde inimigos.', 6, 20000);

USE Poderes;
INSERT INTO Card VALUES
(18, "Foguinho Poderoso", "Um fogo muito pequeno, mas que explode com a força de cinco bombas atômicas.", 1);

USE Poderes;
DELETE FROM Card WHERE idCard IS NOT NULL;

DESCRIBE Card;
