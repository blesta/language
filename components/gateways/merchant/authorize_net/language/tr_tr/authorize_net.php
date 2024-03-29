<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = 'Kart numarasının tamamı olmadan son kullanma tarihi güncellenemez.';
$lang['Authorize_net.!error.dev_mode.valid'] = 'Geliştirici modu verilmişse "true" olarak ayarlanmalıdır.';
$lang['Authorize_net.!error.test_mode.valid'] = 'Test modu verilmişse "true" olarak ayarlanmalıdır.';
$lang['Authorize_net.!error.transaction_key.format'] = 'İşlem anahtarı 16 karakter uzunluğunda olmalıdır.';
$lang['Authorize_net.!error.login_id.format'] = 'Oturum açma kimliği 20 karakterden fazla olmamalıdır ve boş olamaz.';
$lang['Authorize_net.validation_modes_live'] = 'Canlı';
$lang['Authorize_net.validation_modes_test'] = 'Test';
$lang['Authorize_net.validation_modes_none'] = 'Hiçbiri';
$lang['Authorize_net.validation_note'] = 'Bu, bir ödeme hesabı CIM kullanılarak saklandığında ne tür bir doğrulama yapılacağını kontrol eder. \'Yok\' hiçbir ek doğrulama gerçekleştirmez. \'Test\', müşterinin ekstresinde görünmeyen ancak satıcıya bir e-posta oluşturacak bir test işlemi düzenler. \'Canlı\' hemen geçersiz kılınan 0,00$ veya 0,01$\'lık bir işlem gerçekleştirir. Ücretlere tabi olabileceğiniz için bu değeri \'Canlı\' olarak ayarlamadan önce Satıcı Hesabı Sağlayıcınıza danışın.';
$lang['Authorize_net.validation_mode'] = 'Ödeme Hesabı Doğrulama Modu';
$lang['Authorize_net.apis_cim'] = 'CIM (Authorize.Net tarafından etkinleştirilmelidir)';
$lang['Authorize_net.apis_aim'] = 'AIM (varsayılan)';
$lang['Authorize_net.dev_mode_note'] = 'Bu seçeneğin etkinleştirilmesi, işlemleri Authorize.net geliştirici ortamına gönderir. Bu ortamı kullanmak için bir geliştirici test hesabınızın olması gerekir.';
$lang['Authorize_net.dev_mode'] = 'Geliştirici Modu';
$lang['Authorize_net.test_mode_note'] = 'Test modu özelliği yalnızca AIM tarafından desteklenir. CIM işlemlerini test etmek için Authorize.net hesabınızdan test modunu etkinleştirmeniz gerekir.';
$lang['Authorize_net.test_mode'] = 'Test Modu';
$lang['Authorize_net.api'] = 'Ödeme API\'si';
$lang['Authorize_net.transaction_key'] = 'İşlem Anahtarı';
$lang['Authorize_net.login_id'] = 'Giriş Kimliği';
$lang['Authorize_net.description'] = 'Güvenilir ve hızlı kredi kartı ve ACH işlemleri';
$lang['Authorize_net.name'] = 'Authorize.Net';

