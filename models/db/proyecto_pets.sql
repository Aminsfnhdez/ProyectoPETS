SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Estructura de la tabla `administrador`
CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcado de datos para la tabla `administrador`  
INSERT INTO `administrador` (`id`, `nombre`, `email`, `foto`, `password`, `estado`, `perfil`, `fecha`) VALUES
(1, 'jeanette', 'jeanette@gmail.com', 'views/imgs/perfil/image-jeanette.jpg', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '1', 'administrador', '2023-08-20 17:42:20'),
(2, 'ever aguirre', 'ever@gmail.com', 'views/imgs/perfil/image-daniel.jpg', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '1', 'administrador', '2023-08-20 17:58:22');

-- Indices de la tabla `administrador`
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla `administrador`
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- Estructura de la tabla`usuario`
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` VARCHAR(30) NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcado de datos para la tabla `usuario`
INSERT INTO `usuario` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `estado`, `fecha`) VALUES
(1, 'ever', 'everbtank@gmail.com', 'views/imgs/perfil/image-patrick.jpg', '123', '', '1', '2020-06-21 20:12:14');

-- Indices de la tabla `usuario`
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla `usuario`
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- Estructura de la tabla 'cliente'
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cedula` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombres` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8mb4_spanish_ci NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcado de datos para la tabla 'cliente'
INSERT INTO `cliente` (`id`, `cedula`, `nombres`, `apellidos`, `direccion`, `telefono`) VALUES 
(1, '123456789', 'Juan', 'Perez', 'Calle 123 # 45-67', '3123456789'),
(2, '987654321', 'Maria', 'Lopez', 'Carrera 56 # 78-90', '3134567890'),
(3, '098765432', 'Pedro', 'Martinez', 'Avenida 67 # 89-01', '3145678901'),
(4, '321098765', 'Sofia', 'Sanchez', 'Diagonal 78 # 90-12', '3156789012'),
(5, '543210987', 'Carlos', 'Gonzalez', 'Transversal 89 # 12-34', '3167890123'),
(6, '765432109', 'Ana', 'Garcia', 'Calle 100 # 20-30', '3178901234'),
(7, '9876543210', 'David', 'Rodriguez', 'Carrera 60 # 90-11', '3189012345'),
(8, '0987654321', 'Laura', 'Hernandez', 'Avenida 70 # 100-12', '3191012346'),
(9, '3210987654', 'Miguel', ' Vargas', 'Diagonal 80 # 110-13', '3201212347'),
(10, '5432109876', 'Isabella', 'Ramirez', 'Transversal 90 # 120-14', '3211312348'),
(11, '1651186416', 'Javier', 'Florez', 'Transversal 80 # 121-15', '3163259874');

-- Indices de la tabla `cliente`
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla `cliente`
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- Estructura de la tabla 'medicamento'
CREATE TABLE `medicamento` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion`  text COLLATE utf8mb4_spanish_ci NOT NULL,
  `dosis` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- volcado de datos paar la tabla 'medicamento'
INSERT INTO `medicamento` (`id`, `nombre`, `descripcion`, `dosis`, `foto`) VALUES 
(1, 'Panadol', 'Medicamento para el dolor', '500 mg/kg', 'views/imgs/medicamentos/Panadol.png'),
(2, 'Ibuprofeno', 'Medicamento para la fiebre', '400 mg/kg', 'views/imgs/medicamentos/Ibuprofeno.png'),
(3, 'Amoxicilina', 'Antibiótico', '500 mg/kg', 'views/imgs/medicamentos/Amoxicilina.png'),
(4, 'Vermífugo', 'Medicamento para los parásitos', '1 comprimido/kg', 'views/imgs/medicamentos/Vermifugo.jpg'),
(5, 'Antiparasitario externo', 'Medicamento para los parásitos externos', '1 pipeta/kg', 'views/imgs/medicamentos/Antiparasitario_externo.jpg'),
(6, 'Vacuna para perros', 'Vacuna para prevenir enfermedades comunes en perros', '1 dosis cada año', 'views/imgs/medicamentos/Vacuna_para_perros.jpg'),
(7, 'Vacuna para gatos', 'Vacuna para prevenir enfermedades comunes en gatos', '1 dosis cada año', 'views/imgs/medicamentos/Vacuna_para_gatos.jpg'),
(8, 'Antibiótico para gatos', 'Antibiótico para tratar infecciones en gatos', '500 mg/kg', 'views/imgs/medicamentos/Antibiotico_para_gatos.jpg'),
(9, 'Antibiótico para perros', 'Antibiótico para tratar infecciones en perros', '500 mg/kg', 'views/imgs/medicamentos/Antibiotico_para_perros.png'),
(10, 'Analgésico para gatos', 'Medicamento para el dolor para gatos', '500 mg/kg', 'views/imgs/medicamentos/Analgesico_para_gatos.jpg'),
(11, 'Analgésico para perros', 'Medicamento para el dolor para peces', '500 mg/kg', 'views/imgs/medicamentos/Analgesico_para_perros.png');

-- Indices de la tabla `medicamento`
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla `medicamento`
ALTER TABLE `medicamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE `mascota` (
  `identificacion` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `raza` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `peso` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `medicamento_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcado de datos para la tabla mascota
INSERT INTO `mascota` (`identificacion`,`nombre`, `raza`, `edad`, `peso`, `foto`, `medicamento_id`, `cliente_id`) VALUES 
(1, 'Toby', 'Perro. Akita Inu', '3 años', '10 Kg', 'views/imgs/mascotas/Akita_Inu.jpg', '1', '1'),
(2, 'Mia', 'Gato. Abisinio', '2 años', '5 Kg', 'views/imgs/mascotas/Abisinio.jpg','2', '2'),
(3, 'Luna', 'Perro. Chihuahua', '1 años', '7 Kg', 'views/imgs/mascotas/Chihuahua.jpg','3', '3'),
(4, 'Apolo', 'Perro. Fox Terrier Toy', '5', '20 Kg', 'views/imgs/mascotas/Fox_Terrier_Toy.jpg','4', '4'),
(5, 'Luna', 'Gato. Ragdoll', '7 años', '3 Kg', 'views/imgs/mascotas/Ragdoll.jpg','5', '5'),
(6, 'Firulais', 'Perro. Yorkshire Terrier', '4 años', '15 Kg', 'views/imgs/mascotas/Yorkshire_Terrier.jpg','6', '6'),
(7, 'Daisy', 'Perro. Beagle', '6 años', '12 Kg', 'views/imgs/mascotas/Beagle.jpg','7', '7'),
(8, 'Rocky', 'Perro. Pastor Alemán', '2 años', '8 Kg', 'views/imgs/mascotas/Pastor_Aleman.jpg','8', '8'),
(9, 'Luna', 'Gato. Siberiano', '3 años', '9 Kg', 'views/imgs/mascotas/Siberiano.jpg','9', '9'),
(10, 'Leo', 'Perro. Bulldog', '4 años', '10 Kg', 'views/imgs/mascotas/Bulldog.jpg','10', '10'),
(11, 'Pelusa', 'Gato. Mau Egipcio', '5 años', '11 Kg', 'views/imgs/mascotas/Mau_Egipcio.jpg','11', '11');

-- Indices de la tabla `mascota`
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`identificacion`);

-- AUTO_INCREMENT de la tabla `medicamento`
ALTER TABLE `mascota`
  MODIFY `identificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- CONSTRAINT FK de la tabla `mascota` <- 'medicamento'
ALTER TABLE `mascota`
ADD CONSTRAINT fk_mascota_medicamento FOREIGN KEY (`medicamento_id`) REFERENCES `medicamento` (`id`);

-- CONSTRAINT FK de la tabla `mascota` <- 'cliente'
ALTER TABLE `mascota`
ADD CONSTRAINT fk_mascota_cliente FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);

COMMIT;