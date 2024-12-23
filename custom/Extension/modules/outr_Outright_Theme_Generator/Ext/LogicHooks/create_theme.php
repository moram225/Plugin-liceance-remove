<?php
  $hook_version = 1;
  $hook_array   = Array();
  $hook_array['before_save']   = Array();
  $hook_array['before_save'][] = array(333,'genarate new theme', 'custom/modules/outr_Outright_Theme_Generator/genarate_new_theme.php','genarate_new_theme_class','genarate_new_theme_method');
  
  
  $hook_array['before_delete']   = Array();
   $hook_array['before_delete'][] = Array(
      1117,
      'before_delete example', 
      'custom/modules/outr_Outright_Theme_Generator/delete_old_theme.php', 
      'delete_theme_class',
      'delete_theme_method' 
   );
   
   
?>
