SELECT `name` FROM `distrib`
WHERE (`id_distrib` = 42
OR (`id_distrib` > 61 AND `id_distrib` < 70)
OR `id_distrib` = 71 OR `id_distrib` = 88
OR `id_distrib` = 89 OR `id_distrib` = 90)
OR (LENGTH(`name`) - LENGTH(REPLACE(`name`, 'y', ''))) = 2
OR (LENGTH(`name`) - LENGTH(REPLACE(`name`, 'Y', ''))) = 2
LIMIT 2, 5;