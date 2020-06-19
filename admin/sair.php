<?php 
	if (isset($_REQUEST['sair'])) {
		session_destroy();
		session_unset('usuario');
		session_unset('senha');
		header("Location: ../login.php");
	}
 ?>