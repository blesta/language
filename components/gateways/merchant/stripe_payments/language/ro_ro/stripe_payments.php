<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Nu s-a găsit contul bancar al acestui client.';
$lang['StripePayments.!error.ach.unverified'] = 'Contul bancar nu a putut fi verificat. Vă rugăm să verificați sumele depuse și să încercați din nou.';
$lang['StripePayments.!error.auth'] = 'Poarta nu s-a putut autentifica.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Trebuie să vă verificați contul bancar înainte de a-l putea utiliza pentru a efectua o plată.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Vă rugăm să introduceți o sumă validă pentru suma maximă a plății recurente.';
$lang['StripePayments.!error.invalid_request_error'] = 'Poarta de plată a returnat o eroare la procesarea cererii.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Vă rugăm să introduceți o cheie publicabilă.';
$lang['StripePayments.!error.secret_key.empty'] = 'Vă rugăm să introduceți o cheie secretă.';
$lang['StripePayments.!error.secret_key.valid'] = 'Nu se poate conecta la Stripe API folosind cheia secretă dată.';
$lang['StripePayments.ach_form.field_account_number'] = 'Număr de cont';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Primul depozit';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tipul de suport';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Compania';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individual';
$lang['StripePayments.ach_form.field_routing_number'] = 'Numărul de rutare';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Al doilea depozit';
$lang['StripePayments.ach_form.field_type'] = 'Tipul de cont';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Prin trimiterea acestui formular, autorizați %1$s să debiteze contul bancar specificat mai sus pentru orice sumă datorată pentru taxele care rezultă din utilizarea serviciilor %1$s și/sau achiziționarea de produse de la %1$s, în conformitate cu site-ul și termenii %1$s, până când această autorizație este revocată. Puteți modifica sau anula această autorizație în orice moment prin notificarea lui %1$s cu 30 (treizeci) de zile înainte.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Dacă utilizați serviciile %1$s sau achiziționați periodic produse suplimentare în conformitate cu termenii %1$s, autorizați %1$s să vă debiteze periodic contul bancar. Plățile care nu se încadrează în debitele periodice autorizate mai sus vor fi debitate numai după ce se obține autorizația dumneavoastră.';
$lang['StripePayments.ach_form.verification_notice'] = 'Contul bancar înregistrat în prezent nu a fost verificat. Introducerea mai jos a datelor unui nou cont bancar îl va înlocui pe cel actual.';
$lang['StripePayments.charge_description'] = 'Taxa pentru %1$s';
$lang['StripePayments.charge_description_default'] = 'Taxă pentru o sumă specificată';
$lang['StripePayments.description'] = 'Folosește elementele Stripe și API-ul de cerere de plată pentru a gestiona automat 3D Secure și SCA pentru a trimite carduri de credit direct prin Stripe.';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrarea conturilor de plată vechi';
$lang['StripePayments.india_mandate_max_amount'] = 'Suma maximă a taxelor recurente (India)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Necesar pentru a activa debitări recurente automate pentru cardurile emise în India. Aceasta este suma maximă care poate fi debitată de pe un astfel de card în cadrul oricărei tranzacții viitoare efectuate în afara sesiunii, în moneda respectivă. Lăsați câmpul necompletat pentru a permite salvarea cardurilor indiene fără înregistrarea pentru debitări recurente automate.';
$lang['StripePayments.migrate_accounts'] = 'Migrarea conturilor';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.publishable_key'] = 'Cheia API publicabilă';
$lang['StripePayments.request_three_d_secure'] = 'Fluxul de autentificare 3D Secure';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Permiteți-i lui Stripe să determine când să prezinte o provocare 3D Secure';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Prezentați provocarea 3D Secure ori de câte ori un client salvează o metodă de plată sau procesează o metodă de plată (stocată sau nestocată)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Prezentați provocarea 3D Secure ori de câte ori un client salvează o metodă de plată sau procesează o metodă de plată nesalvată';
$lang['StripePayments.request_three_d_secure_note'] = 'Dacă sunteți un utilizator Stripe cu sediul în India, înainte de a salva un card nou cu Stripe trebuie să efectuați întotdeauna autentificarea 3D Secure (3DS).';
$lang['StripePayments.secret_key'] = 'Cheia secretă API';
$lang['StripePayments.text_accounts_remaining'] = 'Conturi rămase: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Puteți migra automat conturile de plată stocate în afara site-ului de către vechiul gateway Stripe către acest gateway Stripe Payments. Conturile care nu sunt stocate în afara site-ului trebuie migrate prin crearea manuală de noi conturi de plată. Pentru a preveni timeout-urile, migrările se vor face în loturi de %1$s. Rulați această operațiune de câte ori este necesar pentru a migra toate conturile de plată.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'Conform reglementărilor RBI, în cazul plăților recurente (în afara sesiunilor de tranzacționare) efectuate cu carduri indiene care depășesc această sumă, clientul va trebui să autentifice separat plata.';
$lang['StripePayments.tooltip_publishable_key'] = 'Cheia API publicabilă este specifică fie pentru modul live, fie pentru cel de testare. Asigurați-vă că folosiți cheia corectă.';
$lang['StripePayments.tooltip_secret_key'] = 'Cheia secretă API este specifică fie pentru modul live, fie pentru cel de testare. Asigurați-vă că folosiți cheia corectă.';
$lang['StripePayments.warning_migrate_accounts'] = 'Nu dezinstalați vechea poartă Stripe până când nu terminați de utilizat acest instrument de migrare. Dacă faceți acest lucru, instrumentul va deveni inaccesibil.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.webhook_note'] = 'Se recomandă să configurați următoarea adresă URL ca Webhook pentru evenimentele "payment_intent" și "charge" din contul dumneavoastră Stripe.';

