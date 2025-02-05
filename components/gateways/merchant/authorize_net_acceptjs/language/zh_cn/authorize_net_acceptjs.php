<?php
/**
 * Authorize Net Acceptjs
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AuthorizeNetAcceptjs.charge_description'] = '收费 %1$s';
$lang['AuthorizeNetAcceptjs.charge_description_default'] = '按指定金额收费';
$lang['AuthorizeNetAcceptjs.sandbox_note'] = '启用此选项将把交易发布到 Authorize.Net Sandbox 环境。只有在使用 Authorize.Net Sandbox 账户进行测试时，才能启用此选项。';
$lang['AuthorizeNetAcceptjs.sandbox'] = '沙盒';
$lang['AuthorizeNetAcceptjs.transaction_key'] = '交易密钥';
$lang['AuthorizeNetAcceptjs.login_id'] = '登录 ID';
$lang['AuthorizeNetAcceptjs.field_expiration'] = '有效期';
$lang['AuthorizeNetAcceptjs.field_security'] = '安全代码';
$lang['AuthorizeNetAcceptjs.field_number'] = '数量';
$lang['AuthorizeNetAcceptjs.description'] = '直接向 Authorize.net 发送安全支付数据。Accept.js 捕获支付数据并直接提交给 Authorize.net。';
$lang['AuthorizeNetAcceptjs.!error.sandbox.valid'] = '如果给定了沙盒，则必须设置为 "true"。';
$lang['AuthorizeNetAcceptjs.!error.login_id.valid'] = '无法使用给定的登录 ID 连接到 Authorize.net API。';
$lang['AuthorizeNetAcceptjs.!error.login_id.empty'] = '请输入登录 ID。';
$lang['AuthorizeNetAcceptjs.!error.transaction_key.empty'] = '请输入交易密钥。';
$lang['AuthorizeNetAcceptjs.!error.auth'] = '网关无法验证。';
$lang['AuthorizeNetAcceptjs.name'] = 'Authorize.Net Accept.js';

