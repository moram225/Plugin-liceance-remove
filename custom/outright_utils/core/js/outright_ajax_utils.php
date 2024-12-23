<?php

/*****************************************
 * 
 *     @description : Handle Ajax Request 
 *     @Author      : Outright 
 *     Date         :  
 *     @param     string --->$source_filed  : field class name or ID ; example :: class name should be ".class" and id "#idva"       
 *     @param     string --->$event            : jquery event name e; example 'click','dblclick','mouseenter'              
 *     @param     string --->$url              : Request URL for ajax              
 *     @param     string --->$destiation_field : class name or ID             
 *     @param     string --->$method     : methods for  request-response between a client and server are: GET and POST.             
 *     @param     JSO object --->$method : Requested data to process example :: $request_data = { "name":"John","age":"10"}         
 *     @return    string|obje|true|false : Return's the true|obj|string on success or false on fail  ;    
 *     @since 1.0.0
 * 
 * ***************************************/	

function outright_ajax($url,$source_field,$destination_field=false,$request_data,$event='click',$show_confirm_msg=false,$auto_refresh=0,$console_log=true,$show_alert=false,$method='POST'){
	$request_data = json_encode($request_data);
	echo '<div id="outright_ajax_loading" style="display:none"><img src="custom/outright_utils/images/please_wait.gif"></div>';

	echo '<script>';
    echo PHP_EOL;
	if($event){
	  echo "$(document).ready(function(){";

	  echo "$('".$source_field."').".$event."(function(){";
	  echo PHP_EOL;
	    if($show_confirm_msg){
	  echo "var cnf =confirm('".$show_confirm_msg."');";
	  echo PHP_EOL;
	  echo "if(!cnf){ return false;}";
	  echo PHP_EOL;
	   echo 'var loading = $("#outright_ajax_loading");
        $(document).ajaxStart(function () {
            loading.show();
        });';

	  }
	}
	  echo "$.ajax({
	        url  : '".$url."',
			dataType: 'json',
	        type : '".$method."',
	        data : ".$request_data.",
	        success: function(result){";
							
			if($destination_field) { 
				echo PHP_EOL;
				echo "$('".$destination_field."').html(result.status);";
				echo PHP_EOL;
				echo 'loading.hide();';
				if($auto_refresh){
				echo 'location.reload();';
				}
				
		    }
			if($show_alert){
				echo PHP_EOL;
				echo 'alert(result);';	
				echo PHP_EOL;
			}
			if($console_log){
				echo 'console.log(result);';
				echo PHP_EOL;
			}
		    echo '}';
			echo PHP_EOL;
		    echo '});';
		    echo PHP_EOL;
	if($event){	
	  echo "});";
	  echo PHP_EOL;
	}
	
	  echo "});";
	  echo PHP_EOL;

	
	echo '</script>';
}