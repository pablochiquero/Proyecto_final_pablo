-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2019 a las 20:01:49
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `BD_Proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `Categorias` (
  `idCategorias` int(11) NOT NULL,
  `NombreCategoria` varchar(45) DEFAULT NULL,
  `idGeneros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES
(1, 'Rock', 1),
(2, 'Hip Hop', 1),
(3, 'Blues', 1),
(4, 'Pop', 1),
(5, 'Pintura Limunica', 2),
(6, 'Pintura al Oleo', 2),
(7, 'Diseño de Bustos', 2),
(8, 'Actriz', 3),
(9, 'Actor', 3),
(10, 'FIgurante', 3),
(11, 'Beak dance', 4),
(12, 'Danza moderna', 4),
(13, 'Danza del vientre', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Generos`
--

CREATE TABLE `Generos` (
  `idGeneros` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Generos`
--

INSERT INTO `Generos` (`idGeneros`, `Nombre`) VALUES
(1, 'Musical'),
(2, 'Artistico'),
(3, 'Interpretacion'),
(4, 'Baile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuariosArtistas`
--

CREATE TABLE `UsuariosArtistas` (
  `idUsuariosArtistas` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `NombreArtistico` varchar(45) DEFAULT NULL,
  `Descrip` varchar(100) DEFAULT NULL,
  `Num` int(11) DEFAULT NULL,
  `Imagen` varchar(200) NOT NULL DEFAULT 'data-user/img/no-image.jpg',
  `idCategorias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `UsuariosArtistas`
--

INSERT INTO `UsuariosArtistas` (`idUsuariosArtistas`, `Email`, `Nombre`, `Password`, `NombreArtistico`, `Descrip`, `Num`, `Imagen`, `idCategorias`) VALUES
(2, 'eVNZdE5WNjU5eW1pb1FkSUQ3ZCtPQmlabUxvZU00QVZMeDR1Znh0RFJGYz0=', 'Pablo Chiquero Mateo', 'RklxWkQxbFBURWxFWThoT284MkpHdz09', 'pablete', 'Cantante de pop', 651471031, 'data-user/img/Pablo Chiquero Mateo/user-image.png', 4),
(3, 'Rnk4U0lYbmhWaE8rU1ljNXZDOTJtdz09', 'Alba', 'Q3dTaU9TTE5VN1M0ZVpLVFhtUDZ4QT09', 'Albita', 'Cantante de Blues', 691344663, 'data-user/img/alba/user-image.png', 3),
(4, 'OS95dU5MKzB3OHN6eGF6TlFzT3NpUT09', 'Fali', 'T1FrUFI4YjhaS010ZDkyWDRiREd5QT09', 'Falito', 'B-Boy', 613537431, 'data-user/img/fali/user-image.jpg', 11),
(5, 'bGw4bWF2REtxOFYzdkJvNURqckNqUT09', 'Javi', 'dWtMK3lmRXR1ZGZJRm5qeHROTUxRUT09', 'Javito', 'Actor especializado en superheroes', 651341001, 'data-user/img/javi/user-image.jpg', 9),
(6, 'T1oxZ0x6THp6RC9XRHo0UjlHbVdTQT09', 'dani', 'eWNneWtwMlBZcTZkcjErSmxpTzFVQT09', 'Ricu', 'Pintor al oleo', 61523491, 'data-user/img/dani/user-image.jpg', 6),
(10, 'UnhXT25mTTYzNDBvUjVFVDhsRThQZz09', 'pau', 'ZE15Rjk5T1kzMWQxM2dBeTNjNHF0UT09', 'paulito', 'cantante pop', 6152432, 'data-user/img/Pau/user-image.jpeg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `UsuariosClub`
--

CREATE TABLE `UsuariosClub` (
  `idUsuariosClub` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `NombreLocal` varchar(100) DEFAULT NULL,
  `Descrip` varchar(100) DEFAULT NULL,
  `Num` int(11) DEFAULT NULL,
  `Imagen` varchar(200) DEFAULT 'data-user/img/no-image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `UsuariosClub`
--

INSERT INTO `UsuariosClub` (`idUsuariosClub`, `Email`, `Password`, `Nombre`, `NombreLocal`, `Descrip`, `Num`, `Imagen`) VALUES
(1, 'V3cyVmwySVFWNlh1bmE1dkpodUNOYXRSSmFWdW8yMCtYSG9lcGpSd2pUND0=', 'c0Jqa0M1OGZ3YU15L05CdWgrV2xZdz09', 'Agoras', 'Agoras pub', 'Local especializado en cockteles y musica country', 651438131, 'data-user/img/Agoras/user-image.jpg'),
(2, 'SWVtUzBmbmNneDVja1c3VkFMZVhvL20vSzNLaExDbDB6UTViNUowVjIyWT0=', 'NnA5TDNWZk5tbHRMd0wrT1dENXVGQT09', 'Siatelos', 'Siatelos', 'Local especializado en cockteles en el que disfrutar de increbiles espectaculos', 651471311, 'data-user/img/Siatelos/user-image.jpg'),
(3, 'N2lpT2k4ZE1mcFNZTk50WWw2R1dLR2l4aHNxZGpML0tHbS8rckZTVmZvaz0=', 'K0tQRXJ4QzhNWkZxNlY0aUZFUFk4UT09', 'Ethernal', 'Ethernals PUbs', 'Maravilloso sitio enfocado en superhÃ©roes en el que hacemos cenas temÃ¡ticas', 617234512, 'data-user/img/Ethernal/user-image.jpg'),
(4, 'VVhGNCtCbG83WnRjY0JHcUg2RktkZz09', 'SmEyRGMvZ3VTcmgxbm1vN3ZSOXBvdz09', 'Abant', 'Abant', 'local de copas con DJ residente', 651418391, 'data-user/img/Abant/user-image.jpg'),
(6, 'a1o1bHk3cGRRK3BlaExSQjFMTnRqdz09', 'WVBXQU9aa0RKR1kycWpndnl3SHVKUT09', 'cim', 'asd', 'asd', 615231231, 'data-user/img/cim/user-image.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`idCategorias`),
  ADD KEY `fk_Categorias_Generos1_idx` (`idGeneros`);

--
-- Indices de la tabla `Generos`
--
ALTER TABLE `Generos`
  ADD PRIMARY KEY (`idGeneros`);

--
-- Indices de la tabla `UsuariosArtistas`
--
ALTER TABLE `UsuariosArtistas`
  ADD PRIMARY KEY (`idUsuariosArtistas`),
  ADD KEY `fk_UsuariosArtistas_Categorias1_idx` (`idCategorias`);

--
-- Indices de la tabla `UsuariosClub`
--
ALTER TABLE `UsuariosClub`
  ADD PRIMARY KEY (`idUsuariosClub`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `idCategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `Generos`
--
ALTER TABLE `Generos`
  MODIFY `idGeneros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `UsuariosArtistas`
--
ALTER TABLE `UsuariosArtistas`
  MODIFY `idUsuariosArtistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `UsuariosClub`
--
ALTER TABLE `UsuariosClub`
  MODIFY `idUsuariosClub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD CONSTRAINT `fk_Categorias_Generos1` FOREIGN KEY (`idGeneros`) REFERENCES `Generos` (`idGeneros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `UsuariosArtistas`
--
ALTER TABLE `UsuariosArtistas`
  ADD CONSTRAINT `fk_UsuariosArtistas_Categorias1` FOREIGN KEY (`idCategorias`) REFERENCES `Categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
