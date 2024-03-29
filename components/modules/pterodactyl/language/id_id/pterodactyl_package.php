<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.!error.meta[allocations].format'] = 'Jumlah alokasi harus berupa angka.';
$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Centang untuk mengizinkan klien mengubah nilai ini selama penambahan/ pengeditan layanan. Biarkan tidak dicentang jika Anda berencana menggunakan opsi yang dapat dikonfigurasi untuk bidang ini.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Opsional)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'Jumlah total cadangan yang diizinkan pengguna untuk server yang dibuat. Kosongkan untuk mengizinkan tidak terbatas.';
$lang['PterodactylPackage.package_fields.backups'] = 'Batas Cadangan (opsional)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'Jumlah total alokasi yang diizinkan pengguna untuk membuat server. Kosongkan agar tidak terbatas.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Batas Alokasi (opsional)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'Jumlah total database yang diizinkan pengguna untuk membuat server. Kosongkan agar tidak terbatas.';
$lang['PterodactylPackage.package_fields.databases'] = 'Batas Basis Data (opsional)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Citra Docker khusus untuk ditetapkan ke server yang dibuat (mis. quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Gambar (opsional)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Perintah startup khusus untuk ditetapkan ke server yang dibuat (misalnya java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Permulaan (opsional)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Nomor Penyesuaian Blok IO (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Bobot Blok IO';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Jumlah Ruang Disk yang akan ditetapkan ke server yang dibuat.';
$lang['PterodactylPackage.package_fields.disk'] = 'Ruang Disk (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Jumlah CPU yang akan ditetapkan ke server yang dibuat.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Batas CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Jumlah Swap yang akan ditetapkan ke server yang dibuat.';
$lang['PterodactylPackage.package_fields.swap'] = 'Tukar (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Jumlah Memori yang akan ditetapkan ke server yang dibuat.';
$lang['PterodactylPackage.package_fields.memory'] = 'Memori (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID Paket yang akan digunakan untuk menginstal server.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'ID Paket (opsional)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID Telur untuk digunakan oleh server.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'ID Telur';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'Sarang untuk digunakan oleh server.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Sarang';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Rentang port yang dipisahkan dengan koma untuk ditetapkan ke server (Contoh: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Jangkauan Pelabuhan';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Menetapkan ip khusus ke server yang dibuat.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'IP khusus (opsional)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'Lokasi untuk menyebarkan server secara otomatis.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Lokasi';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'Jumlah cadangan harus berupa angka.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'Jumlah basis data harus berupa angka.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'Jalur gambar harus terdiri atas paling banyak 255 karakter.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'Bobot IO harus berupa angka.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'Jumlah ruang disk harus berupa angka.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'Persentase cpu harus berupa angka.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'Jumlah swap harus berupa angka.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'Jumlah memori harus berupa angka.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'ID paket harus berupa angka.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'Telurnya tidak cocok dengan telur yang ada di Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'ID telur harus berupa angka.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'Sarangnya tidak cocok dengan sarang Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'ID sarang harus berupa angka.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'Kisaran port paling banyak dalam format 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'Apakah akan menggunakan IP khusus harus diatur ke 1 atau 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'ID lokasi tidak cocok dengan ID lokasi mana pun di Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'ID lokasi harus berupa angka.';

