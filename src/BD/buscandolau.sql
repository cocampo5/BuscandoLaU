-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2014 a las 06:35:00
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `buscandolau`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregrado`
--

CREATE TABLE IF NOT EXISTS `pregrado` (
`idpregrado` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `costo` decimal(8,0) NOT NULL,
  `duracion` int(2) NOT NULL,
  `titulo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `iduniversidad` int(100) NOT NULL,
  `pensum` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `pregrado`
--

INSERT INTO `pregrado` (`idpregrado`, `nombre`, `costo`, `duracion`, `titulo`, `iduniversidad`, `pensum`) VALUES
(1, 'Mercadeo', '6978838', 9, 'Profesional en Mercadeo\r\n', 1, ''),
(2, 'Sicología', '6978838', 9, 'Profesional en Psicología\r\n', 1, ''),
(3, 'Administrador de Negocios', '6978838', 9, 'Administrador de Negocios\r\n', 1, ''),
(4, 'Diseño Grafico', '6488000', 10, 'Diseñador Gráfico\r\n', 2, ''),
(5, 'Arquitectura', '6575000', 10, 'Arquitecto\r\n', 2, ''),
(6, 'Diseño Industrial', '6488000', 10, 'Diseñador Industrial\r\n', 2, ''),
(7, 'Ingeniería Informatica', '1950000', 10, 'Ingeniero Informático\r\n', 3, ''),
(8, 'Derecho', '1950000', 10, 'Abogado', 3, ''),
(9, 'Ingeniería Industrial', '1950000', 10, 'Ingeniero Industrial\r\n', 3, ''),
(10, 'Odontología', '8013000', 10, 'Odontólogo\r\n', 4, ''),
(11, 'Biologia', '8013000', 10, 'Biologo\r\n', 4, ''),
(12, 'Medicina', '11234000', 12, 'Médico y Cirujano\r\n', 4, ''),
(13, 'Ingeniería Administrativa', '6540000', 10, 'Ingeniero Administrativo\r\n', 5, ''),
(14, 'Ingeniería Ambiental', '6540000', 10, 'Ingeniero Ambiental\r\n', 5, ''),
(15, 'Ingeniería Civil', '6540000', 10, 'Ingeniero Civil\r\n', 5, ''),
(16, 'Administración de Empresas', '0', 10, 'Administrador de empresas\r\n', 6, ''),
(17, 'Antropología', '0', 10, 'Antropologo\r\n', 6, ''),
(18, 'Ingeniería Agropecuaria', '0', 10, 'Ingeniero Agropecuario', 6, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion_pre`
--

CREATE TABLE IF NOT EXISTS `suscripcion_pre` (
  `idpregrado` int(100) DEFAULT NULL,
  `idusuario` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion_u`
--

CREATE TABLE IF NOT EXISTS `suscripcion_u` (
  `iduniversidad` int(100) DEFAULT NULL,
  `idusuario` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidad`
--

CREATE TABLE IF NOT EXISTS `universidad` (
`iduniversidad` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` tinyint(1) DEFAULT NULL,
  `web` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`iduniversidad`, `nombre`, `ubicacion`, `descripcion`, `tipo`, `web`) VALUES
(1, 'Universidad EAFIT', ' Carrera 49 # 7 sur  50.', 'Una institucion privada con 21 pregrados mucha facilidad para obtener empleo al terminar tu carrera, la cuarta mejor institución privada del país.', NULL, 'http://www.eafit.edu.co'),
(2, 'Universidad Pontificia Bolivariana (UPB) ', 'Circular 1 No. 70-01\r\n', 'La UPB seguramente tiene una carrera disponible para que la estudies, y una gran variedad de deducciones al costo de tus estudios disponibles.', NULL, 'http://www.upb.edu.co/'),
(3, 'Universidad Autónoma Latinoamericana (UNAULA)', 'Carrera 55A N° 49-5\r\n', 'Un lugar para estudiar muy respetado, un graduado de allí es muy admirado por el reconocimiento que tienen varios de sus pregrados y su precio es muy bueno para ser una Universidad Privada.', NULL, 'http://www.unaula.edu.co/'),
(4, 'Universidad CES', 'Calle 10 A No. 22 - 04 ', 'La excelencia de las Ciencias de la Salud y aprovechando esto cada nueva carrera que saca sigue con la misma calidad y esta ampliando su numero de pregrados.', NULL, 'http://www.ces.edu.co/'),
(5, 'Escuela de Ingeniería de Antioquia (EIA)', 'Km 2 + 200 Vía al Aeropuerto José María Córdova Envigado.', 'La Escuela de Ingenieros tiene una gran historia, la mayoría de grandes empresarios  de la región relacionados con el area de la ingeniería pertenece al gremio de egresados de la EIA y la Universidad aunque exigente en su nivel academico, muestra que esto es necesario para sacar profesionales prestigiosos.', NULL, 'http://www.eia.edu.co/'),
(6, 'Universidad Nacional', 'Calle 59A No 63 - 20\r\n', 'La Institución de educación Publica por tradición del país, con una gran diversidad cultural, y amplia historia, y un ambiente que te hace sentir cada día una experiencia Universitaria completa, la Universidad Nacional de Colombia, sede Medellín es el centro de la ciencia, el arte, y las humanidades, muchas son las actividades extracurriculares para que no solo estudies sino vivas tu profesión..', NULL, 'http://www.medellin.unal.edu.co/'),
(7, 'Universidad de Antioquia', ' calle 67 No. 53 - 108 \r\n', 'El Alma Mater de la ciudad,la cantidad y diversidad de gente que se ve todos los dias, que al fin y al cabo a la hora de salir a trabajar es muy util. Los profesores de la Univesidad de Antioquia son eminencias academicas.', NULL, 'http://www.udea.edu.co/'),
(8, 'Universidad de Medellin', 'Carrera 87 N° 30 - 65 Medellín.', 'La Universidad de Medellin es privilegiada porque tiene muchas cosas que la hacen atractiva, su privilegiada ubicación, ser pionera en muchos campos y el hecho de cobrar dependiendo de tu situación economico-social, eso quiere decir desde que el momento en que te matriculas la Universidad de Medellín te trata de manera unica y personalizada, la Universidad esta diseñada para formarte a ti de manera única\r\n', NULL, 'http://www.udem.edu.co/'),
(9, 'ITM', 'Calle 73 No 76A \r\n', 'El Instituto Tecnologico Metropolitano ofrece un modo de estudio interesante para aquellos que no saben si quieren dedicar los proximos cinco años de su vida, para tener un titulo como profesional, la mayoría de sus pregrados permiten primero hacer un estudio tecnico o tecnologico, y luego si te parece lo mas adecuado estudiar un poco más para tener tu titulo profesional.', NULL, 'http://www.itm.edu.co/'),
(10, 'Politécnico Jaime Isaza Cadavid', 'Carrera 48No7-151\r\n', 'El Politecnico Jaime Isaza Cadavid, hace parte del grupo de Universidades con una gran calidad, y que las empresas tienen como buena referencia, con un enfoque hacia lo practico, y a enseñar lo que es la vida profesional.', NULL, 'http://www.politecnicojic.edu.co/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pregrado`
--
ALTER TABLE `pregrado`
 ADD PRIMARY KEY (`idpregrado`), ADD KEY `iduniversidad` (`iduniversidad`);

--
-- Indices de la tabla `suscripcion_pre`
--
ALTER TABLE `suscripcion_pre`
 ADD KEY `idpregrado` (`idpregrado`), ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `suscripcion_u`
--
ALTER TABLE `suscripcion_u`
 ADD KEY `iduniversidad` (`iduniversidad`), ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `universidad`
--
ALTER TABLE `universidad`
 ADD PRIMARY KEY (`iduniversidad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pregrado`
--
ALTER TABLE `pregrado`
MODIFY `idpregrado` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `universidad`
--
ALTER TABLE `universidad`
MODIFY `iduniversidad` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(100) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pregrado`
--
ALTER TABLE `pregrado`
ADD CONSTRAINT `pregrado_ibfk_1` FOREIGN KEY (`iduniversidad`) REFERENCES `universidad` (`iduniversidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `suscripcion_pre`
--
ALTER TABLE `suscripcion_pre`
ADD CONSTRAINT `suscripcion_pre_ibfk_1` FOREIGN KEY (`idpregrado`) REFERENCES `pregrado` (`idpregrado`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `suscripcion_pre_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `suscripcion_u`
--
ALTER TABLE `suscripcion_u`
ADD CONSTRAINT `suscripcion_u_ibfk_1` FOREIGN KEY (`iduniversidad`) REFERENCES `universidad` (`iduniversidad`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `suscripcion_u_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
