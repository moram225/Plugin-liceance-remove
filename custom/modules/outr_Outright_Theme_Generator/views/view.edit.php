<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
 require_once("include/MVC/View/views/view.edit.php");
 
 class outr_Outright_Theme_GeneratorViewEdit extends ViewEdit
 {
	function __construct()
	{		
		parent::__construct();
	} 
	/**
	*	to display the twilio callid to save contact call relationship later on
	*
	**/
 
	function display()
	{
		echo "<center><h2 style='color:red;'><a href='index.php?module=outr_outr_licence&action=index'>".$_REQUEST['package_error']." </a></h2> </center>";
		$ors_security = new outright_security(false,'outright_theme_manager');
		if($ors_security->prod_bean->verification_status !='verified'){
			echo '<a href="index.php?module=outr_outr_licence&action=index">Verify your Theme style builder package first</a>';
		}
		if($ors_security->prod_bean->illegal_use){
			echo '<a href="index.php?module=outr_outr_licence&action=index">Verify your Theme style builder package first</a>';
		}
		echo '<script src="jquery.minicolors.js"></script><link rel="stylesheet" href="jquery.minicolors.css">';
		?>
		<script>
    $( document ).ready(function() {
		 var font_name = '<?php echo html_entity_decode($this->bean->global_body_font_fmly); ?>';
		 $('#global_body_font_fmly').val(font_name);
	     $("#actionMenuSidebar").html('<ul><li class="actionmenulinks" role="presentation"><a href="index.php?module=outr_Outright_Theme_Generator&action=EditView&return_module=outr_Outright_Theme_Generator&return_action=DetailView" data-action-name="Add"><div class="side-bar-action-icon"><span class="suitepicon suitepicon-action-add"></span></div><div class="actionmenulink">Create Outright Theme Generator</div></a></li><li class="actionmenulinks" role="presentation"><a href="index.php?module=outr_Outright_Theme_Generator&action=index&return_module=outr_Outright_Theme_Generator&return_action=DetailView" data-action-name="View"><div class="side-bar-action-icon"><span class="suitepicon suitepicon-action-view"></span></div><div class="actionmenulink">View Outright Theme Generator</div></a></li></ul>');
	  
		  $("#header_text_color").attr("data-control","hue");
		  $("#header_text_color").addClass("demo");
		  $("#header_active_tab_text_color").attr("data-control","hue");
		  $("#header_active_tab_text_color").addClass("demo");
		  $("#header_background").attr("data-control","hue");
		  $("#header_background").addClass("demo");
		  $("#footer_text_color").attr("data-control","hue");
		  $("#footer_text_color").addClass("demo");
		  $("#footer_background_color").attr("data-control","hue");
		  $("#footer_background_color").addClass("demo");
		  $("#dashlet_head_backg_color").attr("data-control","hue");
		  $("#dashlet_head_backg_color").addClass("demo");
		  $("#dashlet_hea_text_color").attr("data-control","hue");
		  $("#dashlet_hea_text_color").addClass("demo");
		  $("#leftside_bar_background_color").attr("data-control","hue");
		  $("#leftside_bar_background_color").addClass("demo");
		  $("#leftside_bar_text_color").attr("data-control","hue");
		  $("#leftside_bar_text_color").addClass("demo");
		  $("#leftside_bar_button_color").attr("data-control","hue");
		  $("#leftside_bar_button_color").addClass("demo");
		  $("#leftside_bar_button_text_color").attr("data-control","hue");
		  $("#leftside_bar_button_text_color").addClass("demo");
		  $("#leftside_bar_collapse_button_color").attr("data-control","hue");
		  $("#leftside_bar_collapse_button_color").addClass("demo");
		  $("#leftside_bar_collapse_button_text_color").attr("data-control","hue");
		  $("#leftside_bar_collapse_button_text_color").addClass("demo");
		  $("#leftside_bar_button_bgcolor_hover").attr("data-control","hue");
		  $("#leftside_bar_button_bgcolor_hover").addClass("demo");
		  $("#leftside_bar_button_textcolor_hover").attr("data-control","hue");
		  $("#leftside_bar_button_textcolor_hover").addClass("demo");	
$("#leftside_bar_hover_bgcolor").attr("data-control","hue");
$("#leftside_bar_hover_bgcolor").addClass("demo");	  
		  $("#detail_view_lable_color").attr("data-control","hue");
		  $("#detail_view_lable_color").addClass("demo");
		  $("#detail_view_field_background_color").attr("data-control","hue");
		  $("#detail_view_field_background_color").addClass("demo");
		  $("#detail_view_field_text_color").attr("data-control","hue");
		  $("#detail_view_field_text_color").addClass("demo");
		  $("#detail_view_next_prev_button_background_color").attr("data-control","hue");
		  $("#detail_view_next_prev_button_background_color").addClass("demo");
		  $("#detail_view_next_prev_button_text_color").attr("data-control","hue");
		  $("#detail_view_next_prev_button_text_color").addClass("demo");
          $("#detail_view_tab_content_area_bgcolor").attr("data-control","hue");
          $("#detail_view_tab_content_area_bgcolor").addClass("demo");
$("#detail_view_panel_heading_collapsed_bgcolor").attr("data-control","hue");
$("#detail_view_panel_heading_collapsed_bgcolor").addClass("demo");	
$("#detail_view_pnl_text_color_heading").attr("data-control","hue");
$("#detail_view_pnl_text_color_heading").addClass("demo");			  
		  $("#edit_view_lable_color").attr("data-control","hue");
		  $("#edit_view_lable_color").addClass("demo");
		  $("#edit_view_panel_heading_background_colr").attr("data-control","hue");
		  $("#edit_view_panel_heading_background_colr").addClass("demo");
		  $("#edit_view_panel_heading_text_color").attr("data-control","hue");
		  $("#edit_view_panel_heading_text_color").addClass("demo");   
$("#edit_view_panel_container_bg_color").attr("data-control","hue");
$("#edit_view_panel_container_bg_color").addClass("demo");		  
		  $("#list_view_head_background_color").attr("data-control","hue");
		  $("#list_view_head_background_color").addClass("demo");
		  $("#list_view_head_text_color").attr("data-control","hue");
		  $("#list_view_head_text_color").addClass("demo");
		  $("#list_view_action_bar_barbackground_color").attr("data-control","hue");
		  $("#list_view_action_bar_barbackground_color").addClass("demo");           
		  $("#list_view_action_bar_selectlink_top_button_color").attr("data-control","hue");
		  $("#list_view_action_bar_selectlink_top_button_color").addClass("demo");    
		  $("#list_view_action_bar_selectlink_button_hover_color").attr("data-control","hue");
		  $("#list_view_action_bar_selectlink_button_hover_color").addClass("demo"); 
		  $("#list_view_bulk_action_disabledbutton_background_color").attr("data-control","hue");
		  $("#list_view_bulk_action_disabledbutton_background_color").addClass("demo");

		$("#list_view_bulk_action_disabledbutton_text_color").attr("data-control","hue");
		$("#list_view_bulk_action_disabledbutton_text_color").addClass("demo");
		$("#list_view_bulk_action_button_background_color").attr("data-control","hue");
		$("#list_view_bulk_action_button_background_color").addClass("demo");
		$("#list_view_filter_column_icon_background_color").attr("data-control","hue");
		$("#list_view_filter_column_icon_background_color").addClass("demo");
		$("#list_view_filter_column_icon_background_hover_color").attr("data-control","hue");
		$("#list_view_filter_column_icon_background_hover_color").addClass("demo");

$("#list_view_bulk_action_dropdown_bgcolor").attr("data-control","hue");
$("#list_view_bulk_action_dropdown_bgcolor").addClass("demo");
$("#list_view_bulk_action_drpdwn_textcolor").attr("data-control","hue");
$("#list_view_bulk_action_drpdwn_textcolor").addClass("demo");
$("#list_view_bulk_action_dropdown_hover_bgcolor").attr("data-control","hue");
$("#list_view_bulk_action_dropdown_hover_bgcolor").addClass("demo");
$("#list_view_bulk_action_drpdwn_hover_text_color").attr("data-control","hue");
$("#list_view_bulk_action_drpdwn_hover_text_color").addClass("demo");		

		$("#list_view_pagination_left_side_button_bgcolor").attr("data-control","hue");
		$("#list_view_pagination_left_side_button_bgcolor").addClass("demo");
		$("#list_view_pagination_left_side_button_color").attr("data-control","hue");
		$("#list_view_pagination_left_side_button_color").addClass("demo");
		$("#list_view_pagination_right_side_button_bgcolor").attr("data-control","hue");
		$("#list_view_pagination_right_side_button_bgcolor").addClass("demo");
		$("#list_view_pagination_button_color_right").attr("data-control","hue");
		$("#list_view_pagination_button_color_right").addClass("demo");
        $("#detail_view_overview_tab_background_color").attr("data-control","hue");
        $("#detail_view_overview_tab_background_color").addClass("demo");
        $("#detail_view_overview_tab_text_color").attr("data-control","hue");
        $("#detail_view_overview_tab_text_color").addClass("demo");				


		  $("#global_body_bgr_clr").attr("data-control","hue");
		  $("#global_body_bgr_clr").addClass("demo");
		  $("#global_font_color").attr("data-control","hue");
		  $("#global_font_color").addClass("demo");
		  $("#global_text_box_backcolor").attr("data-control","hue");
		  $("#global_text_box_backcolor").addClass("demo");
		  $("#global_buttons_bck_color").attr("data-control","hue");
		  $("#global_buttons_bck_color").addClass("demo");
		  $("#global_buttons_txt_color").attr("data-control","hue");
		  $("#global_buttons_txt_color").addClass("demo");
		  $("#global_buttons_hover_bck_color").attr("data-control","hue");
		  $("#global_buttons_hover_bck_color").addClass("demo");
		  $("#global_buttons_hover_txt_color").attr("data-control","hue");
		  $("#global_buttons_hover_txt_color").addClass("demo");
		  $("#header_mouse_over_text_color").attr("data-control","hue");
		  $("#header_mouse_over_text_color").addClass("demo");
		  $("#global_text_box_brdr_color").attr("data-control","hue");
		  $("#global_text_box_brdr_color").addClass("demo");
$("#global_anchor_tag_color").attr("data-control","hue");
$("#global_anchor_tag_color").addClass("demo");		  
		  $("#header_border_top").attr("data-control","hue");
		  $("#header_border_top").addClass("demo");
$("#header_top_border_color").attr("data-control","hue");
$("#header_top_border_color").addClass("demo");		  
		  $("#header_active_tab_border_color").attr("data-control","hue");
		  $("#header_active_tab_border_color").addClass("demo");
		  $("#header_quick_create_button_bgcolor").attr("data-control","hue");
		  $("#header_quick_create_button_bgcolor").addClass("demo");
		  $("#header_quick_create_btn_text_color").attr("data-control","hue");
		  $("#header_quick_create_btn_text_color").addClass("demo");
	$("#header_quick_create_dropdown_bgcolor").attr("data-control","hue");
	$("#header_quick_create_dropdown_bgcolor").addClass("demo");
	$("#header_quick_create_drpdwn_text_color").attr("data-control","hue");
	$("#header_quick_create_drpdwn_text_color").addClass("demo");
	$("#header_quick_create_ddown_bgcolor_hvr").attr("data-control","hue");
	$("#header_quick_create_ddown_bgcolor_hvr").addClass("demo");
	$("#header_quick_create_drpdwn_hover_text_color").attr("data-control","hue");
	$("#header_quick_create_drpdwn_hover_text_color").addClass("demo");	
	 
	});
    
    
    
	 
	 
	
	 
 </script>
 <script>
	 
	 
	function frm_js(){
          var _form = document.getElementById('EditView'); 
          _form.action.value='Save'; 
           if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);
           return false;
      }
   $('.primary').prop('onclick', null).off('click');
   $(document).on('submit',function(event){
      event.preventDefault();
      
      $.ajax({
           url : "index.php?module=outr_Outright_Theme_Generator&action=manage_font_family&to_pdf=1", 
           type: "post",
           data: {slg: "check_theme_name",theme_name: $("#name").val(),record_id:'<?php  echo $this->bean->id; ?>'},
           success:function(result){
            //~ alert(result);
            //~ return false;
             if(result=="1"){
				 $("#name").addClass("custom_valida");
				  setTimeout(function () {
                     $('#name').removeClass('custom_valida');
                 }, 2500);
			 }else{
				 frm_js();
			 }
           }
         });
    
   
    });
	 
	 
    $(document).ready( function() {
		$("input[type=submit]").attr('onclick','');
	 
      $('.demo').each( function() {
        $(this).minicolors({
          control: $(this).attr('data-control') || 'hue',
          defaultValue: $(this).attr('data-defaultValue') || '',
          format: $(this).attr('data-format') || 'hex',
          keywords: $(this).attr('data-keywords') || '',
          inline: $(this).attr('data-inline') === 'true',
          letterCase: $(this).attr('data-letterCase') || 'lowercase',
          opacity: $(this).attr('data-opacity'),
          position: $(this).attr('data-position') || 'bottom',
          swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap'
        });
      });
    });
  </script>
 <style>
	 
	 .fname_validation{
		  background: red !important;
	 }
	 .modal-footer {
    padding: 6px;
    text-align: center;
    border-top: 1px solid #e5e5e5;
    /* padding-top: 42px; */
    margin-top: 42px;
}

div.modal-header > h4 {
    font-size: 19px;
    color: #534d64;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 300;
    text-align: center !important;
}
	.hint-icon { background: #f08377;color: #FFF;border-radius: 50%;padding: 2px 2px; }dl {
      margin: 20px 0;
    }
    dt {
      font-size: 120%;
    }
    dd {
      padding: 10px 20px 20px 20px;
    }
    dd:last-child {
      border-bottom: none;
    }
    code {
      color: black;
      border: none;
      background: rgba(128, 128, 128, .1);
    }
    [dir=rtl] code {
      direction: ltr;
    }
    pre {
      background: #f8f8f8;
      border: none;
      color: #333;
      padding: 20px;
    }
    [dir=rtl] pre {
      direction: ltr;
    }
    h2 {
      margin-top: 50px;
    }
    h3 {
      color: #aaa;
    }
    .jumbotron {
      padding: 40px;
    }
    .jumbotron h1 {
      margin-top: 0;
    }
    .jumbotron p:last-child {
      margin-bottom: 0;
    }
    
    input[type=text] {
    background: #d8f5ee;
    padding: 7px 36px!important;
    border: 1px solid #a5e8d6;
    border-radius: 4px;
}

#custom_font_family,#name{
	padding: 7px 7px!important;
}

#global_body_font_fmly{
	width: 88%;
}

.custom_valida{
	     background: red !important;
	  border:1px solid red !important;
}
	 </style>
		<?php				
		parent::display();
	}
 }
 
 ?>
 

 
 
