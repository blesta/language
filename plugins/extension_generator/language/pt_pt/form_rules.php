<?php
/**
 * Form Rules
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['FormRules.nonmerchantfields.fields[][type].valid'] = 'Um ou mais campos têm um tipo inválido.';
$lang['FormRules.nonmerchantfields.fields[][label].empty'] = 'Introduza uma etiqueta para cada campo.';
$lang['FormRules.nonmerchantfields.fields[][name].format'] = 'Introduzir um nome para cada campo no formato snake_case_name.';
$lang['FormRules.nonmerchantbasic.currencies.format'] = 'Introduza as moedas em formato de três caracteres separados por vírgulas (por exemplo, USD, EUR, JPY).';
$lang['FormRules.nonmerchantbasic.authors[][name].empty'] = 'Por favor, introduza um nome para cada autor.';
$lang['FormRules.merchantfields.fields[][type].valid'] = 'Um ou mais campos têm um tipo inválido.';
$lang['FormRules.merchantfields.fields[][label].empty'] = 'Introduza uma etiqueta para cada campo.';
$lang['FormRules.merchantfields.fields[][name].format'] = 'Introduzir um nome para cada campo no formato snake_case_name.';
$lang['FormRules.merchantbasic.currencies.format'] = 'Introduza as moedas em formato de três caracteres separados por vírgulas (por exemplo, USD, EUR, JPY).';
$lang['FormRules.merchantbasic.authors[][name].empty'] = 'Por favor, introduza um nome para cada autor.';
$lang['FormRules.pluginintegrations.cards[][label].empty'] = 'Introduza uma etiqueta para cada cartão.';
$lang['FormRules.pluginintegrations.cards[][callback].format'] = 'Introduza um método de retorno de chamada para cada cartão no formato camelCaseName.';
$lang['FormRules.pluginintegrations.cards[][level].valid'] = 'Um ou mais cartões têm um nível inválido.';
$lang['FormRules.pluginintegrations.events[][callback].format'] = 'Introduza um método de retorno de chamada para cada evento no formato camelCaseName.';
$lang['FormRules.pluginintegrations.events[][event].empty'] = 'Introduza um nome de evento para cada evento.';
$lang['FormRules.pluginintegrations.actions[][name].empty'] = 'Introduza um nome para cada ação.';
$lang['FormRules.pluginintegrations.actions[][action].format'] = 'Introduza uma ação para cada ação, em letras minúsculas.';
$lang['FormRules.pluginintegrations.actions[][controller].format'] = 'Introduza um controlador para cada ação no formato snake_case_name.';
$lang['FormRules.pluginintegrations.actions[][location].valid'] = 'Introduza um local de ação válido.';
$lang['FormRules.plugindatabase.tables[][columns][][primary].valid'] = 'O primário deve ser definido como verdadeiro ou falso para cada coluna.';
$lang['FormRules.plugindatabase.tables[][columns][][nullable].valid'] = 'Nullable deve ser definido como true ou false para cada coluna.';
$lang['FormRules.plugindatabase.tables[][columns][][length].empty'] = 'O comprimento deve estar no formato \'a\',\'b\',\'c\' para colunas enum, vazio para colunas de texto e datetime, e numérico para todas as outras.';
$lang['FormRules.plugindatabase.tables[][columns][][type].valid'] = 'Uma ou mais colunas têm um tipo inválido.';
$lang['FormRules.plugindatabase.tables[][columns][][name].format'] = 'Introduza um nome de método para cada coluna no formato snake_case_name.';
$lang['FormRules.plugindatabase.tables[][name].format'] = 'Introduza um nome de método para cada tabela no formato snake_case_name.';
$lang['FormRules.pluginbasic.authors[][name].empty'] = 'Por favor, introduza um nome para cada autor.';
$lang['FormRules.modulefeatures.cron_tasks[][time].format'] = 'Introduza uma hora no formato 00:00 ou um intervalo numérico.';
$lang['FormRules.modulefeatures.cron_tasks[][type].valid'] = 'Uma ou mais tarefas cron têm um tipo inválido.';
$lang['FormRules.modulefeatures.cron_tasks[][label].empty'] = 'Introduza uma etiqueta para cada tarefa cron.';
$lang['FormRules.modulefeatures.cron_tasks[][name].format'] = 'Introduza um nome de método para cada tarefa cron no formato snake_case_name.';
$lang['FormRules.modulefeatures.service_tabs[][level].valid'] = 'Um ou mais separadores de serviço têm um nível inválido.';
$lang['FormRules.modulefeatures.service_tabs[][label].empty'] = 'Introduza uma etiqueta para cada separador de serviço.';
$lang['FormRules.modulefeatures.service_tabs[][method_name].format'] = 'Introduza um nome de método para cada separador de serviço no formato camelCaseName.';
$lang['FormRules.modulefields.package_fields[][name_key].valid'] = 'A definição de um campo de pacote como a chave de nome deve ser definida como true ou false.';
$lang['FormRules.modulefields.package_fields[][type].valid'] = 'Um ou mais campos do pacote têm um tipo inválido.';
$lang['FormRules.modulefields.package_fields[][label].empty'] = 'Introduza uma etiqueta para cada campo de embalagem.';
$lang['FormRules.modulefields.package_fields[][name].format'] = 'Introduza um nome para cada campo do pacote no formato snake_case_name.';
$lang['FormRules.modulefields.service_fields[][name_key].valid'] = 'A definição de um campo de serviço como a chave do nome deve ser definida como verdadeira ou falsa.';
$lang['FormRules.modulefields.service_fields[][type].valid'] = 'Um ou mais campos de serviço têm um tipo inválido.';
$lang['FormRules.modulefields.service_fields[][label].empty'] = 'Introduza uma etiqueta para cada campo de serviço.';
$lang['FormRules.modulefields.service_fields[][name].format'] = 'Introduza um nome para cada campo de serviço no formato snake_case_name.';
$lang['FormRules.modulefields.module_rows[][name_key].valid'] = 'A definição de um campo de linha de módulo como a chave de nome deve ser definida como true ou false.';
$lang['FormRules.modulefields.module_rows[][type].valid'] = 'Uma ou mais linhas de módulo têm um tipo inválido.';
$lang['FormRules.modulefields.module_rows[][label].empty'] = 'Introduza uma etiqueta para cada campo de linha do módulo.';
$lang['FormRules.modulefields.module_rows[][name].format'] = 'Introduza um nome para cada campo de linha do módulo no formato snake_case_name.';
$lang['FormRules.modulebasic.authors[][name].empty'] = 'Por favor, introduza um nome para cada autor.';
$lang['FormRules.modulebasic.module_group.empty'] = 'Introduza uma etiqueta de grupo de módulos.';
$lang['FormRules.modulebasic.module_row_plural.empty'] = 'Adicione um nome de linha de módulo no plural.';
$lang['FormRules.modulebasic.module_row.empty'] = 'Introduza um nome de linha de módulo.';
$lang['FormRules.general.name.format'] = 'Os nomes das extensões só podem conter caracteres alfanuméricos, sublinhados e espaços.';

