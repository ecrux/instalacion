<?PHP
	if (function_exists('query()')) 
	{
		//mysqli está instalado
		echo "Si";
	}else{
		echo "No";
	}

	echo "<br><br>";

	//Esta otra función se encontró en http://stackoverflow.com/questions/16254413/php-5-installed-also-mysqli-is-installed-but-not-compiling-in-mac-lion
	echo "extension_loaded mysqli ".extension_loaded('mysqli');

	echo "<br><br>";

	echo phpinfo();
?>
