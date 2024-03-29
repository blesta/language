<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.tr_tr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Burada Blesta veritabanınızın bir yedeğini bilgisayarınıza indirebilir veya yapılandırılmış SFTP ve/veya Amazon S3 sunucunuza otomatik olarak yükleyebilirsiniz.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Yedekleme İndir';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Site Dışı Yedeklemeyi Zorla';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Talep Üzerine';
$lang['AdminSystemBackup.index.page_title'] = 'Ayarlar > Sistem > Yedekleme > İsteğe Bağlı';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Ayarları Güncelle';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Yedekleme Her';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Kova';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Gizli Anahtar';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Erişim Anahtarı';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Bölge';
$lang['AdminSystemBackup.amazon.field.test'] = 'Bu Ayarları Test Edin';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Ayarlar > Sistem > Yedekleme > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Ayarları Güncelle';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Yedekleme Her';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Yol';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Şifre';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Kullanıcı Adı';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Liman';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Ana bilgisayar adı';
$lang['AdminSystemBackup.ftp.field.test'] = 'Bu Ayarları Test Edin';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'Güvenli FTP';
$lang['AdminSystemBackup.ftp.page_title'] = 'Ayarlar > Sistem > Yedekleme > Güvenli FTP';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'Bu yedeklemenin gerçekleştirileceği sıklık aralığı.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'Yedeklemelerin altında depolanacağı Amazon S3 kovasının büyük/küçük harfe duyarlı adı.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'Amazon S3 hesabı Gizli Anahtarı.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'Amazon S3 hesabı Erişim Anahtarı.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'Yedeklemelerin depolanacağı Amazon S3 bölgesi.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'Bu yedeklemenin gerçekleştirileceği sıklık aralığı.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'Yedeklerin uzak sunucuda depolanması gereken hedef yol (örn. "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'FTP hesabı için parola.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'FTP hesabı için kullanıcı adı.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'Bağlantı noktası numarası, genellikle 22. Bu, SSH için kullanılan bağlantı noktası numarasıyla aynıdır.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'Yedekleme sunucusunun tam nitelendirilmiş alan adı (örneğin "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Geçersiz yedekleme frekansı.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'AmazonS3 bağlantısı başarısız oldu! Lütfen ayarlarınızı kontrol edin ve tekrar deneyin. Bağlantı ayrıntılarının büyük/küçük harfe duyarlı olduğunu unutmayın.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'SFTP bağlantısı başarısız oldu! Lütfen ayarlarınızı kontrol edin ve tekrar deneyin.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'Yedekleme yapılandırılan uzak hizmetlere başarıyla gönderildi!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'AmazonS3 bağlantısı başarılı oldu!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'SFTP bağlantısı başarılı oldu!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'Yedekleme ayarları başarıyla güncellendi!';

