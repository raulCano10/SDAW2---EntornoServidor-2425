-- Script completo de Base de Datos: Sistema de Gestión de Negocios de la Familia Corleone

-- Base de Datos: cosa_nostra
-- Tecnologías: MySQL

-- 1. Creación de la Base de Datos
DROP DATABASE IF EXISTS cosa_nostra;
CREATE DATABASE cosa_nostra;
USE cosa_nostra;

-- 2. Creación de Tablas

-- Tabla miembros
CREATE TABLE miembros (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
rol VARCHAR(50) NOT NULL,
lealtad INT NOT NULL CHECK (lealtad BETWEEN 0 AND 100)
);

-- Tabla operaciones
CREATE TABLE operaciones (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
tipo VARCHAR(50) NOT NULL,
ubicacion VARCHAR(100) NOT NULL,
valor_estimado DECIMAL(10,2) NOT NULL,
riesgo DECIMAL(3,2) DEFAULT 0.00
);

-- Tabla asignaciones
CREATE TABLE asignaciones (
id INT AUTO_INCREMENT PRIMARY KEY,
id_miembro INT NOT NULL,
id_operacion INT NOT NULL,
fecha DATE NOT NULL,
FOREIGN KEY (id_miembro) REFERENCES miembros(id) ON DELETE CASCADE,
FOREIGN KEY (id_operacion) REFERENCES operaciones(id) ON DELETE CASCADE
);

-- 3. Inserciones de Datos Iniciales

-- Inserciones en miembros
INSERT INTO miembros (nombre, rol, lealtad) VALUES
('Vito Corleone', 'Don', 100),
('Michael Corleone', 'Consigliere', 95),
('Sonny Corleone', 'Caporegime', 80),
('Tom Hagen', 'Abogado', 90),
('Fredo Corleone', 'Soldato', 60),
('Luca Brasi', 'Soldato', 85),
('Peter Clemenza', 'Caporegime', 78),
('Salvatore Tessio', 'Caporegime', 76),
('Rocco Lampone', 'Soldato', 70),
('Frank Pentangeli', 'Caporegime', 75),
('Al Neri', 'Soldato', 88),
('Willie Cicci', 'Soldato', 65),
('Johnny Fontane', 'Asociado', 50),
('Carlo Rizzi', 'Traidor', 20);

-- Inserciones en operaciones
INSERT INTO operaciones (nombre, tipo, ubicacion, valor_estimado, riesgo) VALUES
('Control de Casinos', 'Finanzas', 'Las Vegas', 500000.00, 0.15),
('Tráfico de Bebidas', 'Contrabando', 'Nueva York', 200000.00, 0.10),
('Protección de Negocios', 'Seguridad', 'Chicago', 150000.00, 0.05),
('Expansión Internacional', 'Negocios', 'Cuba', 300000.00, 0.20),
('Importación de Aceite de Oliva', 'Comercio', 'Sicilia', 100000.00, 0.03),
('Control de Puertos', 'Logística', 'Nueva Orleans', 250000.00, 0.12),
('Lavado de Dinero', 'Finanzas', 'Miami', 40000.00, 0.18),
('Producción de Alcohol Ilegal', 'Contrabando', 'Kentucky', 180000.00, 0.08),
('Extorsión de Comerciantes', 'Seguridad', 'Los Ángeles', 220000.00, 0.14),
('Tráfico de Armas', 'Contrabando', 'Detroit', 350000.00, 0.25),
('Contratos de Construcción', 'Negocios', 'Nueva York', 450000.00, 0.17),
('Apuestas Ilegales', 'Juegos', 'Atlantic City', 275000.00, 0.12),
('Control de Estibadores', 'Logística', 'San Francisco', 320000.00, 0.10);


-- Inserciones en asignaciones
INSERT INTO asignaciones (id_miembro, id_operacion, fecha) VALUES
(1, 1, '2025-02-15'),
(2, 4, '2025-02-16'),
(3, 2, '2025-02-17'),
(4, 3, '2025-02-18'),
(5, 5, '2025-02-19'),
(6, 1, '2025-02-20');