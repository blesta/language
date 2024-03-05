<?php
/**
 * Stripe Payments
 *
 * @package blesta
 * @subpackage blesta.language.pl_pl
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['StripePayments.charge_description'] = 'Opłata za %1$s';
$lang['StripePayments.charge_description_default'] = 'Opłata za określoną kwotę';
$lang['StripePayments.migrate_accounts'] = 'Migracja kont';
$lang['StripePayments.warning_migrate_accounts'] = 'Nie należy odinstalowywać starej bramki Stripe przed zakończeniem korzystania z tego narzędzia do migracji. Spowoduje to, że narzędzie będzie niedostępne.';
$lang['StripePayments.text_migrate_accounts'] = 'Możesz automatycznie migrować konta płatnicze przechowywane poza siedzibą firmy przez starą bramkę Stripe do tej bramki Stripe Payments. Konta, które nie są przechowywane poza siedzibą firmy, muszą zostać zmigrowane poprzez ręczne utworzenie nowych kont płatniczych. Aby zapobiec przekroczeniu limitu czasu, migracje będą wykonywane w partiach %1$s. Uruchom to tyle razy, ile potrzeba do migracji wszystkich kont płatniczych.';
$lang['StripePayments.text_accounts_remaining'] = 'Pozostałe konta: %1$s';
$lang['StripePayments.heading_migrate_accounts'] = 'Migracja starych kont płatniczych';
$lang['StripePayments.webhook_note'] = 'Zaleca się skonfigurowanie następującego adresu URL jako elementu Webhook dla zdarzeń "payment_intent" na koncie Stripe.';
$lang['StripePayments.webhook'] = 'Stripe Webhook';
$lang['StripePayments.tooltip_secret_key'] = 'Tajny klucz API jest specyficzny dla trybu rzeczywistego lub testowego. Upewnij się, że używasz prawidłowego klucza.';
$lang['StripePayments.tooltip_publishable_key'] = 'Klucz API do publikacji jest specyficzny dla trybu rzeczywistego lub testowego. Upewnij się, że używasz prawidłowego klucza.';
$lang['StripePayments.secret_key'] = 'Tajny klucz API';
$lang['StripePayments.publishable_key'] = 'Klucz API do publikacji';
$lang['StripePayments.ach_form.mandate_future_usage'] = 'W przypadku okresowego korzystania z usług %1$s lub zakupu dodatkowych produktów zgodnie z warunkami %1$s, użytkownik upoważnia %1$s do okresowego obciążania jego konta bankowego. Płatności wykraczające poza zakres regularnych obciążeń autoryzowanych powyżej będą pobierane wyłącznie po uzyskaniu autoryzacji użytkownika.';
$lang['StripePayments.ach_form.mandate_authorization'] = 'Przesyłając niniejszy formularz, użytkownik upoważnia %1$s do obciążenia wskazanego powyżej rachunku bankowego dowolną kwotą należną z tytułu opłat wynikających z korzystania przez użytkownika z usług %1$s i/lub zakupu produktów od %1$s, zgodnie ze stroną internetową i warunkami %1$s, do momentu odwołania niniejszego upoważnienia. Użytkownik może zmienić lub anulować niniejsze upoważnienie w dowolnym momencie, powiadamiając o tym %1$s z 30 (trzydziesto) dniowym wyprzedzeniem.';
$lang['StripePayments.ach_form.field_second_deposit'] = 'Drugi depozyt';
$lang['StripePayments.ach_form.field_first_deposit'] = 'Pierwsza wpłata';
$lang['StripePayments.ach_form.verification_notice'] = 'Wysłaliśmy dwie małe wpłaty na to konto bankowe. Aby zweryfikować to konto, prosimy o potwierdzenie kwot tych wpłat.';
$lang['StripePayments.ach_form.field_routing_number'] = 'Numer rozliczeniowy';
$lang['StripePayments.ach_form.field_account_number'] = 'Numer konta';
$lang['StripePayments.ach_form.field_holder_type_company'] = 'Firma';
$lang['StripePayments.ach_form.field_holder_type_individual'] = 'Indywidualny';
$lang['StripePayments.ach_form.field_holder_type'] = 'Typ uchwytu';
$lang['StripePayments.ach_form.field_type'] = 'Typ konta';
$lang['StripePayments.description'] = 'Wykorzystuje Stripe Elements i Payment Request API do automatycznej obsługi 3D Secure i SCA w celu wysyłania kart kredytowych bezpośrednio przez Stripe.';
$lang['StripePayments.name'] = 'Płatności Stripe';
$lang['StripePayments.!error.invalid_request_error'] = 'Bramka płatności zwróciła błąd podczas przetwarzania żądania.';
$lang['StripePayments.!error.bank_account_unverified'] = 'Musisz zweryfikować swoje konto bankowe, zanim będziesz mógł użyć go do dokonania płatności.';
$lang['StripePayments.!error.secret_key.valid'] = 'Nie można połączyć się z interfejsem API Stripe przy użyciu podanego tajnego klucza.';
$lang['StripePayments.!error.secret_key.empty'] = 'Wprowadź tajny klucz.';
$lang['StripePayments.!error.publishable_key.empty'] = 'Wprowadź klucz do publikacji.';
$lang['StripePayments.!error.auth'] = 'Brama nie mogła się uwierzytelnić.';

