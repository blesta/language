<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!error.api_key_required'] = 'API 키를 입력하세요.';
$lang['AdminSystemAi.!error.auth_failed'] = '인증에 실패했습니다. 사용자 아이디와 라이선스 키를 확인해 주세요.';
$lang['AdminSystemAi.!error.connection_failed'] = 'AI API에 연결할 수 없습니다: %1$s';
$lang['AdminSystemAi.!error.invalid_api_key'] = '잘못된 API 키입니다.';
$lang['AdminSystemAi.!error.invalid_request'] = '잘못된 요청입니다.';
$lang['AdminSystemAi.!error.key_already_exists'] = '귀하의 Blesta AI 구독에 대해 API 키가 이미 생성되었으며, 이 키는 다시 조회할 수 없습니다. account.blesta.com에서 해당 서비스의 ‘AI 관리’ 페이지로 이동하여 기존 키의 권한을 취소한 후 다시 시도해 주십시오.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Blesta 라이선스 키를 찾을 수 없습니다. 먼저 라이선스를 구성하세요.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = '저장하기 전에 개인정보 취급방침에 동의해야 합니다.';
$lang['AdminSystemAi.!error.request_failed'] = '요청이 실패했습니다. 다시 시도해 주세요.';
$lang['AdminSystemAi.!error.username_required'] = 'account.blesta.com 사용자 아이디를 입력하세요.';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Blesta 계정에서 API 키를 성공적으로 검색했습니다.';
$lang['AdminSystemAi.!success.settings_updated'] = 'AI 설정이 성공적으로 업데이트되었습니다!';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'AI 설정';
$lang['AdminSystemAi.index.degraded_model'] = '현재 선택된 모델 “%1$s ”은 더 이상 사용할 수 없습니다. AI 기능은 일시적으로 “%2$s ”을 사용하고 있습니다. 아래에서 새로운 기본 모델을 선택하고 저장해 주세요.';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API 키';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = '직원 그룹 액세스';
$lang['AdminSystemAi.index.field.ai_default_model'] = '기본 모델';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = '관계 깊이';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = '예제 데이터 포함';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = '스키마 정의 포함';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'AI 기능 사용';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = '챗봇';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = '이메일 템플릿';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = '패키지 설명';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = '글로벌 시스템 프롬프트(기본값)';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = '최대 토큰';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = '본인은 위의 개인정보 취급방침을 읽고 이해했습니다.';
$lang['AdminSystemAi.index.field.ai_temperature'] = '온도';
$lang['AdminSystemAi.index.field.submit'] = '설정 업데이트';
$lang['AdminSystemAi.index.heading_api'] = 'API 구성';
$lang['AdminSystemAi.index.heading_beta'] = '베타 기능 공지';
$lang['AdminSystemAi.index.heading_email_context'] = '이메일 템플릿 컨텍스트 설정';
$lang['AdminSystemAi.index.heading_features'] = '사용 가능한 기능';
$lang['AdminSystemAi.index.heading_model'] = '기본 모델';
$lang['AdminSystemAi.index.heading_parameters'] = '모델 매개변수';
$lang['AdminSystemAi.index.heading_privacy'] = '개인정보 고지';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = '개인정보 처리방침 동의';
$lang['AdminSystemAi.index.heading_prompts'] = '시스템 프롬프트';
$lang['AdminSystemAi.index.model_pricing'] = '(%1$s / %2$s, 토큰 1,000개당 크레딧)';
$lang['AdminSystemAi.index.model_recommended'] = '(추천)';
$lang['AdminSystemAi.index.page_title'] = '설정 &gt; 시스템 &gt; AI';
$lang['AdminSystemAi.index.text_api_status'] = 'API 상태';
$lang['AdminSystemAi.index.text_balance'] = '잔액: %1$s %2$s';
$lang['AdminSystemAi.index.text_beta_notice'] = '이 기능은 현재 베타 버전이며 예기치 않거나 부정확한 결과가 나올 수 있습니다. 신중하게 사용하세요.';
$lang['AdminSystemAi.index.text_connected'] = 'Blesta AI에 성공적으로 연결되었습니다.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Blesta AI에 연결하지 못했습니다. API 키를 확인하세요.';
$lang['AdminSystemAi.index.text_credits_used'] = '사용 크레딧(이번 달)';
$lang['AdminSystemAi.index.text_email_context_depth'] = '관계를 얼마나 깊이 팔로우할지(예: 송장 → 고객 → 연락처) 제어합니다. 기본값: 2';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'AI가 데이터 형식과 구조를 이해하는 데 도움이 되는 샘플 데이터 값을 포함하세요.';
$lang['AdminSystemAi.index.text_email_context_schemas'] = '컨텍스트에 필드 유형 정보 및 데이터베이스 스키마를 포함하세요.';
$lang['AdminSystemAi.index.text_feature_chatbot'] = '직원 지원을 위한 AI 기반 챗봇';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'AI 지원 이메일 템플릿 편집 및 개선 사항';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = '매력적인 제품 및 서비스 설명 생성하기';
$lang['AdminSystemAi.index.text_features_intro'] = 'AI 지원을 사용하도록 설정할 핵심 Blesta 기능을 선택합니다. 플러그인은 AI 기능에 액세스할 수 있으며 독립적으로 구성할 수 있습니다.';
$lang['AdminSystemAi.index.text_fetch_key'] = '내 Blesta 계정에서 가져오기';
$lang['AdminSystemAi.index.text_global_prompt_help'] = '이 프롬프트는 기능 내에서 재정의하지 않는 한 모든 AI 기능에 적용됩니다.';
$lang['AdminSystemAi.index.text_key_valid'] = 'API 키 유효성 검사 및 저장';
$lang['AdminSystemAi.index.text_last_api_call'] = '마지막 API 호출';
$lang['AdminSystemAi.index.text_manual_entry'] = 'API 키를 수동으로 입력하거나 계정에서 자동으로 가져옵니다.';
$lang['AdminSystemAi.index.text_no_calls_yet'] = '아직 통화 없음';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = '%1$s 에서 마지막으로 확인되었습니다.';
$lang['AdminSystemAi.index.text_privacy_notice'] = '요청은 처리를 위해 타사 AI 제공업체(예: OpenAI, Anthropic)로 전송됩니다. Blesta AI 서비스는 AI 대화 데이터를 저장하지 않지만, 당사는 이러한 제공업체가 데이터를 처리하거나 보관하는 방법을 통제하지 않습니다. 민감한 정보나 기밀 정보는 제출하지 마세요.';
$lang['AdminSystemAi.index.text_remaining_credits'] = '남은 크레딧';
$lang['AdminSystemAi.index.text_select_model'] = '모델 선택';
$lang['AdminSystemAi.index.text_staff_groups_help'] = '여러 그룹을 선택하려면 Ctrl(Mac의 경우 Cmd) 키를 길게 누릅니다.';
$lang['AdminSystemAi.index.text_status_active'] = '활성';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_validating'] = '검증 중...';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Blesta AI API 키. account.blesta.com에서 받습니다.';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'AI 챗봇에 액세스할 수 있는 직원 그룹을 선택합니다. 여러 그룹을 선택할 수 있습니다.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = '채팅 완료에 사용할 기본 AI 모델입니다.';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = '모델 관계 탐색을 위한 최대 깊이입니다. 값이 클수록 더 많은 관련 데이터가 포함되지만 토큰 사용량이 증가합니다. 범위: 1-5.';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = '시스템 전체에서 AI 기능을 활성화 또는 비활성화합니다.';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = '모든 요청에 대해 AI 모델에 전송되는 기본 지침입니다. 이는 모든 기능에서 AI의 동작과 컨텍스트를 정의합니다.';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = '응답에서 생성할 수 있는 최대 토큰 수입니다.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = '무작위성을 제어합니다. 값이 낮을수록 결정론적이고, 높을수록 창의적입니다. 범위: 0.0 ~ 2.0';
$lang['AdminSystemAi.modal.button.authenticate'] = '인증';
$lang['AdminSystemAi.modal.button.cancel'] = '취소';
$lang['AdminSystemAi.modal.field.username'] = '사용자 이름';
$lang['AdminSystemAi.modal.field.username_placeholder'] = '계정 사용자 아이디 입력';
$lang['AdminSystemAi.modal.heading_fetch'] = '내 Blesta 계정에서 가져오기';
$lang['AdminSystemAi.modal.text_authenticating'] = '인증...';
$lang['AdminSystemAi.modal.text_info'] = 'account.blesta.com의 사용자 이름과 Blesta 라이선스 키는 라이선스 유효성 확인 및 새로운 Blesta AI API 키를 자동으로 가져오는 데 사용됩니다. 키가 이미 생성된 경우, 새로운 키를 발급받기 전에 먼저 account.blesta.com의 해당 서비스 ‘AI 관리’ 페이지에서 기존 키를 취소해야 합니다.';
$lang['AdminSystemAi.modal.text_subtitle'] = 'API 키를 검색하려면 사용자 아이디가 필요합니다.';

