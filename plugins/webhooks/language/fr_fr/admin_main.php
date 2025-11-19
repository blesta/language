<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.edit.text_fields_map'] = 'Cette section vous permet de renommer les champs de l\'événement déclenché en un nom personnalisé avant qu\'ils ne soient envoyés au rappel. Les sous-champs doivent être séparés par un point (par exemple vars.status). Pour obtenir une liste de tous les champs pris en charge par chacun des événements, vous pouvez consulter le lien suivant <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.edit.field_editsubmit'] = 'Modifier le Webhook';
$lang['AdminMain.edit.field_add_field'] = 'Ajouter un champ';
$lang['AdminMain.edit.field_method'] = 'Méthode';
$lang['AdminMain.edit.field_type'] = 'Rappel';
$lang['AdminMain.edit.field_event'] = 'Événement';
$lang['AdminMain.edit.field_callback'] = 'Rappel';
$lang['AdminMain.edit.option_delete'] = 'Supprimer';
$lang['AdminMain.edit.heading_options'] = 'Options';
$lang['AdminMain.edit.heading_parameter'] = 'Nouveau domaine';
$lang['AdminMain.edit.heading_field'] = 'Champ d\'origine';
$lang['AdminMain.edit.heading_fields_map'] = 'Carte des champs';
$lang['AdminMain.edit.heading_event'] = 'Événement';
$lang['AdminMain.edit.boxtitle_editwebhook'] = 'Modifier le Webhook';
$lang['AdminMain.add.text_fields_map'] = 'Cette section vous permet de renommer les champs de l\'événement déclenché en un nom personnalisé avant qu\'ils ne soient envoyés au rappel. Les sous-champs doivent être séparés par un point (par exemple vars.status). Pour obtenir une liste de tous les champs pris en charge par chacun des événements, vous pouvez consulter le lien suivant <a href="https://docs.blesta.com/display/dev/Event+Handlers" target="_blank">link</a>.';
$lang['AdminMain.add.field_addsubmit'] = 'Ajouter un Webhook';
$lang['AdminMain.add.field_add_field'] = 'Ajouter un champ';
$lang['AdminMain.add.field_method'] = 'Méthode';
$lang['AdminMain.add.field_type'] = 'Rappel';
$lang['AdminMain.add.field_event'] = 'Événement';
$lang['AdminMain.add.field_callback'] = 'Rappel';
$lang['AdminMain.add.option_delete'] = 'Supprimer';
$lang['AdminMain.add.heading_options'] = 'Options';
$lang['AdminMain.add.heading_parameter'] = 'Nouveau domaine';
$lang['AdminMain.add.heading_field'] = 'Champ d\'origine';
$lang['AdminMain.add.heading_fields_map'] = 'Carte des champs';
$lang['AdminMain.add.heading_event'] = 'Événement';
$lang['AdminMain.add.boxtitle_addwebhook'] = 'Ajouter un Webhook';
$lang['AdminMain.index.no_results'] = 'Il n\'y a pas de webhooks disponibles.';
$lang['AdminMain.index.text_description_incoming'] = 'Reçoit une requête HTTP et déclenche un événement sur le système en utilisant les paramètres reçus dans la requête. La demande peut être reçue par GET, POST ou JSON.';
$lang['AdminMain.index.text_description_outgoing'] = 'Envoie une requête HTTP à une URL lorsqu\'un événement est déclenché. La requête peut être envoyée en utilisant GET, POST, PUT ou JSON.';
$lang['AdminMain.index.option_delete'] = 'Supprimer';
$lang['AdminMain.index.option_edit'] = 'Editer';
$lang['AdminMain.index.heading_options'] = 'Options';
$lang['AdminMain.index.heading_method'] = 'Méthode';
$lang['AdminMain.index.heading_event'] = 'Événement';
$lang['AdminMain.index.heading_callback'] = 'Rappel';
$lang['AdminMain.index.boxtitle_webhooks'] = 'Crochets Web';
$lang['AdminMain.index.categorylink_addwebhook'] = 'Ajouter un Webhook';
$lang['AdminMain.index.category_outgoing'] = 'Sortants';
$lang['AdminMain.index.category_incoming'] = 'A venir';
$lang['AdminMain.index.page_title_edit'] = 'Modifier le Webhook';
$lang['AdminMain.index.page_title_add'] = 'Ajouter un Webhook';
$lang['AdminMain.index.page_title_index'] = 'Crochets Web';
$lang['AdminMain.modal.delete_text'] = 'Êtes-vous sûr de vouloir supprimer ce webhook ?';
$lang['AdminMain.!success.webhook_deleted'] = 'Le webhook a été supprimé avec succès !';
$lang['AdminMain.!success.webhook_updated'] = 'Le webhook a été mis à jour avec succès !';
$lang['AdminMain.!success.webhook_added'] = 'Le webhook a été ajouté avec succès !';
$lang['AdminMain.!tooltip.callback'] = 'Le callback représente l\'endroit où la demande va être envoyée ou reçue. Pour les webhooks sortants, il doit s\'agir d\'une URL et pour les webhooks entrants, il doit s\'agir du nom de l\'URL où la demande sera reçue. par exemple : http://blesta.com/plugin/webhooks/trigger/index/[Callback Name].';
$lang['AdminMain.edit.field_cancel'] = 'Annuler';
$lang['AdminMain.add.field_cancel'] = 'Annuler';
$lang['AdminMain.logs.no_results'] = 'Il n\'y a pas de journaux disponibles.';
$lang['AdminMain.logs.option_resend'] = 'Renvoyer';
$lang['AdminMain.logs.confirm_resend'] = 'Êtes-vous sûr de vouloir renvoyer cet événement ?';
$lang['AdminMain.logs.field_filterdateend'] = 'Date de fin';
$lang['AdminMain.logs.field_filterdatestart'] = 'Date de début';
$lang['AdminMain.logs.field_filterhttpstatus'] = 'Statut HTTP';
$lang['AdminMain.logs.field_filterevent'] = 'Événement';
$lang['AdminMain.logs.field_filterwebhook_all'] = 'Tous les Webhooks';
$lang['AdminMain.logs.field_filterwebhook'] = 'Crochet Web';
$lang['AdminMain.logs.heading_options'] = 'Options';
$lang['AdminMain.logs.heading_date_last_retry'] = 'Dernière tentative';
$lang['AdminMain.logs.heading_date_triggered'] = 'Date de déclenchement';
$lang['AdminMain.logs.heading_http_response'] = 'Réponse HTTP';
$lang['AdminMain.logs.heading_method'] = 'Méthode';
$lang['AdminMain.logs.heading_response'] = 'Réponse';
$lang['AdminMain.logs.heading_event'] = 'Événement';
$lang['AdminMain.logs.heading_webhook'] = 'Crochet Web';
$lang['AdminMain.logs.categorylink_viewwebhooks'] = 'Voir les Webhooks';
$lang['AdminMain.logs.boxtitle_logs'] = 'Journaux des webhooks';
$lang['AdminMain.index.option_logs'] = 'Journaux';
$lang['AdminMain.index.categorylink_viewlogs'] = 'Voir tous les journaux';
$lang['AdminMain.index.page_title_logs'] = 'Journaux des webhooks';
$lang['AdminMain.!success.webhook_retried'] = 'Le webhook a été réessayé avec succès !';

