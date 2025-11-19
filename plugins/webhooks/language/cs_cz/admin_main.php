<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Tato část umožňuje přejmenovat název polí spouštěné události na vlastní název před jejich odesláním do zpětného volání. Podpole by měla být oddělena tečkou (např. vars.status). Chcete-li zobrazit seznam všech polí podporovaných jednotlivými událostmi, můžete se podívat na následující <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">odkaz</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Upravit webový háček';
$lang['AdminMain.edit.field_add_field'] = 'Přidat pole';
$lang['AdminMain.edit.field_method'] = 'Metoda';
$lang['AdminMain.edit.field_type'] = 'Zpětné volání';
$lang['AdminMain.edit.field_event'] = 'Událost';
$lang['AdminMain.edit.field_callback'] = 'Zpětné volání';
$lang['AdminMain.edit.option_delete'] = 'Odstranit';
$lang['AdminMain.edit.heading_options'] = 'Možnosti';
$lang['AdminMain.edit.heading_parameter'] = 'Nové pole';
$lang['AdminMain.edit.heading_field'] = 'Původní pole';
$lang['AdminMain.edit.heading_fields_map'] = 'Mapa polí';
$lang['AdminMain.edit.heading_event'] = 'Událost';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Upravit webový háček';
$lang['AdminMain.add.text_fields_map'] = 'Tato část umožňuje přejmenovat název polí spouštěné události na vlastní název před jejich odesláním do zpětného volání. Podpole by měla být oddělena tečkou (např. vars.status). Chcete-li zobrazit seznam všech polí podporovaných jednotlivými událostmi, můžete se podívat na následující <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">odkaz</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Přidat webový háček';
$lang['AdminMain.add.field_add_field'] = 'Přidat pole';
$lang['AdminMain.add.field_method'] = 'Metoda';
$lang['AdminMain.add.field_type'] = 'Zpětné volání';
$lang['AdminMain.add.field_event'] = 'Událost';
$lang['AdminMain.add.field_callback'] = 'Zpětné volání';
$lang['AdminMain.add.option_delete'] = 'Odstranit';
$lang['AdminMain.add.heading_options'] = 'Možnosti';
$lang['AdminMain.add.heading_parameter'] = 'Nové pole';
$lang['AdminMain.add.heading_field'] = 'Původní pole';
$lang['AdminMain.add.heading_fields_map'] = 'Mapa polí';
$lang['AdminMain.add.heading_event'] = 'Událost';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Přidat webový háček';
$lang['AdminMain.index.no_results'] = 'Nejsou k dispozici žádné webové háčky.';
$lang['AdminMain.index.text_description_incoming'] = 'Přijme požadavek HTTP a spustí událost v systému pomocí parametrů přijatých v požadavku. Požadavek může být přijat pomocí GET, POST nebo JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Po spuštění události odešle požadavek HTTP na adresu URL. Požadavek lze odeslat pomocí GET, POST, PUT nebo JSON.';
$lang['AdminMain.index.option_delete'] = 'Odstranit';
$lang['AdminMain.index.option_edit'] = 'Upravit';
$lang['AdminMain.index.heading_options'] = 'Možnosti';
$lang['AdminMain.index.heading_method'] = 'Metoda';
$lang['AdminMain.index.heading_event'] = 'Událost';
$lang['AdminMain.index.heading_callback'] = 'Zpětné volání';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webové háčky';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Přidat webový háček';
$lang['AdminMain.index.category_outgoing'] = 'Odchozí';
$lang['AdminMain.index.category_incoming'] = 'Příchozí';
$lang['AdminMain.index.page_title_edit'] = 'Upravit webový háček';
$lang['AdminMain.index.page_title_add'] = 'Přidat webový háček';
$lang['AdminMain.index.page_title_index'] = 'Webové háčky';
$lang['AdminMain.modal.delete_text'] = 'Opravdu chcete tento webový háček odstranit?';
$lang['AdminMain.!success.webhook_deleted'] = 'Webový háček byl úspěšně odstraněn!';
$lang['AdminMain.!success.webhook_updated'] = 'Webový háček byl úspěšně aktualizován!';
$lang['AdminMain.!success.webhook_added'] = 'Webový háček byl úspěšně přidán!';
$lang['AdminMain.!tooltip.callback'] = 'Callback představuje místo, kam bude požadavek odeslán nebo přijat, pro odchozí webhooky musí být URL a pro příchozí webhooky musí být název URL, kde bude požadavek přijat. např. http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Zrušit';
$lang['AdminMain.add.field_cancel'] = 'Zrušit';
$lang['AdminMain.logs.no_results'] = 'Nejsou k dispozici žádné protokoly.';
$lang['AdminMain.logs.option_resend'] = 'Znovu odeslat';
$lang['AdminMain.logs.confirm_resend'] = 'Opravdu chcete tuto událost znovu odeslat?';
$lang['AdminMain.logs.field_filterdateend'] = 'Datum ukončení';
$lang['AdminMain.logs.field_filterdatestart'] = 'Datum zahájení';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Stav HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Událost';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Všechny webové háčky';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Možnosti';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Poslední opakovaný pokus';
$lang['AdminMain.logs.heading_date_triggered'] = 'Datum spuštění';
$lang['AdminMain.logs.heading_http_response'] = 'Odpověď HTTP';
$lang['AdminMain.logs.heading_method'] = 'Metoda';
$lang['AdminMain.logs.heading_response'] = 'Reakce';
$lang['AdminMain.logs.heading_event'] = 'Událost';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Zobrazit webové háčky';
$lang['AdminMain.logs.boxtitle_logs'] = 'Protokoly webhooku';
$lang['AdminMain.index.option_logs'] = 'Protokoly';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Zobrazit všechny protokoly';
$lang['AdminMain.index.page_title_logs'] = 'Protokoly webhooku';
$lang['AdminMain.!success.webhook_retried'] = 'Webový háček byl úspěšně vyzkoušen znovu!';

