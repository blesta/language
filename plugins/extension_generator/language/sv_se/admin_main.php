<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.sv_se
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Skapa förlängning';
$lang['AdminMain.confirm.custom_path'] = 'Anpassad sökväg';
$lang['AdminMain.confirm.tooltip_location'] = 'Den katalog där genererade tilläggsfiler ska laddas upp.';
$lang['AdminMain.confirm.location'] = 'Plats för förlängning';
$lang['AdminMain.confirm.text_generation'] = 'Inställningarna för tillägget är klara.  Du kan granska alla avsnitt genom att klicka på noderna i förloppsindikatorn.  Klicka på "Generera tillägg" för att avsluta och automatiskt generera filerna för ditt tillägg.';
$lang['AdminMain.confirm.heading_confirm'] = 'Bekräftelse';
$lang['AdminMain.general.placeholder_name'] = 'Namn på tillägg';
$lang['AdminMain.general.tooltip_code_examples'] = 'Kontrollera att det finns kommenterade rader med exempelkod för funktioner som Cron Tasks, händelselistor och kopplingar etc.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic för att använda en mycket förkortad version av tilläggsformuläret, som endast innehåller det minimum som krävs för att generera tillägget.';
$lang['AdminMain.general.tooltip_type'] = 'Moduler hanterar många tjänstefunktioner, inklusive tillhandahållande av tjänster på fjärrservrar. Plugins är kraftfulla integrationer som kan göra det mesta i Blesta. Merchant gateways hanterar betalningar samtidigt som kunderna stannar kvar i Blesta-gränssnittet.  Gateways för icke-handlare skickar kunder till en betalningsprocessors webbplats för att slutföra betalningen.';
$lang['AdminMain.general.tooltip_name'] = 'Displaynamnet på tillägget. Detta används också för att skapa olika koder. Till exempel, om namnet är Min modul, kommer modulkatalogen att vara my_module, och klassnamnet kommer att vara MyModule.  För plugins ska du inte inkludera ordet "plugin" i namnet eftersom det orsakar vissa problem med kodgenereringen.';
$lang['AdminMain.general.basic_info'] = 'Nästa - Grundläggande information';
$lang['AdminMain.general.code_examples'] = 'Inkludera exempelkod';
$lang['AdminMain.general.form_type'] = 'Formulär Typ';
$lang['AdminMain.general.type'] = 'Förlängningstyp';
$lang['AdminMain.general.name'] = 'Namn';
$lang['AdminMain.general.heading_general_settings'] = 'Allmänna inställningar';
$lang['AdminMain.index.extensions_no_results'] = 'Det finns inga förlängningar för närvarande.';
$lang['AdminMain.index.text_confirm_delete'] = 'Är du säker på att du vill ta bort detta tillägg?';
$lang['AdminMain.index.option_delete'] = 'Radera';
$lang['AdminMain.index.option_edit'] = 'Redigera';
$lang['AdminMain.index.heading_options'] = 'Alternativ';
$lang['AdminMain.index.heading_date_updated'] = 'Datum för uppdatering';
$lang['AdminMain.index.heading_code_examples'] = 'Exempel på koder';
$lang['AdminMain.index.heading_form_type'] = 'Formulär Typ';
$lang['AdminMain.index.heading_type'] = 'Typ';
$lang['AdminMain.index.heading_name'] = 'Namn';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Lägg till tillägg';
$lang['AdminMain.index.boxtitle_extensions'] = 'Generator för tillägg - Tillägg';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Generator för förlängning';
$lang['AdminMain.index.page_title'] = 'Generator för förlängning';
$lang['AdminMain.getfilelocations.custom'] = 'Anpassad';
$lang['AdminMain.getfilelocations.upload'] = 'Förteckning över uppladdningar från Blesta';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Blesta katalog över gateways för icke-handlare';
$lang['AdminMain.getfilelocations.merchant'] = 'Katalog över Blesta Merchant Gateway';
$lang['AdminMain.getfilelocations.plugin'] = 'Förteckning över Blesta-plugins';
$lang['AdminMain.getfilelocations.module'] = 'Förteckning över Blesta-moduler';
$lang['AdminMain.!success.nonmerchant_created'] = 'Den nya gatewayen har genererats framgångsrikt och finns på %1$s';
$lang['AdminMain.!success.merchant_created'] = 'Den nya gatewayen har genererats och kan hittas på %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Det nya pluginet har genererats och kan hittas på %1$s';
$lang['AdminMain.!success.module_created'] = 'Den nya modulen har genererats och kan hittas på %1$s';
$lang['AdminMain.!success.package_deleted'] = 'Tillägget har raderats framgångsrikt';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Detta tillägg är för närvarande installerat. Vi rekommenderar starkt att du avinstallerar det innan du regenererar filerna, annars kan det leda till skador på konsistensen i din databas.';
$lang['AdminMain.!notice.file_overwrite'] = 'Filerna för detta tillägg finns redan i Blesta-filerna och kommer att skrivas över om du använder Blesta Directory.';
$lang['AdminMain.!notice.type_warning'] = 'Om du ändrar anknytningstyp raderas alla inställningar som sparats för denna anknytning oåterkalleligt.';
$lang['AdminMain.!error.generation_failed'] = 'Det gick inte att generera ditt tillägg.  Undantag genererat: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Detta namn står i konflikt med en befintlig anknytningskatalog.';

