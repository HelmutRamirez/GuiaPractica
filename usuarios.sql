-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 16:02:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `N_DOCUMENTO` int(15) DEFAULT NULL,
  `NOMBRE` varchar(15) DEFAULT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`N_DOCUMENTO`, `NOMBRE`, `APELLIDO`) VALUES
(76307332, 'WILLIAM', 'ABELLA'),
(10547808, 'JOSE', 'ACOSTA'),
(10516932, 'Mario', 'ACOSTA'),
(34532270, 'MARIA', 'ACOSTA'),
(76323459, 'GUEFRY', 'AGREDO'),
(34531725, 'XIMENA', 'AGREDO'),
(76305729, 'GUILLERMO', 'AGREDO'),
(42870562, 'LOPEZ', 'AGUDELO'),
(75076432, 'JUAN', 'AGUIRRE'),
(10537683, 'NOE', 'ALBAN'),
(76288230, 'DIEGO', 'ALEGRIA'),
(76317155, 'CARLOS', 'ALEGRIA'),
(10536636, 'LUIS', 'ALVAREZ'),
(41733718, 'MARIA', 'ALVAREZ'),
(4613691, 'LUIS', 'ALVEAR'),
(34538776, 'MARY', 'ALZATE'),
(10545657, 'LUIS', 'ANAYA'),
(10539634, 'CARLOS', 'ANAYA'),
(34528262, 'VALENCIA', 'ANDRADE'),
(2899818, 'GERARDO', 'ANDRADE'),
(34540977, 'ESPERANZA', 'ANDRADE'),
(79459964, 'CAMILO', 'ANDRADE'),
(43040911, 'IRMA', 'ARANGO'),
(79390100, 'MILTON', 'ARANGO'),
(10256615, 'CARLOS', 'ARBOLEDA'),
(31223228, 'LUCIA', 'ARCINIEGAS'),
(4773058, 'VICTOR', 'ARCOS'),
(25559177, 'CHILITO', 'ARCOS'),
(34542749, 'YOLANDA', 'ARCOS'),
(34530532, 'ESCOBAR', 'ARENAS'),
(14877481, 'HUGO', 'ARENAS'),
(25611423, 'MARTHA', 'AREVALO'),
(34551673, 'LUZ', 'ARIAS'),
(31266482, '', 'ARISTIZABAL'),
(10544662, 'JOSE', 'ARTEAGA'),
(34562400, 'ELIZABET', 'ASTAIZA'),
(10521362, 'ANTONIO', 'ASTAIZA'),
(10517940, '', 'ASTUDILLO'),
(66923034, 'MARIA', 'ASTUDILLO'),
(76307516, 'EDGAR', 'ASTUDILLO'),
(10542190, 'FABIO', 'ASTUDILLO'),
(34562778, 'MARIA', 'ASTUDILLO'),
(10535084, 'FERNANDO', 'ASTUDILLO'),
(3014070, 'SILVIO', 'AVENDANO'),
(34544560, 'GLORIA', 'AVILA'),
(10529631, 'HUGO', 'AYALA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` char(10) NOT NULL,
  `seccion` varchar(30) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `origen` varchar(30) NOT NULL,
  `importado` varchar(20) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `seccion`, `producto`, `origen`, `importado`, `precio`) VALUES
('ar01', 'CERÁMICA', 'Tubos', 'China', 'VERDADERO', 1400),
('ar02', 'CERÁMICA', 'Plato Decorativo', 'China', 'FALSO', 4500),
('ar03', 'CERÁMICA', 'Juego de te', 'China', 'FALSO', 36000),
('ar04', 'CERÁMICA', 'Cenicero', 'Japón', 'VERDADERO', 16000),
('ar05', 'CERÁMICA', 'Maceta', 'España', 'VERDADERO', 24000),
('ar06', 'CERÁMICA', 'Jarra china', 'China', 'VERDADERO', 106000),
('ar07', 'CONFECCIÓN', 'Tarje Caballero', 'Italia', 'FALSO', 800000),
('ar08', 'CONFECCIÓN', 'Pantalón Señora', 'Marruecos', 'VERDADERO', 138000),
('ar09', 'CONFECCIÓN', 'Camisa Caballero', 'España', 'VERDADERO', 57000),
('ar10', 'CONFECCIÓN', 'Blusa Sra.', 'China', 'VERDADERO', 62999),
('ar11', 'CONFECCIÓN', 'Cazadora piel', 'Italia', 'VERDADERO', 436000),
('ar12', 'CONFECCIÓN', 'Abrigo Caballero', 'Italia', 'VERDADERO', 203000),
('ar13', 'CONFECCIÓN', 'Abrigo Sra', 'Marruecos', 'VERDADERO', 300000),
('ar14', 'CONFECCIÓN', 'Cinturón de piel', 'España', 'VERDADERO', 40000),
('ar15', 'DEPORTE', 'Raqueta Tenis', 'Usa', 'VERDADERO', 78000),
('ar16', 'DEPORTE', 'Chándal', 'Usa', 'FALSO', 193000),
('ar17', 'DEPORTE', 'Tren Eléctrico', 'Japón', 'FALSO', 125400),
('ar18', 'DEPORTE', 'Pistola Olímpica', 'Suecia', 'VERDADERO', 39000),
('ar19', 'DEPORTE', 'Monopatín', 'Marruecos', 'VERDADERO', 93000),
('ar20', 'DEPORTE', 'Balón baloncesto', 'Japón', 'VERDADERO', 63000),
('ar21', 'DEPORTE', 'Balón Fútbol', 'España', 'VERDADERO', 37000),
('ar22', 'DEPORTE', 'Sudadera', 'Usa', 'VERDADERO', 366000),
('ar23', 'DEPORTE', 'Bicicleta de montaña', 'Usa', 'VERDADERO', 470000),
('ar24', 'FERRETERÍA', 'Destornillador', 'España', 'FALSO', 6000),
('ar25', 'FERRETERÍA', 'Serrucho', 'Francia', 'FALSO', 25000),
('ar26', 'FERRETERÍA', 'Llave Inglesa', 'Usa', 'VERDADERO', 20000),
('ar27', 'FERRETERÍA', 'Alicates', 'Italia', 'VERDADERO', 6000),
('ar28', 'FERRETERÍA', 'Martillo', 'España', 'VERDADERO', 10000),
('ar29', 'FERRETERÍA', 'Destornillador', 'Francia', 'VERDADERO', 8000),
('ar30', 'FERRETERÍA', 'Lima Grande', 'España', 'VERDADERO', 18000),
('ar31', 'FERRETERÍA', 'Juego de brocas', 'Taiwán', 'FALSO', 13000),
('ar32', 'JUGUETERÍA', 'Coche Teledirigido', 'Marruecos', 'FALSO', 133000),
('ar33', 'JUGUETERÍA', 'Correpasillos', 'Japón', 'VERDADERO', 86000),
('ar34', 'JUGUETERÍA', 'Consola Video', 'Usa', 'VERDADERO', 3690000),
('ar35', 'JUGUETERÍA', 'Muñeca Andadora', 'España', 'VERDADERO', 88000),
('ar36', 'JUGUETERÍA', 'Fuerte de soldados', 'Japón', 'FALSO', 120000),
('ar37', 'JUGUETERÍA', 'Pistola con sonidos', 'España', 'FALSO', 48000),
('ar38', 'JUGUETERÍA', 'Pie de lámpara', 'Turquía', 'VERDADERO', 33000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
