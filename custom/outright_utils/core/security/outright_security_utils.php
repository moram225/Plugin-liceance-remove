<?php
class outright_security{
	var $api_url;
	var $illegal_use;
					function __construct($prod_id=false,$prod_name=false){
						$this->api_url ="https://apistore.outrightcrm.com/service/v4_1/rest.php";						
						
						if($prod_id){
							$this->prod_bean = outright_retrieve('outr_outr_licence',$prod_id);
						}
						elseif($prod_name){
						$search_where =array('name'=>$prod_name);
						$this->prod_bean = outright_retrieve('outr_outr_licence',false,$search_where);
						}
						else{
						$sql ="select * from outr_outr_licence where deleted =0";
						$this->prod_bean =outright_run_sql($sql);
						}
						
						/** For future..
						if($this->outright_license_to_verify()){
							$this->do_validate();
						} **/
						
						$this->illegal_use = $this->outright_get_illegal_use();
				
						if($this->illegal_use){
						outright_error_log('Illegal Entry found for product.This is not good','outr_product_logger');
						}
						if(!$this->past_validated){
						outright_error_log('Product is not still validated','outr_product_logger');
						}
					}
                function do_validate(){
					global $sugar_config;
		
				$verify_params =array();
				$verify_params['session'] = $this->prod_bean->licence_key;
				$verify_params['domain_name'] = $sugar_config['site_url'];
				$verify_params['lic_key'] = $this->prod_bean->licence_key;
				$verify_params['old_key'] = $this->prod_bean->licence_key;
				$verify_params['last_verify_date'] = $this->prod_bean->licence_key;
				$verify_params['last_verify_status'] = $this->prod_bean->licence_key;
				$verify_params['action'] = 'verify';

				$final_result = outright_rest_call($this->api_url,'outright_license_verify',$verify_params);
				if($final_result->status =='success'){
							$this->prod_bean->verification_status='verified';
							$this->prod_bean->signature=$final_result->signature;

							}
							else{
							$this->prod_bean->verification_status='failed';
							}
							$this->prod_bean->description=$final_result->msg;
							$this->prod_bean->Save();
							print_r(json_encode($final_result));

							$prod_logger = outright_get_correct_bean('outr_product_logger');
							$prod_logger->outr_outr_licence_id_c= $_REQUEST['prod_id'];
							$prod_logger->status = $final_result->status;
							$prod_logger->description= $final_result->msg;
							$prod_logger->verification_status= $final_result->status;
							$prod_logger->name= "License Validation started for Product for license";
							$prod_logger->signature= $final_result->signature;

							$prod_logger->Save();
								$signature_file ='modules/outr_outr_licence/validated/'.$this->prod_bean->name.'_do_not_touch.php';

							if($final_result->status =='success'){
								$server_signature ='<?php $client_validate_key="'.$final_result->signature.'";';

							file_put_contents($signature_file,$server_signature);
							}
							else{
							unlink($signature_file);
							}
				}
				 function do_cancel(){
					global $sugar_config;
					$verify_params =array();
					$verify_params['session'] = $this->prod_bean->licence_key;
					$verify_params['domain_name'] = $sugar_config['site_url'];
					$verify_params['lic_key'] = $this->prod_bean->licence_key;
					$verify_params['old_key'] = $this->prod_bean->licence_key;
					$verify_params['last_verify_date'] = $this->prod_bean->licence_key;
					$verify_params['last_verify_status'] = $this->prod_bean->licence_key;
					$verify_params['action'] = 'cancel';
					
					$fl_name = $this->prod_bean->name."_do_not_touch.php";
					$file_location ='modules/outr_outr_licence/validated/'.$fl_name;
					unlink($file_location);
					
					return outright_rest_call($this->api_url,'outright_license_verify',$verify_params);
				}
				function do_checkin(){


				}
				function run_lift(){


				}
				function do_unlock(){


				}
				function strart_light(){


				}
				function lets_food(){


				}
				function take_rest(){


				}
				function lets_checkout(){


				}
				function outright_break_lic_key($lic_key){
				$lic_key_prefix =explode('-',$lic_key);
				return $lic_key_prefix[0];
				}

				function past_validated(){
					 $fl_name = $this->prod_bean->name."_do_not_touch.php";
					
					$file_location ='modules/outr_outr_licence/validated/'.$fl_name;
					if(!file_exists($file_location)){
					outright_error_log('Product is not verified::Please verify from admin','outr_product_logger','');
					$this->past_validated=0;

					}
					else{
						$this->past_validated=1;
					}
					return $this->past_validated;
				}

				function verify_past_validated(){
					$fl_name = $this->prod_bean->name."_do_not_touch.php";
					$file_location ='modules/outr_outr_licence/validated/'.$fl_name;
					require_once $file_location;
					if($client_signature!=$this->prod_bean->signature){
					
					}
					foreach($prod_config_prefix as $prod_algo){
					switch($prod_algo){
					
								case 'monday':
									$this->do_checkin($prod_algo);
									break;
								case 'tuesday':
									$this->run_lift($prod_algo);
									break;
								case 'wednesday':
									$this->do_unlock($prod_algo);
									break;
								case 'thursday':
									$this->strart_light($prod_algo);
									break;
								case 'friday':
									$this->lets_food($prod_algo);
									break;
								case 'saturday':
									$this->take_rest($prod_algo);
									break;
								case 'sunday':
									$this->lets_checkout($prod_algo);
									break;					
					  }					
					}					
				}

				function outright_get_prod_history(){
				$sql ="select status from outr_product_logger  where product_id ='".$this->prod_bean->id."'  order by date_entered desc limit 6 ";
				$illegal_use_rows =outright_run_sql();
				return $illegal_use_rows;
				}

				function outright_get_illegal_use(){
					global $db;
					$sql ="select status from outr_product_logger  where  status='illegal_use' ";
					$row = $db->query($sql);
					$res = $db->fetchByAssoc($row);
					return $res;
				}

				function notify_illegal_use(){
					global $sugar_config;
					$msg = "Illegal Use was found at ".$sugar_config['site_url'];
				    outright_send_email('ashish@outrightcrm.com','Suspected Illegal Use',$msg);
				}

				function replace_final_msg($msg){
				$rep_arr =array(
				'uu' =>'You',
				'rr' =>'Are',
				'vtm' =>'Victim',
					'pls' =>'Please',
					'vrfy' =>'Verify',
					'frst' =>'First',
				);
				foreach($rep_arr as $target_words=>$target){
					$msg =str_replace($target_words,$target,$msg);
				}
					return $msg;
				}

				function outright_license_to_verify(){
					outright_error_log('verify_license::Verification started','outr_product_logger');

					$time_now = strtotime('now');
					$sql =" select date_modified from outr_outr_licence where id='".$this->prod_bean->id."' order by date_entered desc limit 1";
					$row =outright_run_sql_one_row($sql);
					if($time_now -strtotime($row['date_modified']) > 7200){
					return true;
					}
					return false;
				}
}
