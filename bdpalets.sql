-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2017 a las 20:45:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdpalets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `login` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clave` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `usuario` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `login`, `clave`, `nombre`, `usuario`) VALUES
(1, 'admin', 'e8dc8ccd5e5f9e3a54f07350ce8a2d3d', 'Adriana', 'no'),
(2, 'palets', 'e8dc8ccd5e5f9e3a54f07350ce8a2d3d', 'Palets', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `codigo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_es` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_gl` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `autor` int(11) NOT NULL,
  `imagen` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto_es` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto_gl` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `codigo`, `nombre_es`, `nombre_gl`, `nombre_en`, `fecha`, `autor`, `imagen`, `texto_es`, `texto_gl`, `texto_en`) VALUES
(1, 'notAD0D62469', 'Noticia 1', 'Noticia 1', 'Noticia 1', '2017-07-25', 1, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'not6AA24D5A0', 'Noticia 2', 'Noticia 2', 'Noticia 2', '2017-07-25', 1, 'images/noticias/1501005347-Deadpool-wallpaper-10940866.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'notA36LL6P17', 'Noticia 3', 'Noticia 3', 'Noticia 3', '2017-07-25', 1, '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'not6AA290A8R', 'Noticia 4', 'Noticia 4', 'Noticia 4', '2017-07-25', 1, 'images/noticias/1501005386-captain_America-wallpaper-10808154.jpg', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL,
  `codigo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_es` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_gl` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pdf` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `autor` int(11) NOT NULL,
  `imagen` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto_es` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto_gl` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `codigo`, `nombre_es`, `nombre_gl`, `nombre_en`, `pdf`, `fecha`, `autor`, `imagen`, `texto_es`, `texto_gl`, `texto_en`) VALUES
(1, 'ofrR67264175', 'Oferta 1', 'Oferta 1', 'Oferta 1', '', '2017-07-25', 1, 'images/ofertas/1501005435-Baratheon-wallpaper-10414700.jpg', 'Esto es una oferta de prueba\r\n', 'Esto es una oferta de prueba', 'Esto es una oferta de prueba'),
(2, 'ofr19D1ARAR3', 'Oferta 2', 'Oferta 2', 'Oferta 2', 'descargas/1500976528-Aviso Legal_Talleres Pardal_DEFINITIVO.pdf', '2017-07-25', 1, 'images/ofertas/1500977530-IMG-20120329-WA0001.jpg', 'sfladskflsdkfjsdklf sad lsdjflñsdfkñdslfk saf dsflñskdflñsdkafñsad ñlksdfñlksdfñlasf', 'sfladskflsdkfjsdklf sad lsdjflñsdfkñdslfk saf dsflñskdflñsdkafñsad ñlksdfñlksdfñlasf', 'sfladskflsdkfjsdklf sad lsdjflñsdfkñdslfk saf dsflñskdflñsdkafñsad ñlksdfñlksdfñlasf'),
(3, 'ofr4A135AA21', 'Oferta 3', 'Oferta 3', 'Oferta 3', '', '2017-07-25', 1, 'images/ofertas/1500977545-IMG-20120819-WA0001.jpg', 'fvsfdsfsdfadsfsdfsa', 'fvsfdsfsdfadsfsdfsa', 'fvsfdsfsdfadsfsdfsa'),
(4, 'ofr58A688AR0', 'Oferta 4', 'Oferta 4', 'Oferta 4', 'descargas/1500976561-Aviso Legal_Talleres Pardal_DEFINITIVO.pdf', '2017-07-25', 1, '', 'dfgdfgdsf', 'dfgdfgdsf', 'dfgdfgdsf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_es` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_gl` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `autor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion_es` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_gl` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen4` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre_es`, `nombre_gl`, `nombre_en`, `autor`, `fecha`, `precio`, `descripcion_es`, `descripcion_gl`, `descripcion_en`, `imagen1`, `imagen2`, `imagen3`, `imagen4`) VALUES
(1, 'pro70D813P0A', 'Producto prueba', 'Producto prueba', 'Producto prueba', 1, '2017-07-25', 23, 'sdfsafsdafadsfas', 'sdfsafsdafadsfas', 'sdfsafsdafadsfas', 'images/productos/1500998728-yu-yu-hakusho-kurama-rose650519_hd-wallpaper.jpg', '', '', ''),
(2, 'pro08833R021', 'Producto 1', 'Producto 1', 'Producto 1', 1, '2017-07-25', 25, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'images/productos/1500998807-producto1.png', 'images/productos/1500998807-_commission__hiei__yu_yu_hakusho__by_hikari_15_l-d7wi7nq.png', 'images/productos/1500998807-3e1fe06bcb6b2fa5b7f173af0bfb7f93-d4r4nmx.jpg', 'images/productos/1500998807-100_6401.jpg'),
(3, 'proL69A33LDR', 'Producto 2', 'Producto 2', 'Producto 2', 1, '2017-07-25', 10, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'images/productos/1500998853-producto2.png', 'images/productos/1500998853-492061.jpg', 'images/productos/1500998853-01233C15D.jpg', 'images/productos/1500998853-3571739-5360291771-Hiei..jpg'),
(4, 'pro357L5D494', 'Producto 3', 'Producto 3', 'Producto 3', 1, '2017-07-25', 23, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'images/productos/1500998888-producto3.png', 'images/productos/1500998888-4036026-demon_hiei_wallpaper1280589668.jpeg', 'images/productos/1500998888-25649110.jpg', 'images/productos/1500998888-2274402072_2189fdf530_o.jpg'),
(5, 'pro710D78R4P', 'Producto 4', 'Producto 4', 'Producto 4', 1, '2017-07-25', 25, 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'images/productos/1500998954-producto4.png', 'images/productos/1500998954-bIaSLGO3h.jpg', 'images/productos/1500998954-Como_dibujar_a_hinata.jpg', 'images/productos/1500998954-Como_dibujar_a_Kakashi.jpg'),
(6, 'proD55D1A6P3', 'Producto 5', 'Producto 5', 'Producto 5', 1, '2017-07-25', 10, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'images/productos/1500998995-producto5.png', 'images/productos/1500998995-como_dibujar_naruto1.png', 'images/productos/1500998995-comodibujar_a_naruto.png', 'images/productos/1500998995-ea3a809b-e3a8-46b1-9904-8a9bb5f6edbe.jpg'),
(7, 'pro350AR4008', 'Producto 6', 'Producto 6', 'Product 6', 1, '2017-07-25', 15, 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', 'images/productos/1500999040-producto6.png', 'images/productos/1500999040-el-ladron-hiei.jpg', 'images/productos/1500999040-inuyasha___inuyasha_by_michinekokaidoh-d3it9c2.jpg', 'images/productos/1500999040-Kakashi.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `codigo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `autor` int(11) NOT NULL,
  `imagen` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `codigo`, `nombre`, `fecha`, `autor`, `imagen`) VALUES
(1, 'sld810D4L090', 'Slider 1', '2017-07-25', 1, 'images/slider/1500978576-IMG-20130205-WA0003.jpg'),
(2, 'sld126PLDRA9', 'Slider 2', '2017-07-25', 1, 'images/slider/1500978375-palet1.jpg'),
(3, 'sld1LRD084A2', 'Slider 3', '2017-07-25', 1, 'images/slider/1500978391-palet2.jpg'),
(4, 'sld5A0DL2R8L', 'Slider 4', '2017-07-25', 1, 'images/slider/1500978404-palet3.jpg'),
(5, 'sldLL9D03A24', 'Slider 5', '2017-07-25', 1, 'images/slider/1500978416-palet4.jpg'),
(6, 'sldPRA1L0A1R', 'Slider 6', '2017-07-25', 1, 'images/slider/1500980969-palet5.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
