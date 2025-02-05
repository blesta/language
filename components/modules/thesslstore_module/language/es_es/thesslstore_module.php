<?php
/**
 * Thesslstore Module
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ThesslstoreModule.!error.api.internal'] = 'Algo ha ido mal en la llamada a la API';
$lang['ThesslstoreModule.!error.credential_already_exist'] = 'Las credenciales ya existen';
$lang['ThesslstoreModule.!error.thesslstore_reseller_name.empty'] = 'Introduzca el nombre del distribuidor';
$lang['ThesslstoreModule.!error.api_partner_code_live.empty'] = 'Introduzca el código de socio API LIVE';
$lang['ThesslstoreModule.!error.api_partner_code_live.valid'] = 'Las credenciales de Live API no son válidas.';
$lang['ThesslstoreModule.!error.api_auth_token_live.empty'] = 'Por favor, introduzca LIVE API Auth Token';
$lang['ThesslstoreModule.!error.api_partner_code_test.empty'] = 'Introduzca el código de socio API de TEST';
$lang['ThesslstoreModule.!error.api_partner_code_test.valid'] = 'Las credenciales de la API de PRUEBA no son válidas.';
$lang['ThesslstoreModule.!error.api_auth_token_test.empty'] = 'Por favor, introduzca TEST API Auth Token';
$lang['ThesslstoreModule.!error.profit_margin.empty'] = 'Introduzca su margen de beneficio deseado';
$lang['ThesslstoreModule.!error.profit_margin.valid'] = 'Sólo números permitidos en el margen de beneficio deseado';
$lang['ThesslstoreModule.!error.invalid_screen'] = '¡Acción no válida! ¡Algo ha ido mal!';
$lang['ThesslstoreModule.!error.empty_package_group'] = 'Parece que no ha creado ningún grupo de paquetes. Tendrá que crear primero un grupo antes de importar cualquier producto. Una vez que lo haya hecho, por favor vuelva y proceda con la importación.';
$lang['ThesslstoreModule.!error.import_package_error'] = 'Productos ya existentes dentro del grupo de productos seleccionado.';
$lang['ThesslstoreModule.!success.import_package_success'] = 'Productos importados con éxito';
$lang['ThesslstoreModule.getCronTasks.tss_order_sync_name'] = 'Sincronización de pedidos SSL';
$lang['ThesslstoreModule.getCronTasks.tss_order_sync_desc'] = 'Este cron es necesario para sincronizar el estado del pedido y las actualizaciones de caducidad del certificado de The SSL Store.';
$lang['ThesslstoreModule.module_row'] = 'La credencial SSLStore';
$lang['ThesslstoreModule.module_row_plural'] = 'Revendedores';
$lang['ThesslstoreModule.add_credential_row'] = 'Añadir credencial';
$lang['ThesslstoreModule.edit_credential_row'] = 'Actualizar credenciales';
$lang['ThesslstoreModule.import_product_row'] = 'Importar paquetes';
$lang['ThesslstoreModule.setup_price_row'] = 'Precios de los paquetes de instalación';
$lang['ThesslstoreModule.replacement_order_row'] = 'Lista de pedidos de sustitución de Symantec';
$lang['ThesslstoreModule.add_row.box_title'] = 'Ajustes';
$lang['ThesslstoreModule.add_row.basic_title'] = 'Añadir credencial';
$lang['ThesslstoreModule.add_credential.update_success'] = 'Credencial API guardada correctamente';
$lang['ThesslstoreModule.reseller_price.box_title'] = 'Precios de los productos para revendedores';
$lang['ThesslstoreModule.add_row.setup_price'] = 'Actualizar los precios de los productos';
$lang['ThesslstoreModule.setup_price.view_reseller_price'] = 'Ver precio para revendedores';
$lang['ThesslstoreModule.setup_price.apply_margin'] = '¿Aplicar el margen de beneficio a todos los productos?';
$lang['ThesslstoreModule.setup_price.margin_percentage'] = 'Margen de beneficios (en %)';
$lang['ThesslstoreModule.setup_price.update_success'] = 'Precio actualizado correctamente.';
$lang['ThesslstoreModule.add_row.manage_credential'] = 'Credencial API';
$lang['ThesslstoreModule.add_row.import_packages'] = 'Importación de productos de tiendas SSL';
$lang['ThesslstoreModule.setup_price.update_mode'] = 'Parece que ha cambiado el "Modo de Operación" a "EN VIVO". Si los precios de los productos actuales se configuraron para el modo "PRUEBA", actualícelos desde aquí.';
$lang['ThesslstoreModule.row_meta.thesslstore_reseller_name'] = 'Nombre del revendedor';
$lang['ThesslstoreModule.row_meta.api_partner_code_live'] = 'Código de socio en directo';
$lang['ThesslstoreModule.row_meta.api_auth_token_live'] = 'AuthToken activo';
$lang['ThesslstoreModule.row_meta.api_partner_code_test'] = 'Prueba PartnerCode';
$lang['ThesslstoreModule.row_meta.api_auth_token_test'] = 'Prueba AuthToken';
$lang['ThesslstoreModule.row_meta.api_mode'] = 'Modo de funcionamiento';
$lang['ThesslstoreModule.row_meta.product_group'] = 'Seleccionar grupo de paquetes';
$lang['ThesslstoreModule.row_meta.profit_margin'] = 'Introduzca el margen de beneficio deseado';
$lang['ThesslstoreModule.row_meta.hide_changeapprover_option'] = '¿Ocultar la opción de correo electrónico del aprobador de cambios para los productos Symantec DV?';
$lang['ThesslstoreModule.credential_row.add_btn'] = 'Guardar';
$lang['ThesslstoreModule.import_packages_row.add_btn'] = 'Importar paquetes';
$lang['ThesslstoreModule.change_approver_email.save_btn'] = 'Guardar';
$lang['ThesslstoreModule.package_fields.product_code'] = 'Código del producto';
$lang['TheSSLStore.!error.meta[thesslstore_product_code].valid'] = 'Seleccione un producto';
$lang['TheSSLStore.!error.meta[thesslstore_vendor_name].valid'] = 'Nombre de proveedor no válido';
$lang['TheSSLStore.!error.meta[thesslstore_is_code_signing].valid'] = 'Valor de firma de código no válido';
$lang['TheSSLStore.!error.meta[thesslstore_min_san].valid'] = 'Valor mínimo de SAN no válido';
$lang['TheSSLStore.!error.meta[thesslstore_is_scan_product].valid'] = 'Valor de producto de escaneado no válido';
$lang['TheSSLStore.!error.meta[thesslstore_validation_type].valid'] = 'Tipo de validación no válido';
$lang['ThesslstoreModule.!error.invalid_service_status'] = 'El servicio debe estar activo para esta función';
$lang['ThesslstoreModule.success.generate_cert'] = 'El proceso de generación del certificado ha finalizado correctamente';
$lang['ThesslstoreModule.tab_CertDetails'] = 'Detalles del certificado';
$lang['ThesslstoreModule.tab_client_cert_details'] = 'Detalles del certificado';
$lang['ThesslstoreModule.tab_client_cert_details.order_status'] = 'Estado del pedido';
$lang['ThesslstoreModule.tab_client_cert_details.store_order_id'] = 'ID de pedido de la tienda';
$lang['ThesslstoreModule.tab_client_cert_details.token'] = 'Ficha';
$lang['ThesslstoreModule.tab_client_cert_details.package_name'] = 'Nombre del paquete';
$lang['ThesslstoreModule.tab_client_cert_details.vendor_order_id'] = 'ID de pedido del proveedor';
$lang['ThesslstoreModule.tab_client_cert_details.vendor_status'] = 'Estado del proveedor';
$lang['ThesslstoreModule.tab_client_cert_details.ssl_start_date'] = 'Fecha de provisión de SSL';
$lang['ThesslstoreModule.tab_client_cert_details.ssl_end_date'] = 'Fecha de caducidad de SSL';
$lang['ThesslstoreModule.tab_client_cert_details.domains'] = 'Dominio(s)';
$lang['ThesslstoreModule.tab_client_cert_details.verification_email'] = 'Correo electrónico de verificación';
$lang['ThesslstoreModule.tab_client_cert_details.siteseal_url'] = 'Obtenga el sello de su sitio web';
$lang['ThesslstoreModule.tab_client_cert_details.admin_details'] = 'Detalles administrativos';
$lang['ThesslstoreModule.tab_client_cert_details.admin_title'] = 'Título';
$lang['ThesslstoreModule.tab_client_cert_details.admin_first_name'] = 'Nombre';
$lang['ThesslstoreModule.tab_client_cert_details.admin_last_name'] = 'Apellido';
$lang['ThesslstoreModule.tab_client_cert_details.admin_email'] = 'Correo electrónico';
$lang['ThesslstoreModule.tab_client_cert_details.admin_phone'] = 'Teléfono';
$lang['ThesslstoreModule.tab_client_cert_details.tech_details'] = 'Detalles técnicos';
$lang['ThesslstoreModule.tab_client_cert_details.tech_title'] = 'Título';
$lang['ThesslstoreModule.tab_client_cert_details.tech_first_name'] = 'Nombre';
$lang['ThesslstoreModule.tab_client_cert_details.tech_last_name'] = 'Apellido';
$lang['ThesslstoreModule.tab_client_cert_details.tech_email'] = 'Correo electrónico';
$lang['ThesslstoreModule.tab_client_cert_details.tech_phone'] = 'Teléfono';
$lang['ThesslstoreModule.!error.reissue_cert_invalid_certificate_status'] = 'Reemisión disponible sólo para el certificado Activo.';
$lang['ThesslstoreModule.success.reissue_cert'] = 'Proceso de reemisión de certificados finalizado con éxito';
$lang['ThesslstoreModule.tab_reissue_cert.heading'] = 'Reemisión del certificado';
$lang['ThesslstoreModule.tab_reissue_cert.submit'] = 'Reedición';
$lang['ThesslstoreModule.tab_select_approver_email'] = 'Seleccionar correo electrónico del aprobador';
$lang['ThesslstoreModule.tab_ChangeApproverEmail'] = 'Cambiar el correo electrónico del aprobador';
$lang['ThesslstoreModule.!error.change_approver_email_not_available_for_order'] = 'La función de correo electrónico del aprobador de cambios no está disponible para este pedido.';
$lang['ThesslstoreModule.!error.change_approver_email_not_available_for_product'] = 'La función Change Approver Email no está disponible para este certificado.';
$lang['ThesslstoreModule.!error.resend_approver_email_not_available_for_order'] = 'La función Reenviar correo electrónico de aprobación no está disponible para este pedido.';
$lang['ThesslstoreModule.success.change_approver_email'] = 'Email del aprobador cambiado con éxito';
$lang['ThesslstoreModule.tab_DownloadAuthFile'] = 'Descargar archivo Auth';
$lang['ThesslstoreModule.!error.download_authfile_invalid_state'] = 'La función Descargar Authfile sólo está disponible para pedidos Pendientes/Reemitidos Pendientes.';
$lang['ThesslstoreModule.!error.download_authfile_not_available'] = 'La función Descargar Authfile no está disponible para este pedido.';
$lang['ThesslstoreModule.tab_DownloadCertificate'] = 'Descargar certificado';
$lang['ThesslstoreModule.!error.download_cert_invalid_state'] = 'La función de descarga de certificados sólo está disponible para pedidos activos.';
$lang['ThesslstoreModule.!error.initial_order_status'] = 'Esta función no está disponible para el pedido inicial.';
$lang['ThesslstoreModule.tab_GenerateCert'] = 'Generar certificado';
$lang['ThesslstoreModule.tab_generate_cert.heading_approver_email'] = 'Seleccionar correo electrónico del aprobador';
$lang['ThesslstoreModule.tab_generate_cert.heading_step3'] = 'Configuración completa';
$lang['ThesslstoreModule.!error.generate_cert_invalid_certificate_status'] = 'Proceso de generación ya finalizado.';
$lang['ThesslstoreModule.tab_generate_cert.heading_server'] = 'Información del servidor';
$lang['ThesslstoreModule.service_field.thesslstore_csr'] = 'Entrada CSR';
$lang['ThesslstoreModule.service_field.thesslstore_additional_san'] = 'SAN adicional';
$lang['ThesslstoreModule.service_field.thesslstore_webserver_type'] = 'Seleccione su servidor web';
$lang['ThesslstoreModule.service_field.thesslstore_signature_algorithm'] = 'Algoritmo de firma';
$lang['ThesslstoreModule.tab_generate_cert.heading_auth_method'] = 'Método de autenticación';
$lang['ThesslstoreModule.tab_generate_cert.heading_admin'] = 'Información de contacto administrativo';
$lang['ThesslstoreModule.service_field.thesslstore_admin_first_name'] = 'Nombre';
$lang['ThesslstoreModule.service_field.thesslstore_admin_last_name'] = 'Apellido';
$lang['ThesslstoreModule.service_field.thesslstore_admin_title'] = 'Título';
$lang['ThesslstoreModule.service_field.thesslstore_admin_email'] = 'Dirección de correo electrónico';
$lang['ThesslstoreModule.service_field.thesslstore_admin_phone'] = 'Número de teléfono';
$lang['ThesslstoreModule.service_field.thesslstore_org_name'] = 'Nombre de la organización';
$lang['ThesslstoreModule.service_field.thesslstore_org_division'] = 'División de Organización';
$lang['ThesslstoreModule.service_field.thesslstore_admin_address1'] = 'Dirección 1';
$lang['ThesslstoreModule.service_field.thesslstore_admin_address2'] = 'Dirección 2';
$lang['ThesslstoreModule.service_field.thesslstore_admin_city'] = 'Ciudad';
$lang['ThesslstoreModule.service_field.thesslstore_admin_state'] = 'Estado/Región';
$lang['ThesslstoreModule.service_field.thesslstore_admin_country'] = 'País';
$lang['ThesslstoreModule.service_field.thesslstore_admin_zip'] = 'Código postal';
$lang['ThesslstoreModule.tab_generate_cert.heading_tech'] = 'Información técnica de contacto';
$lang['ThesslstoreModule.service_field.thesslstore_same_as_admin'] = '¿Igual que la información administrativa anterior?';
$lang['ThesslstoreModule.service_field.thesslstore_tech_first_name'] = 'Nombre';
$lang['ThesslstoreModule.service_field.thesslstore_tech_last_name'] = 'Apellido';
$lang['ThesslstoreModule.service_field.thesslstore_tech_title'] = 'Título';
$lang['ThesslstoreModule.service_field.thesslstore_tech_email'] = 'Dirección de correo electrónico';
$lang['ThesslstoreModule.service_field.thesslstore_tech_phone'] = 'Número de teléfono';
$lang['ThesslstoreModule.please_select'] = '-- Seleccione --';
$lang['ThesslstoreModule.tab_generate_cert_step1.submit'] = 'Enviar';
$lang['ThesslstoreModule.!error.thesslstore_csr.empty'] = 'Introduzca el CSR';
$lang['ThesslstoreModule.!error.thesslstore_csr.valid'] = 'Introduzca un CSR válido';
$lang['ThesslstoreModule.!error.thesslstore_additional_san.empty'] = 'Introduzca como mínimo 1 SAN adicional';
$lang['ThesslstoreModule.!error.thesslstore_webserver_type.empty'] = 'Seleccione un servidor web';
$lang['ThesslstoreModule.!error.thesslstore_auth_method.empty'] = 'Seleccione el método de autenticación';
$lang['ThesslstoreModule.!error.thesslstore_signature_algorithm.empty'] = 'Seleccione el algoritmo de firma';
$lang['ThesslstoreModule.!error.thesslstore_admin_first_name.empty'] = 'Introduzca el nombre del administrador';
$lang['ThesslstoreModule.!error.thesslstore_admin_last_name.empty'] = 'Introduzca el apellido del administrador';
$lang['ThesslstoreModule.!error.thesslstore_admin_email.empty'] = 'Introduzca la dirección de correo electrónico del administrador';
$lang['ThesslstoreModule.!error.thesslstore_admin_phone.empty'] = 'Introduzca el teléfono del administrador';
$lang['ThesslstoreModule.!error.thesslstore_org_name.empty'] = 'Introduzca el nombre de la organización';
$lang['ThesslstoreModule.!error.thesslstore_org_division.empty'] = 'Por favor, introduzca la División de la Organización';
$lang['ThesslstoreModule.!error.thesslstore_admin_address1.empty'] = 'Introduzca la dirección';
$lang['ThesslstoreModule.!error.thesslstore_admin_city.empty'] = 'Introduzca la ciudad';
$lang['ThesslstoreModule.!error.thesslstore_admin_state.empty'] = 'Por favor, introduzca el Estado/Región';
$lang['ThesslstoreModule.!error.thesslstore_admin_country.empty'] = 'Seleccione un condado';
$lang['ThesslstoreModule.!error.thesslstore_admin_zip.empty'] = 'Introduzca el código postal';
$lang['ThesslstoreModule.!error.thesslstore_tech_first_name.empty'] = 'Por favor, introduzca el nombre técnico';
$lang['ThesslstoreModule.!error.thesslstore_tech_last_name.empty'] = 'Por favor, introduzca el Apellido Técnico';
$lang['ThesslstoreModule.!error.thesslstore_tech_email.empty'] = 'Introduzca el correo electrónico técnico';
$lang['ThesslstoreModule.!error.thesslstore_tech_phone.empty'] = 'Por favor, introduzca el Teléfono Técnico';
$lang['ThesslstoreModule.tab_ResendApproverEmail'] = 'Reenviar correo electrónico de aprobación';
$lang['ThesslstoreModule.success.resend_approver_email'] = 'Aprobador Correo electrónico enviado correctamente';
$lang['ThesslstoreModule.!error.resend_invalid_status'] = 'Reenviar correo electrónico de aprobación sólo está disponible para pedidos pendientes';
$lang['ThesslstoreModule.tab_ReissueCert'] = 'Reemisión del certificado';
$lang['ThesslstoreModule.tab_AdminManagementAction'] = 'Acciones de gestión';
$lang['ThesslstoreModule.replacement_order.box_title'] = 'Lista de pedidos de sustitución de Symantec';
$lang['ThesslstoreModule.replacement_order.export_csv'] = 'Exportar a CSV';
$lang['ThesslstoreModule.row_meta.replace_date'] = 'Sustituir por fecha';

