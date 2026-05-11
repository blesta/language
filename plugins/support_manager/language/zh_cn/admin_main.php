<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = '更新设置';
$lang['AdminMain.settings.text_remove_avatar'] = '移除图像';
$lang['AdminMain.settings.field_default_avatar'] = '默认头像';
$lang['AdminMain.settings.option_default'] = '仅使用自定义头像';
$lang['AdminMain.settings.option_fallback'] = '使用 Gravatar，但如果设置了自定义头像，则覆盖该头像';
$lang['AdminMain.settings.option_gravatar'] = '使用 Gravatar';
$lang['AdminMain.settings.field_avatar'] = '阿凡达';
$lang['AdminMain.settings.heading_avatar_settings'] = '头像设置';
$lang['AdminMain.settings.boxtitle_settings'] = '设置';
$lang['AdminMain.settings.page_title'] = '支持管理器 &gt; 设置';
$lang['AdminMain.!success.settings_updated'] = '设置已成功更新。';
$lang['AdminMain.!success.ai_settings_updated'] = '人工智能设置已成功更新。';
$lang['AdminMain.ai.page_title'] = '支持管理器 &gt; AI 设置';
$lang['AdminMain.settings.text_avatar_recommendation'] = '建议使用150x150px，JPG 或 PNG，最大 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = '人工智能设置';
$lang['AdminMain.ai.warning_not_configured_title'] = '需要 Blesta AI API 密钥';
$lang['AdminMain.ai.warning_not_configured_text'] = '支持管理器的人工智能功能需要 Blesta AI API 密钥。启用人工智能功能前，请在系统设置 &gt; 人工智能中配置您的 API 密钥。';
$lang['AdminMain.ai.button_configure_ai'] = '转到系统 AI 设置';
$lang['AdminMain.ai.heading_features'] = '人工智能功能';
$lang['AdminMain.ai.heading_model'] = '型号配置';
$lang['AdminMain.ai.heading_parameters'] = '模型参数';
$lang['AdminMain.ai.heading_system_prompt'] = '系统提示';
$lang['AdminMain.ai.heading_experimental'] = '实验特点';
$lang['AdminMain.ai.heading_replies'] = '自动回复';
$lang['AdminMain.ai.heading_tools'] = '人工智能工具';
$lang['AdminMain.ai.field_enabled'] = '为支持管理器启用人工智能功能';
$lang['AdminMain.ai.field_enabled_desc'] = '允许在票单系统中使用人工智能功能，包括自动回复、摘要和工具。';
$lang['AdminMain.ai.field_override_model'] = '覆盖默认人工智能模型';
$lang['AdminMain.ai.field_override_model_desc'] = '系统默认值：%1$s';
$lang['AdminMain.ai.field_model'] = '人工智能模型';
$lang['AdminMain.ai.field_model_tooltip'] = '选择专门用于支持管理器功能的人工智能模型。不同的模型有不同的功能和价格。';
$lang['AdminMain.ai.field_model_desc'] = '该模型将用于支持管理器中的所有人工智能功能。';
$lang['AdminMain.ai.field_override_max_tokens'] = '覆盖最大令牌';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = '系统默认值：%1$s';
$lang['AdminMain.ai.field_max_tokens'] = '最大代币';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = '人工智能在一次应答中可生成的最大词块（单词/词块）数。数值越大，回复时间越长，但消耗的资源也越多。典型范围：大多数任务为 100-4000。';
$lang['AdminMain.ai.field_max_tokens_desc'] = '控制人工智能生成的响应的最大长度。默认值：4000';
$lang['AdminMain.ai.field_override_temperature'] = '超控温度';
$lang['AdminMain.ai.field_override_temperature_desc'] = '系统默认值：%1$s';
$lang['AdminMain.ai.field_temperature'] = '温度';
$lang['AdminMain.ai.field_temperature_tooltip'] = '控制响应的随机性。较低的数值（0.0-0.7）会产生更集中、更确定的输出。数值越高（1.3-2.0），输出的内容就越有创造性和多样性。范围：0.0 至 2.0';
$lang['AdminMain.ai.field_temperature_desc'] = '温度越低 = 越专注，温度越高 = 越有创意。默认值：1.0';
$lang['AdminMain.ai.field_system_prompt'] = '支持经理系统提示';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = '定义人工智能在处理支持票单时的具体指令。此提示会覆盖全局系统提示，并专门定义人工智能在票单系统中的行为。';
$lang['AdminMain.ai.field_system_prompt_desc'] = '该提示符专门用于支持管理器 AI 功能，并覆盖全局系统提示符。';
$lang['AdminMain.ai.badge_experimental'] = '实验';
$lang['AdminMain.ai.field_auto_reply_enabled'] = '启用自动人工智能票单回复';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = '让人工智能在高度确定答案时自动回复票单。';
$lang['AdminMain.ai.field_confidence_threshold'] = '置信度阈值';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = '只有当人工智能的置信度达到或超过此阈值时，才会自动回复票单。较高的值（90-100%）更为保守和安全。较低的值（60-89%）会导致更多的自动回复，但出错的风险也更高。';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = '阈值越高 = 越保守（自动回复越少，准确率越高）。建议：70% 或更高：70% 或更高。';
$lang['AdminMain.ai.field_require_human_review'] = '发送前需要人工审核';
$lang['AdminMain.ai.field_require_human_review_desc'] = '自动生成的回复显示在票单中，供工作人员使用（推荐）';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = '添加人工智能生成的免责声明';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = '在自动生成的回复中附加通知，说明这些回复是由人工智能创建的（建议提高透明度）';
$lang['AdminMain.ai.field_custom_disclaimer'] = '自定义免责声明文本';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = '自定义附加到人工智能生成的回复中的免责信息。留空则使用默认信息。';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = '此文本将附加到所有人工智能生成的票据回复中。';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = '本回复由人工智能协助生成。';
$lang['AdminMain.ai.field_restricted_departments'] = '限制自动回复部门';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = '只允许特定票单部门自动回复。全部不选则允许所有部门。';
$lang['AdminMain.ai.field_restricted_departments_desc'] = '选择哪些票单部门可以收到自动 AI 回复。取消全部选中表示允许所有部门。';
$lang['AdminMain.ai.field_assistant_name'] = '人工智能助理显示名称';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = '人工智能在票单线程中生成的回复所显示的名称。这可以为您的支持团队个性化人工智能助手。';
$lang['AdminMain.ai.field_assistant_name_desc'] = '留空以使用默认名称："支持"。';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = '支持';
$lang['AdminMain.ai.field_analyze_trigger'] = '人工智能分析触发器';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = '选择人工智能应何时分析票单以获得潜在回复和使用工具。"每次回复 "分析每条新消息。"已开票 "只分析首次开票。';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = '控制何时触发人工智能分析，以生成响应和执行工具。';
$lang['AdminMain.ai.option_every_reply'] = '每次回复';
$lang['AdminMain.ai.option_ticket_opened'] = '仅开票';
$lang['AdminMain.ai.field_max_queue_age_hours'] = '最大排队时间（小时）';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = '超过此值的排队客户端回复将被 cron 丢弃，而不是进行处理。如果 cron 已被禁用，且已出现积压，则可防止人工智能回复过期票单。';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = '丢弃队列中超过此小时的人工智能回复。必须在 1 到 8760（1 年）之间。默认为 24 小时。';
$lang['AdminMain.ai.field_tools_enabled'] = '启用工具';
$lang['AdminMain.ai.field_tools_enabled_desc'] = '允许人工智能使用票单管理工具，如更改优先级、关闭票单或分配给工作人员。';
$lang['AdminMain.ai.field_tools_available'] = '可用工具';
$lang['AdminMain.ai.field_tools_available_tooltip'] = '选择允许人工智能使用的工具。每种工具都能让人工智能在处理票单时执行特定操作。';
$lang['AdminMain.ai.field_tool_change_priority'] = '更改机票优先级';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = '当客户选择了不合适的优先级或分析检测到不合适的优先级时，允许人工智能调整票单优先级（上调或下调）。';
$lang['AdminMain.ai.field_tool_close_ticket'] = '关闭机票';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = '允许人工智能在出现垃圾邮件、退回邮件或已明确解决的问题时关闭票单。';
$lang['AdminMain.ai.field_tool_assign_staff'] = '指派给工作人员';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = '允许人工智能根据系统提示将票单分配给特定的工作人员。';
$lang['AdminMain.ai.field_tool_instructions'] = '工具使用说明';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = '就何时以及如何使用启用的工具向人工智能提供具体指导。例如，指定工作人员姓名及其专业领域，以便分配票单。';
$lang['AdminMain.ai.field_tool_instructions_desc'] = '提供使用工具的说明和具体场景。启用工具后，系统提示中将包含此文本。';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = '例如： - 将与 Linux 服务器相关的技术问题分配给 John，将与 Windows 服务器相关的技术问题分配给 Dave - 仅关闭明显是垃圾邮件、自动回复或客户在最新回复中表示问题已解决的单子 - 将提到 "宕机 "或 "离线 "的紧急问题的优先级提高到紧急状态 - 如果不是实际紧急问题，则降低紧急单子的优先级';
$lang['AdminMain.ai.field_submit'] = '保存 AI 设置';

