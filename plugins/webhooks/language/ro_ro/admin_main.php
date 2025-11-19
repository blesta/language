<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Această secțiune vă permite să redenumiți numele câmpurilor din evenimentul declanșat cu un nume personalizat înainte ca acestea să fie trimise la callback. Subcâmpurile trebuie să fie separate prin punct (de exemplu, vars.status). Pentru a vedea o listă cu toate câmpurile acceptate de fiecare dintre evenimente, puteți verifica următorul <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Editați Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Adăugați un câmp';
$lang['AdminMain.edit.field_method'] = 'Metoda';
$lang['AdminMain.edit.field_type'] = 'Callback';
$lang['AdminMain.edit.field_event'] = 'Eveniment';
$lang['AdminMain.edit.field_callback'] = 'Callback';
$lang['AdminMain.edit.option_delete'] = 'Ștergeți';
$lang['AdminMain.edit.heading_options'] = 'Opțiuni';
$lang['AdminMain.edit.heading_parameter'] = 'Domeniu nou';
$lang['AdminMain.edit.heading_field'] = 'Câmpul original';
$lang['AdminMain.edit.heading_fields_map'] = 'Câmpuri Harta';
$lang['AdminMain.edit.heading_event'] = 'Eveniment';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Editați Webhook';
$lang['AdminMain.add.text_fields_map'] = 'Această secțiune vă permite să redenumiți numele câmpurilor din evenimentul declanșat cu un nume personalizat înainte ca acestea să fie trimise la callback. Subcâmpurile trebuie să fie separate prin punct (de exemplu, vars.status). Pentru a vedea o listă cu toate câmpurile acceptate de fiecare dintre evenimente, puteți verifica următorul <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Adăugați Webhook';
$lang['AdminMain.add.field_add_field'] = 'Adăugați un câmp';
$lang['AdminMain.add.field_method'] = 'Metoda';
$lang['AdminMain.add.field_type'] = 'Callback';
$lang['AdminMain.add.field_event'] = 'Eveniment';
$lang['AdminMain.add.field_callback'] = 'Callback';
$lang['AdminMain.add.option_delete'] = 'Ștergeți';
$lang['AdminMain.add.heading_options'] = 'Opțiuni';
$lang['AdminMain.add.heading_parameter'] = 'Domeniu nou';
$lang['AdminMain.add.heading_field'] = 'Câmpul original';
$lang['AdminMain.add.heading_fields_map'] = 'Câmpuri Harta';
$lang['AdminMain.add.heading_event'] = 'Eveniment';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Adăugați Webhook';
$lang['AdminMain.index.no_results'] = 'Nu sunt disponibile webhooks.';
$lang['AdminMain.index.text_description_incoming'] = 'Primește o cerere HTTP și declanșează un eveniment în sistem folosind parametrii primiți în cerere. Cererea poate fi primită prin GET, POST sau JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Trimite o cerere HTTP către o adresă URL atunci când este declanșat un eveniment. Cererea poate fi trimisă folosind GET, POST, PUT sau JSON.';
$lang['AdminMain.index.option_delete'] = 'Ștergeți';
$lang['AdminMain.index.option_edit'] = 'Editați';
$lang['AdminMain.index.heading_options'] = 'Opțiuni';
$lang['AdminMain.index.heading_method'] = 'Metoda';
$lang['AdminMain.index.heading_event'] = 'Eveniment';
$lang['AdminMain.index.heading_callback'] = 'Callback';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Adăugați Webhook';
$lang['AdminMain.index.category_outgoing'] = 'Ieșire';
$lang['AdminMain.index.category_incoming'] = 'Intrări';
$lang['AdminMain.index.page_title_edit'] = 'Editați Webhook';
$lang['AdminMain.index.page_title_add'] = 'Adăugați Webhook';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Sunteți sigur că doriți să ștergeți acest webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'Webhook-ul a fost șters cu succes!';
$lang['AdminMain.!success.webhook_updated'] = 'Webhook-ul a fost actualizat cu succes!';
$lang['AdminMain.!success.webhook_added'] = 'Webhook-ul a fost adăugat cu succes!';
$lang['AdminMain.!tooltip.callback'] = 'Callback-ul reprezintă locul în care va fi trimisă sau primită cererea, pentru webhooks de ieșire trebuie să fie un URL, iar pentru webhooks de intrare trebuie să fie numele URL-ului în care va fi primită cererea. de exemplu, http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Anulează';
$lang['AdminMain.add.field_cancel'] = 'Anulează';
$lang['AdminMain.logs.no_results'] = 'Nu există jurnale disponibile.';
$lang['AdminMain.logs.option_resend'] = 'Trimite din nou';
$lang['AdminMain.logs.confirm_resend'] = 'Sunteți sigur că doriți să retrimiteți acest eveniment?';
$lang['AdminMain.logs.field_filterdateend'] = 'Data de încheiere';
$lang['AdminMain.logs.field_filterdatestart'] = 'Data de începere';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Stare HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Eveniment';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Toate Webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Opțiuni';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Ultima încercare';
$lang['AdminMain.logs.heading_date_triggered'] = 'Data declanșării';
$lang['AdminMain.logs.heading_http_response'] = 'Răspuns HTTP';
$lang['AdminMain.logs.heading_method'] = 'Metoda';
$lang['AdminMain.logs.heading_response'] = 'Răspuns';
$lang['AdminMain.logs.heading_event'] = 'Eveniment';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Vizualizare Webhooks';
$lang['AdminMain.logs.boxtitle_logs'] = 'Jurnale Webhook';
$lang['AdminMain.index.option_logs'] = 'Jurnale';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Vezi toate jurnalele';
$lang['AdminMain.index.page_title_logs'] = 'Jurnale Webhook';
$lang['AdminMain.!success.webhook_retried'] = 'Webhook-ul a fost reluat cu succes!';

