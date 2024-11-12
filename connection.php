<?php

$dbhost = "DB_ENDPOINT";
$dbuser = "DB_USER";
$dbpass = "DB_PASS";
$dbname = "DB_NAME";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
