<?php
    
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class genarate_new_theme_class{
		
        function genarate_new_theme_method($bean, $event, $arguments){
		    global $db;
		     $ors_security = new outright_security(false,'outright_theme_manager');
		     $ret='';
		     if(!empty($_REQUEST['record'])){
				 $ret="&record=".$_REQUEST['record'];
			 }
			if($ors_security->prod_bean->verification_status !='verified'){
				header('location:index.php?module=outr_Outright_Theme_Generator&action=EditView&package_error=Verify your Theme style builder package first'.$ret);
				die();
			}else if($ors_security->prod_bean->illegal_use){
				header('location:index.php?module=outr_Outright_Theme_Generator&action=EditView&package_error=Verify your Theme style builder package first'.$ret);
				die();
			}
			require_once("custom/modules/outr_Outright_Theme_Generator/theme_folder/color_scheme.php");
//echo "<pre>"; print_r($bean); echo "</pre>";   die('test');			
			$custom_theme_dir  = "custom/themes/SuiteP/css/";
			$cache_theme_dir   = "cache/themes/SuiteP/css/";
			$query             = $db->query("select * from outr_outright_theme_generator where id='$bean->id' AND DELETED = 0 ");
		    $result            = $db->fetchByAssoc($query);
		     		    
		    if(!empty($result)){ 
			  $this->deleteDir("custom/themes/SuiteP/css/".$result['name']);				
			}

			$custom_theme_name =  $custom_theme_dir."".$bean->name; 
			$cache_theme_name  =  $cache_theme_dir."".$bean->name;     
			if (!file_exists($custom_theme_name)) {
                 mkdir($custom_theme_name, 0777, true);
            }
			
			copy('custom/modules/outr_Outright_Theme_Generator/theme_folder/color-palette.scss', $custom_theme_name."/color-palette.scss");
			copy('custom/modules/outr_Outright_Theme_Generator/theme_folder/icons.scss', $custom_theme_name."/icons.scss");
			copy('custom/modules/outr_Outright_Theme_Generator/theme_folder/style.scss', $custom_theme_name."/style.scss");
			copy('custom/modules/outr_Outright_Theme_Generator/theme_folder/variables.scss', $custom_theme_name."/variables.scss");
			

			
			if (file_exists("custom/themes/SuiteP/themedef.php")) {
			  include("custom/themes/SuiteP/themedef.php");
			  $defscontent  = file_get_contents("custom/themes/SuiteP/themedef.php");
		    }else{
			  include("themes/SuiteP/themedef.php");	
			  $defscontent = file_get_contents("themes/SuiteP/themedef.php");
			}
			
			$maincss      = file_get_contents("custom/modules/outr_Outright_Theme_Generator/theme_folder/style.css");
			
		    if(!empty($themedef)){
				$explode  = explode("['LBL_SUBTHEMES']",$defscontent);
			}
			foreach($themedef['config_options']['sub_themes']['options'][$app_strings['LBL_SUBTHEMES']] as $key=>$val){
				$defsarray[$key]  = $val;	
			}
			
			 if(isset($result['name']) && !empty($result['name']))
             {
				
				 unset($defsarray[$result['name']]);
				 global $sugar_config,$current_user;
				 $user = new User();
				 $user->retrieve($current_user->id);
				 $userPreference = new UserPreference($user);
				 $subthme_reslt=$userPreference->getPreference('subtheme');
				 if($result['name']!==$bean->name){
					 if($subthme_reslt==$result['name']){
					  $userPreference->setPreference('subtheme', $bean->name);
					 }
				 }	
				 	
			 } 
			 
		
		$defsarray[$bean->name]   = $bean->name;
		$defname                  = "themedef";
		$appstrings               = "app_strings";
		
		$nedeffile = $explode[0]."['LBL_SUBTHEMES'])){\r\n\$".$defname."['config_options']['sub_themes']['options']= array(\r\n\$".$appstrings."['LBL_SUBTHEMES']=>".var_export($defsarray,true).");\r\n\$themedef['config_options']['sub_themes']['default'] = 'Dawn';\n}" ;
		
		file_put_contents("custom/themes/SuiteP/themedef.php",$nedeffile);
		
			foreach($bean->column_fields as $column_key=>$column_value){
				if($column_key > 15){
					if($column_value=="header_border_top" && !empty($bean->$column_value)){
						$maincss     = str_replace($column_value,"2px solid ".$bean->$column_value,$maincss);
					}else if($column_value=="global_text_box_brdr_color" && !empty($bean->$column_value)){
						$maincss     = str_replace($column_value,"1px solid ".$bean->$column_value,$maincss);
					}else if($column_value=="header_active_tab_border_color" && !empty($bean->$column_value)){
						$maincss     = str_replace($column_value,"3px solid ".$bean->$column_value,$maincss);
					}else if($column_value=="global_body_font_fmly" && !empty($bean->$column_value)){
						$newfamily   = $bean->$column_value;
						$maincss     = str_replace($column_value,html_entity_decode($newfamily),$maincss);
					}else if($column_value=="global_body_font_fmly" || $column_value=="custom_font_family"){
						if(isset($bean->custom_font_family)&&!empty($bean->custom_font_family)){
						  $maincss     = str_replace('global_body_font_fmly',$bean->custom_font_family,$maincss);
						}else{
						  $maincss       = str_replace('global_body_font_fmly',$bean->global_body_font_fmly,$maincss);
						}
					}else if($column_value=="global_anchor_tag_color"){
                        if(empty($bean->global_anchor_tag_color)){
                        	$maincss       = str_replace('global_anchor_tag_color','#f08377',$maincss);
                        }else{
                            $maincss     = str_replace($column_value,$bean->$column_value,$maincss);
                        }	
                    }else if($column_value=="detail_view_panel_heading_collapsed_bgcolor"){
                    	if(empty($bean->detail_view_panel_heading_collapsed_bgcolor)){
                        	$maincss       = str_replace('detail_view_panel_heading_collapsed_bgcolor','#bfcad3',$maincss);
                        }else{
                            $maincss     = str_replace($column_value,$bean->$column_value,$maincss);
                        }	
                    }else if($column_value=="edit_view_panel_heading_background_colr"){ 
                        if(empty($bean->edit_view_panel_heading_background_colr)){
                        	$maincss       = str_replace('edit_view_panel_heading_background_colr','#66727d',$maincss);
                        }else{
                            $maincss     = str_replace($column_value,$bean->$column_value,$maincss);
                        }	  
				    }else{
						if(empty($bean->$column_value)){
							$color_code  = $Dawn[$column_value];
							$maincss     = str_replace($column_value,$color_code,$maincss);
						}else{
							
							$maincss     = str_replace($column_value,$bean->$column_value,$maincss);

						}
					}
				}
			}
//echo $bean->list_view_action_bar_selectlink_top_button_color; die('testtest');			
			file_put_contents($custom_theme_name."/style.css",$maincss);

			
		  	if(!empty($result)){    
				if(is_dir('cache/themes/SuiteP/css/'.$result['name'])) {
				  $this->deleteDir("cache/themes/SuiteP/css/".$result['name']); 
				}  
				$cache_theme_name =  $cache_theme_dir."".$bean->name;      
				if (!file_exists($cache_theme_name)) {
				  mkdir($cache_theme_name, 0777, true);
				}
			   file_put_contents($cache_theme_name."/style.css",$maincss);  
		     
			} 
			
        }
      
              
			function deleteDir($dirPath) {
				if (! is_dir($dirPath)) {
				 throw new InvalidArgumentException("$dirPath must be a directory");
				}
				if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
				 $dirPath .= '/';
				}
				$files = glob($dirPath . '*', GLOB_MARK);
				foreach ($files as $file) {
					if (is_dir($file)) {
					$this->deleteDir($file);
					} else {
					unlink($file);
					}
				}
				rmdir($dirPath);
			}
			
    }
?>
