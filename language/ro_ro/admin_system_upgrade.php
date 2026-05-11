<?php
/**
 * Admin System Upgrade
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemUpgrade.index.no_results'] = 'Opțiunile de actualizare nu sunt disponibile în acest moment.';
$lang['AdminSystemUpgrade.index.field_upgradesubmit'] = 'Actualizarea setărilor';
$lang['AdminSystemUpgrade.index.boxtitle_upgrade'] = 'Opțiuni de upgrade';
$lang['AdminSystemUpgrade.index.page_title'] = 'Setări > Sistem > Opțiuni de actualizare';
$lang['AdminSystemUpgrade.upgrade.btn_abort'] = 'Anulează';
$lang['AdminSystemUpgrade.upgrade.btn_continue'] = 'Continuați cu Upgrade';
$lang['AdminSystemUpgrade.upgrade.label_missing'] = 'Fișiere lipsă';
$lang['AdminSystemUpgrade.upgrade.label_modified'] = 'Fișiere modificate';
$lang['AdminSystemUpgrade.upgrade.modified_files_title'] = 'Fișiere de bază modificate';
$lang['AdminSystemUpgrade.upgrade.modified_files'] = '%1$s fișierul (fișierele) de bază au fost modificate față de versiunea originală. Aceste modificări vor fi suprascrise în timpul actualizării. Doriți să continuați?';
$lang['AdminSystemUpgrade.upgrade.no_checksums'] = 'Manifestul fișierelor pentru instalarea curentă nu include sume de control. Verificarea integrității fișierelor va fi omisă. Doriți să continuați cu actualizarea?';
$lang['AdminSystemUpgrade.upgrade.no_manifest'] = 'Nu a fost găsit niciun manifest de fișier pentru instalația curentă. Verificarea integrității fișierelor va fi ignorată. Doriți să continuați cu actualizarea?';
$lang['AdminSystemUpgrade.upgrade.started'] = 'Procesul de actualizare a început. Puteți închide această pagină - actualizarea va continua în fundal. Reveniți la această pagină pentru a verifica progresul.';
$lang['AdminSystemUpgrade.index.failure_db_version_mismatch'] = 'Versiunea bazei de date nu a avansat la valoarea așteptată. Este posibil ca actualizarea să se fi oprit la jumătatea unei versiuni, lăsând aplicate unele modificări ale schemei.';
$lang['AdminSystemUpgrade.index.failure_db_version_after'] = 'Curent: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_expected'] = 'Așteptat după actualizare: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_before'] = 'Înainte de actualizare: %1$s';
$lang['AdminSystemUpgrade.index.failure_db_version_label'] = 'Versiunea bazei de date:';
$lang['AdminSystemUpgrade.index.failure_backup_label'] = 'Backup-uri disponibile:';
$lang['AdminSystemUpgrade.index.failure_explanation'] = 'Actualizarea nu s-a finalizat cu succes. Este posibil ca sistemul dvs. să se afle într-o stare inconsistentă și este posibil ca unele modificări ale bazei de date din versiunea eșuată să fi fost deja aplicate. Reexecutarea actualizării va eșua probabil în mod diferit. Se recomandă restaurarea din copia de rezervă a bazei de date înainte de a încerca din nou. Copiile de rezervă au fost efectuate înainte de începerea actualizării și sunt enumerate mai jos. Pentru recuperare, fie restaurați manual aceste copii de rezervă, fie deschideți un bilet de asistență pentru asistență.';
$lang['AdminSystemUpgrade.index.failure_heading'] = 'Ce trebuie să faceți în continuare';
$lang['AdminSystemUpgrade.index.recovery_instructions'] = 'Pentru a restaura din backup, executați următoarele comenzi pe serverul dvs:';
$lang['AdminSystemUpgrade.index.recovery_files_path'] = 'Fișier de rezervă: %1$s';
$lang['AdminSystemUpgrade.index.recovery_db_path'] = 'Copie de rezervă a bazei de date: %1$s';
$lang['AdminSystemUpgrade.index.heading_recovery'] = 'Instrucțiuni de recuperare';
$lang['AdminSystemUpgrade.index.confirm_delete_backup'] = 'Sunteți sigur că doriți să ștergeți această copie de rezervă? Aceasta nu poate fi anulată.';
$lang['AdminSystemUpgrade.index.btn_delete'] = 'Ștergeți';
$lang['AdminSystemUpgrade.index.btn_download'] = 'Descărcare';
$lang['AdminSystemUpgrade.index.backup_files'] = 'Fișiere';
$lang['AdminSystemUpgrade.index.backup_database'] = 'Baza de date';
$lang['AdminSystemUpgrade.index.backup_col_date'] = 'Data';
$lang['AdminSystemUpgrade.index.backup_col_size'] = 'Mărime';
$lang['AdminSystemUpgrade.index.backup_col_type'] = 'Tip';
$lang['AdminSystemUpgrade.index.backup_col_file'] = 'Fișier';
$lang['AdminSystemUpgrade.index.no_backups'] = 'Nu s-au găsit copii de rezervă pentru actualizare.';
$lang['AdminSystemUpgrade.index.heading_backups'] = 'Actualizarea backup-urilor';
$lang['AdminSystemUpgrade.index.btn_clear_lock'] = 'Blocare clară';
$lang['AdminSystemUpgrade.index.lock_stale'] = 'Un proces anterior de actualizare pare să se fi oprit în mod neașteptat.';
$lang['AdminSystemUpgrade.index.lock_active'] = 'O actualizare este în curs de desfășurare, a început la %1$s.';
$lang['AdminSystemUpgrade.index.btn_retry'] = 'Reîncercare';
$lang['AdminSystemUpgrade.index.btn_dashboard'] = 'Reveniți la tabloul de bord';
$lang['AdminSystemUpgrade.index.upgrade_failed'] = 'Actualizarea a eșuat.';
$lang['AdminSystemUpgrade.index.upgrade_complete'] = 'Actualizare finalizată cu succes!';
$lang['AdminSystemUpgrade.index.step_finalize'] = 'Finalizare';
$lang['AdminSystemUpgrade.index.step_migrate'] = 'Executați migrări ale bazelor de date';
$lang['AdminSystemUpgrade.index.step_replace'] = 'Înlocuiți fișierele';
$lang['AdminSystemUpgrade.index.step_extract'] = 'Extragerea fișierelor';
$lang['AdminSystemUpgrade.index.step_verify'] = 'Verificarea integrității';
$lang['AdminSystemUpgrade.index.step_download'] = 'Descărcare versiune';
$lang['AdminSystemUpgrade.index.step_backup_files'] = 'Copie de rezervă a fișierelor';
$lang['AdminSystemUpgrade.index.step_backup_db'] = 'Copie de rezervă a bazei de date';
$lang['AdminSystemUpgrade.index.step_maintenance'] = 'Activarea modului de întreținere';
$lang['AdminSystemUpgrade.index.step_preflight'] = 'Verificări înainte de zbor';
$lang['AdminSystemUpgrade.index.heading_progress'] = 'Progresul actualizării';
$lang['AdminSystemUpgrade.index.select_version'] = 'Selectați o versiune la care să faceți upgrade:';
$lang['AdminSystemUpgrade.index.upgrade_warning'] = 'Aceasta va activa modul de întreținere, va crea copii de siguranță, va descărca și instala noua versiune și va executa migrări ale bazelor de date. Acest proces nu poate fi întrerupt odată început.';
$lang['AdminSystemUpgrade.index.btn_upgrade'] = 'Actualizați acum';
$lang['AdminSystemUpgrade.index.clean_stale_files_note'] = 'Șterge fișierele din directoarele principale care nu sunt prezente în manifestul noii versiuni. Nu bifați această opțiune decât dacă sunteți sigur că nu există fișiere personalizate în directoarele de bază.';
$lang['AdminSystemUpgrade.index.clean_stale_files'] = 'Îndepărtați fișierele de bază vechi după actualizare';
$lang['AdminSystemUpgrade.index.skip_integrity_check'] = 'Săriți peste verificarea integrității fișierului';
$lang['AdminSystemUpgrade.index.no_support'] = 'Abonamentul dvs. de asistență și actualizări nu este activ. Sunt disponibile doar actualizările de patch-uri.';
$lang['AdminSystemUpgrade.index.requires_support'] = 'Necesită un abonament activ de asistență și actualizări.';
$lang['AdminSystemUpgrade.index.changelog_link'] = 'Vezi Changelog';
$lang['AdminSystemUpgrade.index.release_date'] = 'Eliberat: %1$s';
$lang['AdminSystemUpgrade.index.upgrade_latest'] = 'Actualizare completă: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.upgrade_patch'] = 'Patch Update: %1$s → %2$s';
$lang['AdminSystemUpgrade.index.heading_available'] = 'Actualizări disponibile';
$lang['AdminSystemUpgrade.index.command_copied'] = 'Copiat';
$lang['AdminSystemUpgrade.index.btn_copy_command'] = 'Copiați';
$lang['AdminSystemUpgrade.index.launch_failed_instruction'] = 'Rulați următoarea comandă prin SSH (ca utilizator care deține instalarea Blesta) pentru a finaliza actualizarea. Lăsați această pagină deschisă - progresul va continua să fie actualizat aici în timp ce se execută comanda.';
$lang['AdminSystemUpgrade.index.launch_failed_title'] = 'Actualizarea în fundal nu a început';
$lang['AdminSystemUpgrade.index.environment_badge_warn'] = '%1$d avertizare';
$lang['AdminSystemUpgrade.index.environment_badge_fail'] = '%1$d a eșuat';
$lang['AdminSystemUpgrade.index.environment_fail'] = 'Unele verificări au eșuat. Vă rugăm să rezolvați problemele de mai jos înainte de actualizare.';
$lang['AdminSystemUpgrade.index.environment_pass'] = 'Toate verificările au trecut. Sistemul dvs. este pregătit pentru auto-upgrade.';
$lang['AdminSystemUpgrade.index.heading_environment'] = 'Starea mediului';
$lang['AdminSystemUpgrade.index.up_to_date'] = 'Instalația dvs. este la zi.';
$lang['AdminSystemUpgrade.index.btn_check'] = 'Verificați dacă există actualizări';
$lang['AdminSystemUpgrade.index.never_checked'] = 'Never checked';
$lang['AdminSystemUpgrade.index.last_checked'] = 'Ultima verificare: %1$s';
$lang['AdminSystemUpgrade.index.current_version'] = 'Rulezi Blesta %1$s';
$lang['AdminSystemUpgrade.index.heading_current'] = 'Versiunea curentă';

