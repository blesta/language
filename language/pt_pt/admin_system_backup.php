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

$lang['AdminSystemBackup.index.text_note'] = 'Aqui, pode descarregar uma cópia de segurança da sua base de dados Blesta para o seu computador ou carregar automaticamente uma cópia de segurança para o seu servidor SFTP e/ou Amazon S3 configurado.';
$lang['AdminSystemBackup.index.field_downloadbackup'] = 'Descarregar Cópia de Segurança';
$lang['AdminSystemBackup.index.field_uploadbackup'] = 'Forçar Cópia de Segurança Externa';
$lang['AdminSystemBackup.index.boxtitle_index'] = 'Sob Pedido';
$lang['AdminSystemBackup.index.page_title'] = 'Definições > Sistema > Cópia de Segurança > Sob Pedido';
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = 'Atualizar Definições';
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = 'Cópia de Segurança a Cada';
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = 'Balde';
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = 'Chave Secreta';
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = 'Chave de Acesso';
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = 'Região';
$lang['AdminSystemBackup.amazon.field.test'] = 'Testar estas definições';
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = 'Amazon S3';
$lang['AdminSystemBackup.amazon.page_title'] = 'Definições > Sistema > Cópia de Segurança > Amazon S3';
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = 'Atualizar Definições';
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = 'Cópia de Segurança a Cada';
$lang['AdminSystemBackup.ftp.field.ftp_path'] = 'Caminho';
$lang['AdminSystemBackup.ftp.field.ftp_password'] = 'Senha';
$lang['AdminSystemBackup.ftp.field.ftp_username'] = 'Nome de Utilizador';
$lang['AdminSystemBackup.ftp.field.ftp_port'] = 'Porta';
$lang['AdminSystemBackup.ftp.field.ftp_host'] = 'Nome do Host';
$lang['AdminSystemBackup.ftp.field.test'] = 'Testar estas definições';
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = 'FTP Seguro';
$lang['AdminSystemBackup.ftp.page_title'] = 'Definições > Sistema > Cópia de Segurança > FTP Seguro';
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = 'O intervalo de frequência para executar esta cópia de segurança.';
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = 'O nome, sensível a maiúsculas e minúsculas, do balde do Amazon S3 onde as cópias de segurança serão armazenadas.';
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = 'A chave secreta da conta do Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = 'A chave de acesso à conta do Amazon S3.';
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = 'A região do Amazon S3 onde as cópias de segurança serão armazenadas.';
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = 'O intervalo de frequência para executar esta cópia de segurança.';
$lang['AdminSystemBackup.!tooltip.ftp_path'] = 'O caminho de destino onde as cópias de segurança devem ser armazenadas no servidor remoto (por exemplo, "/backup/").';
$lang['AdminSystemBackup.!tooltip.ftp_password'] = 'A senha da conta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_username'] = 'O nome de utilizador da conta FTP.';
$lang['AdminSystemBackup.!tooltip.ftp_port'] = 'O número da porta, geralmente 22. É o mesmo número de porta usado para SSH.';
$lang['AdminSystemBackup.!tooltip.ftp_host'] = 'O nome de domínio totalmente qualificado do servidor de cópia de segurança (por exemplo, "backup.domain.com").';
$lang['AdminSystemBackup.!error.backup_frequency'] = 'Frequência de cópia de segurança inválida.';
$lang['AdminSystemBackup.!error.amazons3_test'] = 'A ligação ao Amazon S3 falhou! Verifique as suas definições e tente novamente. Note que os detalhes da ligação são sensíveis a maiúsculas e minúsculas.';
$lang['AdminSystemBackup.!error.sftp_test'] = 'A ligação SFTP falhou! Verifique as suas definições e tente novamente.';
$lang['AdminSystemBackup.!success.backup_uploaded'] = 'A cópia de segurança foi carregada com sucesso para os serviços remotos configurados!';
$lang['AdminSystemBackup.!success.amazons3_test'] = 'A ligação ao Amazon S3 foi bem-sucedida!';
$lang['AdminSystemBackup.!success.sftp_test'] = 'A ligação SFTP foi bem-sucedida!';
$lang['AdminSystemBackup.!success.backup_updated'] = 'As definições de cópia de segurança foram atualizadas com sucesso!';
