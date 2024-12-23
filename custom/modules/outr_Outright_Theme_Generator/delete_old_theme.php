<?php
    //ini_set('display_errors',1);
	//error_reporting(E_ALL  & ~E_STRICT  & ~E_NOTICE); 
	
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class delete_theme_class
    {
        function delete_theme_method($bean, $event, $arguments){
			
			if (file_exists("custom/themes/SuiteP/themedef.php")) {
			  include("custom/themes/SuiteP/themedef.php");
			  $defscontent  = file_get_contents("custom/themes/SuiteP/themedef.php");
		    }else{
			  include("themes/SuiteP/themedef.php");	
			  $defscontent  = file_get_contents("themes/SuiteP/themedef.php");
			}
			
			if(!empty($themedef)){
				$explode  = explode("['LBL_SUBTHEMES']",$defscontent);
			}
			
			foreach($themedef['config_options']['sub_themes']['options'][$app_strings['LBL_SUBTHEMES']] as $key=>$val){
				if($val!==$bean->name){
				 $defsarray[$key]  = $val;
			    }
			}
			
			$defname    = "themedef";
			$appstrings = "app_strings";
			
			$nedeffile = $explode[0]."['LBL_SUBTHEMES'])){\r\n\$".$defname."['config_options']['sub_themes']['options']= array(\r\n\$".$appstrings."['LBL_SUBTHEMES']=>".var_export($defsarray,true).");\r\n\$themedef['config_options']['sub_themes']['default'] = 'Dawn';\n}" ;
			
			file_put_contents("custom/themes/SuiteP/themedef.php",$nedeffile);
			$this->deleteDir("custom/themes/SuiteP/css/".$bean->name);
			
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
