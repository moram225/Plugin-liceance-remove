<?php

    $hook_array['process_record'] = array();
    $hook_array['before_save'] = array();

$hook_array['process_record'][] = Array(1, 'Add View On Cal Button', 'custom/modules/outr_outr_licence/list_view_hook.php', 'add_list_view_button', 'outright_add_buttons');

$hook_array['before_save'][] = Array(2, 'hook for save licence final round', 'custom/modules/outr_outr_licence/list_view_hook.php', 'add_list_view_button', 'outright_finish_license');