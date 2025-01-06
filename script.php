<?php

require 'vendor/autoload.php';  // Include Composer autoload

use phpseclib3\Net\SSH2;

$variable = isset($_GET['var']) ? $_GET['var'] : 'default_value';
	// Create a new SSH connection instance
	$ssh = new SSH2('IP OF THE MC SERV');
	// Authenticate
	if (!$ssh->login('ADMIN USER OF MC SERV', 'SSH PASSWORD')) {
	    exit('Login Failed');
	}

if($variable==0){
	$output = $ssh->exec('cd PATH TO THE MC SERV FOLDER && run.bat');
}

echo $output;

?>


