<?php
//para php < 5.4 conforme requisito da prova, para php >= 5.4 verificar com session_status() == PHP_SESSION_NONE
if(session_id() == ''){ 
	session_start();
	$_SESSION['loggedin'] = true;
	//ou outra checagem de login
}

if ($_SESSION['loggedin'] == true) header("Location: http://www.google.com");