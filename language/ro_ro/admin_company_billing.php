<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s Ore';
$lang['AdminCompanyBilling.invoices.text_hour'] = 'Ora %1$s';
$lang['AdminCompanyBilling.invoices.text_none'] = 'Nici unul';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = 'A doua încercare de reînnoire Distanța dintre încercările de reînnoire';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = 'A doua încercare de reînnoire Pragul de spațiere a încercărilor de reînnoire';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = 'Prima încercare de reînnoire Distanța dintre încercările de reînnoire';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = 'Prima încercare de reînnoire Pragul de spațiere a încercării de reînnoire';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = 'Numărul de încercări de reînnoire a serviciului care trebuie încercate înainte de a se amâna Încercări de spațiere Încercări de reînnoire Spațiere la 2 ore una de alta';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = 'Numărul de încercări de reînnoire a serviciului care trebuie încercate înainte de a se amâna Încercări de spațiere Încercări de reînnoire Spațiere la 1 oră una de alta';
$lang['AdminCompanyBilling.latefees.field_submit'] = 'Actualizarea setărilor';
$lang['AdminCompanyBilling.latefees.field.fixed'] = 'Fixed';
$lang['AdminCompanyBilling.latefees.field.percent'] = 'Procent';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = 'Se aplică la valoarea totală a facturii';
$lang['AdminCompanyBilling.latefees.text_minimum'] = 'Minim';
$lang['AdminCompanyBilling.latefees.text_amount'] = 'Suma';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = 'Tipul de taxă';
$lang['AdminCompanyBilling.latefees.text_currency'] = 'Monedă';
$lang['AdminCompanyBilling.latefees.text_enabled'] = 'Activat';
$lang['AdminCompanyBilling.latefees.heading_basic'] = 'Opțiuni de bază';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = 'Taxe de întârziere';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = 'Rețineți că, dacă această opțiune este bifată, toate facturile trimise către PostalMethods vor fi color în loc de alb-negru.';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = 'Dacă această opțiune este bifată, facturile trimise către PostalMethods vor fi utilizate pentru tipărirea pe fața și spatele paginii.';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = 'Asigurați-vă că utilizați cheia secretă a mediului de testare furnizată de PostalMethods atunci când testați.';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = 'Metode poștale va trimite un plic de răspuns la fiecare expediere.';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = 'Actualizarea setărilor';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = 'Imprimare color';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = 'Imprimare față-verso';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'Cheia secretă API';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = 'Parola';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = 'Nume utilizator';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = 'Metode de livrare a facturilor';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'PostalMethods tipărește, împachetează și expediază facturile către clienții dumneavoastră. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">Înscrieți-vă</a> pentru un cont PostalMethods și începeți să trimiteți facturi prin poștă chiar astăzi.';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = 'MetodePostale';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'InterFax vă permite să trimiteți facturi prin fax pe internet. <a href="http://www.interfax.net/" target="_blank">Înscrieți-vă</a> pentru un cont InterFax și începeți să trimiteți facturi prin fax chiar astăzi.';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = 'Opțiuni de bază';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = 'Livrarea facturii';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = 'Setări > Companie > Facturare/Pagare > Livrare factură';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = 'Dacă se bifează această casetă, se va elimina orice tip de plată acceptată setată pe client, dacă este dezactivată în cadrul companiei.';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = 'Actualizarea setărilor';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = 'Eliminarea tipurilor de plată acceptate, setate în prezent pe clienți';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = 'Îndepărtați suprascrierile clientului';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = 'Casa de compensare automată';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = 'Card de credit';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = 'Numai tipurile de plată selectate sunt disponibile pentru procesare prin intermediul gateway-urilor sau pot fi adăugate ca și conturi de plată, chiar dacă un gateway activ acceptă tipul respectiv. Debifarea unui tip care este deja acceptat va face ca plățile de acest tip să nu fie procesate.';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = 'Tipuri de plăți acceptate';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = 'Setări > Companie > Facturare/Pagare > Tipuri de plată acceptate';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = 'Actualizarea setărilor';
$lang['AdminCompanyBilling.customization.remove'] = 'Eliminați';
$lang['AdminCompanyBilling.customization.field.inv_font'] = 'Familie de fonturi';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = 'Tip de fișier factură';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = 'Data scadentă - Standard';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = 'Data scadentă - Pro Forma';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = 'Data scadentă - Proiecte';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = 'Plăți/Credite';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = 'Filigran PAID';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = 'Numele companiei/adresa';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = 'Logo';
$lang['AdminCompanyBilling.customization.field.inv_display'] = 'Afișare pe factură';
$lang['AdminCompanyBilling.customization.field.inv_template'] = 'Model de factură';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = 'Dimensiunea hârtiei';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = 'Termeni';
$lang['AdminCompanyBilling.customization.field.inv_background'] = 'Fond';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = 'Logo';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = 'Comprimarea facturilor PDF';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = 'Metodă de memorare în memoria cache a facturilor';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = 'Valoarea de creștere a cotației';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = 'Valoarea de pornire a cotației';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = 'Formatul citației';
$lang['AdminCompanyBilling.customization.field.inv_type'] = 'Tipul facturii';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = 'Caracterul de umplere a facturii';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = 'Dimensiunea de umplere a facturii';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = 'Valoarea de creștere a facturii';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = 'Valoarea de pornire a facturii pro forma';
$lang['AdminCompanyBilling.customization.field.inv_start'] = 'Valoarea de început a facturii';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = 'Formatul facturii pro forma';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = 'Formatul proiectului de factură';
$lang['AdminCompanyBilling.customization.field.inv_format'] = 'Formatul facturii';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = 'Aspect și senzație';
$lang['AdminCompanyBilling.customization.heading_cache'] = 'Cache';
$lang['AdminCompanyBilling.customization.heading_quotations'] = 'Opțiuni de cotare';
$lang['AdminCompanyBilling.customization.heading_general'] = 'Opțiuni de bază';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = 'Personalizarea facturii';
$lang['AdminCompanyBilling.customization.page_title'] = 'Setări > Companie > Facturare/Pagare > Personalizare factură';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(folosit %1$s)';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = 'Pachete disponibile';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = 'Pachete atribuite';
$lang['AdminCompanyBilling.editcoupon.text_all'] = 'Toate';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = 'Editare cupon';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = 'Filtru de grup de pachete';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = 'Pachete';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = 'Eliminați';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = 'Termeni';
$lang['AdminCompanyBilling.editcoupon.text_period'] = 'Perioada';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = 'Activat';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = 'Acest cupon poate fi aplicat numai la serviciile comandate pentru unul dintre termenii/perioadele selectate. Dacă nu este activat niciunul, atunci termenul pentru serviciu va fi ignorat la evaluarea limitărilor cupoanelor.';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = 'Termeni';
$lang['AdminCompanyBilling.editcoupon.text_value'] = 'Valoare';
$lang['AdminCompanyBilling.editcoupon.text_type'] = 'Tip';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = 'Monedă';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = 'Adăugați o monedă suplimentară';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = 'Opțiuni de reducere';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = 'Se aplică limitări la reînnoirea serviciilor';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = 'Limitările nu se aplică în cazul reînnoirii serviciilor';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = 'Cantitate';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = 'Data de încheiere';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = 'Data de începere';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = 'Limitări';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = 'Generarea codului';
$lang['AdminCompanyBilling.editcoupon.field_code'] = 'Cod cupon';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = 'Numai pentru uz intern';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = 'Se aplică opțiunilor configurabile';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = 'Se aplică atunci când serviciul este adăugat sau reînnoit';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = 'Se aplică numai atunci când se adaugă serviciul';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = 'De bază';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = 'Editare cupon';
$lang['AdminCompanyBilling.editcoupon.page_title'] = 'Setări > Companie > Facturare/Pagare > Editare cupon';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = 'Pachete disponibile';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = 'Pachete atribuite';
$lang['AdminCompanyBilling.addcoupon.text_all'] = 'Toate';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = 'Creați cuponul';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = 'Filtru de grup de pachete';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = 'Pachete';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = 'Eliminați';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = 'Termeni';
$lang['AdminCompanyBilling.addcoupon.text_period'] = 'Perioada';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = 'Activat';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = 'Acest cupon poate fi aplicat numai la serviciile comandate pentru unul dintre termenii/perioadele selectate. Dacă nu este activat niciunul, atunci termenul pentru serviciu va fi ignorat la evaluarea limitărilor cupoanelor.';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = 'Limitări de termen';
$lang['AdminCompanyBilling.addcoupon.text_value'] = 'Valoare';
$lang['AdminCompanyBilling.addcoupon.text_type'] = 'Tip';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = 'Monedă';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = 'Adăugați o monedă suplimentară';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = 'Opțiuni de reducere';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = 'Se aplică limitări la reînnoirea serviciilor';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = 'Limitările nu se aplică în cazul reînnoirii serviciilor';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = 'Cantitate';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = 'Data de încheiere';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = 'Data de începere';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = 'Limitări';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = 'Generarea codului';
$lang['AdminCompanyBilling.addcoupon.field_code'] = 'Cod cupon';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = 'Numai pentru uz intern';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = 'Se aplică opțiunilor configurabile';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = 'Se aplică atunci când serviciul este adăugat sau reînnoit';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = 'Se aplică numai atunci când se adaugă serviciul';
$lang['AdminCompanyBilling.addcoupon.field_status'] = 'Activat';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = 'De bază';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = 'Cupon nou';
$lang['AdminCompanyBilling.addcoupon.page_title'] = 'Setări > Companie > Facturare/Pagare > Cupon nou';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = 'Sunteți sigur că doriți să ștergeți acest cupon?';
$lang['AdminCompanyBilling.coupons.option_delete'] = 'Ștergeți';
$lang['AdminCompanyBilling.coupons.option_edit'] = 'Editați';
$lang['AdminCompanyBilling.coupons.text_multiple'] = 'Mai multe';
$lang['AdminCompanyBilling.coupons.text_currency'] = 'Monedă';
$lang['AdminCompanyBilling.coupons.text_options'] = 'Opțiuni';
$lang['AdminCompanyBilling.coupons.text_end_date'] = 'Data de încheiere';
$lang['AdminCompanyBilling.coupons.text_start_date'] = 'Data de începere';
$lang['AdminCompanyBilling.coupons.text_max'] = 'Max';
$lang['AdminCompanyBilling.coupons.text_used'] = 'Folosit';
$lang['AdminCompanyBilling.coupons.text_discount'] = 'Reducere';
$lang['AdminCompanyBilling.coupons.text_code'] = 'Cod';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = 'Cupoane';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = 'Adaugă cupon';
$lang['AdminCompanyBilling.coupons.no_results'] = 'Nu există cupoane.';
$lang['AdminCompanyBilling.coupons.page_title'] = 'Setări > Companie > Facturare/Pagare > Cupoane';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = 'Actualizarea setărilor';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = 'Notificare de debit automat în așteptare';
$lang['AdminCompanyBilling.notices.field.third_notice'] = 'A treia comunicare';
$lang['AdminCompanyBilling.notices.field.second_notice'] = 'A doua notificare';
$lang['AdminCompanyBilling.notices.field.first_notice'] = 'Prima notificare';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = 'Permiteți trimiterea de notificări de plată';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = 'Permiteți trimiterea de notificări de anulare a serviciului';
$lang['AdminCompanyBilling.notices.text_edit_template'] = 'Editați șablonul de e-mail';
$lang['AdminCompanyBilling.notices.text_disabled'] = 'Persoane cu handicap';
$lang['AdminCompanyBilling.notices.text_duedate'] = 'Data limită';
$lang['AdminCompanyBilling.notices.text_days'] = '%1$s Zile';
$lang['AdminCompanyBilling.notices.text_day'] = 'Ziua %1$s';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = 'Data scadentă a facturii';
$lang['AdminCompanyBilling.notices.text_after'] = 'După';
$lang['AdminCompanyBilling.notices.text_before'] = 'Înainte de';
$lang['AdminCompanyBilling.notices.text_notices'] = 'Notificările de plată pot fi utilizate ca notificări de întârziere sau ca memento-uri de plată.';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = 'Anunțuri';
$lang['AdminCompanyBilling.notices.page_title'] = 'Setări > Companie > Facturare/Pagare > Notificări';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s Zile';
$lang['AdminCompanyBilling.invoices.text_day'] = 'Ziua %1$s';
$lang['AdminCompanyBilling.invoices.text_sameday'] = 'Aceeași zi';
$lang['AdminCompanyBilling.invoices.text_never'] = 'Niciodată';
$lang['AdminCompanyBilling.invoices.text_any'] = '- Orice -';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = 'Actualizarea setărilor';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = 'Modificări ale serviciului de coadă până la plată';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = 'Afișarea câmpului de identificare fiscală în interfața cu clientul';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = 'Anularea facturilor deschise la câteva zile după scadență';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = 'Anularea facturilor deschise la anularea serviciului';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = 'Aprovizionarea automată a serviciilor în așteptare plătite';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = 'Aplicați automat creditele libere';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = 'Permiterea eliberării de credite proporționale pentru retrogradarea serviciilor';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = 'Permiteți clienților să schimbe pachetul de servicii';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = 'Permiteți clienților să schimbe termenii serviciului';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = 'Permiteți clienților să creeze add-on-uri pentru serviciile existente';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = 'Permiteți serviciilor addon să fie sincronizate cu serviciile lor părintești';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = 'Permiteți clienților să reînnoiască manual serviciile';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = 'Permiteți clienților să anuleze serviciile';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = 'Afișarea intervalului de date al serviciului pentru opțiunile configurabile';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = 'Includeți descrierile pachetelor pe facturi';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = 'Servicii de facturare împreună';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = 'Factură Servicii suspendate';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = 'Permiteți clientului să stabilească metoda de facturare';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = 'Activați debitul automat';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = 'Aplicați taxa de întârziere la facturile deschise după scadență';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = 'Anularea modificărilor de servicii la câteva zile după scadență';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = 'Încercări de reînnoire a serviciului';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = 'Încercări de debitare automată';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = 'Suspendarea serviciilor la câteva zile după scadență';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = 'Debit automat cu câteva zile înainte de data scadentă';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = 'Cotație Procentul de depozit implicit (%)';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = 'Cotizație Zile moarte după expirare';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = 'Zilele de expirare a cotațiilor';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = 'Zile de facturare înainte de reînnoire';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = 'Opțiuni de facturare și taxare';
$lang['AdminCompanyBilling.invoices.page_title'] = 'Setări > Companie > Facturare/Pagare > Opțiuni de facturare și taxare';
$lang['AdminCompanyBilling.!notice.group_settings'] = 'NOTĂ: Aceste setări se aplică numai grupurilor de clienți care moștenesc setările de la Companie.';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = 'Introduceți condițiile de plată sau orice alte informații pe care doriți să apară pe factură.';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = 'Pentru fonturi suplimentare, despachetați fonturile TCPDF personalizate în directorul /vendors/tecnickcom/tcpdf/fonts/ din cadrul instalării.';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = 'Tipul de fișier al facturii. Șabloanele de factură pot suporta diferite tipuri de fișiere.';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = 'Șablonul de factură care urmează să fie utilizat pentru a reda factura.';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = 'Dimensiunea hârtiei pentru factură.';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = 'Încărcați fundalul care va apărea pe factură.';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = 'Încărcați logo-ul care va apărea pe factură.';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = 'Comprimați fișierele PDF din memoria cache pentru a economisi spațiu pe disc. Activarea acestei opțiuni poate scădea performanța.';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = 'Salvează o copie în cache a fiecărei facturi pe disc.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = 'Numerele facturilor a căror lungime a caracterelor este mai mică decât dimensiunea de umplere a facturii vor fi umplute la stânga cu caracterul dat.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = 'Dimensiunea de umplere a facturii stabilește lungimea minimă a caracterelor numerelor de factură.';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = 'Numerele de factură ulterioare se vor incrementa cu această valoare.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = 'Numerele facturilor vor începe (și vor crește) de la această valoare inițială.';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = 'Numerele facturilor vor începe (și vor crește) de la această valoare inițială.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = 'Etichetele disponibile includ: {num} - numărul facturii (obligatoriu); {year} - anul din patru cifre; {month} - luna din două cifre; {day} - ziua lunii din două cifre.';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = 'Etichetele disponibile includ: {num} - numărul facturii (obligatoriu); {year} - anul din patru cifre; {month} - luna din două cifre; {day} - ziua lunii din două cifre.';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = 'Etichetele disponibile includ: {num} - numărul facturii (obligatoriu); {year} - anul din patru cifre; {month} - luna din două cifre; {day} - ziua lunii din două cifre.';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = 'Tipul de factură care este creat în mod implicit. Facturile pro forma se transformă în facturi standard după ce au fost plătite și închise.';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = 'Numărul de zile înainte ca un cont să fie debitat automat pentru a trimite un e-mail de notificare a debitării automate în așteptare.';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = 'Numărul de zile înainte sau după ce o factură este scadentă pentru a trimite al treilea e-mail de notificare a întârzierii.';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = 'Numărul de zile înainte sau după ce o factură este scadentă pentru a trimite al doilea e-mail de notificare a întârzierii.';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = 'Numărul de zile înainte sau după scadența unei facturi pentru a trimite primul e-mail de notificare a întârzierii.';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = 'Această opțiune stabilește dacă clienților li se pot trimite notificări de anulare a serviciului.';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = 'Această opțiune stabilește dacă clienților li se poate trimite oricare dintre notificările de plată disponibile.';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = 'Dacă tipul de comision este procentual, bifați această opțiune pentru a calcula comisionul pe baza sumei totale a facturii. Dacă nu este bifată, taxa va fi calculată numai pe baza sumei neplătite.';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = 'Dacă se bifează această opțiune, modificările de servicii (de exemplu, upgrade-uri/downgrade-uri) vor fi plasate în coadă și vor fi furnizate numai după ce au fost plătite. În caz contrar, acestea vor fi furnizate imediat.';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = 'Bifați pentru a afișa câmpul ID-ul fiscal în interfața cu clientul.';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = 'În cazul în care factura asociată unui serviciu anulat este scadentă, aceasta va fi anulată numai dacă nu este scadentă mai mult de numărul de zile selectat.';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = 'Atunci când este bifată, anularea serviciului va anula și orice factură deschisă asociată serviciului anulat. În cazul în care o astfel de factură conține elemente de linie care nu sunt asociate cu serviciul, elementele de linie ale serviciului vor fi eliminate în locul acestora, iar factura nu va fi anulată.';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = 'Bifați pentru a permite Blesta să furnizeze automat servicii care sunt în așteptare și care au o factură care a fost plătită.';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = 'Bifați această opțiune pentru a permite Blesta să aplice automat credite la facturile deschise (mai întâi cele mai vechi facturi).';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = 'Bifați această opțiune pentru a permite acordarea de credite proporționale pentru serviciile sau opțiunile configurabile ale serviciilor care sunt retrogradate.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = 'Bifați pentru a permite clienților să schimbe pachetul de servicii recurente.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = 'Bifați această opțiune pentru a permite clienților să modifice durata serviciilor recurente.';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = 'Bifați pentru a permite clienților să comande addon-uri pentru oricare dintre serviciile lor care le acceptă.';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = 'Când este bifată, serviciile addon nou create care se potrivesc cu termenii lunari sau anuali ai părintelui vor fi raportate la data de reînnoire a părintelui.';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = 'Bifați pentru a permite clienților să își reînnoiască propriile servicii în avans.';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = 'Bifați pentru a permite clienților să își anuleze propriile servicii.';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = 'Bifați pentru a include intervalul de date al serviciului pentru fiecare articol de factură al opțiunii configurabile.';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = 'Bifați pentru a adăuga versiunea text a descrierilor pachetelor la articolele de servicii.';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = 'Creează o singură factură pentru serviciile care se reînnoiesc în aceeași zi pentru un client. Dacă nu bifați această opțiune, se va crea o factură separată pentru fiecare serviciu.';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = 'Bifați pentru a continua facturarea serviciilor suspendate.';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = 'Bifați această opțiune pentru a permite clientului să aleagă metoda de livrare a facturii pe care o preferă (de exemplu, hârtie sau e-mail).';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = 'Activează debitarea automată a unui client atunci când plata este scadentă.';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = 'Aplicați un comision de întârziere pentru facturile deschise la un număr configurat de zile de la scadență.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = 'Modificările de servicii aflate în așteptare vor fi anulate automat atunci când factura nu este plătită pentru numărul de zile selectat.';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = 'Numărul de încercări și de eșecuri de a procesa reînnoirea unui serviciu înainte ca serviciul respectiv să fie dezactivat pentru a nu mai fi reînnoit automat.';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = 'Numărul de încercări și eșecuri de procesare a unui cont de plăți înainte ca acel cont de plăți să fie dezactivat pentru a nu mai fi debitat automat.';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = 'Numărul de zile care trebuie să aștepte după ce o factură pentru un serviciu a fost scadentă înainte de a suspenda serviciul.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = 'Numărul de zile înainte de scadența unei facturi pentru a debita automat contul de plată implicit al clientului (dacă clientul este configurat pentru debitare automată).';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = 'Procentul de depozit inițial implicit pentru o ofertă.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = 'Numărul de zile de la expirarea unei cotații pentru a o seta ca fiind moartă.';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = 'Numărul de zile de la emiterea unei cotații pentru a o stabili ca fiind expirată.';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = 'Numărul de zile înainte ca un serviciu sau o factură recurentă să se reînnoiască pentru a genera o factură.';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = 'Cantitatea reprezintă numărul maxim de ori de câte ori poate fi folosit acest cupon înainte de a expira.';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = 'Termenii trebuie introduși sub forma unei liste CSV (de exemplu, "1,3,4" înseamnă 1 zi, 3 zile și 4 zile atunci când sunt introduși în rândul "Day").';
$lang['AdminCompanyBilling.!error.extension_zlib'] = 'Extensia Zlib este necesară pentru comprimarea facturilor.';
$lang['AdminCompanyBilling.!error.minimum.format'] = 'Taxa Suma minimă trebuie să fie un număr.';
$lang['AdminCompanyBilling.!error.amount.format'] = 'Taxa Suma trebuie să fie un număr.';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = 'Valoarea de creștere a cotației trebuie să fie un număr.';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = 'Valoarea inițială a cotației trebuie să fie un număr.';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = 'Valoarea de creștere a facturii trebuie să fie un număr.';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = 'Valoarea de început a facturii trebuie să fie un număr.';
$lang['AdminCompanyBilling.!success.customization_updated'] = 'Setările de personalizare a facturii au fost actualizate cu succes!';
$lang['AdminCompanyBilling.!success.latefees_updated'] = 'Setările privind taxele de întârziere au fost actualizate cu succes!';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = 'Setările de livrare a facturii au fost actualizate cu succes!';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = 'Setările privind tipul de plată acceptat au fost actualizate cu succes!';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = 'Cuponul a fost șters cu succes!';
$lang['AdminCompanyBilling.!success.coupon_updated'] = 'Cuponul a fost actualizat cu succes!';
$lang['AdminCompanyBilling.!success.coupon_created'] = 'Cuponul a fost creat cu succes!';
$lang['AdminCompanyBilling.!success.notices_updated'] = 'Anunțurile au fost actualizate cu succes!';
$lang['AdminCompanyBilling.!success.invoices_updated'] = 'Setările de facturare și taxare au fost actualizate cu succes!';

