/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE DATABASE /*!32312 IF NOT EXISTS*/ `app_contactos` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `app_contactos`;
DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `id_usuario` int(11) NOT NULL,
  `nombre_contacto` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `cantidad` int(11) DEFAULT 0,
  `limite_cantidad` int(11) DEFAULT 15,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_contacto`),
  KEY `fk_usuario_key` (`id_usuario`),
  CONSTRAINT `fk_usuario_key` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `email_usuario` varchar(40) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `tipo_usuario` varchar(20) DEFAULT 'Usuario',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_usuario` (`email_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;


CREATE OR REPLACE VIEW `v_lista_usuarios` AS (select `usuarios`.`id_usuario` AS `id_usuario`,`usuarios`.`email_usuario` AS `email_usuario`,`usuarios`.`nombre_usuario` AS `nombre_usuario`,`usuarios`.`contrasena` AS `contrasena`,`usuarios`.`fecha_creacion` AS `fecha_creacion`,`usuarios`.`tipo_usuario` AS `tipo_usuario` from `usuarios`);

DROP PROCEDURE IF EXISTS sp_ingresar_contacto;
DELIMITER ;;
CREATE PROCEDURE `sp_ingresar_contacto`(in p_id int, IN p_nombre_contacto varchar(30), in p_email varchar(30), in p_telefono varchar(30))
BEGIN
	
    INSERT INTO contactos (id_usuario, nombre_contacto, email, telefono) values (p_id, p_nombre_contacto, p_email, p_telefono);

END;;
DELIMITER ;


DROP PROCEDURE IF EXISTS sp_ingresar_usuario;
DELIMITER ;;
CREATE PROCEDURE `sp_ingresar_usuario`(in p_email_usuario varchar(30), in p_nombre_usuario VARCHAR (30), in p_contrasena VARCHAR (20))
BEGIN

    INSERT INTO usuarios (email_usuario, nombre_usuario, contrasena) 
    VALUES (p_email_usuario, p_nombre_usuario, p_contrasena);

END;;
DELIMITER ;


DROP PROCEDURE IF EXISTS sp_listar_contactos;
DELIMITER ;;
CREATE PROCEDURE `sp_listar_contactos`(in p_id int)
BEGIN
	Select * from contactos where id_usuario = p_id;
END;;
DELIMITER ;


DROP PROCEDURE IF EXISTS sp_obtenerUsuario;
DELIMITER ;;
CREATE PROCEDURE `sp_obtenerUsuario`(IN p_email_usuario varchar(30) , IN p_contrasena varchar(30))
BEGIN
Select * from usuarios 
where email_usuario = p_email_usuario and contrasena = p_contrasena;

END;;
DELIMITER ;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
