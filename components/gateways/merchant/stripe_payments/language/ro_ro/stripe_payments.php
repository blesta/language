<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.ach_form.field_type'] = 'Tipul de cont';
$lang['StripePayments.description'] = 'Folosește elementele Stripe și API-ul de cerere de plată pentru a gestiona automat 3D Secure și SCA pentru a trimite carduri de credit direct prin Stripe.';
$lang['StripePayments.charge_description'] = 'Taxa pentru %1$s';
$lang['StripePayments.charge_description_default'] = 'Taxă pentru o sumă specificată';
$lang['StripePayments.migrate_accounts'] = 'Migrarea conturilor';
$lang['StripePayments.warning_migrate_accounts'] = 'Nu dezinstalați vechea poartă Stripe până când nu terminați de utilizat acest instrument de migrare. Dacă faceți acest lucru, instrumentul va deveni inaccesibil.';
$lang['StripePayments.text_migrate_accounts'] = 'Puteți migra automat conturile de plată stocate în afara site-ului de către vechiul gateway Stripe către acest gateway Stripe Payments. Conturile care nu sunt stocate în afara site-ului trebuie migrate prin crearea manuală de noi conturi de plată. Pentru a preveni timeout-urile, migrările se vor face în loturi de %1$s. Rulați această operațiune de câte ori este necesar pentru a migra toate conturile de plată.';
$lang['StripePayments.text_accounts_remaining'] = 'Conturi rămase: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrarea conturilor de plată vechi';
$lang['StripePayments.webhook_note'] = 'Se recomandă să configurați următoarea adresă URL ca Webhook pentru evenimentele "payment_intent" în contul dumneavoastră Stripe.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = 'Cheia secretă API este specifică fie pentru modul live, fie pentru cel de testare. Asigurați-vă că folosiți cheia corectă.';
$lang['StripePayments.tooltip_publishable_key'] = 'Cheia API publicabilă este specifică fie pentru modul live, fie pentru cel de testare. Asigurați-vă că folosiți cheia corectă.';
$lang['StripePayments.secret_key'] = 'Cheia secretă API';
$lang['StripePayments.publishable_key'] = 'Cheia API publicabilă';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Dacă utilizați serviciile %1$s sau achiziționați periodic produse suplimentare în conformitate cu termenii %1$s, autorizați %1$s să vă debiteze periodic contul bancar. Plățile care nu se încadrează în debitele periodice autorizate mai sus vor fi debitate numai după ce se obține autorizația dumneavoastră.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Prin trimiterea acestui formular, autorizați %1$s să debiteze contul bancar specificat mai sus pentru orice sumă datorată pentru taxele care rezultă din utilizarea serviciilor %1$s și/sau achiziționarea de produse de la %1$s, în conformitate cu site-ul și termenii %1$s, până când această autorizație este revocată. Puteți modifica sau anula această autorizație în orice moment prin notificarea lui %1$s cu 30 (treizeci) de zile înainte.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Al doilea depozit';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Primul depozit';
$lang['StripePayments.ach_form.verification_notice'] = 'Am trimis două depozite mici în acest cont bancar. Pentru a verifica acest cont, vă rugăm să confirmați sumele acestor depozite.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Numărul de rutare';
$lang['StripePayments.ach_form.field_account_number'] = 'Număr de cont';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Compania';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individual';
$lang['StripePayments.!error.invalid_request_error'] = 'Poarta de plată a returnat o eroare la procesarea cererii.';
$lang['StripePayments.ach_form.field_holder_type'] = 'Tipul de suport';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.!error.bank_account_unverified'] = 'Trebuie să vă verificați contul bancar înainte de a-l putea utiliza pentru a efectua o plată.';
$lang['StripePayments.!error.secret_key.valid'] = 'Nu se poate conecta la Stripe API folosind cheia secretă dată.';
$lang['StripePayments.!error.secret_key.empty'] = 'Vă rugăm să introduceți o cheie secretă.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Vă rugăm să introduceți o cheie publicabilă.';
$lang['StripePayments.!error.auth'] = 'Poarta nu s-a putut autentifica.';
$lang['StripePayments.request_three_d_secure_note'] = 'Dacă sunteți un utilizator Stripe cu sediul în India, înainte de a salva un card nou cu Stripe trebuie să efectuați întotdeauna autentificarea 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Prezentați provocarea 3D Secure ori de câte ori un client salvează o metodă de plată sau procesează o metodă de plată (stocată sau nestocată)';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Prezentați provocarea 3D Secure ori de câte ori un client salvează o metodă de plată sau procesează o metodă de plată nesalvată';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Permiteți-i lui Stripe să determine când să prezinte o provocare 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Fluxul de autentificare 3D Secure';

