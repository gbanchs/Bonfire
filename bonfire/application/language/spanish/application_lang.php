<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
	Copyright (c) 2011 Lonnie Ezell

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.
*/

//--------------------------------------------------------------------
// !SETTINGS
//--------------------------------------------------------------------

$lang['bf_site_name']			= 'Nombre del Sitio';
$lang['bf_site_email']			= 'Correo Administrador';
$lang['bf_site_email_help']		= 'The default email that system-generated emails are sent from.';
$lang['bf_site_status']			= 'Status del sitio';
$lang['bf_online']				= 'Online';
$lang['bf_offline']				= 'Offline';
$lang['bf_top_number']			= 'Items <em>per</em> page:';
$lang['bf_top_number_help']		= 'When viewing reports, how many items should be listed at a time?';

$lang['bf_security']			= 'Seguridad';
$lang['bf_login_type']			= 'Tipo de acceso';
$lang['bf_login_type_email']	= 'Sólo Correo';
$lang['bf_login_type_username']	= 'Sólo Nombre de usuario';
$lang['bf_allow_register']		= 'Permitir registros de usuario?';
$lang['bf_login_type_both']		= 'Email o  Usuario';
$lang['bf_use_usernames']		= 'User display across bonfire:';
$lang['bf_use_own_name']		= 'Usar Nombre propio';
$lang['bf_allow_remember']		= 'Permitir\'Recordarme\'?';
$lang['bf_remember_time']		= 'Recordar usuarios para';
$lang['bf_week']				= 'Semana';
$lang['bf_weeks']				= 'Semanas';
$lang['bf_days']				= 'Días';
$lang['bf_username']			= 'Usuario';
$lang['bf_password']			= 'Contraseña';
$lang['bf_password_confirm']	= 'Repetir Contraseña';

$lang['bf_home_page']			= 'Página Principal';
$lang['bf_pages']				= 'Páginas';
$lang['bf_enable_rte']			= 'Enable RTE for pages?';
$lang['bf_rte_type']			= 'RTE Type';
$lang['bf_searchable_default']	= 'Searchable by default?';
$lang['bf_cacheable_default']	= 'Cacheable by default?';
$lang['bf_track_hits']			= 'Track Page Hits?';

$lang['bf_action_save']			= 'Guardar';
$lang['bf_action_delete']		= 'Borrar';
$lang['bf_action_cancel']		= 'Cancelar';
$lang['bf_action_download']		= 'Descargar';
$lang['bf_action_preview']		= 'Vista Previa';
$lang['bf_action_search']		= 'Buscar';
$lang['bf_action_purge']		= 'Purgar';
$lang['bf_action_restore']		= 'Almacenar';
$lang['bf_action_show']			= 'Mostar';
$lang['bf_action_login']		= 'Entrar';
$lang['bf_actions']				= 'Acciones';

$lang['bf_do_check']			= 'Verificar Actualizaciones?';
$lang['bf_do_check_edge']		= 'Must be enabled to see bleeding edge updates as well.';

$lang['bf_update_show_edge']	= 'View bleeding edge updates?';
$lang['bf_update_info_edge']	= 'Leave unchecked to only check for new tagged updates. Check to see any new commits to the official repository.';

$lang['bf_ext_profile_show']	= 'Does User accounts have extended profile?';
$lang['bf_ext_profile_info']	= 'Check "Extended Profiles" to have extra profile meta-data available option(wip), omiting some default bonfire fields (eg: address).';

$lang['bf_yes']					= 'SI';
$lang['bf_no']					= 'No';
$lang['bf_none']				= 'Ninguno';

$lang['bf_or']					= 'or';
$lang['bf_size']				= 'Tamaño';
$lang['bf_files']				= 'Archivos';
$lang['bf_file']				= 'Archivo';

$lang['bf_with_selected']		= 'con selección';

$lang['bf_env_dev']				= 'Desarrollo';
$lang['bf_env_test']			= 'Prueba';
$lang['bf_env_prod']			= 'Producción';

$lang['bf_user']				= 'Usuario';
$lang['bf_users']				= 'Usuarios';
$lang['bf_username']			= 'Nombre de Usuario';
$lang['bf_description']			= 'Description';
$lang['bf_email']				= 'Email';
$lang['bf_user_settings']		= 'Mi Perfil';

$lang['bf_both']				= 'ambos';
$lang['bf_go_back']				= 'Ir Atrás';
$lang['bf_new']					= 'Nuevo';
$lang['bf_required_note']		= 'Los campos en <b>negrilla</b> son requeridos.';

$lang['bf_show_profiler']		= 'Mostrar Perfil del Administrador?';
$lang['bf_show_front_profiler']	= 'Show Front End Profiler?';

$lang['bf_cache_not_writable']  = 'La cache de la aplcación no es escribible';

//--------------------------------------------------------------------
// MY_Model
//--------------------------------------------------------------------
$lang['bf_model_no_data']		= 'No hay información disponible.';
$lang['bf_model_invalid_id']	= 'Invalid ID passed to model.';
$lang['bf_model_no_table']		= 'Model has unspecified database table.';
$lang['bf_model_fetch_error']	= 'Not enough information to fetch field.';
$lang['bf_model_count_error']	= 'Not enough information to count results.';
$lang['bf_model_unique_error']	= 'Not enough information to check uniqueness.';
$lang['bf_model_find_error']	= 'Not enough information to find by.';
$lang['bf_model_bad_select']	= 'selección invalida.';

//--------------------------------------------------------------------
// Contexts
//--------------------------------------------------------------------
$lang['bf_no_contexts']			= 'The contexts array is not properly setup. Check your application config file.';
$lang['bf_context_content']		= 'Contenido';
$lang['bf_context_reports']		= 'Reportes';
$lang['bf_context_settings']	= 'Configuración';
$lang['bf_context_developer']	= 'Desarrolador';

//--------------------------------------------------------------------
// Activities
//--------------------------------------------------------------------
$lang['bf_act_settings_saved']	= 'App settings saved from';
$lang['bf_unauthorized_attempt']= 'unsuccessfully attempted to access a page which required the following permission "%s" from ';

$lang['bf_keyboard_shortcuts']		= 'Available keyboard shortcuts:';

//--------------------------------------------------------------------
// Common
//--------------------------------------------------------------------
$lang['bf_question_mark']	= '?';
$lang['bf_language_direction']	= 'ltr';