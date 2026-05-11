<?php
/**
 * Admin Chatbot
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminChatbot.index.time_yesterday'] = '어제';
$lang['AdminChatbot.index.time_today'] = '오늘';
$lang['AdminChatbot.index.time_hours_ago'] = '%1$s 한 시간 전';
$lang['AdminChatbot.index.time_minutes_ago'] = '%1$s 분 전';
$lang['AdminChatbot.index.time_just_now'] = '지금 바로';
$lang['AdminChatbot.index.confirm_delete'] = '이 대화를 삭제하시겠습니까?';
$lang['AdminChatbot.index.btn_delete'] = '삭제';
$lang['AdminChatbot.!error.model_empty'] = '메시지를 보내기 전에 모델을 선택하세요.';
$lang['AdminChatbot.!error.conversation_create_failed'] = '대화를 만들지 못했습니다. 다시 시도해 주세요.';
$lang['AdminChatbot.!error.stream_failed'] = 'AI로부터 응답을 받지 못했습니다. 다시 시도하세요.';
$lang['AdminChatbot.!error.message_empty'] = '메시지를 입력하세요.';
$lang['AdminChatbot.!error.conversation_not_found'] = '대화를 찾을 수 없습니다.';
$lang['AdminChatbot.!error.unauthorized'] = '이 작업을 수행할 권한이 없습니다.';
$lang['AdminChatbot.index.btn_go_back'] = '뒤로 가기';
$lang['AdminChatbot.index.no_permission_text'] = 'AI 챗봇을 사용할 수 있는 권한이 없습니다. 관리자에게 문의하여 액세스 권한을 요청하세요.';
$lang['AdminChatbot.index.no_permission_title'] = '액세스 제한됨';
$lang['AdminChatbot.index.btn_configure'] = 'AI 구성';
$lang['AdminChatbot.index.not_configured_text'] = 'AI 챗봇이 아직 구성되지 않았습니다. 이 기능을 사용하려면 AI 설정을 구성해 주세요.';
$lang['AdminChatbot.index.not_configured_title'] = 'AI 구성되지 않음';
$lang['AdminChatbot.index.truncated_notice'] = '이 응답은 토큰 제한으로 인해 잘렸습니다. 설정 &gt; 시스템 &gt; AI에서 최대 토큰을 늘리거나 AI에 계속 진행하도록 요청할 수 있습니다.';
$lang['AdminChatbot.index.card_badge_prompt_mode'] = '프롬프트 모드';
$lang['AdminChatbot.index.context_pill_dismiss'] = '취소';
$lang['AdminChatbot.index.suggestion_plugin_dev_placeholder'] = '무엇을 만들고 있나요?';
$lang['AdminChatbot.index.suggestion_plugin_dev_text'] = '플러그인 또는 모듈 구축에 도움 받기';
$lang['AdminChatbot.index.suggestion_plugin_dev_title'] = '개발자 도움말';
$lang['AdminChatbot.index.suggestion_api_query_placeholder'] = 'API를 통해 무엇을 하고 싶으신가요?';
$lang['AdminChatbot.index.suggestion_api_query_text'] = 'Blesta API 요청 작성 도움말 받기';
$lang['AdminChatbot.index.suggestion_api_query_title'] = 'API 쿼리';
$lang['AdminChatbot.index.suggestion_custom_report_placeholder'] = '필요한 보고서를 설명하세요...';
$lang['AdminChatbot.index.suggestion_custom_report_text'] = '사용자 지정 보고서에 대한 SQL 쿼리 생성하기';
$lang['AdminChatbot.index.suggestion_custom_report_title'] = '사용자 지정 보고서';
$lang['AdminChatbot.index.suggestion_security_context'] = '사용자가 보안 모범 사례에 대해 문의합니다. 직원 권한 및 그룹 기반 액세스 제어, 2단계 인증 설정, 강력한 비밀번호 정책, Blesta 업데이트 유지, SSL/TLS 구성, IP 기반 로그인 제한, 로그 액세스(도구 &gt; 로그) 등을 다룹니다. Route.admin을 통해 /config/routes.php의 관리자 기본 경로 변경에 대해 언급합니다.';
$lang['AdminChatbot.index.suggestion_security_text'] = '어떤 보안 모범 사례를 따라야 하나요?';
$lang['AdminChatbot.index.suggestion_security_title'] = '보안';
$lang['AdminChatbot.index.suggestion_clients_context'] = '사용자가 Blesta의 고객 관리에 대해 문의하고 있습니다. 새 클라이언트 만들기, 클라이언트 프로필 편집, 클라이언트 그룹 관리(설정 &gt; 클라이언트 &gt; 클라이언트 그룹), 청구서 및 결제에 대한 그룹 수준 기본값 설정, 자동 이체, 결제 연체 알림 및 미리 알림, 결제 계정 관리, 모든 클라이언트 작업의 원스톱 대상인 클라이언트 프로필 페이지 탐색에 대해 다룹니다.';
$lang['AdminChatbot.index.suggestion_clients_text'] = '고객 계정과 그룹은 어떻게 관리하나요?';
$lang['AdminChatbot.index.suggestion_clients_title'] = '고객 관리';
$lang['AdminChatbot.index.suggestion_plugins_context'] = '사용자가 Blesta의 플러그인 관리에 대해 문의합니다. 플러그인 설치(설정 &gt; 플러그인 &gt; 사용 가능), 플러그인 활성화/비활성화, 플러그인 설정 구성, 스태프 그룹에 대한 플러그인 권한 관리(설정 &gt; 시스템 &gt; 스태프 &gt; 스태프 그룹: 편집)를 안내합니다. Support 매니저, CMS, 도메인 매니저와 같은 인기 있는 플러그인과 업로드를 통해 타사 플러그인을 설치하는 방법 및 활성화하는 위치에 대해 언급합니다.';
$lang['AdminChatbot.index.suggestion_plugins_text'] = '플러그인을 설치하고 구성하려면 어떻게 하나요?';
$lang['AdminChatbot.index.suggestion_plugins_title'] = '플러그인';
$lang['AdminChatbot.index.suggestion_automation_text'] = '자동 청구 및 서비스 작업은 어떻게 설정하나요?';
$lang['AdminChatbot.index.suggestion_automation_context'] = '사용자가 Blesta의 자동화 및 크론 작업에 대해 문의합니다. 시스템 크론 작업을 설정하는 방법, Blesta에서 실행하는 자동화된 작업의 종류(송장 생성, 결제 처리, 서비스 일시 중지/일시 중지 해제, 이메일 알림), 설정 &gt; 시스템 &gt; 자동화에서 권장 크론 명령을 찾는 위치, 설정 &gt; 회사 &gt; 자동화에서 개별 작업과 그 실행 시간 및 빈도를 설명하세요.';
$lang['AdminChatbot.index.suggestion_automation_title'] = '자동화';
$lang['AdminChatbot.index.suggestion_support_context'] = '사용자가 Blesta의 지원 티켓 시스템에 대해 문의합니다. 탐색(지원 &gt; 부서 및 지원 &gt; 티켓)을 포함하여 Support Manager 플러그인을 사용하여 지원 부서를 만들고 티켓에 응답하는 방법을 설명합니다. 티켓 상태, 부서, 미리 정의된 응답, 파이핑 또는 POP/IMAP을 통한 티켓 이메일 가져오기, 스태프 사용자 만들기 및 부서 할당에 대해 다룹니다.';
$lang['AdminChatbot.index.suggestion_support_text'] = '지원 티켓을 관리하고 응답하려면 어떻게 해야 하나요?';
$lang['AdminChatbot.index.suggestion_support_title'] = '지원 티켓';
$lang['AdminChatbot.index.suggestion_modules_context'] = '사용자가 Blesta에서 모듈 설치 구성에 대해 문의합니다. Blesta에서 모듈을 설치하고 구성하는 방법을 안내합니다. 탐색(설정 &gt; 모듈 &gt; 사용 가능), 서버 또는 API 자격 증명 추가, 모듈을 사용하는 패키지 만들기(패키지 &gt; 새 패키지) 등을 다룹니다. 구체적인 예로 cPanel을 사용하되 다른 모듈에도 이 패턴이 적용된다는 점을 언급합니다.';
$lang['AdminChatbot.index.suggestion_modules_text'] = 'cPanel과 같은 서버 모듈을 구성하려면 어떻게 하나요?';
$lang['AdminChatbot.index.suggestion_modules_title'] = '모듈 설정';
$lang['AdminChatbot.index.suggestion_services_context'] = '사용자가 Blesta에서 서비스 프로비저닝에 대해 문의합니다. 클라이언트에 대한 서비스 추가, 패키지 선택, 모듈 설정 구성, 서비스 활성화에 대해 안내합니다. 탐색 경로(클라이언트 &gt; 클라이언트 선택 &gt; 새 서비스), 패키지 생성(패키지 &gt; 새 패키지) 및 기간 선택, 모듈 선택(새 패키지의 모듈 탭), 수동 프로비저닝과 자동 프로비저닝에 대해 다룹니다.';
$lang['AdminChatbot.index.suggestion_services_text'] = '클라이언트를 위한 새 서비스를 프로비저닝하려면 어떻게 하나요?';
$lang['AdminChatbot.index.suggestion_services_title'] = '서비스 관리';
$lang['AdminChatbot.index.suggestion_billing_context'] = '사용자가 Blesta에서 고객에게 인보이스를 발행하는 방법에 대해 문의하고 있습니다. 인보이스 생성에 대한 단계별 안내를 제공하세요. Blesta의 탐색 경로(예: 고객 &gt; 고객 선택 &gt; 인보이스 만들기 작업 또는 인보이스 위젯의 [+] 아이콘), 인보이스 전달 방법, 반복 인보이스 설정 및 일반적인 청구 설정에 대해 설명하세요.';
$lang['AdminChatbot.index.suggestion_billing_text'] = '인보이스를 생성하여 고객에게 보내려면 어떻게 해야 하나요?';
$lang['AdminChatbot.index.suggestion_billing_title'] = '청구 도움말';
$lang['AdminChatbot.index.empty_subtitle'] = '메시지를 입력하거나 아래에서 제안을 선택하여 대화를 시작하세요. AI가 생성한 콘텐츠에는 부정확성, 편견 또는 환각이 포함될 수 있으며 전문적인 조언으로 간주해서는 안 됩니다. 이 도구를 불법적이거나 유해한 목적으로 사용해서는 안 됩니다.';
$lang['AdminChatbot.index.empty_title'] = '오늘은 무엇을 도와드릴까요?';
$lang['AdminChatbot.index.default_title'] = '새로운 대화';
$lang['AdminChatbot.index.new_chat_title'] = '새 채팅';
$lang['AdminChatbot.index.model_label'] = '모델';
$lang['AdminChatbot.index.btn_send'] = '보내기';
$lang['AdminChatbot.index.input_placeholder'] = '메시지 입력...';
$lang['AdminChatbot.index.show_chatbot_only'] = '챗봇 대화만 표시';
$lang['AdminChatbot.index.show_all_conversations'] = '모든 대화 표시';
$lang['AdminChatbot.index.no_conversations'] = '아직 대화가 없습니다.';
$lang['AdminChatbot.index.search_placeholder'] = '대화 검색...';
$lang['AdminChatbot.index.btn_new_chat'] = '새 채팅';
$lang['AdminChatbot.index.page_title'] = 'AI 챗봇';

