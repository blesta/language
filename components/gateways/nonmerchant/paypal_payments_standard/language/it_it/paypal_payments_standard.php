<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = 'La modalità sviluppatore deve essere impostata su "true", se fornita.';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = 'È necessario inserire un indirizzo e-mail valido.';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = 'Pagare con PayPal';
$lang['PaypalPaymentsStandard.pay_type_both'] = 'Pagamenti una tantum e in abbonamento, quando possibile';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = 'Solo pagamenti in abbonamento';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = 'Solo pagamenti una tantum';
$lang['PaypalPaymentsStandard.pay_type'] = 'Opzioni di pagamento';
$lang['PaypalPaymentsStandard.api_signature'] = 'Firma API';
$lang['PaypalPaymentsStandard.api_password'] = 'Password API';
$lang['PaypalPaymentsStandard.api_username_note'] = 'Questa, così come la Password API e la Firma API, sono necessarie per elaborare i rimborsi tramite PayPal.';
$lang['PaypalPaymentsStandard.api_username'] = 'Nome utente API';
$lang['PaypalPaymentsStandard.dev_mode_note'] = 'Abilitando questa opzione, le transazioni verranno inviate all\'ambiente PayPal Sandbox. Attivare questa opzione solo se si sta eseguendo un test con un conto PayPal Sandbox.';
$lang['PaypalPaymentsStandard.dev_mode'] = 'Modalità sviluppatore';
$lang['PaypalPaymentsStandard.page_style_note'] = 'Il nome dello stile di pagina del tema della pagina di pagamento personalizzata creata in PayPal. Lasciare vuoto per lo stile di pagina predefinito.';
$lang['PaypalPaymentsStandard.page_style'] = 'Nome dello stile della pagina';
$lang['PaypalPaymentsStandard.account_id'] = 'Email del conto PayPal';
$lang['PaypalPaymentsStandard.description'] = 'PayPal Payments Standard è uno dei modi più semplici per accettare in modo sicuro pagamenti online con carta di credito e PayPal.';
$lang['PaypalPaymentsStandard.name'] = 'Pagamenti PayPal standard';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = 'Sono state trovate e-mail duplicate nei dati di mappatura; rimuovere i duplicati e riprovare.';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = 'È stata trovata una riga non valida nei dati di mappatura; verificare che l\'indirizzo e-mail e l\'ID cliente siano validi e riprovare.';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = 'Da utilizzare con le sottoscrizioni PayPal create al di fuori di Blesta. Mappare payer_email all\'ID cliente interno, 1 per riga. Ad esempio: email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = 'Mappatura dei pagamenti';

