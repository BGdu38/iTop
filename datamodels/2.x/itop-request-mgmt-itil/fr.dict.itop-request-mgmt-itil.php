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
 * @copyright   Copyright (C) 2010-2018 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: UserRequest
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:UserRequest' => 'Demande Utilisateur',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => 'Statut',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nouveau',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Escalade tto',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Assignée',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Escalade ttr',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'En attente d\'approbation',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Approuvée',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rejetée',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => 'En attente',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Résolue',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Fermée',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => 'Type de Requête',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'demande de service',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Demander la mise en place d\'une nouvelle fonctionalité',
	'Class:UserRequest/Attribute:impact' => 'Impact',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Un département',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Un service',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Une personne',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => 'Priorité',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => 'critique',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'critique',
	'Class:UserRequest/Attribute:priority/Value:2' => 'haute',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'haute',
	'Class:UserRequest/Attribute:priority/Value:3' => 'moyenne',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'moyenne',
	'Class:UserRequest/Attribute:priority/Value:4' => 'basse',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'basse',
	'Class:UserRequest/Attribute:urgency' => 'Urgence',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'critique',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'critique',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'haute',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'haute',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'moyenne',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'moyenne',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'basse',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'basse',
	'Class:UserRequest/Attribute:origin' => 'Origine',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'email',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'email',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'supervision',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'supervision',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'téléphone',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'téléphone',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'portail',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'portail',
	'Class:UserRequest/Attribute:approver_id' => 'Approbateur',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'Email Approbateur',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'Service',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'Nom du service',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Sous catégorie de service',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Nom Sous catégorie de service',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'Ticket à surveiller',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'Non',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'Non',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Oui',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Oui',
	'Class:UserRequest/Attribute:escalation_reason' => 'Raison de surveillance',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => 'Date d\'assignation',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => 'Date de résolution',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => 'Dernière date de suspension',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Temps cumulé de suspension',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'Echéance TTO',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA TTO dépassé ?',
	'Class:UserRequest/Attribute:sla_tto_passed+' => 'SLA TTO dépassé ?',
	'Class:UserRequest/Attribute:sla_tto_over' => 'Dépassement SLA TTO',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'Echéance TTR',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA TTR dépassé ?',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'Dépassement SLA TTR',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => 'Délai de résolution',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => 'Code de résolution',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Résolution de bog',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'Résolution de bog',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Réparation matériel',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'Réparation matériel',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'autre',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'autre',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'patch logiciel',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'patch logiciel',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'mise à jour système',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'mise à jour système',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'formation',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'formation',
	'Class:UserRequest/Attribute:solution' => 'Solution',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Raison de suspension',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => 'Requête parente',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_incident_id' => 'Incident parent',
	'Class:UserRequest/Attribute:parent_incident_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref requête parente',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Problème lié',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref Problème lié',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => 'Changement parent',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref Changement parent',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => 'Requêtes filles',
	'Class:UserRequest/Attribute:related_request_list+' => '',
	'Class:UserRequest/Attribute:public_log' => 'Journal public',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Satisfaction client',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Très satisfait',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Très satisfait',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Plutôt satisfait',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Plutôt satisfait',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Plutôt mécontent',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Plutôt mécontent',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Très mécontent',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Très mécontent',
	'Class:UserRequest/Attribute:user_comment' => 'Commentaire client',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'nom usuel requête parente',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => 'Assigner',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Réassigner',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approuver',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Rejeter',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => 'En attente',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'ev_timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Résolution automatique',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Fermeture automatique',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Marquer comme résolu',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'Clore cette requête',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Ré-ouvrir',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Attendre une approbation',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'La Requête parente ne peut pas être assignée à elle même',
));


Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:RequestManagement' => 'Gestion des demandes',
	'Menu:RequestManagement+' => 'Gestion des demandes utilisateurs',
	'Menu:UserRequest:Overview' => 'Vue d\'ensemble',
	'Menu:UserRequest:Overview+' => 'Vue d\'ensemble des demandes utilisateurs',
	'Menu:NewUserRequest' => 'Nouvelle demande utilisateur',
	'Menu:NewUserRequest+' => 'Créer un nouveau ticket de demande utilisateur',
	'Menu:SearchUserRequests' => 'Rechercher des demandes utilisateur',
	'Menu:SearchUserRequests+' => 'Rechercher parmi les demandes utilisateur',
	'Menu:UserRequest:Shortcuts' => 'Raccourcis',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => 'Demandes utilisateurs qui me sont assignées',
	'Menu:UserRequest:MyRequests+' => 'Demandes utilisateurs qui me sont assignées',
	'Menu:UserRequest:MySupportRequests' => "Mes appels de support",
	'Menu:UserRequest:MySupportRequests+' => "Les appels que j'ai passés",
	'Menu:UserRequest:EscalatedRequests' => 'Demandes en escalade',
	'Menu:UserRequest:EscalatedRequests+' => 'Demandes utilisateurs en escalade',
	'Menu:UserRequest:OpenRequests' => 'Demandes en cours',
	'Menu:UserRequest:OpenRequests+' => 'Toutes les demandes utilisateurs en cours',
	'Menu:UserRequest:OpenProblems' => 'Tous les problèmes en cours',
	'Menu:UserRequest:OpenProblems+' => '',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Requêtes des 14 derniers jours par type',
	'UI-RequestManagementOverview-Last-14-days' => 'Requêtes des 14 derniers jours',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Requêtes ouvertes par statut',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Requêtes ouvertes par agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Requêtes ouvertes par type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Requêtes ouvertes par client',
	'Class:UserRequest/Attribute:org_name' => 'Nom client',
	'Class:UserRequest/Attribute:org_name+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref requête parent',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'nom usuel requête parente',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Demandes utilisateurs qui me sont assignées',
	'Portal:TitleDetailsFor_Request' => 'Détail de la requête',
	'Portal:ButtonUpdate' => 'Mettre à jour',
	'Portal:ButtonClose' => 'Fermer',
	'Portal:ButtonReopen' => 'Re-ouvrir',
	'Portal:ShowServices' => 'Catalogue de service',
	'Portal:SelectRequestType' => 'Sélectionnez un type de requête',
	'Portal:SelectServiceElementFrom_Service' => 'Sélectionnez un élément de service pour %1$s',
	'Portal:SelectRequestTemplate' => 'Sélectionnez un modèle de requête pour %1$s',
	'Portal:ListServices' => 'Liste des services',
	'Portal:TitleDetailsFor_Service' => 'Détail d\'un service',
	'Portal:Button:CreateRequestFromService' => 'Créer une requête pour ce service',
	'Portal:ListOpenRequests' => 'Requêtes ouverts',
	'Portal:UserRequest:MoreInfo' => 'Informations complémentaires',
	'Portal:Details-Service-Element' => 'Eléments de service',
	'Portal:NoClosedTicket' => 'Pas de requête fermée',
	'Portal:NoService' => '',

	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets (résoudre les tickets fils)',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascader l\'action de résolution de la demande (ev_autoresolve), et aligner les caractéristiques suivantes : service, équipe, agent, information de résolution',
	'Menu:RequestManagementProvider' => 'Gestion des demandes fournisseurs',
	'Menu:RequestManagementProvider+' => 'Gestion des demandes fournisseurs',
	'Menu:UserRequest:Provider' => 'Demandes transférées à un fournisseur',
	'Menu:UserRequest:Provider+' => 'Demandes transférées à un fournisseur',
	'Class:UserRequest:KnownErrorList' => 'Erreurs connues',
));


Dict::Add('EN US', 'English', 'English', array(
	'Organization:Overview:UserRequests' => 'Demandes Utilisateurs pour cette organisation',
	'Organization:Overview:MyUserRequests' => 'Mes Demandes Utilisateurs pour cette organisation',
	'Organization:Overview:Tickets' => 'Les Tickets de cette organisation',
));
