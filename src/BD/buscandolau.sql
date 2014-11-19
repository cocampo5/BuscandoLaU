-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2014 a las 19:15:37
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pregrado`
--

INSERT INTO `pregrado` (`idpregrado`, `nombre`, `costo`, `duracion`, `titulo`, `iduniversidad`, `pensum`) VALUES
(1, 'Mercadeo', '6978838', 9, 'Profesional en Mercadeo\r\n', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregrados`
--

CREATE TABLE IF NOT EXISTS `pregrados` (
  `idpregrado` int(2) DEFAULT NULL,
  `nombre` varchar(44) DEFAULT NULL,
  `precio` int(7) DEFAULT NULL,
  `iduniversidad` int(1) DEFAULT NULL,
  `titulo` varchar(32) DEFAULT NULL,
  `ubicación` varchar(28) DEFAULT NULL,
  `disciplina` varchar(20) DEFAULT NULL,
  `duracion` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregrados`
--

INSERT INTO `pregrados` (`idpregrado`, `nombre`, `precio`, `iduniversidad`, `titulo`, `ubicación`, `disciplina`, `duracion`) VALUES
(1, ' Mercadeo', 6937838, 1, 'Profesional en Mercadeo', '620122--75.57843000000003', 'Economía', 10),
(2, ' Psicología ', 6937838, 1, 'Profesional en Psicología', '620122--75.57843000000003', 'Humanidades', 10),
(3, ' Administración de Negocios ', 6937838, 1, 'Administrador de Negocios', '620122--75.57843000000003', 'Economía', 10),
(4, ' Negocios Internacionales', 6937838, 1, 'Negociador Internacional', '620122--75.57843000000003', 'Economía', 10),
(5, ' Contaduría Pública ', 6937838, 1, 'Contador Público', '620122--75.57843000000003', 'Economía', 9),
(6, ' Geología ', 6937838, 1, 'Geólogo', '620122--75.57843000000003', 'Ingeniería', 10),
(7, ' Ingeniería Civil', 6937838, 1, 'Ingeniero Civil', '620122--75.57843000000003', 'Ingeniería', 10),
(8, ' Ingeniería de Diseño de Producto ', 6937838, 1, 'Ingeniero de Diseño de Producto', '620122--75.57843000000003', 'Ingeniería', 10),
(9, ' Ingeniería Mecánica ', 6937838, 1, 'Ingeniero Mecanico', '620122--75.57843000000003', 'Ingeniería', 10),
(10, ' Ingeniería de Procesos', 6937838, 1, 'Ingeniero de Procesos', '620122--75.57843000000003', 'Ingeniería', 10),
(11, ' Comunicación Social ', 6937838, 1, 'Comunicador Social', '620122--75.57843000000003', 'Humanidades', 10),
(12, ' Ciencias Políticas', 6937838, 1, 'Politologo', '620122--75.57843000000003', 'Ciencias Sociales', 10),
(13, ' Ingeniería de Producción', 6937838, 1, 'Ingeniero de Produccion', '620122--75.57843000000003', 'Ingeniería', 10),
(14, ' Ingeniería de Sistemas ', 6937838, 1, 'Ingeniera de Sistemas', '620122--75.57843000000003', 'Ingeniería', 9),
(15, ' Ingeniería Física ', 6937838, 1, 'Ingeniero Fisico', '620122--75.57843000000003', 'Ingeniería', 9),
(16, ' Biología', 6937838, 1, 'Biologo', '620122--75.57843000000003', 'Ciencias', 10),
(17, ' Ingeniería Matemática ', 6937838, 1, 'Ingeniero Matemático', '620122--75.57843000000003', 'Ingeniería', 9),
(18, ' Música ', 6937838, 1, 'Profesional en Música', '620122--75.57843000000003', 'Artes', 10),
(19, 'Derecho', 6937838, 1, 'Abogado', '620122--75.57843000000003', 'Ciencias Sociales', 10),
(20, 'Ingeniería Administrativa', 6540000, 5, 'Ingeniero Administrativo', '61573718- -75.51675139999998', 'Ingeniería', 10),
(21, 'Ingeniería Ambiental', 6540000, 5, 'Ingeniero Ambiental', '61573718- -75.51675139999998', 'Ingeniería', 10),
(22, 'Biología - Convenio EIA - CES', 6900000, 5, 'Biologo', '61573718- -75.51675139999998', 'Ciencias', 10),
(23, 'Ingeniería Biomédica - Convenio EIA - CES', 6900000, 5, 'Ingeniero Biomedica', '61573718- -75.51675139999998', 'Ingeniería', 10),
(24, 'Ingeniería Civil', 6540000, 5, 'Ingeniero Civil', '61573718- -75.51675139999998', 'Ingeniería', 10),
(25, 'Ingeniería Financiera ', 6540000, 5, 'Ingeniero Finanaciero', '61573718- -75.51675139999998', 'Ingeniería', 10),
(26, 'Ingeniería Geológica', 6540000, 5, 'Ingeniero Geologica', '61573718- -75.51675139999998', 'Ingeniería', 10),
(27, 'Ingeniería Industrial', 6540000, 5, 'Ingeniero Industrial', '61573718- -75.51675139999998', 'Ingeniería', 10),
(28, 'Ingeniería de Sistemas y Computación', 6540000, 5, 'Ingeniero de Sistemas', '61573718- -75.51675139999998', 'Ingeniería', 10),
(29, 'Ingeniería Mecánica', 6540000, 5, 'Ingeniero Mecanico', '61573718- -75.51675139999998', 'Ingeniería', 10),
(30, 'Ingeniería Mecatrónica', 6540000, 5, 'Ingeniero Mecatronico', '61573718- -75.51675139999998', 'Ingeniería', 10),
(31, 'Derecho', 2450000, 7, 'Abogado', '6250782600000000-75.5682979', 'Ciencias Sociales', 10),
(32, 'Medicina', 8000000, 7, 'Médico general', '6250782600000000-75.5682980', 'Ciencias de la Salud', 10),
(33, 'Medicina Veterinaria', 4200000, 7, 'Medico Veterinario', '6250782600000000-75.5682981', 'Ciencias de la Salud', 10),
(34, 'Ingeniería de Sistemas', 2160000, 7, 'Ingeniero de Sistemas', '6250782600000000-75.5682982', 'Ingeniería', 10),
(35, 'Ingeniería Industrial', 1802300, 7, 'Ingeniero Industrial', '6250782600000000-75.5682983', 'Ingeniería', 10),
(36, 'Administración de Empresas', 2160000, 7, 'Administrador de Empresas', '6250782600000000-75.5682984', 'Economía', 10),
(37, 'Contaduría Publica', 2160000, 7, 'Contador Publica', '6250782600000000-75.5682985', 'Economía', 8);

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
(7, 'Corporacion universitaria Remington Medellin', ' calle 67 No. 53 - 108 \r\n', 'El Alma Mater de la ciudad,la cantidad y diversidad de gente que se ve todos los dias, que al fin y al cabo a la hora de salir a trabajar es muy util. Los profesores de la Univesidad de Antioquia son eminencias academicas.', NULL, 'http://www.udea.edu.co/'),
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
MODIFY `idpregrado` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
