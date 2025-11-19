<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.!error.company_id.exists'] = 'Ugyldigt virksomheds-ID.';
$lang['PackageOptions.!error.label.empty'] = 'Indtast venligst en etiket.';
$lang['PackageOptions.!error.label.length'] = 'Etiketten må ikke være længere end 128 tegn.';
$lang['PackageOptions.!error.name.empty'] = 'Indtast venligst et navn for denne mulighed.';
$lang['PackageOptions.!error.name.length'] = 'Navnet må ikke være længere end 128 tegn.';
$lang['PackageOptions.!error.type.valid'] = 'Vælg venligst en optionstype.';
$lang['PackageOptions.!error.values.count'] = 'Der kan kun indtastes én valgmulighedsværdi for typerne afkrydsningsfelt, antal, tekst, tekstområde eller adgangskode.';
$lang['PackageOptions.!error.values.unique'] = 'Optionens værdier skal være unikke.';
$lang['PackageOptions.!error.values.select_value'] = 'Mindst én valgmulighedsværdi indeholder ugyldige specialtegn.';
$lang['PackageOptions.!error.values.active_status'] = 'Mindst én indstillingsværdi skal være aktiv.';
$lang['PackageOptions.!error.values.single_default_value'] = 'Der kan kun vælges én værdi som standardværdi.';
$lang['PackageOptions.!error.values[][step].valid'] = 'En trinværdi kan kun indstilles for mængdetypen og skal være en værdi på 1 eller derover.';
$lang['PackageOptions.!error.values[][min].valid'] = 'En minimumsgrænseværdi kan kun indstilles for mængdetypen og skal være en værdi på 0 eller derover.';
$lang['PackageOptions.!error.values[][max].valid'] = 'Den maksimale grænseværdi kan kun indstilles for mængdetypen og skal være en værdi på 1 eller derover.';
$lang['PackageOptions.!error.values[][name].empty'] = 'Indtast venligst et navn for indstillingsværdien.';
$lang['PackageOptions.!error.values[][name].length'] = 'Navnet på indstillingsværdien må ikke være længere end 128 tegn.';
$lang['PackageOptions.!error.values[][value].length'] = 'Indstillingsværdien må ikke overstige 255 tegn i længden.';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = 'Indstillingsværdien kan ikke ændres, fordi den i øjeblikket bruges af en tjeneste.';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = 'Optionsværdien må ikke slettes, fordi den i øjeblikket bruges af en tjeneste.';
$lang['PackageOptions.!error.values[][status].valid'] = 'Vælg venligst en gyldig status for tilvalgsværdien.';
$lang['PackageOptions.!error.values[][default].inactive'] = 'En inaktiv indstillingsværdi kan ikke indstilles som standardværdi.';
$lang['PackageOptions.!error.values[][default].qty_valid'] = 'Den valgte standardværdimængde er ugyldig for den konfigurerede min, max og trin.';
$lang['PackageOptions.!error.values[][default].format'] = 'Standardindstillingen skal være et tal.';
$lang['PackageOptions.!error.values[][id].exists'] = 'Ugyldigt pakkeindstillingsværdi-ID.';
$lang['PackageOptions.!error.groups.exists'] = 'Mindst ét af de angivne pakkeoptionsgruppe-ID\'er findes ikke eller tilhører ikke den samme virksomhed.';
$lang['PackageOptions.!error.option_id.exists'] = 'Ugyldigt ID for pakkeoption.';
$lang['PackageOptions.!error.hidden.valid'] = 'Om denne indstilling skal skjules, skal indstilles til 0 eller 1.';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = 'Ugyldigt pris-id for pakkeoption.';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = 'Prisfastsættelsen af optionsværdien må ikke slettes, fordi den i øjeblikket bruges af en tjeneste.';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = 'Term skal være et tal.';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = 'Termlængden må ikke overstige 5 tegn.';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = 'Udtrykket skal være større end 0.';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = 'Ugyldig periodetype.';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = 'Prisen skal være et tal.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = 'Fornyelsesprisen skal være et tal.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = 'Fornyelsesprisen kan ikke indstilles for en enkelt periode.';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = 'Opsætningsgebyret skal være et tal.';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = 'Valutakoden skal være på 3 tegn.';
$lang['PackageOptions.gettypes.checkbox'] = 'Afkrydsningsfelt';
$lang['PackageOptions.gettypes.select'] = 'Drop-down';
$lang['PackageOptions.gettypes.quantity'] = 'Antal';
$lang['PackageOptions.gettypes.radio'] = 'Radio';
$lang['PackageOptions.gettypes.text'] = 'Tekst';
$lang['PackageOptions.gettypes.textarea'] = 'Tekstområde';
$lang['PackageOptions.gettypes.password'] = 'Adgangskode';
$lang['PackageOptions.getvaluestatuses.active'] = 'Aktiv';
$lang['PackageOptions.getvaluestatuses.inactive'] = 'Inaktiv';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s (fornyes ved %3$s)';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s opsætning';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s opsætning (fornyes ved %4$s)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, fornyes ved %3$s)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s opsætning)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '%1$s (%2$s + %3$s opsætning, fornyes ved %4$s)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, fornyes ved %3$s)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s opsætning)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '%1$s (%2$s + %3$s opsætning, fornyes ved %4$s)';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, fornyes ved %3$s)';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s opsætning)';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '%1$s (%2$s + %3$s opsætning, fornyes ved %4$s)';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_text_recurring'] = '%1$s (fornyes ved %2$s)';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s opsætning';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s opsætning (fornyes ved %3$s)';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_password_recurring'] = '%1$s (fornyes ved %2$s)';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s opsætning';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s opsætning (fornyes ved %3$s)';
$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '%1$s (fornyes ved %2$s)';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s opsætning';
$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s opsætning (fornyes ved %3$s)';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = 'Om den skal skjules på fakturaen, skal sættes til 0 eller 1.';
$lang['PackageOptions.!error.disable_pricing.valid'] = 'Om prissætning skal deaktiveres, skal indstilles til 0 eller 1.';

