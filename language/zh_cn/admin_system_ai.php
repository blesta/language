<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!error.api_key_required'] = '请输入 API 密钥。';
$lang['AdminSystemAi.!error.auth_failed'] = '验证失败。请检查您的用户名和许可证密钥。';
$lang['AdminSystemAi.!error.connection_failed'] = '无法连接 AI API：%1$s';
$lang['AdminSystemAi.!error.invalid_api_key'] = '无效 API 密钥。';
$lang['AdminSystemAi.!error.invalid_request'] = '无效请求。';
$lang['AdminSystemAi.!error.key_already_exists'] = '您的 Blesta AI 订阅已生成 API 密钥，且无法再次获取。请在 account.blesta.com 上的服务“管理 AI”页面中撤销现有密钥，然后重试。';
$lang['AdminSystemAi.!error.no_license_key'] = '未找到 Blesta 许可证密钥。请先配置许可证。';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = '在保存之前，您必须同意隐私声明。';
$lang['AdminSystemAi.!error.request_failed'] = '请求失败。请重试。';
$lang['AdminSystemAi.!error.username_required'] = '请输入您的 account.blesta.com 用户名。';
$lang['AdminSystemAi.!success.api_key_fetched'] = '从您的 Blesta 账户成功获取 API 密钥。';
$lang['AdminSystemAi.!success.settings_updated'] = '人工智能设置已成功更新！';
$lang['AdminSystemAi.index.boxtitle_ai'] = '人工智能设置';
$lang['AdminSystemAi.index.degraded_model'] = '当前选定的模型“%1$s ”已不可用。AI 功能暂时改用“%2$s ”。请在下方选择一个新的默认模型并保存。';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API 密钥';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = '工作人员团体访问';
$lang['AdminSystemAi.index.field.ai_default_model'] = '默认模式';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = '关系深度';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = '包含示例数据';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = '包含模式定义';
$lang['AdminSystemAi.index.field.ai_enabled'] = '启用人工智能功能';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = '聊天机器人';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = '电子邮件模板';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = '包装说明';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = '全局系统提示（默认）';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = '最大代币';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = '我已阅读并理解上述隐私声明。';
$lang['AdminSystemAi.index.field.ai_temperature'] = '温度';
$lang['AdminSystemAi.index.field.submit'] = '更新设置';
$lang['AdminSystemAi.index.heading_api'] = '应用程序接口配置';
$lang['AdminSystemAi.index.heading_beta'] = '测试版功能通知';
$lang['AdminSystemAi.index.heading_email_context'] = '电子邮件模板上下文设置';
$lang['AdminSystemAi.index.heading_features'] = '启用功能';
$lang['AdminSystemAi.index.heading_model'] = '默认模式';
$lang['AdminSystemAi.index.heading_parameters'] = '模型参数';
$lang['AdminSystemAi.index.heading_privacy'] = '隐私声明';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = '隐私确认';
$lang['AdminSystemAi.index.heading_prompts'] = '系统提示';
$lang['AdminSystemAi.index.model_pricing'] = '(每1K代币可获得%1$s /%2$s 积分)';
$lang['AdminSystemAi.index.model_recommended'] = '(推荐)';
$lang['AdminSystemAi.index.page_title'] = '设置 &gt; 系统 &gt; 人工智能';
$lang['AdminSystemAi.index.text_api_status'] = '应用程序接口状态';
$lang['AdminSystemAi.index.text_balance'] = '余额：%1$s %2$s';
$lang['AdminSystemAi.index.text_beta_notice'] = '该功能目前处于测试阶段，可能会产生意想不到或不准确的结果。请谨慎使用。';
$lang['AdminSystemAi.index.text_connected'] = '成功连接 Blesta AI。';
$lang['AdminSystemAi.index.text_connection_error'] = '连接 Blesta AI 失败。请检查您的 API 密钥。';
$lang['AdminSystemAi.index.text_credits_used'] = '已使用积分（本月）';
$lang['AdminSystemAi.index.text_email_context_depth'] = '控制跟踪关系的深度（例如，发票 → 客户 → 联系人）。默认值：2';
$lang['AdminSystemAi.index.text_email_context_examples'] = '包括样本数据值，以帮助人工智能了解数据格式和结构。';
$lang['AdminSystemAi.index.text_email_context_schemas'] = '在上下文中包含字段类型信息和数据库模式。';
$lang['AdminSystemAi.index.text_feature_chatbot'] = '人工智能聊天机器人为员工提供帮助';
$lang['AdminSystemAi.index.text_feature_email_templates'] = '人工智能辅助电子邮件模板编辑和改进';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = '生成引人注目的产品和服务说明';
$lang['AdminSystemAi.index.text_features_intro'] = '选择哪些 Blesta 核心功能应启用人工智能辅助。插件可以访问人工智能功能，并可独立配置。';
$lang['AdminSystemAi.index.text_fetch_key'] = '从我的 Blesta 账户获取';
$lang['AdminSystemAi.index.text_global_prompt_help'] = '此提示适用于所有人工智能功能，除非在功能中被覆盖。';
$lang['AdminSystemAi.index.text_key_valid'] = '已验证并保存 API 密钥';
$lang['AdminSystemAi.index.text_last_api_call'] = '最后一次 API 调用';
$lang['AdminSystemAi.index.text_manual_entry'] = '手动输入 API 密钥或从账户中自动获取。';
$lang['AdminSystemAi.index.text_no_calls_yet'] = '尚未接到电话';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = '最后确认%1$s 。';
$lang['AdminSystemAi.index.text_privacy_notice'] = '请求将发送给第三方人工智能提供商（如OpenAI、Anthropic）进行处理。Blesta人工智能服务不会存储人工智能对话数据；但是，我们无法控制这些提供商如何处理或保留数据。避免提交敏感或机密信息。';
$lang['AdminSystemAi.index.text_remaining_credits'] = '剩余学分';
$lang['AdminSystemAi.index.text_select_model'] = '选择型号';
$lang['AdminSystemAi.index.text_staff_groups_help'] = '按住 Ctrl（Mac 上为 Cmd）键可选择多个组。';
$lang['AdminSystemAi.index.text_status_active'] = '活跃';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_validating'] = '验证...';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = '您的 Blesta AI API 密钥。请从 account.blesta.com 获取。';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = '选择哪些员工群组可以访问人工智能聊天机器人。可选择多个组。';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = '聊天完成时使用的默认人工智能模型。';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = '遍历模型关系的最大深度。数值越大，包含的相关数据越多，但会增加令牌的使用量。范围：1-5.';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = '在整个系统中启用或禁用人工智能功能。';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = '每次请求时发送给人工智能模型的默认指令。这定义了人工智能在所有功能中的行为和上下文。';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = '在响应中生成的最大标记数。';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = '控制随机性。数值越小，确定性越强，数值越大，创造性越强。范围：0.0 至 2.00.0 至 2.0';
$lang['AdminSystemAi.modal.button.authenticate'] = '验证';
$lang['AdminSystemAi.modal.button.cancel'] = '取消';
$lang['AdminSystemAi.modal.field.username'] = '用户名';
$lang['AdminSystemAi.modal.field.username_placeholder'] = '输入您的用户名';
$lang['AdminSystemAi.modal.heading_fetch'] = '从我的 Blesta 账户获取';
$lang['AdminSystemAi.modal.text_authenticating'] = '验证...';
$lang['AdminSystemAi.modal.text_info'] = '您的 account.blesta.com 用户名和 Blesta 许可证密钥将用于验证您的许可证，并自动获取新的 Blesta AI API 密钥。如果已经生成过密钥，则必须先在 account.blesta.com 上您所用服务的“管理 AI”页面中撤销该密钥，才能生成新密钥。';
$lang['AdminSystemAi.modal.text_subtitle'] = '您的用户名是获取 API 密钥的必填项';

