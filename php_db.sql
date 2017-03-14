-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2017 a las 07:15:20
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descriptivo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`usuario`, `descriptivo`, `url`) VALUES
('Gilitos', 'Wakatime', 'wakatime.com/dashboard'),
('Gilitos', 'Wakatime', 'wakatime.com/dashboard'),
('Fer', 'youtube', 'youtube.com'),
('Otro', 'youtube', 'https://docs.angularjs.org'),
('jsdhbfhsdbf<shd', 'sdfsfs', 'sdfsdfds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expo`
--

CREATE TABLE `expo` (
  `name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contrase` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `expo`
--

INSERT INTO `expo` (`name`, `apellido`, `contra`, `contrase`, `email`, `telefono`, `genero`) VALUES
('Victor', 'Gil', '123', '123', 'hackeadosssssss@lince.lince', '9611156000', 'Hombre'),
('kevin', 'serrano', '123', '123', 'kevinsl@live.com', '951231231', 'Hombre'),
('Victor', 'Gil', '123', '123', 'vic@gmail.com', '9611156000', 'Hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `user` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`user`, `contra`) VALUES
('nano', '1234'),
('', 'waka'),
('kevin', '69'),
('paulina', 'qwerty'),
('otro', 'wey'),
('pedro', 'torta'),
('..', '.'),
('Paulina210914', '#accio'),
('arreolas', 'kkkk'),
('', ''),
('neto', '123'),
('Esteban', '1234'),
('admin', '123456789'),
('lezmin', '12'),
('jhovany', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `usuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`usuario`, `titulo`, `texto`) VALUES
('arreolas', 'A', 'A'),
('Esteban', 'ask', 'ashhdknasdasda'),
('nano', 'Cuentas', 'Hola gg yzy'),
('arreolas', 'Esto ya quedo terminado', 'Alegria es saber que ya acabe, a cenar cuando amanece'),
('lezmin', 'hola', 'sa'),
('Esteban', 'Hola1', 'wea loca :v'),
('jhovany', 'holajajaja', 'jajajaj'),
('lesli', 'les', 'holaa mundo'),
('lesli', 'lesli', 'hola mundo'),
('neto', 'notita2', 'wea'),
('Paulina210914', 'notita2121', 'hola x4'),
('arreolas', 'primera', 'Hola yzy la wea'),
('arreolas', 'Probando', 'Esta es una prueba de que si va guardar :D'),
('Esteban', 'retirp', 'qwerty'),
('arreolas', 'we35', 'qwerty'),
('nano', 'wea2', 'Estas notas estan chidas'),
('arreolas', 'wea5', 'qwerty'),
('nano', 'ya se ', 'lol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `robadatos`
--

CREATE TABLE `robadatos` (
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `robadatos`
--

INSERT INTO `robadatos` (`correo`, `contra`) VALUES
('victor19961996@hotmail.com.mx', '123'),
('vic@gmail.com', '123'),
('hackeado@lince.comm', '123'),
('hackeado@lince.lince', '123'),
('lezminod@hotmail.com', 'jose123'),
('quilombommc2@gmail.com', 'Duglasmc2'),
('vic@gmail.com', 'contraseÃ±a'),
('dav_servant@outlook.com', 'jilian molinaholamundo'),
('as@as.com', 'asd'),
('prueba@gmail.com', 'demo'),
('prueba@gmail.com', '1234'),
('victor19961996@live.com.mx', '123'),
('kevinsl@live.com', '1234'),
('snash@gmail.com', '1234'),
('jhghjgfghf@mail.com', '9087654'),
('asddsa@asdasd.com', 'asdas'),
('lezminod@hotmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wea`
--

CREATE TABLE `wea` (
  `user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `title` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `wea`
--

INSERT INTO `wea` (`user`, `title`, `text`) VALUES
('', 'holax34', 'rompe cadenail Â¿Â¿Â¿Â¿Â¿Â¿Â¿Â¿Â¿Â¿Â¿s 9m'),
('', 'qqqqqqqqqq', 'holi x56'),
('Esteban', 'Wea', 'aaaaaaaaaaaaaaaaaaaaa acabe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `expo`
--
ALTER TABLE `expo`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `wea`
--
ALTER TABLE `wea`
  ADD PRIMARY KEY (`title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
