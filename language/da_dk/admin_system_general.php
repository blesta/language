<?php
/**
 * Admin System General
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemGeneral.!success.basic_updated'] = 'Basic Setup-indstillingerne blev opdateret med succes!';
$lang['AdminSystemGeneral.!success.geoip_updated'] = 'GeoIP-indstillingerne blev opdateret med succes!';
$lang['AdminSystemGeneral.!success.maintenance_updated'] = 'Vedligeholdelsesindstillingerne blev opdateret med succes!';
$lang['AdminSystemGeneral.!success.license_updated'] = 'Din licensnøgle er blevet opdateret!';
$lang['AdminSystemGeneral.!success.addtype_created'] = 'Betalingstypen "%1$s" er blevet oprettet med succes!';
$lang['AdminSystemGeneral.!success.edittype_updated'] = 'Betalingstypen "%1$s" er blevet opdateret med succes!';
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = 'Betalingstypen "%1$s" er blevet slettet!';
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = 'Udvidelsen mbstring er nødvendig for denne funktion.';
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'Dette er din licensnøgle til Blesta. Hvis du modtager en ny licensnøgle, skal du indtaste den her.';
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'Denne værdi repræsenterer den fulde serversti til webserverens dokumentrodmappe (f.eks. /home/user/public_html/). Dette er ikke nødvendigvis stien til den mappe, Blesta er installeret under.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'Denne værdi repræsenterer den fulde serversti til det sted, hvor Blesta skal skrive midlertidige filer. Denne mappe skal kunne skrives af serverens webbruger og cron-bruger.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = 'Denne værdi repræsenterer den fulde serversti til det sted, hvor Blesta skal skrive uploadede filer. Denne mappe skal kunne skrives af serverens webbruger og cron-bruger.';
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'Denne værdi repræsenterer den fulde serversti til det sted, hvor Blesta skal skrive logfiler. Denne mappe skal kunne skrives af serverens webbruger og cron-bruger.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'Rotationspolitikken angiver, hvor længe de fleste af virksomhedens logdata skal gemmes. Systemkonfigurationsfilen kan angive yderligere indstillinger for logopbevaring.';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = 'Når den er markeret, antager Blesta, at den er bag en proxy, og bestemmer IP-adresser ud fra en x-forwarded-for-header fra proxyen. Du bør kun markere denne indstilling, hvis du kan stole på x-forwarded-for-headeren.';
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'Når systemet er i vedligeholdelsestilstand, er det kun personale, der kan bruge det. Alle andre brugere vil blive sendt til login-siden og få vist Årsag til vedligeholdelse.';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'Denne vedligeholdelsesårsag vises for ikke-ansatte brugere, der har adgang til systemet, når vedligeholdelsestilstand er aktiveret.';
$lang['AdminSystemGeneral.basic.page_title'] = 'Indstillinger > System > Generelt > Grundlæggende opsætning';
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = 'Grundlæggende opsætning';
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Root Web Directory';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = 'Temp Directory';
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Uploads-katalog';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Log-katalog';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Rotationspolitik';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'Min installation er bag en proxy eller load balancer';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Opdater indstillinger';
$lang['AdminSystemGeneral.basic.text_docroot'] = 'Forventer "%1$s"';
$lang['AdminSystemGeneral.basic.text_writable'] = 'Kan skrives';
$lang['AdminSystemGeneral.basic.text_unwritable'] = 'Kan ikke skrives';
$lang['AdminSystemGeneral.basic.text_no_log'] = 'Drej aldrig loggen';
$lang['AdminSystemGeneral.basic.text_day'] = 'Dag';
$lang['AdminSystemGeneral.basic.text_days'] = 'Dage';
$lang['AdminSystemGeneral.geoip.page_title'] = 'Indstillinger > System > Generelt > GeoIP-indstillinger';
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = 'GeoIP';
$lang['AdminSystemGeneral.geoip.text_setup'] = 'GeoIP kan aktiveres her, så Blesta får GeoIP-placeringstjenester. Hvis du aktiverer det, vil visse funktioner kunne udnytte placeringstjenester.';
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'GeoIP kræver den binære GeoLite City-database, som kan downloades fra din konto på <a target="_blank" href="%1$s">%1$s</a>. Filen skal pakkes ud og uploades til:';
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Tilmeld dig en MaxMind-konto';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = 'Brug velkomstmailen til at indstille din adgangskode';
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Log ind på din konto';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'Under "GeoIP2 / GeoLite2 > Download filer" downloades den binære GeoLite2-City-fil.';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Upload filen til din Blesta-installation på den sti, der er angivet nedenfor';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = '%1$s findes.';
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = '%1$s findes ikke.';
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = 'Aktivér GeoIP';
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = 'Opdater indstillinger';
$lang['AdminSystemGeneral.maintenance.page_title'] = 'Indstillinger > System > Generelt > Vedligeholdelse';
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = 'Vedligeholdelse';
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Aktivér vedligeholdelsestilstand';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = 'Årsag til vedligeholdelse';
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Opdater indstillinger';
$lang['AdminSystemGeneral.license.page_title'] = 'Indstillinger > System > Generelt > Licensnøgle';
$lang['AdminSystemGeneral.license.boxtitle_license'] = 'Licensnøgle';
$lang['AdminSystemGeneral.license.field.license_key'] = 'Licensnøgle';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Opdater indstillinger';
$lang['AdminSystemGeneral.paymenttypes.page_title'] = 'Indstillinger > System > Generelt > Betalingstyper';
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = 'Opret betalingstype';
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = 'Betalingstyper';
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = 'Navn';
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = 'Type';
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = 'Bruger sprog Definition';
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = 'Valgmuligheder';
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = 'Rediger';
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = 'Slet';
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = 'Hvis du sletter denne betalingstype, vil alle transaktioner, der bruger denne betalingstype, blive sat til "andet". Er du sikker på, at du vil slette denne betalingstype?';
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = 'Ja';
$lang['AdminSystemGeneral.paymenttypes.text_no'] = 'Nej, det er det ikke';
$lang['AdminSystemGeneral.paymenttypes.no_results'] = 'Der er ingen betalingstyper.';
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = 'Markér kun dette felt, hvis du har tilføjet en sprogdefinition for denne betalingstype i den brugerdefinerede sprogfil.';
$lang['AdminSystemGeneral.!paymenttypes.type'] = 'Når den er indstillet til debet, betragtes transaktioner med denne betalingstype som indkomstbaserede, mens kredit er ikke-indkomstbaseret.';
$lang['AdminSystemGeneral.addtype.page_title'] = 'Indstillinger > System > Generelt > Opret betalingstype';
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = 'Opret betalingstype';
$lang['AdminSystemGeneral.addtype.field_name'] = 'Navn';
$lang['AdminSystemGeneral.addtype.field_type'] = 'Type';
$lang['AdminSystemGeneral.addtype.field_is_lang'] = 'Definition af brug af sprog';
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = 'Opret betalingstype';
$lang['AdminSystemGeneral.edittype.page_title'] = 'Indstillinger > System > Generelt > Rediger betalingstype';
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = 'Rediger betalingstype';
$lang['AdminSystemGeneral.edittype.field_name'] = 'Navn';
$lang['AdminSystemGeneral.edittype.field_type'] = 'Type';
$lang['AdminSystemGeneral.edittype.field_is_lang'] = 'Definition af brug af sprog';
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = 'Rediger betalingstype';
$lang['AdminSystemGeneral.!error.upload_dir'] = 'Upload-biblioteket skal eksistere og være uden for rod-webbiblioteket.';
$lang['AdminSystemGeneral.!notice.text_open_basedir_description'] = 'PHP open_basedir er aktiveret. Filadgang er begrænset til: %1$s. Der er ikke adgang til mapper uden for disse stier.';

