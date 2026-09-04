<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Päivämäärä';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Tiedosto';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Koko';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Tyyppi';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Tietokanta';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Tiedostot';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Päivitysvaihtoehdot';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Tarkista päivitykset';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Poista lukitus';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Kopioi';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Palaa hallintapaneeliin';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Poista';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Lataa';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Yritä uudelleen';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Päivitä nyt';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Tarkastele muutospäiväkirjaa';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Poista vanhentuneet ydintiedostot päivityksen jälkeen';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Poistaa ydinhakemistoista tiedostot, joita ei ole uuden julkaisun manifestissa. Jätä valinta valitsematta, ellet ole varma, ettei ydinhakemistoissa ole mukautettuja tiedostoja.';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Kopioitu';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Haluatko varmasti poistaa tämän varmuuskopion? Tätä toimintoa ei voi peruuttaa.';
$lang['AdminSystemUpgrade.index.current_version'] = 'Käytät Blestaa %1$s';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d epäonnistui';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d varoitus';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Jotkin tarkistukset epäonnistuivat. Korjaa alla mainitut ongelmat ennen päivitystä.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Kaikki tarkistukset sujuivat onnistuneesti. Järjestelmäsi on valmis automaattiseen päivitykseen.';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Käytettävissä olevat varmuuskopiot:';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Nykyinen: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Ennen päivitystä: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Päivityksen jälkeen odotettavissa: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Tietokannan versio:';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Tietokannan versio ei päivittynyt odotettuun versioon. Päivitys on saattanut keskeytyä kesken versionvaihdon, jolloin osa skeemamuutoksista on jäänyt voimaan.';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Päivitys ei onnistunut. Järjestelmäsi saattaa olla epäjohdonmukaisessa tilassa, ja osa epäonnistuneen version tietokantamuutoksista on mahdollisesti jo otettu käyttöön. Päivityksen uudelleenkäynnistäminen johtaa todennäköisesti uudenlaiseen virheeseen. Suosittelemme palauttamaan järjestelmän tietokantavarmuuskopiosta ennen uudelleenkäynnistystä. Varmuuskopiot otettiin ennen päivityksen aloittamista, ja ne on lueteltu alla. Palauta järjestelmä joko palauttamalla nämä varmuuskopiot manuaalisesti tai avaamalla tukipyyntö saadaksesi apua.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Mitä tehdä seuraavaksi';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Päivitä asetukset';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Saatavilla olevat päivitykset';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Varmuuskopioiden päivittäminen';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Nykyinen versio';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Ympäristön tila';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Päivityksen eteneminen';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Palautusohjeet';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Viimeksi tarkistettu: %1$s';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Suorita seuraava komento SSH:n kautta (Blesta-asennuksen omistajana olevana käyttäjänä) päivityksen loppuun saattamiseksi. Jätä tämä sivu auki — etenemistiedot päivittyvät täällä komennon suorituksen aikana.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Taustapäivitys ei käynnistynyt';
$lang['AdminSystemUpgrade.index.lock_active'] = 'Päivitys on parhaillaan käynnissä; se aloitettiin osoitteessa %1$s.';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Aikaisempi päivitysprosessi näyttää keskeytyneen odottamattomasti.';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Ei ole koskaan tarkistettu';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Päivitysvarmuuskopioita ei löytynyt.';
$lang['AdminSystemUpgrade.index.no_results'] = 'Päivitysvaihtoehtoja ei ole tällä hetkellä saatavilla.';
$lang['AdminSystemUpgrade.index.no_support'] = 'Tuki- ja päivitystilauksesi ei ole voimassa. Saatavilla on vain korjauspäivityksiä.';
$lang['AdminSystemUpgrade.index.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Päivitysvaihtoehdot';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Tietokannan varmuuskopiointi: %1$s';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Tiedostojen varmuuskopiointi: %1$s';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Voit palauttaa tiedot varmuuskopiosta suorittamalla seuraavat komennot palvelimellasi:';
$lang['AdminSystemUpgrade.index.release_date'] = 'Julkaistu: %1$s';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Vaatii voimassa olevan tukija päivitysten tilauksen.';
$lang['AdminSystemUpgrade.index.select_version'] = 'Valitse versio, johon haluat päivittää:';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Ohita tiedostojen eheystarkistus';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Tietokannan varmuuskopiointi';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Tiedostojen varmuuskopiointi';
$lang['AdminSystemUpgrade.index.step_download'] = 'Lataa tiedote';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Pura tiedostot';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Viimeistele';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Ota huoltotila käyttöön';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Suorita tietokannan siirtotoimenpiteet';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Lentoa edeltävät tarkastukset';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Korvaa tiedostot';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Tarkista eheys';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Asennuksesi on ajan tasalla.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Päivitys suoritettiin onnistuneesti!';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Päivitys epäonnistui.';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Täydellinen päivitys: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Päivitystiedote: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Tämä ottaa ylläpitotilan käyttöön, luo varmuuskopiot, lataa ja asentaa uuden version sekä suorittaa tietokannan siirrot. Tätä prosessia ei voi keskeyttää sen käynnistymisen jälkeen.';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Peruuta';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Jatka päivitykseen';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Puuttuvat tiedostot';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Muutetut tiedostot';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s Ydintiedostoja on muokattu alkuperäiseen julkaisuun verrattuna. Nämä muutokset korvataan päivityksen yhteydessä. Haluatko jatkaa?';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Muokatut ydintiedostot';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Nykyisen asennuksesi tiedostoluettelossa ei ole tarkistussummia. Tiedostojen eheyden tarkistusta ei suoriteta. Haluatko jatkaa päivitystä?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Nykyiselle asennuksellesi ei löytynyt tiedostoluetteloa. Tiedostojen eheyden tarkistus ohitetaan. Haluatko jatkaa päivitystä?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Päivitysprosessi on alkanut. Voit sulkea tämän sivun – päivitys jatkuu taustalla. Palaa tälle sivulle tarkistaaksesi päivityksen etenemisen.';

