<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.cs_cz
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'Nastavení umělé inteligence bylo úspěšně aktualizováno.';
$lang['AdminMain.!success.settings_updated'] = 'Nastavení bylo úspěšně aktualizováno.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPERIMENTÁLNÍ';
$lang['AdminMain.ai.boxtitle_settings'] = 'Nastavení umělé inteligence';
$lang['AdminMain.ai.button_configure_ai'] = 'Přejděte do Nastavení systémové umělé inteligence';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Přidání prohlášení o vyloučení odpovědnosti generovaného umělou inteligencí';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Připojit k automaticky generovaným odpovědím upozornění, že byly vytvořeny umělou inteligencí (doporučeno kvůli transparentnosti).';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Spouštěč analýzy AI';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Řídí, kdy se spustí analýza AI pro generování odpovědí a spouštění nástrojů.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Zvolte, kdy má umělá inteligence analyzovat tipy pro potenciální reakce a použití nástrojů. "Každá odpověď" analyzuje každou novou zprávu. "Ticket Opened" analyzuje pouze první otevření ticketu.';
$lang['AdminMain.ai.field_assistant_name'] = 'Zobrazovací jméno asistenta AI';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Pro použití výchozího názvu ponechte prázdné pole: "Support".';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Podpora';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Název zobrazený pro odpovědi generované umělou inteligencí ve vláknech tipů. Tím se asistent AI přizpůsobí vašemu týmu podpory.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Povolení automatických odpovědí na tipy s umělou inteligencí';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Umožněte umělé inteligenci automaticky odpovídat na tikety, pokud má vysokou míru jistoty ohledně odpovědi.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Práh spolehlivosti';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Vyšší práh = konzervativnější (méně automatických odpovědí, vyšší přesnost). Doporučeno: 70 % nebo vyšší.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'Umělá inteligence bude automaticky odpovídat na tikety pouze tehdy, když její úroveň důvěryhodnosti dosáhne nebo překročí tuto hranici. Vyšší hodnoty (90-100 %) jsou konzervativnější a bezpečnější. Nižší hodnoty (60-89 %) povedou k většímu počtu automatických odpovědí, ale s vyšším rizikem chyb.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Vlastní text prohlášení o vyloučení odpovědnosti';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Tento text bude připojen ke všem odpovědím na tipy generované umělou inteligencí.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Tato odpověď byla vytvořena s pomocí AI.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Přizpůsobení zprávy o vyloučení odpovědnosti připojené k odpovědím generovaným umělou inteligencí. Chcete-li použít výchozí zprávu, ponechte ji prázdnou.';
$lang['AdminMain.ai.field_enabled'] = 'Povolení funkcí AI pro Správce podpory';
$lang['AdminMain.ai.field_enabled_desc'] = 'Povolte v systému ticketů funkce využívající umělou inteligenci, včetně automatických odpovědí, shrnutí a nástrojů.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Maximální věk fronty (v hodinách)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Zahodit odpovědi AI ve frontě starší než tento počet hodin. Musí být mezi 1 a 8760 (1 rok). Výchozí hodnota je 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Odpovědi klientů ve frontě starší než tato hodnota budou cronem spíše zahozeny než zpracovány. Zabraňuje UI odpovídat na zastaralé tikety, pokud byl cron zakázán a došlo k nahromadění nevyřízených odpovědí.';
$lang['AdminMain.ai.field_max_tokens'] = 'Maximální počet žetonů';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Řídí maximální délku odpovědí generovaných umělou inteligencí. Výchozí hodnota: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Maximální počet tokenů (slov/částí slov), které může umělá inteligence vygenerovat v jedné odpovědi. Vyšší hodnoty umožňují delší odpovědi, ale spotřebovávají více zdrojů. Typický rozsah: 100-4000 pro většinu úloh.';
$lang['AdminMain.ai.field_model'] = 'Model umělé inteligence';
$lang['AdminMain.ai.field_model_desc'] = 'Tento model se použije pro všechny funkce AI ve Správci podpory.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Vyberte model AI, který se má používat speciálně pro funkce Správce podpory. Různé modely mají různé možnosti a ceny.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Přepsání maximálního počtu žetonů';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Výchozí nastavení systému: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Přepsání výchozího modelu AI';
$lang['AdminMain.ai.field_override_model_desc'] = 'Výchozí nastavení systému: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Přepínání teploty';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Výchozí nastavení systému: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Požadavek na lidskou kontrolu před odesláním';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Automaticky generované odpovědi se zobrazují v rámci tipu pro potřeby zaměstnanců (doporučeno).';
$lang['AdminMain.ai.field_restricted_departments'] = 'Omezení automatických odpovědí na oddělení';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Vyberte, která oddělení tipů mohou dostávat automatické odpovědi AI. Zrušením zaškrtnutí políčka vše povolíte všem oddělením.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Povolit automatické odpovědi pouze pro určitá oddělení tipů. Pro povolení všech oddělení ponechte zaškrtnuto.';
$lang['AdminMain.ai.field_submit'] = 'Uložit nastavení AI';
$lang['AdminMain.ai.field_system_prompt'] = 'Systémová výzva Správce podpory';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Tato výzva se používá speciálně pro funkce nástroje Support Manager AI a je nadřazena globální systémové výzvě.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Definujte konkrétní pokyny pro UI při vyřizování dotazů podpory. Tento pokyn nahrazuje globální systémový pokyn a definuje chování UI konkrétně v rámci systému tiketů.';
$lang['AdminMain.ai.field_temperature'] = 'Teplota';
$lang['AdminMain.ai.field_temperature_desc'] = 'Nižší teplota = větší soustředění, vyšší teplota = větší kreativita. Výchozí hodnota: 1,0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Řídí náhodnost odpovědí. Nižší hodnoty (0,0-0,7) vytvářejí cílenější a determinističtější výstupy. Vyšší hodnoty (1,3-2,0) vytvářejí kreativnější a rozmanitější výstupy. Rozsah: 0,0 až 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Přiřadit zaměstnanci';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Umožnit AI přiřazovat tikety konkrétním zaměstnancům na základě pokynů systémové výzvy.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Změna priority tipu';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Umožnit umělé inteligenci upravit prioritu tipu (nahoru nebo dolů), pokud byla klientem zvolena nevhodná priorita nebo byla zjištěna analýzou.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Zavřít letenku';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Umožněte umělé inteligenci uzavírat tikety v případech spamu, vrácených zpráv nebo jasně vyřešených problémů.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Pokyny k použití nástroje';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Poskytněte pokyny a konkrétní scénáře, ve kterých by měly být nástroje použity. Tento text bude zahrnut do systémové výzvy, když jsou nástroje povoleny.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Příklad: - technické problémy týkající se serverů Linux přiřaďte Johnovi, servery Windows Daveovi - uzavírejte pouze tickety, které jsou zjevně spamem, automatickými odpověďmi nebo zákazník v poslední odpovědi uvede, že je ticket vyřešen - zvyšte prioritu naléhavých problémů se zmínkou o "down" nebo "offline" na stav nouze - snižte prioritu nouzových ticketů, pokud se nejedná o skutečné nouzové situace';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Poskytnout UI konkrétní pokyny, kdy a jak používat povolené nástroje. Například uveďte jména zaměstnanců a jejich odborné oblasti pro přidělování tiketů.';
$lang['AdminMain.ai.field_tools_available'] = 'Dostupné nástroje';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Vyberte, které nástroje smí umělá inteligence používat. Každý nástroj umožňuje konkrétní akce, které může UI provádět při zpracování tipů.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Povolení nástrojů';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Umožněte umělé inteligenci používat nástroje pro správu tiketů, jako je změna priority, uzavírání tiketů nebo přiřazování pracovníkům.';
$lang['AdminMain.ai.heading_experimental'] = 'Experimentální funkce';
$lang['AdminMain.ai.heading_features'] = 'Funkce umělé inteligence';
$lang['AdminMain.ai.heading_model'] = 'Konfigurace modelu';
$lang['AdminMain.ai.heading_parameters'] = 'Parametry modelu';
$lang['AdminMain.ai.heading_replies'] = 'Automatické odpovědi';
$lang['AdminMain.ai.heading_system_prompt'] = 'Systémová výzva';
$lang['AdminMain.ai.heading_tools'] = 'Nástroje umělé inteligence';
$lang['AdminMain.ai.option_every_reply'] = 'Každá odpověď';
$lang['AdminMain.ai.option_ticket_opened'] = 'Pouze otevřená vstupenka';
$lang['AdminMain.ai.page_title'] = 'Správce podpory &gt; Nastavení AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Funkce AI pro Správce podpory vyžadují klíč Blesta AI API. Před zapnutím funkcí AI nakonfigurujte svůj klíč API v Nastavení systému &gt; Umělá inteligence.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Vyžaduje se klíč API Blesta AI';
$lang['AdminMain.settings.boxtitle_settings'] = 'Nastavení';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Výchozí obrázek avatara';
$lang['AdminMain.settings.field_submit'] = 'Aktualizace nastavení';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Nastavení avatara';
$lang['AdminMain.settings.option_default'] = 'Používejte pouze vlastní avatar';
$lang['AdminMain.settings.option_fallback'] = 'Použít Gravatar, ale přepsat, pokud je nastaven vlastní avatar';
$lang['AdminMain.settings.option_gravatar'] = 'Použijte Gravatar';
$lang['AdminMain.settings.page_title'] = 'Správce podpory &gt; Nastavení';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Doporučujeme: 150x150px, JPG nebo PNG, max. 2 MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Odstranění obrázku';

