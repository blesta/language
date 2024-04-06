<?php
/**
 * Client Services
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientServices.!error.password_mismatch'] = 'Adgangskoden stemmer ikke overens med din log-in-adgangskode.';
$lang['ClientServices.!error.invoices_manage_options'] = 'De konfigurerbare indstillinger kan ikke ændres, før alle fakturaer, der indeholder denne service, er blevet betalt.';
$lang['ClientServices.!error.invoices_change_term'] = 'Løbetiden kan ikke ændres, før alle fakturaer, der indeholder denne service, er betalt.';
$lang['ClientServices.!error.invoices_renew_service'] = 'Tjenesten kan ikke fornyes, før alle fakturaer, der indeholder denne tjeneste, er betalt.';
$lang['ClientServices.!error.invoices_upgrade_package'] = 'Pakken kan ikke ændres, før alle fakturaer, der indeholder denne service, er betalt.';
$lang['ClientServices.!error.tab_unavailable'] = 'Den sektion er ikke tilgængelig, mens tjenesten er i en %1$s-tilstand.';
$lang['ClientServices.!warning.invoices_upgrade_package'] = 'Pakker kan ikke ændres, før alle fakturaer for denne service er betalt.';
$lang['ClientServices.!warning.invoices_change_term'] = 'Løbetiden kan ikke ændres, før alle fakturaer for denne service er betalt.';
$lang['ClientServices.!warning.invoices_manage_options'] = 'Konfigurerbare indstillinger kan ikke ændres, før alle fakturaer for denne service er betalt.';
$lang['ClientServices.!notice.queued_service_change'] = 'Denne service har afventende ændringer. Yderligere ændringer kan ikke foretages, før de aktuelle afventende ændringer er blevet behandlet.';
$lang['ClientServices.!notice.client_limit'] = 'Kan ikke tildele pakke. Du har allerede nået servicegrænsen for målpakken.';
$lang['ClientServices.!success.manage.tab_updated'] = 'Dataene blev opdateret med succes.';
$lang['ClientServices.!success.service_canceled'] = 'Tjenesten blev annulleret med succes.';
$lang['ClientServices.!success.service_schedule_canceled'] = 'Tjenesten er planlagt til at blive aflyst ved udgangen af dens løbetid.';
$lang['ClientServices.!success.service_not_canceled'] = 'Tjenesten vil ikke blive aflyst.';
$lang['ClientServices.!success.service_term_updated'] = 'Serviceperioden er blevet opdateret og vil træde i kraft på den næste fornyelsesdato.';
$lang['ClientServices.!success.addon_service_created'] = 'Addon-tjenesten er blevet oprettet. Den vil dog først blive aktiveret, når betalingen er modtaget.';
$lang['ClientServices.!success.service_package_updated'] = 'Servicepakken er blevet opdateret.';
$lang['ClientServices.!success.config_options_updated'] = 'De konfigurerbare indstillinger blev opdateret med succes.';
$lang['ClientServices.!success.service_queue_pay'] = 'Serviceopdateringen er blevet sat i kø for at blive behandlet. Den vil dog ikke blive behandlet, før der er modtaget en betaling.';
$lang['ClientServices.!success.service_queue'] = 'Serviceopdateringen er blevet sat i kø og vil blive behandlet inden længe.';
$lang['ClientServices.!success.service_renewed'] = 'Tjenesten blev fornyet med succes.';
$lang['ClientServices.index.page_title'] = 'Kunde #%1$s tjenester';
$lang['ClientServices.index.boxtitle_services'] = 'Tjenester';
$lang['ClientServices.index.category_active'] = 'Aktiv';
$lang['ClientServices.index.category_pending'] = 'Afventer';
$lang['ClientServices.index.category_suspended'] = 'Suspenderet';
$lang['ClientServices.index.category_canceled'] = 'Aflyst';
$lang['ClientServices.index.heading_addons'] = 'Tilføjelser';
$lang['ClientServices.index.heading_status'] = 'Status';
$lang['ClientServices.index.heading_package'] = 'Pakke';
$lang['ClientServices.index.heading_label'] = 'Etiket';
$lang['ClientServices.index.heading_term'] = 'Betegnelse';
$lang['ClientServices.index.heading_datecreated'] = 'Oprettet dato';
$lang['ClientServices.index.heading_daterenews'] = 'Dato Fornyer';
$lang['ClientServices.index.heading_datesuspended'] = 'Dato Suspenderet';
$lang['ClientServices.index.heading_datecanceled'] = 'Dato Annulleret';
$lang['ClientServices.index.heading_options'] = 'Valgmuligheder';
$lang['ClientServices.index.option_manage'] = 'Administrer';
$lang['ClientServices.index.recurring_term'] = '%1$s %2$s @ %3$s';
$lang['ClientServices.index.text_never'] = 'Aldrig';
$lang['ClientServices.index.no_results'] = 'Du har ingen %1$s-tjenester.';
$lang['ClientServices.serviceinfo.no_results'] = 'Denne tjeneste har ingen detaljer.';
$lang['ClientServices.serviceinfo.cancellation_reason'] = 'Årsag til aflysning: %1$s';
$lang['ClientServices.manage.page_title'] = 'Klient #%1$s Administrer service';
$lang['ClientServices.manage.boxtitle_manage'] = 'Administrer %1$s - %2$s';
$lang['ClientServices.manage.tab_service_info'] = 'Information';
$lang['ClientServices.manage.tab_addons'] = 'Tilføjelser';
$lang['ClientServices.manage.tab_service_return'] = 'Tilbage til instrumentbrættet';
$lang['ClientServices.manage.button_active'] = 'Aktiv';
$lang['ClientServices.manage.button_pending'] = 'Afventer';
$lang['ClientServices.manage.button_suspended'] = 'Suspenderet';
$lang['ClientServices.manage.button_in_review'] = 'En gennemgang';
$lang['ClientServices.manage.button_canceled'] = 'Aflyst';
$lang['ClientServices.manage.button_renew'] = 'Forny nu';
$lang['ClientServices.manage.button_cancel'] = 'Annuller indstillinger';
$lang['ClientServices.manage.button_change_service_term'] = 'Skift periode';
$lang['ClientServices.manage.button_change_service_package'] = 'Forandringspakke';
$lang['ClientServices.manage.button_config_options'] = 'Ændring af konfigurerbare indstillinger';
$lang['ClientServices.manage.heading_package'] = 'Pakke';
$lang['ClientServices.manage.heading_date_added'] = 'Dato for oprettelse';
$lang['ClientServices.manage.heading_package_term'] = 'Faktureringscyklus';
$lang['ClientServices.manage.heading_service_name'] = 'Etiket';
$lang['ClientServices.manage.heading_date_renews'] = 'Fornyelsesdato';
$lang['ClientServices.manage.heading_date_next_invoice'] = 'Næste faktura';
$lang['ClientServices.manage.heading_price_initial'] = 'Beløb';
$lang['ClientServices.manage.heading_price'] = 'Tilbagevendende beløb';
$lang['ClientServices.manage.heading_setup_fee'] = 'Opsætningsgebyr';
$lang['ClientServices.manage.heading_price_onetime'] = 'Beløb';
$lang['ClientServices.manage.heading_recurring_coupon'] = 'Tilbagevendende kupon';
$lang['ClientServices.manage.text_coupon_percent'] = '%1$s (%2$s%%)';
$lang['ClientServices.manage.text_coupon_amount'] = '%1$s (%2$s)';
$lang['ClientServices.manage.text_price'] = '%1$sx %2$s';
$lang['ClientServices.manage.text_date_never'] = 'Aldrig';
$lang['ClientServices.manage.text_date_suspended'] = 'Denne tjeneste blev suspenderet den %1$s.';
$lang['ClientServices.manage.text_date_canceled'] = 'Denne tjeneste blev annulleret den %1$s.';
$lang['ClientServices.manage.text_date_to_cancel'] = 'Denne service er planlagt til at blive annulleret den %1$s.';
$lang['ClientServices.manage.heading_options'] = 'Handlinger';
$lang['ClientServices.manage.heading_config_options'] = 'Konfigurerbare muligheder';
$lang['ClientServices.renew.page_title'] = 'Klient #%1$s Forny service';
$lang['ClientServices.renew.heading_renew'] = 'Forny service';
$lang['ClientServices.renew.field_pricing_id'] = 'Fornyelsesperiode';
$lang['ClientServices.renew.field_password'] = 'Log ind med adgangskode for at bekræfte ændringer';
$lang['ClientServices.renew.field_renew_cancel'] = 'Annuller, forny ikke';
$lang['ClientServices.renew.field_renew_submit'] = 'Forny';
$lang['ClientServices.renew.confirm_renew'] = 'Ved at klikke på "Gem" genereres en ny faktura for fornyelse af tjenesten for perioden "%1$s", som vil dække tjenesten indtil "%2$s", ved at klikke på "Gem" omdirigeres du til betalingssiden for at betale den genererede faktura.';
$lang['ClientServices.cancel.page_title'] = 'Kunde #%1$s annullerer service';
$lang['ClientServices.cancel.heading_cancel'] = 'Annuller service';
$lang['ClientServices.cancel.field_term_date'] = 'Ved udgangen af perioden (%1$s)';
$lang['ClientServices.cancel.field_term'] = 'Ved udgangen af perioden';
$lang['ClientServices.cancel.field_now'] = 'Med det samme';
$lang['ClientServices.cancel.field_do_not'] = 'Aflys ikke';
$lang['ClientServices.cancel.field_cancellation_reason'] = 'Årsag til aflysning';
$lang['ClientServices.cancel.field_password'] = 'Log ind med adgangskode for at bekræfte ændringer';
$lang['ClientServices.cancel.field_cancel_cancel'] = 'Annuller, ændr ikke';
$lang['ClientServices.cancel.field_cancel_submit'] = 'Gem';
$lang['ClientServices.cancel.confirm_cancel'] = 'Er du sikker på, at du vil opsige denne service, når den udløber?';
$lang['ClientServices.cancel.confirm_cancel_now'] = 'Er du sikker på, at du vil annullere denne service?';
$lang['ClientServices.cancel.confirm_cancel_now_fee'] = 'Hvis du annullerer denne service med det samme, vil det medføre et annulleringsgebyr på %1$s.';
$lang['ClientServices.cancel.confirm_cancel_now_fee_tax'] = 'Hvis du annullerer denne service med det samme, opkræves et annulleringsgebyr på %1$s plus moms.';
$lang['ClientServices.changeterm.page_title'] = 'Klient #%1$s Ændringsperiode';
$lang['ClientServices.change_term.boxtitle'] = 'Skift betegnelse for %1$s - %2$s';
$lang['ClientServices.change_term.field_current_term'] = 'Nuværende periode';
$lang['ClientServices.change_term.field_pricing_id'] = 'Ny periode';
$lang['ClientServices.change_term.cancel'] = 'Annuller';
$lang['ClientServices.change_term.review'] = 'Anmeldelse';
$lang['ClientServices.get_package_terms.term'] = '%1$s %2$s - %3$s';
$lang['ClientServices.get_package_terms.term_recurring'] = '%1$s %2$s - %3$s (fornyes ved %4$s)';
$lang['ClientServices.get_package_terms.term_onetime'] = '%1$s - %2$s';
$lang['ClientServices.upgrade.page_title'] = 'Klient #%1$s Ændringspakke';
$lang['ClientServices.upgrade.boxtitle'] = 'Skift pakke fra %1$s - %2$s';
$lang['ClientServices.upgrade.btn_make_payment'] = 'Foretag en betaling';
$lang['ClientServices.upgrade.field_current_package'] = 'Nuværende pakke';
$lang['ClientServices.upgrade.field_pricing_id'] = 'Ny pakke';
$lang['ClientServices.upgrade.field_cancel'] = 'Annuller';
$lang['ClientServices.upgrade.field_submit'] = 'Anmeldelse';
$lang['ClientServices.upgrade.text_prorate'] = 'Hvis den nye pakke, du vælger, koster mere, vil du blive faktureret for den forholdsmæssige forskel.';
$lang['ClientServices.upgrade.current_package'] = '%1$s (%2$s %3$s - %4$s)';
$lang['ClientServices.upgrade.current_package_onetime'] = '%1$s (%2$s - %3$s)';
$lang['ClientServices.addons.page_title'] = 'Klient #%1$s Addons';
$lang['ClientServices.addons.boxtitle_addons'] = 'Tilføjelser til %1$s - %2$s';
$lang['ClientServices.addons.create_addon'] = 'Tilføj tilføjelse';
$lang['ClientServices.addons.no_results'] = 'Der er ingen addons knyttet til denne tjeneste.';
$lang['ClientServices.!error.addon_invalid'] = 'Vælg venligst en gyldig tilføjelse.';
$lang['ClientServices.addaddon.page_title'] = 'Klient #%1$s Tilføj tilføjelse';
$lang['ClientServices.addaddon.boxtitle_addons'] = 'Tilføj addon til %1$s - %2$s';
$lang['ClientServices.addaddon.header_add'] = 'Tilføjelser';
$lang['ClientServices.addaddon.term'] = '%1$s %2$s';
$lang['ClientServices.addaddon.term_price'] = '%1$s - %2$s';
$lang['ClientServices.addaddon.term_price_recurring'] = '%1$s - %2$s (fornyes ved %3$s)';
$lang['ClientServices.addaddon.term_price_setupfee'] = '%1$s - %2$s + %3$s opsætning';
$lang['ClientServices.addaddon.term_price_setupfee_recurring'] = '%1$s - %2$s + %3$s opsætning (fornyes ved %4$s)';
$lang['ClientServices.addaddon.submit_add'] = 'Opret';
$lang['ClientServices.getaddonoptions.field_module_group_id'] = 'Gruppe';
$lang['ClientServices.configure_addon.header_options'] = 'Konfigurerbare muligheder';
$lang['ClientServices.manageoptions.page_title'] = 'Klient #%1$s Administrer konfigurerbare indstillinger';
$lang['ClientServices.manageoptions.boxtitle_options'] = 'Administrer konfigurerbare indstillinger for %1$s - %2$s';
$lang['ClientServices.manageoptions.heading_current'] = 'Nuværende muligheder';
$lang['ClientServices.manageoptions.heading_new'] = 'Nye muligheder';
$lang['ClientServices.manageoptions.no_options'] = 'Der er ingen aktuelle konfigurerbare indstillinger, der kan opdateres.';
$lang['ClientServices.manageoptions.cancel'] = 'Annuller';
$lang['ClientServices.manageoptions.review'] = 'Anmeldelse';
$lang['ClientServices.review.page_title'] = 'Kunde #%1$s gennemgangstjeneste';
$lang['ClientServices.review.boxtitle_review'] = 'Gennemgå ændringer til %1$s - %2$s';
$lang['ClientServices.review.heading_current_service'] = 'Nuværende service';
$lang['ClientServices.review.heading_updated_service'] = 'Opdateret service';
$lang['ClientServices.review.heading_label'] = 'Mulighed';
$lang['ClientServices.review.heading_old_value'] = 'Nuværende værdi';
$lang['ClientServices.review.heading_new_value'] = 'Ny værdi';
$lang['ClientServices.review.value'] = '%1$s (%2$sx %3$s)';
$lang['ClientServices.review.value_setup_fee'] = '%1$s (%2$sx %3$s, %4$s Opsætningsgebyr)';
$lang['ClientServices.review.none'] = '';
$lang['ClientServices.review.cancel'] = 'Annuller';
$lang['ClientServices.review.update'] = 'Gem';
$lang['ClientServices.totals.subtotal'] = 'Subtotal:';
$lang['ClientServices.totals.total'] = 'I alt forfalder i dag:';
$lang['ClientServices.totals.total_recurring'] = 'I alt ved fornyelse:';
$lang['ClientServices.!tooltip.total_recurring'] = 'Den samlede pris ved fornyelse repræsenterer de samlede omkostninger for denne service og alle dens optioner, der forventes ved næste fornyelse.';
