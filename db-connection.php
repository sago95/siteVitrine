<?php
	$conn = new mysqli("localhost", "root", "", "numeric_history.db");
	
	if(!$conn){
		die("Impossible de se connecter à la base de donnée !");
	}
?>