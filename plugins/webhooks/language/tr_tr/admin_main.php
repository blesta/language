<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.index.category_incoming'] = 'Gelen';
$lang['AdminMain.edit.text_fields_map'] = 'Bu bölüm, tetiklenen olayın alanlarının adını, geri aramaya gönderilmeden önce özel bir adla yeniden adlandırmanıza olanak tanır. Alt alanlar bir nokta ile ayrılmalıdır (örn. vars.status). Olayların her biri tarafından desteklenen tüm alanların bir listesini görmek için aşağıdaki <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a> adresini kontrol edebilirsiniz.';
$lang['AdminMain.edit.field_editsubmit'] = 'Web Kancasını Düzenle';
$lang['AdminMain.edit.field_add_field'] = 'Alan Ekle';
$lang['AdminMain.edit.field_method'] = 'Yöntem';
$lang['AdminMain.edit.field_type'] = 'Geri arama';
$lang['AdminMain.edit.field_event'] = 'Etkinlik';
$lang['AdminMain.edit.field_callback'] = 'Geri arama';
$lang['AdminMain.edit.option_delete'] = 'Silme';
$lang['AdminMain.edit.heading_options'] = 'Seçenekler';
$lang['AdminMain.edit.heading_parameter'] = 'Yeni Saha';
$lang['AdminMain.edit.heading_field'] = 'Orijinal Saha';
$lang['AdminMain.edit.heading_fields_map'] = 'Alanlar Haritası';
$lang['AdminMain.edit.heading_event'] = 'Etkinlik';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Web Kancasını Düzenle';
$lang['AdminMain.add.text_fields_map'] = 'Bu bölüm, tetiklenen olayın alanlarının adını, geri aramaya gönderilmeden önce özel bir adla yeniden adlandırmanıza olanak tanır. Alt alanlar bir nokta ile ayrılmalıdır (örn. vars.status). Olayların her biri tarafından desteklenen tüm alanların bir listesini görmek için aşağıdaki <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a> adresini kontrol edebilirsiniz.';
$lang['AdminMain.add.field_addsubmit'] = 'Web kancası ekle';
$lang['AdminMain.add.field_add_field'] = 'Alan Ekle';
$lang['AdminMain.add.field_method'] = 'Yöntem';
$lang['AdminMain.add.field_type'] = 'Geri arama';
$lang['AdminMain.add.field_event'] = 'Etkinlik';
$lang['AdminMain.add.field_callback'] = 'Geri arama';
$lang['AdminMain.add.option_delete'] = 'Silme';
$lang['AdminMain.add.heading_options'] = 'Seçenekler';
$lang['AdminMain.add.heading_parameter'] = 'Yeni Saha';
$lang['AdminMain.add.heading_field'] = 'Orijinal Saha';
$lang['AdminMain.add.heading_fields_map'] = 'Alanlar Haritası';
$lang['AdminMain.add.heading_event'] = 'Etkinlik';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Web kancası ekle';
$lang['AdminMain.index.no_results'] = 'Kullanılabilir web kancası yok.';
$lang['AdminMain.index.text_description_incoming'] = 'Bir HTTP isteği alır ve istekte alınan parametreleri kullanarak sistemde bir olayı tetikler. İstek GET, POST veya JSON kullanılarak alınabilir.';
$lang['AdminMain.index.text_description_outgoing'] = 'Bir olay tetiklendiğinde bir URL\'ye HTTP isteği gönderir. İstek GET, POST, PUT veya JSON kullanılarak gönderilebilir.';
$lang['AdminMain.index.option_delete'] = 'Silme';
$lang['AdminMain.index.option_edit'] = 'Düzenle';
$lang['AdminMain.index.heading_options'] = 'Seçenekler';
$lang['AdminMain.index.heading_method'] = 'Yöntem';
$lang['AdminMain.index.heading_event'] = 'Etkinlik';
$lang['AdminMain.index.heading_callback'] = 'Geri arama';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Webhooks';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Web kancası ekle';
$lang['AdminMain.index.category_outgoing'] = 'Giden';
$lang['AdminMain.index.page_title_edit'] = 'Web Kancasını Düzenle';
$lang['AdminMain.index.page_title_add'] = 'Web kancası ekle';
$lang['AdminMain.index.page_title_index'] = 'Webhooks';
$lang['AdminMain.modal.delete_text'] = 'Bu web kancasını silmek istediğinizden emin misiniz?';
$lang['AdminMain.!success.webhook_deleted'] = 'Web kancası başarıyla silindi!';
$lang['AdminMain.!success.webhook_updated'] = 'Web kancası başarıyla güncellendi!';
$lang['AdminMain.!success.webhook_added'] = 'Web kancası başarıyla eklendi!';
$lang['AdminMain.!tooltip.callback'] = 'Geri arama, isteğin gönderileceği veya alınacağı yeri temsil eder, giden web kancaları için bir URL olmalı ve gelen web kancaları için isteğin alınacağı URL\'nin adı olmalıdır. ör. http://blesta.com/plugin/webhooks/trigger/index/[Geri Arama Adı].';
$lang['AdminMain.edit.field_cancel'] = 'İptal';
$lang['AdminMain.add.field_cancel'] = 'İptal';
$lang['AdminMain.logs.no_results'] = 'Mevcut kayıt yok.';
$lang['AdminMain.logs.option_resend'] = 'Yeniden Gönder';
$lang['AdminMain.logs.confirm_resend'] = 'Bu etkinliği yeniden göndermek istediğinizden emin misiniz?';
$lang['AdminMain.logs.field_filterdateend'] = 'Bitiş Tarihi';
$lang['AdminMain.logs.field_filterdatestart'] = 'Başlangıç Tarihi';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'HTTP Durumu';
$lang['AdminMain.logs.field_filterevent'] = 'Etkinlik';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Tüm Web Kancaları';
$lang['AdminMain.logs.field_filterwebhook'] = 'Webhook';
$lang['AdminMain.logs.heading_options'] = 'Seçenekler';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Son Yeniden Deneme';
$lang['AdminMain.logs.heading_date_triggered'] = 'Tarih Tetiklendi';
$lang['AdminMain.logs.heading_http_response'] = 'HTTP Yanıtı';
$lang['AdminMain.logs.heading_method'] = 'Yöntem';
$lang['AdminMain.logs.heading_response'] = 'Yanıt';
$lang['AdminMain.logs.heading_event'] = 'Etkinlik';
$lang['AdminMain.logs.heading_webhook'] = 'Webhook';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Web Kancalarını Görüntüle';
$lang['AdminMain.logs.boxtitle_logs'] = 'Webhook Günlükleri';
$lang['AdminMain.index.option_logs'] = 'Günlükler';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Tüm Günlükleri Görüntüle';
$lang['AdminMain.index.page_title_logs'] = 'Webhook Günlükleri';
$lang['AdminMain.!success.webhook_retried'] = 'Web kancası başarıyla yeniden denendi!';

