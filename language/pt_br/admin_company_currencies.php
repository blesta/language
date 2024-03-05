<?php
/**
 * Admin Company Currencies
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyCurrencies.edit.confirm_edit'] = 'Tem certeza de que deseja atualizar essa moeda? A taxa de câmbio dessa moeda será substituída quando as taxas de câmbio forem atualizadas automaticamente no sistema. Você pode desativar as atualizações automáticas em [Configurações] > [Empresa] > [Moedas] > [Configuração de moeda].';
$lang['AdminCompanyCurrencies.edit.field_editsubmit'] = 'Editar moeda';
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = 'Taxa de câmbio';
$lang['AdminCompanyCurrencies.edit.field_suffix'] = 'Símbolo de sufixo';
$lang['AdminCompanyCurrencies.edit.field_prefix'] = 'Símbolo de prefixo';
$lang['AdminCompanyCurrencies.edit.field_precision'] = 'Precisão';
$lang['AdminCompanyCurrencies.edit.field_format'] = 'Formato';
$lang['AdminCompanyCurrencies.edit.field_code'] = 'Código da moeda (ISO 4217)';
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = 'Editar moeda';
$lang['AdminCompanyCurrencies.edit.page_title'] = 'Configurações > Empresa > Moedas > Editar moeda';
$lang['AdminCompanyCurrencies.add.confirm_add'] = 'Tem certeza de que deseja criar essa moeda? A taxa de câmbio dessa moeda será substituída quando as taxas de câmbio forem atualizadas automaticamente no sistema. Você pode desativar as atualizações automáticas em [Configurações] > [Empresa] > [Moedas] > [Configuração de moeda].';
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = 'Criar moeda';
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = 'Taxa de câmbio';
$lang['AdminCompanyCurrencies.add.field_suffix'] = 'Símbolo de sufixo';
$lang['AdminCompanyCurrencies.add.field_prefix'] = 'Símbolo de prefixo';
$lang['AdminCompanyCurrencies.add.field_precision'] = 'Precisão';
$lang['AdminCompanyCurrencies.add.field_format'] = 'Formato';
$lang['AdminCompanyCurrencies.add.field_code'] = 'Código da moeda (ISO 4217)';
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = 'Adicionar moeda';
$lang['AdminCompanyCurrencies.add.page_title'] = 'Configurações > Empresa > Moedas > Adicionar moeda';
$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = 'Nunca';
$lang['AdminCompanyCurrencies.active.confirm_delete'] = 'Tem certeza de que deseja excluir essa moeda?';
$lang['AdminCompanyCurrencies.active.option_delete'] = 'Excluir';
$lang['AdminCompanyCurrencies.active.option_edit'] = 'Editar';
$lang['AdminCompanyCurrencies.active.text_options'] = 'Opções';
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = 'Última atualização';
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = 'Taxa de câmbio';
$lang['AdminCompanyCurrencies.active.text_precision'] = 'Precisão';
$lang['AdminCompanyCurrencies.active.text_format'] = 'Formato';
$lang['AdminCompanyCurrencies.active.text_currency_code'] = 'Código da moeda (ISO 4217)';
$lang['AdminCompanyCurrencies.active.no_results'] = 'Não há moedas ativas.';
$lang['AdminCompanyCurrencies.active.categorylink_addcurrency'] = 'Adicionar moeda';
$lang['AdminCompanyCurrencies.active.boxtitle_active'] = 'Moedas ativas';
$lang['AdminCompanyCurrencies.active.page_title'] = 'Configurações > Empresa > Moedas > Moedas ativas';
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ')';
$lang['AdminCompanyCurrencies.setup.open_parenthesis'] = '(';
$lang['AdminCompanyCurrencies.setup.no_exchange_updated'] = 'Nunca';
$lang['AdminCompanyCurrencies.setup.field.setupsubmit'] = 'Atualizar configurações';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_padding'] = 'Taxas de câmbio do Pad';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor_key'] = 'Chave da API do processador de taxas de câmbio';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor'] = 'Processador de taxas de câmbio';
$lang['AdminCompanyCurrencies.setup.field.last_updated'] = 'Tarifas atualizadas pela última vez';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_auto_update'] = 'Atualizar automaticamente as taxas de câmbio';
$lang['AdminCompanyCurrencies.setup.field.multi_currency_pricing'] = 'Use o preço do pacote somente para novos serviços';
$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = 'Múltiplas moedas';
$lang['AdminCompanyCurrencies.setup.field.client_set_currency'] = 'Permitir que o cliente defina a moeda';
$lang['AdminCompanyCurrencies.setup.field.show_currency_code'] = 'Mostrar código da moeda';
$lang['AdminCompanyCurrencies.setup.field.default_currency'] = 'Moeda padrão';
$lang['AdminCompanyCurrencies.setup.heading_general'] = 'Geral';
$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = 'Configuração de moeda';
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = 'Essa opção exige que o preço do pacote seja definido na moeda especificada para estar disponível para a criação de novos serviços. Se ela estiver desmarcada e o preço do pacote não existir para a moeda, o preço será calculado com base na taxa de câmbio da moeda padrão.

Os serviços de renovação sempre preferem o preço do pacote na moeda escolhida, mas usarão a taxa de câmbio da moeda padrão se não for especificada para o pacote.';
$lang['AdminCompanyCurrencies.setup.page_title'] = 'Configurações > Empresa > Moedas > Configuração de moeda';
$lang['AdminCompanyCurrencies.!cancel.field_cancel'] = 'Cancelar';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_padding'] = 'Os valores da taxa de câmbio determinados por um processador serão aumentados pela porcentagem determinada.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor_key'] = 'É necessária uma chave de API para recuperar as taxas de câmbio do processador selecionado.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor'] = 'Define o processador a ser usado para atualizar as taxas de câmbio. As moedas disponíveis variam de acordo com o processador.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_auto_update'] = 'Marque para permitir que as taxas de câmbio sejam atualizadas automaticamente usando um dos processadores de taxas de câmbio disponíveis.';
$lang['AdminCompanyCurrencies.!tooltip.multi_currency_pricing'] = 'Marque para permitir que os pacotes sejam pedidos apenas usando o preço definido para esse pacote. Essa opção requer que o preço seja definido para cada moeda que você deseja aceitar para esse pacote. Em outras palavras, isso impede a conversão de moedas.';
$lang['AdminCompanyCurrencies.!tooltip.client_set_currency'] = 'Marque para permitir que os clientes escolham sua moeda padrão entre as disponíveis no sistema.';
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = 'Marque para ativar a exibição do código da moeda ao lado dos preços exibidos';
$lang['AdminCompanyCurrencies.!tooltip.default_currency'] = 'A moeda padrão usada no sistema. Defina-a como sua moeda preferida.';
$lang['AdminCompanyCurrencies.!tooltip.precision'] = 'A precisão é o número de dígitos significativos após a casa decimal que a moeda suporta.';
$lang['AdminCompanyCurrencies.!success.rates_updated'] = 'As taxas de câmbio foram atualizadas com sucesso.';
$lang['AdminCompanyCurrencies.!success.delete_deleted'] = 'A moeda %1$s foi excluída com sucesso!';
$lang['AdminCompanyCurrencies.!success.edit_updated'] = 'A moeda %1$s foi atualizada com sucesso!';
$lang['AdminCompanyCurrencies.!success.add_created'] = 'A moeda %1$s foi criada com sucesso!';
$lang['AdminCompanyCurrencies.!success.setup_updated'] = 'As configurações de configuração de moeda foram atualizadas com sucesso!';

