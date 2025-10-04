<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'crudoperation';

$con = new mysqli($serverName, $userName, $password, $dbName);

if (!$con) {
    
    die(mysqli_error($con));

} 

?>