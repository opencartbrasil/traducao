<?php
$this->load->model('localisation/language');
$results = $this->model_localisation_language->getLanguages();

$iLang = 1;

foreach ($results as $result) {
  if ($result['code'] == 'pt-br') {
    $iLang = 0;
  }
}

if ($iLang) {
  $oc_language['name']       = 'Português (BR)';
  $oc_language['code']       = 'pt-br';
  $oc_language['locale']     = 'pt_BR.UTF-8,pt_BR,pt-br,pt_br,portuguese';
  $oc_language['sort_order'] = 1;
  $oc_language['status']     = 1;
  $this->config->set('config_language_id', 1);
  $this->model_localisation_language->addLanguage($oc_language);
}

$this->load->model('localisation/currency');
$results = $this->model_localisation_currency->getCurrencies();

$iCurr = 1;

foreach ($results as $result) {
  if ($result['code'] == 'BRL') {
    $iCurr = 0;
  }
}

if ($iCurr) {
  $oc_currency['title']         = 'Real';
  $oc_currency['code']          = 'BRL';
  $oc_currency['symbol_left']   = 'R$';
  $oc_currency['symbol_right']  = '';
  $oc_currency['decimal_place'] = '2';
  $oc_currency['value']         = 1.00000000;
  $oc_currency['status']        = 1;

  $this->model_localisation_currency->addCurrency($oc_currency);
}