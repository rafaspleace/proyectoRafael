DROP SCHEMA IF EXISTS `registro`;

CREATE SCHEMA IF NOT EXISTS  `registro` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `registro`;

CREATE TABLE usuarios (
    
    `usuario` text COLLATE utf8mb4_spanish2_ci NOT NULL,
    `nombre_usuario` text COLLATE utf8mb4_spanish2_ci NOT NULL,
    `telefono` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
    `correo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
    `contraseña` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
    `Fecha_Registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `Permisos` int(11) NOT NULL DEFAULT '1',
    `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
  

INSERT INTO usuarios  
VALUES ('rafaspleace', 'Rafael Sanchez Madrigal', '5516258640', 'tagererarft@gmail.com', '250802', 1);

INSERT INTO usuarios  
VALUES ('nuevo_usuario', 'Nuevo Usuario', '123456789', 'nuevo_usuario@example.com', 'password123', 1);