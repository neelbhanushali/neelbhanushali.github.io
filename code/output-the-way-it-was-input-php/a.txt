<?php 
	function output_the_way_it_is_input($str) {
		//replace white spaces
		$str = str_replace(' ', '&nbsp;', $str);
		//replace backslashes
		$str = str_replace("\\", '&bsol;', $str);
		//replace new lines
		$str = str_replace(["\r\n", "\r", "\n"], '<br />', $str);
		//htmlentities
		$str = htmlentities($str);
		//replace &amp; (the html entity for &) with &
		$str = str_replace('&amp;', '&', $str);
		//replace &lt;br /&gt; to <br /> to actually output line breaks
		$str = str_replace('&lt;br /&gt;', '<br />', $str);
		return $str;
	}
?>