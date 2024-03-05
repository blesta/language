<?php
/**
 * Admin Company General
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyGeneral.!error.captcha_gd'] = 'GD-udvidelsen er nødvendig for at generere den interne captcha.';
$lang['AdminCompanyGeneral.!success.localization_updated'] = 'Lokaliseringsindstillingerne er blevet opdateret.';
$lang['AdminCompanyGeneral.!success.encryption_updated'] = 'Krypteringsindstillingerne er blevet opdateret.';
$lang['AdminCompanyGeneral.!success.contact_type_added'] = 'Kontakttypen "%1$s" er blevet tilføjet.';
$lang['AdminCompanyGeneral.!success.contact_type_updated'] = 'Kontakttypen "%1$s" er blevet opdateret.';
$lang['AdminCompanyGeneral.!success.contact_type_deleted'] = 'Kontakttypen "%1$s" er blevet slettet.';
$lang['AdminCompanyGeneral.!success.language_installed'] = 'Sproget %1$s er blevet installeret med succes.';
$lang['AdminCompanyGeneral.!success.language_uninstalled'] = 'Sproget %1$s er blevet afinstalleret.';
$lang['AdminCompanyGeneral.!success.marketing_updated'] = 'Markedsføringsindstillingerne er blevet opdateret.';
$lang['AdminCompanyGeneral.!success.smartsearch_updated'] = 'Smart Search-indstillingerne er blevet opdateret.';
$lang['AdminCompanyGeneral.!success.humanverification_updated'] = 'Indstillingerne for menneskelig verifikation er blevet opdateret.';
$lang['AdminCompanyGeneral.!tooltip.language'] = 'Standardsproget, der bruges af systemet. Se Internationaliseringsindstillinger for at tilføje flere sprog.';
$lang['AdminCompanyGeneral.!tooltip.client_set_lang'] = 'Når det er markeret, kan klienterne vælge deres eget sprog blandt dem, der er tilgængelige i systemet.';
$lang['AdminCompanyGeneral.!tooltip.calendar_begins'] = 'Indstil kalenderens ugentlige startdag.';
$lang['AdminCompanyGeneral.!tooltip.timezone'] = 'Dette er systemets tidszone, som dato- og tidskonverteringer vil blive formateret til.';
$lang['AdminCompanyGeneral.!tooltip.date_format'] = 'Indstiller datoformatet. Dette format bruges, når der vises en dato. Se php-manualen for tilgængelige indstillinger.';
$lang['AdminCompanyGeneral.!tooltip.datetime_format'] = 'Indstiller formatet for dato og klokkeslæt. Dette format bruges, når der vises dato og klokkeslæt. Se php-manualen for tilgængelige indstillinger.';
$lang['AdminCompanyGeneral.!tooltip.country'] = 'Dette er det land, der er valgt som standard på relevante formularer.';
$lang['AdminCompanyGeneral.!tooltip.captcha'] = 'Dette er den captcha, der bruges som standard, den interne captcha kræver GD-udvidelsen.';
$lang['AdminCompanyGeneral.localization.page_title'] = 'Indstillinger > Virksomhed > Generelt > Lokalisering';
$lang['AdminCompanyGeneral.localization.boxtitle_localization'] = 'Lokalisering';
$lang['AdminCompanyGeneral.localization.tz_format'] = '(UTC %1$s) %2$s';
$lang['AdminCompanyGeneral.localization.field.language'] = 'Standardsprog';
$lang['AdminCompanyGeneral.localization.field.setlanguage'] = 'Kunden kan indstille sprog';
$lang['AdminCompanyGeneral.localization.field.calendar'] = 'Kalenderens startdag';
$lang['AdminCompanyGeneral.localization.field.sunday'] = 'Søndag';
$lang['AdminCompanyGeneral.localization.field.monday'] = 'Mandag';
$lang['AdminCompanyGeneral.localization.field.timezone'] = 'Tidszone';
$lang['AdminCompanyGeneral.localization.field.dateformat'] = 'Datoformat';
$lang['AdminCompanyGeneral.localization.field.datetimeformat'] = 'Dato Tid Format';
$lang['AdminCompanyGeneral.localization.field.country'] = 'Standardland';
$lang['AdminCompanyGeneral.localization.field.localizationsubmit'] = 'Opdater indstillinger';
$lang['AdminCompanyGeneral.!notice.international_languages'] = 'Der findes et crowdsourcet oversættelsesprojekt på translate.blesta.com. Du kan bidrage til og downloade sprogoversættelser der. For at installere skal du udpakke indholdet af filen til din Blesta-installationsmappe. Opdater derefter denne side, og klik på linket Installer.';
$lang['AdminCompanyGeneral.international.page_title'] = 'Indstillinger > Virksomhed > Generelt > Internationalisering';
$lang['AdminCompanyGeneral.international.boxtitle_international'] = 'Internationalisering';
$lang['AdminCompanyGeneral.international.text_language'] = 'Sprog';
$lang['AdminCompanyGeneral.international.text_iso'] = 'ISO 639-1, 3166-1';
$lang['AdminCompanyGeneral.international.text_options'] = 'Valgmuligheder';
$lang['AdminCompanyGeneral.international.option_install'] = 'Installer';
$lang['AdminCompanyGeneral.international.option_uninstall'] = 'Fjern';
$lang['AdminCompanyGeneral.international.confirm_install'] = 'Er du sikker på, at du vil installere sproget %1$s?';
$lang['AdminCompanyGeneral.international.confirm_uninstall'] = 'Er du sikker på, at du vil afinstallere sproget %1$s? Dette sprog vil blive afinstalleret, og alle e-mailskabeloner på dette sprog vil blive slettet permanent.';
$lang['AdminCompanyGeneral.encryption.page_title'] = 'Indstillinger > Virksomhed > Generelt > Kryptering';
$lang['AdminCompanyGeneral.!notice.passphrase'] = 'ADVARSEL: Indstilling af en passphrase vil forhindre lokalt gemte betalingskonti i at blive behandlet automatisk. Du vil blive bedt om manuelt at batch-betale ved at indtaste din passphrase. For mere information om denne funktion, se venligst manualen.';
$lang['AdminCompanyGeneral.!notice.passphrase_set'] = 'ADVARSEL: Der er blevet indstillet en adgangskode. Du er forpligtet til at foretage manuelle batchbetalinger med din passphrase. Hvis du ændrer din passphrase til en tom passphrase, fjernes dette krav.';
$lang['AdminCompanyGeneral.encryption.boxtitle_encryption'] = 'Kryptering';
$lang['AdminCompanyGeneral.encryption.field_current_passphrase'] = 'Aktuel adgangskode til privat nøgle';
$lang['AdminCompanyGeneral.encryption.field_private_key_passphrase'] = 'Ny adgangskode til privat nøgle';
$lang['AdminCompanyGeneral.encryption.field_confirm_new_passphrase'] = 'Bekræft adgangskode til privat nøgle';
$lang['AdminCompanyGeneral.encryption.field_agree'] = 'Jeg har gemt denne adgangskode på et sikkert sted';
$lang['AdminCompanyGeneral.encryption.field_encryptionsubmit'] = 'Opdater adgangskode';
$lang['AdminCompanyGeneral.contacttypes.page_title'] = 'Indstillinger > Virksomhed > Generelt > Kontakttyper';
$lang['AdminCompanyGeneral.contacttypes.categorylink_addtype'] = 'Opret kontakttype';
$lang['AdminCompanyGeneral.contacttypes.boxtitle_types'] = 'Kontakttyper';
$lang['AdminCompanyGeneral.contacttypes.heading_name'] = 'Navn';
$lang['AdminCompanyGeneral.contacttypes.heading_define'] = 'Bruger sprog Definition';
$lang['AdminCompanyGeneral.contacttypes.heading_options'] = 'Valgmuligheder';
$lang['AdminCompanyGeneral.contacttypes.text_yes'] = 'Ja';
$lang['AdminCompanyGeneral.contacttypes.text_no'] = 'Nej, det er det ikke';
$lang['AdminCompanyGeneral.contacttypes.option_edit'] = 'Rediger';
$lang['AdminCompanyGeneral.contacttypes.option_delete'] = 'Slet';
$lang['AdminCompanyGeneral.contacttypes.modal_delete'] = 'Hvis du sletter denne kontakttype, vil alle kontakter, der er tildelt denne type, blive placeret i standardtypen "Fakturering". Er du sikker på, at du vil slette denne kontakttype?';
$lang['AdminCompanyGeneral.contacttypes.no_results'] = 'Der er ingen kontakttyper.';
$lang['AdminCompanyGeneral.!contacttypes.is_lang'] = 'Markér kun dette felt, hvis du har tilføjet en sprogdefinition for denne kontakttype i den brugerdefinerede sprogfil.';
$lang['AdminCompanyGeneral.addcontacttype.page_title'] = 'Indstillinger > Virksomhed > Generelt > Opret kontakttype';
$lang['AdminCompanyGeneral.addcontacttype.boxtitle_addcontacttype'] = 'Opret kontakttype';
$lang['AdminCompanyGeneral.addcontacttype.field_name'] = 'Navn';
$lang['AdminCompanyGeneral.addcontacttype.field_is_lang'] = 'Definition af brug af sprog';
$lang['AdminCompanyGeneral.addcontacttype.field_contacttypesubmit'] = 'Opret kontakttype';
$lang['AdminCompanyGeneral.editcontacttype.page_title'] = 'Indstillinger > Virksomhed > Generelt > Rediger kontakttype';
$lang['AdminCompanyGeneral.editcontacttype.boxtitle_editcontacttype'] = 'Rediger kontakttype';
$lang['AdminCompanyGeneral.editcontacttype.field_name'] = 'Navn';
$lang['AdminCompanyGeneral.editcontacttype.field_is_lang'] = 'Definition af brug af sprog';
$lang['AdminCompanyGeneral.editcontacttype.field_contacttypesubmit'] = 'Rediger kontakttype';
$lang['AdminCompanyGeneral.marketing.boxtitle_marketing'] = 'Markedsføring';
$lang['AdminCompanyGeneral.marketing.field_show_receive_email_marketing'] = 'Giv kunderne mulighed for at tilvælge/fravælge e-mailmarkedsføring';
$lang['AdminCompanyGeneral.marketing.field_submit'] = 'Opdater indstillinger';
$lang['AdminCompanyGeneral.smartsearch.boxtitle_smartsearch'] = 'Smart søgning';
$lang['AdminCompanyGeneral.smartsearch.field_client_search'] = 'Klientsøgning';
$lang['AdminCompanyGeneral.smartsearch.field_invoice_search'] = 'Fakturasøgning';
$lang['AdminCompanyGeneral.smartsearch.field_quotation_search'] = 'Søgning efter tilbud';
$lang['AdminCompanyGeneral.smartsearch.field_transaction_search'] = 'Transaktionssøgning';
$lang['AdminCompanyGeneral.smartsearch.field_service_search'] = 'Service-søgning';
$lang['AdminCompanyGeneral.smartsearch.field_package_search'] = 'Pakkesøgning';
$lang['AdminCompanyGeneral.smartsearch.field_submit'] = 'Opdater indstillinger';
$lang['AdminCompanyGeneral.humanverification.boxtitle_humanverification'] = 'Menneskelig verifikation';
$lang['AdminCompanyGeneral.humanverification.heading_captcha_provider'] = 'Captcha-udbyder';
$lang['AdminCompanyGeneral.humanverification.heading_enabled_forms'] = 'Aktiverede formularer';
$lang['AdminCompanyGeneral.humanverification.field_captcha'] = 'Captcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_none'] = 'Ingen';
$lang['AdminCompanyGeneral.humanverification.field_captcha_recaptcha'] = 'reCaptcha';
$lang['AdminCompanyGeneral.humanverification.field_captcha_internalcaptcha'] = 'Intern Captcha';
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_pub_key'] = 'reCaptcha-webstedsnøgle';
$lang['AdminCompanyGeneral.humanverification.field_recaptcha_shared_key'] = 'reCaptcha delt nøgle';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login'] = 'Admin-login';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login'] = 'Kunde-login';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_admin_login_reset'] = 'Admin Nulstil min adgangskode';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_reset'] = 'Klient Nulstil min adgangskode';
$lang['AdminCompanyGeneral.humanverification.field_captcha_enabled_forms_client_login_forgot'] = 'Kunden har glemt sit brugernavn';
$lang['AdminCompanyGeneral.humanverification.field_submit'] = 'Opdater indstillinger';

