-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-03-2019 a las 18:46:09
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teorico_licencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `Id` int(5) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `cant` int(5) NOT NULL,
  `aprobacion` int(5) NOT NULL,
  `cant_m70` int(5) NOT NULL,
  `aprobacion_m70` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`Id`, `nom`, `descripcion`, `cant`, `aprobacion`, `cant_m70`, `aprobacion_m70`) VALUES
(1, 'Básicas', 'Básicas', 10, 80, 3, 60),
(2, 'Señales', 'Señales', 10, 80, 3, 60),
(10, 'A.1.1', 'moto hasta 50cc', 10, 80, 3, 60),
(11, 'A.1.2 A1.3 A1.4', 'motocicleta', 10, 80, 3, 60),
(12, 'A2.2-A2.1-A2.2-A3', 'cuatri y UTV', 10, 80, 3, 60),
(13, 'B.1', 'auto', 10, 80, 3, 60),
(14, 'B.2', 'camioneta', 10, 80, 3, 60),
(15, 'C', 'camión s/ acoplado', 10, 80, 3, 60),
(16, 'D.1', 'transporte de pasajeros de hasta 8 plazas', 10, 80, 3, 60),
(17, 'D2 D3 ', 'transporte de pasajeros de más de 8 plazas', 10, 80, 3, 60),
(18, 'D4', 'servicios de emergencia', 10, 80, 3, 60),
(19, 'E.1', 'camión con acoplado', 10, 80, 3, 60),
(20, 'E.2', 'maquinaria especial no agricola', 10, 80, 3, 60),
(21, 'G.1 G.2 G.3', 'tractor-maquinaria agricola-tren agricola', 10, 80, 3, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `Id` int(5) NOT NULL,
  `clase` varchar(5) DEFAULT NULL,
  `pregunta` varchar(250) DEFAULT NULL,
  `rta1` varchar(200) DEFAULT NULL,
  `rta2` varchar(200) DEFAULT NULL,
  `rta3` varchar(200) DEFAULT NULL,
  `rta_ok` int(1) DEFAULT NULL,
  `imagen` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`Id`, `clase`, `pregunta`, `rta1`, `rta2`, `rta3`, `rta_ok`, `imagen`) VALUES
(1, '﻿1', 'A qué se denomina Calzada?', 'La vía destinada sólo a la circulación de vehículos', 'La vía destinada a circulación de vehículos y peatones', 'La vía destinada a circulación de peatones únicamente', 1, ''),
(2, '1', 'La Senda Peatonal está destinada al uso de peatones', 'Esté o no marcada', 'Únicamente si está marcada', 'Sólo si la precede la línea de frenado', 1, ''),
(3, '1', 'Quién tiene prioridad de paso en cuestas estrechas?', 'El que asciende (salvo que no tenga acoplado y el que desciende si)', 'El que desciende', 'El que transporta personas', 1, ''),
(4, '1', 'Cómo debe hacerse el adelantamiento a otro vehículo?', 'Por la izquierda', 'Por la derecha', 'Por izquierda o derecha, indistintamente', 1, ''),
(5, '1', 'Cómo debe actuar el conductor ante la señal de “PARE”?', 'Debe detener por completo la marcha, reanudándola una vez que sea seguro', 'Debe aminorar la marcha y continuar sólo si es seguro', 'Debe detener la marcha sólo si cruzan peatones', 1, ''),
(6, '1', 'Cuando se ingresa a una rotonda, qué vehículo tiene prioridad de paso?', 'Por la izquierda, por ende el que ya se encuentra circulando', 'Por la derecha', 'Por izquierda o derecha, indistintamente', 1, ''),
(7, '1', 'En rotonda, tiene prioridad de paso el que circula por ella o el que intenta ingresar?', 'El que circula por ella', 'El que circula desde la derecha', 'El que intenta ingresar', 1, ''),
(8, '1', 'Cómo debe advertir la maniobra de giro?', 'Mediante la señal luminosa correspondiente y con debida anticipación', 'Con el brazo por la ventanilla', 'No es necesario advertir la maniobra', 1, ''),
(9, '1', 'La luz verde a su frente está indicando', 'Que puede avanzar', 'Que debe detenerse', 'Que puede avanzar siempre que sea intermitente', 1, ''),
(10, '1', 'La luz roja a su frente le está indicando', 'Que debe detenerse', 'Que puede avanzar sino circula otro vehículo transversalmente', 'Que puede avanzar sino cruzan peatones', 1, ''),
(11, '1', 'Si se enciende la luz verde a su frente y vehículos o peatones no han finalizado el cruce, puede iniciar la marcha?', 'No. Debe esperar que finalicen el cruce', 'Sí, porque lo habilita el semáforo', 'Sí, esquivando peatones o vehículos', 1, ''),
(12, '1', 'Cuál es la velocidad máxima permitida en avenidas urbanas?', '60km', '35km', '50km', 1, ''),
(13, '1', 'Cuál es la velocidad mínima permitida en avenidas urbanas?', '30km', '35km', '40km', 1, ''),
(14, '1', 'Para quienes participan de un accidente es obligatorio', 'Detenerse inmediatamente', 'Únicamente si es responsable del siniestro', 'Sólo si hay heridos', 1, ''),
(15, '1', 'Cómo se debe estacionar en una calle de mano única?', 'En el mismo sentido que la circulación del tránsito', 'No interesa el sentido si guarda las distancias', 'No interesa el sentido si lo hace sobre la derecha', 1, ''),
(16, '1', 'La señal de pare tiene igual alcance que un semáforo', 'SI', 'NO', 'Depende la circunstancia', 1, ''),
(17, '1', 'Está permitido detener un vehículo sobre una senda peatonal?', 'NO', 'SI', 'Según los casos', 1, ''),
(18, '1', 'Si tiene intención de sobrepasar a otro vehículo, no ha efectuado señales y advierte que a su vez, otro está intentando sobrepasarlo a Ud., qué debe hacer?', 'Continuar la maniobra porque va adelante', 'Permitir que el que le sigue continúe el sobrepaso', 'La maniobra depende del porte del vehículo que va atrás', 2, ''),
(19, '1', 'Está permitido adelantarse en proximidades de puentes, curvas o cimas?', 'Únicamente en caminos no pavimentados', 'Nunca debe adelantarse en esos sitios', 'Puede adelantarse si tiene visibilidad suficiente', 2, ''),
(20, '1', 'Con qué luz indica al vehículo que marcha detrás, su intención de sobrepaso a otro vehículo?', 'Encendiendo las de largo alcance', 'Con la luz de giro izquierda', 'No hace falta accionar ninguna luz', 2, ''),
(21, '1', 'Si va circulando en ruta y el vehículo que va delante enciende la luz de giro izquierda, qué le está indicando?', 'Que puede sobrepasarlo', 'Que no inicie el sobrepaso', 'Que la vía contraria está libre', 2, ''),
(22, '1', 'En zona urbana quién tiene prioridad para atravesar la calzada por la senda peatonal?', 'El vehículo', 'El peatón', 'El ciclista', 2, ''),
(23, '1', 'En vía semaforizada, avanzando con luz verde a su frente, si el vehículo realiza un giro para circular por la calle transversal, debe ceder el paso al peatón?', 'Debe tener en cuenta el semáforo opuesto', 'Debe respetar la prioridad de paso de los peatones', 'No está obligado a detenerse porque lo habilita la luz verde', 2, ''),
(24, '1', 'Para realizar un giro o circular en rotondas se debe', 'Dar prioridad de paso al que circula desde la derecha', 'Respetar la señalización', 'Dar prioridad de paso al vehículo de mayor porte', 2, ''),
(25, '1', 'Cómo debe comportarse con luz amarilla a su frente?', 'Avanzar, como si se tratara de luz verde', 'Avanzar sólo si estima que cruzará la encrucijada antes de encenderse la roja', 'Sólo si la derecha le otorga prioridad de paso', 2, ''),
(26, '1', 'Qué indica la luz roja intermitente a su frente?', '  Que ha habido un accidente en el lugar', 'La presencia de un cruce peligroso', 'Entrada y salida de vehículos', 2, ''),
(27, '1', 'Cómo debe comportarse con luz roja intermitente a su frente?', 'Avanzar respetando prioridades', 'Detener la marcha y reiniciarla sólo si no existe riesgo', 'Avanzar observando que no exista riesgo', 2, ''),
(28, '1', 'La conducción por parte de personas no habilitadas para ello sólo puede hacerse', 'En caso de emergencia', 'En ningún caso', 'En caso de circular acompañado de un mayor habilitado.', 2, ''),
(29, '1', 'En qué circunstancia está permitido el uso de celular durante la conducción?', 'En casos de emergencias', 'No está permitido bajo ninguna circunstancia', 'En zonas rurales', 2, ''),
(30, '1', 'Cuándo está permitido estacionar en “doble fila”?', 'En días lluviosos', 'No está permitido estacionar en doble fila', 'Frente a establecimientos escolares y centros de salud', 2, ''),
(31, '1', 'El estacionar en “doble fila”, es considerado', 'Falta leve', 'Falta grave', 'Falta leve, sólo para vehículos particulares', 2, ''),
(32, '1', 'Cuándo está permitido estacionar en espacios destinados a parada de transporte de pasajeros?', 'En horarios donde el transporte esté fuera de línea', 'No está permitido estacionar en esos sitios', 'Está permitido si no cuenta con doble señalización (horizontal y vertical)', 2, ''),
(33, '1', 'Está permitido estacionar en el acceso de garajes en uso o cocheras?', 'Está permitido sólo en horario nocturno', 'No está permitido', 'Está permitido, si el estacionamiento es temporario', 2, ''),
(34, '1', 'Cuál es la velocidad mínima permitida en calles urbanas?', '10km', '20km', '30km', 2, ''),
(35, '1', 'A qué velocidad precautoria se debe cruzar una bocacalle sin semáforo?', 'A la misma velocidad que la de la vía por la que circula', 'A no más de 30 km/h', 'A no más de 10 km/h', 2, ''),
(36, '1', 'El  tiempo de reacción es…', 'El que transcurre desde que se acciona el freno hasta que se detiene el vehículo', 'El que transcurre desde que se percibe el obstáculo hasta que se pone el pie en el freno', 'El que transcurre desde que se percibe el objeto hasta la detención total del vehículo', 2, ''),
(37, '1', 'La distancia de frenado es…', 'La distancia recorrida desde que se visualiza el objeto hasta accionar el freno', '   La distancia recorrida desde que se acciona el freno hasta la detención del vehículo', 'La distancia recorrida desde que se visualiza el objeto hasta la detención total del vehículo', 2, ''),
(38, '1', 'La distancia de detención es…', 'La de frenado', 'Distancia de reacción más distancia de frenado', 'La distancia de reacción', 2, ''),
(39, '1', 'Conducir un vehículo en estado de alcoholemia positiva es considerado…', 'Falta leve', 'Falta grave', 'Falta grave solo si es recidente', 2, ''),
(40, '1', 'La negativa del conductor a realizar la prueba de alcoholemia, constituye…', 'Falta grave', 'Falta grave y presunción de alcoholemia positiva', 'No constituye falta por no existir prueba', 2, ''),
(41, '1', 'Si decide detenerse por intensa niebla, debe hacerlo…', 'En la banquina, correctamente señalizado', 'Alejado de la calzada o banquina', 'En la banquina, pero con luces delanteras y traseras encendidas', 2, ''),
(42, '1', 'En zona urbana y en estacionamiento paralelo al cordón de la vereda, qué distancia debe haber entre los vehículos?', '30 cm', '50 cm', '20 cm', 2, ''),
(43, '1', 'Cuándo un vehículo está “Detenido”?', 'Al momento de carga y descarga de mercaderías, sin movimiento ni conductor a bordo', 'Al momento de ascenso y descenso de pasajeros o carga y descarga de mercadería, sin movimiento pero con su conductor a bordo', 'En cualquier circunstancia, sin movimiento ni conductor a bordo', 2, ''),
(44, '1', 'Quién es el responsable civil por un siniestro de tránsito producido por un menor de edad poseedor de una licencia de conductor?', 'El que lo acompaña', 'El que firmó la autorización para que obtenga la licencia', 'El que le autorizó el uso del vehículo', 2, ''),
(45, '1', 'Qué significa la doble línea amarilla?', 'Es una señalización que se utiliza para dividir los sentidos de circulación', 'Indica para ambos sentidos qde circulación que no debe ser traspasada ni s puede circular sobre ella', 'Significa que sólo pueden circular vehículos particulares', 2, ''),
(46, '1', 'Cuando se estaciona en proximidad de una esquina qué línea no debe superarse?', 'La línea peatonal.', 'La línea imaginaria de prolongación de ochava.', 'La línea de edificación transversal.', 2, ''),
(47, '1', 'Cuándo está permitido estacionar en ángulo con el cordón de la acera derecha y/oizquierda?', 'Sólo cuando la calle es ancha.', 'Sólo cuando el señalamiento lo indica.', 'Sólo cuando es de un lado solamente.', 2, ''),
(48, '1', 'Un triángulo pintado en la calzada, qué significa?', 'Advierte de la proximidad de un peligro.', 'La obligación de ceder el paso en el cruce.', 'La prioridad de paso en el cruce.', 2, ''),
(49, '1', 'En la vía pública se deberá circular respetando en primer orden…', 'Las señales de tránsito', 'Las normas legales', 'Las indicaciones de la autoridad competente', 3, ''),
(50, '1', 'Qué vehículos tienen siempre prioridad de paso?', 'Ambulancias, policía y bomberos, estén o no en servicio', 'Ambulancias, policía, bomberos y transporte de personas', 'Ambulancias, policía y bomberos, con las señales de advertencia reglamentarias activadas', 3, ''),
(51, '1', 'Qué vehículo tiene prioridad de paso en una intersección de calles de igual jerarquía?', 'El que llega primero a la intersección', 'El vehículo de porte mayor', 'El que circula desde la derecha', 3, ''),
(52, '1', 'De acuerdo a la siguiente imagen, quien tiene prioridad de paso?', 'Automovil', 'El que llega primero', 'Moto', 3, ''),
(53, '1', 'Qué vehículos tienen siempre prioridad de paso?', 'Ambulancias, policía y bomberos, estén o no en servicio', 'Ambulancias, policía, bomberos y transporte de personas', 'Ambulancias, policía y bomberos, con las señales de advertencia reglamentarias activadas', 3, ''),
(54, '1', 'Puede detenerse durante la circulación en rotonda?', 'Únicamente sobre la derecha', 'Únicamente sobre la izquierda', 'No está permitido detenerse', 3, ''),
(55, '1', 'Cómo debe comportarse con la luz amarilla intermitente a su frente?', 'Avanzar, como si fuera luz verde', 'Detenerse, en toda circunstancia', 'Circular con precaución, respetando prioridades', 3, ''),
(56, '1', 'Cuándo está permitido doblar a la izquierda en las encrucijadas de calles de doble mano semaforizadas?', 'Siempre está permitido', 'Está prohibido', 'Sólo cuando esté expresamente indicado con la correspondiente señal', 3, ''),
(57, '1', 'En qué circunstancia está permitido circular sin respetar distancias prudentes con el vehículo que va adelante?', 'Transitando vías multicarriles', 'En toda circunstancia, si no se trata de vehículos de carga', 'Está prohibido en toda circunstancia', 3, ''),
(58, '1', 'Cuándo puede detenerse y/o estacionar sobre la banquina?', 'Cuando tenga necesidad y por cualquier causa', 'Siempre, mientras esté colocada la señalización reglamentaria (balizas)', '   Sólo cuando ocurra una emergencia', 3, ''),
(59, '1', 'Cuándo está permitido estacionar sobre la senda peatonal?', 'Cuando no circulan peatones', '  Siempre que no obstruya la visibilidad de señales', 'Nunca está permitido estacionar sobre la senda peatonal', 3, ''),
(60, '1', 'En qué horario está permitido estacionar sobre la vereda?', 'En horario nocturno', 'En cualquier horario, sólo en días domingo o feriados', 'A ninguna hora', 3, ''),
(61, '1', 'En qué horario está permitido estacionar sobre la vereda?', 'En horario nocturno', 'En cualquier horario, sólo en días domingo o feriados', 'A ninguna hora', 3, ''),
(62, '1', 'Cuál es la velocidad máxima permitida en calles urbanas?', '60km', '30km', '40km', 3, ''),
(63, '1', 'Los vehículos particulares, en qué circunstancia pueden superar las velocidades máximas?', 'En ruta, al momento de sobrepasar a otro vehículo', 'En rutas donde no esté señalizada la velocidad', 'No está permitido bajo ninguna circunstancia', 3, ''),
(64, '1', 'En caso de accidente, es obligatorio suministrar los datos de la licencia de conductor y del seguro?', 'A la autoridad únicamente', 'No es obligatorio si la autoridad no presenció el siniestro', 'A la autoridad y a la otra parte involucrada', 3, ''),
(65, '1', 'Qué sistemas de comunicación, operación manual continua pueden utilizarse durante la conducción?', 'Todos, mientras no se circule en el ejido urbano', 'Sólo los del tipo “manos libres”', 'Ninguno', 3, ''),
(66, '1', 'En casos de intensa niebla…', 'Es aconsejable circular con las balizas encendidas', 'Es aconsejable circular con las luces de giro encendidas', 'No es aconsejable encender luces que no sean las reglamentarias', 3, ''),
(67, '1', 'En la vía pública se deberá circular respetando en primer orden…', 'Las señales de tránsito', 'Las normas legales', 'Las indicaciones de la autoridad competente', 3, ''),
(68, '1', 'Cuál es la forma correcta de adelantarse a otro vehículo?', 'Por la derecha.', 'Por la banquina.', 'Por la izquierda, haciendo las señales respectivas.', 3, ''),
(69, '1', 'Cuando un vehículo circula por una arteria ubicada al costado de una vía férrea es obligatorio ceder el paso a otro que sale del paso a nivel?', 'Sí, si viene desde la derecha.', 'No, si viene desde la izquierda.', 'Debe cedérsele el paso, venga de la izquierda o de la derecha.', 3, ''),
(70, '10', 'Qué carga máxima puede transportar un ciclomotor?', '40kg', '20kg', '50kg', 1, ''),
(71, '10', 'Qué vehículo se concidera ciclomotor según la Ley?', 'Vehículo de dos ruedas con dos o más asientos.', 'Motocicleta tipo sidecar', 'Vehículo similar a una moto de 50c.c. decilindrada, que no supera los 50 km./h. de velocidad', 3, ''),
(72, '10', 'Es obligatorio, de acuerdo a la Ley 24.449, el patentamiento de las motocicletas, motos, ciclomotores y triciclos motorizados?', 'Es obligatorio únicamente para motos y triciclos.', 'Es obligatorio para todo vehículo, destinado a circular en la vía pública', 'Es obligatorio para vehículos de más de 50c.c. decilindrada', 2, ''),
(73, '10', 'Para circular en moto son aptos los cascos de uso industrial?', 'No, porque debe ser un casco que cumpla con las normas IRAM.', 'Si, cualquier casco es apto para circular con motocicletas.', 'Si, ya que su material es resistente a grandes cargas de presión', 1, ''),
(74, '10', 'Marque cual de las siguientes son partes  elementales de una motocicleta', 'Cuadro', 'Airbag', 'Volante', 1, ''),
(75, '10', 'Marque cual de las siguientes son partes  elementales de una motocicleta', 'Casco reglamentario', 'Puerta', 'Horquilla', 3, ''),
(76, '10', 'Marque cual de las siguientes son partes  elementales de una motocicleta', 'Pipa de dirección', 'Porta equipaje', 'Guarda barros', 1, ''),
(77, '10', 'De las siguiente opciones identifique un elemento de seguridad preventiva', 'Luces', 'Casco', 'Escape', 1, ''),
(78, '10', 'De las siguientes opciones identifique un elemento de seguridad pasiva', 'Anteojos de seguridad', 'Casco', 'Vestimenta', 3, ''),
(79, '10', 'Cuál es el grado máximo de alcoholemia permitido para conducir motocicletas y ciclomotores?', '0,5 gramos por litro de sangre', '0,6 gramos por litro de sangre', '0,2 gramos por litro de sangre', 3, ''),
(80, '10', 'Qué documentación debe portar el conductor de un ciclomotor o motocicleta?', 'Licencia de conducir y cédula verde', 'Licencia de conducir, cédula verde, documento identidad, constancia de seguro y vtv.', 'Licencia de conducir, cédula verde y constancia de seguro obligatorio', 3, ''),
(81, '10', 'Cuando varios motovehículos marchen juntos o agrupados, de qué manera deben ubicarse en la calzada?', 'En fila india.', 'A la par unos de otros.', 'Cuando sean grupos grandes, pueden circular uno al costado del otro.', 1, ''),
(82, '10', 'Con lluvia, el ciclomotor se adhiere mejor a la calzada si…', 'Se aumenta la presión de inflado del neumático.', 'El neumático conserva el dibujo en toda la superficie.', 'Se baja la presión de inflado del neumático.', 2, ''),
(83, '11', 'Qué tipo de vehículo se define como Motocicleta?', 'Al vehículo de menos de 50 cc de cilindrada', 'Al vehículo de hasta 50 cc de cilindrada', 'Al vehículo de más de 50 cc de cilindrada', 3, ''),
(84, '11', 'Marque únicamente los que considere Dispositivos Mínimos de Seguridad del vehículo que va a conducir', 'Extintor de incendios (matafuego)', 'Balizas', 'Luces reglamentarias', 3, ''),
(85, '11', 'Marque únicamente los que considere Dispositivos Mínimos de Seguridad del vehículo que va a conducir', 'Faros Busca huella', 'Chapas de identificación del vehículo', 'bocina', 2, ''),
(86, '11', 'Marque únicamente los que considere Dispositivos Mínimos de Seguridad del vehículo que va a conducir', 'Casco reglamentario', 'Radio', 'Cadena o elemento similar para ser remolcado', 1, ''),
(87, '11', 'Marque únicamente los que considere Dispositivos Mínimos de Seguridad del vehículo que va a conducir', 'Sistema motriz de retroceso', 'Bocina de sonoridad reglamentaria', 'Tablero completo y de fácil visualización', 3, ''),
(88, '11', 'Los faros delanteros deben ser…', 'De luz verde', 'De luz blanca o amarilla indistintamente', 'De luz amarilla únicamente', 2, ''),
(89, '11', 'Las luces de posición traseras deben ser…', 'De color blanco', 'De color blanco o rojo indistintamente', 'De color rojo', 3, ''),
(90, '11', 'Las luces de giro deben ser…', 'Intermitentes, de color amarillo adelante y rojo atrás', 'Intermitente de color amarillo adelante y atrás', 'Permantenesde color amarillo adelante y rojo atrás', 2, ''),
(91, '11', 'Las luces de freno traseras deben ser…', 'De color amarillo', 'De color blanco', 'De color rojo', 3, ''),
(92, '11', 'El uso de luces bajas o alcance medio es obligatorio en zona rural, ruta, carretera autopista o semiautopista…', 'Desde el crepúsculo hasta el alba', 'Durante las 24 horas del día sin importar las condiciones climáticas', 'Durante las 24 horas del día sólo si la visibilidad es escasa', 2, ''),
(93, '11', 'Las luces de freno deben encenderse, conforme a sus fines…', 'Solamente si la luz natural es insuficiente', 'Aunque la luz natural sea suficiente', '  Sólo en horas nocturnas', 2, ''),
(94, '11', 'Las luces de giro deben encenderse, conforme a sus fines…', 'Aunque la luz natural sea suficiente', 'solo en horas nocturnas', 'solo en zonas urbanas sin importar la luz reinante', 1, ''),
(95, '11', 'Qué documentación debe portar el conductor de un ciclomotor o motocicleta?', 'Licencia de conducir y cédula verde', 'Licencia de conducir, cédula verde, documento identidad, constancia de seguro y vtv.', 'Licencia de conducir, cédula verde y constancia de seguro obligatorio', 3, ''),
(96, '11', 'Es requisito para circular, tener las placas de identificación de dominio colocadas?', 'Sólo para vehículos sin acoplado', 'para todo tipod de vehículo', 'sólo  para los que transportan personas', 2, ''),
(97, '11', 'El uso de casco es obligatorio en caso de circular en…', 'Motocicletas y ciclomotores, solamente', 'Motocicletas, ciclomotores, triciclos y cuatriciclos', 'Triciclos y cuatriciclos , solamente', 2, ''),
(98, '11', 'El uso de casco es obligatorio…', 'Para el conductor únicamente', '  Para el conductor y acompañante', 'Para el acompañante únicamente', 2, ''),
(99, '11', '  Qué carga máxima puede transportar una motocicleta?', '40 kg', '60 kg', '100kg', 3, ''),
(100, '11', 'Cuántos acompañantes puede llevar una motocicleta?', 'Hasta dos, dependiendo del peso', 'Sólo 1', 'Ninguno', 2, ''),
(101, '11', '  Dónde deben ubicarse los acompañantes en las motocicletas?', 'Atrás del conductor', 'Delante del conductor', 'Indistintamente, si se trata de niños', 1, ''),
(102, '11', 'Cuál es el grado máximo de alcoholemia permitido para conducir motocicletas y ciclomotores?:', '0,5 gramos por litro de sangre', '0,6 gramos por litro de sangre', '0,2 gramos por litro de sangre', 3, ''),
(103, '11', 'El casco constituye:', 'El principal elemento de protección cuando se viaja en moto', 'Un elemento de seguridad cuyo uso no es obligatorio', 'Un elemento de seguridad obligatorio para circular sólo en motos de alta cilindrada.', 1, ''),
(104, '11', 'Este conductor va a tomar la vía de la izquierda en la rotonda, qué trayecto debe seguir?', 'Indistintamente cualquiera de ellos.', 'B. El trayecto azul.', 'C. El trayecto rojo.', 3, ''),
(105, '11', 'Cuando varios motovehículos marchen juntos o agrupados, de qué manera deben ubicarse en la calzada?', 'En fila india.', 'A la par unos de otros.', 'Cuando sean grupos grandes, pueden circular uno al costado del otro.', 1, ''),
(106, '12', 'Cuántos Tipos de transmisiones existen?', '3', '5', '2', 3, ''),
(107, '12', 'El cuatriciclo es un vehículo apto para circular en la vía pública', 'FALSO', 'VERDADERO', 'Depende de la Licencia del Conductor', 1, ''),
(108, '12', 'Es obligatorio el uso de casco en las zonas seguras?', 'SI', 'NO', 'Según indique la cartelería', 1, ''),
(109, '12', 'Cuál es el casco recomendado para cuatriciclos?', 'Jet con Pantalla', 'Rebatible', 'Trial', 3, ''),
(110, '12', 'Cuál de estos elementos son necesarios para la circulación segura en cuatriciclos?', 'Botas', 'Zapatos', 'Musculosa', 1, ''),
(111, '12', 'Para mantener la estabilidad en curva, debemos bajar los pies?', 'Ocasionalmente', 'Nunca', 'Siempre', 2, ''),
(112, '12', 'Para qué lado se inclina el cuerpo al tomar una curva?', 'Para el lado opuesto al que se dobla', 'Para el lado que se está doblando', 'Dependiendo de la inclinación de la curva hacia adentro o hacia afuera', 2, ''),
(113, '12', 'Cual es la postura correcta al bajar una pendiente?', 'El cuerpo debe formar un ángulo de 45°', 'El cuerpo debe formar un anguelo de 30°', 'El cuerpo debe formar un anguelo de 60 °', 1, ''),
(114, '12', 'Cuáles son los requisitos para la circulación en cuatriciclo?', 'Licencia de conducir habilitante', 'seguro contra terceros', 'cedula de identificación del vehículo', 0, ''),
(115, '12', 'Porque el cuatriciclo es un vehículo no apto para la circulación en al vía pública?', 'Porque no esta comprendido dentro de la ley 24449', 'Por no contar con la licencia de configuración  de modelo', 'Por no contar con la licencia de configuración  de modelo, ni la entrega de la chapa patente', 3, ''),
(116, '12', 'Cómo se define un corredor de circulación seguro?', 'Vías habilitadas por la autoridad Jurisdiccional según corresponda destinadas al uso de los vehículos cuatriciclos para permitir el traslado de los usuarios hasta la zonas de circulación segura', 'Área determinada por la Autoridad jurisdiccional para la recreación de los usuarios de cuatricilo', 'Comprende los recorridos preparados balizados y señalizados dentro de las zonas de circulación segura', 1, ''),
(117, '12', 'Cuál es la cilindrada máxima permitida en una pista verde?', 'de 151cc a 300cc', 'más de 300 cc', 'hasta 150cc', 3, ''),
(118, '12', 'Cual es la cilindráda máxima perimitda en una pista naranja?', 'de 151cc a 300cc', 'mas de 300 cc', 'hasta 150cc', 2, ''),
(119, '12', 'En las zonas y vías de circulación cuál es la velocidad máxima?', '40km', '30km', '20km', 3, ''),
(120, '13', 'El vehículo está “Estacionado” …', 'Cuando se detiene por más tiempo del necesario para captar pasajeros o carga, o cuando tenga el conductor fuera de su puesto', 'Cuando se detiene, si se trata de una emergencia únicamente', 'Cuando ascienden o descienden pasajeros en paradas habilitadas', 1, ''),
(121, '13', 'Marque únicamente los que considere “Dispositivos mínimos de seguridad” para el porte de vehículo que va a conducir', 'Extintor de incendios (matafuego)', 'Cierre de puertas centralizado', 'Malacate (cuando circula en zona fangosa)', 1, ''),
(122, '13', 'Marque únicamente los que considere “Dispositivos mínimos de seguridad” para el porte de vehículo que va a conducir', 'Reloj para indicación horaria', 'Cinturones de seguridad', 'Aire acondicionado', 2, ''),
(123, '13', 'Marque únicamente los que considere “Dispositivos mínimos de seguridad” para el porte de vehículo que va a conducir', 'Luces reglamentarias', 'Tacográfo', 'linterna portatil', 1, ''),
(124, '13', 'Los faros delanteros…', 'No indican sentido de marcha', 'Sólo indican el sentido de marcha si son amarillas', 'Indican el sentido de marcha', 3, ''),
(125, '13', 'La luz de retroceso debe ser…', 'De color amarillo', 'De color blanco', 'De color rojo', 2, ''),
(126, '13', 'El destello debe usarse…', 'Para advertir una emergencia en la vía pública', 'En los cruces de vías y para advertir los sobrepasos', 'Únicamente en los cruces de vías', 2, ''),
(127, '13', 'Las luces intermitentes de emergencias deben usarse para indicar…', 'Detención temporaria en “doble fila”', 'Detención en peajes, zonas peligrosas o maniobras riesgosas', 'Solamente cuando la detención sea para entrar o salir de estacionamientos', 2, ''),
(128, '13', 'Qué documentación debe portar el conductor de un vehículo particular?', 'Licencia de conducir y cédula verde', 'Licencia de conducir, cédula verde, documento identidad, constancia de seguro y vtv.', 'Licencia  de conducir, cédula verde y constancia de seguro obligatorio', 2, ''),
(129, '13', 'El uso de correajes o cinturones de seguridad, es obligatorio para los ocupantes del vehículo?', 'Que viajan en los asientos delanteros', 'Los mayores de doce años', 'Para todos los ocupantes', 3, ''),
(130, '13', 'Dónde y cómo deben viajar los menores de más de cuatro y hasta diez años?', 'En cualquier butaca del vehículo mientras tenga cinturón de seguridad', 'La ubicación depende de su peso y estatura', 'En el asiento trasero con cinturón de seguridad', 3, ''),
(131, '13', 'Dónde y cómo deben viajar los menores de cuatro años?', 'En el asiento trasero y con cinturón de seguridad', 'En los dispositivos de retención infantil correspondientes', 'Sobre la falda de un mayor con cinturón de seguridad', 2, ''),
(132, '13', 'Cuál es el grado máximo de alcoholemia permitido para conducir un automóvil?', '0,5 gramos por litro de sangre', '0,2 gramos por litro de sangre', '0,1 gramos por litro de sangre', 1, ''),
(133, '13', 'El uso de enganches sobresalientes…', 'Está permitido en vehículos de carga', 'Está permitido en zonas de baja densidad de tránsito', 'Está prohibido', 3, ''),
(134, '13', 'En qué circunstancia está permitido circular marcha atrás?', 'Al salir de garajes', 'En calles de tierra', 'En garajes y calles de tierra', 1, ''),
(135, '13', 'Qué ocupantes del rodado están obligados al uso del cinturón de seguridad?', 'Los ocupantes de los asientos delanteros únicamente', 'Los menores de diez años', 'Todos los ocupantes del rodado', 3, ''),
(136, '13', 'Uno de sus neumáticos traseros se revienta mientras usted conduce, qué cosas debe hacer usted?', 'Hacer una señal de detención con el brazo y disminuir la velocidad', 'Detenerse lentamente al costado de la vía', 'Detener el vehículo frenando lo más fuerte que pueda', 2, ''),
(137, '13', 'Cuál es la velocidad máxima permitida en autopistas?', '90km/h', '110km/h', '130km/h', 3, ''),
(138, '13', 'La seguridad pasiva de un vehículo comprende…', 'El sistema de frenos, la dirección…', 'El cinturón de seguridad, el apoyacabezas…', 'El cierre centralizado, levanta cristales…', 2, ''),
(139, '13', 'La instalación del airbag en un vehículo sustituye la obligación de utilizar el cinturón de seguridad?', 'Sí, porque evita el impacto del conductor y pasajeros contra los elementos del vehículo.', 'Sí, porque evita lesiones en el cabeza y cuello.', 'No, porque actúa complementando la protección que ofrece el cinturón de seguridad.', 3, ''),
(140, '13', 'En un automóvil cuál es la profundidad mínima que debe tener el dibujo de las cubiertas?', '0,5 mm.', '1,0 mm.', '1,6 mm.', 3, ''),
(141, '13', 'Circula detrás de otros vehículos por una vía urbana. Si al llegar a una intersección prevé que va a quedar detenido en la misma obstruyendo la circulación transversal, qué debe hacer?', 'Pasar si tengo preferencia de paso.', 'Intentar atravesar la intersección en el caso de que la luz esté en verde.', 'No penetrar en la intersección hasta estar seguro de que voy a poder franquearla sin ser un obstáculo.', 3, ''),
(142, '14', 'En una camioneta…', 'Pueden transportarse cargas de hasta 3.500 kg. de peso total', 'Pueden transportarse cargas sin límite de peso', 'No hay límite de peso sino de volumen', 1, ''),
(143, '14', 'El uso de enganches sobresalientes…', 'Está permitido en vehículos de carga', 'Está permitido en zonas de baja densidad de tránsito', 'Está prohibido', 3, ''),
(144, '14', 'La colocación de defensas sobresalientes en los paragolpes está permitida?', 'En paragolpes delantero', 'En paragolpes trasero', 'En ninguno de los dos', 3, ''),
(145, '14', 'Cómo deben señalizarse las cargas salientes indivisibles?', 'Con una bandera de color rojo', 'Con una bandera a rayas oblicuas de color rojo y blanco', 'Con una bandera de color blanco', 2, ''),
(146, '14', 'En qué condiciones de visibilidad se pueden transportar cargas indivisibles con salientes?', 'No hay restricciones en cuanto a la visibilidad', 'Desde la hora “sol sale” hasta la hora “sol se pone” o en lugares perfectamente iluminados', 'No importa la visibilidad, mientras estén correctamente sujetas', 2, ''),
(147, '14', 'Cuánto pueden sobresalir de cada lado del vehículo las  Cargas Livianas en Zonas Urbanas?', 'Hasta 50 cm. de cada lado', 'Hasta 20 cm. de cada lado siempre que el total no exceda los 2,60 m. de ancho', 'Hasta 70 cm. de cada lado', 2, ''),
(148, '14', 'En zona rural, cuánto pueden sobresalir de cada lado del vehículo las cargas livianas?', 'Hasta 20 cm. de cada lado sin exceder el ancho máximo del vehículo', 'Hasta 50 cm. de cada lado', 'Hasta 20 cm. del lado derecho solamente, sin exceder el ancho máximo del vehículo', 3, ''),
(149, '14', 'Cuánto pueden exceder de la parte posterior del vehículo las cargas livianas?', '0,70 metros como máximo', '1, 50 metros como máximo', '3 metros como máximo', 1, ''),
(150, '14', 'La Senda Peatonal está destinada al uso de peatones…', 'Esté o no marcada', 'Únicamente si está marcada', 'Sólo si la precede la línea de frenado', 1, ''),
(151, '14', 'Cuándo un vehículo está detenido?', 'Al momento de carga y descarga de mercaderías, sin movimiento ni conductor a bordo', 'Al momento de ascenso y descenso de pasajeros o carga y descarga de mercadería, sin movimiento pero con su conductor a bordo', 'En cualquier circunstancia, sin movimiento ni conductor a bordo', 2, ''),
(152, '14', 'Marque únicamente el que considere Dispositivo mínimo de seguridad', 'Cadena o elemento similar para ser remolcado', 'Faros Busca Huella', ' Luces reglamentarias', 3, ''),
(153, '14', 'Cuáles de estos elementos se considera Carga Liviana?', 'Tirantes de madera', 'Fardos de pasto', 'Vigas metálicas', 2, ''),
(154, '14', 'En una camioneta simple cabina es posible trasladar un menor de 10 años?', 'VERDADERO', 'FALSO', 'Si se coloca el cinturón de seguridad es posible', 2, ''),
(155, '14', 'Qué se define como Peso?', 'Al peso del vehículo en kilogramos que se transmite a la calzada', 'Al peso total del vehículo más los ocupantes, en kilogramos, que se transmite a la calzada', 'Al peso total del vehículo, más su carga y ocupantes, en kilogramos que se transmite a la calzada', 3, ''),
(156, '15', 'Qué se define como Camión?', 'Al vehículo para transporte de carga sólo menor a los 3.500 kg. de peso', 'Al vehículo para transporte de carga de más de 3.500 kg de peso', 'Al vehículo para transporte de carga sin límite de peso máximo', 2, ''),
(157, '15', ' Qué se define como Peso?', 'Al peso del vehículo en kilogramos que se transmite a la calzada', 'Al peso total del vehículo más los ocupantes, en kilogramos, que se transmite a la calzada', 'Al peso total del vehículo, más su carga y ocupantes, en kilogramos que se transmite a la calzada', 3, ''),
(158, '15', 'Qué se define como Tara?', 'Al peso de la carga que transporta el vehículo', 'A la masa o peso del vehículo en el que se transporta la carga', 'Al volumen de la carga que transporta el vehículo', 2, ''),
(159, '15', 'Marque únicamente el  que considere  Dispositivo mínimo de seguridad', 'Cierre de puertas centralizado', 'Reloj para indicación horaria', 'Sistema motriz de retroceso', 3, ''),
(160, '15', 'Marque únicamente el  que considere Dispositivo mínimo de seguridad', 'Luces reglamentarias', '  Linterna portátil', 'Tacógrafo', 1, ''),
(161, '15', 'Para vehículos destinados al transporte de pasajeros, menores y carga, el grado máximo de alcoholemia permitido es…', '0.5 gramos por litro de sangre', '0.0 gramos por litro de sangre', '0.2 gramos por litro de sangre', 2, ''),
(162, '15', 'En vías de menos de tres carriles por mano, qué distancia deben mantener entre sí los ómnibus y camiones?', 'Proporcional a la velocidad', 'No menor a cien metros', 'El largo del camión', 2, ''),
(163, '15', 'El uso de enganches sobresalientes…', 'Está permitido en vehículos de carga', 'Está permitido en zonas de baja densidad de tránsito', 'Está prohibido', 3, ''),
(164, '15', 'Cuál  es la velocidad máxima permitida para automóvil/camioneta más casa rodante acoplada en zona rural o ruta pavimentada?', '90 km/h', '80 km/h', '110 km/h', 2, ''),
(165, '15', ' Cuál es la distancia aproximada recorrida circulando a 80km/h?', '10 metros por segundo', '30 metros por segundo', '22 metros por segundo', 3, ''),
(166, '15', 'El tiempo de reacción es…', 'El que transcurre desde que se acciona el freno hasta que se detiene el vehículo', 'El que transcurre desde que se percibe el obstáculo hasta que se pone el pie en el freno', 'El que transcurre desde que se percibe el objeto hasta la detención total del vehículo', 2, ''),
(167, '15', 'La distancia de frenado es…', 'La distancia recorrida desde que se visualiza el objeto hasta accionar el freno', 'La distancia recorrida desde que se acciona el freno hasta la detención del vehículo', 'La distancia recorrida desde que se visualiza el objeto hasta la detención total del vehículo', 2, ''),
(168, '15', 'Cuál es el largo máximo permitido para un camión simple?', 'Doce metros', 'Trece metros con veinte centímetros', 'Quince metros', 2, ''),
(169, '15', ' Cuándo los vehículos que transportan las cargas  indivisibles deben contar con permiso para circular?', 'Cuando sobrepasen los límites de la caja, cualquiera sea la saliente', 'Cuando la saliente trasera no supere un metro', 'Cuando la saliente trasera supere un metro', 3, ''),
(170, '15', 'El transporte de cargas indivisibles, debe ser señalizado cuando…', 'La saliente trasera sobrepasa un metro', 'No es necesaria la señalización', 'Siempre, aunque no sobrepase los límites de la caja', 1, ''),
(171, '15', 'Cómo deben señalizarse las cargas salientes indivisibles?', 'Con una bandera de color rojo', 'Con una bandera a rayas oblicuas de color rojo y blanco', 'Con una bandera de color blanco', 2, ''),
(172, '15', 'En qué condiciones de visibilidad se pueden transportar cargas indivisibles con salientes?', 'No hay restricciones en cuanto a la visibilidad', 'Desde la hora “sol sale” hasta la hora “sol se pone” o en lugares perfectamente iluminados', 'No importa la visibilidad, mientras estén correctamente sujetas', 2, ''),
(173, '15', 'Cuánto pueden sobresalir de cada lado del vehículo las cargas livianas en zonas urbanas?', 'Hasta 50 cm. de cada lado', 'Hasta 20 cm. de cada lado siempre que el total no exceda los 2,60 m. de ancho', 'Hasta 70 cm. de cada lado', 2, ''),
(174, '15', 'Cuánto pueden exceder de la parte posterior del vehículo las cargas livianas?', '0,70 metros como máximo', '1, 50 metros como máximo', '3 metros como máximo', 1, ''),
(265, '2', 'Que indica la siguiente señal', 'Mano Única', 'Contramano', 'Prohibido estacionar', 2, '265.PNG'),
(266, '1', 'Que indica la siguiente señal', 'Cruce Ferroviario', 'Prohibido Pasar', 'Autopista', 1, '266.PNG'),
(267, '1', 'Que indica la siguiente Señal', 'Prohibido Estacionar', 'Estacionamiento Exclusivo', 'Mano Unica', 1, '267.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `clave`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
