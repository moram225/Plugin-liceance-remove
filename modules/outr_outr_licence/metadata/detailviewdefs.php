<?php
$module_name = 'outr_outr_licence';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'expiry_date',
            'label' => 'LBL_EXPIRY_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'licence_key',
            'label' => 'LBL_LICENCE_KEY',
          ),
          1 => 
          array (
            'name' => 'product_version',
            'label' => 'LBL_PRODUCT_VERSION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'inactive_by',
            'studio' => 'visible',
            'label' => 'LBL_INACTIVE_BY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'inactive_date',
            'label' => 'LBL_INACTIVE_DATE',
          ),
          1 => 
          array (
            'name' => 'verification_message',
            'studio' => 'visible',
            'label' => 'LBL_VERIFICATION_MESSAGE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'verification_status',
            'studio' => 'visible',
            'label' => 'LBL_VERIFICATION_STATUS',
          ),
          1 => 'description',
        ),
        7 => 
        array (
        ),
      ),
    ),
  ),
);
;
?>
