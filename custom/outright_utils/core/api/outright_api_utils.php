<?php
function outright_rest_call($url,$method,$param,$show_errors=0) {
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	
	$json = json_encode($param);
	$postArgs = array(
	    'method' => $method,
	    'input_type' => 'JSON',
	    'response_type' => 'JSON',
	    'rest_data' => $json,
	    );
     curl_setopt($curl, CURLOPT_VERBOSE, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);

	$response = curl_exec($curl);
	$info = curl_getinfo($curl);
	$error =curl_error($curl);
	if($show_errors){
		echo '<pre>';
		print_r($error);
		echo '</pre>';
	}
	$result = json_decode($response);

	if ( !isset($result) ) {
	   die("Rest Failed Error: {$result->name} - {$result->description}\n.");
	}	
	return $result;
}

function outright_curl($url,$type='GET',$args=false,$show_errors=0) {
		  $url = trim($url);
		  $curl = curl_init($url);
		  curl_setopt($curl, CURLOPT_VERBOSE, 0);
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($curl, CURLOPT_URL, $url);	
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		  curl_setopt($curl, CURLINFO_HEADER_OUT, TRUE); // make sure we see the sended header afterwards
		  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                                            'Content-Type: application/json',
                                            'Accept: application/json',
											'Connection:keep-alive',
                                            ));
		   
		   try {
		   	  switch ($type) {
			case 'POST':
			  curl_setopt($curl, CURLOPT_POST, 1);
					 if (count($args)){
					  curl_setopt($curl, CURLOPT_POSTFIELDS , json_encode($args));
				  }
			  break;
			case 'GET':
			  curl_setopt($curl, CURLOPT_HTTPGET, 1);
			  break;
			default:
			  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $type);
		  }
		 $return_data = curl_exec($curl);	
		}
		catch(Exception $e) {
		  return json_decode( 'Message: ' .$e->getMessage());
		  }
		  $final_response =json_decode(trim($return_data));
		return $final_response;
}
