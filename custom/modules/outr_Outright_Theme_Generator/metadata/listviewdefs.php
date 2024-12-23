<?php
$module_name = 'outr_Outright_Theme_Generator';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGN_ALL_USERS' => 
  array (
    'type' => 'bool',
    'studio' => 
    array (
      'listview' => true,
      'detailview' => true,
      'editview' => true,
    ),
    'label' => 'Assign All user if select',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
