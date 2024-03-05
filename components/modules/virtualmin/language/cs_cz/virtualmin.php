<?php
/**
 * Virtualmin
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Virtualmin.!error.virtualmin_password.valid'] = 'Heslo musí mít alespoň 8 znaků.';
$lang['Virtualmin.!error.virtualmin_username.length'] = 'Uživatelské jméno musí mít délku 1 až 16 znaků.';
$lang['Virtualmin.!error.virtualmin_username.test'] = 'Uživatelské jméno nesmí začínat slovem "test".';
$lang['Virtualmin.!error.virtualmin_username.format'] = 'Uživatelské jméno může obsahovat pouze písmena a číslice a nesmí začínat číslicí.';
$lang['Virtualmin.!error.virtualmin_domain.test'] = 'Název domény nemůže začínat na \'test\'.';
$lang['Virtualmin.!error.virtualmin_domain.format'] = 'Zadejte platný název domény, např. domain.com.';
$lang['Virtualmin.!error.module_row.missing'] = 'Došlo k interní chybě. Řádek modulu není k dispozici.';
$lang['Virtualmin.!error.api.internal'] = 'Došlo k interní chybě nebo server na požadavek neodpověděl.';
$lang['Virtualmin.!error.meta[template].empty'] = 'Je vyžadována šablona VirtualMin.';
$lang['Virtualmin.!error.meta[plan].empty'] = 'Je vyžadován plán VirtualMin.';
$lang['Virtualmin.!error.account_limit_valid'] = 'Zadejte prosím platný limit účtu.';
$lang['Virtualmin.!error.password_valid_connection'] = 'Připojení k serveru se nepodařilo navázat. Zkontrolujte, zda jsou název hostitele, uživatelské jméno, heslo a port správné.';
$lang['Virtualmin.!error.password_valid'] = 'Heslo se zdá být neplatné.';
$lang['Virtualmin.!error.port_valid'] = 'Zdá se, že port je neplatný.';
$lang['Virtualmin.!error.user_name_valid'] = 'Uživatelské jméno se zdá být neplatné.';
$lang['Virtualmin.!error.host_name_valid'] = 'Název hostitele se zdá být neplatný.';
$lang['Virtualmin.!error.server_name_valid'] = 'Je třeba zadat označení serveru.';
$lang['Virtualmin.service_field.tooltip.password'] = 'Heslo můžete nechat prázdné, aby se vygenerovalo automaticky.';
$lang['Virtualmin.service_field.tooltip.username'] = 'Uživatelské jméno můžete nechat prázdné, aby se vygenerovalo automaticky.';
$lang['Virtualmin.service_info.option_login'] = 'Přihlášení';
$lang['Virtualmin.service_info.options'] = 'Možnosti';
$lang['Virtualmin.service_info.server'] = 'Server';
$lang['Virtualmin.service_info.password'] = 'Heslo';
$lang['Virtualmin.service_info.username'] = 'Uživatelské jméno';
$lang['Virtualmin.tab_stats.info.maximum_mailboxes'] = 'Maximální počet poštovních schránek';
$lang['Virtualmin.tab_stats.info.maximum_databases'] = 'Maximum databází';
$lang['Virtualmin.tab_stats.info.databases_count'] = 'Počet databází';
$lang['Virtualmin.tab_stats.info.databases_size'] = 'Velikost databáze';
$lang['Virtualmin.tab_stats.info.disk_used'] = 'Použitý disk';
$lang['Virtualmin.tab_stats.info_heading.value'] = 'Hodnota';
$lang['Virtualmin.tab_stats.info_heading.field'] = 'Pole';
$lang['Virtualmin.tab_stats.info_title'] = 'Informace';
$lang['Virtualmin.tab_client_actions.field_password_submit'] = 'Aktualizace hesla';
$lang['Virtualmin.tab_client_actions.field_virtualmin_confirm_password'] = 'Potvrzení hesla';
$lang['Virtualmin.tab_client_actions.field_virtualmin_password'] = 'Heslo';
$lang['Virtualmin.tab_client_actions.change_password'] = 'Změna hesla';
$lang['Virtualmin.service_field.confirm_password'] = 'Potvrzení hesla';
$lang['Virtualmin.service_field.password'] = 'Heslo';
$lang['Virtualmin.service_field.username'] = 'Uživatelské jméno';
$lang['Virtualmin.service_field.domain'] = 'Doména';
$lang['Virtualmin.package_fields.template'] = 'Šablona VirtualMin';
$lang['Virtualmin.package_fields.plan'] = 'Plán VirtualMin';
$lang['Virtualmin.row_meta.account_limit'] = 'Limit účtu';
$lang['Virtualmin.row_meta.use_ssl'] = 'Při připojování k rozhraní API používejte protokol SSL (doporučeno).';
$lang['Virtualmin.row_meta.port'] = 'Přístav';
$lang['Virtualmin.row_meta.password'] = 'Heslo';
$lang['Virtualmin.row_meta.user_name'] = 'Uživatelské jméno';
$lang['Virtualmin.row_meta.host_name'] = 'Hostitelské jméno';
$lang['Virtualmin.row_meta.server_name'] = 'Označení serveru';
$lang['Virtualmin.edit_row.add_btn'] = 'Upravit server';
$lang['Virtualmin.edit_row.basic_title'] = 'Základní nastavení';
$lang['Virtualmin.edit_row.box_title'] = 'Upravit server VirtualMin';
$lang['Virtualmin.add_row.add_btn'] = 'Přidat server';
$lang['Virtualmin.add_row.basic_title'] = 'Základní nastavení';
$lang['Virtualmin.add_row.box_title'] = 'Přidání serveru VirtualMin';
$lang['Virtualmin.order_options.first'] = 'První neplnohodnotný server';
$lang['Virtualmin.manage.module_groups_no_results'] = 'Neexistují žádné skupiny serverů.';
$lang['Virtualmin.manage.module_rows_no_results'] = 'Neexistují žádné servery.';
$lang['Virtualmin.manage.module_groups.confirm_delete'] = 'Opravdu chcete tuto skupinu serverů odstranit?';
$lang['Virtualmin.manage.module_rows.confirm_delete'] = 'Opravdu chcete tento server odstranit?';
$lang['Virtualmin.manage.module_groups.delete'] = 'Odstranit';
$lang['Virtualmin.manage.module_rows.delete'] = 'Odstranit';
$lang['Virtualmin.manage.module_groups.edit'] = 'Upravit';
$lang['Virtualmin.manage.module_rows.edit'] = 'Upravit';
$lang['Virtualmin.manage.module_rows.count'] = '%1$s / %2$s';
$lang['Virtualmin.manage.module_groups_heading.options'] = 'Možnosti';
$lang['Virtualmin.manage.module_groups_heading.servers'] = 'Počet serverů';
$lang['Virtualmin.manage.module_groups_heading.name'] = 'Název skupiny';
$lang['Virtualmin.manage.module_rows_heading.options'] = 'Možnosti';
$lang['Virtualmin.manage.module_rows_heading.accounts'] = 'Účty';
$lang['Virtualmin.manage.module_rows_heading.port'] = 'Přístav';
$lang['Virtualmin.manage.module_rows_heading.hostname'] = 'Hostitelské jméno';
$lang['Virtualmin.manage.module_rows_heading.name'] = 'Označení serveru';
$lang['Virtualmin.manage.module_groups_title'] = 'Skupiny serverů';
$lang['Virtualmin.manage.module_rows_title'] = 'Servery';
$lang['Virtualmin.add_module_group'] = 'Přidání skupiny serverů';
$lang['Virtualmin.add_module_row'] = 'Přidat server';
$lang['Virtualmin.tab_client_actions'] = 'Akce';
$lang['Virtualmin.tab_stats'] = 'Statistiky';
$lang['Virtualmin.module_group'] = 'Skupina serverů';
$lang['Virtualmin.module_row_plural'] = 'Servery';
$lang['Virtualmin.module_row'] = 'Server';
$lang['Virtualmin.description'] = 'Virtualmin je ovládací panel pro hosting domén a webových stránek, který umožňuje vytvářet a spravovat mnoho domén a je k dispozici v open source i komerčních verzích. Je založen na Webminu.';
$lang['Virtualmin.name'] = 'VirtualMin';

