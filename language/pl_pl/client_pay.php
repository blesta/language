<?php
/**
 * Client Pay
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientPay.setcontactview.text_none'] = 'Brak';
$lang['ClientPay.received.text_try_again'] = 'Spróbuj ponownie';
$lang['ClientPay.received.invoices'] = 'Faktura #';
$lang['ClientPay.received.amount'] = 'Kwota';
$lang['ClientPay.received.transaction_id'] = 'Identyfikator transakcji';
$lang['ClientPay.received.statement'] = 'Płatność jest przetwarzana.';
$lang['ClientPay.received.boxtitle_received'] = 'Dziękuję!';
$lang['ClientPay.received.page_title'] = 'Klient %1$s Otrzymana płatność';
$lang['ClientPay.confirm.description_credit'] = 'Kredyt płatniczy';
$lang['ClientPay.confirm.description_invoice_number'] = '#%1$s';
$lang['ClientPay.confirm.description_invoice_separator'] = ',';
$lang['ClientPay.confirm.description_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.confirm.field_edit'] = 'Edytuj płatność';
$lang['ClientPay.confirm.field_submit'] = 'Prześlij płatność';
$lang['ClientPay.confirm.total'] = 'Łącznie:';
$lang['ClientPay.confirm.account_exp'] = 'wygasa %1$s';
$lang['ClientPay.confirm.account_info_type'] = '%1$s';
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) kończące się na %3$s';
$lang['ClientPay.confirm.payment_details'] = 'Szczegóły płatności';
$lang['ClientPay.confirm.boxtitle_confirm'] = 'Potwierdź płatność';
$lang['ClientPay.confirm.page_title'] = 'Klient %1$s potwierdza płatność';
$lang['ClientPay.multipleinvoices.no_results'] = 'Nie ma faktur w tej walucie.';
$lang['ClientPay.multipleinvoices.text_datedue'] = 'Data wymagalności';
$lang['ClientPay.multipleinvoices.text_invoice'] = 'Faktura #';
$lang['ClientPay.multipleinvoices.text_due'] = 'Należna kwota';
$lang['ClientPay.multipleinvoices.text_amount'] = 'Kwota do zapłaty';
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = 'Zamiast tego dokonaj płatności częściowej';
$lang['ClientPay.method.invoice_amount'] = 'Kwota';
$lang['ClientPay.method.invoice_quantity'] = 'Ilość';
$lang['ClientPay.method.invoice_description'] = 'Opis';
$lang['ClientPay.method.heading_invoice'] = 'Faktura #%1$s';
$lang['ClientPay.method.no_options'] = 'Nie ma dostępnych opcji płatności.';
$lang['ClientPay.method.field_credit_submit'] = 'Zastosuj kredyt i kontynuuj';
$lang['ClientPay.method.field_submit'] = 'Sprawdź i potwierdź';
$lang['ClientPay.method.field_apply_credit'] = 'Zastosuj kredyt (%1$s dostępne)';
$lang['ClientPay.method.field_paymentaccount_ach'] = 'Konta ACH';
$lang['ClientPay.method.field_paymentaccount_autodebit'] = '(Automatyczne obciążenie) %1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.field_paymentaccount_cc'] = 'Rachunki kart kredytowych';
$lang['ClientPay.method.field_paymentaccount'] = '%1$s %2$s - %3$s x%4$s';
$lang['ClientPay.method.heading_payment_options'] = 'Opcje płatności';
$lang['ClientPay.method.heading_other_payment_options'] = 'Inne opcje płatności';
$lang['ClientPay.method.field_newdetails'] = 'Nowe szczegóły płatności';
$lang['ClientPay.method.field_useaccount'] = 'Użyj konta płatności';
$lang['ClientPay.method.boxtitle_method'] = 'Dokonaj płatności';
$lang['ClientPay.method.page_title'] = 'Metoda płatności klienta %1$s';
$lang['ClientPay.index.field_submit'] = 'Kontynuować';
$lang['ClientPay.index.field_credit'] = 'Inna kwota płatności';
$lang['ClientPay.index.boxtitle_pay'] = 'Dokonaj płatności';
$lang['ClientPay.index.page_title'] = 'Klient %1$s Pay';
$lang['ClientPay.!error.payment_authorize'] = 'Nie można autoryzować płatności dla wybranego konta płatniczego.  Wybierz inne konto lub spróbuj ponownie.';
$lang['ClientPay.!error.invoice_voided'] = 'Ta faktura została anulowana i nie może zostać opłacona.';
$lang['ClientPay.!error.payment_amounts'] = 'Wybierz faktury do opłacenia lub wprowadź inną kwotę płatności.';
$lang['ClientPay.!error.invalid_amount'] = 'Inne kwoty płatności nie mogą być ujemne.';
$lang['ClientPay.!error.invalid_details'] = 'Wybierz opcję płatności.';
$lang['ClientPay.!info.ach_verification_redirect'] = 'Musisz zweryfikować to konto, zanim będziesz mógł go użyć do dokonania płatności. Proces ten spowoduje przekierowanie z bieżącej strony.';
$lang['ClientPay.!info.ach_verification'] = 'Musisz zweryfikować to konto, zanim będziesz mógł użyć go do dokonania płatności.';
$lang['ClientPay.!info.unverified_email_button'] = 'Wyślij ponownie e-mail weryfikacyjny';
$lang['ClientPay.!info.unverified_email'] = 'Na podany adres e-mail został wysłany link. Kliknij łącze w wiadomości e-mail, aby zweryfikować swój adres e-mail przed dokonaniem płatności.';
$lang['ClientPay.!success.invoice_paid'] = 'Ta faktura została wcześniej opłacona.';
$lang['ClientPay.!success.credit_partial_processed'] = 'Dostępne kredyty zostały zastosowane, ale saldo nadal istnieje. Dokończ transakcję, wpłacając pozostałą kwotę poniżej.';
$lang['ClientPay.!success.credit_full_processed'] = 'Dostępne kredyty zostały zastosowane.';
$lang['ClientPay.!success.payment_processed'] = 'Płatność za %1$s została pomyślnie przetworzona. Numer transakcji: %2$s';
$lang['ClientPay.method.invoice_balance_due'] = 'Saldo do zapłaty';
$lang['ClientPay.method.invoice_paid_amount'] = 'Zapłacona kwota';
$lang['ClientPay.method.invoice_total'] = 'Faktura Razem';
$lang['ClientPay.index.text_credit_max_only'] = 'Maksymalna kwota: %1$s';
$lang['ClientPay.index.text_credit_min_only'] = 'Minimalna kwota: %1$s';
$lang['ClientPay.index.text_credit_limits'] = 'Kwota minimalna: %1$s - Kwota maksymalna: %2$s';
$lang['ClientPay.!error.credit_maximum'] = 'Kwota kredytu nie może przekroczyć %1$s.';
$lang['ClientPay.!error.credit_minimum'] = 'Kwota kredytu musi wynosić co najmniej %1$s.';

