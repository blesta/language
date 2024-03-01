<?php
/**
 * Services
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Services.getActions.update_coupon'] = 'Aggiornamento del coupon';
$lang['Services.getActions.change_renew'] = 'Modifica della data di rinnovo';
$lang['Services.getActions.schedule_cancel'] = 'Cancellazione del programma';
$lang['Services.getActions.cancel'] = 'Annullamento';
$lang['Services.getActions.unsuspend'] = 'Non sospendere';
$lang['Services.getActions.suspend'] = 'Sospendere';
$lang['Services.getStatusTypes.in_review'] = 'In rassegna';
$lang['Services.getStatusTypes.suspended'] = 'Sospeso';
$lang['Services.getStatusTypes.pending'] = 'In attesa';
$lang['Services.getStatusTypes.canceled'] = 'Annullato';
$lang['Services.getStatusTypes.active'] = 'Attivo';
$lang['Services.!error.prorate.format'] = 'L\'opzione di proroga deve essere impostata su "true" o "false".';
$lang['Services.!error.service_id.has_children'] = 'Questo servizio non può essere cancellato perché contiene servizi per bambini. Cancellare o eliminare questi servizi e riprovare.';
$lang['Services.!error.status.valid'] = 'Possono essere cancellati solo i servizi in attesa, cancellati o in fase di revisione.';
$lang['Services.!error.configoptions.valid'] = 'Una delle opzioni configurabili selezionate non è valida per il servizio.';
$lang['Services.!error.date_canceled.valid'] = 'È necessario impostare una data valida per annullare questo servizio.';
$lang['Services.!error.pricing_id.valid'] = 'È necessario selezionare un termine valido.';
$lang['Services.!error.invoice_method.valid'] = 'È necessario selezionare un metodo di fatturazione valido.';
$lang['Services.!error.fields[][encrypted].format'] = 'Un campo di servizio per la crittografia ha un formato non valido.';
$lang['Services.!error.fields[][value].empty'] = 'Un valore è vuoto nei campi del servizio.';
$lang['Services.!error.fields[][key].empty'] = 'Una chiave è vuota nei campi del servizio.';
$lang['Services.!error.use_module.format'] = 'Formato del modulo di utilizzo non valido.';
$lang['Services.!error.date_canceled.format'] = 'Formato della data annullata non valido.';
$lang['Services.!error.date_suspended.format'] = 'Formato della data sospesa non valido.';
$lang['Services.!error.date_last_renewed.format'] = 'Formato della data dell\'ultimo rinnovo non valido.';
$lang['Services.!error.date_renews.valid'] = 'La data di rinnovo deve essere maggiore dell\'ultima data di rinnovo di %1$s.';
$lang['Services.!error.date_renews.format'] = 'Formato della data di rinnovo non valido.';
$lang['Services.!error.date_added.format'] = 'Formato aggiunto alla data non valido.';
$lang['Services.!error.status.format'] = 'Stato non valido.';
$lang['Services.!error.override_currency.format'] = 'Selezionare una valuta valida.';
$lang['Services.!error.override_price.override'] = 'Per sovrascrivere il prezzo corrente è necessario impostare sia il prezzo che la valuta.';
$lang['Services.!error.override_price.format'] = 'Il prezzo di sovrapposizione deve essere un numero.';
$lang['Services.!error.module_group.valid'] = 'Il gruppo di moduli non esiste.';
$lang['Services.!error.module_row.valid'] = 'La riga del modulo non esiste.';
$lang['Services.!error.qty.available'] = 'Il limite di quantità è stato raggiunto. Se possibile, selezionare una quantità inferiore.';
$lang['Services.!error.qty.length'] = 'La lunghezza della quantità non può superare i 10 caratteri.';
$lang['Services.!error.qty.format'] = 'La quantità deve essere un numero.';
$lang['Services.!error.coupon_id.valid'] = 'Il coupon non sembra essere valido.';
$lang['Services.!error.module_row_id.exists'] = 'ID riga modulo non valido.';
$lang['Services.!error.client_id.allowed'] = 'Il client non può accedere a quel pacchetto.';
$lang['Services.!error.client_id.exists'] = 'Il client non esiste.';
$lang['Services.!error.pricing_id.overrides'] = 'Il termine del pacchetto non può essere modificato quando vengono impostati gli scavalchi di prezzo.';
$lang['Services.!error.pricing_id.exists'] = 'Selezionare un termine valido.';
$lang['Services.!error.id_value.valid'] = 'Impossibile determinare il valore dell\'ID della fattura.';
$lang['Services.!error.id_format.length'] = 'Il formato ID delle fatture non può superare i 64 caratteri.';
$lang['Services.!error.id_format.empty'] = 'Nessun formato ID impostato per le fatture.';
$lang['Services.!error.package_group_id.exists'] = 'ID gruppo di pacchetti non valido.';
$lang['Services.!error.parent_service_id.parent'] = 'L\'ID del servizio padre esiste già come figlio di un altro servizio.';
$lang['Services.!error.parent_service_id.exists'] = 'ID servizio genitore non valido.';
$lang['Services.!error.service_id.exists'] = 'ID servizio non valido.';
$lang['Services.!error.move.unpaid_invoices'] = 'Il servizio non può essere trasferito a un altro cliente, perché ha fatture non pagate.';
$lang['Services.!error.encrypted.format'] = 'Formato non valido per la crittografia.';
$lang['Services.!error.value.empty'] = 'Il valore del campo servizio non deve essere vuoto.';
$lang['Services.!error.key.length'] = 'La chiave del campo di servizio non deve superare i 32 caratteri.';
$lang['Services.!error.key.empty'] = 'La chiave del campo di servizio non deve essere vuota.';

