<?php
class add_list_view_button{
    function outright_add_buttons($focus, $event, $args){
        global $timedate;

        $validate_url = "index.php?action=index&module=outr_outr_licence&action=outright_licence_verify&to_pdf=1";
		 $cancel_url = "index.php?action=index&module=outr_outr_licence&action=outright_licence_cancel&to_pdf=1";
		 $validate_msg ='Are you Sure to Validate License?';
         $cancel_msg ='Are you Sure to Cancel License? You can Switch Domain after this.';
		$request_data=array(
			'lic_key'=>$focus->licence_key,
			'prod_id'=>$focus->id,

			);
		
		if($focus->licence_key){
			$focus->validate_button = "<button id='validate_button' type='button'>Validate Now</button>";
		   outright_ajax($validate_url,'#validate_button','#validate_button',$request_data,'click',$validate_msg,1);
		}
		else{
		$focus->validate_button ='Please put your license key from <a target="_blank" href="https://store.outrightcrm.com/my-account/">Store</a>';
		}
		
		if($focus->licence_key && $focus->verification_status =='verified'){		
		$focus->validate_button = "<button id='cancel_button' type='button'>Cancel Domain</button>";
		outright_ajax($cancel_url,'#cancel_button','#cancel_button',$request_data,'click',$cancel_msg,1);
		}
    }

	    function outright_finish_license($bean, $event, $args){
                $bean->name =strtolower($bean->name);
				if($bean->name =='outright_twilio_calls' && $bean->verification_status=='verified'){
				rename ('custom/include/SugarFields/Fields/Phone_unverified','custom/include/SugarFields/Fields/Phone');
				}
				else if($bean->name =='outright_twilio_calls' && $bean->verification_status!='verified'){
						rename ('custom/include/SugarFields/Fields/Phone','custom/include/SugarFields/Fields/Phone_unverified');

				}
				outright_do_repair();
		}
}

