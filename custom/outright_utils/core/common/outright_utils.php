<?php

/*****************************************
 * 
 *      @description  : outright_set_get_trello save and update bean  
 *      @since 40.0.0
 * 
 * ***************************************/

function outright_set_get( $data_obj=false , $bean_name=false , $save_me='0' ){							
	if(is_array($data_obj)){
		$data_obj = (object) $data_obj;			
	}if(is_string($data_obj)){
		$bean_id = $data_obj;
	}else{
		$bean_id = $data_obj->id;
	}			
	$sql ="update ".strtolower($bean_name)." set deleted =0 where id ='".$bean_id."' and deleted =1 ";
	outright_run_sql($sql);

	if($bean_id && !$data_obj->new_with_id ){
		$ret_bean =outright_retrieve($bean_name , $bean_id );
		if(!$ret_bean->id){
			$ret_bean =outright_retrieve($bean_name);
			$ret_bean->id = $bean_id;
			$ret_bean->new_with_id = 1;
		}
	}
	else{
		$ret_bean = outright_retrieve( $bean_name );
	}

	if( $save_me){
		foreach($data_obj as $field=>$value){
			if(!is_object($value) &&  !is_array($value) ){
				$ret_bean->$field = $value;
			}				
		}
		$ret_bean->save();
	}
	return $ret_bean;
}

/*****************************************
 * 
 *      @description  : Array To String Conversion  
 *      @Author       : Outright 
 *      @Date         : 
 *      @param   array        ---> $input_arr  :  array value to convert into string  
 *      @return  string|false ---> $return_str :  Return's the string on success or false on fail      
 *      @since 1.0.0
 * 
 * ***************************************/
function outright_array_to_sql($input_arr){
  if(!is_array($input_arr)){
		return false ; 
  }	
  $return_str ="'".implode("','",$input_arr)."'";
  return $return_str;
}

/*****************************************
 * 
 *     @description : Enum to array convertion
 *     @Author      : Outright 
 *     Date         :  
 *     @param     string --->$enum_string      : Enum string;       
 *     @param     string --->$enum_string_js   : Enum js string;              
 *     @return    array|false --->$enum_string_js : Return's the enum_string_js array on success or false on fail  ;    
 *     @since 1.0.0
 * 
 * ***************************************/		

 function outright_convert_enum_to_array($enum_string,$enum_string_js){		
	$final_ret_array = array();
	$enum_string     = str_replace('^',"",$enum_string);
	$final_ret_array = explode(',',$enum_string);
	$enum_string_js  = str_replace('^',"#",$enum_string_js);
	$enum_string_js  = str_replace('#,',",",$enum_string_js);
	$final_ret_array['enum_js'] = substr($enum_string_js,0,-1);
	return $final_ret_array?$enum_string_js:false;				
 }

/*****************************************
 * 
 *     @description : option to array convert 
 *     @Author      : Outright 
 *     Date         :  
 *     @param     string --->$sql           : mysql query value                                                           
 *     @param     string --->$key_col       : colomn key value                                                                
 *     @param     string --->$val_col       : value  of the colomn                                                                
 *     @return    string|false --->$option  : Returns string value on success or false in fail                                                             
 *     @since 1.0.0
 * 
 * ***************************************/ 
 
function outright_convert_options_from_sql($sql,$key_col,$val_col,$selected=false){
		$options_array = outright_run_id_name_sql($sql,$key_col,$val_col,$selected);	
		$option        = outright_convert_options_from_array($options_array,$selected);
		return $option?$option:false;
	}

/*****************************************
 * 
 *     @description  : Array to html drop down convert 
 *     @Author       : Outright 
 *     @Date         :  
 *     @param       array--->$optionArr : options array;
 *     @param       int|string--->$selected : selected value for drop down list ;
 *     @return  string|false ---> $option :  Return's the string on success or false on fail  ;    
 *     @since 1.0.0
 * 
 * ***************************************/

function outright_convert_options_from_array($optionArr,$selected){
	foreach($optionArr as $key => $values){
	   $sel = '';
	   if($key == $selected){
		   $sel = "selected";
	   }
	   $option .= "<option value='".$key."' ".$sel." >".$values."</option>";
	}
   return $option?$option:false;
}
/*****************************************
 * 
 *     @description : Get colomns from table
 *     @Author      : Outright 
 *     Date         :  
 *     @param     string --->$table       : table name                                                          
 *     @return    array  : Returns array value on success 
 *     @since 1.0.0
 * 
 * ***************************************/ 
 
function outright_getcolumns($table) {
	global $db;
	$sql = "SHOW columns FROM ".$table;
	$rwo = $db->query($sql);
	$ar = array();
	$matchcols = array();
	$i = 0;
	while($res = $db->fetchByAssoc($rwo)){
		$matchcols[] = $res['Field'];
		$ar[$i] = array('fname'=> $res['Field'], 'ftype' => $res['Type']);
		$i++;
	}
	return array('cols'=>$matchcols, 'detail'=>$ar);
}

/*****************************************
 * 
 *     @description : Get user details
 *     @Author      : Outright 
 *     Date         :  
 *     @param     string --->$userID      : user id                                                              
 *     @return    obj|false  : Returns Obj value on success or false on fail
 *     @since 1.0.0
 * 
 * ***************************************/
 
function outright_load_user($userID){
	$user_bean = new User();
	$user_bean->retrieve($userID);
	return $user_bean?$user_bean:false;
}

/*********************
 *start outright_load
 * @description : Get user details
 * @Author      : Outright Systems
 * Date         :  
 * @param     string --->$userID      : user id                                                              
 * @return    obj|false  : Returns Obj value on success or false on fail
 * @since 1.0.0
 ******************/
function outright_run_id_name_sql($sql,$field1,$field2,$ret_str=0){
	global $db;
	$fin_res = array();
	$retrun_str ='';
	$row =$db->query($sql);
	while($res=$db->fetchByAssoc($row)){	
	$fin_res[$res[$field1]] =$res[$field2];	
	}
	
	if($ret_str){
	return outright_array_to_sql_string($fin_res);
	}
	return $fin_res;
}

	function outright_get_custom_fields($mod)
	{
        $outright_sql = "SELECT * FROM fields_meta_data where custom_module = '".$mod."' and deleted = 0";
        $res = outright_run_sql($outright_sql);
        return $res;        
	}
	
	function outright_get_module_fields($module_name = NULL){
	global $app_list_strings;
		if($module_name){
				$fieldArr = outiright_return_ModuleFields($module_name);
				unset($fieldArr['id']);	
				return $fieldArr;
			}
		else{
				$fieldArr = array();
				$moduleList = outright_getModuleName_list();
				foreach( $moduleList as $key => $values ){
						if($values){
								$fieldArr[$key] = outiright_return_ModuleFields($values);
							}
					}
				unset($fieldArr['id']);	
				return $fieldArr;
			}
	}
	

function outright_built_config(array $configOptions = null,$config_loader=true, $dieOnError = false){
	global $sugar_config; 
	if(is_null($configOptions)){
		$configOptions = $sugar_config;
	}
	if($config_loader){
		if(!file_exists('config.php')){
			require_once('config_outright.php');
		 }
		 if(file_exists('config.php')){
			 require_once('config.php');
		 }
	 }
	 if($sugar_config == false && !isset($sugar_config) && empty($sugar_config)){
		 
			$connect_error[]  = "Error has been occured while creatiing a config file . Please refer to outrightcrm.log for details.";
			$err_msg[]        = "Unable to load the data from config_outright.php(or)config.php file please check your directory structure file is existed or not." ;
			if(!$GLOBALS['log']->fatal($err_msg)){
				  outrigt_error_log($this->logfile,$err_msg);
			}
			if($dieOnError) {
				if(isset($GLOBALS['app_strings']['ERR_NO_DB'])) {
					outright_die($GLOBALS['app_strings']['ERR_NO_DB']);
				} else {
				  outright_die("Unable to load the data from config_outright.php(or)config.php file please check your directory structure file is existed or not.");
				}
			} 
			$_SESSION['outright_errors'] = $connect_error ;
			return false;
			
	 }
	 $sugar_config['installer_locked']         = true ;
	 $sugar_config['dbconfig']['db_host_name'] = $configOptions['db_host_name'];
	 $sugar_config['dbconfig']['db_user_name'] = $configOptions['db_user_name'];
	 $sugar_config['dbconfig']['db_password']  = $configOptions['db_password'];
	 $sugar_config['dbconfig']['db_name']      = $configOptions['db_name'] ;
	 $sugar_config['site_url']                 = $configOptions['site_url'] ;
	 $build_config  = outright_array_to_file_write('sugar_config',$sugar_config, 'config.php', $mode="w", $header='' ); 
	 if($build_config)
		return  true ;
	
} 
function outright_get_correct_bean($mod_name){
	global $beanFiles;
	
	$new_bean = BeanFactory::newBean($mod_name);
	// last chance if bean still not retrieved
	if(!$new_bean){
		$GLOBALS['log']->fatal("Your bean name was incorrect! Please correct it in your code".$mod_name);
		if($beanFiles[$mod_name]){
		require_once $beanFiles[$mod_name];
		$new_bean = new $mod_name;
		}
	}
	return $new_bean;
}

/*****************************************
 * start outright_run_sql
 *      @description  : Fetch the data from data base and 
 *      @Author       : Outright 
 *      @Date         : 
 *      @param   string      ---> $sql :  mysql query value; 
 *      @return  array|false ---> $fin_res :  Return's the array on success or false on fail      
 *      @since 1.0.0
 * 
 * ***************************************/

function outright_run_sql($sql){
	global $db;
 
	$fin_res = array();
	$row =$db->query($sql);
	while($res=$db->fetchByAssoc($row)){	
	$fin_res[] =$res;	
	}
	return $fin_res ? $fin_res:false;
}/** End outright_run_sql**/

/*****************************************
 *start outright_run_sql_one_row 
 *      Returns the only one row from data base 
 *      @Author       : Outright 
 *      @Date         :  
 *      @param       string--->$sql : sql query value  ;
 *      @return  array|false ---> $fin_res :  Return's the array on success or false on fail      
 *      @since 1.0.0
 * 
 * ***************************************/
 
function outright_run_sql_one_row($sql){
	global $db;
	$row = $db->query($sql);
	$res = $db->fetchByAssoc($row);
	return $res?$res:false;
}/** End outright_run_sql_one_row**/

// Json Decode function
function outright_json_decoder( $data=false){
	if($data==false){return 'Input data empty. Please check your input string!';}
	if(outright_json_validator( $data )){
		return json_decode($data);
	}
}

// Json validator function
function outright_json_validator( $json=false ){
	if($json==false){return 'Input data empty. Please check your input string!';}
	$result = json_decode($json);
    // switch and check possible JSON errors
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            $error = ''; // No error has occurred
            break;
        case JSON_ERROR_DEPTH:
            $error = 'The maximum stack depth has been exceeded.';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            $error = 'Invalid or malformed JSON.';
            break;
        case JSON_ERROR_CTRL_CHAR:
            $error = 'Control character error, possibly incorrectly encoded.';
            break;
        case JSON_ERROR_SYNTAX:
            $error = 'Syntax error, malformed JSON.';
            break;
        case JSON_ERROR_UTF8:
            $error = 'Malformed UTF-8 characters, possibly incorrectly encoded.';
            break;
        case JSON_ERROR_RECURSION:
            $error = 'One or more recursive references in the value to be encoded.';
            break;
        case JSON_ERROR_INF_OR_NAN:
            $error = 'One or more NAN or INF values in the value to be encoded.';
            break;
        case JSON_ERROR_UNSUPPORTED_TYPE:
            $error = 'A value of a type that cannot be encoded was given.';
            break;
        default:
            $error = 'Unknown JSON error occured.';
            break;
    }

    if ($error !== '') {
        exit($error);
    }
	
	return true;
}

// outright_multarray_to_array
function outright_multarray_to_array($mul_array , $key){
	$ret_array = array();
	foreach($mul_array as $fin_arr){
	   $ret_array[] = $fin_arr[$key];
	}
	return $ret_array;
}

// outiright_modulefields_typewise in function  $fields_type=array('varchar','phone');
function outiright_modulefields_typewise($module, $fields_type){
	global $app_strings, $beanList;
	$fields = array();
	if(isset($beanList[$module]) && $beanList[$module]){
		$mod = new $beanList[$module]();	   
		foreach($mod->field_defs as $name => $arr){		
			if( ACLController::checkAccess($mod->module_dir, 'list', true) && in_array($arr['type'],$fields_type) && $arr['source'] !='non-db' ){			  
				if(isset($arr['vname']) && $arr['vname'] != ''){
					$fields[$name] = rtrim(translate($arr['vname'],$mod->module_dir), ':');
				}else{
					$fields[$name] = $name;
				}
						 
			}
		}
	}
	foreach($fields as $key=>$value){
	  $fields_arr[$key]=$value;
	}
	return $fields_arr;	
}
