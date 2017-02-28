CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `h1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav-title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `page` (`id`, `h1`, `description`, `img`, `alt`, `slug`, `nav-title`) VALUES
  (1, 'Les Teletubbies', 'C\'est flippant.', 'img/teletubbies.jpg', 'Teletubbies', 'les-teletubbies', 'Teletubbies'),
  (2, 'Les Chatons !', 'C\'est mignon.\r\n\r\n', 'img/three_kittens.jpg', 'Kittens', 'les-chatons-wesh-gros', 'Chatons'),
  (3, 'Iron Maiden!', 'C\'est vieux.', 'img/ironmaiden.jpg', 'Eddy', 'iron-maiden-ca-pique', 'Ironmaiden'),
  (4, '16 horsepower', 'Woooaaaah', 'img/raf.jpg', 'Sombre hero de la mer', 'pif-paf', '16HP'),
  (5, 'Les mangas!!!', 'Woooooah la culture Japonaise\r\n\r\n', 'img/manga.jpg', 'Woooooahhh', 'onegai-sshimasu-goshijin-sama', 'Mangaaaa');

ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
