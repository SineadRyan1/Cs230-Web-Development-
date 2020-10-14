<?php

$dbServername= "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Sineaddb";

$conn = mysqli_connect($dbServername,$Username,$dbPassword,$dbName);
 
 if (!connection){
	 die ("Not connected".mysqli_connect_error());
 }