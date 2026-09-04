<?php
/**
 * Cron Tasks
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['CronTasks.!error.dir.length'] = 'Kansion nimi ei saa olla pidempi kuin 64 merkkiä.';
$lang['CronTasks.!error.enabled.format'] = 'Arvon on oltava luku.';
$lang['CronTasks.!error.enabled.length'] = 'Sallittu pituus saa olla enintään 1 merkki.';
$lang['CronTasks.!error.id.exists'] = 'Cron-tehtävän tunniste on virheellinen.';
$lang['CronTasks.!error.interval.format'] = 'Väli on määritettävä minuutteina ilmaistuna lukuna.';
$lang['CronTasks.!error.is_lang.format'] = 'is_lang:n on oltava luku.';
$lang['CronTasks.!error.is_lang.length'] = 'is_lang-muuttujan pituus ei saa ylittää yhtä merkkiä.';
$lang['CronTasks.!error.key.length'] = 'Cron-tehtävän avaimen pituus ei saa ylittää 64 merkkiä.';
$lang['CronTasks.!error.key.unique'] = 'Annettu cron-tehtävän avain on jo käytössä.';
$lang['CronTasks.!error.name.empty'] = 'Kirjoita nimi.';
$lang['CronTasks.!error.run_id.exists'] = 'Cron-tehtävän suoritustunnus on virheellinen.';
$lang['CronTasks.!error.task_id.unique'] = 'Tämä yritys on jo aikatauluttanut kyseisen cron-tehtävän suorittamisen.';
$lang['CronTasks.!error.task_type.format'] = 'Virheellinen tehtävätyyppi. Sen on oltava ”moduuli”, ”laajennus” tai ”järjestelmä”.';
$lang['CronTasks.!error.time.format'] = 'Ajan muoto on virheellinen.';
$lang['CronTasks.!error.type.format'] = 'Cron-tehtävän tyyppi on virheellinen. Sen on oltava joko ”time” tai ”interval”.';
$lang['CronTasks.crontask.description.analytics_snapshots'] = 'Tallentaa päivittäiset MRR-, liike- ja liikevaihtotiedot, joita käytetään Reports-palvelun liikevaihtotietojen hallintapaneelissa.';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Lisää maksuhäiriömaksut avoimiin laskuihin määritetyn päivämäärän kuluttua eräpäivästä.';
$lang['CronTasks.crontask.description.apply_payments'] = 'Vapaat hyvitykset kohdistetaan avoimiin laskuihin automaattisesti valitun aikavälin mukaisesti.';
$lang['CronTasks.crontask.description.autodebit'] = 'Automaattiseen veloitukseen valitut maksutilit käytetään avoimien laskujen maksamiseen päivittäin määritettynä ajankohtana.';
$lang['CronTasks.crontask.description.backups_amazons3'] = 'Amazon S3 -varmuuskopioinnit ajoitetaan kohdassa Järjestelmäasetukset &gt; Varmuuskopiointi &gt; Amazon S3.';
$lang['CronTasks.crontask.description.backups_sftp'] = 'SFTP-varmuuskopioinnit ajoitetaan kohdassa Järjestelmäasetukset &gt; Varmuuskopiointi &gt; Suojattu FTP.';
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = 'Palvelut, joille on määritetty tulevia peruutuspäiviä, poistetaan valitun aikavälin mukaisesti.';
$lang['CronTasks.crontask.description.card_expiration_reminders'] = 'Kuukauden 15. päivänä lähetetään muistutus niille luottokorteille, joiden voimassaolo päättyy kyseisenä kuukautena määritettynä ajankohtana.';
$lang['CronTasks.crontask.description.cleanup_logs'] = 'Vanhat yhdyskäytävän, moduulin ja muiden lokitiedostot poistetaan päivittäin niiden säilytysasetusten mukaisesti määritettynä ajankohtana.';
$lang['CronTasks.crontask.description.create_invoice'] = 'Toistuvat laskut ja palvelujen uusimiset laskutetaan tämän tehtävän kautta, joka suoritetaan kerran päivässä määritettynä ajankohtana.';
$lang['CronTasks.crontask.description.delete_expired_password_reset_tokens'] = 'Poistaa järjestelmästä kaikki salasanan nollaustunnukset, joiden voimassaoloaika on päättynyt.';
$lang['CronTasks.crontask.description.deliver_invoices'] = 'Toimitettavaksi aikataulutetut laskut lähetetään valitun aikavälin mukaisesti.';
$lang['CronTasks.crontask.description.deliver_reports'] = 'Myyntisaamiset, laskujen luonti, verovelat ja muut raportit toimitetaan päivittäin määritettynä ajankohtana.';
$lang['CronTasks.crontask.description.exchange_rates'] = 'Valuuttakurssit päivitetään määritetyn aikavälin välein. Tätä toimintoa ei suositella suoritettavaksi useammin kuin kaksi kertaa päivässä, sillä se voi johtaa tilin estämiseen.';
$lang['CronTasks.crontask.description.low_balance_notifications'] = 'Lähettää ilmoituksen kaikille käyttäjille, joiden saldotasot ovat laskeneet alle määritetyn raja-arvon.';
$lang['CronTasks.crontask.description.payment_reminders'] = 'Maksumuistutukset ja maksuviivästysilmoitukset lähetetään päivittäin määritettyyn aikaan.';
$lang['CronTasks.crontask.description.process_renewing_services'] = 'Moduuleihin liitettyjen palveluiden uusiminen tapahtuu valitun aikavälin mukaisesti.';
$lang['CronTasks.crontask.description.process_service_changes'] = 'Maksulliset jonossa olevat palvelumuutokset (esim. päivitykset) käsitellään valitun aikavälin mukaisesti.';
$lang['CronTasks.crontask.description.provision_pending_services'] = 'Maksetut, odottavat palvelut otetaan käyttöön valitun aikavälin mukaisesti.';
$lang['CronTasks.crontask.description.suspend_services'] = 'Maksamattomat palvelut keskeytetään päivittäin määritettynä ajankohtana.';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Merkitse voimassaoloajan ylittäneet tarjoukset vanhentuneiksi';
$lang['CronTasks.crontask.description.unsuspend_services'] = 'Maksetut, keskeytetyt palvelut palautetaan käyttöön valitun aikavälin kuluttua.';
$lang['CronTasks.crontask.name.analytics_snapshots'] = 'Tulotietojen tilannekatsaukset';
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Laskun viivästyskulujen periminen';
$lang['CronTasks.crontask.name.apply_payments'] = 'Maksujen kohdistaminen avoimiin laskuihin';
$lang['CronTasks.crontask.name.autodebit'] = 'Automaattinen veloitus';
$lang['CronTasks.crontask.name.backups_amazons3'] = 'Amazon S3 -varmuuskopiot';
$lang['CronTasks.crontask.name.backups_sftp'] = 'SFTP-varmuuskopiot';
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = 'Peruuta aikataulun mukaiset palvelut';
$lang['CronTasks.crontask.name.card_expiration_reminders'] = 'Kortin voimassaolon päättymistä koskevat muistutukset kuukauden 15. päivänä';
$lang['CronTasks.crontask.name.cleanup_logs'] = 'Lokien puhdistaminen';
$lang['CronTasks.crontask.name.create_invoice'] = 'Luo lasku';
$lang['CronTasks.crontask.name.delete_expired_password_reset_tokens'] = 'Poista vanhentuneet salasanan nollauskoodit';
$lang['CronTasks.crontask.name.deliver_invoices'] = 'Toimita laskut';
$lang['CronTasks.crontask.name.deliver_reports'] = 'Raporttien toimittaminen';
$lang['CronTasks.crontask.name.exchange_rates'] = 'Valuuttakurssien päivitykset';
$lang['CronTasks.crontask.name.license_validation'] = 'Lisenssin voimassaolon tarkistus';
$lang['CronTasks.crontask.name.low_balance_notifications'] = 'Ilmoitukset alhaisesta saldosta';
$lang['CronTasks.crontask.name.payment_reminders'] = 'Maksumuistutukset';
$lang['CronTasks.crontask.name.process_renewing_services'] = 'Prosessipalvelujen uusimiset';
$lang['CronTasks.crontask.name.process_service_changes'] = 'Muutokset prosessipalveluissa';
$lang['CronTasks.crontask.name.provision_pending_services'] = 'Maksetut palvelut, jotka ovat vielä kesken';
$lang['CronTasks.crontask.name.suspend_services'] = 'Palvelujen keskeyttäminen';
$lang['CronTasks.crontask.name.transition_quotations'] = 'Siirtymävaiheen lainaukset';
$lang['CronTasks.crontask.name.unsuspend_services'] = 'Palveluiden keskeytyksen poistaminen';
$lang['CronTasks.task_type.module'] = 'Moduuli';
$lang['CronTasks.task_type.plugin'] = 'Laajennus';
$lang['CronTasks.task_type.system'] = 'Järjestelmä';

