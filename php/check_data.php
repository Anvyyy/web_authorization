<?php

//исправление всевозможных запрещенных символов
function check($value){
    $value = strval($value);
    $value = stripslashes($value);
    $value = str_ireplace(array("\0", "\a", "\b", "\v", "\e", "\f"), ' ', $value);
    $value = htmlspecialchars_decode($value, ENT_QUOTES);	
    
    $value = str_ireplace(array("\t"), ' ', $value);			
		$value = preg_replace(array(
			'@<\!--.*?-->@s',
			'@\/\*(.*?)\*\/@sm',
			'@<([\?\%]) .*? \\1>@sx',
			'@<\!\[CDATA\[.*?\]\]>@sx',
			'@<\!\[.*?\]>.*?<\!\[.*?\]>@sx',	
			'@\s--.*@',
			'@<script[^>]*?>.*?</script>@si',
			'@<style[^>]*?>.*?</style>@siU', 
			'@<[\/\!]*?[^<>]*?>@si',			
		), ' ', $value);		
		$value = strip_tags($value); 		
		$value = str_replace(array('/*', '*/', ' --', '#__'), ' ', $value); 
		$value = mb_ereg_replace('[ ]+', ' ', $value);			
		$value = trim($value);
		$value = htmlspecialchars($value, ENT_QUOTES);	

        return $value;
}