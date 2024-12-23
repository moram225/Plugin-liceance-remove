<?php


//~ ini_set("display_errors",1);
switch($_REQUEST['slg']){
	case 'add_new_font_family':
		outright_add_new_font_family();
		exit;
	case 'get_font_family_list':
		outright_get_font_family_list();
		exit;
	case 'check_theme_name':
		outright_check_theme_name();
		exit;
}


function outright_check_theme_name(){
	$get_resl  = "select * from outr_outright_theme_generator where name = '".trim($_REQUEST['theme_name'])."' and deleted = 0 ";
	$resl      = outright_run_sql_one_row($get_resl);
	
	
	if(isset($resl) && !empty($resl['name']) ){
		if(isset($_REQUEST['record_id']) && !empty($_REQUEST['record_id'])){
			if($_REQUEST['record_id']==$resl['id']){
				die("0");
			}else{
				die("1");
			}
		}else{
			die("1");
		}
		
	}else{
		 die("0");
	}
		
}

function outright_add_new_font_family(){
	$font_family_l = array();
	$option_values = "";
	$filename      = "custom/modules/outr_Outright_Theme_Generator/font_family_list_manager.php";
	if(file_exists($filename)) {
		require_once($filename);
	}
	$font_family_l[$_REQUEST['font_family_name']] = $_REQUEST['font_family_name'];
	if(outright_array_to_file_write("font_family_l",$font_family_l,$filename)){
		foreach($font_family_l as $font_key=>$font_name){
			$option_values.="<option value='".html_entity_decode($font_name)."'>".html_entity_decode($font_name)."</option>";
		}
		echo $option_values;
	}else{
		die(0);
	}
	
}



function outright_get_font_family_list(){
	
	$filename      = "custom/modules/outr_Outright_Theme_Generator/font_family_list_manager.php";
	if(file_exists($filename)) {
		require_once($filename);
		foreach($font_family_l as $font_key=>$font_name){
			$option_values.="<option value='".html_entity_decode($font_name)."'>".html_entity_decode($font_name)."</option>";
		}
		echo $option_values;
	}else{
		die(0);
	}
}

