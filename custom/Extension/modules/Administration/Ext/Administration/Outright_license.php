<?php

$links = array();

$bean_name_label = translate("LBL_LIST_FORM_TITLE", "outr_outr_licence");

$links["outr_outr_licence"]["link1"] = array(
														  "Releases",
														  "$bean_name_label",
														 "$bean_name_label",
														"./index.php?module=outr_outr_licence&action=index",
													);
$links["outr_outr_licence"]["link2"] = array(
														  "Releases",
														  "Test Utils",
														 "Test Utils",
														"./index.php?module=outr_outr_licence&action=test_utils",
													);
$admin_group_header []= array(
								"Outright License Keys",
								"",
								false,
								$links,
								"This section contains Outright"
							);