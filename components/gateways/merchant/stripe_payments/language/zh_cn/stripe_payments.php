<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.ach_form.field_type'] = '账户类型';
$lang['StripePayments.description'] = '使用 Stripe 元件和支付请求 API 自动处理 3D 安全和 SCA，直接通过 Stripe 发送信用卡';
$lang['StripePayments.!error.invalid_request_error'] = '支付网关在处理请求时返回错误。';
$lang['StripePayments.charge_description'] = '收费 %1$s';
$lang['StripePayments.charge_description_default'] = '按指定金额收费';
$lang['StripePayments.migrate_accounts'] = '迁移账户';
$lang['StripePayments.warning_migrate_accounts'] = '在使用此迁移工具之前，请勿卸载旧的 Stripe 网关。这样做会导致工具无法访问。';
$lang['StripePayments.text_migrate_accounts'] = '您可以自动将旧 Stripe 网关异地存储的付款账户迁移到此 Stripe Payments 网关。非异地存储的账户必须通过手动创建新的支付账户来迁移。为防止超时，迁移将以 %1$s 为单位分批进行。根据迁移所有付款账户的需要多次运行此操作。';
$lang['StripePayments.text_accounts_remaining'] = '剩余账户： %1$s';
$lang['StripePayments.heading_migrate_accounts'] = '迁移旧付款账户';
$lang['StripePayments.webhook_note'] = '建议将以下网址配置为 Stripe 账户中 "payment_intent "事件的 Webhook。';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = '您的 API 密钥适用于实时模式或测试模式。请确保您使用了正确的密钥。';
$lang['StripePayments.tooltip_publishable_key'] = '您的 API 可发布密钥适用于实时模式或测试模式。请确保您使用的是正确的密钥。';
$lang['StripePayments.secret_key'] = 'API 密钥';
$lang['StripePayments.publishable_key'] = 'API 可发布密钥';
$lang['StripePayments.ach_form.mandate_future_usage'] = '如果您根据 %1$s 的条款定期使用 %1$s 的服务或购买其他产品，则您授权 %1$s 定期从您的银行账户中扣款。不在上述授权的定期扣款范围内的付款，只有在获得您的授权后才会扣款。';
$lang['StripePayments.ach_form.mandate_authorization'] = '通过提交本表格，您授权 %1$s 根据 %1$s 的网站和条款，从上述指定的银行账户中扣除您使用 %1$s 服务和/或从 %1$s 购买产品所产生的任何欠款，直至本授权被撤销。您可随时修改或取消本授权，但需提前 30 (30) 天通知 %1$s。';
$lang['StripePayments.ach_form.field_second_deposit'] = '第二笔存款';
$lang['StripePayments.ach_form.field_first_deposit'] = '首次存款';
$lang['StripePayments.ach_form.verification_notice'] = '我们向该银行账户汇入了两笔小额存款。为核实该账户，请确认这些存款的金额。';
$lang['StripePayments.ach_form.field_routing_number'] = '路由号码';
$lang['StripePayments.ach_form.field_account_number'] = '账号';
$lang['StripePayments.ach_form.field_holder_type_company'] = '公司名称';
$lang['StripePayments.ach_form.field_holder_type_individual'] = '个人';
$lang['StripePayments.ach_form.field_holder_type'] = '支架类型';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.!error.bank_account_unverified'] = '在使用银行账户付款之前，您需要验证您的银行账户。';
$lang['StripePayments.!error.secret_key.valid'] = '无法使用给定的密钥连接 Stripe API。';
$lang['StripePayments.!error.secret_key.empty'] = '请输入密钥。';
$lang['StripePayments.!error.publishable_key.empty'] = '请输入可发布密钥。';
$lang['StripePayments.!error.auth'] = '网关无法验证。';
$lang['StripePayments.request_three_d_secure_challenge'] = '每当客户保存付款方式或处理付款方式（已存储或未存储）时，提出 3D 安全挑战';
$lang['StripePayments.request_three_d_secure_note'] = '如果您是 Stripe 的印度用户，在使用 Stripe 保存新卡之前，必须始终执行 3D Secure (3DS) 身份验证。';
$lang['StripePayments.request_three_d_secure_frictionless'] = '每当客户保存付款方式或处理未存储的付款方式时，都会提出 3D 安全挑战';
$lang['StripePayments.request_three_d_secure_automatic'] = '允许 Stripe 确定何时提出 3D 安全挑战';
$lang['StripePayments.request_three_d_secure'] = '3D 安全身份验证流程';

