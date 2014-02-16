<?php
//Headings
$_['heading_title']              = 'PayPal Payflow Pro iFrame';
$_['heading_refund']             = 'Reembolso';

//Table columns
$_['column_transaction_id']      = 'Transação Nº';
$_['column_transaction_type']    = 'Tipo de Transação';
$_['column_amount']              = 'Quantidade';
$_['column_time']                = 'Tempo';
$_['column_actions']             = 'Ações';

//Text
$_['text_payment']               = 'Formas de Pagamento';
$_['text_success']		         = 'Módulo PayPal Payflow Pro iFrame modificado com sucesso!';
$_['text_pp_payflow_iframe']     = '<a onclick="window.open(\'\');"><img src="view/image/payment/paypal.png" alt="PayPal Payflow Pro" title="PayPal Payflow Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']         = 'Autorização';
$_['text_sale']                  = 'Venda';
$_['text_authorise'] = 'Authorise';
$_['text_capture'] = 'Delayed Capture';
$_['text_void'] = 'Void';
$_['text_payment_info'] = 'Payment information';
$_['text_complete'] = 'Complete';
$_['text_incomplete'] = 'Incomplete';
$_['text_transaction'] = 'Transaction';
$_['text_confirm_void'] = 'If you void you cannot capture any further funds';
$_['text_refund'] = 'Refund';
$_['text_refund_issued'] = 'Refund was issued successfully';
$_['text_redirect'] = 'Redirect';
$_['text_iframe'] = 'Iframe';
$_['help_vendor'] = 'Your merchant login ID that you created when you registered for the Website Payments Pro account.';
$_['help_user'] = 'If you set up one or more additional users on the account, this value is the ID of the user authorised to process transactions. If, however, you have not set up additional users on the account, USER has the same value as VENDOR.';
$_['help_password'] = 'The 6 to 32 character password that you defined while registering for the account.';
$_['help_partner'] = 'The ID provided to you by the authorised PayPal Reseller who registered you for the Payflow SDK. If you purchased your account directly from PayPal, use PayPal';
$_['help_checkout_method'] = "Please use Redirect method if do not have SSL installed or if you do not have Pay with PayPal option disabled on your hosted payment page.";
$_['help_debug'] = "Logs additional information.";

//Buttons
$_['button_refund']                     = 'Reembolsar';
$_['button_void']                       = 'Anular';
$_['button_capture']                    = 'Capturar';

//Tabs
$_['tab_settings']                      = 'Configurações';
$_['tab_order_status']                  = 'Situação do Pedido';
$_['tab_checkout_customisation']        = 'Personalização da Finalização';

//Form entry
$_['entry_vendor']                      = 'Vendedor:';
$_['entry_user']                        = 'Usuário:';
$_['entry_password']                    = 'Senha:';
$_['entry_partner']                     = 'Parceiro:';
$_['entry_test']                        = 'Modo de Teste:<br /><span class="help">Use the live or testing (sandbox) gateway server to process transactions? Test may fail in Internet Explorer</span>';
$_['entry_total']                       = 'Total Mínimo:<br /><span class="help">Total mínimo que o pedido deve alcançar para que este método de pagamento seja habilitado.</span>'; 
$_['entry_order_status']                = 'Situação do Pedido:';
$_['entry_geo_zone']                    = 'Região Geográfica:';
$_['entry_status']                      = 'Situação:';
$_['entry_sort_order']                  = 'Ordem de Exibição:';
$_['entry_transaction_method']          = 'Método de Transação:';
$_['entry_transaction_id']              = 'Transação Nº';
$_['entry_full_refund']                 = 'Reembolso Completo';
$_['entry_amount']                      = 'Quantidade';
$_['entry_message']                     = 'Mensagem';
$_['entry_ipn_url']                     = 'Url IPN:';
$_['entry_checkout_method']             = 'Método de Finalização:';
$_['entry_debug']                       = 'Log de Depuração:';
$_['entry_transaction_reference']       = 'Referência da Transação';
$_['entry_transaction_amount']          = 'Valor da Transação';
$_['entry_refund_amount']               = 'Valor de Reembolso';
$_['entry_capture_status']              = 'Situação da Captura';
$_['entry_void']                        = 'Vazio';
$_['entry_capture']                     = 'Captura';
$_['entry_transactions']                = 'Transações';
$_['entry_complete_capture']            = 'Captura Completa';
$_['entry_canceled_reversal_status']    = 'Situação quando Revertido Cancelado:';
$_['entry_completed_status']            = 'Situação quando Concluído:';
$_['entry_denied_status']			    = 'Situação quando Negado:';
$_['entry_expired_status']			    = 'Situação quando Expirado:';
$_['entry_failed_status']			    = 'Situação quando Falhou:';
$_['entry_pending_status']			    = 'Situação quando Pendente:';
$_['entry_processed_status']		    = 'Situação quando Processado:';
$_['entry_refunded_status']			    = 'Situação quando Reembolso:';
$_['entry_reversed_status']			    = 'Situação quando Revertido:';
$_['entry_voided_status']		        = 'Situação quando Anulado:';
$_['entry_cancel_url']                  = 'URL de Cancelamento:';
$_['entry_error_url']                   = 'URL de Erro:';
$_['entry_return_url']                  = 'URL de Retorno:';
$_['entry_post_url']                    = 'URL de POST Silencioso:';

//Errors
$_['error_permission']                  = 'Atenção: Você não possui permissão para modificar o módulo PayPal Payflow Pro iFrame!';
$_['error_vendor']                      = 'Atenção: O campo <b>Vendedor</b> tem seu preenchimento obrigatório!';
$_['error_user']	                    = 'Atenção: O campo <b>Usuário da API</b> tem seu preenchimento obrigatório!';
$_['error_password']	                = 'Atenção: O campo <b>Senha da API</b> tem seu preenchimento obrigatório!'; 
$_['error_partner']                     = 'Atenção: O campo <b>Parceiro</b> tem seu preenchimento obrigatório!';
$_['error_missing_data'] = 'Missing data';
$_['error_missing_order'] = 'Could not find the order';
$_['error_general'] = 'There was an error';
$_['error_capture_amt'] = 'Enter an amount to capture';
?>