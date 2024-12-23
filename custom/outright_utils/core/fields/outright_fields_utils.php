<?php
function outright_all_fields(){
	global $app_list_strings;
		$fieldArr = array();
				$moduleList = outright_getModuleName_list();
				foreach( $moduleList as $key => $values ){
						if($values){
								$fieldArr = $fieldArr + outiright_return_ModuleFields($values);
							}
					}
				unset($fieldArr['id']);	
				return $fieldArr;
}


function outright_getModuleName_list(){
	  $mod_list = array_intersect($GLOBALS['moduleList'],array_keys($GLOBALS['beanList']));
       $mod_list =array_combine($mod_list,$mod_list);
       $mod_arr[''] = '';
       foreach($mod_list as $mod_name){
		    $mod_arr[$mod_name] = $mod_name;
	   }
       return $mod_arr;
}

function outiright_return_ModuleFields($module, $view='EditView',$value = '', $valid = array()){
    global $app_strings, $beanList;
    $fields = array(""=>$app_strings['LBL_NONE']);
    $unset = array();
     if ($module != '') { 
     if(isset($beanList[$module]) && $beanList[$module]){
       $mod = new $beanList[$module]();
        foreach($mod->field_defs as $name => $arr){
           if(ACLController::checkAccess($mod->module_dir, 'list', true)) {
				if($name == 'email1' || ($arr['type'] != 'link' && $arr['type'] != 'relate' && !$arr['table'] && $arr['type'] != 'id' && $name != 'deleted' &&((!isset($arr['source']) || $arr['source'] != 'non-db') || ($arr['type'] == 'relate' && isset($arr['id_name']))) && (empty($valid) || in_array($arr['type'], $valid)) && $name != 'currency_name' && $name != 'currency_symbol')){
						if(isset($arr['vname']) && $arr['vname'] != ''){
								$fields[$name] = rtrim(translate($arr['vname'],$mod->module_dir), ':');}
						 else {
								  $fields[$name] = $name;
						   }
						   if($arr['type'] == 'relate' && isset($arr['id_name']) && $arr['id_name'] != ''){
									$unset[] = $arr['id_name'];
							}
						}
					}
            } //End loop.
            foreach($unset as $name){
                if(isset($fields[$name])) unset( $fields[$name]);
            }
         }
    }
    if($view == 'subpanel_view'){
      foreach($fields as $key=>$value){
			$fields_arr[$key]=$key.','.$value;
		}
		return $fields_arr;
	}
    $fields_arr=array();
    if($view == 'EditView'){
		foreach($fields as $key=>$value){
			$fields_arr[$key]=$value;
		}
		return $fields_arr;
    } else {
       return $fields[$value];
    }
}

function outiright_return_ModuleFields_all($module, $view='EditView',$value = '', $valid = array()){
    global $app_strings, $beanList;
    $fields = array(""=>$app_strings['LBL_NONE']);
    $unset = array();
     if ($module != '') { 
     if(isset($beanList[$module]) && $beanList[$module]){
       $mod = new $beanList[$module]();
        foreach($mod->field_defs as $name => $arr){
           if(ACLController::checkAccess($mod->module_dir, 'list', true)) {
			   if(($arr['type'] != 'link' && $arr['type'] != 'relate' && !$arr['table'] &&((!isset($arr['source']) || $arr['source'] != 'non-db') || ($arr['type'] == 'relate' && isset($arr['id_name']))) && (empty($valid) || in_array($arr['type'], $valid)) && $name != 'currency_name' && $name != 'currency_symbol')){
						if(isset($arr['vname']) && $arr['vname'] != ''){
								$fields[$name] = rtrim(translate($arr['vname'],$mod->module_dir), ':');}
						 else {
								  $fields[$name] = $name;
						   }
						   if($arr['type'] == 'relate' && isset($arr['id_name']) && $arr['id_name'] != ''){
									$unset[] = $arr['id_name'];
							}
						}
					}
            } //End loop.
            foreach($unset as $name){
                if(isset($fields[$name])) unset( $fields[$name]);
            }
         }
    }
    if($view == 'subpanel_view'){
      foreach($fields as $key=>$value){
			$fields_arr[$key]=$key.','.$value;
		}
		return $fields_arr;
	}
    $fields_arr=array();
    if($view == 'EditView'){
		foreach($fields as $key=>$value){
			$fields_arr[$key]=$value;
		}
		return $fields_arr;
    } else {
       return $fields[$value];
    }
}

function outright_get_module_fields_all($module_name = NULL){
	global $app_list_strings;
		if($module_name){
				$fieldArr = outiright_return_ModuleFields_all($module_name);
				return $fieldArr;
			}
		else{
				$fieldArr = array();
				$moduleList = outright_getModuleName_list();
				foreach( $moduleList as $key => $values ){
						if($values){
								$fieldArr[$key] = outiright_return_ModuleFields_all($values);
							}
					}
				unset($fieldArr['id']);	
				return $fieldArr;
			}
}

function outright_get_clean_field_name($colName){
		$colName = str_replace("^","",$colName);
		$colNameArr = array();
		if(strpos($colName,',')){
				$colNameArr = explode(',',$colName);
			}
		else{
				$colNameArr[] = $colName;
			}
		return $colNameArr;
}
