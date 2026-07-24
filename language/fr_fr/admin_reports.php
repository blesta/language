<?php
/**
 * Admin Reports
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminReports.index.page_title'] = 'Rapports de facturation';
$lang['AdminReports.index.box_title'] = 'Rapports';
$lang['AdminReports.index.field_format'] = 'Format';
$lang['AdminReports.index.field_report_type'] = 'Type de rapport';
$lang['AdminReports.index.field_submit'] = 'Exportation';
$lang['AdminReports.index.reports'] = 'Générer';
$lang['AdminReports.index.customize'] = 'Personnaliser';
$lang['AdminReports.filter.field_start'] = 'De';
$lang['AdminReports.filter.preset_custom'] = 'Personnalisé';
$lang['AdminReports.!error.refresh.failed'] = 'La mise à jour de l\'instantané n\'a pas pu être effectuée. Veuillez réessayer plus tard.';
$lang['AdminReports.filter.preset_12m'] = '12 mois';
$lang['AdminReports.!error.refresh.already_running'] = 'Une capture d\'écran est déjà en cours. Veuillez réessayer dans quelques instants.';
$lang['AdminReports.filter.preset_90d'] = '90 jours';
$lang['AdminReports.!error.refresh.rate_limited'] = 'Un instantané a été actualisé au cours des 5 dernières minutes. Veuillez patienter avant de le rafraîchir à nouveau.';
$lang['AdminReports.filter.preset_30d'] = '30 jours';
$lang['AdminReports.!error.refresh.invalid_csrf'] = 'Votre session a expiré. Veuillez actualiser la page et réessayer.';
$lang['AdminReports.filter.field_daterange'] = 'Période';
$lang['AdminReports.error.load_failed'] = 'Impossible de charger les données. Veuillez réessayer.';
$lang['AdminReports.index.tab_exports'] = 'Exportations';
$lang['AdminReports.loading'] = 'Chargement en cours…';
$lang['AdminReports.index.tab_renewals'] = 'Renouvellements';
$lang['AdminReports.charts.ltv_note'] = 'Mensuel. LTV = ARPU ÷ taux de désabonnement du mois ; des lacunes apparaissent lorsque le taux de désabonnement est nul ou que l\'historique est insuffisant.';
$lang['AdminReports.index.tab_retention'] = 'Fidélisation';
$lang['AdminReports.charts.ltv_series'] = 'LTV';
$lang['AdminReports.index.tab_revenue'] = 'Chiffre d\'affaires';
$lang['AdminReports.charts.ltv_title'] = 'Évolution du LTV';
$lang['AdminReports.index.tab_overview'] = 'Présentation générale';
$lang['AdminReports.renewals.computed'] = 'Prévisions calculées %1$s';
$lang['AdminReports.renewals.note'] = 'Chiffre d\'affaires prévisionnel lié aux renouvellements pour les 12 prochains mois : chaque renouvellement prévu pour chaque service, reporté de sa date de renouvellement suivante d\'une durée équivalente à sa période de facturation, au tarif en vigueur, net des remises récurrentes. Les prévisions cessent en cas de résiliation prévue. Calculé à partir du dernier instantané disponible.';
$lang['AdminReports.renewals.col_count'] = 'Renouvellement des services';
$lang['AdminReports.renewals.col_amount'] = 'Montant prévu';
$lang['AdminReports.renewals.col_month'] = 'Mois';
$lang['AdminReports.renewals.series_amount'] = 'Montant du renouvellement';
$lang['AdminReports.renewals.chart_title'] = 'Prochains renouvellements';
$lang['AdminReports.retention.cohorts_shown'] = 'Affichage des dernières cohortes de l\'étude « %1$s ».';
$lang['AdminReports.retention.note'] = 'Les cohortes regroupent les clients en fonction du mois au cours duquel ils ont bénéficié de leur premier service. Chaque cellule correspond à la part de la cohorte bénéficiant de services actifs au cours de ce mois, telle qu\'elle ressort du dernier instantané du mois. Les chiffres ne tiennent pas compte de la devise.';
$lang['AdminReports.retention.col_clients'] = 'Clients';
$lang['AdminReports.retention.col_cohort'] = 'Cohorte';
$lang['AdminReports.retention.grid_title'] = 'Rétention des cohortes';
$lang['AdminReports.revenue.allocation_note'] = 'Le chiffre d\'affaires lié aux forfaits est réparti au prorata entre les lignes de facture ; il s\'agit d\'une estimation.';
$lang['AdminReports.revenue.breakdown_empty'] = 'Aucune donnée relative au chiffre d\'affaires n\'est disponible pour cette période.';
$lang['AdminReports.revenue.breakdown_unknown'] = 'Inconnu';
$lang['AdminReports.revenue.breakdown_unassigned'] = 'Non attribué';
$lang['AdminReports.revenue.breakdown_refunded'] = 'Remboursé';
$lang['AdminReports.revenue.breakdown_collected'] = 'Recueil';
$lang['AdminReports.revenue.breakdown_name'] = 'Nom';
$lang['AdminReports.revenue.dimension_package'] = 'Colis';
$lang['AdminReports.revenue.dimension_gateway'] = 'Passerelle';
$lang['AdminReports.revenue.dimension_total'] = 'Total';
$lang['AdminReports.revenue.field_dimension'] = 'Répartition par';
$lang['AdminReports.charts.revenue_refunded'] = 'Remboursé';
$lang['AdminReports.charts.revenue_invoiced'] = 'Facturé';
$lang['AdminReports.charts.revenue_collected'] = 'Recueil';
$lang['AdminReports.charts.revenue_title'] = 'Chiffre d\'affaires';
$lang['AdminReports.charts.churn_net'] = 'Taux de désabonnement net';
$lang['AdminReports.charts.churn_gross'] = 'Taux de désabonnement brut';
$lang['AdminReports.charts.churn_title'] = 'Taux de désabonnement du MRR';
$lang['AdminReports.charts.movement_churn'] = 'Taux de désabonnement';
$lang['AdminReports.charts.movement_contraction'] = 'Contraction';
$lang['AdminReports.charts.movement_reactivation'] = 'Réactivation';
$lang['AdminReports.charts.movement_expansion'] = 'Expansion';
$lang['AdminReports.charts.movement_new'] = 'Nouveau';
$lang['AdminReports.charts.movements_title'] = 'Mouvements MRR';
$lang['AdminReports.charts.mrr_suspended_series'] = 'MRR suspendu';
$lang['AdminReports.charts.mrr_series'] = 'MRR';
$lang['AdminReports.charts.mrr_title'] = 'Chiffre d\'affaires mensuel récurrent';
$lang['AdminReports.tiles.active_services'] = 'Services actifs';
$lang['AdminReports.tiles.active_clients'] = 'Clients actifs';
$lang['AdminReports.tiles.ltv_insufficient'] = 'Antécédents insuffisants';
$lang['AdminReports.tiles.ltv'] = 'LTV';
$lang['AdminReports.tiles.arpu'] = 'ARPU';
$lang['AdminReports.tiles.net_mrr_growth'] = 'Croissance nette du MRR';
$lang['AdminReports.tiles.arr'] = 'ARR';
$lang['AdminReports.tiles.suspended_mrr'] = 'y compris « %1$s », suspendu';
$lang['AdminReports.tiles.mrr'] = 'MRR contractuel';
$lang['AdminReports.empty.no_series'] = 'Aucune donnée n\'est disponible pour la période sélectionnée.';
$lang['AdminReports.empty.collecting_since'] = 'Collecte de données depuis %1$s';
$lang['AdminReports.empty.no_data_text'] = 'La collecte des données commencera lors de la prochaine exécution de la tâche cron. Revenez vérifier une fois que la sauvegarde sera terminée.';
$lang['AdminReports.empty.no_data_title'] = 'Aucune donnée analytique pour l\'instant';
$lang['AdminReports.dashboard.refreshing'] = 'C\'est rafraîchissant…';
$lang['AdminReports.dashboard.refresh'] = 'Actualiser';
$lang['AdminReports.dashboard.never'] = 'Jamais';
$lang['AdminReports.dashboard.data_as_of'] = 'Données au %1$s';
$lang['AdminReports.filter.consolidated_tooltip'] = 'Convertissez toutes les devises dans votre devise par défaut en utilisant le taux de change en vigueur à la date du relevé.';
$lang['AdminReports.filter.field_consolidated'] = 'Regrouper sous %1$s';
$lang['AdminReports.filter.field_currency'] = 'Devise';
$lang['AdminReports.filter.granularity_month'] = 'Mensuel';
$lang['AdminReports.filter.granularity_week'] = 'Hebdomadaire';
$lang['AdminReports.filter.granularity_day'] = 'Quotidien';
$lang['AdminReports.filter.field_granularity'] = 'Granularité';
$lang['AdminReports.filter.field_end'] = 'À';

