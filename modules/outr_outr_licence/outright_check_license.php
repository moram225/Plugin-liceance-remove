<?php


require_once 'custom/outright_utils/core/security/outright_security_utils.php';

$ors_security = new outright_security($_REQUEST['prod_name']);

			 if($ors_security->status !='verified'){
			$msg ='pls  verfy  frst';
			$msg =$ors_security->replace_final_msg($msg);
			echo $msg;	
			}
			 else if($ors_security->illegal_use){
			$msg ='uu rr  vtm for ilgl use';
			$msg =$ors_security->replace_final_msg($msg);
			echo $msg;	
			}
			else{
			echo  'success';
			}


