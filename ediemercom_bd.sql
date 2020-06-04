-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-11-2019 a las 23:38:32
-- Versión del servidor: 10.3.18-MariaDB-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ediemercom_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloque` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `titulo`, `subtitulo`, `texto`, `imagen`, `seccion`, `bloque`, `orden`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EMPRESA', NULL, '<p>Somos una empresa familiar fundada en 1988 por Alberto Manuel Osvaldo Tenaglia quien, trabajando en relaci&oacute;n de dependencia, y con m&aacute;s de 20 a&ntilde;os de experiencia en ventas en el rubro decide, junto a sus hijos, conformar su propio emprendimiento dedicado a la distribuci&oacute;n de mangueras y auto-partes de goma y metal.</p>\r\n\r\n<p><br />\r\nCon el ingreso de socios capitalistas con experiencia en la producci&oacute;n, se transforma en DIEMER TRADING S.A. y comienza a desarrollar la elaboraci&oacute;n de ca&ntilde;os para aspiraci&oacute;n de aire y polvillos finos, construidos con tela de algod&oacute;n engomada y estructura de alambre de hierro crudo calidad seg&uacute;n normas ISO 1006.</p>', 'empresa.jpg', 'Empresa', NULL, 'AA', NULL, '2019-04-03 15:12:19', NULL),
(2, NULL, NULL, '<p>asdasda</p>', '5c94dbc4f20ec_logo.png', 'header', 'Logo', NULL, '2019-03-22 18:57:40', '2019-04-22 18:50:25', NULL),
(3, NULL, NULL, NULL, '5c94dbc4f20ec_logo.png', 'footer', 'Logo', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content_metas`
--

CREATE TABLE `content_metas` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `content_metas`
--

INSERT INTO `content_metas` (`id`, `meta_key`, `meta_value`, `content_id`, `created_at`, `updated_at`) VALUES
(52, 'imagen_2', '5cc0476a79cdf_empresa-diemer', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(53, 'telefono', '011 4734 - 2200', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(54, 'email', 'info@e-diemer.com.ar', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(55, 'calle', 'Escultor Santiago Parodi', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(56, 'altura', '5264', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(57, 'codigo_postal', '1678', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(58, 'localidad', 'Caseros', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(59, 'provincia', 'Buenos Aires', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(60, 'titulo_imagen', '<p><strong>25 A&Ntilde;OS</strong></p>\r\n\r\n<p>DE TRAYECTORIA</p>', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(61, 'titulo_imagen_2', '<p><strong>1000 m2</strong></p>\r\n\r\n<p>DE PLANTA INDUSTRIAL</p>', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51'),
(62, 'terminos', '<p>Estos son los terminos y condiciones de la empresa</p>', 1, '2019-04-24 23:42:51', '2019-04-24 23:42:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `families`
--

INSERT INTO `families` (`id`, `nombre`, `imagen`, `orden`, `seccion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ASPIRAPOLVOS', '5c9e029d7da0c_categorias_aspirapolvos.jpg', 'aa', 'Familia', NULL, '2019-04-22 16:40:55', NULL),
(2, 'MANGUERAS INDUSTRIALES', '5c9e028d3c75a_categorias_mangueras industriales.jpg', 'bb', 'Familia', NULL, '2019-03-29 17:33:33', NULL),
(3, 'MANGUERAS ESPECIALES', '5c9e026128501_categorias_mangueras especiales.jpg', 'cc', 'Familia', '2019-03-29 17:32:49', '2019-03-29 17:32:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_products`
--

CREATE TABLE `general_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `general_products`
--

INSERT INTO `general_products` (`id`, `nombre`, `imagen`, `orden`, `seccion`, `family_id`, `created_at`, `updated_at`) VALUES
(1, 'Caños Rectos', '5cbb74ab5d140_no-disponible.jpg', 'aa', 'Producto General', 2, '2019-04-18 06:01:07', '2019-04-20 22:36:11'),
(2, 'Agua / Aire', '5cbb74beace7e_no-disponible.jpg', 'bb', 'Producto General', 2, '2019-04-18 06:01:49', '2019-04-20 22:36:30'),
(3, 'Agua Caliente y Vapor', '5cb89db9bfb7f_no-disponible.jpg', 'cc', 'Producto General', 2, '2019-04-18 06:02:18', '2019-04-18 22:54:33'),
(4, 'Hidráulica', '5cbb74e16e5bd_no-disponible.jpg', 'dd', 'Producto General', 2, '2019-04-18 06:02:36', '2019-04-20 22:37:05'),
(5, 'Hidrocarburos', '5cbb74ec59390_no-disponible.jpg', 'ee', 'Producto General', 2, '2019-04-18 06:02:56', '2019-04-20 22:37:16'),
(6, 'Productos Químicos', '5cbb74f753036_no-disponible.jpg', 'ff', 'Producto General', 2, '2019-04-18 06:03:28', '2019-04-20 22:37:27'),
(7, 'Sanitarias / Productos Alimenticios', '5cb89dd725b09_no-disponible.jpg', 'gg', 'Producto General', 2, '2019-04-18 06:04:16', '2019-04-18 22:55:03'),
(8, 'Abrasivos', '5cbb7500e6a74_no-disponible.jpg', 'hh', 'Producto General', 2, '2019-04-18 06:04:39', '2019-04-20 22:37:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subfamilia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `icons`
--

INSERT INTO `icons` (`id`, `imagen`, `titulo`, `orden`, `familia_id`, `subfamilia_id`, `seccion`, `created_at`, `updated_at`) VALUES
(1, '5cbb6c4e24194_industria_argentina.png', 'Industria Argentina', 'bb', NULL, NULL, 'trayectoria', '2019-04-20 00:45:56', '2019-04-20 22:00:30'),
(2, '5cbb6c5a080f3_calidad.png', 'calidad', 'cc', NULL, NULL, 'trayectoria', '2019-04-20 00:46:28', '2019-04-20 22:00:42'),
(4, '5cbb6c28c790f_trayecto.png', 'trayectoria', 'aa', NULL, NULL, 'trayectoria', '2019-04-20 21:59:52', '2019-04-20 21:59:52'),
(5, '5cbde30b059ea_1-diemer-iconos-arena.jpg', 'Abrasivos', 'aab', 2, 8, 'destacados', '2019-04-22 19:51:39', '2019-04-22 21:16:53'),
(6, '5cbde343ddfd1_2-diemer-iconos-riego.jpg', 'Agua', 'bb', 2, 2, 'destacados', '2019-04-22 19:52:35', '2019-04-22 19:52:35'),
(8, '5cbde53eaa941_3-diemer-iconos-alimentib.jpg', 'Productos alimenticios', 'cc', 2, 7, 'destacados', '2019-04-22 19:53:42', '2019-04-22 20:01:02'),
(9, '5cbde39bb249d_4-diemer-iconos-petroleo.jpg', 'Hidrocarburos', 'dd', 2, 5, 'destacados', '2019-04-22 19:54:03', '2019-04-22 19:54:03'),
(10, '5cbde3bc52c80_5-diemer-iconos-quimic.jpg', 'Químicos', 'ee', 2, 6, 'destacados', '2019-04-22 19:54:36', '2019-04-22 19:54:36'),
(11, '5cbde4f4db2e0_6-diemer-iconos-frigo.jpg', 'Vapor', 'gg', 2, 3, 'destacados', '2019-04-22 19:59:48', '2019-04-22 19:59:48'),
(13, '5cbdf77d12843_7-diemer-iconos.jpg', 'Minería', 'aaa', 2, 8, 'destacados', '2019-04-22 21:18:53', '2019-04-22 21:19:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatas`
--

CREATE TABLE `metadatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `palabras_clave` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatas`
--

INSERT INTO `metadatas` (`id`, `palabras_clave`, `descripcion`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'mangueras, aspirantes', 'esto es un ejemplo de descripcion', 'home', '2019-03-29 14:23:42', '2019-04-19 23:44:58');

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
(3, '2019_03_13_134015_create_contents_table', 1),
(4, '2019_03_13_182813_create-slider', 1),
(5, '2019_03_19_112328_create_product_images_table', 1),
(6, '2019_03_19_112558_create_product_variants_table', 1),
(7, '2019_03_29_105228_create_metadatas_table', 1),
(12, '2019_03_19_112219_create_families_table', 2),
(13, '2019_03_19_112230_create_general_products_table', 3),
(14, '2019_03_19_112280_create_products_table', 4),
(19, '2019_04_18_112056_create_icons_table', 5);

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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aplicacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_products_id` int(11) DEFAULT NULL,
  `family_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `aplicacion`, `construccion`, `imagen`, `archivo`, `seccion`, `orden`, `certificado`, `general_products_id`, `family_id`, `created_at`, `updated_at`) VALUES
(1, 'Expelente Servicio Liviano', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb8835dc5a3c_Exp-Agua-Liv.jpg', NULL, NULL, 'aa', NULL, 2, 2, '2019-04-18 21:02:05', '2019-04-22 14:55:26'),
(2, 'Expelente Servicio Intermedio', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Dos telas Cord de nylon 840/2, 12 a 24 hilos por pulgada.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb88464ae89d_Exp-Agua-Int.jpg', NULL, NULL, 'bb', NULL, 2, 2, '2019-04-18 21:06:28', '2019-04-22 16:49:46'),
(3, 'Expelente Servicio Pesado', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior: </strong>Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Dos a cuatro telas cord de nylon 1260/2, &nbsp;de 24 hilos por pulgada.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb8852f4fbd7_Exp-Agua-Pes.jpg', NULL, NULL, 'cc', NULL, 2, 2, '2019-04-18 21:09:51', '2019-04-22 17:01:13'),
(4, 'Expelente Servicio Extra Pesado', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior: </strong>Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Cuatro Telas cord de nylon 1260/2, 24 hilos por pulgada.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb885a24b0de_Exp-Agua-E-Pes.jpg', NULL, NULL, 'dd', NULL, 2, 2, '2019-04-18 21:11:46', '2019-04-22 17:04:59'),
(5, 'Expelente Servicio Liviano', '<p>Para descarga e impulsi&oacute;n de Hidrocarburos, Aceites minerales y derivados del Petr&oacute;leo en general, con un contenido m&aacute;ximo de arom&aacute;ticos de un 30%. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase BG.<br />\r\n<strong>Refuerzos:</strong> Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Cubierta exterior:</strong> Pol&iacute;mero de Acrilo nitrilo (NBR) con PVC, resistente a la intemperie, al ozono, agentes atmosf&eacute;ricos con buena resistencia a la abrasi&oacute;n. Con alambre de cobre incorporado para descarga electrost&aacute;tica.<br />\r\n<strong>Temperatura de trabajo:</strong> -20&ordm;C a 80&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb889032bf93_Exp-Hc-Liv.jpg', NULL, NULL, 'aa', NULL, 5, 2, '2019-04-18 21:26:11', '2019-04-22 17:31:00'),
(6, 'Expelente Servicio Pesado', '<p>Para servicio severo de descarga e impulsi&oacute;n de Hidrocarburos, Aceites minerales y derivados del Petr&oacute;leo en general, con un contenido m&aacute;ximo de arom&aacute;ticos de un 30%. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase BG.<br />\r\n<strong>Refuerzos:</strong> Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Cubierta exterior:</strong> Pol&iacute;mero de Acrilo nitrilo (NBR) con PVC, resistente a la intemperie, al ozono, agentes atmosf&eacute;ricos con buena resistencia a la abrasi&oacute;n. Con alambre de cobre incorporado para descarga electrost&aacute;tica.<br />\r\n<strong>Temperatura de trabajo:</strong> -20&ordm;C a 80&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb889c56d0cd_Exp-Hidroc-Pes.jpg', NULL, NULL, 'bb', NULL, 5, 2, '2019-04-18 21:29:25', '2019-04-22 17:35:14'),
(7, 'Expelente Servicio Extra Pesado', '<p>Para servicio severo de descarga e impulsi&oacute;n de Hidrocarburos, Aceites minerales y derivados del Petr&oacute;leo en general, con un contenido m&aacute;ximo de arom&aacute;ticos de un 30%. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase BG.<br />\r\n<strong>Refuerzos: </strong>Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Cubierta exterior:</strong> Pol&iacute;mero de Acrilo nitrilo (NBR) con PVC, resistente a la intemperie, al ozono, agentes atmosf&eacute;ricos con buena resistencia a la abrasi&oacute;n. Con alambre de cobre incorporado para descarga electrost&aacute;tica.<br />\r\n<strong>Temperatura de trabajo:</strong> -20&ordm;C a 80&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb88a6fc7ff4_Exp-Hidroc-E-Pes.jpg', NULL, '0', 'cc', NULL, 9, 2, '2019-04-18 21:32:15', '2019-04-18 21:32:15'),
(8, 'Aspirante Servicio Liviano', NULL, NULL, '5cb88b8c66d75_Asp-Agua-Liv.jpg', NULL, NULL, 'ee', NULL, 2, 2, '2019-04-18 21:37:00', '2019-04-22 16:43:17'),
(9, 'Aspirante Servicio Pesado', NULL, NULL, '5cb88bd63c2ba_Asp-Agua-Pes.jpg', NULL, NULL, 'ff', NULL, 2, 2, '2019-04-18 21:38:14', '2019-04-22 16:46:09'),
(10, 'Aspirante Servicio Liviano', NULL, NULL, '5cb88c979ef74_Asp-Hidroc-Liv.jpg', NULL, NULL, 'dd', NULL, 5, 2, '2019-04-18 21:41:27', '2019-04-22 17:23:55'),
(11, 'Aspirante Servicio Pesado', NULL, NULL, '5cb88cc01743b_Asp-Hidroc-Pes.jpg', NULL, NULL, 'ee', NULL, 5, 2, '2019-04-18 21:42:08', '2019-04-22 17:25:03'),
(12, 'Aspirante para Retorno Hidráulico', NULL, NULL, '5cb88e0358686_R4.jpg', NULL, NULL, 'aa', NULL, 4, 2, '2019-04-18 21:47:31', '2019-04-22 17:18:15'),
(13, 'Aspirante Servicio Liviano', NULL, NULL, '5cb88f194c100_Asp-Abrasivos-Liv.jpg', NULL, NULL, 'aa', NULL, 8, 2, '2019-04-18 21:52:09', '2019-04-22 18:18:10'),
(14, 'Expelente Servicio Liviano', '<p>Codigo ABEL corresponde a ABRASIVOS EXPELENTE LIVIANO</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Codigo ABEP corresponde a ABRASIVOS EXPELENTE PESADO</p>', NULL, '5cb89762a38c1_Exp-Abrasivos-Liv.jpg', NULL, NULL, 'bb', NULL, 8, 2, '2019-04-18 21:57:25', '2019-04-22 18:26:01'),
(15, 'Aspirante Servicio Liviano', NULL, NULL, '5cb894ac52041_Asp-Quimicos-Liv.jpg', NULL, NULL, 'aa', NULL, 6, 2, '2019-04-18 22:15:56', '2019-04-22 17:42:39'),
(16, 'Expelente Servicio Liviano', NULL, NULL, '5cb894d553d82_Exp-Quimicos-Liv.jpg', NULL, NULL, 'bb', NULL, 6, 2, '2019-04-18 22:16:37', '2019-04-22 18:05:21'),
(17, 'Aspirante Servicio Liviano', NULL, NULL, '5cb8959015f1f_no-disponible.jpg', NULL, NULL, 'aa', NULL, 7, 2, '2019-04-18 22:19:44', '2019-04-22 18:10:42'),
(18, 'Expelente Servicio Liviano', NULL, NULL, '5cb8961455a42_Exp-Sanitarias.jpg', NULL, NULL, 'bb', NULL, 7, 2, '2019-04-18 22:21:56', '2019-04-22 18:12:48'),
(19, 'Expelente para Agua hasta 100ºc', NULL, NULL, '5cb897c41c241_no-disponible.jpg', NULL, NULL, 'aa', NULL, 3, 2, '2019-04-18 22:29:08', '2019-04-22 17:10:18'),
(20, 'Expelente Vapor Saturado hasta 164ºc', NULL, NULL, '5cb89819e5b09_Exp-Vapor-Sat.jpg', NULL, NULL, 'bb', NULL, 3, 2, '2019-04-18 22:30:33', '2019-04-22 17:12:27'),
(24, 'Caleflex', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Manguera muy flexible y liviana, de f&aacute;cil manipulaci&oacute;n. Ideal para extracci&oacute;n de polvos o gases por aspiraci&oacute;n en talleres, astilleros, plantas industriales o para ventilaci&oacute;n de minas.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Temperatura de trabajo : -10 &deg;C a 60 &deg;C</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Largo standard : 6 metros.</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Realizada con tela de algod&oacute;n y polyester impregnada en soluci&oacute;n de caucho natural, con estructura de alambre de acero SAE 100 1006. </span></span></p>', '5ccb41ff5ab17_Caleflex Cuadrada.jpg', NULL, NULL, 'aa', NULL, 0, 1, '2019-04-20 00:03:35', '2019-05-02 23:16:15'),
(25, 'ARI', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Manguera flexible y liviana, de f&aacute;cil manipulaci&oacute;n.&nbsp;Ideal para extracci&oacute;n por aspiraci&oacute;n de polvos o gases o part&iacute;culas abrasivas que contengan algo de humedad.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Temperatura de trabajo : -10 &deg;C a 60 &deg;C</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Largo standard : 6 metros.</span></span></p>', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Con tubo interior de tela&nbsp;engomada, estructura de alambre de acero SAE 1006 y cubierta de caucho natural, que lo protege de la oxidaci&oacute;n y le aporta mayor resistencia mec&aacute;nica y por lo tanto mayor duraci&oacute;n.</span></span></p>', '5cd466b61fddd_20190507_162414.jpg', NULL, NULL, 'ab', NULL, 0, 1, '2019-04-20 00:04:02', '2019-05-09 21:43:18'),
(26, 'LEWI', NULL, NULL, '5cba37daa8d52_5cb89dd725b09_no-disponible.jpg', NULL, NULL, 'cc', NULL, 0, 1, '2019-04-20 00:04:26', '2019-04-20 00:04:26'),
(27, 'PVC', NULL, NULL, '5cba67cf0183c_no-disponible.jpg', NULL, NULL, 'dd', NULL, 0, 1, '2019-04-20 00:04:58', '2019-04-20 03:29:03'),
(28, 'CAÑOS RECTOS PARA AGUA', NULL, NULL, 'no-disponible.jpg', NULL, NULL, 'AA', NULL, 1, 2, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(29, 'CAÑOS RECTOS PARA HIDROCARBUROS', NULL, NULL, 'no-disponible.jpg', NULL, NULL, 'BB', NULL, 1, 2, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(30, 'Servicio Extra Pesado', NULL, NULL, 'no-disponible.jpg', NULL, NULL, 'ee', NULL, 5, 2, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(31, 'PU', NULL, NULL, 'no-disponible.jpg', NULL, NULL, 'az', NULL, 0, 1, '2019-04-24 23:31:57', '2019-04-25 18:38:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_mm` int(11) DEFAULT NULL,
  `interior_pulg` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exterior_mm` int(11) DEFAULT NULL,
  `presion_bar` int(11) DEFAULT NULL,
  `presion_libras` int(11) DEFAULT NULL,
  `numero_tabla` int(191) DEFAULT NULL,
  `titulo_tabla` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_variants`
--

INSERT INTO `product_variants` (`id`, `codigo`, `interior_mm`, `interior_pulg`, `exterior_mm`, `presion_bar`, `presion_libras`, `numero_tabla`, `titulo_tabla`, `product_id`, `created_at`, `updated_at`) VALUES
(116, 'AEL - 013', 13, '1/2', 25, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(117, 'AEL - 019', 19, '3/4', 31, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(118, 'AEL - 022', 22, '7/8', 33, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(119, 'AEL - 25', 25, '1', 37, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(120, 'AEL - 28', 28, '11/8', 39, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(121, 'AEL - 32', 32, '11/4', 44, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(122, 'AEL - 38', 38, '11/2', 50, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(123, 'AEL - 45', 45, '13/4', 56, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(124, 'AEL - 50', 50, '2', 63, 5, 73, 1, NULL, 1, '2019-04-22 14:55:26', '2019-04-22 14:55:26'),
(181, 'AP019', 19, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(182, 'AP025', 25, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(183, 'AP032', 32, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(184, 'AP038', 38, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(185, 'AP040', 40, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(186, 'AP050', 50, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(187, 'AP063', 63, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(188, 'AP076', 76, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(189, 'AP089', 89, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(190, 'AP102', 102, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(191, 'AP127', 127, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(192, 'AP152', 152, NULL, NULL, NULL, NULL, 1, NULL, 27, '2019-04-22 15:38:47', '2019-04-22 15:38:47'),
(193, 'AR032', 32, '1 1/4', 41, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(194, 'AR038', 38, '1 1/2', 47, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(195, 'AR045', 45, '1 3/4', 54, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(196, 'AR051', 51, '2', 60, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(197, 'AR060', 60, '2 1/3', 69, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(198, 'AR064', 64, '2 1/2', 73, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(199, 'AR070', 70, '2 3/4', 79, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(200, 'AR076', 76, '3', 85, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(201, 'AR080', 80, '3 1/4', 89, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(202, 'AR089', 89, '3 1/2', 98, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(203, 'AR101', 101, '4', 110, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(204, 'AR114', 114, '4 1/2', 123, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(205, 'AR127', 127, '5', 136, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(206, 'AR152', 152, '6', 161, 2, 29, 1, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS ( T/LEWY )', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(207, 'ART050', 51, '2', 62, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(208, 'ART064', 64, '2 1/2', 75, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(209, 'ART076', 76, '3', 87, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(210, 'ART089', 89, '3 1/2', 100, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(211, 'ART101', 101, '4', 112, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(212, 'ART114', 114, '4 1/2', 125, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(213, 'ART127', 127, '5', 138, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(214, 'ART152', 152, '6', 163, 2, 29, 2, 'ASPIRANTE PARA POLVOS O ABRASIVOS FINOS REFORZADO', 26, '2019-04-22 15:49:04', '2019-04-22 15:49:04'),
(215, 'RA-020', 20, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(216, 'RA-022', 22, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(217, 'RA-025', 25, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(218, 'RA-030', 30, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(219, 'RA-032', 32, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(220, 'RA-35', 35, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(221, 'RA-038', 38, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(222, 'RA-040', 40, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(223, 'RA-040', 40, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(224, 'RA-042', 42, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(225, 'RA-045', 45, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(226, 'RA-048', 48, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(227, 'RA-057', 57, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(228, 'RA-060', 60, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(229, 'RA-064', 64, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(230, 'RA-070', 70, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(231, 'RA-076', 76, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(232, 'RA-080', 80, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(233, 'RA-089', 89, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(234, 'RA-101', 101, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(235, 'RA-114', 114, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(236, 'RA-127', 127, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(237, 'RA-152', 152, NULL, NULL, NULL, NULL, 1, NULL, 28, '2019-04-22 15:55:20', '2019-04-22 15:55:20'),
(238, 'RH-020', 20, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(239, 'RH-022', 22, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(240, 'RH-025', 25, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(241, 'RH-028', 28, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(242, 'RH-030', 30, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(243, 'RH-032', 32, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(244, 'RH-035', 35, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(245, 'RH-038', 38, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(246, 'RH-040', 40, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(247, 'RH-042', 42, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(248, 'RH-045', 45, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(249, 'RH-048', 48, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(250, 'RH-050', 50, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(251, 'RH-057', 57, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(252, 'RH-060', 60, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(253, 'RH-064', 64, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(254, 'RH-070', 70, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(255, 'RH-076', 76, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(256, 'RH-080', 80, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(257, 'RH-089', 89, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(258, 'RH-101', 101, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(259, 'RH-114', 114, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(260, 'RH-127', 127, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(261, 'RH-152', 152, NULL, NULL, NULL, NULL, 1, NULL, 29, '2019-04-22 16:00:32', '2019-04-22 16:00:32'),
(262, 'AAL-019', 19, '3/4', 31, 5, 73, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(263, 'AAL-025', 25, '1', 38, 5, 73, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(264, 'AAL-032', 32, '1 1/4', 44, 5, 73, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(265, 'AAL-038', 38, '1 1/2', 51, 5, 73, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(266, 'AAL-045', 45, '1 7/9', 57, 5, 73, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(267, 'AAL-050', 50, '2', 62, 4, 58, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(268, 'AAL-057', 57, '2 1/4', 70, 4, 58, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(269, 'AAL-057', 64, '2 1/2', 76, 4, 58, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(270, 'AAL-076', 76, '3', 92, 4, 58, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(271, 'AAL-089', 89, '3 1/2', 105, 4, 58, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(272, 'AAL-101', 101, '4', 117, 4, 58, 1, NULL, 8, '2019-04-22 16:43:17', '2019-04-22 16:43:17'),
(273, 'AAP-050', 50, '2', 67, 12, 175, 1, NULL, 9, '2019-04-22 16:46:09', '2019-04-22 16:46:09'),
(274, 'AAP-064', 64, '2 1/2', 81, 10, 146, 1, NULL, 9, '2019-04-22 16:46:09', '2019-04-22 16:46:09'),
(275, 'AAP-076', 76, '3', 97, 10, 146, 1, NULL, 9, '2019-04-22 16:46:09', '2019-04-22 16:46:09'),
(276, 'AAP-101', 101, '4', 124, 10, 146, 1, NULL, 9, '2019-04-22 16:46:09', '2019-04-22 16:46:09'),
(277, 'AEI-019', 19, '3/4', 31, 30, 438, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(278, 'AEI-025', 25, '1', 38, 25, 365, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(279, 'AEI-032', 32, '1 1/4', 44, 20, 292, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(280, 'AEI-038', 38, '1 1/2', 50, 17, 248, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(281, 'AEI-045', 45, '1 7/9', 57, 15, 219, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(282, 'AEI-050', 50, '2', 63, 10, 146, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(283, 'AEI-057', 57, '2 1/4', 69, 9, 131, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(284, 'AEI-064', 64, '2 1/2', 76, 7, 102, 1, NULL, 2, '2019-04-22 16:49:46', '2019-04-22 16:49:46'),
(285, 'AEP-019', 19, '3/4', 32, 40, 584, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(286, 'AEP-025', 25, '1', 39, 30, 438, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(287, 'AEP-032', 32, '1 1/4', 45, 30, 438, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(288, 'AEP-038', 38, '1 1/2', 51, 25, 365, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(289, 'AEP-045', 45, '1 7/9', 58, 20, 292, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(290, 'AEP-050', 50, '2', 65, 20, 292, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(291, 'AEP-057', 57, '2 1/4', 71, 15, 219, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(292, 'AEP-064', 64, '2 1/2', 79, 12, 175, 1, NULL, 3, '2019-04-22 17:01:13', '2019-04-22 17:01:13'),
(293, 'AEEP-019', 19, '3/4', 32, 40, 584, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(294, 'AEEP-025', 25, '1', 39, 30, 438, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(295, 'AEEP-032', 32, '1 1/4', 45, 30, 438, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(296, 'AEEP-038', 38, '1 1/2 51', 51, 25, 365, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(297, 'AEEP-045', 45, '1 7/9', 58, 20, 292, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(298, 'AEEP-050', 50, '2', 65, 20, 292, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(299, 'AEEP-057', 57, '2 1/4', 71, 15, 219, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(300, 'AEEP-064', 64, '2 1/2', 79, 12, 175, 1, NULL, 4, '2019-04-22 17:04:59', '2019-04-22 17:04:59'),
(320, 'VSEL-013', 13, '1/2', 22, 10, 146, 1, NULL, 19, '2019-04-22 17:13:07', '2019-04-22 17:13:07'),
(321, 'VSEL-016', 16, '5/8', 26, 10, 146, 1, NULL, 19, '2019-04-22 17:13:07', '2019-04-22 17:13:07'),
(322, 'VSEL-019', 19, '3/4', 29, 10, 146, 1, NULL, 19, '2019-04-22 17:13:07', '2019-04-22 17:13:07'),
(323, 'VSEL-025', 25, '3/4', 38, 10, 146, 1, NULL, 19, '2019-04-22 17:13:07', '2019-04-22 17:13:07'),
(324, 'VSEL-032', 32, '1 1/4', 45, 10, 146, 1, NULL, 19, '2019-04-22 17:13:07', '2019-04-22 17:13:07'),
(325, 'VSEL-038', 38, '1 1/2', 52, 10, 146, 1, NULL, 19, '2019-04-22 17:13:07', '2019-04-22 17:13:07'),
(326, 'VSEL-045', 45, '1 3/4', 59, 10, 146, 1, NULL, 19, '2019-04-22 17:13:07', '2019-04-22 17:13:07'),
(327, 'VSTEL-016', 16, '3/4', 28, 30, 438, 1, NULL, 20, '2019-04-22 17:14:34', '2019-04-22 17:14:34'),
(328, 'VSTEL-019', 19, '3/4', 31, 25, 365, 1, NULL, 20, '2019-04-22 17:14:34', '2019-04-22 17:14:34'),
(329, 'VSTEL-025', 25, '3/4', 38, 20, 292, 1, NULL, 20, '2019-04-22 17:14:34', '2019-04-22 17:14:34'),
(330, 'VSTEL-032', 32, '1 1/4', 45, 15, 219, 1, NULL, 20, '2019-04-22 17:14:34', '2019-04-22 17:14:34'),
(331, 'VSTEL-038', 38, '1 2/4', 51, 15, 219, 1, NULL, 20, '2019-04-22 17:14:34', '2019-04-22 17:14:34'),
(332, 'VSTEL-045', 45, '1 3/4', 58, 10, 146, 1, NULL, 20, '2019-04-22 17:14:34', '2019-04-22 17:14:34'),
(333, 'HDAL-016', 16, '5/8', 31, 21, 306, 1, NULL, 12, '2019-04-22 17:18:15', '2019-04-22 17:18:15'),
(334, 'HDAL-019', 19, '3/4', 34, 19, 277, 1, NULL, 12, '2019-04-22 17:18:15', '2019-04-22 17:18:15'),
(335, 'HDAL-025', 25, '1', 40, 17, 248, 1, NULL, 12, '2019-04-22 17:18:15', '2019-04-22 17:18:15'),
(336, 'HDAL-032', 32, '1 1/4', 48, 14, 204, 1, NULL, 12, '2019-04-22 17:18:15', '2019-04-22 17:18:15'),
(337, 'HDAL-038', 38, '1 1/2', 54, 10, 146, 1, NULL, 12, '2019-04-22 17:18:15', '2019-04-22 17:18:15'),
(338, 'HDAL-045', 45, '1 3/4', 61, 8, 117, 1, NULL, 12, '2019-04-22 17:18:15', '2019-04-22 17:18:15'),
(339, 'HDAL-050', 50, '2', 67, 7, 102, 1, NULL, 12, '2019-04-22 17:18:15', '2019-04-22 17:18:15'),
(340, 'HAL-019', 19, '3/4', 31, 6, 88, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(341, 'HAL-025', 25, '1', 38, 6, 88, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(342, 'HAL-032', 32, '1 1/4', 44, 6, 88, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(343, 'HAL-038', 38, '1 1/2', 51, 5, 73, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(344, 'HAL-045', 45, '1 3/4', 57, 5, 73, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(345, 'HAL-050', 51, '2', 62, 4, 58, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(346, 'HAL-057', 57, '2 1/4', 70, 4, 58, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(347, 'HAL-064', 64, '2 1/2', 76, 4, 58, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(348, 'HAL-076', 76, '3', 92, 4, 58, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(349, 'HAL-089', 89, '3 1/2', 105, 4, 58, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(350, 'HAL-101', 101, '4', 117, 4, 58, 1, NULL, 10, '2019-04-22 17:23:55', '2019-04-22 17:23:55'),
(351, 'HAP-050', 51, '2', 67, 12, 175, 1, NULL, 11, '2019-04-22 17:25:03', '2019-04-22 17:25:03'),
(352, 'HAP-076', 76, '3', 97, 10, 146, 1, NULL, 11, '2019-04-22 17:25:03', '2019-04-22 17:25:03'),
(353, 'HAP-101', 101, '4', 124, 10, 146, 1, NULL, 11, '2019-04-22 17:25:03', '2019-04-22 17:25:03'),
(354, 'HEL-013', 13, '1/2', 25, 30, 438, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(355, 'HEL-016', 16, '5/8', 28, 30, 438, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(356, 'HEL-019', 19, '3/4', 31, 30, 438, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(357, 'HEL-022', 22, '6/7', 33, 25, 365, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(358, 'HEL-025', 25, '1', 37, 25, 365, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(359, 'HEL-028', 28, '1 1/9', 39, 20, 292, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(360, 'HEL-032', 32, '1 1/4', 44, 20, 292, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(361, 'HEL-038', 38, '1 1/2', 50, 17, 248, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(362, 'HEL-045', 45, '1 7/9', 56, 15, 219, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(363, 'HEL-050', 50, '2', 63, 10, 146, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(364, 'HEL-057', 57, '2 1/4', 69, 9, 131, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(365, 'HEL-064', 64, '2 1/2', 76, 7, 102, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(366, 'HEL-076', 76, '3', 91, 6, 88, 1, NULL, 5, '2019-04-22 17:31:00', '2019-04-22 17:31:00'),
(367, 'HEP-013', 13, '1/2', 26, 40, 584, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(368, 'HEP-016', 16, '5/8', 29, 40, 584, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(369, 'HEP-019', 19, '3/4', 32, 40, 584, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(370, 'HEP-025', 25, '1', 37, 30, 438, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(371, 'HEP-032', 32, '1 1/4', 45, 30, 438, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(372, 'HEP-038', 38, '1 1/2', 51, 24, 350, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(373, 'HEP-045', 45, '1 7/9', 58, 20, 292, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(374, 'HEP-050', 51, '2', 65, 17, 248, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(375, 'HEP-057', 57, '2 1/4', 71, 15, 219, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(376, 'HEP-064', 64, '2 1/2', 79, 14, 204, 1, NULL, 6, '2019-04-22 17:35:14', '2019-04-22 17:35:14'),
(377, 'HEEP-019', 19, '3/4', 40, 60, 875, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(378, 'HEEP-025', 25, '1', 47, 60, 875, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(379, 'HEEP-032', 32, '1 1/4', 53, 40, 584, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(380, 'HEEP-038', 38, '1 1/2', 60, 40, 584, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(381, 'HEEP-045', 45, '1 7/9', 66, 40, 584, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(382, 'HEEP-050', 51, '2', 72, 35, 511, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(383, 'HEEP-057', 57, '2 1/4', 79, 35, 511, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(384, 'HEEP-064', 64, '2 1/2', 87, 30, 438, 1, NULL, 30, '2019-04-22 17:39:34', '2019-04-22 17:39:34'),
(385, 'PQAL-032', 32, '1 1/4', 44, 6, 88, 1, NULL, 15, '2019-04-22 17:42:39', '2019-04-22 17:42:39'),
(386, 'PQAL-038', 38, '1 1/2', 51, 5, 73, 1, NULL, 15, '2019-04-22 17:42:39', '2019-04-22 17:42:39'),
(387, 'PQAL-045', 45, '1 3/4', 57, 5, 73, 1, NULL, 15, '2019-04-22 17:42:39', '2019-04-22 17:42:39'),
(388, 'PQAL-050', 51, '2', 62, 4, 58, 1, NULL, 15, '2019-04-22 17:42:39', '2019-04-22 17:42:39'),
(389, 'PQAL-057', 57, '2 1/4', 70, 4, 58, 1, NULL, 15, '2019-04-22 17:42:39', '2019-04-22 17:42:39'),
(390, 'PQAL-064', 64, '2 1/2', 76, 4, 58, 1, NULL, 15, '2019-04-22 17:42:39', '2019-04-22 17:42:39'),
(391, 'PQAL-076', 76, '3', 92, 4, 58, 1, NULL, 15, '2019-04-22 17:42:39', '2019-04-22 17:42:39'),
(392, 'PQEL-016', 16, '5/8', 29, 5, 73, 1, NULL, 16, '2019-04-22 18:05:21', '2019-04-22 18:05:21'),
(393, 'PQEL-019', 19, '3/4', 32, 5, 73, 1, NULL, 16, '2019-04-22 18:05:21', '2019-04-22 18:05:21'),
(394, 'PQEL-025', 25, '1', 39, 5, 73, 1, NULL, 16, '2019-04-22 18:05:21', '2019-04-22 18:05:21'),
(395, 'PQEL-032', 32, '1 1/4', 45, 5, 73, 1, NULL, 16, '2019-04-22 18:05:21', '2019-04-22 18:05:21'),
(396, 'PQEL-038', 38, '1 1/2', 51, 5, 73, 1, NULL, 16, '2019-04-22 18:05:21', '2019-04-22 18:05:21'),
(397, 'PQEL-045', 45, '1 3/4', 59, 5, 73, 1, NULL, 16, '2019-04-22 18:05:21', '2019-04-22 18:05:21'),
(398, 'PQEL-050', 51, '2', 66, 5, 73, 1, NULL, 16, '2019-04-22 18:05:21', '2019-04-22 18:05:21'),
(399, 'SAL-025', 25, '1', 38, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(400, 'SAL-032', 32, '1 1/4', 44, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(401, 'SAL-038', 38, '1 1/2', 51, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(402, 'SAL-045', 45, '1 3/4', 59, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(403, 'SAL-050', 50, '2', 64, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(404, 'SAL-068', 68, '2 3/4', 84, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(405, 'SAL-076', 76, '3', 92, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(406, 'SAL-101', 101, '4', 121, 4, 58, 1, 'ASPIRANTE SANITARIA PARA COMESTIBLES - BODEGUERAS', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(407, 'SALI-038', 38, '1', 57, 4, 58, 2, 'ASPIRANTE SANITARIA INABOLLABLE PARA COMESTIBLES', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(408, 'SALI-050', 50, '2', 70, 4, 58, 2, 'ASPIRANTE SANITARIA INABOLLABLE PARA COMESTIBLES', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(409, 'SALI-064', 64, '3', 85, 4, 58, 2, 'ASPIRANTE SANITARIA INABOLLABLE PARA COMESTIBLES', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(410, 'SALI-076', 76, '3', 97, 4, 58, 2, 'ASPIRANTE SANITARIA INABOLLABLE PARA COMESTIBLES', 17, '2019-04-22 18:10:42', '2019-04-22 18:10:42'),
(411, 'VIEL-025', 25, '1', 40, 10, 146, 1, NULL, 18, '2019-04-22 18:12:48', '2019-04-22 18:12:48'),
(412, 'VIEL-032', 32, '1', 53, 10, 146, 1, NULL, 18, '2019-04-22 18:12:48', '2019-04-22 18:12:48'),
(413, 'VIEL-038', 38, '1', 53, 10, 146, 1, NULL, 18, '2019-04-22 18:12:48', '2019-04-22 18:12:48'),
(414, 'VIEL-045', 45, '2', 61, 10, 146, 1, NULL, 18, '2019-04-22 18:12:48', '2019-04-22 18:12:48'),
(415, 'VIEL-051', 51, '2', 67, 10, 146, 1, NULL, 18, '2019-04-22 18:12:48', '2019-04-22 18:12:48'),
(416, 'VIEL-068', 68, '3', 83, 10, 146, 1, NULL, 18, '2019-04-22 18:12:48', '2019-04-22 18:12:48'),
(417, 'ABRAL-050', 50, '2', 62, 4, 58, 1, NULL, 13, '2019-04-22 18:18:10', '2019-04-22 18:18:10'),
(418, 'ABRAL-064', 64, '2 1/2', 76, 4, 58, 1, NULL, 13, '2019-04-22 18:18:10', '2019-04-22 18:18:10'),
(419, 'ABRAL-076', 76, '3', 92, 4, 58, 1, NULL, 13, '2019-04-22 18:18:10', '2019-04-22 18:18:10'),
(420, 'ABRAL-089', 89, '3 1/2', 105, 4, 58, 1, NULL, 13, '2019-04-22 18:18:10', '2019-04-22 18:18:10'),
(421, 'ABRAL-101', 101, '4', 117, 4, 58, 1, NULL, 13, '2019-04-22 18:18:10', '2019-04-22 18:18:10'),
(422, 'ABEL-013', 13, '1/2', 28, 10, 146, 1, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(423, 'ABEL-019', 19, '3/4', 34, 10, 146, 1, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(424, 'ABEL-025', 25, '1', 40, 10, 146, 1, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(425, 'ABEL-032', 32, '1 1/4', 47, 10, 146, 1, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(426, 'ABEL-038', 38, '1 1/2', 53, 10, 146, 1, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(427, 'ABEL-045', 45, '1 7/9', 62, 10, 146, 1, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(428, 'ABEL-050', 50, '2', 67, 10, 146, 1, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(429, 'ABEP-013', 13, '1/2', 32, 20, 292, 2, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(430, 'ABEP-019', 19, '3/4', 41, 20, 292, 2, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(431, 'ABEP-025', 25, '1', 47, 20, 292, 2, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(432, 'ABEP-032', 32, '1 1/4', 54, 20, 292, 2, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(433, 'ABEP-038', 38, '1 1/2', 60, 20, 292, 2, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(434, 'ABEP-045', 45, '1 7/9', 69, 20, 292, 2, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(435, 'ABEP-050', 50, '2', 74, 20, 292, 2, NULL, 14, '2019-04-22 18:26:01', '2019-04-22 18:26:01'),
(471, 'PUZ035', 35, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(472, 'PUZ040', 40, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(473, 'PUZ050', 50, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(474, 'PUZ060', 60, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(475, 'PUZ065', 65, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(476, 'PUZ070', 70, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(477, 'PUZ075', 75, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(478, 'PUZ080', 80, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(479, 'PUZ090', 90, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(480, 'PUZ100', 100, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(481, 'PUZ110', 110, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(482, 'PUZ120', 120, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(483, 'PUZ125', 125, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(484, 'PUZ140', 140, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(485, 'PUZ150', 150, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(486, 'PUZ155', 155, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(487, 'PUZ160', 160, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(488, 'PUZ180', 180, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(489, 'PUZ200', 200, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(490, 'PUZ225', 225, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(491, 'PUZ250', 250, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(492, 'PUZ300', 300, NULL, NULL, NULL, NULL, 1, NULL, 31, '2019-04-25 18:38:35', '2019-04-25 18:38:35'),
(561, 'C0110', 110, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(562, 'C0115', 115, '4 1/4', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(563, 'C0120', 120, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(564, 'C0125', 125, '5', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(565, 'C0130', 130, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(566, 'C0140', 140, '5 1/2', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(567, 'C0150', 150, '6', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(568, 'C0160', 160, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(569, 'C0170', 170, '6 1/2', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(570, 'C0180', 180, '7', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(571, 'CC0190', 190, '7 1/2', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(572, 'C0200', 200, '8', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(573, 'C0230', 230, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(574, 'C0250', 250, '10', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(575, 'C0300', 300, '12', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(576, 'C0032', 32, '1 1/4', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(577, 'C0038', 38, '1 1/2', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(578, 'C0040', 40, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(579, 'C0042', 42, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(580, 'C0045', 45, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(581, 'C0048', 48, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(582, 'C0050', 50, '2', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(583, 'C0055', 55, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(584, 'C0060', 60, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(585, 'C0063', 63, '2 1/4', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(586, 'C0065', 65, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(587, 'C0070', 70, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(588, 'C0075', 75, '3', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(589, 'C0080', 80, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(590, 'C0085', 85, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(591, 'C0090', 90, '3 1/2', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(592, 'C0095', 95, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(593, 'C0100', 100, '4', NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(594, 'C0105', 105, NULL, NULL, NULL, NULL, 1, NULL, 24, '2019-05-02 23:16:15', '2019-05-02 23:16:15'),
(639, 'ARI025', 25, '1', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(640, 'ARI028', 28, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(641, 'ARI032', 32, '1 1/4', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(642, 'ARI035', 35, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(643, 'ARI038', 38, '1 1/2', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(644, 'ARI042', 42, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(645, 'ARI045', 45, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(646, 'ARI048', 48, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(647, 'ARI050', 50, '2', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(648, 'ARI057', 57, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(649, 'ARI060', 60, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(650, 'ARI064', 64, '2 1/2', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(651, 'ARI070', 70, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(652, 'ARI076', 76, '3', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(653, 'ARI080', 80, NULL, NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(654, 'ARI090', 90, '3 1/2', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(655, 'ARI101', 101, '4', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(656, 'ARI114', 114, '4 1/4', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(657, 'ARI127', 127, '5', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(658, 'ARI152', 152, '6', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(659, 'ARI180', 180, '7', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18'),
(660, 'ARI203', 203, '8', NULL, NULL, NULL, 1, NULL, 25, '2019-05-09 21:43:18', '2019-05-09 21:43:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `titulo`, `subtitulo`, `texto`, `imagen`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'slider 1', NULL, '<p><strong>F&Aacute;BRICA DE </strong></p>\r\n\r\n<p><strong>MANGUERAS INDUSTRIALES</strong></p>\r\n\r\n<p>de goma, hidr&aacute;ulica, mangueras para baja y media presi&oacute;n</p>', '5cb863560139b_slider-home.jpg', 'home', 'AA', '2019-03-29 15:09:08', '2019-04-19 23:28:26'),
(2, NULL, NULL, NULL, '5cbdc50c1cb28_slider-03.jpg', NULL, 'bb', '2019-04-22 17:43:40', '2019-04-22 17:43:40'),
(3, NULL, NULL, NULL, '5cbdc51ddc79e_slider-03.jpg', NULL, 'bb', '2019-04-22 17:43:57', '2019-04-22 17:43:57'),
(4, NULL, NULL, NULL, '5cbdc5fc52800_slider-03.jpg', NULL, 'bb', '2019-04-22 17:47:40', '2019-04-22 17:47:40'),
(5, NULL, NULL, NULL, '5cbdc6a190a78_slider-03.jpg', NULL, 'bb', '2019-04-22 17:50:25', '2019-04-22 17:50:25'),
(6, NULL, NULL, NULL, '5cbdc6ad2f7d7_slider-03.jpg', 'home', 'bb', '2019-04-22 17:50:37', '2019-04-22 17:50:37'),
(7, NULL, NULL, NULL, '5cbdc6e452da9_slider-06.jpg', 'home', 'cc', '2019-04-22 17:51:32', '2019-04-22 17:51:32'),
(8, NULL, NULL, NULL, '5cbdc6f5c7ebb_slider-02.jpg', 'home', 'dd', '2019-04-22 17:51:49', '2019-04-22 17:51:49'),
(9, NULL, NULL, NULL, '5cbdc7036a0a6_slider-04.jpg', 'home', 'ee', '2019-04-22 17:52:03', '2019-04-22 17:52:03'),
(10, NULL, NULL, NULL, '5cbdc7548b06f_slider-01.jpg', 'home', 'ff', '2019-04-22 17:53:24', '2019-04-22 17:53:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin', 'alfonzodiez@gmail.com', NULL, '$2y$10$2yfvQ81HZLEs7XD.PISE0eNLReeB2R4C5N.BMe1yCmONV2m9qaH5.', 1, NULL, NULL, NULL),
(2, 'Pablo Cabañuz', 'pablo', 'pcabanuz@osole.es', NULL, '$2y$10$rFx3E6Af49t5dNuN7H08BezKkeMtA/NWJC4pcC8UFjq8WnuTNslAe', 1, NULL, '2019-04-04 05:52:40', '2019-04-04 05:52:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `content_metas`
--
ALTER TABLE `content_metas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `general_products`
--
ALTER TABLE `general_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_products_family_id_foreign` (`family_id`);

--
-- Indices de la tabla `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatas`
--
ALTER TABLE `metadatas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_family_id_foreign` (`family_id`);

--
-- Indices de la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `content_metas`
--
ALTER TABLE `content_metas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `general_products`
--
ALTER TABLE `general_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `metadatas`
--
ALTER TABLE `metadatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `general_products`
--
ALTER TABLE `general_products`
  ADD CONSTRAINT `general_products_family_id_foreign` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_family_id_foreign` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
