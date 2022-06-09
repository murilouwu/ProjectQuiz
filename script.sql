CREATE DATABASE projeto;
USE projeto;

CREATE TABLE user (
cd INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(450),
email VARCHAR(450),
senha VARCHAR(200),
foto VARCHAR(100),
ponto INT,
possicao INT);

CREATE TABLE categoria(
cd INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(405));

CREATE TABLE jogo(
cd INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(450),
id_usuario INT,
id_categoria INT,
foto VARCHAR(100),
FOREIGN KEY (id_usuario) REFERENCES user(cd),
FOREIGN KEY (id_categoria) REFERENCES categoria(cd));

CREATE TABLE pergunta(
cd INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200),
foto VARCHAR(100),
id_jogo INT,
FOREIGN KEY (id_jogo) REFERENCES jogo(cd));

CREATE TABLE alternativa (
cd INT PRIMARY KEY AUTO_INCREMENT,
texto VARCHAR(200),
resposta BOOLEAN,
id_pergunta INT,
FOREIGN KEY (id_pergunta) REFERENCES pergunta(cd));
