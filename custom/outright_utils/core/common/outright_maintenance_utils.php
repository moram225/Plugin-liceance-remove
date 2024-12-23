<?php


function outright_check_maintenance_mode($isLogedIn = NULL){
		global $current_user,$sugar_config;
		if($isLogedIn){
				$res = outright_check_maintenance_mode_by_query();
				if($res){
						SugarApplication::redirect($sugar_config['site_url']);
					}		
			}
		else{
				if($current_user->id && !$current_user->is_admin){
						outright_check_maintenance_mode_by_query();
					}
				else if($current_user->is_admin){
						outright_check_maintenance_mode_by_query('check');
					}
			}
	}
	
function outright_check_maintenance_mode_by_query($check = false){
		global $current_user,$sugar_config;
		$maintenanceTimeArr = outright_get_maintenance_date_time();
		$qry = outright_get_maintenance_query($maintenanceTimeArr);
		$resArr = outright_run_sql($qry);
		if($resArr){
			foreach($resArr as $key => $res){
					if($res['time_end'] > $maintenanceTimeArr['onlyTime']){
							if(!$check){
									unset($current_user);
									session_destroy();
									return true;
									break;
								}
							if($check){
									$_SESSION['userUnderMaintenance'] = 1;
								}									
						}
					else if($res['time_end'] <= $maintenanceTimeArr['onlyTime']) {
							$_SESSION['userUnderMaintenance'] = 0;
						}
				}
			}
		return false;
	}
function outright_get_maintenance_date_time(){
		$maintenanceTimeArr = array();
		$maintenanceTimeArr['currentDate'] = date('Y-m-d');
		$currentDateTime = date('Y-m-d h:i a',strtotime('+0 hour'));
		$currentDateTime = strtotime($currentDateTime) + 31 * 60;
		$currentDateTime = date('Y-m-d h:i a',$currentDateTime);
		$maintenanceTimeArr['currentDateTime'] = $currentDateTime;
		$onlyTime = str_replace($currentDate.' ','',$currentDateTime);		
		$maintenanceTimeArr['onlyTime'] = date('H:i',strtotime($onlyTime));
		return $maintenanceTimeArr;		
	}
function outright_get_maintenance_query($maintenanceTimeArr){
		$qry = "select id , day_of_week , interval_day , time_start , time_end , time_start from out_maintenance_mode where deleted=0 and maintenance_status = 'Active' and execution_start_date <= '".$maintenanceTimeArr['currentDate']."' and time_start <= '".$maintenanceTimeArr['onlyTime']."' and time_end > '".$maintenanceTimeArr['onlyTime']."' ";
		return $qry;
	}

function outright_check_eligibal_for_maintenance($dataArr){
		if($dataArr['day_of_week'] && $dataArr['last_executed_date']){
				if($dataArr['day_of_week'] == date("D")){
						return true;
					}
				return false;				
			}
		else if($dataArr['interval_day'] && $dataArr['last_executed_date']){
				$lastExecutionTime = strtotime($dataArr['last_executed_date']) + 
				$dataArr['interval_day'] * 86400;
				if(date('Y-m-d') == 
				strtotime('Y-m-d',$lastExecutionTime)){
						return true;
					}
				else{
						return false;
					}
			}
	}
