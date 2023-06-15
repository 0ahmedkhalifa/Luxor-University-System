<?php
session_start();
$_SESSION['id']="";
$_SESSION['username']="";
include "conn.php";
echo"this is test";
 

if($_POST){
   
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $college=$_POST['sel'];
     
   
    $error='<label for="promter" class="form-label"></label>';

    $result= $database->query("select * from students where id='$id' and username='$username'");
     
       
            $checker = $database->query("select * from students where username='$username' and password='$password'");
            if ($checker->num_rows==1){


                //   Patient dashbord
                $_SESSION['id']=$id; 
                $_SESSION['username']=$username; 
                
                header('location: result.php?&id='.$id.'&username='.$username.'');

            }else{
                $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
            }

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
     <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
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
                    <h5>نظام إدارة جامعة الأقصر الإلكتروني</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    
    <div class="login-content"  >
        <div class= "container">
            <div class="seccond-container ">
                <div class="row justify-content-between">
                    <div class="image col-5">
                        <img src="images/loginback.jpg" alt="login">
                    </div>
                    <div class="form col-6">
                    <form action="" method="POST" >
                    
                    <h1>تسجيل الدخول</h1>
                        <div class="mb-3" >
                            <label for="selc">الكلية</label>
                            <select class="form-select mt-3" id="selc" name="sel"  aria-label="Default select example" >
                                <option value="0">إختر</option>
                                <option value="كلية الحاسبات والمعلومات">كلية الحاسبات والمعلومات</option>
                                <option value="كلية الألسن">كلية الألسن</option>
                                <option value="كلية الفنون الجميلة">كلية الفنون الجميلة</option>
                                <option value="كلية الطب">كلية الطب</option>
                                <option value="كلية سياحة و فنادق">كلية سياحة و فنادق</option>
                                <option value="كلية الاثار">كلية الاثار</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="user">  اسم الطالب</label>
                            <input type="text"  name="username" class="form-control mt-3" id="user" placeholder="ادخل اسم الطالب">
                        </div>
                        <div class="mb-3" >
                            <label for="user">كود الطالب</label>
                            <input type="number"  name="id" class="form-control mt-3" id="user" placeholder="ادخل الكود">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">كلمة المرور</label>
                            <input type="password" name="password"class="form-control" id="pwd" placeholder=" ادخل كلمة المرور" name="pswd">
                          </div>
                          <div class="mt-5"> 
                            <input type="submit" value="تسجيل الدخول" class="btn btn-primary"> 
                          </div>  
</form>
                        </div>
                </div>
            </div>
        </div>
    </div>
   


   

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
</body>
</html>