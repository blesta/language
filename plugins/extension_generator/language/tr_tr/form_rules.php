<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Lütfen her kart için camelCaseName biçiminde bir geri arama yöntemi girin.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Bir veya daha fazla kart geçersiz bir seviyeye sahiptir.';
$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Bir veya daha fazla alan geçersiz bir türe sahiptir.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Lütfen her alan için bir etiket girin.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Lütfen her alan için snake_case_name biçiminde bir ad girin.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Lütfen para birimlerini virgülle ayrılmış üç karakter biçiminde girin (örn. USD,EUR,JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Lütfen her yazar için bir isim giriniz.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Bir veya daha fazla alan geçersiz bir türe sahiptir.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Lütfen her alan için bir etiket girin.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Lütfen her alan için snake_case_name biçiminde bir ad girin.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Lütfen para birimlerini virgülle ayrılmış üç karakter biçiminde girin (örn. USD,EUR,JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Lütfen her yazar için bir isim giriniz.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Lütfen her kart için bir etiket girin.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Lütfen her olay için camelCaseName biçiminde bir geri arama yöntemi girin.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Lütfen her etkinlik için bir etkinlik adı girin.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Lütfen her eylem için bir ad girin.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Lütfen her eylem için küçük harflerle bir eylem girin.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Lütfen her eylem için snake_case_name biçiminde bir denetleyici girin.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Lütfen geçerli bir eylem konumu girin.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'Birincil, her sütun için doğru veya yanlış olarak ayarlanmalıdır.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable, her sütun için true veya false olarak ayarlanmalıdır.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'Uzunluk, enum sütunları için \'a\',\'b\',\'c\' biçiminde, metin ve datetime sütunları için boş ve diğerleri için sayısal olmalıdır.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Bir veya daha fazla sütun geçersiz bir türe sahiptir.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Lütfen her sütun için snake_case_name biçiminde bir yöntem adı girin.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Lütfen her tablo için snake_case_name biçiminde bir yöntem adı girin.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Lütfen her yazar için bir isim giriniz.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Lütfen 00:00 biçiminde bir saat veya sayısal bir aralık girin.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Bir veya daha fazla cron görevi geçersiz bir türe sahiptir.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Lütfen her cron görevi için bir etiket girin.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Lütfen her cron görevi için snake_case_name biçiminde bir yöntem adı girin.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Bir veya daha fazla hizmet sekmesi geçersiz bir seviyeye sahiptir.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Lütfen her hizmet sekmesi için bir etiket girin.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Lütfen her hizmet sekmesi için camelCaseName biçiminde bir yöntem adı girin.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'Bir paket alanının ad anahtarı olarak ayarlanıp ayarlanmayacağı true veya false olarak ayarlanmalıdır.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Bir veya daha fazla paket alanı geçersiz bir türe sahiptir.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Lütfen her paket alanı için bir etiket girin.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Lütfen her paket alanı için snake_case_name biçiminde bir ad girin.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'Bir hizmet alanının ad anahtarı olarak ayarlanıp ayarlanmayacağı true veya false olarak ayarlanmalıdır.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Bir veya daha fazla hizmet alanı geçersiz bir türe sahiptir.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Lütfen her hizmet alanı için bir etiket girin.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Lütfen her hizmet alanı için snake_case_name biçiminde bir ad girin.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'Bir modül satır alanının ad anahtarı olarak ayarlanıp ayarlanmayacağı true veya false olarak ayarlanmalıdır.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Bir veya daha fazla modül satırı geçersiz bir türe sahiptir.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Lütfen her modül satırı alanı için bir etiket girin.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Lütfen her modül satırı alanı için snake_case_name biçiminde bir ad girin.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Lütfen her yazar için bir isim giriniz.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Lütfen bir modül grubu etiketi girin.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Lütfen çoğul bir modül satır adı ekleyin.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Lütfen bir modül satır adı girin.';
$lang['FormRules.general.name.format'] = 'Uzantı adları yalnızca alfa_sayısal karakterler, alt çizgiler ve boşluklar içerebilir.';

