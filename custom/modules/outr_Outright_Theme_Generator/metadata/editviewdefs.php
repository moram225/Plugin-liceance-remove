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
        'LBL_EDITVIEW_PANEL9' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
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
            'name' => 'header_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Text Color ',
          ),
          1 => 
          array (
            'name' => 'header_top_border_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Border Color',
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
          1 => 
          array (
            'name' => 'header_quick_create_button_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Quick Create Button Background Color',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'header_quick_create_btn_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Quick Create Button Text Color',
          ),
          1 => 
          array (
            'name' => 'header_quick_create_dropdown_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Quick Create Dropdown Background Color',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'header_quick_create_drpdwn_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Quick Create Dropdown Text Color',
          ),
          1 => 
          array (
            'name' => 'header_quick_create_ddown_bgcolor_hvr',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Quick Create Dropdown Background Color On Hover',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'header_quick_create_drpdwn_hover_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Quick Create Dropdown Text Color On Hover',
          ),
          1 => 
          array (
            'name' => 'header_titles_font_family',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Header Titles Font Family',
          ),
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
            'name' => 'leftside_bar_hover_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Background Color On Hover',
          ),
          1 => '',
        ),
        2 => 
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
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'leftside_bar_button_bgcolor_hover',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Button Background Color On Hover',
          ),
          1 => 
          array (
            'name' => 'leftside_bar_button_textcolor_hover',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Left Side Bar Button Text Color On Hover',
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
          1 => 
          array (
            'name' => 'detail_view_overview_tab_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Active Tab Background Color',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'detail_view_overview_tab_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Active Tab Text Color',
          ),
          1 => 
          array (
            'name' => 'detail_view_tab_content_area_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Tab Content Area Background Color',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'detail_view_panel_heading_collapsed_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Subpanel Heading Background Color',
          ),
          1 => 
          array (
            'name' => 'detail_view_pnl_text_color_heading',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Detail View Subpanel Heading Text Color',
          ),
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
            'name' => 'edit_view_panel_heading_background_colr',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Edit View Panel & Detail View Subpanel After Collapse Heading Background Color',
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
          1 => 
          array (
            'name' => 'edit_view_panel_container_bg_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Edit View Panel Container Background Color',
          ),
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
          1 => 
          array (
            'name' => 'list_view_action_bar_selectlink_top_button_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Action Bar Select Link Top Button',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'list_view_action_bar_selectlink_button_hover_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Action Bar Select Link Button Color On Hover',
          ),
          1 => 
          array (
            'name' => 'list_view_bulk_action_disabledbutton_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Bulk Action Disabled Button Background Color',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'list_view_bulk_action_disabledbutton_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Bulk Action Disabled Button Text Color',
          ),
          1 => 
          array (
            'name' => 'list_view_bulk_action_button_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Bulk Action Button Background Color',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'list_view_filter_column_icon_background_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Filter & Column Icon Background Color',
          ),
          1 => 
          array (
            'name' => 'list_view_filter_column_icon_background_hover_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Filter & Column Icon Background Color On Hover',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'list_view_pagination_left_side_button_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Pagination Left Button Background Color',
          ),
          1 => 
          array (
            'name' => 'list_view_pagination_left_side_button_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Pagination Left Button Color',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'list_view_pagination_right_side_button_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Pagination Right Button Background Color',
          ),
          1 => 
          array (
            'name' => 'list_view_pagination_button_color_right',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Pagination Right Button Color',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'list_view_bulk_action_dropdown_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Bulk Action Dropdown Background Color',
          ),
          1 => 
          array (
            'name' => 'list_view_bulk_action_drpdwn_textcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Bulk Action Dropdown Text Color',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'list_view_bulk_action_dropdown_hover_bgcolor',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Bulk Action Dropdown Background Color On Hover',
          ),
          1 => 
          array (
            'name' => 'list_view_bulk_action_drpdwn_hover_text_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'List View Bulk Action Dropdown Text Color On Hover',
          ),
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
            'label' => 'Font Family',
          ),
          1 => 
          array (
            'name' => 'global_anchor_tag_color',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Global Anchor Tag Color',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assign_all_users',
            'studio' => 
            array (
              'listview' => true,
              'detailview' => true,
              'editview' => true,
            ),
            'label' => 'Assign All user if select',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
