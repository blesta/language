<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'Faktura musi mieć co najmniej 2 wiersze do podziału.';
$lang['Invoices.!error.line_items.empty_split'] = 'Nie wybrano żadnej linii faktury do podziału.';
$lang['Invoices.!error.lines[][tax].format'] = 'Podatek od pozycji musi mieć wartość "prawda" lub "fałsz".';
$lang['Invoices.!error.lines[][amount].format'] = 'Koszt jednostkowy musi być liczbą.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Wprowadź ilość 1 lub więcej.';
$lang['Invoices.!error.lines[][qty].format'] = 'Ilość musi być liczbą.';
$lang['Invoices.!error.lines[][description].empty'] = 'Wprowadź opis pozycji.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'Nieprawidłowy identyfikator usługi.';
$lang['Invoices.!error.lines[][id].exists'] = 'Nieprawidłowy identyfikator pozycji.';
$lang['Invoices.!error.domain_renew.failed'] = 'Domeny mogą być odnawiane tylko na okres do 10 lat.';
$lang['Invoices.!error.invoice_id.draft'] = 'Podana faktura nie jest wersją roboczą faktury i dlatego nie mogła zostać usunięta.';
$lang['Invoices.!error.date_last_renewed.format'] = 'Data ostatniego odnowienia faktury cyklicznej musi być prawidłowym formatem daty.';
$lang['Invoices.!error.date_renews.format'] = 'Data odnowienia faktury cyklicznej musi być prawidłowym formatem daty.';
$lang['Invoices.!error.duration.format'] = 'Czas trwania jest nieprawidłowy.';
$lang['Invoices.!error.period.format'] = 'Okres jest nieprawidłowy.';
$lang['Invoices.!error.term.bounds'] = 'Termin powinien zawierać się w przedziale od 1 do 65535.';
$lang['Invoices.!error.term.format'] = 'Termin powinien być liczbą.';
$lang['Invoices.!error.delivery.exists'] = 'Podana metoda dostawy nie istnieje.';
$lang['Invoices.!error.currency.length'] = 'Kod waluty musi składać się z 3 znaków.';
$lang['Invoices.!error.status.format'] = 'Nieprawidłowy status.';
$lang['Invoices.!error.autodebit.valid'] = 'Wybierz, czy chcesz zezwolić na automatyczne obciążanie konta dla tej faktury.';
$lang['Invoices.!error.date_autodebit.format'] = 'Termin płatności ma nieprawidłowy format daty.';
$lang['Invoices.!error.date_closed.format'] = 'Data zamknięcia ma nieprawidłowy format daty.';
$lang['Invoices.!error.date_due.after_billed'] = 'Termin płatności musi przypadać w dniu lub po dniu wystawienia faktury.';
$lang['Invoices.!error.date_due.format'] = 'Termin płatności ma nieprawidłowy format daty.';
$lang['Invoices.!error.date_billed.format'] = 'Naliczona data ma nieprawidłowy format.';
$lang['Invoices.!error.client_id.exists'] = 'Nieprawidłowy identyfikator klienta.';
$lang['Invoices.!error.id.amount_applied'] = 'Linie faktury, waluta i status mogą nie zostać zaktualizowane, ponieważ kwota została już zastosowana do tej faktury.';
$lang['Invoices.!error.id_value.valid'] = 'Nie można określić wartości ID faktury.';
$lang['Invoices.!error.id_format.length'] = 'Format ID dla faktur nie może przekraczać 64 znaków.';
$lang['Invoices.!error.id_format.empty'] = 'Brak ustawionego formatu ID dla faktur.';
$lang['Invoices.!error.invoice_add.failed'] = 'Nie można utworzyć tej faktury. Spróbuj ponownie.';
$lang['Invoices.!error.delivery.length'] = 'Długość metody dostawy faktury nie może przekraczać 32 znaków.';
$lang['Invoices.!error.delivery.empty'] = 'Wprowadź metodę dostawy faktury.';
$lang['Invoices.!error.method.exists'] = 'Musisz ustawić co najmniej jedną metodę dostawy.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'Nieprawidłowy identyfikator faktury cyklicznej.';
$lang['Invoices.!error.invoice_id.exists'] = 'Nieprawidłowy identyfikator faktury.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Brak';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standard';
$lang['Invoices.status.void'] = 'Pustka';
$lang['Invoices.status.draft'] = 'Wersja robocza';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Aktywny';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Kupon %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Kupon %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Kredyt proporcjonalny';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Proporcjonalne dodanie %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Proporcjonalne dodanie %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Proporcjonalne dodanie %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Proporcjonalne dodanie %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Proporcjonalne dodanie %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Proporcjonalne dodanie %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Proporcjonalne dodanie %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Proporcjonalne dodanie %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Proporcjonalne dodanie %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Proporcjonalna aktualizacja %1$s od %2$sx %3$s do %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Proporcjonalna aktualizacja %1$s z %2$sx %3$s do %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Proporcjonalna aktualizacja %1$s od %2$sx %3$s do %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Rozłożona w czasie aktualizacja %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Aktualizacja proporcjonalna %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Rozłożona w czasie aktualizacja %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Rozłożona w czasie aktualizacja %1$s z %2$s do %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Proporcjonalna aktualizacja %1$s z %2$s do %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Rozłożona w czasie aktualizacja %1$s z %2$s do %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Aktualizacja proporcjonalna z %1$s do %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Aktualizacja proporcjonalna z %1$s do %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '%21B3↩ %1$s - %2$s Opłata instalacyjna';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Opłata instalacyjna';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Opłata za anulowanie';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Usunięte pozycje:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Usługa #%1$s została anulowana %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'PostalMethods';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Papier';
$lang['Invoices.getDeliveryMethods.email'] = 'E-mail';
$lang['Invoices.getPricingPeriods.year'] = 'Rok';
$lang['Invoices.getPricingPeriods.month'] = 'Miesiąc';
$lang['Invoices.getPricingPeriods.week'] = 'Tydzień';
$lang['Invoices.getPricingPeriods.day'] = 'Dzień';

