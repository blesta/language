<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = 'Marque para permitir que os clientes modifiquem esse valor durante a adição/edição do serviço. Deixe a opção desmarcada se estiver planejando usar uma opção configurável para esse campo.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = 'O número total de backups que um usuário pode fazer para os servidores criados. Deixe em branco para permitir um número ilimitado.';
$lang['PterodactylPackage.package_fields.backups'] = 'Limite de backup (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = 'O número total de alocações que um usuário tem permissão para criar servidores. Deixe em branco para permitir um número ilimitado.';
$lang['PterodactylPackage.package_fields.allocations'] = 'Limite de alocação (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = 'O número total de bancos de dados que um usuário tem permissão para criar servidores. Deixe em branco para permitir um número ilimitado.';
$lang['PterodactylPackage.package_fields.databases'] = 'Limite do banco de dados (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = 'Imagem personalizada do Docker para atribuir aos servidores criados (por exemplo, quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.pack_id'] = 'ID da embalagem (opcional)';
$lang['PterodactylPackage.package_fields.image'] = 'Imagem (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = 'Comando de inicialização personalizado para atribuir aos servidores criados (por exemplo, java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = 'Inicialização (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = 'Número de ajuste de IO do bloco (10-1000).';
$lang['PterodactylPackage.package_fields.io'] = 'Peso do bloco IO';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = 'Quantidade de espaço em disco a ser atribuída aos servidores criados.';
$lang['PterodactylPackage.package_fields.disk'] = 'Espaço em disco (MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = 'Quantidade de CPU a ser atribuída aos servidores criados.';
$lang['PterodactylPackage.package_fields.cpu'] = 'Limite da CPU (%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = 'Quantidade de swap a ser atribuída aos servidores criados.';
$lang['PterodactylPackage.package_fields.swap'] = 'Troca (MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = 'Quantidade de memória a ser atribuída aos servidores criados.';
$lang['PterodactylPackage.package_fields.memory'] = 'Memória (MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = 'ID do pacote com o qual o servidor será instalado.';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = 'ID do Egg para o servidor usar.';
$lang['PterodactylPackage.package_fields.egg_id'] = 'ID do ovo';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = 'O Nest a ser usado pelo servidor.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Ninho';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = 'Intervalos de portas separados por vírgula para atribuir ao servidor (Exemplo: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = 'Faixa de portas';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = 'Atribuir ip dedicado aos servidores criados.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = 'IP dedicado (opcional)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = 'O local onde os servidores serão implantados automaticamente.';
$lang['PterodactylPackage.package_fields.location_id'] = 'Localização';
$lang['PterodactylPackage.!error.meta[backups].format'] = 'O número de backups deve ser numérico.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = 'O número de alocações deve ser numérico.';
$lang['PterodactylPackage.!error.meta[databases].format'] = 'O número de bancos de dados deve ser numérico.';
$lang['PterodactylPackage.!error.meta[image].length'] = 'O caminho da imagem deve ter no máximo 255 caracteres.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'O peso IO deve ser numérico.';
$lang['PterodactylPackage.!error.meta[disk].format'] = 'A quantidade de espaço em disco deve ser numérica.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'A porcentagem da CPU deve ser numérica.';
$lang['PterodactylPackage.!error.meta[swap].format'] = 'O valor do swap deve ser numérico.';
$lang['PterodactylPackage.!error.meta[memory].format'] = 'A quantidade de memória deve ser numérica.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = 'A ID do pacote deve ser numérica.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = 'O ovo não corresponde a nenhum outro do Pterodactyl.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = 'A ID do ovo deve ser numérica.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = 'O ninho não corresponde a nenhum outro em Pterodactyl.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = 'A ID do ninho deve ser numérica.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = 'O intervalo de portas deve estar no formato 25565-25570,25580-25590.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = 'A opção de usar um IP dedicado deve ser definida como 1 ou 0.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = 'O ID do local não corresponde a nenhum no Pterodactyl.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = 'O ID do local deve ser numérico.';

