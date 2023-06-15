
<?php

include ("conn.php");
if($_GET){
$id=$_GET['id'];
$username=$_GET['username'];

$c_code=$_GET['c_code'];
$result= $database->query("delete from register where s_id=$id and c_code=$c_code");

header('location: enrollDellCourse.php?&id='.$id.'&username='.$username.'');
} 
    
    
    ?>
