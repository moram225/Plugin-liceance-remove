<?php
$module_name = 'outr_outr_licence';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'product_version' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRODUCT_VERSION',
        'width' => '10%',
        'default' => true,
        'name' => 'product_version',
      ),
      'licence_key' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LICENCE_KEY',
        'width' => '10%',
        'default' => true,
        'name' => 'licence_key',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'product_version' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRODUCT_VERSION',
        'width' => '10%',
        'default' => true,
        'name' => 'product_version',
      ),
      'inactive_by' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_INACTIVE_BY',
        'id' => 'USER_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'inactive_by',
      ),
      'licence_key' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_LICENCE_KEY',
        'width' => '10%',
        'default' => true,
        'name' => 'licence_key',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'inactive_date' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_INACTIVE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'inactive_date',
      ),
      'last_verification_date' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_LAST_VERIFICATION_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'last_verification_date',
      ),
      'verification_message' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_VERIFICATION_MESSAGE',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'verification_message',
      ),
      'expiry_date' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_EXPIRY_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'expiry_date',
      ),
      'verification_status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_VERIFICATION_STATUS',
        'width' => '10%',
        'name' => 'verification_status',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
