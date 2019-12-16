INSERT INTO `ft_table` (`login`, `group`,`creation_date`)
SELECT `last_name`, "other", DATE(`birthdate`) FROM `user_card` WHERE `last_name` LIKE '%a%' AND LENGTH(`last_name`) < 9 LIMIT 10;