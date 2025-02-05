<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s Ore';
$lang['AdminCompanyBilling.invoices.text_hour'] = '%1$s Ora';
$lang['AdminCompanyBilling.invoices.text_none'] = 'Nessuno';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = 'Spaziatura del 2° tentativo di rinnovo';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = 'Soglia del 2° tentativo di rinnovo';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = '1° tentativo di rinnovo Spaziatura';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = '1° tentativo di rinnovo Soglia di distanza';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = 'Il numero di rinnovi del servizio da tentare prima di ritardare i tentativi di spaziatura Tentativi di rinnovo Spaziatura 2 ore l\'uno dall\'altro';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = 'Il numero di rinnovi del servizio da tentare prima di ritardare i tentativi di spaziatura Tentativi di rinnovo spaziatura 1 ora a parte';
$lang['AdminCompanyBilling.latefees.field_submit'] = 'Aggiornamento delle impostazioni';
$lang['AdminCompanyBilling.latefees.field.fixed'] = 'Fisso';
$lang['AdminCompanyBilling.latefees.field.percent'] = 'Percentuale';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = 'Applicare all\'importo totale della fattura';
$lang['AdminCompanyBilling.latefees.text_minimum'] = 'Minimo';
$lang['AdminCompanyBilling.latefees.text_amount'] = 'Importo';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = 'Tipo di tariffa';
$lang['AdminCompanyBilling.latefees.text_currency'] = 'Valuta';
$lang['AdminCompanyBilling.latefees.text_enabled'] = 'Abilitato';
$lang['AdminCompanyBilling.latefees.heading_basic'] = 'Opzioni di base';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = 'Tasse di mora';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = 'Se questa opzione è selezionata, tutte le fatture inviate a PostalMethods saranno a colori anziché in bianco e nero.';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = 'Se questa opzione è selezionata, le fatture inviate a PostalMethods utilizzeranno la stampa sul fronte e sul retro della pagina.';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = 'Assicurarsi di utilizzare la chiave segreta dell\'ambiente di test fornita da PostalMethods durante i test.';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = 'Postal Methods invierà una busta di risposta con ogni invio.';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = 'Aggiornamento delle impostazioni';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = 'Stampa a colori';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = 'Stampa fronte/retro';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'Chiave segreta API';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = 'Password';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = 'Nome utente';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = 'Metodi di consegna delle fatture';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'PostalMethods stampa, imbusta e spedisce le fatture ai vostri clienti per voi. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">Iscriviti</a> per un account PostalMethods e inizia oggi stesso a spedire le fatture.';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = 'Metodi postali';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'InterFax consente di inviare fatture via fax tramite Internet. <a href="http://www.interfax.net/" target="_blank">Iscriviti</a> per un account InterFax e inizia a inviare fatture via fax oggi stesso.';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = 'Opzioni di base';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = 'Consegna della fattura';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Consegna della fattura';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = 'Selezionando questa casella, si rimuoveranno gli override del tipo di pagamento accettato impostati sul cliente se sono disabilitati nell\'azienda.';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = 'Aggiornamento delle impostazioni';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = 'Rimuovere i tipi di pagamento accettati attualmente impostati sui clienti';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = 'Rimuovere le sovrascritture del client';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = 'Camera di compensazione automatizzata';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = 'Carta di credito';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = 'Solo i tipi di pagamento selezionati sono disponibili per l\'elaborazione attraverso i gateway o possono essere aggiunti come conti di pagamento, anche se un gateway attivo supporta il tipo. Se si deseleziona un tipo già accettato, i pagamenti di quel tipo non verranno elaborati.';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = 'Tipi di pagamento accettati';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Tipi di pagamento accettati';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = 'Aggiornamento delle impostazioni';
$lang['AdminCompanyBilling.customization.remove'] = 'Rimuovere';
$lang['AdminCompanyBilling.customization.field.inv_font'] = 'Famiglia di caratteri';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = 'Tipo di file della fattura';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = 'Data di scadenza - Standard';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = 'Data di scadenza - Pro Forma';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = 'Data di scadenza - Bozze';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = 'Pagamenti/Crediti';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = 'Filigrana PAGATA';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = 'Nome e indirizzo dell\'azienda';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = 'Logo';
$lang['AdminCompanyBilling.customization.field.inv_display'] = 'Visualizzazione sulla fattura';
$lang['AdminCompanyBilling.customization.field.inv_template'] = 'Modello di fattura';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = 'Formato carta';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = 'Termini';
$lang['AdminCompanyBilling.customization.field.inv_background'] = 'Sfondo';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = 'Logo';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = 'Comprimere le fatture PDF';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = 'Metodo di cache delle fatture';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = 'Valore di incremento della quotazione';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = 'Valore iniziale della quotazione';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = 'Formato dell\'offerta';
$lang['AdminCompanyBilling.customization.field.inv_type'] = 'Tipo di fattura';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = 'Carattere di imbottitura della fattura';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = 'Dimensione dell\'imbottitura della fattura';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = 'Valore di incremento della fattura';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = 'Valore iniziale della fattura proforma';
$lang['AdminCompanyBilling.customization.field.inv_start'] = 'Valore iniziale della fattura';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = 'Formato della fattura proforma';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = 'Formato della bozza di fattura';
$lang['AdminCompanyBilling.customization.field.inv_format'] = 'Formato della fattura';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = 'Look and Feel';
$lang['AdminCompanyBilling.customization.heading_cache'] = 'Cache';
$lang['AdminCompanyBilling.customization.heading_quotations'] = 'Opzioni di quotazione';
$lang['AdminCompanyBilling.customization.heading_general'] = 'Opzioni di base';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = 'Personalizzazione della fattura';
$lang['AdminCompanyBilling.customization.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Personalizzazione della fattura';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(usato %1$s)';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = 'Pacchetti disponibili';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = 'Pacchetti assegnati';
$lang['AdminCompanyBilling.editcoupon.text_all'] = 'Tutti';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = 'Modifica del coupon';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = 'Filtro gruppo di pacchetti';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = 'Pacchetti';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = 'Rimuovere';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = 'N/D';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = 'Termini';
$lang['AdminCompanyBilling.editcoupon.text_period'] = 'Periodo';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = 'Abilitato';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = 'Questo coupon può essere applicato solo ai servizi ordinati per uno dei termini/periodi selezionati. Se non ne è abilitato nessuno, il termine del servizio verrà ignorato quando si valutano le limitazioni del coupon.';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = 'Termini';
$lang['AdminCompanyBilling.editcoupon.text_value'] = 'Valore';
$lang['AdminCompanyBilling.editcoupon.text_type'] = 'Tipo';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = 'Valuta';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = 'Aggiungere una valuta aggiuntiva';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = 'Opzioni di sconto';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = 'Le limitazioni si applicano al rinnovo dei servizi';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = 'Le limitazioni non si applicano al rinnovo dei servizi.';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = 'Quantità';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = 'Data di fine';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = 'Data di inizio';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = 'Limitazioni';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = 'Generare codice';
$lang['AdminCompanyBilling.editcoupon.field_code'] = 'Codice coupon';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = 'Solo per uso interno';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = 'Applicare alle opzioni configurabili';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = 'Applicare quando il servizio viene aggiunto o rinnovato';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = 'Applicare solo quando il servizio viene aggiunto';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = 'Base';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = 'Modifica del coupon';
$lang['AdminCompanyBilling.editcoupon.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Modifica cedola';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = 'Pacchetti disponibili';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = 'Pacchetti assegnati';
$lang['AdminCompanyBilling.addcoupon.text_all'] = 'Tutti';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = 'Crea Coupon';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = 'Filtro gruppo di pacchetti';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = 'Pacchetti';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = 'Rimuovere';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = 'N/D';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = 'Termini';
$lang['AdminCompanyBilling.addcoupon.text_period'] = 'Periodo';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = 'Abilitato';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = 'Questo coupon può essere applicato solo ai servizi ordinati per uno dei termini/periodi selezionati. Se non ne è abilitato nessuno, il termine del servizio verrà ignorato quando si valutano le limitazioni del coupon.';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = 'Limiti di durata';
$lang['AdminCompanyBilling.addcoupon.text_value'] = 'Valore';
$lang['AdminCompanyBilling.addcoupon.text_type'] = 'Tipo';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = 'Valuta';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = 'Aggiungere una valuta aggiuntiva';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = 'Opzioni di sconto';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = 'Le limitazioni si applicano al rinnovo dei servizi';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = 'Le limitazioni non si applicano al rinnovo dei servizi.';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = 'Quantità';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = 'Data di fine';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = 'Data di inizio';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = 'Limitazioni';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = 'Generare codice';
$lang['AdminCompanyBilling.addcoupon.field_code'] = 'Codice coupon';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = 'Solo per uso interno';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = 'Applicare alle opzioni configurabili';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = 'Applicare quando il servizio viene aggiunto o rinnovato';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = 'Applicare solo quando il servizio viene aggiunto';
$lang['AdminCompanyBilling.addcoupon.field_status'] = 'Abilitato';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = 'Base';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = 'Nuovo Coupon';
$lang['AdminCompanyBilling.addcoupon.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Nuova cedola';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = 'È sicuro di voler eliminare questo coupon?';
$lang['AdminCompanyBilling.coupons.option_delete'] = 'Cancellare';
$lang['AdminCompanyBilling.coupons.option_edit'] = 'Modifica';
$lang['AdminCompanyBilling.coupons.text_multiple'] = 'Multiplo';
$lang['AdminCompanyBilling.coupons.text_currency'] = 'Valuta';
$lang['AdminCompanyBilling.coupons.text_options'] = 'Opzioni';
$lang['AdminCompanyBilling.coupons.text_end_date'] = 'Data di fine';
$lang['AdminCompanyBilling.coupons.text_start_date'] = 'Data di inizio';
$lang['AdminCompanyBilling.coupons.text_max'] = 'Massimo';
$lang['AdminCompanyBilling.coupons.text_used'] = 'Usato';
$lang['AdminCompanyBilling.coupons.text_discount'] = 'Sconto';
$lang['AdminCompanyBilling.coupons.text_code'] = 'Codice';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = 'Buoni sconto';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = 'Aggiungi Coupon';
$lang['AdminCompanyBilling.coupons.no_results'] = 'Non ci sono coupon.';
$lang['AdminCompanyBilling.coupons.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Cedole';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = 'Aggiornamento delle impostazioni';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = 'Avviso di addebito automatico in sospeso';
$lang['AdminCompanyBilling.notices.field.third_notice'] = 'Terzo avviso';
$lang['AdminCompanyBilling.notices.field.second_notice'] = 'Secondo avviso';
$lang['AdminCompanyBilling.notices.field.first_notice'] = 'Primo avviso';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = 'Consentire l\'invio di avvisi di pagamento';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = 'Consentire l\'invio di avvisi di cancellazione del servizio';
$lang['AdminCompanyBilling.notices.text_edit_template'] = 'Modifica del modello di e-mail';
$lang['AdminCompanyBilling.notices.text_disabled'] = 'Disabili';
$lang['AdminCompanyBilling.notices.text_duedate'] = 'Data di scadenza';
$lang['AdminCompanyBilling.notices.text_days'] = '%1$s Giorni';
$lang['AdminCompanyBilling.notices.text_day'] = 'Giorno %1$s';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = 'Data di scadenza della fattura';
$lang['AdminCompanyBilling.notices.text_after'] = 'Dopo';
$lang['AdminCompanyBilling.notices.text_before'] = 'Prima';
$lang['AdminCompanyBilling.notices.text_notices'] = 'Gli avvisi di pagamento possono essere utilizzati come avvisi di mora o solleciti di pagamento.';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = 'Avvisi';
$lang['AdminCompanyBilling.notices.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Avvisi';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s Giorni';
$lang['AdminCompanyBilling.invoices.text_day'] = 'Giorno %1$s';
$lang['AdminCompanyBilling.invoices.text_sameday'] = 'Lo stesso giorno';
$lang['AdminCompanyBilling.invoices.text_never'] = 'Mai';
$lang['AdminCompanyBilling.invoices.text_any'] = '- Qualsiasi -';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = 'Aggiornamento delle impostazioni';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = 'Modifiche del servizio di coda fino al pagamento';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = 'Mostrare il campo dell\'ID fiscale nell\'interfaccia del cliente';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = 'Annullamento delle fatture aperte giorni dopo la scadenza';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = 'Annullamento delle fatture aperte in caso di cancellazione del servizio';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = 'Erogazione automatica di servizi in attesa di pagamento';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = 'Applicare automaticamente i crediti sfusi';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = 'Consentire l\'emissione di crediti proporzionali per il declassamento del servizio';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = 'Consentire ai clienti di cambiare il pacchetto di servizi';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = 'Consentire ai clienti di modificare i termini del servizio';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = 'Consentire ai clienti di creare componenti aggiuntivi per i servizi esistenti';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = 'Consentire ai servizi aggiuntivi di essere sincronizzati con i loro servizi padre';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = 'Consentire ai clienti di rinnovare manualmente i servizi';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = 'Consentire ai clienti di annullare i servizi';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = 'Visualizzazione dell\'intervallo di date di servizio per le opzioni configurabili';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = 'Includere le descrizioni dei pacchetti nelle fatture';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = 'Fatturare insieme i servizi';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = 'Fattura servizi sospesi';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = 'Consentire al cliente di impostare il metodo di fatturazione';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = 'Abilita l\'addebito automatico';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = 'Applicare una tassa di mora alle fatture aperte dopo la scadenza';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = 'Annullare le modifiche del servizio dopo alcuni giorni dalla scadenza';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = 'Tentativi di rinnovo del servizio';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = 'Tentativi di addebito automatico';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = 'Sospensione dei servizi dopo giorni dalla scadenza';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = 'Addebito automatico Giorni prima della scadenza';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = 'Quota Percentuale di deposito predefinito (%)';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = 'Citazione Giorni morti dopo la scadenza';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = 'Giorni di scadenza del preventivo';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = 'Giorni di fatturazione prima del rinnovo';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = 'Opzioni di fatturazione e addebito';
$lang['AdminCompanyBilling.invoices.page_title'] = 'Impostazioni > Azienda > Fatturazione/Pagamento > Opzioni di fatturazione e addebito';
$lang['AdminCompanyBilling.!notice.group_settings'] = 'NOTA: Queste impostazioni si applicano solo ai Gruppi di clienti che ereditano le loro impostazioni dalla Società.';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = 'Inserire le condizioni di pagamento o qualsiasi altra informazione che si desidera far apparire sulla fattura.';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = 'Per ulteriori font, scompattate i vostri font TCPDF personalizzati nella directory /vendors/tecnickcom/tcpdf/fonts/ all\'interno della vostra installazione.';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = 'Il tipo di file della fattura. I modelli di fattura possono supportare diversi tipi di file.';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = 'Il modello di fattura da utilizzare per il rendering della fattura.';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = 'Il formato carta della fattura.';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = 'Caricare lo sfondo da visualizzare sulla fattura.';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = 'Caricare il logo da far apparire sulla fattura.';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = 'Comprime i file PDF memorizzati nella cache per risparmiare spazio sul disco. L\'attivazione di questa opzione può ridurre le prestazioni.';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = 'Salva su disco una copia cache di ogni fattura.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = 'I numeri di fattura la cui lunghezza dei caratteri è inferiore alla dimensione dell\'imbottitura della fattura verranno imbottiti a sinistra con il carattere indicato.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = 'La dimensione del padding della fattura stabilisce la lunghezza minima dei caratteri dei numeri di fattura.';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = 'I numeri di fattura successivi aumenteranno di questo valore.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = 'I numeri di fattura inizieranno (e aumenteranno) a partire da questo valore iniziale.';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = 'I numeri di fattura inizieranno (e aumenteranno) a partire da questo valore iniziale.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = 'I tag disponibili includono: {num} - il numero della fattura (obbligatorio); {year} - l\'anno a quattro cifre; {month} - il mese a due cifre; {day} - il giorno del mese a due cifre.';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = 'I tag disponibili includono: {num} - il numero della fattura (obbligatorio); {year} - l\'anno a quattro cifre; {month} - il mese a due cifre; {day} - il giorno del mese a due cifre.';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = 'I tag disponibili includono: {num} - il numero della fattura (obbligatorio); {year} - l\'anno a quattro cifre; {month} - il mese a due cifre; {day} - il giorno del mese a due cifre.';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = 'Il tipo di fattura che viene creato per impostazione predefinita. Le fatture proforma si trasformano in fatture standard dopo essere state pagate e chiuse.';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = 'Il numero di giorni prima dell\'addebito automatico di un conto per inviare l\'e-mail di avviso di addebito automatico in sospeso.';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = 'Il numero di giorni prima o dopo la scadenza di una fattura per inviare la terza e-mail di avviso di ritardo.';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = 'Il numero di giorni prima o dopo la scadenza di una fattura per inviare la seconda e-mail di avviso di ritardo.';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = 'Il numero di giorni prima o dopo la scadenza di una fattura per inviare la prima e-mail di avviso di ritardo.';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = 'Questa opzione consente di stabilire se i clienti possono ricevere avvisi di cancellazione del servizio.';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = 'Questa opzione consente di stabilire se i clienti possono ricevere uno qualsiasi degli avvisi di pagamento disponibili.';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = 'Se il tipo di tariffa è in percentuale, selezionare questa opzione per calcolare la tariffa in base all\'importo totale della fattura. Se l\'opzione è deselezionata, la tariffa sarà calcolata solo sull\'importo non pagato.';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = 'Se l\'opzione è selezionata, le modifiche al servizio (ad es. upgrade/downgrade) verranno messe in coda e fornite solo dopo il pagamento. In caso contrario, verranno fornite immediatamente.';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = 'Selezionare per mostrare il campo Codice fiscale nell\'interfaccia del cliente.';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = 'Se la fattura associata a un servizio annullato è scaduta, verrà annullata solo se non è scaduta da più del numero di giorni selezionato.';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = 'Se si seleziona questa opzione, le cancellazioni dei servizi annullano anche le fatture aperte associate al servizio cancellato. Se la fattura contiene voci non associate al servizio, le voci del servizio verranno rimosse e la fattura non verrà annullata.';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = 'Selezionare per consentire a Blesta di fornire automaticamente i servizi che sono in attesa e che hanno una fattura pagata.';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = 'Selezionare per consentire a Blesta di applicare automaticamente i crediti alle fatture aperte (prima le fatture più vecchie).';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = 'Selezionare per consentire l\'accredito proporzionale per i servizi o le opzioni configurabili del servizio che vengono declassati.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = 'Selezionare per consentire ai clienti di modificare il pacchetto di servizi ricorrenti.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = 'Selezionare per consentire ai clienti di modificare la durata dei servizi ricorrenti.';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = 'Controllare per consentire ai clienti di ordinare i componenti aggiuntivi per qualsiasi servizio che li supporti.';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = 'Se questa opzione è selezionata, i nuovi servizi aggiuntivi creati che corrispondono ai termini mensili o annuali del genitore saranno prorogati alla data di rinnovo del genitore.';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = 'Controllare per consentire ai clienti di rinnovare i propri servizi in anticipo.';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = 'Selezionare per consentire ai clienti di annullare i propri servizi.';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = 'Selezionare per includere l\'intervallo di date del servizio per ciascuna voce di fattura dell\'opzione configurabile.';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = 'Selezionare per aggiungere la versione testuale delle descrizioni dei pacchetti alle voci di servizio.';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = 'Crea un\'unica fattura per i servizi che si rinnovano nello stesso giorno per un cliente. Se si deseleziona, verrà creata una fattura separata per ogni servizio.';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = 'Selezionare per continuare a fatturare i servizi sospesi.';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = 'Selezionare per consentire al cliente di scegliere il metodo di consegna della fattura che preferisce (ad esempio, carta o e-mail).';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = 'Abilita l\'addebito automatico di un cliente alla scadenza del pagamento.';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = 'Applicare una tassa di mora alle fatture aperte un numero configurato di giorni dopo la scadenza.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = 'Le modifiche ai servizi in coda saranno annullate automaticamente quando la fattura non sarà pagata per il numero di giorni selezionato.';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = 'Il numero di tentativi e di fallimenti nell\'elaborazione di un rinnovo del servizio prima che questo venga disabilitato dal rinnovo automatico.';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = 'Il numero di tentativi e di fallimenti di elaborazione di un conto di pagamento prima che tale conto venga disabilitato dall\'addebito automatico.';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = 'Il numero di giorni da attendere dopo la scadenza di una fattura per un servizio prima di sospendere il servizio.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = 'Il numero di giorni prima della scadenza di una fattura per addebitare automaticamente il conto di pagamento predefinito del cliente (se il cliente è configurato per l\'addebito automatico).';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = 'La percentuale di deposito iniziale predefinita per un preventivo.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = 'Il numero di giorni dopo la scadenza di un preventivo per impostarlo come morto.';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = 'Il numero di giorni dopo l\'emissione di un preventivo per impostarlo come scaduto.';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = 'Il numero di giorni prima che un servizio o una fattura ricorrente si rinnovi per generare una fattura.';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = 'La quantità rappresenta il numero massimo di volte in cui il coupon può essere utilizzato prima della sua scadenza.';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = 'I termini devono essere inseriti come elenco CSV (ad esempio, "1,3,4" significa 1 giorno, 3 giorni e 4 giorni se inseriti nella riga "Giorno").';
$lang['AdminCompanyBilling.!error.extension_zlib'] = 'L\'estensione Zlib è necessaria per la compressione della fattura.';
$lang['AdminCompanyBilling.!error.minimum.format'] = 'La tariffa L\'importo minimo deve essere un numero.';
$lang['AdminCompanyBilling.!error.amount.format'] = 'L\'importo della tassa deve essere un numero.';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = 'Il valore di incremento della quotazione deve essere un numero.';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = 'Il valore di inizio quotazione deve essere un numero.';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = 'Il valore di incremento della fattura deve essere un numero.';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = 'Il valore di inizio fattura deve essere un numero.';
$lang['AdminCompanyBilling.!success.customization_updated'] = 'Le impostazioni di personalizzazione della fattura sono state aggiornate con successo!';
$lang['AdminCompanyBilling.!success.latefees_updated'] = 'Le impostazioni delle Tasse di mora sono state aggiornate con successo!';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = 'Le impostazioni di consegna della fattura sono state aggiornate con successo!';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = 'Le impostazioni del Tipo di pagamento accettato sono state aggiornate con successo!';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = 'Il coupon è stato cancellato con successo!';
$lang['AdminCompanyBilling.!success.coupon_updated'] = 'Il coupon è stato aggiornato con successo!';
$lang['AdminCompanyBilling.!success.coupon_created'] = 'Il coupon è stato creato con successo!';
$lang['AdminCompanyBilling.!success.notices_updated'] = 'Gli avvisi sono stati aggiornati con successo!';
$lang['AdminCompanyBilling.!success.invoices_updated'] = 'Le impostazioni di Fattura e Addebito sono state aggiornate con successo!';
$lang['AdminCompanyBilling.invoices.field.second_attempt_spacing'] = 'Spaziatura del 2° tentativo';
$lang['AdminCompanyBilling.invoices.field.second_attempt_threshold'] = 'Soglia di spaziatura del 2° tentativo';
$lang['AdminCompanyBilling.invoices.field.first_attempt_spacing'] = '1° tentativo Spaziatura';
$lang['AdminCompanyBilling.invoices.field.first_attempt_threshold'] = 'Soglia di spaziatura del 1° tentativo';
$lang['AdminCompanyBilling.invoices.field.attempts'] = 'Tentativi';
$lang['AdminCompanyBilling.invoices.field.type'] = 'Tipo';
$lang['AdminCompanyBilling.invoices.field.service_actions'] = 'Azioni di servizio';
$lang['AdminCompanyBilling.invoices.field.service_provisioning_attempts'] = 'Tentativi di fornitura del servizio';
$lang['AdminCompanyBilling.!tooltip.second_attempt_threshold'] = 'Il numero di azioni di servizio da tentare prima di ritardare il tentativo successivo della quantità specificata dall\'impostazione della spaziatura del secondo tentativo.';
$lang['AdminCompanyBilling.!tooltip.first_attempt_threshold'] = 'Il numero di azioni di servizio da tentare prima di ritardare il tentativo successivo della quantità specificata dall\'impostazione della spaziatura del primo tentativo.';
$lang['AdminCompanyBilling.!tooltip.service_attempts'] = 'Il numero di tentativi e di fallimenti da elaborare per un\'azione di servizio prima che tale azione di servizio venga disabilitata dal completamento automatico.';

