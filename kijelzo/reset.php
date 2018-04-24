<?php
	if (session_status() == PHP_SESSION_NONE) {
 			session_start();
		}
	if(isset($_SESSION['bal'])) $_SESSION['bal']=0;
	if(isset($_SESSION['jobb'])){
		$_SESSION['jobb']=0;
		echo 'reseted';	
	}
?>