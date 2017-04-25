-- INSERT
INSERT INTO
  `page`
  (`h1`, `description`, `img`, `alt`, `slug`, `nav-title`)
VALUES
  ("NOOOOOOON","QQ","img/img.jpg","OSEF","Limace","Limace");
# INSERT INTO
#   `page`
#   (`id`, `h1`, `description`, `img`, `alt`, `slug`, `nav-title`)
# VALUES
#   (NULL, "NOOOOOOON","QQ","img/img.jpg","OSEF","Limace","Limace");

-- SELECT 1
SELECT
  `id`,
  `h1`,
  `description`,
  `img`,
  `alt`,
  `slug`,
  `nav-title`
FROM
  `page`
WHERE
  `id` = 6
;

-- SELECT TOUS
SELECT
  `id`,
  `h1`,
  `description`,
  `img`,
  `alt`,
  `slug`,
  `nav-title`
FROM
  `page`
;

-- UPDATE
UPDATE
  `page`
SET
  `h1`="OUIIIIIII",
  `description`="HAHAHAHAHHA"
WHERE `id` = 6;

-- DELETE DELETE DON'T YOU WANNA DELETE DELETE
DELETE FROM
  `page`
WHERE
  `id` = 6
;



INSERT INTO `page` (`id`, `h1`, `description`, `img`, `alt`, `slug`, `nav-title`) VALUES
  (1, 'Les Teletubbies', 'C\'est flippant.', 'img/teletubbies.jpg', 'Teletubbies', 'les-teletubbies', 'Teletubbies'),
  (2, 'Les Chatons !', 'C\'est mignon.\r\n\r\n', 'img/three_kittens.jpg', 'Kittens', 'les-chatons-wesh-gros', 'Chatons'),
  (3, 'Iron Maiden!', 'C\'est vieux.', 'img/ironmaiden.jpg', 'Eddy', 'iron-maiden-ca-pique', 'Ironmaiden'),
  (4, '16 horsepower', 'Woooaaaah', 'img/raf.jpg', 'Sombre hero de la mer', 'pif-paf', '16HP'),
  (5, 'Les mangas!!!', 'Woooooah la culture Japonaise\r\n\r\n', 'img/manga.jpg', 'Woooooahhh', 'onegai-sshimasu-goshijin-sama', 'Mangaaaa');
