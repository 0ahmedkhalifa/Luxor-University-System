<?php

include ('conn.php');

session_start();

if(isset($_SESSION["name"])){
    if(($_SESSION["name"])=="" or $_SESSION['email']=''){
        header("location: ../professorcourses.php");
    }

}else{
    header("location: ../professorLogin.php");
}

$name=$_GET['name'];
$email=$_GET['email'];
 
$result= $database->query("select * from members where email='$email' and name='$name'");
 
for ($y=0;$y<$result->num_rows;$y++){
    $row00=$result->fetch_assoc();
    $email=$row00['email'];
    $name=$row00['name'];
    $phone=$row00['phone'];
    $college=$row00['college'];
    $degree=$row00['degree'];
    $birth_date=$row00['birth_date']; 
    

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
     <link rel="stylesheet" href="css/professorcourses.css">
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

    <div class="enroll-content">
        <div class="con">
        <?php
                         
             $result= $database->query("select * from members where email='$email' and name='$name'");
              
             for ($y=0;$y<$result->num_rows;$y++){
                 $row00=$result->fetch_assoc();
                 $email=$row00['email'];
                 $name=$row00['name'];
                 $phone=$row00['phone'];
                 $college=$row00['college'];
                 $degree=$row00['degree'];
                 $birth_date=$row00['birth_date']; 
                 
             
             }
             echo '
            <div class="student-data">
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">الأسم </label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value="'.$name.'">
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">الكلية</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value=" '.$college.'">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">الدرجة الوظيفية</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value="'.$degree.' ">
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">رقم الهاتف</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value="'.$phone.'">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">تاريخ الميلاد</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value="'.$birth_date.'">
                        </div>
                        </div>
                        ';
                        ?>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="row">
                            <div class="col-3">
                                <label for="stname" class="col-form-label">البريد الإلكتروني</label>
                            </div>
                        <div class="col-9">
                          <input type="text" readonly class="form-control-plaintext" id="stname" value="<?php echo $email ?>" >
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-courses">
                <table class="table table-striped">
                    <thead>
                      <tr class="p-0">
                        <th>رمز المقرر</th>
                        <th>اسم المقرر</th>
                        <th>المستوي</th>
                        <th>اليوم</th>
                        <th>القاعة</th>
                        <th>الساعة</th>
                        <th>ساعة معتمدة</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>CS431</td>
                        <td>الحسابات المتوازية</td>
                        <td>الرابع</td>
                        <td>الاحد</td>
                        <td>1</td>
                        <td>1:10</td>
                        <td>3.00</td>
                      </tr>
                      <tr>
                        <td>IT432</td>
                        <td>برمجة الشبكات</td>
                        <td>الرابع</td>
                        <td>الثلاثاء</td>
                        <td>2</td>
                        <td>3:12</td>
                        <td>3.00</td>
                      </tr>
                      <tr>
                        <td>IT433</td>
                        <td>الأدلة الشرعية في الشبكات</td>
                        <td>الرابع</td>
                        <td>الاثنين</td>
                        <td>4</td>
                        <td>12:9</td>
                        <td>3.00</td>
                      </tr>
                      <tr>
                        <td>IT451</td>
                        <td>تحليل وتصميم الشبكات</td>
                        <td>الرابع</td>
                        <td>الخميس</td>
                        <td>1</td>
                        <td>1:10</td>
                        <td>3.00</td>
                      </tr>
                      <tr>
                        <td>IT452</td>
                        <td>الأنظمة المدمجة الشبكية</td>
                        <td>الرابع</td>
                        <td>الاربعاء</td>
                        <td>4</td>
                        <td>2:11</td>
                        <td>3.00</td>
                      </tr>
                    </tbody>
                </table>
               
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
</body>
</html>