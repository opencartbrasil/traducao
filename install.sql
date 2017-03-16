UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_admin_language';
UPDATE `oc_setting` SET `value` = 'pt-br' WHERE `key` = 'config_language';
UPDATE `oc_setting` SET `value` = 'BRL' WHERE `key` = 'config_currency';
UPDATE `oc_setting` SET `value` = '30' WHERE `key` = 'config_country_id';
UPDATE `oc_setting` SET `value` = '0' WHERE `key` = 'config_currency_auto';
UPDATE `oc_country` SET `name` = 'Brasil', `postcode_required` = '1' WHERE `iso_code_2` = 'BR';


INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES
(2, 2, 'Processando'),
(3, 2, 'Despachado'),
(4, 2, 'Entregue'),
(6, 2, 'Enviado'),
(7, 2, 'Cancelado'),
(5, 2, 'Completo'),
(8, 2, 'Negado'),
(17, 2, 'Pagamento Confirmado'),
(9, 2, 'Cancelamento Revertido'),
(10, 2, 'Não Aprovado'),
(11, 2, 'Estornado'),
(12, 2, 'Estornado'),
(13, 2, 'Cancelado pela Operadora'),
(1, 2, 'Aguardando Pagamento'),
(16, 2, 'Anulado'),
(15, 2, 'Processado'),
(18, 2, 'Reembolsado'),
(14, 2, 'Expirado');


INSERT INTO `oc_stock_status` (`stock_status_id`, `language_id`, `name`) VALUES
(7, 2, 'Em Estoque'),
(8, 2, 'Orçamento'),
(5, 2, 'Esgotado'),
(6, 2, '2 a 3 Dias');

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
(2, 2, 'Produto trocado'),
(3, 2, 'Erro no pedido '),
(4, 2, 'Defeito, forneça detalhes'),
(5, 2, 'Outros, forneça detalhes');
