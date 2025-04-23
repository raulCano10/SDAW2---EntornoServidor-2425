-- 1. Creación de la base de datos
DROP DATABASE IF EXISTS Agenda;
CREATE DATABASE Agenda;
USE Agenda;

-- 2. Creación de la tabla
CREATE TABLE contactos (
    id_contacto INT(5) PRIMARY KEY AUTO_INCREMENT,
    nombre      VARCHAR(100),
    email       VARCHAR(100),
    tlf         VARCHAR(15) UNIQUE NOT NULL,
    direccion   TEXT
);

-- 3. Insertar datos
INSERT INTO contactos (nombre, email, tlf, direccion) VALUES
('Ana Gómez', 'ana.gomez@example.com', '612345678', 'Calle Mayor 10, Madrid'),
('Luis Pérez', 'luis.perez@example.com', '623456789', 'Avenida del Sol 25, Valencia'),
('María López', 'maria.lopez@example.com', '634567890', 'Calle Luna 18, Sevilla'),
('Carlos Ruiz', 'carlos.ruiz@example.com', '645678901', 'Paseo del Prado 5, Barcelona'),
('Lucía Martínez', 'lucia.martinez@example.com', '656789012', 'Plaza España 3, Zaragoza');
