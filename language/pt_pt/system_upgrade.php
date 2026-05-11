<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.environment.os_pass'] = 'Sistema operativo: Linux detectado.';
$lang['SystemUpgrade.environment.os_fail'] = 'A atualização automática só é suportada em ambientes Linux.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Acesso à shell: a função exec() está disponível.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Acesso à shell: a função exec() está desactivada ou não está disponível.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Extração de ficheiros: o comando unzip está disponível.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Extração de arquivo: o comando unzip não está disponível. Por favor, instale o unzip.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Cópia de segurança da base de dados: o comando mysqldump está disponível.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Cópia de segurança da base de dados: o comando mysqldump não está disponível. Por favor, instale as ferramentas mysql-client.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Cópia de segurança de ficheiros: o comando tar está disponível.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Cópia de segurança do ficheiro: o comando tar não está disponível. Por favor, instale o tar.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Sincronização de ficheiros: o comando rsync está disponível.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Sincronização de ficheiros: o comando rsync não está disponível. Por favor, instale o rsync.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Separação de processos: o comando setsid está disponível.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Separação de processos: o comando setsid não está disponível. A atualização pode exigir um comando manual via SSH para ser concluída em ambientes de hospedagem presos.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Sistema de ficheiros: O diretório de instalação pode ser escrito.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Sistema de ficheiros: O diretório de instalação não pode ser escrito pelo servidor Web.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Propriedade dos ficheiros: Todos os diretórios chave são propriedade do utilizador do servidor Web.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Propriedade dos ficheiros: %1$s Os diretórios de chaves não são propriedade do utilizador do servidor Web.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Espaço em disco: %1$s disponível.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Espaço em disco: Apenas %1$s disponível, estimado em %2$s necessário.';
$lang['SystemUpgrade.environment.config_pass'] = 'Configuração: blesta.php pode ser escrito.';
$lang['SystemUpgrade.environment.config_fail'] = 'Configuração: blesta.php não pode ser escrito.';
$lang['SystemUpgrade.maintenance_reason'] = 'O sistema está atualmente a ser atualizado. Volte a consultar em breve.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Já está em curso uma atualização (iniciada pelo funcionário ID %1$s em %2$s).';
$lang['SystemUpgrade.!error.lock_stale'] = 'Um processo de atualização anterior parece ter parado inesperadamente. Pode limpar o bloqueio para tentar novamente.';
$lang['SystemUpgrade.!error.backup_db_failed'] = 'A cópia de segurança da base de dados falhou. A atualização não pode prosseguir sem uma cópia de segurança fiável.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Falha na cópia de segurança do ficheiro. A atualização não pode prosseguir sem uma cópia de segurança fiável.';
$lang['SystemUpgrade.!error.download_failed'] = 'Falha ao descarregar o ficheiro de lançamento.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'A verificação da integridade do ficheiro descarregado falhou. O ficheiro pode estar corrompido.';
$lang['SystemUpgrade.!error.signature_missing'] = 'A versão não inclui uma assinatura criptográfica. Não é possível verificar a autenticidade.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'A verificação da assinatura da versão falhou. O ficheiro pode ter sido adulterado.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Falha ao extrair o arquivo de lançamento.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Falha na preparação ou no lançamento do processo de atualização.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'O processo de atualização em segundo plano não foi iniciado. Isso pode acontecer em ambientes de hospedagem com jailed (CloudLinux/CageFS, algumas configurações PHP-FPM) onde o servidor web não tem permissão para separar processos filhos de longa duração. A atualização pode ser concluída executando o comando abaixo via SSH.';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'O processo de atualização parece ter parado inesperadamente. Verifique os caminhos de backup abaixo para recuperação.';
$lang['SystemUpgrade.!error.license_invalid'] = 'A sua subscrição de suporte e actualizações tem de estar ativa para actualizações de versões maiores ou menores.';
$lang['SystemUpgrade.!error.php_version'] = 'A versão de destino requer PHP %1$s ou mais recente. Está a executar o PHP %2$s.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Uma ou mais verificações de ambiente falharam. Resolva os problemas antes de efetuar a atualização.';

