<?php

include ('conn.php');

session_start();

if(isset($_SESSION["username"])){
    if(($_SESSION["username"])=="" or $_SESSION['id']='0'){
        header("location: ../careerlog.php");
    }

}else{
    header("location: ../login.php");
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
     <link rel="stylesheet" href="css/FeesPayment.css">
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
    
   <!-- start content -->

    <div class="pay-operation">
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
?>  




            <div class="student-data">
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
            </div>
            <div class="student-pay" >
                    <div class="row">
                        <div class="col-md-3 mb-5">
                            تاريخ الدفع
                        </div>
                        <div class="col-md-9" id="date">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-5">
                        اجمالى القيمة المدفوعه
                        </div>
                        <div class="col-md-9">
                            <input type="number" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            طريقة الدفع
                        </div>
                        <div class="col-md-9">
                            <a href="https://www.paypal.com/eg/welcome/signup/#/mobile_conf">
                            <button class="btn btn-secondary">Pay with PayPal</button>
                            </a>
                        </div>
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
    <script src="js/FeesPayment.js"></script>
</body>
</html>