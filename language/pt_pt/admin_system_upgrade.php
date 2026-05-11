<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'De momento, não estão disponíveis opções de atualização.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Atualizar definições';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opções de atualização';
$lang['AdminSystemUpgrade.index.page_title'] = 'Definições &gt; Sistema &gt; Opções de atualização';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Cancelar';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Continuar com a atualização';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Ficheiros em falta';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Ficheiros modificados';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Ficheiros principais modificados';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s O(s) ficheiro(s) principal(is) foi(ram) modificado(s) em relação à versão original. Estas alterações serão substituídas durante a atualização. Deseja continuar?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'O manifesto de ficheiros da sua instalação atual não inclui somas de verificação. A verificação da integridade dos ficheiros será ignorada. Pretende continuar com a atualização?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Não foi encontrado nenhum manifesto de ficheiro para a sua instalação atual. A verificação da integridade do ficheiro será ignorada. Pretende continuar com a atualização?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Processo de atualização iniciado. Pode fechar esta página - a atualização continuará em segundo plano. Regresse a esta página para verificar o progresso.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'A versão da base de dados não avançou para o valor esperado. A atualização pode ter parado a meio de uma versão, deixando algumas alterações de esquema aplicadas.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Atual: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Esperado após a atualização: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Antes da atualização: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Versão da base de dados:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Backups disponíveis:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'A atualização não foi concluída com êxito. O seu sistema pode estar num estado inconsistente e algumas alterações à base de dados da versão falhada podem já ter sido aplicadas. É provável que uma nova execução da atualização falhe de forma diferente. Recomenda-se o restauro a partir da cópia de segurança da base de dados antes de tentar novamente. As cópias de segurança foram efectuadas antes do início da atualização e estão listadas abaixo. Para recuperar, restaure estas cópias de segurança manualmente ou abra um pedido de assistência.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'O que fazer a seguir';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Para restaurar a partir da cópia de segurança, execute os seguintes comandos no seu servidor:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Cópia de segurança do ficheiro: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Cópia de segurança da base de dados: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instruções de recuperação';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Tem a certeza de que pretende apagar esta cópia de segurança? Isto não pode ser anulado.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Eliminar';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Descarregar';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Ficheiros';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Base de dados';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Data';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Atualizar cópias de segurança';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Tamanho';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Tipo';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Ficheiro';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Não foram encontradas cópias de segurança de atualização.';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Limpar bloqueio';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Um processo de atualização anterior parece ter parado inesperadamente.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Está atualmente em curso uma atualização, iniciada em %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Repetir';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Regressar ao painel de controlo';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'A atualização falhou.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'A atualização foi concluída com êxito!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Finalizar';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Executar migrações de bases de dados';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Substituir ficheiros';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Extrair ficheiros';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Verificar a integridade';
$lang['AdminSystemUpgrade.index.step_download'] = 'Descarregar a versão';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Cópia de segurança de ficheiros';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Cópia de segurança da base de dados';
$lang['AdminSystemUpgrade.index.select_version'] = 'Selecione uma versão para a qual pretende atualizar:';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Ativar o modo de manutenção';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Controlos antes do voo';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Progresso da atualização';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Isto irá ativar o modo de manutenção, criar cópias de segurança, descarregar e instalar a nova versão e executar migrações de bases de dados. Este processo não pode ser interrompido depois de iniciado.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Atualizar agora';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Exclui arquivos nos diretórios principais que não estão presentes no manifesto da nova versão. Deixe a opção desmarcada, a menos que tenha certeza de que não existem arquivos personalizados nos diretórios principais.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Remover ficheiros de núcleo obsoletos após a atualização';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Saltar a verificação da integridade do ficheiro';
$lang['AdminSystemUpgrade.index.no_support'] = 'A sua subscrição de suporte e actualizações não está ativa. Apenas estão disponíveis actualizações de patches.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Requer uma subscrição ativa de suporte e actualizações.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Ver registo de alterações';
$lang['AdminSystemUpgrade.index.release_date'] = 'Lançado: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Atualização completa: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Atualização da correção: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Actualizações disponíveis';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Copiado';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Cópia';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Execute o seguinte comando via SSH (como o utilizador que possui a instalação Blesta) para concluir a atualização. Deixe esta página aberta - o progresso continuará a ser atualizado aqui enquanto o comando é executado.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'A atualização em segundo plano não foi iniciada';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d aviso';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d falhou';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Algumas verificações falharam. Resolva os problemas abaixo antes de efetuar a atualização.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Todas as verificações foram aprovadas. O seu sistema está pronto para o auto-upgrade.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Estado do ambiente';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'A sua instalação está actualizada.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Verificar se há actualizações';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Nunca verificado';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Última verificação: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Está a executar o Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Versão atual';

