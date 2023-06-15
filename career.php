<?php

include ('conn.php');

session_start();
 

$username=$_GET['username'];
$id=$_GET['id'];
$result= $database->query("select * from students where id=$id and username=$username");
 
for ($y=0;$y<$result->num_rows;$y++){
    $row00=$result->fetch_assoc();
    $username=$row00['username'];
    $password=$row00['password'];
    $id=$row00['id'];
    $college=$row00['college'];
    $level=$row00['level'];
    $departement=$row00['departement'];
    $entry_status=$row00['entry_status'];
     
    

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxor University</title>
    <!-- owl-carousel library -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
     <!-- owl-carousel library -->

     <!-- bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- bootstrap -->

     <!-- swaper library -->
     <link rel="stylesheet" href="css/swiper-bundle.min.css">
     <!-- swaper library -->
     <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/career.css">
     <link rel="stylesheet" href="css/HeaderFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<style>


.vegetable .title{
    color: rgb(46, 46, 242);
    display: flex;
    justify-content: center;
     
} 
 
.vegetable .content{
margin-top: 30px;
}
.vegetable-card{
    background-color: #FFF;
    border: 1px solid rgb(25, 88, 109);
    min-height: 14em;
    width: 17em;
    overflow: hidden;
    border-radius: 10px;
margin:20px;
transition: 0.7s ease;
}
.vegetable-card:hover{
    transform: scale(1.1);
}
.vegetable-card:hover .vegetable-image{
    opacity: 0.9;
}
.vegetable-image img{
    width: 100%;
    height: 14em;
}
.vegetable-info{
    padding: 1em;
}
.vegetable-category{
    font-size: 0.8em;
    color: #000;
    text-align:center;
    
 font-weight: bold;
}
.vegetable-title{
display: flex;
justify-content: space-between;
font-weight: 800;
text-transform: uppercase;
margin-top: 10px;
}
.content{
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    padding-top:-10%px ;
}


</style>
<body>
    <!-- start header -->

    <?php include "HeaderFooter/Header.php"; ?>

    <style>
        .header-minu .main-minue-links .nav-item .careeer{
            color: black;
        }
    </style>

    <!-- end header -->
    

<div class="content">
   <?php   
$list11 = $database->query( "select * from career inner join students on students.id=career.s_id ");

   
for ($y=0;$y<$list11->num_rows;$y++){
    $row00=$list11->fetch_assoc();
    $id=$row00["s_id"];
    $cv=$row00["cv"];
    $username=$row00["username"];
    

   ?>
     <div class="vegetable-card">
     <a href="./files/<?php echo  $cv  ?>"target="_blank">
     
     <div class="vegetable-image"> <img src="cv.jpg" width="200px" hight="200px"></div>
         <div class="vegetable-info"> 
              <p  class="vegetable-category"><?php echo $username ?></p>
               </div>
        
         
         </div>
     </a>

 <?php
}
?>
</div>
 
 
 
 

 
      
       
           
    
    <!-- start content -->
    

    <!-- start footer -->
    <?php include "HeaderFooter/Footer.php"; ?>
    <!-- end footer -->
   

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>