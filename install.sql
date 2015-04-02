UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_admin_language';
UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_language';
UPDATE `oc_setting` SET `value` = 'BRL' WHERE `key` = 'config_currency';
UPDATE `oc_setting` SET `value` = '30' WHERE `key` = 'config_country_id';
UPDATE `oc_setting` SET `value` = '0' WHERE `key` = 'config_currency_auto';
UPDATE `oc_country` SET `name` = 'Brasil', `postcode_required` = '1' WHERE `iso_code_2` = 'BR';
UPDATE `oc_language` SET `sort_order` = '2', `status` = '0' WHERE `code` = 'en';
UPDATE `oc_currency` SET `value` = '0.35339999' WHERE `code` = 'USD';
UPDATE `oc_currency` SET `value` = '1.00000000' WHERE `code` = 'BRL';
DELETE FROM `oc_information_description` WHERE `language_id` = 2;
DELETE FROM `oc_option_description` WHERE `language_id` = 2;
DELETE FROM `oc_option_value_description` WHERE `language_id` = 2;
DELETE FROM `oc_voucher_theme_description` WHERE `language_id` = 2;
DELETE FROM `oc_stock_status` WHERE `language_id` = 2;
DELETE FROM `oc_order_status` WHERE `language_id` = 2;
DELETE FROM `oc_return_status` WHERE `language_id` = 2;
DELETE FROM `oc_return_action` WHERE `language_id` = 2;
DELETE FROM `oc_return_reason` WHERE `language_id` = 2;
DELETE FROM `oc_length_class_description` WHERE `language_id` = 2;
DELETE FROM `oc_weight_class_description` WHERE `language_id` = 2;
TRUNCATE TABLE `oc_tax_class`;
TRUNCATE TABLE `oc_tax_rate`;
TRUNCATE TABLE `oc_tax_rate_to_customer_group`;
TRUNCATE TABLE `oc_tax_rule`;
TRUNCATE TABLE `oc_geo_zone`;
TRUNCATE TABLE `oc_zone_to_geo_zone`;
INSERT INTO `oc_customer_group_description` (`customer_group_id`, `language_id`, `name`, `description`) VALUES (1, 2, 'Padrão', 'teste');
INSERT INTO `oc_information_description` (`information_id`, `language_id`, `title`, `description`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(4, 2, 'Sobre', 'Sobre', 'Sobre', '', ''),
(5, 2, 'Termos e Condições', 'Termos e Condições', 'Termos e Condições', '', ''),
(3, 2, 'Política de Privacidade', 'Política de Privacidade', 'Política de Privacidade', '', ''),
(6, 2, 'Informações de Entrega', 'Informações de Entrega', 'Informações de Entrega', '', '');
INSERT INTO `oc_option_description` (`option_id`, `language_id`, `name`) VALUES
(1, 2, 'Caixa de Opção'),
(2, 2, 'Caixa de Seleção'),
(4, 2, 'Texto'),
(5, 2, 'Menu de Seleção'),
(6, 2, 'Texto Longo'),
(7, 2, 'Arquivo'),
(8, 2, 'Data'),
(9, 2, 'Tempo'),
(10, 2, 'Data &amp; Hora'),
(11, 2, 'Tamanho'),
(12, 2, 'Data de Entrega');
INSERT INTO `oc_option_value_description` (`option_value_id`, `language_id`, `option_id`, `name`) VALUES
(43, 2, 1, 'Grande'),
(45, 2, 2, 'Checkbox 4'),
(41, 2, 5, 'Verde'),
(44, 2, 2, 'Checkbox 3'),
(48, 2, 11, 'Grande'),
(31, 2, 1, 'Médio'),
(24, 2, 2, 'Checkbox 2'),
(32, 2, 1, 'Pequeno'),
(40, 2, 5, 'Azul'),
(39, 2, 5, 'Vermelho'),
(23, 2, 2, 'Checkbox 1'),
(47, 2, 11, 'Médio'),
(46, 2, 11, 'Pequeno'),
(42, 2, 5, 'Amarelo');
INSERT INTO `oc_voucher_theme_description` (`voucher_theme_id`, `language_id`, `name`) VALUES
(6, 2, 'Natal'),
(7, 2, 'Aniversário'),
(8, 2, 'Geral');
INSERT INTO `oc_stock_status` (`stock_status_id`, `language_id`, `name`) VALUES
(7, 2, 'Em Estoque'),
(8, 2, 'Pré-Venda'),
(5, 2, 'Esgotado'),
(6, 2, '2 a 3 Dias');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES
(2, 2, 'Processando'),
(3, 2, 'Despachado'),
(7, 2, 'Cancelado'),
(5, 2, 'Completo'),
(8, 2, 'Negado'),
(9, 2, 'Cancelamento Revertido'),
(10, 2, 'Não Aprovado'),
(11, 2, 'Reembolsado'),
(12, 2, 'Estornado'),
(13, 2, 'Cancelado pela Operadora'),
(1, 2, 'Aguardando Pagamento'),
(16, 2, 'Anulado'),
(15, 2, 'Processado'),
(14, 2, 'Expirado');
INSERT INTO `oc_return_status` (`return_status_id`, `language_id`, `name`) VALUES
(1, 2, 'Pendente'),
(3, 2, 'Completa'),
(2, 2, 'Aguardando Produtos');
INSERT INTO `oc_return_action` (`return_action_id`, `language_id`, `name`) VALUES
(1, 2, 'Reembolsado'),
(2, 2, 'Crédito Emitido'),
(3, 2, 'Envio de Substituição');
INSERT INTO `oc_return_reason` (`return_reason_id`, `language_id`, `name`) VALUES
(1, 2, 'Chegou quebrado'),
(2, 2, 'Recebi o produto errado'),
(3, 2, 'Erro no pedido'),
(4, 2, 'Defeito, forneça detalhes'),
(5, 2, 'Outros, forneça detalhes');
INSERT INTO `oc_length_class_description` (`length_class_id`, `language_id`, `title`, `unit`) VALUES
(1, 2, 'Centímetro', 'cm'),
(2, 2, 'Milímetro', 'mm'),
(3, 2, 'Polegada', 'in');
INSERT INTO `oc_weight_class_description` (`weight_class_id`, `language_id`, `title`, `unit`) VALUES
(1, 2, 'Quilograma', 'kg'),
(2, 2, 'Grama', 'g'),
(5, 2, 'Libra ', 'lb'),
(6, 2, 'Onça', 'oz');
INSERT INTO `oc_geo_zone` (`geo_zone_id`, `name`, `description`, `date_modified`, `date_added`) VALUES
(NULL, 'Brasil', 'Todo o Brasil', '0000-00-00 00:00:00', NOW());
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES
(NULL, 30, 0, 1, NOW(), '0000-00-00 00:00:00');
UPDATE `oc_layout` SET `name` = 'Produtos' WHERE `name` = 'Product';
UPDATE `oc_layout` SET `name` = 'Departamentos' WHERE `name` = 'Category';
UPDATE `oc_layout` SET `name` = 'Padrão' WHERE `name` = 'Default';
UPDATE `oc_layout` SET `name` = 'Fabricantes' WHERE `name` = 'Manufacturer';
UPDATE `oc_layout` SET `name` = 'Conta' WHERE `name` = 'Account';
UPDATE `oc_layout` SET `name` = 'Finalizar Pedido' WHERE `name` = 'Checkout';
UPDATE `oc_layout` SET `name` = 'Contate-nos' WHERE `name` = 'Contact';
UPDATE `oc_layout` SET `name` = 'Mapa do Site' WHERE `name` = 'Sitemap';
UPDATE `oc_layout` SET `name` = 'Afiliados' WHERE `name` = 'Affiliate';
UPDATE `oc_layout` SET `name` = 'Páginas de Informações' WHERE `name` = 'Information';
UPDATE `oc_layout` SET `name` = 'Busca' WHERE `name` = 'Search';