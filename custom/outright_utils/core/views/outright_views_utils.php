<?php

function outright_add_panels_to_views($panel_data ,$field_names,$field_labels, $view_name ){

require_once('modules/ModuleBuilder/parsers/ParserFactory.php');
  $view_array = ParserFactory::getParser($view_name,$panel_data['module']);
$panel_content = array();
$cnt =0;
foreach($field_names as $field_name=>$field_type){
	if($cnt >1){
	$cnt =0;
	$panel_content[] = $row;
	}
	$row[$cnt] =array('name' =>$field_name ,'label'=>$field_labels[$field_name]);
	$cnt++;
}
  // Add the new content to the desired section of the view array
  $view_array->_viewdefs['panels'][$panel_data['name']] = $panel_content;
  //Save the layout
  $view_array->handleSave(false);
  
  return;
 }