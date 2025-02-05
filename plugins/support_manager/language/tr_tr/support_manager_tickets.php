<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Bu bilet %1$s\'a yeniden atandı. Önceki müşteri yanıtları bu müşteriye yeniden atandı ve başka bir kişi tarafından yapılmış olabilir.';
$lang['SupportManagerTickets.log.unassigned'] = 'Atanmamış';
$lang['SupportManagerTickets.log.status'] = 'Durum %1$s olarak değiştirildi.';
$lang['SupportManagerTickets.log.priority'] = 'Öncelik %1$s olarak değiştirildi.';
$lang['SupportManagerTickets.log.summary'] = 'Özet güncellenmiştir.';
$lang['SupportManagerTickets.log.department_id'] = 'Departman %1$s olarak değiştirildi.';
$lang['SupportManagerTickets.type.log'] = 'Günlük';
$lang['SupportManagerTickets.type.note'] = 'Not';
$lang['SupportManagerTickets.type.reply'] = 'Yanıtla';
$lang['SupportManagerTickets.status.trash'] = 'Çöp';
$lang['SupportManagerTickets.status.closed'] = 'Kapalı';
$lang['SupportManagerTickets.status.on_hold'] = 'Beklemede';
$lang['SupportManagerTickets.status.in_progress'] = 'Devam Ediyor';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Müşteri Yanıtı Bekleniyor';
$lang['SupportManagerTickets.status.open'] = 'Personel Cevabı Bekleniyor';
$lang['SupportManagerTickets.priority.low'] = 'Düşük';
$lang['SupportManagerTickets.priority.medium'] = 'Orta';
$lang['SupportManagerTickets.priority.high'] = 'Yüksek';
$lang['SupportManagerTickets.priority.critical'] = 'Kritik';
$lang['SupportManagerTickets.priority.emergency'] = 'Acil Durum';
$lang['SupportManagerTickets.merge.reply'] = 'Bu bilet #%1$s numaralı biletle birleştirildi.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'En az bir bilet, verilen müşteri ile aynı şirkete ait değildir.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'En az bir bilet kimliği geçersiz.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Biletlerden en az biri aynı şirkete ait olmadığı için verilen departmana atanamamıştır.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Biletlerden en az biri, ilişkili müşteriye ait olmadığı için verilen hizmete atanamadı.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Bilet kendisiyle birleştirilemez.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Seçilen en az bir bilet geçersiz, kapalı veya seçilen biletle aynı müşteriye ait değil.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Bilet yanıt notları, bir bilet yanıtı da eklenmeden ayrı bir bilete bölünemez.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'En az bir bilet yanıt kimliği geçersiz veya tüm yanıtlar seçildi. En az bir yanıt bırakmalısınız.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Bilet yanıtı farklı bir istemciden gelmeyebilir.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Lütfen bu biletle ilgili bazı ayrıntıları girin.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Yeni biletlerin yanıt türü \'yanıt\' olmalıdır.';
$lang['SupportManagerTickets.!error.type.format'] = 'Lütfen geçerli bir yanıt türü seçin.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'Geçersiz bilet kimliği.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Bilet kapanış tarihi geçersiz bir tarih biçimindedir.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Bilet güncelleme tarihi geçersiz bir tarih biçimindedir.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Bilet ekleme tarihi geçersiz bir tarih biçimindedir.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Çöpe atılan bir bilet düzenlenemez.';
$lang['SupportManagerTickets.!error.status.format'] = 'Lütfen geçerli bir durum seçin.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Lütfen geçerli bir öncelik seçin.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Özetin uzunluğu 255 karakteri geçemez.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Lütfen bir özet girin.';
$lang['SupportManagerTickets.!error.email.format'] = 'Lütfen geçerli bir e-posta adresi girin.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Bilet başka bir müşteriye aittir ve atanan müşteri değiştirilemez.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'Geçersiz müşteri kimliği.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Seçilen hizmet geçersiz.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Bu bilet için seçilen hizmet mevcut değil.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Düzenlemeyi gerçekleştirecek olarak ayarlanan personel mevcut değil.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Kişi, geçerli bir müşteri olmadan bilete yanıt veremez.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Bu bilet yanıtı için seçilen kişi mevcut değil.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'Geçersiz personel kimliği.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Lütfen geçerli bir departman seçin.';
$lang['SupportManagerTickets.!error.code.format'] = 'Bilet kodu yalnızca rakam içermelidir.';
$lang['SupportManagerTickets.log.ticket_staff_id'] = '%1$s\'e atandı.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Lütfen bu departman için geçerli bir öncelik seçin.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Bilet kontaklarından en az biri geçersiz.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Bilet alıcılarından en az biri geçersiz.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Bilet alıcılarından en az biri mükerrerdir.';

