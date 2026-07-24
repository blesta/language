<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.it_it
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Le impostazioni dell\'IA sono state aggiornate con successo!';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Chiave API recuperata con successo dal vostro account Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Impossibile connettersi all\'API AI: %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Richiesta non valida.';
$lang['AdminSystemAi.!error.username_required'] = 'Inserire il nome utente account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Non è stata trovata alcuna chiave di licenza Blesta. Configurare prima la licenza.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Autenticazione fallita. Controllare il nome utente e la chiave di licenza.';
$lang['AdminSystemAi.!error.request_failed'] = 'Richiesta fallita. Riprovare.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Inserire una chiave API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Chiave API non valida.';
$lang['AdminSystemAi.index.page_title'] = 'Impostazioni &gt; Sistema &gt; IA';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Impostazioni AI';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Abilitare le funzioni AI';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Chiave API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Modello predefinito';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Temperatura';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Gettoni massimi';
$lang['AdminSystemAi.index.field.submit'] = 'Aggiornamento delle impostazioni';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Abilitare o disabilitare le funzioni AI in tutto il sistema.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'La chiave API di Blesta AI. Ottenetela da account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Il modello AI predefinito da utilizzare per il completamento della chat.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Controlla la casualità. I valori più bassi sono più deterministici, quelli più alti sono più creativi. Intervallo: Da 0,0 a 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Numero massimo di token da generare nelle risposte.';
$lang['AdminSystemAi.index.text_connected'] = 'Connessione riuscita con Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Impossibile connettersi a Blesta AI. Controllare la chiave API.';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Recupero dal mio account Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Inserite la vostra chiave API manualmente o recuperatela automaticamente dal vostro account.';
$lang['AdminSystemAi.index.text_validating'] = 'Convalidare...';
$lang['AdminSystemAi.index.text_key_valid'] = 'Chiave API convalidata e salvata';
$lang['AdminSystemAi.index.text_select_model'] = 'Selezionare un modello';
$lang['AdminSystemAi.index.text_api_status'] = 'Stato API';
$lang['AdminSystemAi.index.text_status_active'] = 'Attivo';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Crediti rimanenti';
$lang['AdminSystemAi.index.text_credits_used'] = 'Crediti utilizzati (questo mese)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Ultima chiamata API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Ancora nessuna chiamata';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Recupero dal mio account Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Il nome utente è necessario per recuperare la chiave API.';
$lang['AdminSystemAi.modal.text_info'] = 'Il nome utente account.blesta.com e la chiave di licenza Blesta verranno utilizzati per convalidare la licenza e ottenere automaticamente una nuova chiave API Blesta AI. Se è già stata generata una chiave, questa verrà revocata e ne verrà emessa una nuova.';
$lang['AdminSystemAi.modal.field.username'] = 'Nome utente';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Inserire il nome utente dell\'account';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Autenticare';
$lang['AdminSystemAi.modal.button.cancel'] = 'Annullamento';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Autenticazione...';
$lang['AdminSystemAi.index.heading_api'] = 'Configurazione API';
$lang['AdminSystemAi.index.heading_model'] = 'Modello predefinito';
$lang['AdminSystemAi.index.heading_parameters'] = 'Parametri del modello';
$lang['AdminSystemAi.index.heading_prompts'] = 'Prompt di sistema';
$lang['AdminSystemAi.index.heading_features'] = 'Caratteristiche abilitate';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Prompt globale del sistema (predefinito)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Le istruzioni predefinite inviate al modello di intelligenza artificiale a ogni richiesta. Questo definisce il comportamento e il contesto dell\'IA in tutte le funzioni.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Questa richiesta si applica a tutte le funzioni AI, a meno che non venga annullata all\'interno della funzione.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Descrizioni dei pacchetti';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Generare descrizioni convincenti di prodotti e servizi';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Modelli di e-mail';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Modifiche e miglioramenti dei modelli di email assistiti dall\'AI';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Chatbot con intelligenza artificiale per l\'assistenza al personale';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Accesso al gruppo di lavoro';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Selezionare i gruppi di dipendenti che possono accedere al chatbot AI. È possibile selezionare più gruppi.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Tenere premuto Ctrl (Cmd su Mac) per selezionare più gruppi.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Selezionare quali funzioni principali di Blesta devono avere l\'assistenza AI abilitata. I plugin possono accedere alle funzioni AI e sono configurati in modo indipendente.';
$lang['AdminSystemAi.index.heading_beta'] = 'Avviso di funzionalità beta';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Questa funzione è attualmente in fase beta e potrebbe produrre risultati imprevisti o inaccurati. Usare con discrezione.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Informativa sulla privacy';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Le richieste vengono inviate a fornitori di IA terzi (ad esempio, OpenAI, Anthropic) per l\'elaborazione. Il servizio Blesta AI non memorizza i dati delle conversazioni AI; tuttavia, non controlliamo il modo in cui questi fornitori gestiscono o conservano i dati. Evitare di inviare informazioni sensibili o riservate.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Riconoscimento della privacy';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Ho letto e compreso l\'informativa sulla privacy di cui sopra.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Ultimo riconoscimento su %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'È necessario accettare l\'informativa sulla privacy prima di salvare.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Impostazioni del contesto del modello di e-mail';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Profondità della relazione';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Profondità massima per l\'attraversamento delle relazioni del modello. Valori più alti includono più dati correlati, ma aumentano l\'uso dei token. Intervallo: 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Controlla la profondità con cui seguire le relazioni (ad esempio, fattura → cliente → contatti). Predefinito: 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Includere le definizioni di schema';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Includere le informazioni sul tipo di campo e gli schemi del database nel contesto.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Includere dati di esempio';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Includere valori di dati di esempio per aiutare l\'IA a comprendere i formati e la struttura dei dati.';
$lang['AdminSystemAi.index.degraded_model'] = 'Il modello attualmente selezionato, "%1$s", non è più disponibile. Le funzionalità di intelligenza artificiale utilizzano temporaneamente "%2$s". Scegli un nuovo modello predefinito tra quelli riportati di seguito e salva.';
$lang['AdminSystemAi.index.model_recommended'] = '(Consigliato)';

