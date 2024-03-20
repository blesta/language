<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.confirm.generate'] = 'Generarea extensiei';
$lang['AdminMain.confirm.custom_path'] = 'Calea personalizată';
$lang['AdminMain.confirm.tooltip_location'] = 'Directorul în care se încarcă fișierele de extensie generate.';
$lang['AdminMain.confirm.location'] = 'Locația extensiei';
$lang['AdminMain.confirm.text_generation'] = 'Setările de extensie sunt finalizate.  Puteți revizui orice secțiune făcând clic pe nodurile din bara de progres.  Faceți clic pe "Generate Extension" (Generare extensie) pentru a finaliza și a genera automat fișierele pentru extensia dumneavoastră.';
$lang['AdminMain.confirm.heading_confirm'] = 'Confirmare';
$lang['AdminMain.general.placeholder_name'] = 'Denumire extensie';
$lang['AdminMain.general.tooltip_code_examples'] = 'Verificați să includeți linii comentate de cod de exemplu pentru caracteristici precum Cron Tasks, liste de evenimente și legături etc.';
$lang['AdminMain.general.tooltip_form_type'] = 'Basic pentru a utiliza o versiune foarte trunchiată a formularului de extensie, incluzând doar minimul necesar pentru a genera extensia.';
$lang['AdminMain.general.tooltip_type'] = 'Modulele gestionează multe caracteristici ale serviciilor, inclusiv furnizarea de servicii pe serverele de la distanță. Plugin-urile sunt o integrare puternică, capabilă să facă aproape orice în Blesta. Gateway-urile pentru comercianți procesează plățile, păstrând în același timp clienții în interfața Blesta.  Gateway-urile non-Merchant trimit clienții pe site-ul unui procesator de plăți pentru a finaliza plata.';
$lang['AdminMain.general.tooltip_name'] = 'Numele de afișare al extensiei. Acesta este, de asemenea, utilizat pentru a crea diverse coduri. De exemplu, dacă numele este Modulul meu, atunci directorul modulului va fi modulul_miu, iar numele clasei va fi Modulul meu.  Pentru plugin-uri, nu includeți cuvântul "plugin" în nume, deoarece cauzează unele probleme la generarea codului.';
$lang['AdminMain.general.basic_info'] = 'Următorul - Informații de bază';
$lang['AdminMain.general.code_examples'] = 'Includeți codul de exemplu';
$lang['AdminMain.general.form_type'] = 'Tip de formular';
$lang['AdminMain.general.type'] = 'Tipul de extensie';
$lang['AdminMain.general.name'] = 'Nume';
$lang['AdminMain.general.heading_general_settings'] = 'Setări generale';
$lang['AdminMain.index.extensions_no_results'] = 'Nu există nicio prelungire în acest moment.';
$lang['AdminMain.index.text_confirm_delete'] = 'Sunteți sigur că doriți să ștergeți această extensie?';
$lang['AdminMain.index.option_delete'] = 'Ștergeți';
$lang['AdminMain.index.option_edit'] = 'Editați';
$lang['AdminMain.index.heading_options'] = 'Opțiuni';
$lang['AdminMain.index.heading_date_updated'] = 'Data actualizării';
$lang['AdminMain.index.heading_code_examples'] = 'Exemple de coduri';
$lang['AdminMain.index.heading_form_type'] = 'Tip de formular';
$lang['AdminMain.index.heading_type'] = 'Tip';
$lang['AdminMain.index.heading_name'] = 'Nume';
$lang['AdminMain.index.heading_id'] = 'ID';
$lang['AdminMain.index.extension_add'] = 'Adăugați extensia';
$lang['AdminMain.index.boxtitle_extensions'] = 'Generator de extensii - Extensii';
$lang['AdminMain.index.boxtitle_extension_generator'] = 'Extensie Generator';
$lang['AdminMain.index.page_title'] = 'Extensie Generator';
$lang['AdminMain.getfilelocations.custom'] = 'Personalizat';
$lang['AdminMain.getfilelocations.upload'] = 'Blesta Uploads Directory';
$lang['AdminMain.getfilelocations.nonmerchant'] = 'Repertoriul Blesta Non-Merchant Gateway Directory';
$lang['AdminMain.getfilelocations.merchant'] = 'Directorul Blesta Merchant Gateway';
$lang['AdminMain.getfilelocations.plugin'] = 'Blesta Plugins Directory';
$lang['AdminMain.getfilelocations.module'] = 'Directorul modulelor Blesta';
$lang['AdminMain.!success.nonmerchant_created'] = 'Noul gateway a fost generat cu succes și poate fi găsit la %1$s';
$lang['AdminMain.!success.merchant_created'] = 'Noul gateway a fost generat cu succes și poate fi găsit la %1$s';
$lang['AdminMain.!success.plugin_created'] = 'Noul plugin a fost generat cu succes și poate fi găsit la %1$s';
$lang['AdminMain.!success.module_created'] = 'Noul modul a fost generat cu succes și poate fi găsit la %1$s';
$lang['AdminMain.!success.package_deleted'] = 'Extensia a fost ștearsă cu succes';
$lang['AdminMain.!notice.updating_installed_extension'] = 'Această extensie este instalată în prezent. Este foarte recomandat să o dezinstalați înainte de a regenera fișierele, altfel s-ar putea deteriora consistența bazei de date.';
$lang['AdminMain.!notice.file_overwrite'] = 'Fișierele pentru această extensie există deja în fișierele Blesta și vor fi suprascrise dacă utilizați directorul Blesta.';
$lang['AdminMain.!notice.type_warning'] = 'Schimbarea tipului de extensie va șterge iremediabil toate setările salvate pentru această extensie.';
$lang['AdminMain.!error.generation_failed'] = 'Nu se poate genera extensia dvs.  Excepție generată: %1$s';
$lang['AdminMain.!error.name_taken'] = 'Acest nume intră în conflict cu un director de extensii existent.';

