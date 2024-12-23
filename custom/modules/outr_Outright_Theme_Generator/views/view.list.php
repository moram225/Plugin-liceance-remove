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
 require_once("include/MVC/View/views/view.list.php");
 
 class outr_Outright_Theme_GeneratorViewList extends ViewList
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
		$ors_security = new outright_security(false,'outright_theme_manager');
		if($ors_security->prod_bean->verification_status !='verified'){
			echo '<a href="index.php?module=outr_outr_licence&action=index">Verify your Theme style builder package first</a>';
		}
		if($ors_security->prod_bean->illegal_use){
			echo '<a href="index.php?module=outr_outr_licence&action=index">Verify your Theme style builder package first</a>';
		}
		
		?>
		<script>
   
    $( document ).ready(function() {
	  $("#actionMenuSidebar").html('<ul><li class="actionmenulinks" role="presentation"><a href="index.php?module=outr_Outright_Theme_Generator&action=EditView&return_module=outr_Outright_Theme_Generator&return_action=DetailView" data-action-name="Add"><div class="side-bar-action-icon"><span class="suitepicon suitepicon-action-add"></span></div><div class="actionmenulink">Create Outright Theme Generator</div></a></li><li class="actionmenulinks" role="presentation"><a href="index.php?module=outr_Outright_Theme_Generator&action=index&return_module=outr_Outright_Theme_Generator&return_action=DetailView" data-action-name="View"><div class="side-bar-action-icon"><span class="suitepicon suitepicon-action-view"></span></div><div class="actionmenulink">View Outright Theme Generator</div></a></li></ul>');
	  
	   $(".module-title-text").html('Outright Theme Generator');
	   
	  });
 
 </script>
 <style>
#delete_listview_top {
  visibility : hidden;
  height : 0px;
  width : 0px;
  margin : 0px;
  padding : 0px;
  overflow : hidden;
 }
 #delete_listview_bottom {
  visibility : hidden;
  height : 0px;
  width : 0px;
  margin : 0px;
  padding : 0px;
  overflow : hidden;
 }
 </style>
		<?php				
		
		parent::display();
		
	}
 }
 
 ?>
 
 
 
