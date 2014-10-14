-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2014 a las 22:57:13
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
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `iduniversidad` int(100) NOT NULL,
  `pensum` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pregrado`
--

INSERT INTO `pregrado` (`idpregrado`, `nombre`, `costo`, `duracion`, `descripcion`, `iduniversidad`, `pensum`) VALUES
(1, 'Ingenieria de Sistemas', '6500000', 9, '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4, '');

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
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`iduniversidad`, `nombre`, `ubicacion`, `descripcion`, `tipo`) VALUES
(2, 'Escuela de Ingenieria de Antioquia', 'Km 2 + 200 Via al Aeropuerto Jose Maria Cordova, Envigado', 'La Escuela de Ingeniería de Antioquia es una institución privada, de educación superior, sin fines lucrativos, cuya misión es la formación integral de profesionales de la más alta calidad en sus programas de pregrado y postgrado, el fomento a la investigación aplicada y la interacción con el entorno, con lo cual procura el desarrollo tecnológico, económico, cultural y social de la nación.\r\n\r\nComo comunidad académica propicia la visión global, la creatividad, el trabajo en equipo, el mejoramiento de la calidad de vida y el respeto por el medio natural, atendiendo los principios de la ética y la justicia.', 1),
(3, 'Universidad EAFIT', 'Carrera 49 # 7 Sur - 50, Medellin', 'La Universidad EAFIT tiene la Misión de contribuir al progreso social, económico, científico y cultural del país, mediante el desarrollo de programas de pregrado y de posgrado -en un ambiente de pluralismo ideológico y de excelencia académica- para la formación de personas competentes internacionalmente; y con la realización de procesos de investigación científica y aplicada, en interacción permanente con los sectores empresarial, gubernamental y académico.', 1),
(4, 'Universidad de Antioquia', 'Calle 67 Numero 53 - 108, Medellin', 'Somos una universidad pública que en ejercicio pleno de su autonomía se compromete con la formación integral del talento humano, con criterios de excelencia, la generación y difusión del conocimiento en los diversos campos del saber y la preservación y revitalización del patrimonio cultural.', 0),
(5, 'Corporacion Universitaria Remington', 'Calle 51 # 51-27, Medellin', 'La Corporación Universitaria Remington es una institución de educación superior privada, profesionalizante, orientada a la docencia, que cumple en términos de alta calidad, con las funciones de docencia, investigación y extensión, con cobertura nacional y proyección internacional de programas académicos en las modalidades presencial, a distancia y virtual, en los diferentes niveles de la educación superior para la formación integral de la persona con competencias profesionales, visión global y valores éticos, morales, políticos, económicos, ambientales y culturales.', 1),
(6, 'Universidad Autonoma Latinoamericana', 'Carrera 55A # 49-51. Medellin', 'UNAULA, desde sus principios fundacionales, como son la autonomía, el cogobierno, el pluralismo, la libre cátedra y la investigación, se compromete con visión global, en la formación integral de la comunidad académica y la difusión del saber, desde la docencia, la proyección y la investigación para contribuir al desarrollo en el contexto nacional e internacional.', 1),
(7, 'Universidad de Medellin', 'Carrera 87 # 30 - 65 Medellin', 'Fundamentada en su lema de Ciencia y Libertad, la Universidad de Medellín tiene como misión la promoción de la cultura y la formación integral de profesionales que contribuyan a la solución de problemas en las áreas de los saberes propios, mediante la docencia, el fomento de la investigación y la interacción con la sociedad.', 1),
(8, 'Universidad CES', 'Calle 10 A No. 22 - 04', 'La Universidad CES es una institución de educación superior que, comprometida con la excelencia, adelanta acciones en docencia, investigación y extensión con el propósito de aportar al desarrollo de la sociedad y a la formación de seres humanos libres, autónomos, éticos, científicos y competentes en un mundo globalizado.', 1);

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
MODIFY `iduniversidad` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
