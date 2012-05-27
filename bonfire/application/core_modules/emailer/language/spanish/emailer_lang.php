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

$lang['em_template']			= 'Plantilla';

$lang['em_queue']			= 'Queue';
$lang['em_view_queue']			= 'View Queue';

$lang['em_system_email']		= 'Email del Sistema';
$lang['em_system_email_note']	= 'The email that all system-generated emails are sent from.';
$lang['em_email_server']		= 'Protocolo';
$lang['em_settings']			= 'Configuración de Email';
$lang['em_settings_note']		= '<b>Mail</b> uses the standard PHP mail function, so no settings are necessary.';
$lang['em_location']			= 'location';
$lang['em_server_address']		= 'Dirección del Servidor';
$lang['em_port']				= 'Puerto';
$lang['em_timeout_secs']		= 'Timeout (segundos)';
$lang['em_email_type']			= 'Tipo de Email (html/text)';

$lang['em_template_note']		= 'Los correos fueron enviados en formato html. Estos pueden ser personalizados cambiando la cabecera y el pie, abajo.';
$lang['em_header']				= 'Cabecera';
$lang['em_footer']				= 'Pie';

$lang['em_test_header']			= 'Probar Configuración';
$lang['em_test_intro']			= 'Ingrea una cuenta de correo en el campo de texto de abajo para verificar que tu configuración sea correcta. Recuerda guardar los cambios antes de realizar la prueba.';
$lang['em_test_button']			= 'Enviar Correo de Prueba';
$lang['em_test_result_header']	= 'Emailer Settings Test Results';
$lang['em_test_no_results']		= 'Either the test did not run, or did not return any results.';
$lang['em_test_debug_header']	= 'Email debugging information';
$lang['em_test_success']		= 'The email appears to be set correctly. If you do not see the email in your inbox, try looking in your Spam box or Junk mail.';
$lang['em_test_error']			= 'The email looks like it is not set correctly.';

$lang['em_test_mail_subject']	= 'Felicitaciones! Tu Bonfire Emailer esta funcionando!';
$lang['em_test_mail_body']		= 'Configurando Bonfire para Codeigniter, emailer SMTP Google Apps!';

$lang['em_stat_no_queue']		= 'You do not currently have any emails in the queue.';
$lang['em_total_in_queue']		= 'Total Emails in Queue:';
$lang['em_total_sent']			= 'Total Emails Sent:';

$lang['em_sent']				= 'Enviados';
$lang['em_attempts']			= 'Attempts';
$lang['em_id']					= 'ID';
$lang['em_to']					= 'A';
$lang['em_subject']				= 'Asunto';

$lang['em_missing_data']		= 'One or more required fields are missing.';
$lang['em_no_debug']			= 'Email was queued. No debug data is available.';

$lang['em_save_settings']               = 'Guardar Cambios';
$lang['em_process_now']               = 'Procesar Ahora';
$lang['em_insert_test_email']               = 'Ingrese correo de prueba';
$lang['em_save_template']               = 'Save Template';

$lang['em_email_template']              = 'Plantilla del Email';
$lang['em_email_contents']              = 'Contenido del Email';
$lang['em_emailer_queue']               = 'Emailer Queue';