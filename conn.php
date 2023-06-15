<?php

$database= new mysqli("localhost","root","","lux");
if ($database->connect_error){
    die("Connection failed:  ".$database->connect_error);
}

error_reporting(0);
?>