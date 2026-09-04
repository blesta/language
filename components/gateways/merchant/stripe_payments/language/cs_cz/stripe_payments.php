<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.!error.ach.invalid_account'] = 'Bankovní účet tohoto zákazníka se nepodařilo najít.';
$lang['StripePayments.!error.ach.unverified'] = 'Bankovní účet se nepodařilo ověřit. Zkontrolujte prosím částky vkladu a zkuste to znovu.';
$lang['StripePayments.!error.auth'] = 'Bránu se nepodařilo ověřit.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Před použitím bankovního účtu k provedení platby je třeba jej ověřit.';
$lang['StripePayments.!error.india_mandate_max_amount.format'] = 'Zadejte prosím platnou částku pro maximální opakující se platbu.';
$lang['StripePayments.!error.invalid_request_error'] = 'Platební brána při zpracování požadavku vrátila chybu.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Zadejte prosím publikovatelný klíč.';
$lang['StripePayments.!error.secret_key.empty'] = 'Zadejte prosím tajný klíč.';
$lang['StripePayments.!error.secret_key.valid'] = 'Nelze se připojit k rozhraní Stripe API pomocí zadaného tajného klíče.';
$lang['StripePayments.ach_form.field_account_number'] = 'Číslo účtu';
$lang['StripePayments.ach_form.field_first_deposit'] = 'První vklad';
$lang['StripePayments.ach_form.field_holder_type'] = 'Typ držáku';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Společnost';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Individuální';
$lang['StripePayments.ach_form.field_routing_number'] = 'Směrovací číslo';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Druhý vklad';
$lang['StripePayments.ach_form.field_type'] = 'Typ účtu';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Odesláním tohoto formuláře opravňujete společnost %1$s k tomu, aby si z výše uvedeného bankovního účtu strhla jakoukoli dlužnou částku za poplatky vyplývající z vašeho využívání služeb společnosti %1$s a/nebo nákupu produktů od společnosti %1$s v souladu s webovými stránkami a podmínkami společnosti %1$s, a to až do odvolání tohoto oprávnění. Toto pověření můžete kdykoli změnit nebo zrušit, a to oznámením zaslaným společnosti %1$s s 30 (třiceti) denní výpovědní lhůtou.';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Pokud pravidelně využíváte služeb %1$s nebo nakupujete další produkty podle podmínek %1$s, dáváte společnosti %1$s souhlas k pravidelnému strhávání peněz z vašeho bankovního účtu. Platby, které nespadají do výše povolených pravidelných inkas, budou strženy až po získání vašeho souhlasu.';
$lang['StripePayments.ach_form.verification_notice'] = 'Aktuálně zadaný bankovní účet nebyl ověřen. Pokud níže zadáte nové údaje o bankovním účtu, dojde k jeho nahrazení.';
$lang['StripePayments.charge_description'] = 'Poplatek za %1$s';
$lang['StripePayments.charge_description_default'] = 'Poplatek za určitou částku';
$lang['StripePayments.description'] = 'Používá prvky Stripe a rozhraní API pro požadavky na platbu k automatickému zpracování 3D Secure a SCA pro odesílání kreditních karet přímo přes Stripe.';
$lang['StripePayments.heading_migrate_accounts'] = 'Migrace starých platebních účtů';
$lang['StripePayments.india_mandate_max_amount'] = 'Maximální výše opakující se platby (Indie)';
$lang['StripePayments.india_mandate_max_amount_note'] = 'Toto pole je nutné vyplnit, chcete-li povolit automatické opakované platby u karet vydaných v Indii. Jedná se o maximální částku, která může být z takové karty stržena při jakékoli budoucí platbě mimo relaci v měně, ve které se platba zpracovává. Pokud toto pole ponecháte prázdné, budou indické karty uloženy bez registrace pro automatické opakované platby.';
$lang['StripePayments.migrate_accounts'] = 'Migrace účtů';
$lang['StripePayments.name'] = 'Platby Stripe';
$lang['StripePayments.publishable_key'] = 'Publikovatelný klíč API';
$lang['StripePayments.request_three_d_secure'] = 'Průběh ověřování 3D Secure';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Umožnit společnosti Stripe určit, kdy má předložit výzvu 3D Secure.';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Předložit výzvu 3D Secure vždy, když klient uloží platební metodu nebo zpracovává platební metodu (uloženou nebo neuloženou).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Předložit výzvu 3D Secure, kdykoli klient uloží platební metodu nebo zpracuje neuložený způsob platby.';
$lang['StripePayments.request_three_d_secure_note'] = 'Pokud jste uživatelem služby Stripe v Indii, musíte před uložením nové karty ve službě Stripe vždy provést ověření 3D Secure (3DS).';
$lang['StripePayments.secret_key'] = 'Tajný klíč API';
$lang['StripePayments.text_accounts_remaining'] = 'Zbývající účty: %1$s';
$lang['StripePayments.text_migrate_accounts'] = 'Platební účty uložené offsite pomocí staré brány Stripe můžete automaticky migrovat do této brány Stripe Payments. Účty, které nejsou uloženy mimo pracoviště, je třeba migrovat ručním vytvořením nových platebních účtů. Aby se předešlo časovým výpadkům, budou migrace prováděny v dávkách po %1$s. Spusťte tuto akci tolikrát, kolikrát bude potřeba k migraci všech platebních účtů.';
$lang['StripePayments.tooltip_india_mandate_max_amount'] = 'V souladu s předpisy RBI bude u opakovaných (mimoobchodních) transakcí prováděných indickými kartami, jejichž částka přesahuje tuto hranici, vyžadováno, aby zákazník platbu samostatně ověřil.';
$lang['StripePayments.tooltip_publishable_key'] = 'Váš publikovatelný klíč API je specifický pro živý nebo testovací režim. Ujistěte se, že používáte správný klíč.';
$lang['StripePayments.tooltip_secret_key'] = 'Tajný klíč API je specifický pro živý nebo testovací režim. Ujistěte se, že používáte správný klíč.';
$lang['StripePayments.warning_migrate_accounts'] = 'Neodinstalovávejte starou bránu Stripe, dokud nedokončíte použití tohoto migračního nástroje. Znepřístupníte tak tento nástroj.';
$lang['StripePayments.webhook'] = 'Webový háček Stripe';
$lang['StripePayments.webhook_note'] = 'Doporučujeme nakonfigurovat následující url jako Webhook pro události "payment_intent" a "charge" ve vašem účtu Stripe.';

