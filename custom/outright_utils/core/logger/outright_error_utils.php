<?php

/**
 * start outright_error_log
 * Generate the error log file 
 * 
 * @param string|array $msg        - Error log message
 * @param string       $location   - File location
 * @param int          $type       - Error log type
 * @param string       $extra_msg  - Extra message
 * @return true|false              - Returns true on success or false on fail 
 */
 
  function outright_error_log($msg,$location,$logger_level='1',$extra_msg=''){
	  		 $logger_setting =outright_logger_setting($location);
if(!$logger_setting && !$_SESSION['force_debug']){
 return false;
}
	  if($logger_level < $logger_setting['logger_level']){
	  return false;
	  }
	 if(!strpos($location,'.log')){
		 
		 outright_create_logger_settings($location);
		 $logger_setting =outright_logger_setting($location);
		 if(!$logger_setting){
		 return false;
		 }
		 else{
     	$final_msg =explode("::",$msg);

		 if(count($final_msg) >1){
		 $name = $final_msg[0];
		 $msg = $final_msg[1];
		 }
		 if(is_object($msg)){
		 $msg = (array)$msg;
		 }
		 if(is_array($msg)){
		 $msg = var_export($msg,1);
		 }
		 $sql="SELECT count(*) as total FROM ".strtolower($location)." WHERE deleted=0 ";
		 $result=outright_run_sql_one_row($sql);
		 $data_array['count_log']=$result['total']+1;
		 $data_array['reload_log']='unseen';
		 
		 $data_array['save_module']=$location;
	     $data_array['name']=$name;
		 $data_array['description']=$msg;
		 outright_save_new($data_array);
		 }
	 }
	 else{
		$log        = print_r($msg,1);
		$create_log = error_log('['.date("Y-m-d, g:i").']'. $extra_msg.$log."\n", $type,$location);
		return $create_log ? $create_log: false;
	 }	
 } 
 /** End outright_error_log **/

/**
 * start outright_on_error_level
 * Error level on
 * 
 */

 function outright_show_error(){
		 error_reporting(E_ALL); 
		 ini_set('display_errors', 1);
	
}/** End outright_on_error_level**/

/** 
 * start outright_print
 * Print data 
 * 
 * @parm string|array  $data - Data to print
 **********/
function outright_print($data,$stop=false){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
	if($stop){
	die;
   }
} /** End outright_print**/

 function outright_die($error_message, $exit_code = 1){
	echo "<pre>";
	print_r( $error_message);
	echo "</pre>";
	die($exit_code);
}

function outright_create_logger_settings($location){
	 $if_logger_on =" SELECT name,status,record_limit from ".strtolower($location)." where name = 'Settings' and deleted =0 ";
	 $get_logger  =outright_run_sql_one_row($if_logger_on);
	 if($get_logger){
		return true;
	 }
	 else{
		 $sql="SELECT count(*) as total FROM ".strtolower($location)." WHERE deleted=0 ";
		 $result=outright_run_sql_one_row($sql);
		 $data_array['count_log']=$result['total']+1;
		 $data_array['save_module']=$location;
		 $data_array['auto_number']=1;
		 $data_array['reload_log']='unseen';
		 $data_array['status']=0;
		 $data_array['record_limit']=50;
		 $data_array['description']='Configuration settings';
		 $data_array['name']="Settings";
	 }
	 outright_save_new($data_array);
}

function outright_clean_logger($location){
	return false;
	$if_logger_on1 =" SELECT name,status,record_limit from ".strtolower($location)." where status =0 and deleted =0 ";
	$get_logger1  =outright_run_sql_one_row($if_logger_on1);
	if( $get_logger1['cnt']< $get_logger['record_limit']){
		return false;
	}
	else{
		$clean_sql =" delete from ".strtolower($location)." where status =0 order by auto_number asc limit ".$get_logger1['record_limit']."";
		outright_run_sql($clean_sql);
	}
}

function outright_force_clean($location){
	$clean_sql =" UPDATE  ".strtolower($location)." SET deleted=1  ";
	outright_run_sql($clean_sql);
	outright_create_logger_settings($location);
}

function outright_logger_setting($location){
	$if_logger_on ="SELECT * FROM ".strtolower($location)." WHERE name='Settings'  AND deleted=0";
	$get_logger  =outright_run_sql_one_row($if_logger_on);
	return $get_logger;
}

function outright_start_logger($location){
	outright_create_logger_settings($location);
	$stop_logger =" update ".strtolower($location)." set status =1 where name='Settings' AND deleted=0 ";
	outright_run_sql_one_row($stop_logger);
}

function outright_stop_logger($location){
	$stop_logger =" update ".strtolower($location)." set deleted =1 where name='Settings' ";
	outright_run_sql_one_row($stop_logger);
}

function outright_set_logger_level($location,$logger_level){
	$stop_logger =" update ".strtolower($location)." set logger_level ='".$logger_level."' where name ='Settings' and deleted =0 ";
	outright_run_sql_one_row($stop_logger);
}

function outright_logger_status_message($location){
	$bean_name_label = translate("LBL_MODULE_NAME", $location);
	$res=outright_logger_setting($location);
	if($res){
		echo "<h2 style='color:red;text-align:center'>".$bean_name_label." Running...<img src='custom/modules/outr_outr_licence/start_trello.gif' style='height: 80px;width: 100px;'></h2>";
	}else{
		echo "<h2 style='color:red;text-align:center'>".$bean_name_label." Stopped    <img src='custom/modules/outr_outr_licence/stop_trello.gif' style='height: 100px;width: 100px;'></h2>";
	}
}

function outright_debug_me(){
$_SESSION['force_debug'] =1;
}

function outright_stop_debug_me(){
$_SESSION['force_debug'] =1;
outright_stop_logger("outright_trello_logger");
}





	

