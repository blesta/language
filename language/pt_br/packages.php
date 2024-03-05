<?php
/**
 * Packages
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
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
$lang['Packages.!error.groups[].valid'] = 'O grupo de pacotes selecionado não pertence à empresa fornecida.';
$lang['Packages.!error.groups[].exists'] = 'ID de grupo de pacotes inválido.';
$lang['Packages.!error.pricing[][id].deletable'] = 'O termo não pôde ser removido porque é usado por um ou mais serviços.';
$lang['Packages.!error.pricing[][id].format'] = 'ID de preço de pacote inválido.';
$lang['Packages.!error.pricing[][currency].in_use'] = 'A moeda não pode ser atualizada em uma determinação de preços que esteja em uso.';
$lang['Packages.!error.pricing[][currency].format'] = 'O código da moeda deve ter 3 caracteres.';
$lang['Packages.!error.pricing[][cancel_fee].format'] = 'A taxa de cancelamento deve ser um número.';
$lang['Packages.!error.pricing[][setup_fee].format'] = 'A taxa de instalação deve ser um número.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'O preço de transferência deve ser um número.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'O preço de renovação não pode ser definido para um único período de tempo.';
$lang['Packages.!error.pricing[][price_renews].format'] = 'O preço de renovação deve ser um número.';
$lang['Packages.!error.pricing[][price].format'] = 'O preço deve ser um número.';
$lang['Packages.!error.pricing[][period].in_use'] = 'O período não pode ser atualizado em uma determinação de preços que esteja em uso.';
$lang['Packages.!error.pricing[][period].format'] = 'Tipo de período inválido.';
$lang['Packages.!error.pricing[][term].in_use'] = 'O termo não pode ser atualizado em um preço que está em uso.';
$lang['Packages.!error.pricing[][term].valid'] = 'O termo deve ser maior que 0.';
$lang['Packages.!error.pricing[][term].length'] = 'O comprimento do termo não pode exceder 5 caracteres.';
$lang['Packages.!error.pricing[][term].format'] = 'O termo deve ser um número.';
$lang['Packages.!error.email_content.parse'] = 'Erro de análise do modelo: %1$s';
$lang['Packages.!error.email_content[][lang].length'] = 'O comprimento do idioma não pode exceder 5 caracteres.';
$lang['Packages.!error.email_content[][lang].empty'] = 'Digite um idioma.';
$lang['Packages.!error.prorata_cutoff.format'] = 'O dia de corte pro rata deve estar entre 1 e 28.';
$lang['Packages.!error.prorata_day.format'] = 'O dia pro rata deve estar entre 1 e 28.';
$lang['Packages.!error.hidden.format'] = 'Se esse grupo deve ser ocultado na interface, deve ser definido como 1 ou 0.';
$lang['Packages.!error.status.format'] = 'Status inválido.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Os preços de renovação de uso para upgrades devem ser 1 ou 0.';
$lang['Packages.!error.descriptions.empty_lang'] = 'Especifique um código de idioma do pacote para cada descrição.';
$lang['Packages.!error.override_price.valid'] = 'Definir o preço do pacote como preço de substituição deve ser 1 ou 0.';
$lang['Packages.!error.single_term.valid'] = 'O termo único deve ser 1 ou 0.';
$lang['Packages.!error.taxable.length'] = 'O comprimento tributável não pode exceder 1 caractere.';
$lang['Packages.!error.taxable.format'] = 'Taxável deve ser um número.';
$lang['Packages.!error.module_group_client.valid'] = 'Allow Client to Select Group (Permitir que o cliente selecione o grupo) deve ser 1 ou 0.';
$lang['Packages.!error.module_group.format'] = 'Grupo de módulos inválido fornecido.';
$lang['Packages.!error.module_row.format'] = 'Linha de módulo inválida fornecida.';
$lang['Packages.!error.plugins[].valid'] = 'Plugin inválido fornecido.';
$lang['Packages.!error.option_groups[].valid'] = 'Grupo de opções de pacote configurável inválido fornecido.';
$lang['Packages.!error.client_qty.format'] = 'O limite do cliente deve ser um número.';
$lang['Packages.!error.qty.format'] = 'A quantidade deve ser um número.';
$lang['Packages.!error.descriptions.format'] = 'As descrições dos pacotes estão em um formato inválido.';
$lang['Packages.!error.names.empty_lang'] = 'Especifique um código de idioma do pacote para cada nome.';
$lang['Packages.!error.names.empty_name'] = 'Especifique um nome de pacote para cada idioma.';
$lang['Packages.!error.names.format'] = 'Os nomes dos pacotes estão em um formato inválido.';
$lang['Packages.!error.module_id.changed'] = 'O módulo não pode ser alterado porque há um ou mais serviços que já estão usando esse pacote.';
$lang['Packages.!error.module_id.exists'] = 'Módulo inválido fornecido.';
$lang['Packages.!error.package_id.has_children'] = 'O pacote não pôde ser excluído porque um serviço tem serviços secundários.';
$lang['Packages.!error.package_id.exists'] = 'O pacote não pôde ser excluído porque um serviço o está usando no momento.';
$lang['Packages.!error.company_id.exists'] = 'Empresa inválida fornecida.';

