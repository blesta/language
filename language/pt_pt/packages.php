<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Packages.!error.manual_activation.valid'] = 'A ativação manual deve ser 1 ou 0.';
$lang['Packages.getStatusTypes.restricted'] = 'Restrito';
$lang['Packages.getStatusTypes.inactive'] = 'Inativo';
$lang['Packages.getStatusTypes.active'] = 'Ativo';
$lang['Packages.getPricingPeriods.onetime_plural'] = 'Uma vez';
$lang['Packages.getPricingPeriods.year_plural'] = 'Anos';
$lang['Packages.getPricingPeriods.month_plural'] = 'Meses';
$lang['Packages.getPricingPeriods.week_plural'] = 'Semanas';
$lang['Packages.getPricingPeriods.day_plural'] = 'Dias';
$lang['Packages.getPricingPeriods.onetime'] = 'Uma vez';
$lang['Packages.getPricingPeriods.year'] = 'Ano';
$lang['Packages.getPricingPeriods.month'] = 'Mês';
$lang['Packages.getPricingPeriods.week'] = 'Semana';
$lang['Packages.getPricingPeriods.day'] = 'Dia';
$lang['Packages.!error.groups[].valid'] = 'O grupo de pacotes selecionado não pertence à empresa indicada.';
$lang['Packages.!error.groups[].exists'] = 'ID de grupo de pacotes inválido.';
$lang['Packages.!error.pricing[][id].deletable'] = 'O termo não pôde ser retirado porque é utilizado por um ou mais serviços.';
$lang['Packages.!error.pricing[][id].format'] = 'ID de preço de pacote inválido.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'A moeda não pode ser actualizada numa determinação de preços que esteja a ser utilizada.';
$lang['Packages.!error.pricing[][currency].format'] = 'O código da moeda deve ter 3 caracteres.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'A taxa de anulação deve ser um número.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'A taxa de instalação deve ser um número.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'O preço de transferência deve ser um número.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'O preço de renovação não pode ser definido para um período de tempo único.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'O preço de renovação deve ser um número.';
$lang['Packages.!error.pricing[][price].format'] = 'O preço deve ser um número.';
$lang['Packages.!error.pricing[][period].in_use'] = 'O período não pode ser atualizado numa determinação de preços que esteja a ser utilizada.';
$lang['Packages.!error.pricing[][period].format'] = 'Tipo de período inválido.';
$lang['Packages.!error.pricing[][term].in_use'] = 'O termo não pode ser atualizado numa determinação de preços que esteja a ser utilizada.';
$lang['Packages.!error.pricing[][term].valid'] = 'O termo deve ser maior que 0.';
$lang['Packages.!error.pricing[][term].length'] = 'O comprimento do termo não pode exceder 5 caracteres.';
$lang['Packages.!error.pricing[][term].format'] = 'O termo deve ser um número.';
$lang['Packages.!error.email_content.parse'] = 'Erro de análise do modelo: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'O comprimento da língua não pode exceder 5 caracteres.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Introduza uma língua.';
$lang['Packages.!error.prorata_cutoff.format'] = 'O dia de corte pro rata deve estar compreendido entre 1 e 28.';
$lang['Packages.!error.prorata_day.format'] = 'O dia pro rata deve estar compreendido entre 1 e 28.';
$lang['Packages.!error.hidden.format'] = 'Se este grupo deve ser ocultado na interface, deve ser definido como 1 ou 0.';
$lang['Packages.!error.status.format'] = 'Estado inválido.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Os preços de renovação de utilização para actualizações têm de ser 1 ou 0.';
$lang['Packages.!error.override_price.valid'] = 'Definir o preço do pacote como preço de substituição deve ser 1 ou 0.';
$lang['Packages.!error.single_term.valid'] = 'O termo único deve ser 1 ou 0.';
$lang['Packages.!error.taxable.length'] = 'O comprimento do valor tributável não pode exceder 1 carácter.';
$lang['Packages.!error.taxable.format'] = 'O valor tributável deve ser um número.';
$lang['Packages.!error.module_group_client.valid'] = 'Permitir que o cliente selecione o grupo tem de ser 1 ou 0.';
$lang['Packages.!error.module_group.format'] = 'Grupo de módulos inválido fornecido.';
$lang['Packages.!error.module_row.format'] = 'Linha de módulo inválida fornecida.';
$lang['Packages.!error.plugins[].valid'] = 'Plugin inválido fornecido.';
$lang['Packages.!error.option_groups[].valid'] = 'Grupo de opções de pacote configurável inválido fornecido.';
$lang['Packages.!error.client_qty.format'] = 'O limite do cliente deve ser um número.';
$lang['Packages.!error.qty.format'] = 'A quantidade deve ser um número.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Para cada descrição, indicar um código de língua do pacote.';
$lang['Packages.!error.descriptions.format'] = 'As descrições dos pacotes estão num formato inválido.';
$lang['Packages.!error.names.empty_lang'] = 'Especificar um código de língua do pacote para cada nome.';
$lang['Packages.!error.names.empty_name'] = 'Especifique um nome de pacote para cada língua.';
$lang['Packages.!error.names.format'] = 'Os nomes dos pacotes estão num formato inválido.';
$lang['Packages.!error.module_id.changed'] = 'O módulo não pode ser alterado porque há um ou mais serviços que já estão a utilizar este pacote.';
$lang['Packages.!error.module_id.exists'] = 'Módulo inválido fornecido.';
$lang['Packages.!error.package_id.has_children'] = 'O pacote não pôde ser eliminado porque um serviço tem serviços secundários.';
$lang['Packages.!error.package_id.exists'] = 'O pacote não pôde ser eliminado porque está a ser utilizado por um serviço.';
$lang['Packages.!error.company_id.exists'] = 'Empresa inválida indicada.';

