<?php
/**
 * Paypal Payments Standard
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PaypalPaymentsStandard.!error.dev_mode.valid'] = '如果给定了开发者模式，则必须设置为 "true"。';
$lang['PaypalPaymentsStandard.!error.account_id.valid'] = '您必须输入有效的电子邮件地址。';
$lang['PaypalPaymentsStandard.buildprocess.submit'] = '使用贝宝付款';
$lang['PaypalPaymentsStandard.pay_type_both'] = '在可能的情况下，一次性付款和订阅付款';
$lang['PaypalPaymentsStandard.pay_type_subscribe'] = '仅支付订阅费';
$lang['PaypalPaymentsStandard.pay_type_onetime'] = '仅限一次性付款';
$lang['PaypalPaymentsStandard.pay_type'] = '付款方式';
$lang['PaypalPaymentsStandard.api_signature'] = 'API 签名';
$lang['PaypalPaymentsStandard.api_password'] = 'API 密码';
$lang['PaypalPaymentsStandard.api_username_note'] = '要通过 PayPal 处理退款，必须提供 API 密码和 API 签名。';
$lang['PaypalPaymentsStandard.api_username'] = 'API 用户名';
$lang['PaypalPaymentsStandard.dev_mode_note'] = '启用该选项后，交易将发布到 PayPal 沙盒环境。只有在使用 PayPal 沙盒账户进行测试时，才能启用该选项。';
$lang['PaypalPaymentsStandard.dev_mode'] = '开发人员模式';
$lang['PaypalPaymentsStandard.page_style_note'] = '在 PayPal 中创建的自定义支付页面主题的页面样式名称。默认页面样式留空。';
$lang['PaypalPaymentsStandard.page_style'] = '页面样式名称';
$lang['PaypalPaymentsStandard.account_id'] = '贝宝账户电子邮件';
$lang['PaypalPaymentsStandard.description'] = 'PayPal 标准支付是安全接受信用卡和 PayPal 在线支付的最简单方法之一。';
$lang['PaypalPaymentsStandard.name'] = 'PayPal Payments Standard';
$lang['PaypalPaymentsStandard.!error.payment_mapping.duplicated'] = '在您的映射数据中发现了重复的电子邮件，请删除重复内容并重试。';
$lang['PaypalPaymentsStandard.!error.payment_mapping.valid'] = '在映射数据中发现无效行，请检查电子邮件地址和客户 ID 是否有效，然后重试。';
$lang['PaypalPaymentsStandard.payment_mapping_note'] = '用于在 Blesta 之外创建的 PayPal 订阅。将 payer_email 映射到内部客户 ID，每行 1 个。例如：email,client-id';
$lang['PaypalPaymentsStandard.payment_mapping'] = '支付映射';

