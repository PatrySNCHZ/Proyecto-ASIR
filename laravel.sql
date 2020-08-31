-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2020 a las 12:45:53
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE `accesorios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre_Accesorio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `plataformas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `accesorios`
--

INSERT INTO `accesorios` (`id`, `Nombre_Accesorio`, `Precio`, `plataformas_id`, `created_at`, `updated_at`) VALUES
(1, 'Mando PSX', 20, 1, '2019-12-16 17:28:07', '2019-12-16 17:28:07'),
(2, 'Mando PS2', 20, 2, '2019-12-16 17:28:24', '2019-12-16 17:28:24'),
(3, 'Mando PS3', 30, 3, '2019-12-16 17:28:39', '2019-12-16 17:28:39'),
(4, 'Mando PS4', 60, 4, '2019-12-16 17:28:52', '2019-12-16 17:28:52'),
(5, 'Joy-Con', 79, 6, '2019-12-16 17:29:16', '2019-12-16 17:29:16'),
(6, 'Funda Zelda NSW', 20, 6, '2019-12-16 17:29:29', '2019-12-16 17:29:29'),
(7, 'Mando Xbox One', 59, 14, '2019-12-16 17:33:30', '2019-12-16 17:33:30'),
(8, 'Mando Xbox/PC KROM', 19, 15, '2019-12-16 17:33:52', '2019-12-16 17:33:52'),
(9, 'Funda Mario NSW', 20, 6, '2019-12-16 17:34:14', '2019-12-16 17:34:14'),
(10, 'Funda Nintendo 2DS Pokémon', 15, 7, '2019-12-16 17:34:35', '2019-12-16 17:34:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre_Empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_Fundacion` date NOT NULL,
  `Sede` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `Nombre_Empresa`, `Fecha_Fundacion`, `Sede`, `Web`, `created_at`, `updated_at`) VALUES
(1, 'Sony', '1946-05-07', 'Japón', 'www.sony.net', NULL, NULL),
(2, 'Nintendo', '1889-09-23', 'Japón', 'www.nintendo.com', NULL, NULL),
(3, 'Microsoft', '1975-04-04', 'EE.UU', 'www.microsoft.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(10) UNSIGNED NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `genero`, `created_at`, `updated_at`) VALUES
(1, 'Acción', NULL, NULL),
(2, 'Disparos', NULL, NULL),
(3, 'Estrategia', NULL, NULL),
(4, 'Simulación', NULL, NULL),
(5, 'Deporte', NULL, NULL),
(6, 'Carreras', NULL, NULL),
(7, 'Aventura', NULL, NULL),
(8, 'Rol', NULL, NULL),
(9, 'Puzzle', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_10_23_185019_create_plataformas', 1),
(18, '2019_10_31_121923_create_productos_table', 1),
(19, '2019_11_16_115548_create_videojuegos_table', 1),
(20, '2019_11_16_121033_create_plataformas_videojuegos_table', 1),
(21, '2019_11_16_163743_create_accesorios_table', 1),
(22, '2019_11_25_180949_create_generos_table', 1),
(23, '2019_11_25_211925_create_empresas_table', 1),
(24, '2019_11_27_233836_create_roles_table', 1),
(25, '2019_12_01_121542_create_reviews_table', 1),
(26, '2019_12_01_121626_create_comentarios_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataformas`
--

CREATE TABLE `plataformas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre_Plataforma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `Fecha_Salida_Plataforma` int(11) NOT NULL,
  `Precio` decimal(5,2) NOT NULL,
  `Portatil` tinyint(1) NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plataformas`
--

INSERT INTO `plataformas` (`id`, `Nombre_Plataforma`, `empresa_id`, `Fecha_Salida_Plataforma`, `Precio`, `Portatil`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'PlayStation', 1, 1994, '299.00', 0, 'Videoconsola de sobremesa de 32 bits. Se considera la consola más exitosa de la quinta generación. Se pudieron vender casi 105.500.000 unidades en diez años. También estuvo disponible su modelo PsOne. Hoy en día se puede adquirir una versión mini llamada PlayStation Classic por 99,99 €', '2019-12-16 15:54:49', '2019-12-16 15:54:49'),
(2, 'PlayStation 2', 1, 2000, '449.00', 0, 'La segunda consola de sobremesa producida por Sony. Es la videoconsola más vendida de la historia. Posee aproximadamente unos 3870 títulos. Pertenece a la sexta generación de consolas y fue la que más tiempo se mantuvo en el mercado. Tuvo variantes como Ps2 slim y una gran cantidad de accesorios.', '2019-12-16 16:02:30', '2019-12-16 16:02:30'),
(3, 'PlayStation 3', 1, 2007, '599.00', 0, 'La tercera videoconsola del modelo PlayStation de Sony. Consola de la séptima generación. Su producción paró en terminando el año 2017. Fue otro gran éxito además de por su hardware y de por sus casi 2500 titulos por el servicio online.', '2019-12-16 16:08:26', '2019-12-16 16:08:26'),
(4, 'PlayStation 4', 1, 2013, '399.00', 0, 'Forma parte de las consolas de octava generación. Es la sucesora de PlayStation 3. Hoy en día sigue en producción y ha vendido más de 10.000.000 de unidades. Tiene retrocompatibilidad con juegos de PlayStation 2 en descargas digitales hechas desde el servicio PlayStation Store.', '2019-12-16 16:12:57', '2019-12-16 16:12:57'),
(5, 'PSP / PSP Vita', 1, 2004, '150.00', 1, 'Es una consola portátil de la empresa Sony. A pesar de su éxito en sus primeros días de comercialización no se pudo equiparar a las ventas de su competidora directa. Aún así PSP tuvo varios modelos posteriores al primero desde el modelo E3000, Go y por último la versión mejorada PS Vita perteneciente a la siguiente generación.', '2019-12-16 16:23:58', '2019-12-16 16:23:58'),
(6, 'Nintendo Switch', 2, 2017, '300.00', 1, 'Es la novena consola de videojuegos principal desarrollada por Nintendo. Pertenece a la octava generación. Se considera a Switch una consola híbrida. Se puede usar como consola de sobremesa en una estación de acoplamiento para conectarla a un televisor o como una portátil al igual que Nintendo 3DS. En sólo dos años ha vendido aproximadamente 41.680.000 unidades.', '2019-12-16 16:43:41', '2019-12-16 16:43:41'),
(7, 'Nintendo 3DS', 2, 2011, '249.00', 1, 'Es una familia de consolas de Nintendo que abarca desde la Nintendo 3DS hasta sus revisiones XL o 2DS. Esta consola es retrocompatible con su predecesora y la atracción principal de esta es poder mostrar gráficos en 3DS sin necesidad de gafas especiales.', '2019-12-16 16:47:15', '2019-12-16 16:47:15'),
(8, 'Wii / Wii U', 2, 2006, '249.00', 0, 'Son dos consolas de sobremesa producidas por Nintendo. Pertenecientes a la séptima y octava generación de consolas son las sucesoras directas de GameCube.', '2019-12-16 16:52:40', '2019-12-16 16:52:40'),
(9, 'GameCube', 2, 2002, '199.00', 0, 'Consola de sexta generación producida por Nintendo. Fue la primera consola de Nintendo que no contó en su fecha con un juego de Mario a su lanzamiento. Nintendo optó en su fabricación por unidades ópticas olvidándose del cartucho ROM de la Nintendo 64.', '2019-12-16 16:59:45', '2019-12-16 16:59:45'),
(10, 'Game Boy B&N / Color', 2, 1991, '55.00', 1, 'Es una serie de consolas portátiles alimentadas con pilas y comercializadas por Nintendo. La Game Boy es oficialmente la tercera consola más vendida del mundo. Después de su modelo con la pantalla en blanco y negro, comercializó su variante a color (90€). Después salieron otros dos modelos retrocompatibles Advance / SP que usaban el mismo tipo de cartucho pero con tamaño menor.', '2019-12-16 17:05:41', '2019-12-16 17:05:41'),
(11, 'Game Boy Advance / SP', 2, 2001, '130.00', 1, 'Una popular consola de videojuegos de la compañía Nintendo. Esta consola tuvo un catálogo bastante amplio teniendo en cuenta su retrocompatibilidad con los juegos de Game Boy y Game Boy Color. En total entre Advance y SP llegaron casi a los 2700 títulos. Advance SP fue una revisión con batería de carga y pantalla retroiluminable.', '2019-12-16 17:11:51', '2019-12-16 17:11:51'),
(12, 'Xbox', 3, 2002, '479.00', 0, 'Videoconsola de sobremesa de sexta generación producida por Microsoft. La primera de esta empresa en colaboración con Intel. Fue una consola creada con un sistema basado en la arquitectura los ordenadores personales. Vendió aproximadamente unas 24.650.000 consolas.', '2019-12-16 17:17:08', '2019-12-16 17:17:08'),
(13, 'Xbox 360', 3, 2005, '399.00', 0, 'Videoconsola de sobremesa de séptima generación creada y producida por Microsoft. Desde su lanzamiento existieron cinco modelos diferentes. A pesar de que se anunció su discontinuación los servicios online siguen hoy en día en activo. Esta consola ha conseguido competir tanto con la segunda como con la tercera consola de Sony.', '2019-12-16 17:21:01', '2019-12-16 17:21:01'),
(14, 'Xbox One', 3, 2013, '499.00', 0, 'Tercera consola de sobremesa de la marca Xbox. Forma parte de las videoconsolas de octava generación. Actualmente compite con PlayStation 4 y Nintendo Switch.', '2019-12-16 17:24:04', '2019-12-16 17:24:04'),
(15, 'PC', 3, 0, '0.00', 1, 'Ordenadores personales también dedicados a los videojuegos. El precio puede variar según las carácteristicas que prefiera el usuario. Normalmente su empresa podría ser cualquier fabricante como: ASUS, MSI, Gigabyte, etc, pero la mayoría suele tener un sistema operativo Windows así que se le considera a veces como otra consola Microsoft al poder usar casi todo el catálogo de estas consolas en el PC. Puede ser o no portátil, dependiendo de las preferencias del usuario.', '2019-12-16 17:27:00', '2019-12-16 17:27:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma_videojuego`
--

CREATE TABLE `plataforma_videojuego` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plataforma_id` int(10) UNSIGNED NOT NULL,
  `videojuego_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plataforma_videojuego`
--

INSERT INTO `plataforma_videojuego` (`id`, `plataforma_id`, `videojuego_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, NULL, NULL),
(2, 4, 1, NULL, NULL),
(3, 15, 1, NULL, NULL),
(4, 14, 1, NULL, NULL),
(5, 13, 2, NULL, NULL),
(6, 15, 2, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 15, 3, NULL, NULL),
(9, 4, 3, NULL, NULL),
(10, 6, 3, NULL, NULL),
(11, 14, 3, NULL, NULL),
(12, 10, 4, NULL, NULL),
(13, 9, 6, NULL, NULL),
(14, 11, 5, NULL, NULL),
(15, 1, 7, NULL, NULL),
(16, 2, 8, NULL, NULL),
(17, 5, 9, NULL, NULL),
(18, 12, 10, NULL, NULL),
(19, 8, 11, NULL, NULL),
(20, 7, 12, NULL, NULL),
(21, 4, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `NombreProducto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `videojuegos_id` int(10) UNSIGNED NOT NULL,
  `plataformas_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reviews`
--

INSERT INTO `reviews` (`id`, `titulo`, `texto`, `users_id`, `videojuegos_id`, `plataformas_id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Netflix va a estrenar pronto la serie basada en el videojuego The Witcher', 'Hace unos meses supimos que Netflix estaba trabajando en una serie basada en el popular videojuego The Witcher que a su vez está basado en la saga de libros de Geralt de Rivia. \r\n\r\nEsta popular serie se estrenará en este mes de Diciembre de 2019 y contará con Henry Cavill en el papel del protagonista, el brujo más querido por la comunidad de los videojuegos, Geralt.', 1, 1, 15, 'maxresdefault.jpg', '2019-12-16 19:02:48', '2019-12-16 19:02:48'),
(2, 'Overwatch 2 no verá la luz hasta después de 2020', 'Hace unos meses en la Blizzcon anunciaron la nueva entrega de Overwatch. Al parecer esta entrega traerá un nuevo modo PvE en el que podremos hacer misiones contra la IA y podremos subir de nivel a nuestros personajes, además de añadirle mejoras a sus habilidades. \r\n\r\nBlizzard ha anunciado que este juego no verá la luz hasta dentro de varios años ya que aún está en su primera fase de desarrollo.', 1, 3, 15, 'maxresdefaulwretwt.jpg', '2019-12-16 19:06:16', '2019-12-16 19:06:16'),
(3, 'Animal Crossing New Horizons saldrá en Marzo 2020', 'La entrega de Animal Crossing para Nintendo Switch saldrá a principios del año 2020 y no a finales del 2019 como se tenía previsto. \r\n\r\nAl parecer aún queda bastante en su desarrollo y la empresa desarrolladora no ha querido precipitarse con su lanzamiento.', 1, 11, 6, '1560271856_503918_1560271961_noticia_normal.jpg', '2019-12-16 19:10:01', '2019-12-16 19:10:01'),
(4, 'La trilogía Tomb Raider vuelve de oferta.', 'Al parecer las navidades han llegado antes para nuestra protagonista Lara y Square Enix ha puesto en oferta la trilogía completa en un pack además de por separado en la plataforma de videojuegos de PC, Steam.\r\n\r\nTomb Raider (2013): 4,99 €\r\nThe Rise of the Tomb Raider: 9,99 €\r\nThe Shadow of the Tomb Raider: 19,99€\r\n\r\nPack trilogía Tomb Raider: 29,99€\r\n\r\n¿A que esperas para hacerte con ellos antes de que se agote la oferta?', 1, 2, 15, 'TOM_RAIDER_TRILOGY_Crackern_Esports.png', '2019-12-16 19:14:04', '2019-12-16 19:14:04'),
(5, 'Jak II: El renegado - Análisis', 'Jak & Daxter marco un antes y después en esta generación, ya habíamos disfrutado de las maravillas de Naughty Dog en PlayStation con Crash Bandicoot. Este personaje fue uno de los más carismáticos en la gris de Sony, y cuando llegó su hermana mayor quisieron romper un poco con la imagen, no estancarse y crear algo nuevo.\r\n\r\nLa principal característica en este nuevo capítulo de las aventuras de Jak y Daxter es el ambiente más maduro y oscuro que se le a impreso al titulo. Para empezar nos encontramos en un futuro sombrío alejado de los parajes naturales que visitamos en la primera parte, a una sociedad confinada en una ciudad fortaleza debido a la invasión e los Cabezachapas y además bajo el yugo de un tirano.\r\n\r\nDespués nos encontramos con que el Jak a sido objeto de experimento de Eco oscuro, experimentos que le han causado tener un lado oscuro  y belicoso. De hecho Jak parece mucho más maduro, atrevido y hablador! (Una de las características de este personaje en la primera parte es que no hablaba).\r\n\r\nEn la jugabilidad nos encontramos otras novedades como la utilización de armas al estilo de Ratchet y Clank, y nuevos vehículos como una tabla aerodeslizada para surfear por escenario. Pero veamos más profundamente estas novedades.\r\n\r\nJak II supone una gran mejora sobre su predecesor Jak & Daxter, pero quizás no tan impresionante como esperábamos muchos. La causa de esto es que el primer titulo de Naugthy Dog fue toda una revolución tecnológica en su día: ausencia de cargas entre niveles, vistas interminables de la isla desde cualquier zona del escenario pudiendo observar otros niveles, suavidad y manejo increíbles.', 1, 8, 2, 'Jak-II-Wallpapers-jak-and-daxter-12836107-1600-1200.jpg', '2019-12-16 19:18:49', '2019-12-16 19:18:49'),
(6, 'The Last of Us Part II retrasa su lanzamiento', 'El esperado juego de la desarrolladora Naughty Dog retrasará su lanzamiento. En principio el juego iba a ser vendido a partir del día 21 de Febrero del año 2020 y se ha rerasado hasta mayo de ese mismo año. \r\n\r\nAl parecer la desarrolladora quiere pulir un poco más las mecánicas y la jugabilidad antes de sacarlo al mercado.', 1, 13, 4, '450_1000.jpg', '2019-12-16 19:23:22', '2019-12-16 19:23:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre_rol`, `created_at`, `updated_at`) VALUES
(1, 'administrador', NULL, NULL),
(2, 'usuario', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT 2,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@gamesnow.com', NULL, '$2y$10$jMRaVSrs.TsIcEUWntAJJ.Y7orDXVVJM11F6xn2dMwouLtZ0UCjEq', 1, NULL, '2019-12-16 15:46:04', '2019-12-16 15:46:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre_Videojuego` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `Precio` int(11) NOT NULL,
  `genero_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `Nombre_Videojuego`, `Fecha_Salida`, `Precio`, `genero_id`, `sinopsis`, `Ruta`, `created_at`, `updated_at`) VALUES
(1, 'The Witcher', '2015-05-19', 59, '8', 'Videojuego de rol desarrollado por CD Projekt RED. Está basado en la saga literaria de Geralt de Rivia. Cuenta la historia de Geralt de Rivia, un cazador de monstruos conocido como brujo. Tiene una variedad de armas y hechizos y podremos además hablar con ciertos personajes no controlables del juego y recibiremos ciertas recompensas, pistas o castigos según nuestras acciones. Geralt recibe una carta de su amante Yennefer de Vegerberg diciendo que necesita localizarlo loantes posible. Después de la búsqueda de Yennefer, descubre algunos secretos sobre Ciri, una chica a la que él entrenó cuando era más pequeña.', 'thewitcher3.jpg', '2019-12-16 17:41:22', '2019-12-16 17:41:22'),
(2, 'Tomb Raider', '2013-03-01', 59, '7', 'Lara emprende su primera expedición a bordo del \"Endurance\", con la intención de encontrar el reino perdido de Yamatai. Aunque Whitman está en contra de seguir adelante, la expedición se adentra en el Triángulo del Dragón. El barco es azotado por una tormenta y termina naufragando, dejando a los supervivientes varados en una isla. Lara se separa de los demás al llegar a la orilla y es capturada por un extraño. Ella logra escapar mientras su captor muere cuando la cueva se derrumba. A medida que Lara intenta localizar a los otros supervivientes, encuentra más evidencia de que la isla está habitada y no necesariamente sólo por seres humanos.', 'tombraider.jpg', '2019-12-16 17:51:00', '2019-12-16 17:51:00'),
(3, 'Overwatch', '2016-05-24', 29, '2', 'Overwatch pone a los jugadores en equipos de seis personas, con cada persona escogiendo uno de varios héroes disponibles, cada uno con movimientos y habilidades únicas. Los héroes están divididos en tres clases: Daño, Tanque y Apoyo. Los jugadores de cada equipo trabajan juntos para atacar y defender puntos de control o para atacar/defender \"cargas\".', 'overwatch.jpg', '2019-12-16 17:55:56', '2019-12-16 17:55:56'),
(4, 'Pokémon Edición Roja', '1996-02-27', 39, '8', 'Cuenta la historia de un entrenador Pokémon llamado Red en la región de Kanto. Fue una de las primeras entregas de este reconocido y popular videojuego. Rojo contiene los primeros 150 Pokémon.', 'gb-pok-omon-rojo-car-etula-frontal-.jpg', '2019-12-16 18:05:16', '2019-12-16 18:05:16'),
(5, 'Super Mario Bros 3', '2003-10-17', 39, '7', 'Narra las aventuras de Mario y su hermano Luigi aventurandose por los 8 reinos y enfrentandose a Bowser.', 'Super+Mario+Advance+4+-+Super+Mario+Bros.+3+(USA)-image.jpg', '2019-12-16 18:14:46', '2019-12-16 18:14:46'),
(6, 'Pokémon Colosseum', '2004-05-14', 45, '1', 'Un juego de lucha multijugador basado en la franquicia Pokémon que tuvo su debut en la consola GameCube. El juego incluye además un modo batalla con diversas copas al estilo Pokémon Stadium. En él podremos combatir con pokémon obtenidos en el modo historia o en los juegos de Game Boy Advance y batallas dobles.', 'pokemon-colosseum-201423203615_1.jpg', '2019-12-16 18:18:01', '2019-12-16 18:18:01'),
(7, 'Gran Turismo', '1998-05-08', 29, '6', 'El jugador debe maniobrar un automóvil para competir contra conductores artificialmente inteligentes en varias pistas de carreras. El juego usa dos modos diferentes: Modo Arcade y Modo Simulación (Modo Gran Turismo en PAL y versiones japonesas). En el modo arcade, el jugador puede elegir libremente los cursos y vehículos que desea utilizar. Las carreras ganadoras desbloquean autos y pistas adicionales.', '51P4J8TCNAL._SX466_.jpg', '2019-12-16 18:23:44', '2019-12-16 18:23:44'),
(8, 'Jak II: El Renegado', '2003-10-14', 49, '7', 'El juego comienza con Jak, Daxter (los protagonistas) y Samos (su vigilante) observando como Keira (la hija de Samos y de quien Jak está enamorado) les muestra el \"Transporte de la Grieta\" y la \"Puerta Precursor de la Grieta\". Cuando lo activan, la puerta abre un portal al que son lanzados los cuatro. Aparecen en Villa Refugio, dirigida por el Barón Praxis quien se encuentra en guerra contra una raza de bestias llamada Cabezachapas. El grupo es separado a su llegada, y Jak es apresado por el capitán de la Guardia Carmesí. Mientras se encuentra en Prisión, se experimenta Eco Oscuro con él, transformándolo parcialmente en una bestia.', 'Jak_II.webp', '2019-12-16 18:31:16', '2019-12-16 18:31:16'),
(9, 'Fate Extra', '2010-07-22', 49, '8', 'Al despertar en un mundo virtual extraño sin ningún recuerdo del pasado, el personaje principal (Hakuno Kishinami) se ve obligado a luchar por la supervivencia en una guerra que no entienden por un premio más allá del valor; la oportunidad de que se conceda el deseo de uno. Con solo un enigmático \"Sirviente\" a su lado, el protagonista tendrá que enfrentarse a amigos y enemigos en batallas hasta la muerte para no solo obtener posesión de un misterioso objeto conocido como el \"Santo Grial\", sino también para encontrar el responde a la pregunta más importante de todas: \"¿Quién soy yo?\".', '8174bu6i++L._AC_SL1500_.jpg', '2019-12-16 18:36:35', '2019-12-16 18:36:35'),
(10, 'Halo', '2001-11-15', 49, '2', 'Halo: Combat Evolved se convirtió nada más ponerse a la venta en un clásico instantáneo, a merced de un sistema de juego sencillo y rápido pero con un buen número de posibilidades, así como una historia que enganchaba desde el minuto uno y que ha dado a luz todo un universo de libros, cómics, series', '934396141552554162.jpg', '2019-12-16 18:41:49', '2019-12-16 18:41:49'),
(11, 'Animal Crossing City Folk', '2008-12-05', 39, '4', 'Es un juego de simulación en el que debes ayudar a desarrollar una ciudad o pueblo en el que los vecinos son animales que interactúan con tu personaje, te venden objetos, ropa e incluso puedes hipotecar tu casa.', 'Animal_Crossing_Lets_Go_To_The_City_portada.jpeg', '2019-12-16 18:46:15', '2019-12-16 18:46:15'),
(12, 'Fire Emblem: Awakening', '2013-02-19', 39, '8', 'El juego es un videojuego de rol táctico por turnos, donde el jugador tiene que mover a sus personajes dentro de una cuadrícula. El sistema de juego consiste en mover a los personajes a distintas posiciones con el fin de atacar al equipo opuesto, o defenderse de sus ataques. Los personajes poseen un cierto número de puntos de vida, cuando es atacado, disminuyen, y el personaje es derrotado cuando pierde todos ellos. Las batallas se ganan, normalmente, atacando el grupo opuesto hasta que todos los personajes enemigos han perdido todos sus puntos de vida.', 'fire_emblem_3ds-2231586.jpg', '2019-12-16 18:49:04', '2019-12-16 18:49:04'),
(13, 'The Last of Us Part II', '2020-05-31', 59, '7', 'Las aventuras de Ellie vuelven después de que en la primera parte Joel y ella tuviesen que recorrer numerosos paisajes y aventuras luchando contra la infección que había asolado casi toda la humanidad en la tierra. Ahora con muchos menos sobrevivientes Ellie tendrá que enfrentarse a las consecuencias de ser quien es.', '71pwkpJ1t6L._SY741_.jpg', '2019-12-16 19:21:15', '2019-12-16 19:21:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_review_id_foreign` (`review_id`),
  ADD KEY `comentarios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
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
-- Indices de la tabla `plataformas`
--
ALTER TABLE `plataformas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plataforma_videojuego`
--
ALTER TABLE `plataforma_videojuego`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plataforma_videojuego_plataforma_id_foreign` (`plataforma_id`),
  ADD KEY `plataforma_videojuego_videojuego_id_foreign` (`videojuego_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_users_id_foreign` (`users_id`),
  ADD KEY `reviews_videojuegos_id_foreign` (`videojuegos_id`),
  ADD KEY `reviews_plataformas_id_foreign` (`plataformas_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `plataformas`
--
ALTER TABLE `plataformas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `plataforma_videojuego`
--
ALTER TABLE `plataforma_videojuego`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`),
  ADD CONSTRAINT `comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `plataforma_videojuego`
--
ALTER TABLE `plataforma_videojuego`
  ADD CONSTRAINT `plataforma_videojuego_plataforma_id_foreign` FOREIGN KEY (`plataforma_id`) REFERENCES `plataformas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plataforma_videojuego_videojuego_id_foreign` FOREIGN KEY (`videojuego_id`) REFERENCES `videojuegos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_plataformas_id_foreign` FOREIGN KEY (`plataformas_id`) REFERENCES `plataformas` (`id`),
  ADD CONSTRAINT `reviews_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_videojuegos_id_foreign` FOREIGN KEY (`videojuegos_id`) REFERENCES `videojuegos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
