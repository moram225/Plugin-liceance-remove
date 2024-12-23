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
  'LICENCE_KEY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LICENCE_KEY',
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
  'VALIDATE_BUTTON' => 
  array (
    'type' => 'varchar',
    'label' => 'Validate License',
    'width' => '10%',
    'default' => true,
  ),
  'INACTIVE_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INACTIVE_DATE',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
