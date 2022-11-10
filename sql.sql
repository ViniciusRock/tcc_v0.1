CREATE DATABASE seligaai;

CREATE TABLE aluno(
    matricula VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    celular VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    curso VARCHAR(255) NOT NULL,
    -- Aluno ou Professor
    tipo VARCHAR(255) NOT NULL
);

CREATE TABLE chat(
    id INT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    mensagem text NOT NULL
);