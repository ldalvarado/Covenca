-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3303
-- Tiempo de generación: 14-10-2021 a las 10:08:25
-- Versión del servidor: 10.6.0-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `covenca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_vehiculo`
--

CREATE TABLE `carga_vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codicion_vehiculo`
--

CREATE TABLE `codicion_vehiculo` (
  `id` int(11) NOT NULL,
  `idReclamo` int(11) NOT NULL,
  `idTipoVehiculo` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idModelo` int(11) NOT NULL,
  `idCargaVehiculo` int(11) NOT NULL,
  `idTipoCargaVehiculo` int(11) NOT NULL,
  `idTipoTerrenoVehiculo` int(11) NOT NULL,
  `idEjeVehiculo` int(11) NOT NULL,
  `kilometraje` decimal(12,2) NOT NULL DEFAULT 0.00,
  `anchoRin` smallint(6) NOT NULL DEFAULT 0,
  `psi` smallint(6) NOT NULL DEFAULT 0,
  `activo` bit(1) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_caucho`
--

CREATE TABLE `condicion_caucho` (
  `id` int(11) NOT NULL,
  `idReclamo` int(11) NOT NULL,
  `reparacionesTerceros` bit(1) NOT NULL DEFAULT b'0',
  `danioTalones` bit(1) NOT NULL DEFAULT b'0',
  `bandaRodamiento` bit(1) NOT NULL DEFAULT b'0',
  `etiquetaProduccion` bit(1) NOT NULL DEFAULT b'0',
  `dotSerial` bit(1) NOT NULL DEFAULT b'0',
  `renovacionMayor` bit(1) NOT NULL DEFAULT b'0',
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagrama_caucho`
--

CREATE TABLE `diagrama_caucho` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagrama_reclamo`
--

CREATE TABLE `diagrama_reclamo` (
  `id` int(11) NOT NULL,
  `idReclamo` int(11) NOT NULL,
  `idDiagramaCaucho` int(11) NOT NULL,
  `idPosicionCaucho` int(11) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno_molde`
--

CREATE TABLE `diseno_molde` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eje_vehiculo`
--

CREATE TABLE `eje_vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eje_vehiculo`
--

INSERT INTO `eje_vehiculo` (`id`, `descripcion`, `activo`, `idUsuario`) VALUES
(1, '1 eje', b'1', 1),
(2, '2 ejes', b'1', 1),
(3, '3 ejes', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_reclamo`
--

CREATE TABLE `estatus_reclamo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `cerrador` bit(1) NOT NULL DEFAULT b'0',
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_producto`
--

CREATE TABLE `informacion_producto` (
  `id` int(11) NOT NULL,
  `idReclamo` int(11) NOT NULL,
  `dotSerial` varchar(255) NOT NULL,
  `idPais` int(11) DEFAULT NULL,
  `idMarcaCaucho` int(11) NOT NULL,
  `idModeloCaucho` int(11) NOT NULL,
  `idMedidaCaucho` int(11) NOT NULL,
  `profundidad` varchar(50) DEFAULT NULL,
  `boleta` varchar(50) DEFAULT NULL,
  `tipoRenovado` bit(1) NOT NULL DEFAULT b'1',
  `serial` varchar(50) DEFAULT NULL,
  `loteBanda` varchar(50) DEFAULT NULL,
  `loteVulcanizacion` varchar(255) DEFAULT NULL,
  `idDisenoBanda` int(11) DEFAULT NULL,
  `activo` bit(1) DEFAULT b'1',
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_caucho`
--

CREATE TABLE `marca_caucho` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca_caucho`
--

INSERT INTO `marca_caucho` (`id`, `descripcion`, `activo`, `idUsuario`) VALUES
(1, 'Acnesa', b'1', 1),
(2, 'Advance', b'1', 1),
(3, 'Aeolus', b'1', 1),
(4, 'Agate', b'1', 1),
(5, 'Akina', b'1', 1),
(6, 'Annaite', b'1', 1),
(7, 'Antyre', b'1', 1),
(8, 'Atlas Tire', b'1', 1),
(9, 'Austone', b'1', 1),
(10, 'Barum', b'1', 1),
(11, 'BF Goodrich', b'1', 1),
(12, 'Black Eagle', b'1', 1),
(13, 'Borado', b'1', 1),
(14, 'Boto', b'1', 1),
(15, 'Bridgestone', b'1', 1),
(16, 'Briway', b'1', 1),
(17, 'Casumina', b'1', 1),
(18, 'Compasal', b'1', 1),
(19, 'Constancy', b'1', 1),
(20, 'Constrac', b'1', 1),
(21, 'Continental', b'1', 1),
(22, 'Copartner', b'1', 1),
(23, 'Corun ', b'1', 1),
(24, 'Cosmo', b'1', 1),
(25, 'Crosswind', b'1', 1),
(26, 'Dayton', b'1', 1),
(27, 'DoubleRoad', b'1', 1),
(28, 'Doublecoin', b'1', 1),
(29, 'Doublestar', b'1', 1),
(30, 'Doupro', b'1', 1),
(31, 'Dunlop', b'1', 1),
(32, 'Durama', b'1', 1),
(33, 'Duraturn', b'1', 1),
(34, 'Durun', b'1', 1),
(35, 'Falken', b'1', 1),
(36, 'Fesite Tire', b'1', 1),
(37, 'Firelion', b'1', 1),
(38, 'Firestone', b'1', 1),
(39, 'Formula', b'1', 1),
(40, 'Fujisaki', b'1', 1),
(41, 'General Tire', b'1', 1),
(42, 'Glory', b'1', 1),
(43, 'Goldpartner', b'1', 1),
(44, 'Goldway', b'1', 1),
(45, 'Goodride', b'1', 1),
(46, 'Goodyear', b'1', 1),
(47, 'Grandmaster', b'1', 1),
(48, 'Grandstone', b'1', 1),
(49, 'GT Radial', b'1', 1),
(50, 'Haka Tire', b'1', 1),
(51, 'Hankook', b'1', 1),
(52, 'Hanksugi', b'1', 1),
(53, 'Hawkway', b'1', 1),
(54, 'Hercules', b'1', 1),
(55, 'Humsung', b'1', 1),
(56, 'Hunter Road', b'1', 1),
(57, 'Inning', b'1', 1),
(58, 'Ironman', b'1', 1),
(59, 'Jetsteel', b'1', 1),
(60, 'Jett', b'1', 1),
(61, 'Jetway', b'1', 1),
(62, 'JINGLUNG', b'1', 1),
(63, 'JKC', b'1', 1),
(64, 'JK Tire', b'1', 1),
(65, 'Joutrack', b'1', 1),
(66, 'Juliton', b'1', 1),
(67, 'K9', b'1', 1),
(68, 'Kapsen', b'1', 1),
(69, 'Kelly', b'1', 1),
(70, 'Koryo', b'1', 1),
(71, 'Kumho', b'1', 1),
(72, 'Lanchang', b'1', 1),
(73, 'Lander', b'1', 1),
(74, 'Lanvigator', b'1', 1),
(75, 'Leao', b'1', 1),
(76, 'Linglong', b'1', 1),
(77, 'Longmarch', b'1', 1),
(78, 'LT600', b'1', 1),
(79, 'Macuro', b'1', 1),
(80, 'Marvemax', b'1', 1),
(81, 'Michelin', b'1', 1),
(82, 'Milestar', b'1', 1),
(83, 'Miller', b'1', 1),
(84, 'Nama', b'1', 1),
(85, 'Narvemax', b'1', 1),
(86, 'New Pride', b'1', 1),
(87, 'Ninnay', b'1', 1),
(88, 'Opals', b'1', 1),
(89, 'Pace', b'1', 1),
(90, 'PETLAS', b'1', 1),
(91, 'Pirelli', b'1', 1),
(92, 'POWERTRAC', b'1', 1),
(93, 'Roadlux', b'1', 1),
(94, 'Roadmaster', b'1', 1),
(95, 'Roadshine', b'1', 1),
(96, 'Safecess', b'1', 1),
(97, 'Sailun', b'1', 1),
(98, 'Samson', b'1', 1),
(99, 'Sierra', b'1', 1),
(100, 'Smile', b'1', 1),
(101, 'Sportrak', b'1', 1),
(102, 'Sumitomo', b'1', 1),
(103, 'Sunfull', b'1', 1),
(104, 'Sunote', b'1', 1),
(105, 'Superhawk', b'1', 1),
(106, 'Taitong', b'1', 1),
(107, 'Terraking', b'1', 1),
(108, 'Thundere', b'1', 1),
(109, 'Transking', b'1', 1),
(110, 'Triangle', b'1', 1),
(111, 'Uniroyal', b'1', 1),
(112, 'Vheal', b'1', 1),
(113, 'V-netik', b'1', 1),
(114, 'Wanli', b'1', 1),
(115, 'West Lake', b'1', 1),
(116, 'Wind Power', b'1', 1),
(117, 'Windforce', b'1', 1),
(118, 'Yellowsea', b'1', 1),
(119, 'Yokohama', b'1', 1),
(120, 'Zeetex', b'1', 1),
(121, 'Zeta', b'1', 1),
(122, 'SUNITRAC', b'1', 1),
(123, 'Marca Indefinida', b'1', 1),
(124, 'Aonai', b'1', 1),
(125, 'Firemax', b'1', 1),
(126, 'Altura', b'1', 1),
(127, 'AMAZON', b'1', 1),
(128, 'ANTEO', b'1', 1),
(129, 'APLUS', b'1', 1),
(130, 'Apollo', b'1', 1),
(131, 'Aurora', b'1', 1),
(132, 'AXXEN', b'1', 1),
(133, 'Basoon', b'1', 1),
(134, 'BLACKLION', b'1', 1),
(135, 'Ceat', b'1', 1),
(136, 'CHAOYANG', b'1', 1),
(137, 'CRONUS', b'1', 1),
(138, 'Daewoo', b'1', 1),
(139, 'DELMAX', b'1', 1),
(140, 'DERUIBO', b'1', 1),
(141, 'DOUBLE HAPPINESS', b'1', 1),
(142, 'DRC', b'1', 1),
(143, 'EFFIPLUS', b'1', 1),
(144, 'Fate', b'1', 1),
(145, 'FORTUNE', b'1', 1),
(146, 'Fronway', b'1', 1),
(147, 'Fulda', b'1', 1),
(148, 'Funsa', b'1', 1),
(149, 'GEOSTAR', b'1', 1),
(150, 'Gladiator', b'1', 1),
(151, 'GOLDENCROWN', b'1', 1),
(152, 'Goldshield', b'1', 1),
(153, 'Greenlander', b'1', 1),
(154, 'GRIPMASTER', b'1', 1),
(155, 'GT Gajah Tunggal', b'1', 1),
(156, 'HAIDA TYRES', b'1', 1),
(157, 'HIFLY', b'1', 1),
(158, 'HN', b'1', 1),
(159, 'Jinyu', b'1', 1),
(160, 'Landy Tire', b'1', 1),
(161, 'Luxxan', b'1', 1),
(162, 'Magnum', b'1', 1),
(163, 'Marca Indefinida', b'1', 1),
(164, 'MARSHALL', b'1', 1),
(165, 'Matador', b'1', 1),
(166, 'Maxxis', b'1', 1),
(167, 'MULTIWAY', b'1', 1),
(168, 'O Green', b'1', 1),
(169, 'Ohtsu', b'1', 1),
(170, 'OTANI', b'1', 1),
(171, 'Prime Well', b'1', 1),
(172, 'RANDON', b'1', 1),
(173, 'RHODEN', b'1', 1),
(174, 'STEELMARK', b'1', 1),
(175, 'Sunstone', b'1', 1),
(176, 'Techking', b'1', 1),
(177, 'TEGRYS', b'1', 1),
(178, 'TITAN', b'1', 1),
(179, 'Toyo', b'1', 1),
(180, 'TRANSTONE', b'1', 1),
(181, 'Trelleborg', b'1', 1),
(182, 'TRISTAR', b'1', 1),
(183, 'TYREX', b'1', 1),
(184, 'UNITED', b'1', 1),
(185, 'XBRI', b'1', 1),
(186, 'Ypoon', b'1', 1),
(187, 'ZC RUBBER', b'1', 1),
(188, 'Yhehene', b'1', 1),
(189, 'Ornet', b'1', 1),
(190, 'Toledo', b'1', 1),
(191, 'Tracmax', b'1', 1),
(192, 'Chengshan', b'1', 1),
(193, 'ARMSTRONG', b'1', 1),
(194, 'Integral Power', b'1', 1),
(195, 'Ardent', b'1', 1),
(196, 'Amberstone', b'1', 1),
(197, 'DiamondBack', b'1', 1),
(198, 'Vergreen', b'1', 1),
(199, 'Ovation', b'1', 1),
(200, 'Centara', b'1', 1),
(201, 'Chang Feng', b'1', 1),
(202, 'Zenna', b'1', 1),
(203, 'Royal Black', b'1', 1),
(204, 'JKE Tyre', b'1', 1),
(205, 'Keter', b'1', 1),
(206, 'LIMA CAUCHO', b'1', 1),
(207, 'GREATWAY', b'1', 1),
(208, 'Honour', b'1', 1),
(209, 'FULLRUN', b'1', 1),
(210, 'Dinotrac', b'1', 1),
(211, 'Sentaida', b'1', 1),
(212, 'Aventus', b'1', 1),
(213, 'Deestone', b'1', 1),
(214, 'TRACK KING', b'1', 1),
(215, 'Headway', b'1', 1),
(216, 'Roadmax', b'1', 1),
(217, 'AENEAS', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_vehiculo`
--

CREATE TABLE `marca_vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca_vehiculo`
--

INSERT INTO `marca_vehiculo` (`id`, `descripcion`, `activo`, `idUsuario`) VALUES
(1, 'Chery', b'1', 1),
(2, 'Chevrolet', b'1', 1),
(3, 'Chrysler', b'1', 1),
(4, 'Dodge', b'1', 1),
(5, 'Dongfeng', b'1', 1),
(6, 'Encava', b'1', 1),
(7, 'Fiat', b'1', 1),
(8, 'Ford', b'1', 1),
(9, 'Freightliner', b'1', 1),
(10, 'Hino', b'1', 1),
(11, 'Hyundai', b'1', 1),
(12, 'International', b'1', 1),
(13, 'Isuzu', b'1', 1),
(14, 'Iveco', b'1', 1),
(15, 'JAC', b'1', 1),
(16, 'Jeep', b'1', 1),
(17, 'Kamaz', b'1', 1),
(18, 'Kenworth', b'1', 1),
(19, 'Mack', b'1', 1),
(20, 'Marcopolo', b'1', 1),
(21, 'Mercedes Benz', b'1', 1),
(22, 'Mitsubishi', b'1', 1),
(23, 'Nissan', b'1', 1),
(24, 'Renault', b'1', 1),
(25, 'Scania', b'1', 1),
(26, 'Toyota', b'1', 1),
(27, 'Volkswagen', b'1', 1),
(28, 'Volvo', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida_caucho`
--

CREATE TABLE `medida_caucho` (
  `id` int(11) NOT NULL,
  `nomeclatura` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medida_caucho`
--

INSERT INTO `medida_caucho` (`id`, `nomeclatura`, `descripcion`, `activo`, `idUsuario`) VALUES
(1, 'M90000000210', '10.00-20', b'1', 1),
(2, 'M90000000240', '11.00-20', b'1', 1),
(3, 'M90000000680', '11.00R20', b'1', 1),
(4, 'M90000000730', '11R22.5', b'1', 1),
(5, 'M90000000290', '12.00-20', b'1', 1),
(6, 'M90000000310', '12.00-24', b'1', 1),
(7, 'M90000000690', '12.00R20', b'1', 1),
(8, 'M90000000760', '12R22.5', b'1', 1),
(9, 'M90000000617', '215/75R17.5', b'1', 1),
(10, 'M90000000631', '275/80R22.5', b'1', 1),
(11, 'M90000000632', '295/75R22.5', b'1', 1),
(12, 'M90000000633', '295/80R22.5', b'1', 1),
(13, 'M90000000637', '315/80R22.5', b'1', 1),
(14, '0', '6.50R16', b'1', 1),
(15, 'M90000000080', '7.50-16', b'1', 1),
(16, 'M90000000590', '7.50R16', b'1', 1),
(17, 'M90000000100', '8.25-16', b'1', 1),
(18, 'M90000000190', '8.25-20', b'1', 1),
(19, 'M90000000591', '8.25R16', b'1', 1),
(20, 'M90000000200', '9.00-20', b'1', 1),
(21, 'M90000000090', '9.00-16', b'1', 1),
(22, 'M90000000611', '9.50R17.5', b'1', 1),
(23, '0', '10.00-16', b'1', 1),
(24, '0', '235/70R15', b'1', 1),
(25, 'M90000000560', '31x10.5R15', b'1', 1),
(26, 'M90000000600', '9.00R16', b'1', 1),
(28, '0', '10.00R16', b'1', 1),
(29, '0', '265/75R16', b'1', 1),
(30, '0', '285/75R16', b'1', 1),
(31, 'M90000000612', '235/80R17', b'1', 1),
(32, 'M90000000613', '245/75R17', b'1', 1),
(33, 'M90000000608', '265/65R17', b'1', 1),
(34, '0', '265/70R17', b'1', 1),
(35, 'M90000000609', '285/70R17', b'1', 1),
(36, 'M90000000615', '8R17.5', b'1', 1),
(37, 'M90000000619', '9R17.5', b'1', 1),
(38, 'M90000000616', '10R17.5', b'1', 1),
(39, 'M90000000624', '205/75R17.5', b'1', 1),
(40, 'M90000000618', '235/75R17.5', b'1', 1),
(41, 'M90000000620', '8R19.5', b'1', 1),
(42, 'M90000000627', '225/70R19.5', b'1', 1),
(43, '0', '245/65R19.5', b'1', 1),
(44, 'M90000000623', '245/70R19.5', b'1', 1),
(45, '0', '245/75R19.5', b'1', 1),
(46, 'M90000000622', '265/70R19.5', b'1', 1),
(47, 'M90000000630', '285/70R19.5', b'1', 1),
(48, 'M90000000650', '8.25R20', b'1', 1),
(49, 'M90000000660', '9.00R20', b'1', 1),
(50, 'M90000000670', '10.00R20', b'1', 1),
(51, 'M90000000720', '11.00R22', b'1', 1),
(52, 'M90000000750', '12.00R22', b'1', 1),
(53, 'M90000000601', '9R22.5', b'1', 1),
(54, 'M90000000710', '10R22.5', b'1', 1),
(55, 'M90000000765', '13R22.5', b'1', 1),
(56, 'M90000000636', '235/80R22.5', b'1', 1),
(57, 'M90000000551', '255/70R22.5', b'1', 1),
(58, 'M90000000629', '275/70R22.5', b'1', 1),
(59, 'M90000000626', '275/75R22.5', b'1', 1),
(60, 'M90000000638', '315/70R22.5', b'1', 1),
(61, 'M90000000724', '385/65R22.5', b'1', 1),
(62, 'M90000000725', '425/65R22.5', b'1', 1),
(63, 'M90000000745', '445/65R22.5', b'1', 1),
(64, 'M90000000770', '12.00R24', b'1', 1),
(65, 'M90000000740', '11R24.5', b'1', 1),
(66, '0', '305/70R19.5', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_03_002617_create_renews_table', 1),
(6, '2021_10_04_200637_create_warranties_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_caucho`
--

CREATE TABLE `modelo_caucho` (
  `id` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelo_caucho`
--

INSERT INTO `modelo_caucho` (`id`, `idMarca`, `descripcion`, `activo`, `idUsuario`) VALUES
(1, 1, '678', b'1', 1),
(2, 1, '766', b'1', 1),
(3, 1, '786', b'1', 1),
(4, 1, '22D38', b'1', 1),
(5, 1, '2RM', b'1', 1),
(6, 1, '617FS', b'1', 1),
(7, 1, 'AH01', b'1', 1),
(8, 1, 'AP100', b'1', 1),
(9, 1, 'APX-150', b'1', 1),
(10, 1, 'ARMORSTEEL', b'1', 1),
(11, 1, 'AT103', b'1', 1),
(12, 1, 'AT27', b'1', 1),
(13, 1, 'BCTJM32', b'1', 1),
(14, 1, 'BD757', b'1', 1),
(15, 1, 'BF 12 ROAD FRONT', b'1', 1),
(16, 1, 'BF 200R', b'1', 1),
(17, 1, 'BI-877', b'1', 1),
(18, 1, 'BOE', b'1', 1),
(19, 1, 'BS627', b'1', 1),
(20, 1, 'BT212N', b'1', 1),
(21, 1, 'C125', b'1', 1),
(22, 1, 'CHM 217', b'1', 1),
(23, 1, 'CLM 100', b'1', 1),
(24, 1, 'CPD28', b'1', 1),
(25, 1, 'CPS228', b'1', 1),
(26, 1, 'CR555', b'1', 1),
(27, 1, 'CR869', b'1', 1),
(28, 1, 'CR915', b'1', 1),
(29, 1, 'CRS21', b'1', 1),
(30, 1, 'CT150', b'1', 1),
(31, 1, 'CT516', b'1', 1),
(32, 1, 'CT52', b'1', 1),
(33, 1, 'CT588', b'1', 1),
(34, 1, 'CT601', b'1', 1),
(35, 1, 'CWA202', b'1', 1),
(36, 1, 'D41ST', b'1', 1),
(37, 1, 'D610D', b'1', 1),
(38, 1, 'DA20', b'1', 1),
(39, 1, 'DD13', b'1', 1),
(40, 1, 'DIVER II', b'1', 1),
(41, 1, 'DL11', b'1', 1),
(42, 1, 'DR811', b'1', 1),
(43, 1, 'DR818', b'1', 1),
(44, 1, 'DR902', b'1', 1),
(45, 1, 'DR920', b'1', 1),
(46, 1, 'DR925', b'1', 1),
(47, 1, 'DSR168', b'1', 1),
(48, 1, 'DSR266', b'1', 1),
(49, 1, 'DT22', b'1', 1),
(50, 1, 'E8601', b'1', 1),
(51, 1, 'ECOSMART 22', b'1', 1),
(52, 1, 'ED316', b'1', 1),
(53, 1, 'ENERGY', b'1', 1),
(54, 1, 'EXTMILE SL16', b'1', 1),
(55, 1, 'F816', b'1', 1),
(56, 1, 'FD22', b'1', 1),
(57, 1, 'FH 85', b'1', 1),
(58, 1, 'FR01', b'1', 1),
(59, 1, 'FR687', b'1', 1),
(60, 1, 'FR862', b'1', 1),
(61, 1, 'G22', b'1', 1),
(62, 1, 'G32', b'1', 1),
(63, 1, 'G657', b'1', 1),
(64, 1, 'G658', b'1', 1),
(65, 1, 'G667', b'1', 1),
(66, 1, 'G686 MSS', b'1', 1),
(67, 1, 'G687', b'1', 1),
(68, 1, 'GL266D', b'1', 1),
(69, 1, 'GL268A', b'1', 1),
(70, 1, 'GL282A', b'1', 1),
(71, 1, 'GL283A', b'1', 1),
(72, 1, 'GL285T', b'1', 1),
(73, 1, 'GL296A', b'1', 1),
(74, 1, 'GP712', b'1', 1),
(75, 1, 'GP720', b'1', 1),
(76, 1, 'GP781A', b'1', 1),
(77, 1, 'GRABBER', b'1', 1),
(78, 1, 'GS621', b'1', 1),
(79, 1, 'GT178', b'1', 1),
(80, 1, 'GT278', b'1', 1),
(81, 1, 'H612', b'1', 1),
(82, 1, 'H703', b'1', 1),
(83, 1, 'HDR2', b'1', 1),
(84, 1, 'HF312', b'1', 1),
(85, 1, 'HF660', b'1', 1),
(86, 1, 'HF668', b'1', 1),
(87, 1, 'HI MILLER CT176', b'1', 1),
(88, 1, 'HK1000', b'1', 1),
(89, 1, 'HK3500', b'1', 1),
(90, 1, 'HK3500++', b'1', 1),
(91, 1, 'HK802', b'1', 1),
(92, 1, 'HK862', b'1', 1),
(93, 1, 'HN111', b'1', 1),
(94, 1, 'HN303', b'1', 1),
(95, 1, 'HN808', b'1', 1),
(96, 1, 'HS101', b'1', 1),
(97, 1, 'HS205', b'1', 1),
(98, 1, 'HS208', b'1', 1),
(99, 1, 'HS219', b'1', 1),
(100, 1, 'HS66', b'1', 1),
(101, 1, 'HS68', b'1', 1),
(102, 1, 'HSR2', b'1', 1),
(103, 1, 'I208', b'1', 1),
(104, 1, 'I480', b'1', 1),
(105, 1, 'IDL2', b'1', 1),
(106, 1, 'INTREPIDE', b'1', 1),
(107, 1, 'JDM', b'1', 1),
(108, 1, 'JJA1', b'1', 1),
(109, 1, 'JTH1', b'1', 1),
(110, 1, 'K211', b'1', 1),
(111, 1, 'KL202', b'1', 1),
(112, 1, 'LA411', b'1', 1),
(113, 1, 'LLD37', b'1', 1),
(114, 1, 'LLF26', b'1', 1),
(115, 1, 'LM516', b'1', 1),
(116, 1, 'LRD', b'1', 1),
(117, 1, 'LS24', b'1', 1),
(118, 1, 'LS397', b'1', 1),
(119, 1, 'LT600', b'1', 1),
(120, 1, 'MARATHON LHS II', b'1', 1),
(121, 1, 'MX965', b'1', 1),
(122, 1, 'MX969', b'1', 1),
(123, 1, 'Neo Allroads D+', b'1', 1),
(124, 1, 'Neo Allroads S', b'1', 1),
(125, 1, 'NF101', b'1', 1),
(126, 1, 'NMAN', b'1', 1),
(127, 1, 'NP201', b'1', 1),
(128, 1, 'OP205', b'1', 1),
(129, 1, 'OP275', b'1', 1),
(130, 1, 'PM216', b'1', 1),
(131, 1, 'R1109', b'1', 1),
(132, 1, 'R116', b'1', 1),
(133, 1, 'Regional RHS', b'1', 1),
(134, 1, 'RH100', b'1', 1),
(135, 1, 'RI150', b'1', 1),
(136, 1, 'RM234', b'1', 1),
(137, 1, 'RM871', b'1', 1),
(138, 1, 'RS601', b'1', 1),
(139, 1, 'RS602', b'1', 1),
(140, 1, 'RS612', b'1', 1),
(141, 1, 'RS612A', b'1', 1),
(142, 1, 'RS618', b'1', 1),
(143, 1, 'RS61S', b'1', 1),
(144, 1, 'RS623', b'1', 1),
(145, 1, 'RS629', b'1', 1),
(146, 1, 'S201', b'1', 1),
(147, 1, 'S205', b'1', 1),
(148, 1, 'S600', b'1', 1),
(149, 1, 'S606', b'1', 1),
(150, 1, 'S622', b'1', 1),
(151, 1, 'SFC59', b'1', 1),
(152, 1, 'SH100', b'1', 1),
(153, 1, 'SHOGUN', b'1', 1),
(154, 1, 'SM208', b'1', 1),
(155, 1, 'SN168', b'1', 1),
(156, 1, 'SP391', b'1', 1),
(157, 1, 'SP831', b'1', 1),
(158, 1, 'SR205', b'1', 1),
(159, 1, 'SR803', b'1', 1),
(160, 1, 'SSR517', b'1', 1),
(161, 1, 'ST244', b'1', 1),
(162, 1, 'ST778+', b'1', 1),
(163, 1, 'ST939', b'1', 1),
(164, 1, 'Super Fanguero', b'1', 1),
(165, 1, 'Super Tragaleguas', b'1', 1),
(166, 1, 'T22', b'1', 1),
(167, 1, 'TB762', b'1', 1),
(168, 1, 'TG519', b'1', 1),
(169, 1, 'TG866', b'1', 1),
(170, 1, 'TR100', b'1', 1),
(171, 1, 'TR685', b'1', 1),
(172, 1, 'TR686', b'1', 1),
(173, 1, 'TRD02', b'1', 1),
(174, 1, 'TY577', b'1', 1),
(175, 1, 'TYR', b'1', 1),
(176, 1, 'VK308', b'1', 1),
(177, 1, 'W910', b'1', 1),
(178, 1, 'WH1020', b'1', 1),
(179, 1, 'WH769', b'1', 1),
(180, 1, 'X MULTIWAY', b'1', 1),
(181, 1, 'XCA', b'1', 1),
(182, 1, 'YS06', b'1', 1),
(183, 1, 'YTH4', b'1', 1),
(184, 1, 'YTH6', b'1', 1),
(185, 1, 'YTH7', b'1', 1),
(186, 1, 'ZTH10', b'1', 1),
(187, 1, 'IN CITY', b'1', 1),
(188, 1, 'HSR', b'1', 1),
(189, 1, 'XTRAC 300', b'1', 1),
(190, 1, 'LH688', b'1', 1),
(191, 1, 'TRA01', b'1', 1),
(192, 1, 'WSR24', b'1', 1),
(193, 1, '698', b'1', 1),
(194, 1, 'FM66', b'1', 1),
(195, 1, 'RA401', b'1', 1),
(196, 1, 'G665AD', b'1', 1),
(197, 1, 'GL261D', b'1', 1),
(198, 1, 'GL662AA', b'1', 1),
(199, 1, 'GL268D', b'1', 1),
(200, 1, 'A2235', b'1', 1),
(201, 1, 'ADC53', b'1', 1),
(202, 1, 'AGB20', b'1', 1),
(203, 1, 'ASR06', b'1', 1),
(204, 1, 'ATL35', b'1', 1),
(205, 1, 'HN08', b'1', 1),
(206, 1, 'HN10', b'1', 1),
(207, 1, 'HN235', b'1', 1),
(208, 1, 'HN256', b'1', 1),
(209, 1, 'HN257', b'1', 1),
(210, 1, 'HN355', b'1', 1),
(211, 1, 'NXGR1', b'1', 1),
(212, 1, 'AMR10', b'1', 1),
(213, 1, 'AN300', b'1', 1),
(214, 1, 'ANN366', b'1', 1),
(215, 1, '755', b'1', 1),
(216, 1, 'PROD', b'1', 1),
(217, 1, 'PROS', b'1', 1),
(218, 1, 'PROT', b'1', 1),
(219, 1, 'D801', b'1', 1),
(220, 1, 'S600A', b'1', 1),
(221, 1, 'DLX', b'1', 1),
(222, 1, 'EHA', b'1', 1),
(223, 1, 'ERA1', b'1', 1),
(224, 1, 'AP0978', b'1', 1),
(225, 1, 'UF10', b'1', 1),
(226, 1, 'LP23', b'1', 1),
(227, 1, 'BD200R', b'1', 1),
(228, 1, 'BT200R', b'1', 1),
(229, 1, 'BF200R', b'1', 1),
(230, 1, 'BD22', b'1', 1),
(231, 1, 'BF14', b'1', 1),
(232, 1, 'BT43', b'1', 1),
(233, 1, 'BF12', b'1', 1),
(234, 1, 'BF13', b'1', 1),
(235, 1, 'BU49', b'1', 1),
(236, 1, 'BU54', b'1', 1),
(237, 1, 'NR55', b'1', 1),
(238, 1, 'BS71', b'1', 1),
(239, 1, 'BS73', b'1', 1),
(240, 1, 'BC31', b'1', 1),
(241, 1, 'BT44', b'1', 1),
(242, 1, 'NR52', b'1', 1),
(243, 1, 'BF15', b'1', 1),
(244, 1, 'BASOON', b'1', 1),
(245, 1, 'DR550', b'1', 1),
(246, 1, 'ST250B', b'1', 1),
(247, 1, 'TH225', b'1', 1),
(248, 1, 'VECTOR', b'1', 1),
(249, 1, 'BF156F', b'1', 1),
(250, 1, 'BLR01', b'1', 1),
(251, 1, 'BT212', b'1', 1),
(252, 1, 'BT219', b'1', 1),
(253, 1, 'BT388', b'1', 1),
(254, 1, 'BT926', b'1', 1),
(255, 1, 'BT968', b'1', 1),
(256, 1, 'CV5B', b'1', 1),
(257, 1, 'JL', b'1', 1),
(258, 1, 'L320EC', b'1', 1),
(259, 1, 'L320S', b'1', 1),
(260, 1, 'L325', b'1', 1),
(261, 1, 'L355', b'1', 1),
(262, 1, 'M710 ECOPIA', b'1', 1),
(263, 1, 'M711', b'1', 1),
(264, 1, 'M714', b'1', 1),
(265, 1, 'M716', b'1', 1),
(266, 1, 'M724F', b'1', 1),
(267, 1, 'M726', b'1', 1),
(268, 1, 'M729', b'1', 1),
(269, 1, 'M729F', b'1', 1),
(270, 1, 'M736', b'1', 1),
(271, 1, 'M745', b'1', 1),
(272, 1, 'M788', b'1', 1),
(273, 1, 'M792EP', b'1', 1),
(274, 1, 'M810', b'1', 1),
(275, 1, 'M814', b'1', 1),
(276, 1, 'M840', b'1', 1),
(277, 1, 'M840S', b'1', 1),
(278, 1, 'M842', b'1', 1),
(279, 1, 'M854', b'1', 1),
(280, 1, 'M857', b'1', 1),
(281, 1, 'M880', b'1', 1),
(282, 1, 'M881', b'1', 1),
(283, 1, 'R152', b'1', 1),
(284, 1, 'R155', b'1', 1),
(285, 1, 'R163', b'1', 1),
(286, 1, 'R168', b'1', 1),
(287, 1, 'R173', b'1', 1),
(288, 1, 'R187', b'1', 1),
(289, 1, 'R192', b'1', 1),
(290, 1, 'R194', b'1', 1),
(291, 1, 'R196', b'1', 1),
(292, 1, 'R225', b'1', 1),
(293, 1, 'R227', b'1', 1),
(294, 1, 'R230', b'1', 1),
(295, 1, 'R249', b'1', 1),
(296, 1, 'R249EE', b'1', 1),
(297, 1, 'R250', b'1', 1),
(298, 1, 'R268', b'1', 1),
(299, 1, 'R269', b'1', 1),
(300, 1, 'R297', b'1', 1),
(301, 1, 'R299FE', b'1', 1),
(302, 1, 'SRGB', b'1', 1),
(303, 1, 'W900', b'1', 1),
(304, 1, 'W950', b'1', 1),
(305, 1, 'W970', b'1', 1),
(306, 1, 'W985', b'1', 1),
(307, 1, 'W990', b'1', 1),
(308, 1, 'BD787', b'1', 1),
(309, 1, 'G621', b'1', 1),
(310, 1, 'DRI', b'1', 1),
(311, 1, 'PTPR', b'1', 1),
(312, 1, 'RAMA2', b'1', 1),
(313, 1, 'VG10', b'1', 1),
(314, 1, 'AD710A', b'1', 1),
(315, 1, 'AZ565', b'1', 1),
(316, 1, 'CM958', b'1', 1),
(317, 1, 'CR976AC', b'1', 1),
(318, 1, 'CPS25', b'1', 1),
(319, 1, 'ECMT12', b'1', 1),
(320, 1, 'ECMT62', b'1', 1),
(321, 1, 'ECMT81', b'1', 1),
(322, 1, 'CHA3', b'1', 1),
(323, 1, 'GOL', b'1', 1),
(324, 1, 'ECOVAN', b'1', 1),
(325, 1, 'HS3', b'1', 1),
(326, 1, 'HCS', b'1', 1),
(327, 1, 'HD3', b'1', 1),
(328, 1, 'HDC', b'1', 1),
(329, 1, 'HDC1', b'1', 1),
(330, 1, 'HDC1+', b'1', 1),
(331, 1, 'HDL', b'1', 1),
(332, 1, 'HDR', b'1', 1),
(333, 1, 'HDR1', b'1', 1),
(334, 1, 'HDR2SA', b'1', 1),
(335, 1, 'HHD3', b'1', 1),
(336, 1, 'HHD3SA', b'1', 1),
(337, 1, 'HHS3', b'1', 1),
(338, 1, 'HLA3', b'1', 1),
(339, 1, 'HSC', b'1', 1),
(340, 1, 'HSC1', b'1', 1),
(341, 1, 'HSC1+', b'1', 1),
(342, 1, 'HSL2', b'1', 1),
(343, 1, 'HSR1', b'1', 1),
(344, 1, 'HSR2SA', b'1', 1),
(345, 1, 'HSU', b'1', 1),
(346, 1, 'HSU1', b'1', 1),
(347, 1, 'HT3', b'1', 1),
(348, 1, 'HTR', b'1', 1),
(349, 1, 'HTR1', b'1', 1),
(350, 1, 'HTR2', b'1', 1),
(351, 1, 'LDR1', b'1', 1),
(352, 1, 'LSR1', b'1', 1),
(353, 1, 'LSU1', b'1', 1),
(354, 1, 'MPT81', b'1', 1),
(355, 1, 'VANCO', b'1', 1),
(356, 1, 'CT518', b'1', 1),
(357, 1, 'CT588P', b'1', 1),
(358, 1, 'CT601P', b'1', 1),
(359, 1, 'CN1511', b'1', 1),
(360, 1, 'CR2005', b'1', 1),
(361, 1, 'DWA01', b'1', 1),
(362, 1, 'D300', b'1', 1),
(363, 1, 'D660D', b'1', 1),
(364, 1, 'DE078', b'1', 1),
(365, 1, 'DRB662', b'1', 1),
(366, 1, 'DR908', b'1', 1),
(367, 1, 'REM6', b'1', 1),
(368, 1, 'RR100', b'1', 1),
(369, 1, 'RT500', b'1', 1),
(370, 1, 'DR801', b'1', 1),
(371, 1, 'DS08', b'1', 1),
(372, 1, 'DSR08', b'1', 1),
(373, 1, 'DSR116', b'1', 1),
(374, 1, 'DSR226', b'1', 1),
(375, 1, 'DSR268', b'1', 1),
(376, 1, 'DSR566', b'1', 1),
(377, 1, 'HR266', b'1', 1),
(378, 1, 'D671', b'1', 1),
(379, 1, 'D941', b'1', 1),
(380, 1, 'DB931', b'1', 1),
(381, 1, 'D325', b'1', 1),
(382, 1, 'DL57', b'1', 1),
(383, 1, 'SP020', b'1', 1),
(384, 1, 'SP020A', b'1', 1),
(385, 1, 'SP080', b'1', 1),
(386, 1, 'SP120', b'1', 1),
(387, 1, 'SP122', b'1', 1),
(388, 1, 'SP160', b'1', 1),
(389, 1, 'SP176', b'1', 1),
(390, 1, 'SP261', b'1', 1),
(391, 1, 'SP320', b'1', 1),
(392, 1, 'SP344', b'1', 1),
(393, 1, 'SP350', b'1', 1),
(394, 1, 'SP350A', b'1', 1),
(395, 1, 'SP354', b'1', 1),
(396, 1, 'SP367', b'1', 1),
(397, 1, 'SP385', b'1', 1),
(398, 1, 'SP431', b'1', 1),
(399, 1, 'SP431A', b'1', 1),
(400, 1, 'SP571', b'1', 1),
(401, 1, 'SP580A', b'1', 1),
(402, 1, 'SP650', b'1', 1),
(403, 1, 'SP660', b'1', 1),
(404, 1, 'SP741', b'1', 1),
(405, 1, 'SP811', b'1', 1),
(406, 1, 'SP835', b'1', 1),
(407, 1, 'SP871', b'1', 1),
(408, 1, 'SP925', b'1', 1),
(409, 1, 'SPLT30', b'1', 1),
(410, 1, 'SPTT1', b'1', 1),
(411, 1, 'YTH10', b'1', 1),
(412, 1, 'AM4S R608', b'1', 1),
(413, 1, 'AP701', b'1', 1),
(414, 1, 'MI567', b'1', 1),
(415, 1, 'MI577', b'1', 1),
(416, 1, 'R117', b'1', 1),
(417, 1, 'SI0567', b'1', 1),
(418, 1, 'CA', b'1', 1),
(419, 1, 'DR400', b'1', 1),
(420, 1, 'DR460', b'1', 1),
(421, 1, 'FR200', b'1', 1),
(422, 1, 'SR200', b'1', 1),
(423, 1, 'SR260', b'1', 1),
(424, 1, 'FHF668', b'1', 1),
(425, 1, 'HF660F', b'1', 1),
(426, 1, 'OVI668', b'1', 1),
(427, 1, 'SHF668', b'1', 1),
(428, 1, 'VI660', b'1', 1),
(429, 1, 'ALL TRACTION', b'1', 1),
(430, 1, 'BFT595', b'1', 1),
(431, 1, 'CTRZ', b'1', 1),
(432, 1, 'CV5000', b'1', 1),
(433, 1, 'FD663', b'1', 1),
(434, 1, 'FS400', b'1', 1),
(435, 1, 'FS400 II', b'1', 1),
(436, 1, 'FS440', b'1', 1),
(437, 1, 'FS511', b'1', 1),
(438, 1, 'FS557', b'1', 1),
(439, 1, 'FS558', b'1', 1),
(440, 1, 'FS560P', b'1', 1),
(441, 1, 'FS567', b'1', 1),
(442, 1, 'FS663 II', b'1', 1),
(443, 1, 'FS CITY', b'1', 1),
(444, 1, 'HP2000', b'1', 1),
(445, 1, 'HP3000', b'1', 1),
(446, 1, 'PSD', b'1', 1),
(447, 1, 'T497', b'1', 1),
(448, 1, 'T545', b'1', 1),
(449, 1, 'T546', b'1', 1),
(450, 1, 'T593', b'1', 1),
(451, 1, 'T615', b'1', 1),
(452, 1, 'T819', b'1', 1),
(453, 1, 'T831', b'1', 1),
(454, 1, 'TSP300', b'1', 1),
(455, 1, 'UT2000', b'1', 1),
(456, 1, 'DRIVE', b'1', 1),
(457, 1, 'DRIVE II', b'1', 1),
(458, 1, 'FORMUG', b'1', 1),
(459, 1, 'STEER', b'1', 1),
(460, 1, 'TRACII', b'1', 1),
(461, 1, 'CST56', b'1', 1),
(462, 1, 'HD757', b'1', 1),
(463, 1, 'FD866', b'1', 1),
(464, 1, 'ECOFO2', b'1', 1),
(465, 1, 'WCTL', b'1', 1),
(466, 1, 'TRANSP', b'1', 1),
(467, 1, 'GRABBER HTS', b'1', 1),
(468, 1, 'RA', b'1', 1),
(469, 1, 'UA', b'1', 1),
(470, 1, 'G335', b'1', 1),
(471, 1, 'QR25-TS', b'1', 1),
(472, 1, 'DR909', b'1', 1),
(473, 1, 'DR938', b'1', 1),
(474, 1, 'AT161', b'1', 1),
(475, 1, 'AZ126', b'1', 1),
(476, 1, 'AZ188', b'1', 1),
(477, 1, 'GP712A', b'1', 1),
(478, 1, 'HD797', b'1', 1),
(479, 1, 'AT557', b'1', 1),
(480, 1, 'CR960A', b'1', 1),
(481, 1, 'CR976A', b'1', 1),
(482, 1, 'G149 RSA', b'1', 1),
(483, 1, 'G186 MSS', b'1', 1),
(484, 1, 'G362 OTR', b'1', 1),
(485, 1, 'G377 MSD', b'1', 1),
(486, 1, 'G377 OTR', b'1', 1),
(487, 1, 'G386 MSS', b'1', 1),
(488, 1, 'AMORSTELL KS461', b'1', 1),
(489, 1, 'ARMOR MAX MSD', b'1', 1),
(490, 1, 'ARMOR MAX OTR', b'1', 1),
(491, 1, 'ARMOR MAX MSS', b'1', 1),
(492, 1, 'BANDEIRANTE', b'1', 1),
(493, 1, 'CONQUISTADOR', b'1', 1),
(494, 1, 'CT160', b'1', 1),
(495, 1, 'CITY MAX', b'1', 1),
(496, 1, 'D1311', b'1', 1),
(497, 1, 'DT924', b'1', 1),
(498, 1, 'DYNA TORQUE II', b'1', 1),
(499, 1, 'EFFICIENTGRIP PERFORMANCE', b'1', 1),
(500, 1, 'ELV50', b'1', 1),
(501, 1, 'FUEL MAX LHD', b'1', 1),
(502, 1, 'G100 SG', b'1', 1),
(503, 1, 'G124', b'1', 1),
(504, 1, 'G159', b'1', 1),
(505, 1, 'G159A', b'1', 1),
(506, 1, 'G167', b'1', 1),
(507, 1, 'G186', b'1', 1),
(508, 1, 'G291', b'1', 1),
(509, 1, 'G324', b'1', 1),
(510, 1, 'G357', b'1', 1),
(511, 1, 'G358', b'1', 1),
(512, 1, 'G358 LHS', b'1', 1),
(513, 1, 'G359', b'1', 1),
(514, 1, 'G362', b'1', 1),
(515, 1, 'G365', b'1', 1),
(516, 1, 'G367B', b'1', 1),
(517, 1, 'G386', b'1', 1),
(518, 1, 'G46', b'1', 1),
(519, 1, 'G49', b'1', 1),
(520, 1, 'G572', b'1', 1),
(521, 1, 'G617', b'1', 1),
(522, 1, 'G622 RSD', b'1', 1),
(523, 1, 'G627', b'1', 1),
(524, 1, 'G665', b'1', 1),
(525, 1, 'G677 MSD PLUS', b'1', 1),
(526, 1, 'G677 MSD', b'1', 1),
(527, 1, 'G677 OTR', b'1', 1),
(528, 1, 'G686', b'1', 1),
(529, 1, 'G686 MSS PLUS', b'1', 1),
(530, 1, 'G8 PAPALEGUAS', b'1', 1),
(531, 1, 'WRANGLER ADVENTURE', b'1', 1),
(532, 1, 'KMAXD', b'1', 1),
(533, 1, 'K-MAX EXTREME', b'1', 1),
(534, 1, 'KMAXS', b'1', 1),
(535, 1, 'LHD2', b'1', 1),
(536, 1, 'LHT', b'1', 1),
(537, 1, 'MARATHON LHD II', b'1', 1),
(538, 1, 'MARATHON LHD', b'1', 1),
(539, 1, 'MARATHON LHS', b'1', 1),
(540, 1, 'MARATHON LHT', b'1', 1),
(541, 1, 'MARATHON LHD II +', b'1', 1),
(542, 1, 'MSS2 MSS II', b'1', 1),
(543, 1, 'OFFROAD ORD', b'1', 1),
(544, 1, 'PLG8', b'1', 1),
(545, 1, 'RHD', b'1', 1),
(546, 1, 'RHD II', b'1', 1),
(547, 1, 'RHS', b'1', 1),
(548, 1, 'RHS II', b'1', 1),
(549, 1, 'RHT', b'1', 1),
(550, 1, 'S1014', b'1', 1),
(551, 1, 'S1312', b'1', 1),
(552, 1, 'SMAGS', b'1', 1),
(553, 1, 'SUPER FLOOT II', b'1', 1),
(554, 1, 'SUPER CONQUISTADOR', b'1', 1),
(555, 1, 'URBAN MAX', b'1', 1),
(556, 1, 'GR&78', b'1', 1),
(557, 1, 'G-MINE 900', b'1', 1),
(558, 1, 'GT879', b'1', 1),
(559, 1, '879GT', b'1', 1),
(560, 1, 'GDM 635', b'1', 1),
(561, 1, 'GSL 213', b'1', 1),
(562, 1, 'GSR 220', b'1', 1),
(563, 1, 'GT 01', b'1', 1),
(564, 1, 'GT 279', b'1', 1),
(565, 1, 'GT 668', b'1', 1),
(566, 1, 'GT 669', b'1', 1),
(567, 1, 'GT 678', b'1', 1),
(568, 1, 'GT 688', b'1', 1),
(569, 1, 'GT 876', b'1', 1),
(570, 1, 'GT 978', b'1', 1),
(571, 1, 'GT 979', b'1', 1),
(572, 1, 'GTL922', b'1', 1),
(573, 1, 'HD968', b'1', 1),
(574, 1, 'AH15', b'1', 1),
(575, 1, 'AL02', b'1', 1),
(576, 1, 'ALO2', b'1', 1),
(577, 1, 'DH05', b'1', 1),
(578, 1, 'DH16', b'1', 1),
(579, 1, 'DL02', b'1', 1),
(580, 1, 'DL05', b'1', 1),
(581, 1, 'TH10', b'1', 1),
(582, 1, 'TL10 E-CUBE', b'1', 1),
(583, 1, 'Z35A', b'1', 1),
(584, 1, 'HS64', b'1', 1),
(585, 1, 'GF616', b'1', 1),
(586, 1, 'H111', b'1', 1),
(587, 1, 'HH301', b'1', 1),
(588, 1, 'HN06', b'1', 1),
(589, 1, 'JY598', b'1', 1),
(590, 1, 'FLEET RIB', b'1', 1),
(591, 1, 'HI WAY', b'1', 1),
(592, 1, 'HI-WAY KING', b'1', 1),
(593, 1, 'JETWAY JUL1', b'1', 1),
(594, 1, 'JETWAY JUL2', b'1', 1),
(595, 1, 'FLETTKING', b'1', 1),
(596, 1, 'JET RIB', b'1', 1),
(597, 1, 'JET TRAK', b'1', 1),
(598, 1, 'K186', b'1', 1),
(599, 1, 'ARMORSTEEL KDM', b'1', 1),
(600, 1, 'KS461', b'1', 1),
(601, 1, 'KS481', b'1', 1),
(602, 1, 'KSR2', b'1', 1),
(603, 1, 'POWER FLEET 853', b'1', 1),
(604, 1, '955 Power Fleet', b'1', 1),
(605, 1, 'KCA11', b'1', 1),
(606, 1, 'KFD04', b'1', 1),
(607, 1, 'KMA01', b'1', 1),
(608, 1, 'KMD01', b'1', 1),
(609, 1, 'KMD41', b'1', 1),
(610, 1, 'KRA50', b'1', 1),
(611, 1, 'KRD02', b'1', 1),
(612, 1, 'KRD05', b'1', 1),
(613, 1, 'KRD50', b'1', 1),
(614, 1, 'KRD55', b'1', 1),
(615, 1, 'KRS01', b'1', 1),
(616, 1, 'KRS02', b'1', 1),
(617, 1, 'KRS03+', b'1', 1),
(618, 1, 'KRS11', b'1', 1),
(619, 1, 'KRS15', b'1', 1),
(620, 1, 'KRS50', b'1', 1),
(621, 1, 'KRT01', b'1', 1),
(622, 1, 'KRT02', b'1', 1),
(623, 1, 'KRT03', b'1', 1),
(624, 1, '945 POWER FLEET', b'1', 1),
(625, 1, 'PF961A', b'1', 1),
(626, 1, '964 POWER FLEET', b'1', 1),
(627, 1, '967 POWER FLEET', b'1', 1),
(628, 1, 'DD909', b'1', 1),
(629, 1, 'DA801', b'1', 1),
(630, 1, 'DA818', b'1', 1),
(631, 1, 'D268', b'1', 1),
(632, 1, 'D280', b'1', 1),
(633, 1, 'D288', b'1', 1),
(634, 1, 'D318', b'1', 1),
(635, 1, 'D688', b'1', 1),
(636, 1, 'D689', b'1', 1),
(637, 1, 'D800', b'1', 1),
(638, 1, 'D801+', b'1', 1),
(639, 1, 'D802', b'1', 1),
(640, 1, 'D803', b'1', 1),
(641, 1, 'D805', b'1', 1),
(642, 1, 'D808', b'1', 1),
(643, 1, 'D860', b'1', 1),
(644, 1, 'D880', b'1', 1),
(645, 1, 'D900', b'1', 1),
(646, 1, 'S201+', b'1', 1),
(647, 1, 'S202', b'1', 1),
(648, 1, 'S208', b'1', 1),
(649, 1, 'S618', b'1', 1),
(650, 1, 'S901', b'1', 1),
(651, 1, 'S902', b'1', 1),
(652, 1, 'S903', b'1', 1),
(653, 1, 'T605', b'1', 1),
(654, 1, 'T609', b'1', 1),
(655, 1, 'T705', b'1', 1),
(656, 1, 'T706', b'1', 1),
(657, 1, 'F860', b'1', 1),
(658, 1, 'K WORKS LAR919', b'1', 1),
(659, 1, 'LFL827', b'1', 1),
(660, 1, 'LLF02', b'1', 1),
(661, 1, 'LLF86', b'1', 1),
(662, 1, 'LFL816', b'1', 1),
(663, 1, 'LX-H10', b'1', 1),
(664, 1, 'DRC D601', b'1', 1),
(665, 1, 'DRC D721', b'1', 1),
(666, 1, 'MGM02', b'1', 1),
(667, 1, 'MGM03', b'1', 1),
(668, 1, 'ALL POSITION', b'1', 1),
(669, 1, 'TRACCION', b'1', 1),
(670, 1, 'EJE LIBRE', b'1', 1),
(671, 1, '853', b'1', 1),
(672, 1, 'KCA03', b'1', 1),
(673, 1, 'KRS05', b'1', 1),
(674, 1, 'KRS55', b'1', 1),
(675, 1, 'KRS3+', b'1', 1),
(676, 1, 'SUPER TRACTION', b'1', 1),
(677, 1, 'TRANSCARGA', b'1', 1),
(678, 1, 'UM816', b'1', 1),
(679, 1, 'UR188', b'1', 1),
(680, 1, 'UR275', b'1', 1),
(681, 1, 'UR279', b'1', 1),
(682, 1, 'UR288', b'1', 1),
(683, 1, 'VR188', b'1', 1),
(684, 1, 'AGILIS', b'1', 1),
(685, 1, 'BIBLOAD HARD SURFACE', b'1', 1),
(686, 1, 'CARGO XBIB', b'1', 1),
(687, 1, 'CARGO XBIB HEAVY DUTY', b'1', 1),
(688, 1, 'LTX A/S', b'1', 1),
(689, 1, 'LTX M/S', b'1', 1),
(690, 1, 'LTX M/S2', b'1', 1),
(691, 1, 'MARCH X BIB', b'1', 1),
(692, 1, 'PREMIER A/S', b'1', 1),
(693, 1, 'X ONE XZUS', b'1', 1),
(694, 1, 'XBIB', b'1', 1),
(695, 1, 'XCA PLUS', b'1', 1),
(696, 1, 'X-CRANE AT', b'1', 1),
(697, 1, 'XDA', b'1', 1),
(698, 1, 'XDA1', b'1', 1),
(699, 1, 'XDA5+', b'1', 1),
(700, 1, 'XDE1', b'1', 1),
(701, 1, 'XDE2', b'1', 1),
(702, 1, 'XDE2*', b'1', 1),
(703, 1, 'XDE2+', b'1', 1),
(704, 1, 'XDE M/S', b'1', 1),
(705, 1, 'XDW', b'1', 1),
(706, 1, 'XDY3', b'1', 1),
(707, 1, 'XDY+', b'1', 1),
(708, 1, 'XDY X WORKS', b'1', 1),
(709, 1, 'XGC', b'1', 1),
(710, 1, 'XHD1', b'1', 1),
(711, 1, 'X IN CITY Z', b'1', 1),
(712, 1, 'X IN CITY XZU3', b'1', 1),
(713, 1, 'XJD4', b'1', 1),
(714, 1, 'XJD A', b'1', 1),
(715, 1, 'XJS', b'1', 1),
(716, 1, 'X JU4', b'1', 1),
(717, 1, 'X JW4', b'1', 1),
(718, 1, 'X LINE ENERGY D', b'1', 1),
(719, 1, 'X LINE Z', b'1', 1),
(720, 1, 'X M165', b'1', 1),
(721, 1, 'X M278', b'1', 1),
(722, 1, 'X M52', b'1', 1),
(723, 1, 'X M711', b'1', 1),
(724, 1, 'X MULTI ENERGY D', b'1', 1),
(725, 1, 'X MMULTI D2', b'1', 1),
(726, 1, 'X MULT D', b'1', 1),
(727, 1, 'X MULTI', b'1', 1),
(728, 1, 'X MULTI T', b'1', 1),
(729, 1, 'X MULTI Z', b'1', 1),
(730, 1, 'X MULTI Z+', b'1', 1),
(731, 1, 'XPS TRACTION', b'1', 1),
(732, 1, 'XT1 XT1', b'1', 1),
(733, 1, 'XT4 XT4', b'1', 1),
(734, 1, 'XT5 XT5', b'1', 1),
(735, 1, 'XTA XTA', b'1', 1),
(736, 1, 'XTA2 ENERGY', b'1', 1),
(737, 1, 'XTE', b'1', 1),
(738, 1, 'XTE2', b'1', 1),
(739, 1, 'XTE3', b'1', 1),
(740, 1, 'X TERMINAL T', b'1', 1),
(741, 1, 'X WORKS D', b'1', 1),
(742, 1, 'X WORKS Z', b'1', 1),
(743, 1, 'X WORKS XDY', b'1', 1),
(744, 1, 'X WORKS XZY', b'1', 1),
(745, 1, 'XZA', b'1', 1),
(746, 1, 'XZA1', b'1', 1),
(747, 1, 'XZA2', b'1', 1),
(748, 1, 'XZA2 ENERGY', b'1', 1),
(749, 1, 'XZA2+', b'1', 1),
(750, 1, 'XZE', b'1', 1),
(751, 1, 'XZE1', b'1', 1),
(752, 1, 'XZE2', b'1', 1),
(753, 1, 'XZE2*', b'1', 1),
(754, 1, 'XZE2A', b'1', 1),
(755, 1, 'XZE2+', b'1', 1),
(756, 1, 'X MULTIWAY XZE', b'1', 1),
(757, 1, 'XZH', b'1', 1),
(758, 1, 'XZM', b'1', 1),
(759, 1, 'XZU2', b'1', 1),
(760, 1, 'XZU2+', b'1', 1),
(761, 1, 'XZU2 T', b'1', 1),
(762, 1, 'XZU3', b'1', 1),
(763, 1, 'XZY', b'1', 1),
(764, 1, 'XZY2', b'1', 1),
(765, 1, 'XZY3', b'1', 1),
(766, 1, 'XZY*', b'1', 1),
(767, 1, 'MFR01', b'1', 1),
(768, 1, 'NA02', b'1', 1),
(769, 1, 'AG168', b'1', 1),
(770, 1, 'BI-887', b'1', 1),
(771, 1, 'RX128', b'1', 1),
(772, 1, 'SX037', b'1', 1),
(773, 1, 'M792', b'1', 1),
(774, 1, 'OH-101', b'1', 1),
(775, 1, 'OH107', b'1', 1),
(776, 1, 'OH112', b'1', 1),
(777, 1, 'OH115', b'1', 1),
(778, 1, 'OH201', b'1', 1),
(779, 1, 'AS22', b'1', 1),
(780, 1, 'CEAT DRIVER', b'1', 1),
(781, 1, 'CENTAURO', b'1', 1),
(782, 1, 'CHRONO', b'1', 1),
(783, 1, 'CT 40', b'1', 1),
(784, 1, 'CT 52', b'1', 1),
(785, 1, 'CT 65', b'1', 1),
(786, 1, 'CT 75', b'1', 1),
(787, 1, 'FORMULA DRIVER G', b'1', 1),
(788, 1, 'FG 01', b'1', 1),
(789, 1, 'FG01 PLUS', b'1', 1),
(790, 1, 'FG 85', b'1', 1),
(791, 1, 'FG 88', b'1', 1),
(792, 1, 'FH 01 ENERGY', b'1', 1),
(793, 1, 'FH 55', b'1', 1),
(794, 1, 'FH 75', b'1', 1),
(795, 1, 'FR01 PIRELLI', b'1', 1),
(796, 1, 'FR11 MAX', b'1', 1),
(797, 1, 'FR 25', b'1', 1),
(798, 1, 'FR 25 SUPER', b'1', 1),
(799, 1, 'FR 28 ENERGY', b'1', 1),
(800, 1, 'FR 85', b'1', 1),
(801, 1, 'FR 88', b'1', 1),
(802, 1, 'FR11MAX', b'1', 1),
(803, 1, 'H89', b'1', 1),
(804, 1, 'H89 DRIVE', b'1', 1),
(805, 1, 'H89 TRAILER', b'1', 1),
(806, 1, 'HF75', b'1', 1),
(807, 1, 'HF85', b'1', 1),
(808, 1, 'LD 35', b'1', 1),
(809, 1, 'LD 35 CAPACIDADE H', b'1', 1),
(810, 1, 'LD 35 CAPACIDADE J', b'1', 1),
(811, 1, 'LD 35 XAPURI', b'1', 1),
(812, 1, 'LD45', b'1', 1),
(813, 1, 'LS 97', b'1', 1),
(814, 1, 'LT 84', b'1', 1),
(815, 1, 'LT 99', b'1', 1),
(816, 1, 'MC 01', b'1', 1),
(817, 1, 'MC 45', b'1', 1),
(818, 1, 'MC 85', b'1', 1),
(819, 1, 'MC 95', b'1', 1),
(820, 1, 'NR 01', b'1', 1),
(821, 1, 'PHP', b'1', 1),
(822, 1, 'PS22 PISTA', b'1', 1),
(823, 1, 'RT 59', b'1', 1),
(824, 1, 'SHAPURI', b'1', 1),
(825, 1, 'SM 90', b'1', 1),
(826, 1, 'ST 01', b'1', 1),
(827, 1, 'ST 35', b'1', 1),
(828, 1, 'ST55', b'1', 1),
(829, 1, 'TG 01', b'1', 1),
(830, 1, 'TG 85', b'1', 1),
(831, 1, 'TG 88', b'1', 1),
(832, 1, 'TH 25', b'1', 1),
(833, 1, 'TH 65', b'1', 1),
(834, 1, 'TH 75', b'1', 1),
(835, 1, 'TH 85', b'1', 1),
(836, 1, 'TM95', b'1', 1),
(837, 1, 'TQ01', b'1', 1),
(838, 1, 'TQ 99', b'1', 1),
(839, 1, 'TR01', b'1', 1),
(840, 1, 'TR 20', b'1', 1),
(841, 1, 'TR 85', b'1', 1),
(842, 1, 'TR88', b'1', 1),
(843, 1, 'CONFORT EXPERT', b'1', 1),
(844, 1, 'POWER PRO', b'1', 1),
(845, 1, 'TRAC PRO', b'1', 1),
(846, 1, 'PW210', b'1', 1),
(847, 1, 'STRADA R FV', b'1', 1),
(848, 1, 'RH296', b'1', 1),
(849, 1, 'R211', b'1', 1),
(850, 1, 'R302', b'1', 1),
(851, 1, 'R511', b'1', 1),
(852, 1, 'R519', b'1', 1),
(853, 1, 'S607', b'1', 1),
(854, 1, 'S619', b'1', 1),
(855, 1, 'S637', b'1', 1),
(856, 1, 'GL74', b'1', 1),
(857, 1, 'AGD', b'1', 1),
(858, 1, 'AGS', b'1', 1),
(859, 1, 'AHD', b'1', 1),
(860, 1, 'AMD', b'1', 1),
(861, 1, 'ST718', b'1', 1),
(862, 1, 'HF702', b'1', 1),
(863, 1, 'XTRAC', b'1', 1),
(864, 1, 'T101', b'1', 1),
(865, 1, 'HK839', b'1', 1),
(866, 1, 'ETGC TECHKING', b'1', 1),
(867, 1, 'ETOT TT', b'1', 1),
(868, 1, 'TKDH II', b'1', 1),
(869, 1, 'TKST II', b'1', 1),
(870, 1, 'NSR1', b'1', 1),
(871, 1, 'OPTITRAC DT824', b'1', 1),
(872, 1, 'HYPA', b'1', 1),
(873, 1, 'M1090Z', b'1', 1),
(874, 1, 'M111Z', b'1', 1),
(875, 1, 'M122', b'1', 1),
(876, 1, 'M143', b'1', 1),
(877, 1, 'M144', b'1', 1),
(878, 1, 'M315Z', b'1', 1),
(879, 1, 'M614', b'1', 1),
(880, 1, 'M626', b'1', 1),
(881, 1, 'M913', b'1', 1),
(882, 1, 'M914', b'1', 1),
(883, 1, 'M919', b'1', 1),
(884, 1, 'M920', b'1', 1),
(885, 1, 'OPEN COUNTRY H/T', b'1', 1),
(886, 1, 'TT768', b'1', 1),
(887, 1, 'TM800', b'1', 1),
(888, 1, 'TM900', b'1', 1),
(889, 1, 'TWIN 404', b'1', 1),
(890, 1, 'TWIN RADIAL', b'1', 1),
(891, 1, 'TB516S', b'1', 1),
(892, 1, 'TB598S', b'1', 1),
(893, 1, 'TL 538S+', b'1', 1),
(894, 1, 'TL612', b'1', 1),
(895, 1, 'TR601', b'1', 1),
(896, 1, 'TR618', b'1', 1),
(897, 1, 'TR624', b'1', 1),
(898, 1, 'TR656', b'1', 1),
(899, 1, 'TR657', b'1', 1),
(900, 1, 'TR666', b'1', 1),
(901, 1, 'TR667', b'1', 1),
(902, 1, 'TR668', b'1', 1),
(903, 1, 'TR675', b'1', 1),
(904, 1, 'TR677', b'1', 1),
(905, 1, 'TR678', b'1', 1),
(906, 1, 'TR683', b'1', 1),
(907, 1, 'TR688', b'1', 1),
(908, 1, 'TR689A', b'1', 1),
(909, 1, 'TR691', b'1', 1),
(910, 1, 'TR696', b'1', 1),
(911, 1, 'TR696A', b'1', 1),
(912, 1, 'TR886', b'1', 1),
(913, 1, 'TRD06', b'1', 1),
(914, 1, 'TRD08', b'1', 1),
(915, 1, 'TB516', b'1', 1),
(916, 1, 'TRS02', b'1', 1),
(917, 1, 'TR695', b'1', 1),
(918, 1, 'TRSD2', b'1', 1),
(919, 1, 'TS735', b'1', 1),
(920, 1, 'FR401', b'1', 1),
(921, 1, 'FLEET MASTER', b'1', 1),
(922, 1, 'UT505', b'1', 1),
(923, 1, 'AS678', b'1', 1),
(924, 1, 'AT161A', b'1', 1),
(925, 1, 'AZ670', b'1', 1),
(926, 1, 'CB972', b'1', 1),
(927, 1, 'CM988', b'1', 1),
(928, 1, 'CM993', b'1', 1),
(929, 1, 'CM997', b'1', 1),
(930, 1, 'CR926', b'1', 1),
(931, 1, 'CR976', b'1', 1),
(932, 1, 'CR978', b'1', 1),
(933, 1, 'ES660', b'1', 1),
(934, 1, 'EZ373', b'1', 1),
(935, 1, 'MD738A', b'1', 1),
(936, 1, 'MD777W', b'1', 1),
(937, 1, 'NHSW NHS', b'1', 1),
(938, 1, 'WCM983', b'1', 1),
(939, 1, 'WDR1', b'1', 1),
(940, 1, 'WGB20', b'1', 1),
(941, 1, 'WA1060', b'1', 1),
(942, 1, 'WD2020', b'1', 1),
(943, 1, 'WD2060', b'1', 1),
(944, 1, 'BL103', b'1', 1),
(945, 1, 'ECOWAY', b'1', 1),
(946, 1, 'ROBUSTO', b'1', 1),
(947, 1, 'XB277', b'1', 1),
(948, 1, 'YS501', b'1', 1),
(949, 1, '101ZL', b'1', 1),
(950, 1, 'MY248', b'1', 1),
(951, 1, 'RY103', b'1', 1),
(952, 1, 'STEEL', b'1', 1),
(953, 1, 'SY', b'1', 1),
(954, 1, 'SY2', b'1', 1),
(955, 1, 'SY297', b'1', 1),
(956, 1, 'SY397', b'1', 1),
(957, 1, 'TY', b'1', 1),
(958, 1, 'TY2', b'1', 1),
(959, 1, 'TY287', b'1', 1),
(960, 1, 'TY297', b'1', 1),
(961, 1, 'TY787', b'1', 1),
(962, 1, 'YP99', b'1', 1),
(963, 1, 'AS668', b'1', 1),
(964, 1, 'CR906', b'1', 1),
(965, 1, 'Modelo Unico', b'1', 1),
(966, 1, 'RS627', b'1', 1),
(967, 1, 'SFR03', b'1', 1),
(968, 1, 'FR867', b'1', 1),
(969, 1, 'RR400', b'1', 1),
(970, 1, 'RS604', b'1', 1),
(971, 1, 'HH102', b'1', 1),
(972, 1, 'S737', b'1', 1),
(973, 1, 'DR812', b'1', 1),
(974, 1, 'SR862', b'1', 1),
(975, 1, 'GL247A', b'1', 1),
(976, 1, 'HH368', b'1', 1),
(977, 1, 'JET STEEL JDH', b'1', 1),
(978, 1, 'LU78', b'1', 1),
(979, 1, 'R-707', b'1', 1),
(980, 1, 'TR660', b'1', 1),
(981, 1, 'DR176', b'1', 1),
(982, 1, 'DR308', b'1', 1),
(983, 1, 'GRT939', b'1', 1),
(984, 1, 'CST118', b'1', 1),
(985, 1, 'ATH', b'1', 1),
(986, 1, 'IPDC777', b'1', 1),
(987, 1, 'CST115', b'1', 1),
(988, 1, 'FR685', b'1', 1),
(989, 1, 'Karrier RX566', b'1', 1),
(990, 1, 'R802', b'1', 1),
(991, 1, 'CPS21', b'1', 1),
(992, 1, 'FR800', b'1', 1),
(993, 1, 'General RA', b'1', 1),
(994, 1, '366', b'1', 1),
(995, 1, 'AT118', b'1', 1),
(996, 1, 'K3D03', b'1', 1),
(997, 1, 'TRANSPORTE75', b'1', 1),
(998, 1, 'AW-09', b'1', 1),
(999, 1, 'GP718A', b'1', 1),
(1000, 1, 'BT388N', b'1', 1),
(1001, 1, 'RS615', b'1', 1),
(1002, 1, 'RR700', b'1', 1),
(1003, 1, 'MS520', b'1', 1),
(1004, 1, 'LTL812', b'1', 1),
(1005, 1, 'CST58', b'1', 1),
(1006, 1, '300', b'1', 1),
(1007, 1, 'DR900', b'1', 1),
(1008, 1, 'BSR', b'1', 1),
(1009, 1, 'AT112', b'1', 1),
(1010, 1, 'LS-179', b'1', 1),
(1011, 1, 'TB753', b'1', 1),
(1012, 1, 'EGT88', b'1', 1),
(1013, 1, 'RLB45', b'1', 1),
(1014, 1, 'V1660', b'1', 1),
(1015, 1, 'TR628', b'1', 1),
(1016, 1, 'AG699', b'1', 1),
(1017, 1, 'Super Hajari', b'1', 1),
(1018, 1, 'DS660', b'1', 1),
(1019, 1, 'QR88M5', b'1', 1),
(1020, 1, 'Karrier Max', b'1', 1),
(1021, 1, 'AP250', b'1', 1),
(1022, 1, 'RS201', b'1', 1),
(1023, 1, 'GL291A', b'1', 1),
(1024, 1, 'Jetking', b'1', 1),
(1025, 1, 'GR662', b'1', 1),
(1026, 1, 'RS600', b'1', 1),
(1027, 1, 'Fleet King', b'1', 1),
(1028, 1, 'RM 170', b'1', 1),
(1029, 1, 'TR665', b'1', 1),
(1030, 1, 'FR863', b'1', 1),
(1031, 1, 'CP969', b'1', 1),
(1032, 1, 'V-steel RIB 187', b'1', 1),
(1033, 1, 'KRS28', b'1', 1),
(1034, 1, 'PW-212', b'1', 1),
(1035, 1, 'HR168', b'1', 1),
(1036, 1, 'SR-200', b'1', 1),
(1037, 1, 'KTHS1', b'1', 1),
(1038, 1, 'LS-397', b'1', 1),
(1039, 1, 'TZ 500', b'1', 1),
(1040, 1, 'ASR35', b'1', 1),
(1041, 1, 'AT115A', b'1', 1),
(1042, 1, 'WGC52', b'1', 1),
(1043, 1, 'ASR69', b'1', 1),
(1044, 1, 'WDR31', b'1', 1),
(1045, 1, 'DT966', b'1', 1),
(1046, 1, 'DT909', b'1', 1),
(1047, 1, 'AG198', b'1', 1),
(1048, 1, 'ASL67', b'1', 1),
(1049, 1, 'KMA 187', b'1', 1),
(1050, 1, 'AL 4000', b'1', 1),
(1051, 1, 'BS28', b'1', 1),
(1052, 1, 'GRT800', b'1', 1),
(1053, 1, 'WGB21', b'1', 1),
(1054, 1, 'R216', b'1', 1),
(1055, 1, 'RT606', b'1', 1),
(1056, 1, 'GL286D', b'1', 1),
(1057, 1, 'DSR165', b'1', 1),
(1058, 1, 'RS220', b'1', 1),
(1059, 1, 'Guardian', b'1', 1),
(1060, 1, 'RT-606', b'1', 1),
(1061, 1, 'GL274A', b'1', 1),
(1062, 1, 'SR88', b'1', 1),
(1063, 1, 'VH200', b'1', 1),
(1064, 1, 'HCT II', b'1', 1),
(1065, 1, 'SV401', b'1', 1),
(1066, 1, 'LAU605', b'1', 1),
(1067, 1, 'LAU605', b'1', 1),
(1068, 1, 'HN267', b'1', 1),
(1069, 1, 'POWER JET', b'1', 1),
(1070, 1, 'TR20', b'1', 1),
(1071, 1, 'Tram II', b'1', 1),
(1072, 1, 'Powertrak', b'1', 1),
(1073, 1, 'CSP108', b'1', 1),
(1074, 1, 'T121', b'1', 1),
(1075, 1, 'TR 133', b'1', 1),
(1076, 1, 'Vikrant', b'1', 1),
(1077, 1, 'GS621', b'1', 1),
(1078, 1, 'ST901', b'1', 1),
(1079, 1, 'LL 1', b'1', 1),
(1080, 1, 'Andino', b'1', 1),
(1081, 1, 'CT-111', b'1', 1),
(1082, 1, 'BLH88', b'1', 1),
(1083, 1, 'RS205', b'1', 1),
(1084, 1, 'MA 265', b'1', 1),
(1085, 1, 'CST115A', b'1', 1),
(1086, 1, 'Supreme 139', b'1', 1),
(1087, 1, 'HR603', b'1', 1),
(1088, 1, 'HS208', b'1', 1),
(1089, 1, 'Conti R', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_vehiculo`
--

CREATE TABLE `modelo_vehiculo` (
  `id` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `iso2` varchar(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `iso2`, `descripcion`, `activo`, `idUsuario`) VALUES
(1, 'AL', 'Albania', b'1', 1),
(2, 'DE', 'Alemania', b'1', 1),
(3, 'AD', 'Andorra', b'1', 1),
(4, 'AO', 'Angola', b'1', 1),
(5, 'AG', 'Antigua y Barbuda', b'1', 1),
(6, 'SA', 'Arabia Saudita', b'1', 1),
(7, 'DZ', 'Argelia', b'1', 1),
(8, 'AR', 'Argentina', b'1', 1),
(9, 'AM', 'Armenia', b'1', 1),
(10, 'AU', 'Australia', b'1', 1),
(11, 'AT', 'Austria', b'1', 1),
(12, 'AZ', 'Azerbaiyán', b'1', 1),
(13, 'BS', 'Bahamas', b'1', 1),
(14, 'BH', 'Bahrein', b'1', 1),
(15, 'BD', 'Bangladesh', b'1', 1),
(16, 'BB', 'Barbados', b'1', 1),
(17, 'BY', 'Belarús', b'1', 1),
(18, 'BZ', 'Belice', b'1', 1),
(19, 'BJ', 'Benin', b'1', 1),
(20, 'BT', 'Bhután', b'1', 1),
(21, 'BO', 'Bolivia', b'1', 1),
(22, 'BA', 'Bosnia y Herzegovina', b'1', 1),
(23, 'BW', 'Botswana', b'1', 1),
(24, 'BR', 'Brasil', b'1', 1),
(25, 'BN', 'Brunei Darussalam', b'1', 1),
(26, 'BG', 'Bulgaria', b'1', 1),
(27, 'BF', 'Burkina Faso', b'1', 1),
(28, 'BI', 'Burundi', b'1', 1),
(29, 'BE', 'Bélgica', b'1', 1),
(30, 'CV', 'Cabo Verde', b'1', 1),
(31, 'KH', 'Camboya', b'1', 1),
(32, 'CM', 'Camerún', b'1', 1),
(33, 'CA', 'Canadá', b'1', 1),
(34, 'TD', 'Chad', b'1', 1),
(35, 'CZ', 'Chequia', b'1', 1),
(36, 'CL', 'Chile', b'1', 1),
(37, 'CN', 'China', b'1', 1),
(38, 'CY', 'Chipre', b'1', 1),
(39, 'CO', 'Colombia', b'1', 1),
(40, 'KM', 'Comoras', b'1', 1),
(41, 'CG', 'Congo', b'1', 1),
(42, 'CR', 'Costa Rica', b'1', 1),
(43, 'HR', 'Croacia', b'1', 1),
(44, 'CU', 'Cuba', b'1', 1),
(45, 'CI', 'Costa de Marfíl', b'1', 1),
(46, 'DK', 'Dinamarca', b'1', 1),
(47, 'DJ', 'Djibouti', b'1', 1),
(48, 'DM', 'Dominica', b'1', 1),
(49, 'EC', 'Ecuador', b'1', 1),
(50, 'EG', 'Egipto', b'1', 1),
(51, 'SV', 'El Salvador', b'1', 1),
(52, 'AE', 'Emiratos Árabes Unidos', b'1', 1),
(53, 'ER', 'Eritrea', b'1', 1),
(54, 'SK', 'Eslovaquia', b'1', 1),
(55, 'SI', 'Eslovenia', b'1', 1),
(56, 'ES', 'España', b'1', 1),
(57, 'US', 'Estados Unidos de América', b'1', 1),
(58, 'EE', 'Estonia', b'1', 1),
(59, 'SZ', 'Eswatini', b'1', 1),
(60, 'ET', 'Etiopía', b'1', 1),
(61, 'RU', 'Federación de Rusia', b'1', 1),
(62, 'FJ', 'Fiji', b'1', 1),
(63, 'PH', 'Filipinas', b'1', 1),
(64, 'FI', 'Finlandia', b'1', 1),
(65, 'FR', 'Francia', b'1', 1),
(66, 'GA', 'Gabón', b'1', 1),
(67, 'GM', 'Gambia', b'1', 1),
(68, 'GE', 'Georgia', b'1', 1),
(69, 'GH', 'Ghana', b'1', 1),
(70, 'GD', 'Granada', b'1', 1),
(71, 'GR', 'Grecia', b'1', 1),
(72, 'GT', 'Guatemala', b'1', 1),
(73, 'GN', 'Guinea', b'1', 1),
(74, 'GQ', 'Guinea Ecuatorial', b'1', 1),
(75, 'GW', 'Guinea-Bissau', b'1', 1),
(76, 'GY', 'Guyana', b'1', 1),
(77, 'HT', 'Haití', b'1', 1),
(78, 'HN', 'Honduras', b'1', 1),
(79, 'HU', 'Hungría', b'1', 1),
(80, 'IN', 'India', b'1', 1),
(81, 'ID', 'Indonesia', b'1', 1),
(82, 'IQ', 'Iraq', b'1', 1),
(83, 'IE', 'Irlanda', b'1', 1),
(84, 'IR', 'Irán', b'1', 1),
(85, 'IS', 'Islandia', b'1', 1),
(86, 'CK', 'Islas Cook', b'1', 1),
(87, 'FO', 'Islas Feroe', b'1', 1),
(88, 'MH', 'Islas Marshall', b'1', 1),
(89, 'SB', 'Islas Salomón', b'1', 1),
(90, 'IL', 'Israel', b'1', 1),
(91, 'IT', 'Italia', b'1', 1),
(92, 'JM', 'Jamaica', b'1', 1),
(93, 'JP', 'Japón', b'1', 1),
(94, 'JO', 'Jordania', b'1', 1),
(95, 'KZ', 'Kazajstán', b'1', 1),
(96, 'KE', 'Kenya', b'1', 1),
(97, 'KG', 'Kirguistán', b'1', 1),
(98, 'KI', 'Kiribati', b'1', 1),
(99, 'KW', 'Kuwait', b'1', 1),
(100, 'LS', 'Lesotho', b'1', 1),
(101, 'LV', 'Letonia', b'1', 1),
(102, 'LR', 'Liberia', b'1', 1),
(103, 'LY', 'Libia', b'1', 1),
(104, 'LT', 'Lituania', b'1', 1),
(105, 'LU', 'Luxemburgo', b'1', 1),
(106, 'LB', 'Líbano', b'1', 1),
(107, 'MK', 'Macedonia del Norte', b'1', 1),
(108, 'MG', 'Madagascar', b'1', 1),
(109, 'MY', 'Malasia', b'1', 1),
(110, 'MW', 'Malawi', b'1', 1),
(111, 'MV', 'Maldivas', b'1', 1),
(112, 'MT', 'Malta', b'1', 1),
(113, 'ML', 'Malí', b'1', 1),
(114, 'MA', 'Marruecos', b'1', 1),
(115, 'MU', 'Mauricio', b'1', 1),
(116, 'MR', 'Mauritania', b'1', 1),
(117, 'FM', 'Micronesia', b'1', 1),
(118, 'MN', 'Mongolia', b'1', 1),
(119, 'ME', 'Montenegro', b'1', 1),
(120, 'MZ', 'Mozambique', b'1', 1),
(121, 'MM', 'Myanmar', b'1', 1),
(122, 'MX', 'México', b'1', 1),
(123, 'MC', 'Mónaco', b'1', 1),
(124, 'NA', 'Namibia', b'1', 1),
(125, 'NR', 'Nauru', b'1', 1),
(126, 'NP', 'Nepal', b'1', 1),
(127, 'NI', 'Nicaragua', b'1', 1),
(128, 'NG', 'Nigeria', b'1', 1),
(129, 'NU', 'Niue', b'1', 1),
(130, 'NO', 'Noruega', b'1', 1),
(131, 'NZ', 'Nueva Zelandia', b'1', 1),
(132, 'NE', 'Níger', b'1', 1),
(133, 'OM', 'Omán', b'1', 1),
(134, 'PK', 'Pakistán', b'1', 1),
(135, 'PW', 'Palau', b'1', 1),
(136, 'PA', 'Panamá', b'1', 1),
(137, 'PG', 'Papua Nueva Guinea', b'1', 1),
(138, 'PY', 'Paraguay', b'1', 1),
(139, 'NL', 'Países Bajos', b'1', 1),
(140, 'PE', 'Perú', b'1', 1),
(141, 'PL', 'Polonia', b'1', 1),
(142, 'PT', 'Portugal', b'1', 1),
(143, 'QA', 'Qatar', b'1', 1),
(144, 'CF', 'República Centroafricana', b'1', 1),
(145, 'GB', 'Reino Unido de Gran Bretaña e Irlanda del Norte', b'1', 1),
(146, 'CF', 'República Centroafricana', b'1', 1),
(147, 'LA', 'República Democrática Popular Lao', b'1', 1),
(148, 'CD', 'República Democrática del Congo', b'1', 1),
(149, 'DO', 'República Dominicana', b'1', 1),
(150, 'KP', 'República Popular Democrática de Corea', b'1', 1),
(151, 'TZ', 'República Unida de Tanzanía', b'1', 1),
(152, 'KR', 'República de Corea', b'1', 1),
(153, 'MD', 'República de Moldova', b'1', 1),
(154, 'SY', 'República Árabe Siria', b'1', 1),
(155, 'RO', 'Rumania', b'1', 1),
(156, 'RW', 'Rwanda', b'1', 1),
(157, 'KN', 'Saint Kitts y Nevis', b'1', 1),
(158, 'WS', 'Samoa', b'1', 1),
(159, 'SM', 'San Marino', b'1', 1),
(160, 'VC', 'San Vicente y las Granadinas', b'1', 1),
(161, 'LC', 'Santa Lucía', b'1', 1),
(162, 'ST', 'Santo Tomé y Príncipe', b'1', 1),
(163, 'SN', 'Senegal', b'1', 1),
(164, 'RS', 'Serbia', b'1', 1),
(165, 'SC', 'Seychelles', b'1', 1),
(166, 'SL', 'Sierra Leona', b'1', 1),
(167, 'SG', 'Singapur', b'1', 1),
(168, 'SO', 'Somalia', b'1', 1),
(169, 'LK', 'Sri Lanka', b'1', 1),
(170, 'ZA', 'Sudáfrica', b'1', 1),
(171, 'SD', 'Sudán', b'1', 1),
(172, 'SS', 'Sudán del Sur', b'1', 1),
(173, 'SE', 'Suecia', b'1', 1),
(174, 'CH', 'Suiza', b'1', 1),
(175, 'SR', 'Suriname', b'1', 1),
(176, 'TH', 'Tailandia', b'1', 1),
(177, 'TJ', 'Tayikistán', b'1', 1),
(178, 'TL', 'Timor-Leste', b'1', 1),
(179, 'TG', 'Togo', b'1', 1),
(180, 'TK', 'Tokelau', b'1', 1),
(181, 'TO', 'Tonga', b'1', 1),
(182, 'TT', 'Trinidad y Tabago', b'1', 1),
(183, 'TM', 'Turkmenistán', b'1', 1),
(184, 'TR', 'Turquía', b'1', 1),
(185, 'TV', 'Tuvalu', b'1', 1),
(186, 'TN', 'Túnez', b'1', 1),
(187, 'UA', 'Ucrania', b'1', 1),
(188, 'UG', 'Uganda', b'1', 1),
(189, 'UY', 'Uruguay', b'1', 1),
(190, 'UZ', 'Uzbekistán', b'1', 1),
(191, 'VU', 'Vanuatu', b'1', 1),
(192, 'VE', 'Venezuela', b'1', 1),
(193, 'VN', 'Viet Nam', b'1', 1),
(194, 'YE', 'Yemen', b'1', 1),
(195, 'ZM', 'Zambia', b'1', 1),
(196, 'ZW', 'Zimbabwe', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion_caucho`
--

CREATE TABLE `posicion_caucho` (
  `id` int(11) NOT NULL,
  `idDiagrama` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id` int(11) NOT NULL,
  `factura` varchar(20) NOT NULL,
  `fechaFactura` datetime NOT NULL DEFAULT current_timestamp(),
  `precio` decimal(18,4) DEFAULT 0.0000,
  `iva` decimal(18,4) DEFAULT 0.0000,
  `mtoTotal` decimal(18,4) DEFAULT 0.0000,
  `rif` varchar(20) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `observacion` text DEFAULT NULL,
  `idEstatus` int(11) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL,
  `idSucursal` int(11) NOT NULL,
  `codigoSucursal` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renews`
--

CREATE TABLE `renews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `principal` bit(1) NOT NULL DEFAULT b'0',
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_carga_vehiculo`
--

CREATE TABLE `tipo_carga_vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_terreno_vehiculo`
--

CREATE TABLE `tipo_terreno_vehiculo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE `tipo_vehiculo` (
  `id` int(11) NOT NULL,
  `idEje` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id`, `idEje`, `descripcion`, `activo`, `idUsuario`) VALUES
(1, 3, 'Bus', b'1', 1),
(2, 2, 'Chuto', b'1', 1),
(3, 3, 'Chuto', b'1', 1),
(4, 2, 'Camión', b'1', 1),
(5, 3, 'Camión', b'1', 1),
(6, 2, 'Camión Cisterna/Tanque', b'1', 1),
(7, 3, 'Camión Cisterna/Tanque', b'1', 1),
(8, 2, 'Camión refrigerado', b'1', 1),
(9, 3, 'Camión refrigerado', b'1', 1),
(10, 2, 'Volqueta', b'1', 1),
(11, 3, 'Volqueta', b'1', 1),
(12, 2, 'Batea', b'1', 1),
(13, 3, 'Batea', b'1', 1),
(14, 2, 'Grua', b'1', 1),
(15, 3, 'Grua', b'1', 1),
(16, 2, 'Cortinero', b'1', 1),
(17, 3, 'Cortinero', b'1', 1),
(18, 2, 'Cortinero', b'1', 1),
(19, 1, 'Estacas/Jaulas', b'1', 1),
(20, 2, 'Estacas/Jaulas', b'1', 1),
(21, 3, 'Estacas/Jaulas', b'1', 1),
(22, 1, 'Plataforma', b'1', 1),
(23, 2, 'Plataforma', b'1', 1),
(24, 3, 'Plataforma', b'1', 1),
(25, 1, 'Tanque', b'1', 1),
(26, 2, 'Tanque', b'1', 1),
(27, 3, 'Tanque', b'1', 1),
(28, 2, 'Cigüeña', b'1', 1),
(29, 3, 'Cigüeña', b'1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hilgel Leon', 'sirit20@gmail.com', NULL, '$2y$10$fqLlI6JR7Wt5uZ1bN7rg1O5U1stuE7R2zTy8yxS6aQ5/uOSrHdl62', NULL, '2021-10-13 17:42:05', '2021-10-13 17:42:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `warranties`
--

CREATE TABLE `warranties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carga_vehiculo`
--
ALTER TABLE `carga_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codicion_vehiculo`
--
ALTER TABLE `codicion_vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cv_reclamo` (`idReclamo`),
  ADD KEY `fk_cv_marca` (`idMarca`),
  ADD KEY `fk_cv_modelo` (`idModelo`),
  ADD KEY `fk_cv_tv` (`idTipoVehiculo`),
  ADD KEY `fk_cv_ev` (`idEjeVehiculo`),
  ADD KEY `fk_cv_cv` (`idCargaVehiculo`),
  ADD KEY `fk_cv_tcv` (`idTipoCargaVehiculo`),
  ADD KEY `fk_cv_ttv` (`idTipoTerrenoVehiculo`);

--
-- Indices de la tabla `condicion_caucho`
--
ALTER TABLE `condicion_caucho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cc_reclamo` (`idReclamo`);

--
-- Indices de la tabla `diagrama_caucho`
--
ALTER TABLE `diagrama_caucho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagrama_reclamo`
--
ALTER TABLE `diagrama_reclamo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dr_reclamo` (`idReclamo`),
  ADD KEY `fk_dr_dc` (`idDiagramaCaucho`),
  ADD KEY `fk_dr_pc` (`idPosicionCaucho`);

--
-- Indices de la tabla `diseno_molde`
--
ALTER TABLE `diseno_molde`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eje_vehiculo`
--
ALTER TABLE `eje_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estatus_reclamo`
--
ALTER TABLE `estatus_reclamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `informacion_producto`
--
ALTER TABLE `informacion_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ip_pais` (`idPais`),
  ADD KEY `fk_ip_mc` (`idMarcaCaucho`),
  ADD KEY `fk_ip_mod` (`idModeloCaucho`),
  ADD KEY `fk_ip_mc_copy_1` (`idMedidaCaucho`),
  ADD KEY `fk_ip_reclamo` (`idReclamo`);

--
-- Indices de la tabla `marca_caucho`
--
ALTER TABLE `marca_caucho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca_vehiculo`
--
ALTER TABLE `marca_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medida_caucho`
--
ALTER TABLE `medida_caucho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelo_caucho`
--
ALTER TABLE `modelo_caucho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cmodelo_cmarca` (`idMarca`);

--
-- Indices de la tabla `modelo_vehiculo`
--
ALTER TABLE `modelo_vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vmodelo_vmarca` (`idMarca`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `posicion_caucho`
--
ALTER TABLE `posicion_caucho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cmodelo_posicion_diagrama` (`idDiagrama`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reclamo_estatus` (`idEstatus`),
  ADD KEY `fk_reclamo_sucursal` (`idSucursal`);

--
-- Indices de la tabla `renews`
--
ALTER TABLE `renews`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_carga_vehiculo`
--
ALTER TABLE `tipo_carga_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_terreno_vehiculo`
--
ALTER TABLE `tipo_terreno_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vtipo_veje_copy_2` (`idEje`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carga_vehiculo`
--
ALTER TABLE `carga_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `codicion_vehiculo`
--
ALTER TABLE `codicion_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condicion_caucho`
--
ALTER TABLE `condicion_caucho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diagrama_caucho`
--
ALTER TABLE `diagrama_caucho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diagrama_reclamo`
--
ALTER TABLE `diagrama_reclamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diseno_molde`
--
ALTER TABLE `diseno_molde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eje_vehiculo`
--
ALTER TABLE `eje_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estatus_reclamo`
--
ALTER TABLE `estatus_reclamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacion_producto`
--
ALTER TABLE `informacion_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca_caucho`
--
ALTER TABLE `marca_caucho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT de la tabla `marca_vehiculo`
--
ALTER TABLE `marca_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `medida_caucho`
--
ALTER TABLE `medida_caucho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `modelo_caucho`
--
ALTER TABLE `modelo_caucho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1090;

--
-- AUTO_INCREMENT de la tabla `modelo_vehiculo`
--
ALTER TABLE `modelo_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posicion_caucho`
--
ALTER TABLE `posicion_caucho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `renews`
--
ALTER TABLE `renews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_carga_vehiculo`
--
ALTER TABLE `tipo_carga_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_terreno_vehiculo`
--
ALTER TABLE `tipo_terreno_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `codicion_vehiculo`
--
ALTER TABLE `codicion_vehiculo`
  ADD CONSTRAINT `fk_cv_cv` FOREIGN KEY (`idCargaVehiculo`) REFERENCES `carga_vehiculo` (`id`),
  ADD CONSTRAINT `fk_cv_ev` FOREIGN KEY (`idEjeVehiculo`) REFERENCES `eje_vehiculo` (`id`),
  ADD CONSTRAINT `fk_cv_marca` FOREIGN KEY (`idMarca`) REFERENCES `marca_vehiculo` (`id`),
  ADD CONSTRAINT `fk_cv_modelo` FOREIGN KEY (`idModelo`) REFERENCES `modelo_vehiculo` (`id`),
  ADD CONSTRAINT `fk_cv_reclamo` FOREIGN KEY (`idReclamo`) REFERENCES `reclamo` (`id`),
  ADD CONSTRAINT `fk_cv_tcv` FOREIGN KEY (`idTipoCargaVehiculo`) REFERENCES `tipo_carga_vehiculo` (`id`),
  ADD CONSTRAINT `fk_cv_ttv` FOREIGN KEY (`idTipoTerrenoVehiculo`) REFERENCES `tipo_terreno_vehiculo` (`id`),
  ADD CONSTRAINT `fk_cv_tv` FOREIGN KEY (`idTipoVehiculo`) REFERENCES `tipo_vehiculo` (`id`);

--
-- Filtros para la tabla `condicion_caucho`
--
ALTER TABLE `condicion_caucho`
  ADD CONSTRAINT `fk_cc_reclamo` FOREIGN KEY (`idReclamo`) REFERENCES `reclamo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `diagrama_reclamo`
--
ALTER TABLE `diagrama_reclamo`
  ADD CONSTRAINT `fk_dr_dc` FOREIGN KEY (`idDiagramaCaucho`) REFERENCES `diagrama_caucho` (`id`),
  ADD CONSTRAINT `fk_dr_pc` FOREIGN KEY (`idPosicionCaucho`) REFERENCES `posicion_caucho` (`id`),
  ADD CONSTRAINT `fk_dr_reclamo` FOREIGN KEY (`idReclamo`) REFERENCES `reclamo` (`id`);

--
-- Filtros para la tabla `informacion_producto`
--
ALTER TABLE `informacion_producto`
  ADD CONSTRAINT `fk_ip_mc` FOREIGN KEY (`idMarcaCaucho`) REFERENCES `marca_caucho` (`id`),
  ADD CONSTRAINT `fk_ip_mc_copy_1` FOREIGN KEY (`idMedidaCaucho`) REFERENCES `medida_caucho` (`id`),
  ADD CONSTRAINT `fk_ip_mod` FOREIGN KEY (`idModeloCaucho`) REFERENCES `modelo_caucho` (`id`),
  ADD CONSTRAINT `fk_ip_pais` FOREIGN KEY (`idPais`) REFERENCES `pais` (`id`),
  ADD CONSTRAINT `fk_ip_reclamo` FOREIGN KEY (`idReclamo`) REFERENCES `reclamo` (`id`);

--
-- Filtros para la tabla `modelo_caucho`
--
ALTER TABLE `modelo_caucho`
  ADD CONSTRAINT `fk_cmodelo_cmarca` FOREIGN KEY (`idMarca`) REFERENCES `marca_caucho` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modelo_vehiculo`
--
ALTER TABLE `modelo_vehiculo`
  ADD CONSTRAINT `fk_vmodelo_vmarca` FOREIGN KEY (`idMarca`) REFERENCES `marca_vehiculo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `posicion_caucho`
--
ALTER TABLE `posicion_caucho`
  ADD CONSTRAINT `fk_cmodelo_posicion_diagrama` FOREIGN KEY (`idDiagrama`) REFERENCES `diagrama_caucho` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `fk_reclamo_estatus` FOREIGN KEY (`idEstatus`) REFERENCES `estatus_reclamo` (`id`),
  ADD CONSTRAINT `fk_reclamo_sucursal` FOREIGN KEY (`idSucursal`) REFERENCES `sucursal` (`id`);

--
-- Filtros para la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD CONSTRAINT `fk_vtipo_veje_copy_2` FOREIGN KEY (`idEje`) REFERENCES `eje_vehiculo` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
