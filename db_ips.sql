-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2023 a las 22:58:35
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ips`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gateway` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mask` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `name`, `segment`, `gateway`, `mask`, `range`, `created_at`, `updated_at`) VALUES
(1, 'Servidores', '192.168.0.0/24', '192.168.0.1', '255.255.255.0', '192.168.0.2 - 192.168.0.254', '2023-05-28 00:50:31', '2023-05-28 18:47:15'),
(2, 'Sistemas', '172.20.10.0/28', '255.20.10.1', '255.255.255.240', '172.20.10.2 - 172.20.10.14', '2023-05-28 00:52:14', '2023-05-28 18:56:16'),
(3, 'Cajas', '172.20.10.16/28', '172.20.10.17', '255.255.255.240', '172.20.10.18 - 172.20.10.30', '2023-05-28 00:53:49', '2023-05-28 18:56:27'),
(4, 'Creditos', '172.20.10.32/28', '172.20.10.33', '255.255.255.240', '172.20.10.34 - 172.20.10.46', '2023-05-28 18:46:59', '2023-05-28 18:46:59'),
(5, 'Captaciones', '172.20.10.48/28', '172.20.10.49', '255.255.255.240', '172.20.10.50 - 172.20.10.62', '2023-05-28 18:51:49', '2023-05-28 18:51:49'),
(6, 'Contabilidad', '172.20.10.64/28', '172.20.10.65', '255.255.255.240', '172.20.10.66 - 172.20.10.78', '2023-05-28 18:53:09', '2023-05-28 18:53:09'),
(7, 'Auditoria-Legal', '172.20.10.80/28', '172.20.10.81', '255.255.255.240', '172.20.10.82 - 172.20.10.94', '2023-05-28 18:54:40', '2023-05-28 18:57:13'),
(8, 'Gerencia', '172.20.10.96/28', '172.20.10.97', '255.255.255.240', '172.20.10.98 - 172.20.10.110', '2023-05-28 18:56:00', '2023-05-28 18:56:00'),
(9, 'Almacen', '172.20.10.112/28', '172.20.10.113', '255.255.255.240', '172.20.10.114 - 172.20.10.126', '2023-05-28 18:58:49', '2023-05-28 18:58:49'),
(10, 'Oficial-Seguridad', '172.20.10.128/28', '172.20.10.129', '255.255.255.240', '172.20.10.130 - 172.20.10.142', '2023-05-28 19:00:04', '2023-05-28 19:00:04'),
(11, 'UIF', '172.20.10.144/28', '172.20.10.145', '255.255.255.240', '172.20.10.46 - 172.20.10.158', '2023-05-28 19:01:06', '2023-05-28 19:01:06'),
(12, 'Consejo', '172.20.10.160/28', '172.20.10.161', '255.255.255.240', '172.20.10.162 - 172.20.10.174', '2023-05-28 19:02:09', '2023-05-28 19:02:09'),
(13, 'Riesgos', '172.20.10.0/28', '172.20.10.177', '255.255.255.240', '172.20.10.178 - 172.20.10.190', '2023-05-28 19:03:22', '2023-05-28 19:03:22'),
(14, 'Auditoria-Externa', '172.20.10.192/28', '172.20.10.193', '255.255.255.240', '172.20.10.194 - 172.20.10.206', '2023-05-28 19:04:26', '2023-05-28 19:04:26'),
(15, 'Telefonia', '172.25.10.0/24', '172.25.10.1', '255.255.255.0', '172.25.10.2 - 172.25.10.254', '2023-05-28 19:05:53', '2023-05-28 19:08:17'),
(16, 'Seguridad Física', '172.25.20.0/24', '172.25.20.1', '255.255.255.0', '172.25.20.2 - 172.25.20.254', '2023-05-28 19:07:17', '2023-05-28 19:07:17'),
(17, 'Dmz', '172.25.30.0/24', '172.25.30.1', '255.255.255.0', '172.25.30.2 - 172.25.30.254', '2023-05-28 19:09:20', '2023-05-28 19:09:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips`
--

CREATE TABLE `ips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Ocupado','Libre') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ips`
--

INSERT INTO `ips` (`id`, `description`, `area_id`, `ip`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pc1 Window', 3, '192.168.0.18', 'Ocupado', '2023-05-28 00:59:29', '2023-05-28 18:42:55'),
(2, 'Linux', 3, '192.168.0.19', 'Ocupado', '2023-05-28 17:48:45', '2023-05-28 18:42:42'),
(3, 'Pc2 Windows', 3, '192.168.0.20', 'Ocupado', '2023-05-28 18:22:08', '2023-05-28 18:43:04'),
(4, 'P1 Window', 3, '172.20.10.21', 'Ocupado', '2023-05-28 20:01:41', '2023-05-28 20:01:41'),
(5, 'dasfa', 3, '172.20.10.22', 'Libre', '2023-05-28 20:28:04', '2023-05-28 20:28:04');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_26_202703_create_areas_table', 1),
(6, '2023_05_27_195449_create_permission_tables', 1),
(7, '2023_05_27_202322_create_ips_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'ver-usuario', 'web', '2023-05-28 21:11:48', '2023-05-28 21:11:48'),
(2, 'crear-usuario', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(3, 'editar-usuario', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(4, 'borrar-usuario', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(5, 'detalle-usuario', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(6, 'ver-rol', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(7, 'crear-rol', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(8, 'editar-rol', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(9, 'borrar-rol', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(10, 'detalle-rol', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(11, 'ver-area', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(12, 'crear-area', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(13, 'editar-area', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(14, 'borrar-area', 'web', '2023-05-28 21:11:49', '2023-05-28 21:11:49'),
(15, 'detalle-area', 'web', '2023-05-28 21:11:50', '2023-05-28 21:11:50'),
(16, 'ver-ip', 'web', '2023-05-28 21:11:50', '2023-05-28 21:11:50'),
(17, 'crear-ip', 'web', '2023-05-28 21:11:50', '2023-05-28 21:11:50'),
(18, 'editar-ip', 'web', '2023-05-28 21:11:50', '2023-05-28 21:11:50'),
(19, 'borrar-ip', 'web', '2023-05-28 21:11:50', '2023-05-28 21:11:50'),
(20, 'detalle-ip', 'web', '2023-05-28 21:11:50', '2023-05-28 21:11:50'),
(21, 'estado-ip', 'web', '2023-05-28 21:11:50', '2023-05-28 21:11:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Usuario', 'web', '2023-05-28 23:37:24', '2023-05-28 23:37:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(11, 1),
(15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luis Edmundo Velasquez Poou', 'admin@gmail.com', NULL, '$2y$10$cHJP3Anog4hRNdvXPxV6t.i17TG5rUUP4hyn4ly9JZ5zxIT8i97/i', NULL, '2023-05-28 00:49:16', '2023-05-28 00:49:16'),
(2, 'Prueba', 'prueba@gmail.com', NULL, '$2y$10$bYta2W0kZ6110RtO7zVK6u2u0ec0EbS6e6JMyw2bhqLjGk2Ydto7e', NULL, '2023-05-28 23:49:25', '2023-05-28 23:49:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ips_area_id_foreign` (`area_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ips`
--
ALTER TABLE `ips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ips`
--
ALTER TABLE `ips`
  ADD CONSTRAINT `ips_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
