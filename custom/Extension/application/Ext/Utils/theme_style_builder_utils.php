<?php

function global_font_size_list(){
	
	$fon_size_array      = array(""=>"");
	$endin_font_size     = 60;
	for($start_font_size = 9 ; $start_font_size <= $endin_font_size ; $start_font_size ++ ){
		$fon_size_array[$start_font_size."px"] =$start_font_size."px";
	}
	return $fon_size_array;
}
function global_text_box_brdr_padding(){
	
	$text_box_brdr_padding_array           = array(""=>"");
	$ens_text_box_brdr_padding__size       = 60;
	for($start_text_box_brdr_padding__size = 1 ; $start_text_box_brdr_padding__size <= $ens_text_box_brdr_padding__size ; $start_text_box_brdr_padding__size ++ ){
		$text_box_brdr_padding_array[$start_text_box_brdr_padding__size."px"] =$start_text_box_brdr_padding__size."px";
	}
	return $text_box_brdr_padding_array;
}


function get_font_family_list(){
	$font_family_l = array(''=>'','"Times New Roman", Times, serif'=>'"Times New Roman", Times, serif','Georgia, serif'=>'Georgia, serif','"Palatino Linotype", "Book Antiqua", Palatino, serif'=>'"Palatino Linotype", "Book Antiqua", Palatino, serif','Arial, Helvetica, sans-serif'=>'Arial, Helvetica, sans-serif','"Arial Black", Gadget, sans-serif'=>'"Arial Black", Gadget, sans-serif','"Comic Sans MS", cursive, sans-serif'=>'"Comic Sans MS", cursive, sans-serif','Impact, Charcoal, sans-serif'=>'Impact, Charcoal, sans-serif','"Lucida Sans Unicode", "Lucida Grande", sans-serif'=>'"Lucida Sans Unicode", "Lucida Grande", sans-serif','Tahoma, Geneva, sans-serif'=>'Tahoma, Geneva, sans-serif','"Trebuchet MS", Helvetica, sans-serif'=>'"Trebuchet MS", Helvetica, sans-serif','Verdana, Geneva, sans-serif'=>'Verdana, Geneva, sans-serif','"Courier New", Courier, monospace'=>'"Courier New", Courier, monospace','"Lucida Console", Monaco, monospace'=>'"Lucida Console", Monaco, monospace','Poppins-Regular'=>'Poppins-Regular','Roboto-Regular'=>'Roboto-Regular');
	
	
	return $font_family_l ;
}
