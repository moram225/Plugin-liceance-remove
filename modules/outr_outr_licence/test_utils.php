<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

//example URL
$example_url ="index.php?module=outr_outr_licence&action=test_utils&save_module=outr_outr_licence&do_action=save_bean";
ini_set('display_errors',0);
error_reporting(E_ALL);

echo "<h2>Please make URL like this </h2>".$example_url;
// Create a new bean example
if($_REQUEST['do_action'] =='save_bean' ){
    $data_array['name']='Outright_utiils';
	$data_array['product_version']='23';
	$data_array['status']='Active';
	$data_array['verification_status']='Free';
	$data_array['save_module']=$_REQUEST['save_module'];	
	$dup_array=array();
    $dup_array['name']='Outright_utiils';
    outright_save_new($data_array,$dup_array);
}
if($_REQUEST['do_lic'] =='1' ){	
	
	echo 'hello';
   $ors_security = new outright_security(0,'Outright_utiils');
   echo '<pre>';
   print_r($ors_security);
   echo '</pre>';
}	
// Send email example
// retreive example
//imap example
//smtp 
//