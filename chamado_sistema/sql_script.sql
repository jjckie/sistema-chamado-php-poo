
CREATE DATABASE chamado_db;
USE chamado_db;

CREATE TABLE chamados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo_cliente VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'Aguardando',
    prioridade VARCHAR(20) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    data_abertura DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
