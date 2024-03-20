<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Data de expirare nu poate fi actualizată fără numărul complet al cardului.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Modul dezvoltator trebuie să fie setat la "true", dacă este dat.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Modul de testare trebuie să fie setat la "true", dacă este dat.';
$lang['Authorize_net.!error.transaction_key.format'] = 'Cheia de tranzacție trebuie să aibă o lungime de 16 caractere.';
$lang['Authorize_net.!error.login_id.format'] = 'ID-ul de autentificare nu trebuie să aibă mai mult de 20 de caractere și nu poate fi gol.';
$lang['Authorize_net.validation_modes_live'] = 'Live';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Nici unul';
$lang['Authorize_net.validation_note'] = 'Aceasta controlează ce tip de validare se efectuează atunci când un cont de plăți este stocat cu ajutorul CIM. "None" nu efectuează nicio validare suplimentară. "Test" emite o tranzacție de test care nu apare pe extrasul de cont al clientului, dar care va genera un e-mail către comerciant. \'Live\' procesează o tranzacție de 0,00 USD sau 0,01 USD care este imediat anulată. Consultați-vă cu furnizorul de cont de comerciant înainte de a seta această valoare la \'Live\', deoarece este posibil să fiți supus unor taxe.';
$lang['Authorize_net.validation_mode'] = 'Modul de validare a contului de plată';
$lang['Authorize_net.apis_cim'] = 'CIM (trebuie să fie activat de Authorize.Net)';
$lang['Authorize_net.apis_aim'] = 'AIM (implicit)';
$lang['Authorize_net.dev_mode_note'] = 'Activarea acestei opțiuni va posta tranzacțiile în mediul de dezvoltare Authorize.net. Trebuie să aveți un cont de testare pentru dezvoltatori pentru a putea utiliza acest mediu.';
$lang['Authorize_net.dev_mode'] = 'Modul Dezvoltator';
$lang['Authorize_net.test_mode_note'] = 'Funcția de mod de testare este acceptată numai de AIM. Pentru a testa tranzacțiile CIM, trebuie să activați modul de testare din contul dumneavoastră Authorize.net.';
$lang['Authorize_net.test_mode'] = 'Modul de testare';
$lang['Authorize_net.api'] = 'API de plată';
$lang['Authorize_net.transaction_key'] = 'Cheia de tranzacție';
$lang['Authorize_net.login_id'] = 'ID-ul de conectare';
$lang['Authorize_net.description'] = 'Procesare fiabilă și rapidă a cardurilor de credit și ACH';
$lang['Authorize_net.name'] = 'Authorize.Net';

