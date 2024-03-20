<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'Activarea manuală trebuie să fie 1 sau 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Restricționat';
$lang['Packages.getStatusTypes.inactive'] = 'Inactiv';
$lang['Packages.getStatusTypes.active'] = 'Activ';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'O singură dată';
$lang['Packages.getPricingPeriods.year_plural'] = 'Ani';
$lang['Packages.getPricingPeriods.month_plural'] = 'Luni';
$lang['Packages.getPricingPeriods.week_plural'] = 'Săptămâni';
$lang['Packages.getPricingPeriods.day_plural'] = 'Zile';
$lang['Packages.getPricingPeriods.onetime'] = 'O singură dată';
$lang['Packages.getPricingPeriods.year'] = 'Anul';
$lang['Packages.getPricingPeriods.month'] = 'Luna';
$lang['Packages.getPricingPeriods.week'] = 'Săptămâna';
$lang['Packages.getPricingPeriods.day'] = 'Ziua';
$lang['Packages.!error.groups[].valid'] = 'Grupul de pachete selectat nu aparține companiei indicate.';
$lang['Packages.!error.groups[].exists'] = 'ID-ul grupului de pachete nu este valid.';
$lang['Packages.!error.pricing[][id].deletable'] = 'Termenul nu a putut fi eliminat deoarece este utilizat de unul sau mai multe servicii.';
$lang['Packages.!error.pricing[][id].format'] = 'ID-ul de stabilire a prețului pachetului nu este valid.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'Moneda nu poate fi actualizată în cadrul unei evaluări care este în curs de utilizare.';
$lang['Packages.!error.pricing[][currency].format'] = 'Codul monedei trebuie să fie format din 3 caractere.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'Taxa de anulare trebuie să fie un număr.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'Taxa de instalare trebuie să fie un număr.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Prețul de transfer trebuie să fie un număr.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Prețul de reînnoire nu poate fi stabilit pentru o singură perioadă de timp.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'Prețul de reînnoire trebuie să fie un număr.';
$lang['Packages.!error.pricing[][price].format'] = 'Prețul trebuie să fie un număr.';
$lang['Packages.!error.pricing[][period].in_use'] = 'Perioada nu poate fi actualizată în cazul unei tarifări care este în curs de utilizare.';
$lang['Packages.!error.pricing[][period].format'] = 'Tip de perioadă invalid.';
$lang['Packages.!error.pricing[][term].in_use'] = 'Termenul nu poate fi actualizat într-un preț care este în curs de utilizare.';
$lang['Packages.!error.pricing[][term].valid'] = 'Termenul trebuie să fie mai mare decât 0.';
$lang['Packages.!error.pricing[][term].length'] = 'Lungimea termenului nu poate depăși 5 caractere.';
$lang['Packages.!error.pricing[][term].format'] = 'Termenul trebuie să fie un număr.';
$lang['Packages.!error.email_content.parse'] = 'Eroare de parseare a șablonului: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'Lungimea limbii nu poate depăși 5 caractere.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Vă rugăm să introduceți o limbă.';
$lang['Packages.!error.prorata_cutoff.format'] = 'Ziua limită pro rata trebuie să fie între 1 și 28.';
$lang['Packages.!error.prorata_day.format'] = 'Ziua pro rata trebuie să fie cuprinsă între 1 și 28.';
$lang['Packages.!error.hidden.format'] = 'Dacă acest grup trebuie să fie ascuns în interfață trebuie să fie setat la 1 sau 0.';
$lang['Packages.!error.status.format'] = 'Stare invalidă.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Prețurile de reînnoire a utilizării pentru actualizări trebuie să fie 1 sau 0.';
$lang['Packages.!error.override_price.valid'] = 'Stabilirea prețului pachetului ca preț de suprascriere trebuie să fie 1 sau 0.';
$lang['Packages.!error.single_term.valid'] = 'Un singur termen trebuie să fie 1 sau 0.';
$lang['Packages.!error.taxable.length'] = 'Lungimea taxabilă nu poate depăși 1 caracter.';
$lang['Packages.!error.taxable.format'] = 'Baza impozabilă trebuie să fie un număr.';
$lang['Packages.!error.module_group_client.valid'] = 'Allow Client to Select Group trebuie să fie 1 sau 0.';
$lang['Packages.!error.module_group.format'] = 'Grupul de module invalid dat.';
$lang['Packages.!error.module_row.format'] = 'Rândul de modul invalid dat.';
$lang['Packages.!error.plugins[].valid'] = 'Plugin invalid dat.';
$lang['Packages.!error.option_groups[].valid'] = 'Grup de opțiuni de pachete configurabile nevalabil.';
$lang['Packages.!error.client_qty.format'] = 'Limita clientului trebuie să fie un număr.';
$lang['Packages.!error.qty.format'] = 'Cantitatea trebuie să fie un număr.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Vă rugăm să specificați un cod de limbă de pachet pentru fiecare descriere.';
$lang['Packages.!error.descriptions.format'] = 'Descrierile pachetelor sunt într-un format invalid.';
$lang['Packages.!error.names.empty_lang'] = 'Vă rugăm să specificați un cod de limbă de pachet pentru fiecare denumire.';
$lang['Packages.!error.names.empty_name'] = 'Vă rugăm să specificați un nume de pachet pentru fiecare limbă.';
$lang['Packages.!error.names.format'] = 'Numele pachetului este într-un format invalid.';
$lang['Packages.!error.module_id.changed'] = 'Modulul nu poate fi modificat deoarece există unul sau mai multe servicii care utilizează deja acest pachet.';
$lang['Packages.!error.module_id.exists'] = 'Modul invalid dat.';
$lang['Packages.!error.package_id.has_children'] = 'Pachetul nu a putut fi șters deoarece un serviciu are servicii copil.';
$lang['Packages.!error.package_id.exists'] = 'Pachetul nu a putut fi șters deoarece un serviciu îl folosește în prezent.';
$lang['Packages.!error.company_id.exists'] = 'Companie invalidă.';

