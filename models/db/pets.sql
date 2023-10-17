SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Estructura de tabla para la tabla `administrador`

CREATE TABLE administrador (
  id int(11) NOT NULL,
  nombre VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  foto VARCHAR(50) NOT NULL,
  password text COLLATE utf8mb4_spanish_ci NOT NULL,
  estado text COLLATE utf8mb4_spanish_ci NOT NULL,
  perfil text COLLATE utf8mb4_spanish_ci NOT NULL,
  fecha timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


-- Indices de la tabla `administrador`
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla `administrador`
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--Volcado de datos para la tabla `administrador`  
INSERT INTO `administrador` (`id`, `nombre`, `email`, `foto`, `password`, `estado`, `perfil`, `fecha`) VALUES
('jeanette', 'jeanette@gmail.com', 'views/imgs/perfil/image-jeanette.jpg', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '1', 'administrador', '2023-08-20 17:42:20'),
('ever aguirre', 'ever@gmail.com', 'views/imgs/perfil/image-daniel.jpg', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '1', 'administrador', '2023-08-20 17:58:22');



-- Estructura de tabla para la tabla `usuario`
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


-- Indices de la tabla `usuario`
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla `usuario`
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--Volcado de datos para la tabla `usuario`
INSERT INTO `usuario` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `estado`, `fecha`) VALUES
('ever', 'everbtank@gmail.com', 'views/imgs/perfil/image-patrick.jpg', '123', '', '1', '2020-06-21 20:12:14');

-- Creación de las tablas clientes, medicamnetos y mascotas
CREATE TABLE clientes (
  id INT(10) NOT NULL IDENTITY (1, 1),
  cedula VARCHAR(10) NOT NULL,
  nombres VARCHAR(50) NOT NULL,
  apellidos VARCHAR(50) NOT NULL,
  direccion VARCHAR(255) NOT NULL,
  telefono VARCHAR(10) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE medicamentos (
  id VARCHAR(10) NOT NULL IDENTITY (1, 1),
  nombre VARCHAR(50) NOT NULL,
  descripcion VARCHAR(255) NOT NULL,
  dosis VARCHAR(30) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE mascotas (
  identificacion VARCHAR(10) NOT NULL IDENTITY (1, 1),
  nombre VARCHAR(50) NOT NULL,
  raza VARCHAR(50) NOT NULL,
  edad VARCHAR(15) NOT NULL,
  peso VARCHAR(15) NOT NULL,
  medicamento_id VARCHAR(10) NOT NULL,
  cliente_id VARCHAR(10) NOT NULL,
  PRIMARY KEY (identificacion),
  FOREIGN KEY (medicamento_id) REFERENCES medicamentos (id),
  FOREIGN KEY (cliente_id) REFERENCES clientes (id)
);

-- Volcado de datos para las tablas clientes, medicamnetos y mascotas

INSERT INTO clientes (cedula, nombres, apellidos, direccion, telefono) VALUES 
('123456789', 'Juan', 'Perez', 'Calle 123 # 45-67', '3123456789'),
('987654321', 'Maria', 'Lopez', 'Carrera 56 # 78-90', '3134567890'),
('098765432', 'Pedro', 'Martinez', 'Avenida 67 # 89-01', '3145678901'),
('321098765', 'Sofia', 'Sanchez', 'Diagonal 78 # 90-12', '3156789012'),
('543210987', 'Carlos', 'Gonzalez', 'Transversal 89 # 12-34', '3167890123'),
('765432109', 'Ana', 'Garcia', 'Calle 100 # 20-30', '3178901234'),
('9876543210', 'David', 'Rodriguez', 'Carrera 60 # 90-11', '3189012345'),
('0987654321', 'Laura', 'Hernandez', 'Avenida 70 # 100-12', '3191012346'),
('3210987654', 'Miguel', ' Vargas', 'Diagonal 80 # 110-13', '3201212347'),
('5432109876', 'Isabella', 'Ramirez', 'Transversal 90 # 120-14', '3211312348'),
('1651186416', 'Javier', 'Florez', 'Transversal 80 # 121-15', '3163259874');


INSERT INTO medicamentos (nombre, descripcion, dosis) VALUES 
('Panadol', 'Medicamento para el dolor', '500 mg/kg'),
('Ibuprofeno', 'Medicamento para la fiebre', '400 mg/kg'),
('Amoxicilina', 'Antibiótico', '500 mg/kg'),
('Vermífugo', 'Medicamento para los parásitos', '1 comprimido/kg'),
('Antiparasitario externo', 'Medicamento para los parásitos externos', '1 pipeta/kg'),
('Vacuna para perros', 'Vacuna para prevenir enfermedades comunes en perros', '1 dosis cada año'),
('Vacuna para gatos', 'Vacuna para prevenir enfermedades comunes en gatos', '1 dosis cada año'),
('Antibiótico para gatos', 'Antibiótico para tratar infecciones en gatos', '500 mg/kg'),
('Antibiótico para perros', 'Antibiótico para tratar infecciones en perros', '500 mg/kg'),
('Analgésico para gatos', 'Medicamento para el dolor para gatos', '500 mg/kg'),
('Analgésico para perros', 'Medicamento para el dolor para peces', '500 mg/kg');


INSERT INTO mascotas (nombre, raza, edad, peso, medicamento_id, cliente_id) VALUES 
('Toby', 'Perro. Akita Inu', '3 años', '10 Kg', '1', '1'),
('Mia', 'Gato. Abisinio', '2 años', '5 Kg', '2', '2'),
('Luna', 'Perro. Chihuahua', '1 años', '7 Kg', '3', '3'),
('Apolo', 'Perro. Fox Terrier Toy', '5', '20 Kg', '4', '4'),
('Luna', 'Gato. Ragdoll', '7 años', '3 Kg', '5', '5'),
('Firulais', 'Perro. Yorkshire Terrier', '4 años', '15 Kg', '6', '6'),
('Daisy', 'Perro. Beagle', '6 años', '12 Kg', '7', '7'),
('Rocky', 'Perro. Pastor Alemán', '2 años', '8 Kg', '8', '8'),
('Luna', 'Gato. Siberiano', '3 años', '9 Kg', '9', '9'),
('Leo', 'Perro. Bulldog', '4 años', '10 Kg', '10', '10'),
('Pelusa', 'Gato. Mau Egipcio', '5 años', '11 Kg', '11', '11');


COMMIT;