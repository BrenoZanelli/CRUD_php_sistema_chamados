CREATE DATABASE sistema_chamados;
USE sistema_chamados;

CREATE TABLE chamados(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    prioridade ENUM('baixa', 'media', 'alta')DEFAULT 'baixa',
    status ENUM('aberto', 'andamento', 'fechado')DEFAULT 'aberto',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);