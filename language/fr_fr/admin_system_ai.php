<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!success.settings_updated'] = 'Les paramètres de l\'IA ont été mis à jour avec succès !';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Clé API récupérée avec succès de votre compte Blesta.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Impossible de se connecter à l\'API AI : %1$s';
$lang['AdminSystemAi.!error.invalid_request'] = 'Demande non valide.';
$lang['AdminSystemAi.!error.username_required'] = 'Veuillez entrer votre nom d\'utilisateur pour account.blesta.com.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Aucune clé de licence Blesta n\'a été trouvée. Veuillez d\'abord configurer votre licence.';
$lang['AdminSystemAi.!error.auth_failed'] = 'L\'authentification a échoué. Veuillez vérifier votre nom d\'utilisateur et votre clé de licence.';
$lang['AdminSystemAi.!error.request_failed'] = 'La demande a échoué. Veuillez réessayer.';
$lang['AdminSystemAi.!error.api_key_required'] = 'Veuillez saisir une clé API.';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Clé API invalide.';
$lang['AdminSystemAi.index.page_title'] = 'Réglages &gt; Système &gt; AI';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Paramètres de l\'IA';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Activer les fonctions d\'IA';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Clé API';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Modèle par défaut';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Température';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Nombre maximal de jetons';
$lang['AdminSystemAi.index.field.submit'] = 'Mise à jour des paramètres';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Activer ou désactiver les fonctions d\'intelligence artificielle dans l\'ensemble du système.';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Votre clé API Blesta AI. Vous pouvez l\'obtenir à partir de account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Le modèle d\'IA par défaut à utiliser pour compléter les discussions.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Contrôle le caractère aléatoire. Les valeurs inférieures sont plus déterministes, les valeurs supérieures sont plus créatives. Plage de valeurs : 0,0 à 2,0';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Nombre maximal de jetons à générer dans les réponses.';
$lang['AdminSystemAi.index.text_connected'] = 'Connexion réussie à Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Échec de la connexion à Blesta AI. Vérifiez votre clé API.';
$lang['AdminSystemAi.index.text_balance'] = 'Solde : %1$s %2$s';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Récupérer de mon compte Blesta';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Saisissez votre clé API manuellement ou récupérez-la automatiquement à partir de votre compte.';
$lang['AdminSystemAi.index.text_validating'] = 'Valider...';
$lang['AdminSystemAi.index.text_key_valid'] = 'Clé API validée et sauvegardée';
$lang['AdminSystemAi.index.text_select_model'] = 'Sélectionner un modèle';
$lang['AdminSystemAi.index.text_api_status'] = 'Statut de l\'API';
$lang['AdminSystemAi.index.text_status_active'] = 'Actif';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Crédits restants';
$lang['AdminSystemAi.index.text_credits_used'] = 'Crédits utilisés (ce mois-ci)';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Dernier appel à l\'API';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Pas encore d\'appel';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Récupérer de mon compte Blesta';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Votre nom d\'utilisateur est nécessaire pour récupérer votre clé API';
$lang['AdminSystemAi.modal.text_info'] = 'Votre nom d\'utilisateur account.blesta.com et votre clé de licence Blesta seront utilisés pour valider votre licence et obtenir automatiquement une nouvelle clé Blesta AI API. Si une clé a déjà été générée, elle sera révoquée et une nouvelle clé sera émise.';
$lang['AdminSystemAi.modal.field.username'] = 'Nom d\'utilisateur';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Entrez le nom d\'utilisateur de votre compte';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Authentifier';
$lang['AdminSystemAi.modal.button.cancel'] = 'Annuler';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Authentification...';
$lang['AdminSystemAi.index.heading_api'] = 'Configuration de l\'API';
$lang['AdminSystemAi.index.heading_model'] = 'Modèle par défaut';
$lang['AdminSystemAi.index.heading_parameters'] = 'Paramètres du modèle';
$lang['AdminSystemAi.index.heading_prompts'] = 'Invites du système';
$lang['AdminSystemAi.index.heading_features'] = 'Fonctionnalités activées';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Invite globale du système (par défaut)';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Instructions par défaut envoyées au modèle d\'IA à chaque demande. Elles définissent le comportement et le contexte de l\'IA dans toutes les fonctionnalités.';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Cette invite s\'applique à toutes les caractéristiques de l\'IA, à moins qu\'elle ne soit remplacée dans la caractéristique.';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Description des paquets';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Créer des descriptions de produits et de services convaincantes';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Modèles d\'e-mails';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Modifications et améliorations des modèles de courrier électronique assistées par l\'IA';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Chatbot alimenté par l\'IA pour l\'assistance au personnel';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Accès au groupe du personnel';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Sélectionnez les groupes d\'employés qui peuvent accéder au chatbot IA. Plusieurs groupes peuvent être sélectionnés.';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Maintenez la touche Ctrl (Cmd sur Mac) enfoncée pour sélectionner plusieurs groupes.';
$lang['AdminSystemAi.index.text_features_intro'] = 'Sélectionnez les fonctionnalités de base de Blesta pour lesquelles l\'assistance AI doit être activée. Les plugins peuvent accéder aux fonctions d\'IA et sont configurés indépendamment.';
$lang['AdminSystemAi.index.heading_beta'] = 'Avis de fonctionnalité bêta';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Cette fonction est actuellement en version bêta et peut produire des résultats inattendus ou inexacts. À utiliser avec discernement.';
$lang['AdminSystemAi.index.heading_privacy'] = 'Avis de confidentialité';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Les demandes sont envoyées à des fournisseurs d\'IA tiers (par exemple, OpenAI, Anthropic) pour être traitées. Le service Blesta AI ne stocke pas les données de conversation de l\'IA ; cependant, nous ne contrôlons pas la manière dont ces fournisseurs traitent ou conservent les données. Évitez de soumettre des informations sensibles ou confidentielles.';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Reconnaissance de la protection de la vie privée';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'J\'ai lu et compris l\'avis de confidentialité ci-dessus.';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Dernier accusé de réception sur %1$s.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Vous devez accepter l\'avis de confidentialité avant de sauvegarder.';
$lang['AdminSystemAi.index.heading_email_context'] = 'Paramètres contextuels du modèle d\'e-mail';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Profondeur de la relation';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Profondeur maximale pour parcourir les relations du modèle. Des valeurs plus élevées permettent d\'inclure davantage de données liées, mais augmentent l\'utilisation des jetons. Plage de valeurs : 1-5.';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Contrôle la profondeur du suivi des relations (par exemple, facture → client → contacts). Valeur par défaut : 2';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Inclure les définitions de schéma';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Inclure des informations sur les types de champs et les schémas de base de données dans le contexte.';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Inclure des exemples de données';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Inclure des exemples de valeurs de données pour aider l\'IA à comprendre les formats et la structure des données.';
$lang['AdminSystemAi.index.degraded_model'] = 'Le modèle actuellement sélectionné, «%1$s », n\'est plus disponible. Les fonctionnalités d\'IA utilisent temporairement «%2$s ». Veuillez choisir ci-dessous un nouveau modèle par défaut, puis enregistrez votre choix.';
$lang['AdminSystemAi.index.model_recommended'] = '(Recommandé)';

