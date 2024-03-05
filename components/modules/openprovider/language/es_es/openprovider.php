<?php
/**
 * Openprovider
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['OpenProvider.config.name'] = 'Openprovider';
$lang['OpenProvider.config.description'] = 'Módulo Openprovider para Blesta.';
$lang['OpenProvider.config.module.row'] = 'Cuenta del Registrador';
$lang['OpenProvider.config.module.rows'] = 'Cuentas del Registrador';
$lang['OpenProvider.config.module.group'] = 'Cuentas del Registrador';
$lang['OpenProvider.config.module.row_keys'] = '';
$lang['OpenProvider.manage.add_row_btn'] = 'Añadir cuenta';
$lang['OpenProvider.manage.module_rows_title'] = 'Lista de cuentas';
$lang['OpenProvider.manage.module_rows_no_results'] = 'No hay cuentas.';
$lang['OpenProvider.manage.module_rows_header.username'] = 'Nombre de usuario';
$lang['OpenProvider.manage.module_rows_header.test_mode'] = 'Modo de prueba';
$lang['OpenProvider.manage.module_rows_header.options'] = 'Opciones';
$lang['OpenProvider.manage.module_rows.edit'] = 'Editar';
$lang['OpenProvider.manage.module_rows.delete'] = 'Borrar';
$lang['OpenProvider.manage.module_rows.confirm_delete'] = '¿Estás seguro de que quieres eliminar esta cuenta?';
$lang['OpenProvider.manage.manage_packages'] = 'Gestionar paquetes';
$lang['OpenProvider.add_row.box_title'] = 'Añadir cuenta OpenProvider';
$lang['OpenProvider.add_row.basic_title'] = 'Ajustes básicos';
$lang['OpenProvider.add_row.add_btn'] = 'Añadir cuenta';
$lang['OpenProvider.edit_row.box_title'] = 'Editar cuenta OpenProvider';
$lang['OpenProvider.edit_row.basic_title'] = 'Ajustes básicos';
$lang['OpenProvider.edit_row.add_btn'] = 'Actualizar cuenta';
$lang['OpenProvider.row_meta.username'] = 'Nombre de usuario';
$lang['OpenProvider.row_meta.password'] = 'Contraseña';
$lang['OpenProvider.row_meta.test_mode'] = 'Modo de prueba';
$lang['OpenProvider.row_meta.test_mode_true'] = 'Sí';
$lang['OpenProvider.row_meta.test_mode_false'] = 'No';
$lang['OpenProvider.package_fields.type'] = 'Tipo';
$lang['OpenProvider.package_fields.type_domain'] = 'Registro de dominios';
$lang['OpenProvider.package_fields.type_ssl'] = 'Certificado SSL';
$lang['OpenProvider.package_fields.tld_options'] = 'TLDs';
$lang['OpenProvider.nameserver.ns1'] = 'Servidor de nombres 1';
$lang['OpenProvider.nameserver.ns2'] = 'Servidor de nombres 2';
$lang['OpenProvider.nameserver.ns3'] = 'Servidor de nombres 3';
$lang['OpenProvider.nameserver.ns4'] = 'Servidor de nombres 4';
$lang['OpenProvider.nameserver.ns5'] = 'Servidor de nombres 5';
$lang['OpenProvider.domain.domain'] = 'Nombre de dominio';
$lang['OpenProvider.domain.identification_type'] = 'Tipo de identificación';
$lang['OpenProvider.domain.identification_type.passport_number'] = 'Número de pasaporte';
$lang['OpenProvider.domain.identification_type.passport_series'] = 'Serie Pasaporte';
$lang['OpenProvider.domain.identification_type.company_registration_number'] = 'Número de registro de la empresa';
$lang['OpenProvider.transfer.domain'] = 'Nombre de dominio';
$lang['OpenProvider.transfer.EPPCode'] = 'Código PPE';
$lang['OpenProvider.tab_nameservers.title'] = 'Servidores de nombres';
$lang['OpenProvider.tab_nameserver.field_ns'] = 'Servidor de nombres %1$s';
$lang['OpenProvider.tab_nameservers.field_submit'] = 'Actualizar servidores de nombres';
$lang['OpenProvider.tab_domain_contacts.title'] = 'Contactos de dominio';
$lang['OpenProvider.tab_domain_contacts.field_submit'] = 'Actualizar contactos de dominio';
$lang['OpenProvider.tab_domain_contacts.contact_type.admin'] = 'Admin';
$lang['OpenProvider.tab_domain_contacts.contact_type.billing'] = 'Facturación';
$lang['OpenProvider.tab_domain_contacts.contact_type.tech'] = 'Tecnología';
$lang['OpenProvider.tab_domain_contacts.contact_type.owner'] = 'Propietario';
$lang['OpenProvider.tab_domain_contacts.field.first_name'] = 'Nombre';
$lang['OpenProvider.tab_domain_contacts.field.last_name'] = 'Apellido';
$lang['OpenProvider.tab_domain_contacts.field.middle_name'] = 'Segundo nombre';
$lang['OpenProvider.tab_domain_contacts.field.email'] = 'Correo electrónico';
$lang['OpenProvider.tab_domain_contacts.field.phone_number'] = 'Teléfono';
$lang['OpenProvider.tab_domain_contacts.field.company_name'] = 'Empresa';
$lang['OpenProvider.tab_domain_contacts.field.address'] = 'Dirección';
$lang['OpenProvider.tab_domain_contacts.field.city'] = 'Ciudad';
$lang['OpenProvider.tab_domain_contacts.field.state'] = 'Estado';
$lang['OpenProvider.tab_domain_contacts.field.country'] = 'País';
$lang['OpenProvider.tab_domain_contacts.field.zipcode'] = 'Código postal';
$lang['OpenProvider.tab_domain_contacts.field.vat'] = 'Recipiente';
$lang['OpenProvider.tab_domain_contacts.field.company_or_individual_id'] = 'Identificación de empresa o particular';
$lang['OpenProvider.tab_settings.title'] = 'Ajustes';
$lang['OpenProvider.tab_settings.field.epp'] = 'Código EPP/Clave de transferencia';
$lang['OpenProvider.tab_settings.field.submit'] = 'Actualizar ajustes';
$lang['OpenProvider.tab_settings.message.epp_code'] = 'Código Epp: %s';
$lang['OpenProvider.tab_settings.field.is_locked_true'] = 'El bloqueo de transferencia de dominio está activado. Cambie para desactivarlo.';
$lang['OpenProvider.tab_settings.field.is_locked_false'] = 'El bloqueo de transferencia de dominio está desactivado. Cambie para activarlo.';
$lang['OpenProvider.!error.username.empty'] = 'El campo Nombre de usuario no debería estar vacío.';
$lang['OpenProvider.!error.password.empty'] = 'El campo Contraseña no debería estar vacío.';
$lang['OpenProvider.!error.password.valid_connection'] = 'Oops, algo va mal: La combinación de nombre de usuario, contraseña y modo de prueba parece no ser válida, o puede que su cuenta de OpenProvider no esté configurada para permitir el acceso a la API.';
$lang['OpenProvider.!error.client.not_exist'] = 'El cliente no existe.';
$lang['OpenProvider.!error.client.phone_not_exist'] = 'El número de teléfono del cliente está vacío.';
$lang['OpenProvider.!error.epp.empty'] = 'Las transferencias de dominio requieren la introducción de un código EPP.';
$lang['OpenProvider.!error.passport_number.empty'] = 'Este tld requiere que se introduzca un número de pasaporte.';
$lang['OpenProvider.!error.passport_series.empty'] = 'Este tld requiere que se introduzca una serie de pasaportes.';
$lang['OpenProvider.!error.domain.not_exist'] = 'Este dominio no existe en Openprovider.';
$lang['OpenProvider.!error.domain.contact_support'] = 'Póngase en contacto con el servicio de asistencia para obtener información sobre el dominio.';
$lang['OpenProvider.!error.domain.name_undefined'] = 'Nombre de dominio indefinido.';
$lang['OpenProvider.!error.service.domain.status_not_active_in_blesta'] = 'No se puede acceder a esa sección mientras el servicio no esté en estado Activo.';

