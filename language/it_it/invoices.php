<?php
/**
 * Invoices
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Invoices.!error.line_items.minimum_split'] = 'La fattura deve avere almeno 2 righe per essere suddivisa.';
$lang['Invoices.!error.line_items.empty_split'] = 'Non è stata selezionata alcuna riga di fattura da dividere.';
$lang['Invoices.!error.lines[][tax].format'] = 'L\'imposta di riga deve essere "vera" o "falsa".';
$lang['Invoices.!error.lines[][amount].format'] = 'Il costo unitario deve essere un numero.';
$lang['Invoices.!error.lines[][qty].minimum'] = 'Inserire una quantità pari o superiore a 1.';
$lang['Invoices.!error.lines[][qty].format'] = 'La quantità deve essere un numero.';
$lang['Invoices.!error.lines[][description].empty'] = 'Inserire una descrizione della voce.';
$lang['Invoices.!error.lines[][service_id].exists'] = 'ID servizio non valido.';
$lang['Invoices.!error.lines[][id].exists'] = 'ID voce non valido.';
$lang['Invoices.!error.domain_renew.failed'] = 'I domini possono essere rinnovati solo per un massimo di 10 anni.';
$lang['Invoices.!error.invoice_id.draft'] = 'La fattura indicata non è una bozza di fattura e pertanto non è stato possibile eliminarla.';
$lang['Invoices.!error.date_last_renewed.format'] = 'La data dell\'ultimo rinnovo della fattura ricorrente deve essere un formato di data valido.';
$lang['Invoices.!error.date_renews.format'] = 'La data di rinnovo della fattura ricorrente deve essere un formato di data valido.';
$lang['Invoices.!error.duration.format'] = 'La durata non è valida.';
$lang['Invoices.!error.period.format'] = 'Il periodo non è valido.';
$lang['Invoices.!error.term.bounds'] = 'Il termine deve essere compreso tra 1 e 65535.';
$lang['Invoices.!error.term.format'] = 'Il termine dovrebbe essere un numero.';
$lang['Invoices.!error.delivery.exists'] = 'Il metodo di consegna indicato non esiste.';
$lang['Invoices.!error.currency.length'] = 'Il codice della valuta deve essere di 3 caratteri.';
$lang['Invoices.!error.status.format'] = 'Stato non valido.';
$lang['Invoices.!error.autodebit.valid'] = 'Selezionare se consentire o meno l\'autoaddebito per questa fattura.';
$lang['Invoices.!error.date_autodebit.format'] = 'La data di scadenza è in un formato non valido.';
$lang['Invoices.!error.date_closed.format'] = 'La data di chiusura è in un formato non valido.';
$lang['Invoices.!error.date_due.after_billed'] = 'La data di scadenza deve essere uguale o successiva alla data di fatturazione.';
$lang['Invoices.!error.date_due.format'] = 'La data di scadenza è in un formato non valido.';
$lang['Invoices.!error.date_billed.format'] = 'La data di fatturazione è in un formato non valido.';
$lang['Invoices.!error.client_id.exists'] = 'ID cliente non valido.';
$lang['Invoices.!error.id.amount_applied'] = 'Le righe della fattura, la valuta e lo stato potrebbero non essere aggiornati perché un importo è già stato applicato a questa fattura.';
$lang['Invoices.!error.id_value.valid'] = 'Impossibile determinare il valore dell\'ID della fattura.';
$lang['Invoices.!error.id_format.length'] = 'Il formato ID delle fatture non può superare i 64 caratteri.';
$lang['Invoices.!error.id_format.empty'] = 'Nessun formato ID impostato per le fatture.';
$lang['Invoices.!error.invoice_add.failed'] = 'Non è stato possibile creare questa fattura. Riprovare.';
$lang['Invoices.!error.delivery.length'] = 'La lunghezza del metodo di consegna della fattura non può superare i 32 caratteri.';
$lang['Invoices.!error.delivery.empty'] = 'Inserire un metodo di consegna della fattura.';
$lang['Invoices.!error.method.exists'] = 'È necessario impostare almeno un metodo di consegna.';
$lang['Invoices.!error.invoice_recur_id.exists'] = 'ID fattura ricorrente non valido.';
$lang['Invoices.!error.invoice_id.exists'] = 'ID fattura non valido.';
$lang['Invoices.cache_methods.json_pdf'] = 'JSON + PDF';
$lang['Invoices.cache_methods.json'] = 'JSON';
$lang['Invoices.cache_methods.none'] = 'Nessuno';
$lang['Invoices.types.proforma'] = 'Pro forma';
$lang['Invoices.types.standard'] = 'Standard';
$lang['Invoices.status.void'] = 'Vuoto';
$lang['Invoices.status.draft'] = 'Bozza';
$lang['Invoices.status.proforma'] = 'Pro forma';
$lang['Invoices.status.active'] = 'Attivo';
$lang['Invoices.!line_item.recurring_renew_description'] = '%1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = 'Coupon %1$s - %2$s%%';
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = 'Coupon %1$s';
$lang['Invoices.!line_item.prorated_credit'] = 'Credito Prorogato';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_onetime'] = '↳ Aggiunta proporzionale di %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_qty_date'] = '↳ Aggiunta proporzionale di %1$s %2$sx %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_qty'] = '↳ Aggiunta proporzionale di %1$s %2$sx %3$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_onetime'] = '↳ Addizione proporzionale di %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_text_date'] = '↳ Aggiunta proporzionale di %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_addition_text'] = '↳ Addizione proporzionale di %1$s';
$lang['Invoices.!line_item.service_option_prorated_addition_onetime'] = '↳ Addizione proporzionale di %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_addition_date'] = '↳ Aggiunta proporzionale di %1$s %2$s (%3$s - %4$s)';
$lang['Invoices.!line_item.service_option_prorated_addition'] = '↳ Addizione proporzionale di %1$s %2$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_onetime'] = '↳ Aggiornamento proporzionale di %1$s da %2$sx %3$s a %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty_date'] = '↳ Aggiornamento proporzionale di %1$s da %2$sx %3$s a %4$sx %5$s (%6$s - %7$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_qty'] = '↳ Aggiornamento proporzionale di %1$s da %2$sx %3$s a %4$sx %5$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_onetime'] = '↳ Aggiornamento proporzionale di %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text_date'] = '↳ Aggiornamento proporzionale di %1$s (%2$s - %3$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = '↳ Aggiornamento proporzionale di %1$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_onetime'] = '↳ Aggiornamento proporzionale di %1$s da %2$s a %3$s';
$lang['Invoices.!line_item.service_option_prorated_upgrade_date'] = '↳ Aggiornamento proporzionale di %1$s da %2$s a %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_prorated_upgrade'] = '↳ Aggiornamento proporzionale di %1$s da %2$s a %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = 'Aggiornamento proporzionale da %1$s a %2$s - %3$s';
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = 'Aggiornamento proporzionale da %1$s a %2$s - %3$s (%4$s - %5$s)';
$lang['Invoices.!line_item.service_option_setup_fee_description'] = '↳ %1$s - %2$s Costo di installazione';
$lang['Invoices.!line_item.service_option_renew_description'] = '↳ %1$s - %2$s';
$lang['Invoices.!line_item.service_setup_fee_description'] = '%1$s - %2$s Costo di installazione';
$lang['Invoices.!line_item.service_cancel_fee_description'] = '%1$s - %2$s Tassa di annullamento';
$lang['Invoices.!line_item.service_renew_description'] = '%5$s%1$s - %2$s (%3$s - %4$s)';
$lang['Invoices.!note_private.line_item'] = '- %1$s @ %2$s: %3$s';
$lang['Invoices.!note_private.removed_lines'] = 'Voci eliminate:';
$lang['Invoices.!note_private.service_cancel_date'] = 'Servizio #%1$s annullato %2$s.';
$lang['Invoices.getDeliveryMethods.postalmethods'] = 'Metodi postali';
$lang['Invoices.getDeliveryMethods.interfax'] = 'InterFax';
$lang['Invoices.getDeliveryMethods.paper'] = 'Carta';
$lang['Invoices.getDeliveryMethods.email'] = 'Email';
$lang['Invoices.getPricingPeriods.year'] = 'Anno';
$lang['Invoices.getPricingPeriods.month'] = 'Mese';
$lang['Invoices.getPricingPeriods.week'] = 'Settimana';
$lang['Invoices.getPricingPeriods.day'] = 'Giorno';
$lang['Invoices.!error.invoice_id.unique'] = 'La fattura di destinazione non può far parte delle fatture da unire.';
$lang['Invoices.!error.invoice_id.status'] = 'La fattura di destinazione deve essere aperta e senza transazioni.';
$lang['Invoices.!error.invoice_ids.client'] = 'Tutte le fatture devono appartenere allo stesso cliente.';
$lang['Invoices.!error.invoice_ids.status'] = 'Tutte le fatture devono essere aperte e senza transazioni.';
$lang['Invoices.!error.invoice_ids.currency'] = 'Tutte le fatture devono avere la stessa valuta.';
$lang['Invoices.!error.invoice_ids.count'] = 'Devono essere selezionate almeno due fatture.';
$lang['Invoices.!line_item.parent_description'] = 'Servizio Infanzia di %1$s - %2$s:';

