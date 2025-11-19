<?php
/**
 * Client Accounts
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientAccounts.!success.defaultaccount_updated'] = 'Standardbetalingskontoen er blevet opdateret.';
$lang['ClientAccounts.!success.defaultaccount_deleted'] = 'Standardbetalingskontoen er blevet fjernet.';
$lang['ClientAccounts.!success.account_created'] = 'Betalingskontoen er blevet oprettet.';
$lang['ClientAccounts.!success.ccaccount_deleted'] = 'Betalingskontoen er blevet slettet.';
$lang['ClientAccounts.!success.ccaccount_updated'] = 'Betalingskontoen er blevet opdateret.';
$lang['ClientAccounts.!success.achaccount_deleted'] = 'Betalingskontoen er blevet slettet.';
$lang['ClientAccounts.!success.achaccount_updated'] = 'Betalingskontoen er blevet opdateret.';
$lang['ClientAccounts.!success.achaccount_verified'] = 'Betalingskontoen er blevet verificeret.';
$lang['ClientAccounts.!error.account_invalid'] = 'Den angivne betalingskontotype er deaktiveret eller ugyldig.';
$lang['ClientAccounts.!error.payment_account_type_invalid'] = 'Ugyldig betalingskontotype.';
$lang['ClientAccounts.!notice.disabled'] = 'Muligheden for at tilføje betalingskonti er i øjeblikket deaktiveret.';
$lang['ClientAccounts.!notice.ach_disabled'] = 'ACH-betalingskonti er i øjeblikket deaktiveret og kan ikke opdateres.';
$lang['ClientAccounts.!notice.cc_disabled'] = 'Kreditkortbetalingskonti er i øjeblikket deaktiveret og kan ikke opdateres.';
$lang['ClientAccounts.!notice.reenable_autodebit'] = 'Automatiske betalinger er specifikt blevet deaktiveret for denne konto, kontakt venligst en medarbejder for at genaktivere dem. Du kan vælge en betalingskonto som din standard, men den vil ikke blive opkrævet automatisk, før den er blevet genaktiveret af personalet.';
$lang['ClientAccounts.!info.account_info'] = 'Betalingskonti giver dig mulighed for at opbevare betalingsoplysninger og kan bruges til at betale fakturaer. En betalingskonto, der er valgt som standardkonto, vil blive brugt til automatisk tilbagevendende betalinger.';
$lang['ClientAccounts.!info.no_accounts'] = 'Du har ikke nogen betalingskonti i øjeblikket. Tilføj din første betalingskonto nedenfor.';
$lang['ClientAccounts.!info.ach_verification'] = 'Du skal bekræfte denne konto, før du kan bruge den til at foretage en betaling.';
$lang['ClientAccounts.!info.ach_verification_edit'] = 'Når du har redigeret denne konto, skal du bekræfte den, før du kan bruge den til at foretage en betaling.';
$lang['ClientAccounts.index.page_title'] = 'Klient #%1$s Konti';
$lang['ClientAccounts.index.create_account'] = 'Tilføj betalingskonto';
$lang['ClientAccounts.index.boxtitle_accounts'] = 'Betalingskonti';
$lang['ClientAccounts.index.heading_name'] = 'Navn';
$lang['ClientAccounts.index.heading_type'] = 'Type';
$lang['ClientAccounts.index.heading_last4'] = 'De sidste 4';
$lang['ClientAccounts.index.heading_options'] = 'Valgmuligheder';
$lang['ClientAccounts.index.option_edit'] = 'Rediger';
$lang['ClientAccounts.index.option_verify'] = 'Bekræft';
$lang['ClientAccounts.index.option_delete'] = 'Slet';
$lang['ClientAccounts.index.type_cc'] = '%1$s - %2$s';
$lang['ClientAccounts.index.type_ach'] = '%1$s - %2$s';
$lang['ClientAccounts.index.confirm_delete'] = 'Er du sikker på, at du vil slette denne betalingskonto?';
$lang['ClientAccounts.index.field_accountsubmit'] = 'Indstil som standardbetalingskonto';
$lang['ClientAccounts.index.field_removeautodebit'] = 'Fjern automatisk debitering';
$lang['ClientAccounts.index.no_results'] = 'Du har ingen betalingskonti.';
$lang['ClientAccounts.add.page_title'] = 'Klient #%1$s Tilføj betalingskonto';
$lang['ClientAccounts.add.heading_account_type'] = 'Kontotype';
$lang['ClientAccounts.add.field_cc_type'] = 'Kreditkort';
$lang['ClientAccounts.add.field_ach_type'] = 'ACH';
$lang['ClientAccounts.add.boxtitle_create'] = 'Tilføj betalingskonto';
$lang['ClientAccounts.add.field_nextsubmit'] = 'Fortsæt';
$lang['ClientAccounts.add.field_accountsubmit'] = 'Opret konto';
$lang['ClientAccounts.editach.page_title'] = 'Klient #%1$s Rediger ACH-konto';
$lang['ClientAccounts.editach.boxtitle_editach'] = 'Rediger ACH-konto';
$lang['ClientAccounts.editach.field_accountsubmit'] = 'Rediger konto';
$lang['ClientAccounts.verifyach.page_title'] = 'Kunde #%1$s Bekræft ACH-konto';
$lang['ClientAccounts.verifyach.boxtitle_verifyach'] = 'Bekræft ACH-konto';
$lang['ClientAccounts.verifyach.field_firstdeposit'] = 'Første indbetaling';
$lang['ClientAccounts.verifyach.field_seconddeposit'] = 'Anden indbetaling';
$lang['ClientAccounts.verifyach.field_accountsubmit'] = 'Bekræft konto';
$lang['ClientAccounts.editcc.page_title'] = 'Klient #%1$s Rediger kreditkortkonto';
$lang['ClientAccounts.editcc.boxtitle_editcc'] = 'Rediger kreditkortkonto';
$lang['ClientAccounts.editcc.field_accountsubmit'] = 'Rediger konto';
$lang['ClientAccounts.setcontactview.text_none'] = 'Ingen';
$lang['ClientAccounts.contact_info.heading_contact'] = 'Kontaktoplysninger';
$lang['ClientAccounts.contact_info.text_select_contact'] = 'Du kan vælge en eksisterende kontakt til at udfylde denne formular på forhånd.';
$lang['ClientAccounts.contact_info.field_contact_id'] = 'Kopier kontaktoplysninger fra';
$lang['ClientAccounts.contact_info.field_first_name'] = 'Fornavn';
$lang['ClientAccounts.contact_info.field_last_name'] = 'Efternavn';
$lang['ClientAccounts.contact_info.field_company'] = 'Virksomhed';
$lang['ClientAccounts.contact_info.field_title'] = 'Titel';
$lang['ClientAccounts.contact_info.field_address1'] = 'Adresse 1';
$lang['ClientAccounts.contact_info.field_address2'] = 'Adresse 2';
$lang['ClientAccounts.contact_info.field_city'] = 'By';
$lang['ClientAccounts.contact_info.field_country'] = 'Land';
$lang['ClientAccounts.contact_info.field_state'] = 'Stat';
$lang['ClientAccounts.contact_info.field_zip'] = 'Postnummer';
$lang['ClientAccounts.contact_info.field_email'] = 'E-mail';
$lang['ClientAccounts.cc_info.heading_cc'] = 'Kreditkortoplysninger';
$lang['ClientAccounts.cc_info.field_number'] = 'Antal';
$lang['ClientAccounts.cc_info.field_security'] = 'Sikkerhedskode';
$lang['ClientAccounts.cc_info.field_expiration'] = 'Udløbsdato';
$lang['ClientAccounts.cc_info.field_savedetails'] = 'Gem konto';
$lang['ClientAccounts.cc_info.tooltip_code'] = 'Den 3- eller 4-cifrede sikkerhedskode, som normalt findes på bagsiden af kortet.';
$lang['ClientAccounts.ach_info.heading_ach'] = 'Oplysninger om bankkonto';
$lang['ClientAccounts.ach_info.field_type'] = 'Type';
$lang['ClientAccounts.ach_info.field_accountnum'] = 'Kontonummer';
$lang['ClientAccounts.ach_info.field_routingnum'] = 'Routing-nummer';
$lang['ClientAccounts.ach_info.field_savedetails'] = 'Gem konto';
$lang['ClientAccounts.navigation.nav_dashboard'] = 'Dashboard';
$lang['ClientAccounts.navigation.nav_paymentaccounts'] = 'Betalingskonti';
$lang['ClientAccounts.navigation.nav_paymentaccounts_add'] = 'Tilføj betalingskonto';
$lang['ClientAccounts.navigation.nav_return'] = 'Tilbage til instrumentbrættet';
$lang['ClientAccounts.credithandling.field_submit'] = 'Opdater indstillinger';
$lang['ClientAccounts.credithandling.heading_threshold'] = 'Underretningstærskel';
$lang['ClientAccounts.credithandling.heading_currency'] = 'Valuta';
$lang['ClientAccounts.credithandling.text_description'] = 'Konfigurer meddelelser om lav saldo. Du vil modtage en daglig e-mail, når din saldo falder til under tærskelværdien for en hvilken som helst valuta.';
$lang['ClientAccounts.credithandling.boxtitle_credithandling'] = 'Håndtering af kredit';
$lang['ClientAccounts.navigation.nav_credithandling'] = 'Håndtering af kredit';
$lang['ClientAccounts.!success.credit_handling_updated'] = 'Indstillingerne for kredithåndtering er blevet opdateret.';

