<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.settings.field_submit'] = 'Aggiornamento delle impostazioni';
$lang['AdminMain.settings.text_remove_avatar'] = 'Rimuovi immagine';
$lang['AdminMain.settings.option_gravatar'] = 'Utilizzare Gravatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Immagine predefinita dell\'avatar';
$lang['AdminMain.settings.option_default'] = 'Utilizzare solo avatar personalizzati';
$lang['AdminMain.settings.option_fallback'] = 'Utilizzare Gravatar ma sovrascrivere se è impostato un avatar personalizzato';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Impostazioni dell\'avatar';
$lang['AdminMain.settings.boxtitle_settings'] = 'Impostazioni';
$lang['AdminMain.settings.page_title'] = 'Gestione supporto &gt; Impostazioni';
$lang['AdminMain.!success.settings_updated'] = 'Le impostazioni sono state aggiornate con successo.';
$lang['AdminMain.!success.ai_settings_updated'] = 'Le impostazioni dell\'IA sono state aggiornate con successo.';
$lang['AdminMain.ai.page_title'] = 'Gestione supporto &gt; Impostazioni AI';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Consigliato: 150x150px, JPG o PNG, max 2MB';
$lang['AdminMain.ai.boxtitle_settings'] = 'Impostazioni AI';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Chiave API Blesta AI richiesta';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Le funzioni AI per il Support Manager richiedono una chiave API Blesta AI. Configurare la chiave API in Impostazioni di sistema &gt; Intelligenza artificiale prima di abilitare le funzioni AI.';
$lang['AdminMain.ai.button_configure_ai'] = 'Andare alle Impostazioni AI del sistema';
$lang['AdminMain.ai.heading_features'] = 'Caratteristiche dell\'intelligenza artificiale';
$lang['AdminMain.ai.heading_model'] = 'Configurazione del modello';
$lang['AdminMain.ai.heading_parameters'] = 'Parametri del modello';
$lang['AdminMain.ai.heading_system_prompt'] = 'Prompt del sistema';
$lang['AdminMain.ai.heading_experimental'] = 'Caratteristiche sperimentali';
$lang['AdminMain.ai.heading_replies'] = 'Risposte automatiche';
$lang['AdminMain.ai.heading_tools'] = 'Strumenti AI';
$lang['AdminMain.ai.field_enabled'] = 'Abilitare le funzioni AI per il Gestore dell\'assistenza';
$lang['AdminMain.ai.field_enabled_desc'] = 'Consentire funzionalità AI all\'interno del sistema di ticket, tra cui risposte automatiche, riepiloghi e strumenti.';
$lang['AdminMain.ai.field_override_model'] = 'Sovrascrivere il modello AI predefinito';
$lang['AdminMain.ai.field_override_model_desc'] = 'Valore predefinito del sistema: %1$s';
$lang['AdminMain.ai.field_model'] = 'Modello AI';
$lang['AdminMain.ai.field_model_tooltip'] = 'Selezionare il modello di AI da utilizzare specificamente per le funzioni di Support Manager. I diversi modelli hanno capacità e prezzi diversi.';
$lang['AdminMain.ai.field_model_desc'] = 'Questo modello sarà utilizzato per tutte le funzioni AI del Support Manager.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Annullamento dei gettoni massimi';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Valore predefinito del sistema: %1$s';
$lang['AdminMain.ai.field_max_tokens'] = 'Gettoni massimi';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Numero massimo di token (parole/pezzi di parole) che l\'IA può generare in una singola risposta. Valori più alti consentono risposte più lunghe, ma consumano più risorse. Intervallo tipico: 100-4000 per la maggior parte dei compiti.';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Controlla la lunghezza massima delle risposte generate dall\'IA. Valore predefinito: 4000';
$lang['AdminMain.ai.field_override_temperature'] = 'Temperatura di sovrascrittura';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Valore predefinito del sistema: %1$s';
$lang['AdminMain.ai.field_temperature'] = 'Temperatura';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Controlla la casualità delle risposte. Valori più bassi (0,0-0,7) producono risultati più mirati e deterministici. Valori più alti (1,3-2,0) producono risultati più creativi e variegati. Intervallo: Da 0,0 a 2,0';
$lang['AdminMain.ai.field_temperature_desc'] = 'Temperatura più bassa = più concentrata, temperatura più alta = più creativa. Valore predefinito: 1,0';
$lang['AdminMain.ai.field_system_prompt'] = 'Prompt di sistema del Support Manager';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Definire istruzioni specifiche per l\'IA durante la gestione dei ticket di assistenza. Questo prompt sovrascrive il prompt globale del sistema e definisce il comportamento dell\'IA in modo specifico all\'interno del sistema dei ticket.';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Questo prompt viene utilizzato specificamente per le funzioni di Support Manager AI e sostituisce il prompt globale del sistema.';
$lang['AdminMain.ai.badge_experimental'] = 'SPERIMENTALE';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Abilitare le risposte automatiche dei biglietti AI';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Consentire all\'intelligenza artificiale di rispondere automaticamente ai ticket quando ha un elevato grado di certezza della risposta.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Soglia di fiducia';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'L\'intelligenza artificiale risponde automaticamente ai ticket solo quando il suo livello di confidenza raggiunge o supera questa soglia. Valori più alti (90-100%) sono più prudenti e sicuri. Valori più bassi (60-89%) comportano un maggior numero di risposte automatiche, ma con un maggior rischio di errori.';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Soglia più alta = più conservativa (meno risposte automatiche, maggiore precisione). Consigliato: 70% o superiore.';
$lang['AdminMain.ai.field_require_human_review'] = 'Richiedere la revisione umana prima dell\'invio';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Le risposte generate automaticamente vengono visualizzate all\'interno del ticket per l\'uso da parte del personale (consigliato)';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Aggiungere una clausola di esclusione della responsabilità generata dall\'intelligenza artificiale';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Aggiungere un avviso alle risposte generate automaticamente, indicando che sono state create dall\'intelligenza artificiale (consigliato per trasparenza).';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Testo di esclusione di responsabilità personalizzato';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Personalizzare il messaggio di esclusione di responsabilità aggiunto alle risposte generate dall\'intelligenza artificiale. Lasciare vuoto per utilizzare il messaggio predefinito.';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Questo testo verrà aggiunto a tutte le risposte ai ticket generate dall\'IA.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Questa risposta è stata generata con l\'assistenza dell\'IA.';
$lang['AdminMain.ai.field_restricted_departments'] = 'Limitare la risposta automatica ai reparti';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Consentire le risposte automatiche solo per specifici reparti di ticket. Lasciare tutti deselezionati per consentire tutti i reparti.';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Selezionare i reparti dei ticket che possono ricevere le risposte automatiche dell\'AI. Deselezionare tutti per consentire tutti i reparti.';
$lang['AdminMain.ai.field_assistant_name'] = 'Nome visualizzato dell\'assistente AI';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Il nome visualizzato per le risposte generate dall\'intelligenza artificiale nelle discussioni sui ticket. Questo personalizza l\'assistente AI per il team di assistenza.';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Lasciare vuoto per utilizzare il nome predefinito: "Supporto".';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Supporto';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Innesco dell\'analisi dell\'intelligenza artificiale';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Scegliete quando l\'intelligenza artificiale deve analizzare i ticket per individuare potenziali risposte e strumenti da utilizzare. "Ogni risposta" analizza ogni nuovo messaggio. "Ticket aperto" analizza solo l\'apertura iniziale del ticket.';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Controlla quando l\'analisi dell\'intelligenza artificiale viene attivata per generare risposte ed eseguire strumenti.';
$lang['AdminMain.ai.option_every_reply'] = 'Ogni risposta';
$lang['AdminMain.ai.option_ticket_opened'] = 'Solo biglietto aperto';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Età massima della coda (ore)';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Le risposte dei clienti in coda più vecchie di questo valore saranno scartate dal cron anziché elaborate. Impedisce all\'IA di rispondere a ticket obsoleti se il cron è stato disabilitato e si è accumulato un arretrato.';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Scarta le risposte AI in coda più vecchie di questo numero di ore. Deve essere compreso tra 1 e 8760 (1 anno). Il valore predefinito è 24.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Abilitazione degli strumenti';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Consentire all\'intelligenza artificiale di utilizzare strumenti per la gestione dei ticket, come la modifica della priorità, la chiusura dei ticket o l\'assegnazione a membri del personale.';
$lang['AdminMain.ai.field_tools_available'] = 'Strumenti disponibili';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Selezionare gli strumenti che l\'IA può utilizzare. Ogni strumento abilita azioni specifiche che l\'IA può eseguire durante l\'elaborazione dei ticket.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Modifica della priorità dei biglietti';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Consentire all\'IA di modificare la priorità dei ticket (aumentandola o riducendola) quando il cliente ha selezionato una priorità inadeguata o è stata rilevata dall\'analisi.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Chiudere il biglietto';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Consentire all\'intelligenza artificiale di chiudere i ticket in caso di spam, messaggi respinti o problemi chiaramente risolti.';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Assegnare a un membro del personale';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Consentire all\'IA di assegnare i ticket a membri del personale specifici in base alle istruzioni del sistema.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Istruzioni per l\'uso dello strumento';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Fornire indicazioni specifiche all\'IA su quando e come utilizzare gli strumenti abilitati. Ad esempio, specificare i nomi dei membri del personale e le loro aree di competenza per l\'assegnazione dei ticket.';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Fornire istruzioni e scenari specifici per l\'utilizzo degli strumenti. Questo testo sarà incluso nel prompt del sistema quando gli strumenti sono abilitati.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Esempio: - Assegnare i problemi tecnici relativi ai server Linux a John, quelli relativi ai server Windows a Dave - Chiudere solo i ticket che sono chiaramente spam, risposte automatiche o che il cliente indica che il ticket è stato risolto nell\'ultima risposta - Aumentare la priorità dei problemi urgenti che menzionano "down" o "offline" allo stato di Emergenza - Diminuire la priorità dei ticket di Emergenza se non sono vere e proprie emergenze';
$lang['AdminMain.ai.field_submit'] = 'Salvare le impostazioni AI';

