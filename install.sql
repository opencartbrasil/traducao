DELETE FROM `oc_language` WHERE `code` = 'pt-br';
INSERT INTO `oc_language` (`name`, `code`, `locale`, `image`, `directory`, `filename`, `sort_order`, `status`) VALUES ('Português (BR)', 'pt-br', 'pt_BR.UTF-8, pt_BR, UTF-8', 'br.png', 'portuguese-br', 'portuguese-br', 1, 1);
UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_admin_language';
UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_language';
DELETE FROM `oc_currency` WHERE `code` = 'BRL';
INSERT INTO `oc_currency` (`title`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `date_modified`) VALUES ('Real', 'BRL', 'R$', '', '2', 1.00000000, 1, '2014-11-20 15:30:00');
UPDATE `oc_setting` SET `value` = 'BRL' WHERE `key` = 'config_currency';
UPDATE `oc_country` SET `name` = 'Brasil', `postcode_required` = '1' WHERE `iso_code_2` = 'BR';
