<?php
/**
 * Admin System Backup
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemBackup.index.text_note'] = 'Aqui você pode fazer o download de um backup do seu banco de dados Blesta para o seu computador ou fazer o upload automático de um backup para o seu servidor SFTP e/ou Amazon S3 configurado.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Download do Backup';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Forçar backup externo';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Sob demanda';
$lang['AdminSystemBackup.index.page_title'] = 'Configurações > Sistema > Backup > Sob demanda';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Atualizar configurações';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Backup Todos';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Balde';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Chave secreta';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Chave de acesso';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Região';
$lang['AdminSystemBackup.amazon.field.test'] = 'Teste estas configurações';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Configurações > Sistema > Backup > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Atualizar configurações';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Backup Todos';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Caminho';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Senha';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nome de usuário';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Porto';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nome do host';
$lang['AdminSystemBackup.ftp.field.test'] = 'Teste estas configurações';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'FTP seguro';
$lang['AdminSystemBackup.ftp.page_title'] = 'Configurações > Sistema > Backup > FTP seguro';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'O intervalo de frequência para executar esse backup.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'O nome, que diferencia maiúsculas de minúsculas, do bucket do Amazon S3 no qual os backups serão armazenados.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'A chave secreta da conta do Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'A chave de acesso à conta do Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'A região do Amazon S3 na qual os backups serão armazenados.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'O intervalo de frequência para executar esse backup.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'O caminho de destino onde os backups devem ser armazenados no servidor remoto (por exemplo, "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'A senha da conta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'O nome de usuário da conta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'O número da porta, geralmente 22. Esse é o mesmo número de porta usado para SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'O nome de domínio totalmente qualificado do servidor de backup (por exemplo, "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Frequência de backup inválida.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'A conexão com o AmazonS3 falhou! Verifique suas configurações e tente novamente. Observe que os detalhes da conexão diferenciam maiúsculas de minúsculas.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'A conexão SFTP falhou! Verifique suas configurações e tente novamente.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'O backup foi enviado com sucesso para os serviços remotos configurados!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'A conexão com o AmazonS3 foi bem-sucedida!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'A conexão SFTP foi bem-sucedida!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'As configurações de backup foram atualizadas com sucesso!';

