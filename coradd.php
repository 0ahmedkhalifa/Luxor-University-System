
<?php

include ("conn.php");

if($_GET){
$id=$_GET['id'];
$username=$_GET['username'];

$c_code=$_GET['c_code'];
$result= $database->query("insert into register(s_id,c_code) values('$id','$c_code')");     
        
header("location: enrollDellcourse.php?&id='.$id.'&username='.$username.'");
} 
    
    
    ?>
