<?php
$this->load->model('localisation/language');
$results = $this->model_localisation_language->getLanguages();

foreach ($results as $result) {
	if ($result['code'] == 'pt-br') {
		$this->model_localisation_language->deleteLanguage($result['language_id']);
	}
}

$oc_language['name']       = 'Português (BR)';
$oc_language['code']       = 'pt-br';
$oc_language['locale']     = 'pt_BR.UTF-8, pt_BR, UTF-8';
$oc_language['directory']  = 'portuguese-br';
$oc_language['image']      = 'br.png';
$oc_language['sort_order'] = 1;
$oc_language['status']     = 1;
$this->model_localisation_language->addLanguage($oc_language);

$this->load->model('localisation/currency');
$results = $this->model_localisation_currency->getCurrencies();

foreach ($results as $result) {
	if ($result['code'] == 'BRL') {
		$this->model_localisation_currency->deleteCurrency($result['currency_id']);
	}
}

$oc_currency['title']         = 'Real';
$oc_currency['code']          = 'BRL';
$oc_currency['symbol_left']   = 'R$';
$oc_currency['symbol_right']  = '';
$oc_currency['decimal_place'] = '2';
$oc_currency['value']         = 1.00000000;
$oc_currency['status']        = 1;

$this->model_localisation_currency->addCurrency($oc_currency);

/** Atualização - Traduz os dados (do banco de dados) da Loja também para pt-BR **/

// Obtem o id da Lingua portuguesa BR
$language = $this->db->query("SELECT * FROM " . DB_PREFIX . "language where code = 'pt-br' limit 1 ");

if ( !empty($language->row) ){
    
    // Títulos das Paginas de Informações
    $this->db->query("UPDATE " . DB_PREFIX . "information_description  set title = 'A empresa' where language_id = '" .$language->row['language_id']. "' and information_id = '4' ");
    $this->db->query("UPDATE " . DB_PREFIX . "information_description  set title = 'Termos de uso' where language_id = '" .$language->row['language_id']. "' and information_id = '5' ");
    $this->db->query("UPDATE " . DB_PREFIX . "information_description  set title = 'Politica de privacidade' where language_id = '" .$language->row['language_id']. "' and information_id = '3' ");
    $this->db->query("UPDATE " . DB_PREFIX . "information_description  set title = 'Politica de entrega' where language_id = '" .$language->row['language_id']. "' and information_id = '6' ");
    
    // Status do pedido
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Pendente' where language_id = '" .$language->row['language_id']. "' and order_status_id = '1' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Processando' where language_id = '" .$language->row['language_id']. "' and order_status_id = '2' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Enviado' where language_id = '" .$language->row['language_id']. "' and order_status_id = '3' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Cancelado' where language_id = '" .$language->row['language_id']. "' and order_status_id = '7' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Completo' where language_id = '" .$language->row['language_id']. "' and order_status_id = '5' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Negado' where language_id = '" .$language->row['language_id']. "' and order_status_id = '8' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Cancelamento inverso' where language_id = '" .$language->row['language_id']. "' and order_status_id = '9' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Falha' where language_id = '" .$language->row['language_id']. "' and order_status_id = '10' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Reembolsado' where language_id = '" .$language->row['language_id']. "' and order_status_id = '11' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Invertido' where language_id = '" .$language->row['language_id']. "' and order_status_id = '12' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Anulado' where language_id = '" .$language->row['language_id']. "' and order_status_id = '16' ");
    $this->db->query("UPDATE " . DB_PREFIX . "order_status set name = 'Expirado' where language_id = '" .$language->row['language_id']. "' and order_status_id = '14' ");
    
    // Situação do Estoque
    $this->db->query("UPDATE " . DB_PREFIX . "stock_status  set name = 'Em estoque' where language_id = '" .$language->row['language_id']. "' and stock_status_id = '7' ");
    $this->db->query("UPDATE " . DB_PREFIX . "stock_status  set name = 'Pre-venda' where language_id = '" .$language->row['language_id']. "' and stock_status_id = '8' ");
    $this->db->query("UPDATE " . DB_PREFIX . "stock_status  set name = 'Indisponivel' where language_id = '" .$language->row['language_id']. "' and stock_status_id = '5' ");
    $this->db->query("UPDATE " . DB_PREFIX . "stock_status  set name = 'Em 2-3 dias' where language_id = '" .$language->row['language_id']. "' and stock_status_id = '6' ");
   
    // Nome do usuário Padrão para Português
    $this->db->query("UPDATE " . DB_PREFIX . "user set firstname = 'Admin', lastname = 'Padrao' where user_id = '1' ");
    
    // Unidade de medida para português
    $this->db->query("UPDATE " . DB_PREFIX . "length_class_description  set title = 'Centimetro' where language_id = '" .$language->row['language_id']. "' and length_class_id = '1' ");
    $this->db->query("UPDATE " . DB_PREFIX . "length_class_description  set title = 'Milimetro' where language_id = '" .$language->row['language_id']. "' and length_class_id = '2' ");
    $this->db->query("UPDATE " . DB_PREFIX . "length_class_description  set title = 'Polegar' where language_id = '" .$language->row['language_id']. "' and length_class_id = '3' ");
    
    // Unidade de peso para portugues
    $this->db->query("UPDATE " . DB_PREFIX . "weight_class_description set title = 'Kilograma' where language_id = '" .$language->row['language_id']. "' and weight_class_id = '1' ");
    $this->db->query("UPDATE " . DB_PREFIX . "weight_class_description set title = 'Grama' where language_id = '" .$language->row['language_id']. "' and weight_class_id = '2' ");
    $this->db->query("UPDATE " . DB_PREFIX . "weight_class_description set title = 'Libra' where language_id = '" .$language->row['language_id']. "' and weight_class_id = '5' ");
    $this->db->query("UPDATE " . DB_PREFIX . "weight_class_description set title = 'Onça' where language_id = '" .$language->row['language_id']. "' and weight_class_id = '6' ");
    
}

