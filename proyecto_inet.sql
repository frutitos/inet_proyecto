-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2024 a las 04:42:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Base de datos: `proyecto_inet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historica`
--

CREATE TABLE `historica` (
    `id` int(11) NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `descripcion` varchar(255) NOT NULL,
    `precio` int(11) NOT NULL,
    `stock` int(11) NOT NULL,
    `categoria` varchar(255) DEFAULT NULL,
    `usuario_id` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historica`
--

INSERT INTO
    `historica` (
        `id`,
        `nombre`,
        `descripcion`,
        `precio`,
        `stock`,
        `categoria`,
        `usuario_id`
    )
VALUES (
        3,
        'Balón de Fútbol',
        'Pelota Fútbol No4 Profesional Futsal Medio Pique Cancha De 5',
        42000,
        75,
        'Futbol',
        6
    ),
    (
        3,
        'Balón de Fútbol',
        'Pelota Fútbol No4 Profesional Futsal Medio Pique Cancha De 5',
        42000,
        75,
        'Futbol',
        6
    );

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
    `id` int(11) NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `descripcion` varchar(255) NOT NULL,
    `precio` int(11) NOT NULL,
    `stock` int(11) NOT NULL,
    `categoria` varchar(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO
    `producto` (
        `id`,
        `nombre`,
        `descripcion`,
        `precio`,
        `stock`,
        `categoria`
    )
VALUES (
        1,
        'Balón de Rugby',
        'Pelota Rugby Gtr 3000 N°5',
        21000,
        50,
        'Rugby'
    ),
    (
        2,
        'Balón de Basket',
        'Balón Baloncesto Drv Basketball N°7 para Cemento',
        40000,
        100,
        'Basket'
    ),
    (
        3,
        'Balón de Fútbol',
        'Pelota Fútbol No4 Profesional Futsal Medio Pique Cancha De 5',
        42000,
        75,
        'Futbol'
    ),
    (
        4,
        'Protector Bucal Rugby',
        'Protector Bucal Anatomic Senior Saborizado',
        6000,
        30,
        'Rugby'
    ),
    (
        5,
        'Camiseta de Futbol',
        'Camiseta de la selección Argentina',
        99999,
        10,
        'Futbol'
    ),
    (
        6,
        'Red de Fútbol',
        'Red De Arco Baby Futbol 4 X 2 Precio Por Par! Malla 12x12cm',
        66000,
        20,
        'Futbol'
    ),
    (
        7,
        'Camiseta de Rugby',
        'Camiseta de la selección Argentina',
        105000,
        25,
        ''
    ),
    (
        8,
        'Shorts de Basket',
        'Shorts de Basket de los Chicagos Bulls',
        35000,
        40,
        'Basket'
    ),
    (
        9,
        'Botines de Fútbol',
        'Botines de fútbol con tacos de goma',
        254999,
        60,
        'Futbol'
    ),
    (
        10,
        'Botines de rugby',
        'Botin Rugby Kinetica',
        200000,
        15,
        'Rugby'
    );

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
    `id` int(11) NOT NULL,
    `nombre` varchar(255) NOT NULL,
    `apellido` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `pass` varchar(255) NOT NULL,
    `direccion` varchar(255) NOT NULL,
    `telefono` varchar(80) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO
    `usuario` (
        `id`,
        `nombre`,
        `apellido`,
        `email`,
        `pass`,
        `direccion`,
        `telefono`
    )
VALUES (
        2,
        'hoal',
        'adwdwa',
        'hola@gmail.com',
        '$2y$10$DWBHhzSbvVgAYYLWS6jSluqi6y8Vqghs4YHIWcN.ZRjjWS8CjTN7q',
        'dwad 1732',
        '11 7777-6666'
    ),
    (
        4,
        'Tomas',
        'Masotti',
        'masotopo@gmail.com',
        '$2y$10$6upSOQlt6S8IA6bnMj4hkey62jGk/513G5As5zSgvVyakCJd3nL5m',
        'anasheix 7777',
        '11 0420-6969'
    ),
    (
        5,
        'prueba',
        'prueba',
        'prueba@gmail.com',
        '$2y$10$4hfVefCRkm8WntY.H.AdD.1RWNu5RTFB6X3o76KKKB/kaCdn3.yeS',
        'prueba 777',
        '11 12345678'
    ),
    (
        6,
        'Carlos Daniel',
        'Soliz Siles',
        'carlos.soliz.t1vl@gmail.com',
        '$2y$10$j5lCyDtBVz606/w7vxvD5eIe95x1lFL9HZ/k.APz09n2Cq3PWoxzW',
        'marcelo fitte 4769',
        '1122529318'
    );

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historica`
--
ALTER TABLE `historica` ADD KEY `fk_usuario` (`usuario_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto` ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historica`
--
ALTER TABLE `historica`
ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;