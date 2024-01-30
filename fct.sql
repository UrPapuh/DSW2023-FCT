-- Active: 1700591690136@@127.0.0.1@3306
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fct`
--
CREATE DATABASE IF NOT EXISTS `fct` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `fct`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choices`
--

CREATE TABLE `choices` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `company_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

CREATE TABLE `companies` (
  `id` int NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mode` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `name`, `url`, `mode`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ATOS', 'https://atos.net/es/spain ', 'online', 'Desarrollo de aplicaciones a grandes empresas. Muy variadas dependiendo del proyecto.Java Spring, React / Angular,...\r\n', '2024-01-30 13:07:49', '2024-01-30 13:07:49'),
(2, 'Lean Mind', 'https://leanmind.es/es/', 'online', 'Desarrollo de aplicaciones y asesoramiento a empresas de desarrollo. Software de calidad, principios de diseño, patrones, BDD, TDD, DDD, Typescript.\r\n', '2024-01-30 13:07:49', '2024-01-30 13:07:49'),
(3, 'CodeBay', 'https://www.codebay-innovation.com/es/inicio/', 'semipresencial', 'Desarrollo de portales a grandes empresas\r\nCMS específico de Adobe.', '2024-01-30 13:09:57', '2024-01-30 13:09:57'),
(4, 'Ayuntamiento de Adeje', 'https://www.adeje.es/', 'presencial', 'Gestión municipal. Desarrollo de aplicaciones propias.\r\n', '2024-01-30 13:09:57', '2024-01-30 13:09:57'),
(5, 'STV', 'http://stvcanarias.com/ ', 'presencial', 'Distribución y reparación de máquinas de vending. Desarrollo de aplicaciones propias para la gestión de las reparaciones, etc.\r\n', '2024-01-30 13:11:36', '2024-01-30 13:11:36'),
(6, 'GOWEB', 'https://www.goweb.es/', 'presencial', 'Mantenimiento tecnológico y desarrollo software Wordpress.\r\n', '2024-01-30 13:11:36', '2024-01-30 13:11:36'),
(7, 'Akrolih', 'https://akrolih.com/', 'online', 'Asesoramiento, sitio web, comercio electrónico, CMS: Wordpress, PrestaShop (Modificar módulos) CRM a medida. Laravel\r\nSEO y marketing\r\n', '2024-01-30 13:13:03', '2024-01-30 13:13:03'),
(8, 'Medano Solution', 'https://medanosol.es/es', 'online', 'Desarrollo de WebApp. React, typescript, tailwind, mongo, docker, graphQL\r\n', '2024-01-30 13:13:03', '2024-01-30 13:13:03'),
(9, 'Conectatec', 'https://www.conectatec.com/ ', 'presencial', 'Innovación y marketing para hoteles. Desarrollo y mantenimiento de Webs, WebApps.', '2024-01-30 13:16:30', '2024-01-30 13:16:30'),
(10, 'Blue Grow', 'https://thebluegrow.com/', 'online', 'Presencia Web y posicionamiento. Estrategias de marketing. Wordpress / Elementor / Plugins\r\nSEO y marketing Diseño web.\r\n', '2024-01-30 13:16:30', '2024-01-30 13:16:30'),
(11, 'Nexo365', 'https://nexo365.com', 'presencial', 'Instalación y mantenimiento de alarmas, seguridad, TPV. Desarrollo de App propia (CRM)\r\n', '2024-01-30 13:17:58', '2024-01-30 13:17:58'),
(12, 'Turitop', 'https://www.turitop.com/es/', 'online', 'Presencia Web y posicionamiento. Gestión de reserva de eventos. Wordpress / Módulos propios\r\n', '2024-01-30 13:17:58', '2024-01-30 13:17:58'),
(13, 'Telepizza', 'https://www.telepizza.es/', 'presencial', 'Dedicada a la realización de pizza y servicio a domicilio. Su secreto está en la masa.\r\n', '2024-01-30 13:17:58', '2024-01-30 13:17:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `profesor` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `profesor`, `created_at`, `updated_at`) VALUES
(1, 'Andrés', '123', 1, '2023-01-26 16:45:22', '2023-01-26 16:45:22'),
(2, 'Markus', '123', 0, '2023-01-26 16:45:22', '2023-01-26 16:45:22'),
(3, 'David', '123', 0, '2024-01-30 12:54:18', '2024-01-30 12:54:18'),
(4, 'Victor', '123', 0, '2024-01-30 12:54:18', '2024-01-30 12:54:18'),
(5, 'Marcos', '123', 0, '2024-01-30 12:55:04', '2024-01-30 12:55:04'),
(6, 'Khalifa', '123', 0, '2024-01-30 12:55:04', '2024-01-30 12:55:04'),
(7, 'Minghai', '123', 0, '2024-01-30 12:55:39', '2024-01-30 12:55:39'),
(8, 'José', '123', 0, '2024-01-30 12:55:39', '2024-01-30 12:55:39'),
(9, 'Atteneri', '123', 0, '2024-01-30 12:56:01', '2024-01-30 12:56:01'),
(10, 'Raúl', '123', 0, '2024-01-30 12:56:01', '2024-01-30 12:56:01'),
(11, 'Andrew', '123', 0, '2024-01-30 12:56:27', '2024-01-30 12:56:27'),
(12, 'Tati', '123', 0, '2024-01-30 12:56:27', '2024-01-30 12:56:27'),
(13, 'Airam', '123', 0, '2024-01-30 12:56:50', '2024-01-30 12:56:50'),
(14, 'Jorge', '123', 0, '2024-01-30 12:56:50', '2024-01-30 12:56:50'),
(15, 'Adexe', '123', 0, '2024-01-30 12:57:49', '2024-01-30 12:57:49'),
(16, 'César', '123', 0, '2024-01-30 12:57:49', '2024-01-30 12:57:49'),
(17, 'Cristo', '123', 0, '2024-01-30 12:57:49', '2024-01-30 12:57:49'),
(18, 'Elena', '123', 1, '2024-01-30 13:00:39', '2024-01-30 13:00:39'),
(19, 'Eva', '123', 1, '2024-01-30 13:00:39', '2024-01-30 13:00:39'),
(20, 'Ángel', '123', 1, '2024-01-30 13:00:39', '2024-01-30 13:00:39');

--
-- Índices para tablas volcadas
--
INSERT INTO `choices` VALUES 
(1,12,2,'2024-01-30 09:50:30','2024-01-30 09:50:30'),
(2,12,3,'2024-01-30 09:50:30','2024-01-30 09:50:30'),
(3,3,1,'2024-01-30 09:51:55','2024-01-30 09:51:55'),
(4,17,1,'2024-01-30 09:58:04','2024-01-30 09:58:04'),
(5,17,2,'2024-01-30 09:58:06','2024-01-30 09:58:06'),
(6,17,5,'2024-01-30 09:58:12','2024-01-30 09:58:12'),
(7,13,5,'2024-01-30 09:59:29','2024-01-30 09:59:29'),
(8,13,7,'2024-01-30 09:59:35','2024-01-30 09:59:35'),
(9,13,3,'2024-01-30 09:59:38','2024-01-30 09:59:38');
--
-- Indices de la tabla `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `choice_company` (`company_id`),
  ADD KEY `choice_user` (`user_id`);


--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `choice_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `choice_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;