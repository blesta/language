<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Плата за %1$s';
$lang['StripePayments.charge_description_default'] = 'Взимание платы за указанную сумму';
$lang['StripePayments.migrate_accounts'] = 'Перенос учетных записей';
$lang['StripePayments.warning_migrate_accounts'] = 'Не удаляйте старый шлюз Stripe до завершения работы с этим инструментом миграции. В противном случае инструмент станет недоступным.';
$lang['StripePayments.text_migrate_accounts'] = 'Вы можете автоматически перенести счета платежей, хранящиеся за пределами сайта на старом шлюзе Stripe, на этот шлюз Stripe Payments. Счета, которые не хранятся за пределами сайта, должны быть перенесены путем ручного создания новых платежных счетов. Для предотвращения таймаутов миграция будет выполняться партиями по %1$s. Запустите эту процедуру столько раз, сколько потребуется для переноса всех платежных аккаунтов.';
$lang['StripePayments.text_accounts_remaining'] = 'Осталось счетов: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Перенос старых платежных счетов';
$lang['StripePayments.webhook_note'] = 'Рекомендуется настроить следующий url в качестве Webhook для событий "payment_intent" в вашем аккаунте Stripe.';
$lang['StripePayments.webhook'] = 'Веб-крючок Stripe';
$lang['StripePayments.tooltip_secret_key'] = 'Секретный ключ API предназначен для живого или тестового режима. Убедитесь, что вы используете правильный ключ.';
$lang['StripePayments.tooltip_publishable_key'] = 'Ваш ключ публикации API предназначен для работы в реальном или тестовом режиме. Убедитесь, что вы используете правильный ключ.';
$lang['StripePayments.secret_key'] = 'Секретный ключ API';
$lang['StripePayments.publishable_key'] = 'Публикуемый ключ API';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Если вы пользуетесь услугами %1$s или периодически приобретаете дополнительные продукты в соответствии с условиями %1$s, вы разрешаете %1$s периодически списывать средства с вашего банковского счета. Платежи, выходящие за рамки разрешенных выше регулярных списаний, будут списываться только после получения вашего разрешения.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Отправляя эту форму, вы разрешаете %1$s списывать с указанного выше банковского счета любую сумму, причитающуюся за оплату, возникшую в результате использования вами услуг %1$s и/или покупки товаров у %1$s, в соответствии с веб-сайтом %1$s и условиями, до тех пор, пока это разрешение не будет отозвано. Вы можете изменить или отменить данное разрешение в любое время, уведомив %1$s за 30 (тридцать) дней.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Второй депозит';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Первый депозит';
$lang['StripePayments.ach_form.verification_notice'] = 'Мы отправили два небольших депозита на этот банковский счет. Чтобы проверить этот счет, пожалуйста, подтвердите суммы этих вкладов.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Маршрутный номер';
$lang['StripePayments.ach_form.field_account_number'] = 'Номер счета';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Компания';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Индивидуалка';
$lang['StripePayments.ach_form.field_holder_type'] = 'Тип держателя';
$lang['StripePayments.ach_form.field_type'] = 'Тип счета';
$lang['StripePayments.description'] = 'Использует Stripe Elements и API запроса платежа для автоматической обработки 3D Secure и SCA для отправки кредитных карт непосредственно через Stripe.';
$lang['StripePayments.!error.invalid_request_error'] = 'Платежный шлюз вернул ошибку при обработке запроса.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Прежде чем использовать банковский счет для совершения платежа, необходимо его верифицировать.';
$lang['StripePayments.!error.secret_key.valid'] = 'Невозможно подключиться к API Stripe, используя указанный секретный ключ.';
$lang['StripePayments.!error.secret_key.empty'] = 'Введите секретный ключ.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Пожалуйста, введите ключ для публикации.';
$lang['StripePayments.!error.auth'] = 'Шлюз не смог пройти аутентификацию.';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.request_three_d_secure_note'] = 'Если вы являетесь пользователем Stripe в Индии, перед сохранением новой карты в Stripe вы всегда должны выполнять аутентификацию 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Представляйте вызов 3D Secure каждый раз, когда клиент сохраняет метод оплаты или обрабатывает метод оплаты (сохраненный или несохраненный).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Представляйте вызов 3D Secure каждый раз, когда клиент сохраняет метод оплаты или обрабатывает несохраненный метод оплаты';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Позвольте Stripe определять, когда нужно представить вызов 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Поток аутентификации 3D Secure';

