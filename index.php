<?php
    //ini_set('display_errors',0);
error_reporting(error_reporting() & ~E_NOTICE);
	require_once 'define.php';
	function __autoload($clasName){
		$fileName = PATH_LIBRARY . "{$clasName}.php";
		if(file_exists($fileName))
		require_once $fileName;
	}

	Session::init();
	
	$bootstrap = new Bootstrap();
	$bootstrap->init();
?>