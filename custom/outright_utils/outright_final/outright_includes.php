<?php

$outright_files_to_include =array(
$outright_files_to_include[] ='custom/outright_utils/core/api/outright_api_utils.php',

$outright_files_to_include[] ='custom/outright_utils/core/common/outright_menu_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_testing_mode_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_role_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_rel_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_maintenance_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_installation_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_file_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_code_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/common/outright_activity_tracker.php',

$outright_files_to_include[] ='custom/outright_utils/core/date_time/outright_time_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/db/outright_crud_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/db/outright_db_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/email/outright_email_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/export/outright_export_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/js/outright_ajax_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/js/outright_js_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/logger/outright_error_utils.php',

$outright_files_to_include[] ='custom/outright_utils/core/logic_hook/outright_hook_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/manifest/outright_manifest_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/phone/outright_phone_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/imap/outright_imap_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/security/outright_security_utils.php',

$outright_files_to_include[] ='custom/outright_utils/core/fields/outright_fields_utils.php',
$outright_files_to_include[] ='custom/outright_utils/core/views/outright_views_utils.php',

);
foreach($outright_files_to_include as $final_file){

		require_once "$final_file";
		
}
