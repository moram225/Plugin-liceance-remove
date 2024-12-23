<?php 
function outright_save($mod_name,$data_array,$bean_id=false,$new_with_id=false){
	global $beanFiles;
	
   $new_bean = outright_get_correct_bean($mod_name);  
	
	if(!$bean_id){
	  $bean_id = create_guid();
	  $new_bean->new_with_id =1;
	  $new_bean->id=$bean_id;
	}else{
		if(!$new_with_id){
       $new_bean->retrieve($bean_id);
		}
		else{
		$new_bean->new_with_id =1;
		$new_bean->id = $bean_id;
		}
    }
	foreach($data_array as $key=>$val){
	  $new_bean->$key = $val;
	}
    $new_bean->save();
    return $new_bean;    
}
/**End outright_save **/

/** outright_save_new **/

function outright_save_new($data_array,$dup_check = false){
	global $beanFiles;

$new_bean = outright_get_correct_bean($data_array['save_module']);  
if($data_array['id']){
$new_bean->retrieve($data_array['id']);
}
if(!$new_bean->id && !$data_array['id'] && $dup_check){	
  $new_bean->retrieve_by_string_fields($dup_check);
}

if(!$new_bean->id && $data_array['id']){
		$new_bean->new_with_id =1;
}

	foreach($data_array as $key=>$val){
		if(empty($val))
		{
			$val='';
		}
		$new_bean->$key = $val;
	}
    $res=$new_bean->save();
    return $new_bean;
}

/*****************************************
 * start outright_insert
 *      @description  : Create / Insert  a record
 *      @Author       : Outright 
 *      @Date         : 
 *      @param   string    ---> $tbl_name   : On which Table do you want to inser the  data  ,
 *      @param   array     ---> $data_array : Parameters to insert  data in to the table , This array should be in Associative ,
 *      @return  int|false ---> $bean_id    : Return new added record's id on success or false on fail
 *      @since 1.0.0
 *     
 * ***************************************/

function outright_insert($tbl_name , $data_array,$bean_id=false){
	
		global $current_user;
		$tbl_name = strtolower($tbl_name);
		$today    = date("Y-m-d h:i:s");
		$sql_from = "INSERT INTO ".$tbl_name." ( ";
		if(!$bean_id){
		   $bean_id = create_guid();
		}
		$ins_cols   = "  id ,date_modified,deleted ";
		$ins_values = " VALUES ( '".$bean_id."' , '".$today."' , 0  ";
		
		foreach($data_array as $key=>$val){
			$ins_cols   .=" , ".$key;
			$ins_values .=" , '".$val."' ";
		}
		
	   $ins_values .=" ) ";
	   $ins_cols   .=" ) ";

	   $final_sql   = $sql_from.$ins_cols.$ins_values;
	   outright_run_sql($final_sql);
	   return $bean_id;
	   
}

/*****************************************
 * start outright_update
 *      @description  : Update / Insert  a record
 *      @Author       : Outright 
 *      @Date         : 
 *      @param   string    ---> $tbl_name   : On which Table do you want to Update  the  data 
 *      @param   array     ---> $data_array : Parameters to insert in a table ,This array format should be in Associative  array,
 *      @param   string    ---> $bean_id    : parent id to update
 *      @return  int|false ---> $bean_id    : Return's the updated record's id on success or false on fail
 *      @since 1.0.0
 *      Note : This function couldn't Update the data in CRM style
 *      
 * 
 * ***************************************/

function outright_update($tbl_name , $data_array,$bean_id){
	
	global $current_user;
	$tbl_name = strtolower($tbl_name);
	$today    = date("Y-m-d h:i:s");
    $today    = date("Y-m-d h:i:s");
    $day_flag = date('z');
    $sql_from ="UPDATE  ".$tbl_name."  SET  date_modified = '".$today."' ";

	foreach($data_array as $key=>$val){
		$sql_from .=", ".$key." = '".$val."' ";
	 }
    $sql_where =" where id ='".$bean_id."' ";
    $final_sql =$sql_from.$sql_where;

    outright_run_sql($final_sql);

    return $final_sql;

}
/** End outright_update**/

function outright_retrieve($module,$id=false,$where_found=false){

   $bean_data = outright_get_correct_bean($module);
   
   if($where_found){
   $bean_data->retrieve_by_string_fields($where_found);
   }
   else{
   $bean_data->retrieve($id);
   }

   return $bean_data ?$bean_data:false ;
}

/** End outright_retrive**/

 function outright_copy_bean($old_bean){
	$new_bean = new $old_bean->object_name;
			foreach($new_bean->field_defs as $key => $value){
				if(in_array($key, array("id", "date_entered"))){
					continue;
				}
				if($value["type"] == "link"){
					continue;
				}
				$new_bean->$key = $old_bean->$key;
			}
	$new_id = $new_bean->save();
	return $new_id ? $new_id:false;
 }

 /*****************************************
 *start outright_re_save 
 *     @description  : Resave function
 *     @Author       : Outright 
 *     @Date         :  
 *     @param     string --->$obj_name  : Objecct name or module name;
 *     @param     string --->$id        : Id of the object or record id    ;        
 *     @return    obj|false --->$new_bean   : Return's the object on success or false on fail  ;    
 *     @since 1.0.0
 * 
 * ***************************************/

function outright_re_save($obj_name , $id){
		$new_bean = new $obj_name();
		$new_bean->retrieve($id);
		$new_bean->save();
		return $new_bean ? $new_bean:false;
	}

	/*****************************************
 * 
 *     @description :Search Record Details
 *     @Author      : Outright 
 *     Date         :  
 *     @param     string --->$tableName         : modules's name or table name       
 *     @param     array  --->$fieldNameArr      : Requested fields to show   
 *     @param     array  --->$wherefielsd       : Condition based search     
 *     @return    array|false --->$result       : Return's the result array on success or false on fail    
 *     @since 1.0.0
 * 
 * ***************************************/

function outright_search_record($tableName,$fieldNameArr=array(),$wherefielsd=array()){
	   $where     = '';
	   $fieldName = '';
	   if(!empty($fieldNameArr)){
		 foreach( $fieldNameArr as $values ){
				$fieldName .= $values." , ";
		 }
		  $selectField = rtrim($fieldName, ' , ');
	   }
	   if(!empty($wherefielsd)){
			$where .= ' where ';
			foreach($wherefielsd as $key=>$values){
				$where .=$key."= '".$values."' AND ";
			}	
			$where = rtrim($where, ' AND ');
	    }
		$finalQuery  = "select ".$selectField." from ".$tableName.$where." ;";
		$result      = outright_run_sql($finalQuery); 
		return $result?$result:false ;
		
}

?>
