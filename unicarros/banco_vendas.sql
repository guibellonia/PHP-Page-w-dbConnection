CREATE DATABASE IF NOT EXISTS Unicarros;

USE Unicarros;

CREATE TABLE IF NOT EXISTS Carro (
    id_carro INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(50) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

CREATE TABLE IF NOT EXISTS Venda (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    id_carro INT,
    modelo VARCHAR(50),
    nome_cliente VARCHAR(100) NOT NULL,
    data_venda DATE NOT NULL
);

INSERT INTO Carro (modelo, marca, ano, preco) VALUES
('Civic', 'Honda', 2021, 90000.00),
('Corolla', 'Toyota', 2022, 95000.00),
('Model S', 'Tesla', 2023, 350000.00);

INSERT INTO Venda (id_carro, modelo, nome_cliente, data_venda) VALUES
(1, 'Civic', 'João Silva', '2024-08-30'),
(2, 'Corolla', 'Maria Oliveira', '2024-08-29'),
(3, 'Model S', 'Carlos Souza', '2024-08-28');
