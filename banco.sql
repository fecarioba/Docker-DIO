CREATE TABLE dados (
    AlunoID int PRIMARY KEY, -- ID único do aluno
    Nome varchar(50) NOT NULL, -- Nome do aluno
    Sobrenome varchar(50) NOT NULL, -- Sobrenome do aluno
    Endereco varchar(150), -- Endereço do aluno
    Cidade varchar(50), -- Cidade onde o aluno reside
    Host varchar(50) NOT NULL UNIQUE, -- Nome do host do aluno
    DataRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data e hora do registro
);