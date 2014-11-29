UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_admin_language';
UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_language';
UPDATE `oc_setting` SET `value` = 'BRL' WHERE `key` = 'config_currency';
UPDATE `oc_setting` SET `value` = '30' WHERE `key` = 'config_country_id';
UPDATE `oc_setting` SET `value` = '0' WHERE `key` = 'config_currency_auto';
UPDATE `oc_country` SET `name` = 'Brasil', `postcode_required` = '1' WHERE `iso_code_2` = 'BR';