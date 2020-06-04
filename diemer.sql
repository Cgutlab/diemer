-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2019 a las 21:56:47
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diemer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci,
  `subtitulo` text COLLATE utf8mb4_unicode_ci,
  `texto` longtext COLLATE utf8mb4_unicode_ci,
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
(2, NULL, NULL, '<p>asdasda</p>', '5c94dbc4f20ec_logo.png', 'Logo', NULL, 'AA', '2019-03-22 18:57:40', '2019-03-22 18:57:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content_metas`
--

CREATE TABLE `content_metas` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  `content_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `content_metas`
--

INSERT INTO `content_metas` (`id`, `meta_key`, `meta_value`, `content_id`, `created_at`, `updated_at`) VALUES
(30, 'imagen_2', '5c9e2a8a4a342_empresa imagen 2.jpg', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(31, 'telefono', '011 4734 - 2200', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(32, 'email', 'info@e-diemer.com.ar', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(33, 'calle', 'Escultor Santiago Parodi', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(34, 'altura', '5264', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(35, 'codigo_postal', '2110', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(36, 'localidad', 'Caseros', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(37, 'provincia', 'Buenos Aires', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(38, 'titulo_imagen', '<p><strong>25 A&Ntilde;OS</strong></p>\r\n\r\n<p>DE TRAYECTORIA</p>', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(39, 'titulo_imagen_2', '<p><strong>1000 m2</strong></p>\r\n\r\n<p>DE PLANTA INDUSTRIAL</p>', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19'),
(40, 'terminos', '<p>Estos son los terminos y condiciones de la empresa</p>', 1, '2019-04-03 15:12:19', '2019-04-03 15:12:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci,
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
(1, 'ASPIRAPOLVOS', '5c9e029d7da0c_categorias_aspirapolvos.jpg', NULL, 'Familia', NULL, '2019-03-29 17:33:49', NULL),
(2, 'MANGUERAS INDUSTRIALES', '5c9e028d3c75a_categorias_mangueras industriales.jpg', NULL, 'Familia', NULL, '2019-03-29 17:33:33', NULL),
(3, 'MANGUERAS ESPECIALES', '5c9e026128501_categorias_mangueras especiales.jpg', NULL, 'Familia', '2019-03-29 17:32:49', '2019-03-29 17:32:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_products`
--

CREATE TABLE `general_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci,
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
  `orden` text COLLATE utf8mb4_unicode_ci,
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
(4, '5cbb6c28c790f_trayecto.png', 'trayectoria', 'aa', NULL, NULL, 'trayectoria', '2019-04-20 21:59:52', '2019-04-20 21:59:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatas`
--

CREATE TABLE `metadatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `palabras_clave` text COLLATE utf8mb4_unicode_ci,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `seccion` text COLLATE utf8mb4_unicode_ci,
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
  `aplicacion` text COLLATE utf8mb4_unicode_ci,
  `construccion` text COLLATE utf8mb4_unicode_ci,
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
(1, 'Expelente Servicio Liviano', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb8835dc5a3c_Exp-Agua-Liv.jpg', NULL, '0', 'aa', NULL, 2, 2, '2019-04-18 21:02:05', '2019-04-18 21:02:05'),
(2, 'Expelente Servicio Intermedio', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Dos telas Cord de nylon 840/2, 12 a 24 hilos por pulgada.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb88464ae89d_Exp-Agua-Int.jpg', NULL, '0', 'bb', NULL, 2, 2, '2019-04-18 21:06:28', '2019-04-18 21:06:28'),
(3, 'Expelente Servicio Pesado', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior: </strong>Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Dos a cuatro telas cord de nylon 1260/2, &nbsp;de 24 hilos por pulgada.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb8852f4fbd7_Exp-Agua-Pes.jpg', NULL, '0', 'cc', NULL, 2, 2, '2019-04-18 21:09:51', '2019-04-18 21:09:51'),
(4, 'Expelente Servicio Extra Pesado', '<p>Para descarga e impulsi&oacute;n de Agua, Aire y fluidos no corrosivos, con un contenido de s&oacute;lidos en suspensi&oacute;n de hasta un 10%. Utilizada en industrias pesadas, Miner&iacute;a, Petroleo, Construcci&oacute;n, etc.. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior y cubierta exterior: </strong>Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase AA. Refuerzos: Cuatro Telas cord de nylon 1260/2, 24 hilos por pulgada.<br />\r\n<strong>Temperatura de trabajo:</strong> -30&ordm;C a 65&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb885a24b0de_Exp-Agua-E-Pes.jpg', NULL, '0', 'dd', NULL, 2, 2, '2019-04-18 21:11:46', '2019-04-18 21:11:46'),
(5, 'Expelente Servicio Liviano', '<p>Para descarga e impulsi&oacute;n de Hidrocarburos, Aceites minerales y derivados del Petr&oacute;leo en general, con un contenido m&aacute;ximo de arom&aacute;ticos de un 30%. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase BG.<br />\r\n<strong>Refuerzos:</strong> Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Cubierta exterior:</strong> Pol&iacute;mero de Acrilo nitrilo (NBR) con PVC, resistente a la intemperie, al ozono, agentes atmosf&eacute;ricos con buena resistencia a la abrasi&oacute;n. Con alambre de cobre incorporado para descarga electrost&aacute;tica.<br />\r\n<strong>Temperatura de trabajo:</strong> -20&ordm;C a 80&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb889032bf93_Exp-Hc-Liv.jpg', NULL, '0', 'aa', NULL, 5, 2, '2019-04-18 21:26:11', '2019-04-18 21:26:11'),
(6, 'Expelente Servicio Pesado', '<p>Para servicio severo de descarga e impulsi&oacute;n de Hidrocarburos, Aceites minerales y derivados del Petr&oacute;leo en general, con un contenido m&aacute;ximo de arom&aacute;ticos de un 30%. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase BG.<br />\r\n<strong>Refuerzos:</strong> Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Cubierta exterior:</strong> Pol&iacute;mero de Acrilo nitrilo (NBR) con PVC, resistente a la intemperie, al ozono, agentes atmosf&eacute;ricos con buena resistencia a la abrasi&oacute;n. Con alambre de cobre incorporado para descarga electrost&aacute;tica.<br />\r\n<strong>Temperatura de trabajo:</strong> -20&ordm;C a 80&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb889c56d0cd_Exp-Hidroc-Pes.jpg', NULL, '0', 'bb', NULL, 5, 2, '2019-04-18 21:29:25', '2019-04-18 21:29:25'),
(7, 'Expelente Servicio Extra Pesado', '<p>Para servicio severo de descarga e impulsi&oacute;n de Hidrocarburos, Aceites minerales y derivados del Petr&oacute;leo en general, con un contenido m&aacute;ximo de arom&aacute;ticos de un 30%. Superficie exterior lisa para resistir el arrastre y el uso riguroso.</p>', '<p><strong>Tubo interior:</strong> Pol&iacute;mero seg&uacute;n norma IRAM 113.001 Tipo y Clase BG.<br />\r\n<strong>Refuerzos: </strong>Fibras sint&eacute;ticas de alta tenacidad previamente tratadas.<br />\r\n<strong>Cubierta exterior:</strong> Pol&iacute;mero de Acrilo nitrilo (NBR) con PVC, resistente a la intemperie, al ozono, agentes atmosf&eacute;ricos con buena resistencia a la abrasi&oacute;n. Con alambre de cobre incorporado para descarga electrost&aacute;tica.<br />\r\n<strong>Temperatura de trabajo:</strong> -20&ordm;C a 80&ordm;C<br />\r\n<strong>Presentaci&oacute;n:</strong> Rollos de 25 metros. Por otros largos o di&aacute;metros, consultar.</p>', '5cb88a6fc7ff4_Exp-Hidroc-E-Pes.jpg', NULL, '0', 'cc', NULL, 9, 2, '2019-04-18 21:32:15', '2019-04-18 21:32:15'),
(8, 'Aspirante Servicio Liviano', NULL, NULL, '5cb88b8c66d75_Asp-Agua-Liv.jpg', NULL, '0', 'ee', NULL, 2, 2, '2019-04-18 21:37:00', '2019-04-18 21:37:00'),
(9, 'Aspirante Servicio Pesado', NULL, NULL, '5cb88bd63c2ba_Asp-Agua-Pes.jpg', NULL, '0', 'ff', NULL, 2, 2, '2019-04-18 21:38:14', '2019-04-18 21:38:14'),
(10, 'Aspirante Servicio Liviano', NULL, NULL, '5cb88c979ef74_Asp-Hidroc-Liv.jpg', NULL, '0', 'dd', NULL, 5, 2, '2019-04-18 21:41:27', '2019-04-18 21:41:27'),
(11, 'Aspirante Servicio Pesado', NULL, NULL, '5cb88cc01743b_Asp-Hidroc-Pes.jpg', NULL, '0', 'ee', NULL, 5, 2, '2019-04-18 21:42:08', '2019-04-18 21:42:08'),
(12, 'Aspirante para Retorno Hidráulico', NULL, NULL, '5cb88e0358686_R4.jpg', NULL, '0', 'aa', NULL, 4, 2, '2019-04-18 21:47:31', '2019-04-18 21:47:31'),
(13, 'Aspirante Servicio Liviano', NULL, NULL, '5cb88f194c100_Asp-Abrasivos-Liv.jpg', NULL, '0', 'aa', NULL, 8, 2, '2019-04-18 21:52:09', '2019-04-18 21:52:09'),
(14, 'Expelente Servicio Liviano', NULL, NULL, '5cb89762a38c1_Exp-Abrasivos-Liv.jpg', NULL, '0', 'bb', NULL, 8, 2, '2019-04-18 21:57:25', '2019-04-18 22:27:30'),
(15, 'Aspirante Servicio Liviano', NULL, NULL, '5cb894ac52041_Asp-Quimicos-Liv.jpg', NULL, '0', 'aa', NULL, 6, 2, '2019-04-18 22:15:56', '2019-04-18 22:15:56'),
(16, 'Expelente Servicio Liviano', NULL, NULL, '5cb894d553d82_Exp-Quimicos-Liv.jpg', NULL, '0', 'bb', NULL, 6, 2, '2019-04-18 22:16:37', '2019-04-18 22:16:37'),
(17, 'Aspirante Servicio Liviano', NULL, NULL, '5cb8959015f1f_no-disponible.jpg', NULL, '0', 'aa', NULL, 7, 2, '2019-04-18 22:19:44', '2019-04-18 22:19:44'),
(18, 'Expelente Servicio Liviano', NULL, NULL, '5cb8961455a42_Exp-Sanitarias.jpg', NULL, '0', 'bb', NULL, 7, 2, '2019-04-18 22:21:56', '2019-04-18 22:21:56'),
(19, 'Expelente para Agua hasta 100ºc', NULL, NULL, '5cb897c41c241_no-disponible.jpg', NULL, '0', 'aa', NULL, 3, 2, '2019-04-18 22:29:08', '2019-04-18 22:29:08'),
(20, 'Expelente Vapor Saturado hasta 164ºc', NULL, NULL, '5cb89819e5b09_Exp-Vapor-Sat.jpg', NULL, '0', 'bb', NULL, 3, 2, '2019-04-18 22:30:33', '2019-04-18 22:30:33'),
(24, 'Caleflex', NULL, NULL, '5cba37a738aac_5cb89e382e6dd_no-disponible.jpg', NULL, NULL, 'aa', NULL, 0, 1, '2019-04-20 00:03:35', '2019-04-20 00:03:35'),
(25, 'ARI', NULL, NULL, '5cba37c21cae0_5cb89e382e6dd_no-disponible.jpg', NULL, NULL, 'bb', NULL, 0, 1, '2019-04-20 00:04:02', '2019-04-20 00:04:02'),
(26, 'LEWI', NULL, NULL, '5cba37daa8d52_5cb89dd725b09_no-disponible.jpg', NULL, NULL, 'cc', NULL, 0, 1, '2019-04-20 00:04:26', '2019-04-20 00:04:26'),
(27, 'PVC', NULL, NULL, '5cba67cf0183c_no-disponible.jpg', NULL, NULL, 'dd', NULL, 0, 1, '2019-04-20 00:04:58', '2019-04-20 03:29:03');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci,
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
(1, 'slider 1', NULL, '<p><strong>F&Aacute;BRICA DE </strong></p>\r\n\r\n<p><strong>MANGUERAS INDUSTRIALES</strong></p>\r\n\r\n<p>de goma, hidr&aacute;ulica, mangueras para baja y media presi&oacute;n</p>', '5cb863560139b_slider-home.jpg', 'home', 'AA', '2019-03-29 15:09:08', '2019-04-19 23:28:26');

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
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `content_metas`
--
ALTER TABLE `content_metas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
