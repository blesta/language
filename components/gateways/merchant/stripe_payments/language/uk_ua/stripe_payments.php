<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Стягнення за %1$s';
$lang['StripePayments.charge_description_default'] = 'Списання на вказану суму';
$lang['StripePayments.migrate_accounts'] = 'Перенесення облікових записів';
$lang['StripePayments.warning_migrate_accounts'] = 'Не видаляйте старий шлюз Stripe, поки не завершите використання цього інструменту міграції. Це зробить інструмент недоступним.';
$lang['StripePayments.text_migrate_accounts'] = 'Ви можете автоматично перенести платіжні акаунти, які зберігаються за межами сайту на старому шлюзі Stripe, на цей шлюз Stripe Payments. Акаунти, які не зберігаються за межами сайту, повинні бути перенесені шляхом ручного створення нових платіжних акаунтів. Щоб запобігти таймаутам, міграція буде виконуватися партіями по %1$. Запустіть цю процедуру стільки разів, скільки потрібно для міграції всіх платіжних акаунтів.';
$lang['StripePayments.text_accounts_remaining'] = 'Залишок на рахунку: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Перенести старі платіжні рахунки';
$lang['StripePayments.webhook_note'] = 'Ми рекомендуємо налаштувати наступний URL-адресу як веб-хук для подій "payment_intent" у вашому акаунті Stripe.';
$lang['StripePayments.webhook'] = 'Смугастий павутинний гачок';
$lang['StripePayments.tooltip_secret_key'] = 'Ваш секретний ключ API призначений для роботи в реальному або тестовому режимі. Переконайтеся, що ви використовуєте правильний ключ.';
$lang['StripePayments.tooltip_publishable_key'] = 'Ваш ключ для публікації API призначений для роботи в реальному або тестовому режимі. Переконайтеся, що ви використовуєте правильний ключ.';
$lang['StripePayments.secret_key'] = 'Секретний ключ API';
$lang['StripePayments.publishable_key'] = 'Публікабельний ключ API';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'Якщо ви користуєтеся послугами %1$ або періодично купуєте додаткові продукти відповідно до умов %1$, ви дозволяєте %1$ періодично дебетувати ваш банківський рахунок. Платежі, які виходять за рамки регулярних списань, дозволених вище, будуть списані тільки після отримання вашого дозволу.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Відправляючи цю форму, ви дозволяєте %1$s дебетувати банківський рахунок, вказаний вище, на будь-яку суму, що виникла в результаті використання вами послуг %1$s та/або придбання продуктів у %1$s, відповідно до веб-сайту та умов %1$s, доки цей дозвіл не буде відкликано. Ви можете змінити або скасувати цей дозвіл у будь-який час, повідомивши про це %1$s за 30 (тридцять) днів.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Другий депозит';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Перший депозит';
$lang['StripePayments.ach_form.verification_notice'] = 'Ми надіслали два невеликі депозити на цей банківський рахунок. Для верифікації цього рахунку, будь ласка, підтвердіть суми цих депозитів.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Номер маршруту';
$lang['StripePayments.ach_form.field_account_number'] = 'Номер рахунку';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Компанія';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Фізична особа';
$lang['StripePayments.ach_form.field_holder_type'] = 'Тип тримача';
$lang['StripePayments.ach_form.field_type'] = 'Тип рахунку';
$lang['StripePayments.description'] = 'Використовує Stripe Elements та API запиту на оплату для автоматичної обробки 3D Secure та SCA для надсилання кредитних карток безпосередньо через Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'Платіжний шлюз повернув помилку при обробці запиту.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Вам необхідно підтвердити свій банківський рахунок, перш ніж ви зможете використовувати його для здійснення платежу.';
$lang['StripePayments.!error.secret_key.valid'] = 'Не вдається підключитися до Stripe API за допомогою вказаного секретного ключа.';
$lang['StripePayments.!error.secret_key.empty'] = 'Будь ласка, введіть секретний ключ.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Будь ласка, введіть ключ для публікації.';
$lang['StripePayments.!error.auth'] = 'Шлюз не зміг пройти автентифікацію.';
$lang['StripePayments.name'] = 'Stripe Payments';
$lang['StripePayments.request_three_d_secure_challenge'] = 'Виникає проблема з 3D Secure щоразу, коли клієнт зберігає спосіб оплати або обробляє спосіб оплати (збережений або незбережений)';
$lang['StripePayments.request_three_d_secure_note'] = 'Якщо ви користувач Stripe, який проживає в Індії, перед тим, як зберегти нову картку за допомогою Stripe, ви повинні обов\'язково виконати автентифікацію 3D Secure (3DS).';
$lang['StripePayments.request_three_d_secure_frictionless'] = 'Виникає проблема з 3D Secure щоразу, коли клієнт зберігає спосіб оплати або обробляє незбережений спосіб оплати';
$lang['StripePayments.request_three_d_secure_automatic'] = 'Дозвольте Stripe визначати, коли надсилати виклик 3D Secure';
$lang['StripePayments.request_three_d_secure'] = 'Потік безпечної автентифікації 3D';

