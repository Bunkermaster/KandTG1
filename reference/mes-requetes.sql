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
