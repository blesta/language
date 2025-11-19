<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Marque para permitir que os clientes modifiquem este valor durante a adição/edição de serviços. Deixe a opção desmarcada se tenciona utilizar uma opção configurável para este campo.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (Opcional)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'O número total de cópias de segurança a que um utilizador tem direito para os servidores criados. Deixar em branco para permitir um número ilimitado.';
$lang['PterodactylPackage.package_fields.backups'] = 'Limite de segurança (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'O número total de atribuições a que um utilizador tem direito nos servidores criados. Deixar em branco para permitir um número ilimitado.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Limite de afetação (facultativo)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'O número total de bases de dados que um utilizador está autorizado a criar servidores. Deixar em branco para permitir um número ilimitado.';
$lang['PterodactylPackage.package_fields.databases'] = 'Limite da base de dados (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Imagem Docker personalizada para atribuir aos servidores criados (por exemplo, quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = 'Imagem (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Comando de arranque personalizado para atribuir aos servidores criados (por exemplo, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Arranque (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Bloco IO Número de ajustamento (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Bloco IO Peso';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Quantidade de espaço em disco a atribuir aos servidores criados.';
$lang['PterodactylPackage.package_fields.disk'] = 'Espaço em disco (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Quantidade de CPU a atribuir aos servidores criados.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Limite da CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Quantidade de Swap a atribuir aos servidores criados.';
$lang['PterodactylPackage.package_fields.swap'] = 'Troca (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Quantidade de memória a atribuir aos servidores criados.';
$lang['PterodactylPackage.package_fields.memory'] = 'Memória (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID do Pack com o qual instalar o servidor.';
$lang['PterodactylPackage.package_fields.pack_id'] = 'ID da embalagem (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID do Egg para o servidor utilizar.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'ID do ovo';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'O Ninho para o servidor a utilizar.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Ninho';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Intervalos de portas separados por vírgula para atribuir ao servidor (Exemplo: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Intervalo de portas';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Atribuir ip dedicado aos servidores criados.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'IP dedicado (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'O Local onde os servidores serão implantados automaticamente.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Localização';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'O número de cópias de segurança tem de ser numérico.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'O número de atribuições deve ser numérico.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'O número de bases de dados deve ser numérico.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'O caminho da imagem deve ter um máximo de 255 caracteres.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'O peso IO deve ser numérico.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'A quantidade de espaço em disco deve ser numérica.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'A percentagem de cpu tem de ser numérica.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'O montante do swap deve ser numérico.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'A quantidade de memória deve ser numérica.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'O ID da embalagem deve ser numérico.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'O ovo não coincide com nenhum do Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'A identificação do ovo deve ser numérica.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'O ninho não coincide com nenhum do Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'A identificação do ninho deve ser numérica.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'O intervalo de portas deve estar no formato 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'A utilização de um IP dedicado deve ser definida como 1 ou 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'O ID do local não corresponde a nenhum no Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'O ID de localização deve ser numérico.';

