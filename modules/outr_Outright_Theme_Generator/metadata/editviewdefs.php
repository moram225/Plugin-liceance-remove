<?php
$module_name = 'outr_Outright_Theme_Generator';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'header_background',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header  Background ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'header_border_top',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Border Color',
          ),
          1 => 
          array (
            'name' => 'header_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Text Color ',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'header_mouse_over_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Mouse Over Text Color ',
          ),
          1 => 
          array (
            'name' => 'header_active_tab_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Active Tab Text Color ',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'header_active_tab_border_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Active Tab Border Color ',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'footer_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Footer Text Color ',
          ),
          1 => 
          array (
            'name' => 'footer_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Footer Background Color ',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'dashlet_head_backg_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Dashlet Header Background Color ',
          ),
          1 => 
          array (
            'name' => 'dashlet_hea_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Dashlet Header Text Color ',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'leftside_bar_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Background Color ',
          ),
          1 => 
          array (
            'name' => 'leftside_bar_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Text Color ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'leftside_bar_button_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Button Color ',
          ),
          1 => 
          array (
            'name' => 'leftside_bar_button_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Button Text Color ',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'leftside_bar_collapse_button_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Collapse Button Color ',
          ),
          1 => 
          array (
            'name' => 'leftside_bar_collapse_button_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Collapse Button Text Color ',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'detail_view_lable_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Lable Color ',
          ),
          1 => 
          array (
            'name' => 'detail_view_field_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Field Background Color ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'detail_view_field_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Field Text Color ',
          ),
          1 => 
          array (
            'name' => 'detail_view_next_prev_button_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Next Prev Button  Background Color ',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'detail_view_next_prev_button_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Next Prev Button Text Color ',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'edit_view_lable_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Edit View Lable Color ',
          ),
          1 => 
          array (
            'name' => 'edit_view_panel_heading_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Edit View Panel Heading Background Color ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'edit_view_panel_heading_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Edit View Panel Heading Text Color ',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'list_view_head_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Head Background Color ',
          ),
          1 => 
          array (
            'name' => 'list_view_head_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Head Text Color ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'list_view_action_bar_barbackground_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Action Bar Background Color ',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'global_body_bgr_clr',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Body Background Color ',
          ),
          1 => 
          array (
            'name' => 'global_font_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Font Color ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'global_text_box_backcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Input Text Box Background Color ',
          ),
          1 => 
          array (
            'name' => 'global_text_box_brdr_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Input Text Box Border Color ',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'global_buttons_bck_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Buttons Background Color ',
          ),
          1 => 
          array (
            'name' => 'global_buttons_txt_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Buttons Text Color ',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'global_buttons_hover_bck_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Buttons Hover Background Color ',
          ),
          1 => 
          array (
            'name' => 'global_buttons_hover_txt_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Buttons Hover Text Color ',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'global_body_font_fmly',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Font Family ',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
