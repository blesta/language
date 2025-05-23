<?php
/**
 * Admin Departments
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminDepartments.!success.department_created'] = 'Afdelingen %1$s blev oprettet med succes.';
$lang['AdminDepartments.!success.department_updated'] = 'Afdelingen %1$s blev opdateret med succes.';
$lang['AdminDepartments.!success.department_deleted'] = 'Afdelingen %1$s blev slettet med succes.';
$lang['AdminDepartments.index.page_title'] = 'Support Manager > Afdelinger';
$lang['AdminDepartments.add.page_title'] = 'Support Manager > Afdelinger > Tilføj afdeling';
$lang['AdminDepartments.edit.page_title'] = 'Support Manager > Afdelinger > Rediger afdeling';
$lang['AdminDepartments.index.categorylink_adddepartment'] = 'Tilføj afdeling';
$lang['AdminDepartments.index.boxtitle_departments'] = 'Afdelinger';
$lang['AdminDepartments.index.heading_name'] = 'Navn';
$lang['AdminDepartments.index.heading_description'] = 'Beskrivelse';
$lang['AdminDepartments.index.heading_email'] = 'E-mail';
$lang['AdminDepartments.index.heading_assigned_staff'] = 'Tildelt personale';
$lang['AdminDepartments.index.heading_default_priority'] = 'Standardprioritet';
$lang['AdminDepartments.index.heading_options'] = 'Valgmuligheder';
$lang['AdminDepartments.index.option_edit'] = 'Rediger';
$lang['AdminDepartments.index.option_delete'] = 'Slet';
$lang['AdminDepartments.index.confirm_delete'] = 'Afdelinger, der har fået tildelt billetter, kan ikke slettes, før alle billetter er blevet tildelt en anden afdeling. Er du sikker på, at du vil slette denne afdeling?';
$lang['AdminDepartments.index.no_results'] = 'Der er ingen afdelinger.';
$lang['AdminDepartments.assigned_staff.heading_assigned_staff'] = 'Tildelt personale';
$lang['AdminDepartments.assigned_staff.heading_staff'] = 'Personale';
$lang['AdminDepartments.assigned_staff.no_results'] = 'Der er intet personale tilknyttet denne afdeling.';
$lang['AdminDepartments.!tooltip.piping_config'] = 'Indstil din piping-sti som vist, men sørg for at bruge den korrekte sti til PHP på din server. Sørg for, at pipe.php er eksekverbar. Det kan også være nødvendigt at redigere pipe.php for at inkludere en hashbang på linje 1, der ser nogenlunde sådan ud: #!/usr/bin/php';
$lang['AdminDepartments.!tooltip.close_ticket_interval'] = 'Alle tickets med en anden status end %1$s, hvis sidste svar er fra en medarbejder, vil automatisk blive lukket, hvis der ikke er kommet svar inden for den valgte tidsperiode.';
$lang['AdminDepartments.!tooltip.delete_ticket_interval'] = 'Alle billetter med status %1$s slettes automatisk, når de har været i denne status i det valgte tidsrum.';
$lang['AdminDepartments.!tooltip.reminder_ticket_interval'] = 'For alle billetter med en anden status end %1$s vil der blive sendt en påmindelse til den anden part, hvis der ikke er kommet svar inden for den valgte tidsperiode.';
$lang['AdminDepartments.!tooltip.send_ticket_received'] = 'Hvis du fjerner markeringen i dette felt, vil nye tickets, der oprettes for denne afdeling (via e-mail eller klient), ikke sende en svarmeddelelse til klienten eller personalet via henholdsvis Ticket Received e-mail eller Staff Ticket Updated e-mail.';
$lang['AdminDepartments.!tooltip.automatic_transition'] = 'Ændrer status til %1$s, når en medarbejder svarer.';
$lang['AdminDepartments.!tooltip.include_attachments'] = 'Mailservere har begrænsninger på vedhæftningsstørrelser og filtyper. For at mindske risikoen for, at e-mailen bliver afvist, bedes du inkludere begrænsninger for vedhæftningstype og -størrelse. Brug tagget {ticket.reply_has_attachments} i ticket notices for at være sikker på, at klienten er opmærksom på vedhæftede filer, der ikke blev inkluderet.';
$lang['AdminDepartments.!tooltip.attachment_types'] = 'Liste over understøttede udvidelser adskilt af komma (f.eks. zip,jpg,png).';
$lang['AdminDepartments.!tooltip.max_attachment_size'] = 'Maksimal størrelse på den vedhæftede fil, der skal inkluderes, i MB.';
$lang['AdminDepartments.!tooltip.client_add'] = 'Om klienten kan indsende feltet eller ej. Hvis false, vil klienten kun kunne læse feltet.';
$lang['AdminDepartments.!tooltip.auto_delete'] = 'Hvis billetten lukkes, slettes feltdataene automatisk. Dataene vil ikke længere være synlige for personalet.';
$lang['AdminDepartments.!text.add_response'] = 'Indstil en foruddefineret respons for automatisk lukning';
$lang['AdminDepartments.!text.no_selected_response'] = 'Der er ikke valgt automatisk lukning.';
$lang['AdminDepartments.!text.remove_response'] = 'Fjern';
$lang['AdminDepartments.add.boxtitle_adddepartment'] = 'Tilføj afdeling';
$lang['AdminDepartments.add.tab_general'] = 'Generelt';
$lang['AdminDepartments.add.tab_custom_fields'] = 'Brugerdefinerede felter';
$lang['AdminDepartments.add.field_name'] = 'Navn';
$lang['AdminDepartments.add.field_description'] = 'Beskrivelse';
$lang['AdminDepartments.add.field_clients_only'] = 'Tillad kun kunder at åbne eller svare på tickets';
$lang['AdminDepartments.add.field_require_captcha'] = 'Kræv menneskelig verifikation for uautoriserede brugere';
$lang['AdminDepartments.add.field_email'] = 'E-mail';
$lang['AdminDepartments.add.field_override_from_email'] = 'Tilsidesæt den fra-adresse, der er angivet i e-mailskabeloner, med den e-mailadresse, der er angivet for denne afdeling.';
$lang['AdminDepartments.add.field_send_ticket_received'] = 'Send e-mails med autosvar til nye billetter';
$lang['AdminDepartments.add.field_automatic_transition'] = 'Automatisk skift af ticket-status ved admin-svar';
$lang['AdminDepartments.add.field_method'] = 'Håndtering af e-mails';
$lang['AdminDepartments.add.field_piping_config'] = 'Konfiguration af rør';
$lang['AdminDepartments.add.field_default_priority'] = 'Standardprioritet';
$lang['AdminDepartments.add.field_include_attachments'] = 'Inkluder understøttede vedhæftede filer i billetnotifikationer';
$lang['AdminDepartments.add.field_attachment_types'] = 'Understøttede vedhæftningstyper';
$lang['AdminDepartments.add.field_max_attachment_size'] = 'Maks. fastgørelsesstørrelse';
$lang['AdminDepartments.add.field_security'] = 'Sikkerhed';
$lang['AdminDepartments.add.field_box_name'] = 'Boks Navn';
$lang['AdminDepartments.add.field_mark_messages'] = 'Markér meddelelser som';
$lang['AdminDepartments.add.field_host'] = 'Vært';
$lang['AdminDepartments.add.field_user'] = 'Bruger';
$lang['AdminDepartments.add.field_pass'] = 'Pass';
$lang['AdminDepartments.add.field_port'] = 'Havn';
$lang['AdminDepartments.add.field_close_ticket_interval'] = 'Luk automatisk billetter';
$lang['AdminDepartments.add.field_delete_ticket_interval'] = 'Slet billetter automatisk';
$lang['AdminDepartments.add.field_reminder_ticket_interval'] = 'Send automatisk påmindelser om billetter';
$lang['AdminDepartments.add.field_reminder_ticket_status'] = 'Send påmindelser til billetter med status';
$lang['AdminDepartments.add.field_reminder_ticket_priority'] = 'Send påmindelser til billetter med prioritet';
$lang['AdminDepartments.add.field_response_id'] = 'Automatisk lukning af billetrespons';
$lang['AdminDepartments.add.field_status'] = 'Status';
$lang['AdminDepartments.add.field_addsubmit'] = 'Tilføj afdeling';
$lang['AdminDepartments.add.field_add_field'] = 'Tilføj felt';
$lang['AdminDepartments.add.heading_label'] = 'Etiket';
$lang['AdminDepartments.add.heading_description'] = 'Beskrivelse';
$lang['AdminDepartments.add.heading_visibility'] = 'Synlighed';
$lang['AdminDepartments.add.heading_type'] = 'Type';
$lang['AdminDepartments.add.heading_min'] = 'Min';
$lang['AdminDepartments.add.heading_max'] = 'Max';
$lang['AdminDepartments.add.heading_step'] = 'Trin';
$lang['AdminDepartments.add.heading_client_add'] = 'Kunden kan tilføje';
$lang['AdminDepartments.add.heading_encrypted'] = 'Krypteret';
$lang['AdminDepartments.add.heading_auto_delete'] = 'Automatisk sletning';
$lang['AdminDepartments.add.heading_options'] = 'Valgmuligheder';
$lang['AdminDepartments.add.heading_name'] = 'Navn';
$lang['AdminDepartments.add.heading_value'] = 'Værdi';
$lang['AdminDepartments.add.heading_default'] = 'Standard';
$lang['AdminDepartments.add.text_delete'] = 'Slet';
$lang['AdminDepartments.add.text_add'] = 'Tilføj';
$lang['AdminDepartments.edit.boxtitle_adddepartment'] = 'Rediger afdeling';
$lang['AdminDepartments.edit.tab_general'] = 'Generelt';
$lang['AdminDepartments.edit.tab_custom_fields'] = 'Brugerdefinerede felter';
$lang['AdminDepartments.edit.field_name'] = 'Navn';
$lang['AdminDepartments.edit.field_description'] = 'Beskrivelse';
$lang['AdminDepartments.edit.field_clients_only'] = 'Tillad kun kunder at åbne eller svare på tickets';
$lang['AdminDepartments.edit.field_require_captcha'] = 'Kræv menneskelig verifikation for uautoriserede brugere';
$lang['AdminDepartments.edit.field_email'] = 'E-mail';
$lang['AdminDepartments.edit.field_override_from_email'] = 'Tilsidesæt den fra-adresse, der er angivet i e-mailskabeloner, med den e-mailadresse, der er angivet for denne afdeling.';
$lang['AdminDepartments.edit.field_send_ticket_received'] = 'Send e-mails med autosvar til nye billetter';
$lang['AdminDepartments.edit.field_automatic_transition'] = 'Automatisk skift af ticket-status ved admin-svar';
$lang['AdminDepartments.edit.field_method'] = 'Håndtering af e-mails';
$lang['AdminDepartments.edit.field_piping_config'] = 'Konfiguration af rør';
$lang['AdminDepartments.edit.field_default_priority'] = 'Standardprioritet';
$lang['AdminDepartments.edit.field_include_attachments'] = 'Inkluder understøttede vedhæftede filer i billetnotifikationer';
$lang['AdminDepartments.edit.field_attachment_types'] = 'Understøttede vedhæftningstyper';
$lang['AdminDepartments.edit.field_max_attachment_size'] = 'Maks. fastgørelsesstørrelse';
$lang['AdminDepartments.edit.field_security'] = 'Sikkerhed';
$lang['AdminDepartments.edit.field_box_name'] = 'Boks Navn';
$lang['AdminDepartments.edit.field_mark_messages'] = 'Markér meddelelser som';
$lang['AdminDepartments.edit.field_host'] = 'Vært';
$lang['AdminDepartments.edit.field_user'] = 'Bruger';
$lang['AdminDepartments.edit.field_pass'] = 'Pass';
$lang['AdminDepartments.edit.field_port'] = 'Havn';
$lang['AdminDepartments.edit.field_close_ticket_interval'] = 'Luk automatisk billetter';
$lang['AdminDepartments.edit.field_delete_ticket_interval'] = 'Slet automatisk billetter';
$lang['AdminDepartments.edit.field_reminder_ticket_interval'] = 'Send automatisk påmindelser om billetter';
$lang['AdminDepartments.edit.field_reminder_ticket_status'] = 'Send påmindelser til billetter med status';
$lang['AdminDepartments.edit.field_reminder_ticket_priority'] = 'Send påmindelser til billetter med prioritet';
$lang['AdminDepartments.edit.field_response_id'] = 'Automatisk lukning af billetrespons';
$lang['AdminDepartments.edit.field_status'] = 'Status';
$lang['AdminDepartments.edit.field_addsubmit'] = 'Rediger afdeling';
$lang['AdminDepartments.edit.field_add_field'] = 'Tilføj felt';
$lang['AdminDepartments.edit.confirm_field_remove'] = 'Er du sikker på, at du vil slette dette brugerdefinerede felt? Alle data, der er knyttet til dette felt, vil blive slettet. Hvis du vil skjule dette felt og bevare dataene, skal du ændre dets Synlighed til Kun personale.';
$lang['AdminDepartments.edit.no_results'] = 'Der er ingen brugerdefinerede felter i denne afdeling.';
$lang['AdminDepartments.edit.heading_label'] = 'Etiket';
$lang['AdminDepartments.edit.heading_description'] = 'Beskrivelse';
$lang['AdminDepartments.edit.heading_visibility'] = 'Synlighed';
$lang['AdminDepartments.edit.heading_type'] = 'Type';
$lang['AdminDepartments.edit.heading_min'] = 'Min';
$lang['AdminDepartments.edit.heading_max'] = 'Max';
$lang['AdminDepartments.edit.heading_step'] = 'Trin';
$lang['AdminDepartments.edit.heading_client_add'] = 'Kunden kan tilføje';
$lang['AdminDepartments.edit.heading_encrypted'] = 'Krypteret';
$lang['AdminDepartments.edit.heading_auto_delete'] = 'Automatisk sletning';
$lang['AdminDepartments.edit.heading_options'] = 'Valgmuligheder';
$lang['AdminDepartments.edit.heading_name'] = 'Navn';
$lang['AdminDepartments.edit.heading_value'] = 'Værdi';
$lang['AdminDepartments.edit.heading_default'] = 'Standard';
$lang['AdminDepartments.edit.text_delete'] = 'Slet';
$lang['AdminDepartments.edit.text_add'] = 'Tilføj';
$lang['AdminDepartments.edit.field_priorities'] = 'Tilgængelige prioriteter';
$lang['AdminDepartments.add.field_priorities'] = 'Tilgængelige prioriteter';
$lang['AdminDepartments.edit.field_force_import'] = 'Force Import';
$lang['AdminDepartments.add.field_force_import'] = 'Force Import';
$lang['AdminDepartments.!success.department_imported'] = 'Afdelingen %1$s blev importeret med succes.';

