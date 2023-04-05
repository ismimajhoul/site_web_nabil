<?php

$servername = "mysql-martinez94.alwaysdata.net";
$username = "307660_root";
$password = "S&-k2C@TfT4B8#s";
$dbname = "martinez94_milan_lr";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection failed!";
}