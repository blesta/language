<?php
/**
 * Direct Admin
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['DirectAdmin.!error.server_name.empty'] = 'Du skal indtaste en serveretiket.';
$lang['DirectAdmin.!error.host_name.format'] = 'Værtsnavnet ser ud til at være ugyldigt.';
$lang['DirectAdmin.!error.port.format'] = 'Porten skal være et nummer.';
$lang['DirectAdmin.!error.user_name.empty'] = 'Du skal indtaste et brugernavn.';
$lang['DirectAdmin.!error.password.format'] = 'Du skal indtaste en adgangskode.';
$lang['DirectAdmin.!error.use_ssl.format'] = 'Brug SSL skal være enten sand eller falsk.';
$lang['DirectAdmin.!error.account_limit.valid'] = 'Account Limit skal være tom (for ubegrænsede konti) eller indstillet til en heltalsværdi.';
$lang['DirectAdmin.!error.name_servers.valid'] = 'En eller flere af de indtastede navneservere er ugyldige.';
$lang['DirectAdmin.!error.name_servers.count'] = 'Du skal definere mindst 2 navneservere.';
$lang['DirectAdmin.!error.api.internal'] = 'Der opstod en intern fejl, eller serveren svarede ikke på anmodningen.';
$lang['DirectAdmin.!error.meta[type].format'] = 'Account Type skal være enten user eller reseller.';
$lang['DirectAdmin.!error.meta[package].empty'] = 'En DirectAdmin-pakke er påkrævet.';
$lang['DirectAdmin.!error.meta[ip].empty'] = 'En IP-adresse er påkrævet.';
$lang['DirectAdmin.!error.direct_admin_domain.format'] = 'Indtast venligst et gyldigt domænenavn af formen: domain.com';
$lang['DirectAdmin.!error.direct_admin_username.format'] = 'Brugernavnet må kun indeholde alfanumeriske tegn.';
$lang['DirectAdmin.!error.direct_admin_username.length'] = 'Brugernavnet skal være mellem 4 og 8 tegn langt.';
$lang['DirectAdmin.!error.direct_admin_password.format'] = 'Sørg for, at adgangskoden indeholder følgende: Mindst 12 tegn, mindst 1 stort bogstav A-Z, mindst 1 lille bogstav a-z, mindst 1 tal 0-9, og mindst 1 specialtegn fra sættet: !"#$%&\'()*+,-./:;<=>?@[]^_` {|}';
$lang['DirectAdmin.!error.direct_admin_password.matches'] = 'Password og Confirm Password stemmer ikke overens.';
$lang['DirectAdmin.!error.direct_admin_email.format'] = 'Indtast venligst en gyldig e-mailadresse.';
$lang['DirectAdmin.!error.change_package.type'] = 'Modulet understøtter ikke skift mellem bruger- og forhandlerpakker.';
$lang['DirectAdmin.description'] = 'DirectAdmin er et grafisk webbaseret kontrolpanel til webhosting, der er designet til at gøre administrationen af hjemmesider lettere.';
$lang['DirectAdmin.module_row'] = 'Server';
$lang['DirectAdmin.module_row_plural'] = 'Servere';
$lang['DirectAdmin.module_group'] = 'Servergruppe';
$lang['DirectAdmin.tab_stats'] = 'Statistik';
$lang['DirectAdmin.tab_client_actions'] = 'Handlinger';
$lang['DirectAdmin.order_options.first'] = 'Første ikke-fulde server';
$lang['DirectAdmin.order_options.roundrobin'] = 'Fordel jævnt mellem servere';
$lang['DirectAdmin.servers.no_results'] = 'Der er ingen servere.';
$lang['DirectAdmin.server_groups.no_results'] = 'Der er ingen servergrupper.';
$lang['DirectAdmin.service_field.domain'] = 'Domæne';
$lang['DirectAdmin.service_field.username'] = 'Brugernavn';
$lang['DirectAdmin.service_field.password'] = 'Adgangskode';
$lang['DirectAdmin.service_field.email'] = 'E-mail';
$lang['DirectAdmin.service_field.text_generate_password'] = 'Generer adgangskode';
$lang['DirectAdmin.tab_client_actions.change_password'] = 'Skift adgangskode';
$lang['DirectAdmin.tab_client_actions.field_direct_admin_password'] = 'Adgangskode';
$lang['DirectAdmin.tab_client_actions.field_direct_admin_confirm_password'] = 'Bekræft adgangskode';
$lang['DirectAdmin.tab_client_actions.field_password_submit'] = 'Opdater adgangskode';
$lang['DirectAdmin.tab_client_actions.text_generate_password'] = 'Generer adgangskode';
$lang['DirectAdmin.service_info.username'] = 'Brugernavn';
$lang['DirectAdmin.service_info.password'] = 'Adgangskode';
$lang['DirectAdmin.service_info.server'] = 'Server';
$lang['DirectAdmin.service_info.options'] = 'Valgmuligheder';
$lang['DirectAdmin.service_info.option_login'] = 'Log ind';
$lang['DirectAdmin.package_fields.type'] = 'Kontotype';
$lang['DirectAdmin.package_fields.type_user'] = 'Bruger';
$lang['DirectAdmin.package_fields.type_reseller'] = 'Forhandler';
$lang['DirectAdmin.name'] = 'DirectAdmin';
$lang['DirectAdmin.package_fields.package'] = 'DirectAdmin-pakke';
$lang['DirectAdmin.package_fields.ip'] = 'IP-adresse';
$lang['DirectAdmin.package_fields.ip_shared'] = 'Delt';
$lang['DirectAdmin.package_fields.ip_assign'] = 'Tildel';
$lang['DirectAdmin.add_module_row'] = 'Tilføj server';
$lang['DirectAdmin.add_module_group'] = 'Tilføj servergruppe';
$lang['DirectAdmin.manage.module_rows_title'] = 'Servere';
$lang['DirectAdmin.manage.module_groups_title'] = 'Servergrupper';
$lang['DirectAdmin.manage.module_rows_heading.name'] = 'Server-etiket';
$lang['DirectAdmin.manage.module_rows_heading.host_name'] = 'Værtsnavn';
$lang['DirectAdmin.manage.module_rows_heading.accounts'] = 'Regnskaber';
$lang['DirectAdmin.manage.module_rows_heading.options'] = 'Valgmuligheder';
$lang['DirectAdmin.manage.module_groups_heading.name'] = 'Gruppens navn';
$lang['DirectAdmin.manage.module_groups_heading.servers'] = 'Antal servere';
$lang['DirectAdmin.manage.module_groups_heading.options'] = 'Valgmuligheder';
$lang['DirectAdmin.manage.module_rows.count'] = '%1$s / %2$s';
$lang['DirectAdmin.manage.module_rows.edit'] = 'Rediger';
$lang['DirectAdmin.manage.module_groups.edit'] = 'Rediger';
$lang['DirectAdmin.manage.module_rows.delete'] = 'Slet';
$lang['DirectAdmin.manage.module_groups.delete'] = 'Slet';
$lang['DirectAdmin.manage.module_rows.confirm_delete'] = 'Er du sikker på, at du vil slette denne server?';
$lang['DirectAdmin.manage.module_groups.confirm_delete'] = 'Er du sikker på, at du vil slette denne servergruppe?';
$lang['DirectAdmin.row_meta.server_name'] = 'Server-etiket';
$lang['DirectAdmin.row_meta.host_name'] = 'Værtsnavn';
$lang['DirectAdmin.row_meta.port'] = 'Havn';
$lang['DirectAdmin.row_meta.default_port'] = '2222';
$lang['DirectAdmin.row_meta.user_name'] = 'Brugernavn';
$lang['DirectAdmin.row_meta.password'] = 'Adgangskode';
$lang['DirectAdmin.row_meta.use_ssl'] = 'Brug SSL, når du opretter forbindelse til API\'en (anbefales)';
$lang['DirectAdmin.row_meta.account_limit'] = 'Grænse for konto';
$lang['DirectAdmin.row_meta.name_server'] = 'Navneserver %1$s';
$lang['DirectAdmin.add_row.box_title'] = 'Tilføj DirectAdmin-server';
$lang['DirectAdmin.add_row.basic_title'] = 'Grundlæggende indstillinger';
$lang['DirectAdmin.add_row.name_servers_title'] = 'Navneservere';
$lang['DirectAdmin.add_row.name_server_btn'] = 'Tilføj yderligere navneserver';
$lang['DirectAdmin.add_row.name_server_col'] = 'Navneserver';
$lang['DirectAdmin.add_row.name_server_host_col'] = 'Værtsnavn';
$lang['DirectAdmin.add_row.remove_name_server'] = 'Fjern';
$lang['DirectAdmin.add_row.notes_title'] = 'Noter';
$lang['DirectAdmin.add_row.add_btn'] = 'Tilføj server';
$lang['DirectAdmin.edit_row.box_title'] = 'Rediger DirectAdmin-server';
$lang['DirectAdmin.edit_row.basic_title'] = 'Grundlæggende indstillinger';
$lang['DirectAdmin.edit_row.name_servers_title'] = 'Navneservere';
$lang['DirectAdmin.edit_row.name_server_btn'] = 'Tilføj yderligere navneserver';
$lang['DirectAdmin.edit_row.name_server_col'] = 'Navneserver';
$lang['DirectAdmin.edit_row.name_server_host_col'] = 'Værtsnavn';
$lang['DirectAdmin.edit_row.remove_name_server'] = 'Fjern';
$lang['DirectAdmin.edit_row.notes_title'] = 'Noter';
$lang['DirectAdmin.edit_row.add_btn'] = 'Rediger server';
$lang['DirectAdmin.tab_client_stats'] = 'Statistik';
$lang['DirectAdmin.tab_client_stats.info_title'] = 'Information';
$lang['DirectAdmin.tab_client_stats.info_heading.field'] = 'Mark';
$lang['DirectAdmin.tab_client_stats.info_heading.value'] = 'Værdi';
$lang['DirectAdmin.tab_client_stats.no_results'] = 'Statistiske oplysninger er ikke tilgængelige i øjeblikket.';
$lang['DirectAdmin.row_meta.ip_address'] = 'IP-adresse';
$lang['DirectAdmin.!error.ip_address.format'] = 'IP-adressen ser ud til at være ugyldig.';
$lang['DirectAdmin.row_meta.http_version'] = 'HTTP-version';

