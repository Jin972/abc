<?php

define('DB_SERVER', 'ec2-52-44-55-63.compute-1.amazonaws.com');
define('DB_USERNAME', 'hwufosnkqdzvla');
define('DB_PASSWORD', 'c66d7b083a4cd248e2f3f7e6c39f01a981196cda5c4a8a44ea62c2ce0e3db931');
define('DB_NAME', 'dcskiuajmgtmn8');

/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
