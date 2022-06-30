-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla primero.estudiantes
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_nombres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `est_apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `est_cedula` varchar(50) CHARACTER SET utf8 NOT NULL,
  `est_ciudad` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `est_edad` int(11) DEFAULT NULL,
  `est_genero` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla primero.estudiantes: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` (`est_id`, `est_nombres`, `est_apellidos`, `est_cedula`, `est_ciudad`, `est_edad`, `est_genero`) VALUES
	(1, 'ARTURO', 'PEREZ', '324234I', 'erew', 34, 'MASCULINO'),
	(4, 'FRANCISCO', 'LÃ“PEZ', '324234I', 'erew', 34, 'MASCULINO');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
