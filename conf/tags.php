<?php
	#Defini��es do Sistema
	date_default_timezone_set('America/Sao_Paulo');
	define('UrlPadrao' , "http://localhost/sistema_base/");
	
	#Defini��es do Banco de Dados
	define('DB_Host' , "db4free.net");
	define('DB_Database' , "colcom");
	define('DB_User' , "colcom");
	define('DB_Pass' , "s1stem@");
	
	#Defini��es FPDF
	define('DPI', 96);
	define('MM_IN_INCH', 25.4);
	define('A4_HEIGHT', 210);
	define('A4_WIDTH', 297);
	// tweak these values (in pixels)
	define('MAX_WIDTH', 500);
	define('MAX_HEIGHT', 500);
?>