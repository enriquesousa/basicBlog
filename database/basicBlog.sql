-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2024 at 01:42 PM
-- Server version: 10.11.6-MariaDB-0+deb12u1
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicBlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'I have transform your ideas into remarkable digital products', '25+ Years Experience In this game, Means Product Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', '<p class=\"desc\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n<ul class=\"about__exp__list\">\r\n<li>\r\n<h5 class=\"title\">User experience design - (Product Design)</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Web and user interface design - Development</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Interaction design - Animation</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>\r\n</li>\r\n</ul>', 'upload/home_about/1791084832434576.png', NULL, '2024-02-17 02:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `blog_tags` varchar(255) DEFAULT NULL,
  `blog_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
(1, '2', 'React design is dedicated to what\'s new in design', 'upload/blog/1791517429725134.png', 'React,Programacion', '<h2 class=\"title\">Best website traffics Booster with great tools.</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '2024-02-21 14:02:40', '2024-02-26 03:23:31'),
(2, '4', 'Laravel Make communication Fast and Effectively.', 'upload/blog/1791531090582950.png', 'Laravel', '<h2 class=\"title\">Best website traffics Booster with great tools.</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '2024-02-21 17:39:48', NULL),
(3, '3', 'Social Title', 'upload/blog/1791532493878004.png', 'Blog,Social', '<h2 class=\"title\">Best website traffics Booster with great tools.</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '2024-02-21 18:02:06', '2024-02-21 19:39:37'),
(5, '2', 'Vscode', 'upload/blog/1791563161484766.jpg', 'Blog,Cursos,Editores', '<div class=\"mb-16 articles\">\r\n<p>Si eres un desarrollador o programador, es probable que utilices Visual Studio Code como tu editor de c&oacute;digo favorito. Con su interfaz de usuario intuitiva, su amplia variedad de extensiones y su capacidad para trabajar en m&uacute;ltiples lenguajes de programaci&oacute;n, Visual Studio Code es una herramienta poderosa que puede mejorar tu flujo de trabajo y aumentar tu productividad.</p>\r\n<p>Una de las caracter&iacute;sticas m&aacute;s &uacute;tiles de Visual Studio Code es la capacidad de comentar y descomentar r&aacute;pidamente varias l&iacute;neas de c&oacute;digo. Esta funci&oacute;n es especialmente &uacute;til cuando est&aacute;s trabajando en un proyecto grande y necesitas hacer cambios en varias l&iacute;neas de c&oacute;digo al mismo tiempo.</p>\r\n<p>Para comentar varias l&iacute;neas en Visual Studio Code, basta con seleccionar las l&iacute;neas que se desean comentar y presionar las teclas Ctrl + K + C en Windows o Linux, o Cmd + K + C en Mac. Por otro lado, para descomentarlas, se debe presionar Ctrl + K + U en Windows o Linux, o Cmd + K + U en Mac.</p>\r\n<p>Asimismo, si se prefiere utilizar un comentario de bloque, se puede utilizar la combinaci&oacute;n de teclas Shift + Alt + A en Windows o Linux, o Shift + Opt + A en Mac. Cabe destacar que este mismo comando se utiliza para comentar y descomentar las l&iacute;neas de c&oacute;digo.</p>\r\n<p>Adem&aacute;s de la capacidad de comentar y descomentar varias l&iacute;neas de c&oacute;digo, Visual Studio Code tiene muchas otras caracter&iacute;sticas &uacute;tiles que pueden mejorar tu flujo de trabajo. Por ejemplo, puedes personalizar tu editor de c&oacute;digo con extensiones para agregar nuevas funcionalidades, como la integraci&oacute;n con sistemas de control de versiones como Git.</p>\r\n<p>Otra caracter&iacute;stica &uacute;til de Visual Studio Code es la capacidad de utilizar m&uacute;ltiples paneles y pesta&ntilde;as para trabajar en varios archivos y proyectos al mismo tiempo. Tambi&eacute;n puedes utilizar la funci&oacute;n de b&uacute;squeda r&aacute;pida para encontrar r&aacute;pidamente cualquier archivo o l&iacute;nea de c&oacute;digo en tu proyecto.</p>\r\n<p>En resumen, Visual Studio Code es un editor de c&oacute;digo potente y vers&aacute;til que puede mejorar tu flujo de trabajo y aumentar tu productividad. Aprender a comentar y descomentar varias l&iacute;neas de c&oacute;digo en Visual Studio Code es solo una de las muchas caracter&iacute;sticas &uacute;tiles que puedes utilizar para mejorar tu experiencia de programaci&oacute;n.</p>\r\n</div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>', '2024-02-22 02:09:33', NULL),
(6, '9', 'Arrays multidimensionales en php', 'upload/blog/1791563696790651.jpg', 'Blog,php,arrays', '<p>Los arrays multidimensionales son una caracter&iacute;stica poderosa en PHP que te permite organizar datos de forma estructurada y compleja. A diferencia de los arrays unidimensionales, que contienen una lista de elementos, los arrays multidimensionales pueden contener otros arrays como elementos individuales, creando una estructura jer&aacute;rquica. En este art&iacute;culo, exploraremos en profundidad qu&eacute; son los arrays multidimensionales, c&oacute;mo se crean, acceden y manipulan en PHP para mejorar la organizaci&oacute;n de datos en tus aplicaciones.</p>\r\n<h3><strong>1. Introducci&oacute;n a los Arrays Multidimensionales:</strong></h3>\r\n<p>Un array multidimensional es una estructura de datos que contiene otros arrays como elementos. Puedes imaginarlo como una matriz en la que cada celda puede contener otro array, permitiendo la creaci&oacute;n de estructuras de datos complejas y jer&aacute;rquicas.</p>\r\n<h3><strong>2. Creaci&oacute;n de Arrays Multidimensionales:</strong></h3>\r\n<p>En PHP, puedes crear un array multidimensional simplemente definiendo un array dentro de otro array.</p>\r\n<h4>Ejemplo de Creaci&oacute;n de un Array Multidimensional:</h4>\r\n<div>\r\n<pre class=\"language-php\" tabindex=\"0\"><code class=\"language-php\"><span class=\"token variable\">$personas</span> <span class=\"token operator\">=</span> <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span>\r\n    <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span><span class=\"token string double-quoted-string\">\"Nombre\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token string double-quoted-string\">\"Juan\"</span><span class=\"token punctuation\">,</span> <span class=\"token string double-quoted-string\">\"Edad\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token number\">25</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">,</span>\r\n    <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span><span class=\"token string double-quoted-string\">\"Nombre\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token string double-quoted-string\">\"Mar&iacute;a\"</span><span class=\"token punctuation\">,</span> <span class=\"token string double-quoted-string\">\"Edad\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token number\">30</span><span class=\"token punctuation\">)</span>\r\n<span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span></code></pre>\r\n</div>\r\n<h3><strong>3. Acceso y Modificaci&oacute;n de Elementos:</strong></h3>\r\n<p>Para acceder a un elemento espec&iacute;fico en un array multidimensional, utilizamos dos &iacute;ndices: uno para el array externo y otro para el array interno.</p>\r\n<h4>Ejemplo de Acceso y Modificaci&oacute;n de Elementos:</h4>\r\n<div>\r\n<pre class=\"language-php\" tabindex=\"0\"><code class=\"language-php\"><span class=\"token keyword\">echo</span> <span class=\"token variable\">$personas</span><span class=\"token punctuation\">[</span><span class=\"token number\">0</span><span class=\"token punctuation\">]</span><span class=\"token punctuation\">[</span><span class=\"token string double-quoted-string\">\"Nombre\"</span><span class=\"token punctuation\">]</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Esto imprimir&aacute; \"Juan\"</span>\r\n\r\n<span class=\"token variable\">$personas</span><span class=\"token punctuation\">[</span><span class=\"token number\">1</span><span class=\"token punctuation\">]</span><span class=\"token punctuation\">[</span><span class=\"token string double-quoted-string\">\"Edad\"</span><span class=\"token punctuation\">]</span> <span class=\"token operator\">=</span> <span class=\"token number\">35</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Modifica la edad de Mar&iacute;a</span>\r\n<span class=\"token keyword\">echo</span> <span class=\"token variable\">$personas</span><span class=\"token punctuation\">[</span><span class=\"token number\">1</span><span class=\"token punctuation\">]</span><span class=\"token punctuation\">[</span><span class=\"token string double-quoted-string\">\"Edad\"</span><span class=\"token punctuation\">]</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Esto imprimir&aacute; 35</span></code></pre>\r\n</div>\r\n<h3><strong>4. Funciones para Manipular Arrays Multidimensionales:</strong></h3>\r\n<p>PHP proporciona varias funciones integradas para manipular arrays multidimensionales. Algunas de las m&aacute;s comunes son:</p>\r\n<ul>\r\n<li><strong>count()</strong>: Devuelve la cantidad de elementos en un array.</li>\r\n<li><strong>array_push()</strong>: Agrega uno o m&aacute;s elementos al final de un array.</li>\r\n<li><strong>array_pop()</strong>: Elimina y devuelve el &uacute;ltimo elemento de un array.</li>\r\n<li><strong>array_merge()</strong>: Combina dos o m&aacute;s arrays en uno nuevo.</li>\r\n</ul>\r\n<h4>Ejemplo de Uso de Funciones para Manipular Arrays Multidimensionales:</h4>\r\n<div>\r\n<pre class=\"language-php\" tabindex=\"0\"><code class=\"language-php\"><span class=\"token variable\">$personas</span> <span class=\"token operator\">=</span> <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span>\r\n    <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span><span class=\"token string double-quoted-string\">\"Nombre\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token string double-quoted-string\">\"Juan\"</span><span class=\"token punctuation\">,</span> <span class=\"token string double-quoted-string\">\"Edad\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token number\">25</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">,</span>\r\n    <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span><span class=\"token string double-quoted-string\">\"Nombre\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token string double-quoted-string\">\"Mar&iacute;a\"</span><span class=\"token punctuation\">,</span> <span class=\"token string double-quoted-string\">\"Edad\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token number\">30</span><span class=\"token punctuation\">)</span>\r\n<span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>\r\n\r\n<span class=\"token keyword\">echo</span> <span class=\"token function\">count</span><span class=\"token punctuation\">(</span><span class=\"token variable\">$personas</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Esto imprimir&aacute; la cantidad de elementos (2)</span>\r\n\r\n<span class=\"token variable\">$nueva_persona</span> <span class=\"token operator\">=</span> <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span><span class=\"token string double-quoted-string\">\"Nombre\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token string double-quoted-string\">\"Carlos\"</span><span class=\"token punctuation\">,</span> <span class=\"token string double-quoted-string\">\"Edad\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token number\">28</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>\r\n<span class=\"token function\">array_push</span><span class=\"token punctuation\">(</span><span class=\"token variable\">$personas</span><span class=\"token punctuation\">,</span> <span class=\"token variable\">$nueva_persona</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Agrega una nueva persona</span>\r\n<span class=\"token function\">print_r</span><span class=\"token punctuation\">(</span><span class=\"token variable\">$personas</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Esto imprimir&aacute; el array modificado</span>\r\n\r\n<span class=\"token function\">array_pop</span><span class=\"token punctuation\">(</span><span class=\"token variable\">$personas</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Elimina la &uacute;ltima persona</span>\r\n<span class=\"token function\">print_r</span><span class=\"token punctuation\">(</span><span class=\"token variable\">$personas</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Esto imprimir&aacute; el array modificado</span>\r\n\r\n<span class=\"token variable\">$nuevas_personas</span> <span class=\"token operator\">=</span> <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span>\r\n    <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span><span class=\"token string double-quoted-string\">\"Nombre\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token string double-quoted-string\">\"Laura\"</span><span class=\"token punctuation\">,</span> <span class=\"token string double-quoted-string\">\"Edad\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token number\">32</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">,</span>\r\n    <span class=\"token keyword\">array</span><span class=\"token punctuation\">(</span><span class=\"token string double-quoted-string\">\"Nombre\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token string double-quoted-string\">\"Pedro\"</span><span class=\"token punctuation\">,</span> <span class=\"token string double-quoted-string\">\"Edad\"</span> <span class=\"token operator\">=&gt;</span> <span class=\"token number\">29</span><span class=\"token punctuation\">)</span>\r\n<span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>\r\n<span class=\"token variable\">$personas_completo</span> <span class=\"token operator\">=</span> <span class=\"token function\">array_merge</span><span class=\"token punctuation\">(</span><span class=\"token variable\">$personas</span><span class=\"token punctuation\">,</span> <span class=\"token variable\">$nuevas_personas</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span>\r\n<span class=\"token function\">print_r</span><span class=\"token punctuation\">(</span><span class=\"token variable\">$personas_completo</span><span class=\"token punctuation\">)</span><span class=\"token punctuation\">;</span> <span class=\"token comment\">// Esto imprimir&aacute; el array combinado</span></code></pre>\r\n</div>', '2024-02-22 02:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(2, 'Cursos', '2024-02-20 19:08:55', '2024-02-21 00:07:22'),
(3, 'Social', '2024-02-20 19:09:05', NULL),
(4, 'Laravel', '2024-02-20 19:09:31', '2024-02-20 21:55:37'),
(6, 'React', '2024-02-21 13:00:43', NULL),
(9, 'PHP', '2024-02-22 02:15:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE `home_slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `home_slide` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'EsWeb', 'Desarrollo Web, Blog y Portafolio', 'upload/home_slide/1791703601730183.png', 'https://www.youtube.com/watch?v=eEzD-Y97ges', '2024-02-16 15:10:42', '2024-02-23 15:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_14_202921_create_home_slides_table', 2),
(6, '2024_02_16_081021_create_abouts_table', 3),
(7, '2024_02_17_054851_create_multi_images_table', 4),
(8, '2024_02_17_170724_create_portfolios_table', 5),
(9, '2024_02_20_082431_create_blog_categories_table', 6),
(10, '2024_02_20_163320_create_blogs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `multi_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `multi_image`, `created_at`, `updated_at`) VALUES
(1, 'upload/multi/1791181058513140.png', '2024-02-17 15:10:31', '2024-02-17 20:56:11'),
(2, 'upload/multi/1791159310788973.png', '2024-02-17 15:10:31', NULL),
(3, 'upload/multi/1791172469884752.png', '2024-02-17 15:10:31', '2024-02-17 18:39:40'),
(4, 'upload/multi/1791173255103151.png', '2024-02-17 15:10:31', '2024-02-17 18:52:09'),
(6, 'upload/multi/1791177770541927.png', '2024-02-17 20:03:55', NULL),
(8, 'upload/multi/1791177770679475.png', '2024-02-17 20:03:56', NULL),
(13, 'upload/multi/1791177931320059.png', '2024-02-17 20:06:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_name` varchar(255) DEFAULT NULL,
  `portfolio_title` varchar(255) DEFAULT NULL,
  `portfolio_image` varchar(255) DEFAULT NULL,
  `portfolio_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_image`, `portfolio_description`, `created_at`, `updated_at`) VALUES
(1, 'Business', 'Definition: Business strategy', 'upload/portfolio/1791358200835745.jpeg', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '2024-02-19 19:51:47', NULL),
(2, 'Company', 'Company implements', 'upload/portfolio/1791358367174396.jpeg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', '2024-02-19 19:54:26', NULL),
(3, 'Control', 'Control room', 'upload/portfolio/1791358436625268.jpeg', '<h2 class=\"title\">Rixelda - 24 hours Control room landing page</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '2024-02-19 19:55:32', NULL),
(4, 'Formularios en PHP', 'Trabajando con Formularios en PHP', 'upload/portfolio/1791359276098375.png', '<p>Los formularios son una parte esencial de cualquier aplicaci&oacute;n web que permita a los usuarios interactuar y enviar informaci&oacute;n al servidor. PHP es un lenguaje de programaci&oacute;n ampliamente utilizado para procesar formularios en aplicaciones web. En este art&iacute;culo, exploraremos c&oacute;mo trabajar con formularios en PHP, incluyendo la diferencia entre los m&eacute;todos GET y POST, los diferentes elementos de entrada de datos, y c&oacute;mo recuperar informaci&oacute;n y enviar archivos.</p>\r\n<p>M&eacute;todos GET y POST<br />En PHP, los formularios pueden enviar datos al servidor utilizando dos m&eacute;todos principales: GET y POST. Ambos m&eacute;todos son utilizados para transmitir informaci&oacute;n desde el navegador del cliente al servidor, pero tienen diferencias importantes:</p>\r\n<p>GET:<br />Los datos se env&iacute;an a trav&eacute;s de la URL y son visibles en la barra de direcciones del navegador.<br />Se utiliza principalmente para solicitudes que no modifican datos en el servidor, como b&uacute;squedas o filtros.<br />La informaci&oacute;n se recupera en PHP utilizando la superglobal $_GET.<br />POST:<br />Los datos se env&iacute;an de manera m&aacute;s discreta y no son visibles en la URL.<br />Se utiliza para enviar datos sensibles o para realizar cambios en el servidor, como enviar un formulario de registro.<br />La informaci&oacute;n se recupera en PHP utilizando la superglobal $_POST.<br />Para crear un formulario que utilice uno de estos m&eacute;todos, simplemente establece el atributo method del formulario en \"get\" o \"post\" seg&uacute;n sea necesario.</p>', '2024-02-19 20:08:53', NULL),
(5, 'POO en PHP', 'Programación Orientada a Objetos (POO) en PHP: Fundamentos y Ejemplos', 'upload/portfolio/1791359358091210.png', '<p>La Programaci&oacute;n Orientada a Objetos (POO) es un paradigma de programaci&oacute;n que se basa en la creaci&oacute;n y manipulaci&oacute;n de objetos. PHP, uno de los lenguajes de programaci&oacute;n m&aacute;s populares en la web, tambi&eacute;n soporta la POO. En este art&iacute;culo, exploraremos qu&eacute; es la POO en PHP, por qu&eacute; es importante y c&oacute;mo puedes utilizarla en tus proyectos.</p>\r\n<p>&iquest;Qu&eacute; es la Programaci&oacute;n Orientada a Objetos?<br />La POO es un enfoque de programaci&oacute;n que se centra en la organizaci&oacute;n de datos y funciones en unidades llamadas objetos. Un objeto es una instancia de una clase, que es una plantilla que define las propiedades y m&eacute;todos que un objeto puede tener. La POO se basa en cuatro principios fundamentales:</p>\r\n<p>1. Encapsulaci&oacute;n: Este principio se refiere a la capacidad de ocultar los detalles de implementaci&oacute;n interna de un objeto y exponer solo las interfaces necesarias para interactuar con &eacute;l. Esto ayuda a mantener el c&oacute;digo m&aacute;s modular y f&aacute;cil de mantener.</p>\r\n<p>2. Herencia: La herencia permite que una clase (subclase) herede propiedades y m&eacute;todos de otra clase (superclase). Esto promueve la reutilizaci&oacute;n de c&oacute;digo y la extensibilidad.</p>\r\n<p>3. Abstracci&oacute;n: La abstracci&oacute;n consiste en la creaci&oacute;n de clases y objetos que representan conceptos del mundo real en tu aplicaci&oacute;n. Puedes definir las propiedades y m&eacute;todos necesarios para modelar esos conceptos.</p>\r\n<p>4. Polimorfismo: El polimorfismo permite que objetos de diferentes clases respondan de manera similar a un conjunto com&uacute;n de m&eacute;todos. Esto facilita el uso de interfaces gen&eacute;ricas en lugar de tratar con clases espec&iacute;ficas.</p>\r\n<p>C&oacute;mo se utiliza la POO en PHP<br />En PHP, puedes crear clases para definir objetos y luego crear instancias de esas clases. Veamos un ejemplo sencillo de una clase en PHP:</p>', '2024-02-19 20:10:11', NULL),
(6, 'Funciones', 'Funciones para Arrays php', 'upload/portfolio/1791377133111520.png', '<p>En PHP, los arrays son una estructura de datos clave que te permite almacenar y organizar conjuntos de informaci&oacute;n. Para trabajar de manera eficiente con estos arrays, PHP proporciona una amplia gama de funciones especializadas. En este art&iacute;culo, exploraremos en detalle diversas funciones que puedes utilizar para manipular y gestionar arrays en PHP, facilitando as&iacute; el procesamiento de datos en tus aplicaciones.</p>\r\n<p>1. count() - Contar Elementos:<br />La funci&oacute;n count() te permite obtener el n&uacute;mero de elementos en un array, proporcionando informaci&oacute;n esencial sobre la dimensi&oacute;n y el tama&ntilde;o del array.</p>\r\n<p>Ejemplo de Uso de count():<br />$frutas = [\"Manzana\", \"Banana\", \"Naranja\"];<br />echo count($frutas); // Esto imprimir&aacute; 3<br />2. array_push() y array_pop() - Agregar y Eliminar Elementos:<br />array_push() te permite agregar uno o m&aacute;s elementos al final de un array, mientras que array_pop() elimina y retorna el &uacute;ltimo elemento de un array.</p>\r\n<p>Ejemplo de Uso de array_push() y array_pop():<br />$frutas = [\"Manzana\", \"Banana\"];<br />array_push($frutas, \"Naranja\"); // Agrega \"Naranja\" al final<br />print_r($frutas); // Esto imprimir&aacute;: Array ( [0] =&gt; Manzana [1] =&gt; Banana [2] =&gt; Naranja )</p>\r\n<p>$fruta_eliminada = array_pop($frutas); // Elimina y obtiene \"Naranja\"<br />print_r($frutas); // Esto imprimir&aacute;: Array ( [0] =&gt; Manzana [1] =&gt; Banana )<br />echo $fruta_eliminada; // Esto imprimir&aacute;: Naranja<br />3. array_merge() - Combinar Arrays:<br />La funci&oacute;n array_merge() combina dos o m&aacute;s arrays en uno nuevo, permitiendo la fusi&oacute;n de datos de diferentes arrays en uno solo.</p>', '2024-02-19 20:15:27', '2024-02-20 00:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `profile_image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Enrique', 'Enrique', '202402230726jessFacebook.jpg', 'enrique.sousa@gmail.com', '2024-02-12 10:49:20', '$2y$12$tGrSLmZBWexHYoFQgy/Ddu8JB5GytYgQn2GEYYazAvOTb9wHLzpiS', '3tCfZvavXsplrS46zGd7ZQJ0PFlV1qwIGAwBXdq9V82dp8xGZIxNL2c280vM', '2024-02-12 06:25:21', '2024-02-23 15:26:12'),
(2, 'Demo', 'demo', NULL, 'demo@gmail.com', NULL, '$2y$12$rT8WD7pnIOP3GgHQd1ZOmOA8aVqYHr1xcVWJX78wIPPHOOUjMb6PC', NULL, '2024-02-12 08:17:39', '2024-02-12 08:17:39'),
(3, 'Demo2', 'demo2', NULL, 'demo2@gmail.com', '2024-02-12 11:28:59', '$2y$12$Q12xGpPypCNeLTz/snaZW.I/hj8BS9KnV/vaJEQx4NRJB0AgTwq9q', NULL, '2024-02-12 11:28:47', '2024-02-12 11:28:59'),
(4, 'Test Nombre', 'test', NULL, 'test@gmail.com', '2024-02-13 05:11:28', '$2y$12$AzePxfA7NjLXSlYbJwUBc.Tgpbyz0i6o2Qi3XKbg1/HU7BnNmXNlG', 'VoAveRkAr3KBhpMl4Pl8C7chJEaMuTWemZPAiJ4qgb69Q9nkT1WvHS1P2Xkq', '2024-02-13 05:10:41', '2024-02-13 05:11:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_slides`
--
ALTER TABLE `home_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_slides`
--
ALTER TABLE `home_slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
