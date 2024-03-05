<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!error.name_taken'] = 'Dette navn er i konflikt med en eksisterende udvidelseskatalog.';
$lang['AdminMain.!error.generation_failed'] = 'Kunne ikke generere din udvidelse.  Undtagelse genereret: %1$s';
$lang['AdminMain.!notice.type_warning'] = 'Ændring af udvidelsestypen vil uigenkaldeligt slette alle indstillinger, der er gemt for denne udvidelse.';
$lang['AdminMain.!notice.file_overwrite'] = 'Filerne til denne udvidelse findes allerede i Blesta-filerne og vil blive overskrevet, hvis du bruger Blesta Directory.';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Denne udvidelse er installeret i øjeblikket. Det anbefales på det kraftigste, at du afinstallerer den, før du regenererer filerne, da det ellers kan skade konsistensen af din database.';
$lang['AdminMain.!success.package_deleted'] = 'Udvidelsen er blevet slettet med succes';
$lang['AdminMain.!success.module_created'] = 'Det nye modul er blevet genereret og kan findes på %1$s.';
$lang['AdminMain.!success.plugin_created'] = 'Det nye plugin er blevet genereret og kan findes på %1$s.';
$lang['AdminMain.!success.merchant_created'] = 'Den nye gateway er blevet genereret og kan findes på %1$s.';
$lang['AdminMain.!success.nonmerchant_created'] = 'Den nye gateway er blevet genereret og kan findes på %1$s.';
$lang['AdminMain.getfilelocations.module'] = 'Katalog over Blesta-moduler';
$lang['AdminMain.getfilelocations.plugin'] = 'Blesta Plugins Directory';
$lang['AdminMain.getfilelocations.merchant'] = 'Blesta Merchant Gateway Vejviser';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Blesta Gateway-oversigt for ikke-handlende';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta Uploads Vejviser';
$lang['AdminMain.getfilelocations.custom'] = 'Brugerdefineret';
$lang['AdminMain.index.page_title'] = 'Forlængelsesgenerator';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Forlængelsesgenerator';
$lang['AdminMain.index.boxtitle_extensions'] = 'Udvidelsesgenerator - Udvidelser';
$lang['AdminMain.index.extension_add'] = 'Tilføj udvidelse';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.heading_name'] = 'Navn';
$lang['AdminMain.index.heading_type'] = 'Type';
$lang['AdminMain.index.heading_form_type'] = 'Formular Type';
$lang['AdminMain.index.heading_code_examples'] = 'Eksempler på kode';
$lang['AdminMain.index.heading_date_updated'] = 'Opdateret dato';
$lang['AdminMain.index.heading_options'] = 'Valgmuligheder';
$lang['AdminMain.index.option_edit'] = 'Rediger';
$lang['AdminMain.index.option_delete'] = 'Slet';
$lang['AdminMain.index.text_confirm_delete'] = 'Er du sikker på, at du vil slette denne udvidelse?';
$lang['AdminMain.index.extensions_no_results'] = 'Der er ingen forlængelser på nuværende tidspunkt.';
$lang['AdminMain.general.heading_general_settings'] = 'Generelle indstillinger';
$lang['AdminMain.general.name'] = 'Navn';
$lang['AdminMain.general.type'] = 'Udvidelsestype';
$lang['AdminMain.general.form_type'] = 'Formular Type';
$lang['AdminMain.general.code_examples'] = 'Inkluder eksempelkode';
$lang['AdminMain.general.basic_info'] = 'Næste - Grundlæggende info';
$lang['AdminMain.general.tooltip_name'] = 'Visningsnavnet på udvidelsen. Dette bruges også til at oprette forskellige koder. Hvis navnet f.eks. er My Module, så vil modulmappen være my_module, og klassenavnet vil være MyModule.  For plugins skal du ikke inkludere ordet "plugin" i navnet, da det forårsager nogle problemer med kodegenerering.';
$lang['AdminMain.general.tooltip_type'] = 'Moduler håndterer mange servicefunktioner, herunder levering af service på eksterne servere. Plugins er kraftfuld integration, der kan gøre det meste i Blesta. Merchant gateways behandler betalinger, mens kunderne bliver i Blesta-grænsefladen.  Ikke-forhandler-gateways sender kunder til et betalingsbehandlingssted for at gennemføre betalingen.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic til at bruge en stærkt forkortet version af udvidelsesformularen, der kun indeholder det minimum, der er nødvendigt for at generere udvidelsen.';
$lang['AdminMain.general.tooltip_code_examples'] = 'Tjek, om der er kommenterede linjer med eksempelkode til funktioner som Cron Tasks, Event-lister og tie-ins osv.';
$lang['AdminMain.general.placeholder_name'] = 'Navn på udvidelse';
$lang['AdminMain.confirm.heading_confirm'] = 'Bekræftelse';
$lang['AdminMain.confirm.text_generation'] = 'Indstillingerne for udvidelsen er fuldført.  Du kan gennemgå ethvert afsnit ved at klikke på knudepunkterne i statuslinjen.  Klik på "Generate Extension" for at afslutte og automatisk generere filerne til din udvidelse.';
$lang['AdminMain.confirm.location'] = 'Udvidelse Placering';
$lang['AdminMain.confirm.tooltip_location'] = 'Den mappe, hvor de genererede udvidelsesfiler skal uploades.';
$lang['AdminMain.confirm.custom_path'] = 'Brugerdefineret sti';
$lang['AdminMain.confirm.generate'] = 'Generer udvidelse';

