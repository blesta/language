<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Data';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Arquivo';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Tamanho';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Tipo';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Banco de dados';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Arquivos';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opções de upgrade';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Verificação de atualizações';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Limpar trava';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Cópia';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Retornar ao painel de controle';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Excluir';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Baixar';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Repetir';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Faça o upgrade agora';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Exibir o registro de alterações';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Remover arquivos de núcleo obsoletos após a atualização';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Exclui arquivos nos diretórios principais que não estão presentes no manifesto da nova versão. Deixe a opção desmarcada, a menos que tenha certeza de que não existem arquivos personalizados nos diretórios principais.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Copiado';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Tem certeza de que deseja excluir esse backup? Isso não pode ser desfeito.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Você está executando o Blesta %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d falhou';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = 'Aviso de %1$d';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Algumas verificações falharam. Resolva os problemas abaixo antes de fazer o upgrade.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Todas as verificações foram aprovadas. Seu sistema está pronto para o autoatualização.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Backups disponíveis:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Atual: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Antes da atualização: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Esperado após a atualização: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Versão do banco de dados:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'A versão do banco de dados não avançou para o valor esperado. A atualização pode ter sido interrompida no meio de uma versão, deixando algumas alterações de esquema aplicadas.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'O upgrade não foi concluído com êxito. Seu sistema pode estar em um estado inconsistente e algumas alterações no banco de dados da versão com falha podem já ter sido aplicadas. A nova execução do upgrade provavelmente falhará de forma diferente. Recomenda-se restaurar a partir do backup do banco de dados antes de tentar novamente. Os backups foram feitos antes do início do upgrade e estão listados abaixo. Para se recuperar, restaure esses backups manualmente ou abra um tíquete de suporte para obter assistência.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'O que fazer em seguida';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Atualizar configurações';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Atualizações disponíveis';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Backups de atualização';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Versão atual';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Status do ambiente';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Progresso da atualização';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instruções de recuperação';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Última verificação: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Execute o seguinte comando via SSH (como o usuário que possui a instalação do Blesta) para concluir a atualização. Deixe esta página aberta - o progresso continuará sendo atualizado aqui enquanto o comando é executado.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'A atualização em segundo plano não foi iniciada';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Uma atualização está em andamento no momento, iniciada em %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Um processo de upgrade anterior parece ter sido interrompido inesperadamente.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Nunca verificado';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Não foram encontrados backups de upgrade.';
$lang['AdminSystemUpgrade.index.no_results'] = 'As opções de upgrade não estão disponíveis no momento.';
$lang['AdminSystemUpgrade.index.no_support'] = 'Sua assinatura de suporte e atualizações não está ativa. Somente atualizações de patches estão disponíveis.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Configurações > Sistema > Opções de atualização';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Backup do banco de dados: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Backup de arquivos: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Para restaurar a partir do backup, execute os seguintes comandos em seu servidor:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Lançado: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Requer assinatura ativa de suporte e atualizações.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Selecione uma versão para a qual fazer upgrade:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Ignorar a verificação de integridade do arquivo';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Backup do banco de dados';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Backup de arquivos';
$lang['AdminSystemUpgrade.index.step_download'] = 'Download da versão';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Extrair arquivos';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Finalizar';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Ativar o modo de manutenção';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Executar migrações de banco de dados';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Verificações antes do voo';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Substituir arquivos';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Verificar a integridade';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Sua instalação está atualizada.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'A atualização foi concluída com sucesso!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Falha na atualização.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Upgrade completo: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Atualização de patches: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Isso ativará o modo de manutenção, criará backups, baixará e instalará a nova versão e executará migrações de banco de dados. Esse processo não pode ser interrompido depois de iniciado.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Cancelar';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Continuar com o upgrade';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Arquivos ausentes';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Arquivos modificados';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s O(s) arquivo(s) principal(is) foi(ram) modificado(s) em relação à versão original. Essas alterações serão substituídas durante a atualização. Deseja continuar?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Arquivos principais modificados';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'O manifesto de arquivos da sua instalação atual não inclui somas de verificação. A verificação da integridade do arquivo será ignorada. Deseja continuar com o upgrade?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Nenhum manifesto de arquivo foi encontrado para sua instalação atual. A verificação da integridade do arquivo será ignorada. Deseja continuar com o upgrade?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'O processo de atualização foi iniciado. Você pode fechar esta página - a atualização continuará em segundo plano. Retorne a esta página para verificar o progresso.';

