<?php
$module_name = 'outr_outr_licence';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'EXPIRY_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_EXPIRY_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'VERIFICATION_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_VERIFICATION_STATUS',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'LAST_VERIFICATION_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LAST_VERIFICATION_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'PRODUCT_VERSION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRODUCT_VERSION',
    'width' => '10%',
    'default' => true,
  ),
  'LICENCE_KEY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LICENCE_KEY',
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
