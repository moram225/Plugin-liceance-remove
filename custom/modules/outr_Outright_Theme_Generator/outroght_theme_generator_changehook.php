<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class outroght_theme_generator_changehookClass
    {
        function outroght_theme_generator_changehookMethod($bean, $event, $arguments)
        {
            //logic 
           if($bean->is_admin==1){
			   $default_themes=array('Dawn','Day','Dusk','Night');
			   $theme_bean=outright_retrieve('outr_Outright_Theme_Generator', false ,array('name'=>$_POST['subtheme']));
			   if(!empty($theme_bean->id) && $theme_bean->assign_all_users==1){
				  $this->outright_update_theme($bean,$_POST['subtheme']);
			   }else if(empty($theme_bean->id) && !in_array($bean->getSubTheme(),$default_themes)){
				   $old_theme_bean=outright_retrieve('outr_Outright_Theme_Generator', false ,array('name'=>$bean->getSubTheme(),'assign_all_users'=>1));
				   if(!empty($old_theme_bean->id)){
						$this->outright_update_theme($bean,$_POST['subtheme']);
				   }
			   }
		   }
        }
        
        function outright_update_theme($bean,$subtheme){
		   $sql="SELECT id from users WHERE deleted=0";
		   $users=outright_run_sql($sql);
		   foreach($users as $user){
			   if($bean->id!=$user['id']){
					$sql2="SELECT contents FROM user_preferences WHERE category = 'global' AND assigned_user_id = '".$user['id']."' LIMIT 1";
					$user_preferences=outright_run_sql_one_row($sql2);
					$content= base64_decode($user_preferences['contents']);
					$result = unserialize( $content );
					$result['subtheme']=$subtheme;
					$content= base64_encode(serialize( $result ));
					$upsql="UPDATE user_preferences SET contents='".$content."' WHERE category = 'global' AND assigned_user_id='".$user['id']."'";
					$ret=outright_run_sql($upsql);
				}
		   }
		   //~ die('dddddddddddddddddddd');
		}
    }

?>
