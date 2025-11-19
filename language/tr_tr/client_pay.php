<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Hiçbiri';
$lang['ClientPay.received.text_try_again'] = 'Tekrar Deneyin';
$lang['ClientPay.received.invoices'] = 'Fatura #';
$lang['ClientPay.received.amount'] = 'Miktar';
$lang['ClientPay.received.transaction_id'] = 'İşlem Kimliği';
$lang['ClientPay.received.statement'] = 'Ödemeniz işleme alınıyor.';
$lang['ClientPay.received.boxtitle_received'] = 'Teşekkür ederim!';
$lang['ClientPay.received.page_title'] = 'Müşteri %1$s Ödeme Alındı';
$lang['ClientPay.confirm.description_credit'] = 'Ödeme Kredisi';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Fatura #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Ödeme Düzenle';
$lang['ClientPay.confirm.field_submit'] = 'Ödeme Gönder';
$lang['ClientPay.confirm.total'] = 'Toplam:';
$lang['ClientPay.confirm.account_exp'] = 'son kullanma tarihi %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '3$s ile biten %1$s (%2$s)';
$lang['ClientPay.confirm.payment_details'] = 'Ödeme Detayları';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Ödemeyi Onayla';
$lang['ClientPay.confirm.page_title'] = 'Müşteri %1$s Ödemeyi Onayla';
$lang['ClientPay.multipleinvoices.no_results'] = 'Bu para biriminde fatura bulunmamaktadır.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Son Tarih';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Fatura #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Ödenmesi Gereken Tutar';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Ödenecek Tutar';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Bunun Yerine Kısmi Ödeme Yapın';
$lang['ClientPay.method.invoice_amount'] = 'Miktar';
$lang['ClientPay.method.invoice_quantity'] = 'Miktar';
$lang['ClientPay.method.invoice_description'] = 'Açıklama';
$lang['ClientPay.method.heading_invoice'] = 'Fatura #%1$s';
$lang['ClientPay.method.no_options'] = 'Herhangi bir ödeme seçeneği mevcut değildir.';
$lang['ClientPay.method.field_credit_submit'] = 'Kredi Başvurusu Yapın ve Devam Edin';
$lang['ClientPay.method.field_submit'] = 'İnceleyin ve Onaylayın';
$lang['ClientPay.method.field_apply_credit'] = 'Kredi Başvurusu (%1$s Mevcut)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'ACH Hesapları';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Otomatik Borç) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Kredi Kartı Hesapları';
$lang['ClientPay.method.heading_payment_options'] = 'Ödeme Seçenekleri';
$lang['ClientPay.method.heading_other_payment_options'] = 'Diğer Ödeme Seçenekleri';
$lang['ClientPay.method.field_newdetails'] = 'Yeni Ödeme Detayları';
$lang['ClientPay.method.field_useaccount'] = 'Ödeme Hesabını Kullan';
$lang['ClientPay.method.boxtitle_method'] = 'Ödeme Yapın';
$lang['ClientPay.method.page_title'] = 'Müşteri %1$s Ödeme Yöntemi';
$lang['ClientPay.index.field_submit'] = 'Devam et';
$lang['ClientPay.index.field_credit'] = 'Diğer Ödeme Tutarı';
$lang['ClientPay.index.boxtitle_pay'] = 'Ödeme Yapın';
$lang['ClientPay.index.page_title'] = 'Müşteri %1$s Ödeme';
$lang['ClientPay.!error.payment_authorize'] = 'Seçilen ödeme hesabı için ödeme yetkilendirilemedi.  Lütfen farklı bir hesap seçin veya tekrar deneyin.';
$lang['ClientPay.!error.invoice_voided'] = 'Bu fatura geçersiz kılınmıştır ve ödenemez.';
$lang['ClientPay.!error.payment_amounts'] = 'Lütfen ödenecek faturaları seçin veya başka bir ödeme tutarı girin.';
$lang['ClientPay.!error.invalid_amount'] = 'Diğer ödeme tutarları negatif olmayabilir.';
$lang['ClientPay.!error.invalid_details'] = 'Lütfen bir ödeme seçeneği seçiniz.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Ödeme yapmak için kullanmadan önce bu hesabı doğrulamanız gerekir. Bu işlem sizi mevcut sayfadan uzaklaştıracaktır.';
$lang['ClientPay.!info.ach_verification'] = 'Bir ödeme yapmak için kullanmadan önce bu hesabı doğrulamanız gerekir.';
$lang['ClientPay.!info.unverified_email_button'] = 'Doğrulama E-postasını Yeniden Gönder';
$lang['ClientPay.!info.unverified_email'] = 'Verdiğiniz e-posta adresine bir bağlantı gönderildi. Ödeme yapmaya devam etmeden önce e-posta adresinizi doğrulamak için lütfen e-postadaki bağlantıya tıklayın.';
$lang['ClientPay.!success.invoice_paid'] = 'Bu fatura daha önce ödenmiştir.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Mevcut krediler uygulandı, ancak hala bir bakiye var. Lütfen aşağıdaki kalanı ödeyerek bu işlemi tamamlayın.';
$lang['ClientPay.!success.credit_full_processed'] = 'Mevcut krediler uygulanmıştır.';
$lang['ClientPay.!success.payment_processed'] = 'Ödeme %1$s için başarıyla işlendi. İşlem Numarası: %2$s';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Ödenmesi Gereken Bakiye';
$lang['ClientPay.method.invoice_paid_amount'] = 'Ödenen Tutar';
$lang['ClientPay.method.invoice_total'] = 'Fatura Toplamı';
$lang['ClientPay.index.text_credit_max_only'] = 'Maksimum Miktar: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Minimum Miktar: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Minimum Tutar: %1$s - Maksimum Tutar: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Kredi tutarı %1$s adresini geçemez.';
$lang['ClientPay.!error.credit_minimum'] = 'Kredi tutarı en az %1$s olmalıdır.';

