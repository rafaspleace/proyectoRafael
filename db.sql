DROP SCHEMA IF EXISTS `registro`;

CREATE SCHEMA IF NOT EXISTS  `registro` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `registro`;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    nombre_completo VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);

INSERT INTO `usuarios` VALUES ('rafaspleace','Rafael Sanchez Madrigal','5516258640','tagererarft@gmail.com','250802');