<?php $manifest=array (
  'acceptable_sugar_flavors' => 
  array (
    0 => 'CE',
    1 => 'PRO',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'acceptable_sugar_versions' => 
  array (
    'exact_matches' => 
    array (
    ),
    'regex_matches' => 
    array (
      0 => '(.*?)\\.(.*?)\\.(.*?)$',
    ),
  ),
  'readme' => '',
  'key' => 'Outright_Theme',
  'author' => 'OutrightCRM',
  'description' => 'Outright Store Extension to Brand CRM with colors and fonts',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Brand theme colors and Fonts Ext. by Outright Store',
  'published_date' => '2022-01-01 05:56:35',
  'type' => 'module',
  'version' => '1.0.0',
  'remove_tables' => 'prompt',
);
 $installdefs=array (
  'id' => 'OUTRIGHT_THEME_V_1',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'outr_Outright_Theme_Generator',
      'class' => 'outr_Outright_Theme_Generator',
      'path' => 'modules/outr_Outright_Theme_Generator/outr_Outright_Theme_Generator.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'outr_outr_licence',
      'class' => 'outr_outr_licence',
      'path' => 'modules/outr_outr_licence/outr_outr_licence.php',
      'tab' => false,
    ),
    2 => 
    array (
      'module' => 'outr_product_logger',
      'class' => 'outr_product_logger',
      'path' => 'modules/outr_product_logger/outr_product_logger.php',
      'tab' => false,
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom',
      'to' => 'custom',
    ),
    1 => 
    array (
      'from' => '<basepath>/jquery.minicolors.css',
      'to' => 'jquery.minicolors.css',
    ),
    2 => 
    array (
      'from' => '<basepath>/jquery.minicolors.js',
      'to' => 'jquery.minicolors.js',
    ),
    3 => 
    array (
      'from' => '<basepath>/jquery.minicolors.png',
      'to' => 'jquery.minicolors.png',
    ),
    4 => 
    array (
      'from' => '<basepath>/modules',
      'to' => 'modules',
    ),
  
  ),
  'language' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'connectors' => 
  array (
  ),
  'dashlets' => 
  array (
  ),
  'layoutfields' => 
  array (
  ),
  'layoutdefs' => 
  array (
  ),
  'vardefs' => 
  array (
  ),
  'custom_fields' => 
  array (
  ),
  'logic_hooks' => 
  array (
  ),
  'pre_execute' => 
  array (
  ),
  'pre_uninstall' => 
  array (
  ),
  'post_uninstall' => 
  array (
  ),
);