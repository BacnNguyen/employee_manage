<?php 
	session_start();
	session_unset();
	session_destroy();
	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' .'GDdangnhap.php'. '">';
 ?>