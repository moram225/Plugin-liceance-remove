<?php
/*****************************************
 * 
 *      @description  : Check givien number is phone number or not 
 *      @Author       : Outright 
 *      Date          :  
 *      @param       int--->$number : Phone number to check  ;
 *      @return  int|false ---> $num :  Return's the integer on success or false on fail      
 *      @since 1.0.0
 * 
 * ***************************************/

function outright_check_is_phone_number($number){
		$extension = '';
		$number = str_replace('(','',$number);
		$number = str_replace(')','',$number);
		$number = str_replace('-','',$number);
		$number = str_replace(' ','',$number);
		$length = strlen($number);
		if($length == 13){
				$extension = substr($number,0,2);
				$number = str_replace($extension,'',$number);
			}
		if(!is_numeric($number)){
				return false;
			}
		$index = 0;
		for($i=0;$i < 10;$i++){
			if($i == 0){
			   $num[$index] = '(';
			  ++ $index;
			}
			$num[$index] = $number[$i];
			++ $index;
				
			if($i == 2){
			   $num[$index] = ') ';
			   ++ $index;
			}
			else if($i == 5){
				$num[$index] = '-';
				++ $index;
			}
		}
		$num = implode('',$num);
		$num = $extension.$num;
		return $num?$num:false;
}