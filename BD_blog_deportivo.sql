-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para blog_deportivo
CREATE DATABASE IF NOT EXISTS `blog_deportivo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `blog_deportivo`;

-- Volcando estructura para tabla blog_deportivo.comentario
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(255) NOT NULL,
  `id_post` int(11) NOT NULL,
  `texto` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email_usuario` (`email_usuario`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla blog_deportivo.comentario: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT IGNORE INTO `comentario` (`id`, `email_usuario`, `id_post`, `texto`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(13, 'laselva@gmail.com', 60, 'Cruz Azul mi partido favorito', '2022-04-12 21:28:13', '2022-04-12 21:28:13', NULL),
	(16, 'laselva@gmail.com', 61, 'Eso es algo que no se esperaba', '2022-04-13 06:46:51', '2022-04-13 06:46:51', NULL),
	(18, 'laselva@gmail.com', 61, 'Que tremendo esta esto', '2022-04-13 07:24:26', '2022-04-13 07:24:26', NULL),
	(19, 'laselva@gmail.com', 61, 'La verdad que si', '2022-04-13 07:25:18', '2022-04-13 07:25:18', NULL),
	(21, 'laselva@gmail.com', 61, 'Siiiiii', '2022-04-13 07:27:05', '2022-04-13 07:27:05', NULL),
	(22, 'laselva@gmail.com', 61, 'Tan malo que es ESPN', '2022-04-13 07:27:38', '2022-04-13 07:27:38', NULL),
	(26, 'laselva@gmail.com', 62, 'Seleccione imagen en mi galería, no tenía de béisbol. Jajaja', '2022-04-13 17:00:24', '2022-04-13 17:00:24', NULL),
	(27, 'laselva@gmail.com', 66, 'Lo vi en canal 501', '2022-04-13 17:38:03', '2022-04-13 17:38:03', NULL),
	(209, 'laselva@gmail.com', 64, 'Seeeeeeeeeeeeeee', '2022-04-22 07:17:09', '2022-04-22 07:17:09', NULL);
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.failed_jobs: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.migrations: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2022_03_02_162718_create_sessions_table', 1),
	(7, '2022_02_16_230409_create_usuarios_table', 2),
	(8, '2022_03_17_013756_create_posts_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.password_resets: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.personal_access_tokens: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_redactor` varchar(255) NOT NULL,
  `categoria` text NOT NULL,
  `titulo` text NOT NULL,
  `contenido` text NOT NULL,
  `imagen` text NOT NULL,
  `tags` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email_redactor` (`email_redactor`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla blog_deportivo.post: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT IGNORE INTO `post` (`id`, `email_redactor`, `categoria`, `titulo`, `contenido`, `imagen`, `tags`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(60, 'laselva@gmail.com', 'futbol', '¿Cuál sería la alineación del Cruz Azul contra Pumas a pesar de las bajas?', 'Juan Reynoso encara un partido de vida o muerte contra Pumas con ciertas ausencias.', 'i.jpg', 'cruzazul', '2022-04-12 21:26:52', '2022-04-12 21:26:52', NULL),
	(63, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: Jordan Loveridge, la gran figura de los líderes.', 'Vienen de ganar cuatro partidos consecutivos como locales y ahora los líderes Astros de Jalisco buscarán alargar su racha ganadora cuando visiten a los Halcones de Ciudad Obregón.\r\n\r\nLa quinteta tapatía ha tenido un plausible arranque de temporada. Los dirigidos por Alejandro Formento han ganado seis de sus siete enfrentamientos y son los líderes indiscutibles del Circuito de Baloncesto de la Costa del Pacífico (CIBACOPA).', 'astros Jalisco.webp', '#Astros de Jalisco', '2022-04-13 17:03:22', '2022-04-13 17:03:22', NULL),
	(66, 'laselva@gmail.com', 'basquetbol', '¡Dramático triunfo! Escaramuzas de Jalisco ganan de última hora ante Mexcaltecas.', 'Nayeli Ortiz fue la heroína del equipo tapatío. Sobre la hora encestó un triple y otra canasta de dos puntos para remontar la pizarra y darle así el triunfo final a Escaramuzas de Jalisco, que derrotaron 69-67 Mexcaltecas de Nayarit en la Liga Mexicana de Baloncesto Profesional Femenil.', 'victoria de Jalisoc.webp', 'Escaramuzas de Jalisco', '2022-04-13 17:34:12', '2022-04-13 17:34:12', NULL),
	(70, 'laselva@gmail.com', 'tenis', 'La tenista australiana Ash Barty, actual número uno del mundo, se retira', 'La deportista, de 25 años, abandona este deporte por agotamiento físico y mental. Se convirtió en número uno mundial en 2019, y ha mantenido ese puesto durante 119 semanas.\r\nLa número uno del tenis mundial, la australiana Ash Barty, ha anunciado este miércoles que se retira de este deporte a los 25 años por agotamiento físico y mental y para "perseguir otros sueños". Barty ha logrado 15 títulos individuales y 12 dobles en su carrera deportiva.\r\n\r\n"Hoy es un día difícil y lleno de emociones porque anuncio que me retiro del tenis", ha dicho Barty en el mensaje que acompaña a un vídeo que ha colgado en su cuenta de Instagram en el que ha agradecido el apoyo recibido a lo largo de su carrera deportiva y ha destacado las sensaciones de "orgullo y plenitud" que le deja este deporte.\r\n\r\n"Ya no tengo el impulso físico, las ganas emocionales ni todo lo que se necesita para desafiarte a ti mismo en lo más alto del nivel. Estoy agotada", ha precisado quien ha sido la raqueta número uno del mundo durante más de dos años y se coronó campeona en el último Abierto de Australia tras imponerse en dos sets a la estadounidense Danielle Collins. De esa manera, además, se convirtió en la primera tenista local en ganar el torneo en 44 años.\r\n\r\nEse ha sido su tercer título del Grand Slam, coronándose como la número uno mundial en la clasificación de la WTA, después de haber alzado también el trofeo de Roland Garros en 2019 y el de Wimbledon en 2021.\r\n\r\nEsta no es la primera vez que la australiana abandona el tenis, ya lo hizo en 2014, siendo una adolescente de 17 años, para dedicarse profesionalmente al críquet. Sin embargo, dos años después volvió a las pistas e inició una progresión fulgurante que la ha llevado al trono mundial del tenis femenino.\r\n\r\nEl año de su despegue definitivo fue 2019, cuando logró en París su primer título de Grand Slam y se convirtió por primera vez en número uno del mundo, una posición que ha ocupado desde entonces durante 119 semanas.', 'tenis.jpg', '#Ash Barty', '2022-04-14 17:10:20', '2022-04-14 17:10:20', NULL),
	(71, 'laselva@gmail.com', 'tenis', '¡Imparable! Paula Badosa se mete a Semifinales de Indian Wells.', 'La tenista ibérica, Paula Badosa se impuso este jueves a la oriunda de Rusia Veronika Kudermetova en la fase de Cuartos de Final del prestigioso torneo Indian Wells y está a solo dos partidos de convertirse en la primera tenista en revalidar el título desde 1991.\r\n\r\nPara ello, la número 7 del ranking de la WTA, deberá verse las caras con la griega Maria Sakkari (6º) mientras el otro cruce lo disputarán la joven polaca Iga Swiatek (4º) y la rumana Simona Halep (26º).\r\n\r\nEn esta edición sigue sin ceder un set y este jueves fue capaz de batir por 6-3 y 6-2 a Kudermetova (24º), una rival ante la que había sucumbido en sus tres enfrentamientos anteriores, el último en la primera ronda de Indian Wells en 2019.', 'tenis1.webp', '#Paula', '2022-04-14 17:34:42', '2022-04-14 17:34:42', NULL),
	(72, 'laselva@gmail.com', 'tenis', 'Rafa Nadal sigue con paso arrollador.', 'El español Rafael Nadal venció ayer al estadounidense Reilly Opelka en dos sets en el Masters 1000 de Indian Wells, sellando su decimoctavo triunfo consecutivo en el arranque de temporada y citándose en los Cuartos de Final con el controvertido Nick Kyrgios.\r\n\r\nGran favorito al título en el desierto californiano, Nadal necesitó de dos tiebreaks para quebrar la resistencia del gigante Opelka (2.11 m de estatura) por marcador de 7-6 (7/3) y 7/6 (7/5) en dos horas y 11 minutos de juego.\r\n\r\n“Es un jugador muy difícil de enfrentar, sin duda”, dijo Nadal sobre su rival, número 17 de la ATP. “Tiene un servicio y volea tremendos pero creo que jugué mi mejor partido de este torneo”.\r\n\r\nTras una temporada marcada por sus problemas crónicos de pie, el español ha tenido una fabulosa reaparición en 2022 ganando tres torneos, incluido el Abierto de Australia, que lo convirtió en el tenista masculino con más títulos de Grand Slam (21).', 'tenis2.webp', '#RafaNodal', '2022-04-14 17:36:18', '2022-04-14 17:36:18', NULL),
	(73, 'laselva@gmail.com', 'tenis', 'Roland Garros anuncia importante medida sobre Djokovic y los tenistas rusos.', '"En este momento no hay nada que le frene entrar a una pista", dijo la directora de Roland Garros Amelie Mauresmo en una rueda de prensa.\r\n\r\nDjokovic fue deportado de Australia en enero tras una batalla legal sobre su ingreso al país, y no pudo participar en el Abierto de Australia. Dijo a la BBC el mes pasado que estaba dispuesto a perderse las próximas citas de Grand Slam si se le exige estar vacunado.\r\n\r\nEl serbio se ha consagrado campeón de Roland Garros en dos ocasiones y acumula 20 títulos de Grand Slam, uno detrás del récord en manos de Rafael Nadal luego que el español acabó coronándose en el Abierto de Australia en enero pasado.', 'tenis3.webp', '#RolandGarros', '2022-04-14 17:40:21', '2022-04-14 17:40:21', NULL),
	(74, 'laselva@gmail.com', 'beisbol', 'Cierre Mundial de Béisbol: ¿Desenchufar 2020?', 'Todos vamos a coincidir en que 2020 ha sido un año horrible. Algunas personas, de manera supersticiosa (al menos yo crecí con ese conocimiento), creen que los años bisiestos son una mala señal o años de mala suerte. Este, sin embargo, ha sido tan malo que ha dejado al mundo sin béisbol — y el béisbol no es el único deporte que se ha apagado — ya sea de las ligas o competencias internacionales. Desde los Clasificatorios Olímpicos hasta la mismísima temporada de la MLB, las posposiciones han sido la regla de cada torneo beisbolero del planeta, dejando a los “gamers” de MLB The Show como los únicos “jugadores” en acción.\r\n(English Version)\r\n¿Quién los puede culpar? El esparcimiento del #Coronavirus (sí, el tema trending en el mundo en este momento) forzó primero a la Confederación Mundial de Béisbol y Softbol (WBSC) a cancelar el último Clasificatorio Olímpico, que se iba a celebrar en Taipéi de China, debido a los riesgos que traía la pandemia. Fue seguido por el Clasificatorio de las Américas (a celebrarse en Arizona) y el entrenamiento de primavera junto con la mismísima temporada regular de la MLB. Poco a poco, el béisbol se tornó secundario en las mentes incluso de los más fieles fanáticos, mientras la supervivencia y las medidas para permanecer lejos del brote de la COVID-19 se han convertido en prioridad. Sin embargo, el béisbol, para algunos como yo, se ha convertido en nuestro refugio, pues la historia del juego es tan rica que leer sobre ella puede hacernos olvidar un poco sobre lo que está pasando.\r\nEl Día de Apertura debía haber sido anoche. No sucedió… pero lo sabíamos porque era obvio. Un sabor amargo persiste en los corazones de muchos fans, que están frustrados por no tener su amado juego, y que no deben bajo ningún concepto ser llamados egoístas. No obstante, MLB Network ha venido al rescata al poner juegos pasados gratis disponibles por streaming. Es un analgésico en medio de la crisis global que estamos viviendo… y también para esos que extrañan el juego.\r\nLa temporada de la MLB no había sido cancelada desde la huelga de los peloteros desde 1994–95, cuando no se completaron los calendarios completos de 162 juegos (la de 1994 se detuvo en 114 encuentros y la de 1995 comenzó tarde con 144 encuentros a jugar). En 2001, luego de los ataques del 11 de septiembre, la temporada se detuvo y reanudó tras una semana de las acciones terroristas, pero se jugaron los 162 partidos y los encuentros de la Serie Mundial se extendieron a noviembre.\r\nAhora, la MLB y el Sindicato de Peloteros están evaluando la posibilidad de efectuar no menos de 100 partidos, pero eso es solo esperando que se contenga en algún momento el Coronavirus, aunque la incertidumbre ha aumentado en el mundo del deporte, pues los Juegos Olímpicos de Tokyo 2020 han sido movidos para 2021, algo sin precedentes. Eso es sin mencionar todos los demás circuitos del mundo… que han sido en su totalidad pospuestos por el momento.\r\nAsí que más allá de preocuparnos del escándalo del robo de señas de los Houston Astros, o esos jugadores que estaban haciéndolo bien en los entrenamientos de primavera buscando un puesto en los roster para el Día de Apertura, los fanáticos del béisbol en Estados Unidos y el resto del mundo solo esperan volver a tener pelota. Después de todo, la reanudación del béisbol y el deporte en todo el mundo significaría una cosa: las cosas están normales.', '1_sBJErpDGTI9nbZ_CHc3HAw.jpeg', 'Universo Béisbol: Mar 27, 2020  · 3 min read', '2022-04-15 13:28:41', '2022-04-15 13:28:41', NULL),
	(75, 'laselva@gmail.com', 'beisbol', 'El beisbol cubano y su problema de relaciones publicas', 'La eliminación del equipo Cuba de la competencia en la primera ronda del Premier12 de la WBSC coronó un año que ha visto por mucho los más lamentables desempeños del equipo nacional de Cuba, y ha despejado las dudas de que se necesitan cambios drásticos y reales. El equipo se fue de la primera ronda de manera ruidosa, anotando apenas tres carreras — todas en el único juego que ganaron de manera dudosa gracias a la Regla Schiller — y sin batear extra bases. Lo peor de todo es que no lograron pasar a la segunda ronda en el grupo que parecía el más fácil para ellos, pues se enfrentaron a Canadá, Australia y Corea del Sur. Es evidente que las cosas andan mal para el béisbol cubano en casa, pero todo trasciende más allá del terreno.\r\n( Versión en inglés )\r\nEl béisbol cubano tiene un serio problema de relaciones públicas, y esto no es nuevo. El béisbol cubano ha tenido este problema desde que inicióon las Series Nacionales y desde que el equipo Cuba evolucionó de ser una maquinaria poderosa a ser la maquinaria poderosa en las competencias internacionales. No obstante, este problema ha ido en ascenso en los últimos años, y es tal vez una de las principales razones por las cuales el béisbol en Cuba ha empeorado en vez de mejorar.\r\nLa principal razón ha sido obviamente el hecho de que la actual administración del béisbol cubano —es decir, el presidente de la federación— ha mantenido su puesto por mucho tiempo. Y el tiempo no sería un problema si estos últimos años no hubieran sido los peores que el juego ha visto en la isla desde que fue introducido en 1864. Esto ha coincidido con la peor etapa del equipo nacional de Cuba desde que comenzó a competir internacionalmente en los Juegos Centroamericanos y del Caribe de 1926 ya escala mundial en la Serie Mundial Amateur de 1939. Junto con esto, el béisbol cubano enfrenta un escándalo tras otro, ya veces estos no son mayores porque los mismos problemas de relaciones públicas los mantienen callados.\r\nLo peor de todo tiene que ver con la poca o cero tolerancia a la crítica por parte de la prensa y los fans. Los problemas del béisbol cubano no son invisibles ni cosméticos: son muy evidentes y extremadamente serios y desastrosos. De no resolverse, franquearse, o al menos hacer algo al respecto, nos esperan peores años. Algunos periodistas cubanos critican con algo de objetividad, pero solo un pequeño grupo va al fondo de las cosas. Por supuesto, esto tiene que ver con el hecho de que como prensa controlada con el gobierno, se necesita un cierto grado de complacencia hacia la jefatura del béisbol y del INDER porque no debe haber algo como un ataque a una institución gubernamental oa un funcionario público .', '1_oHCU9aHqDJW5uTNu_ymd-Q.jpeg', 'reynaldo cruz Reynaldo Cruz Reynaldo Cruz Editor de Universo Béisbol, traductor y fotógrafo en Cuba, Miembro de SABR/ Editor of Universo Béisbol, translator and photographer in Cuba, SABR Member  149 Followers  Follow 20 de noviembre de 2019  · 7 minutos de lectura', '2022-04-15 13:31:01', '2022-04-15 13:31:01', NULL),
	(76, 'laselva@gmail.com', 'beisbol', '57SNB: Sobre estilo, buen gusto y cosas que a nadie le importan', 'Los nuevos uniformes de la Segunda Etapa de la 57 Serie Nacional de Béisbol son, para cualquier estándar, un espectáculo lamentable. No podemos comenzar a hablar sobre el material usado para los mismos, pues la primera excusa sería el bloqueo norteamericano y la escasez de muchas cosas en la sociedad cubana que en muchos casos relega al béisbol a un rol menos protagónico. Es los diseños en sí, y el color elegido para los uniformes, lo que hace que muchos piensen en el béisbol cubano como un torneo de bajo nivel sin siquiera mirar la sirena calidad del juego.\r\n( Versión en inglés )\r\nEste trabajo tiene su génesis en un post de Facebook de un colega y amigo, que se quejaba porque algunos árbitros en el torneo doméstico cubano llevaban camisas y gorras con el logo de la MLB.\r\nEse pequeño detalle tiene mucho que ver con el hecho de que los mandamases del béisbol cubano han olvidado básicamente (de manera accidental o deliberada) que se supone que el juego sea un show de entretenimiento que tiene como objetivo atraer fans y multitudes no solo por la calidad de sus jugadores, sino también con los colores de los uniformes y el uso de muchas otras iniciativas para hacer que quienes asisten al juego o lo vean en TV sigan haciéndolo. Eso incluye uniformes con apariencia atractiva, actividades extras y música entre entradas, concesiones y venta de recuerdos, muestra de estadísticas y noches temáticas — hasta donde sabemos, las únicas noches temáticas que podemos esperar en Cuba están centradas en la política, y muchas tienen muy poco que ver con el juego.\r\nLos uniformes que se están usando en este minuto muestran un ridículo y falso igualitarismo que prueba que fueron diseñados en una plantilla que solamente cambia el color y la fuente para los nombres de los equipos en el frente. Los números en la espalda fueron diseñados siguiendo un patrón muy distintivo que llevó a quienes los hicieron a poner algunas patas para arriba (dígase los números dos y cinco, como en el caso del uniforme de visitador de Erlys Casanova). El otro aspecto que destaca (o no) es el hecho de que copiaron el diseño de algunos equipos de las mayores, en los cuales el número y la camiseta llevan el mismo color, y solamente el contorno fue hecho en contraste. ¿Bien hasta ahora?\r\nPara nada: quienes decidan hacerlo (algo que es bien común para casi cada camiseta de visitante) olvidaron sostener en sus manos una camiseta de ligas mayores antes de hacerlo. shouldn haber sabido que los números en la MLB son cosidos, y que están hechos de un material diferente (tela sargada atlética o Athletic twill), además de que el contorno tiene otro color debido a que es el hilo con que estos han sido bordados, y que tambien resalta ante la luz. Ese tipo de fabricación, además de ser más duradero, permite a todo ver los números de los peloteros desde las gradas más lejanas hasta la varilla de foul opuesta. La fuente para el frente de algunas chamarretas es realmente dificil, sino casi imposible de distinguir a apenas unos pies, lo que hace que todo el mundo se pregunte cuanto saben o se interesan por el beisbol las personas involucradas en ese proceso. Todo esto es sin mencionar que la técnica que se ha usado en Cuba años recientes (thermofilm durante thermoflock, un sistema de capas que se adhieren a la tela con calor) muchas veces se cae las dos primeras semanas de competencia, principalmente porque no pueden aguantar el brutal calor cubano. Por tanto, ese proceso requería números más grandes y más anchos para que tuvieran más superficie a la cual adherirse, para que duren más pegados a la tela. principalmente porque no pueden aguantar el brutal calor cubano. Por tanto, ese proceso requería números más grandes y más anchos para que tuvieran más superficie a la cual adherirse, para que duren más pegados a la tela. principalmente porque no pueden aguantar el brutal calor cubano. Por tanto, ese proceso requería números más grandes y más anchos para que tuvieran más superficie a la cual adherirse, para que duren más pegados a la tela.\r\nEl otro detalle es la combinación de colores, en la cual el líder, Las Tunas, muestra un panorama lamentable, mezclando un predominante verde pálido con un rojo en verdad vívido e intenso. Aparte de eso, aunque por algunos años hubo cierta conciencia, han vuelto a horrible, desfasado y de mal gusto hábito de llevar pantalones de visitador en colores (distintos del blanco o el gris), por ello, los jugadores de Pinar del Río lucen exactamente como soldados pelota jugando sin quitarse sus uniformes de campaña. Los que tomaron la decisión podrían saber de vestuario, pero tienen muy poco sino cero conocimiento de béisbol, por tanto ningún conocimiento de estilo dentro del béisbol.\r\nLa primera decisión que debería tomarse es realmente dejar que las provincias escojan un diseñador realmente bueno que estudie las tendencias del béisbol fuera de Cuba — por favor, impidiendo el exceso naranja que ahora muestran cuatro equipos de MLB (Baltimore Orioles, San Francisco Giants, Houston Astros y Miami Marlins, y qué bueno que los Detroit Tigers no se han unido) como camisetas alternativas. De ese modo, algunas cosas en verdad molestan podrían evitarse, como el diseño al estilo de maqueta que se ve en los uniformes de hoy.\r\nPero no todo es malo… luego de muchos años de lucha en las redes sociales y muchos otros frentes, los uniformes tienen el logo de la Serie Nacional de Béisbol de Cuba en la espalda, justo bajo el borde del cuello. El frente de las camisetas también incorpora una bandera cubana en el lado derecho, algo que también había estado en demanda y puesto en espera por algunos años, y que agrega una marca de identidad a los trajes — lo cual en el futuro podría aumentar su valor de mercado en caso de que se tome la decision de hacer produccion en masa para la venta.', '1_7DVMul14aXpgO3sROxN9sw.jpeg', 'Universo Béisbol: 13 de diciembre de 2017  · 5 minutos de lectura', '2022-04-15 13:33:15', '2022-04-15 13:33:15', NULL),
	(88, 'laselva@gmail.com', 'beisbol', 'Torne de béisbol en la Utselva', 'El torneo se llevará acabo en las instalaciones de la deportiva.', 'FB_IMG_1638665070553.jpg', '#utselva', '2022-04-13 16:56:16', '2022-04-13 16:56:16', NULL),
	(89, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: Jordan Loveridge, la gran figura de los líderes.', 'Vienen de ganar cuatro partidos consecutivos como locales y ahora los líderes Astros de Jalisco buscarán alargar su racha ganadora cuando visiten a los Halcones de Ciudad Obregón.\r\n\r\nLa quinteta tapatía ha tenido un plausible arranque de temporada. Los dirigidos por Alejandro Formento han ganado seis de sus siete enfrentamientos y son los líderes indiscutibles del Circuito de Baloncesto de la Costa del Pacífico (CIBACOPA).', 'astros Jalisco.webp', '#Astros de Jalisco', '2022-04-13 17:03:22', '2022-04-13 17:03:22', NULL),
	(91, 'laselva@gmail.com', 'basquetbol', '¡Dramático triunfo! Escaramuzas de Jalisco ganan de última hora ante Mexcaltecas.', 'Nayeli Ortiz fue la heroína del equipo tapatío. Sobre la hora encestó un triple y otra canasta de dos puntos para remontar la pizarra y darle así el triunfo final a Escaramuzas de Jalisco, que derrotaron 69-67 Mexcaltecas de Nayarit en la Liga Mexicana de Baloncesto Profesional Femenil.', 'victoria de Jalisoc.webp', 'Escaramuzas de Jalisco', '2022-04-13 17:34:12', '2022-04-13 17:34:12', NULL),
	(96, 'laselva@gmail.com', 'beisbol', 'Torne de béisbol en la Utselva', 'El torneo se llevará acabo en las instalaciones de la deportiva.', 'FB_IMG_1638665070553.jpg', '#utselva', '2022-04-13 16:56:16', '2022-04-13 16:56:16', NULL),
	(97, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: Jordan Loveridge, la gran figura de los líderes.', 'Vienen de ganar cuatro partidos consecutivos como locales y ahora los líderes Astros de Jalisco buscarán alargar su racha ganadora cuando visiten a los Halcones de Ciudad Obregón.\r\n\r\nLa quinteta tapatía ha tenido un plausible arranque de temporada. Los dirigidos por Alejandro Formento han ganado seis de sus siete enfrentamientos y son los líderes indiscutibles del Circuito de Baloncesto de la Costa del Pacífico (CIBACOPA).', 'astros Jalisco.webp', '#Astros de Jalisco', '2022-04-13 17:03:22', '2022-04-13 17:03:22', NULL),
	(99, 'laselva@gmail.com', 'basquetbol', '¡Dramático triunfo! Escaramuzas de Jalisco ganan de última hora ante Mexcaltecas.', 'Nayeli Ortiz fue la heroína del equipo tapatío. Sobre la hora encestó un triple y otra canasta de dos puntos para remontar la pizarra y darle así el triunfo final a Escaramuzas de Jalisco, que derrotaron 69-67 Mexcaltecas de Nayarit en la Liga Mexicana de Baloncesto Profesional Femenil.', 'victoria de Jalisoc.webp', 'Escaramuzas de Jalisco', '2022-04-13 17:34:12', '2022-04-13 17:34:12', NULL),
	(100, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: ¡Líderes indiscutibles! La quinteta tapatía pasa por encima de Caballeros.', 'El equipo tapatío no afloja el paso y derrota 83-74 a Caballeros de Culiacán.', 'whatsapp_image_2022-04-08_at_10_09_03_pm_crop1649475306941.jpeg_1970638775.webp', '¡Cuarto triunfo! Astros vence a Venados y mantiene el liderato', '2022-04-13 17:37:54', '2022-04-13 17:37:54', NULL),
	(104, 'laselva@gmail.com', 'beisbol', 'Torne de béisbol en la Utselva', 'El torneo se llevará acabo en las instalaciones de la deportiva.', 'FB_IMG_1638665070553.jpg', '#utselva', '2022-04-13 16:56:16', '2022-04-13 16:56:16', NULL),
	(105, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: Jordan Loveridge, la gran figura de los líderes.', 'Vienen de ganar cuatro partidos consecutivos como locales y ahora los líderes Astros de Jalisco buscarán alargar su racha ganadora cuando visiten a los Halcones de Ciudad Obregón.\r\n\r\nLa quinteta tapatía ha tenido un plausible arranque de temporada. Los dirigidos por Alejandro Formento han ganado seis de sus siete enfrentamientos y son los líderes indiscutibles del Circuito de Baloncesto de la Costa del Pacífico (CIBACOPA).', 'astros Jalisco.webp', '#Astros de Jalisco', '2022-04-13 17:03:22', '2022-04-13 17:03:22', NULL),
	(107, 'laselva@gmail.com', 'basquetbol', '¡Dramático triunfo! Escaramuzas de Jalisco ganan de última hora ante Mexcaltecas.', 'Nayeli Ortiz fue la heroína del equipo tapatío. Sobre la hora encestó un triple y otra canasta de dos puntos para remontar la pizarra y darle así el triunfo final a Escaramuzas de Jalisco, que derrotaron 69-67 Mexcaltecas de Nayarit en la Liga Mexicana de Baloncesto Profesional Femenil.', 'victoria de Jalisoc.webp', 'Escaramuzas de Jalisco', '2022-04-13 17:34:12', '2022-04-13 17:34:12', NULL),
	(112, 'laselva@gmail.com', 'beisbol', 'Torne de béisbol en la Utselva', 'El torneo se llevará acabo en las instalaciones de la deportiva.', 'FB_IMG_1638665070553.jpg', '#utselva', '2022-04-13 16:56:16', '2022-04-13 16:56:16', NULL),
	(113, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: Jordan Loveridge, la gran figura de los líderes.', 'Vienen de ganar cuatro partidos consecutivos como locales y ahora los líderes Astros de Jalisco buscarán alargar su racha ganadora cuando visiten a los Halcones de Ciudad Obregón.\r\n\r\nLa quinteta tapatía ha tenido un plausible arranque de temporada. Los dirigidos por Alejandro Formento han ganado seis de sus siete enfrentamientos y son los líderes indiscutibles del Circuito de Baloncesto de la Costa del Pacífico (CIBACOPA).', 'astros Jalisco.webp', '#Astros de Jalisco', '2022-04-13 17:03:22', '2022-04-13 17:03:22', NULL),
	(115, 'laselva@gmail.com', 'basquetbol', '¡Dramático triunfo! Escaramuzas de Jalisco ganan de última hora ante Mexcaltecas.', 'Nayeli Ortiz fue la heroína del equipo tapatío. Sobre la hora encestó un triple y otra canasta de dos puntos para remontar la pizarra y darle así el triunfo final a Escaramuzas de Jalisco, que derrotaron 69-67 Mexcaltecas de Nayarit en la Liga Mexicana de Baloncesto Profesional Femenil.', 'victoria de Jalisoc.webp', 'Escaramuzas de Jalisco', '2022-04-13 17:34:12', '2022-04-13 17:34:12', NULL),
	(116, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: ¡Líderes indiscutibles! La quinteta tapatía pasa por encima de Caballeros.', 'El equipo tapatío no afloja el paso y derrota 83-74 a Caballeros de Culiacán.', 'whatsapp_image_2022-04-08_at_10_09_03_pm_crop1649475306941.jpeg_1970638775.webp', '¡Cuarto triunfo! Astros vence a Venados y mantiene el liderato', '2022-04-13 17:37:54', '2022-04-13 17:37:54', NULL),
	(120, 'laselva@gmail.com', 'beisbol', 'Torne de béisbol en la Utselva', 'El torneo se llevará acabo en las instalaciones de la deportiva.', 'FB_IMG_1638665070553.jpg', '#utselva', '2022-04-13 16:56:16', '2022-04-13 16:56:16', NULL),
	(121, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: Jordan Loveridge, la gran figura de los líderes.', 'Vienen de ganar cuatro partidos consecutivos como locales y ahora los líderes Astros de Jalisco buscarán alargar su racha ganadora cuando visiten a los Halcones de Ciudad Obregón.\r\n\r\nLa quinteta tapatía ha tenido un plausible arranque de temporada. Los dirigidos por Alejandro Formento han ganado seis de sus siete enfrentamientos y son los líderes indiscutibles del Circuito de Baloncesto de la Costa del Pacífico (CIBACOPA).', 'astros Jalisco.webp', '#Astros de Jalisco', '2022-04-13 17:03:22', '2022-04-13 17:03:22', NULL),
	(123, 'laselva@gmail.com', 'basquetbol', '¡Dramático triunfo! Escaramuzas de Jalisco ganan de última hora ante Mexcaltecas.', 'Nayeli Ortiz fue la heroína del equipo tapatío. Sobre la hora encestó un triple y otra canasta de dos puntos para remontar la pizarra y darle así el triunfo final a Escaramuzas de Jalisco, que derrotaron 69-67 Mexcaltecas de Nayarit en la Liga Mexicana de Baloncesto Profesional Femenil.', 'victoria de Jalisoc.webp', 'Escaramuzas de Jalisco', '2022-04-13 17:34:12', '2022-04-13 17:34:12', NULL),
	(128, 'laselva@gmail.com', 'beisbol', 'Torne de béisbol en la Utselva', 'El torneo se llevará acabo en las instalaciones de la deportiva.', 'FB_IMG_1638665070553.jpg', '#utselva', '2022-04-13 16:56:16', '2022-04-13 16:56:16', NULL),
	(139, 'laselva@gmail.com', 'futbol', 'Rayo Vallecano – Valencia: El partido de fútbol de Jornada 31 , en directo.', '¡Y finaaaaaaaaaaaaaal del partido! ¡El asedio final del Rayo Vallecano no vale por la victoria y el Valencia se lleva un punto a Mestalla! Gran partido de Mamardashvili, que mantuvo vivos a los suyos cuando más sufrían.', '5f97e2f6217f8.jpeg', 'lavanguardia', '2022-04-11 23:06:32', '2022-04-11 23:06:32', NULL),
	(140, 'laselva@gmail.com', 'futbol', '¿Cuál sería la alineación del Cruz Azul contra Pumas a pesar de las bajas?', 'Juan Reynoso encara un partido de vida o muerte contra Pumas con ciertas ausencias.', 'i.jpg', 'cruzazul', '2022-04-12 21:26:52', '2022-04-12 21:26:52', NULL),
	(141, 'laselva@gmail.com', 'futbol', 'Candidatos para reemplazar a Carlos Rodríguez en Cruz Azul y Selección Mexicana', 'ESPN plantea jugadores que pueden sustituir a Carlos Rodríguz tanto en Cruz Azul como en la Selección Mexicana, a la espera de su total recuperación para volver a las canchas', 'i (1).jpg', 'cruzazul', '2022-04-12 21:32:26', '2022-04-12 21:32:26', NULL),
	(142, 'laselva@gmail.com', 'beisbol', 'Torne de béisbol en la Utselva', 'El torneo se llevará acabo en las instalaciones de la deportiva.', 'FB_IMG_1638665070553.jpg', '#utselva', '2022-04-13 16:56:16', '2022-04-13 16:56:16', NULL),
	(143, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: Jordan Loveridge, la gran figura de los líderes.', 'Vienen de ganar cuatro partidos consecutivos como locales y ahora los líderes Astros de Jalisco buscarán alargar su racha ganadora cuando visiten a los Halcones de Ciudad Obregón.\r\n\r\nLa quinteta tapatía ha tenido un plausible arranque de temporada. Los dirigidos por Alejandro Formento han ganado seis de sus siete enfrentamientos y son los líderes indiscutibles del Circuito de Baloncesto de la Costa del Pacífico (CIBACOPA).', 'astros Jalisco.webp', '#Astros de Jalisco', '2022-04-13 17:03:22', '2022-04-13 17:03:22', NULL),
	(144, 'laselva@gmail.com', 'futbol', 'Conato de bronca al finalizar el duelo entre Cruz Azul y Pumas en el Azteca', 'Jugadores del Cruz Azul discutieron con Alfredo Talavera, luego de la eliminación celeste en la Liga de Campeones de Concacaf.', 'i(2).jpg', 'cruzazul', '2022-04-13 17:04:57', '2022-04-13 17:04:57', NULL),
	(145, 'laselva@gmail.com', 'basquetbol', '¡Dramático triunfo! Escaramuzas de Jalisco ganan de última hora ante Mexcaltecas.', 'Nayeli Ortiz fue la heroína del equipo tapatío. Sobre la hora encestó un triple y otra canasta de dos puntos para remontar la pizarra y darle así el triunfo final a Escaramuzas de Jalisco, que derrotaron 69-67 Mexcaltecas de Nayarit en la Liga Mexicana de Baloncesto Profesional Femenil.', 'victoria de Jalisoc.webp', 'Escaramuzas de Jalisco', '2022-04-13 17:34:12', '2022-04-13 17:34:12', NULL),
	(146, 'laselva@gmail.com', 'basquetbol', 'Astros de Jalisco: ¡Líderes indiscutibles! La quinteta tapatía pasa por encima de Caballeros.', 'El equipo tapatío no afloja el paso y derrota 83-74 a Caballeros de Culiacán.', 'whatsapp_image_2022-04-08_at_10_09_03_pm_crop1649475306941.jpeg_1970638775.webp', '¡Cuarto triunfo! Astros vence a Venados y mantiene el liderato', '2022-04-13 17:37:54', '2022-04-13 17:37:54', NULL);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.posts: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.respuesta
CREATE TABLE IF NOT EXISTS `respuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(255) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `texto` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email_usuario` (`email_usuario`),
  KEY `id_comentario` (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla blog_deportivo.respuesta: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `respuesta` DISABLE KEYS */;
INSERT IGNORE INTO `respuesta` (`id`, `email_usuario`, `id_comentario`, `texto`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 'laselva@gmail.com', 13, 'De lo maximo ***Viva Cruz Azul***', '2022-04-12 21:28:48', '2022-04-12 21:28:48', NULL),
	(13, 'laselva@gmail.com', 16, 'Será un golpe duro para el equipo', '2022-04-13 07:16:27', '2022-04-13 07:16:27', NULL),
	(14, 'laselva@gmail.com', 22, 'por lo que se ve', '2022-04-13 07:29:11', '2022-04-13 07:29:11', NULL),
	(16, 'laselva@gmail.com', 27, 'La verdad si estuvo fantástico el torneo femenil.', '2022-04-13 17:40:22', '2022-04-13 17:40:22', NULL),
	(58, 'laselva@gmail.com', 209, 'Seeeeeeeeeeeeeeee', '2022-04-22 07:17:16', '2022-04-22 07:17:16', NULL),
	(59, 'laselva@gmail.com', 209, 'seeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '2022-04-22 07:18:05', '2022-04-22 07:18:05', NULL),
	(65, 'laselva@gmail.com', 225, 'S0', '2022-04-24 08:28:44', '2022-04-24 08:28:44', NULL);
/*!40000 ALTER TABLE `respuesta` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.sessions: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT IGNORE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('8ZSU7tPChV2FGzm1FdyKmb1vB4HGnpurPrEn1Rhx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 Edg/100.0.1185.50', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMGk3TVRTZFdKS2V0QXhJcWdWRnJvRVloZTg3ajBSUndQaUM4VzJyQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWkhaWDdwVDJFRDg2VzF2MmEuL3FoZTluTExablloSVNSVU9hbkxWVjdtbjIwVDh5c1BrV0ciO30=', 1650945855),
	('zbNcfhMWrJnItyLfaLbEcU3UQSSaHjDeUjNFQ64T', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo1OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJjS1cwM0UwSDFiOXgzcDJXYTZBTGl4aUFvTVBicjVIcnRCMmljTmtpIjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFlOYWlaOU50QjE5eXJnaGFWRDFuMC5HYTFoTEV4NEpsdGVGbURZZDBJaFc3VDR3QmNUYnl1Ijt9', 1650946920);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('ADMIN','LECTOR') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.users: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `password`, `tipo`, `email_verified_at`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'Jeronimo Gomez', 'laselva@gmail.com', '$2y$10$ZHZX7pT2ED86W1v2a./qhe9nLLZnYhISRUOanLVV7mn20T8ysPkWG', 'ADMIN', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 10:42:44', '2022-03-02 10:42:44'),
	(12, 'Omar Rene Perez Lopez', 'omarperezrl38@gmail.com', '$2y$10$BWNJ/gTdKO21anAASmsic.myEriNjPlmmfdRFuOdQ.TtHDCHxdKeW', 'LECTOR', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-26 03:51:40', '2022-04-26 03:51:40'),
	(13, 'admin global', 'admin@gmail.com', '$2y$10$YNaiZ9NtB19yrghaVD1n0.Ga1hLEx4JlteFmDYd0IhW7T4wBcTbyu', 'ADMIN', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-26 04:11:51', '2022-04-26 04:11:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla blog_deportivo.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla blog_deportivo.usuarios: ~-1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
