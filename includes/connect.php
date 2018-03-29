<?php

require_once('config.php');
//create connection
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
//test connection
if (!$con)
{
die("Error connecting to server!:".mysqli_error($con));
}
?>