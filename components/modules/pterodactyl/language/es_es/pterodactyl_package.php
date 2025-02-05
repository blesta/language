<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.!error.meta[location_id].format'] = 'El ID de ubicación debe ser numérico.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'El ID de ubicación no coincide con ninguno en Pterodactyl.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'La opción de utilizar una IP dedicada debe establecerse en 1 o 0.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'El rango de puertos debe tener el formato 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'El ID del nido debe ser numérico.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'El nido no coincide con ninguno de Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'El ID del huevo debe ser numérico.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'El huevo no coincide con ninguno en Pterodactyl.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'El ID del envase debe ser numérico.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'La cantidad de memoria debe ser numérica.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'El importe del swap debe ser numérico.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'El porcentaje de cpu debe ser numérico.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'La cantidad de espacio en disco debe ser numérica.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'El peso IO debe ser numérico.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'La ruta de la imagen debe tener un máximo de 255 caracteres.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'El número de bases de datos debe ser numérico.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'El número de asignaciones debe ser numérico.';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'El número de copias de seguridad debe ser numérico.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Ubicación';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Ubicación en la que se desplegarán automáticamente los servidores.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'IP dedicada (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Asignar ip dedicada a los servidores creados.';
$lang['PterodactylPackage.package_fields.port_range'] = 'Gama de puertos';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Rangos de puertos separados por comas para asignar al servidor (Ejemplo: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nido';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'El Nido para el servidor a utilizar.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Identificación de huevos';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID del Huevo para que lo use el servidor.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Pack ID (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID del Pack con el que instalar el servidor.';
$lang['PterodactylPackage.package_fields.memory'] = 'Memoria (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Cantidad de Memoria a asignar a los servidores creados.';
$lang['PterodactylPackage.package_fields.swap'] = 'Intercambio (MB)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Cantidad de Swap a asignar a los servidores creados.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Límite CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Cantidad de CPU a asignar a los servidores creados.';
$lang['PterodactylPackage.package_fields.disk'] = 'Espacio en disco (MB)';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Cantidad de Espacio en Disco a asignar a los servidores creados.';
$lang['PterodactylPackage.package_fields.io'] = 'Bloque IO Peso';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Bloque IO Número de ajuste (10-1000).';
$lang['PterodactylPackage.package_fields.startup'] = 'Puesta en marcha (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Comando de inicio personalizado para asignar a los servidores creados (por ejemplo, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.image'] = 'Imagen (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Imagen Docker personalizada para asignar a los servidores creados (por ejemplo, quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.databases'] = 'Límite de la base de datos (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'El número total de bases de datos que un usuario puede crear servidores. Dejar en blanco para permitir ilimitado.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Límite de asignación (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'El número total de asignaciones que un usuario tiene permitido para los servidores creados. Dejar en blanco para permitir ilimitado.';
$lang['PterodactylPackage.package_fields.backups'] = 'Límite de reserva (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'El número total de copias de seguridad que se permite a un usuario para los servidores creados. Déjelo en blanco para permitir un número ilimitado.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Opcional)';
$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Marque esta casilla para permitir que los clientes modifiquen este valor durante la adición/edición de servicios. No marque esta opción si desea utilizar una opción configurable para este campo.';

