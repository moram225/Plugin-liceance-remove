<?php
sleep("1");

$ors_security = new outright_security($_REQUEST['prod_id']);
$ors_security->do_validate();
sleep("1");