<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Hizmet ekleme/düzenleme sırasında istemcilerin bu değeri değiştirmesine izin vermek için işaretleyin. Bu alan için yapılandırılabilir bir seçenek kullanmayı planlıyorsanız işareti kaldırın.';
$lang['PterodactylPackage.package_fields.optional'] = '1$s (İsteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Bir kullanıcının oluşturulan sunucular için izin verilen toplam yedekleme sayısı. Sınırsız izin vermek için boş bırakın.';
$lang['PterodactylPackage.package_fields.backups'] = 'Yedekleme Sınırı (isteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Bir kullanıcının oluşturulan sunucular için izin verilen toplam tahsis sayısı. Sınırsız izin vermek için boş bırakın.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Tahsis Sınırı (isteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Bir kullanıcının sunucu oluşturmasına izin verilen toplam veritabanı sayısı. Sınırsız izin vermek için boş bırakın.';
$lang['PterodactylPackage.package_fields.databases'] = 'Veritabanı Sınırı (isteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Oluşturulan sunuculara atanacak özel Docker görüntüsü (örneğin quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Resim (isteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Oluşturulan sunuculara atanacak özel başlangıç komutu (örneğin java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Başlangıç (isteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Blok IO Ayarlama numarası (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Blok IO Ağırlığı';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Oluşturulan sunuculara atanacak Disk Alanı Miktarı.';
$lang['PterodactylPackage.package_fields.disk'] = 'Disk Alanı (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Oluşturulan sunuculara atanacak CPU miktarı.';
$lang['PterodactylPackage.package_fields.cpu'] = 'CPU Sınırı (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Oluşturulan sunuculara atanacak Takas Miktarı.';
$lang['PterodactylPackage.package_fields.swap'] = 'Takas (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Oluşturulan sunuculara atanacak Bellek Miktarı.';
$lang['PterodactylPackage.package_fields.memory'] = 'Bellek (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'Sunucunun birlikte yükleneceği Paketin Kimliği.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'Paket Kimliği (isteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'Sunucunun kullanacağı Egg\'in kimliği.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'Yumurta Kimliği';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Sunucunun kullanacağı yuva.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Yuva';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Sunucuya atamak için virgülle ayrılmış port aralıkları (Örnek: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Liman Aralığı';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Oluşturulan sunuculara özel ip atayın.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'Özel IP (isteğe bağlı)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Sunucuların otomatik olarak dağıtılacağı Konum.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Konum';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Yedekleme sayısı sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Tahsis sayısı sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Veritabanlarının sayısı sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Görüntü yolu en fazla 255 karakter olmalıdır.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'IO ağırlığı sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Disk alanı miktarı sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'İşlemci yüzdesi sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Takas tutarı sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Bellek miktarı sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'Paket kimliği sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Yumurta Pterodactyl\'deki hiçbir yumurtayla eşleşmiyor.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'Yumurta kimliği sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Yuva Pterodactyl\'dekilerle uyuşmuyor.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'Yuva kimliği sayısal olmalıdır.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Bağlantı noktası aralığı en çok 25565-25570,25580-25590 biçiminde olur.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Ayrılmış bir IP kullanılıp kullanılmayacağı 1 veya 0 olarak ayarlanmalıdır.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'Konum kimliği Pterodactyl\'deki hiçbir kimlikle eşleşmiyor.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'Konum kimliği sayısal olmalıdır.';

