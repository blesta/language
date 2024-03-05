<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'La data di scadenza non può essere aggiornata senza il numero completo della carta.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'La modalità sviluppatore deve essere impostata su "true", se fornita.';
$lang['Authorize_net.!error.test_mode.valid'] = 'La modalità di test deve essere impostata su "true", se fornita.';
$lang['Authorize_net.!error.transaction_key.format'] = 'La chiave di transazione deve avere una lunghezza di 16 caratteri.';
$lang['Authorize_net.!error.login_id.format'] = 'L\'ID di accesso non deve superare i 20 caratteri e non può essere vuoto.';
$lang['Authorize_net.validation_modes_live'] = 'In diretta';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Nessuno';
$lang['Authorize_net.validation_note'] = 'Controlla il tipo di convalida che viene eseguita quando un conto di pagamento viene memorizzato utilizzando CIM. Nessuno" non esegue alcuna convalida aggiuntiva. Test" emette una transazione di prova che non appare sull\'estratto conto del cliente, ma genera un\'e-mail per l\'esercente. Live" elabora una transazione da 0,00 o 0,01 dollari che viene immediatamente annullata. Consultare il fornitore del conto commerciale prima di impostare questo valore su "Live", poiché potrebbe essere soggetto a commissioni.';
$lang['Authorize_net.validation_mode'] = 'Modalità di convalida del conto di pagamento';
$lang['Authorize_net.apis_cim'] = 'CIM (deve essere abilitato da Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (predefinito)';
$lang['Authorize_net.dev_mode_note'] = 'Abilitando questa opzione, le transazioni verranno pubblicate nell\'ambiente per sviluppatori di Authorize.net. Per utilizzare questo ambiente è necessario disporre di un account di prova per sviluppatori.';
$lang['Authorize_net.dev_mode'] = 'Modalità sviluppatore';
$lang['Authorize_net.test_mode_note'] = 'La modalità di prova è supportata solo da AIM. Per testare le transazioni CIM è necessario attivare la modalità di test dal proprio account Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Modalità test';
$lang['Authorize_net.api'] = 'API di pagamento';
$lang['Authorize_net.transaction_key'] = 'Chiave di transazione';
$lang['Authorize_net.login_id'] = 'ID di accesso';
$lang['Authorize_net.description'] = 'Elaborazione affidabile e veloce di carte di credito e ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

