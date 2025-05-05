<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.bg_bg
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.request_three_d_secure_note'] = 'Ако сте потребител на Stripe, базиран в Индия, преди да запазите нова карта в Stripe, винаги трябва да извършвате 3D Secure (3DS) удостоверяване.';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Представяне на 3D Secure предизвикателство всеки път, когато клиентът запазва метод на плащане или обработва метод на плащане (съхранен или не).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Представяне на 3D Secure предизвикателство всеки път, когато клиентът запазва метод за плащане или обработва нерегистриран метод за плащане.';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Позволете на Stripe да определи кога да представи 3D Secure предизвикателство';
$lang['StripePayments.request_three_d_secure'] = 'Поток за удостоверяване с 3D Secure';
$lang['StripePayments.charge_description'] = 'Такса за %1$s';
$lang['StripePayments.charge_description_default'] = 'Заплащане на определена сума';
$lang['StripePayments.migrate_accounts'] = 'Мигриране на акаунти';
$lang['StripePayments.warning_migrate_accounts'] = 'Не деинсталирайте стария шлюз на Stripe, докато не завършите използването на този инструмент за миграция. По този начин инструментът ще стане недостъпен.';
$lang['StripePayments.text_migrate_accounts'] = 'Можете автоматично да мигрирате платежните сметки, съхранявани извън сайта от стария шлюз на Stripe, към този шлюз на Stripe Payments. Сметките, които не се съхраняват извън сайта, трябва да бъдат мигрирани чрез ръчно създаване на нови платежни сметки. За да се предотвратят прекъсвания, миграциите ще се извършват на партиди от %1$s. Изпълнете това толкова пъти, колкото е необходимо, за да мигрират всички платежни сметки.';
$lang['StripePayments.text_accounts_remaining'] = 'Оставащи сметки: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Мигриране на стари сметки за плащане';
$lang['StripePayments.webhook_note'] = 'Препоръчително е да конфигурирате следния URL адрес като Webhook за събитията "payment_intent" в профила си в Stripe.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = 'Секретният ключ на API е специфичен за режим на работа в реално време или за режим на тестване. Уверете се, че използвате правилния ключ.';
$lang['StripePayments.tooltip_publishable_key'] = 'Ключът за публикуване на API е специфичен за режим на работа в реално време или за режим на тестване. Уверете се, че използвате правилния ключ.';
$lang['StripePayments.secret_key'] = 'Секретен ключ на API';
$lang['StripePayments.publishable_key'] = 'Ключ за публикуване на API';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Ако използвате услугите на %1$s или периодично закупувате допълнителни продукти в съответствие с условията на %1$s, Вие упълномощавате %1$s периодично да дебитира Вашата банкова сметка. Плащания, които не попадат в обхвата на разрешените по-горе редовни дебити, ще бъдат дебитирани само след получаване на вашето разрешение.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'С изпращането на този формуляр упълномощавате %1$s да дебитира посочената по-горе банкова сметка за всяка дължима сума за такси, произтичащи от използването на услугите на %1$s и/или закупуването на продукти от %1$s, съгласно уебсайта и условията на %1$s, докато това упълномощаване не бъде оттеглено. Можете да промените или отмените това разрешение по всяко време, като изпратите уведомление до %1$s с 30 (тридесет) дневно предизвестие.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Втори депозит';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Първи депозит';
$lang['StripePayments.ach_form.verification_notice'] = 'Изпратихме два малки депозита по тази банкова сметка. За да проверите тази сметка, моля, потвърдете сумите на тези депозити.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Номер на рутинга';
$lang['StripePayments.ach_form.field_account_number'] = 'Номер на сметката';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Компания';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Индивидуално';
$lang['StripePayments.ach_form.field_holder_type'] = 'Тип на държача';
$lang['StripePayments.ach_form.field_type'] = 'Тип на сметката';
$lang['StripePayments.description'] = 'Използва елементите на Stripe и API за заявки за плащане, за да обработва автоматично 3D Secure и SCA за изпращане на кредитни карти директно през Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'Шлюзът за плащане е върнал грешка при обработката на заявката.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Преди да използвате банковата си сметка за извършване на плащане, трябва да я потвърдите.';
$lang['StripePayments.!error.secret_key.valid'] = 'Невъзможно е да се свържете с API на Stripe, като използвате дадения секретен ключ.';
$lang['StripePayments.!error.secret_key.empty'] = 'Моля, въведете секретен ключ.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Моля, въведете ключ за публикуване.';
$lang['StripePayments.!error.auth'] = 'Шлюзът не може да се удостовери.';
$lang['StripePayments.name'] = 'Stripe Payments';

