<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxor University</title>
     <!-- bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- bootstrap -->
     <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/UniversityCity.css">
     <link rel="stylesheet" href="css/HeaderFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>
    <!-- start header -->

    <?php include "HeaderFooter/Header.php"; ?>

    <!-- end header -->
    
    <!-- start address-bar -->
    <div class="address-bar">
        <div class="overlay"></div>
        <h1>المدينة الجامعية</h1>
    </div>
    <!-- end address-bar -->

    <!-- start content -->
   <div class="content">
        <div class="container">
            <div class="text">
                <div class="con">
                    <h3>الإقامة في جامعة الأقصر</h3>
                    <p>
                        الإقامة في جامعة الأقصر
                        توفر جامعة الأقصر عددًا من المقار كمدن جامعية
                        لاستضافة الطلاب والطالبات الوافدين والذين يقطنون في 
                        محافظات بعيدة، ولكن تضع الجامعة عدة شروط يجب توافرها
                        لالتحاق الطالب بالمدينة الجامعية. وتوفرايضا خدمات
                        مختلفة للطلاب بدءا من السكن مرورا بالخدمات الغذائية
                        والرعاية الصحية والنفسية وصولا للخدمات الترفيهية
                        ، بما يسمح بتوفير جو ملائم للدراسة. وتعمل الجامعة
                        كل عام على صيانة المدن الجامعية ورفع مستوى الخدمات
                        المقدمة فيها بما يتلاءم مع احتياجات الطلاب ومتطلباتهم.
                    </p>
                </div>
            </div>
            <div class="image">
                <div class="con">
                    <div class="row">
                        <div class="col-md-4 service"><a href="UniversityCity1.php"><span>المستندات المطلوبة</span> <img src="images/universityCity1.png" alt=""></a></div>
                        <div class="col-md-4 service"><a href="UniversityCity2.php"><span>تخصصات الإدارة</span><img src="images/universityCity2.jpg" alt=""></a></div>
                        <div class="col-md-4 service"><a href="UniversityCity3.php"><span style="text-align: center;">شروط الإقامه بالمدينة الجامعية</span><img src="images/universityCity3.jpg" alt=""></a></div>
                    </div>
                </div>

                
            </div>
        </div>
   </div>
    <!-- start content -->


    <!-- start footer -->
    <?php include "HeaderFooter/Footer.php"; ?>
    <!-- end footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>