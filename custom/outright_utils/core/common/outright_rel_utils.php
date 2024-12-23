<?php
/*****************************************
 * start outright_load_relationship
 *     @description : Load Relation Ship 
 *     @Author      : Outright 
 *     Date         :  
 *     @param     string --->$bean_name      : Parent modules's name ;       
 *     @param     string --->$bean_id        : Parent modules's id;        
 *     @param     string --->$rel_name       : Relation modules's name;        
 *     @return    obj|false --->$result      : Return's the relatedBeans obj on success or false on fail  ;    
 *     @since 1.0.0
 * 
 * ***************************************/
function outright_load_relationship($left_bean,$rel_name,$return_beans=0){
	$rel_obj =  $left_bean->load_relationship($rel_name);
	
	if (!$rel_obj){
		$rel_name =outright_get_bean_fields($rel_name);
		$rel_obj =  $left_bean->load_relationship($rel_name);
	}
	
	if($return_beans){
	 $relatedBeans = $left_bean->$rel_name->getBeans();
	 return $relatedBeans;
	}
		return $left_bean->$rel_name;

}

function outright_find_relationship_name($mod1 , $mod2){
	$c1 =strtolower($mod1."_".$mod2);
	$c2 =strtolower($mod1."_".$mod2."_1");	
	$c3 =strtolower($mod2."_".$mod1);
	$c4 =strtolower($mod2."_".$mod1."_1");	

$possible_names =array(
		$mod1,
		$c1,
		$c2,
		$mod2,
		$c3,
		$c4
	);

$left_bean =outright_get_correct_bean($mod1);
		foreach($possible_names as $rel_name){
				if($left_bean->field_defs[$rel_name] &&  $left_bean->field_defs[$rel_name]['relationship']){
				return $rel_name;
				}
				else{
				$rel = strtolower($rel_name);
				if($left_bean->field_defs[$rel] &&  $left_bean->field_defs[$rel]['relationship']){
				return $rel;
				}
				}
		}
}

function outright_add_relationship($left_bean,$rel_name,$rel_bean_id){
		$rel_obj = outright_load_relationship($left_bean,$rel_name);
		if(is_array($rel_bean_id)){
				foreach($rel_bean_id as $rel_id){
				$rel_obj->add($rel_id);
				}
		}
		else{
		$rel_obj->add($rel_bean_id);
		}
}

function outright_remove_relationship($left_bean,$rel_name,$rel_bean_id){
$rel_obj = outright_load_relationship($left_bean,$rel_name);
		if(is_array($rel_bean_id)){
				foreach($rel_bean_id as $rel_id){
				$rel_obj->remove($rel_id);
				}
		}
		else{
		$rel_obj->remove($rel_bean_id);
		}
}

function outright_get_bean_fields($left_bean,$fld_name=false,$fld_key=false){
		if(!$fld_name && !$fld_key){
		return $left_bean->field_defs;
		}
		else{
				foreach($left_bean->field_defs as $key=>$value  ){
					if($fld_name && $key==$fld_name){
						return $left_bean->field_defs[$key];
					}
					else if($fld_key && $value[$fld_key] ==$fld_name){
					return $left_bean->field_defs[$key];
					}
				}
		}
}
