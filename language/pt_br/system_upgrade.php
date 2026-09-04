<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Falha no backup do banco de dados. O upgrade não pode prosseguir sem um backup confiável.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Falha no backup do arquivo. O upgrade não pode prosseguir sem um backup confiável.';
$lang['SystemUpgrade.!error.download_failed'] = 'Falha ao fazer o download do arquivo de versão.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Uma ou mais verificações de ambiente falharam. Resolva os problemas antes de fazer o upgrade.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Falha ao extrair o arquivo de versão.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Falha na verificação de integridade do arquivo baixado. O arquivo pode estar corrompido.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'O processo de atualização em segundo plano não foi iniciado. Isso pode ocorrer em ambientes de hospedagem com jailed (CloudLinux/CageFS, algumas configurações de PHP-FPM) em que o servidor da Web não tem permissão para desanexar processos filhos de longa duração. A atualização pode ser concluída com a execução do comando abaixo via SSH.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Sua assinatura de suporte e atualizações deve estar ativa para upgrades de versões maiores ou menores.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Um processo de upgrade anterior parece ter sido interrompido inesperadamente. Você pode limpar o bloqueio para tentar novamente.';
$lang['SystemUpgrade.!error.php_version'] = 'A versão de destino requer o PHP %1$s ou mais recente. Você está executando o PHP %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Falha na verificação da assinatura da liberação. O arquivo pode ter sido adulterado.';
$lang['SystemUpgrade.!error.signature_missing'] = 'A versão não inclui uma assinatura criptográfica. Não é possível verificar a autenticidade.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Uma atualização já está em andamento (iniciada pelo ID da equipe %1$s em %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'O processo de upgrade parece ter sido interrompido inesperadamente. Verifique os caminhos de backup abaixo para recuperação.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Falha ao preparar ou iniciar o processo de upgrade.';
$lang['SystemUpgrade.environment.config_fail'] = 'Configuração: blesta.php não pode ser gravado.';
$lang['SystemUpgrade.environment.config_pass'] = 'Configuração: blesta.php pode ser gravado.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Espaço em disco: %1$s disponível.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Espaço em disco: Somente %1$s disponível, estimativa de %2$s necessário.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Acesso ao shell: a função exec() está desativada ou não está disponível.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Acesso ao shell: a função exec() está disponível.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Backup do banco de dados: o comando mysqldump não está disponível. Instale as ferramentas do cliente mysql.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Backup do banco de dados: o comando mysqldump está disponível.';
$lang['SystemUpgrade.environment.os_fail'] = 'O autoatualização é compatível apenas com ambientes Linux.';
$lang['SystemUpgrade.environment.os_pass'] = 'Sistema operacional: Linux detectado.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Propriedade do arquivo: os diretórios principais do %1$s não são de propriedade do usuário do servidor Web.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Propriedade do arquivo: Todos os diretórios principais são de propriedade do usuário do servidor Web.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Sincronização de arquivos: o comando rsync não está disponível. Instale o rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Sincronização de arquivos: o comando rsync está disponível.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Desvinculação do processo: o comando setsid está disponível.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Desvinculação do processo: o comando setsid não está disponível. A atualização pode exigir um comando manual via SSH para ser concluída em ambientes de hospedagem presos.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Backup de arquivos: o comando tar não está disponível. Por favor, instale o tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Backup de arquivos: o comando tar está disponível.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Extração de arquivo: o comando unzip não está disponível. Por favor, instale o unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Extração de arquivos: o comando unzip está disponível.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Sistema de arquivos: O diretório de instalação não pode ser gravado pelo servidor da Web.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Sistema de arquivos: O diretório de instalação pode ser gravado.';
$lang['SystemUpgrade.maintenance_reason'] = 'O sistema está sendo atualizado no momento. Verifique novamente em breve.';

