-- By Gaboh - 20250819
-- Database: `prestamvc`

USE prestamvc;

INSERT INTO roles VALUES
(null, 'Administrador'),
(null, 'Usuario'),
(null, 'Secretaria');

INSERT INTO generos VALUES
(null, 'Hombre'),
(null, 'Mujer'),
(null, 'Otro');

INSERT INTO usuarios VALUES
('761', 'Juan Peréz', 'juan@uno.com', '1234', '3113', 'Calle 1', 1, 1),
('341', 'María Cuellar', 'maria@uno.com', '1234', '3112', 'Carrera 2', 3, 2),
('762', 'Mario Burbano', 'mario@uno.com', '1234', '3111', 'Calle 2', 2, 1);

INSERT INTO marcas VALUES
(null, 'Dell'),
(null, 'Acer'),
(null, 'HP'),
(null, 'Lenovo'),
(null, 'Asus'),
(null, 'MSI');

INSERT INTO tipos VALUES
(null, 'portatil'),
(null, 'escritorio'),
(null, 'todo en uno'),
(null, 'gamer'),
(null, 'tablet');

INSERT INTO productos VALUES
('EP001', 'Portatil Acer 302', 'Aqui la descripción', 3200000, 12000, 80000, 2, 1),
('T002', 'Lenovo M11', 'Aqui la descripción', 1350000, 8000, 50000, 4, 5),
('ET001', 'Dell Aspire', 'Aqui la descripción', 2700000, 10000, 60000, 1, 3),
('EP002', 'Asus Tuf', 'Aqui la descripción', 3500000, 12000, 80000, 5, 4),
('EE001', 'HP Novo', 'Aqui la descripción', 3430000, 12000, 80000, 3, 2);

INSERT INTO imagenes VALUES
('acer001.png', 'EP001'),
('lenovo001.png', 'T002'),
('hp001.png', 'ET001'),
('asus001.png', 'EP002'),
('hp002.png', 'EE001');
