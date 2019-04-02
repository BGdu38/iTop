<?php
// Copyright (C) 2010-2014 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>
/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
//
// Class: Incident
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:IncidentManagement' => 'Gestion des incidents',
	'Menu:IncidentManagement+' => 'Gestion des incidents',
	'Menu:Incident:Overview' => 'Vue d\'ensemble',
	'Menu:Incident:Overview+' => 'Vue d\'ensemble',
	'Menu:NewIncident' => 'Nouvel incident',
	'Menu:NewIncident+' => 'Créer un nouveau ticket d\'incident',
	'Menu:SearchIncidents' => 'Rechercher des incidents',
	'Menu:SearchIncidents+' => 'Rechercher parmi les tickets d\'incidents',
	'Menu:Incident:Shortcuts' => 'Raccourcis',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => 'Mes incidents',
	'Menu:Incident:MyIncidents+' => 'Tickets d\'incident qui me sont assignés',
	'Menu:Incident:EscalatedIncidents' => 'Incidents en cours d\'escalade',
	'Menu:Incident:EscalatedIncidents+' => 'Ticket d\'incident en cours d\'escalade',
	'Menu:Incident:OpenIncidents' => 'Incidents ouverts',
	'Menu:Incident:OpenIncidents+' => 'Tous les tickets d\'incident ouverts',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Incidents des 14 derniers jours par priorité',
	'UI-IncidentManagementOverview-Last-14-days' => 'Incidents des 14 derniers jours',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Incidents ouverts par statut',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Incidents ouverts par agent',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Incidents ouverts par client',
));




// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: Incident
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Incident' => 'Incident',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => 'Statut',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'Nouveau',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Escalade tto',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Assignée',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Escalate ttr',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'En attente d\'approbation',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'En attente',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Résolue',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Fermée',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'Impact',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => 'Un département',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'Un service',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => 'Une personne',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => 'Priorité',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => 'critique',
	'Class:Incident/Attribute:priority/Value:1+' => 'critique',
	'Class:Incident/Attribute:priority/Value:2' => 'haute',
	'Class:Incident/Attribute:priority/Value:2+' => 'haute',
	'Class:Incident/Attribute:priority/Value:3' => 'moyenne',
	'Class:Incident/Attribute:priority/Value:3+' => 'moyenne',
	'Class:Incident/Attribute:priority/Value:4' => 'basse',
	'Class:Incident/Attribute:priority/Value:4+' => 'basse',
	'Class:Incident/Attribute:urgency' => 'Urgence',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => 'critique',
	'Class:Incident/Attribute:urgency/Value:1+' => 'critique',
	'Class:Incident/Attribute:urgency/Value:2' => 'haute',
	'Class:Incident/Attribute:urgency/Value:2+' => 'haute',
	'Class:Incident/Attribute:urgency/Value:3' => 'moyenne',
	'Class:Incident/Attribute:urgency/Value:3+' => 'moyenne',
	'Class:Incident/Attribute:urgency/Value:4' => 'basse',
	'Class:Incident/Attribute:urgency/Value:4+' => 'basse',
	'Class:Incident/Attribute:origin' => 'Origine',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => 'email',
	'Class:Incident/Attribute:origin/Value:mail+' => 'email',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'supervision',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'supervision',
	'Class:Incident/Attribute:origin/Value:phone' => 'téléphone',
	'Class:Incident/Attribute:origin/Value:phone+' => 'téléphone',
	'Class:Incident/Attribute:origin/Value:portal' => 'portail',
	'Class:Incident/Attribute:origin/Value:portal+' => 'portail',
	'Class:Incident/Attribute:service_id' => 'Service',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Nom du service',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Sous catégorie de service',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Nom Sous catégorie de service',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'Ticket à surveiller',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'Non',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'Non',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Oui',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'Oui',
	'Class:Incident/Attribute:escalation_reason' => 'Raison de surveillance',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Date d\'assignation',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => 'Date de résolution',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'Dernière date de suspension',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => 'Temps cumulé de suspension',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'TTO',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => 'TTR',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'Echéance TTO',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA TTO dépassé ?',
	'Class:Incident/Attribute:sla_tto_passed+' => 'SLA TTO dépassé ?',
	'Class:Incident/Attribute:sla_tto_over' => 'Dépassement SLA TTO',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'Echéance TTR',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA TTR dépassé ?',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'Dépassement SLA TTR',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => 'Délai de résolution',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:resolution_code' => 'Code de résolution',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'Résolution de bog',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'Résolution de bog',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'Réparation matériel',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'Réparation matériel',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'autre',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'autre',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'patch logiciel',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'patch logiciel',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'mise à jour système',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'mise à jour système',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'formation',
	'Class:Incident/Attribute:resolution_code/Value:training+' => 'formation',
	'Class:Incident/Attribute:solution' => 'Solution',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Raison de suspension',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Incident parent',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Référence incident parent',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => 'Changement parent',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Ref Changement parent',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Problème lié',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
	'Class:Incident/Attribute:related_request_list' => 'Requêtes filles',
	'Class:Incident/Attribute:related_request_list+' => '',
	'Class:Incident/Attribute:child_incidents_list' => 'Incidents fils',
	'Class:Incident/Attribute:child_incidents_list+' => '',
	'Class:Incident/Attribute:public_log' => 'Journal public',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'Satisfaction client',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Très satisfait',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => 'Très satisfait',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Plutôt satisfait',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => 'Plutôt satisfait',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Plutôt mécontent',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => 'Plutôt mécontent',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Très mécontent',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => 'Très mécontent',
	'Class:Incident/Attribute:user_comment' => 'Commentaire client',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'Nom usuel de l\'incident parent',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => 'Assigner',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Réassigner',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'En attente',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'ev_timeout',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Résolution automatique',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Fermeture automatique',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Marquer comme résolu',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Clore cette requête',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Ré-ouvrir',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'L\'Incident parent ne peut pas être assigné à lui même',

	'Class:Incident/Method:ResolveChildTickets' => 'ResolveChildTickets (résoudre les tickets fils)',
	'Class:Incident/Method:ResolveChildTickets+' => 'Cascader l\'action de résolution du ticket (ev_autoresolve) vers les requêtes et incidents fils, et aligner les caractéristiques suivantes : service, équipe, agent, information de résolution',
	'Tickets:Related:OpenIncidents' => 'Open incidents',
));

//
// Class: Incident
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Incident/Attribute:parent_problem_id' => 'Problème lié',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
));
