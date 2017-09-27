<?php
//Inlcude tghe Parser
include_once "Parser.php";

	$urls = array(
	'http://www.google.com', 
	'https://www.google.com',
	'https://www.google.com/', 
	'https://www.facebook.com',
	'http://www.facebook.com'
	);
	//Instantiate
	$parse = new Parser();
	$parse->arrayValuesUrlParser($urls);
	
?>