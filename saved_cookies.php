<?php 
	if (isset($_COOKIE['nom'])) {
		header('Location: home.html');
	}else{
		header('Location: logs.php');
	}
?>