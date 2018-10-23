<?php
// Copyright (C) 2010-2013 Combodo SARL
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
 * Localized data
 *
 * @copyright   Copyright (C) 2010-2018 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 * @traductor   Miguel Turrubiates <miguel_tf@yahoo.com> 
 */

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Menu:RequestManagement' => 'Administración de Requerimientos',
	'Menu:RequestManagement+' => 'Administración de Requerimientos',
	'Menu:RequestManagementProvider' => 'Proveedor de Mesa de Ayuda',
	'Menu:RequestManagementProvider+' => 'Proveedor de Mesa de Ayuda',
	'Menu:UserRequest:Provider' => 'Requerimientos Abiertos transferidos a Proveedor',
	'Menu:UserRequest:Provider+' => 'Requerimientos Abiertos transferidos a Proveedor',
	'Menu:UserRequest:Overview' => 'Resumen de Requerimientos',
	'Menu:UserRequest:Overview+' => 'Resumen de Requerimientos',
	'Menu:NewUserRequest' => 'Nuevo Requerimiento',
	'Menu:NewUserRequest+' => 'Nuevo Requerimiento',
	'Menu:SearchUserRequests' => 'Búsqueda de Requerimientos de Usuario',
	'Menu:SearchUserRequests+' => 'Búsqueda de Requerimientos de Usuario',
	'Menu:UserRequest:Shortcuts' => 'Acceso Rápido',
	'Menu:UserRequest:Shortcuts+' => 'Acceso Rápido',
	'Menu:UserRequest:MyRequests' => 'Requerimientos Asignados a Mí',
	'Menu:UserRequest:MyRequests+' => 'Requerimientos Asignados a Mí (como Analista)',
	'Menu:UserRequest:MySupportRequests' => "Llamadas de Soporte Asignadas a Mí",
	'Menu:UserRequest:MySupportRequests+' => "Llamadas de Soporte Asignadas a Mí (como Analista)",
  'Menu:UserRequest:EscalatedRequests' => 'Requerimientos Escalados',
	'Menu:UserRequest:EscalatedRequests+' => 'Requerimientos Escalados',
	'Menu:UserRequest:OpenRequests' => 'Requerimientos Abiertos',
	'Menu:UserRequest:OpenRequests+' => 'Requerimientos Abiertos',
	'Menu:UserRequest:OpenProblems' => 'Problemas Abiertos',
	'Menu:UserRequest:OpenProblems+' => 'Problemas Abiertos',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Requerimientos asignados a Mí',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Requerimientos por Tipo de los Últimos 14 días',
	'UI-RequestManagementOverview-Last-14-days' => 'Número de Requerimientos de los Últimos 14 días',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Requerimientos Abiertos por Estatus',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Requerimientos Abiertos por Analista',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Requerimientos Abiertos por Tipo',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Requerimientos Abiertos por Cliente',
	'Class:UserRequest:KnownErrorList' => 'Errores Conocidos',
	'Menu:UserRequest:MyWorkOrders' => 'Ordenes de Trabajo asignadas a Mí',
	'Menu:UserRequest:MyWorkOrders+' => 'Ordenes de Trabajo asignadas a Mí',
	'Class:Problem:KnownProblemList' => 'Problemas Conocidos',
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
// Class: UserRequest
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:UserRequest' => 'Requerimiento',
	'Class:UserRequest+' => 'Requerimiento',
	'Class:UserRequest/Attribute:status' => 'Estatus',
	'Class:UserRequest/Attribute:status+' => 'Estatus',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nuevo',
	'Class:UserRequest/Attribute:status/Value:new+' => 'Nuevo',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Escalado por Tiempo de Asignación',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => 'Escalado por Tiempo de Asignación',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Asignado',
	'Class:UserRequest/Attribute:status/Value:assigned+' => 'Asignado',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Escalado por Tiempo de Solución',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => 'Escalado por Tiempo de Solución',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Esperando Aprobación',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => 'Esperando Aprobación',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Aprobado',
	'Class:UserRequest/Attribute:status/Value:approved+' => 'Aprobado',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rechazado',
	'Class:UserRequest/Attribute:status/Value:rejected+' => 'Rechazado',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Pendiente',
	'Class:UserRequest/Attribute:status/Value:pending+' => 'Pendiente',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Solucionado',
	'Class:UserRequest/Attribute:status/Value:resolved+' => 'Solucionado',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Cerrado',
	'Class:UserRequest/Attribute:status/Value:closed+' => 'Cerrado',
  'Class:UserRequest/Attribute:request_type' => 'Tipo de Reporte',
	'Class:UserRequest/Attribute:request_type+' => 'Tipo de Reporte',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incidente',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => 'Incidente',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Requerimiento de Servicio',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Requerimiento de Servicio',
	'Class:UserRequest/Attribute:impact' => 'Impacto',
	'Class:UserRequest/Attribute:impact+' => 'Impacto',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Un Departmento',
	'Class:UserRequest/Attribute:impact/Value:1+' => 'Un Departmento',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Un Servicio',
	'Class:UserRequest/Attribute:impact/Value:2+' => 'Un Servicio',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Una Persona',
	'Class:UserRequest/Attribute:impact/Value:3+' => 'Una Persona',
	'Class:UserRequest/Attribute:priority' => 'Prioridad',
	'Class:UserRequest/Attribute:priority+' => 'Prioridad',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Crítica',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'Crítica',
	'Class:UserRequest/Attribute:priority/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Baja',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'Baja',
	'Class:UserRequest/Attribute:urgency' => 'Urgencia',
	'Class:UserRequest/Attribute:urgency+' => 'Urgencia',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Crítica',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'Critica',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Baja',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'Baja',
	'Class:UserRequest/Attribute:origin' => 'Origen',
	'Class:UserRequest/Attribute:origin+' => 'Origen',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Correo-e',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'Correo-e',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Monitoreo',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'Monitoreo',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Teléfono',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'Teléfono',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Portal',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'Portal',
	'Class:UserRequest/Attribute:approver_id' => 'Aprobador',
	'Class:UserRequest/Attribute:approver_id+' => 'Aprobador',
	'Class:UserRequest/Attribute:approver_email' => 'Correo Electrónico del Aprobador',
	'Class:UserRequest/Attribute:approver_email+' => 'Correo Electrónico del Aprobador',
	'Class:UserRequest/Attribute:service_id' => 'Servicio',
	'Class:UserRequest/Attribute:service_id+' => 'Servicio',
	'Class:UserRequest/Attribute:service_name' => 'Servicio',
	'Class:UserRequest/Attribute:service_name+' => 'Servicio',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Subcategoría',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => 'Subcategoría',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Subcategoría',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => 'Subcategoría de Servicio',
	'Class:UserRequest/Attribute:escalation_flag' => 'Bandera de Escalamiento',
	'Class:UserRequest/Attribute:escalation_flag+' => 'Bandera de Escalamiento',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Si',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Si',
	'Class:UserRequest/Attribute:escalation_reason' => 'Motivo de Escalamiento',
	'Class:UserRequest/Attribute:escalation_reason+' => 'Motivo de Escalamiento',
	'Class:UserRequest/Attribute:assignment_date' => 'Fecha de Asignación',
	'Class:UserRequest/Attribute:assignment_date+' => 'Fecha de Asignación',
	'Class:UserRequest/Attribute:resolution_date' => 'Fecha de Solución',
	'Class:UserRequest/Attribute:resolution_date+' => 'Fecha de Solución',
	'Class:UserRequest/Attribute:last_pending_date' => 'Última Fecha de Espera',
	'Class:UserRequest/Attribute:last_pending_date+' => 'Última Fecha de Espera',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Espera Acumulada',
	'Class:UserRequest/Attribute:cumulatedpending+' => 'Espera Acumulada',
	'Class:UserRequest/Attribute:tto' => 'TDA - Tiempo de Asignación',
	'Class:UserRequest/Attribute:tto+' => 'Tiempo de Asignación',
	'Class:UserRequest/Attribute:ttr' => 'TDS - Tiempo de Solución',
	'Class:UserRequest/Attribute:ttr+' => 'Tiempo de Solución',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'Límite de Tiempo de Asignación',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => 'Límite de Tiempo de Asignación',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA de Tiempo de Asignanción Cumplido',
	'Class:UserRequest/Attribute:sla_tto_passed+' => 'SLA de Tiempo de Asignanción Cumplido',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA de Tiempo de Asignación Excedído',
	'Class:UserRequest/Attribute:sla_tto_over+' => 'SLA de Tiempo de Asignación Excedído',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'Límite de Tiempo de Solución',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => 'Límite de Tiempo de Solución',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA de Tiempo de Solución Cumplido',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => 'SLA de Tiempo de Solución Cumplido',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA de Tiempo de Solución Excedído',
	'Class:UserRequest/Attribute:sla_ttr_over+' => 'SLA de Tiempo de Solución Excedído',
	'Class:UserRequest/Attribute:time_spent' => 'Tiempo Utilizado',
	'Class:UserRequest/Attribute:time_spent+' => 'Tiempo Utilizado',
	'Class:UserRequest/Attribute:resolution_code' => 'Código de Solución',
	'Class:UserRequest/Attribute:resolution_code+' => 'Código de Solución',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Asistencia',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'Asistencia',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Falla Corregida',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'Falla Corregida',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Reparación de Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'Reparación de Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'Otro',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'Otro',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Parche de Software',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'Parche de Software',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'Actualización de Sistema',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'Actualización de Sistema',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Capacitación',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'Capacitación',
	'Class:UserRequest/Attribute:solution' => 'Solución',
	'Class:UserRequest/Attribute:solution+' => 'Solución',
	'Class:UserRequest/Attribute:pending_reason' => 'Motivo Pendiente',
	'Class:UserRequest/Attribute:pending_reason+' => 'Motivo Pendiente',
	'Class:UserRequest/Attribute:parent_request_id' => 'Requerimiento Padre',
	'Class:UserRequest/Attribute:parent_request_id+' => 'Requerimiento Padre',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref. Requerimiento',
	'Class:UserRequest/Attribute:parent_request_ref+' => 'Ref. Requerimiento',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Problema Padre',
	'Class:UserRequest/Attribute:parent_problem_id+' => 'Problema Padre',
	'Class:UserRequest/Attribute:parent_incident_id' => 'Incidente Padre',
	'Class:UserRequest/Attribute:parent_incident_id+' => 'Incidente Padre',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref. Problema',
	'Class:UserRequest/Attribute:parent_problem_ref+' => 'Ref. Problema',
	'Class:UserRequest/Attribute:parent_change_id' => 'Cambio Padre',
	'Class:UserRequest/Attribute:parent_change_id+' => 'Cambio Padre',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref. Cambio',
	'Class:UserRequest/Attribute:parent_change_ref+' => 'Ref. Cambio',
	'Class:UserRequest/Attribute:related_request_list' => 'Requerimientos Hijo',
	'Class:UserRequest/Attribute:related_request_list+' => 'Requerimientos Hijo',
	'Class:UserRequest/Attribute:public_log' => 'Bitácora Pública',
	'Class:UserRequest/Attribute:public_log+' => 'Bitácora Pública',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Satisfacción del Usuario',
	'Class:UserRequest/Attribute:user_satisfaction+' => 'Satisfacción del Usuario',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Muy Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Muy Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Insatisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Insatisfecha',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Muy Insatisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Muy Insatisfecho',
	'Class:UserRequest/Attribute:user_comment' => 'Comentarios del Usuario',
	'Class:UserRequest/Attribute:user_comment+' => 'Comentarios del Usuario',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Stimulus:ev_assign' => 'Asignar',
	'Class:UserRequest/Stimulus:ev_assign+' => 'Asignar',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Reasignar',
	'Class:UserRequest/Stimulus:ev_reassign+' => 'Reasignar',
	'Class:UserRequest/Stimulus:ev_approve' => 'Aprobar',
	'Class:UserRequest/Stimulus:ev_approve+' => 'Aprobar',
	'Class:UserRequest/Stimulus:ev_reject' => 'Rechazar',
	'Class:UserRequest/Stimulus:ev_reject+' => 'Rechazar',
	'Class:UserRequest/Stimulus:ev_pending' => 'Pendiente',
	'Class:UserRequest/Stimulus:ev_pending+' => 'Pendiente',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Solución Automática',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => 'Solución Automática',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Cierre Automático',
	'Class:UserRequest/Stimulus:ev_autoclose+' => 'Cierre Automático',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Marcar como Solucionado',
	'Class:UserRequest/Stimulus:ev_resolve+' => 'Marcar como Solucionado',
	'Class:UserRequest/Stimulus:ev_close' => 'Cerrar este Ticket',
	'Class:UserRequest/Stimulus:ev_close+' => 'Cerrar este Ticket',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Reabrir',
	'Class:UserRequest/Stimulus:ev_reopen+' => 'Reabrir',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Esperando Aprobación',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => 'Esperando Aprobación',
));


Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Portal:TitleDetailsFor_Request' => 'Detalles del Requerimiento',
	'Portal:ButtonUpdate' => 'Actualizar',
	'Portal:ButtonClose' => 'Cerrar',
	'Portal:ButtonReopen' => 'Re-abrir',
	'Portal:ShowServices' => 'Catálogo de Servicios',
	'Portal:SelectRequestType' => 'Seleccione un Tipo de Requerimiento',
	'Portal:SelectServiceElementFrom_Service' => 'Seleccione un Elemento de Servicio para %1$s',
	'Portal:ListServices' => 'Lista de Servicios',
	'Portal:TitleDetailsFor_Service' => 'Detalles para el Servicio',
	'Portal:Button:CreateRequestFromService' => 'Crear un Requerimiento para este Servicio',
	'Portal:ListOpenRequests' => 'Requerimientos Abiertos',
'Portal:UserRequest:MoreInfo' => 'Más Información',
	'Portal:Details-Service-Element' => 'Elementos del Servicio',
	'Portal:NoClosedTicket' => 'Requerimiento No Cerrado',
	'Portal:NoService' => '',
	'Portal:ListOpenProblems' => 'Problemas Abiertos',
	'Portal:ShowProblem' => 'Problemas',
	'Portal:ShowFaqs' => 'Preguntas Frecuentes',
	'Portal:NoOpenProblem' => 'Problema No Abierto',
	'Portal:SelectLanguage' => "Seleccione un Idioma",
	'Portal:LanguageChangedTo_Lang' => 'Idioma Cambiado a ',
	'Portal:ChooseYourFavoriteLanguage' => 'Seleccione su Idioma Favorito',
	'Tickets:Related:OpenIncidents' => 'Incidentes Abiertos',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'No puede asignarse el requerimiento Padre a si mismo',
	'Class:UserRequest/Method:ResolveChildTickets' => 'Resolver tickets hijos',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascadear la solución a los tickets hijos (ev_autoresolve), y alinear las siguientes características: servicio, equipo, agente, información de solución',
));


Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization~~',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization~~',
	'Organization:Overview:Tickets' => 'Tickets for this organization~~',
));
