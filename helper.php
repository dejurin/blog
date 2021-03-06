<?php

function short_text_dot($text, $len = 0) 
{
	$_text = $text;

	if ($len > 0) {
		$_text = mb_substr($text, $len); // Cut ignore text
	}	
	   
	return mb_substr($text, 0, mb_strpos($_text, '.') + $len + 1);
}

$text = preg_replace("/\(([^\)]*)\)/ui", '', $text);
$text = preg_replace("/\[([^\]]*)\]/ui", '', $text);
$text = preg_replace("/\s+/ui", ' ', $text);