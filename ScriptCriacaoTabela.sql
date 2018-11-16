CREATE TABLE CONTATO (
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NOME varchar(100),
    EMAIL varchar(100),
    ASSUNTO varchar(100),
    MENSAGEM varchar(8000)
);

CREATE TABLE USUARIO (
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NOME varchar(100),
    CPF varchar(20),
    ENDERECO varchar(100),
    EMAIL varchar(100),
    SENHA varchar(100),
    CIDADE varchar(100),
    ESTADO varchar(100),
    CEP  varchar(15)
);
