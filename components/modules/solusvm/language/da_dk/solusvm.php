<?php
/**
 * Solusvm
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Solusvm.!actions.boot'] = 'Støvle';
$lang['Solusvm.!actions.reboot'] = 'Genstart';
$lang['Solusvm.!actions.shutdown'] = 'Nedlukning';
$lang['Solusvm.!actions.reinstall'] = 'Geninstaller';
$lang['Solusvm.!actions.hostname'] = 'Skift værtsnavn';
$lang['Solusvm.!actions.password'] = 'Skift adgangskode';
$lang['SolusVM.!error.simplexml_required'] = 'Simplexml-udvidelsen er påkrævet til dette modul.';
$lang['Solusvm.!error.server_name.empty'] = 'Indtast venligst en serverlabel.';
$lang['Solusvm.!error.user_id.empty'] = 'Indtast venligst et bruger-id.';
$lang['Solusvm.!error.key.empty'] = 'Indtast venligst en nøgle.';
$lang['Solusvm.!error.host.format'] = 'Værtsnavnet ser ud til at være ugyldigt.';
$lang['Solusvm.!error.port.format'] = 'Indtast venligst et gyldigt portnummer.';
$lang['Solusvm.!error.meta[type].valid'] = 'Vælg venligst en gyldig virtualiseringstype.';
$lang['Solusvm.!error.meta[nodes].empty'] = 'Vælg mindst én node eller nodegruppe.';
$lang['Solusvm.!error.meta[plan].empty'] = 'Vælg venligst en plan.';
$lang['Solusvm.!error.meta[set_template].format'] = 'Indstil, om der skal vælges en skabelon, eller om kunderne skal have mulighed for at vælge en skabelon.';
$lang['Solusvm.!error.meta[template].empty'] = 'Vælg venligst en skabelon.';
$lang['Solusvm.!error.meta[total_base_ip_addresses].format'] = 'Indtast kun cifre for antallet af IP-adresser, med en værdi på 1 eller mere.';
$lang['Solusvm.!error.api.internal'] = 'Der opstod en intern fejl, eller serveren svarede ikke på anmodningen.';
$lang['Solusvm.!error.solusvm_hostname.format'] = 'Indtast venligst et gyldigt fuldt kvalificeret domænenavn (f.eks. host.domain.com) for værtsnavnet.';
$lang['Solusvm.!error.solusvm_template.valid'] = 'Vælg venligst en gyldig skabelon.';
$lang['Solusvm.!error.create_client.failed'] = 'Der opstod en intern fejl, og klientkontoen kunne ikke oprettes.';
$lang['Solusvm.!error.api.template.valid'] = 'Den valgte skabelon er ugyldig.';
$lang['Solusvm.!error.api.confirm.valid'] = 'Du skal bekræfte, at du forstår geninstallationshandlingen for at kunne udføre geninstallationen af skabelonen.';
$lang['Solusvm.!error.solusvm_root_password.length'] = 'Rodadgangskoden skal være på mindst 6 tegn.';
$lang['Solusvm.!error.solusvm_root_password.matches'] = 'Rodadgangskoderne stemmer ikke overens.';
$lang['Solusvm.!error.solusvm_vserver_id.format'] = 'Den virtuelle servers ID skal være et heltal.';
$lang['Solusvm.!error.configoptions[customextraip].valid'] = 'Antallet af ekstra IP\'er kan ikke reduceres uden at angive, hvilke IP\'er der skal fjernes.';
$lang['Solusvm.!success.boot'] = 'Serveren starter nu op.';
$lang['Solusvm.!success.reboot'] = 'Serveren genstarter nu.';
$lang['Solusvm.!success.shutdown'] = 'Serveren er nu ved at lukke ned.';
$lang['Solusvm.!success.password'] = 'Adgangskoden blev ændret med succes.';
$lang['Solusvm.!success.hostname'] = 'Værtsnavnet blev ændret med succes.';
$lang['Solusvm.!success.reinstall'] = 'Serveren er nu ved at blive geninstalleret.';
$lang['Solusvm.please_select'] = '-- Vælg venligst --';
$lang['Solusvm.!bytes.value'] = '%1$s%2$s';
$lang['Solusvm.!percent.used'] = '%1$s%';
$lang['Solusvm.description'] = 'Solus Virtual Manager (SolusVM) er et kraftfuldt GUI-baseret VPS-administrationssystem med fuld OpenVZ-, Linux KVM-, Xen Paravirtualization- og Xen HVM-understøttelse.';
$lang['Solusvm.module_row'] = 'SolusVM Master Server';
$lang['Solusvm.module_row_plural'] = 'Servere';
$lang['Solusvm.module_group'] = 'SolusVM Master Group';
$lang['Solusvm.add_module_row'] = 'Tilføj server';
$lang['Solusvm.add_module_group'] = 'Tilføj servergruppe';
$lang['Solusvm.manage.module_rows_title'] = 'SolusVM-masterservere';
$lang['Solusvm.manage.module_groups_title'] = 'SolusVM Master Server-grupper';
$lang['Solusvm.manage.module_rows_heading.server_label'] = 'Server-etiket';
$lang['Solusvm.manage.module_rows_heading.host'] = 'Værtsnavn';
$lang['Solusvm.manage.module_rows_heading.options'] = 'Valgmuligheder';
$lang['Solusvm.manage.module_groups_heading.name'] = 'Gruppens navn';
$lang['Solusvm.manage.module_groups_heading.servers'] = 'Antal servere';
$lang['Solusvm.manage.module_groups_heading.options'] = 'Valgmuligheder';
$lang['Solusvm.manage.module_rows.edit'] = 'Rediger';
$lang['Solusvm.manage.module_groups.edit'] = 'Rediger';
$lang['Solusvm.manage.module_rows.delete'] = 'Slet';
$lang['Solusvm.manage.module_groups.delete'] = 'Slet';
$lang['Solusvm.manage.module_rows.confirm_delete'] = 'Er du sikker på, at du vil slette denne server?';
$lang['Solusvm.manage.module_groups.confirm_delete'] = 'Er du sikker på, at du vil slette denne servergruppe?';
$lang['Solusvm.manage.module_rows_no_results'] = 'Der er ingen servere.';
$lang['Solusvm.manage.module_groups_no_results'] = 'Der er ingen servergrupper.';
$lang['Solusvm.order_options.first'] = 'Første ikke-fulde server';
$lang['Solusvm.row_meta.server_name'] = 'Server-etiket';
$lang['Solusvm.row_meta.user_id'] = 'Bruger-ID';
$lang['Solusvm.row_meta.key'] = 'Nøgle';
$lang['Solusvm.row_meta.host'] = 'Værtsnavn';
$lang['Solusvm.row_meta.port'] = 'SSL-portnummer';
$lang['Solusvm.row_meta.default_port'] = '5656';
$lang['Solusvm.types.openvz'] = 'OpenVZ';
$lang['Solusvm.types.xen'] = 'Xen';
$lang['Solusvm.types.xen_hvm'] = 'Xen HVM';
$lang['Solusvm.types.kvm'] = 'KVM';
$lang['Solusvm.add_row.box_title'] = 'Tilføj SolusVM-server';
$lang['Solusvm.add_row.basic_title'] = 'Grundlæggende indstillinger';
$lang['Solusvm.add_row.add_btn'] = 'Tilføj server';
$lang['Solusvm.edit_row.box_title'] = 'Rediger SolusVM-server';
$lang['Solusvm.edit_row.basic_title'] = 'Grundlæggende indstillinger';
$lang['Solusvm.edit_row.add_btn'] = 'Opdater server';
$lang['Solusvm.package_fields.total_base_ip_addresses'] = 'Base IP-adresse Antal';
$lang['Solusvm.package_fields.tooltip.total_base_ip_addresses'] = 'Indtast det samlede antal IP-adresser, der skal inkluderes i nye tjenester. Der skal være mindst én, og IP\'erne kan ikke fjernes.';
$lang['Solusvm.package_fields.type'] = 'Type';
$lang['Solusvm.package_fields.template'] = 'Skabelon';
$lang['Solusvm.package_fields.admin_set_template'] = 'Vælg en skabelon';
$lang['Solusvm.package_fields.client_set_template'] = 'Lad kunden sætte skabelonen';
$lang['Solusvm.package_fields.plan'] = 'Plan';
$lang['Solusvm.package_fields.assigned_nodes'] = 'Tildelte noder';
$lang['Solusvm.package_fields.available_nodes'] = 'Tilgængelige noder';
$lang['Solusvm.package_fields.set_node'] = 'Tildel et sæt knudepunkter';
$lang['Solusvm.package_fields.set_node_group'] = 'Tildel en nodegruppe';
$lang['Solusvm.package_fields.node_group'] = 'Node-gruppe';
$lang['Solusvm.service_field.solusvm_hostname'] = 'Værtsnavn';
$lang['Solusvm.service_field.solusvm_template'] = 'Skabelon';
$lang['Solusvm.service_field.solusvm_vserver_id'] = 'Virtuel server-ID';
$lang['Solusvm.name'] = 'SolusVM';
$lang['Solusvm.service_field.tooltip.solusvm_vserver_id'] = 'Virtual Server ID angiver den VPS fra SolusVM, som denne tjeneste skal knyttes til. Ændring af denne værdi vil kun påvirke denne service lokalt.';
$lang['Solusvm.service_info.solusvm_main_ip_address'] = 'Primær IP-adresse';
$lang['Solusvm.tab_actions'] = 'Serverhandlinger';
$lang['Solusvm.tab_stats'] = 'Statistik';
$lang['Solusvm.tab_console'] = 'Konsol';
$lang['Solusvm.tab_ips'] = 'IP-adresser';
$lang['Solusvm.tab_actions.heading_actions'] = 'Handlinger';
$lang['Solusvm.tab_actions.status_online'] = 'Online';
$lang['Solusvm.tab_actions.status_offline'] = 'Offline';
$lang['Solusvm.tab_actions.status_disabled'] = 'Deaktiveret';
$lang['Solusvm.tab_actions.server_status'] = 'Serverstatus';
$lang['Solusvm.tab_actions.node'] = 'Knude: %1$s';
$lang['Solusvm.tab_actions.heading_reinstall'] = 'Geninstaller';
$lang['Solusvm.tab_actions.field_template'] = 'Skabelon';
$lang['Solusvm.tab_actions.field_confirm'] = 'Jeg forstår, at alle data på serveren vil blive slettet permanent ved geninstallation, og at den valgte skabelon vil blive installeret.';
$lang['Solusvm.tab_actions.field_reinstall_submit'] = 'Geninstaller';
$lang['Solusvm.tab_actions.heading_hostname'] = 'Skift værtsnavn';
$lang['Solusvm.tab_actions.text_hostname_reboot'] = 'En ændring af værtsnavnet vil først træde i kraft, når serveren er blevet genstartet.';
$lang['Solusvm.tab_actions.field_hostname'] = 'Værtsnavn';
$lang['Solusvm.tab_actions.field_hostname_submit'] = 'Skift værtsnavn';
$lang['Solusvm.tab_actions.heading_password'] = 'Skift adgangskode';
$lang['Solusvm.tab_actions.field_password'] = 'Ny adgangskode til roden';
$lang['Solusvm.tab_actions.field_confirm_password'] = 'Bekræft adgangskode';
$lang['Solusvm.tab_actions.field_password_submit'] = 'Skift adgangskode';
$lang['Solusvm.tab_actions.text_generate_password'] = 'Generer adgangskode';
$lang['Solusvm.tab_client_actions.heading_actions'] = 'Handlinger';
$lang['Solusvm.tab_client_actions.heading_server_status'] = 'Serverstatus';
$lang['Solusvm.tab_client_actions.heading_node'] = 'Knudepunkt';
$lang['Solusvm.tab_client_actions.status_online'] = 'Online';
$lang['Solusvm.tab_client_actions.status_offline'] = 'Offline';
$lang['Solusvm.tab_client_actions.status_disabled'] = 'Deaktiveret';
$lang['Solusvm.tab_client_actions.heading_reinstall'] = 'Geninstaller';
$lang['Solusvm.tab_client_actions.field_template'] = 'Skabelon';
$lang['Solusvm.tab_client_actions.field_confirm'] = 'Jeg forstår, at alle data på serveren vil blive slettet permanent ved geninstallation, og at den valgte skabelon vil blive installeret.';
$lang['Solusvm.tab_client_actions.field_reinstall_submit'] = 'Geninstaller';
$lang['Solusvm.tab_client_actions.heading_hostname'] = 'Skift værtsnavn';
$lang['Solusvm.tab_client_actions.text_hostname_reboot'] = 'En ændring af værtsnavnet vil først træde i kraft, når serveren er blevet genstartet.';
$lang['Solusvm.tab_client_actions.field_hostname'] = 'Værtsnavn';
$lang['Solusvm.tab_client_actions.field_hostname_submit'] = 'Skift værtsnavn';
$lang['Solusvm.tab_client_actions.heading_password'] = 'Skift adgangskode';
$lang['Solusvm.tab_client_actions.field_password'] = 'Ny adgangskode til roden';
$lang['Solusvm.tab_client_actions.field_confirm_password'] = 'Bekræft adgangskode';
$lang['Solusvm.tab_client_actions.field_password_submit'] = 'Skift adgangskode';
$lang['Solusvm.tab_client_actions.text_generate_password'] = 'Generer adgangskode';
$lang['Solusvm.tab_stats.heading_stats'] = 'Statistik';
$lang['Solusvm.tab_stats.bandwidth'] = 'Båndbredde:';
$lang['Solusvm.tab_stats.bandwidth_stats'] = '%1$s/%2$s';
$lang['Solusvm.tab_stats.bandwidth_percent_available'] = '(%1$s%%)';
$lang['Solusvm.tab_stats.memory'] = 'Hukommelse:';
$lang['Solusvm.tab_stats.memory_stats'] = '%1$s/%2$s';
$lang['Solusvm.tab_stats.memory_percent_available'] = '(%1$s%%)';
$lang['Solusvm.tab_stats.space'] = 'Diskplads:';
$lang['Solusvm.tab_stats.space_stats'] = '%1$s/%2$s';
$lang['Solusvm.tab_stats.space_percent_available'] = '(%1$s%%)';
$lang['Solusvm.tab_status.no_results'] = 'Statistikker er ikke tilgængelige i øjeblikket.';
$lang['Solusvm.tab_stats.heading_graphs'] = 'Grafer';
$lang['Solusvm.tab_client_stats.heading_stats'] = 'Statistik';
$lang['Solusvm.tab_client_stats.bandwidth'] = 'Båndbredde';
$lang['Solusvm.tab_client_stats.memory'] = 'Hukommelse';
$lang['Solusvm.tab_client_stats.space'] = 'Diskplads';
$lang['Solusvm.tab_client_stats.usage'] = '(%1$s/%2$s)';
$lang['Solusvm.tab_client_stats.heading_graphs'] = 'Grafer';
$lang['Solusvm.tab_console.heading_console'] = 'Konsol';
$lang['Solusvm.tab_console.console_username'] = 'Brugernavn til konsol:';
$lang['Solusvm.tab_console.console_password'] = 'Adgangskode til konsol:';
$lang['Solusvm.tab_console.vnc_ip'] = 'VNC-vært:';
$lang['Solusvm.tab_console.vnc_port'] = 'VNC-port:';
$lang['Solusvm.tab_console.vnc_password'] = 'VNC adgangskode:';
$lang['Solusvm.tab_client_console.heading_console'] = 'Konsol';
$lang['Solusvm.tab_client_console.console_username'] = 'Brugernavn til konsol';
$lang['Solusvm.tab_client_console.console_password'] = 'Adgangskode til konsol';
$lang['Solusvm.tab_client_console.vnc_password'] = 'VNC adgangskode';
$lang['Solusvm.tab_ips.heading_ips'] = 'IP-adresser';
$lang['Solusvm.tab_ips.primary_ip'] = 'Primær IP-adresse: %1$s';
$lang['Solusvm.tab_ips.heading_extra_ips'] = 'Ekstra IP-adresser';
$lang['Solusvm.tab_ips.heading_ip'] = 'IP-adresse';
$lang['Solusvm.tab_ips.heading_options'] = 'Valgmuligheder';
$lang['Solusvm.tab_ips.option_remove'] = 'Fjern IP';
$lang['Solusvm.tab_ips.confirm_remove'] = 'Er du sikker på, at du vil fjerne denne IP-adresse permanent?';
$lang['Solusvm.tab_client_ips.heading_extra'] = 'Ekstra IP-adresser';
$lang['Solusvm.tab_client_ips.primary_ip'] = 'Primær IP-adresse';
$lang['Solusvm.tab_client_ips.heading_remove_ip'] = 'Fjern IP %1$s';
$lang['Solusvm.tab_client_ips.confirm_remove_ip'] = 'Er du sikker på, at du vil fjerne denne IP-adresse permanent?';
$lang['Solusvm.tab_client_ips.remove_ip'] = 'Fjern IP';
$lang['Solusvm.tab_client_ips.cancel'] = 'Annuller';
