<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'Les paramètres de l\'IA ont été mis à jour avec succès.';
$lang['AdminMain.!success.settings_updated'] = 'Les paramètres ont été mis à jour avec succès.';
$lang['AdminMain.ai.badge_experimental'] = 'EXPÉRIMENTALE';
$lang['AdminMain.ai.boxtitle_settings'] = 'Paramètres de l\'IA';
$lang['AdminMain.ai.button_configure_ai'] = 'Aller dans Paramètres de l\'IA du système';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Ajouter un avis de non-responsabilité généré par l\'IA';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Ajouter aux réponses générées automatiquement un avis indiquant qu\'elles ont été créées par l\'IA (recommandé pour des raisons de transparence).';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Déclencheur de l\'analyse de l\'IA';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Contrôle le moment où l\'analyse de l\'IA est déclenchée pour générer des réponses et exécuter des outils.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Choisissez le moment où l\'IA doit analyser les tickets pour déterminer les réponses potentielles et les utilisations de l\'outil. "Chaque réponse" analyse chaque nouveau message. "Ticket ouvert" analyse uniquement l\'ouverture initiale du ticket.';
$lang['AdminMain.ai.field_assistant_name'] = 'Nom d\'affichage de l\'assistant AI';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Laisser vide pour utiliser le nom par défaut : "Support"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Soutien';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Nom affiché pour les réponses générées par l\'IA dans les fils de discussion des tickets. Cela permet de personnaliser l\'assistant IA pour votre équipe d\'assistance.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Activer les réponses automatiques aux billets d\'IA';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Permettre à l\'IA de répondre automatiquement aux tickets lorsqu\'elle a un degré élevé de certitude quant à la réponse.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Seuil de confiance';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Un seuil plus élevé = plus conservateur (moins de réponses automatiques, plus de précision). Recommandé : 70% ou plus.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'L\'IA ne répondra automatiquement aux tickets que si son niveau de confiance atteint ou dépasse ce seuil. Les valeurs élevées (90-100%) sont plus prudentes et plus sûres. Les valeurs inférieures (60-89 %) permettent d\'obtenir davantage de réponses automatiques, mais avec un risque d\'erreur plus élevé.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Texte d\'avertissement personnalisé';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Ce texte sera ajouté à toutes les réponses aux tickets générées par l\'IA.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Cette réponse a été générée avec l\'aide de l\'IA.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Personnaliser le message d\'avertissement joint aux réponses générées par l\'IA. Laisser vide pour utiliser le message par défaut.';
$lang['AdminMain.ai.field_enabled'] = 'Activer les fonctions d\'intelligence artificielle pour le gestionnaire de support';
$lang['AdminMain.ai.field_enabled_desc'] = 'Autoriser les fonctions alimentées par l\'IA dans le système de tickets, y compris les réponses automatisées, les résumés et les outils.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Durée maximale de la file d\'attente (heures)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Rejeter les réponses de l\'IA en file d\'attente datant de plus de ce nombre d\'heures. Doit être compris entre 1 et 8760 (1 an). La valeur par défaut est 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Les réponses des clients en file d\'attente plus anciennes que cette valeur seront rejetées par le cron au lieu d\'être traitées. Empêche l\'IA de répondre à des tickets périmés si le cron a été désactivé et qu\'un arriéré s\'est accumulé.';
$lang['AdminMain.ai.field_max_tokens'] = 'Nombre maximal de jetons';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Contrôle la longueur maximale des réponses générées par l\'IA. Valeur par défaut : 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Nombre maximal de tokens (mots/morceaux de mots) que l\'IA peut générer en une seule réponse. Des valeurs plus élevées permettent des réponses plus longues mais consomment plus de ressources. Plage typique : 100-4000 pour la plupart des tâches.';
$lang['AdminMain.ai.field_model'] = 'Modèle d\'IA';
$lang['AdminMain.ai.field_model_desc'] = 'Ce modèle sera utilisé pour toutes les fonctions d\'IA dans le gestionnaire de support.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Sélectionnez le modèle d\'IA à utiliser spécifiquement pour les fonctionnalités de Support Manager. Les capacités et les prix varient d\'un modèle à l\'autre.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Remplacer les jetons maximums';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Défaut du système : %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Remplacer le modèle d\'IA par défaut';
$lang['AdminMain.ai.field_override_model_desc'] = 'Défaut du système : %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Température de dépassement';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Défaut du système : %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Exiger un examen humain avant l\'envoi';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Les réponses générées automatiquement sont affichées dans le ticket à l\'intention du personnel (Recommandé)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Limiter les réponses automatiques aux départements';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Sélectionnez les services chargés des tickets qui peuvent recevoir des réponses automatiques de l\'IA. Décochez tout pour autoriser tous les services.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'N\'autoriser les réponses automatiques que pour des services de billetterie spécifiques. Ne cochez pas la case "tous" pour autoriser tous les services.';
$lang['AdminMain.ai.field_submit'] = 'Enregistrer les paramètres de l\'IA';
$lang['AdminMain.ai.field_system_prompt'] = 'Support Manager System Prompt';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Cette invite est utilisée spécifiquement pour les fonctions de Support Manager AI et remplace l\'invite globale du système.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Définir des instructions spécifiques pour l\'IA lors du traitement des tickets d\'assistance. Cette invite remplace l\'invite globale du système et définit le comportement spécifique de l\'IA dans le système de tickets.';
$lang['AdminMain.ai.field_temperature'] = 'Température';
$lang['AdminMain.ai.field_temperature_desc'] = 'Une température plus basse = plus concentrée, une température plus élevée = plus créative. Valeur par défaut : 1,0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Contrôle le caractère aléatoire des réponses. Des valeurs faibles (0,0-0,7) produisent des résultats plus ciblés et déterministes. Des valeurs plus élevées (1,3-2,0) produisent des résultats plus créatifs et variés. Plage de valeurs : 0,0 à 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Affectation à un membre du personnel';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Permettre à l\'IA d\'assigner des tickets à des membres spécifiques du personnel sur la base des instructions du système.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Modifier la priorité des billets';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Permettre à l\'IA d\'ajuster la priorité du ticket (à la hausse ou à la baisse) lorsqu\'une priorité inappropriée a été sélectionnée par le client ou détectée par l\'analyse.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Fermer le ticket';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Permettre à l\'IA de fermer les tickets en cas de spam, de messages rebondis ou de problèmes clairement résolus.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Instructions d\'utilisation des outils';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Fournir des instructions et des scénarios spécifiques pour l\'utilisation des outils. Ce texte sera inclus dans l\'invite du système lorsque les outils seront activés.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Exemple : - Assigner les problèmes techniques liés aux serveurs Linux à John, les serveurs Windows à Dave - Ne fermer que les tickets qui sont clairement des spams, des réponses automatiques, ou le client indique que le ticket est résolu dans la dernière réponse - Augmenter la priorité pour les problèmes urgents mentionnant "down" ou "offline" au statut d\'urgence - Diminuer la priorité des tickets d\'urgence s\'il ne s\'agit pas d\'urgences réelles';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Fournir à l\'IA des indications précises sur le moment et la manière d\'utiliser les outils mis à sa disposition. Par exemple, précisez le nom des membres du personnel et leur domaine de compétence pour l\'attribution des tickets.';
$lang['AdminMain.ai.field_tools_available'] = 'Outils disponibles';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Sélectionnez les outils que l\'IA est autorisée à utiliser. Chaque outil permet à l\'IA d\'effectuer des actions spécifiques lors du traitement des tickets.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Activer les outils';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Permettre à l\'IA d\'utiliser des outils de gestion des tickets tels que la modification de la priorité, la fermeture des tickets ou l\'affectation à des membres du personnel.';
$lang['AdminMain.ai.heading_experimental'] = 'Caractéristiques expérimentales';
$lang['AdminMain.ai.heading_features'] = 'Caractéristiques de l\'IA';
$lang['AdminMain.ai.heading_model'] = 'Configuration du modèle';
$lang['AdminMain.ai.heading_parameters'] = 'Paramètres du modèle';
$lang['AdminMain.ai.heading_replies'] = 'Réponses automatiques';
$lang['AdminMain.ai.heading_system_prompt'] = 'Invite du système';
$lang['AdminMain.ai.heading_tools'] = 'Outils d\'IA';
$lang['AdminMain.ai.option_every_reply'] = 'Chaque réponse';
$lang['AdminMain.ai.option_ticket_opened'] = 'Billet ouvert uniquement';
$lang['AdminMain.ai.page_title'] = 'Gestionnaire de support &gt; Paramètres AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Les fonctions d\'intelligence artificielle pour le gestionnaire d\'assistance nécessitent une clé API Blesta AI. Veuillez configurer votre clé API dans Paramètres du système &gt; Intelligence artificielle avant d\'activer les fonctions d\'IA.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Clé API Blesta AI requise';
$lang['AdminMain.settings.boxtitle_settings'] = 'Paramètres';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Image de l\'avatar par défaut';
$lang['AdminMain.settings.field_submit'] = 'Mise à jour des paramètres';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Paramètres de l\'avatar';
$lang['AdminMain.settings.option_default'] = 'Utiliser uniquement l\'avatar personnalisé';
$lang['AdminMain.settings.option_fallback'] = 'Utiliser Gravatar mais l\'écraser si un avatar personnalisé est défini';
$lang['AdminMain.settings.option_gravatar'] = 'Utiliser Gravatar';
$lang['AdminMain.settings.page_title'] = 'Gestionnaire de support &gt; Paramètres';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Recommandé : 150x150px, JPG ou PNG, max 2MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Supprimer l\'image';

