<?php
include ("conn.php");
session_start();

if(isset($_SESSION["username"])){
    if(($_SESSION["username"])=="" or $_SESSION['id']='0'){
        header("location: ../logintab2.php");
    }

}else{
    header("location: ../logintab2.php");
}

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
<html >
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
     <link rel="stylesheet" href="css/enrollDellCourse.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    
     <link rel="stylesheet" href="css/enrollDellCourse.css">
     
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
.enroll-content .con .yah{
    width: 97%;
    margin: 20px;
    height: 55vh;
    padding: 40px 0px;
    border: 1px solid #777;
    position: relative;
}
.enroll-content .con .yah::before{
    content: "جدول المقررات";
    position: absolute;
    top: -10px;
    left: 50%;
    font-weight: bold;
    padding: 3px 20px;
    background-color: white; 
}
.enroll-content .yah table thead{
    background-color: #c4c1c1;
}
.enroll-content .yah table td{
    padding: 1px 10px 1px 0;
    width: fit-content !important;  
}
.enroll-content .yah .clic{
    display: flex;
    justify-content: center;
    margin-top: 60px;
}
.enroll-content .yah .clic .btn{
    margin-left: 30px;
}




</style>
<body>
    <!-- start header -->
    <div class="full-header">
        <div class="header-welcome">
            <div class="container">
                <div class="welcome">
                    <img src="images/Coat_of_arms_of_Egypt_(Official).svg" alt="Egypt">
                    <i class="fa fa-bank"></i>
                    <span>أهلاً بك في جامعة الأقصر</span>
                </div>
                <div class="university-links">
                    <ul>
                        <li><a href="https://www.facebook.com/LuxorUniversityOfficial/"><i class="fa-brands fa-facebook-f"></i></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCGNqxgRk-zB0k-JZ77PthQA"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="https://ar.wikipedia.org/wiki/%D8%AC%D8%A7%D9%85%D8%B9%D8%A9_%D8%A7%D9%84%D8%A3%D9%82%D8%B5%D8%B1"><i class="fa-brands fa-wikipedia-w"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-logo">
            <div class="container">
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="text">
                    <h5 class="yy">نظام إدارة جامعة الأقصر الإلكتروني</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    
   <!-- start content -->

    <div class="enroll-content">
          <div class="con">
          <?php
             
$result= $database->query("select * from students where id='$id' and username='$username'");
 
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
?>          <div class="student-data">
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">اسم الطالب</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value='<?php echo $username ?>'>
                         
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">الكلية</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value=' <?php echo $college?>'>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">تخصص الطالب</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value=' <?php echo $departement?>'>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">حالة القيد</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value=' <?php echo $entry_status?>'>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">المستوى</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value=' <?php echo $level?>'>
                        </div>
                        </div>
                    </div> 
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">كود الطالب</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" name="id" id="stname" value=' <?php echo $id?>'>
                        </div>
                        </div>
                    </div>
                </div>
            
            </div>           <div class="yah">
<?php
            if($level==4&$departement="CS")
 {
    
   echo '
            <div class="vegetable-card">
     <a href="./tables/mat4cs.pdf"target="_blank">
     
     <div class="vegetable-image"> <img src="cv.jpg" width="200px" hight="200px"></div>
         <div class="vegetable-info"> 
              <p  class="vegetable-category">level  '.$level.'</p>
               </div>
        
         
         </div>
     </a>
 ';
 }
 if($level==4&$departement="IT")
 {
    
   echo '
            <div class="vegetable-card">
     <a href="./tables/mat4it.pdf"target="_blank">
     
     <div class="vegetable-image"> <img src="cv.jpg" width="200px" hight="200px"></div>
         <div class="vegetable-info"> 
              <p  class="vegetable-category">level  '.$level.'</p>
               </div>
        
         
         </div>
     </a>
 ';
 }
 elseif($level==3&$departement="IT")
 {
    
   echo '
            <div class="vegetable-card">
     <a href="./tables/mat3it.pdf"target="_blank">
     
     <div class="vegetable-image"> <img src="cv.jpg" width="200px" hight="200px"></div>
         <div class="vegetable-info"> 
              <p  class="vegetable-category">level  '.$level.'</p>
               </div>
        
         
         </div>
     </a>
 ';
 }
 elseif($level==3&$departement="CS")
 {
    
   echo '
            <div class="vegetable-card">
     <a href="./tables/mat3cs.pdf"target="_blank">
     
     <div class="vegetable-image"> <img src="cv.jpg" width="200px" hight="200px"></div>
         <div class="vegetable-info"> 
              <p  class="vegetable-category">level  '.$level.'</p>
               </div>
        
         
         </div>
     </a>
 ';
 }
 elseif($level==2)
 {
    
   echo '
            <div class="vegetable-card">
     <a href="./tables/mat2.pdf"target="_blank">
     
     <div class="vegetable-image"> <img src="cv.jpg" width="200px" hight="200px"></div>
         <div class="vegetable-info"> 
              <p  class="vegetable-category">level  '.$level.'</p>
               </div>
        
         
         </div>
     </a>
 ';
 }
 elseif($level==1)
 {
    
   echo '
            <div class="vegetable-card">
     <a href="./tables/mat1.pdf"target="_blank">
     
     <div class="vegetable-image"> <img src="cv.jpg" width="200px" hight="200px"></div>
         <div class="vegetable-info"> 
              <p  class="vegetable-category">level  '.$level.'</p>
               </div>
        
         
         </div>
     </a>
 ';
 }
 ?>
 
</div>
 
</div>
</div>
    </div>




   <!-- end content -->

    <!-- start footer -->
    <div class="copy-right">
        <p>جميع الحقوق محفوظة جامعة الأقصر <span>&COPY;</span> 2023</p>
    </div>
    <!-- end footer -->
   

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <style>

.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    opacity: 1;
  }
  .overlay:target {
    visibility: visible;
    opacity: 1;
    
  }
  

.popup {
    margin: 40px auto;
    padding: 30px;
    margin-top:15%;
    background: #fff;
    border-radius: 5px;
    width: 25%;
    position: relative;
    transition: all 5s ease-in-out;
   
  }
  
  
  .popup h2 {
    margin-top: 0;
    color: #333;
  }
  .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup .close:hover {
    color: var(--primarycolorhover);
  }
  .popup .content {
    max-height: 30%;
    overflow: auto;
  }



</style>


  
    <?php 
  $cour=$_POST['check'];
        if(isset($_POST['rem']))
       {
        echo '
        <div id="popup1" class="overlay">
                <div class="popup">
                <center>
                    <h2>Are you sure?</h2>
                    <a class="close" href="enrollDellcourse.php?id='.$id.'&username='.$username.'">&times;</a>
                    <div class="content">
                        You want to delete Your course <br>('.$cour.').
                        
                    </div>
                    <div style="display: flex;justify-content: center;">
                    <a href="cordel.php?id='.$id.'&c_code='.$cour.'&username='.$username.'" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"<font class="tn-in-text">&nbsp;Yes&nbsp;</font></button></a>&nbsp;&nbsp;&nbsp;
                    <a href="enrollDellCourse.php?id='.$id.'&username='.$username.'" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"><font class="tn-in-text">&nbsp;&nbsp;No&nbsp;&nbsp;</font></button></a>

                    </div>
                </center>
        </div>
        </div>
        ';
       }
        elseif(isset($_POST['add']))
{
   

    echo '
    <div id="popup1" class="overlay">
            <div class="popup">
            <center>
                <h2>Are you sure?</h2>
                <a class="close" href="enrollDellcourse.php?id='.$id.'&username='.$username.'">&times;</a>
                <div class="content">
                    You want to add this course <br>('.$cour.').
                    
                </div>
                <div style="display: flex;justify-content: center;">
                <a href="coradd.php?id='.$id.'&c_code='.$cour.'&username='.$username.'" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"<font class="tn-in-text">&nbsp;Yes&nbsp;</font></button></a>&nbsp;&nbsp;&nbsp;
                <a href="enrollDellCourse.php?id='.$id.'&username='.$username.'" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"><font class="tn-in-text">&nbsp;&nbsp;No&nbsp;&nbsp;</font></button></a>

                </div>
            </center>
    </div>
    </div>
    ';
}
    

?>

</body>
</html>