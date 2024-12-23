<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    $admin_option_defs = array();
    $admin_option_defs['Administration']['outright_theme_style_builder'] = array(
        //Icon name. Available icons are located in ./themes/default/images
        'Repair',
        
        //Link name label 
        'Outright Theme Style Builder',
        
        //Link description label
        'Create new theme style',
        
        //Link URL
        './index.php?module=outr_Outright_Theme_Generator',
    );
    

    $admin_group_header[] = array(
        //Section header label
        'Outright Theme Style Builders',
        
        //$other_text parameter for get_form_header()
        '',
        
        //$show_help parameter for get_form_header()
        false,
        
        //Section links
        $admin_option_defs, 
        
        //Section description label
        'You can create your new theme style from here'
    );
