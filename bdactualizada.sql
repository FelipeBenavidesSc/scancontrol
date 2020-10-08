-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 19:51:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scancontrol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `clave` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `clave`) VALUES
(1, 'sc', 'sc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automatico`
--

CREATE TABLE `automatico` (
  `id_automatico` int(11) NOT NULL,
  `amperaje` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `tipo` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automatico`
--

INSERT INTO `automatico` (`id_automatico`, `amperaje`, `marca`, `tipo`, `precio`, `rutaImg`) VALUES
(1, '21', 'nosee', 'tiponose', 152600, '../views/dist/img/automatico/52b8aec6c67083178d28f679f9a8ab1e.jpeg'),
(2, 'noseep', 'si', 'no', 75000, '../views/dist/img/automatico/c646211483e3299d6fc5d9b960e11ffb.jpeg'),
(3, 'ewr', 'ewrewr', '', 5000, '../views/dist/img/automatico/4d1345c4381c5b9e14e5579ff06dde16.jpeg'),
(5, '123', '123213', '123123', 121221, NULL),
(6, '34', 'erer', '12312', 55000, NULL),
(7, '123', 'marca', 'tip', 150000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balanzas`
--

CREATE TABLE `balanzas` (
  `id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `info` datetime NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `balanzas`
--

INSERT INTO `balanzas` (`id`, `address`, `cliente`, `descripcion`, `ubicacion`, `info`, `estado`) VALUES
(20, '192.168.2.31', '1', 'Grader Recepcion 6 Brazos', 'El Teniente', '2020-02-24 14:57:51', 'online'),
(21, '192.168.4.65', '1', '	\nGrader recepción 2P - ', 'Planta Chinquio', '2020-02-28 15:20:44', 'online'),
(22, '192.168.4.66', '1', 'Grader calibrado 18P -', ' Planta Chinquio', '2020-02-28 15:20:45', 'online'),
(23, '192.168.1.172', '2', 'Grader recepción 4P (172) - Mesa 4 ', 'Ilque', '2020-02-24 15:01:15', 'online'),
(24, '192.168.1.173', '2', 'Grader recepción 4P (173) - Mesa 4 ', 'Ilque', '2020-02-24 15:01:15', 'online'),
(25, '192.168.1.174', '2', 'Grader calibrado 6P (174) - Mesa 4 ', 'Ilque', '2020-02-24 15:04:24', 'online'),
(26, '192.168.1.175', '2', 'Grader calibrado 6P (175) - Mesa 4 ', 'Ilque', '2020-02-24 15:04:24', 'online'),
(27, '', '4', 'Grader Calibrado 16 Brazos Planta ', 'Puerto Montt', '2020-02-24 15:05:43', 'online'),
(28, '192.168.0.238', '5', 'Balanza Dinamica  - \n', 'Planta Chonchi', '2020-02-24 15:06:32', 'online'),
(39, '1.1.1.1', '4', 'Balanza recepción - ', 'Planta Sea flavor', '2020-03-09 00:00:00', 'online');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandas`
--

CREATE TABLE `bandas` (
  `id_banda` int(11) NOT NULL,
  `superficie` varchar(300) NOT NULL,
  `paso` varchar(300) NOT NULL,
  `numero_serie` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `material` varchar(300) NOT NULL,
  `rutaImg` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bandas`
--

INSERT INTO `bandas` (`id_banda`, `superficie`, `paso`, `numero_serie`, `precio`, `descripcion`, `ancho`, `material`, `rutaImg`) VALUES
(8, 'Cerrada', '12,7', '127 SF', 10000, '• Banda modular robusta con menor peso y paso.\r\n• Puede ser usada con transferencia “nose bar”. ', '85', 'PLASTICO', '../views/dist/img/bandas/e90b971eb29f7d8f60af7294e17460fd.png'),
(10, 'Cerrada', '15,2', '150 SF', 70000, '• Banda modular leve y de fácil manipulación.\r\n• Bloqueo de la varilla por resalto en su extremidad', '58', 'PLASTICO', '../views/dist/img/bandas/46971dad2792ff1b1a247c8354064b7f.png'),
(11, 'Engomada', '15,2', '150 SF EMB', 35000, '• Bloqueo de la varilla por resalto en su extremidad.\r\n• Superficie adherente engomada sobre inyectadas en el color gris,\r\ncon resalto de 6,6 mm x 6 mm y 3 mm de altura.', '58', 'PLASTICO', '../views/dist/img/bandas/1867a4d6a91401ee1abbce1149a03744.png'),
(12, '123', '12312', '123123', 80000, '212121', '1212', 'PLASTICO', '../views/dist/img/bandas/c05b85585e5844a3d686da78f5eef1e3.png'),
(13, '123', '12', '12', 10000, '211212', '12', '12', '../views/dist/img/bandas/b4dc204257a466284589402430acf9a7.jpeg'),
(14, '12', '123123', '123321', 2500, '123321', '132132', '123213', '../views/dist/img/bandas/e9fb406f2e6528055605f15d46c40743.png'),
(15, '123213', '2123', '23', 0, 'texto', '21', 'PLASTICO', '../views/dist/img/bandas/acd7476207cb65b5dd084501a76fc6c8.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cilindros`
--

CREATE TABLE `cilindros` (
  `id_cilindros` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `diametro` varchar(300) NOT NULL,
  `largo` varchar(300) NOT NULL,
  `materialcuerpo` varchar(300) NOT NULL,
  `materialvastago` varchar(300) NOT NULL,
  `medidahilo` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cilindros`
--

INSERT INTO `cilindros` (`id_cilindros`, `nombre`, `diametro`, `largo`, `materialcuerpo`, `materialvastago`, `medidahilo`, `precio`, `rutaImg`) VALUES
(12, 'Cilindro 2', '234234', '234', '234234', '234', '234234', 39000, '../views/dist/img/cilindros/005c6366b040d35c84ac0dc9c82171ec.jpeg'),
(13, '234234', '234', '234234', '234234', '234234', '234234', 0, '../views/dist/img/cilindros/15d57a3784b6be76ee7af2fc8bc733f1.jpeg'),
(14, '234234', '423423', '23423', '423423', '4234', '1111111111', 4000, '../views/dist/img/cilindros/c05b85585e5844a3d686da78f5eef1e3.png'),
(15, '123123', '213', '123', '123123', '13213212', '13231232', 0, '../views/dist/img/cilindros/d7dd41759cc22c5723c24456dcbf92d0.jpeg'),
(16, '323e', '32', '23', '32', '2323', '2323', 34000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`) VALUES
(1, 'Caleta Bay'),
(2, 'Abick'),
(3, 'Mares de Chiloe'),
(4, 'Salmones Aysen'),
(5, 'Salmones de Chile'),
(6, 'Fabian'),
(7, 'Felipe'),
(8, 'Impresora'),
(9, 'Integra'),
(10, 'Francisco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion_calidad`
--

CREATE TABLE `estacion_calidad` (
  `id_calidad` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `numero_puestos` varchar(300) NOT NULL,
  `tipo_sprockets` varchar(300) DEFAULT NULL,
  `cantidad_sprockets` varchar(300) NOT NULL,
  `tipo_banda` varchar(300) DEFAULT NULL,
  `medida_banda` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `cilindros` varchar(300) DEFAULT NULL,
  `tipo_botoneras` varchar(300) NOT NULL,
  `cantidad_botoneras` varchar(300) NOT NULL,
  `tipo_sensores` varchar(300) DEFAULT NULL,
  `cantidad_sensores` varchar(300) NOT NULL,
  `racors` varchar(300) NOT NULL,
  `tipo_motor` varchar(300) DEFAULT NULL,
  `tipo_descanso` varchar(300) DEFAULT NULL,
  `rutaImg` varchar(300) DEFAULT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estacion_calidad`
--

INSERT INTO `estacion_calidad` (`id_calidad`, `descripcion`, `numero_puestos`, `tipo_sprockets`, `cantidad_sprockets`, `tipo_banda`, `medida_banda`, `eje`, `cilindros`, `tipo_botoneras`, `cantidad_botoneras`, `tipo_sensores`, `cantidad_sensores`, `racors`, `tipo_motor`, `tipo_descanso`, `rutaImg`, `id_unidad`) VALUES
(41, 'Unidad Calidad ', '12222', '11', '21', '11', '2121', '2121', '14', '', '', '', '', '', '2', '', '../views/dist/img/estacioncalidad/ff8ac4d0a9528d8dd57a6e6018784575.png', 1),
(42, 'calidad PTO', '5', '10', '45', '11', '45', '45', '12', '4554', '5445', '4', '5445', '4554', '4', '7', '../views/dist/img/estacioncalidad/006601f94d0c39de1a898a9dca3efc53.jpeg', 1),
(43, 'Unidad Calidad 3', '122112', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuentepoder`
--

CREATE TABLE `fuentepoder` (
  `id_fuentepoder` int(11) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `amperaje` varchar(300) NOT NULL,
  `corriente` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fuentepoder`
--

INSERT INTO `fuentepoder` (`id_fuentepoder`, `marca`, `amperaje`, `corriente`, `precio`, `rutaImg`) VALUES
(1, 'marcafuente', '23432d', '12312', 15000, '../views/dist/img/fuentepoder/9c70b5505eb92d564a448439d9d97d6f.png'),
(2, 'trgtr', '23432d', '12312', 52000, '../views/dist/img/fuentepoder/42a8d121a5cfb1fc547b090f75c2c0bf.jpeg'),
(4, 'rtrtr', '', '', 3560, '../views/dist/img/fuentepoder/ffd2e91320fb9dd49e74927b99a12c24.png'),
(5, '213312', '231123321', '132312321', 4500, '../views/dist/img/fuentepoder/c05b85585e5844a3d686da78f5eef1e3.png'),
(6, '5454', 't5', '45t', 300000000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manifold`
--

CREATE TABLE `manifold` (
  `id_manifold` int(11) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `medidas` varchar(300) NOT NULL,
  `sockets` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `manifold`
--

INSERT INTO `manifold` (`id_manifold`, `marca`, `medidas`, `sockets`, `precio`, `rutaImg`) VALUES
(1, '121221122112', '2w1', '21ww2', 14567, '../views/dist/img/manifold/a8e8663d699c0324b4a9f009978a4177.jpeg'),
(2, '213321231', '231213231', '', 3000, NULL),
(3, '3223', '234', '234432', 1400, NULL),
(4, '2323', '3443', '234', 23445, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `rpm` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `usillo` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `capacidad` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `motor`
--

INSERT INTO `motor` (`id_motor`, `rpm`, `marca`, `usillo`, `ancho`, `capacidad`, `precio`, `rutaImg`) VALUES
(1, '1', 'marc', 'weq', 'qwe', 'ewq', 1000, '../views/dist/img/motor/3cbc96199507bfc804497494a11f9e30.jpeg'),
(2, 'rpmmm343333', '', 'usillo', 'ancho', 'capacidad', 0, '../views/dist/img/motor/c05b85585e5844a3d686da78f5eef1e3.png'),
(3, '31231', '', '21332', '231312', '', 0, NULL),
(4, 'weq', 'marca121', 'qwe', 'qwe', 'qwe', 0, NULL),
(5, '234', '32432', '234234', '234432', '324432', 5000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paletas`
--

CREATE TABLE `paletas` (
  `id_paletas` int(11) NOT NULL,
  `tipo_paleta` varchar(300) NOT NULL,
  `medida_paleta` varchar(300) NOT NULL,
  `decs` varchar(300) NOT NULL,
  `dics` varchar(300) NOT NULL,
  `acs` varchar(300) NOT NULL,
  `aci` varchar(300) NOT NULL,
  `dici` varchar(300) NOT NULL,
  `altura` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `fondo` varchar(300) NOT NULL,
  `perforacion` varchar(300) NOT NULL,
  `anclaje` varchar(300) NOT NULL,
  `alturaeje` varchar(300) NOT NULL,
  `diametroeje` varchar(300) NOT NULL,
  `medidas_brazo_leva` varchar(300) NOT NULL,
  `cilindrado` varchar(300) NOT NULL,
  `racors` varchar(300) NOT NULL,
  `orientacion` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paletas`
--

INSERT INTO `paletas` (`id_paletas`, `tipo_paleta`, `medida_paleta`, `decs`, `dics`, `acs`, `aci`, `dici`, `altura`, `ancho`, `fondo`, `perforacion`, `anclaje`, `alturaeje`, `diametroeje`, `medidas_brazo_leva`, `cilindrado`, `racors`, `orientacion`, `precio`, `rutaImg`) VALUES
(2, 'tipopaletasss', '12', 'bujssss', '', '', '', 'Housing', 'EjeMedida', '', '', '', '', '', '', 'Brazo', 'Cilindrado', 'Racors', '', 23000, '../views/dist/img/paletas/b804722434b61ce1fd527aadea86639b.jpeg'),
(3, 'Tipo2', '12', '24', '23', '23', '2', '23', '2323', '23', '23', '23', '12', '2', '3', '2323', '2000', '1212', '233', 0, '../views/dist/img/paletas/8cf3599d0b8fd0d282de6a0fd38e6bba.jpeg'),
(12, '324', '2323', '23', '32', '2332', '32', '32', '3232', '', '2323', '32', '3232', '32', '3223', '23', '2323', '2323', '', 0, '../views/dist/img/paletas/ffd2e91320fb9dd49e74927b99a12c24.png'),
(14, 'tipo', '12mm', '12', '23', '23', '23', '12', '12', '123', '23', '123', '213', '213', '123', '123', '123', '123', '123123123', 0, '../views/dist/img/paletas/90394ce4715e931539c7ca92f68dbc89.jpeg'),
(15, '312213231', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '213', '', '321312', 15555, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plc`
--

CREATE TABLE `plc` (
  `id_plc` int(11) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plc`
--

INSERT INTO `plc` (`id_plc`, `modelo`, `descripcion`, `precio`, `rutaImg`) VALUES
(2, '32r232r', 'ewwedwedewwe', 24234432, '../views/dist/img/plc/9388ab7c9720912016dad5e0396c17ce.jpeg'),
(3, '213123', '', 0, '../views/dist/img/plc/a1a0d004b9a4c83e93b96cfb9466e0f2.jpeg'),
(6, 'modelo1', 'dwdweewd', 0, NULL),
(7, '123', '123321', 12333, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rodamientos`
--

CREATE TABLE `rodamientos` (
  `id_rodamientos` int(11) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `rodamiento` varchar(300) NOT NULL,
  `material` varchar(300) NOT NULL,
  `fijaciones` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rodamientos`
--

INSERT INTO `rodamientos` (`id_rodamientos`, `modelo`, `rodamiento`, `material`, `fijaciones`, `precio`, `rutaImg`) VALUES
(7, '234', 'rwr', 'ewrwer', '1', 0, '../views/dist/img/descanso/a293e34187a102bee73758ce69d87ffe.png'),
(9, '112', '123', 'PLASTICO', '123', 0, '../views/dist/img/descanso/cd05821d6293a60273b7b975fd7052bc.jpeg'),
(10, '21e', '2e2e', '2e22', '12', 0, NULL),
(11, '13', '123', '12', '21', 0, '../views/dist/img/descanso/566f8fe3980a10e3c5408a47b48af813.png'),
(12, '2314', '123', '12321', '12321', 2320, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensor`
--

CREATE TABLE `sensor` (
  `id_sensor` int(11) NOT NULL,
  `tipo_sensor` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `voltaje` varchar(300) NOT NULL,
  `distancia` varchar(300) NOT NULL,
  `contacto` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sensor`
--

INSERT INTO `sensor` (`id_sensor`, `tipo_sensor`, `marca`, `modelo`, `voltaje`, `distancia`, `contacto`, `precio`, `rutaImg`) VALUES
(2, 'PNP', '', 'mooooo', '', '', '', 12222, ''),
(4, 'NPN', '', '21312', '', '', '', 0, ''),
(5, 'werwerwer', '', 'sq', 'sq', 'ss', 'contacttt', 0, '../views/dist/img/sensor/30e6942a51061a398cc506da483e6d68.png'),
(6, '234', '21213', 'alf', 'sq', '1111111111111', '2122121', 0, '../views/dist/img/sensor/b6bc1edee551539bb02436fd71ec5cb0.jpeg'),
(7, 'e23e', '23e32', '32e', '32e', '32e', '32e', 22222, '../views/dist/img/sensor/a8e574664cb5af2e263e454740aac762.jpeg'),
(8, '342324', '324324', '234432', '234432', '324432', '432432', 122222, '../views/dist/img/sensor/534f6924b258e1fb85027050fa4d8424.jpeg'),
(9, 'rwer', 'ewrwer', 'werrew', 'werrwe', 'rwerew', 'werwer', 129999, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sprockets`
--

CREATE TABLE `sprockets` (
  `id_sprockets` int(11) NOT NULL,
  `serie` varchar(300) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `dientes` varchar(300) NOT NULL,
  `perforacion` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sprockets`
--

INSERT INTO `sprockets` (`id_sprockets`, `serie`, `modelo`, `dientes`, `perforacion`, `descripcion`, `precio`, `rutaImg`) VALUES
(7, '1', 'alf', '', '', 'desc\r\n', 123566, ''),
(8, '2', 'bef', '', '', 'wwww', 320000, ''),
(10, '123213', '122121', '213231', '231321', '231321', 230000, '../views/dist/img/sprockets/60065500cee4c4160a394d932727bfd4.jpeg'),
(11, '231321', '123123213', '4', 'perfo', 'textooo', 15000, '../views/dist/img/sprockets/a4ddf21c2832ac336fa54bb99195b48d.jpeg'),
(12, '123321', '213', '213', '123', '213213', 123333, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tableroelectrico`
--

CREATE TABLE `tableroelectrico` (
  `id_tableroelectrico` int(11) NOT NULL,
  `altura` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `fondo` varchar(300) NOT NULL,
  `contactor` varchar(300) NOT NULL,
  `marcaswitch` varchar(300) DEFAULT NULL,
  `puertoswitch` varchar(300) DEFAULT NULL,
  `modeloemergencia` varchar(300) DEFAULT NULL,
  `botoneras` varchar(300) DEFAULT NULL,
  `mainswitch` varchar(300) DEFAULT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tableroelectrico`
--

INSERT INTO `tableroelectrico` (`id_tableroelectrico`, `altura`, `ancho`, `fondo`, `contactor`, `marcaswitch`, `puertoswitch`, `modeloemergencia`, `botoneras`, `mainswitch`, `rutaImg`) VALUES
(16, '2m', '5m', '12m', '', '', '', '', '', '', '../views/dist/img/tableroelectrico/b88efa5995f96db6f0089a99f5fdaa56.jpeg'),
(18, '2', '2', '2', '1221', NULL, NULL, NULL, NULL, NULL, '../views/dist/img/tableroelectrico/9c70b5505eb92d564a448439d9d97d6f.png'),
(25, '213', '123', '12312312', '', NULL, NULL, NULL, NULL, NULL, NULL),
(26, '213', '123', '12312312', '', NULL, NULL, NULL, NULL, NULL, NULL),
(27, '123', '123', '123', '', NULL, NULL, NULL, NULL, NULL, NULL),
(28, '12', '23', '23', '', '', '', '', '', '', '../views/dist/img/tableroelectrico/6dd90ba941fe19453118e8623c8d5b6a.jpeg'),
(29, '12', '23', '23', '', '', '', '', '', NULL, '../views/dist/img/tableroelectrico/2875ecbdde91b6f3bcc3b0be718d5330.jpeg'),
(30, '1000', '200', '400', 'contactor', 'marca switch', 'puerto switch', 'parada de emergencia', 'botoneras', NULL, NULL),
(31, '12', '123', '2323', '', '', '', '', '', '', NULL),
(33, '12', '123', '23', 'contactor', 'marca switch', 'puerto switch', 'parada de emergencia', 'botneras partir', 'main switch', '../views/dist/img/tableroelectrico/d6b30a33854c8a6c111b7c84efc56d3d.jpeg'),
(34, '123', '123', '2323', '', '', '', '', '', '', NULL),
(35, '123', '123', '2323', '', '', '', '', '', '', NULL),
(36, '123', '123', '2323', '', '', '', '', '', '', NULL),
(37, '123', '123', '2323', '', '', '', '', '', '', NULL),
(38, '123', '123', '2323', '', '', '', '', '', '', NULL),
(39, '555', '300', '200', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablero_neumatico`
--

CREATE TABLE `tablero_neumatico` (
  `id_tableroneumatico` int(11) NOT NULL,
  `altura` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `fondo` varchar(300) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablero_neumatico`
--

INSERT INTO `tablero_neumatico` (`id_tableroneumatico`, `altura`, `ancho`, `fondo`, `rutaImg`) VALUES
(5, '324', '234', '243', '../views/dist/img/tableroneumatico/f2ff3994530054c1d03f169d29257b65.jpeg'),
(9, '4', '3', '4', '../views/dist/img/tableroneumatico/8271dbfa81c7ed2ed6c4f0bb950c23fa.jpeg'),
(10, '234', '23', '234', '../views/dist/img/tableroneumatico/566f8fe3980a10e3c5408a47b48af813.png'),
(12, '1m', '2cm', '30cm', '../views/dist/img/tableroneumatico/c05b85585e5844a3d686da78f5eef1e3.png'),
(13, '4', '3', '4', '../views/dist/img/tableroneumatico/c05b85585e5844a3d686da78f5eef1e3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_automatico`
--

CREATE TABLE `telectrico_automatico` (
  `id_telectrico_automatico` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `tipo_automatico` int(11) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telectrico_automatico`
--

INSERT INTO `telectrico_automatico` (`id_telectrico_automatico`, `id_tablero_electrico`, `cantidad`, `tipo_automatico`, `descripcion`) VALUES
(9, 16, '4', 1, 'atumatico 1'),
(14, 16, '4', 2, '3232'),
(15, 18, '2', 1, '12'),
(22, 25, '12', 1, '123132'),
(23, 26, '5', 1, '123132'),
(24, 27, '123', 3, 'texto'),
(25, 18, '12', 2, '232332'),
(26, 18, '23', 2, '231123123'),
(27, 28, '12', 2, ''),
(28, 29, '12', 2, ''),
(29, 30, '2', 1, ''),
(30, 31, '12', 2, ''),
(32, 33, '12', 3, 'descr'),
(33, 33, '3', 3, 'desc'),
(34, 34, '12', 2, ''),
(35, 35, '12', 2, ''),
(36, 36, '12', 2, ''),
(37, 37, '12', 2, ''),
(38, 38, '12', 2, ''),
(39, 38, '14', 2, ''),
(40, 39, '5', 3, ''),
(41, 39, '15', 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_enchufes`
--

CREATE TABLE `telectrico_enchufes` (
  `id_telectrico_enchufes` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `modelo` varchar(300) DEFAULT NULL,
  `amperaje` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telectrico_enchufes`
--

INSERT INTO `telectrico_enchufes` (`id_telectrico_enchufes`, `id_tablero_electrico`, `modelo`, `amperaje`) VALUES
(1, 28, 'modelo', '12'),
(2, 28, 'modelo2', '33'),
(3, 28, 'modelo4', '77'),
(4, 29, 'modelo', '12'),
(5, 29, 'modelo2', '33'),
(6, 29, 'modelo4', '77'),
(8, 31, 'modelo 1', 'amperaje'),
(12, 16, 'modelo enchufe 1', '1'),
(13, 16, 'modelo enchufe 2', '2'),
(14, 33, 'modelo enchufe', '77'),
(15, 33, 'modelo enchufe 2', '333'),
(17, 16, 'modelo enchufe 3', '333333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_fuente`
--

CREATE TABLE `telectrico_fuente` (
  `id_telectrico_fuente` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `tipo_fuente` int(11) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telectrico_fuente`
--

INSERT INTO `telectrico_fuente` (`id_telectrico_fuente`, `id_tablero_electrico`, `tipo_fuente`, `descripcion`) VALUES
(7, 16, 1, ''),
(10, 18, 1, ''),
(11, 26, 2, '123231123'),
(13, 27, 1, 'texto12123132312'),
(16, 27, 2, '3242323'),
(17, 28, 1, ''),
(18, 29, 1, ''),
(19, 30, 1, ''),
(20, 31, 2, ''),
(21, 33, 4, ''),
(22, 33, 4, ''),
(23, 34, 2, 'eewwe'),
(24, 34, 1, 'wqeqwweq'),
(25, 35, 2, 'eewwe'),
(26, 35, 1, 'wqeqwweq'),
(27, 36, 2, 'eewwe'),
(28, 36, 1, 'wqeqwweq'),
(29, 37, 2, 'eewwe'),
(30, 37, 1, 'wqeqwweq'),
(31, 38, 2, 'eewwe'),
(32, 38, 1, 'wqeqwweq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_prensas`
--

CREATE TABLE `telectrico_prensas` (
  `id_telectrico_prensas` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `modelo` varchar(300) DEFAULT NULL,
  `cantidad` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telectrico_prensas`
--

INSERT INTO `telectrico_prensas` (`id_telectrico_prensas`, `id_tablero_electrico`, `modelo`, `cantidad`) VALUES
(1, 30, 'modelo prensas', '15'),
(2, 31, 'prensas modelo', '4'),
(5, 33, 'modelo prensas 1', '4'),
(6, 33, 'modelo prensas2', '2'),
(7, 33, 'modelo prensas 3', '4'),
(8, 16, 'modelo 15', '5'),
(9, 16, 'modelo 20', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_vdf`
--

CREATE TABLE `telectrico_vdf` (
  `id_telectrico_vdf` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `tipo_vdf` int(11) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telectrico_vdf`
--

INSERT INTO `telectrico_vdf` (`id_telectrico_vdf`, `id_tablero_electrico`, `cantidad`, `tipo_vdf`, `descripcion`) VALUES
(7, 16, '2', 4, 'vdf 1'),
(11, 18, '12', 1, '1212'),
(12, 16, '3', 4, 'werwerwre'),
(13, 28, '12', 3, ''),
(14, 29, '12', 3, ''),
(15, 30, '3', 2, ''),
(16, 31, '12', 2, ''),
(17, 33, '2', 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tneumatico_automatico`
--

CREATE TABLE `tneumatico_automatico` (
  `id_tneumatico_automatico` int(11) NOT NULL,
  `id_tablero_neumatico` int(11) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `tipo_automatico` int(11) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tneumatico_automatico`
--

INSERT INTO `tneumatico_automatico` (`id_tneumatico_automatico`, `id_tablero_neumatico`, `cantidad`, `tipo_automatico`, `descripcion`) VALUES
(3, 5, '10', 1, 'textossssss'),
(10, 9, '12', 2, 'texto 2'),
(11, 9, '2', 1, 'tenxto 3'),
(12, 10, '2', 2, 'texto1'),
(13, 10, '3', 1, 'texto2'),
(15, 5, '3', 1, 'textooo'),
(16, 5, '4', 1, 'texto automaticos'),
(17, 12, '2', 2, 'hola este es mi cuarta neumatico'),
(18, 12, '3', 1, 'hola este es mi segundo neumatico'),
(20, 13, '3', 1, 'hola soy 2'),
(21, 13, '4', 1, 'hola soy 4'),
(22, 13, '54', 1, 'hola soy 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tneumatico_fuente`
--

CREATE TABLE `tneumatico_fuente` (
  `id_tneumatico_fuente` int(11) NOT NULL,
  `id_tablero_neumatico` int(11) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `tipo_fuente` int(11) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tneumatico_fuente`
--

INSERT INTO `tneumatico_fuente` (`id_tneumatico_fuente`, `id_tablero_neumatico`, `cantidad`, `tipo_fuente`, `descripcion`) VALUES
(3, 5, '1', 2, 'text1'),
(10, 9, '3', 1, 'texto 4'),
(11, 9, '4', 1, 'texto5'),
(12, 10, '2', 1, 'texto4'),
(13, 10, '4', 1, 'texto5'),
(15, 5, '2', 1, ''),
(17, 12, '4', 4, 'este es mi segunda fuente'),
(18, 12, '5', 1, 'este es mi tercera fuente'),
(19, 13, '2', 1, 'hola soy fuente 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tneumatico_manifold`
--

CREATE TABLE `tneumatico_manifold` (
  `id_tneumatico_manifold` int(11) NOT NULL,
  `id_tablero_neumatico` int(11) NOT NULL,
  `tipo_manifold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tneumatico_manifold`
--

INSERT INTO `tneumatico_manifold` (`id_tneumatico_manifold`, `id_tablero_neumatico`, `tipo_manifold`) VALUES
(2, 5, 1),
(3, 9, 1),
(4, 10, 1),
(5, 10, 1),
(6, 12, 1),
(7, 12, 1),
(8, 12, 1),
(9, 5, 1),
(10, 5, 1),
(11, 13, 1),
(12, 13, 1),
(13, 13, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tneumatico_plc`
--

CREATE TABLE `tneumatico_plc` (
  `id_tneumatico_plc` int(11) NOT NULL,
  `id_tablero_neumatico` int(11) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `tipo_plc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tneumatico_plc`
--

INSERT INTO `tneumatico_plc` (`id_tneumatico_plc`, `id_tablero_neumatico`, `cantidad`, `tipo_plc`) VALUES
(2, 5, '324432', 2),
(3, 9, '321321', 3),
(4, 9, '3', 2),
(5, 9, '2', 3),
(6, 10, '2', 3),
(7, 10, '3', 6),
(8, 12, '2', 2),
(9, 12, '66', 6),
(10, 13, '3', 3),
(11, 13, '11', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_balanza`
--

CREATE TABLE `unidades_balanza` (
  `id_unidad_balanza` int(11) NOT NULL,
  `id_balanza` varchar(200) DEFAULT NULL,
  `cliente` varchar(300) DEFAULT NULL,
  `grader` varchar(300) DEFAULT NULL,
  `id_unidad_al` int(11) DEFAULT NULL,
  `id_unidad_acel` int(11) DEFAULT NULL,
  `id_unidad_desc` int(11) DEFAULT NULL,
  `id_calidad` int(11) DEFAULT NULL,
  `id_pesaje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidades_balanza`
--

INSERT INTO `unidades_balanza` (`id_unidad_balanza`, `id_balanza`, `cliente`, `grader`, `id_unidad_al`, `id_unidad_acel`, `id_unidad_desc`, `id_calidad`, `id_pesaje`) VALUES
(331, NULL, 'Abick', 'grader dinamica', 29, 31, 27, 43, 10),
(332, NULL, 'MOWI', 'grader nueva', 30, 30, 22, 41, 7),
(333, NULL, 'abick', 'grader 2', NULL, 32, NULL, 42, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_acel`
--

CREATE TABLE `unidad_acel` (
  `id_unidad_acel` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `tipo_sprockets` varchar(300) DEFAULT NULL,
  `cantidad_sprockets` varchar(300) NOT NULL,
  `banda_tipo` varchar(300) DEFAULT NULL,
  `banda_medidas` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `tipo_motor` varchar(300) DEFAULT NULL,
  `tipo_descanso` varchar(300) DEFAULT NULL,
  `rutaImg` varchar(300) DEFAULT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_acel`
--

INSERT INTO `unidad_acel` (`id_unidad_acel`, `descripcion`, `tipo_sprockets`, `cantidad_sprockets`, `banda_tipo`, `banda_medidas`, `eje`, `tipo_motor`, `tipo_descanso`, `rutaImg`, `id_unidad`) VALUES
(30, 'Grader Recepción ilque aceleración - 1', '8', '123', '11', '213', '213123', '4', '', '../views/dist/img/unidadaceleracion/3a2402a875816d90d119e5221c9c403d.jpeg', 1),
(31, 'acel PTO', '8', '123', '11', '213', '213123', '4', '', '../views/dist/img/unidadaceleracion/09dd8c2662b96ce14928333f055c5580.png', 1),
(32, 'Aceleracion 3', '10', '', '', '', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_alim`
--

CREATE TABLE `unidad_alim` (
  `id_unidad_alim` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `tipo_sprockets` varchar(300) DEFAULT NULL,
  `cantidad_sprockets` varchar(300) NOT NULL,
  `banda_tipo` varchar(300) DEFAULT NULL,
  `banda_medidas` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `largo_banda` varchar(300) NOT NULL,
  `tipo_motor` varchar(300) DEFAULT NULL,
  `tipo_descanso` varchar(300) DEFAULT NULL,
  `rutaImg` varchar(300) DEFAULT NULL,
  `id_unidad_al` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_alim`
--

INSERT INTO `unidad_alim` (`id_unidad_alim`, `descripcion`, `tipo_sprockets`, `cantidad_sprockets`, `banda_tipo`, `banda_medidas`, `eje`, `largo_banda`, `tipo_motor`, `tipo_descanso`, `rutaImg`, `id_unidad_al`) VALUES
(28, 'Alimentacion 1', '8', '2', '11', '32', '123', '213', '2', '10', '../views/dist/img/unidadalimentacion/f8e70d34cb4f88f33a8dcf59e452c1db.jpeg', NULL),
(29, 'alimentacion PTO', '8', '4', '11', '3443', '3434', '3434', '3', '', '../views/dist/img/unidadalimentacion/64309d7b8773f7598c38b84f22a96e86.jpeg', 1),
(30, 'Alimentacion 3', '8', '213231', '8', '231231', '213213', '123231', '1', '7', '../views/dist/img/unidadalimentacion/7601dee6d4d13de3f0af4ef991d33d6d.png', 1),
(31, 'alimentacion', '10', '3', '10', '213213', 'doble', '3434', '2', '7', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_descarga`
--

CREATE TABLE `unidad_descarga` (
  `id_unidad_descarga` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `tipo_sprocket` int(11) NOT NULL,
  `cantidad_sprocket` varchar(300) NOT NULL,
  `tipo_banda` int(11) NOT NULL,
  `medida_banda` varchar(300) NOT NULL,
  `tipo_paletas` varchar(300) DEFAULT NULL,
  `cantidad_paletas` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `altura` varchar(300) NOT NULL,
  `buffer` varchar(300) NOT NULL,
  `tipo_motor` varchar(300) DEFAULT NULL,
  `tipo_descanso` varchar(300) DEFAULT NULL,
  `tipo_cilindro` varchar(300) DEFAULT NULL,
  `rutaImg` varchar(300) DEFAULT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_descarga`
--

INSERT INTO `unidad_descarga` (`id_unidad_descarga`, `descripcion`, `tipo_sprocket`, `cantidad_sprocket`, `tipo_banda`, `medida_banda`, `tipo_paletas`, `cantidad_paletas`, `eje`, `altura`, `buffer`, `tipo_motor`, `tipo_descanso`, `tipo_cilindro`, `rutaImg`, `id_unidad`) VALUES
(22, 'Descarga1', 7, '123', 10, '2133', '12', '213', '123', '12', '', '', '', '', '../views/dist/img/unidaddescarga/0397e3a6b0c4a9118a6f179db49c4df6.jpeg', 1),
(27, 'descarga', 0, '', 0, '', '', '', '', '', '', '', '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_pesaje`
--

CREATE TABLE `unidad_pesaje` (
  `id_unidad_pesaje` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `tipo_sensores` varchar(300) DEFAULT NULL,
  `cantidad_sensores` varchar(300) NOT NULL,
  `tipo_sprocket` varchar(300) DEFAULT NULL,
  `cantidad_sprocket` varchar(300) NOT NULL,
  `tipo_banda` varchar(300) DEFAULT NULL,
  `medida_banda` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `tipo_motor` varchar(300) DEFAULT NULL,
  `tipo_rodamientos` varchar(300) DEFAULT NULL,
  `entradaalto` varchar(300) DEFAULT NULL,
  `entradaancho` varchar(300) DEFAULT NULL,
  `entradaespesor` varchar(300) DEFAULT NULL,
  `pesajealto` varchar(300) DEFAULT NULL,
  `pesajeancho` varchar(300) DEFAULT NULL,
  `pesajeespesor` varchar(300) DEFAULT NULL,
  `salidaalto` varchar(300) DEFAULT NULL,
  `salidaancho` varchar(300) DEFAULT NULL,
  `salidaespesor` varchar(300) DEFAULT NULL,
  `tableroelectrico` varchar(300) DEFAULT NULL,
  `tableroneumatico` varchar(300) DEFAULT NULL,
  `rutaImg` varchar(300) DEFAULT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_pesaje`
--

INSERT INTO `unidad_pesaje` (`id_unidad_pesaje`, `descripcion`, `tipo_sensores`, `cantidad_sensores`, `tipo_sprocket`, `cantidad_sprocket`, `tipo_banda`, `medida_banda`, `eje`, `tipo_motor`, `tipo_rodamientos`, `entradaalto`, `entradaancho`, `entradaespesor`, `pesajealto`, `pesajeancho`, `pesajeespesor`, `salidaalto`, `salidaancho`, `salidaespesor`, `tableroelectrico`, `tableroneumatico`, `rutaImg`, `id_unidad`) VALUES
(6, 'Pesaje 1', '5', '34', '8', '234', '10', '324', '234', '4', '', '12', '23', '23', '', '', '', '', '', '', '25', '', '../views/dist/img/unidadpesaje/2aef752160fbdc43ebca624e5ee01cb5.jpeg', NULL),
(7, 'Pesaje 2', '5', '3', '8', '34', '10', '234', '11', '3', '9', '234', '234', '234', '234', '234', '234', '234', '234', '234', '26', '9', '../views/dist/img/unidadpesaje/e9fb406f2e6528055605f15d46c40743.png', 1),
(8, '', '4', '3242', '11', '234', '12', '234', '234', '2', '9', '234', '234', '234', '234', '234', '234', '', '', '', '33', '10', '../views/dist/img/unidadpesaje/55476812110f53fff34dd299237868c2.jpeg', 1),
(9, 'Pesaje 10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../views/dist/img/unidadpesaje/644b5423305f10d8792837f61c0da154.png', NULL),
(10, 'Descarga 3', '4', '21', '8', '2', '11', '213213', '23', '4', '9', '12', '21', '231', '12', '21', '21', '12', '21', '21', '38', '9', '../views/dist/img/unidadpesaje/565f9661208d69c069bdf70e43b72ac2.jpeg', 1),
(11, 'Descarga 3', '4', '12', '8', '3', '10', '', 'doble', '2', '10', '', '', '', '', '', '', '', '', '', '34', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_web`
--

CREATE TABLE `usuarios_web` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `correo` varchar(300) DEFAULT NULL,
  `suscripcion` varchar(300) DEFAULT NULL,
  `maquina` varchar(300) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_web`
--

INSERT INTO `usuarios_web` (`id_usuario`, `nombre`, `correo`, `suscripcion`, `maquina`, `fecha`) VALUES
(1, 'felipe', 'felipebenavides94@gmail.com', 'true', 'grader3', '2020-08-11 00:00:00'),
(2, 'Felipe', 'felipebenavides94@gmail.com', '', 'grader3', '2020-08-11 00:00:00'),
(3, 'Felipe', 'felipebenavides94@gmail.com', '', 'grader3', '2020-08-11 00:00:00'),
(4, 'ggfg', 'felipebenavides94@gmail.com', 'true', 'grader3', '2020-08-11 00:00:00'),
(5, 'Felipe', 'felipebenavides94@gmail.com', 'true', 'grader3', '2020-08-11 00:00:00'),
(6, 'erer', 'felipebenavides94@gmail.com', 'true', 'grader3', '2020-08-11 00:00:00'),
(7, 'erer', 'felipebenavides94@gmail.com', 'true', 'grader3', '2020-08-11 23:10:13'),
(8, 'felipe', 'felipebenavides94@gmail.com', 'true', 'grader3', '2020-08-11 17:11:04'),
(9, 'scantech', 'fscantech@scantech.cl', 'true', 'grader3', '2020-08-11 17:12:47'),
(10, 'Pablo', 'felipe@gmail.com', 'true', 'grader3', '2020-08-11 17:43:44'),
(11, 'Felipe', 'felipebenavides94@gmail.com', 'true', 'grader3', '2020-08-12 09:47:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variador_frecuencia`
--

CREATE TABLE `variador_frecuencia` (
  `id_vdf` int(11) NOT NULL,
  `potencia` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `rutaImg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `variador_frecuencia`
--

INSERT INTO `variador_frecuencia` (`id_vdf`, `potencia`, `marca`, `precio`, `rutaImg`) VALUES
(1, '3223', '23', 50000, '../views/dist/img/vdf/3819bcf8d3d20dcd5fdf04da4a50b8be.jpeg'),
(2, '123', '213123', 0, '../views/dist/img/vdf/3f75dd5685a4c6270800bb14b77f2186.jpeg'),
(3, '123', '123321213', 0, NULL),
(4, 'poo', 'wqeewq', 4000000, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `automatico`
--
ALTER TABLE `automatico`
  ADD PRIMARY KEY (`id_automatico`);

--
-- Indices de la tabla `balanzas`
--
ALTER TABLE `balanzas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bandas`
--
ALTER TABLE `bandas`
  ADD PRIMARY KEY (`id_banda`);

--
-- Indices de la tabla `cilindros`
--
ALTER TABLE `cilindros`
  ADD PRIMARY KEY (`id_cilindros`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `estacion_calidad`
--
ALTER TABLE `estacion_calidad`
  ADD PRIMARY KEY (`id_calidad`);

--
-- Indices de la tabla `fuentepoder`
--
ALTER TABLE `fuentepoder`
  ADD PRIMARY KEY (`id_fuentepoder`);

--
-- Indices de la tabla `manifold`
--
ALTER TABLE `manifold`
  ADD PRIMARY KEY (`id_manifold`);

--
-- Indices de la tabla `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indices de la tabla `paletas`
--
ALTER TABLE `paletas`
  ADD PRIMARY KEY (`id_paletas`);

--
-- Indices de la tabla `plc`
--
ALTER TABLE `plc`
  ADD PRIMARY KEY (`id_plc`);

--
-- Indices de la tabla `rodamientos`
--
ALTER TABLE `rodamientos`
  ADD PRIMARY KEY (`id_rodamientos`);

--
-- Indices de la tabla `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indices de la tabla `sprockets`
--
ALTER TABLE `sprockets`
  ADD PRIMARY KEY (`id_sprockets`);

--
-- Indices de la tabla `tableroelectrico`
--
ALTER TABLE `tableroelectrico`
  ADD PRIMARY KEY (`id_tableroelectrico`);

--
-- Indices de la tabla `tablero_neumatico`
--
ALTER TABLE `tablero_neumatico`
  ADD PRIMARY KEY (`id_tableroneumatico`);

--
-- Indices de la tabla `telectrico_automatico`
--
ALTER TABLE `telectrico_automatico`
  ADD PRIMARY KEY (`id_telectrico_automatico`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`),
  ADD KEY `telectrico_automatico_ibfk_2` (`tipo_automatico`);

--
-- Indices de la tabla `telectrico_enchufes`
--
ALTER TABLE `telectrico_enchufes`
  ADD PRIMARY KEY (`id_telectrico_enchufes`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`);

--
-- Indices de la tabla `telectrico_fuente`
--
ALTER TABLE `telectrico_fuente`
  ADD PRIMARY KEY (`id_telectrico_fuente`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`),
  ADD KEY `telectrico_fuente_ibfk_2` (`tipo_fuente`);

--
-- Indices de la tabla `telectrico_prensas`
--
ALTER TABLE `telectrico_prensas`
  ADD PRIMARY KEY (`id_telectrico_prensas`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`);

--
-- Indices de la tabla `telectrico_vdf`
--
ALTER TABLE `telectrico_vdf`
  ADD PRIMARY KEY (`id_telectrico_vdf`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`),
  ADD KEY `telectrico_vdf_ibfk_2` (`tipo_vdf`);

--
-- Indices de la tabla `tneumatico_automatico`
--
ALTER TABLE `tneumatico_automatico`
  ADD PRIMARY KEY (`id_tneumatico_automatico`),
  ADD KEY `id_tablero_neumatico` (`id_tablero_neumatico`),
  ADD KEY `tipo_automatico` (`tipo_automatico`);

--
-- Indices de la tabla `tneumatico_fuente`
--
ALTER TABLE `tneumatico_fuente`
  ADD PRIMARY KEY (`id_tneumatico_fuente`),
  ADD KEY `id_tablero_neumatico` (`id_tablero_neumatico`),
  ADD KEY `tipo_fuente` (`tipo_fuente`);

--
-- Indices de la tabla `tneumatico_manifold`
--
ALTER TABLE `tneumatico_manifold`
  ADD PRIMARY KEY (`id_tneumatico_manifold`),
  ADD KEY `id_tablero_neumatico` (`id_tablero_neumatico`),
  ADD KEY `tipo_manifolf` (`tipo_manifold`);

--
-- Indices de la tabla `tneumatico_plc`
--
ALTER TABLE `tneumatico_plc`
  ADD PRIMARY KEY (`id_tneumatico_plc`),
  ADD KEY `id_tablero_neumatico` (`id_tablero_neumatico`),
  ADD KEY `tipo_plc` (`tipo_plc`);

--
-- Indices de la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  ADD PRIMARY KEY (`id_unidad_balanza`),
  ADD KEY `id_unidad_desc` (`id_unidad_desc`),
  ADD KEY `unidades_balanza_ibfk_1` (`id_unidad_al`),
  ADD KEY `unidades_balanza_ibfk_3` (`id_unidad_acel`),
  ADD KEY `unidades_balanza_ibfk_4` (`id_calidad`),
  ADD KEY `unidades_balanza_ibfk_5` (`id_pesaje`);

--
-- Indices de la tabla `unidad_acel`
--
ALTER TABLE `unidad_acel`
  ADD PRIMARY KEY (`id_unidad_acel`);

--
-- Indices de la tabla `unidad_alim`
--
ALTER TABLE `unidad_alim`
  ADD PRIMARY KEY (`id_unidad_alim`);

--
-- Indices de la tabla `unidad_descarga`
--
ALTER TABLE `unidad_descarga`
  ADD PRIMARY KEY (`id_unidad_descarga`);

--
-- Indices de la tabla `unidad_pesaje`
--
ALTER TABLE `unidad_pesaje`
  ADD PRIMARY KEY (`id_unidad_pesaje`);

--
-- Indices de la tabla `usuarios_web`
--
ALTER TABLE `usuarios_web`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `variador_frecuencia`
--
ALTER TABLE `variador_frecuencia`
  ADD PRIMARY KEY (`id_vdf`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `automatico`
--
ALTER TABLE `automatico`
  MODIFY `id_automatico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `balanzas`
--
ALTER TABLE `balanzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `bandas`
--
ALTER TABLE `bandas`
  MODIFY `id_banda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cilindros`
--
ALTER TABLE `cilindros`
  MODIFY `id_cilindros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estacion_calidad`
--
ALTER TABLE `estacion_calidad`
  MODIFY `id_calidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `fuentepoder`
--
ALTER TABLE `fuentepoder`
  MODIFY `id_fuentepoder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `manifold`
--
ALTER TABLE `manifold`
  MODIFY `id_manifold` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `paletas`
--
ALTER TABLE `paletas`
  MODIFY `id_paletas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `plc`
--
ALTER TABLE `plc`
  MODIFY `id_plc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rodamientos`
--
ALTER TABLE `rodamientos`
  MODIFY `id_rodamientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sprockets`
--
ALTER TABLE `sprockets`
  MODIFY `id_sprockets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tableroelectrico`
--
ALTER TABLE `tableroelectrico`
  MODIFY `id_tableroelectrico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `tablero_neumatico`
--
ALTER TABLE `tablero_neumatico`
  MODIFY `id_tableroneumatico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `telectrico_automatico`
--
ALTER TABLE `telectrico_automatico`
  MODIFY `id_telectrico_automatico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `telectrico_enchufes`
--
ALTER TABLE `telectrico_enchufes`
  MODIFY `id_telectrico_enchufes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `telectrico_fuente`
--
ALTER TABLE `telectrico_fuente`
  MODIFY `id_telectrico_fuente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `telectrico_prensas`
--
ALTER TABLE `telectrico_prensas`
  MODIFY `id_telectrico_prensas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `telectrico_vdf`
--
ALTER TABLE `telectrico_vdf`
  MODIFY `id_telectrico_vdf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tneumatico_automatico`
--
ALTER TABLE `tneumatico_automatico`
  MODIFY `id_tneumatico_automatico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tneumatico_fuente`
--
ALTER TABLE `tneumatico_fuente`
  MODIFY `id_tneumatico_fuente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tneumatico_manifold`
--
ALTER TABLE `tneumatico_manifold`
  MODIFY `id_tneumatico_manifold` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tneumatico_plc`
--
ALTER TABLE `tneumatico_plc`
  MODIFY `id_tneumatico_plc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  MODIFY `id_unidad_balanza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT de la tabla `unidad_acel`
--
ALTER TABLE `unidad_acel`
  MODIFY `id_unidad_acel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `unidad_alim`
--
ALTER TABLE `unidad_alim`
  MODIFY `id_unidad_alim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `unidad_descarga`
--
ALTER TABLE `unidad_descarga`
  MODIFY `id_unidad_descarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `unidad_pesaje`
--
ALTER TABLE `unidad_pesaje`
  MODIFY `id_unidad_pesaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios_web`
--
ALTER TABLE `usuarios_web`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `variador_frecuencia`
--
ALTER TABLE `variador_frecuencia`
  MODIFY `id_vdf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `telectrico_automatico`
--
ALTER TABLE `telectrico_automatico`
  ADD CONSTRAINT `telectrico_automatico_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telectrico_automatico_ibfk_2` FOREIGN KEY (`tipo_automatico`) REFERENCES `automatico` (`id_automatico`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telectrico_enchufes`
--
ALTER TABLE `telectrico_enchufes`
  ADD CONSTRAINT `telectrico_enchufes_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telectrico_fuente`
--
ALTER TABLE `telectrico_fuente`
  ADD CONSTRAINT `telectrico_fuente_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telectrico_fuente_ibfk_2` FOREIGN KEY (`tipo_fuente`) REFERENCES `fuentepoder` (`id_fuentepoder`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telectrico_prensas`
--
ALTER TABLE `telectrico_prensas`
  ADD CONSTRAINT `telectrico_prensas_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telectrico_vdf`
--
ALTER TABLE `telectrico_vdf`
  ADD CONSTRAINT `telectrico_vdf_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telectrico_vdf_ibfk_2` FOREIGN KEY (`tipo_vdf`) REFERENCES `variador_frecuencia` (`id_vdf`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tneumatico_automatico`
--
ALTER TABLE `tneumatico_automatico`
  ADD CONSTRAINT `tneumatico_automatico_ibfk_1` FOREIGN KEY (`id_tablero_neumatico`) REFERENCES `tablero_neumatico` (`id_tableroneumatico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tneumatico_automatico_ibfk_2` FOREIGN KEY (`tipo_automatico`) REFERENCES `automatico` (`id_automatico`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tneumatico_fuente`
--
ALTER TABLE `tneumatico_fuente`
  ADD CONSTRAINT `tneumatico_fuente_ibfk_1` FOREIGN KEY (`id_tablero_neumatico`) REFERENCES `tablero_neumatico` (`id_tableroneumatico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tneumatico_fuente_ibfk_2` FOREIGN KEY (`tipo_fuente`) REFERENCES `fuentepoder` (`id_fuentepoder`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tneumatico_manifold`
--
ALTER TABLE `tneumatico_manifold`
  ADD CONSTRAINT `tneumatico_manifold_ibfk_1` FOREIGN KEY (`id_tablero_neumatico`) REFERENCES `tablero_neumatico` (`id_tableroneumatico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tneumatico_manifold_ibfk_2` FOREIGN KEY (`tipo_manifold`) REFERENCES `manifold` (`id_manifold`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tneumatico_plc`
--
ALTER TABLE `tneumatico_plc`
  ADD CONSTRAINT `tneumatico_plc_ibfk_1` FOREIGN KEY (`id_tablero_neumatico`) REFERENCES `tablero_neumatico` (`id_tableroneumatico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tneumatico_plc_ibfk_2` FOREIGN KEY (`tipo_plc`) REFERENCES `plc` (`id_plc`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  ADD CONSTRAINT `unidades_balanza_ibfk_1` FOREIGN KEY (`id_unidad_al`) REFERENCES `unidad_alim` (`id_unidad_alim`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_2` FOREIGN KEY (`id_unidad_desc`) REFERENCES `unidad_descarga` (`id_unidad_descarga`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_3` FOREIGN KEY (`id_unidad_acel`) REFERENCES `unidad_acel` (`id_unidad_acel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_4` FOREIGN KEY (`id_calidad`) REFERENCES `estacion_calidad` (`id_calidad`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_5` FOREIGN KEY (`id_pesaje`) REFERENCES `unidad_pesaje` (`id_unidad_pesaje`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
