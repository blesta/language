<?php
/**
 * Authorize Net
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Authorize_net.!error.card_number.missing'] = '如果没有完整的卡号，则无法更新有效期。';
$lang['Authorize_net.!error.dev_mode.valid'] = '如果给定了开发者模式，则必须设置为 "true"。';
$lang['Authorize_net.!error.test_mode.valid'] = '如果给定了测试模式，则必须将其设置为 "true"。';
$lang['Authorize_net.!error.transaction_key.format'] = '交易密钥长度必须为 16 个字符。';
$lang['Authorize_net.!error.login_id.format'] = '登录 ID 不应超过 20 个字符，且不能为空。';
$lang['Authorize_net.validation_modes_live'] = '现场';
$lang['Authorize_net.validation_modes_test'] = '测试';
$lang['Authorize_net.validation_modes_none'] = '无';
$lang['Authorize_net.validation_note'] = '该选项控制使用 CIM 存储付款账户时执行的验证类型。无 "不执行额外验证。测试 "会发出一个测试交易，该交易不会出现在客户的账单上，但会生成一封电子邮件发送给商家。实时 "处理 0.00 美元或 0.01 美元的交易，并立即作废。在将此值设置为 "Live "之前，请咨询您的商户账户提供商，因为您可能需要支付费用。';
$lang['Authorize_net.validation_mode'] = '付款账户验证模式';
$lang['Authorize_net.apis_cim'] = 'CIM（必须由 Authorize.Net 启用）';
$lang['Authorize_net.apis_aim'] = 'AIM（默认）';
$lang['Authorize_net.dev_mode_note'] = '启用此选项后，交易将发布到 Authorize.net 开发人员环境。您必须拥有一个开发人员测试账户才能使用此环境。';
$lang['Authorize_net.dev_mode'] = '开发人员模式';
$lang['Authorize_net.test_mode_note'] = '只有 AIM 支持测试模式功能。要测试 CIM 交易，必须在 Authorize.net 账户中启用测试模式。';
$lang['Authorize_net.test_mode'] = '测试模式';
$lang['Authorize_net.api'] = '支付应用程序接口';
$lang['Authorize_net.transaction_key'] = '交易密钥';
$lang['Authorize_net.login_id'] = '登录 ID';
$lang['Authorize_net.description'] = '可靠、快速的信用卡和 ACH 处理';
$lang['Authorize_net.name'] = 'Authorize.Net';

