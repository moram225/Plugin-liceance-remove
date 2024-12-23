<?php


function outright_get_all_roles(){
      global $db;
      $qry  = "SELECT id,name from acl_roles WHERE deleted=0";
      $qry1 = $db->query($qry);
      $get_roles[''] = '';
      while($row = $db->fetchByAssoc($qry1)){
		   $get_roles[$row['name']] = $row['name'];
	  }
      return $get_roles;
}