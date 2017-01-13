<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on'); 
	
	require 'tauler.php';

	$table=new Tauler(8, 8, 1);


	
	$table->show();