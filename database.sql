CREATE DATABASE seligaaicavg;

CREATE TABLE aluno(
  /*MATRICULA e CPF Chave primária (CP)*/
  matricula VARCHAR(255) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cpf VARCHAR(255) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255),
  email VARCHAR(255),
  celular VARCHAR(255),
  senha VARCHAR(255),
  curso VARCHAR(255),
  /*Pesquisar como armazenar foto*/
  foto VARCHAR(255),
  /*Status do cadastro, quem vai alterar é a coordenação de registros acadêmicos*/
  statuscad boolean
);

CREATE TABLE ouvidoria(
    id VARCHAR(255) PRIMARY KEY AUTO_INCREMENT,
    mensagem VARCHAR(255),
    /*Pesquisar como armazenar data e hora no sql
    ->data e hora*/
    horario datetime,
    /*Status que diz se a mensagem foi recebida ou enviada*/
    statusmsg status 
);

CREATE TABLE horario(
    cod_disciplina VARCHAR(11) PRIMARY KEY AUTO_INCREMENT,
    /*TURMA = 129,229,339...*/
    turma VARCHAR(11),
    curso VARCHAR(255),
    /*1º Primeiro*/
    semestre VARCHAR(11)
);

CREATE TABLE chat(
    /*id seria o id da mensagem no chat, cada mensagem gera um id de Sessão!*/
    id VARCHAR(255) PRIMARY KEY AUTO_INCREMENT,
    mensagem VARCHAR(255),
    nome_aluno VARCHAR(255),
    /*data e hora*/
    horario datetime
);

CREATE TABLE servidor(
    /*CHECAR TAMANHO DE CARACTERES PRO SIAPE PARA ECONOMIZAR ESPAÇO*/
    siape VARCHAR(255) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    email VARCHAR(255),
    celular VARCHAR(255),
    senha VARCHAR(255),
    doscente boolean,
    tecadm boolean

);
/*INSERT NA TABELA aluno*/
INSERT INTO aluno (matricula,cpf,nome,email,celular,senha,curso,foto) VALUES ("","","","","","","","");

/*INSERT NA TABELA ouvidoria*/
INSERT INTO ouvidora () VALUES ("","","","","","","","");

/*INSERT NA TABELA horario*/
INSERT INTO horario () VALUES ("","","","","","","","");

/*INSERT NA TABELA chat*/
INSERT INTO chat () VALUES ("","","","","","","","");

/*INSERT NA TABELA servidor*/
INSERT INTO servidor () VALUES ("","","","","","","","");