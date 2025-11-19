<?php
/**
 * Client Main
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientMain.getcurrencyamounts.text_total_credits'] = 'Kredity:';
$lang['Clientmain.invoicemethod.field_methodsubmit'] = 'Aktualizace';
$lang['ClientMain.invoicemethod.text_invoice_method'] = 'Způsob fakturace je způsob, jakým vám doručujeme nové faktury.';
$lang['ClientMain.invoicemethod.boxtitle_inv_method'] = 'Způsob fakturace';
$lang['ClientMain.invoicemethod.page_title'] = 'Klient #%1$s Způsob fakturace';
$lang['ClientMain.edit.field_editsubmit'] = 'Aktualizace mých informací';
$lang['ClientMain.edit.field_otp'] = 'Jednorázové heslo (zobrazené v autentizačním nástroji)';
$lang['ClientMain.edit.text_windows'] = 'Windows';
$lang['ClientMain.edit.text_ios'] = 'iOS';
$lang['ClientMain.edit.text_android'] = 'Android';
$lang['ClientMain.edit.two_factor_step3'] = 'Potvrďte své jednorázové heslo a klikněte na tlačítko "Aktualizovat mé údaje". Při příštím přihlášení budete muset zadat své jednorázové heslo.';
$lang['ClientMain.edit.two_factor_step2'] = 'Otevřete aplikaci a naskenujte níže uvedený QR kód, případně zadejte jeden z následujících klíčů:<br/>Hex - %1$s<br/>Base32 - %2$s';
$lang['ClientMain.edit.two_factor_step1'] = 'Stáhněte si autentizátor pro své zařízení:';
$lang['ClientMain.edit.two_factor_instructions'] = 'Chcete-li používat dvoufaktorové ověřování, potřebujete token TOTP. Pokud máte mobilní zařízení se systémem Android, iOS nebo Windows, může váš telefon sloužit jako token a poskytovat potřebné jednorázové heslo.';
$lang['ClientMain.edit.two_factor_desc'] = 'Dvoufaktorové ověřování je bezpečnostní funkce, při které se k účtu přihlašujete pomocí dvou identifikačních prostředků. Pokud je tato funkce povolena, přihlásíte se ke svému účtu pomocí uživatelského jména a hesla a poté budete vyzváni k zadání jednorázového hesla.';
$lang['ClientMain.edit.field_two_factor_mode'] = 'Povolení dvoufaktorového ověřování';
$lang['ClientMain.edit.field_current_password'] = 'Aktuální heslo';
$lang['ClientMain.edit.field_confirm_password'] = 'Potvrzení hesla';
$lang['ClientMain.edit.field_new_password'] = 'Nové heslo';
$lang['ClientMain.edit.field_username'] = 'Uživatelské jméno';
$lang['ClientMain.edit.heading_authentication'] = 'Ověřování';
$lang['ClientMain.edit.field_receive_email_marketing'] = 'Chci dostávat e-maily o nových produktech, službách a nabídkách.';
$lang['ClientMain.edit.field_language'] = 'Jazyk';
$lang['ClientMain.edit.heading_settings'] = 'Další nastavení';
$lang['ClientMain.edit.field_invoiceaddress'] = 'Adresa faktur';
$lang['ClientMain.edit.field_default_currency'] = 'Preferovaná měna';
$lang['ClientMain.edit.field_taxid'] = 'Daňové identifikační číslo/VATIN';
$lang['ClientMain.edit.heading_billing'] = 'Fakturační údaje';
$lang['ClientMain.edit.boxtitle_edit'] = 'Upravit mé informace';
$lang['ClientMain.edit.page_title'] = 'Klient #%1$s Upravit mé informace';
$lang['ClientMain.edit.heading_contact'] = 'Kontaktní informace';
$lang['ClientMain.myinfo.link_editclient'] = 'Změna';
$lang['ClientMain.myinfo.setting_change'] = 'Změnit to?';
$lang['ClientMain.myinfo.field_managed_accounts_search'] = 'Vyhledávání (společnost, e-mail nebo jméno)';
$lang['ClientMain.myinfo.managed_accounts'] = 'Spravované účty';
$lang['ClientMain.myinfo.link_addcontact'] = 'Přidat kontakt';
$lang['ClientMain.myinfo.contacts'] = 'Kontakty';
$lang['ClientMain.myinfo.number'] = '(%1$s %2$s)';
$lang['ClientMain.myinfo.setting_autodebit_ach_days'] = 'Váš účet %1$s, který končí za x%2$s %3$s dní před splatností, zaúčtujeme.';
$lang['ClientMain.myinfo.setting_autodebit_cc_days'] = 'Zaúčtujeme vám %1$s končící za x%2$s %3$s dní před splatností.';
$lang['ClientMain.myinfo.setting_autodebit_ach_one_day'] = 'Váš účet %1$s končící na x%2$s zaúčtujeme den před splatností.';
$lang['ClientMain.myinfo.setting_autodebit_cc_one_day'] = 'Den před splatností platby vám zaúčtujeme částku %1$s končící na x%2$s.';
$lang['ClientMain.myinfo.setting_autodebit_ach_zero_days'] = 'V den splatnosti platby zaúčtujeme částku z vašeho účtu %1$s končícího na x%2$s.';
$lang['ClientMain.myinfo.setting_autodebit_cc_zero_days'] = 'V den splatnosti platby vám zaúčtujeme částku %1$s končící na x%2$s.';
$lang['ClientMain.myinfo.setting_autodebit_enabled'] = 'Váš účet je nastaven na automatické platby.';
$lang['ClientMain.myinfo.setting_autodebit_disabled'] = 'Váš účet není nastaven na automatické platby.';
$lang['ClientMain.myinfo.setting_invoices'] = 'V současné době přijímáte faktury od %1$s.';
$lang['ClientMain.myinfo.client_id'] = 'Klient #%1$s';
$lang['ClientMain.myinfo.page_title'] = 'Klient #%1$s';
$lang['ClientMain.index.page_title'] = 'Klient #%1$s';
$lang['ClientMain.!tooltip.invoice_method_postalmethods'] = 'Faktury automaticky vytiskneme a odešleme na adresu, kterou máme v souboru.';
$lang['ClientMain.!tooltip.invoice_method_interfax'] = 'Faktury automaticky odfaxujeme na faxové číslo, které máme v souboru. Pokud zvolíte tuto možnost, ujistěte se, že máme v souboru platné faxové číslo.';
$lang['ClientMain.!tooltip.invoice_method_paper'] = 'Faktury vytiskneme a zašleme na adresu, kterou máme v souboru.';
$lang['ClientMain.!tooltip.invoice_method_email'] = 'Faktury budou zaslány e-mailem na adresu, kterou máme v souboru.';
$lang['ClientMain.!info.no_managed_accounts'] = 'Neexistují žádné účty, které byste mohli spravovat.';
$lang['ClientMain.!info.no_contacts'] = 'Nejsou k dispozici žádné další kontakty.';
$lang['ClientMain.!info.email_pending_verification_button'] = 'Opětovné odeslání ověřovacího e-mailu';
$lang['ClientMain.!info.email_pending_verification'] = 'Vaše e-mailová adresa je v současné době neověřená. Ověřovací e-mail byl odeslán na adresu %1$s.';
$lang['ClientMain.!info.additional_services'] = '...a %1$s doplňkových služeb.';
$lang['ClientMain.!info.additional_service'] = '...a 1 další služba.';
$lang['ClientMain.!info.service_name'] = '%1$s - %2$s';
$lang['ClientMain.!info.service_in_review'] = 'Následující služby čekají na přezkoumání ze strany zaměstnanců. Po schválení budou aktivovány:';
$lang['ClientMain.!info.invoice_due_other_currencies'] = 'Máte zůstatek i v jiných měnách.';
$lang['ClientMain.!info.invoice_due_past_due_text'] = 'Váš účet má zůstatek ve výši %1$s, z toho %2$s je po splatnosti. Prosíme, proveďte platbu v nejbližším možném termínu.';
$lang['ClientMain.!info.invoice_due_text'] = 'Na vašem účtu je zůstatek ve výši %1$s. Prosíme, proveďte platbu v nejbližším možném termínu.';
$lang['ClientMain.!info.invoice_past_due_button'] = 'Platba po splatnosti';
$lang['ClientMain.!info.invoice_due_button'] = 'Provést platbu';
$lang['ClientMain.!info.invoice_due_title'] = 'Vítej zpět, %1$s!';
$lang['ClientMain.!success.invoice_method_updated'] = 'Vaše metoda fakturace byla úspěšně aktualizována. Všechny budoucí faktury vám budou doručeny prostřednictvím %1$s.';
$lang['ClientMain.!success.client_updated'] = 'Informace o vašem účtu byly úspěšně aktualizovány.';
$lang['ClientMain.edit.field_recovery_email'] = 'E-mail pro obnovení (volitelný)';
$lang['ClientMain.edit.tooltip_confirm_password'] = 'Vyžaduje se pro povolení dvoufaktorového ověřování nebo aktualizaci hesla.';
$lang['ClientMain.edit.heading_two_factor_authentication'] = 'Dvoufaktorové ověřování';
$lang['ClientMain.getcurrencyamounts.link_addcredits'] = 'Přidat kredity';

