<?php
/**
 * Stripe Gateway
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Stripe_gateway.charge_description'] = '收费 %1$s';
$lang['Stripe_gateway.tooltip_stored'] = '选中此复选框可在 Stripe 而非 Blesta 内存储支付账户的银行卡信息。';
$lang['Stripe_gateway.stored'] = '异地存储银行卡信息';
$lang['Stripe_gateway.tooltip_api'] = '您的 API 密钥适用于实时模式或测试模式。请确保您使用了正确的密钥。';
$lang['Stripe_gateway.api_key'] = 'API 密钥';
$lang['Stripe_gateway.description'] = '这是使用 Stripe Checkout 的传统 Stripe 网关。它要求您的 Stripe 账户更新为 "不安全地处理付款"。我们建议改用 Blesta 中的 Stripe 支付网关';
$lang['Stripe_gateway.name'] = '条纹';
$lang['Stripe_gateway.!error.json_required'] = '该网关需要 JSON 扩展。';
$lang['Stripe_gateway.!error.api_key.empty'] = '请输入 API 密钥。';
$lang['Stripe_gateway.!error.auth'] = '网关无法验证。';

