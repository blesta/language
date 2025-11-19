<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Ta sekcja umożliwia zmianę nazwy pól wyzwalanego zdarzenia na nazwę niestandardową przed wysłaniem ich do wywołania zwrotnego. Podpola powinny być oddzielone kropką (np. vars.status). Aby zobaczyć listę wszystkich pól obsługiwanych przez każde ze zdarzeń, możesz sprawdzić następujące <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Edytuj Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Dodaj pole';
$lang['AdminMain.edit.field_method'] = 'Metoda';
$lang['AdminMain.edit.field_type'] = 'Wywołanie zwrotne';
$lang['AdminMain.edit.field_event'] = 'Wydarzenie';
$lang['AdminMain.edit.field_callback'] = 'Wywołanie zwrotne';
$lang['AdminMain.edit.option_delete'] = 'Usuń';
$lang['AdminMain.edit.heading_options'] = 'Opcje';
$lang['AdminMain.edit.heading_parameter'] = 'Nowe pole';
$lang['AdminMain.edit.heading_field'] = 'Oryginalne pole';
$lang['AdminMain.edit.heading_fields_map'] = 'Mapa pól';
$lang['AdminMain.edit.heading_event'] = 'Wydarzenie';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Edytuj Webhook';
$lang['AdminMain.add.text_fields_map'] = 'Ta sekcja umożliwia zmianę nazwy pól wyzwalanego zdarzenia na nazwę niestandardową przed wysłaniem ich do wywołania zwrotnego. Podpola powinny być oddzielone kropką (np. vars.status). Aby zobaczyć listę wszystkich pól obsługiwanych przez każde ze zdarzeń, możesz sprawdzić następujące <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Dodaj Webhook';
$lang['AdminMain.add.field_add_field'] = 'Dodaj pole';
$lang['AdminMain.add.field_method'] = 'Metoda';
$lang['AdminMain.add.field_type'] = 'Wywołanie zwrotne';
$lang['AdminMain.add.field_event'] = 'Wydarzenie';
$lang['AdminMain.add.field_callback'] = 'Wywołanie zwrotne';
$lang['AdminMain.add.option_delete'] = 'Usuń';
$lang['AdminMain.add.heading_options'] = 'Opcje';
$lang['AdminMain.add.heading_parameter'] = 'Nowe pole';
$lang['AdminMain.add.heading_field'] = 'Oryginalne pole';
$lang['AdminMain.add.heading_fields_map'] = 'Mapa pól';
$lang['AdminMain.add.heading_event'] = 'Wydarzenie';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Dodaj Webhook';
$lang['AdminMain.index.no_results'] = 'Nie ma dostępnych webhooków.';
$lang['AdminMain.index.text_description_incoming'] = 'Odbiera żądanie HTTP i wyzwala zdarzenie w systemie przy użyciu parametrów otrzymanych w żądaniu. Żądanie może zostać odebrane za pomocą GET, POST lub JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Wysyła żądanie HTTP do adresu URL po wyzwoleniu zdarzenia. Żądanie może być wysłane przy użyciu GET, POST, PUT lub JSON.';
$lang['AdminMain.index.option_delete'] = 'Usuń';
$lang['AdminMain.index.option_edit'] = 'Edytuj';
$lang['AdminMain.index.heading_options'] = 'Opcje';
$lang['AdminMain.index.heading_method'] = 'Metoda';
$lang['AdminMain.index.heading_event'] = 'Wydarzenie';
$lang['AdminMain.index.heading_callback'] = 'Wywołanie zwrotne';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Dodaj Webhook';
$lang['AdminMain.index.category_outgoing'] = 'Wychodzące';
$lang['AdminMain.index.category_incoming'] = 'Nadchodzące';
$lang['AdminMain.index.page_title_edit'] = 'Edytuj Webhook';
$lang['AdminMain.index.page_title_add'] = 'Dodaj Webhook';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Czy na pewno chcesz usunąć ten webhook?';
$lang['AdminMain.!success.webhook_deleted'] = 'Webhook został pomyślnie usunięty!';
$lang['AdminMain.!success.webhook_updated'] = 'Webhook został pomyślnie zaktualizowany!';
$lang['AdminMain.!success.webhook_added'] = 'Webhook został dodany pomyślnie!';
$lang['AdminMain.!tooltip.callback'] = 'Wywołanie zwrotne reprezentuje miejsce, w którym żądanie zostanie wysłane lub odebrane, w przypadku webhooków wychodzących musi to być adres URL, a w przypadku webhooków przychodzących musi to być nazwa adresu URL, pod którym żądanie zostanie odebrane. np. http://blesta.com/plugin/webhooks/trigger/index/[Nazwa wywołania zwrotnego].';
$lang['AdminMain.edit.field_cancel'] = 'Anuluj';
$lang['AdminMain.add.field_cancel'] = 'Anuluj';
$lang['AdminMain.logs.no_results'] = 'Nie ma dostępnych dzienników.';
$lang['AdminMain.logs.option_resend'] = 'Wyślij ponownie';
$lang['AdminMain.logs.confirm_resend'] = 'Czy na pewno chcesz ponownie wysłać to wydarzenie?';
$lang['AdminMain.logs.field_filterdateend'] = 'Data zakończenia';
$lang['AdminMain.logs.field_filterdatestart'] = 'Data rozpoczęcia';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Status HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Wydarzenie';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Wszystkie webhooki';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Opcje';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Ostatnia próba';
$lang['AdminMain.logs.heading_date_triggered'] = 'Data uruchomienia';
$lang['AdminMain.logs.heading_http_response'] = 'Odpowiedź HTTP';
$lang['AdminMain.logs.heading_method'] = 'Metoda';
$lang['AdminMain.logs.heading_response'] = 'Odpowiedź';
$lang['AdminMain.logs.heading_event'] = 'Wydarzenie';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Wyświetlanie webhooków';
$lang['AdminMain.logs.boxtitle_logs'] = 'Dzienniki webhooków';
$lang['AdminMain.index.option_logs'] = 'Dzienniki';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Wyświetl wszystkie dzienniki';
$lang['AdminMain.index.page_title_logs'] = 'Dzienniki webhooków';
$lang['AdminMain.!success.webhook_retried'] = 'Usługa webhook została pomyślnie ponowiona!';

