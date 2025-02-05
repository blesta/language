<?php
/**
 * Admin Company Currencies
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyCurrencies.!success.setup_updated'] = 'Les paramètres de configuration de la monnaie ont été mis à jour avec succès !';
$lang['AdminCompanyCurrencies.!success.add_created'] = 'La monnaie %1$s a été créée avec succès !';
$lang['AdminCompanyCurrencies.!success.edit_updated'] = 'La devise %1$s a été mise à jour avec succès !';
$lang['AdminCompanyCurrencies.!success.delete_deleted'] = 'La devise %1$s a été supprimée avec succès !';
$lang['AdminCompanyCurrencies.!success.rates_updated'] = 'Les taux de change ont été mis à jour avec succès.';
$lang['AdminCompanyCurrencies.!tooltip.precision'] = 'La précision est le nombre de chiffres significatifs après la décimale que la monnaie prend en charge.';
$lang['AdminCompanyCurrencies.!tooltip.default_currency'] = 'La devise par défaut utilisée dans le système. Réglez-la sur votre devise préférée.';
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = 'Cochez cette case pour activer l\'affichage du code de la devise à côté des prix affichés.';
$lang['AdminCompanyCurrencies.!tooltip.client_set_currency'] = 'Cochez cette case pour permettre aux clients de choisir leur devise par défaut parmi celles disponibles dans le système.';
$lang['AdminCompanyCurrencies.!tooltip.multi_currency_pricing'] = 'Cochez cette case pour que les paquets ne puissent être commandés qu\'en utilisant la tarification définie pour ce paquet. Si vous cochez cette case, vous devez définir un prix pour chaque devise que vous souhaitez accepter pour ce paquet. En d\'autres termes, cela empêche la conversion des devises.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_auto_update'] = 'Cochez cette case pour autoriser la mise à jour automatique des taux de change à l\'aide de l\'un des processeurs de taux de change disponibles.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor'] = 'Définit le processeur à utiliser pour mettre à jour les taux de change. Les devises disponibles varient selon le processeur.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor_key'] = 'Une clé API est nécessaire pour récupérer les taux de change du processeur sélectionné.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_padding'] = 'Les taux de change déterminés par un processeur sont augmentés du pourcentage indiqué.';
$lang['AdminCompanyCurrencies.!cancel.field_cancel'] = 'Annuler';
$lang['AdminCompanyCurrencies.setup.page_title'] = 'Réglages > Entreprise > Devises > Configuration des devises';
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = 'Cette option exige que la tarification des forfaits soit définie dans la devise spécifiée pour être disponible lors de la création de nouveaux services. Si elle n\'est pas cochée et qu\'il n\'existe pas de prix de forfait pour la devise, le prix sera calculé sur la base du taux de change de la devise par défaut.

Les services renouvelés préfèrent toujours la tarification par forfait dans la devise choisie, mais utiliseront le taux de change de la devise par défaut s\'il n\'est pas spécifié pour le forfait.';
$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = 'Configuration de la monnaie';
$lang['AdminCompanyCurrencies.setup.heading_general'] = 'Général';
$lang['AdminCompanyCurrencies.setup.field.default_currency'] = 'Monnaie par défaut';
$lang['AdminCompanyCurrencies.setup.field.show_currency_code'] = 'Afficher le code devise';
$lang['AdminCompanyCurrencies.setup.field.client_set_currency'] = 'Permettre au client de fixer la devise';
$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = 'Multi-devises';
$lang['AdminCompanyCurrencies.setup.field.multi_currency_pricing'] = 'Utiliser la tarification forfaitaire pour les nouveaux services uniquement';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_auto_update'] = 'Mise à jour automatique des taux de change';
$lang['AdminCompanyCurrencies.setup.field.last_updated'] = 'Dernière mise à jour des taux';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor'] = 'Processeur de taux de change';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor_key'] = 'Clé API du processeur de taux de change';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_padding'] = 'Taux de change du coussin';
$lang['AdminCompanyCurrencies.setup.field.setupsubmit'] = 'Mise à jour des paramètres';
$lang['AdminCompanyCurrencies.setup.no_exchange_updated'] = 'Jamais';
$lang['AdminCompanyCurrencies.setup.open_parenthesis'] = '(';
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ')';
$lang['AdminCompanyCurrencies.active.page_title'] = 'Réglages > Entreprise > Devises > Devises actives';
$lang['AdminCompanyCurrencies.active.boxtitle_active'] = 'Monnaies actives';
$lang['AdminCompanyCurrencies.active.categorylink_addcurrency'] = 'Ajouter une devise';
$lang['AdminCompanyCurrencies.active.no_results'] = 'Il n\'y a pas de devises actives.';
$lang['AdminCompanyCurrencies.active.text_currency_code'] = 'Code devise (ISO 4217)';
$lang['AdminCompanyCurrencies.active.text_format'] = 'Format';
$lang['AdminCompanyCurrencies.active.text_precision'] = 'Précision';
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = 'Taux de change';
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = 'Dernière mise à jour';
$lang['AdminCompanyCurrencies.active.text_options'] = 'Options';
$lang['AdminCompanyCurrencies.active.option_edit'] = 'Editer';
$lang['AdminCompanyCurrencies.active.option_delete'] = 'Supprimer';
$lang['AdminCompanyCurrencies.active.confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer cette monnaie ?';
$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = 'Jamais';
$lang['AdminCompanyCurrencies.add.page_title'] = 'Réglages > Entreprise > Devises > Ajouter une devise';
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = 'Ajouter une devise';
$lang['AdminCompanyCurrencies.add.field_code'] = 'Code devise (ISO 4217)';
$lang['AdminCompanyCurrencies.add.field_format'] = 'Format';
$lang['AdminCompanyCurrencies.add.field_precision'] = 'Précision';
$lang['AdminCompanyCurrencies.add.field_prefix'] = 'Symbole du préfixe';
$lang['AdminCompanyCurrencies.add.field_suffix'] = 'Symbole du suffixe';
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = 'Taux de change';
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = 'Créer une monnaie';
$lang['AdminCompanyCurrencies.add.confirm_add'] = 'Etes-vous sûr de vouloir créer cette devise ? Le taux de change de cette devise sera écrasé lorsque les taux de change seront automatiquement mis à jour dans le système. Vous pouvez désactiver les mises à jour automatiques sous [Paramètres] > [Société] > [Devises] > [Configuration des devises].';
$lang['AdminCompanyCurrencies.edit.page_title'] = 'Réglages > Entreprise > Devises > Modifier la devise';
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = 'Modifier la monnaie';
$lang['AdminCompanyCurrencies.edit.field_code'] = 'Code devise (ISO 4217)';
$lang['AdminCompanyCurrencies.edit.field_format'] = 'Format';
$lang['AdminCompanyCurrencies.edit.field_precision'] = 'Précision';
$lang['AdminCompanyCurrencies.edit.field_prefix'] = 'Symbole du préfixe';
$lang['AdminCompanyCurrencies.edit.field_suffix'] = 'Symbole du suffixe';
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = 'Taux de change';
$lang['AdminCompanyCurrencies.edit.field_editsubmit'] = 'Modifier la monnaie';
$lang['AdminCompanyCurrencies.edit.confirm_edit'] = 'Etes-vous sûr de vouloir mettre à jour cette devise ? Le taux de change de cette devise sera écrasé lorsque les taux de change seront automatiquement mis à jour dans le système. Vous pouvez désactiver les mises à jour automatiques sous [Réglages] > [Société] > [Devises] > [Configuration des devises].';

