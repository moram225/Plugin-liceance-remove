<?php

sleep("1");

$ors_security = new outright_security($_REQUEST['prod_id']);
$final_result = $ors_security->do_cancel();
$ors_security->prod_bean->description=$final_result->msg;
$ors_security->prod_bean->status = 'Pending';
$ors_security->prod_bean->verification_status = 'Pending';
$ors_security->prod_bean->inactive_date = date('Y-m-d H:i:s',strtotime('now'));

$ors_security->prod_bean->Save();

print_r(json_encode($final_result));

$prod_logger = outright_get_correct_bean('outr_product_logger');
$prod_logger->outr_outr_licence_id_c= $_REQUEST['prod_id'];
$prod_logger->status = 'InActive';
$prod_logger->description= "License was cancelled for this domain";
$prod_logger->verification_status= 'Pending';
$prod_logger->name= "License Cancel started for Product for license";

$prod_logger->Save();

sleep("1");