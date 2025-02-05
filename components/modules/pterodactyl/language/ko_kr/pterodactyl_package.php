<?php
/**
 * Pterodactyl Package
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PterodactylPackage.package_fields.tooltip.display'] = '클라이언트가 서비스 추가/수정 중에 이 값을 수정할 수 있도록 허용하려면 선택합니다. 이 필드에 구성 가능한 옵션을 사용하려면 선택하지 않은 상태로 두세요.';
$lang['PterodactylPackage.package_fields.tooltip.backups'] = '사용자가 생성한 서버에 대해 허용되는 총 백업 횟수입니다. 무제한으로 허용하려면 비워 둡니다.';
$lang['PterodactylPackage.package_fields.backups'] = '백업 한도(선택 사항)';
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = '사용자가 생성한 서버에 허용되는 총 할당 수입니다. 무제한으로 허용하려면 비워 둡니다.';
$lang['PterodactylPackage.package_fields.allocations'] = '할당 한도(선택 사항)';
$lang['PterodactylPackage.package_fields.tooltip.databases'] = '사용자가 서버를 생성할 수 있는 총 데이터베이스 수입니다. 무제한으로 허용하려면 비워 둡니다.';
$lang['PterodactylPackage.package_fields.databases'] = '데이터베이스 제한(선택 사항)';
$lang['PterodactylPackage.package_fields.tooltip.image'] = '생성된 서버에 할당할 사용자 지정 Docker 이미지(예: quay.io/pterodactyl/core:java-glibc).';
$lang['PterodactylPackage.package_fields.image'] = '이미지(선택 사항)';
$lang['PterodactylPackage.package_fields.tooltip.startup'] = '생성된 서버에 할당할 사용자 지정 시작 명령(예: java -Xms128M -Xmx 1024M -jar server.jar).';
$lang['PterodactylPackage.package_fields.startup'] = '시작(선택 사항)';
$lang['PterodactylPackage.package_fields.tooltip.io'] = '블록 IO 조정 번호(10-1000).';
$lang['PterodactylPackage.package_fields.io'] = '블록 IO 가중치';
$lang['PterodactylPackage.package_fields.tooltip.disk'] = '생성된 서버에 할당할 디스크 공간의 양입니다.';
$lang['PterodactylPackage.package_fields.disk'] = '디스크 공간(MB)';
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = '생성된 서버에 할당할 CPU의 양입니다.';
$lang['PterodactylPackage.package_fields.cpu'] = 'CPU 제한(%)';
$lang['PterodactylPackage.package_fields.tooltip.swap'] = '생성된 서버에 할당할 스왑 수량입니다.';
$lang['PterodactylPackage.package_fields.swap'] = '스왑(MB)';
$lang['PterodactylPackage.package_fields.tooltip.memory'] = '생성된 서버에 할당할 메모리 양입니다.';
$lang['PterodactylPackage.package_fields.memory'] = '메모리(MB)';
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = '서버를 설치할 팩의 ID입니다.';
$lang['PterodactylPackage.package_fields.pack_id'] = '팩 ID(선택 사항)';
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = '서버가 사용할 에그의 ID입니다.';
$lang['PterodactylPackage.package_fields.egg_id'] = '에그 ID';
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = '서버가 사용할 네스트입니다.';
$lang['PterodactylPackage.package_fields.nest_id'] = 'Nest';
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = '쉼표로 구분된 포트 범위를 서버에 할당합니다(예: 25565-25570,25580-25590).';
$lang['PterodactylPackage.package_fields.port_range'] = '포트 범위';
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = '생성된 서버에 전용 IP를 할당합니다.';
$lang['PterodactylPackage.package_fields.dedicated_ip'] = '전용 IP(선택 사항)';
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = '서버를 자동으로 배포할 위치입니다.';
$lang['PterodactylPackage.package_fields.location_id'] = '위치';
$lang['PterodactylPackage.!error.meta[backups].format'] = '백업 개수는 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[allocations].format'] = '할당 횟수는 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[databases].format'] = '데이터베이스의 수는 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[image].length'] = '이미지 경로는 최대 255자 이내여야 합니다.';
$lang['PterodactylPackage.!error.meta[io].format'] = 'IO 가중치는 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[disk].format'] = '디스크 공간은 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[cpu].format'] = 'CPU 비율은 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[swap].format'] = '스왑 금액은 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[memory].format'] = '메모리 양은 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[pack_id].format'] = '팩 ID는 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = '알은 익룡의 어떤 것과도 일치하지 않습니다.';
$lang['PterodactylPackage.!error.meta[egg_id].format'] = '에그 ID는 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = '이 둥지는 익룡의 어떤 둥지와도 일치하지 않습니다.';
$lang['PterodactylPackage.!error.meta[nest_id].format'] = '네스트 ID는 숫자여야 합니다.';
$lang['PterodactylPackage.!error.meta[port_range].format'] = '포트 범위는 대부분 25565-25570,25580-25590 형식입니다.';
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = '전용 IP 사용 여부는 1 또는 0으로 설정해야 합니다.';
$lang['PterodactylPackage.!error.meta[location_id].valid'] = '위치 ID가 익룡의 어떤 것과도 일치하지 않습니다.';
$lang['PterodactylPackage.!error.meta[location_id].format'] = '위치 ID는 숫자여야 합니다.';
$lang['PterodactylPackage.package_fields.optional'] = '%1$s (선택 사항)';

