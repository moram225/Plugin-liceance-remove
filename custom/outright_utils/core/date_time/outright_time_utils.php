<?php

function outright_get_duration($endtime,$starttime){	
	$duration_arr = array();
	if(isset($endtime) && isset($starttime)){
		$diff = date_diff(date_create($starttime), date_create($endtime) );		
		$duration_arr =  array(
				'yr' => $diff->y,
				'mon' => $diff->m,
				'day' => $diff->d,
				'hr' => $diff->h,
				'min' => $diff->i,
				'sec' => $diff->s
			);	
	}
	return $duration_arr;	
}

function outright_now($operator='-',$dt=false,$server_now=false,$time_required=true){
global $timedate;
$outright_now_date = array();
$date_str ="Y".$operator.'m'.$operator.'d'." "."H:i:s";
if(!$dt){
$dt = strtotime('now');
}
if($server_now){
$dt = strtotime($timedate->nowDB());
}
$ors_now_date =date($date_str,$dt);
return $ors_now_date;
}

function outright_get_tz(){
echo date_default_timezone_set();
}

function outright_get_user_tz($user_id=NULL){
	global $current_user,$timedate;
	if(!$user_id){
	$user = $current_user;
	}
	else{
	$user =outright_retrieve("User",$user_id);
	}
	return $timedate->userTimezone($user);
}

function outright_set_tz($tz){
date_default_timezone_set($tz);
}

