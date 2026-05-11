<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = '설정 업데이트';
$lang['AdminMain.settings.text_remove_avatar'] = '이미지 제거';
$lang['AdminMain.settings.field_default_avatar'] = '기본 아바타 이미지';
$lang['AdminMain.settings.option_default'] = '사용자 지정 아바타만 사용';
$lang['AdminMain.settings.option_fallback'] = '그라바타를 사용하되 사용자 지정 아바타가 설정되어 있으면 재정의합니다.';
$lang['AdminMain.settings.option_gravatar'] = '그라바타 사용';
$lang['AdminMain.settings.field_avatar'] = '아바타';
$lang['AdminMain.settings.heading_avatar_settings'] = '아바타 설정';
$lang['AdminMain.settings.boxtitle_settings'] = '설정';
$lang['AdminMain.settings.page_title'] = '지원 관리자 &gt; 설정';
$lang['AdminMain.!success.settings_updated'] = '설정이 성공적으로 업데이트되었습니다.';
$lang['AdminMain.!success.ai_settings_updated'] = 'AI 설정이 성공적으로 업데이트되었습니다.';
$lang['AdminMain.ai.page_title'] = '지원 관리자 &gt; AI 설정';
$lang['AdminMain.settings.text_avatar_recommendation'] = '권장: 150x150px, JPG 또는 PNG, 최대 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'AI 설정';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Blesta AI API 키 필요';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Support 매니저의 AI 기능을 사용하려면 Blesta AI API 키가 필요합니다. AI 기능을 사용 설정하기 전에 시스템 설정 &gt; 인공 지능에서 API 키를 구성하세요.';
$lang['AdminMain.ai.button_configure_ai'] = '시스템 AI 설정으로 이동';
$lang['AdminMain.ai.heading_features'] = 'AI 기능';
$lang['AdminMain.ai.heading_model'] = '모델 구성';
$lang['AdminMain.ai.heading_parameters'] = '모델 매개변수';
$lang['AdminMain.ai.heading_system_prompt'] = '시스템 프롬프트';
$lang['AdminMain.ai.heading_experimental'] = '실험적 기능';
$lang['AdminMain.ai.heading_replies'] = '자동 답글';
$lang['AdminMain.ai.heading_tools'] = 'AI 도구';
$lang['AdminMain.ai.field_enabled'] = 'Support Manager에 AI 기능 사용 설정하기';
$lang['AdminMain.ai.field_enabled_desc'] = '티켓 시스템 내에서 자동 응답, 요약 및 툴을 비롯한 AI 기반 기능을 사용할 수 있도록 허용하세요.';
$lang['AdminMain.ai.field_override_model'] = '기본 AI 모델 재정의';
$lang['AdminMain.ai.field_override_model_desc'] = '시스템 기본값입니다: %1$s';
$lang['AdminMain.ai.field_model'] = 'AI 모델';
$lang['AdminMain.ai.field_model_tooltip'] = 'Support Manager 기능에 특별히 사용할 AI 모델을 선택합니다. 모델마다 기능과 가격이 다릅니다.';
$lang['AdminMain.ai.field_model_desc'] = '이 모델은 Support 관리자의 모든 AI 기능에 사용됩니다.';
$lang['AdminMain.ai.field_override_max_tokens'] = '최대 토큰 재정의';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = '시스템 기본값입니다: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = '최대 토큰';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'AI가 한 번의 응답으로 생성할 수 있는 최대 토큰 수(단어/단어 조각)입니다. 값이 클수록 응답 시간이 길어지지만 리소스를 더 많이 소비합니다. 일반적인 범위: 대부분의 작업에서 100-4000.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'AI가 생성하는 응답의 최대 길이를 제어합니다. 기본값: 4000';
$lang['AdminMain.ai.field_override_temperature'] = '온도 재정의';
$lang['AdminMain.ai.field_override_temperature_desc'] = '시스템 기본값입니다: %1$s';
$lang['AdminMain.ai.field_temperature'] = '온도';
$lang['AdminMain.ai.field_temperature_tooltip'] = '응답의 무작위성을 제어합니다. 값이 낮을수록(0.0-0.7) 보다 집중적이고 결정적인 결과물이 생성됩니다. 값이 높을수록(1.3~2.0) 보다 창의적이고 다양한 결과물이 생성됩니다. 범위: 0.0~2.0';
$lang['AdminMain.ai.field_temperature_desc'] = '낮은 온도 = 집중력 향상, 높은 온도 = 창의력 향상. 기본값: 1.0';
$lang['AdminMain.ai.field_system_prompt'] = '지원 관리자 시스템 프롬프트';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = '지원 티켓을 처리할 때 AI에 대한 구체적인 지침을 정의합니다. 이 프롬프트는 글로벌 시스템 프롬프트를 재정의하고 티켓 시스템 내에서 AI의 행동을 구체적으로 정의합니다.';
$lang['AdminMain.ai.field_system_prompt_desc'] = '이 프롬프트는 Support Manager AI 기능에 특별히 사용되며 글로벌 시스템 프롬프트보다 우선합니다.';
$lang['AdminMain.ai.badge_experimental'] = '실험적';
$lang['AdminMain.ai.field_auto_reply_enabled'] = '자동 AI 티켓 답장 사용 설정';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = '답변에 대한 확신이 높을 때 AI가 티켓에 자동으로 답장하도록 허용하세요.';
$lang['AdminMain.ai.field_confidence_threshold'] = '신뢰 임계값';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'AI는 신뢰 수준이 이 임계값을 충족하거나 초과하는 경우에만 티켓에 자동으로 응답합니다. 값이 높을수록(90-100%) 더 보수적이고 안전합니다. 값이 낮을수록(60-89%) 더 많은 자동 응답이 이루어지지만 오류의 위험도 높아집니다.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = '임계값이 높을수록 더 보수적(자동 답글 수가 적고 정확도가 높음)입니다. 권장: 70% 이상.';
$lang['AdminMain.ai.field_require_human_review'] = '보내기 전에 사람 검토 필요';
$lang['AdminMain.ai.field_require_human_review_desc'] = '직원이 사용할 수 있도록 티켓 내에 자동 생성된 답장이 표시됩니다(권장).';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'AI 생성 면책 조항 추가';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = '자동 생성된 답글에 AI가 작성했음을 알리는 알림 추가(투명성을 위해 권장)';
$lang['AdminMain.ai.field_custom_disclaimer'] = '사용자 지정 면책 조항 텍스트';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'AI가 생성한 답글에 추가되는 고지 메시지를 사용자 지정합니다. 기본 메시지를 사용하려면 비워 두세요.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = '이 텍스트는 모든 AI 생성 티켓 답장에 추가됩니다.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = '이 답변은 AI의 도움을 받아 생성되었습니다.';
$lang['AdminMain.ai.field_restricted_departments'] = '자동 회신을 부서로 제한';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = '특정 티켓 부서에 대해서만 자동 응답을 허용합니다. 모든 부서에 허용하려면 모두 선택하지 않은 상태로 둡니다.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = '자동 AI 답장을 받을 수 있는 티켓 부서를 선택합니다. 모든 부서를 허용하려면 모두 선택을 취소합니다.';
$lang['AdminMain.ai.field_assistant_name'] = 'AI 어시스턴트 표시 이름';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = '티켓 스레드에서 AI가 생성한 답장에 표시되는 이름입니다. 이렇게 하면 지원 팀에 맞게 AI 어시스턴트가 개인화됩니다.';
$lang['AdminMain.ai.field_assistant_name_desc'] = '기본 이름인 "지원"을 사용하려면 비워 두세요.';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = '지원';
$lang['AdminMain.ai.field_analyze_trigger'] = 'AI 분석 트리거';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'AI가 잠재적 응답 및 도구 사용을 위해 티켓을 분석할 시기를 선택합니다. \'모든 응답\'은 각각의 새 메시지를 분석합니다. "티켓이 열림"은 최초 티켓이 열렸을 때만 분석합니다.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = '응답을 생성하고 도구를 실행하기 위해 AI 분석이 트리거되는 시기를 제어합니다.';
$lang['AdminMain.ai.option_every_reply'] = '모든 댓글';
$lang['AdminMain.ai.option_ticket_opened'] = '티켓 오픈 전용';
$lang['AdminMain.ai.field_max_queue_age_hours'] = '최대 대기열 기간(시간)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = '이 값보다 오래된 대기열에 있는 클라이언트 답장은 처리되지 않고 크론에 의해 삭제됩니다. 크론이 비활성화되어 백로그가 쌓인 경우 AI가 오래된 티켓에 답장하지 못하도록 합니다.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = '이 시간보다 오래 대기 중인 AI 답장은 삭제합니다. 1에서 8760(1년) 사이여야 합니다. 기본값은 24시간입니다.';
$lang['AdminMain.ai.field_tools_enabled'] = '도구 사용';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'AI가 우선 순위 변경, 티켓 종료, 스태프 배정 등의 티켓 관리 도구를 사용할 수 있도록 허용하세요.';
$lang['AdminMain.ai.field_tools_available'] = '사용 가능한 도구';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'AI가 사용할 수 있는 도구를 선택합니다. 각 도구는 티켓을 처리할 때 AI가 수행할 수 있는 특정 작업을 사용 설정합니다.';
$lang['AdminMain.ai.field_tool_change_priority'] = '티켓 우선순위 변경';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = '고객이 부적절한 우선 순위를 선택했거나 분석을 통해 감지된 경우 AI가 티켓 우선 순위를 조정(상향 또는 하향)하도록 허용하세요.';
$lang['AdminMain.ai.field_tool_close_ticket'] = '티켓 닫기';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = '스팸, 반송된 메시지 또는 명확하게 해결된 문제가 있는 경우 AI가 티켓을 종료하도록 허용하세요.';
$lang['AdminMain.ai.field_tool_assign_staff'] = '직원에게 할당';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'AI가 시스템 프롬프트 지시에 따라 특정 스태프에게 티켓을 배정하도록 허용하세요.';
$lang['AdminMain.ai.field_tool_instructions'] = '도구 사용 지침';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = '사용 설정된 도구를 언제, 어떻게 사용해야 하는지에 대한 구체적인 지침을 AI에게 제공하세요. 예를 들어 티켓을 배정할 스태프 이름과 전문 분야를 지정하세요.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = '도구를 사용해야 하는 경우 지침과 구체적인 시나리오를 제공합니다. 도구가 활성화되면 이 텍스트가 시스템 프롬프트에 포함됩니다.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = '예: - Linux 서버와 관련된 기술 문제는 John에게, Windows 서버는 Dave에게 배정 - 스팸, 자동 응답이 분명하거나 고객이 최근 답장에서 티켓이 해결되었다고 표시한 티켓만 종료 - \'다운\' 또는 \'오프라인\'이 언급된 긴급한 문제의 우선 순위를 긴급 상태로 올리기 - 실제 긴급 상황이 아닌 경우 긴급 티켓의 우선 순위를 낮추기';
$lang['AdminMain.ai.field_submit'] = 'AI 설정 저장';

