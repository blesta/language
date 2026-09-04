<?php
/**
 * System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SystemUpgrade.!error.backup_db_failed'] = 'Tietokannan varmuuskopiointi epäonnistui. Päivitystä ei voida jatkaa ilman luotettavaa varmuuskopiota.';
$lang['SystemUpgrade.!error.backup_files_failed'] = 'Tiedostojen varmuuskopiointi epäonnistui. Päivitystä ei voida jatkaa ilman luotettavaa varmuuskopiota.';
$lang['SystemUpgrade.!error.download_failed'] = 'Julkaisutiedoston lataaminen epäonnistui.';
$lang['SystemUpgrade.!error.environment_fail'] = 'Yksi tai useampi ympäristötarkistus epäonnistui. Korjaa ongelmat ennen päivitystä.';
$lang['SystemUpgrade.!error.extraction_failed'] = 'Julkaisutiedostojen purkamista ei onnistuttu suorittamaan.';
$lang['SystemUpgrade.!error.hash_mismatch'] = 'Ladatun tiedoston eheystarkistus epäonnistui. Tiedosto saattaa olla vioittunut.';
$lang['SystemUpgrade.!error.launch_not_detected'] = 'Taustalla suoritettava päivitysprosessi ei käynnistynyt. Tämä voi tapahtua eristetyissä isännöintiympäristöissä (CloudLinux/CageFS, tietyt PHP-FPM-määritykset), joissa verkkopalvelimella ei ole lupaa irrottaa pitkäkestoisia aliprosesseja. Päivitys voidaan saattaa loppuun suorittamalla alla oleva komento SSH:n kautta.';
$lang['SystemUpgrade.!error.license_invalid'] = 'Tukipalvelun ja päivitystilauksen on oltava voimassa, jotta voit suorittaa pää- tai alaversiopäivityksiä.';
$lang['SystemUpgrade.!error.lock_stale'] = 'Aikaisempi päivitysprosessi näyttää keskeytyneen odottamattomasti. Voit poistaa lukituksen ja yrittää uudelleen.';
$lang['SystemUpgrade.!error.php_version'] = 'Kohdejulkaisu edellyttää PHP-versiota %1$s tai uudempaa. Käytössäsi on PHP-versio %2$s.';
$lang['SystemUpgrade.!error.signature_invalid'] = 'Julkaisun allekirjoituksen tarkistus epäonnistui. Tiedostoa on mahdollisesti peukaloitu.';
$lang['SystemUpgrade.!error.signature_missing'] = 'Julkaisussa ei ole salausallekirjoitusta. Aitoutta ei voida varmistaa.';
$lang['SystemUpgrade.!error.upgrade_locked'] = 'Päivitys on jo käynnissä (aloittanut työntekijä tunnuksella %1$s osoitteessa %2$s).';
$lang['SystemUpgrade.!error.upgrader_crashed'] = 'Päivitysprosessi näyttää pysähtyneen odottamattomasti. Tarkista alla olevat varmuuskopiointipolut palautusta varten.';
$lang['SystemUpgrade.!error.upgrader_failed'] = 'Päivitysprosessin valmistelua tai käynnistämistä ei onnistuttu suorittamaan.';
$lang['SystemUpgrade.environment.config_fail'] = 'Asetukset: blesta.php-tiedostoon ei ole kirjoitusoikeutta.';
$lang['SystemUpgrade.environment.config_pass'] = 'Asetukset: blesta.php-tiedostoon on kirjoitusoikeus.';
$lang['SystemUpgrade.environment.disk_pass'] = 'Levytila: Käytettävissä %1$s.';
$lang['SystemUpgrade.environment.disk_warn'] = 'Levytila: Käytettävissä on vain %1$s, arvioitu tarvittava tila on %2$s.';
$lang['SystemUpgrade.environment.exec_fail'] = 'Shell-käyttöoikeus: exec()-funktio on poistettu käytöstä tai sitä ei ole käytettävissä.';
$lang['SystemUpgrade.environment.exec_pass'] = 'Shell-käyttöoikeus: exec()-funktio on käytettävissä.';
$lang['SystemUpgrade.environment.mysqldump_fail'] = 'Tietokannan varmuuskopiointi: mysqldump-komentoa ei ole käytettävissä. Asenna mysql-client-työkalut.';
$lang['SystemUpgrade.environment.mysqldump_pass'] = 'Tietokannan varmuuskopiointi: mysqldump-komento on käytettävissä.';
$lang['SystemUpgrade.environment.os_fail'] = 'Itsepäivitys on tuettu vain Linux-ympäristöissä.';
$lang['SystemUpgrade.environment.os_pass'] = 'Käyttöjärjestelmä: Tunnistettu Linux.';
$lang['SystemUpgrade.environment.ownership_fail'] = 'Tiedostojen omistajuus: %1$s:n avainhakemistot eivät ole verkkopalvelimen käyttäjän omistuksessa.';
$lang['SystemUpgrade.environment.ownership_pass'] = 'Tiedostojen omistajuus: Kaikki keskeiset hakemistot ovat verkkopalvelimen käyttäjän omistuksessa.';
$lang['SystemUpgrade.environment.rsync_fail'] = 'Tiedostojen synkronointi: rsync-komentoa ei ole käytettävissä. Asenna rsync.';
$lang['SystemUpgrade.environment.rsync_pass'] = 'Tiedostojen synkronointi: rsync-komento on käytettävissä.';
$lang['SystemUpgrade.environment.setsid_pass'] = 'Prosessin irrottaminen: setsid-komento on käytettävissä.';
$lang['SystemUpgrade.environment.setsid_warn'] = 'Prosessin irrottaminen: setsid-komentoa ei ole käytettävissä. Päivityksen loppuun saattaminen saattaa vaatia manuaalisen komennon suorittamista SSH:n kautta rajoitetuissa isännöintiympäristöissä.';
$lang['SystemUpgrade.environment.tar_fail'] = 'Tiedostojen varmuuskopiointi: tar-komentoa ei ole käytettävissä. Asenna tar.';
$lang['SystemUpgrade.environment.tar_pass'] = 'Tiedostojen varmuuskopiointi: tar-komento on käytettävissä.';
$lang['SystemUpgrade.environment.unzip_fail'] = 'Arkiston purkaminen: unzip-komentoa ei ole käytettävissä. Asenna unzip.';
$lang['SystemUpgrade.environment.unzip_pass'] = 'Arkiston purkaminen: käytettävissä on unzip-komento.';
$lang['SystemUpgrade.environment.writable_fail'] = 'Tiedostojärjestelmä: Verkkopalvelin ei voi kirjoittaa asennushakemistoon.';
$lang['SystemUpgrade.environment.writable_pass'] = 'Tiedostojärjestelmä: Asennuskansio on kirjoitettavissa.';
$lang['SystemUpgrade.maintenance_reason'] = 'Järjestelmää päivitetään parhaillaan. Yritä uudelleen hetken kuluttua.';

