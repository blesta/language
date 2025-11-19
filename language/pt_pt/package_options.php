<?php
/**
 * Package Options
 *
 * @package blesta
 * @subpackage blesta.language.pt_pt
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageOptions.getfields.label_textarea_setup_recurring'] = '%1$s + %2$s setup (renova @ %3$s)';
$lang['PackageOptions.getfields.label_textarea_setup'] = '%1$s + %2$s setup';
$lang['PackageOptions.getfields.label_textarea_recurring'] = '%1$s (renova em %2$s)';
$lang['PackageOptions.getfields.label_textarea'] = '%1$s';
$lang['PackageOptions.getfields.label_password_setup_recurring'] = '%1$s + %2$s setup (renova @ %3$s)';
$lang['PackageOptions.getfields.label_password_setup'] = '%1$s + %2$s setup';
$lang['PackageOptions.getfields.label_password_recurring'] = '%1$s (renova em %2$s)';
$lang['PackageOptions.getfields.label_password'] = '%1$s';
$lang['PackageOptions.getfields.label_text_setup_recurring'] = '%1$s + %2$s setup (renova @ %3$s)';
$lang['PackageOptions.getfields.label_text_setup'] = '%1$s + %2$s setup';
$lang['PackageOptions.getfields.label_text_recurring'] = '%1$s (renova em %2$s)';
$lang['PackageOptions.getfields.label_text'] = '%1$s';
$lang['PackageOptions.getfields.label_checkbox_setup_recurring'] = '%1$s (%2$s + %3$s setup, renova @ %4$s)';
$lang['PackageOptions.getfields.label_checkbox_setup'] = '%1$s (%2$s + %3$s setup)';
$lang['PackageOptions.getfields.label_checkbox_recurring'] = '%1$s (%2$s, renova @ %3$s)';
$lang['PackageOptions.getfields.label_checkbox'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_select_setup_recurring'] = '%1$s (%2$s + %3$s setup, renova @ %4$s)';
$lang['PackageOptions.getfields.label_select_setup'] = '%1$s (%2$s + %3$s setup)';
$lang['PackageOptions.getfields.label_select_recurring'] = '%1$s (%2$s, renova @ %3$s)';
$lang['PackageOptions.getfields.label_select'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_radio_setup_recurring'] = '%1$s (%2$s + %3$s setup, renova @ %4$s)';
$lang['PackageOptions.getfields.label_radio_setup'] = '%1$s (%2$s + %3$s setup)';
$lang['PackageOptions.getfields.label_radio_recurring'] = '%1$s (%2$s, renova @ %3$s)';
$lang['PackageOptions.getfields.label_radio'] = '%1$s (%2$s)';
$lang['PackageOptions.getfields.label_quantity_setup_recurring'] = 'x %1$s %2$s + %3$s setup (renova @ %4$s)';
$lang['PackageOptions.getfields.label_quantity_setup'] = 'x %1$s %2$s + %3$s configuração';
$lang['PackageOptions.getfields.label_quantity_recurring'] = 'x %1$s %2$s (renova em %3$s)';
$lang['PackageOptions.getfields.label_quantity'] = 'x %1$s %2$s';
$lang['PackageOptions.getvaluestatuses.inactive'] = 'Inativo';
$lang['PackageOptions.getvaluestatuses.active'] = 'Ativo';
$lang['PackageOptions.gettypes.password'] = 'Palavra-passe';
$lang['PackageOptions.gettypes.textarea'] = 'Área de texto';
$lang['PackageOptions.gettypes.text'] = 'Texto';
$lang['PackageOptions.gettypes.radio'] = 'Rádio';
$lang['PackageOptions.gettypes.quantity'] = 'Quantidade';
$lang['PackageOptions.gettypes.select'] = 'Drop-down';
$lang['PackageOptions.gettypes.checkbox'] = 'Caixa de verificação';
$lang['PackageOptions.!error.values[][pricing][][currency].format'] = 'O código da moeda deve ter 3 caracteres.';
$lang['PackageOptions.!error.values[][pricing][][setup_fee].format'] = 'A taxa de instalação deve ser um número.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].valid'] = 'O preço de renovação não pode ser definido para um período de tempo único.';
$lang['PackageOptions.!error.values[][pricing][][price_renews].format'] = 'O preço de renovação deve ser um número.';
$lang['PackageOptions.!error.values[][pricing][][price].format'] = 'O preço deve ser um número.';
$lang['PackageOptions.!error.values[][pricing][][period].format'] = 'Tipo de período inválido.';
$lang['PackageOptions.!error.values[][pricing][][term].valid'] = 'O termo deve ser maior que 0.';
$lang['PackageOptions.!error.values[][pricing][][term].length'] = 'O comprimento do termo não pode exceder 5 caracteres.';
$lang['PackageOptions.!error.values[][pricing][][term].format'] = 'O termo deve ser um número.';
$lang['PackageOptions.!error.values[][pricing][][id].delete_in_use'] = 'O cálculo do valor da opção não pode ser eliminado porque está atualmente a ser utilizado por um serviço.';
$lang['PackageOptions.!error.values[][pricing][][id].exists'] = 'ID de preço de opção de pacote inválido.';
$lang['PackageOptions.!error.hidden.valid'] = 'A opção de ocultar deve ser definida como 0 ou 1.';
$lang['PackageOptions.!error.option_id.exists'] = 'ID de opção de pacote inválido.';
$lang['PackageOptions.!error.groups.exists'] = 'Pelo menos um dos IDs de grupo de opções de pacotes indicados não existe ou não pertence à mesma empresa.';
$lang['PackageOptions.!error.values[][id].exists'] = 'ID de valor de opção de pacote inválido.';
$lang['PackageOptions.!error.values[][default].format'] = 'A predefinição deve ser um número.';
$lang['PackageOptions.!error.values[][default].qty_valid'] = 'A quantidade do valor predefinido selecionado é inválida para o mínimo, máximo e passo configurados.';
$lang['PackageOptions.!error.values[][default].inactive'] = 'Um valor de opção inativo não pode ser definido como valor por defeito.';
$lang['PackageOptions.!error.values[][status].valid'] = 'Selecione um estado de valor de opção válido.';
$lang['PackageOptions.!error.values[][value].delete_in_use'] = 'O valor da opção não pode ser eliminado porque está atualmente a ser utilizado por um serviço.';
$lang['PackageOptions.!error.values[][value].edit_in_use'] = 'O valor da opção não pode ser alterado porque está atualmente a ser utilizado por um serviço.';
$lang['PackageOptions.!error.values[][value].length'] = 'O valor da opção não pode exceder 255 caracteres de comprimento.';
$lang['PackageOptions.!error.values[][name].length'] = 'O nome do valor da opção não pode exceder 128 caracteres de comprimento.';
$lang['PackageOptions.!error.values[][name].empty'] = 'Introduza um nome para o valor da opção.';
$lang['PackageOptions.!error.values[][max].valid'] = 'O valor limite máximo só pode ser definido para o tipo de quantidade e deve ser um valor igual ou superior a 1.';
$lang['PackageOptions.!error.values[][min].valid'] = 'Um valor limite mínimo só pode ser definido para o tipo de quantidade e deve ser um valor igual ou superior a 0.';
$lang['PackageOptions.!error.values[][step].valid'] = 'Um valor de passo só pode ser definido para o tipo de quantidade e deve ser um valor igual ou superior a 1.';
$lang['PackageOptions.!error.values.single_default_value'] = 'Apenas um valor pode ser selecionado como valor por defeito.';
$lang['PackageOptions.!error.values.active_status'] = 'Pelo menos um valor de opção deve estar ativo.';
$lang['PackageOptions.!error.values.select_value'] = 'Pelo menos um valor de opção contém caracteres especiais inválidos.';
$lang['PackageOptions.!error.values.unique'] = 'Os valores das opções devem ser únicos.';
$lang['PackageOptions.!error.values.count'] = 'Só pode haver uma entrada de valor de opção para os tipos de caixa de verificação, quantidade, texto, área de texto ou palavra-passe.';
$lang['PackageOptions.!error.type.valid'] = 'Selecione um tipo de opção.';
$lang['PackageOptions.!error.name.length'] = 'O nome não pode ter mais de 128 caracteres.';
$lang['PackageOptions.!error.name.empty'] = 'Introduza um nome para esta opção.';
$lang['PackageOptions.!error.label.length'] = 'O comprimento da etiqueta não pode exceder 128 caracteres.';
$lang['PackageOptions.!error.label.empty'] = 'Introduzir uma etiqueta.';
$lang['PackageOptions.!error.company_id.exists'] = 'ID da empresa inválido.';
$lang['PackageOptions.!error.hide_on_invoice.valid'] = 'A opção de ocultar na fatura deve ser definida como 0 ou 1.';
$lang['PackageOptions.!error.disable_pricing.valid'] = 'A desativação da fixação de preços deve ser definida como 0 ou 1.';

