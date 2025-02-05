<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Addebito per %1$s';
$lang['StripePayments.charge_description_default'] = 'Addebito per l\'importo specificato';
$lang['StripePayments.migrate_accounts'] = 'Migrare i conti';
$lang['StripePayments.warning_migrate_accounts'] = 'Non disinstallare il vecchio gateway Stripe prima di aver terminato di utilizzare questo strumento di migrazione. In questo modo lo strumento diventerà inaccessibile.';
$lang['StripePayments.text_migrate_accounts'] = 'È possibile migrare automaticamente i conti di pagamento archiviati fuori sede dal vecchio gateway Stripe a questo gateway Stripe Payments. I conti non archiviati fuori sede devono essere migrati creando manualmente nuovi conti di pagamento. Per evitare timeout, le migrazioni saranno eseguite in lotti di %1$s. Eseguire questa operazione il numero di volte necessario per migrare tutti i conti di pagamento.';
$lang['StripePayments.text_accounts_remaining'] = 'Conti rimanenti: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrare i vecchi conti di pagamento';
$lang['StripePayments.webhook_note'] = 'Si consiglia di configurare il seguente url come Webhook per gli eventi "payment_intent" nel proprio account Stripe.';
$lang['StripePayments.webhook'] = 'Webhook di Stripe';
$lang['StripePayments.tooltip_secret_key'] = 'La chiave segreta API è specifica per la modalità live o test. Assicuratevi di utilizzare la chiave corretta.';
$lang['StripePayments.tooltip_publishable_key'] = 'La chiave API pubblicabile è specifica per la modalità live o test. Assicuratevi di utilizzare la chiave corretta.';
$lang['StripePayments.secret_key'] = 'Chiave segreta API';
$lang['StripePayments.publishable_key'] = 'Chiave API pubblicabile';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Se si utilizzano i servizi di %1$s o si acquistano periodicamente prodotti aggiuntivi in base alle condizioni di %1$s, si autorizza %1$s ad addebitare periodicamente il proprio conto bancario. I pagamenti che non rientrano negli addebiti regolari autorizzati sopra saranno addebitati solo dopo aver ottenuto l\'autorizzazione dell\'utente.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Con l\'invio del presente modulo, l\'utente autorizza %1$s ad addebitare sul conto bancario sopra indicato qualsiasi importo dovuto per spese derivanti dall\'utilizzo dei servizi e/o dall\'acquisto di prodotti di %1$s, in conformità con il sito web e i termini di %1$s, fino alla revoca della presente autorizzazione. L\'utente può modificare o annullare la presente autorizzazione in qualsiasi momento dandone comunicazione a %1$s con un preavviso di 30 (trenta) giorni.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Secondo deposito';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Primo deposito';
$lang['StripePayments.ach_form.verification_notice'] = 'Abbiamo inviato due piccoli depositi su questo conto bancario. Per verificare questo conto, vi preghiamo di confermare gli importi di questi depositi.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Numero di conto corrente';
$lang['StripePayments.ach_form.field_account_number'] = 'Numero di conto';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Azienda';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individuale';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tipo di supporto';
$lang['StripePayments.ach_form.field_type'] = 'Tipo di conto';
$lang['StripePayments.description'] = 'Utilizza Stripe Elements e l\'API di richiesta di pagamento per gestire automaticamente 3D Secure e SCA e inviare le carte di credito direttamente tramite Stripe.';
$lang['StripePayments.name'] = 'Pagamenti con Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'Il gateway di pagamento ha restituito un errore durante l\'elaborazione della richiesta.';
$lang['StripePayments.!error.bank_account_unverified'] = 'È necessario verificare il conto bancario prima di poterlo utilizzare per effettuare un pagamento.';
$lang['StripePayments.!error.secret_key.valid'] = 'Impossibile connettersi all\'API di Stripe utilizzando la chiave segreta indicata.';
$lang['StripePayments.!error.secret_key.empty'] = 'Inserire una chiave segreta.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Inserire una chiave pubblicabile.';
$lang['StripePayments.!error.auth'] = 'Il gateway non è riuscito ad autenticarsi.';
$lang['StripePayments.request_three_d_secure_note'] = 'Se siete utenti di Stripe con sede in India, prima di salvare una nuova carta con Stripe dovete sempre eseguire l\'autenticazione 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Presentare la sfida 3D Secure ogni volta che un cliente salva un metodo di pagamento o elabora un metodo di pagamento (memorizzato o non memorizzato).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Presentare la sfida 3D Secure ogni volta che un cliente salva un metodo di pagamento o elabora un metodo di pagamento non memorizzato.';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Consentire a Stripe di determinare quando presentare una sfida 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Flusso di autenticazione 3D Secure';

