
CREATE TABLE `usuarios` (
  `id` int(200) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dni`, `edad`, `direccion`, `localidad`) VALUES
(5, 'gaston', 'barbaccia', '35', '100', 'Beltran ', 'Grand Bourg'),
(8, 'sharin', 'barbaccia', '35991682', '123', 'Beltran 1255123', 'Grand Bourg'),
(9, 'gaston', 'barbaccia', '35991682', '10', 'Beltran 123', 'Grand Bourg'),
(13, 'gaston', 'barbaccia', '35991682', '31', 'Beltran 1541', 'Grand Bourg'),
(14, 'gaston', 'barbaccia', '121212', '121212', 'Beltran 1612', 'Grand Bourg')


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;
