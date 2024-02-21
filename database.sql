CREATE DATABASE kider_db

use kider_db;

CREATE TABLE CONTA (
    Login VARCHAR(255),
    Senha VARCHAR(255),
    NomeCompleto VARCHAR(255),
    Email VARCHAR(255),
    Telefone VARCHAR(15)
);

CREATE TABLE NEWSLETTER (
    Email VARCHAR(255)
);

CREATE TABLE PERGUNTA (
    NomePais VARCHAR(255),
    NomeCrianca VARCHAR(255),
    Email VARCHAR(255),
    Idade INT,
    Mensagem VARCHAR(255)
);

CREATE TABLE PROFESSOR (
    Nome VARCHAR(255),
    Formacao VARCHAR(255),
    TempoExperiencia INT,
    EscolaAnterior VARCHAR(255),
    TurnoDisponivel VARCHAR(50)
);
